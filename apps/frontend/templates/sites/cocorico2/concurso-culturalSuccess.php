<link href="/portal/css/tvcultura/sites/cocorico/brincadeiras.css" rel="stylesheet">
<link href="/portal/css/tvcultura/sites/cocorico/tvcocorico.css" rel="stylesheet">
<!--FANCYBOX-->
<script type="text/javascript" src="/portal/js/fancybox2.1.4/jquery.fancybox.pack.js" ></script>
<script type="text/javascript" src="/portal/js/fancybox2.1.4/helpers/jquery.fancybox-media.js" ></script>
<link rel="stylesheet" href="/portal/js/fancybox2.1.4/jquery.fancybox.css" type="text/css" media="screen" />
<script type="text/javascript" src="/portal/js/embedagram/jquery-embedagram.pack.js"></script> 
<!--/FANCYBOX-->

<!-- container-->
<div class="container tudo">
  <!-- row-->
  <div class="row-fluid menu">
    <!--topo coco-->
    <?php include_partial_from_folder('sites/cocorico', 'global/topo-coco', array('site'=>$site)) ?>
    <!--/topo coco-->
  
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
  <?php include_partial_from_folder('sites/cocorico', 'global/breadcrumb-section', array('site'=>$site,'section'=>$section)) ?> 
  <!-- /breadcrumb-->
  <!-- titulo da pagina -->
  <div class="tit-pagina tit-extra">
    <h2><i class="ico-bike"></i><?php echo $section->getTitle() ?><span><?php echo $section->getDescription() ?></span></h2>
  </div>
  <!-- titulo da pagina -->
  <!--row-->
  <div class="row-fluid conteudo">
    
    <a class="span6"><img alt="" src="http://midia.cmais.com.br/assets/image/original/41566c83254338a9def287f94f71fd20e113fc00.jpg"></a>
    <div class="span6">
      <p>Hélio Ziskind nasceu em 1955, é músico e compositor. Na TV Cultura compôs temas para os programas como Rá-tim-bum, Castelo Rá-tim-bum, X-Tudo e Cocoricó, entre outros. Em 1997, lançou o álbum Meu Pé Meu Querido Pé, reunindo temas de programas Cocoricó, Castelo Rá-Tim-Bum, Banho de Aventura, Glub-Glub e X-Tudo, além de incluir uma versão musicalizada do poema "Plutão", do escritor Olavo Bilac. Conheça mais sobre Hélio Ziskind através da entrevista que Júlio fez neste episódio da TV Cocoricó!</p>
      <p class="grd">Parabéns ao vencedor</p>
      <p class="grd"><span>NOME completo DA CRIANÇA <br/>
        Cidade - UF</span>
      </p>
    </div>
  </div>
  <!--/row-->
  <!-- paginacao -->
  <div class="pagination pagination-centered">
    <ul>
      <li class="anterior"><a title="Anterior" href="javascript: goToPage(1);"></a></li>
      <li class="active"><a href="javascript: goToPage(1);">1</a></li>
      <li><a href="javascript: goToPage(2);">2</a></li>
      <li><a href="javascript: goToPage(3);">3</a></li>
      <li><a href="javascript: goToPage(4);">4</a></li>
      <li title="Próximo" class="proximo"><a href="javascript: goToPage(2);"></a></li>
    </ul>
  </div>
  <!-- paginacao -->
  <!--row-->
  <div class="row-fluid conteudo destaques ytb">
    <ul id="convidados">
      <?php foreach($pager->getResults() as $d): ?>
        <li class="span4">
          <a href="<?php echo $d->retriveUrl() ?>" title="<?php echo $d->getTitle() ?>">
            <img class="span12" src="http://img.youtube.com/vi/<?php echo $d->AssetVideo->getYoutubeId() ?>/0.jpg" alt="<?php echo $d->getTitle() ?>" />
            <p><?php $tam=33; $str=$d->getTitle(); mb_internal_encoding("UTF-8"); if(strlen($str) <= $tam) echo $str; else echo mb_substr($str, 0, $tam-1)."&hellip;" ?></p>
          </a>
        </li>
      <?php endforeach; ?>
    </ul>
  </div>
  <!-- /row-->
  <!-- paginacao -->
  <div class="pagination pagination-centered">
    <ul>
      <li class="anterior"><a title="Anterior" href="javascript: goToPage(1);"></a></li>
      <li class="active"><a href="javascript: goToPage(1);">1</a></li>
      <li><a href="javascript: goToPage(2);">2</a></li>
      <li><a href="javascript: goToPage(3);">3</a></li>
      <li><a href="javascript: goToPage(4);">4</a></li>
      <li title="Próximo" class="proximo"><a href="javascript: goToPage(2);"></a></li>
    </ul>
  </div>
  <!-- paginacao -->
  
  
  <!-- rodapé-->
  <div class="row-fluid  border-top"></div>
  <?php include_partial_from_folder('sites/cocorico', 'global/rodape', array('siteSections' => $siteSections, 'displays' => $displays, 'section'=>$section, 'uri'=>$uri)) ?>
  <!--/rodapé-->
</div>
<!-- /container-->
