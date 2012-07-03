<!DOCTYPE html>
<html>
  <head> 
  <title>cmais+ Mobile</title> 
  
  <!--HEADER PADRAO JQUERY MOBILE-->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"> 
  <meta http-equiv="Content-type" content="text/html; charset=utf-8" />

  <link rel="stylesheet" href="http://code.jquery.com/mobile/1.0/jquery.mobile-1.0.min.css" />


  <script src="http://code.jquery.com/jquery-1.6.4.min.js"></script>
  <script src="http://code.jquery.com/mobile/1.0/jquery.mobile-1.0.min.js"></script>
  <script language="Javascript" type="text/javascript" src="/portal/js/contador/js/jquery.lwtCountdown-1.0.js"></script>
  <link rel="stylesheet" href="/portal/css/tvcultura/secoes/aovivo.css" type="text/css" />

  
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
  <script>
	  var ts = null;
	  var te = null;
  
	  function checkStreamingStart(){
	    var request = $.ajax({
	      dataType: 'jsonp',
	      success: function(data) {
	        eval(data);
	      },
	      url: '/ajax/streaming'
	    });
	  }
  
	  function checkStreamingEnd(){
	    var request = $.ajax({
	      dataType: 'jsonp',
	      success: function(data) {
	        eval(data);
	        //if (data != "")
	        //	history.back(); 
	      },
	      url: '/ajax/streamingend'
	    });
	  }
	  
	  $(window).load(function(){
	    checkStreamingStart();
	    te=setInterval("checkStreamingEnd()",60000);
	  });
  </script>
  
  
</head>
<!--/HEADER PADRAO JQUERY MOBILE-->

<!--css-->
<link rel="stylesheet" href="/portal/css/tvcultura/sites/mob.css" type="text/css" />
<!--/css-->

<!--Body-->
<body>

<!--JQUERY MOBILE-->
<div data-role="page">
	
	<!-- TOPO -->
	<div class="headerLive">
		
		<!--LogoCmais-->
		<h2 class="logoLive">
			<img src="/portal/images/capaPrograma/mob/aovivoLogo.png" width="100%">
		</h2>
		<!--/LogoCmais-->
		
		<!--LogoCmais-->
		<h1 class="logoCmais">
			<img src="/portal/images/capaPrograma/mob/logoCmaisLive.png" width="100%">
		</h1>
		<!--/LogoCmais-->
		
		<h3>
			<span class="titulo"><?php echo $section->getTitle(); ?></span>
			<span class="desc"><?php echo $section->getDescription(); ?></span>
		</h3>

	</div>
	<!-- /TOPO -->
	<script>
	/*
		$(function() {
			//screen.width * screen.height
			//$("#mpl").attr('width',screen.width);
			/*
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
			
		};)
*/
	</script>
	<!-- CONTEUDO -->
	<div class="conteudoLive">
		<div id="livestream2" style="display: none;"><p>Seu browser não suporta Flash.</p></div>
		<!-- embed type="application/x-shockwave-flash" src="/portal/js/mediaplayer/player.swf" width="640" height="364" id="mpl" name="mpl" quality="high" allowscriptaccess="always" allowfullscreen="true" wmode="transparent" flashvars="controlbar=over&amp;autostart=true&amp;streamer=rtmp://200.136.27.12/live&amp;file=tv&amp;type=video"-->		
	</div>
	<!-- /CONTEUDO -->
		
	<!--FOOTER-->
	<div class="footerLive degrade" align="center">
		
		<div class="voltarLive" align="center">
			<a href="#" data-transition="slideup" data-rel="back" >
				<img src="/portal/images/capaPrograma/mob/voltar-ao-site.png" width="88%">
			</a>
		</div>
		<div class="fio"></>
		
	</div>
	<!--/FOOTER-->
	
</div>
<!--/JQUERY MOBILE-->
</body>
<!--/Body-->

</html>
<!--/html-->

