<link href="/portal/css/tvcultura/sites/cocorico/familia.css" rel="stylesheet">

<script type="text/javascript">
  $(document).ready(function() {
    $('.btn-tooltip').tooltip();
    $('.lista-produtos li:nth-child(3)').css('margin-left', '0');
    $('.lista-produtos li:nth-child(5)').css('margin-left', '0');
    $('.lista-produtos li:nth-child(7)').css('margin-left', '0');
    $('.lista-produtos li:nth-child(9)').css('margin-left', '0');
    $('.lista-produtos li:nth-child(11)').css('margin-left', '0');
    $('.lista-produtos li:nth-child(13)').css('margin-left', '0');
    $('.lista-produtos li:nth-child(15)').css('margin-left', '0');
    $('.lista-produtos li:nth-child(17)').css('margin-left', '0');
    $('.lista-produtos li:nth-child(19)').css('margin-left', '0');
    $('.lista-produtos li:nth-child(21)').css('margin-left', '0');
    $('.lista-produtos li:nth-child(23)').css('margin-left', '0');
    $('.lista-produtos li:nth-child(25)').css('margin-left', '0');
    $('.lista-produtos li:nth-child(27)').css('margin-left', '0');
    $('.lista-produtos li:nth-child(29)').css('margin-left', '0');
    $('.lista-produtos li:nth-child(31)').css('margin-left', '0');
    $('.lista-produtos li:nth-child(33)').css('margin-left', '0');
    $('.lista-produtos li:nth-child(35)').css('margin-left', '0');
  });
</script>

<div class="container tudo">
  <!-- row-->
  <div class="row-fluid">
    <div class="topo-coco">
      <h1 class="span3"><a href="<?php echo $site->retriveUrl() ?>" title="Cocorico"><img src="/portal/images/capaPrograma/cocorico/logo-coco.png" alt="Cocoricó" /></a></h1>
      <!-- BOX PUBLICIDADE 2 -->
      <div class="box-publicidade span9">
        <!-- portal-cocorico -->
        <script type='text/javascript'>
        GA_googleFillSlot("portal-cocorico");
        </script>
      </div>
      <!-- / BOX PUBLICIDADE 2 -->
      <fb:like href="http://www3.tvcultura.com.br/cocorico/" send="true" layout="button_count" width="450" show_faces="false" font="arial"></fb:like>
    </div>
    <div class="divisoria span12"></div>
  </div>
  <!-- /row-->
  <!-- menu-->
  <?php include_partial_from_folder('sites/cocorico2', 'global/menu-em-familia') ?>
  <!-- /menu-->
  
  <!-- breadcrumb-->
  <ul class="breadcrumb">
     <li><a href="<?php echo $site->retriveUrl() ?>">Cocoricó</a> <span class="divider">&rsaquo;</span></li>
     <li><a href="<?php echo $site->retriveUrl() ?>/joguinhos">Joguinhos</a> <span class="divider">&rsaquo;</span></li>
     <li class="active">Nome do Joguinho</li>
  </ul>
  <!-- /breadcrumb-->
  <h2 class="tit-pagina">nas lojas</h2>
  
  <!--row-->
  <div class="row-fluid conteudo ">
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis nec urna a libero aliquet imper diet at eget ante. Pellentesque accumsan lobortis tellus, tempor dapibus metus bibendum a. Pellent esque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nunc quis massa molestie felis varius rutrum. Pellentesque laoreet faucibus viverra. Duis faucibus varius blandit. Donec sit amet diam et dolor feugiat venenatis. Aliquam blandit elit sit amet lectus venenatis sit posueree senectus et netus.</p>
  </div>
  <!--/row-->
  
  <!--row-->
  <div class="row-fluid naslojas">
    <div class="span4">
      <div class="topo">
        <h2>Encontre o presente ideal</h2>
        <div class="divisao"></div>
        <form class="form-search">
          <input type="text" class="input-medium search-query" placeholder="Busque pelo nome do produto">
          <button type="submit" class="btn"><i class="icon-search"></i></button>
        </form>
      </div>
      <span class="detalhe"></span>
      <div class="filtro">
        <h2>Estou procurando por:</h2>
        <ul>
          <li>
            <a href="#" title="limpar">6 - 11 meses</a>
          </li>
          <li>
            <a href="#" title="limpar">6 - 11 meses</a>
          </li>
          <li>
            <a href="#" title="limpar">6 - 11 meses</a>
          </li>
        </ul>
        <button type="submit" class="btn">Limpar tudo</button>
      </div>
      <form class="form-filtro">
        <fieldset>
          <legend>Idade</legend>
          <div class="grupo">
            <label class="radio"><input type="radio" name="idade" id="idade1" value="opcao1">0 - 5 meses</label>
            <label class="radio"><input type="radio"name="idade" id="idade2" value="opcao2">6 - 11 meses</label>
            <label class="radio"><input type="radio" name="idade" id="idade3" value="opcao3">12 - 23 meses</label>
            <label class="radio"><input type="radio" name="idade" id="idade4" value="opcao4">2 anos</label>
            <label class="radio"><input type="radio" name="idade" id="idade5" value="opcao5">3 anos</label>
            <label class="radio"><input type="radio" name="idade" id="idade6" value="opcao6">4 anos</label>
            <label class="radio"><input type="radio" name="idade" id="idade7" value="opcao7">a partir dos 5 anos</label>
          </div>
        </fieldset>
        <fieldset>
          <legend>Categoria</legend>
          <div class="grupo">
            <label class="radio"><input type="radio" name="categoria" id="categoria1" value="opcao1">Todas as categorias</label>
            <label class="radio"><input type="radio" name="categoria" id="categoria2" value="opcao2">alimentos</label>
            <label class="radio"><input type="radio" name="categoria" id="categoria3" value="opcao3">brinquedos</label>
            <label class="radio"><input type="radio" name="categoria" id="categoria4" value="opcao4">confecções e acessórios</label>
            <label class="radio"><input type="radio" name="categoria" id="categoria5" value="opcao5">higiene pessoal</label>
            <label class="radio"><input type="radio" name="categoria" id="categoria6" value="opcao1">brinquedos</label>
            <label class="radio"><input type="radio" name="categoria" id="categoria7" value="opcao2">alimentos</label>
            <label class="radio"><input type="radio" name="categoria" id="categoria8" value="opcao3">brinquedos</label>
            <label class="radio"><input type="radio" name="categoria" id="categoria9" value="opcao4">confecções e acessórios</label>
            <label class="radio"><input type="radio" name="categoria" id="categoria10" value="opcao5">higiene pessoal</label>
          </div>
        </fieldset>
        <fieldset class="fabricante">
          <legend>Fabricante</legend>
          <div class="grupo">
            <label class="radio"><input type="radio" name="fabricante" id="fabricante1" value="opcao1">Candide</label>
            <label class="radio"><input type="radio" name="fabricante" id="fabricante2" value="opcao2">Candide</label>
            <label class="radio"><input type="radio" name="fabricante" id="fabricante3" value="opcao3">Candide</label>
            <label class="radio"><input type="radio" name="fabricante" id="fabricante4" value="opcao4">Candide</label>
            <label class="radio"><input type="radio" name="fabricante" id="fabricante5" value="opcao5">Candide</label>
            <label class="radio"><input type="radio" name="fabricante" id="fabricante6" value="opcao6">Candide</label>
            <label class="radio"><input type="radio" name="fabricante" id="fabricante7" value="opcao7">Candide</label>
            <label class="radio"><input type="radio" name="fabricante" id="fabricante8" value="opcao8">Candide</label>
            <label class="radio"><input type="radio" name="fabricante" id="fabricante9" value="opcao9">Candide</label>
            <label class="radio"><input type="radio" name="fabricante" id="fabricante10" value="opcao10">Candide</label>
          </div>
        </fieldset>
      
        
        
      </form>
    </div>
    <div class="span8">
      <div class="span12 produtos">
        <h2 class="span7">xxx produtos encontrados</h2>
        <div class="span5 itens">
          <span class="divider">|</span>
          <p class="span9">Itens por página:</p>
          <ul class="span3">
            <li>8</li>
            <li>16</li>
            <li class="active">24</li>
            <li>36</li>
          </ul>
        </div>
      </div>
      <div class="pagination pagination-centered">
        <ul>
          <li class="anterior"><a title="Anterior" href="#"></a></li>
          <li class="active"><a title="1" href="#">1</a></li>
          <li><a title="1" href="#">2</a></li>
          <li><a title="1" href="#">3</a></li>
          <li><a title="1" href="#">...</a></li>
          <li><a title="1" href="#">18</a></li>
          <li title="Próximo" class="proximo"><a href="#"></a></li>
        </ul>
      </div>
      <ul class="lista-produtos">
        <li class="span6">
          <a class="span12" href="/cocorico/naslojas-interna" title=""><img class="span12" src="/portal/images/capaPrograma/cocorico/jogo-home.jpg" alt="jogo" />Nome do produto</a>
        </li>
        <li class="span6">
          <a class="span12" href="/cocorico/naslojas-interna" title=""><img class="span12" src="/portal/images/capaPrograma/cocorico/jogo-home.jpg" alt="jogo" />Nome do produto</a>
        </li>
         <li class="span6">
          <a class="span12" href="/cocorico/naslojas-interna" title=""><img class="span12" src="/portal/images/capaPrograma/cocorico/jogo-home.jpg" alt="jogo" />Nome do produto</a>
        </li>
        <li class="span6">
          <a class="span12" href="/cocorico/naslojas-interna" title=""><img class="span12" src="/portal/images/capaPrograma/cocorico/jogo-home.jpg" alt="jogo" />Nome do produto</a>
        </li>
          <li class="span6">
          <a class="span12" href="/cocorico/naslojas-interna" title=""><img class="span12" src="/portal/images/capaPrograma/cocorico/jogo-home.jpg" alt="jogo" />Nome do produto</a>
        </li>
        <li class="span6">
          <a class="span12" href="/cocorico/naslojas-interna" title=""><img class="span12" src="/portal/images/capaPrograma/cocorico/jogo-home.jpg" alt="jogo" />Nome do produto</a>
        </li>
         <li class="span6">
          <a class="span12" href="/cocorico/naslojas-interna" title=""><img class="span12" src="/portal/images/capaPrograma/cocorico/jogo-home.jpg" alt="jogo" />Nome do produto</a>
        </li>
        <li class="span6">
          <a class="span12" href="/cocorico/naslojas-interna" title=""><img class="span12" src="/portal/images/capaPrograma/cocorico/jogo-home.jpg" alt="jogo" />Nome do produto</a>
        </li>
          <li class="span6">
          <a class="span12" href="/cocorico/naslojas-interna" title=""><img class="span12" src="/portal/images/capaPrograma/cocorico/jogo-home.jpg" alt="jogo" />Nome do produto</a>
        </li>
        <li class="span6">
          <a class="span12" href="/cocorico/naslojas-interna" title=""><img class="span12" src="/portal/images/capaPrograma/cocorico/jogo-home.jpg" alt="jogo" />Nome do produto</a>
        </li>
         <li class="span6">
          <a class="span12" href="/cocorico/naslojas-interna" title=""><img class="span12" src="/portal/images/capaPrograma/cocorico/jogo-home.jpg" alt="jogo" />Nome do produto</a>
        </li>
        <li class="span6">
          <a class="span12" href="/cocorico/naslojas-interna" title=""><img class="span12" src="/portal/images/capaPrograma/cocorico/jogo-home.jpg" alt="jogo" />Nome do produto</a>
        </li>
         <li class="span6">
          <a class="span12" href="/cocorico/naslojas-interna" title=""><img class="span12" src="/portal/images/capaPrograma/cocorico/jogo-home.jpg" alt="jogo" />Nome do produto</a>
        </li>
        <li class="span6">
          <a class="span12" href="/cocorico/naslojas-interna" title=""><img class="span12" src="/portal/images/capaPrograma/cocorico/jogo-home.jpg" alt="jogo" />Nome do produto</a>
        </li>
         <li class="span6">
          <a class="span12" href="/cocorico/naslojas-interna" title=""><img class="span12" src="/portal/images/capaPrograma/cocorico/jogo-home.jpg" alt="jogo" />Nome do produto</a>
        </li>
        <li class="span6">
          <a class="span12" href="/cocorico/naslojas-interna" title=""><img class="span12" src="/portal/images/capaPrograma/cocorico/jogo-home.jpg" alt="jogo" />Nome do produto</a>
        </li>
          <li class="span6">
          <a class="span12" href="/cocorico/naslojas-interna" title=""><img class="span12" src="/portal/images/capaPrograma/cocorico/jogo-home.jpg" alt="jogo" />Nome do produto</a>
        </li>
        <li class="span6">
          <a class="span12" href="/cocorico/naslojas-interna" title=""><img class="span12" src="/portal/images/capaPrograma/cocorico/jogo-home.jpg" alt="jogo" />Nome do produto</a>
        </li>
         <li class="span6">
          <a class="span12" href="/cocorico/naslojas-interna" title=""><img class="span12" src="/portal/images/capaPrograma/cocorico/jogo-home.jpg" alt="jogo" />Nome do produto</a>
        </li>
        <li class="span6">
          <a class="span12" href="/cocorico/naslojas-interna" title=""><img class="span12" src="/portal/images/capaPrograma/cocorico/jogo-home.jpg" alt="jogo" />Nome do produto</a>
        </li>
          <li class="span6">
          <a class="span12" href="/cocorico/naslojas-interna" title=""><img class="span12" src="/portal/images/capaPrograma/cocorico/jogo-home.jpg" alt="jogo" />Nome do produto</a>
        </li>
        <li class="span6">
          <a class="span12" href="/cocorico/naslojas-interna" title=""><img class="span12" src="/portal/images/capaPrograma/cocorico/jogo-home.jpg" alt="jogo" />Nome do produto</a>
        </li>
         <li class="span6">
          <a class="span12" href="/cocorico/naslojas-interna" title=""><img class="span12" src="/portal/images/capaPrograma/cocorico/jogo-home.jpg" alt="jogo" />Nome do produto</a>
        </li>
        <li class="span6">
          <a class="span12" href="/cocorico/naslojas-interna" title=""><img class="span12" src="/portal/images/capaPrograma/cocorico/jogo-home.jpg" alt="jogo" />Nome do produto</a>
        </li>
         <li class="span6">
          <a class="span12" href="/cocorico/naslojas-interna" title=""><img class="span12" src="/portal/images/capaPrograma/cocorico/jogo-home.jpg" alt="jogo" />Nome do produto</a>
        </li>
        <li class="span6">
          <a class="span12" href="/cocorico/naslojas-interna" title=""><img class="span12" src="/portal/images/capaPrograma/cocorico/jogo-home.jpg" alt="jogo" />Nome do produto</a>
        </li>
         <li class="span6">
          <a class="span12" href="/cocorico/naslojas-interna" title=""><img class="span12" src="/portal/images/capaPrograma/cocorico/jogo-home.jpg" alt="jogo" />Nome do produto</a>
        </li>
        <li class="span6">
          <a class="span12" href="/cocorico/naslojas-interna" title=""><img class="span12" src="/portal/images/capaPrograma/cocorico/jogo-home.jpg" alt="jogo" />Nome do produto</a>
        </li>
          <li class="span6">
          <a class="span12" href="/cocorico/naslojas-interna" title=""><img class="span12" src="/portal/images/capaPrograma/cocorico/jogo-home.jpg" alt="jogo" />Nome do produto</a>
        </li>
        <li class="span6">
          <a class="span12" href="/cocorico/naslojas-interna" title=""><img class="span12" src="/portal/images/capaPrograma/cocorico/jogo-home.jpg" alt="jogo" />Nome do produto</a>
        </li>
         <li class="span6">
          <a class="span12" href="/cocorico/naslojas-interna" title=""><img class="span12" src="/portal/images/capaPrograma/cocorico/jogo-home.jpg" alt="jogo" />Nome do produto</a>
        </li>
        <li class="span6">
          <a class="span12" href="/cocorico/naslojas-interna" title=""><img class="span12" src="/portal/images/capaPrograma/cocorico/jogo-home.jpg" alt="jogo" />Nome do produto</a>
        </li>
         <li class="span6">
          <a class="span12" href="/cocorico/naslojas-interna" title=""><img class="span12" src="/portal/images/capaPrograma/cocorico/jogo-home.jpg" alt="jogo" />Nome do produto</a>
        </li>
        <li class="span6">
          <a class="span12" href="/cocorico/naslojas-interna" title=""><img class="span12" src="/portal/images/capaPrograma/cocorico/jogo-home.jpg" alt="jogo" />Nome do produto</a>
        </li>
        
      </ul>
      <div class="pagination pagination-centered">
        <ul>
          <li class="anterior"><a title="Anterior" href="#"></a></li>
          <li class="active"><a title="1" href="#">1</a></li>
          <li><a title="1" href="#">2</a></li>
          <li><a title="1" href="#">3</a></li>
          <li><a title="1" href="#">...</a></li>
          <li><a title="1" href="#">18</a></li>
          <li title="Próximo" class="proximo"><a href="#"></a></li>
        </ul>
      </div>
    </div>
  
  </div>  
  <!--row-->
  <div class="row-fluid  border-top"></div>
  
  <!-- rodapé-->
  <div class="row-fluid  border-top"></div>
  <?php include_partial_from_folder('sites/cocorico', 'global/rodape', array('siteSections' => $siteSections, 'displays' => $displays, 'section'=>$section, 'uri'=>$uri)) ?>
  <!--/rodapé-->
</div>
<!-- /container-->
