                    <?php
                      if($site->id > 0){
                        $displays = Doctrine_Query::create()
                          ->select('a.*')
                          ->from('Asset a')
                          ->where('a.is_active = ?', 1)
                          ->andWhere('a.asset_type_id = 6')
                          ->andWhere('a.site_id = ?', $site->id)
                          ->limit(3)
                          ->orderBy('a.id desc')
                          ->execute();
                      }else{
                        $displays = Doctrine_Query::create()
                          ->select('a.*')
                          ->from('Asset a')
                          ->where('a.is_active = ?', 1)
                          ->andWhere('a.asset_type_id = 6')
                          ->limit(3)
                          ->orderBy('a.id desc')
                          ->execute();
                      }
                    ?>
                    <?php if(isset($displays)): ?>
                      <?php if(count($displays) > 0): ?>
                        <!-- GALERIA -->
                        <ul class="box-galeria grid3">
                        <?php foreach($displays as $k=>$d): ?>
                          <li<?php if($k == 1): ?> class="center"<?php endif; ?>>
                            <a class="bg" href="<?php echo $d->retriveUrl() ?>"><img alt="<?php echo $d->getTitle() ?>" src="<?php echo $d->retriveImageUrlByImageUsage("image-8") ?>" style="width:310px;"><span></span></a>
                            <a class="titulos" href="<?php echo $d->retriveUrl() ?>"><?php echo $d->getTitle() ?></a>
                          </li>
                        <?php endforeach; ?>
                        <!-- / GALERIA -->
                      <?php endif; ?>
                    <?php endif; ?>