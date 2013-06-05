            <?php if(isset($displays)): ?>
              <?php if(count($displays) > 0): ?>
            <!-- BOX PADRAO -->
            <div class="box-padrao grid1">
              <div class="topo claro">
                <span></span>
                <div class="capa-titulo">
                  <h4><?php echo $displays[0]->Block->getTitle() ?></h4>
                </div>
              </div>
              <div class="bg-cinza">
                <!--a href="http://culturafm.cmais.com.br/selecao-do-ouvinte">Indique até seis composições de sua preferência e acompanhe pela Cultura FM.</a>
                <p style="margin:20px 0 8px 0;">De segunda a sábado, às 13 horas.</p-->
                 <?php echo $displays[0]->getHtml() ?>
              </div>
            </div>
            <!-- BOX PADRAO -->
              <?php endif; ?>
            <?php endif; ?>