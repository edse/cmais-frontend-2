<!DOCTYPE html>
<html xmlns:fb="http://www.facebook.com/2008/fbml" xmlns:og="http://opengraphprotocol.org/schema/">
  <head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    
    <?php include_title() ?>
    <?php include_metas() ?>
    <?php include_meta_props() ?>
    
    <meta name="google-site-verification" content="sPxYSUnxlnoyUdly_hNwIHma64gh9iosgNcOBrZBYdo" />

    <meta property="fb:admins" content="100000889563712"/>
    <meta property="fb:app_id" content="124792594261614"/>
    
    <link rel="shortcut icon" href="http://cmais.com.br/portal/images/icon/favicon.png" type="image/x-icon" />
    <link rel="image_src" href="http://cmais.com.br/portal/images/logoCMAIS.jpg" />
   
    <meta name="description" content="cmais+ O portal de conteúdo da Cultura" />
    <meta name="keywords" content="cultura, educacao, infantil, jornalismo" />
   
    <link rel="stylesheet" href="http://cmais.com.br/portal/css/geral.css?nocache=1234" type="text/css" />
    <link rel="stylesheet" href="http://cmais.com.br/portal/quintal/css/geralQuintal.css" type="text/css" />
    <!-- scripts -->
    <script type="text/javascript" src="http://cmais.com.br/portal/js/jquery-ui/js/jquery-1.5.1.min.js"></script>
    <script type="text/javascript" src="http://cmais.com.br/portal/js/jcarousel/lib/jquery.jcarousel.min.js"></script>
    <script type="text/javascript" src="http://cmais.com.br/portal/js/portal.js"></script>
 
    <script type="text/javascript">
	  //carrocel
	  $(function() {
	    $('.carrossel').jcarousel({
	      wrap : "both"
	    });
	    $('.carrossel-atividades').jcarousel({
        wrap : "both",
        scroll: 1
      });
	  })
    </script>
  </head>
  <script type="text/javascript">
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-22770265-1']);
    _gaq.push(['_setDomainName', '.cmais.com.br']);
    _gaq.push(['_trackPageview']); (function() {
      var ga = document.createElement('script');
      ga.type = 'text/javascript';
      ga.async = true;
      ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
      var s = document.getElementsByTagName('script')[0];
      s.parentNode.insertBefore(ga, s);
    })();

  </script>
  <body>
 
<?php
/*
    $assets = Doctrine_Query::create()
	  ->select('a.*')
	  ->from('Asset a, SectionAsset sa, AssetVideo av')
	  ->where('sa.section_id = ?', 94)
	  ->andWhere('sa.asset_id = a.id')
	  ->andWhere('av.asset_id = a.id')
	  ->andWhere('a.is_active = ?', 1)
	  ->andWhere('av.youtube_id != ""')
	  ->orderBy('a.id desc')
	  ->limit(50)
	  ->execute();
//if(!isset($asset)){
   // $asset = $assets[0];
//}
 * 
 */
?>
 <?php
  // section assets
  if(!$section){
    if(count($assets)<=0){
      $assets = Doctrine_Query::create()
        ->select('a.*')
        ->from('Asset a, SectionAsset sa')
        ->whereIn('sa.section_id', array(94, 103, 106, 104, 105, 107, 127))
        ->andWhere('sa.asset_id = a.id')
        ->orderBy('a.id desc')
        ->execute();
    }
  }else{
    if(isset($pager))
      $assets = $pager->getResults();
    if(count($assets)<=0){
      if($section->id != 745){
        $assets = Doctrine_Query::create()
          ->select('a.*')
          ->from('Asset a, SectionAsset sa')
          ->Where('sa.section_id = ?', $section->id)
          ->andWhere('sa.asset_id = a.id')
          ->orderBy('a.id desc')
          ->execute();
      }
      else{
        $assets = Doctrine_Query::create()
          ->select('a.*')
          ->from('Asset a, SectionAsset sa')
          ->whereIn('sa.section_id', array(3163, 3164, 97, 104, 105, 106, 107, 127, 765, 764, 762))
          ->andWhere('sa.asset_id = a.id')
          ->orderBy('a.id desc')
          ->execute();
      }
    }
  }
  if(!isset($asset))
    $asset = $assets[0];
  ?>
  	
  	
	<?php use_helper('I18N', 'Date')    ?>
	<?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'asset' => $asset, 'section' => $section))  ?>

    <div class="contentWrapper" align="center">
      <div class="content internas">
        <?php include_partial_from_folder('sites/quintaldacultura', 'global/menu')        ?>
        <div class="conteudo">
          <div class="conteudoWrapper">
            <?php include_partial_from_folder('sites/quintaldacultura', 'global/itensBackground')            ?>
            <div class="">
              <ul class="navegacao">
                <li><a href="/quintaldacultura" title="Quintal da Cultura">Quintal da Cultura</a></li>
                <li><span>/</span><a href="/quintaldacultura/diversao" title="Vídeos">Diversão</a></li>
              </ul>
              
              
              <h2><?php echo $asset->getTitle() ?></h2>
              <div class="asset">
              	<p> <?php echo $asset->getDescription() ?></p>

			 <!-- ************ CARINHAS ************ -->
        		 <?php if($section->getSlug() == "carinhas"):?>
        				<p>Clique nas imagens para baixar as carinhas!</p> 	
						<?php /*$preview = $asset->retriveRelatedAssetsByRelationType('Preview'); ?>
			            <?php if(count($preview) > 0): ?>
			              <a href="http://midia.cmais.com.br/assets/image/original/<?php echo $preview[0]->AssetImage->getOriginalFile() ?>" target="_blank">
			                <img src="<?php echo $preview[0]->retriveImageUrlByImageUsage('image-6-b') ?>" alt="<?php echo $preview[0]->getTitle() ?>" />
			              </a> <br />
			            <?php endif; */?>        		 	
        		 	
                        <?php $download = $asset->retriveRelatedAssetsByRelationType('Download'); ?>
                            <?php if(count($download) > 0): ?>
                              <?php foreach($download as $k=>$d): ?>
                                <a href="http://midia.cmais.com.br/assets/image/original/<?php echo $d->AssetImage->getOriginalFile() ?>" target="_blank">
                                  <img alt="" src="http://midia.cmais.com.br/assets/image/original/<?php echo $d->AssetImage->getOriginalFile() ?>">
                                </a>
                              <?php endforeach; ?>
                            <?php endif; ?>
                         
                        
			 <!-- ************ PAPEL DE PAREDE ************ -->                     
                 <?php elseif($section->getSlug() == "papel-de-parede"):?>
						<p>Clique no tamanho da imagem para baixar o papel de parede!</p> 	
                          <?php $preview = $asset->retriveRelatedAssetsByRelationType('Preview'); ?>
                          <?php if(count($preview) > 0): ?>
                            <img style="width:100%;" src="<?php echo $preview[0]->retriveImageUrlByImageUsage('original') ?>" alt="<?php echo $preview[0]->getTitle() ?>"/>
                          <?php endif; ?>

                        <?php $download = $asset->retriveRelatedAssetsByRelationType('Download'); ?>
                        <?php if(count($download) > 0): ?>
                        
                        <div class="box-formatos-papel">
                          <?php foreach($download as $k=>$d): ?>
                            <?php if($k==0):?>
								              <a class="btn-formats sem-margem-l" href="http://midia.cmais.com.br/assets/image/original/<?php echo $d->AssetImage->getOriginalFile() ?>" target="_blank"><span>1280 X 1024</span></a>                               
                            <?php elseif($k==1):?>
                              <a class="btn-formats" href="http://midia.cmais.com.br/assets/image/original/<?php echo $d->AssetImage->getOriginalFile() ?>" target="_blank"><span>1024 X 768</span></a>  
                            <?php elseif($k==2):?>
                              <a class="btn-formats sem-margem-r" href="http://midia.cmais.com.br/assets/image/original/<?php echo $d->AssetImage->getOriginalFile() ?>" target="_blank"><span>800 X 600</span></a> 
                            <?php endif; ?>
                          <?php endforeach; ?>
                        </div>
                        <?php endif; ?>
                     
               
			 <!-- ************ BAIXAR ************ -->                     
                 <?php elseif($section->getSlug() == "baixar" || $section->getSlug() == "para-colorir"):?>
                 	<p>Clique na imagem para baixá-la!</p>
                 	<?php //echo $asset->getDescription() ?> 	
	                      <?php $preview = $asset->retriveRelatedAssetsByRelationType('Preview'); ?>
	                      <?php $download = $asset->retriveRelatedAssetsByRelationType('Download'); ?>
	                      
	                      <?php if(count($preview) > 0 && count($download) > 0): ?>
	                      	<a href="http://midia.cmais.com.br/assets/image/original/<?php echo $download[0]->AssetImage->getOriginalFile() ?>" target="_blank" title="Clique para salvar">
	                        	<img  style="width:100%" src="http://midia.cmais.com.br/assets/image/original/<?php echo $download[0]->AssetImage->getOriginalFile() ?>" alt="<?php echo $download[0]->getTitle() ?>" />
	                        	
	                        </a>
	                      <?php endif; ?>

                <?php else:?>
	                <?php $imgs = $asset->retriveRelatedAssetsByAssetTypeId(2); ?>
				
				<!-- ************ GALERIA DE IMAGEM ************ -->
        <?php if(count($imgs) > 0): ?>
        
                
                  <?php foreach($imgs as $d): ?>
                    <?php
                    /*
                    //old
                    <a href="<?php echo $d->retriveImageUrlByImageUsage('image-6') ?>">
                      <img title="<?php echo $d->getTitle() ?>" alt="<?php echo $d->getDescription() ?>" src="<?php echo $d->retriveImageUrlByImageUsage('image-6') ?>" />
                    </a>
                    */
                    imagerotate ($src_im , $angle , $bgd_color )
          ?>
                    <div class="asset">
                      <p><?php echo $d->getTitle() ?><br>
                      <?php echo html_entity_decode($d->getDescription()) ?></p>
                    </div>
                    <img title="<?php echo $asset->getTitle() ?>" src="<?php echo $d->retriveImageUrlByImageUsage('image-6') ?>" />
                    
                  <?php endforeach; ?> 
         
                <?php else:?>
				
				<!-- ************ IMAGEM ************ -->			                	
   							<?php if($asset->AssetImage->getOriginalFile() && $asset->retriveImageUrlByImageUsage('image-6')): ?>
			                      <a href="http://midia.cmais.com.br/assets/image/original/<?php echo $asset->AssetImage->getOriginalFile() ?>">
			                        <img title="<?php echo $asset->getTitle() ?>" alt="<?php echo $asset->getDescription() ?>" src="<?php echo $asset->retriveImageUrlByImageUsage('image-6-b') ?>" />
			                      </a>   								
   							<?php endif; ?>
   				
   				<!-- ************ VÍDEOS ************ -->					
	                        <?php if($asset->AssetVideo->getYoutubeId()): ?>
			            		<iframe width="940" height="530" src="http://www.youtube.com/embed/<?php echo $asset->AssetVideo->getYoutubeId() ?>?wmode=transparent&rel=0" frameborder="0" allowfullscreen></iframe>
			            	<?php endif; ?>
		                  
		                <?php endif; ?>
                
                 <?php endif;?>
                
            <?php /*    
           	<?php if($asset->AssetVideo->getYoutubeId()): ?>
            	<iframe width="940" height="530" src="http://www.youtube.com/embed/<?php echo $asset->AssetVideo->getYoutubeId() ?>?wmode=transparent&rel=0" frameborder="0" allowfullscreen></iframe>
            <?php endif; ?>
          </div>
              
              
          	<?php $preview = $asset->retriveRelatedAssetsByRelationType('Preview'); ?>
            <?php $download = $asset->retriveRelatedAssetsByRelationType('Download'); ?>
            
            <?php if(count($preview) > 0 && count($download) > 0): ?>
              <a href="http://midia.cmais.com.br/assets/image/original/<?php echo $download[0]->AssetImage->getOriginalFile() ?>" target="_blank">
                <img src="<?php echo $preview[0]->retriveImageUrlByImageUsage('image-6-b') ?>" alt="<?php echo $preview[0]->getTitle() ?>"  width="940" />
              </a>
            <?php endif; */?>   
            
            </div>
                
          </div>
              
              <div class="mais">
                <h4>mais diversão <span class="sprite-detalhe"></span></h4>
                <div class="carrossel">
                    <ul class="assets">
               		 <?php if($assets): ?>
                        <?php if(count($assets) > 0): ?>
                          <?php foreach($assets as $k=>$d): ?>
                            <li>
                              <a href="<?php echo $d->retriveUrl() ?>" title="<?php echo $d->getTitle() ?>">
                              	<h3><?php echo $d->getTitle() ?></h3>
                              	<img src="<?php echo $d->retriveImageUrlByImageUsage("image-6-b") ?>" alt="<?php echo $d->getTitle() ?>"/>
                              	<p><?php echo $d->getDescription() ?></p>
								<p class="btn">Brincar</p>
							  </a>
                            </li>
                          <?php endforeach; ?>
                        <?php endif; ?>
                      <?php endif; ?>                    	
                    	
                    </ul>
                    
                  </div>
              </div>
              
            </div>
          </div>
          <?php include_partial_from_folder('sites/quintaldacultura', 'global/footer')          ?>
        </div>
      </div>
    </div>
    <?php include_partial_from_folder('blocks', 'global/footer')    ?>

    <div id="miolo"></div>
    <div class="box-lateral"></div>
  </body>
</html>