                <?php
                // live
                $live = Doctrine_Query::create()
                  ->select('s.*')
                  ->from('Schedule s')
                  ->where('s.channel_id = ?', (int)3)
                  ->andWhere('s.date_start <= ? AND s.date_end > ?', array(date('Y-m-d H:i:s', time()), date('Y-m-d H:i:s', time())))
                  ->orderBy('s.date_start desc')
                  ->limit(1)
                  ->fetchOne();
                ?>
                <?php if($live): ?>
                <!-- BOX PADRAO Novo No Ar -->
                <div class="box-padrao novoNoAr grid1">
                  <div class="enunciado">
                    <h2>No Ar</h2>
                    <span></span>
                  </div>
                  <div class="noAr-box">
                    <?php if($live->retriveLiveImage()): ?>
                    <a href="<?php echo $live->Program->retriveUrl() ?>" title="<?php echo $live->getTitle() ?>">
                      <img src="<?php echo $live->retriveLiveImage() ?>" alt="<?php echo $live->Program->getTitle() ?>" />
                    </a>
                    <?php else: ?>
                    <a href="<?php echo $live->Program->retriveUrl() ?>" title="<?php echo $live->getTitle() ?>">
                      <?php if($live->Program->getImageLive()): ?>
                      <img src="http://midia.cmais.com.br/programs/<?php echo $live->Program->getImageLive() ?>" alt="<?php echo $live->Program->getTitle() ?>" />
                      <?php endif; ?>
                    </a>
                    <?php endif; ?>
                    <p class="chapeu"><?php echo $live->Program->getTitle() ?></p><br />
                    <a class="titulos" href="<?php echo $live->Program->retriveUrl() ?>" title="<?php echo $live->getTitle() ?>"><?php echo $live->getTitle() ?></a>
                    <p><?php echo $live->retriveDescription() ?></p>
                  </div>
                </div>
                <!--/ BOX PADRAO Novo No Ar -->
                <?php endif; ?>
