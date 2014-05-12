<link type="text/css" href="http://cmais.com.br/portal/css/geral.css" rel="stylesheet" />
<link rel="stylesheet" href="http://172.20.16.219/portal/css/tvcultura/sites/<?php echo $section->Site->getSlug() ?>.css" type="text/css" />
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
						<h2>Cultura também é Museu: <br>onde fantasias se tornam realidade</h2>
				
		
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
				   	   	<?php  $asset_quality = Doctrine::getTable('Asset')->findOneById(160756); ?> <!-- trocar o numero do asset explicação do topo-->
								<h2><?php //echo $asset_quality->getTitle();?>TV Cultura abre suas portas para o público conhecer seu acervo e história</h2>
								<p><?php // echo $asset_quality->getDescription();?>Visita faz parte do programa especial que a emissora preparou para a 12ª Semana Nacional de Museus, com exposição exclusiva do programa Castelo Rá-Tim-Bum</p>

				   	   	<?php  $asset_x = Doctrine::getTable('Asset')->findOneById(162068); ?> <!-- numero do asset video gallery-->
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
								<?php	//echo $asset_quality->AssetContent->render(); AQUI PODE COLOCAR A DESCIÇÃO DO ASSET DO TOPO ?>
									
								<div class="texto">
                  <p><span style="font-family: arial, helvetica, sans-serif; font-size: 14px;">Entre 12 e 16 de maio, a <a href="http://cmais.com.br"><strong>TV Cultura</strong></a> participa da 12ª Semana de Museus, organizada pelo IBRAM (Instituto Brasileiro de Museus) e realizada em diversas instituições culturais do Brasil. O tema escolhido pela Fundação Padre Anchieta – mantenedora da TV Cultura, Rádios Cultura AM e FM e TV Rá Tim Bum! – para esta edição é </span><strong style="font-family: arial, helvetica, sans-serif; font-size: 14px;"><b>Cultura também é Museu: onde fantasias se tornam realidade</b>. </strong><span style="font-family: arial, helvetica, sans-serif; font-size: 14px;">Durante cinco dias, a emissora abrirá as portas para aqueles que desejam conhecer sua história e saber como é o dia a dia de uma televisão.</span><br>
									<br>
									<span style="font-family: arial, helvetica, sans-serif; font-size: 14px;">O evento conta com duas exposições exclusivas. Uma dela é </span><b>Castelo Rá-Tim-Bum 20 anos</b><span style="font-family: arial, helvetica, sans-serif; font-size: 14px;">, composta por figurinos, material cenográfico e documentação da atração infanto-juvenil. A outra é </span><em style="font-family: arial, helvetica, sans-serif; font-size: 14px;">Também sou cultura</b><span style="font-family: arial, helvetica, sans-serif; font-size: 14px;">, formada pelo acervo de artes visuais. A TV Cultura também irá prestar homenagem aos seus funcionários e celebrar os 45 anos de sua trajetória.</span><br>
									<br>
									<span style="font-family: arial, helvetica, sans-serif; font-size: 14px;">O visitante também terá a oportunidade de conhecer não só as obras de arte que constituem o acervo Fundação como também diversas áreas da emissora, como as redações do jornalismo e da rádio, os estúdios, o prédio administrativo e as salas de controle de exibição.</span><br>
									<br>
									<span style="font-family: arial, helvetica, sans-serif; font-size: 14px;">A duração de cada visita é de aproximadamente duas horas. Serão realizadas em dois horários: 11h e 16h (com exceção da sexta-feira, dia 16, que terá visitação somente no período da manhã).</span><br>
									<br>
									<span style="font-family: arial, helvetica, sans-serif; font-size: 14px;">Para participar, os interessados devem encaminhar um e-mail para o endereço </span><a href="mailto:semanademuseus@tvcultura.com.br" style="font-family: arial, helvetica, sans-serif; font-size: 14px;" title="mailto:semanademuseus@tvcultura.com.br"><span title="mailto:semanademuseus@tvcultura.com.br">semanademuseus@tvcultura.com.br</span></a><span style="font-family: arial, helvetica, sans-serif; font-size: 14px;">. Vagas e horários de visitação são limitados.</span><br>
									<br>
									<b style="font-family: arial, helvetica, sans-serif; font-size: 14px;">Serviço</b	></p>
								<p>
									<span style="font-size:14px;"><span style="font-family:arial,helvetica,sans-serif;">TV Cultura – Semana Nacional de Museus</span></span></p>
								<p>
									<span style="font-size:14px;"><span style="font-family:arial,helvetica,sans-serif;">De 12 a 16 de maio de 2014 (no dia 16 haverá visita somente no período da manhã).</span></span></p>
								<p>
									<span style="font-size:14px;"><span style="font-family:arial,helvetica,sans-serif;">Horários: 11h e 16h</span></span></p>
								<p>
									<span style="font-size:14px;"><span style="font-family:arial,helvetica,sans-serif;">Inscrições: mandar um e-mail para: <a href="mailto:semanademuseus@tvcultura.com.br" title="mailto:semanademuseus@tvcultura.com.br"><span title="mailto:semanademuseus@tvcultura.com.br">semanademuseus@tvcultura.com.br</span></a></span></span></p>
								<p>
									<span style="font-size:14px;"><span style="font-family:arial,helvetica,sans-serif;">Informações: 2182-3222</span></span></p>
								<p></p>
                </div>
								
								

							</div>

	            		         
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
 
 