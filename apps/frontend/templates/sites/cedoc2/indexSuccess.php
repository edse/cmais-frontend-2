<?php include_partial_from_folder('blocks', 'global/topo-fpa2', array('siteSections'=>$siteSections, 'site' => $site, 'section' => $section)) ?>    

    
    <div class="container home" id="geral">

      <!-- Main hero unit for a primary marketing message or call to action -->
      <div class="conteudo">
      <?php if(isset($displays['destaque-topo'])): ?>
        <?php if(count($displays['destaque-topo']) > 0): ?>
        <a href="#"><img src="<?php echo $displays['destaque-topo'][0]->retriveImageUrlByImageUsage('original') ?>" alt="<?php echo $displays['destaque-topo'][0]->Asset->getTitle() ?>" ></a>
        <?php endif; ?>
      <?php endif; ?>
        <ul class="menu">
          <li><h3>Cedoc</h3></li>
          <li class="ativo"><span></span><a href="#" title="Quem Somos">quem somos</a></li>
          <li><span></span><a href="#" title="Acerto">acervo</a></li>
          <li><span></span><a href="#" title="Contato">contato</a></li>
          <li>
            <form class="form-search pull-right" action="busca.php">
              <div class="input-append">
                <input type="hidden" name="output" value="search">
                <button type="submit" class="btn"><i class="icon-search"></i></button>
                <input type="text" name="q" class="search-query input-medium" value="buscar imagens" placeholder="buscar imagens">
                </div>
            </form>
          </li>
        </ul>
      </div>

      <!-- Example row of columns -->
      <div class="row-fluid">
        <?php if(isset($displays['destaque-principal'])):?>
          <?php if(count($displays['destaque-principal']) > 0): ?>
            
       <?php $related_video = $displays["destaque-principal"][0]->Asset->retriveRelatedAssetsByAssetTypeId(6); ?> 
       
       <?php
              $display_img_src = $displays['destaque-principal'][0]->retriveImageUrlByImageUsage('image-5-b');
              if ($display_img_src == '') {
                $related = $displays['destaque-principal'][0]->Asset->retriveRelatedAssetsByRelationType('Preview');   
                $display_img_src = $related[0]->retriveImageUrlByImageUsage('image-5-b');
              }
            ?>
            
        <?php if(count($related_video) > 0): ?>    
        
          <div class="span8">
            <iframe width="620" height="384" src="http://www.youtube.com/embed/<?php echo $related_video[0]->AssetVideo->getYoutubeId() ?>?rel=0" frameborder="0" allowfullscreen></iframe>
          </div>
         
          <div class="span4">
            <h2><?php echo $displays["destaque-principal"][0]->Asset->getTitle() ?></h2>
  
            <div class="txt">
              <p><?php echo html_entity_decode($displays["destaque-principal"][0]->Asset->AssetContent->getContent()) ?></p>
            </div>
            <a class="mais" href="<?php echo $displays["destaque-principal"][0]->Asset->retriveUrl() ?>" title="+leia mais">+leia mais</a>
          </div>
          
        <?php endif; ?>
        
        <?php if(count($display_img_src) > 0): ?> 
        
         <div class="span4">
          <a href="<?php echo $displays["destaque-principal"][0]->Asset->retriveUrl() ?>" title=""><img src="<?php echo $display_img_src ?>" alt="<?php echo $displays["destaque-principal"][0]->Asset->getTitle() ?>" /></a>
          <h2><a href="<?php echo $displays["destaque-principal"][0]->Asset->retriveUrl() ?>" title="<?php echo $displays["destaque-principal"][0]->Asset->getTitle() ?>"><?php echo $displays["destaque-principal"][0]->Asset->getTitle() ?></a></h2>
          <div class="txt">
            <p><?php echo html_entity_decode($displays["destaque-principal"][0]->Asset->AssetContent->getContent()) ?></p>
          </div>
          <a class="mais" href="<?php echo $displays["destaque-principal"][0]->Asset->retriveUrl() ?>" title="+leia mais">+leia mais</a>
         </div>
        
        <?php endif; ?>
        
         <?php endif; ?>
        <?php endif; ?>
      </div>

     <div class="row-fluid">
        <?php if(isset($displays['destaque-1'])):?>
          <?php if(count($displays['destaque-1']) > 0): ?>
                       
        <?php
              $display_img_src = $displays['destaque-1'][0]->retriveImageUrlByImageUsage('image-5-b');
              if ($display_img_src == '') {
                $related = $displays['destaque-1'][0]->Asset->retriveRelatedAssetsByRelationType('Preview');   
                $display_img_src = $related[0]->retriveImageUrlByImageUsage('image-5-b');
              }
            ?>
         <div class="span6">
          <a href="<?php echo $displays["destaque-1"][0]->Asset->retriveUrl() ?>" title=""><img src="<?php echo $display_img_src ?>" alt="<?php echo $displays["destaque-1"][0]->Asset->getTitle() ?>" /></a>
          <h2><a href="<?php echo $displays["destaque-1"][0]->Asset->retriveUrl() ?>" title="<?php echo $displays["destaque-1"][0]->Asset->getTitle() ?>"><?php echo $displays["destaque-1"][0]->Asset->getTitle() ?></a></h2>
          <div class="txt">
            <p><?php echo html_entity_decode($displays["destaque-1"][0]->Asset->AssetContent->getContent()) ?></p>
          </div>
          <a class="mais" href="<?php echo $displays["destaque-1"][0]->Asset->retriveUrl() ?>" title="+leia mais">+leia mais</a>
        </div>
        
          <?php endif; ?>
        <?php endif; ?>
       
        
       <?php if(isset($displays['destaque-2'])):?>
          <?php if(count($displays['destaque-2']) > 0): ?>
                       
         <?php
              $display_img_src = $displays['destaque-2'][0]->retriveImageUrlByImageUsage('image-5-b');
              if ($display_img_src == '') {
                $related = $displays['destaque-2'][0]->Asset->retriveRelatedAssetsByRelationType('Preview');
                $display_img_src = $related[0]->retriveImageUrlByImageUsage('image-5-b');
              }
            ?>
         <div class="span6">
          <a href="<?php echo $displays["destaque-2"][0]->Asset->retriveUrl() ?>" title="<?php echo $displays["destaque-2"][0]->Asset->getTitle() ?>"><img src="<?php echo $display_img_src ?>" alt="<?php echo $displays["destaque-2"][0]->Asset->getTitle() ?>" /></a>
          <h2><a href="<?php echo $displays["destaque-2"][0]->Asset->retriveUrl() ?>" title=""><?php echo $displays["destaque-2"][0]->Asset->getTitle() ?></a></h2>
          <div class="txt">
            <p><?php echo html_entity_decode($displays["destaque-2"][0]->Asset->AssetContent->getContent()) ?></p>
          </div>
          <a class="mais" href="<?php echo $displays["destaque-2"][0]->Asset->retriveUrl() ?>" title="+leia mais">+leia mais</a>
        </div>
        <?php endif; ?>
      <?php endif; ?>
        
      </div>
      <div class="row-fluid">
        <div class="span5 apoio"> 
          <h2>Realização:</h2>
          <ul>
            <li class="cultura"><a href="http://www.cmais.com.br">Cultura</a></li>
            <li class="ministerio"><a href="http://www.cultura.gov.br">Ministério da Cultura</a></li>
            <li class="governo"><a href="http://www.brasil.gov.br">Governo Federal</a></li>
          </ul>
        </div>
      </div>

    </div> <!-- /container -->