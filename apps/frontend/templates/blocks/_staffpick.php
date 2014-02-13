          <?php
            $cultura = Doctrine_Query::create()
              ->select('a.*')
              ->from('Asset a, AssetVideo av')
              ->where('a.id = av.asset_id')
              ->andWhere('a.site_id != 1149')
              ->andWhere('a.is_active = 1')
              ->andWhere('a.asset_type_id = 6')
              ->andWhere("av.youtube_id != ''")
              ->limit(16)
              ->orderBy('a.id desc')
              ->execute();

            $musica = Doctrine_Query::create()
              ->select('a.*')
              ->from('Asset a, AssetVideo av')
              ->where('a.id = av.asset_id')
              ->andWhere('a.site_id != 1149')
              ->andWhere('a.is_active = 1')
              ->andWhere('a.category_id = 2')
              ->andWhere('a.asset_type_id = 6')
              ->andWhere("av.youtube_id != ''")
              ->limit(16)
              ->orderBy('a.id desc')
              ->execute();

            $jornalismo = Doctrine_Query::create()
              ->select('a.*')
              ->from('Asset a, AssetVideo av')
              ->where('a.id = av.asset_id')
              ->andWhere('a.site_id != 1149')
              ->andWhere('a.is_active = 1')
              ->andWhere('a.category_id = 4')
              ->andWhere('a.asset_type_id = 6')
              ->andWhere("av.youtube_id != ''")
              ->limit(16)
              ->orderBy('a.id desc')
              ->execute();

            $educacao = Doctrine_Query::create()
              ->select('a.*')
              ->from('Asset a, AssetVideo av')
              ->where('a.id = av.asset_id')
              ->andWhere('a.site_id != 1149')
              ->andWhere('a.is_active = 1')
              ->andWhere('a.category_id = 1')
              ->andWhere('a.asset_type_id = 6')
              ->andWhere("av.youtube_id != ''")
              ->limit(16)
              ->orderBy('a.id desc')
              ->execute();

            $infantil = Doctrine_Query::create()
              ->select('a.*')
              ->from('Asset a, AssetVideo av')
              ->where('a.id = av.asset_id')
              ->andWhere('a.site_id != 1149')
              ->andWhere('a.is_active = 1')
              ->andWhere('a.category_id = 3')
              ->andWhere('a.asset_type_id = 6')
              ->andWhere("av.youtube_id != ''")
              ->limit(16)
              ->orderBy('a.id desc')
              ->execute();

            $arte = Doctrine_Query::create()
              ->select('a.*')
              ->from('Asset a, AssetVideo av')
              ->where('a.id = av.asset_id')
              ->andWhere('a.site_id != 1149')
              ->andWhere('a.is_active = 1')
              ->andWhere('a.category_id = 5')
              ->andWhere('a.asset_type_id = 6')
              ->andWhere("av.youtube_id != ''")
              ->limit(16)
              ->orderBy('a.id desc')
              ->execute();

            $especiais = Doctrine_Query::create()
              ->select('a.*')
              ->from('Asset a, AssetVideo av')
              ->where('a.id = av.asset_id')
              ->andWhere('a.site_id != 1149')
              ->andWhere('a.is_active = 1')
              ->andWhere('a.category_id = 6')
              ->andWhere('a.asset_type_id = 6')
              ->andWhere("av.youtube_id != ''")
              ->limit(16)
              ->orderBy('a.id desc')
              ->execute();
                            
            $juvenil = Doctrine_Query::create()
              ->select('a.*')
              ->from('Asset a, AssetVideo av')
              ->where('a.id = av.asset_id')
              ->andWhere('a.site_id != 1149')
              ->andWhere('a.is_active = 1')
              ->andWhere('a.category_id = 7')
              ->andWhere('a.asset_type_id = 6')
              ->andWhere("av.youtube_id != ''")
              ->limit(16)
              ->orderBy('a.id desc')
              ->execute();
            ?>
          <!-- MENU-RODAPE -->
          <div id="menu-rodape" class="grid3">
            <ul class="abas-menu abas">
              <li class="ativo minha-cultura"><a href="#minha-cultura" title="minha cultura">minha cultura</a><span class="decoracao"></span></li>
              <li class="musica"><a href="#musica" title="m&uacute;sica">m&uacute;sica</a><span class="decoracao"></span></li>
              <li class="jornalismo"><a href="#jornalismo" title="jornalismo">jornalismo</a><span class="decoracao"></span></li>
              <li class="educacao"><a href="#educacao" title="educa&ccedil;&atilde;o">educa&ccedil;&atilde;o</a><span class="decoracao"></span></li>
              <li class="infantil"><a href="#infantil" title="infantil">infantil</a><span class="decoracao"></span></li>
              <li class="arte-cultura"><a href="#arte-cultura" title="arte &amp; cultura">arte &amp; cultura</a><span class="decoracao"></span></li>
              <!--li class="especiais"><a href="#especiais" title="especiais">especiais</a><span class="decoracao"></span></li-->
              <!--li class="juvenil"><a href="#juvenil" title="juvenil">juvenil</a><span class="decoracao"></span></li-->
            </ul>
            <div class="abas-conteudo conteudo-rodape grid3">
              <div id="minha-cultura" class="filho blocos" style="display:block;">
                <div class="carrossel">
                  <?php if(isset($cultura)): ?>
                  <ul class="minha-cultura">
                    <?php foreach($cultura as $d): ?>
                    <li>
                      <div class="conteudo-lista">
                        <a href="<?php echo $d->retriveUrl() ?>" class="bg"><img class="box-video" src="<?php echo $d->retriveImageUrlByImageUsage('image-3') ?>" alt="<?php echo $d->getTitle() ?>" /><span></span></a>
                        <h3><?php echo $d->Site->getTitle() ?></h3>
                        <p><a href="<?php echo $d->retriveUrl() ?>"><?php echo $d->getTitle() ?></a></p>
                      </div>
                    </li>
                    <?php endforeach; ?>
                  </ul>
                  <?php endif; ?>
                </div>
              </div>
              <!-- / BLOCOS --><!-- BLOCOS -->
              <div id="musica" class="filho blocos" style="display:none;">
                <div class="carrossel">
                  <?php if(isset($musica)): ?>
                  <ul class="musica" style="width:1760px;!important">
                    <?php foreach($musica as $d): ?>
                    <li>
                      <div class="conteudo-lista">
                        <a href="<?php echo $d->retriveUrl() ?>" class="bg"><img class="box-video" src="<?php echo $d->retriveImageUrlByImageUsage('image-3') ?>" alt="<?php echo $d->getTitle() ?>" /><span></span></a>
                        <h3><?php echo $d->Site->getTitle() ?></h3>
                        <p><a href="<?php echo $d->retriveUrl() ?>"><?php echo $d->getTitle() ?></a></p>
                      </div>
                    </li>
                    <?php endforeach; ?>
                  </ul>
                  <?php endif; ?>
                  </ul>
                </div>
              </div>
              <!-- / BLOCOS --><!-- BLOCOS -->
              <div id="jornalismo" class="filho blocos" style="display:none;">
                <div class="carrossel">
                  <?php if(isset($jornalismo)): ?>
                  <ul class="jornalismo">
                    <?php foreach($jornalismo as $d): ?>
                    <li>
                      <div class="conteudo-lista">
                        <a href="<?php echo $d->retriveUrl() ?>" class="bg"><img class="box-video" src="<?php echo $d->retriveImageUrlByImageUsage('image-3') ?>" alt="<?php echo $d->getTitle() ?>" /><span></span></a>
                        <h3><?php echo $d->Site->getTitle() ?></h3>
                        <p><a href="<?php echo $d->retriveUrl() ?>"><?php echo $d->getTitle() ?></a></p>
                      </div>
                    </li>
                    <?php endforeach; ?>
                  </ul>
                  <?php endif; ?>
                </div>
              </div>
              <!-- / BLOCOS --><!-- BLOCOS -->
              <div id="educacao" class="filho blocos" style="display:none;">
                <div class="carrossel">
                  <?php if(isset($educacao)): ?>
                  <ul class="educacao">
                    <?php foreach($educacao as $d): ?>
                    <li>
                      <div class="conteudo-lista">
                        <a href="<?php echo $d->retriveUrl() ?>" class="bg"><img class="box-video" src="<?php echo $d->retriveImageUrlByImageUsage('image-3') ?>" alt="<?php echo $d->getTitle() ?>" /><span></span></a>
                        <h3><?php echo $d->Site->getTitle() ?></h3>
                        <p><a href="<?php echo $d->retriveUrl() ?>"><?php echo $d->getTitle() ?></a></p>
                      </div>
                    </li>
                    <?php endforeach; ?>
                  </ul>
                  <?php endif; ?>
                </div>
              </div>
              <!-- / BLOCOS --><!-- BLOCOS -->
              <div id="infantil" class="filho blocos" style="display:none;">
                <div class="carrossel">
                  <?php if(isset($infantil)): ?>
                  <ul class="infantil">
                    <?php foreach($infantil as $d): ?>
                    <li>
                      <div class="conteudo-lista">
                        <a href="<?php echo $d->retriveUrl() ?>" class="bg"><img class="box-video" src="<?php echo $d->retriveImageUrlByImageUsage('image-3') ?>" alt="<?php echo $d->getTitle() ?>" /><span></span></a>
                        <h3><?php echo $d->Site->getTitle() ?></h3>
                        <p><a href="<?php echo $d->retriveUrl() ?>"><?php echo $d->getTitle() ?></a></p>
                      </div>
                    </li>
                    <?php endforeach; ?>
                  </ul>
                  <?php endif; ?>
                </div>
              </div>
              <!-- / BLOCOS --><!-- BLOCOS -->
              <div id="arte-cultura" class="filho blocos" style="display:none;">
                <div class="carrossel">
                  <?php if(isset($arte)): ?>
                  <ul class="arte">
                    <?php foreach($arte as $d): ?>
                    <li>
                      <div class="conteudo-lista">
                        <a href="<?php echo $d->retriveUrl() ?>" class="bg"><img class="box-video" src="<?php echo $d->retriveImageUrlByImageUsage('image-3') ?>" alt="<?php echo $d->getTitle() ?>" /><span></span></a>
                        <h3><?php echo $d->Site->getTitle() ?></h3>
                        <p><a href="<?php echo $d->retriveUrl() ?>"><?php echo $d->getTitle() ?></a></p>
                      </div>
                    </li>
                    <?php endforeach; ?>
                  </ul>
                  <?php endif; ?>
                </div>
              </div>
              <!-- / BLOCOS --><!-- BLOCOS -->
              <div id="especiais" class="filho blocos" style="display:none;">
                <div class="carrossel">
                  <?php if(isset($especiais)): ?>
                  <ul class="especiais">
                    <?php foreach($especiais as $d): ?>
                    <li>
                      <div class="conteudo-lista">
                        <a href="<?php echo $d->retriveUrl() ?>" class="bg"><img class="box-video" src="<?php echo $d->retriveImageUrlByImageUsage('image-3') ?>" alt="<?php echo $d->getTitle() ?>" /><span></span></a>
                        <h3><?php echo $d->Site->getTitle() ?></h3>
                        <p><a href="<?php echo $d->retriveUrl() ?>"><?php echo $d->getTitle() ?></a></p>
                      </div>
                    </li>
                    <?php endforeach; ?>
                  </ul>
                  <?php endif; ?>
                </div>
              </div>
              <!-- / BLOCOS --><!-- BLOCOS -->
              <div id="juvenil" class="filho blocos" style="display:none;">
                <div class="carrossel">
                  <?php if(isset($juvenil)): ?>
                  <ul class="juvenil">
                    <?php foreach($juvenil as $d): ?>
                    <li>
                      <div class="conteudo-lista">
                        <a href="<?php echo $d->retriveUrl() ?>" class="bg"><img class="box-video" src="<?php echo $d->retriveImageUrlByImageUsage('image-3') ?>" alt="<?php echo $d->getTitle() ?>" /><span></span></a>
                        <h3><?php echo $d->Site->getTitle() ?></h3>
                        <p><a href="<?php echo $d->retriveUrl() ?>"><?php echo $d->getTitle() ?></a></p>
                      </div>
                    </li>
                    <?php endforeach; ?>
                  </ul>
                  <?php endif; ?>
                </div>
              </div>
              <!-- / BLOCOS --><!-- PAGINACAO -->
              <div class="paginacao grid3">
                <!-- <p class="txt-12">P&aacute;gina 1 de 255</p> -->
              </div>
              <!-- PAGINACAO -->
            </div>
          </div>
          <!-- /MENU-RODAPE -->
           <script> 
           // carrossel
						$('.carrossel').jcarousel({
					      wrap: "both",
					      scroll: 4
					    });
					    
					    
					</script>
