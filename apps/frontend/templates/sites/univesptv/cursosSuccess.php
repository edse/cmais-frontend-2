<!-- BOOTSTRAP CSS -->
<link rel="stylesheet" href="http://cmais.com.br/portal/js/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="http://cmais.com.br/portal/js/bootstrap/css/bootstrap-responsive.min.css">
<link rel="stylesheet" href="http://cmais.com.br/portal/univesptv/css/cursos.css" />
<link href='http://fonts.googleapis.com/css?family=Roboto:300' rel='stylesheet' type='text/css'>
<!-- /BOOTSTRAP CSS -->
<script type="text/javascript">
	//carrossel
	$(function() {
		$('.carrossel').jcarousel({
			scroll : 1
		});
	});
	$(function(){
	    $("body").addClass('bg-home');
	});
</script>


<!-- JS BOOTSTRAP -->
<script src="http://cmais.com.br/portal/js/bootstrap/bootstrap.min.js"></script>
<!-- / JS BOOTSTRAP -->

<?php use_helper('I18N', 'Date')
?>
<?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'section' => $section))
?>

<div class="bg-chamada">
  <?php if(isset($displays["alerta"])) include_partial_from_folder('blocks','global/breakingnews', array('displays' => $displays["alerta"]))
  ?>
</div>
<div class="bg-site"></div>
<!-- CAPA SITE -->
<div id="capa-site" class="home">
  <!-- BARRA SITE -->
  <div id="barra-site">
    <div class="topo-programa">
    	
			<?php include_partial_from_folder('sites/univesptv','global/topo', array('site'=>$site)) ?>
			
			<?php if (isset($displays['destaque-principal'])): ?>      
				<?php if (count($displays['destaque-principal']) > 0): ?>      
      <div id="destaque" class="destaque destaque-3c grid3	">
        <ul class="abas-conteudo conteudo">
					<?php foreach($displays['destaque-principal'] as $k=>$d): ?>
          <li style="display: block;" id="bloco<?php echo $k ?>" class="filho">
          	<a class="media" href="<?php echo $d->retriveUrl() ?>" title="<?php echo $d->getTitle() ?>">
          		<img src="<?php echo $d->retriveImageUrlByImageUsage('image-10-b') ?>" alt="<?php echo $d->getTitle() ?>">
          	</a>
         	</li>
        	<?php endforeach; ?>
        </ul>
        <ul class="abas-menu pag-bola destaque1">
        	<?php foreach($displays['destaque-principal'] as $k=>$d): ?>
        		<?php if($k==0): ?>
          <li class="ativo">
          	<?php else: ?>
          <li>
          	<?php endif; ?>
          	<a href="#bloco<?php echo $k ?>" title="<?php echo $d->getTitle() ?>"></a>
          </li>
          <?php endforeach; ?>
        </ul>
      </div>
      	<?php endif; ?>
      <?php endif; ?>
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
      	<?php if (isset($displays['destaque-1'])): ?>
      		<?php if (count($displays['destaque-1']) > 0): ?>
        <div class="row" id="novos">
          <div class="span10">
            <p class="titulos"><?php echo $displays['destaque-1'][0]->Block->getTitle(); ?></p>
            <div class="carrossel span10 cursos-novos">
              <ul class="thumbnails">
								<?php foreach($displays['destaque-1'] as $k=>$d): ?>
                <li class="">
                	<a class="thumbnail" href="<?php echo $d->retriveUrl(); ?>">
                		<img alt="<?php echo $d->getTitle(); ?>" src="<?php echo $d->retriveImageUrlByImageUsage('image-2') ?>">
                	</a>
                	<a class="tit" href="<?php echo $d->retriveUrl(); ?>" title="<?php echo $d->getTitle(); ?>"><?php echo $d->getTitle(); ?></a>
                	<br />
                	<a class="descricao" href="<?php echo $d->retriveUrl(); ?>" title="<?php echo $d->getTitle(); ?>"><?php echo $d->getDescription(); ?></a>
                </li>
                <?php endforeach; ?>
              </ul>
            </div>
          </div>
        </div>
        	<?php endif; ?>
        <?php endif; ?>
        
        <?php
          $displays = array();
          
          $blocks = Doctrine_Query::create()
            ->select('b.*')
            ->from('Block b, Section s')
            ->where('b.section_id = s.id')
            ->andWhere('s.slug = ?', 'universidades')
            ->andWhere('s.site_id = ?', $site->id)
						->execute();
						
		      if(count($blocks) > 0){
		        foreach($blocks as $b){
		          $displays["destaques"] = $b->retriveDisplays();
		        }
		      }
        ?>
        <?php if (isset($displays['destaques'])): ?>
        	<?php if (count($displays['destaques']) > 0): ?>
        <div class="row" id="universidades">
          <div class="span10">
            <p class="titulos">Universidades</p>
            <a class="todos" href="/cursos/universidades">Ver todos</a>
            <div class="carrossel cursos span10">
              <ul class="thumbnails">
              	<?php foreach($displays['destaques'] as $k=>$d): ?>
                <li class="span3">
                 <div class="thumbnail">
                  <a href="<?php echo $d->retriveUrl(); ?>" name="<?php echo $d->getTitle(); ?>" title="<?php echo $d->getTitle(); ?>">
                  	<img alt="<?php echo $d->getTitle(); ?>" src="<?php echo $d->retriveImageUrlByImageUsage('image-3') ?>">
                  </a>
                  <div class="caption">
                    <h5><a href="<?php echo $d->retriveUrl(); ?>" name="<?php echo $d->getTitle(); ?>" title="<?php echo $d->getTitle(); ?>"><?php echo $d->getTitle(); ?></a></h5>
                    <a href="<?php echo $d->retriveUrl(); ?>" title="<?php echo $d->getTitle(); ?>"><?php echo $d->getDescription(); ?></a>
                  </div>
                </div>
                </li>
                <?php endforeach; ?>
              </ul>
            </div>
          </div>
        </div>
        	<?php endif; ?>
        <?php endif; ?>
        
        <?php
          $displays = array();
          
          $blocks = Doctrine_Query::create()
            ->select('b.*')
            ->from('Block b, Section s')
            ->where('b.section_id = s.id')
            ->andWhere('s.slug = ?', 'ciencia')
            ->andWhere('s.site_id = ?', $site->id)
						->execute();
						
		      if(count($blocks) > 0){
		        foreach($blocks as $b){
		          $displays["destaques"] = $b->retriveDisplays();
		        }
		      }
        ?>
        <?php if (isset($displays['destaques'])): ?>
        	<?php if (count($displays['destaques']) > 0): ?>
        <div class="row" id="ciencia">
          <div class="span10">
            <p class="titulos">Ciência</p>
            <a class="todos" href="/cursos/ciencia">Ver todos</a>
            <div class="carrossel politica span10 cursos">
              <ul class="thumbnails">
              	<?php foreach($displays['destaques'] as $k=>$d): ?>
                <li class="span3">
                 <div class="thumbnail">
                  <a href="<?php echo $d->retriveUrl(); ?>" name="<?php echo $d->getTitle(); ?>" title="<?php echo $d->getTitle(); ?>">
                  	<img alt="<?php echo $d->getTitle(); ?>" src="<?php echo $d->retriveImageUrlByImageUsage('image-3') ?>">
                  </a>
                  <div class="caption">
                    <h5><a href="<?php echo $d->retriveUrl(); ?>" name="<?php echo $d->getTitle(); ?>" title="<?php echo $d->getTitle(); ?>"><?php echo $d->getTitle(); ?></a></h5>
                    <a href="<?php echo $d->retriveUrl(); ?>" title="<?php echo $d->getTitle(); ?>"><?php echo $d->getDescription(); ?></a>
                  </div>
                </div>
                </li>
                <?php endforeach; ?>
              </ul>
            </div>
          </div>
        </div>
        	<?php endif; ?>
        <?php endif; ?>

        <?php
          $displays = array();
          
          $blocks = Doctrine_Query::create()
            ->select('b.*')
            ->from('Block b, Section s')
            ->where('b.section_id = s.id')
            ->andWhere('s.slug = ?', 'humanidades')
            ->andWhere('s.site_id = ?', $site->id)
						->execute();
						
		      if(count($blocks) > 0){
		        foreach($blocks as $b){
		          $displays["destaques"] = $b->retriveDisplays();
		        }
		      }
        ?>
        <?php if (isset($displays['destaques'])): ?>
        	<?php if (count($displays['destaques']) > 0): ?>
        <div class="row" id="humanidades">
          <div class="span10">
            <p class="titulos">Humanidades</p>
            <a class="todos" href="/cursos/humanidades">Ver todos</a>
            <div class="carrossel comunicacao span10 cursos">
              <ul class="thumbnails">
              	<?php foreach($displays['destaques'] as $k=>$d): ?>
                <li class="span3">
                 <div class="thumbnail">
                  <a href="<?php echo $d->retriveUrl(); ?>" name="<?php echo $d->getTitle(); ?>" title="<?php echo $d->getTitle(); ?>">
                  	<img alt="<?php echo $d->getTitle(); ?>" src="<?php echo $d->retriveImageUrlByImageUsage('image-3') ?>">
                  </a>
                  <div class="caption">
                    <h5><a href="<?php echo $d->retriveUrl(); ?>" name="<?php echo $d->getTitle(); ?>" title="<?php echo $d->getTitle(); ?>"><?php echo $d->getTitle(); ?></a></h5>
                    <a href="<?php echo $d->retriveUrl(); ?>" title="<?php echo $d->getTitle(); ?>"><?php echo $d->getDescription(); ?></a>
                  </div>
                </div>
                </li>
                <?php endforeach; ?>
              </ul>
            </div>
          </div>
        </div>
					<?php endif; ?>
				<?php endif; ?>       
      </div>
      <!-- /CAPA -->
      
        <script>
        /*
        $(function() {
					if ($('#novos ul li').length <= 3)
						$('#novos .jcarousel-next, #novos .jcarousel-prev').hide();
					if ($('#humanidades ul li').length <= 3)
						$('#humanidades .jcarousel-next, #humanidades .jcarousel-prev').hide();
					if ($('#ciencia ul li').length <= 3)
						$('#ciencia .jcarousel-next, #ciencia .jcarousel-prev').hide();
					if ($('#universidades ul li').length <= 3)
						$('#universidades .jcarousel-next, #universidades .jcarousel-prev').hide();
				});
				*/
        </script>
      
      
			<?php include_partial_from_folder('sites/univesptv', 'global/apoio') ?>
			
    </div>
    <!-- /CONTEUDO PAGINA -->
  </div>
  <!-- /MIOLO -->
</div>
<!-- /CAPA SITE -->