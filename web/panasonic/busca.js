//
// Copyright (C) 2013 - Fundação Padre Anchieta - All Rights Reserved.
// 

add_package_load_path("common_env", "_pkg_common_env.js");
add_package_load_path("pkg_usb_keyboard", "_pkg_usb_keyboard.js");
add_package_load_path("pkg_keyboard", "_pkg_keyboard.js");
require("common_env");

extend = function(destination, source) {
  for (var property in source)
    destination[property] = source[property];
};

COLOR_KEY = common_env.get_color_key();
lang = common_env.get_lang();
ureg = common_env.ureg;

prepare_package("pkg_keyboard");
prepare_package("pkg_usb_keyboard");

//FUNÇÕES PADRÕES DO CURSOR
common_key = {};
common_key.set_cursor = function(sobj, cobj){
  var old = sobj.cursor;
  if (old == cobj)
    return;
  if (old) {
    if (old.leave_focus)
      old.leave_focus (old);
    old.in_cursor = false;
    old.toggle_cursor = false;
  }
  if (cobj) {
    if (cobj.enter_focus)
      cobj.enter_focus (cobj);
    cobj.in_cursor = true;
  }
  sobj.cursor = cobj;
};

//FUNÇÃO DE ANIMAÇÃO COM EFEITO DE TRANSIÇÃO
var animation_methods = {
  effect : function(obj, count) {
    if (count == this.COUNT) {
      delete_timer(obj);
      obj.translate[0] = obj.dst_x;
      obj.translate[1] = obj.dst_y;
      obj.translate[2] = obj.dst_z;
      if (obj.hook) obj.hook();
    } else {
      obj.translate[0] += (obj.dst_x - obj.translate[0])/2;
      obj.translate[1] += (obj.dst_y - obj.translate[1])/2;
      obj.translate[2] += (obj.dst_z - obj.translate[2])/2;
    }
    force_redraw();
  },
  move : function(param) {
    param = param || {};
    this.hook = param.hook || null;

    this._pos = 0;
    this.COUNT = 20;

    if (param.from_translate) {
      this.visible_p = false;
      this.translate[0] = param.from_translate[0];
      this.translate[1] = param.from_translate[1];
      this.translate[2] = param.from_translate[2];
      this.visible_p = true;
    } else {
      this.from_translate = [0,0,0];
      this.from_translate[0] = this.translate[0];
      this.from_translate[1] = this.translate[1];
      this.from_translate[2] = this.translate[2];
    }

    extend(this, param);

    this.dst_x = param.to_translate[0];
    this.dst_y = param.to_translate[1];
    this.dst_z = param.to_translate[2];

    delete_timer(this);
    append_timer(this, 50, param.effect || this.effect);
  },
};
var timer_manager = {};
timer_manager.start = function() {
  delete_timer(this);
  append_timer(this, 100, this.proc);
};
timer_manager.proc = function(obj, count) {
  video_player.update_pos();
};
timer_manager.stop = function() {
  delete_timer(this);
};

var enable_keyhook = false; 

var titulo_busca = new gtext({width: 400, text: "BUSCA DE VÍDEOS", color:[255,150,0,255], translate: [-50,430,0.4], font_size: 36 });
var texto_inicial = new gtext({width: 800, text: "Utilize o teclado ao lado para realizar a busca de videos!", color:[255,255,255,255], translate: [320,-50,0.4], font_size: 33 });
var texto_busca = new gtext({width: 950, text: "", color:[255,255,255,255], translate: [220,350,0.4], });
var logo = new gimage({width: 175, height: 156, translate: [-775,380,0],   src: "imagens/logotipo.png"});
var video_transparencia = new gbox({width: 1980, height: 1080, translate: [0,0,-1], color: [0,0,0, 210]});

//FOOTER DA APLICAÇÃO
var footer = new container({});
footer.translate = [0,0,0.2]
footer.components = [
  new gbox  ({translate: [215, -480, 0],width: 30,height: 30,color: [242,207,53,255]}),
  new gtext ({translate: [350, -480, 0],width: 230,text: "Como Funciona",color: [255, 255, 255, 255],align: LEFT}),
  new gimage({translate: [490, -480, 0],width: 60,height: 60, src: "imagens/icone-navegar.png"}),
  new gtext ({translate: [580, -480, 0],width: 120, text: "Navegar",color: [255, 255, 255, 255],align: LEFT}),
  new gimage({translate: [670, -480, 0],width: 60, height: 60, src: "imagens/icone-retornar.png"}),
  new gtext ({translate: [750, -480, 0],width: 120,text: "Retornar",color: [255, 255, 255, 255],align: LEFT}) 
];

var keyboard = new container({ visible_p:false, });
keyboard.create = function(param) {
  if (this.components.length > 0) return;
  param = param || {};
  require("pkg_keyboard");
  this.keyboard_obj = pkg_keyboard.create();
  this.components.push(this.keyboard_obj);

  if (ebus.kbd.supported) { add_event_hook(ebus.kbd, this.keyboard_obj.usb_key_hook);}

  var this_obj = this;
  var keyboard_func = function () {
     //busca_videos(texto_busca.text);
     busca_videos(this_obj.keyboard_obj.getText());
  };
  this.keyboard_obj.set_hook_func (keyboard_func);
};
keyboard.enter_focus = function() {
  common_key.set_cursor(this, this.keyboard_obj);
};
keyboard.leave_focus = function() {
  common_key.set_cursor(this, null);
};
keyboard.appear = function(param) {
  param = param || {};
  keyboard.create();
  this.translate = param.translate || [-600,-150,0];
  this.visible_p = true;
  if (param.hook_func) param.hook_func();
};
keyboard.disappear = function(param) {
  param = param || {};
  this.visible_p = false;
  if (param.hook_func) param.hook_func();
};
keyboard.key_hook = function(up_down, key) {
  return this.keyboard_obj.key_hook(up_down, key);
};
keyboard.free = function() {
  if (this.components.length == 0) return;
  this.visible_p = false;
};
function busca_videos(palavra){
  //setf_text(texto_busca, "A palavra buscada foi: " + palavra);
  carrega_json_programa(palavra);
}
function carrega_json_programa (palavra){
  //var url_json_programa = "http://cmais.com.br/panasonic/geraPanasonicJSON.php?palavra="+palavra;
  var url_json_programa = "http://172.20.16.219/panasonic/geraPanasonicJSON.php?palavra="+palavra;
  var json_request1 = {};
  json_request1.request = function(param) {
    var ret = null;
    var self = this;
    var hook = param.hook_func;
    var hook_func = function(status, header, body) {
      self.handler = -1;
      var ret = null;
      if (status == 200) {
        ret = self.parse(body);
      }
      if (hook) hook(ret);
    };
   
    if (this.handler > 0) cancel_http_request(this.handler);
      this.handler = http_request({
        url: url_json_programa,
        method:"GET",
        sync:false,
        onload:hook_func,
      });
    return;
  };
  json_request1.parse = function(json) {
    var ret = null;
    try {
      ret = eval("("+json+")");
    }catch (e) {
      return null;
    }
  
    var data = [];
    for (var i = 0; i < ret.data.list.length; i++) {
      data.push(ret.data.list[i]);
    }
    return data;
  };
  json_request1.request({
    hook_func: function(data) {
      btn_cont.def.length = 0;
      btn_cont.remove();
      btn_cont.create(data.length);    
      btn_cont.set_data(data);
      btn_cont.visible_p = true;
      setf_text(texto_inicial, "");
      if(data.length == 0){
        setf_text(texto_busca, "Nenhum resultado encontrado!");
      }else if(data.length == 50){
        setf_text(texto_busca, "Estão sendo exibidos os 50 últimos resultados. Utilize mais palavras!");
      }else{
        setf_text(texto_busca, "* Foram encontrados " + data.length + " resultados!");
      }
    },
  });
}
function btn_item(param) {
  param = param || {};
  if (typeof param.index == "number") this.index = param.index;
  if (param.translate != "undefined") this.translate = param.translate;
  if (param.url_video != "undefined") this.url_video = param.url_video;
  this.components = [
    this.bg = new gimage({ width:240, height:180, translate: [0,0,0], draw_type: DIRECT }),
    this.frame = new gbox({ width:245, height:185, color:[255,255,255,255],visible_p:false, translate:[0,0,-0.1], }),
    this.hover = new gbox({ width:240, height:180, color:[0,0,0,180],visible_p:false, translate:[0,0,0], }),
    this.title = new gtext({ width:240, align:LEFT, font_size: 26,color:[255,150,0,255], translate: [3,55,-0.1] }),
    this.label = new gtextbox({ width:235, height: 100, align:LEFT, font_size: 26, translate:[3,-20,-0.1],}),    
  ];
};

//FUNÇÃO PARA CRIAÇÃO DOS LINKS DOS VÍDEOS
btn_item.prototype = new container({});
btn_item.prototype.move = function(param) {
  param = param || {};
  if (param.from_translate) {
    this.translate[0] = param.from_translate[0];
    this.translate[1] = param.from_translate[1];
    this.translate[2] = param.from_translate[2];
  }
  this.dst_x = param.to_translate[0];
  this.dst_y = param.to_translate[1];
  this.dst_z = param.to_translate[2];
  this.COUNT = 20;
  this.drawp = param.drawp;
  this.hook_func = param.hook_func;
  append_timer(this, 100, this.effect);
};
btn_item.prototype.effect = function(obj, count) {
  if (count > obj.COUNT) {
    delete_timer(obj);
    obj.translate[0] = obj.dst_x;
    obj.translate[1] = obj.dst_y;
    obj.translate[2] = obj.dst_z;
    if (obj.hook_func) obj.hook_func();
  } else {
    obj.translate[0] += (obj.dst_x - obj.translate[0])/1.3;
    obj.translate[1] += (obj.dst_y - obj.translate[1])/1.3;
    obj.translate[2] += (obj.dst_z - obj.translate[2])/1.3;
  }
  if (obj.drawp) force_redraw();
};
btn_item.prototype.set_data = function(param) {
  param = param || {};
  if (param.translate) this.translate = param.translate;
  if (param.action) this.action = param.action;
  if (param.src) this.bg.src = param.src;
  if (param.url_video) this.url_video = param.url_video;
  setf_text(this.label, param.label || "");
  setf_text(this.title, param.titulo || "");
};
btn_item.prototype.free = function() {
  setf_text(this.label, "");
};
btn_item.prototype.enter_focus = function() {
  this.label.translate = [3,-20,0];
  this.title.translate = [3,55,0];
  this.frame.visible_p = true;
  this.hover.visible_p = true;
};
btn_item.prototype.leave_focus = function() {
  this.label.translate = [3,-20,-0.1];
  this.title.translate = [3,55,-0.1];
  this.frame.visible_p = false;
  this.hover.visible_p = false;
};

var btn_cont = new container({});
btn_cont.def = new Array();
btn_cont.create = function(num_components) {
  if (this.components.length > 0) return;
  this.TOP_TRANSLATE = 150;
  this.LEFT_TRANSLATE = -130;
  
  var cont = 0;
  for (var i = 0; i < num_components; i++) {
    
    if(cont <= 3){
      cont++;
    }else{
      this.TOP_TRANSLATE = this.TOP_TRANSLATE - 200;
      this.LEFT_TRANSLATE = -i*280-130;
      cont = 1;
    }
    this.components.push(new btn_item({ index:i, translate:[this.LEFT_TRANSLATE+i*280,this.TOP_TRANSLATE,0],  }));
  }
  this.cindex = 0
};
btn_cont.remove = function() {
 this.components.length = 0;
 force_redraw();
};
btn_cont.set_data = function(data) {
  if (!data) return;
  this.index =0
  for (var i = 0; i < this.components.length; i++) {
    btn_cont.def.push(data[i]);
    this.components[i].set_data(data[i]);
  }
};
btn_cont.move_down = function() {
 this.LEFT_TRANSLATE = -200;   
 this.TOP_TRANSLATE = 200;
  
 for (i=11;i<199;i+=4){
    if(this.cindex < i){
      break;
    }
    this.TOP_TRANSLATE+= 200;
  }
  cont_move=0;

  for(i=0; i < this.components.length; i++){
    if(cont_move <= 3){
      cont_move++;
      this.LEFT_TRANSLATE+= 280;
    }else{
      this.LEFT_TRANSLATE = -130;
      this.TOP_TRANSLATE = this.TOP_TRANSLATE - 200;
      cont_move = 1;
    } 
    this.components[i].move({ to_translate:[this.LEFT_TRANSLATE,this.TOP_TRANSLATE+350,0], drawp:(i==5), });
  }
};
btn_cont.move_up = function() {
  this.LEFT_TRANSLATE = -410;
  this.TOP_TRANSLATE = 350;
  for (i=12;i<200;i+=4){
    if(this.cindex < i){
      break;
    }
    this.TOP_TRANSLATE+= 200;
  }
   
  cont_move=0;
  for(i=0; i < this.components.length; i++){
    if(cont_move <= 3){
      cont_move++;
      this.LEFT_TRANSLATE+= 280;
    }else{
      this.LEFT_TRANSLATE = -130;
      this.TOP_TRANSLATE = this.TOP_TRANSLATE - 200;
      cont_move = 1;
    } 
    this.components[i].move({ to_translate:[this.LEFT_TRANSLATE,this.TOP_TRANSLATE-200,0], drawp:(i==5), });          
  }
};
btn_cont.free = function() {
  if (this.components.length == 0) return;
  for (var i = 0; i < this.components.length; i++) {
    this.components[i].free();
  }
};
btn_cont.enter_focus = function() {
  common_key.set_cursor(this, this.components[this.cindex]);
};
btn_cont.leave_focus = function() {
  common_key.set_cursor(this, null);
};
btn_cont.key_hook = function(up_down, key) {
  switch(key) {
    case TXK_UP:
      if(this.cindex < 4) return true;
      if(this.cindex > 5){
        this.move_up();        
        this.cindex -= 4;
        this.index -= 4;  
        common_key.set_cursor(this, this.components[this.cindex]);
        return true;
      }
      this.cindex -= 4;
      this.index -= 4;
      common_key.set_cursor(this, this.components[this.cindex]);
      return true;

    case TXK_DOWN:
      if (this.index == this.def.length-1) return true;
      if (this.index == this.def.length-2) return true;
      if (this.index == this.def.length-3) return true;
      
      if (this.cindex > 7) {
         this.move_down();
         if (this.index == this.def.length-4){
            this.index++;
            this.cindex++;
         }else{
            this.cindex += 4;
            this.index += 4;  
         }
         common_key.set_cursor(this, this.components[this.cindex]);
         return true;
      }else{
        if(this.index <= 5){
          if (this.index == this.def.length-2) return true;
          if (this.index == this.def.length-3) return true;
          if (this.index == this.def.length-4) return true;  
        }
        this.index += 4;
        this.cindex += 4;
        common_key.set_cursor(this, this.components[this.cindex]);
        return true;
      }

   case TXK_LEFT:
      if (this.index == 0) {
        common_key.set_cursor(sobj, keyboard);
        return true;
      }
      if (this.cindex == 0) {
        common_key.set_cursor(this, this.components[this.cindex]);
      } 
    
     if(this.cindex > 5){
         this.move_up();      
      }
      this.index--;
      this.cindex--;
      common_key.set_cursor(this, this.components[this.cindex]);
      return true;
      
   case TXK_RIGHT:
     if (this.index == this.def.length-1) return true;
     if (this.cindex > 10) {
        this.move_down();
     }
     this.index++;
     this.cindex++;
     common_key.set_cursor(this, this.components[this.cindex]);
     return true;
    
  case TXK_ENTER:
     delete_timer(this);
     video_transparencia.translate = [0,0,1];
     video_transparencia.visible_p = true;
    
    if(video_player.video_box.width == 1920){
      video_player.translate = [0,0,1.1];
      video_controls_container.translate = [0,-490,5];
    }else{
      video_player.translate = [0,50,1.1];
      video_controls_container.translate = [0,-420,1.2];
    }
    
    video_player.visible_p = true;
    video_player.video_box.visible_p = true;
    video_controls_container.visible_p = true;
    url_video_player = [this.components[this.cindex].url_video];
    video_player.playback(url_video_player);
    timer_manager.start();
    
    common_key.set_cursor(sobj, video_controls_container);
    return true;
  }
  return false;
};

//MÁSCARA DOS LINKS DE VÍDEO
var btn_cont_mask = new container({});
btn_cont_mask.create = function() {
  this.translate = [0,0,0.1];
  this.components = [
    this.top_box = new gbox({ translate:[350, 450,0.1], color:[0,0,0,255], width:1250, height:400, }),
    this.down_box = new gbox({ translate:[350,-460,0.1], color:[0,0,0,255], width:1250, height:200, }),
    this.left_arrow  = new gimage({width: 150, height: 45, translate: [300, 280,0.1],src: "imagens/seta_acima.jpg"}),
    this.right_arrow = new gimage({width: 150, height: 45, translate: [300,-390,0.1], src: "imagens/seta_abaixo.jpg"}),
  ];
};

//FUNÇÃO PARA CRIAR OS CONTROLES DOS VÍDEOS
function video_item (param) {
  param = param || {};
  this.translate = param.translate || [0,0,0];
  this.action = param.action || "";
  this.text = param.text || "";
  this.src = param.src || "";
  this.components = [
  this.frame = new gbox({ width:100, height:80, color:[0,0,0,180],  visible_p:true}),
  this.bg    =  new gimage({ width:92, height:92, src: this.src, }),  
  this.label = new gtext({ width: 140, align:LEFT, font_size: 34, text:this.text}),  
  ];
}
video_item.prototype = new container({});
video_item.prototype.enter_focus = function(){
  this.frame.visible_p = true;
  this.frame.color = [255,157,0,255];
  this.label.color = [0,0,0,255];
};
video_item.prototype.leave_focus = function(){
  this.frame.color = [0,0,0,180];
};
video_item.prototype.free = function(){};

var video_controls_container = new container({});
video_controls_container.create = function() {
  this.visible_p = false;
  this.components = [
    new video_item({ src: "imagens/icone-stop.png", text: "",  translate:[-220, 0,0], action: function() { video_player.stop();}}),
    this.play_or_pause = new video_item({ src: "imagens/icone-pause.png", text: "",  translate:[  -100, 0,0],  action: function() { video_player.pause_or_resume();}}),
    new video_item({ src: "imagens/icone-skip.png", text: "", translate:[20, 0,0],  action: function() { video_player.skip();}}),
    new video_item({ src: "imagens/icone-full.png", text: "", translate:[140, 0,0],  action: function() { full_screen();}}),
    new video_item({ src: "imagens/icone-close.png", text: "",  translate:[260, 0,0], action: function() { close_player();}}),   
  ];
  this.cindex = 0;
};
video_controls_container.enter_focus = function() {
  common_key.set_cursor(this, this.components[this.cindex]);
  this.visible_p = true;
};
video_controls_container.leave_focus = function() {
  common_key.set_cursor(this, null);
};
video_controls_container.key_hook = function(up_down, key) {
  common_key.set_cursor(this, this.components[this.cindex]);
  this.visible_p = true;
  delete_timer(this);
  
  timer_manager.start();
  video_player.box_bar.visible_p = true;
  video_player.bar.visible_p = true;
  video_player.pos.visible_p = true;
  video_player.elapsed.visible_p = true;
  video_player.duration.visible_p = true;  
  
  if(video_player.video_box.width == 1920){
    append_timer(this, 3000, function () {
      this.visible_p = false; //DESATIVA O BOX DOS CONTROLES
      timer_manager.stop();
      video_player.box_bar.visible_p = false;
      video_player.bar.visible_p = false;
      video_player.pos.visible_p = false;
      video_player.elapsed.visible_p = false;
      video_player.duration.visible_p = false;  
          
    });  
  }
  switch (key) {
   case TXK_LEFT:
    if (this.cindex == 0) return false;
    this.cindex--;
    common_key.set_cursor(this, this.components[this.cindex]);
    return true;
   case TXK_RIGHT:
    if (this.cindex == this.components.length - 1) return false;
    this.cindex++;
    common_key.set_cursor(this, this.components[this.cindex]);
    return true;
   case TXK_ENTER:
    this.cursor.action();
    break;
  }
  return false;
};
video_controls_container.free = function() {
  for (var i = 0; i < this.components.length ; i++) {
    if (this.components[i].free) this.components[i].free();
  }
};

//FUNÇÃO PARA FECHAR O PLAYER DO VÍDEO
function close_player(){
    video_player.player.stop();
    video_transparencia.translate = [0,0,-0.4];
    video_transparencia.visible_p = false;
    video_player.visible_p = false;
    video_player.video_box.visible_p = false;
    video_controls_container.visible_p = false;
    video_controls_container.translate = [0,-250,0];
    message2.set_data("");
    common_key.set_cursor(sobj, btn_cont);
    force_redraw();
}

//CRIA PLAY/STOP PARA FULL SCREEN
function full_screen(){
  if(video_player.video_box.width == 1920){
    video_player.video_box.width = 1280;
    video_player.video_box.height = 720; 
    video_controls_container.translate = [0,-420,3];
    video_player.translate = [0,50,1.1];
    message2.visible_p = true;
  }else{
    message2.visible_p = false;
    video_player.translate = [0,0,3];
    video_player.video_box.width = 1920;
    video_player.video_box.height = 1080;
    video_controls_container.translate = [0,-490,5];
    //DESABILITA CONTROLES DO VIDEO_PLAYER
    video_controls_container.visible_p = false;
    timer_manager.stop();
    video_player.box_bar.visible_p = false;
    video_player.bar.visible_p = false;
    video_player.pos.visible_p = false;
    video_player.elapsed.visible_p = false;
    video_player.duration.visible_p = false;  
  } 
}

//CRIAÇÃO DO VIDEO PLAYER
var url_video_player = [];
var video_player = new container({});
video_player.create = function() {
  this.visible_p = false;
  if (this.components.length > 0) return;
  this.bar_width = 900;
  this.bar_height = 12;
  
  //CRIAÇÃO DO MOVIE PLAYER E CONTROLE DE STATUS  
  this.player = new MoviePlayer2({});
  this.player.event_hook = function (obj, event, index) {
    var state = this.state;
    switch(state) {
      case this.STAT_STOP:
        //setf_text(message1, "STOP");
        break;
      case this.STAT_PAUSE:
        //setf_text(message1, "PAUSE");
        break;
      case this.STAT_PLAYING:
        //setf_text(message1, "PLAYING");
        break;
      case this.STAT_WAITING:
        //setf_text(message1, "WAITING");
        break;    
     }; 
     
    switch(event) {
     case this.EV_PLAY_OK:
       // A Cada 250 ms //
       //message1.set_data("Player OK...");
      break;
    case this.EV_DOWNLOADING:
      //message2.set_data("Carregando...");
      message2.set_data("Downloading...");
      break;
    case this.EV_PLAYING:
      //message2.set_data("Playing...");
       //message2.set_data(this.duration);
      break;
    case this.EV_BITRATE_SWITCH:
       //message2.set_data("Bitrate switch...");
      break;
    case this.EV_BITRATE_SWITCHED:
      // message2.set_data("Bitrate switched");
      break;
    case this.EV_PAUSED:
      //message2.set_data("Paused");
      break;
    case this.EV_STOPPED:
      //message2.set_data("Stopped");
      break;
    case this.EV_PLAY_FINISH:
      //OK//message2.set_data("Finished");
      if(video_player.video_box.width == 1920){
        full_screen();
      }
      break;
    case this.EV_PLAY_NG:
      var err = this.get_error(index);
      switch(err) {
      case this.NONE_ERROR:
        //message2.set_data("Nenhum erro");
        break;
      case this.URL_ERROR:
        //message2.set_data("["+index+"]: url error.");
        this.play();
        message2.set_data("Carregando...");
        break;
      case this.HTTP_ERROR:
        this.play();
        message2.set_data("Carregando...");
        //message2.set_data("["+index+"]: http error. (" + this.get_http_status(index) + ")");
        break;
      case this.CONTENT_ERROR:
        //message2.set_data("["+index+"]: content error.");
        break;
      case this.DECODE_ERROR:
        //message2.set_data("["+index+"]: decode error.");
        break;
      }
      break;
    default:
      break;
    }
  };
  this.components = [
    this.video_box = new videobox({width:1280, height:720, color:[0,0,0,0],translate: [0,0, 0],  draw_type: "FULL", visible_p: false}),
    this.box_bar = new gbox({   width:1280, height:80, color: [0,0,0,190], translate: [0,-400,0],}),
    this.bar = new gimage({ width:900,  height:16, src: "imagens/bar.png", translate: [0,-400,0],}),
    this.pos = new gbox({   width:14,   height:10, translate:[-this.bar_width/2+5,-400,1],
                          round_enable:true, round_width:5, round_height:5, color: [255,255,255,255] }),
    this.elapsed = new gtext({ width:140, font_size:35, translate:[-550,-400,0], align:RIGHT, }),
    this.duration = new gtext({ width:140, font_size:35, translate:[500,-400,0], align:RIGHT, }),
    
  ];
  extend(this.pos, animation_methods);
};
video_player.skip = function(){
  var time_to_end = video_player.player.duration/1000 - video_player.player.elapsed/1000;
  if(time_to_end > 30){
    this.player.skip(+30 * 1000);
    force_redraw();
  }
};
video_player.update_pos = function() {
  //if (this.player.state != this.player.EV_PLAYING &&this.player.state != this.player.EV_PLAY_OK) return;
  var x = -this.bar_width/2+5 + (this.bar_width-10) * this.player.elapsed / this.player.duration;
  this.pos.move({ to_translate:[x,-400,1], });
  setf_text(this.elapsed, this.format_time(Math.floor(this.player.elapsed/1000)));
  setf_text(this.duration, this.format_time(Math.floor(this.player.duration/1000)));
  this.pos.visible_p = true;
};
video_player.format_time = function(time) {
  return ((Math.floor(time/(60*60))%60 > 0) ?
          (Math.floor(time/(60*60))%60 < 10 ? "0" : "") + Math.floor(time/(60*60))%60 + ":" : "") +
    (Math.floor(time/60)%60 < 10 ? "0" : "") + Math.floor(time/60)%60 + ":" +
    (time%60 < 10 ? "0" : "") + time%60;
};
video_player.free = function() {
  this.bar.src = "";
  setf_text(this.elapsed, "");
  this.player.disconnect();
};
video_player.playback = function(url_video_player) {
  try {
    this.disconnect();
  }catch(e){
  };
  this.player.connect(VideoDev, AudioDev);
  this.player.set_movie(url_video_player);
  this.player.play();  
  
  force_redraw();
};
video_player.pause_or_resume = function() {
  if (this.player.state != this.player.STAT_PAUSE){
    this.player.pause();
    video_controls_container.play_or_pause.bg.src = "imagens/icone-play.png";
  }else{
    this.player.play(); 
    video_controls_container.play_or_pause.bg.src = "imagens/icone-pause.png";    
  }   
};
video_player.stop = function() {
  if(this.player.elapsed > 1000){
    this.player.skip(-this.player.elapsed);
    this.player.play();
    this.pause_or_resume();
    return true;
  }
  delete_timer(this);
};
video_player.finalize = function() {
  try {
    this.player.disconnect();
  }catch(e){
  };
};
video_player.key_hook = function(up_down, key){
  if (up_down != KEY_PRESS) return false;
  switch(key) {
  case TXK_GREEN:
    //this.player.skip( 30 * 1000 );
    //return true;
  }
  return false;
};

//MENSAGENS DO VÍDEO PLAYER
//var message1 = new gtext({width: 500, color: [0,0,255,255], translate: [400,0,10], text: "ok"});
var message2 = new gtext({width: 500, color: [255,255,255,255], translate: [640,-420,2], text: ""});
message2.set_data = function (texto){
  setf_text(this,texto);
}

common_out_hook = function() {
  for (var i = 0; i < sobj.components.length; i++) {
    if (sobj.components[i].free) sobj.components[i].free();
  }
  exit_appli(0);
};

var sobj = stage ({
  symbol:"busca",
    in:[{
        from:["main"],
        hook:function (obj) {
        complete_on_stage(obj);
          sobj.in_from_right({ 
            obj:obj,
            hook_func:function() {
            enable_keyhook = false;
            
            btn_cont.create();
            btn_cont.visible_p = false;
            btn_cont_mask.create();
            
            keyboard.create();            
            keyboard.appear({ hook_func:function() {
              common_key.set_cursor(sobj, keyboard);
            }});            
            
            video_controls_container.create();

            video_player.create();
            enable_keyhook = true;
            force_redraw();               
                       
            }, 
          });
        }
      },],
      
  out:[{
      to:["main"],
      hook:function (obj) {
        sobj.out_to_left({ 
           obj:this,
           hook_func:function() {
             video_player.finalize();
             complete_off_stage (obj);
           }, 
        });
      }
     }],
     
  bg_image:[new gbox({ width:11520, height:6480, color:[0,0,0,255], translate:[0,0,-3325], })],
  components:[ 
    video_player,
    titulo_busca, 
    texto_busca,
    logo, 
    keyboard,
    btn_cont,
    btn_cont_mask,
    texto_inicial,
    video_controls_container,
    video_transparencia,
    footer,
    message2,
  ],
  key_hook:function(up_down, key) {
    if (up_down != KEY_PRESS) return true;
    
    switch(key) {
      case TXK_HOME:
      common_out_hook();
      return true;
    }

    if (video_player && video_player.key_hook){
      if (video_player.key_hook (up_down, key) == true){
        return true;
      }
    }
    
    if (!enable_keyhook) return true;

    if (this.cursor && this.cursor.key_hook && this.cursor.key_hook(up_down, key)) {
      force_redraw();
      return true;
    }
    
    switch(key) {
     case TXK_UP:
        if (this.cursor == video_controls_container) {
          force_redraw();
          return true;  
        }     
       common_key.set_cursor(sobj, keyboard);
       force_redraw();
       return true;

     case TXK_DOWN:
        if (this.cursor == video_controls_container) {
          force_redraw();
          return true;  
        }     
       return true;

     case TXK_LEFT:
        if (this.cursor == video_controls_container) {
          force_redraw();
          return true;  
        }
        common_key.set_cursor(sobj, keyboard);
        force_redraw();
        return true;

     case TXK_RIGHT:
        if (this.cursor == video_controls_container) {
          force_redraw();
          return true;  
        }     
     
        if(btn_cont.visible_p == true){
          common_key.set_cursor(sobj, btn_cont);
          force_redraw();
          return true;
        }  
     case TXK_RETURN:
      if (this.cursor == video_controls_container) {
        close_player();
        return true;
      }else{
        on_stage("main");
        return true;
      }
    }
    return false;
  },

});

extend(sobj, common_sobj);