<script>
$(document).ready(function(){
  $(".collapse").collapse();
  $(".dicas").click(function(){
    $(this).prev().toggleClass('icon-minus');
  });
  $('.formas').click(function(){
    $(this).prev().toggleClass('icon-circle-arrow-down');
  });
  $('.col-esquerda a, #voltar').click(function(){ 
    $('html, body').animate({
      scrollTop: $($(this).attr('href')).offset().top
    }, "slow");
  });
});
</script>
<?php include_partial_from_folder('blocks', 'global/topo-fpa', array('siteSections'=>$siteSections, 'site' => $site, 'section' => $section)) ?>
<!--container-->
<div class="container content">
  <?php include_partial_from_folder('sites/central-de-relacionamento', 'global/topo', array('site' => $site,'siteSections' => $siteSections, 'section' => $section)) ?>
  <!--colunas-->
  <div class="row-fluid">
    <!--coluna esquerda-->
    
    <div class="col-esquerda span9">
      <a id="perguntas"></a>
      <h1><?php echo $asset->getTitle() ?></h1>
      <?php echo html_entity_decode($asset->AssetContent->render()) ?>
      <br/>
      <a href="<?php echo $asset->getHeadline() ?>" class="btn btn-primary btn-large mais-info" title="titulo"><i class=" icon-align-left icon-white"></i>&nbsp;Clique Aqui para mais informações</i></a>
    </div>
    <!--/coluna esquerda-->
  </div>
  <!--/colunas-->  
</div>
<!--container--> 