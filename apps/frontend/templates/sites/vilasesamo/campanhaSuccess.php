<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<!--[if lt IE 8]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/sites/vilasesamo2/internas.css" type="text/css" />

<script>
  $("body").addClass("campanhas");
</script>

<!-- HEADER -->
<?php include_partial_from_folder('sites/vilasesamo', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'section' => $section)) ?>
<!-- /HEADER -->

<!--content-->
<div id="content">
  
  <!--section -->
  <section class="filtro row-fluid">
    
    <!--container conteudo-->
    <div class="b-amarelo borda-arredonda pais">
      <h1>
        <?php echo $section->getTitle() ?>
        
        <!--selecione a campanha-->
        <?php
          $sectionCampanha = Doctrine::getTable('Section')->findOneBySiteIdAndSlug($site->getId(),"campanhas");
          $allCampaigns = $sectionCampanha->subsections(); 
        ?>        
        <div class="btn-group">
          <a class="btn dropdown-toggle" data-toggle="dropdown" href="#"> Selecione a campanha <span class="caret icones-setas icone-cat-abrir"></span> </a>
          
          <?php if(isset($allCampaigns)): ?>
            <?php if(count($allCampaigns) > 0): ?>
              <ul class="dropdown-menu">
                <?php foreach($allCampaigns as $c): ?>
                  <?php
                    //$block = Doctrine::getTable('Block')->findOneBySectionIdAndSlug($c->getId(), "enviados");
                    //if ($block) $displays["enviados"] = $block->retriveDisplays(); // Pega os destaques do bloco "parceiros"
                    //echo $block;
                  ?>
                  <?php if(isset($displays["enviados"])): ?>
                    <?php if(count($displays["enviados"]) > 0): ?>
                      <li><a href="<?php echo $c->retriveUrl() ?>" title="<?php echo $c->getTitle() ?>"><?php echo $c->getTitle() ?></a></li>
                    <?php endif; ?>
                  <?php endif; ?>
                <?php endforeach; ?>
              </ul>
            <?php endif; ?>
          <?php endif; ?>
        </div>  
        <!--/selecione a campanha-->
        
      </h1>
      
      <!--container-campanhas-->
      <?php if(isset($displays['destaque-principal'])): ?>
        <?php if(count($displays['destaque-principal']) > 0): ?>
          <div class="container-campanhas">
            
            <!--video ou imagem-->
            <?php if($displays["destaque-principal"][0]->Asset->AssetType->getSlug() == "video"): ?>
              <iframe width="300" height="246" src="http://www.youtube.com/embed/<?php echo $displays["destaque-principal"][0]->Asset->AssetVideo->getYoutubeId() ?>?wmode=transparent&rel=0" frameborder="0" allowfullscreen></iframe>
            <?php elseif($displays["destaque-principal"][0]->Asset->AssetType->getSlug() == "image"): ?>
              <img src="<?php echo $displays["destaque-principal"][0]->retriveImageUrlByImageUsage("image-3-b") ?>" alt="<?php echo $displays["destaque-principal"][0]->getTitle() ?>" />
            <?php endif; ?>
            <!--/video ou imagem-->

            <!--descricao-->
            <?php echo $displays['destaque-principal'][0]->getDescription() ?>
            <!--/descricao-->
            
          </div>
        <?php endif; ?>
      <?php endif; ?>
      <!--container-campanhas-->
    </div>
    <!--/container conteudo-->
    
  </section>
  <!--/section -->
  
  <div class="divisa top"></div>
  
  <!--section -->
  <section class="filtro escolha row-fluid" style="display: none;">
    
    <!--viewer-->
    <div id="viewer" class="viewer" >
      <!--imagem aparece via JQUERY -->
    </div>
    <!--/viewer-->
    
  </section>
  <!--section-->
  
  <div class="divisa escolha" style="display:none;"></div>
  
  <!--/section-->
  <section class="todos-itens ">
    <!--lista-->
    <ul role="contentinfo" id="container" class="row-fluid">
      <?php if(isset($displays["enviados"])): ?>
        <?php if(count($displays["enviados"]) > 0): ?>
          <?php foreach($displays["enviados"] as $k=>$d): ?>
            <!--item-->
            <li class="span4 element"> 
              <a href="javascript: viewer('<?php echo $d->retriveImageUrlByImageUsage("image-14-b") ?>','<?php echo $d->getTitle() ?>')" title="">
                <img src="<?php echo $d->retriveImageUrlByImageUsage("image-13") ?>" alt="<?php echo $d->getTitle() ?>"/>
                <div><img class="altura" src="http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/altura.png" alt=""/><?php echo $d->getTitle() ?></div>
              </a>
            </li>
            <!--/item--> 
          <?php endforeach; ?>
        <?php endif; ?>
      <?php endif; ?>
    </ul> 
    <!--lista-->  
  </section>
  <!--/section-->
  
</div>
<!--/content--> 

<input type="hidden" id="filter-choice" value="">

<!--paginacao-->
<?php //include_partial_from_folder('sites/vilasesamo', 'global/pagination', array('site' => $site, 'section' => $section,'pager'=>$pager , 'pager2'=>$pager2, 'parent' => $parent)) ?>
<!--/paginacao-->

<script>
  function viewer(url,alt) {
    goTop();
    setTimeout(function() {
      if($('.filtro.escolha').is(":hidden")){
        $(".filtro.escolha, .divisa.escolha").slideDown();
      }
      $("#viewer").html("<img src='"+url+"' alt='"+alt+"' />");
    }, 500);
  }
  
  function goTop(){
    $('html, body').animate({
      scrollTop: parseInt($('.divisa.top').offset().top)-126
    }, "fast");
  }
</script>    
<?php 
/**
 * programado
 
<h1><?php echo $section->getTitle() ?></h1>

<?php
  $sectionCampanha = Doctrine::getTable('Section')->findOneBySiteIdAndSlug($site->getId(),"campanhas");
  $allCampaigns = $sectionCampanha->subsections(); 
?>        
<?php if(isset($allCampaigns)): ?>
  <?php if(count($allCampaigns) > 0): ?>
<ul>
    <?php foreach($allCampaigns as $c): ?>
      <?php
        $block = Doctrine::getTable('Block')->findOneBySectionIdAndSlug($c->getId(), "enviados");
        if ($block) $displays["enviados"] = $block->retriveDisplays(); // Pega os destaques do bloco "parceiros"
      ?>
      <?php if(isset($displays["enviados"])): ?>
        <?php if(count($displays["enviados"]) > 0): ?>
  <li><a href="/<?php echo $site->getSlug() ?>/campanhas/<?php echo $c->getSlug(); ?>" title="<?php echo $c->getTitle(); ?>"><?php echo $c->getTitle(); ?></a></li>
        <?php endif; ?>
      <?php endif; ?>
    <?php endforeach; ?>
</ul>
  <?php endif; ?>
<?php endif; ?>

<!--destaque-principal-->
<div>
<?php if(isset($displays['destaque-principal'])): ?>
  <?php if(count($displays['destaque-principal']) > 0): ?>
    
  <!--descricao-->    
  <div>
  <?php echo $displays['destaque-principal'][0]->getDescription() ?>
  </div>
  <!--/descricao-->
      
  <!--video ou imagem-->
  <div>
  <?php if($displays["destaque-principal"][0]->Asset->AssetType->getSlug() == "video"): ?>
  <iframe width="300" height="246" src="http://www.youtube.com/embed/<?php echo $displays["destaque-principal"][0]->Asset->AssetVideo->getYoutubeId() ?>?wmode=transparent&rel=0" frameborder="0" allowfullscreen></iframe>
  <?php elseif($displays["destaque-principal"][0]->Asset->AssetType->getSlug() == "image"): ?>
  <img src="<?php echo $displays["destaque-principal"][0]->retriveImageUrlByImageUsage("image-3-b") ?>" alt="<?php echo $displays["destaque-principal"][0]->getTitle() ?>" />
  <?php endif; ?>
  </div>
  <!--/video ou imagem-->
      
  <?php endif; ?>
<?php endif; ?>
</div>
<!--/destaque-principal-->

<!-- visualizador do destaque -->
<div id="viewer">
  
</div>
<!--/visualizador do destaque -->

<!--destaques-->
<div>
<?php if(isset($displays["enviados"])): ?>
  <?php if(count($displays["enviados"]) > 0): ?>
    <?php foreach($displays["enviados"] as $k=>$d): ?>
  <div>
    <a href="javascript: viewer('<?php echo $d->retriveImageUrlByImageUsage("image-14") ?>','<?php echo $d->getTitle() ?>')" title="<?php echo $d->getTitle() ?>">
      <img src="<?php echo $d->retriveImageUrlByImageUsage("image-13") ?>" alt="<?php echo $d->getTitle() ?>"/>
      <!--input type="hidden" id="image_<?php echo $k ?>" name="image_<?php echo $k ?>" value="<?php echo $d->retriveImageUrlByImageUsage("image-14") ?>" /-->
      <p><?php echo $d->getTitle() ?></p>
    </a>
  </div>
    <?php endforeach; ?>
  <?php endif; ?>
<?php endif; ?>
</div>
<!--/destaques-->

<script>
  function viewer(url,alt) {
    $("#viewer").html("<img src='"+url+"' alt='"+alt+"' />");
  }
</script>

*/?>

