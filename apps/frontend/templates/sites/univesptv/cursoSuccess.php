<?php
if(isset($assets)){
  if(count($assets) >= 1 && $section->getSlug() != "home"){
    header("Location: ".$assets[0]->retriveUrl());
    die();
  }  
} 
?>	
<!-- BOOTSTRAP CSS -->
<link rel="stylesheet" href="http://cmais.com.br/portal/js/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="http://cmais.com.br/portal/js/bootstrap/css/bootstrap-responsive.min.css">
<link rel="stylesheet" href="http://cmais.com.br/portal/univesptv/css/cursos.css" />
<link href='http://fonts.googleapis.com/css?family=Roboto:300' rel='stylesheet' type='text/css'>
<!-- /BOOTSTRAP CSS -->
<script type="text/javascript" src="http://cmais.com.br/portal/js/mediaplayer/swfobject.js"></script>
<script src="http://cmais.com.br/portal/js/bootstrap/bootstrap.min.js"></script>
<script type="text/javascript">
	//carrossel
	$(function() {
		$('.carrossel'  ).jcarousel({
			scroll : 1
		});
	});
	$(function(){
	    $("body").addClass('bg-interna');
	}); 

</script>

<!-- / JS BOOTSTRAP -->
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
      <div class="capa grid3">
        <div class="row">
          <div class="span10">
            <ul class="breadcrumb">
              <li><a href="/">Univesptv</a><span class="divider">&gt;</span></li>
              <li><a href="/cursos">Cursos</a><span class="divider">&gt;</span></li>
              <li class="active"> <?php echo $site->getTitle() ?> </li>
            </ul>
            <div class="span7 esq">
              <p class="titulos grd"><?php echo $site->getTitle() ?></p>
              <div class="fb-like mg20" data-send="false" data-width="600" data-show-faces="false" data-action="recommend"></div>
              
              <!-- sobre o curso -->
			      	<?php if (isset($displays['sobre-o-curso'])): ?>
			      		<?php if (count($displays['sobre-o-curso']) > 0): ?>
              <p class="titulos"><?php echo $displays['sobre-o-curso'][0]->getTitle() ?></p>
              		<?php echo html_entity_decode($displays['sobre-o-curso'][0]->Asset->AssetContent->render()) ?>
              	<?php endif; ?>
              <?php endif; ?>
              <!--/sobre o curso-->
              
							<!-- professor -->
			      	<?php if (isset($displays['professor'])): ?>
			      		<?php if (count($displays['professor']) > 0): ?>
              <p class="titulos mg30"><?php echo $displays['professor'][0]->Block->getTitle() ?></p>
			      			<?php foreach($displays['professor'] as $k=>$d): ?>
			      				<?php if (isset($d->Asset)): ?>
			      					<?php $relatedAssets = $d->Asset->retriveRelatedAssetsByRelationType('Preview') ?>
             					<?php if (count($relatedAssets) > 0): ?>
              <a href="<?php echo $d->retriveUrl() ?>" title="<?php echo $d->getTitle() ?>">
              	<img src="<?php echo $relatedAssets[0]->retriveImageUrlByImageUsage('image-3-b') ?>" alt="<?php echo $d->getTitle() ?>" />
              </a>
             					<?php endif; ?>
              			<?php else: ?>
              				<?php if($d->getUrl()): ?>
              <a href="<?php echo $d->retriveUrl() ?>" title="<?php echo $d->getTitle() ?>">
              	<img src="<?php echo $d->retriveImageUrlByImageUsage('image-3-b') ?>" alt="<?php echo $d->getTitle() ?>" />
              </a>
              				<?php else: ?>
              <img src="<?php echo $d->retriveImageUrlByImageUsage('image-3-b') ?>" alt="<?php echo $d->getTitle() ?>" />
              				<?php endif; ?>
              			<?php endif; ?>		
              <p class="bold">
              	<?php if($d->getUrl()): ?>
              	<a href="<?php echo $d->retriveUrl() ?>" title="<?php echo $d->getTitle() ?>"><?php echo $d->getTitle() ?></a>
              	<?php else: ?>
              	<?php echo $d->getTitle() ?>
              	<?php endif; ?>
              </p>
              <p><?php echo $d->getDescription() ?></p>
              		<?php endforeach; ?>
              	<?php endif; ?>
              <?php endif; ?>
              <!--/professor2-->
              
							<!-- material de apoio -->
			      	<?php if (isset($displays['material-de-apoio'])): ?>
			      		<?php if (count($displays['material-de-apoio']) > 0): ?>
              <p class="titulos mg30"><?php echo $displays['material-de-apoio'][0]->Block->getTitle() ?></p>
              <ul class="material">
              	<?php foreach($displays['material-de-apoio'] as $d): ?>
              		<?php if (isset($d->Asset->id)): ?>
              			<?php $download = $d->Asset->retriveRelatedAssetsByRelationType('Download') ?>
              			<?php if(count($download) > 0): ?>
              				<?php foreach($download as $d): ?>
              					<?php if ($d->getAssetType() == 'File'): ?>
                <li><a href="http://midia.cmais.com.br/assets/file/original/<?php echo $d->AssetFile->getFile() ?>.<?php echo $d->AssetFile->getExtension() ?>" title="<?php echo $d->getTitle() ?>" target="_blank"><?php echo $d->getTitle() ?></a></li>
                				<?php elseif ($d->getAssetType() == 'Imagem'): ?>
                <li><a href="http://midia.cmais.com.br/assets/image/original/<?php echo $d->AssetImage->getOriginalFile() ?>" title="<?php echo $d->getTitle() ?>" target="_blank"><?php echo $d->getTitle() ?></a></li>
                				<?php elseif ($d->getAssetType() == 'Áudio'): ?>
                <li><a href="http://midia.cmais.com.br/assets/audio/original/<?php echo $d->AssetAudio->getOriginalFile() ?>" title="<?php echo $d->getTitle() ?>" target="_blank"><?php echo $d->getTitle() ?></a></li>
                				<?php endif; ?>
                			<?php endforeach; ?>
                		<?php else: ?>
                <li><?php echo html_entity_decode($displays['material-de-apoio'][0]->Asset->AssetContent->render()) ?></li>
										<?php endif; ?>
                	<?php else: ?>
								<li>
										<?php
											if ($displays['material-de-apoio'][0]->getDescription())
												echo $displays['material-de-apoio'][0]->getDescription();
											else if ($displays['material-de-apoio'][0]->getHtml())
												echo $displays['material-de-apoio'][0]->getHtml();
										?>
								</li>
											
                	<?php endif; ?>
                <?php endforeach; ?>
              </ul>
              	<?php endif; ?>
              <?php endif; ?>
              <!--/material de apoio-->
              
							<!-- bibliografia -->
			      	<?php if (isset($displays['bibliografia'])): ?>
			      		<?php if (count($displays['bibliografia']) > 0): ?>
              <p class="titulos">Bibliografia</p>
              <?php echo html_entity_decode($displays['bibliografia'][0]->Asset->AssetContent->render()) ?>
              <!--ul class="material">
                <li>COSTA, F. N. da (1993). “(Im)propriedades da Moeda”. Revista de Economia Política, Vol. 13, nº 2 (50), Abril-Junho, pp. 61-75. </li>
              </ul-->
              	<?php endif; ?>
              <?php endif; ?>
              
              <?php include_partial_from_folder('blocks','global/share-2c', array('site' => $site, 'uri' => $uri, 'asset' => $asset)) ?>
              
            </div>
            <div class="span3 dir ">
            	<?php if(count($assets) > 0): ?>
              <p class="titulos">Primeira Aula</p>
              <a class="assistir titulos" href="<?php echo $assets[0]->retriveUrl(); ?>" name="Assistir" title="Assistir à Primeira Aula">Assistir ></a>
              <?php endif; ?>
              <?php
                $sections = Doctrine_Query::create()
                  ->select('s.*')
                  ->from('Section s')
                  ->where('s.site_id = ?', $site->getId())
                  ->andWhere('s.slug != ?', 'home')
                  ->orderBy('s.title')
                  ->execute();
              ?>
              <script>
              	/*
              	$(function(){
              		$('#submitDisciplina').click(function(){
              			var url = $('#select01 :selected').val();
              			if (url != "")
	              			window.location = $('#select01 :selected').val();
	              		else
	              			alert("Escolha uma disciplina");
              		});
              	});
              	*/
              </script>
			        <?php if(count($sections) >= 1): ?>
              <form class="form-horizontal">
                <fieldset>
                  <div class="control-group">
                    <label for="select01" class="control-label titulos">Navegue pelas Disciplinas</label>
                    <div class="controls">
                      <select id="select01" onchange="if(this.options[this.selectedIndex].value!='--') self.location.href=this.options[this.selectedIndex].value;">
                        <option value=""> </option>
                      	<?php foreach($sections as $d): ?>
                        <option value="<?php echo $d->retriveUrl() ?>"<?php if($d->id == $section->id) echo 'selected="selected"'; ?>><?php echo $d->getTitle() ?></option>
                        <?php endforeach; ?>
                      </select>
                      <?php /*
                      <button class="btn" type="button" id="submitDisciplina">
                        OK
                      </button>
											 */ ?>
                    </div>
                  </div>
                </fieldset>
              </form>
              <?php endif; ?>
              
            	<?php if(count($assets) > 0): ?>
              <p class="titulos">Lista de Aulas</p>
              <ul class="lista-aulas">
	              <?php foreach($assets as $k=>$d): ?>
                <li>
                	<a href="<?php echo $d->retriveUrl() ?>" title="<?php echo $d->getTitle() ?>">
                		<span>aula <br /> <?php echo $k+1; ?></span>
                		<?php echo $d->getTitle() ?>
                	</a>
                	<p style="color:#999; font-style: italic; margin-left:63px;"><?php echo $d->getDescription() ?></p>
                </li>
                <?php endforeach; ?>
              </ul>
              <?php endif; ?>
              <!-- BOX PUBLICIDADE -->
              <div class="box-publicidade">
                <!-- univesptv-300x250 -->
                <script type='text/javascript'>
					GA_googleFillSlot("univesptv-300x250");

                </script>
              </div>
              <!-- / BOX PUBLICIDADE -->
            </div>
            
          </div>
        </div>
        
				<!-- material de apoio -->
      	<?php if (isset($displays['cursos-relacionados'])): ?>
      		<?php if (count($displays['cursos-relacionados']) > 0): ?>
         <div class="row">
          <div class="span10">
          	<p class="titulos mg20"><?php echo $displays['cursos-relacionados'][0]->Block->getTitle() ?></p>
          	<div class="carrossel cursos span10 cursos-usp jcarousel-container jcarousel-container-horizontal" style="position: relative; display: block;">
              <div class="jcarousel-clip jcarousel-clip-horizontal" style="overflow: hidden; position: relative;"><ul class="thumbnails jcarousel-list jcarousel-list-horizontal" style="overflow: hidden; position: relative; top: 0px; margin: 0px; padding: 0px; left: 0px; width: 1580px;">
              	<?php foreach ($displays['cursos-relacionados'] as $k=>$d): ?>
                <li class="span3 jcarousel-item jcarousel-item-horizontal jcarousel-item-1 jcarousel-item-1-horizontal" style="float: left; list-style: none outside none;" jcarouselindex="1">
                <div class="thumbnail">
                  <img src="<?php echo $d->retriveImageUrlByImageUsage('image-3') ?>" alt="<?php echo $d->getTitle(); ?>">
                  <div class="caption">
                    <h5><?php echo $d->getTitle() ?></h5>
                    <p><?php echo $d->getDescription() ?></p>
                  </div>
                </div>
                </li>
                <?php endforeach; ?>
              </ul></div><div class="jcarousel-prev jcarousel-prev-horizontal" style="display: block;"></div><div class="jcarousel-next jcarousel-next-horizontal" style="display: block;"></div>
            </div>
          	
          </div>
         </div>
         <?php endif; ?>
        <?php endif; ?>
      </div>
      <!-- /CAPA -->
      
			<?php include_partial_from_folder('sites/univesptv', 'global/apoio') ?>

    </div>
    <!-- /CONTEUDO PAGINA -->
  </div>
  <!-- /MIOLO -->
</div>
<!-- /CAPA SITE -->