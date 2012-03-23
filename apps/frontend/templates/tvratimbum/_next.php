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
              <li><a href="<?php echo $coming[0]->Program->retriveUrl() ?>"><span><?php echo format_date($coming[0]->getDateStart(), "t") ?></span> - <?php echo $coming[0]->Program->getTitle() ?></a></li>
              <li><a href="<?php echo $coming[1]->Program->retriveUrl() ?>"><span><?php echo format_date($coming[1]->getDateStart(), "t") ?></span> - <?php echo $coming[1]->Program->getTitle() ?></a></li>
              <li><a href="<?php echo $coming[2]->Program->retriveUrl() ?>"><span><?php echo format_date($coming[2]->getDateStart(), "t") ?></span> - <?php echo $coming[2]->Program->getTitle() ?></a></li>
              <li><a href="<?php echo $coming[3]->Program->retriveUrl() ?>"><span><?php echo format_date($coming[3]->getDateStart(), "t") ?></span> - <?php echo $coming[3]->Program->getTitle() ?></a></li>
              <li><a href="<?php echo $coming[4]->Program->retriveUrl() ?>"><span><?php echo format_date($coming[4]->getDateStart(), "t") ?></span> - <?php echo $coming[4]->Program->getTitle() ?></a></li>
            </ul>
            <div class="btn-barra">
              <span class="pontaBarra"></span>
              <a href="/grade">Ver a programa&ccedil;&atilde;o completa</a>
              <span class="caudaBarra"></span>
            </div>
          </div>
        <?php endif; ?>
