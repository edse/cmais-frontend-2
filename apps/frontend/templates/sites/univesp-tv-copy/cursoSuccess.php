<?php
$asset = $pager->getCurrent();
?>
<link type="text/css" href="http://cmais.com.br/portal/univesptv/css/geral.css" rel="stylesheet" />

<?php use_helper('I18N', 'Date') ?>
<?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'section' => $section)) ?>

    <!-- CAPA SITE -->
    <div id="capa-site">

      <?php if(isset($displays["alerta"])) include_partial_from_folder('blocks','global/breakingnews', array('displays' => $displays["alerta"])) ?>

      <!-- BARRA SITE -->
      <div id="barra-site">

        <div class="topo-programa">
          
          <h2><a href="http://univesptv.cmais.com.br"><img title="<?php echo $site->getTitle() ?>" alt="<?php echo $site->getTitle() ?>" src="http://cmais.com.br/portal/univesptv/images/logo-univesptv.png" /></a></h2>
          
          <?php if(isset($program) && $program->id > 0): ?>
          <?php include_partial_from_folder('blocks','global/like', array('site' => $site, 'uri' => $uri, 'program' => $program)) ?>
          <?php endif; ?>
          
          <?php if(isset($program) && $program->id > 0): ?>
          <!-- horario -->
          <div id="horario">
            <p>Canal digital 2.2 da multiprogramação da TV Cultura</p>
          </div>
          <!-- /horario -->
          <?php endif; ?>

        </div>

        <?php if(isset($siteSections)): ?>
        <!-- box-topo -->
        <div class="box-topo grid3">
          
          <?php include_partial_from_folder('blocks','global/sections-menu2', array('siteSections' => $siteSections)) ?>

          <?php if(isset($section)): ?>
            <?php if(!in_array(strtolower($section->getSlug()), array('home','homepage','home-page','index'))): ?>
            <div class="navegacao txt-10">
              <a href="http://univesptv.cmais.com.br" title="Home">Home</a>
              <span>&gt;</span>
              <a href="<?php echo $site->retriveUrl() ?>" title="<?php echo $site->getTitle() ?>"><?php echo $site->getTitle() ?></a>
              <span>&gt;</span>
              <?php if($section->getSlug() != "home"): ?>
                <a href="<?php echo $section->retriveUrl()?>" title="<?php echo $section->getTitle()?>"><?php echo $section->getTitle()?></a>
              <?php endif; ?>
            </div>
            <?php endif; ?>
          <?php endif; ?>

        </div>
        <!-- /box-topo -->
        <?php endif; ?>

      </div>
      <!-- /BARRA SITE -->

      <!-- MIOLO -->
      <div id="miolo">
        
        <!-- BOX LATERAL -->
        <?php include_partial_from_folder('blocks','global/shortcuts') ?>
        <!-- BOX LATERAL -->

        <!-- CONTEUDO PAGINA -->
        <div id="conteudo-pagina">
          
           <!-- CAPA -->
            <div class="capa grid3">
              
                <!-- ESQUERDA -->
                <div id="esquerda" class="grid2">
                  <h3><a href="<?php echo $site->retriveUrl() ?>"><?php echo $site->getTitle() ?></a></h3>
                  <p class="bold" style="margin-bottom: 10px;"><?php echo html_entity_decode($site->getDescription()) ?></p>
                    
                  <?php if(count($pager) > 0): ?>
                    <?php $asset = null; foreach($pager->getResults() as $asset): ?>

                    <!-- NOTICIA INTERNA -->
                    <div class="box-interna grid2">

                      <!-- PAGINACAO -->
                      <?php if(isset($pager)): ?>
                        <?php if($pager->haveToPaginate()): ?>
                        <div class="paginacao pag3 grid2">
                          <?php if($page != $pager->getNextPage()): ?>
                          <a href="javascript: goToPage(<?php echo $pager->getNextPage() ?>);" class="btn proximo" style="width: 110px; background-position: 91px -34px;"> Próxima aula</a>
                          <?php endif; ?>
                          <!-- <a href="#" class="titulos">Epis&oacute;dio <?php echo $pager->getPage() ?>/<?php echo $pager->getLastPage() ?></a> -->
                          <?php if(($page!="")&&($page != $pager->getPreviousPage())): ?>
                          <a href="javascript: goToPage(<?php echo $pager->getPreviousPage() ?>);" class="btn anterior" style="width: 110px; padding-left: 20px; float: left; margin-left: 7px;"> Aula anterior</a>
                          <?php endif; ?>
                        </div>
                <form id="page_form" action="" method="post">
                  <input type="hidden" name="return_url" value="<?php echo $url?>" />
                  <input type="hidden" name="page" id="page" value="" />
                </form>
                <script>
                  function goToPage(i){
                    $("#page").val(i);
                    $("#page_form").submit();
                  }
                </script>
                        <?php endif; ?>
                      <?php endif; ?>
                      <!-- PAGINACAO -->
                      <?php
                      if($asset->AssetType->getSlug() == "video") 
                        $video = $asset;
                      else if($asset->AssetType->getSlug() == "video-gallery") 
                        $video = $asset;
                      elseif($asset->AssetType->getSlug() == "content"){
                        $video = $asset->retriveRelatedAssetsByAssetTypeId(6);
                        if(count($video)<=0)
                          $video = $asset->retriveRelatedAssetsByAssetTypeId(7);
                        $video = $video[0];
                      }
                      ?>
                      <?php if($video->AssetVideo->getYoutubeId() != ""): ?>
                      <div class="media grid2">
                        <?php include_partial_from_folder('blocks','global/asset-2c-video', array('asset' => $video)) ?>
                        <?php /* <div><?php echo $asset->getDescription() ?></div> */ ?>
                      </div>
                      <?php endif; ?>

                      <?php if($video->AssetVideoGallery->getYoutubeId() != ""): ?>
                      <div class="media grid2">
                        <?php include_partial_from_folder('blocks','global/asset-2c-video', array('asset' => $video)) ?>
                        <?php /* <div><?php echo $asset->getDescription() ?></div> */ ?>
                      </div>
                      <?php endif; ?>

                      <?php if($asset->AssetType->getSlug() == "content"): ?> 
                      <div class="texto">
                        <p><?php echo html_entity_decode($asset->AssetContent->render()) ?></p>
                      </div>
                      <?php endif; ?>

                    </div>
                    <!-- /NOTICIA INTERNA -->

                    <?php endforeach; ?>
                  <?php endif; ?>

                  <!-- comentario facebook -->
                  <?php include_partial_from_folder('blocks','global/share-2c', array('site' => $site, 'uri' => $uri, 'asset' => $asset)) ?>
                  <!-- /comentario facebook -->
                    
                </div>
                <!-- /ESQUERDA -->
                
                <!-- DIREITA -->
                <div id="direita" class="grid1">
                  
                  <!-- BOX FILTRAR -->
                  <div class="box-padrao filtrar grid1">
                    <div class="topo">
                      <span></span>
                      <div class="capa-titulo">
                        <h4>navegue por cursos</h4>
                      </div>
                    </div>
                    <form action="" id="form-filtro" enctype="" method="post">
                      <select id="opcao-filtro" onchange="if(this.options[this.selectedIndex].value!='--') self.location.href=this.options[this.selectedIndex].value;">
                        <option>--</option>
                          <?php
                          $programs = Doctrine_Query::create()
                            ->select('p.*')
                            ->from('Program p, ChannelProgram cp')
                            ->where('p.id = cp.program_id')
                            ->andWhere('cp.channel_id = ?', 3)
                            ->andWhere('p.is_a_course = ?', 1)
                            ->andWhere('p.is_active = ?', 1)
                            ->orderBy('p.title')
                            ->execute();
                          ?>
                          <?php foreach($programs as $d): ?>
                            <option value="<?php echo $d->retriveUrl() ?>"<?php if($d->Site->getId() == $site->getId()) echo 'selected="selected"'; ?>><?php echo $d->getTitle() ?></option>
                          <?php endforeach; ?>
                      </select>
                    </form>
                  </div>
                  <!-- /BOX FILTRAR -->
                  
                  <!-- BOX FILTRAR -->
                  <?php
                    $sections = Doctrine_Query::create()
                      ->select('s.*')
                      ->from('Section s')
                      ->where('s.site_id = ?', $site->getId())
                      ->andWhere('s.slug != ?', 'home')
                      ->orderBy('s.title')
                      ->execute();
                  ?>
                  <?php if(count($sections) >= 1): ?>
                  <div class="box-padrao filtrar grid1">
                    <div class="topo">
                      <span></span>
                      <div class="capa-titulo">
                        <h4>navegue por disciplinas</h4>
                      </div>
                    </div>
                    <form action="" id="form-filtro" enctype="" method="post">
                      <select id="opcao-filtro" onchange="if(this.options[this.selectedIndex].value!='--') self.location.href=this.options[this.selectedIndex].value;">
                        <option>--</option>
                          <?php foreach($sections as $d): ?>
                            <option value="<?php echo $d->retriveUrl() ?>"<?php if($d->getId() == $section->getId()) echo 'selected="selected"'; ?>><?php echo $d->getTitle() ?></option>
                          <?php endforeach; ?>
                      </select>
                    </form>
                  </div>
                  <?php endif; ?>
                  <!-- /BOX FILTRAR -->
                  
                  <!-- BOX PADRAO NOTICIAS -->
                  <?php
                  $asset = $pager->getCurrent();
                  /*
                  if($section->getSlug() != "home"){
                    $assets = Doctrine_Query::create()
                      ->select('a.*')
                      ->from('Asset a, SectionAsset sa')
                      ->where('sa.section_id = ?', (int)$section->getId())
                      ->andWhere('sa.asset_id = a.id')
                      ->orderBy('a.created_at desc')
                      ->limit(60)
                      ->execute();
                  }else{
                    $assets = Doctrine_Query::create()
                      ->select('a.*')
                      ->from('Asset a')
                      ->where('a.site_id = ?', (int)$site->getId())
                      ->orderBy('a.created_at asc')
                      ->limit(60)
                      ->execute();
                  }
                  */
                  if($section->getSlug() != "home"){
                    $assets = Doctrine_Query::create()
                      ->select('a.*')
                      ->from('Asset a, SectionAsset sa')
                      ->where('sa.section_id = ?', (int)$section->getId())
                      ->andWhere('sa.asset_id = a.id')
                      ->orderBy('sa.display_order')
                      ->limit(60)
                      ->execute();
                  }
                  else{
                    if(count($section->getAssets()) > 0){
                      $assets = Doctrine_Query::create()
                        ->select('a.*')
                        ->from('Asset a, SectionAsset sa')
                        ->where('sa.section_id = ?', (int)$section->getId())
                        ->andWhere('sa.asset_id = a.id')
                        ->orderBy('sa.display_order')
                        ->limit(60)
                        ->execute();
                    }else{
                      $assets = Doctrine_Query::create()
                        ->select('a.*')
                        ->from('Asset a')
                        ->where('a.site_id = ?', (int)$site->getId())
                        ->orderBy('a.created_at asc')
                        ->limit(60)
                        ->execute();
                    }
                  }?>

                  <!-- BOX PADRAO NOTICIAS -->
                  <?php if((isset($displays["saiba-mais"]))&&(count($displays["saiba-mais"]) > 0)): ?>
                  <div class="box-padrao grid1">
                    <div class="topo">
                      <span></span>
                      <div class="capa-titulo">
                        <h4><?php if(isset($displays["saiba-mais"])) echo $displays["saiba-mais"][0]->Block->getTitle() ?></h4>
                      </div>
                    </div>
                    <?php if(isset($displays["saiba-mais"])) include_partial_from_folder('blocks','global/display1c-news2', array('displays' => $displays["saiba-mais"])) ?>
                  </div>
                  <?php endif; ?>
                  <!-- /BOX PADRAO NOTICIAS -->


                  <?php
                  if($assets): 
                  ?>
                  <div id="box-videos" class="box-padrao grid1">
                    <div class="topo">
                      <span></span>
                      <div class="capa-titulo">
                        <h4>lista de aulas</h4>
                      </div>
                      </div>
                    <div class="">
                      <ul class="sem-borda">
                        <?php $k=0; foreach($assets as $d): $k++; ?>
                          <li class="conteudo-lista">
                            <a href="http://univesptv.cmais.com.br/<?php echo $site->getSlug();?>?page=<?php echo $k?>" class="episodio<?php if(($page == $k)||(!$page && $k==1)):?> ativo<?php endif; ?>">Aula<span><?php echo $k; ?></span></a>
                            <a href="http://univesptv.cmais.com.br/<?php echo $site->getSlug();?>?page=<?php echo $k?>" class="titulos"><?php echo $d->getTitle(); ?></a>
                            <p><?php echo $d->getDescription(); ?></p>
                          </li>
                        <?php endforeach; ?>
                      </ul>
                    </div>
                  </div>
                  <?php endif; ?>
                  <!-- /BOX PADRAO NOTICIAS -->
                  
                  <!-- BOX PUBLICIDADE -->
                  <div class="box-publicidade grid1">
                    <!-- univesptv-300x250 -->
          <script type='text/javascript'>
          GA_googleFillSlot("univesptv-300x250");
          </script>
                  </div>
                  <!-- / BOX PUBLICIDADE -->

                  <!-- BOX PADRAO NOTICIAS -->
                  <?php if((isset($displays["sobre-o-curso"]))&&(count($displays["sobre-o-curso"]) > 0)): ?>
                  <div class="box-padrao grid1">
                    <div class="topo">
                      <span></span>
                      <div class="capa-titulo">
                        <h4><?php if(isset($displays["sobre-o-curso"])) echo $displays["sobre-o-curso"][0]->Block->getTitle() ?></h4>
                      </div>
                    </div>
                    <?php if(isset($displays["sobre-o-curso"])) include_partial_from_folder('blocks','global/display1c-news2', array('displays' => $displays["sobre-o-curso"])) ?>
                  </div>
                  <?php endif; ?>
                  <!-- /BOX PADRAO NOTICIAS -->

                  <!-- BOX PADRAO NOTICIAS -->
                  <?php if((isset($displays["proxima-aula"]))&&(count($displays["proxima-aula"]) > 0)): ?>
                  <div class="box-padrao grid1">
                    <div class="topo">
                      <span></span>
                      <div class="capa-titulo">
                        <h4><?php if(isset($displays["proxima-aula"])) echo $displays["proxima-aula"][0]->Block->getTitle() ?></h4>
                      </div>
                    </div>
                    <?php if(isset($displays["proxima-aula"])) include_partial_from_folder('blocks','global/display1c-news2', array('displays' => $displays["proxima-aula"])) ?>
                  </div>
                  <?php endif; ?>
                  <!-- /BOX PADRAO NOTICIAS -->


                  <!-- BOX PADRAO LINKS -->
                  <?php if((isset($displays["links-uteis"]))&&(count($displays["links-uteis"]) > 0)): ?>
                  <div class="box-padrao box-borda grid1">
                    <div class="topo">
                      <span></span>
                      <div class="capa-titulo">
                        <h4>Links Úteis</h4>
                      </div>
                    </div>
                    <?php if(isset($displays["links-uteis"])) include_partial_from_folder('blocks','global/radios', array('displays' => $displays["links-uteis"])) ?>
                    <div class="detalhe-borda grid1">
                    </div>
                  </div>
                  <?php endif; ?>
                  <!-- /BOX PADRAO LINKS -->
                    
                </div>
                <!-- /DIREITA -->
                
              <!-- APOIO -->
            <ul id="apoio" class="grid3">
                <li><a href="http://www.desenvolvimento.sp.gov.br" class="governoSp"><img src="http://cmais.com.br/portal/univesptv/images/logo-goversoSp.jpg" alt="Governo do Estado de S&atilde;o Paulo" /></a></li>
                <li><a href="http://www.fapesp.br" class="fapesp"><img src="http://cmais.com.br/portal/univesptv/images/logo-fapesp.png" alt="FAPESP" /></a></li>
                <li><a href="http://www.unicamp.br" class="unicamp"><img src="http://cmais.com.br/portal/univesptv/images/logo-unicamp.png" alt="UNICAMP" /></a></li>
                <li><a href="http://www.unesp.br" class="unesp"><img src="http://cmais.com.br/portal/univesptv/images/logo-unesp.png" alt="UNESP" /></a></li>
                <li><a href="http://www.usp.br" class="usp"><img src="http://cmais.com.br/portal/univesptv/images/logo-usp.png" alt="USP" /></a></li>
                <li><a href="http://www.fundap.sp.gov.br" class="fundap"><img src="http://cmais.com.br/portal/univesptv/images/logo-fundap.jpg" alt="FUNDAP" /></a></li>
                <li><a href="http://www.centropaulasouza.sp.gov.br" class="cps"><img src="http://cmais.com.br/portal/univesptv/images/logo-cps.png" alt="Centro Paula Souza" /></a></li>
            </ul>
            <!-- APOIO -->
                
            </div>
            <!-- /CAPA -->
          
        </div>
        <!-- /CONTEUDO PAGINA -->
        
      </div>
      <!-- /MIOLO -->
      
    </div>
    <!-- /CAPA SITE -->    
