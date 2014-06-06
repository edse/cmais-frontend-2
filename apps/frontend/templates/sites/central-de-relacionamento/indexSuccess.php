<?php if(isset($_GET["step"])==1):?>
<script>
$(document).ready(function(){
  $('html, body').animate({
    scrollTop: $('#cadastro').offset().top
  }, "slow");
});
</script>  
<?php endif?>
<?php include_partial_from_folder('blocks', 'global/topo-fpa', array('siteSections'=>$siteSections, 'site' => $site, 'section' => $section)) ?>
<!--container-->
<div class="container">
  <?php include_partial_from_folder('sites/central-de-relacionamento', 'global/topo', array('site' => $site,'siteSections' => $siteSections, 'section' => $section)) ?>
  <!--colunas-->
  <div class="row-fluid">
    <!--[if lt IE 8]>
        <p style="color:red; background:yellow; width:80%; overflow:hidden; font-weight:bold; font-size: 14px; text-align:center;padding: 10px; margin:20px auto; border:3px dashed red;">Você está usando um navegador antigo. Recomendamos <a href="http://browsehappy.com/" style="color:blue;font-size:18px; text-decoration:underline!important;">que atualize seu navegador</a> para você ter uma expêriencia melhor.</p>
    <![endif]-->
    <!--coluna esquerda-->
    <div class="col-esquerda span5" style="margin:0;">
      <!--destaque principal-->
      <div class="central cinza-claro-2"> 
      <?php if(isset($displays['chamada'])):?>
        <?php if(count($displays['chamada']) > 0): ?>
          <h1><?php echo $displays['chamada'][0]->Asset->getTitle() ?></h1>
          <h3><?php echo $displays['chamada'][0]->Asset->getDescription() ?></h3>
          <p><?php echo html_entity_decode($displays['chamada'][0]->Asset->AssetContent->getContent()) ?></p>
          <br /> 
          <a href="/central-de-relacionamento/perguntas-frequentes" class="btn btn-success btn-large mais-info" title="Perguntas Frequentes">
            <div class="container-btn">
              <i class="ico-perg"></i>Perguntas Frequentes 
            </div>
          </a>
        <?php endif; ?>
      <?php endif; ?>
      </div>
      <!--/destaque principal-->

      <!--botao-->
      <div class="botoes-central">
        <?php if(isset($displays['botoes-central'])):?>
          <?php if(count($displays['botoes-central']) > 0): ?>
            <?php foreach($displays['botoes-central'] as $k=>$d): ?>
            <div class="base-btn">  
              <div class="btn-esquerda cinza-claro-2">
                <a href="<?php echo $d->getUrl() ?>" title="<?php echo $d->getTitle() ?>">
                  <i class="ico ico-<?php echo $d->getLabel() ?>"></i>
                  <h1><?php echo $d->getTitle() ?></h1>
                  <p><?php echo $d->getDescription() ?></p>
                </a>
              </div>
              <div class="btn-esquerda sombra"></div>
            </div>
            <?php endforeach; ?>
          <?php endif; ?>
        <?php endif; ?>
      </div>
      <!--/botao-->
    </div>
    <!--/coluna esquerda-->
    <!--coluna direita-->
    <div class="col-direita span7 ">

      <!-- COLUNA SUB DIR 1 -->
      <div id="cadastro" class="coluna-sub cinza-claro-2">
        <span class="titulo bold"><?php echo $displays["formas-de-atendimento"][0]->Block->getTitle();?></span>
         <!-- COLUNA SUB DIR 2 -->
         <div id="col-sub" class="texto-preto">
            <div class="accordion-group">
              <div class="accordion-heading escuro">
                <i class="icon-circle-arrow-down <?php if(isset($_GET['step'])&&$_GET['step']==1){echo "icon-circle-arrow-down";}else{echo "icon-circle-arrow-right";}?> seta"></i>  
                <a href="javascript:;" class="formas" data-toggle="collapse" data-target="#email-central" data-parent="#col-sub">
                  Por meio eletrônico
                </a>
                <a href="javascript:;"class="fechar" data-toggle="collapse" data-target="#email-central" data-parent="#col-sub">fechar</a>
              </div>
              

             <?php include_partial_from_folder('blocks','global/formCentralRelacionamento'<?php include_partial_from_folder('blocks','global/formCentralRelacionamento', 'site'=>$site, 'section'=>$section) ?>
                
              <?php foreach($displays["formas-de-atendimento"] as $d): ?>
                
            <div class="accordion-group">
              <div class="accordion-heading escuro">
                <i class="icon-circle-arrow-right"></i>  
                <a href="javascript:;" class="formas" data-toggle="collapse" data-target="#<?php echo $d->getId() ?>"  data-parent="#col-sub">
                  <?php echo $d->getTitle() ?>
                </a>
                <a href="javascript:;"class="fechar" data-toggle="collapse" data-target="#<?php echo $d->getId() ?>" data-parent="#col-sub" style="display:none;">fechar</a>
              </div>
              
                <div id="<?php echo $d->getId() ?>" class="fundo-cinza collapse"style="overflow: hidden; clear: both;">
                  <?php echo html_entity_decode($d->Asset->AssetContent->render()) ?>
                </div>
  
            </div>
            <?php endforeach; ?>
          </div>
          <!-- COLUNA SUB DIR 2 -->
        </div>
        <!-- COLUNA SUB DIR 1 --> 
        <?php if(isset($displays["melhore-seu-relacionamento"][0])): ?>
        <div class="coluna-sub cinza-claro-2">
          <h1><?php echo $displays["melhore-seu-relacionamento"][0]->Asset->getTitle() ?></h1>
          <?php echo html_entity_decode($displays["melhore-seu-relacionamento"][0]->Asset->AssetContent->render()) ?>
        </div>  
        <?php endif; ?>
        
        <!--botao-->
        <div class="botoes-central-celular">
          <?php if(isset($displays['botoes-central'])):?>
            <?php if(count($displays['botoes-central']) > 0): ?>
              <?php foreach($displays['botoes-central'] as $k=>$d): ?>
              <div class="base-btn">  
                <div class="btn-esquerda cinza-claro-2">
                  <a href="<?php echo $d->Asset->AssetContent->getHeadline() ?>" title="<?php echo $d->getTitle() ?>">
                    <i class="ico ico-<?php echo $d->Asset->getSlug() ?>"></i>
                    <h1><?php echo $d->getTitle() ?></h1>
                    <p><?php echo $d->Asset->getDescription() ?></p>
                  </a>
                </div>
                <div class="btn-esquerda sombra"></div>
              </div>
              <?php endforeach; ?>
            <?php endif; ?>
          <?php endif; ?>
        </div>
        <!--/botao-->
        
 
      
    </div>
    <!--/coluna direita-->
  </div>
  <!--/colunas-->  
</div>
<!--container-->