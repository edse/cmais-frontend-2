<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/sites/<?php echo $section->Site->getSlug() ?>.css" type="text/css" />
<script type="text/javascript" src="http://cmais.com.br/portal/js/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
<script type="text/javascript" src="http://cmais.com.br/portal/js/fancybox/jquery.easing-1.3.pack.js"></script>
<script type="text/javascript" src="http://cmais.com.br/portal/js/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
<link rel="stylesheet" href="http://cmais.com.br/portal/js/fancybox/jquery.fancybox-1.3.4.css" type="text/css" media="screen" />
<script type="text/javascript" src="http://cmais.com.br/portal/js/mediaplayer/swfobject.js"></script>
<script type="text/javascript" src="http://cmais.com.br/portal/js/jquery.nivo.slider.pack.js"></script>
<script type="text/javascript">
  //galeria principal
  $(window).load(function(){
    $('#slider').nivoSlider({
      effect: "fade"
    });
  });
  
  //carrocel
  $(function(){
    $('.carrossel').jcarousel({
      wrap: "both"			
    });
    
    //fancybox
    $('a.charges_caruso').fancybox();
  });
</script>


<?php use_helper('I18N', 'Date') ?>
<?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'asset' => $asset, 'section' => $section)) ?>

    <!-- CAPA SITE -->
	<div class="bg-rodaviva">
    <div id="capa-site">

      <!-- BARRA SITE -->
      <div id="barra-site">
	  	<div class="topo-programa">
	  	  <?php if(isset($program) && $program->id > 0): ?>
		  <h2>
		    <a href="<?php echo $program->retriveUrl() ?>" title="<?php echo $program->getTitle() ?>">
		      <img title="<?php echo $program->getTitle() ?>" alt="<?php echo $program->getTitle() ?>" src="http://midia.cmais.com.br/programs/<?php echo $program->getImageThumb() ?>">
		    </a>
		  </h2>
		  <?php endif; ?>
		  
          <?php if(isset($program) && $program->id > 0): ?>
          <?php include_partial_from_folder('blocks','global/like', array('site' => $site, 'uri' => $uri, 'program' => $program)) ?>
          <?php endif; ?>
          
          <?php if(isset($program) && $program->id > 0): ?>
          <!-- horario -->
          <div id="horario">
            <p><?php echo html_entity_decode($program->getSchedule()) ?></p>
          </div>
          <!-- /horario -->
          <?php endif; ?>
		  
		</div>
		
		<div class="box-topo grid3">
          <?php if(count($siteSections) > 0): ?>
          <ul class="menu">
            <?php foreach($siteSections as $s): ?>
				<li><a href="<?php echo $s->retriveUrl() ?>" title="<?php echo $s->getTitle() ?>"><span><?php echo $s->getTitle() ?></span></a></li>
			<?php endforeach; ?>
          </ul>
          <?php endif; ?>
		</div>
		<!-- /box-topo -->
	</div>
      <!-- /BARRA SITE -->
      <!-- MIOLO -->
      <div id="miolo">
      	
        <!-- CONTEUDO PAGINA -->
        <div id="conteudo-pagina exceptionn">
          <!-- CAPA -->
          <div class="capa grid3 exceptionn">
          	<div class="tudo-Rodaviva">
          		<span class="bordaTopRV"></span>
          		<div class="centroRV">
                  <?php if(isset($displays['destaque-principal'])): ?>
                    <?php if(count($displays['destaque-principal']) > 0): ?>
          			<div class="destaque">
          				<div id="wrapper">
          					<div class="slider-wrapper">
					            <div class="ribbon"></div>
					            <div id="slider" class="nivoSlider">
                                  <?php foreach($displays['destaque-principal'] as $k=>$d): ?>
                                  	<?php if($d->Asset->AssetType->getSlug() == "image"): ?>					            	
					                <a href="<?php echo $d->retriveUrl() ?>" title="<?php echo $d->getTitle() ?>"><img src="<?php echo $d->retriveImageUrlByImageUsage('image-10') ?>" alt="<?php echo $d->Asset->getTitle() ?>" title="#<?php echo $d->Asset->getTitle() ?>" /></a>
					                <?php endif; ?>
                                  <?php endforeach; ?>					                
					            </div>
					          <?php foreach($displays['destaque-principal'] as $k=>$d): ?>
					          	<?php if($d->Asset->AssetType->getSlug() == "image"): ?>
					            <div id="<?php echo $d->Asset->getTitle() ?>" class="nivo-html-caption">
					                <h4 style="color:#5b5a50;font-size:14px;font-weight:normal;margin-top:25px;width:275px"><?php echo strtoupper($d->getTitle()) ?></h4>
					                <h2 style="color:#5b5a50;font-size:24px;font-weight:normal;margin-top:10px;line-height:25px;width:275px"><?php echo $d->getHeadline() ?></h2>
					                <p style="color:#333;font-size:14px;margin-top:10px;margin-left:-25px;width:255px"><?php echo $d->getDescription() ?></p>
					            </div>
					            <?php endif; ?>
					          <?php endforeach; ?>
					        </div>
					    </div>
          			</div>
          			<?php endif; ?>
                  <?php endif; ?>
          			<div class="esq">
                      <?php if(isset($displays['destaque-playlist'])): ?>
                        <?php if(count($displays['destaque-playlist']) > 0): ?>
          				<div class="acervoDestaque">
          					<h3><?php echo $displays['destaque-playlist']->getTitle() ?></h3>
          					<div class="carrossel">
								<ul>
								  <?php foreach($displays['destaque-playlist'] as $k=>$d): ?>
									<li>
                                      <?php if($d->retriveImageUrlByImageUsage("image-2") != ""): ?>
										<a class="aImg" href="<?php echo $d->retriveUrl() ?>">
											<img src="<?php echo $d->retriveImageUrlByImageUsage("image-2") ?>" alt="<?php echo $d->getTitle() ?>" />
											<span class="ico"></span>
										</a>
			                          <?php endif; ?>
			                          <?php if($d->retriveLabel() != ""): ?>
										<a class="aTxt" href="<?php echo $d->retriveUrl() ?>">
											<span class="nomeRlacionado"><?php echo $d->retriveLabel() ?></span>
											<span class="nomeTxt"><?php echo $d->getDescription() ?></span>
										</a>
									  <?php endif; ?>
									</li>
								  <?php endforeach; ?>
								</ul>
							</div>
							<a class="acervoCompleto" href="videos"><span>+ Acervo completo</span></a>
          				</div>
                        <?php endif; ?>
                      <?php endif; ?>
                      
          				<div class="transmissao">
          					<h3>Transmiss&atilde;o vivo</h3>
          					<div class="box-transmissao">
          						<div class="ao-vivo">
	          						<div id="live"><p>Seu browser não suporta Flash.</p></div>
					                <script>
						                jQuery(document).ready(function(){                 
						                  var so = new SWFObject('http://cmais.com.br/portal/js/mediaplayer/player.swf','mpl','290','200','9');
						                  so.addVariable('controlbar', 'bottom');
						                  so.addVariable('autostart', 'true');
						                  so.addVariable('streamer', 'rtmp://200.136.27.12/live');
						                  so.addVariable('file', 'homenagem');
						                  so.addVariable('type', 'video');
						                  so.addParam('allowscriptaccess','always');
						                  so.addParam('allowfullscreen','true');
						                  so.addParam('wmode','transparent');
						                  so.write('live');
						                });
					                </script>
				                </div>
				                <div class="ao-vivo-info">
				                	<h4>Fique ligado</h4>
				                	<p>A transmissao do programa Roda Viva acontece toda segunda-feira, a partir das 22h, pela TV Cultura de Sao Paulo</p>
				                </div>
          					</div>
          				</div>
          				<div class="charges">
          					<h3>Charges do Caruso</h3>
          					<div class="box-charges">
          						<div id="gallery">
								    <ul>
								        <li>
								            <a class="charges_caruso" href="../../../portal/images/capaPrograma/rodaviva/lixo-image1.jpg" title="charge 01" rel="charges_caruso">
								                <img src="../../../portal/images/capaPrograma/rodaviva/lixo-thumb_image1.jpg" width="90" height="75" alt="" />
								            </a>
								        </li>
								        <li>
								            <a class="charges_caruso" href="../../../portal/images/capaPrograma/rodaviva/lixo-image2.jpg" title="charge 02" rel="charges_caruso">
								                <img src="../../../portal/images/capaPrograma/rodaviva/lixo-thumb_image2.jpg" width="90" height="75" alt="" />
								            </a>
								        </li>
								        <li>
								            <a class="charges_caruso" href="../../../portal/images/capaPrograma/rodaviva/lixo-image3.jpg" title="charge 03" rel="charges_caruso">
								                <img src="../../../portal/images/capaPrograma/rodaviva/lixo-thumb_image3.jpg" width="90" height="75" alt="" />
								            </a>
								        </li>
								        <li>
								            <a class="charges_caruso" href="../../../portal/images/capaPrograma/rodaviva/lixo-image4.jpg" title="charge 04" rel="charges_caruso">
								                <img src="../../../portal/images/capaPrograma/rodaviva/lixo-thumb_image4.jpg" width="90" height="75" alt="" />
								            </a>
								        </li>
								        <li>
								            <a class="charges_caruso" href="../../../portal/images/capaPrograma/rodaviva/lixo-image5.jpg" title="charge 05" rel="charges_caruso">
								                <img src="../../../portal/images/capaPrograma/rodaviva/lixo-thumb_image5.jpg" width="90" height="75" alt="" />
								            </a>
								        </li>
								        <li>
								            <a class="charges_caruso" href="../../../portal/images/capaPrograma/rodaviva/lixo-image6.jpg" title="charge 06" rel="charges_caruso">
								                <img src="../../../portal/images/capaPrograma/rodaviva/lixo-thumb_image6.jpg" width="90" height="75" alt="" />
								            </a>
								        </li>
								        <li>
								            <a class="charges_caruso" href="../../../portal/images/capaPrograma/rodaviva/lixo-image7.jpg" title="charge 07" rel="charges_caruso">
								                <img src="../../../portal/images/capaPrograma/rodaviva/lixo-thumb_image7.jpg" width="90" height="75" alt="" />
								            </a>
								        </li>
								        <li>
								            <a class="charges_caruso" href="../../../portal/images/capaPrograma/rodaviva/lixo-image8.jpg" title="charge 08" rel="charges_caruso">
								                <img src="../../../portal/images/capaPrograma/rodaviva/lixo-thumb_image8.jpg" width="90" height="75" alt="" />
								            </a>
								        </li>
								        <li>
								            <a class="charges_caruso" href="../../../portal/images/capaPrograma/rodaviva/lixo-image9.jpg" title="charge 09" rel="charges_caruso">
								                <img src="../../../portal/images/capaPrograma/rodaviva/lixo-thumb_image9.jpg" width="90" height="75" alt="" />
								            </a>
								        </li>
								    </ul>
								</div>
          					</div>
          				</div>
          			</div>
          			<div class="dir">
          				<div class="publicidade">
          					<img src="../../../portal/images/capaPrograma/rodaviva/lixo-img.jpg" alt="publicidade" title="publicidade" />
          				</div>
          				<div class="boxRedes">
          					<ul>
          						<li><a class="twitter" href=""><span class="ico"></span><span class="borda"></span><span class="nome">Siga o @rodaviva</span></a></li>
          						<li><a class="facebook" href=""><span class="ico"></span><span class="borda"></span><span class="nome">Curta a p&aacute;gina no facebook</span></a></li>
          						<li><a class="youtube" href=""><span class="ico"></span><span class="borda"></span><span class="nome">Veja os v&iacute;deos no YouTube</span></a></li>
          						<li><a class="news" href=""><span class="ico"></span><span class="borda"></span><span class="nome">Assine a newsletter</span></a></li>
          						<li><a class="rss" href=""><span class="ico"></span><span class="borda"></span><span class="nome">Feed RSS</span></a></li>
          					</ul>
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
    </div>
    <!-- / CAPA SITE -->