$(document).ready(function() {
  
  //headroom - escondendo topo no mobile
  //setInterval(function(){
   //$('#header-tablet .logo-mobile').addClass('animated').addClass('tada'); 
  //},7000);
  setInterval(function(){

    if(window.innerWidth < 980 && window.pageYOffset > 80){
      $('#voltar-topo-pagina').fadeIn("slow").addClass('animated').addClass('tada');
    }else{
      $('#voltar-topo-pagina').fadeOut("fast"); 
    } 
  },500);
  var body = document.body, html = document.documentElement;
  var height;
  var stopButton = height;
  var stopButtonTablet = height;
  
  setInterval(function() {
    height = Math.max( body.scrollHeight, body.offsetHeight, html.clientHeight, html.scrollHeight, html.offsetHeight );
    stopButton = height - $("#mobile").height();
    stopButtonTablet = height - $("#no-mobile").height(); 
    if(window.innerWidth<=500){
      if($('#voltar-topo-pagina').offset().top > stopButton){
        $('#voltar-topo-pagina').css({'position':'absolute','bottom':stopButton});
      }else{
        $('#voltar-topo-pagina').css({'position':'fixed','bottom':'0'});  
      }
    }
    if(window.innerWidth>500){
      if($('#voltar-topo-pagina').offset().top > stopButtonTablet){
        console.log("cheguei");
      }else{
        console.log("parti");  
      }
    }
  },500);
  var hMobile = "#header-mobile";
  var hTablet = "#header-tablet";
  $("#header-mobile, #header-tablet").headroom({
    "tolerance": 10,
    "offset": 205,
    "classes": {
      "initial": "animated",
      "pinned": "bounceInDown",
      "unpinned": "bounceOutUp" ,
      },
      "onPin" : function() {
        //alert(sobe);
        setTimeout(function(){
          $(hMobile+' .btn-menu,'+hMobile+' .imagem-topo').show();
          $(hMobile+' .logo-mobile').addClass('animated').addClass('tada');
          $(hMobile+' .btn-menu').addClass('animated').addClass('slideInRight');
          $(hMobile+' .imagem-topo').addClass('animated').addClass('fadeInRight');
        },1000)
      },
      "onUnpin" : function() {
        //alert(desce);
        $(hMobile+' .logo-mobile').removeClass('animated').removeClass('tada');
        $(hMobile+' .btn-menu').removeClass('animated').removeClass('slideInRight');
        $(hMobile+' .imagem-topo').removeClass('animated').removeClass('fadeInRight');
        $(hMobile+' .btn-menu,'+hMobile+' .imagem-topo, .nav-mobile, nav-tablet').fadeOut("fast");
      }
  });


  // to destroy
  //$("#header").headroom("destroy");
    
  //thumbnail video quadrado destaques de todas as telas    
  var thumbnailHeight = $('.square img').height();
  var thumbVideo = $('.rect img');
  thumbVideo.css('height', thumbnailHeight);
  window.onresize=function(){
    thumbnailHeight = $('.square img').height();
    thumbVideo.css('height', thumbnailHeight);
  };
    
    /*
    * 
    * PRINT JPGS
    * 1-a url do jpg a imprimir deve ser colocada no atributo "datasrc" da tag a
    * 2-deve conter class "print"
    * ex: <a href="javascript:;" class="print" datasrc="a_url_do_jpg" title="seu_titulo">
    * 
    */
   $('a[class*="print"]').click(function() {
      //alert($(this).attr('datasrc'));
      if (navigator.appName != 'Microsoft Internet Explorer'){
        newPage = window.open();
        newPage.document.write("<div><img src='"+$(this).attr('datasrc')+"' style='width:95%;'></div>");
        newPage.window.print();
        newPage.window.close();
        return false;
      }
    });
  
  //bug do responsive carousel que nao reconhece link
  $('#carrossel-p a, #carrossel-i a').click(function(){
    where = $(this).attr('href');
    window.location.assign(where);
  });
  
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

  if(screen.width > 768){
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
  }
  //menu principal 

  //header tablet e celular

  $('.ac-pular').click(function(){
    $('.ac-explicacao').focus();
  });
  
  $('.btn-menu').click(function(){
    $('.nav-mobile').slideToggle('fast');
  });
    
  
 

    
  function goTop(){
    $('html, body').animate({
      scrollTop:parseInt($('.container').offset().top)
    }, "slow");
  } 

  //menu personagens tablet
  $('.icone-cuidadores-abrir').click(function() {
    $('.pais .filtro-personagem').stop().slideToggle('slow');
    $(".icone-cuidadores-abrir").toggleClass("ativo");
  });
  
  //aba para os pais
  $('.pais .icone-cuidadores-abrir').click(function() {
    $('.pais .content').stop().slideToggle('slow');
    $(".pais .icone-cuidadores-abrir").toggleClass("inativo");
    $(".pais .icone-cuidadores-fechar").toggleClass("ativo");
    $(".pais .fechar-toogle").addClass("ativo");
    $('.linha').show();
    $('.redes').fadeIn();
  });
  
  $('.pais .icone-cuidadores-fechar').click(function() {
    $('.pais .content').stop().slideToggle('fast');
    $(".pais .icone-cuidadores-abrir").toggleClass("inativo");
    $('.linha, .pais .redes').hide();
    $(".pais .fechar-toogle").removeClass("ativo");
    if($('.icone-cat-abrir').hasClass('icone-cat-fechar')){
      $('.icone-cat-abrir').toggleClass('icone-cat-fechar');  
    }
    
  });
  
  //$('.icone-cat-abrir').click(function(){
    //$(this).toggleClass('icone-cat-fechar');
  //});
  
  $('.dropdown-toggle').click(function(){
    $(this).find('span').toggleClass('icone-cat-fechar');
  });
  //menu personagens tablet
  
  $('#myTab a').click(function (e) {
    e.preventDefault();
    $(this).tab('show');
  });
  
  
  
     
});//document.ready

//impressao no ie com close ativado
if (navigator.appName == 'Microsoft Internet Explorer'){
  function printDiv(divId) {
    window.frames["print_frame"].document.body.innerHTML=document.getElementById(divId).innerHTML;
    window.frames["print_frame"].window.focus();
    window.frames["print_frame"].window.print();
  }
}
