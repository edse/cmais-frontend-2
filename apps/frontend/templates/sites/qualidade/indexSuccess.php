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
  		<div id="barra-site" onclick=location="home" title="<?php echo $section->getTitle() . "  ". $section->getDescription() ?>">
				
				<!-- TOPO -->
		    <div class="topo-programa">
		    	
	    		<!-- MENU -->
					<?php include_partial_from_folder('blocks','global/sections-menu2', array('siteSections' => $siteSections))?>
					<!--/ MENU -->
					
		    <!-- / TOPO -->  
		    </div>
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
								<div class="duas-colunas destaque grid2">

                                                                                                  <div id="player"><iframe title="Washington Olivetto: “A TV Cultura tem uma busca de qualidade histórica”" width="640" height="390" src="http://www.youtube.com/embed/DD3hR-qhz_c?wmode=transparent&amp;rel=0" frameborder="0" allowfullscreen=""></iframe></div>
                    <script>
                    function changeVideo(id){
                      $('#player').html('<iframe width="640" height="390" src="http://www.youtube.com/embed/'+id+'?wmode=transparent" frameborder="0" allowfullscreen></iframe>');
                    }
                    </script>

                                          <ul class="box-playlist grid2">
                                                  <li style="width: 155px">
                                                        <a href="javascript:changeVideo('DD3hR-qhz_c')" class="img">
                              <img class="img-150x90" src="http://img.youtube.com/vi/DD3hR-qhz_c/1.jpg" alt="Washington Olivetto: “A TV Cultura tem uma busca de qualidade histórica”">
                            </a>
                                                                                    <h3 class="chapeu">Jornalismo</h3>
                                                        <a href="http://cmais.com.br/washington-olivetto-a-tv-cultura-tem-uma-busca-de-qualidade-historica">Publicitário fala sobre a classificação da TV Cultura como o 2º canal de maior qualidade do mundo e o 1º do Brasil em pesquisa encomendada pela BBC</a>
                          </li>
                                                  <li style="width: 155px">
                                                        <a href="javascript:changeVideo('RllwhNmqqcg')" class="img">
                              <img class="img-150x90" src="http://img.youtube.com/vi/RllwhNmqqcg/1.jpg" alt="Tom Zé: “A TV Cultura é aconselhável”">
                            </a>
                                                                                    <h3 class="chapeu">Jornalismo</h3>
                                                        <a href="http://cmais.com.br/tom-ze-a-tv-cultura-e-aconselhavel">Cantor fala sobre a classificação da TV Cultura como o 2º canal de maior qualidade do mundo e o 1º do Brasil em pesquisa encomendada pela BBC</a>
                          </li>
                                                  <li style="width: 155px">
                                                        <a href="javascript:changeVideo('qf5fJG0RfNA')" class="img">
                              <img class="img-150x90" src="http://img.youtube.com/vi/qf5fJG0RfNA/1.jpg" alt="Maurício de Sousa: “Eu fico muito feliz ter a TV Cultura entre as melhores do mundo”">
                            </a>
                                                                                    <h3 class="chapeu">Jornalismo</h3>
                                                        <a href="http://cmais.com.br/mauricio-de-sousa-eu-fico-muito-feliz-ter-a-tv-cultura-entre-as-melhores-do-mundo">Cartunista fala sobre a classificação da TV Cultura como o 2º canal de maior qualidade do mundo e o 1º do Brasil em pesquisa encomendada pela BBC</a>
                          </li>
                                                  <li style="width: 155px">
                                                        <a href="javascript:changeVideo('BhIEgNACKFw')" class="img">
                              <img class="img-150x90" src="http://img.youtube.com/vi/BhIEgNACKFw/1.jpg" alt="Ricardo Kotscho: “Na TV Cultura você pode sintonizar sem medo”">
                            </a>
                                                                                    <h3 class="chapeu">Jornalismo</h3>
                                                        <a href="http://cmais.com.br/ricardo-kotscho-na-tv-cultura-voce-pode-sintonizar-sem-medo">Jornalista fala sobre a classificação da TV Cultura como o 2º canal de maior qualidade do mundo e o 1º do Brasil em pesquisa encomendada pela BBC</a>
                          </li>
                                                  <li style="width: 155px">
                                                        <a href="javascript:changeVideo('_7ypGVhrnQE')" class="img">
                              <img class="img-150x90" src="http://img.youtube.com/vi/_7ypGVhrnQE/1.jpg" alt="Beatriz Segall: “A TV Cultura é responsável por uma parte da educação brasileira”">
                            </a>
                                                                                    <h3 class="chapeu">Jornalismo</h3>
                                                        <a href="http://cmais.com.br/beatriz-segall-a-tv-cultura-e-responsavel-por-uma-parte-da-educacao-brasileira">Atriz fala sobre a classificação da TV Cultura como o 2º canal de maior qualidade do mundo e o 1º do Brasil em pesquisa encomendada pela BBC</a>
                          </li>
                                                  <li style="width: 155px">
                                                        <a href="javascript:changeVideo('FN9PKaNCzz0')" class="img">
                              <img class="img-150x90" src="http://img.youtube.com/vi/FN9PKaNCzz0/1.jpg" alt="Irene Ravache: “Qualquer coisa que assistir na TV Cultura vai ter um bom conteúdo”">
                            </a>
                                                                                    <h3 class="chapeu">Jornalismo</h3>
                                                        <a href="http://cmais.com.br/irene-ravache-qualquer-coisa-que-assistir-na-tv-cultura-vai-ter-um-bom-conteudo">Atriz fala sobre a classificação da TV Cultura como o 2º canal de maior qualidade do mundo e o 1º do Brasil em pesquisa encomendada pela BBC</a>
                          </li>
                                                  <li style="width: 155px">
                                                        <a href="javascript:changeVideo('OgoEGASaxgE')" class="img">
                              <img class="img-150x90" src="http://img.youtube.com/vi/OgoEGASaxgE/1.jpg" alt="Dan Stulbach: “A TV Cultura expõe qualidade”">
                            </a>
                                                                                    <h3 class="chapeu">Jornalismo</h3>
                                                        <a href="http://cmais.com.br/dan-stulbach-a-tv-cultura-expoe-qualidade">Ator fala sobre a classificação da TV Cultura como o 2º canal de maior qualidade do mundo e o 1º do Brasil em pesquisa encomendada pela BBC</a>
                          </li>
                                                  <li style="width: 155px">
                                                        <a href="javascript:changeVideo('Woia99py-j8')" class="img">
                              <img class="img-150x90" src="http://img.youtube.com/vi/Woia99py-j8/1.jpg" alt="João Carlos Martins: “A TV Cultura procura a informação que pode nortear os brasileiros”">
                            </a>
                                                                                    <h3 class="chapeu">Jornalismo</h3>
                                                        <a href="http://cmais.com.br/joao-carlos-martins-a-tv-cultura-procura-a-informacao-que-pode-nortear-os-brasileiros">Maestro fala sobre a classificação da TV Cultura como o 2º canal de maior qualidade do mundo e o 1º do Brasil em pesquisa encomendada pela BBC</a>
                          </li>
                                                  <li style="width: 155px">
                                                        <a href="javascript:changeVideo('I5w7Sc4_7yc')" class="img">
                              <img class="img-150x90" src="http://img.youtube.com/vi/I5w7Sc4_7yc/1.jpg" alt="Daniel: “Eu comecei na TV Cultura há 30 anos. Foi um dos primeiros canais que me abriu as portas”">
                            </a>
                                                                                    <h3 class="chapeu">Jornalismo</h3>
                                                        <a href="http://cmais.com.br/daniel-eu-comecei-na-tv-cultura-ha-30-anos-foi-um-dos-primeiros-canais-que-me-abriu-as-portas">Cantor fala sobre a classificação da TV Cultura como o 2º canal de maior qualidade do mundo e o 1º do Brasil em pesquisa encomendada pela BBC</a>
                          </li>
                                                  <li style="width: 155px">
                                                        <a href="javascript:changeVideo('uw6wQ174GW4')" class="img">
                              <img class="img-150x90" src="http://img.youtube.com/vi/uw6wQ174GW4/1.jpg" alt="Arthur Zanetti: “A qualidade da TV Cultura é isso mesmo o que eu vejo”">
                            </a>
                                                                                    <h3 class="chapeu">Jornalismo</h3>
                                                        <a href="http://cmais.com.br/arthur-zanetti-a-qualidade-da-tv-cultura-e-isso-mesmo-o-que-eu-vejo">Ginasta fala sobre a classificação da TV Cultura como o 2º canal de maior qualidade do mundo e o 1º do Brasil em pesquisa encomendada pela BBC</a>
                          </li>
                                                  <li style="width: 155px">
                                                        <a href="javascript:changeVideo('Zk9G9tkBf3g')" class="img">
                              <img class="img-150x90" src="http://img.youtube.com/vi/Zk9G9tkBf3g/1.jpg" alt="Alex Atala: “Não dá para pensar na TV Cultura sem pensar nos programas musicais”">
                            </a>
                                                                                    <h3 class="chapeu">Jornalismo</h3>
                                                        <a href="http://cmais.com.br/alex-atala-nao-da-para-pensar-na-tv-cultura-sem-pensar-nos-programas-musicais">TV Cultura é o 2º canal de maior qualidade do mundo e o 1º do Brasil, segundo pesquisa encomendada pela BBC</a>
                          </li>
                                                  <li style="width: 155px">
                                                        <a href="javascript:changeVideo('RaJEzS8iUZk')" class="img">
                              <img class="img-150x90" src="http://img.youtube.com/vi/RaJEzS8iUZk/1.jpg" alt="TV Cultura é lembrada também em outras premiações">
                            </a>
                                                                                    <h3 class="chapeu">Mídia</h3>
                                                        <a href="http://tvcultura.cmais.com.br/tv-cultura-2">TV Cultura recebe prêmio como melhor programa para crianças entre 4 e 7 anos. Evento realizado no 14º Encontro Internacional de Comunicação, pelo grupo Meio &amp; Mensagem, prêmio Maximídia 2004.</a>
                          </li>
                                                  <li style="width: 155px">
                                                        <a href="javascript:changeVideo('NnxykRieC34')" class="img">
                              <img class="img-150x90" src="http://img.youtube.com/vi/NnxykRieC34/1.jpg" alt="Prêmio Ford 2003 premia TV Cultura">
                            </a>
                                                                                    <h3 class="chapeu">Mídia</h3>
                                                        <a href="http://tvcultura.cmais.com.br/premio-ford-2003">Projeto "Biodiversidade Brasil", parceria da TV Cultura com a Natura, é vencedor do prêmio Ford de 2003. </a>
                          </li>
                                                  <li style="width: 155px">
                                                        <a href="javascript:changeVideo('PRFlzQ8OXw4')" class="img">
                              <img class="img-150x90" src="http://img.youtube.com/vi/PRFlzQ8OXw4/1.jpg" alt="Relembre: TV Cultura conquista prêmio Emy pela programação infantil">
                            </a>
                                                                                    <h3 class="chapeu">Especiais</h3>
                                                        <a href="http://tvcultura.cmais.com.br/relembre-tv-cultura-conquista-premio-emy-pela-programacao-infantil">Em 1999, a emissora é vitoriosa pela segunda vez consecutiva, por levar aos telespectadores uma programação infantil especial do dia internacional da criança</a>
                          </li>
                                              </ul>
                                                          
                  
                
                <a href="/qualidade/videos/a-qualidade-da-tv-cultura-e-lembrada-por-personalidades-brasileiras" class="titulos">A qualidade da TV Cultura é lembrada por personalidades brasileiras</a>
                                <p>Washington Olivetto, Irene Ravache, João Carlos Martins e Alex Atala são alguns dos nomes que falam sobre a 2a. colocação da TV Cultura em ranking mundial de qualidade em TV. </p>
              </div>
								<?php	echo $asset_quality->AssetContent->render(); ?>
		   	   	 </div>
		   	   	 <!--TITULO-->
		   	   	
		          <!-- INICIO TIMELINE -->
		          <div class="timeline">
			            <div id="tvcultura-embed"></div>
			            <script type="text/javascript">
			              var timeline_config = {
			               width: "100%",
			               height: "100%",
			               source: "http://cmais.com.br<?php echo url_for('homepage')?>qualidade/linha-do-tempo.jsonp",
			               start_at_slide: 0,
			               start_zoom_adjust: 2,
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

	         <!-- APOIO -->
         	
        </div><!--/CONTEUDO-->
        
      </div><!--/MIOLO -->
      
    </div><!-- /CAPA SITE -->


 