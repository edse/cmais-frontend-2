      <?php
      /*
      <!--logo-->
      <div class="row-fluid logo">
        <div class="span4">
          <a href="http://radarcultura.cmais.com.br/" title="Radar Cultura">
            <img src="/portal/images/capaPrograma/radarcultura/logo-radar-novo.png" alt="Radar Cultura" />
          </a>
        </div>
        <div class="span8 share">
          <div class="google">
            <g:plusone size="medium" annotation="none" href="http://radarcultura.cmais.com.br"></g:plusone>
          </div>
          <div class="twt">
            <a href="https://twitter.com/radarcultura" class="twitter-follow-button" data-show-count="false" data-lang="pt">Seguir @radarcultura</a>
          </div>
          <div class="fb">
            <fb:like href="https://www.facebook.com/programaradarcultura" layout="button_count" width="200" send="true" show_faces="false"></fb:like>
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
       * */
       ?>
       
<!-- Navbar -->
<div class="navbar navbar-inverse">
  <div class="navbar-inner">
    <div class="container" style="width: 414px;">
      <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="brand" href="http://cmais.com.br/">Cmais</a>
      <div class="nav-collapse collapse">
        <ul class="nav">
          <li class="tvcultura">
            <a href="http://tvcultura.com.br" title="TV Cultura" target="_blank">TV Cultura</a>
          </li>
          <li class="tvratimbum">
            <a href="http://tvratimbum.com.br" title="TV Rá Tim Bum" target="_blank">TV Rá Tim Bum</a>
          </li>
          <li class="multicultura">
            <a href="http://multicultura.com.br" title="Multicultura" target="_blank">Multicultura</a>
          </li>
          <li class="univesp">
            <a href="http://univesp.tv.br" title="Univesp TV" target="_blank">Univesp TV</a>
          </li>
          <li class="active culturabrasil">
            <a href="http://culturabrasil.com.br" title="Cultura Brasil" target="_blank">Cultura Brasil</a>
          </li>
          <li class="culturafm">
            <a href="http://www.culturafm.com.br" title="Cultura FM" target="_blank">Cultura FM</a>
          </li>
          <!--
          <li class="itunes">
            <a href="http://itunes.apple.com/br/app/radio-cultura/id370066053" title="Itunes" target="_blank">Itunes</a>
          </li>
          <li class="facebook">
            <a href="http://facebook.com/tvcultura" title="Facebook" target="_blank">Facebook</a>
          </li>
          <li class="google">
            <a href="https://google.com/+tvcultura" title="Google+" target="_blank">Google+</a>
          </li>
          <li class="instagram">
            <a href="http://instagram.com/tvcultura" title="Instagram" target="_blank">Instagram</a>
          </li>
          <li class="twitter">
            <a href="http://twitter.com/tvcultura" title="Twitter" target="_blank">Twitter</a>
          </li>
          <li class="youtube">
            <a href="http://youtube.com/tvcultura" title="Youtube" target="_blank">Youtube</a>
          </li>
          <li class="feed">
            <a href="http://tvcultura.cmais.com.br/feed" title="Feed" target="_blank">Feed</a>
          </li>
          -->
        </ul>
      </div>
    </div>
  </div>
</div> 
<!--topo cmais-->

<!--section topo--> 
<section class="topo"> 
  <!--container topo--> 
  <div class="container menu row-fluid">
    <!--logo-->
    <div class="logo">
       <a href="http://cmais.com.br/culturabrasil" title="Cultura Brasil">
        <img src="/portal/images/capaPrograma/culturabrasil/logoculturabrasil.jpg" alt="Cultura Brasil" />
      </a>
    </div>
    <!--/logo--> 
    
    <!--menu cultura brasil-->
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
          <li class="<?php if( ($section->id == $s->id) || ($s->getSlug() == "programas" && $section->getSlug() == "home") ): ?>active<?php endif; ?>">
            <a href="<?php if($s->getSlug() == "home"): ?>/<?php else: ?><?php echo $s->retriveUrl()?><?php endif; ?>" title="<?php echo $s->getTitle()?>"><?php echo $s->getTitle()?></a>
          </li>
          <!-- /botao --->
        <?php endif; ?>
      
      <?php endforeach; ?>          
   </ul>
   <?php endif; ?>
   <!--/menu cultura brasil-->
   
   <!--search-->
   <div class="search-culturabrasil">
    <i class="lupa"></i>
    <form class="busca-culturabrasil" action="/busca" method="post">
      <input type="hidden" name="site_id" id="site_id" value="">
      <input class="ipt-txt" type="text" name="term" id="term" value="">
      <input class="ipt-submit" type="submit" value="OK">
    </form>
   </div>
   <!--/search-->
   
   <!-- ouca a radio -->
   <a id="ouca" class="ouca" href="javascript:;">
     <img src="/portal/images/capaPrograma/culturabrasil/oucaculturabrasil.jpg" alt="Ouça a rádio Cultura Brasil"/>
   </a>
    <!-- ouca a radio -->
  <div class="borda-pontilhada borda-menu"></div>  
  </div>
 <!--/container topo-->
  
</section>
<!--/section topo-->
     