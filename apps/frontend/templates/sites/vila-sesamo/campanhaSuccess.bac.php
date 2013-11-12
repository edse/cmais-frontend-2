<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<!--[if lt IE 8]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/sites/vilasesamo2/internas.css" type="text/css" />

<script>
  $("body").addClass("campanhas");
</script>

<!-- HEADER -->
<?php include_partial_from_folder('sites/vila-sesamo', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'section' => $section)) ?>
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
          $sectionCategorias = Doctrine::getTable('Section')->findOneBySiteIdAndSlug($site->getId(),"categorias");
          $allCategories = $sectionCategorias->subsections(); // pega todas as categorias para o usuário poder navegar por elas
        ?>        
        <?php if(isset($allCategories)): ?>
          <?php if(count($allCategories) > 0): ?>
          <div class="btn-group">
            <a class="btn dropdown-toggle" data-toggle="dropdown" href="#"> Selecione a categoria <span class="caret icones-setas icone-cat-abrir"></span> </a>
            <ul class="dropdown-menu">
              <?php foreach($allCategories as $c): ?>
              <li><a href="<?php echo $c->retriveUrl() ?>" title="<?php echo $c->getTitle() ?>"><?php echo $c->getTitle() ?></a></li>
              <?php endforeach; ?>
            </ul>
          </div>
          <?php endif; ?>
        <?php endif; ?>
        <!--/selecione a campanha-->
        
      </h1>
      
      <!--container-campanhas-->
      <div class="container-campanhas">
        
        <p>
          <iframe width="300" height="225" src="//www.youtube.com/embed/-o1WFZf-wCo&rel=0" frameborder="0" allowfullscreen></iframe>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce non venenatis mauris. In accumsan massa sed consectetur vehicula. Nulla a interdum leo. Vivamus volutpat id dui congue condimentum. Suspendisse iaculis varius dui, ac volutpat magna scelerisque eget. Aenean posuere elementum nisl vitae pretium. Maecenas eu nunc facilisis, facilisis nisi vel, molestie nibh. Ut congue scelerisque ligula commodo faucibus. Sed eu massa vel quam ullamcorper pellentesque a a dolor. Proin consectetur ligula nec turpis aliquet, et luctus neque pulvinar. In venenatis nisl vel nisl dapibus, luctus tempor purus porta. Duis semper, purus sodales placerat bibendum, purus leo blandit sem, eu volutpat lectus lorem faucibus odio. Fusce condimentum ut erat ut porttitor. Suspendisse sed sem id lectus lobortis malesuada. Donec in arcu sit amet mi egestas mollis.
          <br><br>
          Veja abaixo a galeria de desenhos das brincadeiras preferidas da criançada!
        </p>
        

        
      </div>
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
      <img src="http://midia.cmais.com.br/assets/image/image-14-b/3c7040115466dcdd0a368bb53e0740f55647df82.jpg" alt="Para Colorir - Beto e Bernice">
      <h2>Nome COMPLETO da Criança / NOME DA Cidade - UF</h2>
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
          <li class="span4 element"> 
            <a href="javascript: viewer('<?php echo $d->retriveImageUrlByImageUsage("image-14-b") ?>','<?php echo $d->getTitle() ?>')" title="">
              <img src="<?php echo $d->retriveImageUrlByImageUsage("image-13-b") ?>" alt="<?php echo $d->getTitle() ?>"/>
              <div><img class="altura" src="/portal/images/capaPrograma/vilasesamo2/altura.png" alt=""/><?php echo $d->getTitle() ?></div>
            </a>
          </li>
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

<nav id="page_nav">
  <a href="/testes/vilasesamo2/pages/2.html" class="mais">Carregar mais<i class="icones-sprite-interna icone-carregar-lr-grande"></i></a>
</nav>
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

