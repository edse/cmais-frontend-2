<?php use_helper('I18N', 'Date') ?>

<div class="base">
  
  <!--HEADER-->
  <div class="headerF">
    
  </div>
  <!--/HEADER-->
  
  <!--CONTEUDO-->
  <div class="mioloF">

      <!--CONTAINER ASSSET -->
      <div class="container">
     
        <!-- NOTICIA INTERNA -->
        <div class="box-interna grid2">
          
          
          <div class="topo claro">
            <span></span>
            <div class="capa-titulo">
              <h4>Entrevista</h4>
              <a href="/feed" class="rss" title="rss" style="display: block"></a>
            </div>
          </div>
          <h3><?php echo $asset->getTitle() ?></h3>
          <div class="assinatura grid2">
            <p class="sup"><?php echo $asset->AssetContent->getAuthor() ?> <span><?php echo $asset->retriveLabel() ?></span></p>
            <p class="inf"><?php echo format_date($asset->getCreatedAt(), "g") ?> - Atualizado em <?php echo format_date($asset->getUpdatedAt(), "g") ?></p>
            <?php include_partial_from_folder('blocks','global/share-small', array('site' => $site, 'uri' => $uri)) ?>
          </div>
          
          <div class="texto">
            <?php echo html_entity_decode($asset->AssetContent->render()) ?>
          </div>
          
          <?php $relacionados = $asset->retriveRelatedAssetsByRelationType('Asset Relacionado'); ?>
          <?php if(count($relacionados) > 0): ?>
            
            <!-- SAIBA MAIS -->
            <div class="box-padrao grid2" style="margin-bottom: 20px;">
              <div id="saibamais">                                                            
              <h4>Veja +</h4>                                                            
              <ul class="conteudo">
                
                  <li style="width: auto;">
                    <a class="titulos" href="http://172.20.18.133/frontend_dev.php/castelo/dr-abobrinha-2<?php //echo $displays["dr-abobrinha"][0]->retriveUrl()?>" style="width: auto;">Galeria</a>
                  </li>
                
              </ul>
             </div>
            </div>
            <!-- SAIBA MAIS -->
            
          <?php endif; ?>
      
          <?php include_partial_from_folder('blocks','global/share-2c', array('site' => $site, 'uri' => $uri)) ?>
          
           

        </div>
        <!-- /NOTICIA INTERNA --> 
        
      </div>
      <!--CONTAINER ASSSET -->
  </div>
  <!--/CONTEUDO-->
  
  <!--FOOTER-->
  <div class="footerF">
    
  </div>
  <!--/FOOTER-->
  
</div>