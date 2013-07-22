<?php include_partial_from_folder('blocks', 'global/topo-cmais-mini', array('siteSections'=>$siteSections, 'site' => $site, 'section' => $section)) ?>    

    
    <div class="container" id="geral">

      <!-- Main hero unit for a primary marketing message or call to action -->
      <div class="conteudo">
        <ul class="menu">
          <li class="cedoc"><h3><a href="<?php echo $site->retriveUrl() ?>" title="Cedoc">Cedoc</a></h3></li>
          <li><span></span><a href="<?php echo $site->retriveUrl() ?>/quem-somos" title="Quem Somos">quem somos</a></li>
          <li class="ativo"><span></span><a href="<?php echo $site->retriveUrl() ?>/acervo" title="Acervo">acervo</a></li>
          <li><span></span><a href="<?php echo $site->retriveUrl() ?>/contato" title="Contato">contato</a></li>
          <li>
            <?php include_partial_from_folder('sites/cedoc', 'global/formBusca') ?>
          </li>
        </ul>
        <div class="span8">
          <?php if(isset($displays['destaque-principal'])):?>
            <?php if(count($displays['destaque-principal']) > 0): ?>
              
              <!-- Verifica vídeo relacionado -->
              <?php $related_video = $displays["destaque-principal"][0]->Asset->retriveRelatedAssetsByAssetTypeId(6); ?> 
       
              <!-- Verifica imagem relacionada -->
              <?php
              $display_img_src = $displays['destaque-principal'][0]->retriveImageUrlByImageUsage('image-5-b');
              if ($display_img_src == '') {
                $related = $displays['destaque-principal'][0]->Asset->retriveRelatedAssetsByRelationType('Preview');   
                $display_img_src = $related[0]->retriveImageUrlByImageUsage('image-5-b');
              }
              ?>
            
              <!-- Exibe destaque com vídeo -->
              <?php if(count($related_video) > 0): ?>
                
               <!--<img src="/portal/images/capaPrograma/cedoc/thumb-2.jpg" alt="<?php echo $displays["destaque-principal"][0]->Asset->getTitle() ?>" />-->
                <iframe width="700" height="433" src="http://www.youtube.com/embed/<?php echo $related_video[0]->AssetVideo->getYoutubeId() ?>?rel=0" frameborder="0" allowfullscreen></iframe>
              
                <h2><?php echo $displays["destaque-principal"][0]->Asset->getTitle() ?></h2>
                <div class="txt">
                <p><?php echo html_entity_decode($displays["destaque-principal"][0]->Asset->AssetContent->getContent()) ?></p>
                </div>
                
              <?php endif; ?>
              
              <!-- Exibe destaque com imagem -->
              <?php if(count($display_img_src) > 0): ?> 
              
                <img src="<?php echo $display_img_src ?>" alt="<?php echo $displays["destaque-principal"][0]->Asset->getTitle() ?>" />
                <!--<iframe width="700" height="433" src="http://www.youtube.com/embed/<?php echo $related_video[0]->AssetVideo->getYoutubeId() ?>?rel=0" frameborder="0" allowfullscreen></iframe-->
              
                <h2><?php echo $displays["destaque-principal"][0]->Asset->getTitle() ?></h2>
                <div class="txt">
                <p><?php echo html_entity_decode($displays["destaque-principal"][0]->Asset->AssetContent->getContent()) ?></p>
                </div>
                
              <?php endif; ?>
              
            <?php endif; ?>
          <?php endif; ?>    
          
        </div>
         
      </div>

      <div class="row-fluid">
        <div class="span5 apoio"> 
          <h2>Realização:</h2>
          <ul>
            <li class="cultura"><a href="http://www.cmais.com.br">Cultura</a></li>
            <li class="ministerio"><a href="http://www.cultura.gov.br" target="_blank">Ministério da Cultura</a></li>
            <li class="governo"><a href="http://www.brasil.gov.br" target="_blank">Governo Federal</a></li>
          </ul>
        </div>
      </div>

    </div> <!-- /container -->