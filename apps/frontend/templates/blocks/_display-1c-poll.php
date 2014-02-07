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
                      <div id="form">
                      <form method="post" id="e<?php echo $displays[0]->Asset->getId()?>">
                        <?php
                         $form = new BaseForm();
                         echo $form->renderHiddenFields() ?>
                        <?php foreach($displays[0]->Asset->AssetQuestion->Answers as $a): ?>
                        <div class="linha">
                          <input type="radio" id="opcao<?php echo $a->getId() ?>" name="opcao" class="required" value="<?php echo $a->getId() ?>" /><label for="opcao<?php echo $a->getId() ?>"><?php echo $a->getAnswer() ?></label>
                        </div>
                        <?php endforeach; ?>
                        <input class="votar escuro" type="submit" value="votar" id="votar" />
                        <img src="/images/spinner_bar.gif" style="display: none" id="v_load" />
                      </form>
                      </div>
                      <script type="text/javascript" src="/portal/js/validate/jquery.validate.js"></script>
                      <script>
                        $(document).ready(function(){
                          var validator = $('#e<?php echo $displays[0]->Asset->getId()?>').validate({
                            submitHandler: function(form){
                              $.ajax({
                                type: "POST",
                                dataType: "json",
                                data: $("#e<?php echo $displays[0]->Asset->getId()?>").serialize(),
                                url: "http://app.cmais.com.br/ajax/enquetes",
                                beforeSend: function(){
                                  $('#votar').hide();
                                  $('#v_load').show();
                                },
                                success: function(data){
                                  $.each(data, function(key, val) {
                                    $('#r<?php echo $displays[0]->Asset->getId()?>').append('<p>'+val.answer+'</p>');
                                    $('#r<?php echo $displays[0]->Asset->getId()?>').append('<div class="porcentagem"><p style="width:'+val.votes+'">'+val.votes+'</p></div>');
                                  });
                                  //alert(data)
                                  $('#r<?php echo $displays[0]->Asset->getId()?>').show();
                                  $('#form').hide(); 
                                  $('#v_load').hide();
                                }
                              });
                            }
                          });
                        });
                      </script>

                      <div id="r<?php echo $displays[0]->Asset->getId()?>" class="resultado" style="display:none">
                        <?php /*
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
                         */?>
                      </div>

                    </div>
                  </div>
                  <div class="detalhe-borda grid1"></div>
                </div>
                <!-- /ENQUETE -->
              <?php endif; ?>
            <?php endif; ?>
