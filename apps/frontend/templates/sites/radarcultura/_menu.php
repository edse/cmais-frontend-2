
      <!-- menu --->
      <div class="span10 menu-principal">
        
        <?php if(count($siteSections) > 0): ?>        
        <ul class="nav menu-principal nav-tabs">
          <?php foreach($siteSections as $k=>$s): ?>
            <?php $subsections = $s->subsections(); ?>
            <?php if(count($subsections) > 0): ?>
          <!-- botao --->
          <li class="dropdown <?php if($section->getParentSectionId() == $s->id): ?>active<?php endif; ?>">
            <a class="dropdown-toggle" data-toggle="dropdown" href="<?php echo $s->retriveUrl()?>" title="<?php echo $s->getTitle()?>">
              <?php echo $s->getTitle()?>
              <b class="caret"></b>
            </a>
            <ul class="dropdown-menu">
              <?php foreach($subsections as $s): ?>
              <li class="">
                <a href="<?php echo $s->retriveUrl()?>" title="<?php echo $s->getTitle()?>"><?php echo $s->getTitle()?></a>
              </li>
              <?php endforeach; ?>
            </ul>
          </li>
          <!-- botao --->
            <?php else: ?>  
          <!-- botao --->
          <li class="<?php if($section->id == $s->id): ?>active<?php endif; ?>">
            <a href="<?php echo $s->retriveUrl()?>" title="Home"><?php echo $s->getTitle()?></a>
          </li>
          <!-- /botao --->
            <?php endif; ?>
          
          <?php endforeach; ?>          
       </ul>
       <?php endif; ?>
       
       <div class="redes-share pull-right">
         <div class="twitter-share">
           <!--twitter-->
           <a href="https://twitter.com/share" class="twitter-share-button" data-count="vertical" data-size="medium">Tweet</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
           <!--twitter-->
         </div>
         <div class="googleplus-share">
           <!--google plus-->
           <!-- Place this tag where you want the +1 button to render. -->
            <div class="g-plusone" data-size="tall"></div>
            
            <!-- Place this tag after the last +1 button tag. -->
            <script type="text/javascript">
              window.___gcfg = {lang: 'pt-BR'};
            
              (function() {
                var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
                po.src = 'https://apis.google.com/js/plusone.js';
                var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
              })();
            </script>
           <!--google plus-->
         </div>

           
           <div class="facebook-share">  
           <!--face-->  
           <div id="fb-root"></div>
           
           <div class="fb-like" data-send="false" data-layout="box_count" data-width="450" data-show-faces="true" data-font="lucida grande"></div>
           <!--/face-->
         </div>

       </div>
     </div>
     <!-- menu --->
     <!-- logo --->
     <div class="span2 logo pull-right">
       <div>
         <img src="/portal/images/capaPrograma/radarcultura/Logo-Radar.jpg" alt="Radar Cultura"/>
       </div>
       <div class="">
         <a href="javascript: window.open('http://172.20.17.129/radar2012/player.html?start=am','controle','width=450,height=150,left=50,top=50,scrollbars=no'); return false;" class="btn btn-inverse btn-mini"><i class="icon-music icon-white"></i> Rádio Cultura Brasil  </a>
       </div>
     </ul>  
     <!-- logo --->
     