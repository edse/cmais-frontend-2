<link href="http://cmais.com.br/portal/css/tvcultura/sites/cocorico/home.css" rel="stylesheet">
<link href="http://cmais.com.br/portal/css/tvcultura/sites/cocorico/tvcocorico.css" rel="stylesheet">
<script src="http://cmais.com.br/portal/js/jquery-1.7.2.min.js" type="text/javascript"></script>
<script type="text/javascript" src="http://cmais.com.br/portal/js/jcarousel/lib/jquery.jcarousel.min.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
    $('.destaques-small li:nth-child(6)').css('margin-right', '0');
    $('.destaques-small li:nth-child(12)').css('margin-right', '0');
    //carrossel
    $('.carrossel').jcarousel({
      scroll : 1
    });
  });
</script>
<!-- container-->
<div class="container tudo">
  <!--topo coco-->  
  <?php include_partial_from_folder('sites/cocorico', 'global/topo-coco', array('site'=>$site)) ?>
  <!--/topo coco-->
  
  <!-- row-->
  <div class="row-fluid menu">
    <div class="navbar">
      <!--menu principal-->
      <?php include_partial_from_folder('sites/cocorico', 'global/menu', array('site'=>$site)) ?>
      <!--/menu principal-->
      <!--menu personagens -->
      <?php include_partial_from_folder('sites/cocorico', 'global/personagens', array('site'=>$site)) ?>
      <!--/menu personagens -->
    </div>
  </div>
  <!-- /row-->
  
  <!-- breadcrumb-->
  <?php include_partial_from_folder('sites/cocorico', 'global/breadcrumb-section', array('site'=>$site,'section'=>$section)) ?> 
  <!-- /breadcrumb-->

  <!--btn voltar-->
  <a href="javascript:window.history.go(-1)" class="voltar personagem">voltar<span class="divisao"></span></a>
  <!-- /btn voltar-->

  <!--row-->
  <div class="row-fluid conteudo">
    <div class="span8 col-esq">
      <!-- titulo da pagina -->
      <div class="tit-pagina span12"> 
        <h2><?php echo $section->getTitle() ?></h2>
      </div>
      <?php if(isset($displays["imagens"][0]) && isset($displays["imagens"][1]) && isset($displays["imagens"][2]) && isset($displays["imagens"][3])): ?>
      <!-- titulo da pagina -->
      <div class="destaque-home">
        <img class="span9" src="<?php echo $displays["imagens"][0]->retriveImageUrlByImageUsage('image-5-b') ?>" alt="<?php echo $displays["imagens"][0]->getTitle() ?>" />
        <div class="box span3">
          <ul>
            <li><img class="span12" src="<?php echo $displays["imagens"][1]->retriveImageUrlByImageUsage('image-2-b') ?>" alt="<?php echo $displays["imagens"][1]->getTitle() ?>" /></li>
            <li><img class="span12" src="<?php echo $displays["imagens"][2]->retriveImageUrlByImageUsage('image-2-b') ?>" alt="<?php echo $displays["imagens"][2]->getTitle() ?>" /></li>
            <li><img class="span12" src="<?php echo $displays["imagens"][3]->retriveImageUrlByImageUsage('image-2-b') ?>" alt="<?php echo $displays["imagens"][3]->getTitle() ?>" /></li>
          </ul>
        </div>
        <p><?php echo html_entity_decode($displays["texto"][0]->Asset->AssetContent->render()) ?></p>
      </div>
      <?php endif; ?> 
      
      <div class="span12">
     
      <?php if(isset($displays["conteudos"][0])): ?> 
        <?php $se = $displays["conteudos"][0]->Asset->Sections[0]->getTitle(); ?>
        <?php $se_link = $displays["conteudos"][0]->Asset->Sections[0]->getSlug(); ?>
        <!-- box-destaque-0 -->
      
        
        <?php if($displays['conteudos'][0]->Asset->AssetType->getSlug() == "video"): ?>
          <div class="span6 box-destaque ytb"> 
          <h3><a href="<?php echo $site->retriveUrl() ?>/<?php echo $se_link ?>"><?php echo $se ?></a></h3>
          <a href="<?php echo $displays["conteudos"][0]->Asset->retriveUrl() ?>"><img src="http://img.youtube.com/vi/<?php echo $displays["conteudos"][0]->Asset->AssetVideo->getYoutubeId()?>/0.jpg" alt="<?php echo $displays["conteudos"][0]->getTitle() ?>"></a>
          <a href="<?php echo $displays["conteudos"][0]->Asset->retriveUrl() ?>"><?php echo $displays["conteudos"][0]->getTitle() ?></a>
          <a href="<?php echo $site->retriveUrl() ?>/<?php echo $se_link ?>" class="ico-mais"></a>
  
        <?php elseif($displays['conteudos'][0]->Asset->AssetType->getSlug() == "content"): ?>
          <div class="span6 box-destaque"> 
          <?php $related_image = $displays['conteudos'][0]->Asset->retriveRelatedAssetsByAssetTypeId(2); ?>
          <?php $related_video = $displays['conteudos'][0]->Asset->retriveRelatedAssetsByAssetTypeId(6); ?>
          <?php if(count($related_image) > 0): ?> 
            <h3><a href="<?php echo $site->retriveUrl() ?>/<?php echo $se_link ?>"><?php echo $se ?></a></h3>
            <a href="<?php echo $displays["conteudos"][0]->Asset->retriveUrl() ?>"><img src="<?php echo $displays["conteudos"][0]->retriveImageUrlByImageUsage('image-3-b') ?>" alt="<?php echo $displays["conteudos"][0]->getTitle() ?>"></a>
            <a href="<?php echo $displays["conteudos"][0]->Asset->retriveUrl() ?>"><?php echo $displays["conteudos"][0]->getTitle() ?></a>
            <a href="<?php echo $site->retriveUrl() ?>/<?php echo $se_link ?>" class="ico-mais"></a>
       
          <?php elseif(count($related_video) > 0): ?> 
            <div class="span6 box-destaque ytb"> 
            <h3><a href="<?php echo $site->retriveUrl() ?>/<?php echo $se_link ?>>"><?php echo $se ?></a></h3>
            <a href="<?php echo $displays["conteudos"][0]->Asset->retriveUrl() ?>"><img src="http://img.youtube.com/vi/<?php echo $related_video[0]->AssetVideo->getYoutubeId()?>/0.jpg" alt="<?php echo $displays["conteudos"][0]->getTitle() ?>"></a>
            <a href="<?php echo $displays["conteudos"][0]->Asset->retriveUrl() ?>"><?php echo $displays["conteudos"][0]->getTitle() ?></a>
            <a href="<?php echo $site->retriveUrl() ?>/<?php echo $se_link ?>" class="ico-mais"></a>
 
          <?php endif; ?>
        <?php endif; ?>
      </div>
    <?php endif; ?>
            <!-- box-destaque-0 -->
            
            <!-- box-destaque-1 -->
       <?php if(isset($displays["conteudos"][1])): ?> 
        <?php $se = $displays["conteudos"][1]->Asset->Sections[0]->getTitle(); ?>
        <?php $se_link = $displays["conteudos"][1]->Asset->Sections[0]->getSlug(); ?>
        

        <?php if($displays['conteudos'][1]->Asset->AssetType->getSlug() == "video"): ?>
          <div class="span6 box-destaque ytb"> 
          <h3><a href="<?php echo $site->retriveUrl() ?>/<?php echo $se_link ?>"><?php echo $se ?></a></h3>
          <a href="<?php echo $displays["conteudos"][1]->Asset->retriveUrl() ?>"><img src="http://img.youtube.com/vi/<?php echo $displays["conteudos"][1]->Asset->AssetVideo->getYoutubeId()?>/0.jpg" alt="<?php echo $displays["conteudos"][1]->getTitle() ?>"></a>
          <a href="<?php echo $displays["conteudos"][1]->Asset->retriveUrl() ?>"><?php echo $displays["conteudos"][1]->getTitle() ?></a>
          <a href="<?php echo $site->retriveUrl() ?>/<?php echo $se_link ?>" class="ico-mais"></a>

        <?php elseif($displays['conteudos'][1]->Asset->AssetType->getSlug() == "content"): ?>
          <?php $related_image = $displays['conteudos'][1]->Asset->retriveRelatedAssetsByAssetTypeId(2); ?>
          <?php $related_video = $displays['conteudos'][1]->Asset->retriveRelatedAssetsByAssetTypeId(6); ?>
          <?php if(count($related_image) > 0): ?> 
            <div class="span6 box-destaque"> 
            <h3><a href="<?php echo $site->retriveUrl() ?>/<?php echo $se_link ?>"><?php echo $se ?></a></h3>
            <a href="<?php echo $displays["conteudos"][1]->Asset->retriveUrl() ?>"><img src="<?php echo $displays["conteudos"][1]->retriveImageUrlByImageUsage('image-3-b') ?>" alt="<?php echo $displays["conteudos"][1]->getTitle() ?>"></a>
            <a href="<?php echo $displays["conteudos"][1]->Asset->retriveUrl() ?>"><?php echo $displays["conteudos"][1]->getTitle() ?></a>
            <a href="<?php echo $site->retriveUrl() ?>/<?php echo $se_link ?>" class="ico-mais"></a>
       
          <?php elseif(count($related_video) > 0): ?> 
            <div class="span6 box-destaque ytb"> 
            <h3><a href="<?php echo $site->retriveUrl() ?>/<?php echo $se_link ?>"><?php echo $se ?></a></h3>
            <a href="<?php echo $displays["conteudos"][1]->Asset->retriveUrl() ?>"><img src="http://img.youtube.com/vi/<?php echo $related_video[1]->AssetVideo->getYoutubeId()?>/0.jpg" alt="<?php echo $displays["conteudos"][1]->getTitle() ?>"></a>
            <a href="<?php echo $displays["conteudos"][1]->Asset->retriveUrl() ?>"><?php echo $displays["conteudos"][1]->getTitle() ?></a>
            <a href="<?php echo $site->retriveUrl() ?>/<?php echo $se_link ?>" class="ico-mais"></a>
 
          <?php endif; ?>
        <?php endif; ?>
      </div>
    <?php endif; ?>
            <!-- box-destaque-1 -->
     </div>
    </div>
    

    <?php if(isset($displays["autografo"][0])): ?>
      
    <?php $related_preview = $displays['autografo'][0]->Asset->retriveRelatedAssetsByRelationType('Preview'); ?>
      <?php $related_download = $displays['autografo'][0]->Asset->retriveRelatedAssetsByRelationType('Download'); ?>  

    <div class="span4 autografo">
      <form class="form-horizontal">
        <h2>Autógrafo</h2>
        <div class="divisao"></div>
        
        <p>Escreva seu nome no campo abaixo e clique no botão<bold>BAIXAR</bold> para ter seu autógrafo personalizado do seu personagem favorito!</p>
        <div class="control-group g-nome">
          <label class="control-label nome" for="nome"></label> 
          <div class="controls">
            <input type="text" id="nome" placeholder="Seu nome">
          </div>
        </div>
        <div class="control-group g-autografo">
          <img src="http://midia.cmais.com.br/assets/image/original/<?php echo $related_preview[0]->AssetImage->getFile().".".$related_preview[0]->AssetImage->getExtension()?>" alt="<?php echo $section->getTitle() ?>" />
          <div class="capa-btn">
            <span></span>
            <!-- <a id="getimage" class="btn">baixar</a> -->
            <input type="submit" id="getimage" class="btn" value="baixar"></input>
            <span class="last"></span>
          </div>
        </div>
      </form>
    </div>
    <script type="text/javascript">
      $(document).ready(function() { 
        $("#getimage").click(function() {
          if($('#nome').val())
            self.open('http://cmais.com.br/actions/cocorico/image.php?n='+escape($('#nome').val())+'&u=http://midia.cmais.com.br/assets/image/original/<?php echo $related_download[0]->AssetImage->getFile().".".$related_download[0]->AssetImage->getExtension() ?>');
          else
            $('#nome').focus();
        });
      });
    </script>
    <?php endif; ?>
    <?php if(count($displays['autografo']) == 0): ?>
    <!-- banner -->
    <div class="span4" style="float:right;">
      <!-- portal-cocorico-300x250 -->
      <script type='text/javascript'>
        GA_googleFillSlot("portal-cocorico-300x250");
      </script>
    </div>
    <!-- banner -->
    <?php endif; ?>
  </div>
  <!--/row-->
  
  <!-- rodapé-->
  <div class="row-fluid  border-top"></div>
  <?php include_partial_from_folder('sites/cocorico', 'global/rodape', array('siteSections' => $siteSections, 'displays' => $displays, 'section'=>$section, 'uri'=>$uri)) ?>
  <!--/rodapé-->
  
</div>
<!-- /container-->


