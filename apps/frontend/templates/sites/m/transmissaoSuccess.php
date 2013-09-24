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

<!--css-->
<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/sites/mob.css" type="text/css" />
<!--/css-->

<!--Body-->
<body>

<!--JQUERY MOBILE-->
<div id="cmais" data-role="page" data-fullscreen="true">
	
	<!-- TOPO -->
	<div class="headerLive">
		
		<!--LogoCmais-->
		<h2 class="logoLive">
			<img src="http://cmais.com.br/portal/images/capaPrograma/mob/aovivoLogo.png" width="100%">
		</h2>
		<!--/LogoCmais-->
		
		<!--LogoCmais-->
		<h1 class="logoCmais">
			<img src="http://cmais.com.br/portal/images/capaPrograma/mob/logoCmaisLive.png" width="100%">
		</h1>
		<!--/LogoCmais-->
		
		<h3>
			<span class="titulo"><?php echo $section->getTitle(); ?></span>
			<span class="desc"><?php echo $section->getDescription(); ?></span>
		</h3>

	</div>
	<!-- /TOPO -->
	
	<script>
	  function verificaTela()
	  {
	  	i = 360 / 640;
	  	mobWidth = screen.width;
	  	mobHeight = Math.round(screen.width * i);
	  	
	  	if (mobWidth < 640)
	  	{
	  		$('embed#mpl').attr({
	  			'width': mobWidth,
	  			'height': mobHeight
	  		});
	  	}
	  	else
	  	{
	  		$('embed#mpl').attr({
	  			'width': 640,
	  			'height': 360
	  		});
	  	}
	 	}
	 	
		$(function()
		{
			$.mobile.orientationChangeEnabled = false
			
			verificaTela();
			
			$(window).orientationchange(function()
			{
				verificaTela();
    	});
		});

	</script>
	<!-- CONTEUDO -->
	<div class="conteudoLive" style="margin: 0 auto">
		<embed type="application/x-shockwave-flash" src="http://cmais.com.br/portal/js/mediaplayer/player.swf" width="640" height="360" id="mpl" name="mpl" quality="high" allowscriptaccess="always" allowfullscreen="true" wmode="transparent" flashvars="controlbar=over&amp;autostart=true&amp;streamer=rtmp://200.136.27.12/live&amp;file=tv&amp;type=video">
	</div>
	<!-- /CONTEUDO -->
	
  <!-- mobile320x50 -->
  <div id="banner-320x50" class="banner">
    <script type='text/javascript'>
    GA_googleFillSlot("mobile2-320x50");
    </script>
  </div>
  <!-- mobile320x50 -->
		
	<!--FOOTER-->
	<div class="footerLive degrade" align="center">
		
		<div class="voltarLive" align="center">
			<a href="#" data-transition="slideup" data-rel="back" >
				<img src="http://cmais.com.br/portal/images/capaPrograma/mob/voltar-ao-site.png" width="88%">
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

