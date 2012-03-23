                <?php
                // coming up next
                $coming = Doctrine_Query::create()
                  ->select('s.*')
                  ->from('Schedule s')
                  ->where('s.channel_id = ?', (int)1)
                  ->andWhere('(s.date_start > ? AND s.date_end > ?)', array(date('Y-m-d H:i:s', time()), date('Y-m-d H:i:s', time())))
                  ->orderBy('s.date_start')
                  ->limit(3)
                  ->execute();
                ?>
                <?php if($coming): ?>                
                <!-- BOX PADRAO Proximas Atrações -->
                <div class="box-padrao proximasAtracoes grid1">
                  <div class="enunciado">
                    <h2>Próximas Atrações</h2>
                  </div>
                  <div class="proximasAtracoes-box">
                    <p><span><?php echo format_date($coming[0]->getDateStart(), "t") ?></span><a href="<?php echo $coming[0]->Program->retriveUrl() ?>" title="<?php echo $coming[0]->Program->getTitle() ?>"><?php echo $coming[0]->Program->getTitle() ?></a></p>
                    <p><span><?php echo format_date($coming[1]->getDateStart(), "t") ?></span><a href="<?php echo $coming[1]->Program->retriveUrl() ?>" title="<?php echo $coming[1]->Program->getTitle() ?>"><?php echo $coming[1]->Program->getTitle() ?></a></p>
                    <a class="gradeCompleta" href="http://cmais.com.br/grade" title="Veja a grade completa">Veja a grade completa</a>
                  </div>
                </div>
                <?php endif; ?>
                <!-- BOX PADRAO Proximas Atrações -->