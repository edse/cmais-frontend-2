<script type="text/javascript" src="http://cmais.com.br/portal/js/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
<script type="text/javascript" src="http://cmais.com.br/portal/js/fancybox/jquery.easing-1.3.pack.js"></script>
<script type="text/javascript" src="http://cmais.com.br/portal/js/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
<link rel="stylesheet" href="http://cmais.com.br/portal/js/fancybox/jquery.fancybox-1.3.4.css" type="text/css" media="screen" />

<script type="text/javascript" src="http://cmais.com.br/portal/js/mediaplayer/swfobject.js"></script>
<script type="text/javascript" src="http://cmais.com.br/portal/js/jquery.nivo.slider.pack.js"></script>
<script type="text/javascript" src="http://cmais.com.br/portal/js/validate/jquery.validate.js"></script>

<script type="text/javascript">
	$(function() {

		// acervo em destaque
		$('.carrossel').jcarousel({
			wrap : "both"
		});
		
		// charges caruso
		$('a.img').fancybox();
		//$('#gallery ul li:last').remove();

	});

</script>

<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/secoes/defaultPrograma.css" type="text/css" />
<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/sites/provocacoes.css" type="text/css" />


<?php use_helper('I18N', 'Date') ?>
<?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'section' => $section)) ?>

<!-- CAPA SITE -->
<div class="bg-provocacoes" id="home">
  <div id="capa-site">
    <!-- BREAKING NEWS -->
    <?php if(isset($displays["alerta"])) include_partial_from_folder('blocks','global/breakingnews', array('displays' => $displays["alerta"]))
    ?>
    <!-- /BREAKING NEWS -->
    <!-- BARRA SITE -->
    <div id="barra-site">
      <div class="topo-programa">
        <?php if(isset($program) && $program->id > 0):
        ?>
        <h2><a href="<?php echo $program->retriveUrl() ?>" title="<?php echo $program->getTitle() ?>"> <img title="<?php echo $program->getTitle() ?>" alt="<?php echo $program->getTitle() ?>" src="http://cmais.com.br/portal/images/capaPrograma/provocacoes/logo.png"> </a></h2>
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
            <p><?php echo html_entity_decode($program->getSchedule()) ?></p>
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
                <div class="boxVideo">
                	
                  <div class="boxVideoWrapper">
                   <iframe width="640" height="360" src="http://www.youtube.com/embed/YStf4uTXiqw" frameborder="0" allowfullscreen></iframe>
                  </div>
             
                  <h3>Alexandre Padilha</h3>
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
                
                  <div class="acervoDestaque" style="display: block;">
                    <h3>acervo em destaque</h3>
                    <div class="carrossel jcarousel-container jcarousel-container-horizontal" style="position: relative; display: block;">
                      <div class="jcarousel-clip jcarousel-clip-horizontal" style="overflow: hidden; position: relative;">
                        <ul class="jcarousel-list jcarousel-list-horizontal" style="overflow: hidden; position: relative; top: 0px; margin: 0px; padding: 0px; left: 0px; width: 110px;">
                          <li class="jcarousel-item jcarousel-item-horizontal jcarousel-item-1 jcarousel-item-1-horizontal" style="float: left; list-style: none outside none;" jcarouselindex="1"><a href="http://tvcultura.cmais.com.br/rodaviva/roda-viva-elza-soares" class="aImg"> <img alt="Roda Viva - Elza Soares" src="http://img.youtube.com/vi/8ko447IATMk/1.jpg"> <span class="ico"></span> </a><a href="http://tvcultura.cmais.com.br/rodaviva/roda-viva-elza-soares" class="aTxt"> <span class="nomeRlacionado">Elza Soares</span> <span class="nomeTxt">A cantora Elza Soares esteve no centro do Roda Viva em setembro de 2002.</span> </a></li>
                          <li class="jcarousel-item jcarousel-item-horizontal jcarousel-item-2 jcarousel-item-2-horizontal" style="float: left; list-style: none outside none;" jcarouselindex="2"><a href="http://tvcultura.cmais.com.br/rodaviva/roda-viva-andre-liohn-30-04-2012" class="aImg"> <img alt="Roda Viva - André Liohn - 30/04/2012" src="http://img.youtube.com/vi/SG020xwbFG0/1.jpg"> <span class="ico"></span> </a><a href="http://tvcultura.cmais.com.br/rodaviva/roda-viva-andre-liohn-30-04-2012" class="aTxt"> <span class="nomeRlacionado">André Liohn</span> <span class="nomeTxt">Fotógrafo de guerra fala da vida em zonas de conflito.</span> </a></li>
                          <li class="jcarousel-item jcarousel-item-horizontal jcarousel-item-3 jcarousel-item-3-horizontal" style="float: left; list-style: none outside none;" jcarouselindex="3"><a href="http://tvcultura.cmais.com.br/rodaviva/roda-viva-david-lynch" class="aImg"> <img alt="Roda Viva - David Lynch - 03/11/2008" src="http://img.youtube.com/vi/0MpMXPcrewI/1.jpg"> <span class="ico"></span> </a><a href="http://tvcultura.cmais.com.br/rodaviva/roda-viva-david-lynch" class="aTxt"> <span class="nomeRlacionado">David Lynch</span> <span class="nomeTxt">Entrevista de 2008 com diretor norte-americano.</span> </a></li>
                          <li class="jcarousel-item jcarousel-item-horizontal jcarousel-item-4 jcarousel-item-4-horizontal" style="float: left; list-style: none outside none;" jcarouselindex="4"><a href="http://tvcultura.cmais.com.br/rodaviva/roda-viva-ariano-suassuna" class="aImg"> <img alt="Roda Viva - Ariano Suassuna" src="http://img.youtube.com/vi/FkR_qqmaLk8/1.jpg"> <span class="ico"></span> </a><a href="http://tvcultura.cmais.com.br/rodaviva/roda-viva-ariano-suassuna" class="aTxt"> <span class="nomeRlacionado">Ariano Suassuna</span> <span class="nomeTxt">Entrevista de 2002 com dramaturgo.</span> </a></li>
                          <li class="jcarousel-item jcarousel-item-horizontal jcarousel-item-5 jcarousel-item-5-horizontal" style="float: left; list-style: none outside none;" jcarouselindex="5"><a href="http://tvcultura.cmais.com.br/chicoanysio/roda-viva-chico-anysio-1" class="aImg"> <img alt="Roda Viva - Chico Anysio" src="http://img.youtube.com/vi/L42dwVjFn3U/1.jpg"> <span class="ico"></span> </a><a href="http://tvcultura.cmais.com.br/chicoanysio/roda-viva-chico-anysio-1" class="aTxt"> <span class="nomeRlacionado">Chico Anysio</span> <span class="nomeTxt">Entrevista de 1993.</span> </a></li>
                        </ul>
                      </div><div class="jcarousel-prev jcarousel-prev-horizontal" style="display: block;"></div><div class="jcarousel-next jcarousel-next-horizontal" style="display: block;"></div>
                    </div>
                    <a href="/rodaviva/programas" class="acervoCompleto"><span>+ Acervo completo</span></a>
                  </div>
               
                  <div class="transmissao mg">
                    <h3>Poema e Textos</h3>
                    <div class="box-transmissao">
                      <div class="ao-vivo">
                        <div id="aovivo"><img alt="Fique ligado!" src="http://midia.cmais.com.br/assets/image/image-3-b/25af2dac7a642138d2f325f94f561fb1b89fc608.jpg">
                        </div>
                      </div>
                      <div class="ao-vivo-info">
                        <h4><a href="/rodaviva/transmissao">Fique ligado</a></h4>
                        <p><a href="/rodaviva/transmissao">A transmissão do programa Roda Viva acontece toda segunda-feira, a partir das 22h, pela TV Cultura de São Paulo.</a></p>
                      </div>
                    </div>
                  </div>
                  <div class="transmissao">
                    <h3>Vozes da Rua</h3>
                    <div class="box-transmissao">
                      <div class="ao-vivo">
                        <div id="aovivo"><img alt="Fique ligado!" src="http://midia.cmais.com.br/assets/image/image-3-b/25af2dac7a642138d2f325f94f561fb1b89fc608.jpg">
                        </div>
                      </div>
                      <div class="ao-vivo-info">
                        <h4><a href="/rodaviva/transmissao">Fique ligado</a></h4>
                        <p><a href="/rodaviva/transmissao">A transmissão do programa Roda Viva acontece toda segunda-feira, a partir das 22h, pela TV Cultura de São Paulo.</a></p>
                      </div>
                    </div>
                  </div>
                  <div class="transmissao mg">
                    <h3>Apresentador</h3>
                    <div class="box-transmissao">
                      <div class="ao-vivo">
                        <div id="aovivo"><img alt="Fique ligado!" src="http://midia.cmais.com.br/assets/image/image-3-b/25af2dac7a642138d2f325f94f561fb1b89fc608.jpg">
                        </div>
                      </div>
                      <div class="ao-vivo-info">
                        <h4><a href="/rodaviva/transmissao">Fique ligado</a></h4>
                        <p><a href="/rodaviva/transmissao">A transmissão do programa Roda Viva acontece toda segunda-feira, a partir das 22h, pela TV Cultura de São Paulo.</a></p>
                      </div>
                    </div>
                  </div>
                  <div class="transmissao">
                    <h3>Sobre o Programa</h3>
                    <div class="box-transmissao">
                      <div class="ao-vivo">
                        <div id="aovivo"><img alt="Fique ligado!" src="http://midia.cmais.com.br/assets/image/image-3-b/25af2dac7a642138d2f325f94f561fb1b89fc608.jpg">
                        </div>
                      </div>
                      <div class="ao-vivo-info">
                        <h4><a href="/rodaviva/transmissao">Fique ligado</a></h4>
                        <p><a href="/rodaviva/transmissao">A transmissão do programa Roda Viva acontece toda segunda-feira, a partir das 22h, pela TV Cultura de São Paulo.</a></p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="veja">
                  <div id="destaque" class="uma-coluna destaque grid1">
                    <ul class="abas-conteudo conteudo">
                      <li style="display: none;" id="bloco1" class="filho"><a class="media" href="http://tvcultura.cmais.com.br/ensaio/voce-nao-vale-nada-na-versao-flamenca-de-tie" title="‘Você não Vale Nada’ na versão flamenca de Tiê"> <img style="width: 310px;" src="http://midia.cmais.com.br/displays/16561550a23fe1661af7cf800e73b6bd404c38ce.jpg" alt="‘Você não Vale Nada’ na versão flamenca de Tiê"> </a><a href="http://tvcultura.cmais.com.br/ensaio/voce-nao-vale-nada-na-versao-flamenca-de-tie" class="titulos">‘Você não Vale Nada’ na versão flamenca de Tiê</a><p>Cantora conta sua relação com a música que faz sucesso no forró</p></li>
                      <li style="display: list-item;" id="bloco2" class="filho"><a class="media" href="http://tvcultura.cmais.com.br/ensaio/cantor-lirinha-fala-sobre-a-musicalidade-de-adebayor" title="Cantor Lirinha fala sobre a musicalidade de Adebayor"> <img style="width: 310px;" src="http://midia.cmais.com.br/displays/eec50b9e4d905cda1cf269764fa77d1a3a5a1166.jpg" alt="Cantor Lirinha fala sobre a musicalidade de Adebayor"> </a><a href="http://tvcultura.cmais.com.br/ensaio/cantor-lirinha-fala-sobre-a-musicalidade-de-adebayor" class="titulos">Cantor Lirinha fala sobre a musicalidade de Adebayor</a><p>Música foi gravada com Lula Côrtes, uma semana antes de sua morte</p></li>
                    </ul>
                    <ul class="abas-menu pag-bola destaque1">
                      <li class=""><a href="#bloco1" title="‘Você não Vale Nada’ na versão flamenca de Tiê"></a></li>
                      <li class="ativo"><a href="#bloco2" title="Cantor Lirinha fala sobre a musicalidade de Adebayor"></a></li>
                    </ul>
                  </div>
                  <div class="box-publicidade">
                    <!-- tvcultura-homepage-300x250 -->
                    <script type="text/javascript">
						GA_googleFillSlot("cmais-assets-300x250");

                    </script>
                  </div>
                  <div class="boxRedes">
                    <ul>
                      <li><a target="_blank" href="http://twitter.com/provocacoes" class="twitter"><span class="ico"></span><span class="borda"></span><span class="nome">Siga o @provocacoes</span></a></li>
                      <li><a target="_blank" href="http://www.facebook.com/provocacoes" class="facebook"><span class="ico"></span><span class="borda"></span><span class="nome">Curta a página no facebook</span></a></li>
                      <li><a target="_blank" href="http://www.youtube.com/provocacoes" class="youtube"><span class="ico"></span><span class="borda"></span><span class="nome">Veja os vídeos no YouTube</span></a></li>
                      
                      
                    </ul>
                    
                  </div>
                  <div class="charges">
                    <h3>Galeria de fotos</h3>
                    <div class="box-charges">
                      <div id="gallery">
                        <ul>
                          <li><a title="Charge Datena" href="http://midia.cmais.com.br/assets/image/image-6-b/b8c65954a8bea91a6aa3314dc101f82f397980e1.jpg" rel="charges" class="img"> <img src="http://midia.cmais.com.br/assets/image/image-6-b/b8c65954a8bea91a6aa3314dc101f82f397980e1.jpg" alt="Charge Datena"> </a></li>
                          <li><a title="Charge Datena" href="http://midia.cmais.com.br/assets/image/image-6-b/29e5f1aedc46c0f8eb4979dbe2a61f487e3b67c9.jpg" rel="charges" class="img"> <img src="http://midia.cmais.com.br/assets/image/image-6-b/29e5f1aedc46c0f8eb4979dbe2a61f487e3b67c9.jpg" alt="Charge Datena"> </a></li>
                          <li><a title="Charge Datena" href="http://midia.cmais.com.br/assets/image/image-6-b/a95204d0362520afb4d4243b3b34a016ec09d251.jpg" rel="charges" class="img"> <img src="http://midia.cmais.com.br/assets/image/image-6-b/a95204d0362520afb4d4243b3b34a016ec09d251.jpg" alt="Charge Datena"> </a></li>
                          <li><a title="Charge Datena" href="http://midia.cmais.com.br/assets/image/image-6-b/9185fa75793e838ffebabc03ce4ab37fe257bcdd.jpg" rel="charges" class="img"> <img src="http://midia.cmais.com.br/assets/image/image-6-b/9185fa75793e838ffebabc03ce4ab37fe257bcdd.jpg" alt="Charge Datena"> </a></li>
                          <li><a title="Charge Datena" href="http://midia.cmais.com.br/assets/image/image-6-b/6b5a76cd2d835b94439c8a353da593a133ac4b82.jpg" rel="charges" class="img"> <img src="http://midia.cmais.com.br/assets/image/image-6-b/6b5a76cd2d835b94439c8a353da593a133ac4b82.jpg" alt="Charge Datena"> </a></li>
                          <li><a title="Charge Datena" href="http://midia.cmais.com.br/assets/image/image-6-b/67c23d9f6aeeda37bee5ea244a3ffd9ef8783fa1.jpg" rel="charges" class="img"> <img src="http://midia.cmais.com.br/assets/image/image-6-b/67c23d9f6aeeda37bee5ea244a3ffd9ef8783fa1.jpg" alt="Charge Datena"> </a></li>
                          <li><a title="Charge Datena" href="http://midia.cmais.com.br/assets/image/image-6-b/8f3130948a98233db5c4b6ab2810bad763e4cd4d.jpg" rel="charges" class="img"> <img src="http://midia.cmais.com.br/assets/image/image-6-b/8f3130948a98233db5c4b6ab2810bad763e4cd4d.jpg" alt="Charge Datena"> </a></li>
                          <li><a title="Charge Datena" href="http://midia.cmais.com.br/assets/image/image-6-b/dfeb3c5c812daee1f249d5f627c1c0a680502465.jpg" rel="charges" class="img"> <img src="http://midia.cmais.com.br/assets/image/image-6-b/dfeb3c5c812daee1f249d5f627c1c0a680502465.jpg" alt="Charge Datena"> </a></li>
                          <li><a title="Charge Datena" href="http://midia.cmais.com.br/assets/image/image-6-b/c22f747b070430bed3e81e54c48e3c7b6bbcbe17.jpg" rel="charges" class="img"> <img src="http://midia.cmais.com.br/assets/image/image-6-b/c22f747b070430bed3e81e54c48e3c7b6bbcbe17.jpg" alt="Charge Datena"> </a></li>
                          <li><a title="Charge Datena" href="http://midia.cmais.com.br/assets/image/image-6-b/0aaa04df99f2354112a4ed8ff98ebf601cdb291d.jpg" rel="charges" class="img"> <img src="http://midia.cmais.com.br/assets/image/image-6-b/0aaa04df99f2354112a4ed8ff98ebf601cdb291d.jpg" alt="Charge Datena"> </a></li>
                          <li><a title="Charge Datena" href="http://midia.cmais.com.br/assets/image/image-6-b/fcd1643b3b68dddf298910dd0744de5dd6ff7ec2.jpg" rel="charges" class="img"> <img src="http://midia.cmais.com.br/assets/image/image-6-b/fcd1643b3b68dddf298910dd0744de5dd6ff7ec2.jpg" alt="Charge Datena"> </a></li>
                        </ul>
                        <a href="" class="sugestoes"><span>mais fotos</span></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <span class="bordaBottomRV"></span>
          </div>
          
          
        </div>
        
      </div>
      <!-- /CONTEUDO PAGINA -->
    </div>
    <!-- /MIOLO -->
  </div>
  <!-- /capa site-->
</div>
<!-- /bg provocacoes-->
