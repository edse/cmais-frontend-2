<!-- BOOTSTRAP CSS -->
<link rel="stylesheet" href="http://cmais.com.br/portal/js/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="http://cmais.com.br/portal/js/bootstrap/css/bootstrap-responsive.min.css">
<link rel="stylesheet" href="http://cmais.com.br/portal/univesptv/css/cursos.css" type="text/css" />
<link href='http://fonts.googleapis.com/css?family=Roboto:300' rel='stylesheet' type='text/css'>
<!-- /BOOTSTRAP CSS -->
<script type="text/javascript" src="http://cmais.com.br/portal/js/mediaplayer/swfobject.js"></script>
<script src="http://cmais.com.br/portal/js/bootstrap/bootstrap.min.js"></script>
<!-- / JS BOOTSTRAP -->
<script type="text/javascript">
	$(function(){
	    $("body").addClass('bg-interna');
	}); 
</script>


<?php use_helper('I18N', 'Date') ?>
<?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'section' => $section)) ?>

<div class="bg-chamada">
  <?php if(isset($displays["alerta"])) include_partial_from_folder('blocks','global/breakingnews', array('displays' => $displays["alerta"])) ?>
</div>
<div class="bg-site interna"></div>
<!-- CAPA SITE -->
<div id="capa-site" class="internas">
  <!-- BARRA SITE -->
  <div id="barra-site">
    <div class="topo-programa">
    	<?php include_partial_from_folder('sites/univesptv','global/topo', array('site'=>$site)) ?>	
    </div>
  </div>
  <!-- /BARRA SITE -->
  <!-- MIOLO -->
  <div id="miolo">
    <!-- BOX LATERAL -->
    <?php include_partial_from_folder('blocks','global/shortcuts') ?>
    <!-- BOX LATERAL -->
    
    <!-- CONTEUDO PAGINA -->
    <div id="conteudo-pagina">
      <!-- CAPA -->
      <div class="capa grid3" id="cursos">
        <div class="row">
          <div class="span10">
            <ul class="breadcrumb">
              <li><a href="/">Univesptv</a><span class="divider">&gt;</span></li>
              <li><a href="/cursos">Cursos</a><span class="divider">&gt;</span></li>
              <li class="active"> <?php echo $section->getTitle() ?> </li>
            </ul>
            <p class="titulos"><?php echo $section->getTitle() ?></p>
            <?php if (isset($displays['destaques'])): ?>
            	<?php if (count($displays['destaques']) > 0): ?>
            <div class="span10 cursos">
              <ul class="thumbnails">
              	<?php foreach($displays['destaques'] as $k=>$d): ?>
                <li class="span3">
                <div class="thumbnail">
                  <a href="<?php echo $d->retriveUrl(); ?>" title="<?php echo $d->getTitle(); ?>">
                  	<img alt="<?php echo $d->getTitle(); ?>" src="<?php echo $d->retriveImageUrlByImageUsage('image-13') ?>">
                  </a>
                  <div class="caption">
                    <h5><a href="<?php echo $d->retriveUrl(); ?>" title="<?php echo $d->getTitle(); ?>"><?php echo $d->getTitle(); ?></a></h5>
                    <a href="<?php echo $d->retriveUrl(); ?>"><?php echo $d->getDescription(); ?></a>
                  </div>
                </div>
                </li>
                <?php endforeach; ?>
              </ul>
            </div>
            	<?php endif; ?>          
            <?php endif; ?>
        
            
          </div>
        </div>
         
      </div>
      <!-- /CAPA -->
      
			<?php include_partial_from_folder('sites/univesptv', 'global/apoio') ?>
			
    </div>
    <!-- /CONTEUDO PAGINA -->
  </div>
  <!-- /MIOLO -->
</div>
<!-- /CAPA SITE -->