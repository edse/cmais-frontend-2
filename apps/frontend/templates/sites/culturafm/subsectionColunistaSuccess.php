<?php
if(isset($pager)){
  if($pager->count() == 1){
    $assets = $pager->getResults();
    header("Location: http://culturafm.cmais.com.br/" . 'colunistas/' . $section->getSlug() . '/' . $assets[0]->getSlug());
    die();
  }  
} 
?>

<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/secoes/contato.css" type="text/css" />
<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/sites/culturafm.css" type="text/css" />
<script type="text/javascript">
	$(function() {
		$('.m-colunistas, .submenu-interna').mouseover(function() {
			$('.toggle-menu').slideDown("fast");
		});
		$('.m-colunistas, .submenu-interna').mouseleave(function() {
			$('.toggle-menu').slideUp("fast");
		});
	});

</script>
<?php use_helper('I18N', 'Date') ?>
<?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'asset' => $asset, 'section' => $section)) ?>

<!--a href="http://culturafm.cmais.com.br/contato" class="position" title="Dê sua opinião" style="display: none;">
  <div style="position: fixed;top:247px; left:0;" class="btn-feedback"></div>
</a-->

<div id="bg-site"></div>
<!-- CAPA SITE -->
<div id="capa-site">
	<?php include_partial_from_folder('sites/culturafm','global/newheader', array('site' => $site, 'section' => $section, 'uri' => $uri, 'program' => $program, 'siteSections'=>$siteSections)) ?>
	<!-- MIOLO -->
	<div id="miolo">

		<?php include_partial_from_folder('blocks','global/shortcuts') ?>

		<!-- CONTEUDO PAGINA -->
		<div id="conteudo-pagina">
			<!-- CAPA -->
			<div class="capa grid3">
				<!-- ESQUERDA -->
				<div id="esquerda" class="grid2">
					<h3 class="tit-pagina grid2"><?php echo $section->getTitle()?></h3>

					<div class="box-interna grid2">
						<div class="texto">
							<p><?php echo $section->getDescription() ?></p>
						</div>

						<?php /* foreach($displays["programas"] as $k=>$d): ?>
						<div class="bg-cinza">
							<p><strong><a href="<?php echo $d->retriveUrl()?>"><?php echo $d->getTitle()?></a></strong><br />
							<?php echo $d->getDescription()?></p>
						</div>
          	<?php endforeach; */ ?>
					</div>

					<div class="box-interna grid2" style="margin-top: -20px;">
						<!-- div class="texto"></div-->
						<?php if(isset($pager)): ?>
							<?php foreach($pager as $d): ?>
						<div class="bg-cinza">
							<p><strong><a href="<?php echo "/colunistas/" . $section->getSlug() . '/' . $d->getSlug() ?>" title="<?php echo $d->getTitle() ?>"><?php echo $d->getTitle() ?></a></strong><br></p>
						</div>
							<?php endforeach; ?>
						<?php endif; ?>
					</div>
				</div>
				<!-- /ESQUERDA -->
				<!-- DIREITA -->
				<div id="direita" class="grid1">
        	<?php if(isset($displays['sobre'])): ?>
        		<?php if(count($displays['sobre']) > 0): ?>
					<!-- destaque secundario -->
					<div id="destaque" class="uma-coluna destaque grid1">
						<ul class="abas-conteudo conteudo">
							<li style="display: block; height: auto;" id="bloco1" class="filho">
							  <img src="<?php echo $displays['sobre'][0]->retriveImageUrlByImageUsage("image-8-b") ?>" alt="<?php echo $displays['sobre'][0]->getTitle() ?>">
								<p class="titulos"><?php echo $displays['sobre'][0]->getTitle() ?></p>
								<p><?php echo $displays['sobre'][0]->getDescription() ?></p>
						  </li>
							<!--li style="display: block; height: auto;" id="bloco1" class="filho">
               <a class="media" href="<?php echo $displays['sobre'][0]->retriveUrl() ?>" title="<?php echo $displays['sobre'][0]->getTitle() ?>"> 
                 <img src="<?php echo $displays['sobre'][0]->retriveImageUrlByImageUsage("image-8-b") ?>" alt="<?php echo $displays['sobre'][0]->getTitle() ?>">
               </a>
               <a href="<?php echo $displays['sobre'][0]->retriveUrl() ?>" class="titulos" title="<?php echo $displays['sobre'][0]->getTitle() ?>"><?php echo $displays['sobre'][0]->getTitle() ?></a>
                 <p><?php echo $displays['sobre'][0]->getDescription() ?></p>
              </li-->
						</ul>
						<?php
						/*
						<ul class="abas-menu pag-bola destaque1" style="display: none;">
							<li class="ativo"><a href="#bloco1" title="Pérola Paes"></a></li>
						</ul>
						*/
						?>
					</div>
          <!-- /destaque secundario -->
          	<?php endif; ?>
          <?php endif; ?>
          
          
					<!-- BOX PUBLICIDADE -->
					<div class="box-publicidade grid1">
						<!-- culturafm-300x250 -->
						<script type='text/javascript'>
							GA_googleFillSlot("culturafm-300x250");
						</script>
					</div>
          <!-- / BOX PUBLICIDADE -->

				</div>
				<!-- /DIREITA -->
			</div>
			<!-- /CAPA -->
		</div>
		<!-- /CONTEUDO PAGINA -->
	</div>
	<!-- /MIOLO -->
</div>
<!-- / CAPA SITE -->