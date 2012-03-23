              <?php if(isset($displays)): ?>
                <?php if(count($displays) > 0): ?>
                <!-- ENQUETE -->
                <div class="box-padrao box-borda grid1">
                  <div class="topo">
                    <span></span>
                    <div class="capa-titulo">
                      <h4><?php echo $displays[0]->Block->getTitle() ?></h4>
                    </div>
                  </div>
                  <div class="conteudo enquete">
                    <div class="txt-padrao">
                      <p><?php echo $displays[0]->Asset->AssetQuestion->getQuestion() ?></p>
                      <form action="" method="post">
                        <?php foreach($displays[0]->Asset->AssetQuestion->Answers as $a): ?>
                        <div class="linha">
                          <input type="radio" id="<?php echo $a->getId() ?>" name="opcao" /><label for="<?php echo $a->getId() ?>"><?php echo $a->getAnswer() ?></label>
                        </div>
                        <?php endforeach; ?>
                        <input class="votar escuro" type="submit" value="votar" id="votar" />
                      </form>
                      <?php /* 
                      <div class="resultado" style="display:none">
                        <p>Opcao 01</p>
                        <div class="porcentagem">
                          <p class="p70">70%</p>
                        </div>
                        <p>Opcao 02</p>
                        <div class="porcentagem">
                          <p class="p20">20%</p>
                        </div>
                        <p>Opcao 03</p>
                        <div class="porcentagem">
                          <p class="p10">10%</p>
                        </div>
                      </div>
                      */ ?>
                    </div>
                  </div>
                  <div class="detalhe-borda grid1"></div>
                </div>
                <!-- /ENQUETE -->
              <?php endif; ?>
            <?php endif; ?>