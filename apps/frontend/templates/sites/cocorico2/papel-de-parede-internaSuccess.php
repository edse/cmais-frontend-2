<link href="/portal/css/tvcultura/sites/cocorico/brincadeiras.css" rel="stylesheet">


<script type="text/javascript">
  $(document).ready(function() {
    $('.destaques-small li:nth-child(6)').css('margin-right', '0');
    $('.destaques-small li:nth-child(12)').css('margin-right', '0');
  });
</script>


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
     <li><a href="<?php echo $site->retriveUrl() ?>">Cocoricó</a> <span class="divider">&rsaquo;</span></li>
     <li><a href="<?php echo $site->retriveUrl() ?>/papel-de-parede">papel de parede</a> <span class="divider">&rsaquo;</span></li>
     <li class="active"><?php echo $asset->getTitle()?></li>
  </ul>
  <!-- /breadcrumb-->
  
  <!--btn voltar-->
  <a href="javascript:window.history.go(-1)" class="voltar">voltar<span class="divisao"></span></a>
  <!-- /btn voltar-->
  
  <!-- titulo da pagina -->
  <div class="tit-pagina span7">
    <h2><?php echo $asset->getTitle() ?></h2>
    <span></span>
    <ul class="likes">
      <li class="ativo"></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
    </ul>
  </div>
  <a href="#" class="curtir" title="Curtir">curtir</a>
  <a href="#" class="curtir disabled" title="Curtir">curtir</a>
  <!-- titulo da pagina -->
  
  <!--row-->
  <div class="row-fluid conteudo box-papel-parede" id="videos">
    <p class="span12">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras facilisis dolor eget orci laoreet porta. In et gravida purus. Aliquam erat volutpat. Vivamus quis elit odio, in luctus diam. Donec eu purus vitae dolor egestas rhoncus sed id lorem. Vivamus id quam arcu. Phasellus ac dolor non odio metus.</p>
    <a href="/portal/images/capaPrograma/cocorico/papel-de-parede.jpg" target="_blank" title="papel de parede">
      <img class="border-radius10" src="/portal/images/capaPrograma/cocorico/papel-de-parede.jpg" alt="papel de parede"/>
    </a>
    <ul>
      <li><a href="#" title=""><i class="icon-monitor"></i>800 x 600</a></li>
      <li><a href="#" title=""><i class="icon-monitor"></i>1024 x 768</a></li>
      <li><a href="#" title=""><i class="icon-monitor"></i>1280 x 768</a></li>
      <li><a href="#" title=""><i class="icon-monitor"></i>1280 x 1024</a></li>
      <li class="celular"><a href="#" title=""><i class="icon-celular"></i>320 x 480</a></li>
    </ul>
    
    
    
    
  </div>
  <!--/row-->
  
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