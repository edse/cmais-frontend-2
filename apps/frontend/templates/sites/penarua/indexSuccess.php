<!-- bg tudo -->
<div class="bg-tudo">
<link rel="stylesheet" href="/portal/css/tvcultura/sites/<?php echo $section->Site->getSlug() ?>.css" type="text/css" />

<?php use_helper('I18N', 'Date') ?>
<?php include_partial_from_folder('blocks', 'global/menu', array('channels' => $channels, 'live' => $live, 'editorials' => $editorials, 'site' => $site, 'mainSite' => $mainSite, 'coming' => $coming, 'important' => $important, 'asset' => $asset, 'section' => $section)) ?>

<script>
$(function() {
	$('body').addClass("home");
});
</script>

<script src="/portal/js/jclock/jquery.jclock-1.2.0.js" type="text/javascript"></script> 


    <!-- CAPA SITE -->
    <div id="capa-site">

      

      <!-- BARRA SITE -->
      <div id="barra-site">
      	<?php if(isset($displays["alerta"])) include_partial_from_folder('blocks','global/breakingnews', array('displays' => $displays["alerta"])) ?>
        <div class="topo-programa">
          <?php if(isset($program) && $program->id > 0): ?>
          <h2>
            <a href="<?php echo $program->retriveUrl() ?>">
              <img src="http://midia.cmais.com.br/programs/<?php echo $program->getImageThumb() ?>" alt="<?php echo $program->getTitle() ?>" title="<?php echo $program->getTitle() ?>" />
            </a>
          </h2>
          <?php endif; ?>

          <?php if(isset($program) && $program->id > 0): ?>
          <?php include_partial_from_folder('blocks','global/like', array('site' => $site, 'uri' => $uri, 'program' => $program)) ?>
          <?php endif; ?>                   
        </div>        
      </div>
      <!-- /BARRA SITE -->

     <!-- MIOLO -->
      <div id="miolo">
     
      	  <?php //include_partial_from_folder('blocks','global/shortcuts') ?>
   
		  <div class="fale-conosco">
          	<a href="/penarua/fale-conosco" title="Fale Conosco" name="Fale Conosco">Fale Conosco</a>
          </div>          
          <div class="relogio">
          	<a href="/penarua/sobre-o-programa" title="Apresentadores" name="Apresentadores"><img src="/portal/images/capaPrograma/penarua/fotoApresentadores.jpg" alt="Apresentadores" /></a>
          	<script type="text/javascript">
				$(function($) {
				    $('.jclock').jclock();
				});
			</script>
			<div id="changeDisplay">				
			  <div class="jclock"></div>
			  <!--div id='weather_widget'></div-->
			</div>
		  </div>
          <div class="placas">
          	<div class="pl-fq">
          		<a href="https://foursquare.com/tvcultura" target="_blank">Four Square</a>
          	</div>
          	<div class="pl-fb">
          		<a href="https://www.facebook.com/penarua" target="_blank">Facebook</a>
          	</div>
          	<div class="pl-tw">
          		<a href="http://twitter.com/pe_na_rua" target="_blank">Twitter</a>
          	</div>
          </div>
          <div class="video">
            <?php if(isset($displays['destaque-principal'])): ?>
              <?php if($displays["destaque-principal"][0]->Asset->AssetType->getSlug() == "video"): ?>
            <iframe title="<?php echo $displays["destaque-principal"][0]->getTitle() ?>" width="451" height="336" src="http://www.youtube.com/embed/<?php echo $displays["destaque-principal"][0]->Asset->AssetVideo->getYoutubeId(); ?>?rel=0&wmode=transparent#t=0m0s" frameborder="0" allowfullscreen></iframe>
              <?php endif; ?>
            <?php endif; ?>
            <a href="/penarua/videos">+ v&iacute;deos</a> 
          </div>          
          <!--div class="horario"></div-->
          <div class="carro">
          	<a class="dica" href="/penarua/dica-de-hoje"></a>
          	<a class="blog" href="/penarua/blog"></a>
          </div>
      </div>
      <!-- /MIOLO -->
      
    </div>
    <!-- /CAPA SITE -->
    
<div/>
<!-- /bg tudo -->

