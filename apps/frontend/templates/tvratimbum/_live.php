          <?php
          // live
          $live = Doctrine_Query::create()
            ->select('s.*')
            ->from('Schedule s')
            ->where('s.channel_id = ?', (int)2)
            ->andWhere('s.date_start <= ? AND s.date_end > ?', array(date('Y-m-d H:i:s', time()), date('Y-m-d H:i:s', time())))
            ->orderBy('s.date_start desc')
            ->fetchOne();
          ?>
          <?php if($live): ?>
            
          <div class="wrapper">
            <div class="agora">
              <div class="box-hora">
                <form name="clock" onsubmit="0">
                  <input class="hora" type="button" value="" name="face" />
                  <p class="noAr"> - no ar</p>
                </form>
              </div>
              <div class="imgNoar">
                <?php if ($live->Program->Site->id > 0): ?>
                <a href="<?php echo $live->Program->retriveUrl() ?>" title="<?php echo $live->getTitle() ?>">
                  <img src="http://midia.cmais.com.br/programs/<?php echo $live->Program->getImageLive() ?>" alt="<?php echo $live->Program->getTitle() ?>" />
                </a>
                <?php else: ?>
                <a href="/grade" title="<?php echo $live->getTitle() ?>">
                  <img src="http://midia.cmais.com.br/programs/<?php echo $live->Program->getImageLive() ?>" alt="<?php echo $live->Program->getTitle() ?>" />
                </a>
                <?php endif; ?>
              </div>
            </div>
          </div>
          <?php endif; ?>