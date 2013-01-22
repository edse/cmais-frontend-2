<script type="text/javascript" src="/portal/js/bootstrap/tooltip.js"></script>
<link href="/portal/css/tvcultura/sites/cocorico/brincadeiras.css" rel="stylesheet">

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
     <li><a href="/cocorico">Cocoricó</a> <span class="divider">&rsaquo;</span></li>
     <li><a href="/cocorico/joguinhos">Joguinhos</a> <span class="divider">&rsaquo;</span></li>
     <li class="active">Nome do Joguinho</li>
  </ul>
  <!-- /breadcrumb-->
  
  <!--btn voltar-->
  <a href="#" class="voltar">voltar<span class="divisao"></span></a>
  <!-- /btn voltar-->
  
  <!-- titulo da pagina -->
  <div class="tit-pagina span7">
    <h2>nome da brincadeira</h2>
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
  <div class="row-fluid conteudo">
    <p class="span12">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras facilisis dolor eget orci laoreet porta. In et gravida purus. Aliquam erat volutpat. Vivamus quis elit odio, in luctus diam. Donec eu purus vitae dolor egestas rhoncus sed id lorem. Vivamus id quam arcu. Phasellus ac dolor non odio metus.</p>
    <div class="span6 esq">
    <p class="alerta"><span></span>tenha Cuidado! peça ajuda a um adulto!</p>
    <h3>Você vai precisar de:</h3>
    <p>cola</p>
    <p>cola</p>
    <p>cola</p>
    <p>cola</p>
    <p>cola</p>
    
    <h3>Passo 1</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nec rutrum tellus. Nunc porttitor sagittis pretium. Curabitur rutrum risus a magna placerat vitae mollis quam mattis. Sed sit amet mauris felis, in aliquet ante. Vestibulum ante volutpat.</p>
    
    <h3>Passo 2</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nec rutrum tellus. Nunc porttitor sagittis pretium. Curabitur rutrum risus a magna placerat vitae mollis quam mattis. Sed sit amet mauris felis, in aliquet ante. Vestibulum ante volutpat.</p>
    
    <h3>Passo 3</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nec rutrum tellus. Nunc porttitor sagittis pretium. Curabitur rutrum risus a magna placerat vitae mollis quam mattis. Sed sit amet mauris felis, in aliquet ante. Vestibulum ante volutpat.</p>
    </div>
    <div class="span6">
      <iframe width="460" height="259" src="http://www.youtube.com/embed/1e87dwiz0yg?window=opaque" frameborder="0" allowfullscreen></iframe>
      <ul class="imprimir">
        <!-- figura -->
        <li class="span4">
          <a href="javascript:printDiv('div1')" class="btn-tooltip print" datasrc="http://midia.cmais.com.br/assets/image/original/96f844e33d17d83682e7e03e927d5c200114fcc2.jpg" rel="tooltip" data-placement="bottom" data-original-title="imprimir"><img src="/portal/images/capaPrograma/cocorico/thumb-brincadeira.jpg" alt="nome brincadeira" /><span></span></a>
          <div id="div1" style="display: none;page-break-after:always;">
            <img src="http://midia.cmais.com.br/assets/image/original/96f844e33d17d83682e7e03e927d5c200114fcc2.jpg" style="width:95%">
          </div>
        </li>
        <!-- /figura -->
        <!-- figura -->
        <li class="span4">
          <a  href="javascript:printDiv('div2')" class="btn-tooltip print" datasrc="http://midia.cmais.com.br/assets/image/image-6-b/bf6eac5ee9ab32f370c0c6b83fbd66f86e545f07.jpg" rel="tooltip" data-placement="bottom" data-original-title="imprimir"><img src="http://midia.cmais.com.br/assets/image/image-6-b/bf6eac5ee9ab32f370c0c6b83fbd66f86e545f07.jpg" alt="nome brincadeira" /><span></span></a>
          <div id="div2" style="display: none;page-break-after:always;">
            <img src="http://midia.cmais.com.br/assets/image/image-6-b/bf6eac5ee9ab32f370c0c6b83fbd66f86e545f07.jpg" style="width:95%">
          </div>
        </li>
        <!-- /figura -->
        <!-- figura -->
        <li class="span4">
          <a style="margin-bottom:10px;" href="javascript:printDiv('div3')" class="btn-tooltip print" datasrc="http://midia.cmais.com.br/assets/image/original/96f844e33d17d83682e7e03e927d5c200114fcc2.jpg" rel="tooltip" data-placement="bottom" data-original-title="imprimir"><img src="/portal/images/capaPrograma/cocorico/thumb-brincadeira.jpg" alt="nome brincadeira" /><span></span></a>
          <div id="div3" style="display: none;page-break-after:always;">
            <img src="http://midia.cmais.com.br/assets/image/original/96f844e33d17d83682e7e03e927d5c200114fcc2.jpg" style="width:95%">
          </div>
        </li>
        <!-- /figura -->
        <!-- figura -->
        <li class="span4">
          <a  href="javascript:printDiv('div4')" class="btn-tooltip print" datasrc="http://midia.cmais.com.br/assets/image/original/96f844e33d17d83682e7e03e927d5c200114fcc2.jpg" rel="tooltip" data-placement="bottom" data-original-title="imprimir"><img src="/portal/images/capaPrograma/cocorico/thumb-brincadeira.jpg" alt="nome brincadeira" /><span></span></a>
          <div id="div4" style="display: none;page-break-after:always;">
            <img src="http://midia.cmais.com.br/assets/image/original/96f844e33d17d83682e7e03e927d5c200114fcc2.jpg" style="width:95%">
          </div>
        </li>
        <!-- /figura -->
        <!-- figura -->
        <li class="span4">
          <a  href="javascript:printDiv('div5')" class="btn-tooltip print" datasrc="http://midia.cmais.com.br/assets/image/original/96f844e33d17d83682e7e03e927d5c200114fcc2.jpg" rel="tooltip" data-placement="bottom" data-original-title="imprimir"><img src="/portal/images/capaPrograma/cocorico/thumb-brincadeira.jpg" alt="nome brincadeira" /><span></span></a>
          <div id="div5" style="display: none;page-break-after:always;">
            <img src="http://midia.cmais.com.br/assets/image/original/96f844e33d17d83682e7e03e927d5c200114fcc2.jpg" style="width:95%">
          </div>
        </li>
        <!-- /figura -->
        <!-- figura -->
        <li class="span4">
          <a  href="javascript:printDiv('div6')" class="btn-tooltip print" datasrc="http://midia.cmais.com.br/assets/image/original/96f844e33d17d83682e7e03e927d5c200114fcc2.jpg" rel="tooltip" data-placement="bottom" data-original-title="imprimir"><img src="/portal/images/capaPrograma/cocorico/thumb-brincadeira.jpg" alt="nome brincadeira" /><span></span></a>
          <div id="div6" style="display: none;page-break-after:always;">
            <img src="http://midia.cmais.com.br/assets/image/original/96f844e33d17d83682e7e03e927d5c200114fcc2.jpg" style="width:95%">
          </div>
        </li>
        <!-- /figura -->
      </ul>
      <!--IFRAME PARA IMPRESSAO EM IE -->
      <iframe id=print_frame width=0 height=0 frameborder=0 src=about:blank></iframe>
      <!--/IFRAME PARA IMPRESSAO EM IE -->
    </div>
  </div>
  <!--/row-->
  
  <!--row-->
  <div class="row-fluid relacionados">
    <div class="tit imprima"><span class="mais"></span><a href="/cocorico/joguinhos">Imprima e brinque</a><span></span></div>
    <ul class="destaques-small">
      <li class="span2"><a href="javascript:;" class="print" datasrc="http://midia.cmais.com.br/assets/image/original/96f844e33d17d83682e7e03e927d5c200114fcc2.jpg" title=""><img class="span12" src="/portal/images/capaPrograma/cocorico/jogo-home.jpg" alt="jogo" />Nome do Joguinho</a></li>
      <li class="span2"><a href="javascript:;" class="print" datasrc="http://midia.cmais.com.br/assets/image/original/96f844e33d17d83682e7e03e927d5c200114fcc2.jpg" title=""><img class="span12" src="/portal/images/capaPrograma/cocorico/jogo-home.jpg" alt="jogo" />Nome do Joguinho</a></li>
      <li class="span2"><a href="javascript:;" class="print" datasrc="http://midia.cmais.com.br/assets/image/original/96f844e33d17d83682e7e03e927d5c200114fcc2.jpg" title=""><img class="span12" src="/portal/images/capaPrograma/cocorico/jogo-home.jpg" alt="jogo" />Nome do Joguinho</a></li>
      <li class="span2"><a href="javascript:;" class="print" datasrc="http://midia.cmais.com.br/assets/image/original/96f844e33d17d83682e7e03e927d5c200114fcc2.jpg" title=""><img class="span12" src="/portal/images/capaPrograma/cocorico/jogo-home.jpg" alt="jogo" />Nome do Joguinho</a></li>
      <li class="span2"><a href="javascript:;" class="print" datasrc="http://midia.cmais.com.br/assets/image/original/96f844e33d17d83682e7e03e927d5c200114fcc2.jpg" title=""><img class="span12" src="/portal/images/capaPrograma/cocorico/jogo-home.jpg" alt="jogo" />Nome do Joguinho</a></li>
      <li class="span2"><a href="javascript:;" class="print" datasrc="http://midia.cmais.com.br/assets/image/original/96f844e33d17d83682e7e03e927d5c200114fcc2.jpg" title=""><img class="span12" src="/portal/images/capaPrograma/cocorico/jogo-home.jpg" alt="jogo" />Nome do Joguinho</a></li>
    </ul>
  </div>
  <!-- /row-->
 
  
  <!-- rodapé-->
  <div class="row-fluid  border-top"></div>
  <?php include_partial_from_folder('sites/cocorico', 'global/rodape', array('siteSections' => $siteSections, 'displays' => $displays, 'section'=>$section, 'uri'=>$uri)) ?>
  <!--/rodapé-->
</div>
<!-- /container-->

<!--tooltip estilizado-->
<!--
<script type="text/javascript" src="/portal/js/jquery-tooltip/jquery.tooltip.js"></script>
<script type="text/javascript">
$('.conteudo').tooltip({ 
    extraClass:"tp-imprimir"
}); 
-->
</script>