<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Cocoric&oacute; 3D - TV Cultura</title>
		<link href="/portal/cocorico/3d/css/geral.css" type="text/css" rel="stylesheet">
		<script src="/portal/cocorico/3d/js/jquery.js" type="text/javascript"></script>
		<script src="/portal/cocorico/3d/js/jquery-ui-1.8.9.min.js" type="text/javascript"></script>

    </head>
    {literal}
    <script type="text/javascript">
    
    
	$(document).ready(function(){
		$('input[type="button"]').bind('click', function(){
			if ($(this).is('.btnLigar'))
			{
				$(this).removeClass().addClass('btnDesligar');
				$('body, h1').removeClass().addClass('bg3d');
			}
			else
			{
				$(this).removeClass().addClass('btnLigar');
				$('body, h1').removeClass().addClass('bgnormal');
			}
		});
	});
	</script>
	{/literal}
    <body class="bg3d">
    	<div class="allWrapper">
        	<!--
	    	<div class="topoTvCultura">
	    		<div id="topo-portal" class="topo-geral capa-topo" style="background:#000; color:#fff; font-weight:bold; height:48px; line-height:50px;">
					<p>TOPO PORTAL</p>
				</div>
	    	</div>
            -->
            <iframe id="barracmais" src="http://www.tvcultura.com.br/cmais/barra-topo/topo.php" width="100%" height="1" style="display:none">
              <p>Sim, acredite! Seu browser não suporta iFrames.</p>
            </iframe>
            
			<div class="conteudoWrapper" align="center">
				<div class="conteudo">
					<div class="cabecalho">
						<h1 class="bg3d">Cocoric&oacute; 3D</h1>
						<div class="menu">
							
						</div>
						<div class="btn">
							<a class="glasses" href="http://cmais.com.br/quintaldacultura/oculos-3d" target="_blank">Aprenda a fazer seus oculos 3D!</a>
							<!--<input type="button" id="normal" title="bgnormal" value="Normal" />-->
							<input type="button" id="3d" class="btnDesligar" title="bg3d" />
						</div>
					</div>
					<hr />
					<div class="box-video">
						<hr />
						<div class="video">
							<object width="964" height="582" type="application/x-shockwave-flash" id="video-0001" data="http://www.youtube.com/v/Vig05K8Ta3s?version=3&amp;enablejsapi=1&amp;playerapiid=video-0001"><param name="allowScriptAccess" value="always"><param name="allowFullScreen" value="true"><param name="wmode" value="opaque"></object>
						</div>
					</div>
				</div>
			</div>	
			<hr />
			
            <!-- RODAPE -->
            <div id="rodape-portal">
                <div class="capa-voltar-topo">
    
                    <a class="voltar-topo" href="#"><span></span>voltar ao topo</a>
                </div>
                <div <?php include_partial_from_folder('sites/cocorico', 'global/rodape', array('siteSections' => $siteSections, 'displays' => $displays, 'section'=>$section, 'uri'=>$uri)) ?>
                </div>
            </div>
            <!-- /RODAPE -->
		</div>
		<script src="/portal/cocorico/3d/js/google-analytics.js" type="text/javascript"></script>        
    </body>
</html>
