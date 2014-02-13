          <link rel="stylesheet" href="http://cmais.com.br/portal/js/contador/style/main.css" type="text/css" />
          <link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/secoes/contador.css" type="text/css" />
          <script language="Javascript" type="text/javascript" src="http://cmais.com.br/portal/js/contador/js/jquery.lwtCountdown-1.0.js"></script>
          <?php
            if($channel_id <= 0)
            $channel_id = 1;
            $displays = Doctrine_Query::create()
              ->select('s.*')
              ->from('Schedule s')
              ->where('s.is_live = 1')
              ->andWhere('s.id != ?', (int)$live_id )
              ->andWhere('s.date_start > ?', date('Y-m-d H:i:s'))
              ->andWhere('s.channel_id = ?', (int)$channel_id)
              ->orderBy('s.date_start asc')
              ->limit('5')
              ->execute();
          ?>
          <?php if(isset($displays)): ?>
            <?php if(count($displays) > 0): ?>
              <?php if(strtotime($displays[0]->getDateStart()) >= strtotime(date('Y-m-d H:i:s'))): ?>
              <!-- contador -->
              <div class="contador">
                <p style="margin-bottom: 10px;">Faltam...</p>
                
                <div class="capa-contador"> 

                  <!-- Countdown dashboard start -->
                  <div id="countdown_dashboard" style="width:418px;">
                    <div class="dash hours_dash">
                      <div class="digit">0</div>
                      <div class="digit">0</div>
                      <span class="dash_title" style="font-size:15px; margin: auto;">horas</span>
                    </div>
                    <div class="dash minutes_dash">
                      <div class="digit">0</div>
                      <div class="digit">0</div>
                      <span class="dash_title" style="font-size:15px; margin: auto;">minutos</span>
                    </div>
                    <div class="dash seconds_dash">
                      <div class="digit">0</div>
                      <div class="digit">0</div>
                      <span class="dash_title" style="font-size:15px; margin: auto;">segundos</span>
                    </div>
                  </div>
                  <!-- Countdown dashboard end -->

                </div>
                
                <div>
                  <p>...para a próxima transmissão</p>
                </div>
                <p class="proximos">Pr&oacute;ximos programas ao vivo:</p>
               
              </div>
              <!-- /contador -->

              <ul class="lista-calendario grid2">
              <?php foreach($displays as $k=>$d): ?>
                <li>
                  <div class="barra-grade">
                    <p class="hora"><?php echo format_datetime($d->getDateStart(), "d/M HH:mm") ?></p>
                    <a href="#" class="btn-toggle"><?php echo $d->Program->getTitle() ?></a>
                    <a href="#" class="botao btn-toggle"></a>
                  </div>
                  <div class="grade toggle" style="display:none; width:auto; padding-bottom:25px;">
                    <div class="capa-foto" style="width:auto;">
                      <img src="<?php echo $d->retriveLiveImage() ?>" alt="<?php echo $d->retriveTitle() ?>" />
                      <?php if($d->image_source != ""): ?><p class="legenda"><?php echo $d->image_source ?></p><?php endif; ?>
                    </div>
                    <p class="bold"><?php echo $d->retriveTitle() ?></p>
                    <p><?php echo $d->retriveDescription3() ?></p>
                    <a href="<?php echo $d->retriveUrl() ?>">ir ao site</a>
                    <a href="http://www.google.com/calendar/event?action=TEMPLATE&text=<?php echo urlencode($d->getTitle()) ?>&dates=<?php echo DateTime::createFromFormat('Y-m-d H:i:s', $d->getDateStart())->format('Ymd\THis') ?>/<?php echo DateTime::createFromFormat('Y-m-d H:i:s', $d->getDateStart())->format('Ymd\THis') ?>&details=&location=<?php echo urlencode($d->Program->getTitle()) ?>&trp=false&showTz=0&sprop=http%3A%2F%2Fcmais.com.br&sprop=name:TV%20Cultura" target="_blank" class="google-agenda"><img src="http://www.google.com/calendar/images/ext/gc_button1.gif" border=0 style="width:100px;height:25px;" /></a>
                  </div>
                </li>
              <?php endforeach; ?>
            </ul>
            <?php endif; ?>
          <?php endif; ?>
        <?php endif; ?>