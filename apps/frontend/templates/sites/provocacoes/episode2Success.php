<script type="text/javascript" src="http://cmais.com.br/portal/js/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
<script type="text/javascript" src="http://cmais.com.br/portal/js/fancybox/jquery.easing-1.3.pack.js"></script>
<script type="text/javascript" src="http://cmais.com.br/portal/js/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
<link rel="stylesheet" href="http://cmais.com.br/portal/js/fancybox/jquery.fancybox-1.3.4.css" type="text/css" media="screen" />

<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/sites/provocacoes.css" type="text/css" />
<script type="text/javascript">
	$(function() {

		// charges caruso
		$('a.galeria').fancybox();
		//$('#gallery ul li:last').remove();

	});

</script>
<?php use_helper('I18N', 'Date')
?>
<?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'asset' => $asset, 'section' => $section))
?>

<!-- CAPA SITE -->
<div class="bg-provocacoes">
  <div id="capa-site">
    <!-- BREAKING NEWS -->
    <?php if(isset($displays["alerta"])) include_partial_from_folder('blocks','global/breakingnews', array('displays' => $displays["alerta"]))
    ?>
    <!-- /BREAKING NEWS -->
    <!-- BARRA SITE -->
    <div id="barra-site">
      <div class="topo-programa">
      	topo teste
        <?php if(isset($program) && $program->id > 0):
        ?>
        <h2><a href="<?php echo $program->retriveUrl() ?>" title="<?php echo $program->getTitle() ?>"> <img title="<?php echo $program->getTitle() ?>" alt="<?php echo $program->getTitle() ?>" src="http://midia.cmais.com.br/programs/<?php echo $program->getImageThumb() ?>"> </a></h2>
        <?php endif;?>

        <?php if(isset($program) && $program->id > 0):
        ?>
        <?php include_partial_from_folder('blocks','global/like', array('site' => $site, 'uri' => $uri, 'program' => $program))
        ?>
        <?php endif;?>

        <?php if(isset($program) && $program->id > 0):
        ?>
        <!-- horario -->
        <div id="horario">
          <p><?php echo html_entity_decode($program->getSchedule())
          ?></p>
        </div>
        <!-- /horario -->
        <?php endif;?>
      </div>
      <!-- box-topo -->
      <div class="box-topo grid3">
        <?php if(count($siteSections) > 0):
        ?>
        <ul class="menu">
          <?php foreach($siteSections as $s):
          ?>
          <li><a href="<?php echo $s->retriveUrl() ?>" title="<?php echo $s->getTitle() ?>" <?php if($s->getId() == $section->getId()):?>class="ativo"<?php endif;?>><span><?php echo $s->getTitle()
          ?></span></a></li>
          <?php endforeach;?>
        </ul>
        <?php endif;?>
      </div>
      <!-- /box-topo -->
    </div>
    <!-- /BARRA SITE -->
    <!-- MIOLO -->
    <div id="miolo">
      <!-- BOX LATERAL -->
      <?php include_partial_from_folder('blocks','global/shortcuts')
      ?>
      <!-- BOX LATERAL -->
      <!-- CONTEUDO PAGINA -->
      <div id="conteudo-pagina exceptionn">
        <!-- CAPA -->
        <div class="capa grid3 exceptionn">
          <div class="tudo-provocacoes">
            <span class="bordaTopRV"></span>
            <div class="centroRV">
              <div class="video-interna">
                <ul>
                  <li class="voltarJa"><a href="javascript:back()"><span>Voltar</span></a></li>
                </ul>
                <div class="boxVideo">
                  <div class="boxVideoWrapper">
                    <object style="height:390px; width: 640px">
                      <param name="movie" value="http://www.youtube.com/v/xqvbtKJMN5s?version=3&enablejsapi=1&playerapiid=ytplayer&rel=0">
                      <param name="allowFullScreen" value="true">
                      <param name="allowScriptAccess" value="always">
                      <param name="wmode" value="opaque">
                      <embed id="ytplayer" src="http://www.youtube.com/v/xqvbtKJMN5s?version=3&enablejsapi=1&playerapiid=ytplayer&rel=0" wmode="opaque" type="application/x-shockwave-flash" allowfullscreen="true" allowscriptaccess="always" width="640" height="390"></embed>
                    </object>
                  </div>
                  <span class="faixa"></span>
                  <h3>Alexandre Padilha</h3>
                  <p class="dataPost">Programa exibido em 13 de agosto de 2012</p>
                  <p class="post">Ministro da Saúde fala no Roda Viva sobre a suspensão do comércio de planos de saúde e da situação dos hospitais no Brasil.</p>
                  <!-- barra compartilhar -->
                  <div class="box-compartilhar grid2">
                    <p class="comentar"><span></span>Compartilhe</a>
                    <div class="btn-compartilhar" style="width: auto;">
                      <p class="compartilhar"></p>
                      <div class="face" style="display:block; width: auto;">
                        <div style="display:block; float: left; margin-right: 40px;">
                          <g:plusone size="medium" count="false"></g:plusone>
                        </div>
                        <div style="display:block; float: left; margin-right: 0px;">
                          <fb:like href="http://tvcultura.cmais.com.br/provocacoes/alexandre-padilha" layout="button_count" show_faces="false" send="true" width="160"></fb:like>
                        </div>
                        <div style="display:block; float: left; text-align: left;">
                          <a href="http://twitter.com/share" class="twitter-share-button" data-count="horizontal" data-via="tvcultura" data-related="tvcultura">Tweet</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- /barra compartilhar -->
                  <div class="comentarios">
                    <p class="btn-comentarios"><span>Coment&aacute;rios</span></p>
                    <div style="display:block" class="comentario-fb grid2">
                      <fb:comments href="http://tvcultura.cmais.com.br/provocacoes/alexandre-padilha" numposts="3" width="610" publish_feed="true"></fb:comments>
                    </div>
                  </div>
                </div>
                <div class="veja">
                  <p class="btn-veja"><span>Veja também</span></p>
                  <div class="vejaTambem">
                    <ul>
                      <li><a href="http://tvcultura.cmais.com.br/rodaviva/alberto-dines-bastidores-roda-viva-datena" class="aImg"> <img name="Alberto Dines - Bastidores Roda Viva Datena" alt="Alberto Dines - Bastidores Roda Viva Datena" src="http://img.youtube.com/vi/sTjERQzhO1w/1.jpg"> <span class="ico"></span> </a><a href="http://tvcultura.cmais.com.br/rodaviva/alberto-dines-bastidores-roda-viva-datena" class="aTxt"> <span class="titulo">Bloco 1 Bloco 1 Bloco 1 Bloco 1</span> <span class="nomeRlacionado">Alberto Dines - Bastidores Roda Viva Datena Alberto Dines - Bastidores Roda Viva DatenaAlberto Dines - Bastidores Roda Viva DatenaAlberto Dines - Bastidores Roda Viva DatenaAlberto Dines - Bastidores Roda Viva DatenaAlberto Dines - Bastidores Roda Viva DatenaAlberto Dines - Bastidores Roda Viva Datena</span> <span class="nomeTxt">Exibido em 23/06/2011</span> </a></li>
                      <li><a href="http://tvcultura.cmais.com.br/rodaviva/alberto-dines-bastidores-roda-viva-datena" class="aImg"> <img name="Alberto Dines - Bastidores Roda Viva Datena" alt="Alberto Dines - Bastidores Roda Viva Datena" src="http://img.youtube.com/vi/sTjERQzhO1w/1.jpg"> <span class="ico"></span> </a><a href="http://tvcultura.cmais.com.br/rodaviva/alberto-dines-bastidores-roda-viva-datena" class="aTxt"> <span class="titulo">Bloco 2</span> <span class="nomeRlacionado">Alberto Dines - Bastidores Roda Viva Datena</span> <span class="nomeTxt">Exibido em 23/06/2011</span> </a></li>
                      <li><a href="http://tvcultura.cmais.com.br/rodaviva/alberto-dines-bastidores-roda-viva-datena" class="aImg"> <img name="Alberto Dines - Bastidores Roda Viva Datena" alt="Alberto Dines - Bastidores Roda Viva Datena" src="http://img.youtube.com/vi/sTjERQzhO1w/1.jpg"> <span class="ico"></span> </a><a href="http://tvcultura.cmais.com.br/rodaviva/alberto-dines-bastidores-roda-viva-datena" class="aTxt"><span class="titulo">Bloco 2</span> <span class="nomeRlacionado">Alberto Dines - Bastidores Roda Viva Datena</span><span class="nomeTxt">Exibido em 23/06/2011</span></a></li>
                      <li><a href="http://tvcultura.cmais.com.br/rodaviva/alberto-dines-bastidores-roda-viva-datena" class="aImg"> <img name="Alberto Dines - Bastidores Roda Viva Datena" alt="Alberto Dines - Bastidores Roda Viva Datena" src="http://img.youtube.com/vi/sTjERQzhO1w/1.jpg"> <span class="ico"></span> </a><a href="http://tvcultura.cmais.com.br/rodaviva/alberto-dines-bastidores-roda-viva-datena" class="aTxt"><span class="titulo">Bloco 2</span> <span class="nomeRlacionado">Alberto Dines - Bastidores Roda Viva Datena</span><span class="nomeTxt">Exibido em 23/06/2011</span></a></li>
                      <li><a href="http://tvcultura.cmais.com.br/rodaviva/alberto-dines-bastidores-roda-viva-datena" class="aImg"> <img name="Alberto Dines - Bastidores Roda Viva Datena" alt="Alberto Dines - Bastidores Roda Viva Datena" src="http://img.youtube.com/vi/sTjERQzhO1w/1.jpg"> <span class="ico"></span> </a><a href="http://tvcultura.cmais.com.br/rodaviva/alberto-dines-bastidores-roda-viva-datena" class="aTxt"><span class="titulo">Bloco 2</span> <span class="nomeRlacionado">Alberto Dines - Bastidores Roda Viva Datena</span><span class="nomeTxt">Exibido em 23/06/2011</span></a></li>
                      <li><a href="http://tvcultura.cmais.com.br/rodaviva/alberto-dines-bastidores-roda-viva-datena" class="aImg"> <img name="Alberto Dines - Bastidores Roda Viva Datena" alt="Alberto Dines - Bastidores Roda Viva Datena" src="http://img.youtube.com/vi/sTjERQzhO1w/1.jpg"> <span class="ico"></span> </a><a href="http://tvcultura.cmais.com.br/rodaviva/alberto-dines-bastidores-roda-viva-datena" class="aTxt"><span class="titulo">Bloco 2</span> <span class="nomeRlacionado">Alberto Dines - Bastidores Roda Viva Datena</span><span class="nomeTxt">Exibido em 23/06/2011</span></a></li>
                      <li><a href="http://tvcultura.cmais.com.br/rodaviva/alberto-dines-bastidores-roda-viva-datena" class="aImg"> <img name="Alberto Dines - Bastidores Roda Viva Datena" alt="Alberto Dines - Bastidores Roda Viva Datena" src="http://img.youtube.com/vi/sTjERQzhO1w/1.jpg"> <span class="ico"></span> </a><a href="http://tvcultura.cmais.com.br/rodaviva/alberto-dines-bastidores-roda-viva-datena" class="aTxt"><span class="titulo">Bloco 2</span> <span class="nomeRlacionado">Alberto Dines - Bastidores Roda Viva Datena</span><span class="nomeTxt">Exibido em 23/06/2011</span></a></li>
                      <li><a href="http://tvcultura.cmais.com.br/rodaviva/alberto-dines-bastidores-roda-viva-datena" class="aImg"> <img name="Alberto Dines - Bastidores Roda Viva Datena" alt="Alberto Dines - Bastidores Roda Viva Datena" src="http://img.youtube.com/vi/sTjERQzhO1w/1.jpg"> <span class="ico"></span> </a><a href="http://tvcultura.cmais.com.br/rodaviva/alberto-dines-bastidores-roda-viva-datena" class="aTxt"><span class="titulo">Bloco 2</span> <span class="nomeRlacionado">Alberto Dines - Bastidores Roda Viva Datena</span><span class="nomeTxt">Exibido em 23/06/2011</span></a></li>
                      <li><a href="http://tvcultura.cmais.com.br/rodaviva/alberto-dines-bastidores-roda-viva-datena" class="aImg"> <img name="Alberto Dines - Bastidores Roda Viva Datena" alt="Alberto Dines - Bastidores Roda Viva Datena" src="http://img.youtube.com/vi/sTjERQzhO1w/1.jpg"> <span class="ico"></span> </a><a href="http://tvcultura.cmais.com.br/rodaviva/alberto-dines-bastidores-roda-viva-datena" class="aTxt"><span class="titulo">Bloco 2</span> <span class="nomeRlacionado">Alberto Dines - Bastidores Roda Viva Datena</span><span class="nomeTxt">Exibido em 23/06/2011</span></a></li>
                      <li><a href="http://tvcultura.cmais.com.br/rodaviva/alberto-dines-bastidores-roda-viva-datena" class="aImg"> <img name="Alberto Dines - Bastidores Roda Viva Datena" alt="Alberto Dines - Bastidores Roda Viva Datena" src="http://img.youtube.com/vi/sTjERQzhO1w/1.jpg"> <span class="ico"></span> </a><a href="http://tvcultura.cmais.com.br/rodaviva/alberto-dines-bastidores-roda-viva-datena" class="aTxt"><span class="titulo">Bloco 2</span> <span class="nomeRlacionado">Alberto Dines - Bastidores Roda Viva Datena</span><span class="nomeTxt">Exibido em 23/06/2011</span></a></li>
                      <li><a href="http://tvcultura.cmais.com.br/rodaviva/alberto-dines-bastidores-roda-viva-datena" class="aImg"> <img name="Alberto Dines - Bastidores Roda Viva Datena" alt="Alberto Dines - Bastidores Roda Viva Datena" src="http://img.youtube.com/vi/sTjERQzhO1w/1.jpg"> <span class="ico"></span> </a><a href="http://tvcultura.cmais.com.br/rodaviva/alberto-dines-bastidores-roda-viva-datena" class="aTxt"><span class="titulo">Bloco 2</span> <span class="nomeRlacionado">Alberto Dines - Bastidores Roda Viva Datena</span><span class="nomeTxt">Exibido em 23/06/2011</span></a></li>
                      <li><a href="http://tvcultura.cmais.com.br/rodaviva/alberto-dines-bastidores-roda-viva-datena" class="aImg"> <img name="Alberto Dines - Bastidores Roda Viva Datena" alt="Alberto Dines - Bastidores Roda Viva Datena" src="http://img.youtube.com/vi/sTjERQzhO1w/1.jpg"> <span class="ico"></span> </a><a href="http://tvcultura.cmais.com.br/rodaviva/alberto-dines-bastidores-roda-viva-datena" class="aTxt"><span class="titulo">Bloco 2</span> <span class="nomeRlacionado">Alberto Dines - Bastidores Roda Viva Datena</span><span class="nomeTxt">Exibido em 23/06/2011</span></a></li>
                    </ul>
                    <a href="" class="sugestoes"><span>mais vídeos</span></a>
                  </div>
                  <div class="charges">
                    <h3>Fotos do Programa</h3>
                    <div class="box-charges">
                      <div id="gallery">
                        <ul>
                          <li><a title="Charge Datena" href="http://midia.cmais.com.br/assets/image/image-6-b/b8c65954a8bea91a6aa3314dc101f82f397980e1.jpg" rel="galeria" class="galeria"> <img src="http://midia.cmais.com.br/assets/image/image-6-b/b8c65954a8bea91a6aa3314dc101f82f397980e1.jpg" alt="Charge Datena"> </a></li>
                          <li><a title="Charge Datena" href="http://midia.cmais.com.br/assets/image/image-6-b/29e5f1aedc46c0f8eb4979dbe2a61f487e3b67c9.jpg" rel="galeria" class="galeria"> <img src="http://midia.cmais.com.br/assets/image/image-6-b/29e5f1aedc46c0f8eb4979dbe2a61f487e3b67c9.jpg" alt="Charge Datena"> </a></li>
                          <li><a title="Charge Datena" href="http://midia.cmais.com.br/assets/image/image-6-b/a95204d0362520afb4d4243b3b34a016ec09d251.jpg" rel="galeria" class="galeria"> <img src="http://midia.cmais.com.br/assets/image/image-6-b/a95204d0362520afb4d4243b3b34a016ec09d251.jpg" alt="Charge Datena"> </a></li>
                          <li><a title="Charge Datena" href="http://midia.cmais.com.br/assets/image/image-6-b/9185fa75793e838ffebabc03ce4ab37fe257bcdd.jpg" rel="galeria" class="galeria"> <img src="http://midia.cmais.com.br/assets/image/image-6-b/9185fa75793e838ffebabc03ce4ab37fe257bcdd.jpg" alt="Charge Datena"> </a></li>
                          <li><a title="Charge Datena" href="http://midia.cmais.com.br/assets/image/image-6-b/6b5a76cd2d835b94439c8a353da593a133ac4b82.jpg" rel="galeria" class="galeria"> <img src="http://midia.cmais.com.br/assets/image/image-6-b/6b5a76cd2d835b94439c8a353da593a133ac4b82.jpg" alt="Charge Datena"> </a></li>
                          <li><a title="Charge Datena" href="http://midia.cmais.com.br/assets/image/image-6-b/67c23d9f6aeeda37bee5ea244a3ffd9ef8783fa1.jpg" rel="galeria" class="galeria"> <img src="http://midia.cmais.com.br/assets/image/image-6-b/67c23d9f6aeeda37bee5ea244a3ffd9ef8783fa1.jpg" alt="Charge Datena"> </a></li>
                          <li><a title="Charge Datena" href="http://midia.cmais.com.br/assets/image/image-6-b/8f3130948a98233db5c4b6ab2810bad763e4cd4d.jpg" rel="galeria" class="galeria"> <img src="http://midia.cmais.com.br/assets/image/image-6-b/8f3130948a98233db5c4b6ab2810bad763e4cd4d.jpg" alt="Charge Datena"> </a></li>
                          <li><a title="Charge Datena" href="http://midia.cmais.com.br/assets/image/image-6-b/dfeb3c5c812daee1f249d5f627c1c0a680502465.jpg" rel="galeria" class="galeria"> <img src="http://midia.cmais.com.br/assets/image/image-6-b/dfeb3c5c812daee1f249d5f627c1c0a680502465.jpg" alt="Charge Datena"> </a></li>
                          <li><a title="Charge Datena" href="http://midia.cmais.com.br/assets/image/image-6-b/c22f747b070430bed3e81e54c48e3c7b6bbcbe17.jpg" rel="galeria" class="galeria"> <img src="http://midia.cmais.com.br/assets/image/image-6-b/c22f747b070430bed3e81e54c48e3c7b6bbcbe17.jpg" alt="Charge Datena"> </a></li>
                          <li><a title="Charge Datena" href="http://midia.cmais.com.br/assets/image/image-6-b/0aaa04df99f2354112a4ed8ff98ebf601cdb291d.jpg" rel="galeria" class="galeria"> <img src="http://midia.cmais.com.br/assets/image/image-6-b/0aaa04df99f2354112a4ed8ff98ebf601cdb291d.jpg" alt="Charge Datena"> </a></li>
                          <li><a title="Charge Datena" href="http://midia.cmais.com.br/assets/image/image-6-b/fcd1643b3b68dddf298910dd0744de5dd6ff7ec2.jpg" rel="galeria" class="galeria"> <img src="http://midia.cmais.com.br/assets/image/image-6-b/fcd1643b3b68dddf298910dd0744de5dd6ff7ec2.jpg" alt="Charge Datena"> </a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="box-publicidade" style="margin-top:20px;">
                    <!-- tvcultura-homepage-300x250 -->
                    <script type="text/javascript">
						GA_googleFillSlot("cmais-assets-300x250");

                    </script>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <span class="bordaBottomRV"></span>
        </div>
        <!-- capa-->
      </div>
      <!-- / conteudo pagina -->
    </div>
    <!-- /miolo-->
  </div>
  <!-- /capa site -->
</div>
<!-- / bg-provoca -->

