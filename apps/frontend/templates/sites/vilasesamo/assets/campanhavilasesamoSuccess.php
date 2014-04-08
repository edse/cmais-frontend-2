<?php  $noscript = "  <noscript>Desculpe mas no seu navegador não esta habilitado o Javascript, habilite-o e recarregue a página para o banner aparecer.</noscript>" ?>
<?php
  /*
   * Pega a campanha (seção filha de "campanhas") e as categorias (seçao filha de "categorias") as quais o asset pertence
   */
  $categories = array();
  $sections = $asset->getSections();
  foreach($sections as $s) {
    if($s->getParentSectionId() > 0) {
      $parentSection = Doctrine::getTable('Section')->findOneById($s->getParentSectionId());
      if($parentSection->getSlug() == "categorias") {
        $categories[] = $s;
      }
    }
  }
  $campaign = false;
  foreach($sections as $s) {
    if($s->getParentSectionId() > 0) {
      $parentSection = Doctrine::getTable('Section')->findOneById($s->getParentSectionId());
      if($parentSection->getSlug() == "campanhas") {
        if($s->getIsActive() == 1) { 
          $campaign = $s;
          break;
        }
      }
    }
  }
     
?>

<link rel="stylesheet" media="only screen and (min-width:501px) and (max-width:979px)" href="http://cmais.com.br/portal/css/tvcultura/sites/vilasesamo2/media_medium_screen.css" />
<link rel="stylesheet" media="only screen and (min-width:50px) and (max-width:500px)" href="http://cmais.com.br/portal/css/tvcultura/sites/vilasesamo2/media_smal_screen.css" />
<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/sites/vilasesamo2/internas.css" type="text/css" />
<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/sites/vilasesamo2/assets.css" type="text/css" />
<!-- Add fancyBox main JS and CSS files -->
	<script type="text/javascript" src="http://cmais.com.br/portal/js/fancybox2.1.5/jquery.fancybox.js"></script>
	<link rel="stylesheet" type="text/css" href="http://cmais.com.br/portal/js/fancybox2.1.5/jquery.fancybox.css?v=2.1.5" media="screen" />




<!-- HEADER -->
<?php include_partial_from_folder('sites/vilasesamo', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'section' => $section)) ?>
<!-- /HEADER -->

<!--content-->
<div id="content">
	<section class="filtro">
  	<h1>
      <i class="icones-sprite-interna icone-participe-grande"></i>
     Participe
   </h1>
  </section>
  <!--section-->
  <section  class="campanhasuccess" >
   <?php include_partial_from_folder('sites/vilasesamo', 'global/form-campanha', array("site" => $site, "asset" => $asset, "campaign" => $campaign, "categories" => $categories)) ?>
	
  </section>
  <!--section-->
  

<?php
	$sectionCampaign = Doctrine::getTable('Section')->findOneBySiteIdAndSlug($site->getId(), $campaign->getSlug());
	$blocks = Doctrine_Query::create()
    ->select('b.*')
    ->from('Block b, Section s')
    ->where('b.section_id = s.id')
    ->andWhere('s.slug = ?', $sectionCampaign->getSlug())//mudar para home quando for no ar
    ->andWhere('b.slug = ?', 'enviados') 
    ->andWhere('s.site_id = ?', $site->id)
    ->execute();

  if(count($blocks) > 0){
    $displays_enviados['enviados'] = $blocks[0]->retriveDisplays();
  }
?>

<?php
foreach($displays_enviados['enviados'] as $ai):
	//echo "1".$ai->Asset->getTitle()."<br>";
	//echo "2".$ai->Asset->getDescription()."<br>";
	//echo "3".$ai->Asset->AssetImage->getHeadline()."fim";
	//echo $ai->Asset->retriveImageUrlByImageUsage('image-13')."<br>";
	//echo $ai->Asset->retriveImageUrlByImageUsage('original');
	//echo $ai->Asset->AssetImage->file;
endforeach;
?>
<section class="todos-itens ">
		<ul id="container" class="row-fluid" style="position: relative; overflow: hidden; height: 764px;">
		<?php if(isset($displays_enviados['enviados'])): ?>
		  <?php if(count($displays_enviados['enviados']) > 0): ?>
		  		<?php foreach($displays_enviados['enviados'] as $ai): ?>
			    <li class="span4 element" style="position: absolute; left: 0px; top: 0px; opacity: 1; -webkit-transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1);">
			    	<a class="fancybox" href="<?php echo $ai->Asset->retriveImageUrlByImageUsage('original'); ?>" title="<?php echo $ai->Asset->getDescription() ?>" aria-label="<?php echo $ai->Asset->AssetImage->getHeadline() ?>">
			    		<div class="container-image"> 
			    			<img src="<?php echo $ai->Asset->retriveImageUrlByImageUsage('image-13'); ?>" alt="<?php echo $ai->getTitle(); ?>">
			    		</div>
			    		<i class="icones-sprite-interna icone-participe-pequeno"></i>
			    		<div><img class="altura" src="http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/altura.png"><?php echo $ai->getTitle(); ?></div>
			    	</a>
			    </li>
			  <?php endforeach; ?>
			<?php endif; ?>
		<?php endif; ?>
		</ul>
    </section>
</div>

<script src="http://cmais.com.br/portal/js/isotope/jquery.isotope.min.js"></script>
<?php echo $noscript ?>
<script src="http://cmais.com.br/portal/js/vilasesamo2/internas-isotope.js"></script>
<?php echo $noscript ?>
<!--/content-->

<script type="text/javascript">
		$(document).ready(function() {
			$('.fancybox').fancybox();
		});

  var colors=["interna jogos","interna atividades","interna videos"];
  var quant = colors.length;
  var which = Math.round(Math.random()*quant);
  if(which > 3){
    which = 3;
  }

  $("body").addClass(colors[which]).addClass("campanhasuccess");
  $("#container li").addClass(colors[which]);
</script>