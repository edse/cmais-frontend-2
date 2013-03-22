<?php include_partial_from_folder('blocks', 'global/topo-cmais-mini', array('siteSections'=>$siteSections, 'site' => $site, 'section' => $section)) ?>
<?php
function word_limiter($str,$limit=10)
{
  $str_s = "";
  if(stripos($str," ")){
    $ex_str = explode(" ",$str);
    if(count($ex_str)>$limit){
      for($i=0;$i<$limit;$i++){
        $str_s.=$ex_str[$i]." ";
      }
      return $str_s;
    }else{
      return $str;
    }
  }else{
    return $str;
  }
}
?>
 
  <script>
    <?php
      $images = "";
      foreach($displays['destaque-topo'] as $d) {
        $images .= '"'.$d->retriveImageUrlByImageUsage('original').'",';       
      }
      $images=substr($images, -1);
    ?>
    
            
    var imageUrl = new Array(<?php echo $images ?>);
    
    var currentImageUrl = imageUrl[Math.floor(Math.random() * imageUrl.length)];
    
    $(function(){
      $('#destaque').attr('src', currentImageUrl);
    });
  
  </script> 
  
    <div class="container home" id="geral">

      <!-- Main hero unit for a primary marketing message or call to action -->
      <div class="conteudo"> 
      <?php if(isset($displays['destaque-topo'])): ?>
        <?php if(count($displays['destaque-topo']) > 0): ?>
        <a href="#" id="imagem-destacada"><img id="destaque" src="<?php echo $displays['destaque-topo'][0]->retriveImageUrlByImageUsage('original') ?>" alt="<?php echo $displays['destaque-topo'][0]->Asset->getTitle() ?>" ></a>
        <?php endif; ?>
      <?php endif; ?>
        <ul class="menu">
          <li class="cedoc"><h3><a href="<?php echo $site->retriveUrl() ?>" title="Cedoc">Cedoc</a></h3></li>
          <li><span></span><a href="<?php echo $site->retriveUrl() ?>/quem-somos" title="Quem Somos">quem somos</a></li>
          <li><span></span><a href="<?php echo $site->retriveUrl() ?>/acervo" title="Acervo">acervo</a></li>
          <li><span></span><a href="<?php echo $site->retriveUrl() ?>/contato" title="Contato">contato</a></li>
          <li>
            <?php include_partial_from_folder('sites/cedoc', 'global/formBusca') ?>
          </li>
        </ul>
      </div>
      
      <?php /*
      <!-- Example row of columns -->
      <div class="row-fluid">
        <?php if(isset($displays['destaque-principal'])):?>
          <?php if(count($displays['destaque-principal']) > 0): ?>
            
       <?php $related_video = $displays["destaque-principal"][0]->Asset->retriveRelatedAssetsByAssetTypeId(6); ?> 
       
       <?php
        $display_img_src = $displays['destaque-principal'][0]->retriveImageUrlByImageUsage('image-5');
        if ($display_img_src == '') {
          $related = $displays['destaque-principal'][0]->Asset->retriveRelatedAssetsByRelationType('Preview');   
          $display_img_src = $related[0]->retriveImageUrlByImageUsage('image-5');
        }
       ?>
            
        <?php if(count($related_video) > 0): ?>    
        
          <div class="span8">
            <iframe width="620" height="384" src="http://www.youtube.com/embed/<?php echo $related_video[0]->AssetVideo->getYoutubeId() ?>?rel=0" frameborder="0" allowfullscreen></iframe>
          </div>
         
          <div class="span4">
            <h2><?php echo $displays["destaque-principal"][0]->Asset->getTitle() ?></h2>
  
            <div class="txt">
              <p><?php echo word_limiter(html_entity_decode($displays["destaque-principal"][0]->Asset->AssetContent->getContent()), 75)."..." ?></p>
            </div>
            <a class="mais" href="<?php echo $displays["destaque-principal"][0]->Asset->retriveUrl() ?>" title="+leia mais">+leia mais</a>
          </div>
          
        <?php endif; ?>
        
        <?php if(count($display_img_src) > 0): ?> 
        
         <div class="span4">
          <a class="imagem-destaque" href="<?php echo $displays["destaque-principal"][0]->Asset->retriveUrl() ?>" title=""><img src="<?php echo $display_img_src ?>" alt="<?php echo $displays["destaque-principal"][0]->Asset->getTitle() ?>" /></a>
          <h2><a href="<?php echo $displays["destaque-principal"][0]->Asset->retriveUrl() ?>" title="<?php echo $displays["destaque-principal"][0]->Asset->getTitle() ?>"><?php echo $displays["destaque-principal"][0]->Asset->getTitle() ?></a></h2>
          <div class="txt">
            <p><?php echo word_limiter(html_entity_decode($displays["destaque-principal"][0]->Asset->AssetContent->getContent()), 75)."..." ?></p>
          </div>
          <a class="mais" href="<?php echo $displays["destaque-principal"][0]->Asset->retriveUrl() ?>" title="+leia mais">+leia mais</a>
         </div>
        
        <?php endif; ?>
        
         <?php endif; ?>
        <?php endif; ?>
      </div>
      */ ?>
     <div class="row-fluid">
        <?php if(isset($displays['destaque-1'])):?>
          <?php if(count($displays['destaque-1']) > 0): ?>
                       
        <?php
              $display_img_src = $displays['destaque-1'][0]->retriveImageUrlByImageUsage('image-5');
              if ($display_img_src == '') {
                $related = $displays['destaque-1'][0]->Asset->retriveRelatedAssetsByRelationType('Preview');   
                $display_img_src = $related[0]->retriveImageUrlByImageUsage('image-5');
              }
            ?>
         <div class="span6">
          <a href="<?php echo $displays["destaque-1"][0]->Asset->retriveUrl() ?>" title=""><img src="<?php echo $display_img_src ?>" alt="<?php echo $displays["destaque-1"][0]->Asset->getTitle() ?>" /></a>
          <h2><a href="<?php echo $displays["destaque-1"][0]->Asset->retriveUrl() ?>" title="<?php echo $displays["destaque-1"][0]->Asset->getTitle() ?>"><?php echo $displays["destaque-1"][0]->Asset->getTitle() ?></a></h2>
          <div class="txt">
            <?php echo word_limiter(html_entity_decode($displays["destaque-1"][0]->Asset->AssetContent->getContent()), 75)."..." ?>
          </div>
          <a class="mais" href="<?php echo $displays["destaque-1"][0]->Asset->retriveUrl() ?>" title="+leia mais">+leia mais</a>
        </div>
        
          <?php endif; ?>
        <?php endif; ?>
       
        
       <?php if(isset($displays['destaque-2'])):?>
          <?php if(count($displays['destaque-2']) > 0): ?>
                       
         <?php
              $display_img_src = $displays['destaque-2'][0]->retriveImageUrlByImageUsage('image-5');
              if ($display_img_src == '') {
                $related = $displays['destaque-2'][0]->Asset->retriveRelatedAssetsByRelationType('Preview');
                $display_img_src = $related[0]->retriveImageUrlByImageUsage('image-5');
              }
            ?>
         <div class="span6">
          <a href="<?php echo $displays["destaque-2"][0]->Asset->retriveUrl() ?>" title="<?php echo $displays["destaque-2"][0]->Asset->getTitle() ?>"><img src="<?php echo $display_img_src ?>" alt="<?php echo $displays["destaque-2"][0]->Asset->getTitle() ?>" /></a>
          <h2><a href="<?php echo $displays["destaque-2"][0]->Asset->retriveUrl() ?>" title=""><?php echo $displays["destaque-2"][0]->Asset->getTitle() ?></a></h2>
          <div class="txt">
            <p><?php echo word_limiter(html_entity_decode($displays["destaque-2"][0]->Asset->AssetContent->getContent()), 75)."..." ?></p>
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
            <li class="ministerio"><a href="http://www.cultura.gov.br" target="_blank">Ministério da Cultura</a></li>
            <li class="governo"><a href="http://www.brasil.gov.br" target="_blank">Governo Federal</a></li>
          </ul>
        </div>
      </div>

    </div> <!-- /container -->