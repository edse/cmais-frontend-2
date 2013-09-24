<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/sites/<?php echo $section->Site->getSlug() ?>.css" type="text/css" />
<?php use_helper('I18N', 'Date') ?>
<?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'section' => $section)) ?>
<!--CONTANER-->
<div class="container amigo-secreto">
  <!--CAPA-SITE-->
  <div id="capa-site">
  <?php if(isset($displays['destaque-principal'])): ?>
    <?php if(count($displays['destaque-principal']) > 0): ?>
      <?php foreach($displays['destaque-principal'] as $k=>$d): ?>
        <div id="video-as">
          <?php echo html_entity_decode($d->Asset->AssetContent->render()) ?>  
       	</div>
      <?php endforeach; ?>
    <?php endif;?>
  <?php endif; ?>        
    <div id="btn-dica-as" class="btn-dica-as" >
      <img src="http://cmais.com.br/portal/images/capaPrograma/amigosecreto/btn_home.png" width="262" height="276" border="0" usemap="#map-dica-as" />
      <map name="map-dica-as" id="map-dica-as" title="">
        <area href="/amigosecreto/dicas" shape="poly" coords="2,76,13,43,76,6,125,0,207,4,260,24,255,33,146,110,70,131,32,122,5,97" href="#" />
      </map>
    </div> 
  </div>
  <!--/CAPA-SITE--> 
</div>
<!--/CONTANER-->
<script>
  $(document).ready(function(){
    $('#map-dica-as').hover(function(){
     $('#btn-dica-as').addClass('btn-dica-as-over');
    });
        $('#map-dica-as').mouseleave(function(){
     $('#btn-dica-as').removeClass('btn-dica-as-over');
    });
  });
</script>