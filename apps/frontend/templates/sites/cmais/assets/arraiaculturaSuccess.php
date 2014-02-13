<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/secoes/defaultPrograma.css" type="text/css" />
<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/secoes/programaBlog.css" type="text/css" />
<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/sites/arraiacultura.css" type="text/css" />



<!--FANCYBOX-->
<script type="text/javascript" src="http://cmais.com.br/portal/js/fancybox2.1.4/jquery.fancybox.pack.js" ></script>
<script type="text/javascript" src="http://cmais.com.br/portal/js/fancybox2.1.4/helpers/jquery.fancybox-media.js" ></script>
<link rel="stylesheet" href="http://cmais.com.br/portal/js/fancybox2.1.4/jquery.fancybox.css" type="text/css" media="screen" />
<!--/FANCYBOX-->
<link href="/js/audioplayer/jPlayer.Blue.Monday.2.0.0/jplayer.blue.monday.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="/js/audioplayer/jplayer_min.js"></script>

<?php use_helper('I18N', 'Date')?>
<?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'asset' => $asset, 'section' => $section))?>

<div class="bg-chamada">
  <?php if(isset($displays["alerta"])) include_partial_from_folder('blocks','global/breakingnews', array('displays' => $displays["alerta"]))  ?>
</div>

<!-- CAPA SITE -->
<div id="capa-site">
  <!-- BARRA SITE -->
  <div id="barra-site">
    <div class="topo-programa">
      <?php if(isset($program) && $program->id > 0):      ?>
      <h2><a href="<?php echo $program->retriveUrl() ?>" style="text-decoration: none;"> <?php if($program->getImageThumb() != ""): ?>
        <img src="http://midia.cmais.com.br/programs/<?php echo $program->getImageThumb() ?>" alt="<?php echo $program->getTitle() ?>" title="<?php echo $program->getTitle() ?>" /> <?php else:?>
      <h3 class="tit-pagina grid1"><span>#A</span>rraia<span>C</span>ultura</h3> <?php endif;?></a></h2>
      <?php endif;?>
    </div>
    <?php if(isset($siteSections) && $site->getType() != "Portal"):    ?>
    <!-- box-topo -->
    <div class="box-topo grid3">
      <?php include_partial_from_folder('blocks','global/sections-menu', array('siteSections' => $siteSections))      ?>

      <?php if(isset($section->slug)):      ?>
      <?php if(!in_array(strtolower($section->getSlug()), array('home','homepage','home-page','index'))):      ?>
      <div class="navegacao txt-10">
        <a href="<?php echo $site->retriveUrl() ?>" title="Home">Home</a>
        <span>&gt;</span>
        <a href="<?php echo $asset->retriveUrl()?>" title="<?php echo $asset->getTitle()?>"><?php echo $asset->getTitle()        ?></a>
      </div>
      <?php endif;?>
      <?php endif;?>
    </div>
    <!-- /box-topo -->
    <?php endif;?>
  </div>
  <!-- /BARRA SITE -->
  <!-- MIOLO -->
  <div id="miolo">
    <!-- BOX LATERAL -->
    <?php include_partial_from_folder('blocks','global/shortcuts')    ?>
    <!-- BOX LATERAL -->
    <!-- CONTEUDO PAGINA -->
    <div id="conteudo-pagina">
      <!-- CAPA -->
      <div class="capa grid3">
        <!-- ESQUERDA -->
        <div id="esquerda" class="grid2">
          <!-- NOTICIA INTERNA -->
          <div class="box-interna grid2">
            <h3><?php echo $asset->getTitle() ?></h3>
            <p><?php echo $asset->getDescription()  ?></p>
            <div class="assinatura grid2">
              <p class="sup"><?php echo $asset->AssetContent->getAuthor() ?> <span><?php echo $asset->retriveLabel() ?></span></p>
              <p class="inf"><?php echo format_date($asset->getCreatedAt(), "g") ?>- Atualizado em <?php echo format_date($asset->getUpdatedAt(), "g") ?></p>
              <!--
              <div class="acessibilidade">
              <a href="#" class="zoom">+A</a>
              <a href="#" class="zoom">-A</a>
              </div>
              -->
              <?php include_partial_from_folder('blocks','global/share-small', array('site' => $site, 'uri' => $uri)) ?>
            </div>
            <div class="texto">
              <?php if($asset->AssetType->getSlug() == "person"):  ?>
              <?php echo html_entity_decode($asset->AssetPerson->getBio()) ?>
              <?php else:?>
              <?php echo html_entity_decode($asset->AssetContent->render()) ?>
              <?php endif;?>
            </div>
            <?php $relacionados = $asset -> retriveRelatedAssetsByRelationType('Asset Relacionado');?>
            <?php if(count($relacionados) > 0): ?>

            <!-- SAIBA MAIS -->
            <div class="box-padrao grid2" style="margin-bottom: 20px;">
              <div id="saibamais">
                <h4>saiba +</h4>
                <ul class="conteudo">
                  <?php foreach($relacionados as $k=>$d): ?>
                  <li style="width: auto;"><a class="titulos" href="<?php echo $d->retriveUrl()?>" style="width: auto;"><?php echo $d->getTitle() ?></a><!--
                  <?php if($d->retriveImageUrlByImageUsage("image-1") != ""): ?>
                  <a href="<?php echo $d->retriveUrl()?>" class="img-90x54" style="width: auto">
                  <img src="<?php echo $d->retriveImageUrlByImageUsage("image-1-b") ?>" alt="<?php echo $d->getTitle() ?>" title="<?php echo $d->getTitle() ?>" style="width: auto" />
                  </a>
                  <?php endif; ?>
                  --><!--p><?php echo $d->getDescription()?></p--></li>
                  <?php endforeach;?>
                </ul>
              </div>
            </div>
            <!-- SAIBA MAIS -->
            <?php endif;?>

            <?php include_partial_from_folder('blocks','global/share-2c', array('site' => $site, 'uri' => $uri, 'asset' => $asset)) ?>
          </div>
          <!-- /NOTICIA INTERNA -->
        </div>
        <!-- /ESQUERDA -->
        <!-- DIREITA -->
        <div id="direita" class="grid1">
          <!-- BOX PADRAO twt -->
          <div class="box-padrao grid1">
            <span class="aba"></span>
            <h4><span class="twt"></span>Divulgue sua festa</h4>
            <p>Quando estiver em alguma festa junina divulgue para seus seguidores com as informações e a hashtag #ArraiaCultura no Twitter!</p>
            
          </div>
          <!-- BOX PADRAO twt -->
          
          <!-- BOX PADRAO instagram -->
          <div class="box-padrao grid1">
            <span class="aba"></span>
            <h4><span class="instagram"></span>instagram #ArraiaCultura</h4>
            <p>Marque suas fotos com a hashtag #ArraiaCultura no aplicativo e participe!</p>
            <div class="box-instagram">
              
              <!--embedagram-->
              <!--ul id="embedagram"></ul-->
              <!--/embedagram-->
              
              <div class="instagram-box"></div>
              
              <!-- SnapWidget -->
              <!--iframe src="http://snapwidget.com/in/?h=YXJyYWlhY3VsdHVyYXxpbnwxMzB8MnwzfGQzMGIyZXxub3wxMHxub25l" allowTransparency="true" frameborder="0" scrolling="no" style="border:none; overflow:hidden; width:280px; height: 420px" ></iframe-->
            </div> 
            
            
          </div>
          <!-- BOX PADRAO instagram-->
          
         
        

        
          <!-- BOX PUBLICIDADE -->
          <div class="box-publicidade grid1">
            <!-- programas-assets-300x250 -->
            <script type='text/javascript'>
              GA_googleFillSlot("cmais-assets-300x250");

            </script>
          </div>
          <!-- / BOX PUBLICIDADE -->
        </div>
        <!-- /DIREITA -->
      </div>
      <!-- /capa -->
    </div>
    <!-- /CONTEUDO PAGINA -->
  </div>
  <!-- /MIOLO -->
</div>
<!-- /CAPA SITE -->
<!--fancybox-->
<script type="text/javascript" src="http://cmais.com.br/portal/js/jquery-instagram/jquery.instagram.js"></script>
<script>

var url = new Array;
var href = new Array;
$(".instagram-box").instagram({
  hash: 'arraiacultura',
  clientId: 'acc3ed4dfcd14106b4805f0248604b8c',
  show : 6,
  onComplete:function(){
    console.log();
    $('.instagram-box a').addClass('fancybox-media').attr('rel','instagram');
    $('.instagram-box a img').each(function(i){
      href[i] = $(this).attr("src");
      url = href[i].split("_");
      href[i] = url[0] + "_7.jpg";  
      console.log(href[i]);     
    });
    $('.instagram-box a').each(function(i){
      var linkImg = href[i];
      $(this).attr('href', linkImg);
    })
  }
});

$('.fancybox-media').fancybox({
  openEffect  : 'none',
  closeEffect : 'none',
  nextEffect  : 'none',
  prevEffect  : 'none', 
  padding : 0,
  helpers : {
    title : {
      type : 'float'
    },
    media : {}
  }
}); 

</script> 
<!--/fancybox -->

 