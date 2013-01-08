<link href="/portal/css/tvcultura/sites/cocorico/tvcocorico.css" rel="stylesheet">


<script type="text/javascript">
  $(document).ready(function() {
    $('.destaques-small li:nth-child(6)').css('margin-right', '0');
    $('.destaques-small li:nth-child(12)').css('margin-right', '0');
  });
</script>


<!-- container-->
<div class="container tudo tvcocorico">
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
     <li><a href="/cocorico">Cocoricó</a> <span class="divider">&rsaquo;</span></li>
     <li><a href="/cocorico/joguinhos">Joguinhos</a> <span class="divider">&rsaquo;</span></li>
     <li class="active">Nome do Joguinho</li>
  </ul>
  <!-- /breadcrumb-->
  
  <!-- titulo da pagina -->
  <div class="tit-pagina">
    <h2>Convidado do dia</h2>
  </div>
  <!-- titulo da pagina -->
  <!-- paginacao -->
  <div class="pagination" id="alfabeto">
    <ul>
      <li class="active"><a href="#" title="1">A</a><span class="divider">|</span></li>
      <li><a href="#" title="1">B</a><span class="divider">|</span></li>
      <li><a href="#" title="1">C</a><span class="divider">|</span></li>
      <li><a href="#" title="1">D</a><span class="divider">|</span></li>
      <li><a href="#" title="1">E</a><span class="divider">|</span></li>
      <li><a href="#" title="1">F</a><span class="divider">|</span></li>
      <li><a href="#" title="1">G</a><span class="divider">|</span></li>
      <li><a href="#" title="1">H</a><span class="divider">|</span></li>
      <li><a href="#" title="1">I</a><span class="divider">|</span></li>
      <li><a href="#" title="1">J</a><span class="divider">|</span></li>
      <li><a href="#" title="1">K</a><span class="divider">|</span></li>
      <li><a href="#" title="1">L</a><span class="divider">|</span></li>
      <li><a href="#" title="1">M</a><span class="divider">|</span></li>
      <li><a href="#" title="1">N</a><span class="divider">|</span></li>
      <li><a href="#" title="1">O</a><span class="divider">|</span></li>
      <li><a href="#" title="1">P</a><span class="divider">|</span></li>
      <li><a href="#" title="1">Q</a><span class="divider">|</span></li>
      <li><a href="#" title="1">R</a><span class="divider">|</span></li>
      <li><a href="#" title="1">S</a><span class="divider">|</span></li>
      <li><a href="#" title="1">T</a><span class="divider">|</span></li>
      <li><a href="#" title="1">U</a><span class="divider">|</span></li>
      <li><a href="#" title="1">V</a><span class="divider">|</span></li>
      <li><a href="#" title="1">W</a><span class="divider">|</span></li>
      <li><a href="#" title="1">X</a><span class="divider">|</span></li>
      <li><a href="#" title="1">Y</a><span class="divider">|</span></li>
      <li><a href="#" title="1">Z</a></li>
    </ul>
    <span class="divider last">|</span>
    <form class="form-search">
      <input type="text" class="input-medium search-query">
      <button type="submit" class="btn"><i class="icon-search"></i></button>
    </form>
  </div>
  <!-- /paginacao -->
  <!-- paginacao -->
  <div class="pagination pagination-centered">
    <ul>
      <li class="anterior"><a href="#" title="Anterior"></a></li>
      <li class="active"><a href="#" title="1">1</a></li>
      <li><a href="#" title="1">2</a></li>
      <li><a href="#" title="1">3</a></li>
      <li><a href="#" title="1">...</a></li>
      <li><a href="#" title="1">18</a></li>
      <li class="proximo" title="Próximo"><a href="#"></a></li>
    </ul>
  </div>
  <!-- /paginacao -->
  <!--row-->
  <div class="row-fluid conteudo destaques">
    <ul id="convidados">
      <li class="span4">
        <a href="/cocorico/receitinhas-interna" title="link do jogo"><img class="span12" src="/portal/images/capaPrograma/cocorico/jogo-home.jpg" alt="jogo" />Nome do Joguinho</a>  
      </li>
      <li class="span4">
        <a href="/cocorico/receitinhas-interna" title="link do jogo"><img class="span12" src="/portal/images/capaPrograma/cocorico/jogo-home.jpg" alt="jogo" />Nome do Joguinho</a>  
      </li>
      <li class="span4">
        <a href="/cocorico/receitinhas-interna" title="link do jogo"><img class="span12" src="/portal/images/capaPrograma/cocorico/jogo-home.jpg" alt="jogo" />Nome do Joguinho</a>  
      </li>
      <li class="span4">
        <a href="/cocorico/receitinhas-interna" title="link do jogo"><img class="span12" src="/portal/images/capaPrograma/cocorico/jogo-home.jpg" alt="jogo" />Nome do Joguinho</a>  
      </li>
      <li class="span4">
        <a href="/cocorico/receitinhas-interna" title="link do jogo"><img class="span12" src="/portal/images/capaPrograma/cocorico/jogo-home.jpg" alt="jogo" />Nome do Joguinho</a>  
      </li>
      <li class="span4">
        <a href="/cocorico/receitinhas-interna" title="link do jogo"><img class="span12" src="/portal/images/capaPrograma/cocorico/jogo-home.jpg" alt="jogo" />Nome do Joguinho</a>  
      </li>
      <li class="span4">
        <a href="/cocorico/receitinhas-interna" title="link do jogo"><img class="span12" src="/portal/images/capaPrograma/cocorico/jogo-home.jpg" alt="jogo" />Nome do Joguinho</a>  
      </li>
      <li class="span4">
        <a href="/cocorico/receitinhas-interna" title="link do jogo"><img class="span12" src="/portal/images/capaPrograma/cocorico/jogo-home.jpg" alt="jogo" />Nome do Joguinho</a>  
      </li>
      <li class="span4">
        <a href="/cocorico/receitinhas-interna" title="link do jogo"><img class="span12" src="/portal/images/capaPrograma/cocorico/jogo-home.jpg" alt="jogo" />Nome do Joguinho</a>  
      </li>
      <li class="span4">
        <a href="/cocorico/receitinhas-interna" title="link do jogo"><img class="span12" src="/portal/images/capaPrograma/cocorico/jogo-home.jpg" alt="jogo" />Nome do Joguinho</a>  
      </li>
      <li class="span4">
        <a href="/cocorico/receitinhas-interna" title="link do jogo"><img class="span12" src="/portal/images/capaPrograma/cocorico/jogo-home.jpg" alt="jogo" />Nome do Joguinho</a>  
      </li>
      <li class="span4">
        <a href="/cocorico/receitinhas-interna" title="link do jogo"><img class="span12" src="/portal/images/capaPrograma/cocorico/jogo-home.jpg" alt="jogo" />Nome do Joguinho</a>  
      </li>
      <li class="span4">
        <a href="/cocorico/receitinhas-interna" title="link do jogo"><img class="span12" src="/portal/images/capaPrograma/cocorico/jogo-home.jpg" alt="jogo" />Nome do Joguinho</a>  
      </li>
      <li class="span4">
        <a href="/cocorico/receitinhas-interna" title="link do jogo"><img class="span12" src="/portal/images/capaPrograma/cocorico/jogo-home.jpg" alt="jogo" />Nome do Joguinho</a>  
      </li>
      <li class="span4">
        <a href="/cocorico/receitinhas-interna" title="link do jogo"><img class="span12" src="/portal/images/capaPrograma/cocorico/jogo-home.jpg" alt="jogo" />Nome do Joguinho</a>  
      </li>
      <li class="span4">
        <a href="/cocorico/receitinhas-interna" title="link do jogo"><img class="span12" src="/portal/images/capaPrograma/cocorico/jogo-home.jpg" alt="jogo" />Nome do Joguinho</a>  
      </li>
      <li class="span4">
        <a href="/cocorico/receitinhas-interna" title="link do jogo"><img class="span12" src="/portal/images/capaPrograma/cocorico/jogo-home.jpg" alt="jogo" />Nome do Joguinho</a>  
      </li>
      <li class="span4">
        <a href="/cocorico/receitinhas-interna" title="link do jogo"><img class="span12" src="/portal/images/capaPrograma/cocorico/jogo-home.jpg" alt="jogo" />Nome do Joguinho</a>  
      </li>
      <li class="span4">
        <a href="/cocorico/receitinhas-interna" title="link do jogo"><img class="span12" src="/portal/images/capaPrograma/cocorico/jogo-home.jpg" alt="jogo" />Nome do Joguinho</a>  
      </li>
      <li class="span4">
        <a href="/cocorico/receitinhas-interna" title="link do jogo"><img class="span12" src="/portal/images/capaPrograma/cocorico/jogo-home.jpg" alt="jogo" />Nome do Joguinho</a>  
      </li>
      <li class="span4">
        <a href="/cocorico/receitinhas-interna" title="link do jogo"><img class="span12" src="/portal/images/capaPrograma/cocorico/jogo-home.jpg" alt="jogo" />Nome do Joguinho</a>  
      </li>
      <li class="span4">
        <a href="/cocorico/receitinhas-interna" title="link do jogo"><img class="span12" src="/portal/images/capaPrograma/cocorico/jogo-home.jpg" alt="jogo" />Nome do Joguinho</a>  
      </li>
      <li class="span4">
        <a href="/cocorico/receitinhas-interna" title="link do jogo"><img class="span12" src="/portal/images/capaPrograma/cocorico/jogo-home.jpg" alt="jogo" />Nome do Joguinho</a>  
      </li>
      <li class="span4">
        <a href="/cocorico/receitinhas-interna" title="link do jogo"><img class="span12" src="/portal/images/capaPrograma/cocorico/jogo-home.jpg" alt="jogo" />Nome do Joguinho</a>  
      </li>
    </ul>
     
  </div>
  <!-- /row-->
  <!-- paginacao -->
  <div class="pagination pagination-centered">
    <ul>
      <li class="anterior"><a href="#" title="Anterior"></a></li>
      <li class="active"><a href="#" title="1">1</a></li>
      <li><a href="#" title="1">2</a></li>
      <li><a href="#" title="1">3</a></li>
      <li><a href="#" title="1">...</a></li>
      <li><a href="#" title="1">18</a></li>
      <li class="proximo" title="Próximo"><a href="#"></a></li>
    </ul>
  </div>
  <!-- /paginacao -->
 
  
  <!-- rodapé-->
  <div class="row-fluid  border-top"></div>
  <?php include_partial_from_folder('sites/cocorico', 'global/rodape', array('siteSections' => $siteSections, 'displays' => $displays, 'section'=>$section, 'uri'=>$uri)) ?>
  <!--/rodapé-->
</div>
<!-- /container-->