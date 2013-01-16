<link href="/portal/css/tvcultura/sites/cocorico/brincadeiras.css" rel="stylesheet">
<link href="/portal/css/tvcultura/sites/cocorico/tvcocorico.css" rel="stylesheet">
<!-- container-->
<div class="container tudo">
  <!-- row-->
  <div class="row-fluid menu">
    <div class="navbar">
      <div class="navbar-inner">
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
    <li><a href="/cocorico">TV Cocoricó</a><span class="divider">&rsaquo;</span></li>
    <li><a href="/cocorico">Bastidores</a><span class="divider">&rsaquo;</span></li>
    <li class="active">Tour virtual</li>
  </ul>
  <!-- /breadcrumb-->
  <h2 class="tit-pagina">Tour virtual</h2>
  
  <!--row-->
  <?php if(isset($displays['tour-virtual'])):?>
  <?php if(count($displays['tour-virtual']) > 0): ?>
  <div class="row-fluid conteudo">  	
  <p><?php echo html_entity_decode($displays['tour-virtual'][0]->Asset->AssetContent->render()) ?></p>
   </div>
  <?php endif; ?>
   <?php endif; ?>
  <!-- /row-->
  <!--row-->
   
  <div class="row-fluid conteudo erros">
    <p class="tit"></p>
    
  <?php if(isset($displays['destaque-1'])):?>
  	<?php if(count($displays['destaque-1']) > 0): ?>
  	 <?php $related = $displays['destaque-1'][0]->Asset->retriveRelatedAssetsByRelationType('Preview'); ?> 
  	  <a class="span4 destaque1" title="<?php echo $displays['destaque-1'][0]->Asset->getTitle() ?>" href="<?php echo $displays['destaque-1'][0]->retriveUrl() ?>">
       <div class="destaque-1 conteudo-tv">
        <h3><?php echo $displays['destaque-1'][0]->Asset->getTitle() ?></h3>
        <img alt="<?php echo $displays['destaque-1'][0]->Asset->getTitle() ?>" src="<?php echo $related[0]->retriveImageUrlByImageUsage('original') ?>">
        <p><?php echo $displays['destaque-1'][0]->Asset->getDescription() ?><i class="ico-mais"></i></p>
      </div>
     </a>
    <?php endif; ?>
   <?php endif; ?>
     
   <?php if(isset($displays['destaque-2'])):?>
  	<?php if(count($displays['destaque-2']) > 0): ?>
  	 <?php $related = $displays['destaque-2'][0]->Asset->retriveRelatedAssetsByRelationType('Preview'); ?> 
      <a class="span4 destaque1" title="titulo" href="<?php echo $displays['destaque-2'][0]->retriveUrl() ?>"> 
      <div class="destaque-1 conteudo-tv">
        <h3><?php echo $displays['destaque-2'][0]->Asset->getTitle() ?></h3>
        <img alt="<?php echo $displays['destaque-2'][0]->Asset->getTitle() ?>" src="<?php echo $related[0]->retriveImageUrlByImageUsage('original') ?>">
        <p><?php echo $displays['destaque-2'][0]->Asset->getDescription() ?><i class="ico-mais"><i class="ico-mais"></i></p>
      </div>
    </a>
    <?php endif; ?>
   <?php endif; ?>
    
   <?php if(isset($displays['destaque-3'])):?>
    <?php if(count($displays['destaque-3']) > 0): ?>
     <?php $related = $displays['destaque-3'][0]->Asset->retriveRelatedAssetsByRelationType('Preview'); ?> 
    <a class="span4 destaque1 last" title="titulo" href="<?php echo $displays['destaque-3'][0]->retriveUrl() ?>">
      <div class="destaque-1 conteudo-tv">
        <h3><?php echo $displays['destaque-3'][0]->Asset->getTitle() ?></h3>
        <img alt="<?php echo $displays['destaque-3'][0]->Asset->getTitle() ?>" src="<?php echo $related[0]->retriveImageUrlByImageUsage('original') ?>">
        <p><?php echo $displays['destaque-3'][0]->Asset->getDescription() ?><i class="ico-mais"></i></p>
      </div>
    </a>
     <?php endif; ?>
   <?php endif; ?>
    
  </div>
  <!-- /row-->
  <!-- rodape-->
  <div class="row-fluid  border-top"></div>
  <div class="row-fluid rodape" >
    <h3>2012 &copy; tv cultura - fpa</h3>
    <div class="span2">
      <a href="#" class="bold" title="Em família">em família</a>
      <ul>
        <li><a href="#" title="Na TV">Na TV</a></li>
        <li><a href="#" title="Nas lojas">Nas lojas</a></li>
        <li><a href="#" title="Nas Redes">Nas Redes</a></li>
        <li><a href="#" title="Nos Teatros">Nos Teatros</a></li>
        <li><a href="#" title="Nos Cinemas">Nos Cinemas</a></li>
        <li><a href="#" title="Na Web">Na Web</a></li>
        <li><a href="#" title="Agenda">Agenda</a></li>
        <li><a href="#" title="Newsletter">Newsletter</a></li>
        <li><a href="#" title="Fale Conosco">Fale Conosco</a></li>
      </ul>
    </div>
    <div class="span2">
      <a href="#" class="bold" title="Em família">tv cocoricó</a>
      <ul>
        <li><a href="#" title="Sobre o programa">Sobre o programa</a></li>
        <li><a href="#" title="Livro de receitas">Livro de receitas</a></li>
        <li><a href="#" title="Bastidores">Bastidores</a></li>
        <li><a href="#" title="Tour Virtual">Tour Virtual</a></li>
        <li><a href="#" title="Receitinhas">Receitinhas</a></li>
        <li><a href="#" title="Envie seu vídeo">Envie seu vídeo</a></li>
        <li><a href="#" title="Enquete">Enquete</a></li>
      </ul>
    </div>
    <div class="span2">
      <a href="#" class="bold" title="Cocoricó">cocoricó</a>
      <ul>
        <li><a href="#" title="Sobre a série">Sobre a série</a></li>
        <li><a href="#" title="Diário do Júlio">Diário do Júlio</a></li>
        <li><a href="#" title="Personagens">Personagens</a></li>
        <li><a href="#" title="Cocoricolândia">Cocoricolândia</a></li>
        <li><a href="#" title="Autógrafos">Autógrafos</a></li>
      </ul>
    </div>
    <div class="span2 joguinhos">
      <a href="#" class="bold" title="Jogos e Brincadeiras">Jogos e Brincadeiras</a>
      <ul>
        <li><a href="#" title="Joguinhos">Joguinhos</a></li>
        <li><a href="#" title="Receitinhas">Receitinhas</a></li>
        <li><a href="#" title="Para colorir">Para colorir</a></li>
        <li><a href="#" title="Rádio">Rádio</a></li>
        <li><a href="#" title="Vídeos">Vídeos</a></li>
        <li><a href="#" title="Clipes musicais">Clipes musicais</a></li>
        <li><a href="#" title="Papel de parede">Papel de parede</a></li>
        <li><a href="#" title="Carinhas animadas">Carinhas animadas</a></li>
        <li><a href="#" title="Cartões Comemorativos">Cartões Comemorativos</a></li>
        <li><a href="#" title="Atividades para imprimir">Atividades para imprimir</a></li>
      </ul>
    </div>
    <div class="span3 sites">
      <a href="#" class="bold" title="Sites Relacionados">Sites Relacionados</a>
      <ul>
        <li><a href="#" class="quintal" title="Quintal da Cultura">Quintal da Cultura</a></li>
        <li><a href="#" class="tvrtb" title="TV Rá Tim Bum!">TV Rá Tim Bum!</a></li>
        <li class="last"><a href="#" class="cultura" title="TV Cultura">TV Cultura</a></li>
        <li><a href="#" class="castelo" title="Castelo Rá Tim Bum">Castelo Rá Tim Bum</a></li>
        <li><a href="#" class="vila" title="Vila Sésamo">Vila Sésamo</a></li>
      </ul>
    </div>
  </div>
  <!-- /rodape-->
</div>
<!-- /container-->