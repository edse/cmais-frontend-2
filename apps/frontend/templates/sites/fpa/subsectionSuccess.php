<?php 
$assets = $pager->getResults();
?>
<?php include_partial_from_folder('blocks', 'global/topo-fpa', array('siteSections'=>$siteSections, 'site' => $site, 'section' => $section)) ?>
<style>
body{background: url(/portal/images/capaPrograma/fpa/bkg-pattern.jpg) !important;}
</style>
<!--CONTAINER-->
<div class="container licitacoes-subsecoes">
  <!--colunas-->
  <div class="row-fluid">
    <!--ESQUERDA-->
    <div class="col-esquerda span7">
      <!--texto subseção-->
      <h1><?php echo $section->getTitle(); ?></h1>
      <!-- p>Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos.</p -->
      <!--/texto subseção-->
      <!-- assets relacionados a subseção -->
      <div class="span12" style="margin:0">
        <?php foreach($pager->getResults() as $d): ?>
          <div class="item">
            <?php $related = $d->retriveRelatedAssetsByAssetTypeId(1); ?>
            <h5><?php echo $d->getTitle() ?></h5>
            <?php echo html_entity_decode($d->AssetContent->render()) ?>
          </div>
        <?php endforeach; ?> 
      </div>
      <!-- /assets relacionados a subseção -->
      <!-- voltar historico -->
      <div class="span3">
        <a class="voltar" href="<?php echo $site->retriveUrl() ?>/<?php echo $section->Parent->getTitle(); ?>">
          <i class="icon-circle-arrow-left"></i>
          Voltar
        </a>
      </div>
      <!--voltar historico-->
      <!-- paginacao -->
      <?php if($pager->haveToPaginate()): ?>
      <div class="pagination pagination-centered">
        <ul>
           <li>
            <?php if($pager->getPage() == $pager->getFirstPage()): ?>
            <span class="prev">
              <i class="icon-circle-arrow-left pull-left"></i>
              Anterior
            </span>   
            <?php else:?> 
            <a href="javascript: goToPage(<?php echo $pager->getPreviousPage() ?>);" class="prev">
              <i class="icon-circle-arrow-left pull-left"></i>
              Anterior
            </a> 
            <?php endif ?>
          </li>
          <?php foreach ($pager->getLinks() as $page): ?>
            <?php if ($page == $pager->getPage()): ?>
              <li><a class="active" href="javascript: goToPage(<?php echo $page ?>);"><?php echo $page ?></a></li>
            <?php else: ?>
              <li><a href="javascript: goToPage(<?php echo $page ?>);"><?php echo $page ?></a></li>
            <?php endif; ?>
          <?php endforeach; ?>
          <li>
            <?php if($pager->getPage() == $pager->getLastPage()): ?>
            <span class="next">
              <i class="icon-circle-arrow-right pull-right"></i>
              Próxima
            </span>  
            <?php else: ?>
            <a href="javascript: goToPage(<?php echo $pager->getNextPage() ?>);" class="next">
              <i class="icon-circle-arrow-right pull-right"></i>
              Próxima
            </a>
            <?php endif; ?>
          </li>
        </ul>
      </div>
      <form id="page_form" action="" method="post">
        <input type="hidden" name="return_url" value="<?php echo $url?>" />
        <input type="hidden" name="page" id="page" value="" />
      </form>
      <script>
        function goToPage(i){
          $("#page").val(i);
          $("#page_form").submit();
        }
      </script>
      <?php endif; ?>
      <!-- /paginacao -->

      
        
    </div>
    <!-- /ESQUERDA-->
    
    <!--DIREITA-->
    <div class="col-direita span4">
      
      <!--CONFIRA VAGAS-->  
      <a href="http://www2.tvcultura.com.br/licitacoes/regulamento_compras_contratos.pdf" class="inscricao btn btn-primary" title="Regulamento de compras e contratos." target="_blank">
        <p>REGULAMENTO DE COMPRAS E CONTRATOS</p>
        <hr>
        <p>Confira as Condições</p>
        <p></p>
      </a>
      <!--/CONFIRA VAGAS-->
    </div>
    <!-- /DIREITA-->
  </div>
  <!--colunas-->
</div>
<!--CONTAINER-->
