<!-- Include jQuery and UI -->
<!--script type="text/javascript" src="http://cmais.com.br/portal/js/coverflow/jquery-1.6.2.min.js"></script-->
<script type="text/javascript" src="http://cmais.com.br/portal/js/coverflow/jquery-ui-1.8.9.custom.min.js"></script>

<!-- Include jQuery CoverFlow widget -->
<script type="text/javascript" src="http://cmais.com.br/portal/js/coverflow/ui.coverflow.js"></script>
<link type="text/css" href="http://cmais.com.br/portal/js/coverflow/css/demos.css" rel="stylesheet" />	

<!-- Transformie is a plugin that makes webkit's CSS transforms work in Internet Explorer -->
<script src="http://cmais.com.br/portal/js/coverflow/sylvester.js" type="text/javascript"></script>
<script src="http://cmais.com.br/portal/js/coverflow/transformie.js" type="text/javascript"></script>

<!-- Include mousewheel dependancies and app files -->
<script src="http://cmais.com.br/portal/js/fancybox/jquery.mousewheel-3.0.4.pack.js" type="text/javascript"></script>
<script src="http://cmais.com.br/portal/js/coverflow/app.js" type="text/javascript"></script>

<!-- fancybox -->
<script type="text/javascript" src="http://cmais.com.br/portal/js/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
<script type="text/javascript" src="http://cmais.com.br/portal/js/fancybox/jquery.easing-1.3.pack.js"></script>
<link rel="stylesheet" href="http://cmais.com.br/portal/js/fancybox/jquery.fancybox-1.3.4.css" type="text/css" media="screen" />

<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/sites/2012.css" type="text/css" />

<script type="text/javascript">
	$(function(){	

		
		var demo = {

			yScroll: function(wrapper, scrollable) {

				var wrapper = $(wrapper), scrollable = $(scrollable),
					loading = $('<div class="loading">Loading...</div>').appendTo(wrapper),
					internal = null,
					images	= null;
					scrollable.hide();
					images = scrollable.find('img');
					completed = 0;
					
					images.each(function(){
						if (this.complete) completed++;	
					});
					
					if (completed == images.length){
						setTimeout(function(){							
							loading.hide();
							wrapper.css({overflow: 'hidden'});						
							scrollable.slideDown('slow', function(){
								enable();	
							});					
						}, 0);	
					}
			
				
				function enable(){
					var inactiveMargin = 99,
						wrapperWidth = wrapper.width(),
						wrapperHeight = wrapper.height(),
						scrollableHeight = scrollable.outerHeight() + 2*inactiveMargin,
						wrapperOffset = 0,
						top = 0,
						lastTarget = null;

					
					wrapper.mousemove(function(e){
						lastTarget = e.target;
						wrapperOffset = wrapper.offset();		
						top = (e.pageY -  wrapperOffset.top) * (scrollableHeight - wrapperHeight) / wrapperHeight - inactiveMargin;
						if (top < 0){
							top = 0;
						}			
						wrapper.scrollTop(top);
					});	
				}			
			}
		}

		
		demo.yScroll('#scroll-pane', 'ul#sortable');

			
	});
	</script>
	
	<script type="text/javascript">
		$(function(){
			total = $('#coverflow').children().length;
			first = Math.round($('#coverflow').children().length/2);
			/*alert(first);*/
			current = $('#coverflow img:nth-child('+first+')');
			$(current).addClass('ativo');
			
			$(current).fancybox({
				'width'				: 640,
				'height'			: 390,
				'autoScale'     	: false,
				'transitionIn'		: 'none',
				'transitionOut'		: 'none',
				'type'				: 'iframe'
			});
			
			$('#coverflow img').click(function() {
			  $(current).removeClass('ativo');
			  $(current).unbind('click.fb');
			  $(this).addClass('ativo');
			  current = $(this);
			  
			  $(this).fancybox({
				'width'				: 640,
				'height'			: 390,
			  	'autoScale'     	: false,
			  	'transitionIn'		: 'none',
			  	'transitionOut'		: 'none',
			  	'type'				: 'iframe'
			  });
			});
			
			$('*').mouseup(function(){
			  //$('#coverflow img').css('z-index')
			  $('#coverflow').children().each(function() {
			  	if ($(this).css('z-index') == total)
			  	{
			      $(current).removeClass('ativo');
			      $(current).unbind('click.fb');
			      $(this).addClass('ativo');
			      current = $(this);
			      
			      $(this).fancybox({
			      	'width'				: 640,
			      	'height'			: 390,
			      	'autoScale'     	: false,
			      	'transitionIn'		: 'none',
			      	'transitionOut'		: 'none',
			      	'type'				: 'iframe'
			      });
			  	}
			  });
			  //alert($(element).attr('src')); 
			});
			
		});	
	</script>
	
	<script type="text/javascript">
        var horario = new Date();
        window.onload = function() {
                if(horario.getHours() < 12 && horario.getHours() > 6) {
                        $('body').addClass('matutino');
                } else if(horario.getHours() < 18 && horario.getHours() > 12) {
                        $('body').addClass('vespertino');
                } else {
                        $('body').addClass('noturno');
                }
                //alert(horario.getHours());
        }
	</script>

<?php use_helper('I18N', 'Date') ?>
<?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'section' => $section)) ?>

    <!-- CAPA SITE -->
    <!--div id="capa-site">
    </div -->
    <!-- /CAPA SITE -->
    
    <div class="pageWrapper">
		<div class="demo">
			<div class="wrapper">
				<div id="coverflow">
		            <img href="http://www.youtube.com/embed/2sufSFoTlHk" class="foto" src="http://cmais.com.br/portal/images/capaPrograma/2012/img-abu.jpg" alt="Abu - Provocações" title="Abu - Provocações" />
		            <img href="http://www.youtube.com/embed/WxVqsfOhDiA" class="foto" src="http://cmais.com.br/portal/images/capaPrograma/2012/img-adrianacouto.jpg" alt="Adriana Couto - Metrópolis" title="Adriana Couto - Metrópolis" />
		            <img href="http://www.youtube.com/embed/J7U-nrzBfHc" class="foto" src="http://cmais.com.br/portal/images/capaPrograma/2012/img-aldoquiroga.jpg" alt="Aldo Quiroga - Matéria de Capa" title="Aldo Quiroga - Matéria de Capa" />
		            <img href="http://www.youtube.com/embed/eQgG4oyyD3c" class="foto" src="http://cmais.com.br/portal/images/capaPrograma/2012/img-alessandracalor.jpg" alt="Alessandra Calor - Cultura 360" title="Alessandra Calor - Cultura 360" />
		            <img href="http://www.youtube.com/embed/Pe4h-DijBWA" class="foto" src="http://cmais.com.br/portal/images/capaPrograma/2012/img-amandaacosta2.jpg" alt="Amanda Costa e Marisa Leite de Barros - Inglês com Música" title="Amanda Costa e Marisa Leite de Barros - Inglês com Música" />
		            <img href="http://www.youtube.com/embed/SLZlcm0mznE" class="foto" src="http://cmais.com.br/portal/images/capaPrograma/2012/img-amirlabaki.jpg" alt="Amir Labaki - Cultura Documentários" title="Amir Labaki - Cultura Documentários" />
		            <img href="http://www.youtube.com/embed/2GZnLz3iPwE" class="foto" src="http://cmais.com.br/portal/images/capaPrograma/2012/img-anelisassumpcao.jpg" alt="Anelis Assumpção - Manos e Minas" title="Anelis Assumpção - Manos e Minas" />
		            <img href="http://www.youtube.com/embed/e4fgi0t_qhY" class="foto" src="http://cmais.com.br/portal/images/capaPrograma/2012/img-biancamedeiros.jpg" alt="Bianca Medeiros - Woohoo News" title="Bianca Medeiros - Woohoo News" />
		            <img href="http://www.youtube.com/embed/EtVv5C784sI" class="foto" src="http://cmais.com.br/portal/images/capaPrograma/2012/img-cacoeastolfo.jpg" alt="Caco e Astolfo - Cocoricó" title="Caco e Astolfo - Cocoricó" />
		            <img href="http://www.youtube.com/embed/V5z8JtPHPGw" class="foto" src="http://cmais.com.br/portal/images/capaPrograma/2012/img-cadaovolpato.jpg" alt="Cadão Volpato - Metrópolis" title="Cadão Volpato - Metrópolis" />
		            <img href="http://www.youtube.com/embed/2sdNw39P8LQ" class="foto" src="http://cmais.com.br/portal/images/capaPrograma/2012/img-carlafiorito.jpg" alt="Carla Fiorito - Vitrine" title="Carla Fiorito - Vitrine" />
		            <img href="http://www.youtube.com/embed/5ywA81CE_Ww" class="foto" src="http://cmais.com.br/portal/images/capaPrograma/2012/img-carlosalberto.jpg" alt="Carlos Alberto Torres - GME" title="Carlos Alberto Torres - GME" />
		            <img href="http://www.youtube.com/embed/AmSofMoZLhg" class="foto" src="http://cmais.com.br/portal/images/capaPrograma/2012/img-culturalivre.jpg" alt="Cultura Livre, Inglês com Música e Pé na Rua" title="Cultura Livre, Inglês com Música e Pé na Rua" />
		            <img href="http://www.youtube.com/embed/mAyQqZzK9Rs" class="foto" src="http://cmais.com.br/portal/images/capaPrograma/2012/img-cunhajr.jpg" alt="Cunha Jr. - Vitrine" title="Cunha Jr. - Vitrine" />
		            <img href="http://www.youtube.com/embed/GWLIzHbu2AQ" class="foto" src="http://cmais.com.br/portal/images/capaPrograma/2012/img-gabifranca.jpg" alt="Gabi França e João Victor - Pé na Rua" title="Gabi França e João Victor - Pé na Rua" />
		            <img href="http://www.youtube.com/embed/JcmmFzbrqGg" class="foto" src="http://cmais.com.br/portal/images/capaPrograma/2012/img-inezitabarroso.jpg" alt="Inezita Barroso - Viola Minha Viola" title="Inezita Barroso - Viola Minha Viola" />
		            <img href="http://www.youtube.com/embed/9ofM-HvVDxQ" class="foto" src="http://cmais.com.br/portal/images/capaPrograma/2012/img-joao.jpg" alt="João - Cocoricó" title="João - Cocoricó" />
		            <img href="http://www.youtube.com/embed/NYmhYMjnFEw" class="foto" src="http://cmais.com.br/portal/images/capaPrograma/2012/img-joaomarcelloboscoli.jpg" alt="João Marcello Bôscoli - Radiola" title="João Marcello Bôscoli - Radiola" />
		            <img href="http://www.youtube.com/embed/b06baWNUym8" class="foto" src="http://cmais.com.br/portal/images/capaPrograma/2012/img-joaomauriciogalindo.jpg" alt="João Maurício Galindo - Pré-Estréia" title="João Maurício Galindo - Pré-Estréia" />
		            <img href="http://www.youtube.com/embed/x0hYmYMWKag" class="foto" src="http://cmais.com.br/portal/images/capaPrograma/2012/img-julio.jpg" alt="Julio - Cocoricó" title="Julio - Cocoricó" />
		            <img href="http://www.youtube.com/embed/t9o-TNX467g" class="foto" src="http://cmais.com.br/portal/images/capaPrograma/2012/img-juliocacoeastolfo.jpg" alt="Júlio, Caco e Astolfo - Cocoricó" title="Júlio, Caco e Astolfo - Cocoricó" />
		            <img href="http://www.youtube.com/embed/wsEzfgTDsis" class="foto" src="http://cmais.com.br/portal/images/capaPrograma/2012/img-ludovicoefilomena.jpg" alt="Ludovico e Filomena - Quintal da Cultura" title="Ludovico e Filomena - Quintal da Cultura" />
		            <img href="http://www.youtube.com/embed/mwnAw4ujvrQ" class="foto" src="http://cmais.com.br/portal/images/capaPrograma/2012/img-manueldacostapinto.jpg" alt="Manuel da Costa Pinto - Entrelinhas" title="Manuel da Costa Pinto - Entrelinhas" />
		            <img href="http://www.youtube.com/embed/mTjin5jqylE" class="foto" src="http://cmais.com.br/portal/images/capaPrograma/2012/img-marcelojaffe.jpg" alt="Marcelo Jaffé - Clássicos" title="Marcelo Jaffé - Clássicos" />
		            <img href="http://www.youtube.com/embed/lTMq3RxU9to" class="foto" src="http://cmais.com.br/portal/images/capaPrograma/2012/img-marciabongiovanni.jpg" alt="Márcia Bongiovanni - Repórter Eco" title="Márcia Bongiovanni - Repórter Eco" />
		            <img href="http://www.youtube.com/embed/V3AI3a05qSE" class="foto" src="http://cmais.com.br/portal/images/capaPrograma/2012/img-mariacristinapoli.jpg" alt="Maria Cristina Poli - Jornal da Cultura" title="Maria Cristina Poli - Jornal da Cultura" />
		            <img href="http://www.youtube.com/embed/qNDCFLdqWdI" class="foto" src="http://cmais.com.br/portal/images/capaPrograma/2012/img-marinaperson.jpg" alt="Marina Person - Cultura Retrô" title="Marina Person - Cultura Retrô" />
		            <img href="http://www.youtube.com/embed/8pjKCvoZR7Y" class="foto" src="http://cmais.com.br/portal/images/capaPrograma/2012/img-maxbo.jpg" alt="Max B.O. - Manos e Minas" title="Max B.O. - Manos e Minas" />         
		            <img href="http://www.youtube.com/embed/SFbuNc1WqSg" class="foto" src="http://cmais.com.br/portal/images/capaPrograma/2012/img-michellaurence.jpg" alt="Michel Laurence - GME" title="Michel Laurence - GME" /> 
		            <img href="http://www.youtube.com/embed/-5SJvVY2bmg" class="foto" src="http://cmais.com.br/portal/images/capaPrograma/2012/img-paulavilhena.jpg" alt="Paula Vilhena - Deu Paula na TV" title="Paula Vilhena - Deu Paula na TV" /> 
		            <img href="http://www.youtube.com/embed/K_77z-qXe40" class="foto" src="http://cmais.com.br/portal/images/capaPrograma/2012/img-renataalmeida.jpg" alt="Renata Almeida - Mostra Internacional de Cinema" title="Renata Almeida - Mostra Internacional de Cinema" />
		            <img href="http://www.youtube.com/embed/YD4-wzVQ0Ks" class="foto" src="http://cmais.com.br/portal/images/capaPrograma/2012/img-robertamartinelli.jpg" alt="Roberta Martinelli - Cultura Livre" title="Roberta Martinelli - Cultura Livre"/> 
		            <img href="http://www.youtube.com/embed/EusSGLdWUW0" class="foto" src="http://cmais.com.br/portal/images/capaPrograma/2012/img-rolandoboldrin.jpg" alt="Rolando Boldrin - Sr. Brasil" title="Rolando Boldrin - Sr. Brasil" /> 
		            <img href="http://www.youtube.com/embed/_oR7JBDeTb8" class="foto" src="http://cmais.com.br/portal/images/capaPrograma/2012/img-teobaldodoroteiaeosorio.jpg" alt="Teobado, Dorotéia e Osório - Quintal da Cultura" title="Teobado, Dorotéia e Osório - Quintal da Cultura" /> 
		            <img href="http://www.youtube.com/embed/ddH1KzTOtFQ" class="foto" src="http://cmais.com.br/portal/images/capaPrograma/2012/img-valeriagrillo.jpg" alt="Valéria Grillo - Jornal da Cultura" title="Valéria Grillo - Jornal da Cultura" /> 
		            <img href="http://www.youtube.com/embed/9u3609GNNT0" class="foto" src="http://cmais.com.br/portal/images/capaPrograma/2012/img-vitorbirner.jpg" alt="Vitor Birner - Cartão Verde" title="Vitor Birner - Cartão Verde" /> 
		            <img href="http://www.youtube.com/embed/8dbk9ETFYak" class="foto" src="http://cmais.com.br/portal/images/capaPrograma/2012/img-vladirlemos.jpg" alt="Vladir Lemos - Cartão Verde" title="Vladir Lemos - Cartão Verde" />  
		            <img href="http://www.youtube.com/embed/eSNyX9zbQPs" class="foto" src="http://cmais.com.br/portal/images/capaPrograma/2012/img-xicosa.jpg" alt="Xico Sá - Cartão Verde" title="Xico Sá - Cartão Verde" />  
		         </div>
			</div>
      
      <a class="link" href="http://cmais.com.br/fim-de-ano-da-tv-cultura" title="Programação de fim de ano" name="Programação de fim de ano">Confira nossa programação de fim de ano!</a>
      <br />
      <a class="link" href="http://tvcultura.cmais.com.br/homepage" title="TV Cultura" name="TV Cultura">Ir para o site da TV Cultura</a>

			<!-- curtir -->
		    <div class="redes">
		      <div class="curtir">
		        <div style="display:block; float: left; margin-right:10px;">
		          <g:plusone size="medium" count="false"></g:plusone>
		        </div>
		        <fb:like href="<?php echo $uri ?>" layout="button_count" show_faces="false" send="true" width="160"></fb:like>
		      </div>
		      <a href="http://twitter.com/share" class="twitter-share-button" data-count="horizontal" data-via="<?php if($site->getTwitterAccount()): ?><?php echo $site->getTwitterAccount() ?><?php else: ?>tvcultura<?php endif; ?>">Tweet</a>
		    </div>
		    <!-- /curtir -->
			<div id='slider'></div>
		</div>		
	</div>