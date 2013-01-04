<script type="text/javascript" src="/portal/js/bootstrap/tooltip.js"></script>
<link href="/portal/css/tvcultura/sites/cocorico/brincadeiras.css" rel="stylesheet">

<!-- container-->
<div class="container tudo">
 <!-- row-->
  <div class="row-fluid menu">
    <div class="navbar">
      <div class="navbar-inner">
        <?php include_partial_from_folder('sites/cocorico2', 'global/menu') ?>
      </div>
      <?php include_partial_from_folder('sites/cocorico2', 'global/personagens', array('site'=>$site)) ?>
    </div>
  </div>
  <!-- /row-->
  <!-- breadcrumb-->
  <ul class="breadcrumb">
     <li><a href="/cocorico">Cocoricó</a> <span class="divider">&rsaquo;</span></li>
     <li><a href="/cocorico/joguinhos">Joguinhos</a> <span class="divider">&rsaquo;</span></li>
     <li class="active">Nome do Joguinho</li>
  </ul>
  <!-- /breadcrumb-->
  
  <!-- titulo da pagina -->
  <div class="tit-pagina span3">
    <h2>rádio cocórico</h2>
  </div>
  <!-- titulo da pagina -->
  
  <!-- row conteudo radio -->
  <div id="radio" class="row-fluid conteudo">
    <div class="span12 radio-cocorico">
     <img src="/portal/images/capaPrograma/cocorico/bg-radio.jpg" />      
    </div>
    <!-- row clipes relacionados -->
    <div class="row-fluid relacionados">
      
      <!-- clipe -->
      <div class="destaque-2 conteudo-diverso span4">
        <h3>clipe</h3>
        <a href="#" title="Nome do clipe">
          <img src="/portal/images/capaPrograma/cocorico/jogo-home.jpg" alt="Receitinha">
        </a>
        <p>
          texto corrido
          <i class="ico-mais"></i>
        </p>
      </div>  
      <!-- /clipe -->
      
      <!-- clipe -->
      <div class="destaque-2 conteudo-diverso span4">
        <h3>clipe</h3>
        <a href="#" title="Nome do clipe">
          <img src="/portal/images/capaPrograma/cocorico/jogo-home.jpg" alt="Receitinha">
        </a>
        <p>
          texto corrido
          <i class="ico-mais"></i>
        </p>
      </div>  
      <!-- /clipe -->
      
      <!-- clipe -->
      <div class="destaque-2 conteudo-diverso span4">
        <h3>clipe</h3>
        <a href="#" title="Nome do clipe">
          <img src="/portal/images/capaPrograma/cocorico/jogo-home.jpg" alt="Receitinha">
        </a>
        <p>
          texto corrido
          <i class="ico-mais"></i>
        </p>
      </div>  
      <!-- /clipe -->
    </div>
    <!-- /row clipes relacionados -->
  </div>
  <!-- /row conteudo radio -->
  
  <!-- rodape-->
    <?php include_partial_from_folder('sites/cocorico2', 'global/rodape') ?>
  <!-- /rodape-->
</div>
<!-- /container-->