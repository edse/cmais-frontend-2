<?php
	$site = Doctrine::getTable('Site')->findOneBySlug($_REQUEST['slug']);
		
  $asset = Doctrine_Query::create()
		->select('a.*')
		->from('Asset a, Section s, SectionAsset sa')
		->where('sa.asset_id = a.id')
		->andWhere('sa.section_id = s.id')
		->andWhere('s.slug LIKE "sobre-o-programa"')
 		->andWhere('a.site_id = ?', (int)$site->id)
 		->andWhere('a.is_active = ?', 1)
		->orderBy('a.id desc')
		->limit(1)
		->fetchOne();

?>

<!--header-->
<?php include_partial_from_folder('blocks', 'global/headerMob') ?> 
<!--/header-->

<script>
	videoPage = 1;
	contentPage = 1;
	function mobileGetVideos() {
    $.ajax({
      url: "<?php echo url_for("@homepage") ?>ajax/mobilegetvideos",
      data: "page="+videoPage+"&items=5&site=<?php echo (int)$site->id ?>",
      beforeSend: function(){
				$('#maisvideos').hide();
				$('#maisvideosLoader').show();
      },
      success: function(data){
				$('#maisvideosLoader').hide();
      	if (data != "") {
        	$('#videoList').append(data);
        	videoPage++;
          $('#maisvideos').show();
        } else
        	if (videoPage == 1)
        		$('#videos').hide();
        	else {
        		$('#maisvideos').hide();
        		$('#videoList').append('<li style="color:#000; font-size:12px">Fim dos resultados.</li>');
        	}
      }
    });
	}
	function mobileGetContents() {
    $.ajax({
      url: "<?php echo url_for("@homepage") ?>ajax/mobilegetcontents",
      data: "page="+contentPage+"&items=5&site=<?php echo (int)$site->id ?>",
      beforeSend: function(){
          $('#maisnoticias').hide();
          $('#maisnoticiasLoader').show();
        },
      success: function(data){
        $('#maisnoticiasLoader').hide();
				if (data != "") {
	        $('#contentList').append(data);
	        contentPage++;
	        $('#maisnoticias').show();
	     	} else
        	if (contentPage == 1)
        		$('#noticias').hide();
        	else {
        		$('#contentList').append('<li style="color:#000; font-size:12px">Fim dos resultados.</li>');
        		$('#maisnoticias').hide();
        	}
     	}
    });
	}
	$(document).ready(function(){
  	mobileGetVideos();
  	mobileGetContents();
  });
</script>
<div id="cmais" data-fullscreen="true">
	
	<!--PROGRAMA-->
	<div class="programa">

		<?php include_partial_from_folder('sites/m', 'global/topoPrograma', array('program'=>$site->Program)) ?>

		<!--CONTEUDO PROGRAMA-->
		<div class="grade" >

			<!--PROGRAMA ACCORDION-->
			<div class="accordin" data-role="collapsible-set">

				<!--VIDEOS-->
				<div id="videos" class="titulo" data-role="collapsible" data-collapsed="false" name="1">

					<!--TITULO VIDEOS-->
					<h3>
						<p class="hora">Vídeos</p>
						<span class="1 seta mudaPosicao"></span>
					</h3>
					<!--/TITULO VIDEOS-->

					<div class="video-item" align="center">
						<ul id="videoList">
						</ul>
						<img class="loader" id="maisvideosLoader" src="/portal/images/capaPrograma/mob/ajax-loader.gif" style="display:none">
						<a href="javascript:mobileGetVideos()" id="maisvideos" class="gradeCompleta" data-direction="slide" data-rel="external">mais vídeos</a>
					</div>
					
				</div>
				<!--/VIDEOS-->

				<!--NOTICIAS-->
				<div id="noticias" class="titulo" data-role="collapsible" data-collapsed="true" name="2">

					<!--TÍTULO NOTICIAS-->
					<h3>
						<p class="hora">Textos</p>
						<span class="2 seta"></span>
					</h3>
					<!--/TÍTULO NOTICIAS-->

					<div class="noticias"  align="center">
						<ul id="contentList">
						</ul>
						<img class="loader" id="maisnoticiasLoader" src="/portal/images/capaPrograma/mob/ajax-loader.gif" style="display:none;">
						<a href="javascript:mobileGetContents()" id="maisnoticias" class="gradeCompleta" data-rel="external">mais notícias</a>
					</div>
				</div>
				<!--/NOTICIAS-->
				
				<!--SOBRE O PROGRAMA-->
				<?php if($asset): ?>
				<div id="sobre" class="titulo" name="3">

					<!--TITULO SOBRE O PROGRAMA -->
					<div class="programa degrade"> 
						<fieldset class="ui-grid-a head">
							<div class="ui-block-a">

								<a title="Sobre o Programa" href="<?php echo url_for('@homepage') . $asset->getSlug() ?>">
									<p>Sobre o Programa</p>
									<span class="seta"></span>
								</a>
							</div>
						</fieldset>
					</div>
					<!--/TITULO SOBRE O PROGRAMA -->
					
	      </div>
				<?php else: ?>	
					<?php if($site->Program->getDescription()): ?>
				<div id="sobre" class="titulo" data-role="collapsible" data-collapsed="true" name="3">

					<!--TITULO SOBRE O PROGRAMA -->
					<h3>
						<p class="hora">Sobre o Programa</p>
						<span class="3 seta"></span>
					</h3>
					<!--/TITULO SOBRE O PROGRAMA -->

					<div class="noticias" >
						<ul>
	            <!--ITEM SOBRE O PROGRAMA-->
	            <li>
	            	<p class="sobre"><?php echo $site->Program->getDescription(); ?></p>
	            	<div class="linha2"></div>
	            </li>
	            <!--/ITEM SOBRE O PROGRAMA-->
	          </ul>
	          <?php /* <a href="<?php echo url_for('homepage') . 'm/grade' ?>" class="gradeCompleta" data-direction="slide" data-rel="external">leia mais</a> */ ?>
	        </div>
	      </div>
	      	<?php endif; ?>
	      <?php endif; ?>
	      <!--/SOBRE O PROGRAMA-->
	      
	      <?php
	      /*
	      <!--HORARIO DE REPRISE-->
	      <div class="titulo" data-role="collapsible" data-collapsed="true" name="4">
	      	
	      	<!--TITULO HORARIO DE REPRISE-->
	      	<h3>
	      		<p class="hora">Horário de reprise</p>
	      		<span class="4 seta"></span>
	      	</h3>
	        <!--/TITULO HORARIO DE REPRISE-->
	        
	        <div class="noticias" >
	        	<ul>
	            <!--ITEM REPRISE-->
	            <li>
	            	<p class="sobre"><?php echo html_entity_decode($site->Program->getSchedule()); ?></p>
	            	<div class="linha2"></div>
	            </li>
	            <!--/ITEM REPRISE-->
	          </ul>
	          <a href="http://172.20.18.133/frontend_dev.php/m/grade" class="gradeCompleta" data-direction="slide" data-rel="external">leia mais</a>
	        </div>
	        
	      </div>
	      <!--/HORARIO DE REPRISE-->
				 */
				?>

			</div>
    	<!--/PROGRAMA ACCORDION-->

		</div>
		<!--/CONTEUDO PROGRAMA-->
		
    <!-- mobile320x50 -->
    <div id="banner-320x50" class="banner">
      <script type='text/javascript'>
      GA_googleFillSlot("mobile2-320x50");
      </script>
    </div>
    <!-- mobile320x50 -->

	</div>
	<!--/PROGRAMA-->
 
<!--footer-->
<?php include_partial_from_folder('blocks', 'global/footerMob', array('site'=>$site)) ?>
<!--/footer-->