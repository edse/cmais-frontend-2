<link href="/portal/css/tvcultura/sites/cocorico/brincadeiras.css" rel="stylesheet">
<link href="/portal/css/tvcultura/sites/cocorico/tvcocorico.css" rel="stylesheet">
<!-- container-->
<div class="container tudo">
  <!-- row-->
  <div class="row-fluid menu">
    <div class="navbar">
      <div class="navbar-inner">
        <ul class="nav">
          <li class="personagens"><a href="#"></a></li>
          <li class="joguinhos"><a class="icon" href="/cocorico/joguinhos" title="Joguinhos"></a><a href="/cocorico/joguinhos" title="Joguinhos">Joguinhos</a><span></span></li>
          <li class="brincadeiras"><a class="icon"  href="/cocorico/brincadeiras" title="Brincadeiras"></a><a href="/cocorico/brincadeiras" title="Brincadeiras">Brincadeiras</a><span></span></li>
          <li class="tvcoco"><a class="icon"  href="/cocorico/tvcocorico" title="TV Cocoricó"></a><a href="/cocorico/tvcocorico" title="TV Cocoricó">TV Cocoricó</a><span></span></li>
          <li class="familia"><a  href="/cocorico/em-familia" title="Em família">Em família</a></li>
        </ul>
      </div>
      <div class="lista-personagens">
        <h3>turma</h3>
        <ul>
          <li><a href="#" title="Astolfo"><img src="/portal/images/capaPrograma/cocorico/menu-astolfo.png" alt="Astolfo" /></a></li>
          <li><a href="#" title="Astolfo"><img src="/portal/images/capaPrograma/cocorico/menu-astolfo.png" alt="Astolfo" /></a></li>
          <li><a href="#" title="Astolfo"><img src="/portal/images/capaPrograma/cocorico/menu-astolfo.png" alt="Astolfo" /></a></li>
          <li><a href="#" title="Astolfo"><img src="/portal/images/capaPrograma/cocorico/menu-astolfo.png" alt="Astolfo" /></a></li>
          <li><a href="#" title="Astolfo"><img src="/portal/images/capaPrograma/cocorico/menu-astolfo.png" alt="Astolfo" /></a></li>
          <li><a href="#" title="Astolfo"><img src="/portal/images/capaPrograma/cocorico/menu-astolfo.png" alt="Astolfo" /></a></li>
          <li><a href="#" title="Astolfo"><img src="/portal/images/capaPrograma/cocorico/menu-astolfo.png" alt="Astolfo" /></a></li>
          <li><a href="#" title="Astolfo"><img src="/portal/images/capaPrograma/cocorico/menu-astolfo.png" alt="Astolfo" /></a></li>
        </ul>
      </div>
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
  <p><?php echo $displays['tour-virtual'][0]->getDescription() ?></p>
  
 
  <?php $related_videos = $displays['tour-virtual']->retriveRelatedAssetsByAssetTypeId(6); ?>
      
    <iframe width="940" height="529" src="http://www.youtube.com/embed/<?php echo $related_videos[0]->AssetVideo->getYoutubeId() ?>" frameborder="0" allowfullscreen></iframe>

   
  </div>
  <?php endif; ?>
   <?php endif; ?>
  <!-- /row-->
  <!--row-->
  <div class="row-fluid conteudo erros">
    <p class="tit">“Ops! Errei!” - Diversão garantida com os erros de gravação dessa turminha:</p>
    <a class="span4 destaque1" title="titulo" href="#">
      <div class="destaque-1 conteudo-tv">
        <h3>Erros de gravação</h3>
        <img alt="Convidado" src="http://midia.cmais.com.br/assets/image/image-6-b/6e0eb40f1da6a84a757b5545ac86e871d0da9ff5.jpg">
        <p> texto corrido <i class="ico-mais"></i></p>
      </div>
    </a>
    <a class="span4 destaque1" title="titulo" href="#">
      <div class="destaque-1 conteudo-tv">
        <h3>Erros de gravação</h3>
        <img alt="Convidado" src="http://midia.cmais.com.br/assets/image/image-6-b/6e0eb40f1da6a84a757b5545ac86e871d0da9ff5.jpg">
        <p> texto corrido <i class="ico-mais"></i></p>
      </div>
    </a>
    <a class="span4 destaque1 last" title="titulo" href="#">
      <div class="destaque-1 conteudo-tv">
        <h3>Erros de gravação</h3>
        <img alt="Convidado" src="http://midia.cmais.com.br/assets/image/image-6-b/6e0eb40f1da6a84a757b5545ac86e871d0da9ff5.jpg">
        <p> texto corrido <i class="ico-mais"></i></p>
      </div>
    </a>
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