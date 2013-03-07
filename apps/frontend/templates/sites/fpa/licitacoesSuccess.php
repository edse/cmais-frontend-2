<?php include_partial_from_folder('blocks', 'global/topo-fpa', array('siteSections'=>$siteSections, 'site' => $site, 'section' => $section)) ?>
<style>
body{background: url(/portal/images/capaPrograma/fpa/bkg-pattern.jpg) !important;}
</style>
<!--CONTAINER-->
<div class="container licitacoes">
  <!--colunas-->
  <div class="row-fluid">
    <!--ESQUERDA-->
    <div class="col-esquerda span7">
      <!--texto licitacoes-->
      <h1><?php echo $section->getTitle(); ?></h1>
      <p>Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos.</p>
      <!--/texto licitacoes-->
      <!-- links subsecoes -->
      <div class="span12" style="margin:0">
        <ul>
          <?php foreach ($section->subsections() as $s): ?>
          <li>
            <a href="<?php echo $s->retriveUrl() ?>" title="titulo">
              <i class="icon-chevron-right"></i>
              <?php echo $s->getTitle() . "<br>"?>
            </a>
          </li>
          <?php endforeach?>
        </ul>  
      </div>
      <!-- /links subsecoes -->
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
<?php include_partial_from_folder('blocks', 'global/footer') ?>