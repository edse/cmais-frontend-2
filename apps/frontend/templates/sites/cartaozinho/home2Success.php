<link rel="stylesheet" href="/portal/css/tvcultura/secoes/defaultPrograma.css" type="text/css" />
<link rel="stylesheet" href="/portal/css/tvcultura/sites/<?php echo $section->Site->getSlug() ?>.css" type="text/css" />

<?php use_helper('I18N', 'Date') ?>
<?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'section' => $section)) ?>

<div class="bg-chamada">
  <?php if(isset($displays["alerta"])) include_partial_from_folder('blocks','global/breakingnews', array('displays' => $displays["alerta"])) ?>
</div>
<div class="bg-site home">


    <!-- CAPA SITE -->
    <div id="capa-site" >      

      <!-- BARRA SITE -->
      <div id="barra-site">
        <div class="topo-programa">
       	
          <?php if(isset($program) && $program->id > 0): ?>
          <h2>
            <a href="<?php echo $site->retriveUrl() ?>" style="text-decoration: none;">
              <?php if($program->getImageThumb() != ""): ?>
                <img src="http://midia.cmais.com.br/programs/<?php echo $program->getImageThumb() ?>" alt="<?php echo $program->getTitle() ?>" title="<?php echo $program->getTitle() ?>" />
              <?php else: ?>
                <h3 class="tit-pagina grid1"><?php echo $program->getTitle() ?></h3>
              <?php endif; ?>
            </a>
          </h2>
          <?php endif; ?>
      

          <?php if(isset($program) && $program->id > 0): ?>
          <?php include_partial_from_folder('blocks','global/like', array('site' => $site, 'uri' => $uri, 'program' => $program)) ?>
          <?php endif; ?>
          
          <?php if(isset($program) && $program->id > 0): ?>
          <!-- horario -->
          <div id="horario">
            <p><?php echo html_entity_decode($program->getSchedule()) ?></p>
          </div>
          <!-- /horario -->
          <?php endif; ?>
        </div>

        <!-- box-topo -->
        <div class="box-topo grid3">

          <?php include_partial_from_folder('blocks','global/sections-menu', array('siteSections' => $siteSections)) ?>

          <?php if(!in_array(strtolower($section->getSlug()), array('home','homepage','home-page','index'))): ?>
          <div class="navegacao txt-10">
            <a href="../" title="Home">Home</a>
            <span>&gt;</span>
            <a href="<?php echo $section->retriveUrl()?>" title="<?php echo $section->getTitle()?>"><?php echo $section->getTitle()?></a>
          </div>
          <?php endif; ?>

        </div>
        <!-- /box-topo -->
        
      </div>
      <!-- /BARRA SITE -->

      <!-- MIOLO -->
      <div id="miolo">
        
        <?php include_partial_from_folder('blocks','global/shortcuts') ?>

        <!-- CONTEUDO PAGINA -->
        <div id="conteudo-pagina">
          
          <!-- CAPA -->
          <div class="capa grid3">
          	<div class="destaque-video">
		    <!-- DESTAQUE 2 COLUNAS -->
		    <?php
              $displays = $displays["destaque-principal"]; 
              if(isset($displays)): ?>
              <div class="duas-colunas destaque grid2">
               <img class="acompanhe" src="/portal/images/capaPrograma/cartaozinho/acompanhe.png" alt="Acompanhe o Cartãozinho" />
                  <?php if($displays[0]->Asset->AssetType->getSlug() == "video"): ?>
                    <iframe title="<?php echo $displays[0]->getTitle() ?>" width="450" height="259" src="http://www.youtube.com/embed/<?php echo $displays[0]->Asset->AssetVideo->getYoutubeId(); ?>?rel=0&wmode=transparent#t=0m0s" frameborder="0" allowfullscreen></iframe>
                  <?php endif; ?>
				<a href="/cartaozinho/videos" class="mais-videos" title="Mais Vídeos" name="Mais Vídeos"><img src="/portal/images/capaPrograma/cartaozinho/mais-videos.png" alt="Mais Vídeos"/></a>
			  </div>
            <?php endif; ?>
			<!-- /DESTAQUE 2 COLUNAS -->
			</div>
			<div class="juiza"></div>
			<div class="redes-sociais">
				<a href="#" class="face" name"Facebook" title="Facebook">Facebook</a>
				<a href="#" class="twt" name"Twitter" title="Twitter">Twitter</a>
				<a href="#" class="ytb" name"Youtube" title="Youtube">Youtube</a>
			</div>
			
			<script>
			$(document).ready(function() {
				$('.fechar').click(function(){
					$(this).parent().parent().fadeOut('fast');
				})
				$(".personagens li").click(function () {
					$('.box').not('.bio-'+ $(this).attr('name')).hide();
					$('.bio-'+ $(this).attr('name')).fadeIn('fast');
					
				});
			});
			</script>
          
          
             <div class="personagens">
            	<ul>
            		<li class="b-joao" name="joao"></li>
            		<li class="b-eric" name="eric"></li>
            		<li class="b-pedro" name="pedro"></li>
            		<li class="b-matheus" name="matheus"></li>
            	</ul>
            	
            	<div class="bio">
            		<div class="box bio-joao" style="display: none;" >
            			<div class="seta"></div>
            			<div class="texto">
            				<div class="fechar" name="Fechar" title="Fechar">Fechar</div>
            				<p class="titulo"><img src="/portal/images/capaPrograma/cartaozinho/tit-joao" /></p>
            				<p>Idade: <span>9 anos</span></p>
            				<p>Idade: <span>9 anos</span></p>
            				<p>Idade: <span>9 anos</span></p>
            				<p>Idade: <span>9 anos</span></p>
            				<p>Idade: <span>9 anos</span></p>
            				<p>Idade: <span>9 anos</span></p>
            				<p>Idade: <span>9 anos</span></p>
            				<p>Idade: <span>9 anos</span></p>
            				<p>Idade: <span>9 anos</span></p>
            				<p>Idade: <span>9 anos</span></p>
            				<p>Idade: <span>9 anos</span></p>
            				<p>Idade: <span>9 anos</span></p>
            				<p>Idade: <span>9 anos</span></p>
            				<p>Idade: <span>9 anos</span></p>
            				<p>Idade: <span>9 anos</span></p>
            				<p>Idade: <span>9 anos</span></p>
            				<p>Idade: <span>9 anos</span></p>
            				<p>Idade: <span>9 anos</span></p>
            				<p>Idade: <span>9 anos</span></p>
            				<p>Idade: <span>9 anos</span></p>
            				<p>Idade: <span>9 anos</span></p>
            				<p>Idade: <span>9 anos</span></p>
            			</div>
            			
            		</div>
            		<div class="box bio-eric">
            			<div class="seta"></div>
            			<div class="texto">
            				<div class="fechar" name="Fechar" title="Fechar">Fechar</div>
            				<p class="titulo"><img src="/portal/images/capaPrograma/cartaozinho/tit-eric" /></p>
            				<p>Idade: <span>10 anos</span></p>
            				<p>Idade: <span>10 anos</span></p>
            				<p>Idade: <span>10 anos</span></p>
            				<p>Idade: <span>10 anos</span></p>
            				<p>Idade: <span>10 anos</span></p>
            				<p>Idade: <span>10 anos</span></p>
            				<p>Idade: <span>10 anos</span></p>
            				<p>Idade: <span>10 anos</span></p>
            				<p>Idade: <span>10 anos</span></p>
            				<p>Idade: <span>10 anos</span></p>
            				<p>Idade: <span>10 anos</span></p>
            				<p>Idade: <span>10 anos</span></p>
            				<p>Idade: <span>10 anos</span></p>
            				<p>Idade: <span>10 anos</span></p>
            				<p>Idade: <span>10 anos</span></p>
            				<p>Idade: <span>10 anos</span></p>
            				<p>Idade: <span>10 anos</span></p>
            				<p>Idade: <span>10 anos</span></p>
            				<p>Idade: <span>10 anos</span></p>
            				
            			</div>
            			
            		</div>
            		<div class="box bio-pedro" >
            			<div class="seta"></div>
            			<div class="texto">
            				<div class="fechar" name="Fechar" title="Fechar">Fechar</div>
            				<p class="titulo"><img src="/portal/images/capaPrograma/cartaozinho/tit-pedro" /></p>
            				<p>Idade: <span>11 anos</span></p>
            				<p>Idade: <span>11 anos</span></p>
            				<p>Idade: <span>11 anos</span></p>
            				<p>Idade: <span>11 anos</span></p>
            				<p>Idade: <span>11 anos</span></p>
            				<p>Idade: <span>11 anos</span></p>
            				<p>Idade: <span>11 anos</span></p>
            				<p>Idade: <span>11 anos</span></p>
            				<p>Idade: <span>11 anos</span></p>
            				<p>Idade: <span>11 anos</span></p>
            				<p>Idade: <span>11 anos</span></p>
            				<p>Idade: <span>11 anos</span></p>
            				<p>Idade: <span>11 anos</span></p>
            				<p>Idade: <span>11 anos</span></p>
            				<p>Idade: <span>11 anos</span></p>
            				<p>Idade: <span>11 anos</span></p>
            				<p>Idade: <span>11 anos</span></p>
            				<p>Idade: <span>11 anos</span></p>
            				<p>Idade: <span>11 anos</span></p>
            				<p>Idade: <span>11 anos</span></p>
            				<p>Idade: <span>11 anos</span></p>
            				<p>Idade: <span>11 anos</span></p>
            				<p>Idade: <span>11 anos</span></p>
            			</div>
            			
            		</div>
            		<div class="box bio-matheus" >
            			<div class="seta"></div>
            			<div class="texto">
            				<div class="fechar" name="Fechar" title="Fechar">Fechar</div>
            				<p class="titulo"><img src="/portal/images/capaPrograma/cartaozinho/tit-matheus.png" /></p>
            				<p>Idade: <span>12 anos</span></p>
            				<p>Idade: <span>12 anos</span></p>
            				<p>Idade: <span>12 anos</span></p>
            				<p>Idade: <span>12 anos</span></p>
            				<p>Idade: <span>12 anos</span></p>
            				<p>Idade: <span>12 anos</span></p>
            				<p>Idade: <span>12 anos</span></p>
            				<p>Idade: <span>12 anos</span></p>
            				<p>Idade: <span>12 anos</span></p>
            				<p>Idade: <span>12 anos</span></p>
            				<p>Idade: <span>12 anos</span></p>
            				<p>Idade: <span>12 anos</span></p>
            				<p>Idade: <span>12 anos</span></p>
            				<p>Idade: <span>12 anos</span></p>
            				<p>Idade: <span>12 anos</span></p>
            				<p>Idade: <span>12 anos</span></p>
            				<p>Idade: <span>12 anos</span></p>
            				<p>Idade: <span>12 anos</span></p>
            				<p>Idade: <span>12 anos</span></p>
            			</div>
            			
            		</div>
            		
            	</div>
            </div>
	
         
            
          
            
          </div>
          <!-- /CAPA -->
          
        </div>
        <!-- /CONTEUDO PAGINA -->
        
      </div>
      <!-- /MIOLO -->
      
    </div>
    <!-- /CAPA SITE -->
    </div>
    
