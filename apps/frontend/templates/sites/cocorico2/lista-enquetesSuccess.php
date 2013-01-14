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
    <li><a href="/cocorico">TV Cocorico</a><span class="divider">&rsaquo;</span></li>
    <li><a href="/cocorico/joguinhos">Bastidores</a><span class="divider">&rsaquo;</span></li>
    <li class="active">Episódios completos</li>
  </ul>
  <!-- /breadcrumb-->
  <!-- titulo da pagina -->
  <div class="tit-pagina">
    <h2>Enquete do dia</h2>
  </div>
  <!-- titulo da pagina -->
  <!--row lista-enquetes-->
  <div id="lista-enquetes" class="row-fluid conteudo destaques">
    <!-- lista -->
    <ul class="lista">
      <!-- item -->
      <li class="item-lista">
        <i class="ico-confirma"></i>
        <h4>dd/mm/aaaa</h4>
        <h3>pergunta?</h3>
        <div class="resultado">00% - alternativa1</div>
        <i class="ico-versus-enquete"></i>
        <div class="resultado verde">alternativa2 - 00%</div>
      </li>
        <!-- pontilhado -->
        <li><hr></li>
        <!-- /pontilhado -->
      <!-- /item -->
      <!-- item -->
      <li class="item-lista">
        <i class="ico-confirma"></i>
        <h4>dd/mm/aaaa</h4>
        <h3>pergunta?</h3>
        <div class="resultado">00% - alternativa1</div>
        <i class="ico-versus-enquete"></i>
        <div class="resultado verde">alternativa2 - 00%</div>
      </li>
        <!-- pontilhado -->
        <li><hr></li>
        <!-- /pontilhado -->
      <!-- /item -->
      <!-- item -->
      <li class="item-lista">
        <i class="ico-confirma"></i>
        <h4>dd/mm/aaaa</h4>
        <h3>pergunta?</h3>
        <div class="resultado">00% - alternativa1</div>
        <i class="ico-versus-enquete"></i>
        <div class="resultado verde">alternativa2 - 00%</div>
      </li>
        <!-- pontilhado -->
        <li><hr></li>
        <!-- /pontilhado -->
      <!-- /item -->
      <!-- item -->
      <li class="item-lista">
        <i class="ico-confirma"></i>
        <h4>dd/mm/aaaa</h4>
        <h3>pergunta?</h3>
        <div class="resultado">00% - alternativa1</div>
        <i class="ico-versus-enquete"></i>
        <div class="resultado verde">alternativa2 - 00%</div>
      </li>
        <!-- pontilhado -->
        <li><hr></li>
        <!-- /pontilhado -->
      <!-- /item -->
      <!-- item -->
      <li class="item-lista">
        <i class="ico-confirma"></i>
        <h4>dd/mm/aaaa</h4>
        <h3>pergunta?</h3>
        <div class="resultado">00% - alternativa1</div>
        <i class="ico-versus-enquete"></i>
        <div class="resultado verde">alternativa2 - 00%</div>
      </li>
        <!-- pontilhado -->
        <li><hr></li>
        <!-- /pontilhado -->
      <!-- /item -->
      <!-- item -->
      <li class="item-lista">
        <i class="ico-confirma"></i>
        <h4>dd/mm/aaaa</h4>
        <h3>pergunta?</h3>
        <div class="resultado">00% - alternativa1</div>
        <i class="ico-versus-enquete"></i>
        <div class="resultado verde">alternativa2 - 00%</div>
      </li>
        <!-- pontilhado -->
        <li><hr></li>
        <!-- /pontilhado -->
      <!-- /item -->
      <!-- item -->
      <li class="item-lista">
        <i class="ico-confirma"></i>
        <h4>dd/mm/aaaa</h4>
        <h3>pergunta?</h3>
        <div class="resultado">00% - alternativa1</div>
        <i class="ico-versus-enquete"></i>
        <div class="resultado verde">alternativa2 - 00%</div>
      </li>
        <!-- pontilhado -->
        <li><hr></li>
        <!-- /pontilhado -->
      <!-- /item -->
      <!-- item -->
      <li class="item-lista">
        <i class="ico-confirma"></i>
        <h4>dd/mm/aaaa</h4>
        <h3>pergunta?</h3>
        <div class="resultado">00% - alternativa1</div>
        <i class="ico-versus-enquete"></i>
        <div class="resultado verde">alternativa2 - 00%</div>
      </li>
        <!-- pontilhado -->
        <li><hr></li>
        <!-- /pontilhado -->
      <!-- /item -->
      <!-- item -->
      <li class="item-lista">
        <i class="ico-confirma"></i>
        <h4>dd/mm/aaaa</h4>
        <h3>pergunta?</h3>
        <div class="resultado">00% - alternativa1</div>
        <i class="ico-versus-enquete"></i>
        <div class="resultado verde">alternativa2 - 00%</div>
      </li>
        <!-- pontilhado -->
        <li><hr></li>
        <!-- /pontilhado -->
      <!-- /item -->
      <!-- item -->
      <li class="item-lista">
        <i class="ico-confirma"></i>
        <h4>dd/mm/aaaa</h4>
        <h3>pergunta?</h3>
        <div class="resultado">00% - alternativa1</div>
        <i class="ico-versus-enquete"></i>
        <div class="resultado verde">alternativa2 - 00%</div>
      </li>
        <!-- pontilhado -->
        <li><hr></li>
        <!-- /pontilhado -->
      <!-- /item -->
    </ul>
    <!-- /lista -->
  </div>
  <!-- /row lista-enquetes-->
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
