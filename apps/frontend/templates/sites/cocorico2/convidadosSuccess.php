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
    <div class="span2"> <a href="#" class="bold" title="Em família">tv cocoricó</a>
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
    <div class="span2"> <a href="#" class="bold" title="Cocoricó">cocoricó</a>
      <ul>
        <li><a href="#" title="Sobre a série">Sobre a série</a></li>
        <li><a href="#" title="Diário do Júlio">Diário do Júlio</a></li>
        <li><a href="#" title="Personagens">Personagens</a></li>
        <li><a href="#" title="Cocoricolândia">Cocoricolândia</a></li>
        <li><a href="#" title="Autógrafos">Autógrafos</a></li>
      </ul>
    </div>
    <div class="span2 joguinhos"> <a href="#" class="bold" title="Jogos e Brincadeiras">Jogos e Brincadeiras</a>
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
      </ul></div>
    <div class="span3 sites"> <a href="#" class="bold" title="Sites Relacionados">Sites Relacionados</a>
      <ul>
        <li><a href="#" class="quintal" title="Quintal da Cultura">Quintal da Cultura</a></li>
        <li><a href="#" class="tvrtb" title="TV Rá Tim Bum!">TV Rá Tim Bum!</a></li>
        <li class="last"><a href="#" class="cultura" title="TV Cultura">TV Cultura</a></li>
        <li><a href="#" class="castelo" title="Castelo Rá Tim Bum">Castelo Rá Tim Bum</a></li>
        <li><a href="#" class="vila" title="Vila Sésamo">Vila Sésamo</a></li>
      </ul></div>
    
  </div>
  <!-- /rodape-->
</div>
<!-- /container-->