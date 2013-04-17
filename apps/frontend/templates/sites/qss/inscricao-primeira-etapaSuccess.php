<link rel="stylesheet" href="/portal/css/tvcultura/sites/<?php echo $section->Site->getSlug() ?>.css" type="text/css" />
<link rel="stylesheet" href="/portal/css/tvcultura/sites/transito.css" type="text/css" />
<?php use_helper('I18N', 'Date') ?>
<?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'section' => $section)) ?>

<!-- CAPA SITE -->
<div id="capa-site">
  <img src="/portal/images/capaPrograma/qss/background-qss.jpg" alt="Quem Sabe Sabe">    
  <!-- curtir -->
    <div class="redes">
      <div class="curtir">
        <div style="display:block; float: left; margin-right:10px;">
        <g:plusone size="medium" count="false"></g:plusone>
        </div>
        <fb:like href="<?php if($site->getFacebookUrl()): ?><?php echo $site->getFacebookUrl() ?><?php else: ?><?php echo $uri ?><?php endif; ?>" layout="button_count" show_faces="false" send="true" width="160"></fb:like>
      </div>
      <!--<a href="http://twitter.com/share" class="twitter-share-button" data-count="horizontal" data-via="<?php if($site->getTwitterAccount()): ?><?php echo $site->getTwitterAccount() ?><?php else: ?>tvcultura<?php endif; ?>">Tweet</a>-->
    </div>
    <!-- /curtir -->
      <p>Faça um vídeo de no máximo 1 minuto, contando um pouco de você.</p>
      
      <div id="youtube">
        <a name="ytd">
        <script type="text/javascript" src="https://cmais-tvcultura.appspot.com/js/ytd-embed.js"></script>
        <script type="text/javascript">
        var ytdInitFunction = function() {
          var ytd = new Ytd();
          ytd.setAssignmentId("1001");
          ytd.setCallToAction("callToActionId-1001");
          var containerWidth = 350;
          var containerHeight = 550;
          ytd.setYtdContainer("ytdContainer-1001", containerWidth, containerHeight);
          ytd.ready();
        };
        if (window.addEventListener) {
          window.addEventListener("load", ytdInitFunction, false);
        } else if (window.attachEvent) {
          window.attachEvent("onload", ytdInitFunction);
        }
        </script>
        </a>
        <div class="youtube">
          <a name="ytd"></a>
          <a id="callToActionId-1001" href="javascript:void(0);" class="upload"></a>
          <div id="ytdContainer-1001"></div>
        </div> 
      </div>      
            
      
</div> 
<!-- /capa site-->