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

    <link rel="shortcut icon" href="/portal/images/icon/favicon.png" type="image/x-icon" />
    <link rel="image_src" href="/portal/images/logoCMAIS.jpg" />

    <meta name="description" content="cmais+ O portal de conteúdo da Cultura" />
    <meta name="keywords" content="cultura, educacao, infantil, jornalismo" />
    
    <link rel="stylesheet" href="/portal/css/geral.css?nocache=1234" type="text/css" />
    <link rel="stylesheet" href="http://cmais.com.br/portal/quintal/css/geralQuintal.css" type="text/css" />
    <link rel="stylesheet" href="http://cmais.com.br/portal/quintal/css/peixonauta.css" type="text/css" />
    
    <!-- scripts -->
    <script type="text/javascript" src="/portal/js/jquery-ui/js/jquery-1.5.1.min.js"></script>
    <script type="text/javascript" src="/portal/js/jcarousel/lib/jquery.jcarousel.min.js"></script>
    <script type="text/javascript" src="/portal/js/portal.js"></script>

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

  <div class="allWrapper">

  <?php use_helper('I18N', 'Date') ?>
  <?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'asset' => $asset, 'section' => $section)) ?>

      <div class="contentWrapper" align="center">


      <div class="content">
        <?php include_partial_from_folder('sites/quintaldacultura', 'global/menu') ?>
        <hr />

        <div class="conteudo" id="peixonauta">

          <div class="conteudoWrapper">
            
            <div class="menuVoltar">
                <a class="voltar" href="/quintaldacultura"><span class="ico-voltar"></span><span class="tit">Quintal</span></a>
                <a href="/quintaldacultura/jogos" class="voltarBig"><span class="ico-voltar"></span><span class="tit">Jogos</span></a>
                <p class="titulo"><span class="ico-voltar"></span><?php echo $section->getTitle()?></p>
            </div>
            <div class="listao">

           	<p><?php echo $section->getDescription()?></p>
              
           	<?php if(count($pager) > 0): ?>
              <!-- BOX LISTAO -->
          
                <ul>
                  <?php foreach($pager->getResults() as $d): ?>
                    <?php $related = $d->retriveRelatedAssetsByRelationType('preview'); ?>
                    <li><!-- 1 -->
                      <a href="<?php echo $d->retriveUrl() ?>" title="<?php echo $d->getTitle() ?>">
                        
                      <span><?php echo $d->getTitle() ?></span>
                      
            <img src="<?php echo $related[0]->retriveImageUrlByImageUsage("image-4") ?>" alt="<?php echo $d->getTitle() ?>" style="width:404px"/>
            </a>
            <p><?php echo $d->getDescription() ?></p>
                       <a class="jogar" href="<?php echo $d->retriveUrl() ?>" title="Jogar">Jogar</a>
                    </li>
                    
                  <?php endforeach; ?>
               
              <!-- /BOX LISTAO -->
            <?php endif; ?>

             
              </ul>
            </div>
           

      
            
          </div>

   
            
        </div>

          <hr />

        </div>

      <?php include_partial_from_folder('sites/quintaldacultura', 'global/footer') ?>

    </div>

    <?php include_partial_from_folder('blocks', 'global/footer') ?>

  </div>
  <div id="miolo"></div>
  <div class="box-lateral"></div>
  

  
</body>
</html>