<script type="text/javascript" src="/portal/js/bootstrap/bootstrap.js"></script>
<script type="text/javascript" src="/portal/js/bootstrap/tab.js"></script>
<link href="/portal/css/tvcultura/sites/cocorico/geral.css" rel="stylesheet">
<link href="/portal/css/tvcultura/sites/cocorico/media.css" rel="stylesheet">
<link href="/portal/css/tvcultura/sites/cocorico/home.css" rel="stylesheet">

<?php use_helper('I18N', 'Date') ?>
<?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'section' => $section)) ?>

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
          <div class=<?php if($k==1): ?>active<?php endif; ?> item>
            <a href="<?php echo $d->retriveUrl() ?>" title="<?php echo $d->getTitle() ?>"><img src="<?php echo $d->retriveImageUrlByImageUsage('original') ?>" class="<?php echo $d->getTitle() ?>"/></a>
          </div>
        </div>
        	<?php endforeach; ?>
        <!-- Carousel nav -->
        <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
        <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
      </div>
      <?php endif; ?>
     <?php endif; ?>
    </div>
    <div class="divisoria span12"></div>
  </div>
  <!-- /row-->
  <!-- row-->
  
  <div class="row-fluid menu">
    <div class="navbar">
      <div class="navbar-inner">
        <ul class="nav">
          <li class="personagens"><a href="#">Personagens</a></li>
          <li class="joguinhos"><a class="icon" href="/cocorico/joguinhos" title="Joguinhos"></a><a href="/cocorico/joguinhos" title="Joguinhos">Joguinhos</a><span></span></li>
          <li class="brincadeiras"><a class="icon"  href="/cocorico/brincadeiras" title="Brincadeiras"></a><a href="/cocorico/brincadeiras" title="Brincadeiras">Brincadeiras</a><span></span></li>
          <li class="tvcoco"><a class="icon"  href="/cocorico/tvcocorico" title="TV Cocoricó"></a><a href="/cocorico/tvcocorico" title="TV Cocoricó">TV Cocoricó</a><span></span></li>
          <li class="diario"><a class="icon"  href="/cocorico/diario-do-julio" title="Diário do Júlio"></a><a href="/cocorico/diario-do-julio" title="Diário do Júlio">Diário do Júlio</a><span></span></li>
          <li class="familia"><a  href="/cocorico/em-familia" title="Em família">Em família</a></li>
        </ul>
      </div>
      
      <?php if(isset($displays['personagens'])):?>
       <?php if(count($displays['personagens']) > 0): ?>
      <div class="lista-personagens">
        <h3>turma</h3>
         <?php foreach($displays['personagens'] as $k=>$d): ?>
        <ul>
          <li>
          	<a href="<?php echo $d->retriveUrl() ?>" title="<?php echo $d->getTitle() ?>">
          		<img src="<?php echo $d->retriveRelatedAssetByAssetTypeId(2) ?>" alt="<?php echo $d->getTitle() ?>" />
          	</a>
          </li>
        </ul>
        <?php endforeach; ?>
      </div>
      <?php endif;?>
      <?php endif; ?>
    </div>
  </div>
  <!-- /row-->
  
  <!--row-->
  <?php if(isset($displays['destaque-principal'])):?>
  <?php if(count($displays['destaque-principal']) > 0): ?> 	
  
  	  <?php $secao= 0; ?>
      <?php $secao= $displays[0]-> Asset-> getSection(); ?>
      <?php $secao_destaque-> $secao ->getSlug(); ?>
      
    <div class="row-fluid conteudo">    
    <div class="span8 col-esq">
    	
     <?php foreach($displays['destaque-principal'] as $k=>$d): ?>
      <div class="destaque-home <?php if($secao_destaque=='joguinhos'): ?>joguinhos<?php endif; ?><?php if($secao_destaque=='receitinhas'): ?>receitinhas<?php endif; ?>">
        <a href="/cocorico/<?php if($secao_destaque=='joguinhos'): ?>joguinhos<?php endif; ?><?php if($secao_destaque=='receitinhas'): ?>receitinhas<?php endif; ?>" class="span9"><img class="span12" src="/portal/images/capaPrograma/cocorico/jogo-home.jpg" alt="<?php echo $displays['destaque-principal'][0]->getTitle() ?>" /></a>
        <div class="box span3 <?php if($secao_destaque=='joguinhos'): ?>joguinhos<?php endif; ?><?php if($secao_destaque=='receitinhas'): ?>receitinhas<?php endif; ?>">
          <span class="mais"></span>
          <div class="tit"><a href="/cocorico/<?php if($secao_destaque=='joguinhos'): ?>joguinhos<?php endif; ?><?php if($secao_destaque=='receitinhas'): ?>receitinhas<?php endif; ?>"><?php if($secao_destaque=='joguinhos'): ?>Joguinhos<?php endif; ?><?php if($secao_destaque=='receitinhas'): ?>Receitinhas<?php endif; ?></a><span></span></div>
          <ul>
            <li><a href="/cocorico/<?php if($secao_destaque=='joguinhos'): ?>joguinhos<?php endif; ?><?php if($secao_destaque=='receitinhas'): ?>receitinhas<?php endif; ?>" title="<?php echo $displays['destaque-principal'][1]->getTitle() ?>"><img class="span12" src="<?php echo $displays['destaque-principal'][1]->$d->retriveImageUrlByImageUsage ?>" alt="<?php echo $displays['destaque-principal'][1]->getTitle() ?>" /><?php echo $displays['destaque-principal'][1]->getTitle() ?></a></li>
            <li><a href="/cocorico/<?php if($secao_destaque=='joguinhos'): ?>joguinhos<?php endif; ?><?php if($secao_destaque=='receitinhas'): ?>receitinhas<?php endif; ?>" title="<?php echo $displays['destaque-principal'][2]->getTitle() ?>"><img class="span12" src="<?php echo $displays['destaque-principal'][2]->$d->retriveImageUrlByImageUsage ?>" alt="<?php echo $displays['destaque-principal'][2]->getTitle() ?>" /><?php echo $displays['destaque-principal'][2]->getTitle() ?></a></li>
          </ul>
        </div>
      </div>
      <?php endforeach; ?>
      <?php endif; ?>
      <?php endif; ?>    
      
      <?php if(isset($displays['receitinhas'])):?>
  	  <?php if(count($displays['receitinhas']) > 0): ?>
      
      <?php $secao= 0; ?>     
      <?php $secao= $displays[0]-> Asset-> getSection(); ?>
      <?php $secao_receitinhas-> $secao ->getSlug(); ?>
                    
      <div class="span12">
      	<?php foreach($displays['receitinhas'] as $k=>$d): ?>
        <a class="box destaques span6" href="/cocorico/<?php if($secao_destaque=='joguinhos'): ?>receitinhas<?php endif; ?>" title="<?php echo $d->getTitle() ?>">
        <bold>
          <?php echo $d->Section->getTitle() ?>
        </bold><img class="span12" src="<?php echo $d->retriveImageUrlByImageUsage('original') ?>" alt="<?php echo $d->getTitle() ?>" /><?php echo $d->getTitle() ?><span></span></a>
        <a class="box destaques span6" href="<?php echo $d->retrieveUrl() ?>" title="<?php echo $d->getTitle() ?>">
      <?php endforeach; ?>
      <?php endif; ?>
      <?php endif; ?> 
      
        <bold>
          papel de parede
        </bold><img class="span12" src="/portal/images/capaPrograma/cocorico/jogo-home.jpg" alt="nome jogo" />Nome do joguinho<span></span></a>
      </div>
    </div>
    <div class="span4 col-dir">
      <a class="logo" href="/cocorico/tvcocorico"><img class="span12" src="/portal/images/capaPrograma/cocorico/tvcoco.png" /></a>
      <div class="tvcoco span12">
        <h2><i class="icon-star-empty"></i>Próximo Convidado<i class="icon-star-empty"></i></h2>
        <a class="convidado span12" href="/cocorico/tvcocorico/convidado" title=""><img src="/portal/images/capaPrograma/cocorico/jogo-home.jpg" alt="proximo convidade" /> Nome convidado<span class="mais"></span></a>
        
        <div class="enquete span12">
          <h3>enquete do dia</h3>
          <p>Como você brinca quando esta chovendo?</p>
          <form class="navbar-form pull-left">
          <div class="pergunta">
            <div class="versus"></div>
            <a class="span6" href="#" title=""> <img class="span12" src="/portal/images/capaPrograma/cocorico/jogo-home.jpg" alt="" /> <label class="radio">
              <input type="radio" class="regular-radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
              no videogame </label> </a>
            <!-- versus -->
            <a class="span6 last" href="#" title=""> <img class="span12" src="/portal/images/capaPrograma/cocorico/jogo-home.jpg" alt="" /> <label class="radio">
              <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2" checked>
              no computador </label>
            </a>
            <div class="votar span12"><span></span><a href="#" class="span11">votar</a><span class="last"></span></div>
          </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- /row-->
  <div class="row-fluid  border-top"></div>

  <!--row-->
  <!-- /row-->
</div>
<!-- /container-->