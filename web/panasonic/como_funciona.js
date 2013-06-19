//
// Copyright (C) 2013 - Fundação Padre Anchieta - All Rights Reserved.
// 

extend = function(destination, source) {
  for (var property in source)
    destination[property] = source[property];
};

var enable_keyhook = false; 

//var logo = new gimage({width: 175, height: 156, translate: [-775,380,0],   src: "imagens/logotipo.png"});
var logo = new gimage({width: 175, height: 156, translate: [-775,425,0.3],   src: "imagens/logotipo.png"});
var video_transparencia = new gbox({width: 1980, height: 1080, translate: [0,0,-1], color: [0,0,0, 210]});
var titulo = new gtext({translate: [-700, 290, 1], width: 340, color: [255,255,255,255], text: "COMO FUNCIONA",font_size: 36,});

var list_item = new container({});
list_item.components = [
  new gbox  ({translate:    [-820, 220, 0],width: 30,height: 30,   color: [235,101,74,255]}),     
  new gtext ({translate:    [-730, 220, 0],width: 80,text: "Busca",color: [255, 255, 255, 255],align: LEFT}),
  new gtextbox ({translate: [-40, 150, 0], width: 1600, height: 100, text: "Procura os vídeos da TV Cultura pelo título.",color: [255, 255, 255, 255],align: LEFT,font_size: 28,}),
  
  new gbox  ({translate:    [-820, 80, 0],width: 30,height: 30,   color: [61,175,141,255]}),
  new gtext ({translate:    [-730, 80, 0],width: 80,text: "Info", color: [255, 255, 255, 255],align: LEFT}),
  new gtextbox ({translate: [-40, 10, 0], width: 1600, height: 100, text: "Mostra mais informações sobre o vídeo selecionado.",color: [255, 255, 255, 255],align: LEFT,font_size: 28,}),
  
  new gimage({translate: [-830, -70, 0],width: 90, height: 30, src: "imagens/icone-navegar-completo.png"}),
  new gtext ({translate: [-720, -70, 0],width: 120, text: "Navegar",color: [255, 255, 255, 255],align: LEFT}),
  new gtextbox ({translate: [-40, -140, 0], width: 1600, height: 100, text: "Utiliza as teclas de navegação para escolher o vídeo que você quer assistir.",color: [255, 255, 255, 255],align: LEFT,font_size: 28,}),

  new gimage({translate: [-830, -210, 0],width: 90, height: 30, src: "imagens/icone-ok.png"}),
  new gtext ({translate: [-720, -210, 0],width: 140,text: "Selecionar",color: [255, 255, 255, 255],align: LEFT}),
  new gtextbox ({translate: [-40, -280, 0], width: 1600, height: 100, text: "Seleciona o vídeo em que o cursor está.",color: [255, 255, 255, 255],align: LEFT,font_size: 28,}),
  
  new gimage({translate: [-830, -350, 0],width: 60, height: 60, src: "imagens/icone-retornar.png"}),
  new gtext ({translate: [-730, -350, 0],width: 120,text: "Retornar",color: [255, 255, 255, 255],align: LEFT}),
  new gtextbox ({translate: [-40, -420, 0], width: 1600, height: 100, text: "Volta à tela anterior.",color: [255, 255, 255, 255],align: LEFT,font_size: 28,}), 
];

/*TEXTO DESCRICAO
var descricao =  new gtextbox({translate: [230, -150, 0], width: 1400, height: 672, color: [255,255,255,255],
text: "Como funciona a Busca: \n \nComo funciona o Botão Info: \n \nComo funciona as Setas de Navegação: \n \nComo funciona o botão Retornar: \n \n",
font_size: 28, margin_leading: 6, font_name: "F015T-regular"});
*/

var descricao  = new container({});

//FOOTER DA APLICAÇÃO
var footer = new container({});
footer.components = [
  //new gimage({translate: [490, -480, 0],width: 60,height: 60, src: "imagens/icone-navegar.png"}),
  //new gtext ({translate: [580, -480, 0],width: 120, text: "Navegar",color: [255, 255, 255, 255],align: LEFT}),
  new gimage({translate: [670, -480, 0],width: 60, height: 60, src: "imagens/icone-retornar.png"}),
  new gtext ({translate: [750, -480, 0],width: 120,text: "Retornar",color: [255, 255, 255, 255],align: LEFT}) 
];

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
             complete_off_stage (obj);
           }, 
        });
      }
     }],

  bg_image:[new gbox({ width:11520, height:6480, color:[0,0,0,255], translate:[0,0,-3325], })],
  components:[ 
    logo,
    titulo,
    list_item,
    descricao,
    footer,
   ],
  key_hook:function(up_down, key) {
    if (up_down != KEY_PRESS) return true;
    
    switch(key) {
      case TXK_HOME:
      common_out_hook();
      return true;
    }
    
    if (!enable_keyhook) return true;
    
    switch(key) {
     case TXK_RETURN:
        on_stage("main");
        return true;
    }
    return false;
  },

});

extend(sobj, common_sobj);