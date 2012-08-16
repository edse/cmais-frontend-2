<!-- BOOTSTRAP CSS -->
<link rel="stylesheet" href="/portal/js/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="/portal/js/bootstrap/css/bootstrap-responsive.min.css">
<link rel="stylesheet" href="/portal/univesptv/css/cursos.css" />
<!-- /BOOTSTRAP CSS -->
<script type="text/javascript" src="/portal/js/mediaplayer/swfobject.js"></script>
<script type="text/javascript" src="http://cmais.com.br/portal/js/validate/jquery.validate.js"></script>
<script src="/portal/js/bootstrap/bootstrap.min.js"></script>
<script src="/portal/js/bootstrap/tab.js"></script>
<!-- / JS BOOTSTRAP -->
<?php use_helper('I18N', 'Date')
?>
<?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'section' => $section))
?>

<div class="bg-chamada">
  <?php if(isset($displays["alerta"])) include_partial_from_folder('blocks','global/breakingnews', array('displays' => $displays["alerta"]))
  ?>
</div>
<div class="bg-site interna"></div>
<!-- CAPA SITE -->
<div id="capa-site" class="internas">
  <!-- BARRA SITE -->
  <div id="barra-site">
    <div class="topo-programa">
      <?php if(isset($program) && $program->id > 0):
      ?>
      <h2><a href="<?php echo $site->retriveUrl() ?>" style="text-decoration: none;"> <img src="/portal/images/capaPrograma/univesptv/logo.png" alt="<?php echo $program->getTitle() ?>" title="<?php echo $program->getTitle() ?>" /> </a></h2>
      <?php endif;?>
      <h2 class="cursos-livres">Cursos Livres <br /> Para Todos</h2>
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
              <li><a href="/<?php echo $site->getSlug() ?>"><?php echo $site->getTitle() ?></a><span class="divider">&gt;</span></li>
              <li class="active"> <?php echo $asset->getTitle() ?> </li>
            </ul>
            
            <div class="span7 esq">
              <p class="titulos"><?php echo $asset->getTitle() ?></p>
              <?php
	              if($asset->AssetType->getSlug() == "video") 
	                $video = $asset;
	              else if($asset->AssetType->getSlug() == "video-gallery") 
	                $video = $asset;
	              elseif($asset->AssetType->getSlug() == "content"){
	                $video = $asset->retriveRelatedAssetsByAssetTypeId(6);
	                if(count($video)<=0)
	                  $video = $asset->retriveRelatedAssetsByAssetTypeId(7);
	                $video = $video[0];
	              }
							?>
							<p>
							<?php
              	if($video->AssetVideo->getYoutubeId() != ""){
              		include_partial_from_folder('sites/univesptv','global/asset-2c-video', array('asset' => $video));
								}
              	if($video->AssetVideoGallery->getYoutubeId() != "") {
              		include_partial_from_folder('sites/univesptv','global/asset-2c-video', array('asset' => $video));
								}
							?>
              </p>
              <div class="botoes">
              	<?php //die($assetPrev); ?>
              	<?php if(isset($assetPrev)): ?>
                <a href="<?php echo $assetPrev->retriveUrl() ?>" class="btn" title="Anterior"><i class="icon-chevron-left icon-white"></i> Anterior</a>
                <?php endif; ?>
                <?php if(isset($assetNext)): ?>
                <a href="<?php echo $assetNext->retriveUrl() ?>" class="btn" title="Próximo">Próximo<i class="icon-chevron-right icon-white"></i></a>
                <?php endif; ?>
              </div>
              <div class="fb-like" data-send="false" data-width="450" data-show-faces="false" data-action="recommend"></div>
              <div class="descricao">
                <a class="titulos" href="#"><?php echo $video->getTitle(); ?></a>
                <p><?php echo $asset->getDescription() ?></p>
              </div>
							<?php
								if($asset->AssetType->getSlug() == "content") 
								echo html_entity_decode($asset->AssetContent->render());
							?>
              <?php $material = $asset->retriveRelatedAssetsByRelationType('Download'); ?>
              <?php if (count($material) > 0): ?>
              <p class="titulos">Material de apoio</p>
              <ul class="material">
	        			<?php foreach($material as $d): ?>
	        				<?php if ($d->getAssetType() == 'File'): ?>
			          <li><a href="http://midia.cmais.com.br/assets/file/original/<?php echo $d->AssetFile->getFile() ?>.<?php echo $d->AssetFile->getExtension() ?>" title="<?php echo $d->getTitle() ?>" target="_blank"><?php echo $d->getTitle() ?></a></li>
	          			<?php elseif ($d->getAssetType() == 'Imagem'): ?>
			          <li><a href="http://midia.cmais.com.br/assets/image/original/<?php echo $d->AssetImage->getOriginalFile() ?>" title="<?php echo $d->getTitle() ?>" target="_blank"><?php echo $d->getTitle() ?></a></li>
	          			<?php elseif ($d->getAssetType() == 'Áudio'): ?>
			          <li><a href="http://midia.cmais.com.br/assets/audio/original/<?php echo $d->AssetAudio->getOriginalFile() ?>" title="<?php echo $d->getTitle() ?>" target="_blank"><?php echo $d->getTitle() ?></a></li>
	          			<?php endif; ?>
	          		<?php endforeach; ?>
              </ul>
              <?php endif; ?>
              
              <?php include_partial_from_folder('blocks','global/share-2c', array('site' => $site, 'uri' => $uri)) ?>
              
            </div>
            <div class="span3 dir">
              
              <script type="text/javascript">
								$('#myTab a').click(function(e) {
									e.preventDefault();
									$(this).tab('show');
								})
              </script>
              <?php $sections = $asset->getSections(); ?>
              <?php if(count($sections) > 0): ?>
              <!-- navegacao-->
              <ul class="nav nav-tabs" id="myTab">
                <li class="active"><a data-toggle="tab" href="#notas">Bloco de Notas</a></li>
                <li class=""><a data-toggle="tab" href="#sobre">Sobre o Curso</a></li>
              </ul>
              <div class="tab-content" id="myTabContent">
                <div id="notas" class="tab-pane fade active in">
                  <div class="contato">
                    <div class="msgErro" style="display:none">
                      <span class="alerta"></span>
                      <div class="boxMsg">
                        <p class="aviso">Sua mensagem não pode ser enviada.</p>
                        <p>Confirme se todos os campos foram preenchidos corretamente e verifique seus dados. Você pode ter esquecido de preencher algum campo ou errado alguma informação.</p>
                      </div>
                      <hr />
                    </div>
                   
                    <div class="msgAcerto" style="display:none">
                      <span class="alerta"></span>
                      <div class="boxMsg">
                        <p class="aviso">Mensagem enviada com sucesso!</p>
                        <p>Obrigado por entrar em contato com nosso programa. Em breve retornaremos sua mensagem.</p>
                      </div>
                      <hr />
                    </div>
                    <form id="bloco-notas" class="form-horizontal">
                    	<input type="hidden" name="bloco-de-notas" id="bloco-de-notas" value="1" />
                      <fieldset>
                        <div class="control-group">
                          <div class="controls">
                            <textarea rows="10" id="anotacoes" class="input-xlarge" name="anotacoes" placeholder="Faça anotações desta aula e receba em seu e-mail."></textarea>
                          </div>
                        </div>
                        <div class="control-group">
                          <div class="controls">
                            <label class="titulos" for="email">Enviar para</label>
                            <input type="text" placeholder="Email" class="input-xlarge" name="email" id="email">
                            <button class="btn" type="submit" name="enviar" id="enviar" value="sim">
                              enviar
                            </button>
                            <img src="/portal/images/ajax-loader.gif" alt="enviando..." style="display:none" width="16px" height="16px" id="ajax-loader" />
                          </div>
                        </div>
                      </fieldset>
                 
                  </form>
                   </div>
            
              </div>
              <?php
                $displays = array();
                
		            $block_sobre = Doctrine_Query::create()
		              ->select('b.*')
		              ->from('Block b, Section s')
		              ->where('b.section_id = s.id')
		              ->andWhereIn('s.slug', array('home-page','homepage','home'))
		              ->andWhere('s.site_id = ?', $site->id)
		              ->andWhere('b.slug = "sobre-o-curso"')
									->execute();
									
					      if(count($block_sobre) > 0){
					        foreach($block_sobre as $b){
					          $displays["sobre-o-curso"] = $b->retriveDisplays();
					        }
					      }

		            $block_professor = Doctrine_Query::create()
		              ->select('b.*')
		              ->from('Block b, Section s')
		              ->where('b.section_id = s.id')
		              ->andWhere('s.slug = ?', $section->getSlug())
		              ->andWhere('s.site_id = ?', $site->id)
		              ->andWhere('b.slug = "professor"')
									->execute();
									
					      if(count($block_professor) > 0){
					        foreach($block_professor as $b){
					          $displays["professor"] = $b->retriveDisplays();
					        }
					      }
									
	              if (!isset($displays['professor']) || (isset($displays['professor']) && count($displays['professor']) == 0)) {
			            $block_professor = Doctrine_Query::create()
			              ->select('b.*')
			              ->from('Block b, Section s')
			              ->where('b.section_id = s.id')
			              ->andWhereIn('s.slug', array('home-page','homepage','home'))
			              ->andWhere('s.site_id = ?', $site->id)
			              ->andWhere('b.slug = "professor"')
										->execute();
										
						      if(count($block_professor) > 0){
						        foreach($block_professor as $b){
						          $displays["professor"] = $b->retriveDisplays();
						        }
						      }
								}
              ?>
              <div id="sobre" class="tab-pane fade">
	              <?php if (isset($displays['sobre-o-curso'])): ?>
	              	<?php if (count($displays['sobre-o-curso']) > 0): ?>
                <p class="titulos"><?php echo $displays['sobre-o-curso'][0]->Block->getTitle() ?></p>
                <a href="/<?php echo $site->getSlug() ?>" title="<?php echo $displays['sobre-o-curso'][0]->getTitle() ?>"><?php echo $displays['sobre-o-curso'][0]->Asset->AssetContent->render() ?></a>
              	<br/>
              		<?php endif; ?>
              	<?php endif; ?>
	              <?php if (isset($displays['professor'])): ?>
	              	<?php if (count($displays['professor']) > 0): ?>
              	<p class="titulos"><?php echo $displays['professor'][0]->Block->getTitle() ?></p>
										<?php if (isset($d->Asset)): ?>
		              		<?php $relatedAssets = $displays['professor'][0]->Asset->retriveRelatedAssetsByRelationType('Preview') ?>
              	<a href="<?php echo $displays['professor'][0]->retriveUrl() ?>" title="<?php echo $displays['professor'][0]->getTitle() ?>"><img src="<?php echo $relatedAssets[0]->retriveImageUrlByImageUsage('image-3-b') ?>" alt="<?php echo $displays['professor'][0]->getTitle() ?>" /></a>
              	<a href="<?php echo $displays['professor'][0]->retriveUrl() ?>" title="<?php echo $displays['professor'][0]->getTitle() ?>" class="bold"><?php echo $displays['professor'][0]->getTitle() ?></a>
              	<a href="<?php echo $displays['professor'][0]->retriveUrl() ?>" title="<?php echo $displays['professor'][0]->getTitle() ?>"><?php echo $displays['professor'][0]->getDescription() ?></a>
              			<?php else: ?>
              	<img src="<?php echo $displays['professor'][0]->retriveImageUrlByImageUsage('image-3-b') ?>" alt="<?php echo $displays['professor'][0]->getTitle() ?>" />
              	<?php echo $displays['professor'][0]->getTitle() ?>
              	<?php echo $displays['professor'][0]->getDescription() ?>
              			<?php endif; ?>
              		<?php endif; ?>
              	<?php endif; ?>
              </div>
              
            </div>
            <!-- /navegacao-->
            <?php endif; ?>
            
            <script>
            	$(function(){
            		$('#submitCurso').click(function(){
            			var url = $('#select01 :selected').val();
            			if (url != "")
              			window.location = $('#select01 :selected').val();
              		else
              			alert("Escolha um curso");
            		});
            		$('#submitDisciplina').click(function(){
            			var url = $('#select02 :selected').val();
            			if (url != "")
              			window.location = $('#select02 :selected').val();
              		else
              			alert("Escolha uma disciplina");
            		});
            	});
            </script>
            
            <form class="form-horizontal" id="disciplinas">
              <fieldset>
                <?php
                $programs = Doctrine_Query::create()
                  ->select('p.*')
                  ->from('Program p, ChannelProgram cp')
                  ->where('p.id = cp.program_id')
                  ->andWhere('cp.channel_id = ?', 3)
                  ->andWhere('p.is_a_course = ?', 1)
                  ->andWhere('p.is_active = ?', 1)
                  ->orderBy('p.title')
                  ->execute();
                ?>
                <?php if(count($programs) > 0): ?>
              	<div class="control-group">
                  <label for="select01" class="control-label titulos">Navegue pelos Cursos</label>
                  <div class="controls">
                    <select id="select01">
                        <option value=""> </option>
	                    <?php foreach($programs as $d): ?>
	                      <option value="<?php echo $d->retriveUrl() ?>"<?php if($d->Site->getId() == $site->getId()) echo 'selected="selected"'; ?>><?php echo $d->getTitle() ?></option>
	                    <?php endforeach; ?>
                    </select>
                    <button class="btn" type="button" id="submitCurso">
                      OK
                    </button>
                  </div>
                </div>
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
                <?php if(count($sections) > 0): ?>
                <div class="control-group">
                  <label for="select02" class="control-label titulos">Navegue pelas Disciplinas</label>
                  <div class="controls">
                    <select id="select02">
                      <option value=""> </option>
                      <?php foreach($sections as $d): ?>
                        <option value="<?php echo $d->retriveUrl() ?>"<?php if($d->getId() == $section->getId()) echo 'selected="selected"'; ?>><?php echo $d->getTitle() ?></option>
                      <?php endforeach; ?>
                    </select>
                    <button class="btn" type="button" id="submitDisciplina">
                      OK
                    </button>
                  </div>
                </div>
                <?php endif; ?>
                
              </fieldset>
            </form>
            
           	<?php if(isset($assets)): ?>
            <p class="titulos" href="#">Lista de Aulas</p>
            <ul class="lista-aulas">
            	<?php foreach($assets as $k=>$d): ?>
              <li class="ativo">
              	<a <?php if ($d->id == $asset->id): ?>class="ativo"<?php endif; ?> href="<?php echo $d->retriveUrl(); ?>" title="<?php echo $d->getTitle(); ?>">
              		<span>aula <br /> <?php echo ($k+1); ?></span> <?php echo $d->getTitle(); ?>
              	</a>
              </li>
              <p style="color:#999; font-style: italic; margin-left:63px;"><?php echo $d->getDescription() ?></p>
              <?php endforeach; ?>
            </ul>
            <?php else: ?>
            	
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
    </div>
    <!-- /CAPA -->
    
		<?php include_partial_from_folder('sites/univesptv', 'global/apoio') ?>
		
  </div>
  <!-- /CONTEUDO PAGINA -->
</div>
<!-- /MIOLO -->
</div> <!-- /CAPA SITE -->

<script type="text/javascript">
	$(document).ready(function() {
		$('input#enviar').click(function() {
			$(".msgAcerto, .msgErro").hide();
		});
		$('#anotacoes').focus(function() {
			$(".msgAcerto, .msgErro").hide();
		});
		$('#anotacoes').keypress(function() {
			$(".msgAcerto, .msgErro").hide();
		});
		var validator = $('#bloco-notas').validate({
			submitHandler : function(form) {
				$.ajax({
					type : "POST",
					dataType : "text",
					data : $("#bloco-notas").serialize(),
					beforeSend : function() {
						$('button#enviar').attr('disabled', 'disabled');
						$(".msgAcerto").hide();
						$(".msgErro").hide();
						$('img#ajax-loader').show();
					},
					success : function(data) {
						$('button#enviar').removeAttr('disabled');
						window.location.href = "#";
						if(data == "1") {
							$("#bloco-notas").clearForm();
							$(".msgAcerto").show();
							$('img#ajax-loader').hide();
						} else {
							$(".msgErro").show();
							$('img#ajax-loader').hide();
						}
					}
				});
			},
			rules : {
				anotacoes : {
					required : true
					
				},
				email : {
					required : true,
					email : true
				}
			},
			messages : {
				anotacoes : "Este campo é obrigatório.",
				email : "Digite um e-mail válido. Este campo é obrigatório."

			},
			// set this class to error-labels to indicate valid fields
			success : function(label) {
				// set &nbsp; as text for IE
				label.html("&nbsp;").addClass("checked");
			}
		});
	});

</script>
<!-- scripts //-->
