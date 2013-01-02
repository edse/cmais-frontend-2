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
      <div class="navbar-inner">
        <?php include_partial_from_folder('sites/cocorico2', 'global/menu') ?>
      </div>
      <div class="lista-personagens">
        <h3>turma</h3>
        <?php include_partial_from_folder('sites/cocorico2', 'global/personagens', array('siteSections' => $siteSections, 'displays' => $displays, 'section'=>$section, 'uri'=>$uri, 'site'=>$site)) ?>
      </div>
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
 <?php
  $assets = Doctrine_Query::create()
        ->select('a.*')
        ->from('Asset a, SectionAsset sa')
        ->Where('sa.section_id = ?', $section->id)
        ->andWhere('sa.asset_id = a.id')
        ->orderBy('a.id desc')
        ->execute();
  if(!isset($asset))
    $asset = $assets[0];    
  echo "Título:".$asset->getTitle() . "<br/>";
  echo "Descricao:".$asset->getDescription() . "<br/>";
  
  $img = $asset->retriveRelatedAssetsByRelationType(2);
  echo "preview:".$imgs[0]->AssetImage->file.".jpg". "<br/>";
  
  
  

  
  ?>
  <!--row-->
  <div class="row-fluid conteudo">
    <p class="span12">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras facilisis dolor eget orci laoreet porta. In et gravida purus. Aliquam erat volutpat. Vivamus quis elit odio, in luctus diam. Donec eu purus vitae dolor egestas rhoncus sed id lorem. Vivamus id quam arcu. Phasellus ac dolor non odio metus.</p>
    <a  href="javascript:printDiv('div1')" class="print" datasrc="http://midia.cmais.com.br/assets/image/original/96f844e33d17d83682e7e03e927d5c200114fcc2.jpg" title="Imprimir"><img class="border-radius10"  src="/portal/images/capaPrograma/cocorico/thumb-brincadeira.jpg" alt="" /></a>
    <a href="javascript:printDiv('div1')" class="print btn-imprimir border-radius10" datasrc="http://midia.cmais.com.br/assets/image/original/96f844e33d17d83682e7e03e927d5c200114fcc2.jpg" alt="imprimir">imprimir</a>
    <div id="div1" style="display: none;page-break-after:always;">
      <img src="http://midia.cmais.com.br/assets/image/original/96f844e33d17d83682e7e03e927d5c200114fcc2.jpg" style="width:95%">
    </div>
    <!--IFRAME PARA IMPRESSAO EM IE -->
      <iframe id=print_frame width=0 height=0 frameborder=0 src=about:blank></iframe>
      <!--/IFRAME PARA IMPRESSAO EM IE -->
  </div>
  <!--/row-->
  
  <!--row-->
  <div class="row-fluid relacionados">
    <div class="tit imprima"><span class="mais"></span><a href="/cocorico/joguinhos">Imprima e brinque</a><span></span></div>
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
 
  
  <!-- rodape-->
    <?php include_partial_from_folder('sites/cocorico2', 'global/rodape', array('siteSections' => $siteSections, 'displays' => $displays, 'section'=>$section, 'uri'=>$uri)) ?>
  <!-- /rodape-->
</div>
<!-- /container-->