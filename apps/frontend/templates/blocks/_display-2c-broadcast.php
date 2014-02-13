          <link rel="stylesheet" href="http://cmais.com.br/portal/js/contador/style/main.css" type="text/css" />
          <link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/secoes/contador.css" type="text/css" />
          <script language="Javascript" type="text/javascript" src="http://cmais.com.br/portal/js/contador/js/jquery.lwtCountdown-1.0.js"></script>
          <?php
            if($site_id > 0){
              $displays = Doctrine_Query::create()
                ->select('a.*')
                ->from('Asset a, AssetBroadcast ab')
                ->where('a.is_active = ?', 1)
                ->andWhere('(a.id > 0 AND a.asset_type_id = 12 AND a.id = ab.asset_id)')
                ->andWhere('ab.date_exibition_start >= CURRENT_TIMESTAMP')
                ->andWhere('a.site_id = ?', $site_id)
                ->orderBy('ab.date_exibition_start asc')
                ->limit('5')
                ->execute();
            }else{
              $displays = Doctrine_Query::create()
                ->select('a.*')
                ->from('Asset a, AssetBroadcast ab')
                ->where('a.is_active = ?', 1)
                ->andWhere('(a.id > 0 AND a.asset_type_id = 12 AND a.id = ab.asset_id)')
                ->andWhere('ab.date_exibition_start >= CURRENT_TIMESTAMP')
                ->orderBy('ab.date_exibition_start asc')
                ->limit('5')
                ->execute();
            }
          ?>
          <?php if(isset($displays)): ?>
            <?php if(count($displays) > 0): ?>

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
                
                <div class="info_message" id="complete_info_message" style="display:none;">
                  O Programa <?php echo $displays[0]->Site->getTitle()?> está no ar! <a href="<?php echo $displays[0]->retriveUrl()?>">Assista agora pela web.</a>
                </div>

                <div>
                  <p>...para o pr&oacute;ximo programa ao vivo</p>
                </div>
                
                <script language="javascript" type="text/javascript">
                jQuery(document).ready(function() {
                  $('#countdown_dashboard').countDown({
                    targetDate: {
                      'day':    <?php echo format_date($displays[0]->AssetBroadcast->getDateExibitionStart(), "dd") ?>,
                      'month':  <?php echo format_date($displays[0]->AssetBroadcast->getDateExibitionStart(), "MM") ?>,
                      'year':   <?php echo format_date($displays[0]->AssetBroadcast->getDateExibitionStart(), "yyyy") ?>,
                      'hour':   <?php echo format_date($displays[0]->AssetBroadcast->getDateExibitionStart(), "HH") ?>,
                      'min':    <?php echo format_date($displays[0]->AssetBroadcast->getDateExibitionStart(), "mm") ?>,
                      'sec':    <?php echo format_date($displays[0]->AssetBroadcast->getDateExibitionStart(), "ss") ?>
                    },
                    onComplete: function() { $('#complete_info_message').slideDown() }
                  });
                });
                </script>

                <!-- <p class="proximos">Pr&oacute;ximos programas ao vivo:</p> -->
                
              </div>
              <!-- /contador -->

              <ul class="lista-calendario grid2">
              <?php foreach($displays as $k=>$d): ?>
                <li>
                  <div class="barra-grade">
                    <p class="hora"><?php echo format_datetime($d->AssetBroadcast->getDateExibitionStart(), "d/M HH:mm") ?></p>
                    <a href="#" class="btn-toggle"><?php echo $d->Site->Program->getTitle() ?></a>
                    <a href="#" class="botao btn-toggle"></a>
                  </div>
                  <div class="grade toggle" style="display:none; width:100%; padding-bottom:25px;">
                    <?php if($d->retriveImageUrlByImageUsage("image-3") != ""): ?>
                    <img src="<?php echo $d->retriveImageUrlByImageUsage("image-3") ?>" alt="<?php echo $d->getTitle() ?>" />
                    <?php endif; ?>
                    <p><?php echo $d->getDescription() ?></p>
                    <p class="bold"><?php echo $d->AssetBroadcast->getHeadline() ?></p>
                    <p class="bold"><?php echo $d->AssetBroadcast->getHeadlineLong() ?></p>
                    <a href="<?php echo $d->retriveUrl() ?>">ir ao site</a>
                    <a href="http://www.google.com/calendar/event?action=TEMPLATE&text=<?php echo urlencode($d->getTitle()) ?>&dates=<?php echo DateTime::createFromFormat('Y-m-d H:i:s', $d->AssetBroadcast->getDateExibitionStart())->format('Ymd\THis\Z') ?>/<?php echo DateTime::createFromFormat('Y-m-d H:i:s', $d->AssetBroadcast->getDateExibitionStart())->format('Ymd\THis\Z') ?>&details=&location=<?php echo urlencode($d->Site->getTitle()) ?>&trp=false&sprop=http%3A%2F%2Fcmais.com.br&sprop=name:TV%20Cultura" target="_blank" class="google-agenda"><img src="http://www.google.com/calendar/images/ext/gc_button1.gif" border=0 style="width:100px;height:25px;" /></a>
                  </div>
                </li>
              <?php endforeach; ?>
            </ul>
            <?php endif; ?>
          <?php endif; ?>