<!DOCTYPE html>
<html xmlns:fb="http://www.facebook.com/2008/fbml" xmlns:og="http://opengraphprotocol.org/schema/"> 
  <head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />

    <?php include_title() ?>
    <?php include_metas() ?>
    <?php include_meta_props() ?>

    <meta name="google-site-verification" content="sPxYSUnxlnoyUdly_hNwIHma64gh9iosgNcOBrZBYdo" />

    <meta property="fb:admins" content="100000889563712"/>
    <meta property="fb:app_id" content="124792594261614"/>

    <link rel="shortcut icon" href="http://cmais.com.br/portal/images/icon/favicon.png" type="image/x-icon" />
    <link rel="image_src" href="http://cmais.com.br/portal/images/logoCMAIS.jpg" />

    <meta name="description" content="cmais+ O portal de conteúdo da Cultura" />
    <meta name="keywords" content="cultura, educacao, infantil, jornalismo" />
    
    <link rel="stylesheet" href="http://cmais.com.br/portal/css/geral.css?nocache=1234" type="text/css" />
    <link rel="stylesheet" href="http://cmais.com.br/portal/quintal/css/geralQuintal.css" type="text/css" />
    
    <!-- scripts -->
    <script type="text/javascript" src="http://cmais.com.br/portal/js/jquery-ui/js/jquery-1.5.1.min.js"></script>
    <script type="text/javascript" src="http://cmais.com.br/portal/js/jcarousel/lib/jquery.jcarousel.min.js"></script>
    <script type="text/javascript" src="http://cmais.com.br/portal/js/portal.js"></script>

    <script type="text/javascript">
    //carrocel
    $(function(){
      $('.carrossel').jcarousel({
        wrap: "both"
      });
    })
    </script>
  </head>
  <script type="text/javascript"> 
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-22770265-1']);
    _gaq.push(['_setDomainName', '.cmais.com.br']);
    _gaq.push(['_trackPageview']);
   
    (function() {
      var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
      ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();
  </script> 
  <body>


  <?php use_helper('I18N', 'Date') ?>
  <?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'asset' => $asset, 'section' => $section)) ?>

      <div class="contentWrapper" align="center">


      <div class="content internas">
        <?php include_partial_from_folder('sites/quintaldacultura', 'global/menu') ?>
           <div class="conteudo">

          <div class="conteudoWrapper">
            <?php include_partial_from_folder('sites/quintaldacultura', 'global/itensBackground') ?>
        <ul class="sidebar">
          <li class="sprite-balao-categoria">Escolha por <br/>categoria</li>
          <li class="ativo"><a href="#" title="Todos">Todos</a></li>
          <li><a href="#" title="Peixonata">Peixonata</a></li>
          <li><a href="#" title="Peixonata">Peixonata</a></li>
          <li><a href="#" title="Peixonata">Peixonata</a></li>
          <li><a href="#" title="Peixonata">Peixonata</a></li>
          <li><a href="#" title="Peixonata">Peixonata</a></li>
         
        </ul>
        <div class="lista">
          <ul class="navegacao">
            <li><a href="#" title="Quintal da Cultura">Quintal da Cultura</a></li>
            <li><span>/</span><a href="#" title="Vídeos">Jogos</a></li>
          </ul>
          <h2><?php echo $section->getTitle()?></h2>
          <form id="busca">
            <input type="search" value="Pesquisar" />
            <button class="sprite-ico-busca"></button>
          </form>
        
          <ul class="assets">
          	
            <?php if(count($pager) > 0): ?>
              <?php foreach($pager->getResults() as $d): ?>
                <?php $related = $d->retriveRelatedAssetsByRelationType('preview'); ?>
                <li>
                 	 <a href="/quintaldacultura/<?php echo $section->slug ?>/<?php echo $d->slug ?>" title="<?php echo $d->getTitle() ?>">
	                      <h3><?php echo $d->getTitle() ?></h3>
	          			  <img src="<?php echo $related[0]->retriveImageUrlByImageUsage("image-4-b") ?>" alt="<?php echo $d->getTitle() ?>" alt="<?php echo $d->getTitle() ?>" />
	          			  <p><?php echo $d->getDescription() ?></p>
	          			  <p class="btn">Jogar</p>
        		  	 </a>
                </li>
              <?php endforeach; ?>
            <?php endif; ?>          	
          	
          	
        </div>
        </div>
        <?php include_partial_from_folder('sites/quintaldacultura', 'global/footer') ?>
        </div>
        
        

        </div>

      

    </div>

    <?php include_partial_from_folder('blocks', 'global/footer') ?>

  <div id="miolo"></div>
  <div class="box-lateral"></div>
  

  
</body>
</html>