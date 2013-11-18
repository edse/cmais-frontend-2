<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/sites/vilasesamo2/internas.css" type="text/css" />

<script>
  $("body").addClass("interna atividades");
</script>

<!-- HEADER -->
<?php include_partial_from_folder('sites/vila-sesamo', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'section' => $section)) ?>
<!-- /HEADER -->

<!--content-->
<div id="content">
<!--section-->
<section class="filtro row-fluid">
  <!--span12-->
  <div class="span12" role="main">
    
    <!--h3><i class="sprite-icon-colorir-med"></i>Atividades</h3-->
    <h1><i class="icones-sprite-interna icone-atividades-grande"></i>Atividades</h1>
    
    <?php if(isset($displays['destaque-1']) || isset($displays['destaque-2'])): ?>
      <?php if(count($displays['destaque-1']) > 0 || count($displays['destaque-2']) > 0): ?>
    <!--destaque-filtro-->
    <div class="span10 destaque-filtro">
      <!--/destaques-->
      <div class="aba1">
        <?php if(isset($displays['destaque-1'])): ?>
          <?php if(count($displays['destaque-1']) > 0): ?>
            <?php $related_preview = $displays['destaque-1'][0]->Asset->retriveRelatedAssetsByRelationType("Preview"); ?>
        <h2 aria-describedby="Novidade">
          <article class="span6 clipes">
            <a class="img-destaque" href="/<?php echo $site->getSlug() ?>/atividades/<?php echo $displays['destaque-1'][0]->Asset->getSlug() ?>">
              <span class="sprite-selo">Novidade!</span>
              <img src="<?php echo $related_preview[0]->retriveImageUrlByImageUsage("image-13") ?>" alt="<?php echo $displays['destaque-1'][0]->getTitle() ?>" />
              <p><?php echo $displays['destaque-1'][0]->getTitle() ?></p> 
            </a> 
          </article>
        </h2>
          <?php endif; ?>
        <?php endif; ?>
        <?php if(isset($displays['destaque-2'])): ?>
          <?php if(count($displays['destaque-2']) > 0): ?>
            <?php $related_preview = $displays['destaque-2'][0]->Asset->retriveRelatedAssetsByRelationType("Preview"); ?>
        <h2 aria-describedby="Novidade">
          <article class="span6 clipes  semmargem">
            <a class="img-destaque" href="/<?php echo $site->getSlug() ?>/atividades/<?php echo $displays['destaque-2'][0]->Asset->getSlug() ?>">
              <span class="sprite-selo">Novidade!</span>
              <img src="<?php echo $related_preview[0]->retriveImageUrlByImageUsage("image-13") ?>" alt="<?php echo $displays['destaque-2'][0]->getTitle() ?>" />
              <p><?php echo $displays['destaque-2'][0]->getTitle() ?></p> 
            </a> 
          </article>
        </h2>
          <?php endif; ?>
        <?php endif; ?>
      </div>
      <!--/destaques-->
    </div>
    <!--destaque-filtro-->
      <?php endif; ?>
    <?php endif; ?>
    
    <!--menu filtro persoagem-->
    <?php $particularSection = Doctrine::getTable('Section')->findOneBySiteIdAndSlug($site->getId(),"personagens"); ?>
    <?php $personagens = $particularSection->subsections()?>
    
    <?php include_partial_from_folder('sites/vila-sesamo', 'global/menu-personagens', array('site'=>$site ,'section' => $section,'personagens' => $personagens)) ?>
    <!--/menu filtro persoagem-->
        
  </div>
  <!--/span12-->
</section>
<!--/section-->


<?php if(isset($pager)): ?>
  <?php if(count($pager) > 0): ?>
    
<span class="divisa"></span>

<!--/section-->
<section class="todos-itens ">
  <!--lista-->
  <ul role="contentinfo" id="container" class="row-fluid">
    <?php foreach($pager->getResults() as $k=>$d): ?>
    <?php
      $assetPersonagens = array();
      $personagensSection = Doctrine::getTable('Section')->findOneBySiteIdAndSlug($site->id, 'personagens');
      $assetSections = $d->getSections();
      foreach($assetSections as $a) {
        if($a->getParentSectionId() == $personagensSection->getId()) {
          $assetPersonagens[] = $a->getSlug();
        }
      }
    ?>
    <li class="span4 element<?php if(count($assetPersonagens) > 0) echo " " . implode(" ", $assetPersonagens); ?> atividades"> 
      <a href="/<?php echo $site->getSlug() ?>/atividades/<?php echo $d->getSlug() ?>" title="<?php echo $d->getTitle() ?>">
        <?php $related = $d->retriveRelatedAssetsByRelationType("Preview") ?>
        <img src="<?php echo $related[0]->retriveImageUrlByImageUsage("image-13") ?>" alt="<?php echo $d->getTitle() ?>" />
        <i class="icones-sprite-interna icone-atividades-pequeno"></i>
        <div>
          <img class="altura" src="/portal/images/capaPrograma/vilasesamo2/altura.png"/>
          <?php echo $d->getTitle() ?>
        </div>
      </a>
    </li>
    <?php endforeach; ?>
  </ul> 
  <!--lista-->  
</section>
<!--/section-->
  <?php endif; ?>
<?php endif; ?>

</div>
<!--/content-->
  



<!--paginacao-->
<nav id="page_nav">
  <div class="container-ajax-loader">
    <img id="ajax-loader" src="http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/sprites/ajax-loader.gif" alt="" style="display:none;">
  </div>
  <a href="javascript:vilaSesamoGetContents();" class="mais">Carregar mais<i class="icones-sprite-interna icone-carregar-br-grande"></i></a>
</nav>
<script>
  videoPage = 1;
  contentPage = 1;
  function vilaSesamoGetContents() {
    $.ajax({
      url: "<?php echo url_for("@homepage") ?>ajax/vilasesamogetcontents",
      data: "page="+contentPage+"&items=2&site=<?php echo (int)$site->id ?>&section=<?php echo $section->getId(); ?>",
      beforeSend: function(){
          $('#page-nav a.mais').hide();
          $('#page-nav #ajax-loader').show();
        },
      success: function(data){
        $('#page-nav #ajax-loader').hide();
        if (data != "") {
          console.log(data);
          contentPage++;
        }else{
          console.log("fim da listagem");
        }
      }
    });
  }
  $(document).ready(function(){
   vilaSesamoGetContents();
  });
</script>
<!--/paginacao-->

<!--scripts-->
<script src="http://cmais.com.br/portal/js/isotope/jquery.isotope.min.js"></script>
<?php /*<script src="http://cmais.com.br/portal/js/isotope/jquery.infinitescroll.min.js"></script> */ ?>
<script src="http://cmais.com.br/portal/js/vilasesamo2/internas-isotope.js"></script>
