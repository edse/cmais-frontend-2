<!DOCTYPE html>
<html>
  <head> 
  <!--PUBLICIDADE-->
  <script type='text/javascript' src='http://partner.googleadservices.com/gampad/google_service.js'>
  </script>
  <script type='text/javascript'>
  GS_googleAddAdSenseService("ca-pub-6681834746443470");
  GS_googleEnableAllServices();
  </script>
  <script type='text/javascript'>
  GA_googleAddSlot("ca-pub-6681834746443470", "mobile2-320x50");
  </script>
  <script type='text/javascript'>
  GA_googleFetchAds();
  </script>
  <!--/PUBLICIDADE-->  
  <title>cmais+ Mobile</title> 
  
  <!--HEADER PADRAO JQUERY MOBILE-->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"> 
  <meta http-equiv="Content-type" content="text/html; charset=utf-8" />

  <link rel="stylesheet" href="http://code.jquery.com/mobile/1.0/jquery.mobile-1.0.min.css" />


  <script src="http://code.jquery.com/jquery-1.6.4.min.js"></script>
  <!--CARROSSEL INDEX-->
  <script src="/js/touchcarousel/jquery.touchcarousel-1.1.min.js"></script> 
  <!--/CARROSSEL INDEX-->
  <script src="http://code.jquery.com/mobile/1.0/jquery.mobile-1.0.min.js"></script>
  <script src="http://cmais.com.br/portal/js/portal.js"></script>
  <script>
  /*
		if ((screen.width * screen.height) / 600 >= 800)
		{
			if (window.location.href.indexOf("?force=1") < 0)
			{
				window.location="http://cmais.com.br";
			}
			else
			{
				setCookie('mobile','yes','','/','.cmais.com.br');
			}				
		}
		else
		{
			setCookie('mobile','yes','','/','.cmais.com.br');
		}
		*/
  </script>
  
  <!--GOOGLE ANALYTICS-->
  <script type="text/javascript">
      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-22770265-1']);
      _gaq.push(['_setDomainName', 'cmais.com.br']);
      _gaq.push(['_setAllowHash', 'false']);
      _gaq.push(['_trackPageview']);
      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();
  </script>
  <!--/GOOGLE ANALYTICS-->
    
</head>
<!--/HEADER PADRAO JQUERY MOBILE-->

<!--Body-->
</body>
<!--css-->
<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/sites/mob.css" type="text/css" />
<!--/css-->

<!--JQUERY MOBILE-->
<div data-role="page" align="center">
  
  <!-- TOPO -->
  <div class="header">
    
    <!-- FIO LARANJA -->
    <div class="fio"></div>
    <!-- /FIO LARANJA -->
    
    <!-- BOTAO AO VIVO -->
    <div class="aovivo" align="center">
      <a href="/aovivo" data-transition="slidedown" rel="external">
        <img src="http://cmais.com.br/portal/images/capaPrograma/mob/aovivo.png" width="90%">
      </a>
    </div>  
    <!-- /BOTAO AO VIVO -->
    
    <!-- LOGO CMAIS -->
    <a href="/" data-transition="flip" class="logo">
      <img src="http://cmais.com.br/portal/images/capaPrograma/mob/logoCmais.png" alt="Cmais" width="100%"/>
    </a>  
    <!-- /LOGO CMAIS -->
    <!--Swipe Carousel / ACCORDIN-->
       <script type="text/javascript">
          //swipe-verificação se a tela esta na vertical ou horizontal
          var quant = 2;
          var liga;
          var orientacao = window.orientation;
          
          function isDevice(OSName)
          {
            var system = navigator.appVersion.toLowerCase(); // get local system values
            var OSName = OSName.toLowerCase(); // put parameter value to lowecase
             
            // put some parameters value in standard names
            if (OSName == "macos") OSName = "mac";
            if (OSName == "windows") OSName = "win";
            if (OSName == "unix") OSName = "x11";
               
            if (system.indexOf(OSName) != -1)
              return true;
            else
              return false;
          }
          if (isDevice('Android'))
            $.mobile.orientationChangeEnabled = false;
          
          $(function(){
            
            
                      
            function verificaTela(){
              //orintacao para iphone e samsung galaxy
             
              if($('#cmais').width() < 410 ){
                $('#destaque').css('width','320px');
                quant = 2;
                liga = true;
              }else if($('#cmais').width() < 500 ){
                $('#destaque').css('width','480px');
                quant = 3;
                liga = true;
              }else if($('#cmais').width() < 764 ){
                $('#destaque').css('width','640px');
                quant = 4;
                liga = true;
              }else if($('#cmais').width() > 800 ){
                $('#destaque').css('width','100%');
                quant = 5;
                liga = false;
              }
           }
            
            //tira quant de paginas para o iphone
            verificaTela();
            $(window).orientationchange(function(){
              verificaTela();
              if($('#destaque').width() >= 410){
                $('.tc-paging-item:contains("2")').hide();
              }else{
                $('.tc-paging-item:contains("2")').show();
              }
              
           })

          //swipe especificações
          $("#carousel-single-image").touchCarousel({
            pagingNav: liga,
            scrollbar: false,
            directionNavAutoHide: false,        
            itemsPerMove: quant,        
            loopItems: liga,        
            directionNav: liga,
            autoplay: liga,
            autoplayDelay: 4000,
            useWebkit3d: liga,
            transitionSpeed: 400
          });
          
          //setas do accordin
          $('.titulo h3').click(function(){
          var number = $(this).parent().attr('name');
  
              if($('.titulo h3').next().is(':visible')){
                $('.seta').removeClass('mudaPosicao');
                $('.'+number+'.seta').addClass('mudaPosicao');
              }else if($('.titulo h3').next().is(':hidden')){
                $('.seta').removeClass('mudaPosicao');
              }
          });

        });
        </script>
        
  <!--BUBBLE BOOKMARK-->
  <link rel="stylesheet" href="/js/bubblemark/css/add2home.css">
  <link rel="apple-touch-icon" href="http://cmais.com.br/portal/images/capaPrograma/mob/ico-cmais-mobile.png">
  <script type="text/javascript">
  /*
  touchIcon = getCookie('touchIconAutoStart');
  if (!touchIcon) {
  	touchIcon = setCookie('touchIconAutoStart','false',30);
  }
  */
	
  var addToHomeConfig = {
    autostart: true,
    animationIn: 'bubble',
    animationOut: 'drop',
    lifespan:10000,
    expire:0,
    touchIcon:true,
    arrow:true,
    message:'. Instale esta Web App no seu <strong>%device</strong>. Clique em %icon e <strong>Adicionar à Tela Início</strong> .'
  };
  //alert(addToHomeConfig.autostart);
  </script>
  <script type="application/javascript" src="/js/bubblemark/add2home.js"></script>
  <!--script>
  // get your button...
  var my_button = $(".my_button_class");
  
  // first, bind the touch start event to your button to activate some new style...
  my_button.bind("touchstart", function() {
      $(this).addClass("button_active");
  });
  
  // next, bind the touch end event to the button to deactivate the added style...
  my_button.bind("touchend", function() {
      $(this).removeClass("button_active");
  });

  </script>
  <script type="application/javascript" src="/js/bubblemark/add2home.js"></script-->
  <!--BUBBLE BOOKMARK-->


    <!-- BOTOES NAVEGACAO -->
    <div class="botoes">
      <?php
      $pgs = array(0=>"noticia",1=> "asset",2=>"programas", 3=>"culturabrasil",4=>"culturafm");
    
      $noticiaA = strpos($_SERVER["REQUEST_URI"], $pgs[0]);
      $noticiaB = strpos($_SERVER["REQUEST_URI"], $pgs[1]);
      $programaA = strpos($_SERVER["REQUEST_URI"], $pgs[2]);
      $radioA = strpos($_SERVER["REQUEST_URI"], $pgs[3]);
      $radioB = strpos($_SERVER["REQUEST_URI"], $pgs[4]);
      ?>
      <a href="/noticias" class="first <?php if($noticiaA==true ||$noticiaB==true) echo " pgSelecionada"?>" data-transition="slide" rel="external">
        <p>NOTÍCIAS</p>
        <!--img src="http://cmais.com.br/portal/images/capaPrograma/mob/btn-noticias.png"/-->
      </a>
      <a href="/programas" class="middle <?php if($programaA==true) echo " pgSelecionada"?>" data-transition="slide" rel="external">
         <p>PROGRAMAS</p>
         <!--img src="http://cmais.com.br/portal/images/capaPrograma/mob/btn-programas.png"/-->
      </a>
      <a href="/culturabrasil" class="<?php if($radioA==true || $radioB==true) echo " pgSelecionada"?>" data-transition="slide" rel="external">
         <p>RÁDIO</p>
         <!--img src="http://cmais.com.br/portal/images/capaPrograma/mob/btn-radio.png"/-->
      </a>  
    </div>  
    
    <!-- FIO PRETO -->
    <div class="fioblack"></div>
    <!-- /FIO PRETO -->
    
  </div>
  <!-- /TOPO -->
  
  <?php use_helper('I18N', 'Date') ?> 