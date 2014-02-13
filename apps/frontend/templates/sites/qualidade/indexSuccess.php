<link type="text/css" href="http://cmais.com.br/portal/css/geral.css" rel="stylesheet" />
<!--link rel="stylesheet" href="http://cmais.com.br/portal/js/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="http://cmais.com.br/portal/js/bootstrap/css/bootstrap-responsive.min.css">
<link rel="stylesheet" href="http://cmais.com.br/portal/univesptv/css/cursos.css" /-->
<script type="text/javascript" src="http://cmais.com.br/portal/js/mediaplayer/swfobject.js"></script>

<?php use_helper('I18N', 'Date') ?>
<?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'section' => $section)) ?>

    <!-- CAPA SITE -->
	<div id="capa-site" class="a1964">
     	
     	<!-- BARRA SITE -->
  		<div id="barra-site" >
						<h2>TV CULTURA,<br>o canal com a segunda melhor programação do mundo,<br>segundo pesquisa da BBC.</h2>
				
		
		  <!-- /BARRA SITE -->  
      </div>
       
      <!-- MIOLO -->
   	  <div id="miolo">
   	   	
   	    <!-- BOX LATERAL -->
        <?php include_partial_from_folder('blocks','global/shortcuts') ?>
        <!-- BOX LATERAL -->
        
        <!--CONTEUDO-->
        <div id="conteudo-pagina">
	         
	         <!-- CAPA 3-->
         	 <div class="capa grid3">
	         	 	
		   	   	 <div class="box-interna grid2">
				   	   	<?php  $asset_quality = Doctrine::getTable('Asset')->findOneById(160756); ?>
								<h2><?php echo $asset_quality->getTitle();?></h2>
								<p><?php echo $asset_quality->getDescription();?></p>

				   	   	<?php  $asset_x = Doctrine::getTable('Asset')->findOneById(162068); ?>
   							<?php $relacionados = $asset_x->retriveRelatedAssets(); ?>


								<div class="duas-colunas destaque grid2">
								
								<!--Players-->
								<div id="player">
                
		                <?php if(count($relacionados) > 0): ?>
			                    <?php foreach($relacionados as $k=>$d): ?>
					                 	<?php if($k == 0 ): ?>
				                  			<iframe title="<?php echo $d->getTitle()?>" width="640" height="390" src="http://www.youtube.com/embed/<?php echo $d->AssetVideo->getYoutubeId()?>?wmode=transparent&amp;rel=0" frameborder="0" allowfullscreen=""></iframe>
																	</div>
																		<script>
																			function changeVideo(id){
																			  $('#player').html('<iframe width="640" height="390" src="http://www.youtube.com/embed/'+id+'?wmode=transparent" frameborder="0" allowfullscreen></iframe>');
																			}
																		</script>
																		<div class="box-thumbs">
																			<h4>Assista todos os vídeos</h4>
																			<ul class="box-playlist grid2 carrossel">			                  			
				                  	<?php else:?>
				                  		<?php if($d->getId() != 164212):?>
																		<li>
																			<a href="javascript:changeVideo('<?php echo $d->AssetVideo->getYoutubeId()?>')" class="img">
																				<img src="http://img.youtube.com/vi/<?php echo $d->AssetVideo->getYoutubeId()?>/1.jpg" alt="<?php echo $d->getTitle()?>">
																			</a>
																		</li>				                  	
				                    <?php endif; ?>
				              	  <?php endif; ?>     
		                    <?php endforeach; ?>
		                  </ul>
		              	<?php endif; ?>								
								
											
										</ul>
									</div>
									
									<!--Players-->
								</div>
								
		   	   	 </div>
		   	   		<div id="direita"class="grid1">
								<?php	//echo $asset_quality->AssetContent->render(); ?>
									
								<p>De acordo com um levantamento feito pelo Instituto Populus de pesquisa, do Reino Unido, a TV Cultura foi classificada como a segunda emissora com maior qualidade no mundo, ficando atrás apenas da britânica BBC One, que teve 79% da preferência do público. Outra brasileira que também classificada no ranking foi a Rede Globo, na 28ª posição.</p><br>
								<p>A pesquisa encomendada pela BBC foi realizada entre 30 de setembro e 18 de outubro de 2013, em 14 países (Austrália, Brasil, Dinamarca, França, Alemanha, Itália, Japão, Holanda, Espanha, Suécia, Portugal, Reino Unido, Emirados Árabes e Estados Unidos). Um total de 500 adultos de cada país, com mais de 18 anos, foram submetidos a um questionário para dar nota à qualidade da TV, de um modo geral, bem como às emissoras de seu país.</p><br>
								<p>Também participaram do levantamento as emissoras com Market Share (participação de mercado) de 5% ou mais em seus países. O Market Share serve para avaliar os canais que tiveram, no mesmo período, a preferência do telespectador. A referência é o número de pessoas com a televisão ligada naquele instante.</p><br>
								
								<div class="box-confira">
									<h2><strong>Confira a apresentação da pesquisa de qualidade da TV mundial na íntegra</strong></h2>
									<p class="btn-confira"><a href="http://midia.cmais.com.br/assets/file/original/d736f2af1a073e7645f1db9583bf2ebd052232fc.pdf" target="_blank">Português</a></p>
									<p class="btn-confira"><a href="http://midia.cmais.com.br/assets/file/original/481a3dbb48c883c9ac04eb47268f73afd3d931fb.pdf" target="_blank">Inglês</a></p>
									<h2><strong>Confira as tabelas de avaliação por país</strong></h2>
									<p class="btn-confira"><a href="http://midia.cmais.com.br/assets/file/original/3c537556968f9e1f714fa51df6f1e7aefda011c2.pdf" target="_blank">Português (Brasil)</a></p>
									<p class="btn-confira"><a href="http://midia.cmais.com.br/assets/file/original/2b57ba2dc91af7fb2222b4a9940587abdf2469b1.pdf" target="_blank">Inglês (íntegra)</a></p>
								</div>		
							</div>
							
		          <!-- INICIO TIMELINE -->
		          <div class="timeline" style="display: none">
		          	<h1 class="box-interna">Linha do Tempo de Premiações da Fundação Padre Anchieta</h1>
			            <div id="tvcultura-embed"></div>
			            <script type="text/javascript">
			              var timeline_config = {
			               width: "100%",
			               height: "100%",
			               source: "http://cmais.com.br/portal/images/qualidade/linhadotempo.jsonp",
			               start_at_slide: 92, //para começar do último slide
			               start_zoom_adjust: -1,
			               embed_id: "tvcultura-embed",
			               css: "http://cmais.com.br/portal/js/qualidade/qualidade.css",
			               lang: "http://cmais.com.br/portal/js/qualidade/pt-br.js",
			               js: "http://cmais.com.br/portal/js/qualidade/timeline-min.js"
			              }
			            </script>
			            <script type="text/javascript" src="http://cmais.com.br/portal/js/qualidade/storyjs-embed.js"></script>
		            </div>
		            <!-- /FIM TIMELINE -->
	            		         
     				</div><!--/CAPA-->

        </div><!--/CONTEUDO-->
        
      </div><!--/MIOLO -->
      
    </div><!-- /CAPA SITE -->

<script>

$(document).ready(function(){

	function getURLParameter(name){
		return decodeURI((RegExp(name + '=' + '(.+?)(&|$)').exec(location.search)||[,null])[1]);
	}
	
	if(getURLParameter("tl") != "null"){
		$(".timeline").show();
	}


    // carrossel
	$('.carrossel').jcarousel({
      wrap: "both",
      scroll: 5
    });
    
    

  });
</script>
 
 