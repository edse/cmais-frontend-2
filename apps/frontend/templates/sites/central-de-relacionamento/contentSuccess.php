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
    <div class="row-fluid">
      <div id="img-destaque">
        <img src="/portal/images/capaPrograma/central-de-relacionamento/img_exemplo.jpg" alt="titulo imagem"/>
      </div>
    </div>
    <div class="col-esquerda span7">
      <h1><?php echo $asset->getTitle() ?></h1>
      <?php echo html_entity_decode($asset->AssetContent->render()) ?>
      <br/>
    </div>
    <!--/coluna esquerda-->
    <div class="col-direita span4">
      <a href="<?php echo $asset->AssetContent->getHeadline() ?>" class="btn btn-primary btn-large mais-info" title="titulo"><i class=" icon-align-left icon-white"></i>&nbsp;Clique Aqui para + informações</i></a>
    </div>
    <!--coluna direita-->
    
    <!--/coluna direita-->
  </div>
  <!--/colunas-->  
</div>
<!--container-->
