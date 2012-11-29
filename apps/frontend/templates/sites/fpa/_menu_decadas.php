<!--TOPO LINHA DO TEMPO -->
<div class="navbar-fixed-top">
  <div class="container">
    <!--TITULO-->
    <div class="titulo">
      <h1>Linha do Tempo</h1>
      <!-- curtir -->
      <div class="redes">
        <div class="curtir">
          <div style="display:block; float: left; margin-right:10px;">
          <g:plusone size="medium" count="false"></g:plusone>
          </div>
          <fb:like href="<?php if($site->getFacebookUrl()): ?><?php echo $site->getFacebookUrl() ?><?php else: ?><?php echo $uri ?><?php endif; ?>" layout="button_count" show_faces="false" send="true" width="160"></fb:like>
        </div>
        <a href="http://twitter.com/share" class="twitter-share-button" data-count="horizontal" data-via="<?php if($site->getTwitterAccount()): ?><?php echo $site->getTwitterAccount() ?><?php else: ?>tvcultura<?php endif; ?>">Tweet</a>
      </div>
      <!-- /curtir -->
    </div>  
    <!--/TITULO-->
    <!--BTN DECADAS-->
    <a href="decada-10" class="decadas first <?php if(substr($section->getTitle(), -2)=="10")echo "active"?>" title="Década 10" >10</a>
    <a href="decada-00" class="decadas <?php if(substr($section->getTitle(), -2)=="00")echo "active"?>" title="Década 00" >00</a>
    <a href="decada-90" class="decadas <?php if(substr($section->getTitle(), -2)=="90")echo "active"?>" title="Década 90" >90</a>
    <a href="decada-80" class="decadas <?php if(substr($section->getTitle(), -2)=="80")echo "active"?>" title="Década 80" >80</a>
    <a href="decada-70" class="decadas <?php if(substr($section->getTitle(), -2)=="70")echo "active"?>" title="Década 70" >70</a>
    <a href="decada-60" class="decadas <?php if(substr($section->getTitle(), -2)=="60")echo "active"?>" title="Década 60" >60</a>
    <!--/BTN DECADAS-->
  </div>
</div>
<!--/TOPO LINHA DO TEMPO -->
