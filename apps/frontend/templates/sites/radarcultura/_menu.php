      <!--logo-->
      <div class="row-fluid logo">
        <div class="span4">
          <a href="http://radarcultura.cmais.com.br/" title="Radar Cultura">
            <img src="/portal/images/capaPrograma/radarcultura/logo-radar-novo.png" alt="Radar Cultura" />
          </a>
        </div>
        <div class="span8 share">
          <div class="google">
            <a href="https://plus.google.com/105450700645861288327?prsrc=3" rel="publisher" style="text-decoration:none;">
            <img src="//ssl.gstatic.com/images/icons/gplus-16.png" alt="Google+" style="border:0;width:16px;height:16px;"/></a>
          </div>
          <div class="fb">
            <fb:like href="http://www.facebook.com/programaradarcultura" layout="button_count" show_faces="false" send="false" width="160"></fb:like>
          </div>
          <div class="twt">
            <a href="https://twitter.com/radarcultura" class="twitter-follow-button" data-show-count="false" data-lang="pt">Seguir @radarcultura</a>
          </div>
        </div>  
      </div>  
      <!--logo-->
      <!-- menu --->
      <div class="row-fluid menu-principal">
        
        <?php if(count($siteSections) > 0): ?>        
        <ul class="nav menu-principal nav-pills">
          <?php foreach($siteSections as $k=>$s): ?>
            <?php $subsections = $s->subsections(); ?>
            <?php if(count($subsections) > 0): ?>
          <!-- botao --->
          <li class="dropdown <?php if($section->getParentSectionId() == $s->id): ?>active<?php endif; ?>">
            <a class="dropdown-toggle" data-toggle="dropdown" href="javascript:;" title="<?php echo $s->getTitle()?>">
              <?php echo $s->getTitle()?>
              <b class="caret"></b>
            </a>
            <ul class="dropdown-menu">
              <?php foreach($subsections as $s): ?>
              <li class="">
                <a class="dropdown" href="<?php echo $s->retriveUrl()?>" title="<?php echo $s->getTitle()?>"><?php echo $s->getTitle()?></a>
              </li>
              <?php endforeach; ?>
            </ul>
          </li>
          <!-- botao --->
            <?php else: ?>  
          <!-- botao --->
          <li class="<?php if($section->id == $s->id): ?>active<?php endif; ?>">
            <a href="<?php if($s->getSlug() == "home"): ?>/<?php else: ?><?php echo $s->retriveUrl()?><?php endif; ?>" title="<?php echo $s->getTitle()?>"><?php echo $s->getTitle()?></a>
          </li>
          <!-- /botao --->
            <?php endif; ?>
          
          <?php endforeach; ?>          
       </ul>
       <?php endif; ?>
                                      
       <a id="ouca" class="ouca" href="javascript:;">
         <img src="/portal/images/capaPrograma/radarcultura/ouca-a-radio.png" alt="Ouça a rádio Cultura Brasil"/>
       </a>
       
     </div>
     <!-- menu --->
     