<?php use_helper('I18N', 'Date') ?>

<!-- Le styles--> 
<link href="/portal/css/tvcultura/sites/cocorico2/brincadeiras.css" rel="stylesheet">
<link href="/portal/css/tvcultura/sites/cocorico2/tvcocorico.css" rel="stylesheet">

<!-- container-->
<div class="container tudo receitinhas">
  <!-- row-->
  <div class="row-fluid menu">
    <div class="navbar">
      <div class="navbar-inner">
        <?php include_partial_from_folder('sites/cocorico2', 'global/menu', array('site'=>$site)) ?>
       </div>
      <div class="lista-personagens">
        <h3>turma</h3>
        <?php include_partial_from_folder('sites/cocorico2', 'global/personagens', array('site'=>$site)) ?>
      </div>
    </div>
  </div>
  <!-- /row-->
  <!-- breadcrumb-->
  <ul class="breadcrumb">
    <li><a href="/cocorico2">Home</a><span class="divider">&rsaquo;</span></li>
    <li class="active">Joguinhos</li>
  </ul> 
  <!-- /breadcrumb-->
  <h2 class="tit-pagina">Convidado do Dia</h2>
  <div class="convidados">
    <a href="/cocorico2/convidados" title="Quem já passou por aqui?">Quem já passou por aqui?</a>
  </div>
  <!--row-->
  <div class="row-fluid">
    <div class="paginacao">
      <a href="#" class="anterior" title="Convidado anterior"><span></span>Convidado Anterior</a>
      <a href="#" class="proximo" title="Próximo Convidado">Próximo Convidado<span></span></a>
    </div>
  </div>
  <!-- /row-->
  <!--row-->
  <div class="row-fluid conteudo">
   <h3>Astronauta marcos pontes</h3>
   <span class="data">00/00/0000</span>
   <a class="span6"><img src="/portal/images/capaPrograma/cocorico2/jogo-home.jpg" alt="convidado" /></a>
   <div class="span6">
     <p class="frase"><span></span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam pharetra,  sapien at interdum porta, leo purus varius massa, in imperdiet sed. <span class="last"></span></p>
     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam consectetur blandit laoreet. In hac habitasse platea dictumst. Quisque suscipit elementum erat in rutrum. Aliquam malesuada arcu sed sapien sagittis vel dictum nulla accumsan. Nunc a venenatis dolor. Sed mollis feugiat sapien et semper. Nulla nec purus eros, id suscipit lorem. Mauris mattis enim eget quam condimentum eu dapibus lectus adipiscing. Phasellus tincidunt sollicitudin rutrum. Sed non nisi nisl, nec sodales elit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Maecenas vitae lorem a metus sodales ponvallis. </p>
   </div>
   
  </div>
  <!-- /row-->
  <!--row-->
  <div class="row-fluid conteudo">
    <p class="tit">Assista à participação na íntegra:</p>
    <iframe width="940" height="529" src="http://www.youtube.com/embed/PZENwhml0Xc" frameborder="0" allowfullscreen></iframe>
   
  </div>
  <!-- /row-->
  <!--row-->
  <div class="row-fluid">
    <div class="paginacao">
      <a href="#" class="anterior" title="Convidado anterior"><span></span>Convidado Anterior</a>
      <a href="#" class="proximo" title="Próximo Convidado">Próximo Convidado<span></span></a>
    </div>
  </div>
  <!-- /row-->

  <!-- rodape-->
  	<?php include_partial_from_folder('sites/cocorico2', 'global/rodape', array('siteSections' => $siteSections, 'displays' => $displays, 'section'=>$section, 'uri'=>$uri)) ?>
  <!-- /rodape-->
</div>
<!-- /container-->