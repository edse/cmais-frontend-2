$(document).ready(function() {
  
  
  //menu principal home
  var url = window.location;
  var urlString = url.toString();
  var urlArray = urlString.split("/");
  var field = urlArray.length -1;
  
  var w_default = 62;
  
  //botao inicial da tela aberto
  for(var i=0; i<urlArray.length; i++){
    if(urlArray[i].indexOf("jogos")!=-1 || urlArray[i].indexOf("videos")!=-1 || urlArray[i].indexOf("atividades")!=-1 || urlArray[i].indexOf("personagens")!=-1){
      var urlElement = urlArray[i];
      $(".btn-"+urlElement+" .fundo").show();
      $(".btn-"+urlElement+" .borda").show();
      
      $(".btn-"+urlElement).animate({
        width:$(".btn-"+urlElement).attr("data-width")
      }, $(".btn-"+urlElement).attr("data-time"));
      
      $(".btn-"+urlElement+" .fundo").animate({
        width:$(".btn-"+urlElement).attr("data-width")
      }, $(".btn-"+urlElement).attr("data-time"));
    }
  }
  //botao inicial da tela aberto
  
  //menu principal
  $('.header-bar ul li').not($(".btn-"+urlElement)).mouseenter(function() {
    var el = $("." + $(this).attr("class") + " .fundo");
    var elBorda = $("." + $(this).attr("class") + " .borda");
    var w_time = $(this).attr("data-time");
    var w_button = $(this).attr("data-width");
    
    el.stop();
    $(this).stop();
    
    el.show();
    elBorda.show();
    $(this).animate({
      width: w_button
    }, w_time);
    el.animate({
      width:  w_button
    }, w_time);
  });
  
  $('.header-bar ul li').not($(".btn-"+urlElement)).mouseleave(function() {
    var el = $("." + $(this).attr("class") + " .fundo");
    var elBorda = $("." + $(this).attr("class") + " .borda");
    var w_back = $(this).attr("data-back")
    
    $(this).stop();
    el.stop();
    
    $(this).animate({
      width: w_default
    }, w_back);
    el.animate({
      width: w_default
    }, w_back, function(){
      if(el.width() == w_default){
        el.hide();
        elBorda.hide();
      }
    });
  });
  //menu principal  

  //menu personagens tablet
  $('.sprite-seta-down').click(function() {
    $('.filtro-personagem').stop().slideToggle('slow');
    $(".sprite-seta-down").toggleClass("ativo");
  });
  
  //aba para os pais
  $('.pais .sprite-seta-down').click(function() {
    $('.pais .content').stop().slideToggle('slow');
    $(".pais .sprite-seta-down").toggleClass("inativo");
    $(".pais .sprite-seta-up").toggleClass("ativo");
  });
  
  $('.pais .sprite-seta-up').click(function() {
    $('.pais .content').stop().slideToggle('fast');
    $(".pais .sprite-seta-down").toggleClass("inativo");
  });
  
  //menu personagens tablet
  
  $('#myTab a').click(function (e) {
    e.preventDefault();
    $(this).tab('show');
  });
  
    
    
});//document.ready