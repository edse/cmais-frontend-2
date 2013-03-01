<?php include_partial_from_folder('blocks', 'global/topo-fpa2', array('siteSections'=>$siteSections, 'site' => $site, 'section' => $section)) ?>    

    
    <div class="container" id="geral">

      <!-- Main hero unit for a primary marketing message or call to action -->
      <div class="hero-unit">
      <?php if(isset($displays['destaque-topo'])): ?>
        <?php if(count($displays['destaque-topo']) > 0): ?>
        <a href="#"><img src="<?php echo $displays['destaque-topo'][0]->retriveImageUrlByImageUsage('original') ?>" alt="<?php echo $displays['destaque-topo'][0]->Asset->getTitle() ?>" ></a>
        <?php endif; ?>
      <?php endif; ?>
        <ul>
          <li><h3>Cedoc</h3></li>
          <li class="ativo"><span></span><a href="<?php echo $site->retriveUrl() ?>/quem-somos" title="Quem Somos">quem somos</a></li>
          <li><span></span><a href="<?php echo $site->retriveUrl() ?>/acervo" title="Acerto">acervo</a></li>
          <li><span></span><a href="<?php echo $site->retriveUrl() ?>/contato" title="Contato">contato</a></li>
          <li>
            <form class="form-search pull-right" action="busca.php">
              <div class="input-append">
                <input type="hidden" name="output" value="search">
                <button type="submit" class="btn"><i class="icon-search"></i></button>
                <input type="text" name="q" class="search-query input-medium">
                
              </div>
            </form>
          </li>
        </ul>
      </div>

      <!-- Example row of columns -->
      <div class="row-fluid">
        <?php if(isset($displays['destaque-principal'])):?>
          <?php if(count($displays['destaque-principal']) > 0): ?>
            
       <?php $related_video = $asset->retriveRelatedAssetsByAssetTypeId(6); ?> 
        <div class="span8">
          <iframe width="620" height="465" src="http://www.youtube.com/embed/<?php echo $related_video[0]->AssetVideo->getYoutubeId() ?>?rel=0" frameborder="0" allowfullscreen></iframe>
        </div>
       
        <div class="span4">
          <h2><?php echo $displays["destaque-principal"][0]->Asset->getTitle() ?></h2>
          <p><?php echo $displays["destaque-principal"][0]->Asset->getDescription() ?></p>
          <a class="mais" href="<?php echo $displays["destaque-principal"][0]->Asset->retriveUrl() ?>" title="+leia mais">+leia mais</a>
        </div>
        
         <?php endif; ?>
        <?php endif; ?>
      </div>

     <div class="row-fluid">
         <div class="span6">
          <a href="#" title=""><img src="/portal/images/capaPrograma/cedoc/thumb-2.jpg" alt="" /></a>
          <h2><a href="#" title="">O Acervo</a></h2>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          <a class="mais" href="#" title="+leia mais">+leia mais</a>
        </div>
       
         <div class="span6">
          <a href="#" title=""><img src="/portal/images/capaPrograma/cedoc/thumb-2.jpg" alt="" /></a>
          <h2><a href="#" title="">Quem somos</a></h2>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          <a class="mais" href="#" title="+leia mais">+leia mais</a>
        </div>
      </div>
      <div class="row-fluid">
        <div class="span4 apoio"> 
          <h2>Realização:</h2>
          <ul>
            <li class="cultura"><a href="#">Cultura</a></li>
            <li class="ministerio"><a href="#">Ministério da Cultura</a></li>
            <li class="governo"><a href="#">Governo Federal</a></li>
          </ul>
        </div>
      </div>

    

    </div> <!-- /container -->