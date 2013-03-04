        <?php
        // coming up next
        $coming = Doctrine_Query::create()
          ->select('s.*')
          ->from('Schedule s')
          ->where('s.channel_id = ?', (int)2)
          ->andWhere('(s.date_start > ? AND s.date_end > ?)', array(date('Y-m-d H:i:s', time()), date('Y-m-d H:i:s', time())))
          ->orderBy('s.date_start')
          ->limit(5)
          ->execute();
        ?>
        <?php if($coming): ?>                
          <div class="proximo">
            <p>Daqui a pouco:</p>
            <ul>
              <?php for($i=0; $i<5; $i++): ?>
                <?php if($coming[$i]->Program->Site->id > 0): ?>
              <li><a href="<?php echo $coming[$i]->Program->retriveUrl() ?>"><span><?php echo format_date($coming[$i]->getDateStart(), "t") ?></span> - <?php echo $coming[$i]->Program->getTitle() ?></a></li>
                <?php else: ?>
              <li><a href="/grade"><span><?php echo format_date($coming[$i]->getDateStart(), "t") ?></span> - <?php echo $coming[$i]->Program->getTitle() ?></a></li>
                <?php endif; ?>
              <?php endfor; ?>
            </ul>
            <div class="btn-barra">
              <span class="pontaBarra"></span>
              <a href="/grade">Ver a programa&ccedil;&atilde;o completa</a>
              <span class="caudaBarra"></span>
            </div>
          </div>
        <?php endif; ?>
