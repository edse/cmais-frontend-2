<link href="/portal/css/tvcultura/sites/cocorico2/home.css" rel="stylesheet">

<style type="text/css">
/* tooltip*/
.tooltip-inner { background:#747a3a; padding:3px 10px; font-size: 13px; line-height:15px; }
.tooltip.in,
.tooltip { opacity: 1; filter: alpha(opacity=100);}
.tooltip.bottom .tooltip-arrow {  border-bottom-color: #747a3a;}
/* tooltip*/
</style>

<!-- container-->
<div class="container tudo">
  <!-- row-->
  <div class="row-fluid">
  	 <?php if(isset($displays['destaque-topo'])): ?>
      <?php if(count($displays['destaque-topo']) > 0): ?>
    <div class="span12">
      <div id="myCarousel" class="carousel slide span12">
        <!-- Carousel items -->
        <div class="carousel-inner"> 
        	<?php foreach($displays['destaque-topo'] as $k=>$d): ?>  
          <div class="<?php if($k==0): ?>active <?php endif; ?>item ">
            <a href="<?php echo $d->getHeadline() ?>" title="<?php echo $d->getTitle() ?>"><img src="<?php echo $d->Asset->retriveImageUrlByImageUsage('original') ?>" class="span12"/></a>
          </div>
           <?php endforeach; ?>       
        </div>
        <!-- Carousel nav -->
        <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
        <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
      </div>
    </div>
    <?php endif; ?>
    <?php endif; ?>
    <div class="divisoria span12"></div>
  </div>
  <!-- /row-->
  
  <!-- row-->
  <div class="row-fluid menu">
    <div class="navbar">
      <div class="navbar-inner">
        <?php include_partial_from_folder('sites/cocorico2', 'global/menu') ?>
      </div>
      <div class="lista-personagens">
        <h3>turma</h3>
       	 <?php include_partial_from_folder('sites/cocorico2', 'global/personagens', array('siteSections' => $siteSections, 'displays' => $displays, 'section'=>$section, 'uri'=>$uri, 'site'=>$site)) ?>
        </div>
    </div>
  </div>
  <!-- /row-->
  
  <!--row-->
  <div class="row-fluid conteudo">
    <div class="span8 col-esq">
    	<?php /*
    	<!--joguinhos e receitinhas-->
    	<?php if(isset($displays['destaque-principal'])):?>
        <?php if(count($displays['destaque-principal']) > 0): ?> 	
          
          <?php 
          $secao = $displays['destaque-principal'][0]->Asset-> getSections();
          $secao_destaque = $secao[0]; 
          ?>
          
         	 <?php $related = $d->Asset->retriveRelatedAssetsByRelationType('Preview'); ?>
          	<?php if(count($related) > 0): ?>
          			
      		<div class="destaque-home <?php if($secao_destaque=='joguinhos'): ?>joguinhos<?php endif; ?><?php if($secao_destaque=='receitinhas'): ?>receitinhas<?php endif; ?>">
              <a href="/cocorico2/<?php if($secao_destaque=='joguinhos'): ?>joguinhos<?php endif; ?><?php if($secao_destaque=='receitinhas'): ?>receitinhas<?php endif; ?>" class="span9"><img class="span12" src="<?php echo $related[0]->retriveImageUrlByImageUsage('original') ?>" alt="<?php echo $displays['destaque-principal'][0]->getTitle() ?>" /></a>
              <div class="box span3 <?php if($secao_destaque=='joguinhos'): ?>joguinhos<?php endif; ?><?php if($secao_destaque=='receitinhas'): ?>receitinhas<?php endif; ?>">
                <span class="mais"></span>
                <div class="tit"><a href="/cocorico2/<?php if($secao_destaque=='joguinhos'): ?>joguinhos<?php endif; ?><?php if($secao_destaque=='receitinhas'): ?>receitinhas<?php endif; ?>"><?php if($secao_destaque=='joguinhos'): ?>Joguinhos<?php endif; ?><?php if($secao_destaque=='receitinhas'): ?>Receitinhas<?php endif; ?></a><span></span></div>
                <ul>
                  <li><a href="/cocorico2/<?php if($secao_destaque=='joguinhos'): ?>joguinhos<?php endif; ?><?php if($secao_destaque=='receitinhas'): ?>receitinhas<?php endif; ?>" title="<?php echo $displays['destaque-principal'][1]->getTitle() ?>"><img class="span12" src="<?php echo $related[1]->retriveImageUrlByImageUsage('original') ?>" alt="<?php echo $displays['destaque-principal'][1]->getTitle() ?>" /><?php echo $displays['destaque-principal'][1]->getTitle() ?></a></li>
                  <li><a href="/cocorico2/<?php if($secao_destaque=='joguinhos'): ?>joguinhos<?php endif; ?><?php if($secao_destaque=='receitinhas'): ?>receitinhas<?php endif; ?>" title="<?php echo $displays['destaque-principal'][2]->getTitle() ?>"><img class="span12" src="<?php echo $related[2]->retriveImageUrlByImageUsage('original') ?>" alt="<?php echo $displays['destaque-principal'][2]->getTitle() ?>" /><?php echo $displays['destaque-principal'][2]->getTitle() ?></a></li>
                </ul>
              </div>
            </div>
            <?php endif;?>
         
        <?php endif; ?>
      <?php endif; ?>
      <!--/joguinhos e receitinhas-->
       * 
       */ ?>
      <?php if(isset($displays['destaque-principal-joguinhos'])):?>
        <?php if(count($displays['destaque-principal-joguinhos']) > 0): ?>
          <?php $related = $displays['destaque-principal-joguinhos'][0]->Asset->retriveRelatedAssetsByRelationType('Preview'); ?>
          
      <div class="destaque-home joguinhos">
        <?php if(count($related) > 0): ?>
        <a href="<?php echo $displays['destaque-principal-joguinhos'][0]->retriveUrl() ?>" class="span9" title="<?php echo $displays['destaque-principal-joguinhos'][0]->getTitle() ?>"><img class="span12" src="<?php echo $related[0]->retriveImageUrlByImageUsage('original') ?>" alt="<?php echo $displays['destaque-principal-joguinhos'][0]->getTitle() ?>" /></a>
        <?php endif; ?>
        <div class="box span3">
          <span class="mais"></span>
          <div class="tit"><a href="/cocorico/joguinhos">Joguinhos</a><span></span></div>
          <ul>
            <?php $related = $displays['destaque-principal-joguinhos'][1]->Asset->retriveRelatedAssetsByRelationType('Preview'); ?>
            <?php if(count($related) > 0): ?>
            <li><a href="<?php echo $displays['destaque-principal-joguinhos'][1]->retriveUrl() ?>" title="<?php echo $displays['destaque-principal-joguinhos'][1]->getTitle() ?>"><img class="span12" src="<?php echo $related[0]->retriveImageUrlByImageUsage('original') ?>" alt="<?php echo $displays['destaque-principal-joguinhos'][1]->getTitle() ?>" /><?php echo $displays['destaque-principal-joguinhos'][1]->getTitle() ?></a></li>
            <?php endif; ?>
            <?php $related = $displays['destaque-principal-joguinhos'][2]->Asset->retriveRelatedAssetsByRelationType('Preview'); ?>
            <?php if(count($related) > 0): ?>
            <li><a href="<?php echo $displays['destaque-principal-joguinhos'][2]->retriveUrl() ?>" title="<?php echo $displays['destaque-principal-joguinhos'][2]->getTitle() ?>"><img class="span12" src="<?php echo $related[0]->retriveImageUrlByImageUsage('original') ?>" alt="<?php echo $displays['destaque-principal-joguinhos'][2]->getTitle() ?>" /><?php echo $displays['destaque-principal-joguinhos'][2]->getTitle() ?></a></li>
            <?php endif; ?>
          </ul>
        </div>
      </div>
      
        <?php endif; ?>
      <?php endif; ?>

      <?php if(isset($displays['destaque-principal-receitinhas'])):?>
        <?php if(count($displays['destaque-principal-receitinhas']) > 0): ?>
          <?php $related = $displays['destaque-principal-receitinhas'][0]->Asset->retriveRelatedAssetsByRelationType('Preview'); ?>
          
      <div class="destaque-home receitinhas">
        <a href="<?php echo $displays['destaque-principal-receitinhas'][0]->retriveUrl() ?>" class="span9" title="<?php echo $displays['destaque-principal-receitinhas'][0]->getTitle() ?>"><img class="span12" src="<?php echo $related[0]->retriveImageUrlByImageUsage('original') ?>" alt="<?php echo $displays['destaque-principal-receitinhas'][0]->getTitle() ?>" /></a>
        <div class="box span3">
          <span class="mais"></span>
          <div class="tit"><a href="/cocorico/receitinhas">Receitinhas</a><span></span></div>
          <ul>
            <?php $related = $displays['destaque-principal-receitinhas'][1]->Asset->retriveRelatedAssetsByRelationType('Preview'); ?>
            <li><a href="<?php echo $displays['destaque-principal-receitinhas'][1]->retriveUrl() ?>" title="<?php echo $displays['destaque-principal-receitinhas'][1]->getTitle() ?>"><img class="span12" src="<?php echo $related[0]->retriveImageUrlByImageUsage('original') ?>" alt="<?php echo $displays['destaque-principal-receitinhas'][1]->getTitle() ?>" /><?php echo $displays['destaque-principal-receitinhas'][1]->getTitle() ?></a></li>
            <?php $related = $displays['destaque-principal-receitinhas'][2]->Asset->retriveRelatedAssetsByRelationType('Preview'); ?>
            <li><a href="<?php echo $displays['destaque-principal-receitinhas'][2]->retriveUrl() ?>" title="<?php echo $displays['destaque-principal-receitinhas'][2]->getTitle() ?>"><img class="span12" src="<?php echo $related[0]->retriveImageUrlByImageUsage('original') ?>" alt="<?php echo $displays['destaque-principal-receitinhas'][2]->getTitle() ?>" /><?php echo $displays['destaque-principal-receitinhas'][2]->getTitle() ?></a></li>
          </ul>
        </div>
      </div>
      
        <?php endif; ?>
      <?php endif; ?>

       
       
      <div class="span12">
        <a class="box destaques span6" href="/cocorico2/receitinhas" title="jogo">
        <bold>
          Receitinhas
        </bold><img class="span12" src="/portal/images/capaPrograma/cocorico2/jogo-home.jpg" alt="nome jogo" />Nome do joguinho<span></span></a>
        <a class="box destaques span6" href="/cocorico2/receitinhas" title="jogo">
        <bold>
          papel de parede
        </bold><img class="span12" src="/portal/images/capaPrograma/cocorico2/jogo-home.jpg" alt="nome jogo" />Nome do joguinho<span></span></a>
      </div>
    </div>
    <div class="span4 col-dir">
      <a class="logo" href="/cocorico2/tvcocorico2"><img class="span12" src="/portal/images/capaPrograma/cocorico2/tvcoco.png" /></a>
      <div class="tvcoco span12">
        <h2><i class="icon-star-empty"></i>Próximo Convidado<i class="icon-star-empty"></i></h2>
        <a class="convidado span12" href="/cocorico2/tvcocorico2/convidado" title=""><img src="/portal/images/capaPrograma/cocorico2/jogo-home.jpg" alt="proximo convidade" /> Nome convidado<span class="mais"></span></a>
        
        <div class="enquete span12">
          <h3>enquete do dia</h3>
          <p>Como você brinca quando esta chovendo?</p>
          <form class="navbar-form pull-left">
            <div class="versus"></div>
            <div class="span6">
              <label class="radio">
                <input type="radio" class="regular-radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                no videogame
              </label>
              <img class="span12" src="/portal/images/capaPrograma/cocorico2/jogo-home.jpg" alt="" />
            </div>
            <!-- versus -->
            <div class="span6 last">
              <label class="radio">
                <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2" checked>
              no computador </label>
              <img class="span12" src="/portal/images/capaPrograma/cocorico2/jogo-home.jpg" alt="" />
            </div>
            <div class="votar span12"><span></span><a href="#" class="span11">votar</a><span class="last"></span></div>
          </form>
          <form class="navbar-form pull-left inativo" >
            <div class="versus"></div>
            <div class="span6">
              <label class="radio">no videogame</label>
              <img class="span12" src="/portal/images/capaPrograma/cocorico2/jogo-home.jpg" alt="" />
              <p>50%</p>
            </div>
            <!-- versus -->
            <div class="span6 last">
              <label class="radio">no computador </label>
              <img class="span12" src="/portal/images/capaPrograma/cocorico2/jogo-home.jpg" alt="" />
              <p>50%</p>
            </div>
            <a href="#" title="Ver enquetes anteriores">Ver enquetes anteriores</a>
          </form>
        </div>
      </div>
    </div>
  </div>
  
  <!-- /row-->
  <div class="row-fluid  border-top"></div>
  <div class="row-fluid rodape" >
   <?php include_partial_from_folder('sites/cocorico2', 'global/rodape', array('siteSections' => $siteSections, 'displays' => $displays, 'section'=>$section, 'uri'=>$uri)) ?>
  </div>
  <!--row-->
</div>
<!-- /container-->