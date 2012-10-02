           <!-- BOX PADRAO -->
            <div class="box-padrao grid1">
              <div class="topo claro">
                <span></span>
                <div class="capa-titulo">
                  <h4>Programação do dia</h4>
                </div>
              </div>
              <?php $date = date("Y/m/d");
			$schedules = Doctrine_Query::create() -> select('s.*') -> from('Schedule s') -> where('s.channel_id = ?', 6) -> andWhere('s.date_start >= ? AND s.date_start <= ?', array($date . ' 00:00:00', $date . ' 23:59:59')) -> orderBy('s.date_start asc') -> limit(50) -> execute();
              ?>
              <ul class="programacao">
                <?php foreach($schedules as $k=>$d):
                ?>
                <li><a href="<?php echo $d->retriveUrl() ?>" name="<?php echo $d->retriveTitle() ?>" title="<?php echo $d->retriveTitle() ?>"><span><?php echo format_datetime($d->getDateStart(), "HH:mm")
                ?></span><?php echo $d->retriveTitle()
                ?></a></li>
                <?php endforeach;?>
              </ul>
              <!--a href="http://culturafm.cmais.com.br/guia-do-ouvinte" class="vermais">Ver mais</a-->
            </div>
            <!-- BOX PADRAO -->
