<?php 
$respostas = Doctrine_Query::create()
  ->select('aa.*')
  ->from('AssetAnswer aa')
  ->where('aa.asset_question_id = ?', (int)$displays["enquete"][0]->Asset->AssetQuestion->id)
  ->execute();
  
$q = $displays["enquete"][0]->Asset->AssetQuestion->getQuestion();
?>

<link rel="stylesheet" href="/portal/css/tvcultura/geral.css" type="text/css" />
<link rel="stylesheet" href="/portal/css/tvcultura/sites/<?php echo $site->getSlug(); ?>.css" type="text/css" />

<?php use_helper('I18N', 'Date') ?>
<!-- TOPO CMAIS REDUZIDO-->
<?php include_partial_from_folder('blocks','global/menu-reduzido') ?>
<!-- /TOPO CMAIS REDUZIDO-->

  <!--GOOGLE ANALYTICS-->
  <script type="text/javascript">
      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-22770265-1']);
      _gaq.push(['_setDomainName', 'cmais.com.br']);
      _gaq.push(['_setAllowHash', 'false']);
      _gaq.push(['_trackPageview']);
      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();
  </script>
<!--PALCI-->
<div id="palco">
    <!--BACK-->
      <div id="back">
      <!-- CAPA SITE -->
      <div id="capa-site">
        
        <!--LOGO TVCOCORICO -->
        <h1>
          <a href="/tvcocorico" title="TV Cocórico" target="_self">
            <img src="/portal/images/capaPrograma/cocoricoHome/logo-tv-cocorico.png" alt="TV Cocorico" />
        </a>
        </h1>  
        <!--LOGO TVCOCORICO -->
        
        <!--MENU-->
        <?php include_partial_from_folder('sites/tvcocorico','global/menu') ?>  
        <!--/MENU-->  
              
        <!-- HORARIO -->
        <div id="horario-tv">
          <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
          <a href="http://youtube.com/tvcocorico" target="_blank" title="Canal TV Cocoricó">
            <img src="/portal/images/capaPrograma/cocoricoHome/youtube-tvcocorico.png" alt="TV Cocorico" />
          </a>
        </div>
        <!-- HORARIO -->
        
        <!--VIDEO-->
        <div id="video-tv-cocorico">
          <img src="/portal/images/capaPrograma/cocoricoHome/no_ar.jpg" />
        </div>
        <!--/VIDEO-->
        
        <!--PROMOCAO-->  
        <?php // include_partial_from_folder('sites/tvcocorico', 'global/promocao') ?>          
        <!--/PROMOCAO-->
        
        <!--PROMOCAO-->  
        <?php include_partial_from_folder('sites/tvcocorico', 'global/enquete', array('respostas' => $respostas, 'q' => $q)) ?>          
        <!--/PROMOCAO-->
          
      </div>
      <!-- /CAPA SITE -->
      
      
      <!-- HOLOFOTES -->
      <div id="holofote-01" class="holofote"></div>
      <div id="holofote-02" class="holofote"></div>
      <div id="holofote-03" class="holofote"></div>
      <div id="holofote-04" class="holofote"></div>
      <div id="holofote-05" class="holofote"></div>
      <div id="holofote-06" class="holofote"></div>
      <!-- /HOLOFOTES -->
   </div>
   <!--/BACK-->
</div>
<!--/PALCO-->