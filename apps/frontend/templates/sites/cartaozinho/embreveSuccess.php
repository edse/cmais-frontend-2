<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/secoes/defaultPrograma.css" type="text/css" />
<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/sites/<?php echo $section->Site->getSlug() ?>.css" type="text/css" />

<?php use_helper('I18N', 'Date') ?>
<?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'section' => $section)) ?>

<div class="bg-chamada">
  <?php if(isset($displays["alerta"])) include_partial_from_folder('blocks','global/breakingnews', array('displays' => $displays["alerta"])) ?>
</div>
<div class="bg-site embreve">
  <div class="box">
	   
	   		<img src="http://cmais.com.br/portal/images/capaPrograma/cartaozinho/tit-horario.png" />
	   		
        	<div class="btn-curtir"><fb:like href="<?php echo $uri ?>" layout="button_count" show_faces="false" send="false" width="160"></fb:like></div>
     
           
      
  </div>
</div>
    
