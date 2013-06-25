<link href="http://cmais.com.br/portal/css/tvcultura/sites/cocorico/home.css" rel="stylesheet">
<link href="http://cmais.com.br/portal/css/tvcultura/sites/cocorico/tvcocorico.css" rel="stylesheet">
<link href="http://cmais.com.br/portal/css/tvcultura/sites/cocorico/brincadeiras.css" rel="stylesheet">
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
  <h2 class="tit-pagina">Paiol</h2>
  <!--row conteudo -->
  <div class="row-fluid conteudo">
    <!-- col direita -->
    <div class="span4 col-dir">

      <?php if(isset($displays['destaque-receitinhas'])):?>  
        <?php if(count($displays['destaque-receitinhas']) > 0): ?>
 
 <?php $related0 = $displays['destaque-receitinhas'][0]->Asset->retriveRelatedAssetsByAssetTypeId(2); ?> 
   <?php $related1 = $displays['destaque-receitinhas'][1]->Asset->retriveRelatedAssetsByAssetTypeId(6); ?>    
    <?php $related2 = $displays['destaque-receitinhas'][2]->Asset->retriveRelatedAssetsByAssetTypeId(6); ?>
           
      <div class="tvcoco span12">    
        <a href="<?php echo $site->retriveUrl(); ?>/receitinhas" ?><h2>Receitinhas</h2></a>
        <a class="convidado span12" href="<?php echo $site->retriveUrl() ?>/receitinhas" title="<?php echo $displays['destaque-receitinhas'][0]->getTitle() ?>">
          <img src="<?php echo $related0[0]->retriveImageUrlByImageUsage('original') ?>" alt="<?php echo $displays['destaque-receitinhas'][0]->getTitle() ?>" />
          <p></p>
          <p><?php $tam=32; $str=$displays['destaque-receitinhas'][0]->getTitle(); mb_internal_encoding("UTF-8"); if(strlen($str) <= $tam) echo $str; else echo mb_substr($str, 0, $tam-1)."&hellip;" ?></p>
        </a>
        <a href="<?php echo $site->retriveUrl(); ?>/receitinhas" title="receitinhas" >
          <span class="mais"></span>
        </a>
        <div class="enquete span12">
          <a href="<?php echo $displays['destaque-receitinhas'][1]->retriveUrl() ?>" title="" class="span6">
            <img class="span12" src="http://img.youtube.com/vi/<?php echo $related1[0]->AssetVideo->getYoutubeId()?>/1.jpg" alt="" />
            <p><?php $tam=18; $str=$displays['destaque-receitinhas'][1]->getTitle(); mb_internal_encoding("UTF-8"); if(strlen($str) <= $tam) echo $str; else echo mb_substr($str, 0, $tam-1)."&hellip;" ?></p>
          </a>
          <a href="<?php echo $displays['destaque-receitinhas'][2]->retriveUrl() ?>" title="" class="span6 last">
            <img class="span12" src="http://img.youtube.com/vi/<?php echo $related2[0]->AssetVideo->getYoutubeId()?>/1.jpg" alt="" />
            <p><?php $tam=18; $str=$displays['destaque-receitinhas'][2]->getTitle(); mb_internal_encoding("UTF-8"); if(strlen($str) <= $tam) echo $str; else echo mb_substr($str, 0, $tam-1)."&hellip;" ?></p>
          </a>
        </div>  
      </div>  
    <?php endif; ?>
    <?php endif; ?> 
    </div>
    <!-- /col direita -->
    <!-- col esquerda -->
    <div class="span8 col-esq">

      <!-- destaque-home -->
      
      <?php if(isset($displays['videos'])):?>
      <?php if(count($displays['videos']) > 0): ?>     
      <?php foreach($displays['videos'] as $k=>$d):?>  
       <div class="destaque-home-tv span9">
          <?php $related = $displays['videos'][0]->Asset->retriveRelatedAssetsByAssetTypeId(6); ?>
        <h2>
         <?php $tam=28; $str= $displays['videos'][0]->Asset->getTitle(); mb_internal_encoding("UTF-8"); if(strlen($str) <= $tam) echo $str; else echo mb_substr($str, 0, $tam-1)."&hellip;" ?> 
        </h2> <?php echo $related[0]->AssetVideo->getYoutubeId() ?>

        <iframe width="460" height="280" src="http://www.youtube.com/embed/<?php echo $displays['videos'][0]->Asset->AssetVideo->getYoutubeId() ?>?wmode=transparent&rel=0" frameborder="0" allowfullscreen></iframe>

        <div class="destaque span12">
          <span></span>
          <a href="<?php echo $site->retriveUrl() ?>/clipes-musicais" class="btn-destaque" title="Ver mais episódios completos">Assistir mais clipes</a>
          <span class="last"></span>
        </div>
    <?php endforeach; ?>   
    <?php endif; ?>
    <?php endif; ?> 
      </div>
      <!-- /destaque-home -->

     
                    
       <!-- bastidores -->
      <div class="bastidores fonte span3">
       
        <div class="topo">
          <div class="bac-yellow">
            <h3>
            <i class="ico-serie"></i>
            Séries
            <i class="ico-seta-titulo"></i>
           </h3>
         </div>
       </div>
        
       
         
        <!-- item -->
        <a href="<?php echo $site->retriveUrl() ?>/series/cocorico-na-franca" title="Cocoricó na França">
          <div class="item">
            <div class="img-bast">
                <img src="/portal/images/capaPrograma/<?php echo $site->getSlug() ?>/destaque-cocorico-na-franca.jpg" alt="Cocoricó na França"/>
            </div>
            <span>
              Cocoricó na França
            </span>
          </div>
        </a>
        <!-- /item -->
        
        <!-- item -->
        <a href="<?php echo $site->retriveUrl() ?>/series/toda-crianca-tem-direito">
          <div class="item">
            <div class="img-bast">
                <img src="/portal/images/capaPrograma/<?php echo $site->getSlug() ?>/destaque-toda-crianca-tem-direito.jpg" alt="Toda Criança tem Direito"/>
            </div>
            <span>
              Toda Criança tem Direito
            </span>
          </div>
        </a>
        <!-- /item -->
        
         <!-- item -->
        <a href="<?php echo $site->retriveUrl() ?>/series/se-liga-no-perigo">
          <div class="item">
            <div class="img-bast">
                <img src="/portal/images/capaPrograma/<?php echo $site->getSlug() ?>/destaque-se-ligue-no-perigo.jpg" alt="Se Liga no Perigo"/>
            </div>
            <span>
              Se Liga no Perigo
            </span>
          </div>
        </a>
        <!-- /item -->
      </div>
      <!-- /bastidores -->
  
            

    </div>
    <!-- /col esquerda -->
  </div>
  <!-- /row conteudo -->
  <!--row conteudo -->
  <div class="row-fluid conteudo">
     
    <!-- Imprima e Brinque -->
    <?php if(isset($displays['destaque-imprima'])): ?>
      <?php if(count($displays['destaque-imprima']) > 0): ?>
        <?php $related = $displays['destaque-imprima'][0]->Asset->retriveRelatedAssetsByRelationType('Preview'); ?>
        <?php $se = $displays['destaque-imprima'][0]->Asset->Sections[0]->getTitle(); ?>
        <?php $se_link = $displays['destaque-imprima'][0]->Asset->Sections[0]->getSlug(); ?>
      <div class="span4 box-destaque">
        <h3><a href="<?php echo $site->retriveUrl() ?>/<?php echo $se_link ?>"><?php echo $se ?></a></h3>
        <a href="<?php echo $displays['destaque-imprima'][0]->retriveUrl() ?>"><img src="<?php echo $related[0]->retriveImageUrlByImageUsage('image-5-b') ?>" alt="<?php echo $displays['destaque-imprima'][0]->getTitle() ?>"></a>
          <a href="<?php echo $displays['destaque-imprima'][0]->retriveUrl() ?>"> 
            <?php //echo $displays['destaque-imprima'][0]->getDescription() ?>
            <?php $tam=28; $str=$displays['destaque-imprima'][0]->getDescription(); mb_internal_encoding("UTF-8"); if(strlen($str) <= $tam) echo $str; else echo mb_substr($str, 0, $tam-1)."&hellip;" ?> 
          </a>
        <a href="<?php echo $site->retriveUrl() ?>/<?php echo $se_link ?>" class="ico-mais"></a>
      </div>
    <!-- Imprima e Brinque -->
     <?php endif; ?>
    <?php endif; ?>
    
    <!-- Papel de parede -->
    <?php if(isset($displays['destaque-papel-de-parede'])): ?>
      <?php if(count($displays['destaque-papel-de-parede']) > 0): ?>
        <?php $related = $displays['destaque-papel-de-parede'][0]->Asset->retriveRelatedAssetsByRelationType('Preview'); ?>
        <?php $se = $displays['destaque-papel-de-parede'][0]->Asset->Sections[0]->getTitle(); ?>
        <?php $se_link = $displays['destaque-papel-de-parede'][0]->Asset->Sections[0]->getSlug(); ?>
      <div class="span4 box-destaque">
        <h3><a href="<?php echo $site->retriveUrl() ?>/<?php echo $se_link ?>"><?php echo $se ?></a></h3>
        <a href="<?php echo $displays['destaque-papel-de-parede'][0]->retriveUrl() ?>"><img src="<?php echo $related[0]->retriveImageUrlByImageUsage('image-5-b') ?>" alt="<?php echo $displays['destaque-papel-de-parede'][0]->getTitle() ?>"></a>
          <a href="<?php echo $displays['destaque-papel-de-parede'][0]->retriveUrl() ?>"> 
            <?php //echo $displays['destaque-imprima'][0]->getDescription() ?>
            <?php $tam=28; $str=$displays['destaque-papel-de-parede'][0]->getDescription(); mb_internal_encoding("UTF-8"); if(strlen($str) <= $tam) echo $str; else echo mb_substr($str, 0, $tam-1)."&hellip;" ?> 
          </a>
        <a href="<?php echo $site->retriveUrl() ?>/<?php echo $se_link ?>" class="ico-mais"></a>
      </div>
    <!-- /Papel de parede-->
     <?php endif; ?>
    <?php endif; ?>
    
    <div class="span4 destaque2 box-radio">
      <!-- radio -->
      <div class="radio">
        <i class="icon-music"></i>
        <a href="<?php echo $site->retriveUrl() ?>/radio" title="Está no ar: rádio cocoricó!">Está no ar:<span>rádio cocoricó!</span></a>
        <span class="borda"></span>
      </div>
      <!-- /radio -->
      
    </div>
    <!-- para colorir --> 
     <?php if(isset($displays['destaque-para-colorir'])): ?>
      <?php if(count($displays['destaque-para-colorir']) > 0): ?>
        <?php $related = $displays['destaque-para-colorir'][0]->Asset->retriveRelatedAssetsByRelationType('Preview'); ?>
        <?php $related1 = $displays['destaque-para-colorir'][1]->Asset->retriveRelatedAssetsByRelationType('Preview'); ?>
      <div class="bastidores span4">
        <div class="topo">
          <div class="bac-yellow">
            <h3><a href= "<?php echo $site->retriveUrl() ?>/para-colorir"><i class="ico-colorir"></i> Para colorir <i class="ico-seta-titulo"></i></a></h3>
          </div>
          <a  href="<?php echo $displays['destaque-para-colorir'][0]->retriveUrl() ?>" title="" class="span6">
            <img src="<?php echo $related[0]->retriveImageUrlByImageUsage('image-2-b') ?>" />
            <?php //echo $displays['destaque-para-colorir'][0]->getTitle() ?>
            <?php $tam=18; $str=$displays['destaque-para-colorir'][0]->getTitle(); mb_internal_encoding("UTF-8"); if(strlen($str) <= $tam) echo $str; else echo mb_substr($str, 0, $tam-1)."&hellip;" ?>
          </a>
          <a href="<?php echo $displays['destaque-para-colorir'][1]->retriveUrl() ?>" title="" class="span6 last">
            <img src="<?php echo $related1[0]->retriveImageUrlByImageUsage('image-2-b') ?>" />
            <?php //echo $displays['destaque-para-colorir'][1]->getTitle() ?> 
            <?php $tam=18; $str=$displays['destaque-para-colorir'][1]->getTitle(); mb_internal_encoding("UTF-8"); if(strlen($str) <= $tam) echo $str; else echo mb_substr($str, 0, $tam-1)."&hellip;" ?>
          </a>
        </div>        
      </div> 
      <?php endif; ?>
    <?php endif; ?>
      <!-- /para colorir -->
    
    
  </div>
  <!--row conteudo -->
  
  <!-- rodape-->
  <div class="row-fluid  border-top"></div>
  <?php include_partial_from_folder('sites/cocorico', 'global/rodape', array('siteSections' => $siteSections, 'displays' => $displays, 'section'=>$section, 'uri'=>$uri)) ?>
  <!-- /rodape-->
</div>
<!-- /container-->