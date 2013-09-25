<script type="text/javascript" src="http://cmais.com.br/portal/js/coverflow/jquery-ui-1.8.9.custom.min.js"></script>
<script type="text/javascript" src="http://cmais.com.br/portal/js/coverflow/ui.coverflow.js"></script>
<link type="text/css" href="http://cmais.com.br/portal/js/coverflow/css/demos.css" rel="stylesheet" />	
<script src="http://cmais.com.br/portal/js/coverflow/sylvester.js" type="text/javascript"></script>
<script src="http://cmais.com.br/portal/js/coverflow/transformie.js" type="text/javascript"></script>
<script src="http://cmais.com.br/portal/js/fancybox/jquery.mousewheel-3.0.4.pack.js" type="text/javascript"></script>
<script src="http://cmais.com.br/portal/js/coverflow/app.js?a=2" type="text/javascript"></script>

<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/sites/2012.css" type="text/css" />
<link href="http://cmais.com.br/portal/univesptv/css/geral.css" type="text/css" rel="stylesheet" />
<link href="http://cmais.com.br/portal/css/tvcultura/sites/univesptv.css" type="text/css" rel="stylesheet" />
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
      current = $('#coverflow img:nth-child('+first+')');
      $(current).addClass('ativo');
      
      $('#coverflow img').click(function() {
        if ($(this).attr('class') == 'ativo'){
          url = $(this).attr('href');
          window.open(url,'cursos','');
        }
        $(current).removeClass('ativo');
        $(current).unbind('click.fb');
        $(this).addClass('ativo');
        current = $(this);
      });
      
      
      $('*').mouseup(function(){
        //$('#coverflow img').css('z-index')
        $('#coverflow').children().each(function() {
          if ($(this).css('z-index') == total)
          {
            $(current).removeClass('ativo');
            //$(current).unbind('click.fb');
            $(this).addClass('ativo');
            current = $(this);
          }
        });
        //alert($(element).attr('src')); 
      });
      
    }); 
  </script>


<?php use_helper('I18N', 'Date') ?>
<?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'section' => $section)) ?>

    <!-- CAPA SITE -->
    <div id="capa-site">
    
    	<?php if(isset($displays["alerta"])) include_partial_from_folder('blocks','global/breakingnews', array('displays' => $displays["alerta"])) ?>

      <!-- BARRA SITE -->
      <div id="barra-site">

        <div class="topo-programa">
          <?php /*
          <h2><a href="<?php echo $site->retriveUrl() ?>"><img title="<?php echo $site->getTitle() ?>" alt="<?php echo $site->getTitle() ?>" src="http://cmais.com.br/portal/univesptv/images/logo-univesptv.png" /></a></h2>
		   */
		  ?>
          <h2><img title="Univesp Online - Conhecimento como Bem Público" alt="Univesp Online - Conhecimento como Bem Público" src="http://cmais.com.br/portal/univesptv/images/univesptvcursos_logo.png" /></h2>
		  <?php /*
          
          <?php if(isset($program) && $program->id > 0): ?>
          <?php include_partial_from_folder('blocks','global/like', array('site' => $site, 'uri' => $uri, 'program' => $program)) ?>
          <?php endif; ?>
          
          <?php if(isset($program) && $program->id > 0): ?>
          <!-- horario -->
          <div id="horario">
            <p>Canal digital 2.2 da multiprogramação da TV Cultura</p>
          </div>
          <!-- /horario -->
          <?php endif; ?>
		  */ ?>
		  <h3 style="float:right; padding-top:30px"><img title="Cursos Livres para Todos" alt="Cursos Livres para Todos" src="http://cmais.com.br/portal/univesptv/images/univespcursos_livres.png" /></h3>
        </div>
        
        <?php /*
        <?php if(isset($siteSections)): ?>
        <!-- box-topo -->
        <div class="box-topo grid3">
          
          <?php include_partial_from_folder('blocks','global/sections-menu2', array('siteSections' => $siteSections)) ?>

          <?php if(isset($section)): ?>
            <?php if(!in_array(strtolower($section->getSlug()), array('home','homepage','home-page','index'))): ?>
            <div class="navegacao txt-10">
              <a href="<?php echo $site->retriveUrl() ?>" title="Home">Home</a>
              <span>&gt;</span>
              <a href="<?php echo $section->retriveUrl()?>" title="<?php echo $section->getTitle()?>"><?php echo $section->getTitle()?></a>
            </div>
            <?php endif; ?>
          <?php endif; ?>

        </div>
        <!-- /box-topo -->
        <?php endif; ?>
		 */ ?>

      </div>
      <!-- /BARRA SITE -->
        
      <!-- MIOLO -->
      <div id="miolo">
        
        <?php include_partial_from_folder('blocks','global/shortcuts') ?>

        <!-- CONTEUDO PAGINA -->
		
        <div id="conteudo-pagina">
          
				<?php if($displays["destaque-principal"]): ?>
          <!-- CAPA -->
          <div class="capa grid3">
						<div class="carrosselCursos">
							<div class="pageWrapper">
								<div class="demo">
									<div class="wrapper">
										<div id="coverflow">
											<?php foreach($displays["destaque-principal"] as $d): ?>
												<?php if($d->retriveImageUrlByImageUsage("image-3") != ""): ?>
									        <img href="<?php echo $d->retriveUrl() ?>" src="<?php echo $d->retriveImageUrlByImageUsage("image-3-b") ?>" data-artist="<?php echo $d->getTitle() ?>" data-album="<?php echo $d->getDescription() ?>"/>
												<?php endif; ?>
											<?php endforeach; ?>
										</div>
									</div>
									<div id="slider"></div>
								</div>
							</div>		
						</div>
					</div>
				<?php endif; ?>
					
            <div class="todosCursos">
			 	<div class="topo">
					<p>Todos os cursos</p>
				</div>
				<?php
        	$programs = Doctrine_Query::create()
						->select('p.*')
            ->from('Program p, ChannelProgram cp')
            ->where('p.id = cp.program_id')
            ->andWhere('cp.channel_id = ?', 3)
            ->andWhere('p.is_a_course = ?', 1)
            ->andWhere('p.is_in_menu = ?', 1)
            ->orderBy('p.title')
            ->execute();
          ?>
					<ul>
          <?php foreach($programs as $d): ?>
						<li><a href="http://univesptv.cmais.com.br/<?php echo $d->getSlug()?>-copy"><?php echo $d->getTitle()?></a></li>
					<?php endforeach; ?>
          </ul>
			 	</div>
			 	
            <!-- ESQUERDA -->
            <div id="esquerda" class="grid2">
            
              <!-- col-esq -->
              <div class="col-esq grid1">                
                <?php include_partial_from_folder('blocks','global/display1c-news', array('displays' => $displays["destaque-1"])) ?>
                <?php include_partial_from_folder('blocks','global/display1c-news', array('displays' => $displays["destaque-3"])) ?>
                <?php include_partial_from_folder('blocks','global/display1c-news', array('displays' => $displays["destaque-5"])) ?>                
              </div>
              <!-- /col-esq -->
              
              <!-- col-dir -->
              <div class="col-dir grid1">                
               <?php include_partial_from_folder('blocks','global/display1c-news', array('displays' => $displays["destaque-2"])) ?>
               <?php include_partial_from_folder('blocks','global/display1c-news', array('displays' => $displays["destaque-4"])) ?>
               <?php include_partial_from_folder('blocks','global/display1c-news', array('displays' => $displays["destaque-6"])) ?>
              </div>
              <!-- /col-dir -->
              
            </div>
            <!-- /ESQUERDA -->
            
            <!-- DIREITA -->
            <div id="direita" class="grid1">
            
            </div>
            <!-- /DIREITA -->
            <!-- APOIO -->
	          <ul id="apoio" class="grid3">
	              <li><a href="http://www.desenvolvimento.sp.gov.br" class="governoSp"><img src="http://cmais.com.br/portal/univesptv/images/logo-goversoSp.jpg" alt="Governo do Estado de S&atilde;o Paulo" /></a></li>
	              <li><a href="http://www.fapesp.br" class="fapesp"><img src="http://cmais.com.br/portal/univesptv/images/logo-fapesp.png" alt="FAPESP" /></a></li>
	              <li><a href="http://www.unicamp.br" class="unicamp"><img src="http://cmais.com.br/portal/univesptv/images/logo-unicamp.png" alt="UNICAMP" /></a></li>
	              <li><a href="http://www.unesp.br" class="unesp"><img src="http://cmais.com.br/portal/univesptv/images/logo-unesp.png" alt="UNESP" /></a></li>
	              <li><a href="http://www.usp.br" class="usp"><img src="http://cmais.com.br/portal/univesptv/images/logo-usp.png" alt="USP" /></a></li>
	              <li><a href="http://www.fundap.sp.gov.br" class="fundap"><img src="http://cmais.com.br/portal/univesptv/images/logo-fundap.jpg" alt="FUNDAP" /></a></li>
	              <li><a href="http://www.centropaulasouza.sp.gov.br" class="cps"><img src="http://cmais.com.br/portal/univesptv/images/logo-cps.png" alt="Centro Paula Souza" /></a></li>
	          </ul>
	          <!-- APOIO -->
          </div>
          <!-- /CAPA -->
          
        </div>
        <!-- /CONTEUDO PAGINA -->
        
      </div>
      <!-- /MIOLO -->
      
    </div>
    <!-- /CAPA SITE -->