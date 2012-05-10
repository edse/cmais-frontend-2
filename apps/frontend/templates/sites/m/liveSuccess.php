
<!DOCTYPE html>
<html>
  <head> 
  <title>Cmais</title> 
  
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
			<span class="titulo">Próximos programas ao vivo</span>
			<span class="desc">Pequena descrição sobre a sessão de atrações ao vivo</span>
		</h3>

	</div>
	<!-- /TOPO -->
	
	<!-- CONTEUDO -->
	<div class="conteudoLive">
		
 	<!-- lista programas calendario -->
    <?php include_partial_from_folder('blocks','global/liveMobileCmais') ?>
  <!-- /lista programas calendario -->
      
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

