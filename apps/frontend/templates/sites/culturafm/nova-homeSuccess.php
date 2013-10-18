<script type="text/javascript" src="http://cmais.com.br/portal/js/culturafm.js"></script>
<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/sites/culturafm.css" type="text/css" />
<script type="text/javascript" src="http://cmais.com.br/portal/js/swfobject/swfobject.js"></script>
<?php use_helper('I18N', 'Date') ?>
<?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'asset' => $asset, 'section' => $section)) ?>
<!-- remover este css depois que acabar campanha da radio -->
<script type="text/javascript">
  $(function() {
    $("body").addClass('home');
   $('.m-colunistas, .submenu-interna').mouseover(function() {
     $('.toggle-menu').slideDown("fast");
   });
   $('.m-colunistas, .submenu-interna').mouseleave(function() {
     $('.toggle-menu').slideUp("fast");
   });
  });
</script>
<style type="text/css">
  .programacao { height:255px; }
</style>


<div id="bg-site"></div>
<!-- CAPA SITE -->
<div id="capa-site">
  <?php if(isset($displays["alerta"])) include_partial_from_folder('blocks','global/breakingnews', array('displays' => $displays["alerta"])) ?>

  <!-- BARRA SITE -->
  <div id="barra-site">
       
    <div class="topo-programa" id="home">
      
      <div id="horario" style="margin-top:10px;top:20px;">
        <a href="javascript: window.open('http://culturafm.cmais.com.br/controleremoto','controle','width=400,height=600,scrollbars=no');void(0);" class="aovivo">ao vivo</a>
      </div>
    
      <!-- descomentar esta linha depois q acabar campanha da radio -->
      <h2><a href="http://culturafm.cmais.com.br"><img title="<?php echo $site->getTitle() ?>" alt="<?php echo $site->getTitle() ?>" src="http://midia.cmais.com.br/programs/<?php echo $program->getImageThumb() ?>"></a></h2>
      <?php if(isset($program) && $program->id > 0): ?>
      <?php include_partial_from_folder('sites/culturafm','global/social-network', array('site' => $site, 'uri' => $uri, 'program' => $program)) ?>
      <?php endif;?>
   </div>
   
   
    <?php if(isset($siteSections)): ?>
    <!-- box-topo -->
    <div class="box-topo grid3">
      <?php include_partial_from_folder('blocks','global/sections-menu2', array('siteSections' => $siteSections)) ?>

      <?php if(isset($section)): ?>
	      <?php if(!in_array(strtolower($section->getSlug()), array('home','nova-home','homepage','home-page','index'))): ?>
		      <div class="navegacao txt-10">
		        <a href="<?php echo $site->retriveUrl() ?>" title="Home">Home</a>
		        <span>&gt;</span>
		        <a href="<?php echo $asset->retriveUrl() ?>" title="<?php echo $asset->getTitle()?>"><?php echo $asset->getTitle() ?></a>
		      </div>
	      <?php endif;?>
      <?php endif;?>
    </div>
    <!-- /box-topo -->
    <?php endif;?>
  </div>
  <!-- /BARRA SITE -->
   <!-- /BARRA SITE -->
  <!-- MIOLO -->
  <div id="miolo">
    <?php include_partial_from_folder('blocks','global/shortcuts') ?>

    <!-- CONTEUDO PAGINA -->
    <div id="conteudo-pagina">
      <!-- CAPA -->
      <div class="capa grid3">
 

	<!-- ESQUERDA -->
	<div style="float: left; width: 325px;">

		<!-- DESTAQUE CULTURA AGORA -->
		<div style="float: left; width: 320px;text-align: left; ">
			<h3 style="color: blue">Cultura Agora</h3>
			<?php //if(isset($displays["destaque-cultura-agora"])) include_partial_from_folder('sites/culturafm','global/display', array('displays' => $displays["destaque-cultura-agora"])) ?>
			<?php if(isset($displays["destaque-cultura-agora"])): ?>
				<?php foreach ($displays["destaque-cultura-agora"] as $k => $d): ?>
					<a href="<?php echo $d->retriveUrl()?>" title="<?php echo $d->getTitle()?>">
						<h2><?php echo $d->getTitle()?></h2>
						<p>	<?php echo $d->getDescription()?></p>
					</a>
					<div style="border: 1px dotted gray!important; width:300px;margin:10px;" > </div>
				<?php endforeach;?>
			<?php endif;?>
		</div> 		


		<!-- PROGRAMAÇÃO DO DIA -->
		<div style="float: left; width: 320px;">
            <div class="box-padrao grid1">
              
              <h3 style="color: blue">Programação do dia</h3>
              
              <?php $date = date("Y/m/d");
      			$schedules = Doctrine_Query::create() -> select('s.*') 
      			-> from('Schedule s') 
      			-> where('s.channel_id = ?', 6) 
      			-> andWhere('s.date_start >= ? AND s.date_start <= ?', array($date . ' 00:00:00', $date . ' 23:59:59')) 
      			-> orderBy('s.date_start asc') 
				-> limit(50) 
				-> execute();
              ?>
              <ul class="programacao" style="height: 130px">
                <?php foreach($schedules as $k=>$d): 
			         $agora = 0;
			         if((strtotime(date('Y-m-d H:i:s')) >= strtotime($d->getDateStart())) && (strtotime(date('Y-m-d H:i:s')) <= strtotime($d->getDateEnd()))) $agora = 1;
				?>				                	
                	<li<?php if($agora==1) echo ' style="font-weight:bold!important;"'?>><a href="<?php echo $d->retriveUrl() ?>" name="<?php echo $d->retriveTitle() ?>" title="<?php echo $d->retriveTitle() ?>">
                		<span ><?php echo format_datetime($d->getDateStart(), "HH:mm") ?></span><?php echo $d->retriveTitle() ?>
                		</a></li>
                <?php endforeach; ?>
              </ul>
            </div>
		</div> 	


		<!-- DESTAQUE CLÁSSICOS TV CULTURA -->
		<div style="float: left; width: 320px;">
			<?php if(isset($displays["destaque-classicos"])): ?>
				<?php foreach ($displays["destaque-classicos"] as $k => $d): ?>
		            <div class="box-padrao noticia grid1">
		              <a href="<?php echo str_replace("/home/","/",$d->retriveUrl()) ?>" class="titulos" title="<?php echo $d->getTitle() ?>">
		              	<h3 style="color: blue"><?php echo $d->getTitle() ?></h3>
		                <img name="<?php echo $d->getTitle() ?>" alt="<?php echo $d->getTitle() ?>" src="<?php echo $d->retriveImageUrlByImageUsage("image-3-b") ?>">
		              	<p><?php echo $d->getDescription() ?></p>
		              </a>
		            </div>
              <?php endforeach; ?>
            <?php endif; ?>	
		</div> 	


		<!-- DESTAQUE CD DA SEMANA -->
		<div style="float: left; width: 320px; height: 480px;">

	 		<?php if(isset($displays["destaque-cd-da-semana"])) include_partial_from_folder('blocks','global/display-1c-audio-gallery', array('displays' => $displays["destaque-cd-da-semana"])) ?>
			
		</div> 	
	
	</div>
	<!-- ESQUERDA -->
	


	<!-- CENTRO -->
	<div style="float: left; width: 430px">

		<!-- DESTAQUE CARROSSEL -->
		<div style="float: left; width: 430px; height: 240px;padding-bottom: 20px; ">
          <div id="destaque" class="destaque grid2 chamada-home" style="width: 420px!important;">
            <ul class="abas-conteudo conteudo">
              
			<?php if(isset($displays["destaque-carrossel"])): ?>
			<?php foreach ($displays["destaque-carrossel"] as $k => $d): ?>
              <li style="display: <?php if($k == 0): ?>block;<?php else: ?>none;<?php endif; ?>" id="bloco<?php echo $k; ?>" class="filho">
                
                <a href="<?php echo str_replace("/home/","/",$d->retriveUrl()) ?>" class="titulos" title="<?php echo $d->getTitle() ?>" style="color:blue"><?php echo $d->getTitle() ?></a>
                <a class="media titulos" href="<?php echo str_replace("/home/","/",$d->retriveUrl()) ?>" title="<?php echo $d->getTitle() ?>">
                  <!--p style="width: 420px!important;"><?php echo $d->getLabel() ?></p-->
                  <img style="width: 430px; height: 130px" src="<?php echo $d->retriveImageUrlByImageUsage("image-5-b") ?>" alt="<?php echo $d->getTitle() ?>">
                </a>
                
                <p style="width: 420px!important;"><?php echo $d->getDescription() ?></p>
              </li>
              <?php endforeach; ?>
            </ul>
            <ul class="abas-menu pag-bola destaque1" style="width: 420px!important; margin-top: 120px;">
			<?php foreach ($displays["destaque-carrossel"] as $k => $d): ?>
              <li class="<?php if($k == 0): ?>ativo<?php endif; ?>"><a href="#bloco<?php echo $k ?>" title="<?php echo $d->getTitle() ?>"></a></li>
              <?php endforeach; ?>
            </ul>
          </div>
          <?php endif; ?>
		</div> 		
	

		<!-- DESTAQUE PROGRAMAS -->
		<div style="float: left; width: 430px;">
	 		
			<?php if(isset($displays["destaque-programas"])): ?>
				<?php foreach ($displays["destaque-programas"] as $k => $d): ?>	 		
					<div style="padding:5px; float: left; width: 205px;height: 280px;text-align: left">
						<a href="<?php echo $d->retriveUrl()?>" title="<?php echo $d->getTitle()?>">
							<h2 style="color:blue"><?php echo $d->getTitle() ?></h2>
							<img src="<?php echo $d->retriveImageUrlByImageUsage("image-2-b") ?>" alt="<?php echo $d->getLabel() ?>" />
							<p><?php echo $d->getDescription()?></p>
						</a>
					</div>	
			    <?php endforeach; ?>
			 <?php endif; ?>
		</div> 	
		

		<!-- DESTAQUE COMPOSITOR DO MES -->
		<div style="float: left; width: 430px;">
	 		
			<?php if(isset($displays["destaque-compositor-mes"])): ?>
				<?php foreach ($displays["destaque-compositor-mes"] as $k => $d): ?>	 		
					<div style="padding:5px; float: left; width: 205px; padding-bottom: 20px; text-align: left">
						<a href="<?php echo $d->retriveUrl()?>" title="<?php echo $d->getTitle()?>">
							<h2 style="color:blue">Compositor do Mês</h2>
							<img src="<?php echo $d->retriveImageUrlByImageUsage("image-2-b") ?>" alt="<?php echo $d->getLabel() ?>" />
							<p><?php echo $d->getTitle() ?></p>
						</a>
					</div>	
			    <?php endforeach; ?>
			 <?php endif; ?>
			 
			 
					<div style="padding:5px; float: left; width: 205px; padding-bottom: 20px; text-align: left">
							<h2 style="color:blue">Newsletter</h2>
							<p>Cadastre-se para receber e-mails com destaques da nossa programação.</p>
							<form action="" method="post">
								<input type="text" name="email" placeholder="Digite seu e-mail" id="email" />
								<input type="submit" value="Enviar" />
							</form>
					</div>	
			 
		</div> 			
		
		

		<!-- FACEBOOK -->
		<div style="float: left; width: 422px; height: 340px;">
			<div id="fb-root"></div>
			<script>(function(d, s, id) {
			  var js, fjs = d.getElementsByTagName(s)[0];
			  if (d.getElementById(id)) return;
			  js = d.createElement(s); js.id = id;
			  js.src = "//connect.facebook.net/pt_BR/all.js#xfbml=1";
			  fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));</script>
			
			
			<div class="fb-like-box" data-href="http://facebook.com/culturafmoficial" data-width="422" data-height="340" data-colorscheme="light" data-show-faces="true" data-header="true" data-stream="false" data-show-border="true"></div>
		</div> 	


	</div>
	<!-- CENTRO -->
	



	<!-- DIREITA -->
	<div style="border: 1px solid pink;float: left; width: 208px; height: 900px">
		<!-- DESTAQUE MAIS OUVIDOS -->
		
		<?php if(isset($displays["destaque-mais-ouvidos"])): ?>
			<?php foreach ($displays["destaque-compositor-mes"] as $k => $d): ?>	 		
				<div style="padding:5px; float: left; width: 205px; padding-bottom: 20px; text-align: left">
					<a href="<?php echo $d->retriveUrl()?>" title="<?php echo $d->getTitle()?>">
						<h2 style="color:blue">Mais Ouvidos</h2>
						<img src="<?php echo $d->retriveImageUrlByImageUsage("image-2-b") ?>" alt="<?php echo $d->getLabel() ?>" />
						<p><?php echo $d->getTitle() ?></p>
					</a>
				</div>	
		    <?php endforeach; ?>
		 <?php endif; ?>
		
	</div>
	<!-- DIREITA -->

</div>



      </div>
      <!-- /CAPA -->
    </div>
    <!-- /CONTEUDO PAGINA -->
  </div>
  <!-- /MIOLO -->
</div>
<!-- / CAPA SITE -->