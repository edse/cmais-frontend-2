<link href="/portal/css/tvcultura/sites/cocorico/home.css" rel="stylesheet">
<link href="/portal/css/tvcultura/sites/cocorico/tvcocorico.css" rel="stylesheet">
<link href="/portal/css/tvcultura/sites/cocorico/brincadeiras.css" rel="stylesheet">
<!-- container-->
<div class="container tudo">

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
  <ul class="breadcrumb">
    <li>
      <a href="/cocorico">Cocoricó</a><span class="divider">&rsaquo;</span>
    </li>
    <li>
      <a href="/cocorico/joguinhos">Joguinhos</a><span class="divider">&rsaquo;</span>
    </li>
    <li class="active">
      Nome do Joguinho
    </li>
  </ul>
  <!-- /breadcrumb-->
  <h2 class="tit-pagina">Atividades</h2>
  <!--row conteudo -->
  <div class="row-fluid conteudo">
    <!-- col direita -->
    <div class="span4 col-dir">

      <?php if(isset($displays['destaque-receitinhas'])):?> 
        <?php if(count($displays['destaque-receitinhas']) > 0): ?>
 
  <?php $related0 = $displays['destaque-receitinhas'][0]->Asset->retriveRelatedAssetsByAssetTypeId(6); ?>
   <?php $related1 = $displays['destaque-receitinhas'][1]->Asset->retriveRelatedAssetsByAssetTypeId(6); ?>   
    <?php $related2 = $displays['destaque-receitinhas'][2]->Asset->retriveRelatedAssetsByAssetTypeId(6); ?>
           
      <div class="tvcoco span12">    
        <h2>Cozinha da amiga zazá</h2> 
        <a class="convidado span12" href="<?php echo $displays['destaque-receitinhas'][0]->retriveUrl() ?>" title=""><img src="http://img.youtube.com/vi/<?php echo $related0[0]->AssetVideo->getYoutubeId()?>/0.jpg" alt="<?php echo $displays['destaque-receitinhas'][0]->getTitle() ?>" /> <?php echo $displays['destaque-receitinhas'][0]->getTitle() ?><span class="mais"></span></a>
        <div class="enquete span12">
          <a href="<?php echo $displays['destaque-receitinhas'][1]->retriveUrl() ?>" title="" class="span6"> <img class="span12" src="<?php echo $displays['destaque-receitinhas'][0]->retriveUrl() ?>" title=""><img src="http://img.youtube.com/vi/<?php echo $related1[0]->AssetVideo->getYoutubeId()?>/0.jpg" alt="<?php echo $displays['destaque-receitinhas'][0]->getTitle() ?>" alt="" /> <?php echo $displays['destaque-receitinhas'][1]->getTitle() ?> </a>
          <a href="<?php echo $displays['destaque-receitinhas'][2]->retriveUrl() ?>" title="" class="span6 last"> <img class="span12" src="<?php echo $displays['destaque-receitinhas'][0]->retriveUrl() ?>" title=""><img src="http://img.youtube.com/vi/<?php echo $related2[0]->AssetVideo->getYoutubeId()?>/0.jpg" alt="<?php echo $displays['destaque-receitinhas'][0]->getTitle() ?>" alt="" /> <?php echo $displays['destaque-receitinhas'][2]->getTitle() ?> </a>
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
        <h2>Clipes</h2> <?php echo $related[0]->AssetVideo->getYoutubeId() ?>

        <iframe width="460" height="280" src="http://www.youtube.com/embed/<?php echo $displays['videos'][0]->Asset->AssetVideo->getYoutubeId() ?>" frameborder="0" allowfullscreen></iframe>

        <div class="destaque span12">
          <span></span>
          <a href="/cocorico2/episodios" class="btn-destaque" title="Ver mais episódios completos">Assistir mais clipes</a>
          <span class="last"></span>
        </div>
    <?php endforeach; ?>   
    <?php endif; ?>
    <?php endif; ?> 
      </div>
      <!-- /destaque-home -->

      <?php if(isset($displays['destaque-series'])):?> 
        <?php if(count($displays['destaque-series']) > 0): ?>
                    
       <!-- bastidores -->
      <div class="bastidores fonte span3">
       
        <div class="topo">
          <div class="bac-yellow">
            <h3>
            <i class="ico-camera"></i>
            Séries
            <i class="ico-seta-titulo bastidores"></i>
           </h3>
         </div>
       </div>
        
        <!-- item -->
        <a href="<?php echo $displays['destaque-series'][0]->retriveUrl() ?>" title="<?php echo $displays['destaque-series'][0]->getTitle() ?>">
          <div class="item">
            <div class="img-bast">
                <img src="http://img.youtube.com/vi/<?php echo $displays['destaque-series'][0]->Asset->AssetVideo->getYoutubeId() ?>/1.jpg" alt="<?php echo $displays['destaque-series'][0]->getTitle() ?>"/>
            </div>
            <span><?php echo $displays['destaque-series'][0]->getTitle() ?></span>
          </div>
        </a>
        <hr/>
        <!-- /item -->
         
        <!-- item -->
        <a href="<?php echo $displays['destaque-series'][1]->retriveUrl() ?>" title="<?php echo $displays['destaque-series'][1]->getTitle() ?>">
          <div class="item">
            <div class="img-bast">
                <img src="http://img.youtube.com/vi/<?php echo $displays['destaque-series'][1]->Asset->AssetVideo->getYoutubeId() ?>/1.jpg" alt="<?php echo $displays['destaque-series'][1]->getTitle() ?>"/>
            </div>
            <span><?php echo $displays['destaque-series'][1]->getTitle() ?></span>
          </div>
        </a>
        <hr/>
        <!-- /item -->
        
        <!-- item -->
        <a href="<?php echo $displays['destaque-series'][2]->retriveUrl() ?>" title="<?php echo $displays['destaque-series'][2]->getTitle() ?>">
          <div class="item">
            <div class="img-bast">
                <img src="http://img.youtube.com/vi/<?php echo $displays['destaque-series'][2]->Asset->AssetVideo->getYoutubeId() ?>/1.jpg" alt="<?php echo $displays['destaque-series'][2]->getTitle() ?>"/>
            </div>
            <span><?php echo $displays['destaque-series'][2]->getTitle() ?></span>
          </div>
        </a>
        <hr/>
        <!-- /item -->
      </div>
      <!-- /bastidores -->
       <?php endif; ?>
      <?php endif; ?>
            

    </div>
    <!-- /col esquerda -->
  </div>
  <!-- /row conteudo -->
  <!--row conteudo -->
  <div class="row-fluid conteudo">
    <!-- Imprima e brinque -->
    <?php if(isset($displays['destaque-imprima'])): ?>
      <?php if(count($displays['destaque-imprima']) > 0): ?>
        <?php $related = $displays['destaque-imprima'][0]->Asset->retriveRelatedAssetsByRelationType('Preview'); ?>
    <a href="<?php echo $displays['destaque-imprima'][0]->retriveUrl() ?>" title="<?php echo $displays['destaque-imprima'][0]->getTitle() ?>" class="span4 destaque2">
    <div class="destaque-2 conteudo-diverso">
      <h3>Imprima e brinque</h3>
      <img src="<?php echo $related[0]->retriveImageUrlByImageUsage('original') ?>" alt="<?php echo $displays['destaque-imprima'][0]->getTitle() ?>">
      <p>
        <?php echo $displays['destaque-imprima'][0]->getDescription() ?>
        <i class="ico-mais"></i>
      </p>
    </div> </a>   
   <?php endif; ?>
    <?php endif; ?>  
    <!-- /Imprima e brinque -->
    <!-- Papel de parede -->
    <?php if(isset($displays['destaque-papel-de-parede'])): ?>
      <?php if(count($displays['destaque-papel-de-parede']) > 0): ?>
        <?php $related = $displays['destaque-papel-de-parede'][0]->Asset->retriveRelatedAssetsByRelationType('Preview'); ?>
    <a href="<?php echo $displays['destaque-papel-de-parede'][0]->retriveUrl() ?>" title="   <?php echo $displays['destaque-papel-de-parede'][0]->getTitle() ?>" class="span4 destaque2">
   
    <div class="destaque-2 conteudo-diverso">
      <h3>Papel de parede</h3>
      <img src="<?php echo $related[0]->retriveImageUrlByImageUsage('original') ?>" alt="<?php echo $displays['destaque-papel-de-parede'][0]->getTitle() ?>">
      <p>
        <?php echo $displays['destaque-papel-de-parede'][0]->getDescription() ?>
        <i class="ico-mais"></i>
      </p>
    </div> </a>
    <?php endif; ?>
    <?php endif; ?>
    <!-- /Papel de parede -->
    
    <div class="span4 destaque2 box-radio">
      <!-- radio -->
      <div class="radio">
        <i class="icon-music"></i>
        <a href="http://cmais.com.br/cocorico2/radio" title="Está no ar: rádio cocoricó!">Está no ar:<span>rádio cocoricó!</span></a>
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
            <h3><i class="ico-colorir"></i> Para colorir <i class="ico-seta-titulo"></i></h3>
          </div>
          <a  href="<?php echo $displays['destaque-para-colorir'][0]->retriveUrl() ?>" title="" class="span6">
            <img src="<?php echo $related[0]->retriveImageUrlByImageUsage('original') ?>" />
            <?php echo $displays['destaque-para-colorir'][0]->getTitle() ?>
          </a>
          <a href="<?php echo $displays['destaque-para-colorir'][1]->retriveUrl() ?>" title="" class="span6 last">
            <img src="<?php echo $related1[0]->retriveImageUrlByImageUsage('original') ?>" />
            <?php echo $displays['destaque-para-colorir'][1]->getTitle() ?>
          </a>
        </div>        
      </div>
      <?php endif; ?>
    <?php endif; ?>
      <!-- /para colorir -->
    
    
  </div>
  <!--row conteudo -->
  
<!-- rodape-->
    <?php include_partial_from_folder('sites/cocorico', 'global/rodape', array('siteSections' => $siteSections, 'displays' => $displays, 'section'=>$section, 'uri'=>$uri)) ?>
  <!-- /rodape-->
</div>
<!-- /container-->