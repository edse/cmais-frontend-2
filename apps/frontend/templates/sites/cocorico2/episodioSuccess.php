<link href="/portal/css/tvcultura/sites/cocorico/brincadeiras.css" rel="stylesheet">
<link href="/portal/css/tvcultura/sites/cocorico/tvcocorico.css" rel="stylesheet">
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
    <li><a href="/cocorico">TV Cocoricó</a><span class="divider">&rsaquo;</span></li>
    <li><a href="/cocorico">Episódios</a><span class="divider">&rsaquo;</span></li>
    <li class="active">Nome do episódio</li>
  </ul>
  <!-- /breadcrumb-->
  <a class="voltar" href="#">voltar<span class="divisao"></span></a>
  <h2 class="tit-pagina episodio">Convidado do Dia</h2>
  
  <!--row-->
  <div class="row-fluid conteudo">
   <span class="data">00/00/0000</span>
   <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam pharetra,  sapien at interdum porta, leo purus varius massa, in imperdiet sed. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam pharetra,  sapien at interdum porta, leo purus varius massa, in imperdiet sed. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam pharetra,  sapien at interdum porta, leo purus varius massa, in imperdiet sed.</p>
   <iframe width="940" height="529" src="http://www.youtube.com/embed/PZENwhml0Xc" frameborder="0" allowfullscreen></iframe>
   
  </div>
  <!-- /row-->
  <!--row-->
  <div class="row-fluid relacionados">
    <div class="tit imprima"><span class="mais"></span><a href="/cocorico/joguinhos">papel de parede</a><span></span></div>
    <ul class="destaques-small">
      <li class="span2"><a href="#" title=""><img class="span12" src="/portal/images/capaPrograma/cocorico/jogo-home.jpg" alt="jogo" />Nome do Joguinho</a></li>
      <li class="span2"><a href="#" title=""><img class="span12" src="/portal/images/capaPrograma/cocorico/jogo-home.jpg" alt="jogo" />Nome do Joguinho</a></li>
      <li class="span2"><a href="#" title=""><img class="span12" src="/portal/images/capaPrograma/cocorico/jogo-home.jpg" alt="jogo" />Nome do Joguinho</a></li>
      <li class="span2"><a href="#" title=""><img class="span12" src="/portal/images/capaPrograma/cocorico/jogo-home.jpg" alt="jogo" />Nome do Joguinho</a></li>
      <li class="span2"><a href="#" title=""><img class="span12" src="/portal/images/capaPrograma/cocorico/jogo-home.jpg" alt="jogo" />Nome do Joguinho</a></li>
      <li class="span2"><a href="#" title=""><img class="span12" src="/portal/images/capaPrograma/cocorico/jogo-home.jpg" alt="jogo" />Nome do Joguinho</a></li>
      
    </ul>
  </div>
  <!-- /row-->
  
  <!-- rodapé-->
  <div class="row-fluid  border-top"></div>
  <?php include_partial_from_folder('sites/cocorico', 'global/rodape', array('siteSections' => $siteSections, 'displays' => $displays, 'section'=>$section, 'uri'=>$uri)) ?>
  <!--/rodapé-->
</div>
<!-- /container-->