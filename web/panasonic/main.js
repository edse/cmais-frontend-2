//
// Copyright (C) 2013 - Fundação Padre Anchieta - All Rights Reserved.
//

// CARREGA AS TELAS SECUNDÁRIAS
add_stage_load_path("busca", "busca.js");
add_stage_load_path("sobre", "sobre.js");
//add_stage_load_path("como_funciona", "como_funciona.js");

extend = function(destination, source) {
  for (var property in source)
    destination[property] = source[property];
};

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

//FUNÇÃO PARA MOVER A TELA ATUAL PARA OUTRA 
common_sobj = {
  out_to_left : function(param) {
    this.move({ obj:param.obj, from_translate:[0,0,0], to_translate:[-1920,0,0],
                hook_func:param.hook_func, });
  },
  out_to_right : function(param) {
    this.move({ obj:param.obj, from_translate:[0,0,0], to_translate:[1920,0,0],
                hook_func:param.hook_func, });
  },
  in_from_left : function(param) {
    this.move({ obj:param.obj, from_translate:[-1920,0,0], to_translate:[0,0,0],
                hook_func:param.hook_func, });
  },
  in_from_right : function(param) {
    this.move({ obj:param.obj, from_translate:[1920,0,0], to_translate:[0,0,0],
                hook_func:param.hook_func, });
  },
  move : function(param) {
    param = param || {};

    if (param.from_translate) {
      this.visible_p = false;
      this.translate[0] = param.from_translate[0];
      this.translate[1] = param.from_translate[1];
      this.translate[2] = param.from_translate[2];
      this.visible_p = true;
    }

    this.dst_x = param.to_translate[0];
    this.dst_y = param.to_translate[1];
    this.dst_z = param.to_translate[2];

    this.COUNT = 20;

    this.hook_func = param.hook_func;

    append_timer(this, 100, this.effect);
  },
  effect : function(obj, count) {
    if (count > obj.COUNT) {
      delete_timer(obj);
      obj.translate[0] = obj.dst_x;
      obj.translate[1] = obj.dst_y;
      obj.translate[2] = obj.dst_z;
      if (obj.hook_func) obj.hook_func();
    } else {
      obj.translate[0] += (obj.dst_x - obj.translate[0])/2;
      obj.translate[1] += (obj.dst_y - obj.translate[1])/2;
      obj.translate[2] += (obj.dst_z - obj.translate[2])/2;
    }
    force_redraw();
  },
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
    append_timer(this, 1, param.effect || this.effect);
  },
};

var enable_keyhook = false;

//FUNÇÃO PARA LIMPAR OBJETOS DO STAGE E FINALIZAR A APLICAÇÃO
common_out_hook = function() {
  for (var i = 0, len = sobj.components.length; i < len; i++) {
    if (sobj.components[i].free) sobj.components[i].free();
  }
  exit_appli(0);
};

//FUNÇÃO DE TIMER PARA BARRA DE TEMPO DO VIDEO
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

//FUNÇÃO PARA CRIAÇÃO DO DESTAQUE DA HOME
var destaque_home = new container({});
destaque_home.create = function(){
  this.translate = [0,0,5];
  this.visible_p =  false;
  this.url_video = "";
  this.components = [
    this.frame = new gbox({width:1288, height:728, color:[255,255,255,255], translate:[200,130,0], visible_p: false}),
    this.image = new gimage({ width:1280, height:720, translate:[200,130,0]}),
    this.background = 
        new gbox  ({width: 1280,height: 130, translate: [200,-165,0.1],  color: [0,0,0,180]}),
        new gbox  ({width: 300, height: 40,  translate: [-270,-125,0.1], color: COLOR_ORANGE}),
    this.titulo =    new gtext ({width: 300, translate: [-265,-125,0.2], color: [0,0,0,255],       align: LEFT}),
    this.subtitulo = new gtext ({width: 900, translate: [30,-168,0.2], color: [255,255,255,255], align: LEFT, font_size: 28}),
    this.descricao = new gtext ({width: 1200,translate: [180,-205,0.2],  color: [255,255,255,255], align: LEFT, font_size: 24}),
  ];
}
destaque_home.set_data = function(data){
  if (!data) {
    return;
  }
  var destaque_selecionado;  
  destaque_selecionado = false;
  this.verifica_destaque = function(param){
    if(param.destaque == "S" && destaque_selecionado == false){
      this.image.src = param.imagem_destaque;
      setf_text(this.titulo, param.titulo);
      setf_text(this.subtitulo, param.subtitulo);
      setf_text(this.descricao, param.descricao);      
      this.url_video = param.url_video;
      destaque_selecionado = true;
    }
  }
  for (var i = 0; i < data.length; i++) {
    this.verifica_destaque(data[i]);
  }
  this.visible_p = true;
}
destaque_home.enter_focus = function(){
  this.frame.visible_p = true;  
}
destaque_home.leave_focus = function(){
  this.frame.visible_p = false;  
}
destaque_home.free = function(){
    this.image.src = "";
    setf_text(this.titulo, "");
    setf_text(this.subtitulo, "");
    setf_text(this.descricao, "");
}
destaque_home.key_hook = function(up_down, key) {
  switch(key) {
   case TXK_LEFT:
      common_key.set_cursor(sobj, list);
      return true;
      
   case TXK_RIGHT:
      common_key.set_cursor(sobj, btn_cont);
      return true;
      
   case TXK_UP:
      common_key.set_cursor(sobj, list);
      return true;
      
   case TXK_DOWN:
      common_key.set_cursor(sobj, btn_cont);
      return true;
                
   case TXK_ENTER:
    this.visible_p = false;
    // Habilita o VideoBox, Frame e Controles do Vídeo
    delete_timer(this);
    video_cont.visible_p = true;
    video_player.bar.visible_p = true;
    video_player.visible_p = true;
    video_player.video_box.visible_p = true;
    video_controls_container.visible_p = true;
    
    //Insere a URL do Vídeo e executa o player (this.connect + play)
    url_video_player = [this.url_video];
    video_player.playback(url_video_player);
    video_player.pos.visible_p = true;
    timer_manager.start();
    common_key.set_cursor(sobj, video_controls_container);
    return true;
  }
  return false;
};

//FUNÇÕES DO PLAYER DE VÍDEO
var url_video_player = [];
var video_player = new container({});
video_player.create = function() {
  this.visible_p = false;
  if (this.components.length > 0) return;
  this.translate = [200,130,3];
  this.bar_width = 900;
  this.bar_height = 12;
  this.player = new MoviePlayer2({});
  this.components = [
    this.video_box = new videobox({width:1280, height:720, color:[0,0,0,0],translate: [0,0, 0],  draw_type: "FULL"}),
    this.box_bar = new gbox({   width:1280, height:50, color: [0,0,0,180], translate: [0,-335,0],}),
    this.bar = new gimage({ width:900,  height:16, src: "imagens/bar.png", translate: [0,-335,0],}),
    this.pos = new gbox({   width:10,   height:10, translate:[-this.bar_width/2+5,-335,1],
                          round_enable:true, round_width:5, round_height:5, color: [255,255,255,255] }),
    this.elapsed = new gtext({ width:140, font_size:35, translate:[-550,-335,0], align:RIGHT, }),
    this.duration = new gtext({ width:140, font_size:35, translate:[500,-335,0], align:RIGHT, }),
    
  ];
  extend(this.pos, animation_methods);
};
video_player.update_pos = function() {
  //if (video_player.player.state != video_player.player.EV_PLAYING) return;
  var x = -this.bar_width/2+5 + (this.bar_width-10) * this.player.elapsed / this.player.duration;
  this.pos.move({ to_translate:[x,-335,1], });
  setf_text(this.elapsed, this.format_time(Math.floor(this.player.elapsed/1000)));
  //setf_text(this.remain, "- "+this.format_time(Math.floor(this.player.duration/1000) - Math.floor(this.player.elapsed/1000)));
  setf_text(this.duration, this.format_time(Math.floor(this.player.duration/1000)));
  //this.pos.visible_p = true;
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
  setf_text(this.remain, "");
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
video_player.skip = function(){
  var time_to_end = video_player.player.duration/1000 - video_player.player.elapsed/1000;
  if(time_to_end > 30){
    this.player.skip(+30 * 1000);
    force_redraw();
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
    this.pause_or_resume();
    return true;

  case TXK_BLUE:
    this.player.skip( 30 * 1000 );
    return true;
  }
  return false;
};
video_player.event_hook = function (obj, event, index) {
  var state = this.state;
  switch(state) {
    case this.STAT_STOP:
      message1.set_data("STOP");
      break;
    case this.STAT_PAUSE:
      message1.set_data("PAUSE");
      break;
    case this.STAT_PLAYING:
      message1.set_data("PLAYING");
      break;
    case this.STAT_WAITING:
      message1.set_data("WAITING");
      break;    
   };
  switch(event) {
   case this.EV_PLAY_OK:
     // A Cada 250 ms //message2.set_data("Player OK...");
    break;
  case this.EV_DOWNLOADING:
    message2.set_data("Downloading...");
    break;
  case this.EV_PLAYING:
    //message2.set_data("Playing...");
    break;
  case this.EV_BITRATE_SWITCH:
    message2.set_data("Bitrate switch...");
    break;
  case this.EV_BITRATE_SWITCHED:
    message2.set_data("Bitrate switched");
    break;
  case this.EV_PAUSED:
    message2.set_data("Paused");
    break;
  case this.EV_STOPPED:
    message2.set_data("Stopped");
    break;
  case this.EV_PLAY_FINISH:
    message2.set_data("Finished");
    if(video_player.video_box.width == 1920){
      full_screen();
    }
    break;
  case this.EV_PLAY_NG:
    var err = this.get_error(index);
    switch(err) {
    case this.NONE_ERROR:
      message2.set_data("Nenhum erro");
      break;
    case this.URL_ERROR:
      message2.set_data("["+index+"]: url error.");
      break;
    case this.HTTP_ERROR:
      message2.set_data("["+index+"]: http error. (" + this.get_http_status(index) + ")");
      break;
    case this.CONTENT_ERROR:
      message2.set_data("["+index+"]: content error.");
      break;
    case this.DECODE_ERROR:
      message2.set_data("["+index+"]: decode error.");
      break;
    }
    break;
  default:
    break;
  }
};

//MENSAGENS DO PLAYER DO VÍDEO
var message1 = new gtext({translate:[-400,480,0], width:512});
message1.set_data = function (text) {
  setf_text(this,  "State value: " + text.toString());
};
var message2 = new gtext({translate:[ 000,480,0], width:512});
message2.set_data = function (text) {
  setf_text(this,  "Latest event value: " + text.toString());
};

//CARREGA JSON DE UM PROGRAMA SELECIONADO
function carrega_json_programa (programa){
  //var url_json_programa = "http://172.20.16.219/panasonic/geraPanasonicJSON.php?program_id=21";//+programa;
  //var url_json_programa = "http://172.20.16.219/panasonic/geraPanasonicJSON.php?program_id="+programa;
  var url_json_programa = "http://cmais.com.br/panasonic/geraPanasonicJSON.php?program_id="+programa;
  //var url_json_programa = "http://192.168.0.100/sdkapp/video_list.json";
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
      destaque_home.set_data(data);  
      destaque_home.visible_p = true;
      video_cont.visible_p = false;
      video_player.video_box.visible_p = false;
      video_controls_container.visible_p = false;
      video_player.finalize();
      common_key.set_cursor(sobj,destaque_home);
    },
  });
}

//CRIAÇÃO DAS CORES DO MENU
const COLOR_BLACK  = [0,0,0,255];
const COLOR_GRAY   = [102,102,102,255];
const COLOR_ORANGE = [255,103,51,255];

//FUNÇÃO PARA CRIAR OS ITENS DO MENU
function list_item (param) {
  param = param || {};
  this.translate = param.translate || [0,0,0];
  var action = "" || param.action;
  if(action == ""){
    this.action = "";  
  }else{
    this.action = (function() {carrega_json_programa(action);});
  }
  this.text = param.text || "";
  this.components = [
    this.frame = new gbox({ width:328, height:58, color:COLOR_BLACK, }),
    this.bg    =  new gbox({ width:320, height:50, color:[255,157,0,255],  visible_p:false, }),
    this.label = new gtext({ width: 320, align:LEFT, font_size: 34, text:this.text}),
  ];
}
list_item.prototype = new container({});
list_item.prototype.move = function(param) {
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
list_item.prototype.effect = function(obj, count) {
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
list_item.prototype.enter_focus = function(){
  if(list.pos_item_ativado == list.cindex){
    this.frame.color = COLOR_GRAY;
    this.frame.visible_p = true;
    this.label.color = [255,255,255,255];
  }else{
    this.frame.color = [255,255,255,255];
    this.frame.visible_p = true;
    this.label.color = [0,0,0,255];
  }  
};
list_item.prototype.leave_focus = function(){
 for(i=0;i<list.components.length;i++){
    this.frame.visible_p = false;
    this.frame.color = [255,255,255,255];
    this.label.color = [255,255,255,255];      
 }
 list.components[list.pos_item_ativado].frame.color = COLOR_ORANGE;
 list.components[list.pos_item_ativado].frame.visible_p = true;
 list.components[list.pos_item_ativado].label.color = [0,0,0,255];     
};
list_item.prototype.free = function(){
};

//var pos_item_ativado = 0; 
var list = new container({});
list.create = function(data) {
  if(data){
    this.TOP_TRANSLATE_LIST = 235;
    for (i=0; i < data.length; i++ ){
        this.components.push(new list_item(data[i]));
        this.components[i].translate = [-700, this.TOP_TRANSLATE_LIST-i*65,0];
      }
   }
  this.cindex = 0;
  this.pos_item_ativado = this.cindex;
  
  this.components[0].action();
  this.components[0].frame.color = COLOR_ORANGE;
  this.components[0].frame.visible_p = true;
  this.components[0].label.color = [0,0,0,255];
  //AO CRIAR FAZ A CHAMADA DO ACTION DO PRIMEIRO COMPONENTE
};
list.enter_focus = function() {
  common_key.set_cursor(this, this.components[this.cindex]);
};
list.leave_focus = function() {
  common_key.set_cursor(this, null);
};
list.move_down = function() {
   this.LEFT_TRANSLATE = -700;
   this.TOP_TRANSLATE =   235;
   for (i=8;i<50;i++){
    if(this.cindex < i){
      break;
    }
    this.TOP_TRANSLATE+= 65;
   }
   for(i=0; i < this.components.length; i++){
     this.components[i].move({ to_translate:[this.LEFT_TRANSLATE,this.TOP_TRANSLATE-i*65,0], drawp:(i==5), });
   }
};
list.move_up = function() {
   this.LEFT_TRANSLATE = -700;
   this.TOP_TRANSLATE =   235;
   for (i=8;i<50;i++){
    if(this.cindex < i){
      break;
    }
    this.TOP_TRANSLATE+= 65;
   }
   for(i=0; i < this.components.length; i++){
     this.components[i].move({ to_translate:[this.LEFT_TRANSLATE,this.TOP_TRANSLATE-i*65,0], drawp:(i==5), });
   }
};
list.key_hook = function(up_down, key) {
  switch (key) {
   case TXK_UP:
    if (this.cindex == 0) return false;
    if (this.cindex >6) {
      this.move_up();
    }
    this.cindex--;
    common_key.set_cursor(this, this.components[this.cindex]);
    return true;
    
   case TXK_DOWN:
    if (this.cindex == this.components.length - 1) return false;
    if(this.cindex > 8) {
     this.move_down();
    }    
    this.cindex++;
    common_key.set_cursor(this, this.components[this.cindex]);
    return true;
    
   case TXK_ENTER:
    //DEIXA O LINK DO MENU ATIVADO E DESATIVA OS OUTROS CASO JA TENHA SIDO SELECIONADO
    for(i=0; i < this.components.length; i++){
      this.components[i].frame.color = COLOR_BLACK;
      this.components[i].label.color = [255,255,255,255];
    }
    this.components[this.cindex].frame.color = COLOR_ORANGE;
    this.components[this.cindex].label.color = COLOR_BLACK;
    this.pos_item_ativado = this.cindex;
    this.cursor.action();
    break;
  }
  return false;
};
list.free = function() {
  for (var i = 0; i < this.components.length ; i++) {
    if (this.components[i].free) this.components[i].free();
  }
};
//MÁSCARA DO MENU DOS PROGRAMAS
var list_mask = new container({});
list_mask.create = function() {
  this.translate = [0,0,0.1];
  this.components = [
    this.to_box =   new gbox({ translate:[-700,410,0.1], color:[0,0,0,255], width:350, height:280, }),
    this.down_box = new gbox({ translate:[-700,-500,0.1], color:[0,0,0,255], width:350, height:100, }),
  ];
};

//FUNÇÃO PARA CRIAR OS LINKS PARA OS VÍDEOS
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
  this.TOP_TRANSLATE = -350;
  this.LEFT_TRANSLATE = -210;
  for (var i = 0; i < num_components; i++) {
    this.components.push(new btn_item({ index:i, translate:[this.LEFT_TRANSLATE+i*270,this.TOP_TRANSLATE,0],  }));
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
btn_cont.move_right = function() {
  var tmp = this.components.shift();
  if (this.def[this.index+2]) {
    tmp.set_data(this.def[this.index+2]);
    tmp.translate = [this.LEFT_TRANSLATE+this.components.length*270,this.TOP_TRANSLATE,0];
    
  } else {
    tmp.free();
  }
  
  this.components.push(tmp);
  for (var i = 0; i < this.components.length; i++) {
    this.components[i].move({ to_translate:[this.LEFT_TRANSLATE+i*270,this.TOP_TRANSLATE,0], drawp:(i==2), });
  }
  
};
btn_cont.move_left = function() {
  var tmp = this.components.pop();
  if (this.def[this.index]) {
    tmp.set_data(this.def[this.index]);
    tmp.translate = [this.LEFT_TRANSLATE+0*270,this.TOP_TRANSLATE,0];
  } else {
    tmp.free();
  }
  this.components.unshift(tmp);
  for (var i = 0; i < this.components.length; i++) {
    this.components[i].move({ to_translate:[this.LEFT_TRANSLATE+i*270,this.TOP_TRANSLATE,0], drawp:(i==5), });
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
   case TXK_LEFT:
    if (this.index == 0) {
      common_key.set_cursor(sobj, list);
      return true;
    }
    if (this.cindex == 0) {
      this.index--;
      this.move_left();
      common_key.set_cursor(this, this.components[this.cindex]);
    } else {
      this.index--;
      this.cindex--;
      common_key.set_cursor(this, this.components[this.cindex]);
    }
    return true;
   case TXK_RIGHT:
    if (this.index == this.def.length-1) return true;
    if (this.cindex == 3) {
      this.index++;
      this.cndex++;
      this.move_right();
      common_key.set_cursor(this, this.components[this.cindex]);
    } else {
      this.index++;
      this.cindex++;
      common_key.set_cursor(this, this.components[this.cindex]);
    }
    return true;
   case TXK_ENTER:
    destaque_home.free();
    destaque_home.visible_p = false;
    // Habilita o VideoBox, Frame e Controles do Vídeo
    video_cont.visible_p = true;
    video_player.visible_p = true;
    video_player.video_box.visible_p = true;
    video_controls_container.visible_p = true;
    //Insere a URL do Vídeo e executa o player (this.connect + play)
    url_video_player = [this.components[this.cindex].url_video];
    video_player.playback(url_video_player);
    timer_manager.start();
    //Seta o cursor nos controles do vídeo
    //Inserir o video_controls_container.leave_focus para desabilitar o video_box_frame_visible_p.
    common_key.set_cursor(sobj, video_controls_container);
    
    return true;
  }
  return false;
};

//MÁSCARA DOS BOTÕES
var btn_cont_mask = new container({});
btn_cont_mask.create = function() {
  this.translate = [0,0,0.1];
  this.components = [
    this.rigth_box = new gbox({ translate:[850,-350,0.1], color:[0,0,0,255], width:240, height:190, }),
    this.left_arrow  = new gimage({width: 50, height: 158, translate: [-400,-350,0.1],src: "imagens/seta_esquerda.png"}),
    this.right_arrow = new gimage({width: 50, height: 158, translate: [790,-350,0.1], src: "imagens/seta_direita.png"}),
  ];
};

//URL DO JSON DOS PROGRAMAS E ACTION INCIAL
//const URL_JSON_PROGRAMAS = "http://172.20.16.219/panasonic/geraPanasonicJSON.php?program=all";
const URL_JSON_PROGRAMAS = "http://cmais.com.br/panasonic/geraPanasonicJSON.php?program=all";

var json_request = {};
json_request.request = function(param) {
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
      url:URL_JSON_PROGRAMAS,
      method:"GET",
      sync:false,
      onload:hook_func,
    });
  return;
};
json_request.parse = function(json) {
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

//FUNÇÃO PARA CRIAR OS CONTROLES DO VÍDEO
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
  //HABILITA CONTROLES DO VIDEO_PLAYER
  video_player.box_bar.visible_p = true;
  video_player.bar.visible_p     = true;
  video_player.pos.visible_p     = true;
  video_player.elapsed.visible_p = true;
  video_player.duration.visible_p = true;
};
video_item.prototype.leave_focus = function(){
  this.frame.color = [0,0,0,180];
};
video_item.prototype.free = function(){
};

var video_controls_container = new container({});
video_controls_container.create = function() {
  this.translate = [280,-130,3];
  this.visible_p = false;
  this.components = [
    new video_item({ src: "imagens/icone-stop.png", text: "",  translate:[-220, 0,0], action: function() { video_player.stop();}}),
    this.play_or_pause = new video_item({ src: "imagens/icone-pause.png", text: "",  translate:[  -100, 0,0],  action: function() { video_player.pause_or_resume();}}),
    new video_item({ src: "imagens/icone-skip.png", text: "", translate:[20, 0,0],  action: function() { video_player.skip();}}),
    new video_item({ src: "imagens/icone-full.png", text: "", translate:[140, 0,0],  action: function() { full_screen();}}),
  ];
  this.cindex = 0;
};
video_controls_container.enter_focus = function() {
  common_key.set_cursor(this, this.components[this.cindex]);
  video_box_frame.visible_p = true;
  this.visible_p = true;
  //HABILITA CONTROLES DO VIDEO_PLAYER
  video_player.box_bar.visible_p = true;
  video_player.bar.visible_p     = true;
  video_player.pos.visible_p     = true;
  video_player.elapsed.visible_p = true;
  video_player.duration.visible_p = true;  
};
video_controls_container.leave_focus = function() {
  common_key.set_cursor(this, null);
  video_box_frame.visible_p = false;
  this.visible_p = false;
};
video_controls_container.key_hook = function(up_down, key) {
  common_key.set_cursor(this, this.components[this.cindex]);
  video_box_frame.visible_p = true;
  this.visible_p = true;
  
  //EXCLUI O TIMER ATUAL E CRIA UM NOVO TIMER
  delete_timer(this);
  timer_manager.start();
  
  //DESATIVA APÓS 3 SEGUNDOS O TIMER
  append_timer(this, 3000, function () {
    this.visible_p = false; //DESATIVA O BOX DOS CONTROLES
    video_player.box_bar.visible_p = false;
    video_player.bar.visible_p = false;
    video_player.pos.visible_p = false;
    video_player.elapsed.visible_p = false;
    video_player.duration.visible_p = false;  
        
  });  
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

var logo = new gimage({width: 175, height: 156, translate: [-775,380,0.3],   src: "imagens/logotipo.png"});
var video_box_frame = new gbox({width:1288, height:728, color:[255,255,255,255], translate:[0,0,0], visible_p: false});
var video_cont = new container({translate: [200,130,1],visible_p: false,components: [video_box_frame,]});

//FOOTER DA APLICAÇÃO
var footer = new container({});
footer.components = [
  new gbox  ({translate: [-60, -480, 0],width: 30,height: 30,   color: [235,101,74,255]}),     
  new gtext ({translate: [5,   -480, 1],width: 80,text: "Busca",color: [255, 255, 255, 255],align: LEFT}),
  new gbox  ({translate: [85,  -480, 0],width: 30,height: 30,   color: [61,175,141,255]}),
  new gtext ({translate: [150, -480, 0],width: 80,text: "Info", color: [255, 255, 255, 255],align: LEFT}),
  new gbox  ({translate: [215, -480, 0],width: 30,height: 30,   color: [242,207,53,255]}),
  new gtext ({translate: [350, -480, 0],width: 230,text: "Como Funciona",color: [255, 255, 255, 255],align: LEFT}),
  new gimage({translate: [490, -480, 0],width: 60,height: 60, src: "imagens/icone-navegar.png"}),
  new gtext ({translate: [580, -480, 0],width: 120, text: "Navegar",color: [255, 255, 255, 255],align: LEFT}),
  new gimage({translate: [670, -480, 0],width: 60, height: 60, src: "imagens/icone-retornar.png"}),
  new gtext ({translate: [750, -480, 0],width: 120,text: "Retornar",color: [255, 255, 255, 255],align: LEFT}) 
];

//CRIA PLAY/STOP PARA FULL SCREEN
function full_screen(){
  if(video_player.video_box.width == 1920){
    video_player.video_box.width = 1280;
    video_player.video_box.height = 720;    
    video_cont.translate = [200,130,1];
    video_controls_container.translate = [280,-130,3];
    video_player.translate = [200,130,3];
  }else{
    video_player.translate = [0,0,3];
    video_player.video_box.width = 1920;
    video_player.video_box.height = 1080;
    video_cont.translate = [0,0,1];
    video_controls_container.translate = [80,-420,5];
   //DESABILITA CONTROLES DO VIDEO_PLAYER
    video_controls_container.visible_p = false; 
    video_player.box_bar.visible_p = false;
    video_player.bar.visible_p = false;
    video_player.pos.visible_p = false;
    video_player.elapsed.visible_p = false;
    video_player.duration.visible_p = false;      
  } 
}

var sobj = stage ({
  symbol: "main",
  in:[
    {
      from:["default"],
      hook:function (obj) {
        enable_keyhook = false;
        complete_on_stage(obj);
        
        btn_cont.create();
        video_controls_container.create();
        btn_cont_mask.create();
        
        destaque_home.create();
        video_player.create();
        //FAZ A REQUISIÇÃO DO JSON E CRIA A LISTA DOS PROGRAMAS 
        json_request.request({
          hook_func:function(data) {
            list.create(data);
          },
        });
        list_mask.create();
        common_key.set_cursor(sobj, list);
        enable_keyhook = true;
      },
    },
  ],
  out: [
    {
      to:["default"],
      hook:function(obj) {
         video_player.finalize(); //FINALIZA O OJETO DE VÍDEO_PLAYER AO SAIR DA APLICAÇÃO
         complete_off_stage (obj);
      },
    },
  ],
  bg_image : [new gbox({ width: 11520, height: 6480, color:[0,0,0,255], translate: [0,0,-3325], })],
  components: [
    video_player,
    logo,                    // LOGOTIPO DA FUNDAÇÃO
    list_mask,               // MASCARA DA LISTA DE PROGRAMAS
    list,                    // MENU DOS PROGRAMAS
    btn_cont,                // CONTAINER DO CARROSEL
    btn_cont_mask,           // SETAS DO CARROSSEL + MÁSCARA
    video_cont,              // VIDEOBOX + FRAME
    video_controls_container,// CONTROLES DO PLAYER DE VIDEO
    destaque_home,           // DESTAQUE PRINCIPAL DO PROGRAMA
    footer,                  // FOOTER DA APLICAÇÃO
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
      case TXK_RED:
        on_stage("busca");
        return true;
      
      case TXK_YELLOW:
        exit_appli(0);
        return true;   

      case TXK_GREEN:
        exit_appli(0);
        return true;  

     case TXK_LEFT:
      if (this.cursor == btn_cont || this.cursor == video_controls_container) {
        if(video_player.video_box.width == 1920){
          force_redraw();
          return true;
        }
        common_key.set_cursor(sobj, list);
        force_redraw();
        return true;
      }
      break;
      
     case TXK_DOWN:
      if (this.cursor == video_controls_container) {
        if(video_player.video_box.width == 1920){
          force_redraw();
          return true;
        }
        common_key.set_cursor(sobj, btn_cont);
        force_redraw();
        return true;
      }
      break;
            
     case TXK_UP:
      if (this.cursor == btn_cont) {
        if(destaque_home.visible_p == true){
          common_key.set_cursor(sobj, destaque_home);
          force_redraw();  
          return true;
        }
        common_key.set_cursor(sobj, video_controls_container);
        force_redraw();
        return true;
      }
      if(this.cursor == video_controls_container){
        if(video_player.video_box.width == 1920){
          force_redraw();
          return true;
        }        
        common_key.set_cursor(sobj, list);
        force_redraw();
        return true;
      }
      break;
            
     case TXK_RIGHT:
       if(video_player.video_box.width == 1920){
         force_redraw();
         return true;
       }
       if (this.cursor == list) {
         if(destaque_home.visible_p == true){
            common_key.set_cursor(sobj, destaque_home);
            force_redraw();
            return true;
         }else if(video_cont.visible_p == true){
            common_key.set_cursor(sobj, video_controls_container);
            force_redraw();
            return true;
         }else{
            common_key.set_cursor(sobj, btn_cont);
            force_redraw();
            return true;
         }
       }else if(this.cursor == video_controls_container){
            common_key.set_cursor(sobj, btn_cont);
            force_redraw();
            return true;        
       }else{
        return true;
       }
       break;
     case TXK_RETURN:
       if(video_player.video_box.width == 1920){
          full_screen();
          return true;
       }
       exit_appli(0);
       return true;
    }
    return false;
  },
});
extend(sobj, common_sobj);
ready_appli();