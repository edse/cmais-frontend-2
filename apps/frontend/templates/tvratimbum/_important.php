        <?php
        $important = Doctrine_Query::create()
          ->select('s.*')
          ->from('Schedule s')
          ->where('s.channel_id = ?', (int)2)
          ->andWhere('s.is_important = 1')
          ->andWhere('s.date_start >= ?', array(date('Y-m-d H:i:s', time())))
          ->orderBy('s.date_start')
          ->limit(1)
          ->fetchOne();
        ?>
        <?php if($important): ?>         
          <div class="naoPerca">
            <div class="topoNaoPerca">
              <p>N&atilde;o perca!</p>
            </div>  
            <div class="meio">
              <div class="destNaoPerca">
                <span class="clipe"></span>
                <a href="<?php echo $important->retriveUrl() ?>" title="<?php echo $important->retriveTitle() ?>">
                  <img src="http://midia.cmais.com.br/programs/<?php echo $important->Program->getImageLive() ?>" alt="<?php echo $important->retriveTitle() ?>" style="width: 265px;" />
                </a>
              </div>
              <div class="destChamada">
                <a class="chamada" href="<?php echo $important->retriveUrl() ?>"><?php echo $important->retriveTitle() ?></a>
                <?php /* <a href="">O Quebra-Nozes Hoje, as 21h.</a> */ ?>
              </div>
              <p class="info"><?php echo $important->retriveDescription() ?></p>
            </div>
            <span class="fim"></span>
          </div>
        <?php endif; ?>
