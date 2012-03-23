              <!-- BOX PUBLICIDADE -->
                <?php if(isset($displays[0])): ?>
                <div class="box-publicidade grid1">
                  <div style="width: 300px; height: 250px; overflow: hidden">
                  <?php echo html_entity_decode($displays[0]->getHtml()) ?>
                  </div>
                </div>
                <?php endif; ?>
              <!-- / BOX PUBLICIDADE -->
