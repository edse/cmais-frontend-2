        <?php /* if(isset($displays)): ?>
          <?php if(count($displays) > 0): ?>
          <!-- DESTAQUE 5C -->     
            <div class="novoDestaque">
              <!-- banner promo-->
              <!--
              <div id="topo-destaque">
                <img src="http://cmais.com.br/portal/images/hometv/qss/apresentadores.png" alt="Quem Sabe Sabe" />
                <a class="banner-topo" href="http://tvcultura.cmais.com.br/qss" title="Quem Sabe Sabe"><img src="http://cmais.com.br/portal/images/hometv/qss/logoqss.png" alt="Quem Sabe Sabe" /></a>
                <h2>vem jogar com a gente! de segunda a sexta, às 19h20</h2>
                <div class="redes">
                  <div class="t">
                    <a href="http://twitter.com/share" class="twitter-share-button" data-count="horizontal" data-via="tvcultura" data-related="tvcultura">Tweet</a>
                  </div> 
                   <div class="f">
                    <fb:like href="http://facebook.com/qss" layout="button_count" show_faces="false" send="true" width="auto"></fb:like>
                  </div>
                  <div class="g">
                    <g:plusone size="medium" count="false"></g:plusone>
                  </div>
                </div>
              </div>
              -->
              <!-- /banner promo-->
              <div class="enunciado">
                <h2><a href="http://tvcultura.cmais.com.br/grade">Veja a grade completa</a></h2>
                <span></span>
              </div>
              <div class="destaque-5">
                <ul id="v2" class="grid3">
                  <?php foreach($displays as $k=>$d): ?>
                  <?php
                    if($d->Asset->Site->getFacebookUrl() != "")
                      $u = $d->Asset->Site->getFacebookUrl();
                    else
                      $u = $d->retriveUrl();
                  ?>
                  <li>
                  <div class="curtir">
                    <fb:like href="<?php echo $u?>" layout="button_count" show_faces="false" width="170"></fb:like>
                  </div>
                    <div class="logo">
                      <a href="<?php echo $d->retriveUrl() ?>">
                        <img title="<?php echo $d->Asset->Site->Program->getTitle() ?>" alt="<?php echo $d->Asset->Site->Program->getTitle() ?>" src="http://midia.cmais.com.br/programs/<?php echo $d->Asset->Site->getImageIcon() ?>" />
                      </a>                      
                    </div>
                    <a class="foto" href="<?php echo $d->retriveUrl() ?>" title="<?php echo $d->getTitle() ?>">
                      <img alt="<?php echo $d->getTitle() ?>" src="<?php echo $d->retriveImageUrlByImageUsage('image-9') ?>"  />
                    </a>
                    <div class="descricao">
                      <a class="tit" href="<?php echo $d->retriveUrl() ?>" title="<?php echo $d->getTitle() ?>">
                        <?php echo $d->getTitle() ?>
                      </a>
                      <a  href="<?php echo $d->retriveUrl() ?>" title="<?php echo $d->getTitle() ?>"><?php echo $d->getLabel() ?></a>
                    </div>
                    
                  </li>
                  <?php endforeach; ?>
                 </ul>
              </div>
            </div>                                                                               
          <!-- /DESTAQUE 5C -->         
          <?php endif; ?>
        <?php endif; ?>



        <?php if(isset($_REQUEST['test'])): */ ?>
          <!-- DESTAQUE 5C -->     
            <div class="novoDestaque">
              <div class="enunciado">
                <h2><a href="http://tvcultura.cmais.com.br/grade">Veja a grade completa</a></h2>
                <span></span>
              </div>
              <div class="destaque-5">
                <ul id="v2" class="grid3">
                  <?php foreach($tvcultura as $k=>$d): ?>
                  <?php
                    if($d->Program->Site->getFacebookUrl() != "")
                      $u = $d->Program->Site->getFacebookUrl();
                    else
                      $u = $d->retriveUrl();
                  ?>
                  <li>
                  <div class="curtir">
                    <fb:like href="<?php echo $u?>" layout="button_count" show_faces="false" width="170"></fb:like>
                  </div>
                    <div class="logo">
                      <a href="<?php echo $d->retriveUrl() ?>">
                        <img title="<?php echo $d->Program->getTitle() ?>" alt="<?php echo $d->Program->getTitle() ?>" src="http://midia.cmais.com.br/programs/<?php echo $d->Program->Site->getImageIcon() ?>" />
                      </a>                      
                    </div>
                    <a class="foto" href="<?php echo $d->retriveUrl() ?>" title="<?php echo $d->getTitle() ?>">
                      <img alt="<?php echo $d->getTitle() ?>" src="<?php echo $d->retriveLiveImage() ?>" style="height:241px; margin-left: -100px;" />
                    </a>
                    <div class="descricao">
                      <a class="tit" href="<?php echo $d->retriveUrl() ?>" title="<?php echo $d->getTitle() ?>">
                        <?php echo html_entity_decode($d->retriveTitle()) ?>
                      </a>
                      <?php if(strlen($d->Program->getSchedule()) <= 30): ?>
                        <a href="<?php echo $d->retriveUrl() ?>" title="<?php echo $d->getTitle() ?>"><?php if($d->Program->getSchedule()!="") echo html_entity_decode(str_replace(":", "h", $d->Program->getSchedule())); ?></a>
                      <?php else: ?>
                        <a href="<?php echo $d->retriveUrl() ?>" title="<?php echo $d->getTitle() ?>"><?php echo ucfirst(format_date($d->getDateStart(), "EEEE")).", às ".str_replace(":", "h", format_date($d->getDateStart(), "t")); ?></a>
                      <?php endif; ?>
                    </div>
                    
                  </li>
                  <?php endforeach; ?>
                 </ul>
              </div>
            </div>                                                                               
          <!-- /DESTAQUE 5C -->         
        <?php //endif; ?>
