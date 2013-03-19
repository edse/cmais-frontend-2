<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
  <head>
    <title>cmais+ O portal de conteúdo da Cultura - Falta Pouco!</title>
    <meta property="og:title" content="cmais+ O portal de conteúdo da Cultura"/>
    <meta property="og:type" content="site"/>
    <meta property="og:url" content="http://cmais.com.br/falta-pouco"/>
    <meta property="og:image" content="http://cmais.com.br/images/cmais-share.jpg"/>
    <meta property="og:site_name" content="cmais+"/>
    <meta property="fb:admins" content="emerson.estrella@gmail.com"/>
    <meta property="og:description" content="A turma do Cocoricó quer te apresentar o novo portal de conteúdo da Cultura."/>
	<link rel="Stylesheet" type="text/css" href="css/tvcultura/secoes/contador.css"></link>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>cmais+ O portal de conteúdo da Cultura</title>
    <style>
		body { overflow:hidden; }
	</style>
    
	<script type="text/javascript" src="js/jquery-1.5.1.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			var now = '<% response.write(Year(Date)&"-"&Month(Date)&"-"&Day(Date)&" "&hour(now)&":"&Minute(now)&":"&Second(now)) %>';
			var schedule = '2011-04-28 17:00:00';
			
			if (now <= schedule)
			{
				$('#barracmais',window.parent.document).css('display','block').attr('height','48');
				$('#topWrapper',window.parent.document).css('display','none');

			}
		});
	</script>
</head>

	<body>
		<!-- TOPO PORTAL -->
		<div id="topo-contador">
			<a href="http://cmais.com.br" title="cmais" target="_parent"><img class="cmais" src="images/logoCMAIS.png" alt="cmais+" /></a>
            <ul class="links">
            	<li><a href="http://tvcultura.com.br" class="barra tvcultura" target="_parent" alt="TV Cultura" title="TV Cultura"></a></li>
                <li><a href="http://tvratimbum.com.br" class="barra tvratimbum" target="_parent" alt="TV Rá Tim Bum" title="TV Rá Tim Bum"></a></li>
                <li><a href="http://multicultura.com.br" class="barra multicultura" target="_parent" alt="MultiCultura" title="MultiCultura"></a></li>
                <li><a href="http://univesp.tv.br" class="barra tvunivesp" target="_parent" alt="Univesp TV" title="Univesp TV"></a></li>
                <li><a href="http://culturabrasil.com.br" class="barra culturabrasil" target="_parent" alt="Cultura Brasil" title="Cultura Brasil"></a></li>
                <li><a href="http://www.culturafm.com.br" class="barra culturafm" target="_parent" alt="Cultura FM" title="Cultura FM"></a></li>
                <li><a href="http://facebook.com/tvcultura" class="curtir facebook" target="_parent" alt="Curta" title="Curta"></a></li>
                <li><a href="http://twitter.com/tvcultura" class="curtir twitter" target="_parent" alt="Siga" title="Siga"></a></li>
                <li><a href="http://youtube.com/radarcultura" class="curtir youtube" target="_parent" alt="Assista" title="Assista"></a></li>
                <li><a href="http://www.flickr.com/people/tvcultura" class="curtir flickr" target="_parent" alt="Veja" title="Veja"></a></li>
             </ul>
		</div>
		<!-- /TOPO PORTAL -->
					
		
	</body>
</html>
