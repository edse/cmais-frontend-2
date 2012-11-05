<?php
  $episode = Doctrine_Query::create()
    ->select('a.*')
    ->from('Asset a, RelatedAsset r')
    ->where('r.asset_id = ?', (int)$asset->id)
    ->andWhere('a.site_id = ?', (int)$site->id)
    ->andWhere('r.parent_asset_id = a.id')
    ->andWhere('a.asset_type_id = 15')
    ->andWhere("(a.date_start IS NULL OR a.date_start <= CURRENT_TIMESTAMP)")
    ->orderBy('a.id desc') 
    ->limit(1)
    ->fetchOne();
     
  if ($episode) {
    $videos = $episode->retriveRelatedAssetsByAssetTypeId(6);    
  }

?>
<script type="text/javascript" src="/portal/js/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
<script type="text/javascript" src="/portal/js/fancybox/jquery.easing-1.3.pack.js"></script>
<script type="text/javascript" src="/portal/js/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
<link rel="stylesheet" href="/portal/js/fancybox/jquery.fancybox-1.3.4.css" type="text/css" media="screen" />

<link rel="stylesheet" href="/portal/css/tvcultura/sites/provocacoes.css" type="text/css" />
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
      <?php include_partial_from_folder('blocks','global/shortcuts') ?>
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
                      <param name="movie" value="http://www.youtube.com/v/<?php echo $asset->AssetVideo->getYoutubeId() ?>?version=3&enablejsapi=1&playerapiid=ytplayer&rel=0">
                      <param name="allowFullScreen" value="true">
                      <param name="allowScriptAccess" value="always">
                      <param name="wmode" value="opaque">
                      <embed id="ytplayer" src="http://www.youtube.com/v/<?php echo $asset->AssetVideo->getYoutubeId() ?>?version=3&enablejsapi=1&playerapiid=ytplayer&rel=0" wmode="opaque" type="application/x-shockwave-flash" allowfullscreen="true" allowscriptaccess="always" width="640" height="390"></embed>
                    </object>
                  </div>
                  <span class="faixa"></span>
                  <h3><?php echo $asset->getTitle();  ?></h3>
                  <p class="dataPost">Programa exibido em <?php echo $asset->getDate();  ?></p>
                  <p class="post"><?php echo $videos[0]->getDescription();  ?></p>
                  
                  <!-- barra compartilhar -->
                  <?php include_partial_from_folder('sites/provocacoes','global/share-2c') ?>
                  <!-- /barra compartilhar -->
                 
                </div>
                <div class="veja">
                  <p class="btn-veja"><span>Veja também</span></p>
                  
                  <div class="vejaTambem">
                    <ul>
                      <?php foreach($displays as $k=>$d): ?>
                      <?php if(($k > 0) && ($k % 3 == 0)): ?>
                        </li><li>
                      <?php endif; ?>
                      <div class="conteudo-lista">
                        <?php if($d->retriveImageUrlByImageUsage('image-7')): ?>
                        <a href="<?php echo $d->retriveUrl() ?>" class="img-150x90">
                          <img src="<?php echo $d->retriveImageUrlByImageUsage('image-7') ?>" alt="<?php echo $d->getTitle() ?>" name="<?php echo $d->getTitle() ?>" />
                        </a>
                        <?php endif; ?>
                        <h3 class="chapeu"><?php echo $d->retriveLabel() ?></h3>
                        <a href="<?php echo $d->retriveUrl() ?>" class="txt"><?php echo $d->getTitle() ?></a>
                      </div>
                    <?php endforeach; ?>
                    </ul>
                    <a href="http://tvcultura.cmais.com.br/provocacoes/programas" class="sugestoes"><span>mais vídeos</span></a>
                  </div>
                  <div class="charges">
                                     
         <!--bloco de fotos-->
          <?php
              $displays = array();
              $block_sobre = Doctrine_Query::create()
                ->select('b.*')
                ->from('Block b, Section s')
                ->where('b.section_id = s.id')
                ->andWhere('s.slug = ?', 'home')
                ->andWhere('b.slug = ?', 'destaque-galeria-2')
                ->andWhere('s.site_id = ?', $site->id)
                ->execute();
            
              if(count($block_sobre) > 0){
                $displays["destaque-galeria-2"] = $block_sobre[0]->retriveDisplays();
              }
            ?>
            <?php if(isset($displays['destaque-galeria-2'])):?>
              <?php if(count($displays['destaque-galeria-2']) > 0): ?>
                  <div class="box-charges">
                     <div id="gallery">
                  <h3>Fotos do Programa</h3>
                </div>
                <p><?php echo $displays['destaque-galeria-2'][0]->getDescription() ?></p>
                <p><a href="<?php echo $displays['destaque-galeria-2'][0]->retriveUrl() ?>" title="<?php echo $displays['destaque-galeria-2'][0]->getTitle() ?>" class="btn btn-mini btn-inverse"><i class="icon-chevron-right icon-white"></i> saiba mais</a></p>
              </div>
              <?php endif; ?>
            <?php endif; ?>
            <!--/bloco de fotos-->
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

