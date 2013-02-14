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
    <h3>Hélio Ziskind</h3>
    <span class="data">31/08/12</span>
    <a class="span6"><img alt="Hélio Ziskind" src="http://midia.cmais.com.br/assets/image/original/41566c83254338a9def287f94f71fd20e113fc00.jpg"></a>
    <div class="span6">
      <p class="frase"><span></span>eu comecei a fazer música infantil quando eu vim trabalhar na tv cultura <span class="last"></span></p>
      <p></p>
      <p>Hélio Ziskind nasceu em 1955, é músico e compositor. Na TV Cultura compôs temas para os programas como Rá-tim-bum, Castelo Rá-tim-bum, X-Tudo e Cocoricó, entre outros. Em 1997, lançou o álbum Meu Pé Meu Querido Pé, reunindo temas de programas Cocoricó, Castelo Rá-Tim-Bum, Banho de Aventura, Glub-Glub e X-Tudo, além de incluir uma versão musicalizada do poema "Plutão", do escritor Olavo Bilac. Conheça mais sobre Hélio Ziskind através da entrevista que Júlio fez neste episódio da TV Cocoricó!</p>
      <p></p>
    </div>
  </div>
  <!--/row-->
 
  
  <!-- rodapé-->
  <div class="row-fluid  border-top"></div>
  <?php include_partial_from_folder('sites/cocorico', 'global/rodape', array('siteSections' => $siteSections, 'displays' => $displays, 'section'=>$section, 'uri'=>$uri)) ?>
  <!--/rodapé-->
</div>
<!-- /container-->
