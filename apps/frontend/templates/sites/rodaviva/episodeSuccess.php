<?php
  if(!isset($asset))
  {
    $asset = Doctrine_Query::create()
      ->select('a.*')
      ->from('Asset a, AssetEpisode ae')
      ->where('a.id = ae.asset_id')
      ->andWhere('a.site_id = ?', (int)$site->id)
      ->andWhere('a.asset_type_id = 15')
      ->andWhere("(a.date_start IS NULL OR a.date_start <= CURRENT_TIMESTAMP)")
      ->orderBy('a.id desc') 
      ->limit(1)
      ->fetchOne(); 
  }
  
  if ($asset)
  {
  	/*
  	$tags = $asset->getTags();
  
    if (count($tags) > 0)
    {
	  /*
      $tagRelated = "";
      $i=0;
      foreach($tags as $t)
      {
  	    if ($i==0)
	    {
          $tagRelated .= "t.name='".$t."'";
          $titleRelated .= "a.title like '%".$t."%' OR a.description like '%".$t."%'";
          $descRel	ated .= "t.name='".$t."' OR a.title like '%".$t."%' OR a.description like '%".$t."%'";
	    }
	    else
	    {
          $tagRelated .= " OR t.name='".$t."' OR a.title like '%".$t."%' OR a.description like '%".$t."%'";
          $titleRelated .= " OR t.name='".$t."' OR a.title like '%".$t."%' OR a.description like '%".$t."%'";
          $descRelated .= " OR t.name='".$t."' OR a.title like '%".$t."%' OR a.description like '%".$t."%'";
	    }
	    $i++;
      }
	   

      $conteudosRelacionados = Doctrine_Query::create()
        ->select('a.*')
        ->from('Asset a, Tag t, Tagging t2')
        ->where('a.site_id = ?',(int)$site->id)
        ->andWhere('a.asset_type_id = 1')
        ->andWhere('(t2.taggable_id = a.id AND t2.tag_id = t.id AND t.name IN ('.implode(',',$tags).')')
        ->orWhereIn('a.title',$tags)
        ->orWhereIn('a.description',$tags)
        ->groupBy('a.id')
        ->orderBy('a.id DESC') 
        ->limit(4)
        ->execute();
	   
    }
	 */
  
    $videos = $asset->retriveRelatedAssetsByAssetTypeId(6);
	if (count($videos))
	{
      $bastidores = array();
      $blocos = array();
      foreach($videos as $k=>$d)
      {
        if($d->getRelatedAssetType() == "Bastidor")
          $bastidores[] = $d;
	    else
          $blocos[] = $d;
      }
	}
	
    $images = $asset->retriveRelatedAssetsByAssetTypeId(2);
	if (count($images))
	{
      $charges = array();
      $fotos = array();
      foreach($images as $k=>$d)
      {
        if($d->getRelatedAssetType() == "Charge")
          $charges[] = $d;
	    else
          $fotos[] = $d;
      }
	}
	
  }
?>
<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/sites/<?php echo $site->getSlug() ?>.css" type="text/css" />
<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/secoes/videos.css" type="text/css" />
<script type="text/javascript" src="http://cmais.com.br/portal/js/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
<script type="text/javascript" src="http://cmais.com.br/portal/js/fancybox/jquery.easing-1.3.pack.js"></script>
<script type="text/javascript" src="http://cmais.com.br/portal/js/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
<link rel="stylesheet" href="http://cmais.com.br/portal/js/fancybox/jquery.fancybox-1.3.4.css" type="text/css" media="screen" />

<script type="text/javascript">
  $(function(){
    // carrossel
	$('.carrossel').jcarousel({
      wrap: "both"
    });
    
    <?php if(count($blocos) <= 4): ?>
    $('.jcarousel-next.jcarousel-next-horizontal, .jcarousel-prev.jcarousel-prev-horizontal').hide();
    <?php endif; ?>
    
    // fancybox
    $('a.charges_caruso').fancybox();
  });
</script>

<?php use_helper('I18N', 'Date') ?>
<?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'asset' => $asset, 'section' => $section)) ?>
    
    <!-- CAPA SITE -->
	<div class="bg-rodaviva">
    <div id="capa-site">
    	
      <!-- BREAKING NEWS -->
      <?php if(isset($displays["alerta"])) include_partial_from_folder('blocks','global/breakingnews', array('displays' => $displays["alerta"])) ?>
      <!-- /BREAKING NEWS -->
      
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
        <?php include_partial_from_folder('blocks','global/shortcuts') ?>
        <!-- BOX LATERAL -->

        <!-- CONTEUDO PAGINA -->
        <div id="conteudo-pagina exceptionn">
          <!-- CAPA -->
          <div class="capa grid3 exceptionn">
          	<div class="tudo-Rodaviva">
          		<span class="bordaTopRV"></span>
          		<div class="centroRV">
          			<div class="video-interna">
          			    <ul>
          					<li class="voltarJa"><a href="javascript:back()"><span>Voltar</span></a></li>
          				</ul>
          				<div class="boxVideo">
          				  <div class="boxVideoWrapper">
                          <?php if(isset($blocos)): ?>
                            <?php if($blocos[0]->AssetType->getSlug() == "image"): ?>
                            <a class="" href="<?php echo $blocos[0]->retriveUrl() ?>" title="<?php echo $blocos[0]->getTitle() ?>">
                              <img src="<?php echo $blocos[0]->retriveImageUrlByImageUsage('image-6') ?>" alt="<?php echo $blocos[0]->getTitle() ?>" name="<?php echo $blocos[0]->getTitle() ?>" />
                              
                            <?php elseif($blocos[0]->AssetType->getSlug() == "content" || $blocos[0]->AssetType->getSlug() == "image-gallery"): ?>
                              <?php $imgs = $blocos[0]->retriveRelatedAssetsByAssetTypeId(2); ?>
                              <?php if(count($imgs) > 0): ?>
                              <img src="http://midia.cmais.com.br/assets/image/image-6/<?php echo $imgs[0]->AssetImage->getFile() ?>.jpg" alt="<?php echo $blocos[0]->getTitle() ?>" name="<?php echo $blocos[0]->getTitle() ?>" />
                              <?php endif; ?>
                            </a>
                            
                            <?php elseif($blocos[0]->AssetType->getSlug() == "video"): ?>
                            <object style="height:390px; width: 640px">
                              <param name="movie" value="http://www.youtube.com/v/<?php echo $blocos[0]->AssetVideo->getYoutubeId() ?>?version=3&enablejsapi=1&playerapiid=ytplayer&rel=0">
                              <param name="allowFullScreen" value="true">
                              <param name="allowScriptAccess" value="always">
                              <param name="wmode" value="opaque">
                              <embed id="ytplayer" src="http://www.youtube.com/v/<?php echo $blocos[0]->AssetVideo->getYoutubeId() ?>?version=3&enablejsapi=1&playerapiid=ytplayer&rel=0" wmode="opaque" type="application/x-shockwave-flash" allowfullscreen="true" allowscriptaccess="always" width="640" height="390"></embed>
                            </object>

                            <?php elseif($blocos[0]->AssetType->getSlug() == "video-gallery"): ?>
                            <object height="390" width="640" style="height:390px; width: 640px">
                              <param name="movie" value="http://www.youtube.com/p/<?php echo $blocos[0]->AssetVideoGallery->getYoutubeId() ?>?version=3&amp;hl=en_US&amp;fs=1" />
                              <param name="allowFullScreen" value="true" />
                              <param name="allowscriptaccess" value="always" />
                              <param name="wmode" value="opaque">
                              <embed allowfullscreen="true" allowscriptaccess="always" src="http://www.youtube.com/p/<?php echo $blocos[0]->AssetVideoGallery->getYoutubeId() ?>?version=3&amp;hl=en_US&amp;fs=1" wmode="opaque" type="application/x-shockwave-flash" width="640" height="390"></embed>
                            </object>
                            
                            <?php else: ?>
                            <div style="width:640px; height:384px;"><h2><?php echo $blocos[0]->getTitle() ?></h2><h4><?php echo $blocos[0]->getDescription() ?></h4></div>
                            <?php endif; ?>
                          </div>
                          
		                  <span class="faixa"></span>
                          <?php if(isset($blocos)): ?>
                            <?php if(count($blocos) > 0): ?>
		                  <div class="acervoDestaque vr2">
                            <h3>Programa</h3>
                            <div class="carrossel">
                              <ul>
                                <?php foreach($blocos as $k=>$d): ?>
                                <li>
                                    <?php if($d->retriveImageUrlByImageUsage("image-2") != ""): ?>
                                  	<a class="aImg<?php if($k==0): ?> ativo<?php endif; ?>" href="<?php echo $d->retriveUrl() ?>">
                                      <img src="<?php echo $d->retriveImageUrlByImageUsage("image-2") ?>" alt="<?php echo $d->getTitle() ?>" />
                                      <span class="ico"></span>
                                    </a>
                                    <?php endif; ?>
                                    <?php //if($d->retriveLabel() != ""): ?>
                                    <a class="aTxt" href="<?php echo $d->retriveUrl() ?>">
                                      <span class="nomeRlacionado"><?php echo $d->getTitle() ?></span>
                                      <?php /* <span class="nomeTxt"><?php echo $d->getDescription() ?></span> */ ?>
                                    </a>
                                    <?php//endif; ?>
                                </li>
                                <?php endforeach; ?>
                              </ul>
                            </div>
                          </div>
                            <?php endif; ?>
                          <?php endif; ?>
						
          			
						<span class="faixa" style="height:5px; margin-top:5px;"></span>
		                  <h3><?php echo $asset->getTitle() ?></h3>
							<p class="dataPost">Programa exibido em <?php echo format_date($asset->AssetEpisode->getDateRelease(),'D') ?></p>
		                  <?php if(($asset->AssetVideo->getHeadline() != "")&&($asset->AssetVideo->getHeadline() != $asset->getTitle())): ?>
		                  <p style="font-size: 10px;"><?php echo $asset->AssetVideo->getHeadline() ?></p>
		                  <?php endif; ?>
		                  <p class="post"><?php echo $asset->getDescription() ?></p>
		                  <?php endif; ?>
		                  <?php if ($asset->AssetEpisode->getTranscription()): ?>
		                  	<span class="faixa" style="height:5px; margin-top:5px;"></span>
							<div class="transcricao">
								<!--h3>Transcrição</h3-->
								<div class="transcricaoWrapper">
								  <?php echo html_entity_decode($asset->AssetEpisode->getTranscription()) ?>
								</div>
							</div>
						  <?php endif; ?>
		                  <?php include_partial_from_folder('sites/rodaviva','global/share-2c',array('uri'=>$uri)) ?>
          				</div>
          			</div>
          			<div class="veja">
          			  <?php if(isset($bastidores)): ?>
          			    <?php if(count($bastidores) > 0): ?>
          				<p class="btn-veja"><span>Bastidores</span></p>
          				<div class="vejaTambem">
          					<ul>
                            <?php foreach($bastidores as $k=>$d): ?>
                              <?php if(($k > 0) && ($k % 3 == 0)): ?>
                              	</li><li>
                              <?php endif; ?>
          						<li>
          							<?php if($d->retriveImageUrlByImageUsage('image-7')): ?>
									<a class="aImg<?php if($d->getId() == (int)$asset->id): ?> ativo<?php endif; ?>" href="<?php echo $d->retriveUrl() ?>">
										<img src="<?php echo $d->retriveImageUrlByImageUsage('image-7') ?>" alt="<?php echo $d->getTitle() ?>" name="<?php echo $d->getTitle() ?>" />
										<span class="ico"></span>
									</a>
									<?php endif; ?>
									<a class="aTxt" href="<?php echo $d->retriveUrl() ?>">
										<span class="nomeRlacionado"><?php echo $d->getTitle() ?></span>
										<!-- span class="nomeTxt"><?php echo $d->getDescription() ?></span-->
									</a>
								</li>
							<?php endforeach; ?>
          					</ul>
          					<!--
          					<a href="" class="sugestoes"><span>carregar mais sugest&otilde;es</span></a>
          					<div class="publicidade">
	          					<img title="publicidade" alt="publicidade" src="../rodaViva/images/lixo-img.jpg">
	          				</div>
	          				-->
          				</div>
          				<?php endif; ?>
                      <?php endif; ?>
                      
          			  <?php if(isset($charges)): ?>
          			    <?php if(count($charges) > 0): ?>
						<div class="charges">
          					<h3>Charges</h3>
          					<div class="box-charges">
          						<div id="gallery">
								    <ul>
								      <?php foreach($charges as $k=>$d): ?>
								        <li>
								            <a class="charges_caruso" rel="charges_caruso" href="<?php echo $d->retriveImageUrlByImageUsage("image-6-b") ?>" title="<?php echo $d->getTitle() ?>">
												<img alt="<?php echo $d->getTitle() ?>" src="<?php echo $d->retriveImageUrlByImageUsage("image-6-b") ?>">
											</a>
								        </li>
								      <?php endforeach; ?> 
								    </ul>
								</div>
          					</div>
          				</div>
          				<?php endif; ?>
          		      <?php endif; ?>
          		      
						
          				
          			  <?php if(isset($fotos)): ?>
          			    <?php if(count($fotos) > 0): ?>
						<div class="charges">
          					<h3>Fotos do Programa</h3>
          					<div class="box-charges">
          						<div id="gallery">
								    <ul>
								      <?php foreach($fotos as $k=>$d): ?>
								        <li>
								            <a class="charges_caruso" rel="charges_caruso" href="<?php echo $d->retriveImageUrlByImageUsage("image-6-b") ?>" title="<?php echo $d->getTitle() ?>">
												<img alt="<?php echo $d->getTitle() ?>" src="<?php echo $d->retriveImageUrlByImageUsage("image-6-b") ?>">
											</a>
								        </li>
								      <?php endforeach; ?>
								    </ul>
								</div>
          					</div>
          				</div>
          				<?php endif; ?>
          		      <?php endif; ?>
          		      
          		      <div class="publicidade">
                          <!-- tvcultura-homepage-300x250 -->
                          <script type='text/javascript'>
                            GA_googleFillSlot("cmais-assets-300x250");
                          </script>
                  </div> 
          				
          			  <?php if(isset($conteudosRelacionados)): ?>
          			    <?php if(count($conteudosRelacionados) > 0): ?>
						<div class="veja interna">
          				<p class="btn-veja not"><span>Notícias Relacionadas</span></p>
          				<div class="noticiasRelacionadas">
                          <?php foreach($conteudosRelacionados as $k=>$d): ?>
          					<div class="box-noticiasRelacionadas<?php if ($k==0): ?> first<?php endif; ?>">
          						<h4><a href="<?php echo $d->retriveUrl() ?>"><?php echo $d->getTitle() ?></a></h4>
          						<p><?php echo $d->getDescription() ?></p>
          					</div>
          				  <?php endforeach; ?>
          				</div>
          				<?php endif; ?>
          		      <?php endif; ?>
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


