<link type="text/css" href="http://cmais.com.br/portal/js/orbit/orbit-1.2.3.css" rel="stylesheet" />
<script type="text/javascript" src="http://cmais.com.br/portal/js/orbit/jquery.orbit-1.2.3.min.js"></script>
<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/secoes/programaVideosInterna.css" type="text/css" />
<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/sites/provocacoes.css" type="text/css" />
<script type="text/javascript">
	$(window).load(function() {
		$('#featured').orbit({
			'bullets' : true,
			'bulletThumbs' : true
		});
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
        <?php if(isset($program) && $program->id > 0):
        ?>
        <h2><a href="<?php echo $program->retriveUrl() ?>" title="<?php echo $program->getTitle() ?>"> <img title="<?php echo $program->getTitle() ?>" alt="<?php echo $program->getTitle() ?>" src="/uploads/programs/<?php echo $program->getImageThumb() ?>"> </a></h2>
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
        <!-- menu --> 
          <?php if(count($siteSections) > 0): ?>
          <!-- menu interna -->
          <ul class="menu-interna">
            <?php foreach($siteSections as $s): ?>
              <?php $subsections = $s->subsections(); ?>
              <?php if(count($subsections) > 0): ?>
                <li class="m-<?php echo $s->getSlug() ?> span"><a href="#" class="abre-menu" title="<?php echo $s->getTitle() ?>"><?php echo $s->getTitle() ?><span></span></a>
                  <div class="submenu-interna toggle-menu" style="display:none;">
                    <ul style="display:block;">
                    <?php foreach($subsections as $s): ?>
                      <li><a href="<?php echo $s->retriveUrl()?>"><?php echo $s->getTitle()?></a></li>
                    <?php endforeach; ?>
                    </ul>
                  </div>
                </li>
              <?php else: ?>
                <li class="m-<?php echo $s->getSlug() ?>"><a href="<?php echo $s->retriveUrl()?>" title="<?php echo $s->getTitle() ?>"><?php echo $s->getTitle() ?></a></li>
              <?php endif; ?>
            <?php endforeach; ?>
          </ul>
          <!-- /menu interna -->
          <?php endif; ?>
          <!-- /menu -->
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
        	<!-- tudo provoca-->
          <div class="tudo-provocacoes">
            <span class="bordaTopRV"></span>
            <!-- centro-->
            <div class="centroRV">
              <!-- video interna-->	
              <div class="video-interna">
                <ul>
                  <li class="voltarJa"><a href="javascript:back()"><span>Voltar</span></a></li>
                  <li class="voltarJa"><a href="../programas"><span>Mais Fotos</span></a></li>
                </ul>
                <div class="boxVideo">
                  <!-- GALERIA DE FOTOS -->
                  <div class="container galeriaNew" style="float: left; margin-bottom: 10px; width: 640px; overflow: hidden;">
                    <div id="featured">
                      <img src="http://midia.cmais.com.br/assets/image/image-6/57a20834e89d151c6c53adcf2ff8e7fabefac6f5.jpg" alt="Alvarenga e Ranchinho" data-thumb="http://midia.cmais.com.br/assets/image/image-1/57a20834e89d151c6c53adcf2ff8e7fabefac6f5.jpg" data-caption="#htmlalvarengaeranchinho640" />
                      <img src="http://midia.cmais.com.br/assets/image/image-6/095d2c93e7ff37c9458517d6f14a2a21e849ffbc.jpg" alt="Aracy de Almeida" data-thumb="http://midia.cmais.com.br/assets/image/image-1/095d2c93e7ff37c9458517d6f14a2a21e849ffbc.jpg" data-caption="#htmlaracydealmeida-640" />
                      <img src="http://midia.cmais.com.br/assets/image/image-6/1ce578d68eb37366dd91d0be8227af5efd218743.jpg" alt="Elis Regina" data-thumb="http://midia.cmais.com.br/assets/image/image-1/1ce578d68eb37366dd91d0be8227af5efd218743.jpg" data-caption="#htmlelisregina-640-1" />
                      <img src="http://midia.cmais.com.br/assets/image/image-6/c5de7d66e335a24a8adaefc99c7b0b7279d151e1.jpg" alt="Ismael Silva" data-thumb="http://midia.cmais.com.br/assets/image/image-1/c5de7d66e335a24a8adaefc99c7b0b7279d151e1.jpg" data-caption="#htmlismaelsilva-640" />
                      <img src="http://midia.cmais.com.br/assets/image/image-6/6f1f46e07027088821907942104ae5e56fa07735.jpg" alt="Vinicius de Moraes" data-thumb="http://midia.cmais.com.br/assets/image/image-1/6f1f46e07027088821907942104ae5e56fa07735.jpg" data-caption="#htmlviniciusdemoraes-640" />
                      <img src="http://midia.cmais.com.br/assets/image/image-6/71eb2e96432ebaedc46659127d47b4a1b889c196.jpg" alt="Hermeto Pascoal" data-thumb="http://midia.cmais.com.br/assets/image/image-1/71eb2e96432ebaedc46659127d47b4a1b889c196.jpg" data-caption="#htmlhermetopascoal-640" />
                      <img src="http://midia.cmais.com.br/assets/image/image-6/2703c49e22cd8381ac3f60bcde1a14bca00b814c.jpg" alt="João de Barro" data-thumb="http://midia.cmais.com.br/assets/image/image-1/2703c49e22cd8381ac3f60bcde1a14bca00b814c.jpg" data-caption="#htmljoaodebarro-640" />
                      <img src="http://midia.cmais.com.br/assets/image/image-6/bfcde4bd7efc5db151957c97bde6ba30909d29bf.jpg" alt="Herivelto Martins" data-thumb="http://midia.cmais.com.br/assets/image/image-1/bfcde4bd7efc5db151957c97bde6ba30909d29bf.jpg" data-caption="#htmlheriveltomartins-640" />
                      <img src="http://midia.cmais.com.br/assets/image/image-6/cd701745dc8ad75820b001389254a00958baf5f4.jpg" alt="Dona Zica e Cartola" data-thumb="http://midia.cmais.com.br/assets/image/image-1/cd701745dc8ad75820b001389254a00958baf5f4.jpg" data-caption="#htmlcartola640" />
                      <img src="http://midia.cmais.com.br/assets/image/image-6/34468b3137466b2c379f2c16e026bec07a1a4f13.jpg" alt="Carmen Costa" data-thumb="http://midia.cmais.com.br/assets/image/image-1/34468b3137466b2c379f2c16e026bec07a1a4f13.jpg" data-caption="#htmlcarmencosta-640" />
                    </div>
                    <!-- THUMBNAILS -->
                    <span class="orbit-caption" id="htmlalvarengaeranchinho640"> <span class="espaco"> Dupla caipira participa do programa MPB Especial, em 1973.<br>Foto: Armando Borges / CEDOC FPA </span> </span>
                    <span class="orbit-caption" id="htmlaracydealmeida-640"> <span class="espaco"> Sambista carioca durante o programa MPB Especial, 1972. Foto: Armando Borges/CEDOC FPA<br>Foto: Armando Borges / CEDOC FPA </span> </span>
                    <span class="orbit-caption" id="htmlelisregina-640-1"> <span class="espaco"> Cantora gaúcha participa do MPB Especial em 1973. Foto: Armando Borges/CEDOC FPA<br>Foto: Armando Borges / CEDOC FPA </span> </span>
                    <span class="orbit-caption" id="htmlismaelsilva-640"> <span class="espaco"> Sambista participa do programa MPB Especial em 1973. Foto: Armando Borges/CEDOC FPA<br>Foto: Armando Borges / CEDOC FPA </span> </span>
                    <span class="orbit-caption" id="htmlviniciusdemoraes-640"> <span class="espaco"> O poeta e compositor no programa MPB Especial em 1973. Foto: Armando Borges/CEDOC FPA<br>Foto: Armando Borges / CEDOC FPA </span> </span>
                    <span class="orbit-caption" id="htmlhermetopascoal-640"> <span class="espaco"> Multi-instrumentista durante gravação do programa MPB Especial, em 1973. Foto: CEDOC FPA<br>Foto: CEDOC FPA </span> </span>
                    <span class="orbit-caption" id="htmljoaodebarro-640"> <span class="espaco"> Também conhecido como Braguinha, compositor participa do programa MPB Especial em 1973. Foto: Armando Borges/CEDOC FPA<br>Foto: Armando Borges / CEDOC FPA </span> </span>
                    <span class="orbit-caption" id="htmlheriveltomartins-640"> <span class="espaco"> Herivelto Martins (1912-1992), autor de &quot;Ave Maria do Morro&quot; e &quot;Caminhemos&quot;, em 1973.<br>Foto: Danilo Pavani / CEDOC FPA </span> </span>
                    <span class="orbit-caption" id="htmlcartola640"> <span class="espaco"> Dona Zica e seu marido, Cartola, em 1973.<br>Foto: CEDOC FPA </span> </span>
                    <span class="orbit-caption" id="htmlcarmencosta-640"> <span class="espaco"> Carmen Costa (1920-2007), cantora e compositora, em 1972.<br>Foto: Armando Borges / CEDOC FPA </span> </span>
                  </div>
                  <!-- /GALERIA DE FOTOS -->
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
                     <!-- comentario facebook -->
		              <div class="comentario-fb grid2" style="display:block">
		                <fb:comments href="<?php echo $uri ?>" numposts="3" width="610" publish_feed="true"></fb:comments>
		                <hr />
		              </div>
		              <!-- /comentario facebook -->
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
                    <a href="" class="sugestoes"><span>mais fotos</span></a>
                  </div>
                  <div class="box-publicidade">
                    <!-- tvcultura-homepage-300x250 -->
                    <script type="text/javascript">
						GA_googleFillSlot("cmais-assets-300x250");

                    </script>
                  </div>
                  
                </div>
                
              </div>
              <!-- video interna-->	
            </div>
            <!-- centro-->
          </div>
          <!-- tudo provoca-->
          <span class="bordaBottomRV"></span>
        </div>
        <!--/capa-->
      </div>
      <!-- conteudo pagina -->
    </div>
    <!-- /miolo -->
  </div>
  <!-- /capa-site -->

</div>
<!-- bg provoca-->
