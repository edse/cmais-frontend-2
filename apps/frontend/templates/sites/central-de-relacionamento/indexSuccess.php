<?php if(isset($_GET["step"])==1):?>
<script>
$(document).ready(function(){
  $('html, body').animate({
    scrollTop: $('#cadastro').offset().top
  }, "slow");
});
</script>  
<?php endif?>
<?php include_partial_from_folder('blocks', 'global/topo-fpa', array('siteSections'=>$siteSections, 'site' => $site, 'section' => $section)) ?>
<!--container-->
<div class="container">
  <?php include_partial_from_folder('sites/central-de-relacionamento', 'global/topo', array('site' => $site,'siteSections' => $siteSections, 'section' => $section)) ?>
  <!--colunas-->
  <div class="row-fluid">
    <!--coluna esquerda-->
    <div class="col-esquerda span5" style="margin:0;">
      <!--destaque principal-->
      <div class="central cinza-claro-2"> 
      <?php if(isset($displays['chamada'])):?>
        <?php if(count($displays['chamada']) > 0): ?>
          <h1><?php echo $displays['chamada'][0]->Asset->getTitle() ?></h1>
          <h3><?php echo $displays['chamada'][0]->Asset->getDescription() ?></h3>
          <p><?php echo html_entity_decode($displays['chamada'][0]->Asset->AssetContent->getContent()) ?></p>
          <br /> 
          <a href="/central-de-relacionamento/perguntas-frequentes" class="btn btn-success btn-large mais-info" title="Perguntas Frequentes">
            <div class="container-btn">
              <i class="ico-perg"></i>Perguntas Frequentes 
            </div>
          </a>
        <?php endif; ?>
      <?php endif; ?>
      </div>
      <!--/destaque principal-->

      <!--botao-->
      <div class="botoes-central">
        <?php if(isset($displays['botoes-central'])):?>
          <?php if(count($displays['botoes-central']) > 0): ?>
            <?php foreach($displays['botoes-central'] as $k=>$d): ?>
            <div class="base-btn">  
              <div class="btn-esquerda cinza-claro-2">
                <a href="<?php echo $d->getUrl() ?>" title="<?php echo $d->getTitle() ?>">
                  <i class="ico ico-<?php echo $d->getLabel() ?>"></i>
                  <h1><?php echo $d->getTitle() ?></h1>
                  <p><?php echo $d->getDescription() ?></p>
                </a>
              </div>
              <div class="btn-esquerda sombra"></div>
            </div>
            <?php endforeach; ?>
          <?php endif; ?>
        <?php endif; ?>
      </div>
      <!--/botao-->
    </div>
    <!--/coluna esquerda-->
    <!--coluna direita-->
    <div class="col-direita span7 ">

      <!-- COLUNA SUB DIR 1 -->
      <div id="cadastro" class="coluna-sub cinza-claro-2">
        <span class="titulo bold"><?php echo $displays["formas-de-atendimento"][0]->Block->getTitle();?></span>
         <!-- COLUNA SUB DIR 2 -->
         <div id="col-sub" class="texto-preto">
            <div class="accordion-group">
              <div class="accordion-heading escuro">
                <i class="icon-circle-arrow-down <?php if(isset($_GET['step'])&&$_GET['step']==1){echo "icon-circle-arrow-down";}else{echo "icon-circle-arrow-right";}?> seta"></i>  
                <a href="javascript:;" class="formas" data-toggle="collapse" data-target="#email-central" data-parent="#col-sub">
                  Por meio eletrônico
                </a>
                <a href="javascript:;"class="fechar" data-toggle="collapse" data-target="#email-central" data-parent="#col-sub">fechar</a>
              </div>
              

             <div id="email-central" class="fundo-cinza collapse in" style="overflow: hidden; clear: both;">
              <!--form envio-->
              <?php if(!isset($_GET["erro"])&& isset($_GET["erro"])!=1):?>
              <!-- row1 -->
              <div class="row" id="row1" style="<?php if(isset($_GET['step'])&&$_GET['step']==1){echo"display:none;";}else{echo"display:block;";}?>">
                <div class="page-header">
                  <h1>Email</h1>
                  <span class="label label-green">Verificação se o email está cadastrado</span> 
                </div>  
                <form class="form-horizontal" id="form1" method="post">
                  <input type="hidden" name="step" value="1" />
                  <fieldset>
        
                    <div class="control-group">
                      <label class="control-label" for="email">Email</label>
                      <div class="controls">
                        <input type="text" class="input-xlarge" id="f1_email" name="f1_email" />
                        <p class="help-block">Entre com seu endereço de email</p>
                      </div>
                    </div>
                    <div class="botoes-form">
                      <img src="http://cmais.com.br/portal/images/ajax-loader.gif" alt="carregando..." style="display:none" width="16px" height="16px" id="loader1" />
                      <button type="submit" class="btn btn-primary" id="btn1">Próximo Passo</button>
                    </div>
                  </fieldset>
                </form>
              </div>
              <!-- /row1 -->
              <!-- row2 -->
              <div class="row" id="row2">
                <div class="page-header">
                  <h1>Formulário de cadastro</h1>
                  <p><span class="label label-red">Email não cadastrado</span></p>
                </div>
                <form class="form-horizontal" id="form2" method="post">
                  <input type="hidden" name="step" value="2" />
                  <input type="hidden" name="email" id="f2_email" value="" />
                  <fieldset>
                    <div class="control-group">
                      <label class="control-label" for="f2_email2">Email</label>
                      <div class="controls">
                        <input type="text" class="input-xlarge disabled" id="f2_email2" name="f2_email2" placeholder="" disabled="disabled">
                        <p class="help-block">Você receberá uma mensagem de confirmação para validar este email após enviar o cadastro preenchido.</p>
                        <span class="atencao">* Campos obrigatórios</span>
                      </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label" for="f2_nome">Nome <span class="atencao">*</span></label>
                      <div class="controls">
                        <input type="text" class="input-xlarge" id="f2_nome" name="f2_nome">
                        <p class="help-block">Entre com seu nome completo.</p>
                      </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label" for="f2_cod_faixaetaria">Idade <span class="atencao">*</span></label>
                      <div class="controls">
                        <select id="f2_cod_faixaetaria" name="f2_cod_faixaetaria"></select>
                      </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label" for="f2_cod_sexo">Sexo <span class="atencao">*</span></label>
                      <div class="controls">
                        <select id="f2_cod_sexo" name="f2_cod_sexo"></select>
                      </div>
                    </div>
                    
                    <div id="f2_brasil">
                      <div class="control-group">
                        <label class="control-label" for="f2_estado">Estado <span class="atencao">*</span></label>
                        <div class="controls">
                          <select id="f2_estado" name="f2_estado" onchange="municipios('f2');" onfocus="municipios('f2');"></select>
                        </div>
                      </div>
                      <div class="control-group">
                        <label class="control-label" for="f2_local">Cidade <span class="atencao">*</span></label>
                        <div class="controls">
                          <select id="f2_local" name="f2_local"></select>
                        </div>
                      </div>
                      
                    </div><!-- /#brasil -->
                    <div class="control-group f2_exterior">
                      <label class="control-label" for="f2_localexterior">Pais <span class="atencao">*</span></label>
                      <div class="controls">
                        <input type="text" class="input-xlarge" id="f2_localexterior" name="f2_localexterior">
                        <!-- <p class="help-block">Pais em que reside <code>Chile</code></p> -->
                      </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label" for="f2_exterior">Reside no exterior?</label>
                      <div class="controls">
                        <input type="checkbox" name="f2_exterior" id="f2_exterior" value="1" onchange="toggleExterior();" />
                        <!-- <select id="f2_exterior" name="f2_exterior" onchange="toggleExterior();"></select> -->
                      </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label" for="f2_cod_recepcaodesinal">Recepção do sinal <span class="atencao">*</span></label>
                      <div class="controls">
                        <select id="f2_cod_recepcaodesinal" name="f2_cod_recepcaodesinal"></select>
                      </div>
                    </div>
                    <?php
                    /*
                    <div class="control-group">
                      <label class="control-label" for="f2_mais">Mais informações</label>
                      <div class="controls">
                        <label class="checkbox">
                          <input type="checkbox" id="f2_mais" name="f2_mais" value="1" onclick="toggleInfo();">
                          Para facilitar ainda mais nosso relacionamento
                        </label>
                      </div>
                    </div>
                    
                    <div id="f2_maisinfo">
                      <div class="control-group">
                        <label class="control-label" for="f2_cep">CEP <span class="atencao">*</span></label>
                        <div class="controls">
                          <input type="text" class="input-xlarge" id="f2_cep" name="f2_cep" onblur="cep(this.value);">
                          <p class="help-block">Não sabe seu CEP? <a href="http://www.buscacep.correios.com.br/" target="_blank" style="color:#00ccff">Clique aqui</a> e consulte o Correio.</p>
                        </div>
                      </div>
                      <div class="control-group">
                        <label class="control-label" for="f2_endereco">Endereço</label>
                        <div class="controls">
                          <input type="text" class="input-xlarge" id="f2_endereco" name="f2_endereco">
                        </div>
                      </div>
                      <div class="control-group">
                        <label class="control-label" for="f2_numero">Número</label>
                        <div class="controls">
                          <input type="text" class="input-xlarge" id="f2_numero" name="f2_numero">
                        </div>
                      </div>
                      <div class="control-group">
                        <label class="control-label" for="f2_complemento">Complemento</label>
                        <div class="controls">
                          <input type="text" class="input-xlarge" id="f2_complemento" name="f2_complemento">
                        </div>
                      </div>
                      <div class="control-group">
                        <label class="control-label" for="f2_telefone">Telefone</label>
                        <div class="controls">
                          <input type="text" class="input-xlarge" id="f2_telefone" name="f2_telefone" placeholder="(xx) XXXX-XXXX">
                        </div>
                      </div>
                      <div class="control-group">
                        <label class="control-label" for="f2_bairro">Bairro</label>
                        <div class="controls">
                          <input type="text" class="input-xlarge" id="f2_bairro" name="f2_bairro">
                        </div>
                      </div>
                      <div class="control-group">
                        <label class="control-label" for="f2_twitter">Twitter</label>
                        <div class="controls">
                          <input type="text" class="input-xlarge" id="f2_twitter" name="f2_twitter">
                        </div>
                      </div>
                    </div>
                    <!-- /#maisinfo -->
                    <div class="control-group">
                      <label class="control-label" for="f2_sms">SMS</label>
                      <div class="controls">
                        <label class="checkbox">
                          <input type="checkbox" id="f2_sms" name="f2_sms" value="true">
                          Permito o envio de SMS
                        </label>
                      </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label" for="f2_newsletter">Newsletter</label>
                      <div class="controls">
                        <label class="checkbox">
                          <input type="checkbox" id="f2_newsletter" name="f2_newsletter" value="true">
                          Permito o envio de promoções e novidades via email
                        </label>
                      </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label" for="f2_convite">Convite</label>
                      <div class="controls">
                        <label class="checkbox">
                          <input type="checkbox" id="f2_convite" name="f2_convite" value="true">
                          Permito o envio de convites
                        </label>
                      </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label" for="f2_terceiros">Terceiros</label>
                      <div class="controls">
                        <label class="checkbox">
                          <input type="checkbox" id="f2_terceiros" name="f2_terceiros" value="true">
                          Permito o envio de informações para terceiros
                        </label>
                      </div>
                    </div>
                     * 
                     */
                    ?>
                    <div class="control-group">
                    <div class="botoes-form">
                      <img src="http://cmais.com.br/portal/images/ajax-loader.gif" alt="carregando..." style="display:none" width="16px" height="16px" id="loader2" />
                      <button type="submit" class="btn btn-success" id="btn2">Enviar Cadastro</button>
                    </div>
                  </fieldset>
                </form>
              </div>
              <!-- /row2 -->
              <!-- row3 -->
              <div class="row" id="row3">
                <div class="page-header">
                  <h1>Formulário de cadastro preenchido</h1>
                  <p><span class="label label-success">Email cadastrado</span></p>
                </div><!-- /.span -->
                <form class="form-horizontal" id="form3" method="post">
                  <input type="hidden" name="f3_email" id="f3_email" value="" />
                  <input type="hidden" name="step" value="3" />
                  <fieldset>
                    <div class="control-group">
                      <label class="control-label" for="f3_email2">Email</label>
                      <div class="controls">
                        <input type="text" class="input-xlarge disabled" id="f3_email2" name="f3_email2" placeholder="" disabled="disabled">
                        <p class="help-block">Você receberá uma confirmação nesse email.</p>
                      </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label" for="f3_nome">Nome</label>
                      <div class="controls">
                        <input type="text" class="input-xlarge" id="f3_nome" name="f3_nome">
                        <p class="help-block">Entre com seu nome completo.</p>
                      </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label" for="f3_cod_faixaetaria">Idade</label>
                      <div class="controls">
                        <select id="f3_cod_faixaetaria" name="f3_cod_faixaetaria"></select>
                      </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label" for="f3_cod_sexo">Sexo</label>
                      <div class="controls">
                        <select id="f3_cod_sexo" name="f3_cod_sexo"></select>
                      </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label" for="f3_cod_recepcaodesinal">Recepção do sinal</label>
                      <div class="controls">
                        <select id="f3_cod_recepcaodesinal" size="10" name="f3_cod_recepcaodesinal"></select>
                      </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label" for="f3_mais">Mais informações</label>
                      <div class="controls">
                        <label class="checkbox">
                          <input type="checkbox" id="f3_mais" name="f3_mais" value="1" onclick="toggleInfo();">
                          Para facilitar ainda mais nosso relacionamento
                        </label>
                      </div>
                    </div> 
                    <div id="f3_maisinfo">
                      <div class="control-group">
                        <label class="control-label" for="f3_exterior">Reside no exterior?</label>
                        <div class="controls">
                          <input type="checkbox" name="f3_exterior" id="f3_exterior" value="1" onchange="toggleExterior();" />
                          <!-- <select id="f2_exterior" name="f2_exterior" onchange="toggleExterior();"></select> -->
                        </div>
                      </div>
                      <div class="control-group f3_exterior">
                        <label class="control-label" for="f3_localexterior">Pais</label>
                        <div class="controls">
                          <input type="text" class="input-xlarge" id="f3_localexterior" name="f3_localexterior">
                          <!-- <p class="help-block">Pais em que reside <code>Chile</code></p> -->
                        </div>
                      </div>
                      <div id="f3_brasil">
                        <div class="control-group">
                          <label class="control-label" for="f3_estado">Estado</label>
                          <div class="controls">
                            <select id="f3_estado" name="f3_estado" onchange="municipios('f3');"></select>
                          </div>
                        </div>
                        <div class="control-group">
                          <label class="control-label" for="f3_local">Cidade</label>
                          <div class="controls">
                            <select id="f3_local" name="f3_local"></select>
                          </div>
                        </div>
                      </div><!-- /#brasil -->
                      <div class="control-group">
                        <label class="control-label" for="f3_endereco">Endereço</label>
                        <div class="controls">
                          <input type="text" class="input-xlarge" id="f3_ endereco" name="f3_endereco">
                        </div>
                      </div>
                      <div class="control-group">
                        <label class="control-label" for="f3_numero">Número</label>
                        <div class="controls">
                          <input type="text" class="input-xlarge" id="f3_numero" name="f3_numero">
                        </div>
                      </div>
                      <div class="control-group">
                        <label class="control-label" for="f3_complemento">Complemento</label>
                        <div class="controls">
                          <input type="text" class="input-xlarge" id="f3_complemento" name="f3_complemento">
                        </div>
                      </div>
                      <div class="control-group">
                        <label class="control-label" for="f3_cep">CEP</label>
                        <div class="controls">
                          <input type="text" class="input-xlarge" id="f3_cep" name="f3_cep">
                        </div>
                      </div>
                      <div class="control-group">
                        <label class="control-label" for="f3_bairro">Bairro</label>
                        <div class="controls">
                          <input type="text" class="input-xlarge" id="f3_bairro" name="f3_bairro">
                        </div>
                      </div>
                      <div class="control-group">
                        <label class="control-label" for="f3_telefone">Telefone</label>
                        <div class="controls">
                          <input type="text" class="input-xlarge" id="f3_telefone" name="f3_telefone" placeholder="(xx) XXXX-XXXX">
                        </div>
                      </div>
                      <div class="control-group">
                        <label class="control-label" for="f3_twitter">Twitter</label>
                        <div class="controls">
                          <input type="text" class="input-xlarge" id="f3_twitter" name="f3_twitter">
                        </div>
                      </div>
                      <div class="control-group">
                        <label class="control-label" for="f3_sms">SMS</label>
                        <div class="controls">
                          <label class="checkbox">
                            <input type="checkbox" id="f3_sms" name="f3_sms" value="true">
                            Permito o envio de SMS
                          </label>
                        </div>
                      </div>
                      <div class="control-group">
                        <label class="control-label" for="f3_newsletter">Newsletter</label>
                        <div class="controls">
                          <label class="checkbox">
                            <input type="checkbox" id="f3_newsletter" name="f3_newsletter" value="true">
                            Permito o envio de promoções e novidades via email
                          </label>
                        </div>
                      </div>
                      <div class="control-group">
                        <label class="control-label" for="f3_convite">Convite</label>
                        <div class="controls">
                          <label class="checkbox">
                            <input type="checkbox" id="f3_convite" name="f3_convite" value="true">
                            Permito o envio convites
                          </label>
                        </div>
                      </div>
                      <div class="control-group">
                        <label class="control-label" for="f3_terceiros">Terceiros</label>
                        <div class="controls">
                          <label class="checkbox">
                            <input type="checkbox" id="f3_terceiros" name="f3_terceiros" value="true">
                            Permito o envio de informações para terceiros
                          </label>
                        </div>
                      </div>
                    </div><!-- /#maisinfo -->
                    <div class="botoes-form">
                      <img src="http://cmais.com.br/portal/images/ajax-loader.gif" alt="carregando..." style="display:none" width="16px" height="16px" id="loader3" />
                      <button type="submit" class="btn btn-primary" id="btn3">Próximo Passo</button>
                      <button class="btn">Cancel</button>
                    </div>
                    </fieldset>
                  </form>
                </div>
                <!-- /row3 -->
                 
                <!-- row4 -->
                <div class="row" id="row4" style="<?php if(!isset($_GET['step'])||$_GET['step']==1){echo"display:none;";}else{echo"display:block;";}?>">
                  <div class="page-header">
                    <h1>Enviar mensagem</h1>
                    <p><span class="label label-success">Email cadastrado e validado</span></p>
                  </div><!-- /.span -->

                  <form class="form-horizontal" id="form4" method="post">
                    <input type="hidden" name="step" id="f4_step" value="4" />
                    <input type="hidden" name="email" id="f4_email" value="" />
                    <fieldset>
                      <div class="control-group">
                        <label class="control-label" for="f4_email2">Email</label>
                        <div class="controls">
                          <?php if(isset($_GET["validacao"]) && isset($_GET["email"])): ?>
                            <input type="text" class="input-xlarge disabled" id="f4_email2" name="f4_email2" placeholder="" disabled="disabled" value="<?php echo $_GET["email"]; ?>">
                          <?php else: ?>
                            <input type="text" class="input-xlarge disabled" id="f4_email2" name="f4_email2" placeholder="" disabled="disabled">
                          <?php endif;?>
                          <p class="help-block">Se aplicável, você receberá uma resposta nesse email.</p>
                        </div>
                      </div>
                      <?php if(!isset($_GET["validacao"])==1):?>
                      <div class="control-group f4_mais">
                        <label class="control-label" for="f4_mais"></label>
                        <div class="controls">
                          <label class="checkbox">
                            <input type="checkbox" id="f4_mais" name="f4_mais" value="1" onclick="toggleInfo();">
                            Deseja alterar seu cadastro?
                          </label>
                        </div>
                      </div>
                      <?php endif; ?>
                      <div id="f4_maisinfo">
                      <!-- salvar alteracoes -->
                      <div class="salvar-alteracoes">
                        lembre-se de clicar em salvar alterações
                      </div>
                      <!-- /salvar alteracoes -->
                        <hr />
                        <div class="control-group">
                          <label class="control-label" for="f4_nome">Nome</label>
                          <div class="controls">
                            <input type="text" class="input-xlarge" id="f4_nome" name="f4_nome">
                            <p class="help-block">Entre com seu nome completo.</p>
                          </div>
                        </div>
                        <div class="control-group">
                          <label class="control-label" for="f4_cod_faixaetaria">Idade</label>
                          <div class="controls">
                            <select id="f4_cod_faixaetaria" name="f4_cod_faixaetaria"></select>
                          </div>
                        </div>
                        <div class="control-group">
                          <label class="control-label" for="f4_cod_sexo">Sexo</label>
                          <div class="controls">
                            <select id="f4_cod_sexo" name="f4_cod_sexo"></select>
                          </div>
                        </div>
                        <div class="control-group">
                          <label class="control-label" for="f4_cod_recepcaodesinal">Recepção do sinal</label>
                          <div class="controls">
                            <select id="f4_cod_recepcaodesinal" name="f4_cod_recepcaodesinal"></select>
                          </div>
                        </div>
                        <div class="control-group">
                          <label class="control-label" for="f4_exterior">Reside no exterior?</label>
                          <div class="controls">
                            <input type="checkbox" name="f4_exterior" id="f4_exterior" value="1" onchange="toggleExterior();" />
                            <!-- <select id="f2_exterior" name="f2_exterior" onchange="toggleExterior();"></select> -->
                          </div>
                        </div>
                        <div class="control-group f4_exterior">
                          <label class="control-label" for="f4_localexterior">Pais</label>
                          <div class="controls">
                            <input type="text" class="input-xlarge" id="f4_localexterior" name="f4_localexterior">
                            <!-- <p class="help-block">Pais em que reside <code>Chile</code></p> -->
                          </div>
                        </div>
                        <div id="f4_brasil">
                          <div class="control-group">
                            <label class="control-label" for="f4_estado">Estado</label>
                            <div class="controls">
                              <select id="f4_estado" name="f4_estado" onchange="municipios('f4');"></select>
                            </div>
                          </div>
                          <div class="control-group">
                            <label class="control-label" for="f4_local">Cidade</label>
                            <div class="controls">
                              <select id="f4_local" name="f4_local"></select> 
                            </div>
                          </div>
                        </div><!-- /#brasil -->
                        
                        <div class="control-group">
                          <label class="control-label" for="f4_endereco">Endereço</label> 
                          <div class="controls">
                            <input type="text" class="input-xlarge" id="f4_endereco" name="f4_endereco">
                          </div>
                        </div>
                        <div class="control-group">
                          <label class="control-label" for="f4_numero">Número</label>
                          <div class="controls">
                            <input type="text" class="input-xlarge" id="f4_numero" name="f4_numero">
                          </div>
                        </div>
                        <div class="control-group">
                          <label class="control-label" for="f4_complemento">Complemento</label>
                          <div class="controls">
                            <input type="text" class="input-xlarge" id="f4_complemento" name="f4_complemento"> 
                          </div>
                        </div>
                        <div class="control-group">
                          <label class="control-label" for="f4_cep">CEP</label>
                          <div class="controls">
                            <input type="text" class="input-xlarge" id="f4_cep" name="f4_cep">
                            <p class="help-block">Não sabe seu CEP? <a href="http://www.buscacep.correios.com.br/" target="_blank" style="color:#00ccff">Clique aqui</a> e consulte o Correio.</p>
                          </div>
                        </div>
                        <div class="control-group">
                          <label class="control-label" for="f4_bairro">Bairro</label>
                          <div class="controls">
                            <input type="text" class="input-xlarge" id="f4_bairro" name="f4_bairro">
                          </div>
                        </div>
                        <div class="control-group">
                          <label class="control-label" for="f4_telefone">Telefone</label> 
                          <div class="controls">
                            <input type="text" class="input-xlarge" id="f4_telefone" name="f4_telefone" placeholder="(xx) XXXX-XXXX">
                          </div>
                        </div>
                        <div class="control-group">
                          <label class="control-label" for="f4_twitter">Twitter</label>
                          <div class="controls">
                            <input type="text" class="input-xlarge" id="f4_twitter" name="f4_twitter">
                          </div>
                        </div>
                        <div class="control-group">
                          <label class="control-label" for="f4_sms">SMS</label>
                          <div class="controls">
                            <label class="checkbox">
                              <input type="checkbox" id="f4_sms" name="f4_sms" value="true">
                              Permito o envio de SMS
                            </label>
                          </div>
                        </div>
                        <div class="control-group">
                          <label class="control-label" for="f4_newsletter">Newsletter</label>
                          <div class="controls">
                            <label class="checkbox">
                              <input type="checkbox" id="f4_newsletter" name="f4_newsletter" value="true">
                              Permito o envio de promoções e novidades via email
                            </label>
                          </div>
                        </div>
                        <div class="control-group">
                          <label class="control-label" for="f4_convite">Convite</label>
                          <div class="controls">
                            <label class="checkbox">
                              <input type="checkbox" id="f4_convite" name="f4_convite" value="true">
                              Permito o envio convites
                            </label>
                          </div>
                        </div>
                        <div class="control-group">
                          <label class="control-label" for="f4_terceiros">Terceiros</label>
                          <div class="controls">
                            <label class="checkbox">
                              <input type="checkbox" id="f4_terceiros" name="f4_terceiros" value="true">
                              Permito o envio de informações para terceiros
                            </label>
                          </div>
                        </div>
        
                        <hr />
                        <!-- salvar alteracoes -->
                        <div class="salvar-alteracoes">
                          lembre-se de clicar em salvar alterações
                        </div>
                        <!-- /salvar alteracoes -->
                        
                      </div><!-- /#maisinfo -->
        
                      
                      <div id="message">
                      
                      <div class="control-group">
                        <label class="control-label" for="f4_cod_veiculo">Emissora</label>
                        <div class="controls">
                          <select name="f4_cod_veiculo" id="f4_cod_veiculo" onchange="contas();">
                            <option value="--"></option>
                          </select>
                        </div>
                      </div>
                      <div class="control-group f4">
                        <label class="control-label" for="f4_cod_programa">Programa</label>
                        <div class="controls">
                          <select name="f4_cod_programa" id="f4_cod_programa" onchange="assuntos();">
                            <option value="--" selected="selected">--</option>
                          </select>
                        </div>
                      </div>
                      <div class="control-group f4">
                        <label class="control-label" for="f4_cod_assunto">Assunto</label>
                        <div class="controls">
                          <select name="f4_cod_assunto" id="f4_cod_assunto"></select>
                        </div>
                      </div>
                      <div class="control-group f4">
                        <label class="control-label" for="f4_mensagem">Mensagem</label>
                        <div class="controls">
                          <textarea class="input-xlarge" id="f4_mensagem" name="f4_mensagem" rows="5" onkeydown="limitText(this,1000,'#textCounter');"></textarea>
                          <p class="txt-10"><span id="textCounter">1000</span> caracteres restantes</p>
                        </div>
                      </div>
        
                      </div><!-- /#message -->
                      
                      <div class="botoes-form">
                        <img src="http://cmais.com.br/portal/images/ajax-loader.gif" alt="carregando..." style="display:none" width="16px" height="16px" id="loader4" />
                        <button type="submit" class="btn btn-primary" id="btn4">Enviar Mensagem</button>
                        <button type="submit" class="btn btn-success" id="btn5" style="display:none">Salvar Cadastro</button>
                        <a type="submit" class="btn btn-danger" href="http://cmais.com.br/central-de-relacionamento" id="btn6">Cancelar</a>
                      </div>
                      
                    </fieldset>
                  </form>
                </div>
                <!-- /row4 -->
                
                <!-- row5 -->
                <div class="row" id="row5">
                  <div class="page-header">
                    <h1>Mensagem de erro</h1>
                    <p><span class="label label-important">Email cadastrado mas não validado</span></p>
                  </div><!-- /.span -->
                  <div class="alert alert-block alert-error fade in">
                    <button class="close backBegin" >×</button>
                    <h4 class="alert-heading">Email não validado!</h4>
                    <p>Seu endereço de email não foi validado.</p>
                    <p>Para validá-lo você precisa clicar no link do email de confirmação que lhe foi enviado.</p>
                    <p>
                      <a class="btn btn-danger outro-email" href="javascript:;">Entrar com outro email</a>
                    </p>
                  </div>
                </div>
                <!-- /row5 -->
                
                <!-- row6 -->
                <div class="row" id="row6" >
                  <div class="page-header">
                    <h1>Gratos</h1>
                    <p><span class="label label-success">mensagem enviada</span></p>
                  </div><!-- /.span -->
                  <div class="alert alert-block alert-success fade in">
                    <h4 class="alert-heading">Sua mensagem foi enviada!</h4>
                    <p>O que vc quer fazer agora?</p>
                    <a class="btn btn-success enviar-outra"> Enviar mensagem</a>
                    <a class="btn btn-success change-form" href="javascript:;"> Alterar seu cadastro</a>
                  </div>
                </div>
                <!-- /row6 -->
                <!-- row7 -->
                <div class="row" id="row7" style="margin: 10px;">
                  <div class="page-header">
                    <h1>Usuário cadastrado</h1>
                    <p><span class="label label-success">Usuário cadastrado com sucesso</span></p>
                  </div>
                  <div class="alert alert-block fade in">
                    <h4 class="alert-heading" style="color: red;">SEU CADASTRO FOI EFETUADO COM SUCESSO!</h4>
                    <p>Para validar seu e-mail e ativar seu cadastro, verifique agora a mensagem enviada para sua Caixa de Entrada.</p>
                  </div>
                </div>
                <!-- /row7 -->
                <!-- row8 -->
                <div class="row" id="row8">
                  <div class="page-header">
                    <h1>Erro</h1>
                    <p><span class="label label-success">Usuário <strong>NÃO</strong> cadastrado</span></p>
                  </div><!-- /.span -->
                  <div class="alert alert-block alert-success fade in">
                    <button class="close backBegin" >×</button>
                    <h4 class="alert-heading">Atenção: Seu cadastro não pode ser realizado!</h4>
                    <p>Se você já cadastrou o seu email você deve validar seu cadastro cliando no link que foi enviado para o seu email.</p>
                    <p>
                      <a class="btn btn-info" href="http://cmais.com.br">cmais+ O portal de conteúdo da Cultura</a>
                    </p>
                  </div>
                </div>
                <!-- /row 8-->
                <!-- row9 -->
                <div class="row" id="row9" >
                  <div class="page-header">
                    <h1>Gratos</h1>
                    <p><span class="label label-success">cadastro alterado</span></p>
                  </div><!-- /.span -->
                  <div class="alert alert-block alert-success fade in">
                    <h4 class="alert-heading">Sua mensagem foi enviada!</h4>
                    <p>O que vc quer fazer agora?</p>
                    <a class="btn btn-success enviar-outra"> Continuar o envio</a>
                    <a class="btn btn-success change-form" href="javascript:;"> Alterar novamente seu cadastro</a>
                  </div>
                </div>
                <!-- /row9 -->
                <!-- row 9 local antigo>
                <div class="row" id="row9">
                  <div class="page-header">
                    <h1>Cadastro alterado</h1>
                    <p><span class="label label-success">Cadastrado alterado com sucesso</span></p>
                  </div><!-- /.span >
                  <div class="alert alert-block alert-success fade in">
                    <button class="close backForm" >×</button>
                    <h4 class="alert-heading">Obrigado. Seu cadastro foi alterado com sucesso!</h4>
                    <p></p>
                    <p>
                      <a class="btn btn-success enviar-outra">Continuar Envio</a>
                    </p>
                  </div>
                </div>
                <!-- /row9 -->
                <?php if(isset($_GET["validacao"])==1):?>
                <!-- row10 -->
                <div class="row" id="row10" style="display:block;margin-top:10px;" >
                  <div class="page-header">
                    <h1>Validação</h1>
                    <p><span class="label label-success">e-mail validado</span></p>
                  </div><!-- /.span -->
                  <div class="alert alert-block alert-success fade in">
                    <h4 class="alert-heading">Seu cadastro está validado!</h4>
                    <p>O que você quer fazer agora?</p>
                    <a class="btn btn-success mensagem-validada">Enviar Mensagem</a>
                    <a class="btn btn-primary change-form">Preencher dados complementares</a>
                  </div>
                </div>
                <!-- /row10 -->
                <?php endif; ?>
                <?php endif; //if na row1?>
                <?php if(isset($_GET["erro"])==1): ?>
                <!-- row11 -->
                <div class="row" id="row11" style="display:block; margin-top: 10px;">
                  <div class="page-header">
                    <h1>Erro</h1>
                    <p><span class="label label-success">Erro de validação</span></p>
                  </div><!-- /.span -->
                  <div class="alert alert-block alert-success fade in">
                    <h4 class="alert-heading"></h4>
                    <p>Houve algum erro na validação do seu e-mail.</p>
                  </div>
                </div>
                <!-- /row11 -->
                <?php endif; ?>
                <script src="http://cmais.com.br/portal/js/validate/jquery.validate.min.js"></script>
                <script src="http://cmais.com.br/portal/js/messages_ptbr.js"></script>
                <script src="http://cmais.com.br/portal/js/jquery.maskedinput-1.3.min.js"></script>
                <script>
                
                $(document).ready(function(){
                  var email = '';
                  $("#f4_cod_programa").find("option").attr("value", "--");
                  
                  $("#f4_mais").removeAttr("checked");
                  $("#f4_cod_programa option").attr("value", "");
                  $(".dicas").click(function(){
                    $(this).prev().toggleClass('icon-minus');
                  });
                  $('.formas').click(function(){
                    $(this).prev().toggleClass('icon-circle-arrow-down');
                    goTop2();
                  });
                  $('.collapse').on('hide',function(){
                    $(this).prev().find('i').removeClass('icon-circle-arrow-down');
                    $(this).prev().find('a.fechar').fadeOut('fast');
                  })
                  $('.collapse').on('show',function(){
                     $(this).prev().find('a.fechar').fadeIn('fast');
                     if($(this).prev().find('a.fechar').is(":visible"));
                      goTop2();
                  });
                  $('.fechar').click(function(){
                     goTop();
                  });
                  $('#f4_mais').click(function(){
                    email = $('#f4_email2').val();
                    $('#btn6').attr("href","http://cmais.com.br/central-de-relacionamento?step=4&email="+email);
                  })
                  
                  $('#btn4, #btn5').click(function(){
                    email = $('#f4_email2').val();
                    $('.enviar-outra').attr("href","http://cmais.com.br/central-de-relacionamento?step=4&email="+email);
                  });
                  $('.backBegin, .outro-email').click(function(){
                    goTop();
                    beginAgain();
                  });
                  $('#f4_sms, #f4_newsletter, #f4_convite, #f4_terceiros').click(function(){
                    if($('.salvar-alteracoes').is(":hidden")){
                      $('.salvar-alteracoes').fadeIn("slow");
                    }
                  })
                  $('.change-form').click(function(){
                    $('#f4_maisinfo .control-group').removeClass("success").removeClass("error");
                    $('#f4_maisinfo').find("label.error.valid").remove();
                    $('#f4_maisinfo, #row10, .salvar-alteracoes').hide();
                    $('.enviar-outra').attr("href","http://cmais.com.br/central-de-relacionamento?step=4&email="+email);
                    $('.control-group.f4_mais').hide()
                    //$('#f4_mais').attr('checked','true');
                    $('#row4, #f4_maisinfo, #btn5').fadeIn('fast');
                    $('#row6, #message, #btn4,#row9').hide();
                    $('#f4_cod_programa').find('option').attr('value','valida').attr('selected','selected');
                    $('#f4_cod_veiculo, #f4_cod_assunto, #f4_mensagem').attr('disabled','disabled');
                  });
                  $('.backForm').live("click", function(){
                    $('.row').fadeOut('fast',function(){
                      $('#row4').fadeIn('fast');
                      //$('#row4').find('.control-group.f4_mais').show();
                      $('#f4_mais').removeAttr('checked');
                      $('#btn5, #f4_maisinfo,#row4 label.error.valid').hide();
                      $('#btn4, #message').show(); 
                      $('.control-group').removeClass('success').removeClass('error');
                      $('#f4_cod_veiculo, #f4_cod_assunto, #f4_mensagem').removeAttr('disabled');
                      goTop2();     
                    });
                  });
                  $('#f4_mais').click(function(){
                    $(this).parent().parent().parent().hide();
                  });
                  $.validator.addMethod("cep", function(value, element) {
                    response = (value.indexOf('_')<0) ? true : false;
                    return response;
                  }, "Por favor, forneça um número válido.");
                  $.validator.addMethod("telefone", function(value, element) {
                    response = true;
                    /*
                    if(value!=''){
                      response = (value.indexOf('_')<0) ? true : false;
                    }*/
                    return response;
                  }, "Por favor, forneça um número válido.");
                  
                  $("#f2_cep, #f3_cep, #f4_cep").mask("99999-999");
                  $("#f2_telefone, #f3_telefone, #f4_telefone").mask("(99) 99999999?9");
                  
                  $('#f1_email').val("");
                  
                  $('#loader').hide();
                  
                  $('.row:first').show();
                  
                  var loc = new String(window.location);
                  var id = 0;
                  if(loc.indexOf('email=') >= 0){
                    id = loc.substring(loc.indexOf('email=')+6, loc.leght);
                    $.ajax({
                      type: "POST",
                      dataType: "json",
                      url: "/crm-form/soap.php",
                      data: "step=1&f1_email="+id,
                      beforeSend: function(){
                        $('#loader1').show();
                        $('#btn1').hide();
                      },
                      success: function(data){
                        $('#loader1').hide();
                        $('#btn1').show();
                        if(data.script != ""){
                          eval(data.script);
                        }
                        else{
                          alert('Erro!');
                        }
                      }
                    });
                  }
                  
                  $('#form1').validate({
                    rules: {
                      f1_email: {
                        required: true,
                        email: true
                      }
                    },
                    highlight: function(label) {
                      $(label).closest('.control-group').addClass('error');
                    },
                    success: function(label) {
                      label
                        .text('OK!').addClass('valid')
                        .closest('.control-group').addClass('success');
                    },
                    submitHandler: function(form){
                      $.ajax({
                        type: "POST",
                        dataType: "json",
                        url: "/crm-form/soap.php",
                        data: $("#form1").serialize(),
                        beforeSend: function(){
                          $('#loader1').show();
                          $('#btn1').hide();
                        },
                        success: function(data){
                          $('#loader1').hide();
                          $('#btn1').show();
                          if(data.script != ""){
                            eval(data.script);
                          }
                          else{
                            alert('Erro!');
                          }
                        }
                      });
                    }
                  });
                
                  $('#form2').validate({
                    rules: {
                      f2_telefone: {
                        required: function(element) {
                          if($("#f2_sms:checked").length!=0){
                            return $("#f2_sms:checked").length!=0 ? true : false
                          }else if($("#f2_newsletter:checked").length!=0){  
                            return $("#f2_newsletter:checked").length!=0 ? true : false
                          }else{
                            return false 
                          }
                        }
                      },
                      f2_nome: {
                        required: true
                      },
                      f2_cod_faixaetaria: {
                        required: true
                      },
                      f2_cod_sexo: {
                        required: true
                      },
                      f2_cod_sexo: {
                        required: true
                      },
                      f2_cod_recepcaodesinal: {
                        required: true
                      },
                      f2_localexterior: {
                        required: "#f2_exterior:checked",
                        minlength: 2
                      },
                      f2_numero:{
                        required: function(element) {
                            if($('#f2_endereco').val()!=""){
                              return true
                            }else{
                              return false
                            }
                         }
                      },
                     
                      f2_cep: {
                        required: function(element) {
                          if($('#f2_endereco').val()!=""){
                            //return $("#f4_cep").val()!="_____-___" ? true : false
                            return true
                          }else{
                            return false
                          }
                        },
                        minlength: 8,
                        cep: function(element) {
                          if($('#f2_endereco').val()!=""){
                            //return $("#f4_cep").val()!="_____-___" ? true : false
                            return true
                          }else{
                            return false 
                          }
                        }
                      },
                      f2_estado: {
                        required: "#f2_exterior:!checked"
                      },
                      f2_local: {
                        required: "#f2_exterior:!checked"
                      },
                      f2_cod_recepcaodesinal: {
                        required: true
                      }
                    },
                    highlight: function(label) {
                      $(label).closest('.control-group').addClass('error');
                    },
                    success: function(label) {
                      label
                        .text('OK!').addClass('valid')
                        .closest('.control-group').addClass('success');
                    },
                    submitHandler: function(form){
                      $.ajax({
                        type: "POST",
                        dataType: "json",
                        url: "/crm-form/soap.php",
                        data: $("#form2").serialize(),
                        beforeSend: function(){
                          $('#loader2').show();
                          $('#btn2').hide();
                        },
                        success: function(data){
                          $('#loader2').hide();
                          $('#btn2').show();
                          goTop2();
                          if(data.script != ""){
                            eval(data.script);
                          }
                          else{
                            alert('Erro!');
                          }
                        }
                      });
                    }
                  });
                
                  $('#form3').validate({
                    rules: {
                      f3_email: {
                        required: true,
                        email: true
                      },
                      f3_telefone: {
                        required: function(element) {
                          if($("#f3_sms:checked").length!=0){
                            return $("#f3_sms:checked").length!=0 ? true : false
                          }else if($("#f3_newsletter:checked").length!=0){  
                            return $("#f3_newsletter:checked").length!=0 ? true : false
                          }else{
                            return false
                          }
                        }
                      },
                      f3_cep: {
                        required: function(element) {
                          if($('#f4_endereco').val()!=""){
                            //return $("#f4_cep").val()!="_____-___" ? true : false
                            return true
                          }else{
                            return false
                          }
                        },
                        minlength: 8,
                        cep: function(element) {
                          if($('#f4_endereco').val()!=""){
                            //return $("#f4_cep").val()!="_____-___" ? true : false
                            return true
                          }else{
                            return false 
                          }
                        }
                      },
                      f3_textarea: {
                        minlength: 2,
                        maxlength: 500,
                        required: true
                      }
                    },
                    highlight: function(label) {
                      $(label).closest('.control-group').addClass('error');
                    },
                    success: function(label) {
                      label
                        .text('OK!').addClass('valid')
                        .closest('.control-group').addClass('success');
                    },
                    submitHandler: function(form){
                      $.ajax({
                        type: "POST",
                        dataType: "json",
                        url: "/crm-form/soap.php",
                        data: $("#form3").serialize(),
                        beforeSend: function(){
                          $('#loader3').show();
                          $('#btn3').hide();
                        },
                        success: function(data){
                          $('#loader3').hide();
                          $('#btn3').show();
                          if(data.script != ""){
                            eval(data.script);
                          }
                          else{
                            alert('Erro!');
                          }
                        }
                      });
                    }
                  });
                
                  $('#form4').validate({
                    rules: {
                      f4_nome: {
                        required: true
                      },
                      f4_cod_faixaetaria: {
                        required: true
                      },
                      f4_cod_sexo: {
                        required: true
                      },
                      f4_cod_sexo: {
                        required: true
                      },
                      f4_cod_recepcaodesinal: {
                        required: true
                      },
                      f4_localexterior: {
                        required: "#f4_exterior:checked",
                        minlength: 2
                      },
                      f4_estado: {
                        required: "#f4_exterior:!checked"
                      },
                      f4_local: {
                        required: "#f4_exterior:!checked"
                      },
                      f4_numero:{
                        required: function(element) {
                            if($('#f4_endereco').val()!=""){
                              return true
                            }else{
                              return false
                            }
                         }
                       },
                      /*
                      f4_numero: {
                        required: function(element) {
                          return $("#f4_endereco").val()!="" ? true : false
                        },
                        number: true
                      },
                      
                      f4_cep: {
                        required: function(element) {
                          return $("#f4_endereco").val()!="" ? true : false
                        },
                        minlength: 9,
                        cep: true
                      },
                      */
                     f4_cep: {
                        required: function(element) {
                          if($('#f4_endereco').val()!=""){
                            //return $("#f4_cep").val()!="_____-___" ? true : false
                            return true
                          }else{
                            return false
                          }
                        },
                        minlength: 8,
                        cep: function(element) {
                          if($('#f4_endereco').val()!=""){
                            //return $("#f4_cep").val()!="_____-___" ? true : false
                            return true
                          }else{
                            return false 
                          }
                        }
                      },
                      f4_cod_grupo: {
                        required: "#f4_mais:!checked"
                      },
                      f4_cod_programa: {
                        required: true
                      },
                      f4_cod_veiculo: {
                        required: "#f4_mais:!checked"
                      },
                      f4_cod_assunto: {
                        required: "#f4_mais:!checked"
                      },
                      f4_mensagem: {
                        minlength: 2,
                        maxlength: 1000,
                        required: "#f4_mais:!checked"
                      },
                      f4_telefone: {
                        required: function(element) {
                          if($("#f4_sms:checked").length!=0){
                            return $("#f4_sms:checked").length!=0 ? true : false
                          }else if($("#f4_newsletter:checked").length!=0){  
                            return $("#f4_newsletter:checked").length!=0 ? true : false
                          }else{
                            return false
                          }
                        }
                      }
                    },
                    onkeyup:false,
                    focusInvalid: false,
                    onfocusout: function(element){
                      if($('.salvar-alteracoes').is(":hidden")){
                        $('.salvar-alteracoes').fadeIn("slow");
                      }
                    },
                    highlight: function(label) {
                      $(label).closest('.control-group').addClass('error');
                    },
                    success: function(label) {
                      label
                        .text('OK!').addClass('valid')
                        .closest('.control-group').addClass('success');
                    },
                    submitHandler: function(form){
                      $.ajax({
                        type: "POST",
                        dataType: "json",
                        url: "/crm-form/soap.php",
                        data: $("#form4").serialize(),
                        beforeSend: function(){
                          $('#loader4').show(); 
                          $('#btn4').hide();
                        },
                        success: function(data){
                          $('#loader4').hide();
                          $('#btn4').show();
                          goTop2();
                          if(data.script != ""){
                            eval(data.script);
                          }
                          else{
                            alert('Erro!');
                          }
                        }
                      });
                    }
                  });
                  
                });
                
                function toggleExterior(obj){
                  //console.log($(obj))
                  if($('#f2_exterior').attr('checked')){
                    $('#f2_brasil').hide();
                    $('#f2_cep').parent().parent().hide();
                    $('#f2_estado,#f2_local').attr('disabled','disabled');
                    $('.f2_exterior').show();
                    $('.f2_exterior').removeAttr('disabled');
                  }else{
                    $('#f2_brasil').show();
                    $('#f2_cep').parent().parent().show();
                    $('#f2_estado,#f2_local').removeAttr('disabled');
                    $('.f2_exterior').hide();
                    $('.f2_exterior').attr('disabled','disabled');
                  }
                  
                  if($('#f3_exterior').attr('checked')){
                    $('#f3_brasil').hide();
                    $('#f3_estado,#f3_local').attr('disabled','disabled');
                    $('.f3_exterior').show();
                    $('.f3_exterior').removeAttr('disabled');
                  }else{
                    $('#f3_brasil').show();
                    $('#f3_estado,#f3_local').removeAttr('disabled');
                    $('.f3_exterior').hide();
                    $('.f3_exterior').attr('disabled','disabled');
                  }
                
                  if($('#f4_exterior').attr('checked')){
                    $('#f4_brasil').hide();
                    $('#f4_estado,#f4_local').attr('disabled','disabled');
                    $('.f4_exterior').show();
                    $('.f4_exterior').removeAttr('disabled');
                  }else{
                    $('#f4_brasil').show();
                    $('#f4_estado,#f4_local').removeAttr('disabled');
                    $('.f4_exterior').hide();
                    $('.f4_exterior').attr('disabled','disabled');
                  }
                }
                
                function toggleInfo(){
                  if($('#f4_mais').attr('checked')){
                    $("#f4_cod_programa option").attr("value", "--");
                    $('#f4_maisinfo .control-group').removeClass("success");
                    $('#f4_maisinfo').find("label.error.valid").remove();
                    $('#f4_maisinfo').show();
                    $('#btn5').show();
                    $('#btn4, .salvar-alteracoes, #message').hide();
                    $('#f4_cod_programa').attr('value','--');
                    $('#f4_cod_veiculo, #f4_cod_assunto, #f4_mensagem').attr('disabled','disabled');
                  }else{
                    $('#f4_maisinfo').hide();
                    $('#btn5').hide();
                    $('#btn4').show();
                    $('#message').show();
                    $('#f4_cod_programa, #f4_cod_veiculo, #f4_cod_assunto, #f4_mensagem').removeAttr('disabled');
                  }
                  if($('#f3_mais').attr('checked')){
                    $('#f3_maisinfo').show(); 
                  }else{
                    $('#f3_maisinfo').hide();
                  }
                  if($('#f2_mais').attr('checked')){
                    $('#f2_maisinfo').show();
                  }else{
                    $('#f2_maisinfo').hide();
                  }
                }
                
                function set_checked(checked) {
                  $('input[name=f4_mais]').attr('checked', checked);
                }
                
                function municipios(form){
                  $.ajax({
                    type: "POST",
                    dataType: "json",
                    url: "/crm-form/soap.php",
                    data: "action=municipios&uf="+$('#'+form+'_estado :selected').val()+"&form="+form,
                    beforeSend: function(){
                      //$('img#ajax-loader').show();
                    },
                    success: function(data){
                      if(data.script != ""){
                        eval(data.script);
                      }
                      else{
                        alert('Erro!');
                      }
                    }
                  });
                }

                
      
                function contas(){
                  $.ajax({
                    type: "POST",
                    dataType: "json",
                    url: "/crm-form/soap.php",
                    data: "action=contas&cod_veiculo="+$('#f4_cod_veiculo :selected').val(),
                    beforeSend: function(){
                      //$('img#ajax-loader').show();
                    },
                    success: function(data){
                      if(data.script != ""){
                        eval(data.script);
                        if($('#f4_cod_programa option').size()<=1){
                            $('#f4_cod_programa option').attr("value","sem programa").html("sem programa").attr('selected','selected');
                            $('#f4_cod_assunto').html('<option value="19">Elogio</option><option value="21">Crítica</option><option value="23">Comentário</option><option value="24">Pedido de Informação</option>');
                          }else{  
                            $('#f4_cod_assunto option').html('--').css('display','none');
                          }
                      }
                      else{
                        alert('Erro!');
                      }
                    }
                  });
                  //$('.control-group.f4').slideDown('fast');
                }
                
                function assuntos(){
                  $.ajax({
                    type: "POST",
                    dataType: "json",
                    url: "/crm-form/soap.php",
                    data: "action=assuntos&cod_programa="+$('#f4_cod_programa :selected').val(),
                    beforeSend: function(){
                      //$('img#ajax-loader').show();
                    },
                    success: function(data){
                      if(data.script != ""){
                        eval(data.script);
                      }
                      else{
                        alert('Erro!');
                      }
                    }
                  });
                }
                
                function cep(cep){
                  $.ajax({
                    type: "POST",
                    dataType: "json",
                    url: "http://cmais.com.br/actions/cep/geraJSONendereco.php?cep="+cep,
                    //data: "action=contas&cod_veiculo="+$('#f4_cod_veiculo :selected').val(),
                    beforeSend: function(){
                      //$('img#ajax-loader').show();
                    },
                    success: function(data){
                      if(data.script != ""){
                        $("#f2_endereco").val(data.cep.endereco);
                        $("#f2_bairro").val(data.cep.bairro);
                        $("#f2_estado option").each(function () {
                          if($(this).val() == data.cep.uf){
                            $(this).attr('selected', 'selected');
                            $('#f2_estado').focus();
                          }else{
                            $(this).removeAttr('selected');
                          }
                        })
                        setTimeout(function() { Verifica_Cidade(data.cep.cidade); }, 1000);
                      }else{
                        alert('Erro!');
                      }
                    }
                  });
                }

                function Verifica_Cidade(cidade){
                  //console.log("passou aqui");
                  $('#f2_local option').each(function(){
                    //console.log($(this).text());
                    if($.trim($(this).text()) == cidade.toUpperCase()){
                      $(this).attr('selected', 'selected');
                      $('#f2_local').focus();
                    }else{
                      $(this).removeAttr('selected');
                    }
                  });
                }

                function goTop2(){
                  $('html, body').animate({
                    scrollTop: $('.coluna-sub').offset().top
                  }, "slow");
                }
                function goTop(){
                  $('html, body').animate({
                    scrollTop: $('#fundo-topo').offset().top
                  }, "slow");
                }
                function beginAgain(){
                  $('.row').slideUp('fast',function(){
                    $('#row1').fadeIn('fast');
                    $('.control-group').removeClass('success').removeClass('error');
                    $("label.error.valid").remove()
                    $('#f1_email').val("");     
                  });
                }
                // Contador de Caracters
                function limitText(limitField, limitNum, textCounter) {
                  if(limitField.value.length > limitNum)
                    limitField.value = limitField.value.substring(0, limitNum);
                  else
                    $(textCounter).html(limitNum - limitField.value.length);
                }
                </script>
              <!--form envio-->
              </div>
                

            </div>
                
              <?php foreach($displays["formas-de-atendimento"] as $d): ?>
                
            <div class="accordion-group">
              <div class="accordion-heading escuro">
                <i class="icon-circle-arrow-right"></i>  
                <a href="javascript:;" class="formas" data-toggle="collapse" data-target="#<?php echo $d->getId() ?>"  data-parent="#col-sub">
                  <?php echo $d->getTitle() ?>
                </a>
                <a href="javascript:;"class="fechar" data-toggle="collapse" data-target="#<?php echo $d->getId() ?>" data-parent="#col-sub" style="display:none;">fechar</a>
              </div>
              
                <div id="<?php echo $d->getId() ?>" class="fundo-cinza collapse"style="overflow: hidden; clear: both;">
                  <?php echo html_entity_decode($d->Asset->AssetContent->render()) ?>
                </div>
  
            </div>
            <?php endforeach; ?>
          </div>
          <!-- COLUNA SUB DIR 2 -->
        </div>
        <!-- COLUNA SUB DIR 1 --> 
        123
        <?php if(isset($displays["melhore-seu-relacionamento"][0])): ?>
        <div class="coluna-sub cinza-claro-2">
          <h1><?php echo $displays["melhore-seu-relacionamento"][0]->Asset->getTitle() ?></h1>
          <?php echo html_entity_decode($displays["melhore-seu-relacionamento"][0]->Asset->AssetContent->render()) ?>
        </div>  
        <?php endif; ?>
        
        <!--botao-->
        <div class="botoes-central-celular">
          <?php if(isset($displays['botoes-central'])):?>
            <?php if(count($displays['botoes-central']) > 0): ?>
              <?php foreach($displays['botoes-central'] as $k=>$d): ?>
              <div class="base-btn">  
                <div class="btn-esquerda cinza-claro-2">
                  <a href="<?php echo $d->Asset->AssetContent->getHeadline() ?>" title="<?php echo $d->getTitle() ?>">
                    <i class="ico ico-<?php echo $d->Asset->getSlug() ?>"></i>
                    <h1><?php echo $d->getTitle() ?></h1>
                    <p><?php echo $d->Asset->getDescription() ?></p>
                  </a>
                </div>
                <div class="btn-esquerda sombra"></div>
              </div>
              <?php endforeach; ?>
            <?php endif; ?>
          <?php endif; ?>
        </div>
        <!--/botao-->
        
 
      
    </div>
    <!--/coluna direita-->
  </div>
  <!--/colunas-->  
</div>
<!--container-->