<script type="text/javascript" src="http://cmais.com.br/portal/js/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
<script type="text/javascript" src="http://cmais.com.br/portal/js/fancybox/jquery.easing-1.3.pack.js"></script>
<link rel="stylesheet" href="http://cmais.com.br/portal/js/fancybox/jquery.fancybox-1.3.4.css" type="text/css" media="screen" />
<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/sites/paradalivre.css" type="text/css" />



	<!-- bg modal -->
  	<div id="bg-modal"></div>
  	<!-- /bg modal -->

<?php use_helper('I18N', 'Date') ?>
<?php include_partial_from_folder('blocks', 'global/menu', array('channels' => $channels, 'live' => $live, 'editorials' => $editorials, 'site' => $site, 'mainSite' => $mainSite, 'coming' => $coming, 'important' => $important, 'asset' => $asset, 'section' => $section)) ?>

	


  	
	<!-- BARRA GOOGLE -->
	<div id="google">
		
		<div class="busca-google">
			<?php if(isset($displays["alerta"])) include_partial_from_folder('blocks','global/breakingnews', array('displays' => $displays["alerta"])) ?>
			<h2><a href="http://tvcultura.cmais.com.br/paradalivre" name="Parada Livre" name=""><img src="http://cmais.com.br/portal/images/capaPrograma/paradalivre/logo.jpg" alt="Parada Livre" /></a></h2>
			<div class="barra"></div>
			<div class="botao"></div>
		</div>
	</div>
	<!-- /BARRA GOOGLE -->   
    <!-- CAPA SITE -->
    <div id="capa-site">     
      <div id="conteudo-pagina">
    		<div class="esq">
    			<div class="topo-busca">
    				<a id="bt-hora" href="#box-hora">Que horas?</a>
    				<a id="bt-seguir" href="#box-seguir">Como seguir?</a>
    				<h3>Programas da TV Cultura</h3>
    			</div>
    			<div style="display:none;">
    			  <div id="box-hora" class="box-modal">
    				<h3>Que horas?</h3>
    				<!--a class="fechar">fechar</a-->
    				<ul>
    					<li>
    						<a href="http://cmais.com.br/penarua">P&eacute; na Rua</a><span>19h15</span>    						
    					</li>
    					<li>
    						<a href="http://cmais.com.br/deupaulanatv">Deu Paula na TV</a><span>19h25</span>    						
    					</li>
    					<li>
    						<a href="http://cmais.com.br/inglescommusica">Inglês com m&uacute;sica</a><span>19h30</span> 						
    					</li>
    					<li>
    						<a href="http://cmais.com.br/woohoonews">Woohoo News</a><span>19h45</span>    						
    					</li>
    					<li>
    						<a href="http://cmais.com.br/culturalivre">Cultura Livre</a><span>19h55</span>    						
    					</li>
    					<li>
    						<a href="http://cmais.com.br/deupaulanatv">Deu Paula na TV</a><span>20h05</span>    						
    					</li>   					
    			   </ul>
    			  </div>
    			</div>
    			<div style="display:none">
    			  <div id="box-seguir" class="box-modal">
    				<h3>Como seguir?</h3>
    				<!--a class="fechar">fechar</a-->
    				<ul class="l-seguir">
    					<li>
    						<a href="http://cmais.com.br/culturalivre">Cultura Livre</a>
    						<ul class="seguir">
    							<li><a href="https://www.facebook.com/culturalivre" class="fb"></a></li>
    							<li><a href="http://twitter.com/cultura_livre" class="twt"></a></li>
    							<li><a href="http://www.youtube.com/culturalivre" class="ytb"></a></li>
    						</ul>						
    					</li>
    					<li>
    						<a href="http://cmais.com.br/deupaulanatv">Deu Paula na TV</a> 
    						<ul class="seguir">
    							<li><a href="https://www.facebook.com/DeuPaulaNaTV" class="fb"></a></li>
    							<!--li><a href="#" class="fsq"></a></li-->
    							<li><a href="http://twitter.com/deupaulanatv" class="twt"></a></li>
    							<li><a href="http://www.youtube.com/deupaulanatv" class="ytb"></a></li>
    						</ul> 						
    					</li>
    					<li>
    						<a href="http://cmais.com.br/inglescommusica">Inglês com m&uacute;sica</a>
    						<ul class="seguir">
    							<li><a href="https://www.facebook.com/tvcultura" class="fb"></a></li>
    							<li><a href="http://twitter.com//ingles_musica" class="twt"></a></li>
    							<li><a href="http://www.youtube.com/univesptv" class="ytb"></a></li>
    						</ul>
    					</li>
    					<li>
    						<a href="http://cmais.com.br/penarua">P&eacute; na Rua</a>
    						 <ul class="seguir">
    							<li><a href="https://www.facebook.com/penarua" class="fb"></a></li>
    							<li><a href="https://pt.foursquare.com/tvcultura" class="fsq"></a></li>
    							<li><a href="http://twitter.com/pe_na_rua" class="twt"></a></li>
    							<li><a href="http://www.youtube.com/cultura" class="ytb"></a></li>
    						</ul>   						
    					</li>    					    					
    					<li>
    						<a href="http://cmais.com.br/woohoonews">Woohoo News</a>
    						<ul class="seguir">
    							<li><a href="https://www.facebook.com/woohootv" class="fb"></a></li>
    							<li><a href="http://twitter.com/woohootv" class="twt"></a></li>
    							<li><a href="http://www.youtube.com/canalwoohoo" class="ytb"></a></li>
    						</ul>					
    					</li>    					    					  					
    			   </ul>
    			  </div>
    			</div>
    			
    			<ul>
    				<li class="box" id="box-culturalivre">
						<div class="balao" id="b-culturalivre" value="culturalivre"><span></span></div>
    					   
    					<div class="content">		
	    					<a href="http://cmais.com.br/culturalivre" class="titulos" title="Cultura Livre">Cultura Livre</a>
	    					<p>Roberta Martinelli comanda o melhor da nova m&uacute;sica brasileira na TV, no r&aacute;dio e na internet.</p>
	    					<p class="hashtag">#m&uacute;sica</p>
	    					<div class="estrelas"></div>
    					</div>
    					<div id="faces"><img src="http://cmais.com.br/portal/images/capaPrograma/paradalivre/roberta.jpg" alt="Roberta Martinelli" /></div>    					    					
    				</li>
    				<li class="box" id="box-deupaulanatv">
						<div class="balao" id="b-deupaulanatv" value="deupaulanatv"><span></span></div>
    					   
    					<div class="content">		
	    					<a href="http://cmais.com.br/deupaulanatv" class="titulos" title="Deu Paula na TV">Deu Paula na TV</a>
	    					<p>Depois do sucesso na internet, Paula Vilhena invade a TV com muita descontra&ccedil;&atilde;o.</p>
	    					<p class="hashtag">#humor</p>
	    					<div class="estrelas"></div>
    					</div>
    					<div id="faces"><img src="http://cmais.com.br/portal/images/capaPrograma/paradalivre/paula.jpg" alt="Paula Vilhena" /></div>    					    					
    				</li>
    				<li class="box" id="box-inglescommusica">
						<div class="balao" id="b-inglescommusica" value="inglescommusica"><span></span></div>
    					   
    					<div class="content">		
	    					<a href="http://cmais.com.br/inglescommusica" class="titulos" title="Ingl&ecirc;s com M&uacute;sica">Ingl&ecirc;s com M&uacute;sica</a>
	    					<p>Aprenda ingl&ecirc;s cantando com Amanda Acosta os maiores sucessos da m&uacute;sica internacional.</p>
	    					<p class="hashtag">#cultura</p>
	    					<div class="estrelas"></div>
    					</div>
    					<div id="faces"><img src="http://cmais.com.br/portal/images/capaPrograma/paradalivre/amanda.jpg" alt="Amanda Acosta" /></div>    					    				
    				</li>
    				<li class="box" id="box-penarua">
						<div class="balao" id="b-penarua" value="penarua"><span></span></div>
    					   
    					<div class="content">		
	    					<a href="http://cmais.com.br/penarua" class="titulos" title="P&eacute; na Rua">P&eacute; na Rua</a>
	    					<p>V&aacute; &agrave;s ruas com Gabriela Fran&ccedil;a e saiba as tend&ecirc;ncias que est&atilde;o fazendo a cabe&ccedil;a da galera.</p>
	    					<p class="hashtag">#comportamento</p>
	    					<div class="estrelas"></div>
    					</div>
    					<div id="faces"><img src="http://cmais.com.br/portal/images/capaPrograma/paradalivre/gabriela.jpg" alt="Gabriela Fran&ccedil;a" /></div>    					    				
    				</li>
    				<li class="box" id="box-woohoonews">
						<div class="balao" id="b-woohoonews" value="woohoonews"><span></span></div>
    					   
    					<div class="content">		
	    					<a href="http://cmais.com.br/woohoonews" class="titulos" title="Woohoo News">Woohoo News</a>
	    					<p>Bianca Medeiros traz as &uacute;ltimas not&iacute;cias dos esportes radicais no Brasil e no mundo.</p>
	    					<p class="hashtag">#esportes</p>
	    					<div class="estrelas"></div>
    					</div>
    					<div id="faces"><img src="http://cmais.com.br/portal/images/capaPrograma/paradalivre/bianca.jpg" alt="Bianca Medeiros" /></div>    					    				
    				</li>
    			</ul>
    		</div>
    		<div class="dir">    						
				<img src="http://cmais.com.br/portal/images/capaPrograma/paradalivre/mapa.jpg" usemap="#mapa" border="0">
				<map name="mapa">										
					<area id="tp-culturalivre" class="tp" value="culturalivre" shape="rect" coords="342,471,382,528" alt="Cultura Livre" />
					<area id="tp-deupaulanatv" class="tp" value="deupaulanatv" shape="rect" coords="348,285,388,342" alt="Deu Paula na TV" />
					<area id="tp-inglescommusica" class="tp" value="inglescommusica" shape="rect" coords="134,596,174,653" alt="Ingl&ecirc;&s com M&uacute;sica" />
					<area id="tp-penarua" class="tp" shape="rect" value="penarua" coords="171,257,211,314" alt="P&eacute; na Rua" />
					<area id="tp-woohoonews" class="tp" shape="rect" value="woohoonews" coords="134,383,174,440" alt="Woohoo News" />													
				</map>
								
				<div class="tpw" id="tpw-culturalivre">
					
					<div class="content">		
	    				<a href="http://cmais.com.br/culturalivre" class="titulos" title="Cultura Livre">Cultura Livre</a><span></span>
	    				<a class="fechar">Fechar</a>
	    				<p>Roberta Martinelli comanda o melhor da nova m&uacute;sica brasileira na TV, no r&aacute;dio e na internet. </p>
	    				<div class="estrelas"></div>
    				</div>
    				<img src="http://cmais.com.br/portal/images/capaPrograma/paradalivre/roberta.jpg" alt="Roberta Martinelli" />
    				<div class="acao">
    					<p>Às 19:55h</p>
    					<a href="http://cmais.com.br/culturalivre">cmais.com.br/culturalivre</a>
    				</div>
				</div>
				
				<div class="tpw" id="tpw-deupaulanatv">
					
					<div class="content">		
	    				<a href="http://cmais.com.br/deupaulanatv" class="titulos" title="Deu Paula na TV">Deu Paula na TV</a><span></span>
	    				<a class="fechar">Fechar</a>
	    				<p>Depois do sucesso na internet, Paula Vilhena invade a TV com muita descontra&ccedil;&atilde;o.</p>
	    				<div class="estrelas"></div>
    				</div>
    				<img src="http://cmais.com.br/portal/images/capaPrograma/paradalivre/paula.jpg" alt="Paula Vilhena" />
    				<div class="acao">
    					<p>Às 19:25h</p>
    					<a href="http://cmais.com.br/deupaulanatv">cmais.com.br/deupaulanatv</a>
    				</div>
				</div>
				<div class="tpw" id="tpw-inglescommusica">
					
					<div class="content">		
	    				<a href="http://cmais.com.br/inglescommusica" class="titulos" title="Ingl&ecirc;s com M&uacute;sica">Ingl&ecirc;s com M&uacute;sica</a><span></span>
	    				<a class="fechar">Fechar</a>
	    				<p>Aprenda ingl&ecirc;s cantando com Amanda Acosta os maiores sucessos da m&uacute;sica internacional.</p>
	    				<div class="estrelas"></div>
    				</div>
    				<img src="http://cmais.com.br/portal/images/capaPrograma/paradalivre/amanda.jpg" alt="Amanda Acosta" />
    				<div class="acao">
    					<p>Às 19:30h</p>
    					<a href="http://cmais.com.br/inglescommusica">cmais.com.br/ingles-com-musica</a>
    				</div>
				</div>
				<div class="tpw" id="tpw-penarua">
					
					<div class="content">		
	    				<a href="http://cmais.com.br/penarua" class="titulos" title="P&eacute; na Rua">P&eacute; na Rua</a><span></span>
	    				<a class="fechar">Fechar</a>
	    				<p>V&aacute; &agrave;s ruas com Gabriela Fran&ccedil;a e saiba as tend&ecirc;ncias que est&atilde;o fazendo a cabe&ccedil;a da galera.</p>
	    				<div class="estrelas"></div>
    				</div>
    				<img src="http://cmais.com.br/portal/images/capaPrograma/paradalivre/gabriela.jpg" alt="Gabriela Fran&ccedil;a" />
    				<div class="acao">
    					<p>Às 19:15h</p>
    					<a href="http://cmais.com.br/penarua">cmais.com.br/penarua</a>
    				</div>
				</div>		
				<div class="tpw" id="tpw-woohoonews">
					
					<div class="content">		
	    				<a href="http://cmais.com.br/woohoonews" class="titulos" title="Woohoo News">Woohoo News</a><span></span>
	    				<a class="fechar">Fechar</a>
	    				<p>Bianca Medeiros traz as &uacute;ltimas not&iacute;cias dos esportes radicais no Brasil e no mundo.</p>
	    				<div class="estrelas"></div>
    				</div>
    				<img src="http://cmais.com.br/portal/images/capaPrograma/paradalivre/bianca.jpg" alt="Bianca Medeiros" />
    				<div class="acao">
    					<p>Às 19:45h</p>
    					<a href="http://cmais.com.br/woohoonews">cmais.com.br/woohoonews</a>
    				</div>
				</div>		
    		</div>
		</div>
          
	<script>
	var target = false;
	$(function(){
		$('.tp').click(function(){
			$('#tpw-'+target).hide();
			$('#box-'+target).removeClass('ativo');
			target = $(this).attr('value');
			$('#tpw-'+target).show();
			$('#box-'+target).addClass('ativo');
		});
		$('.box').hover(function(){
			$('#tpw-'+target).hide();
			$('#box-'+target).removeClass('ativo');
			target = $(this).children('div:first').attr('value');
			$('#tpw-'+target).show();
			$('#box-'+target).addClass('ativo');
		});
		$('.box').mouseleave(function(){
			$('#tpw-'+target).hide();
			$('#box-'+target).removeClass('ativo');
		});
		$('.fechar').click(function(){
			$('#tpw-'+target).hide();
			$('#box-'+target).removeClass('ativo');
		});
		
		$('a#bt-hora, a#bt-seguir').fancybox({
			'hideOnContentClick': true
		});


	});
	</script>

      
      
    </div>
    <!-- /CAPA SITE -->
    

