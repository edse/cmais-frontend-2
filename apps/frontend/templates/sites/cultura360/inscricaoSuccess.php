<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/secoes/contato.css" type="text/css" />
<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/sites/<?php echo $section->Site->getSlug() ?>.css" type="text/css" />

<?php use_helper('I18N', 'Date') ?>
<?php include_partial_from_folder('blocks', 'global/menu', array('channels' => $channels, 'live' => $live, 'editorials' => $editorials, 'site' => $site, 'mainSite' => $mainSite, 'coming' => $coming, 'important' => $important)) ?>

    <!-- CAPA SITE -->
    <div id="capa-site">

      <?php if(isset($displays["alerta"])) include_partial_from_folder('blocks','global/breakingnews', array('displays' => $displays["alerta"])) ?>

            <!-- BARRA SITE -->
            <div id="barra-site">
              <div class="topo-programa">
                <?php if(isset($program) && $program->id > 0): ?>
                <h2>
                  <a href="<?php echo $program->retriveUrl() ?>">
                    <img src="http://midia.cmais.com.br/programs/<?php echo $program->getImageThumb() ?>" alt="<?php echo $program->getTitle() ?>" title="<?php echo $program->getTitle() ?>" />
                  </a>
                </h2>
                <?php endif; ?>
      
                <?php if(isset($program) && $program->id > 0): ?>
                <?php include_partial_from_folder('blocks','global/like', array('site' => $site, 'uri' => $uri, 'program' => $program)) ?>
                <?php endif; ?>
      
                <?php if(isset($program) && $program->id > 0): ?>
                <!-- horario -->
                <div id="horario">
                  <p><?php echo html_entity_decode($program->getSchedule()) ?></p>
                </div>
                <!-- /horario -->
                <?php endif; ?>
              </div>
      
              <!-- box-topo -->
              <div class="box-topo grid3">
      
                <?php include_partial_from_folder('blocks','global/sections-menu', array('siteSections' => $siteSections)) ?>
                
                <?php if(!in_array(strtolower($section->getSlug()), array('home','homepage','home-page','index'))): ?>
                <div class="navegacao txt-10">
                  <a href="../" title="Home">Home</a>
                  <span>&gt;</span>
                  <a href="<?php echo $section->retriveUrl()?>" title="<?php echo $section->getTitle()?>"><?php echo $section->getTitle()?></a>
                </div>
                <?php endif; ?>
              </div>
              <!-- /box-topo -->
            </div>
            <!-- /BARRA SITE -->

      <!-- MIOLO -->
      <div id="miolo">

        <!-- BOX LATERAL -->
        <?php include_partial_from_folder('blocks','global/shortcuts') ?>
        <!-- BOX LATERAL -->
        
        <!-- CONTEUDO PAGINA -->
        <div id="conteudo-pagina">
          <!-- CAPA -->
          <div class="capa grid3">
            <!-- ESQUERDA -->
            <div id="esquerda" class="grid2">
              <div class="contato grid2">

                <h3 class="tit-pagina grid3"><?php echo $section->getTitle() ?></h3>
                <!-- <p class="titulos">Pellentesque volutpat rutrum metus nec vulputate</p>-->
                <!-- <p><?php echo $section->getDescription()?></p> -->
                <p>A nova temporada do Cultura 360 vem aí! Se você é aluno ou professor de faculdades ou universidades brasileiras, e tem um trabalho em audiovisual, envie seu material pra gente.</br></br>
                  Agora, uma novidade: nessa nova fase do programa, os vídeos podem ter de 3 a 12 minutos de duração. São aceitos trabalhos de todas as modalidades: reportagem, documentário, peça de ficção, videoclipe musical ou o que mais você quiser inventar.</br></br>
                  Aqui no site você encontra todas as informações de como se inscrever. É muito fácil!</br></br>
                  Não perca essa chance de mostrar seu talento pra todo o Brasil através da TV Cultura.</br></br>
                  O programa Cultura 360 é uma parceria entre a Fundação Padre Anchieta e a Associação Brasileira de Televisão Universitária.</br></br>
                  Cultura 360 – o olhar universitário da sociedade.</br></br>
                  Leia o <a href="http://tvcultura.cmais.com.br/cultura360/regulamento-cultura-360" target="_blank" style="font-weight:bold">Regulamento</a>.
                </p>
                <div class="msgErro" style="display:none">
                                      <span class="alerta"></span>
                                        <div class="boxMsg">
                                        <p class="aviso">Sua mensagem não pode ser enviada.</p>
                      <p>Confirme se todos os campos foram preenchidos corretamente e verifique seus dados. Você pode ter esquecido de preencher algum campo ou errado alguma informação.</p>
                                      </div>
                                        <hr />
                                    </div>
                                    <?php if($mailSent): ?>
                                    <div class="msgAcerto">
                                      <span class="alerta"></span>
                                        <div class="boxMsg">
                                          <p class="aviso">Mensagem enviada com sucesso!</p>
                      <p>Obrigado por entrar em contato com nosso programa. Em breve retornaremos sua mensagem.</p>
                    </div>
                                        <hr />                                   
                                    </div>
                                    <?php else: ?>
                <form id="form-inscricao" name="form-inscricao" method="post" action="">
                  <!-- <input type="hidden" name="mailSent" id="mailSent" value="1" /> -->
                  <!-- <input type="hidden" name="captcha" id="captcha" value="1" />-->
                  <input type="hidden" name="email" value="<?php echo $section->Site->getContactEmail() ?>">
                  <div class="linha t3 titulo">
                    <label>V&iacute;deo</label>
                  </div>
                  <div class="linha t3">
                    <label>
                      nome do v&iacute;deo
                    </label>
                    <input type="text" name="nomeVideo" id="nomeVideo" />
                  </div>
                  <div class="linha t3">
                    <label>
                      sinopse e palavras chave
                    </label>
                    <textarea name="sinopse" id="sinopse" onKeyDown="limitText(this,400,'#textCounter');"></textarea>
                    <p class="txt-10">
                      <span id="textCounter">400</span> caracteres restantes
                    </p>
                  </div>
                  
                  
                  <div class="linha t3 titulo">
                    <label>Institui&ccedil;&atilde;o de ensino superior</label>
                  </div>
                  <div class="linha t3">
                    <label>
                      nome
                    </label>
                    <input type="text" name="nome" id="nomeInstituicao" />
                  </div>
                  <div class="linha t3">
                    <label>
                      endere&ccedil;o
                    </label>
                    <input type="text" name="endereco" id="endereco" />
                  </div>
                  <div class="linha t1">
                    <label>
                      cidade
                    </label>
                    <input type="text" name="cidade" id="cidade" />
                  </div>
                      
                  <div class="linha t2">
                    <label>
                      estado
                    </label>
                    <br />
                    <select class="estado required" id="estado">
                      <option value="" selected="selected">--</option>
                      <option value="Acre">AC</option>
                      <option value="Alagoas">AL</option>
                      <option value="Amazonas">AM</option>
                      <option value="Amap&aacute;">AP</option>
                      <option value="Bahia">BA</option>
                      <option value="Cear&aacute;">CE</option>
                      <option value="Distrito Federal">DF</option>
                      <option value="Espirito Santo">ES</option>
                      <option value="Goi&aacute;s">GO</option>
                      <option value="Maranh&atilde;o">MA</option>
                      <option value="Minas Gerais">MG</option>
                      <option value="Mato Grosso do Sul">MS</option>
                      <option value="Mato Grosso">MT</option>
                      <option value="Par&aacute;">PA</option>
                      <option value="Para&iacute;ba">PB</option>
                      <option value="Pernambuco">PE</option>
                      <option value="Piau&iacute;">PI</option>
                      <option value="Paran&aacute;">PR</option>
                      <option value="Rio de Janeiro">RJ</option>
                      <option value="Rio Grande do Norte">RN</option>
                      <option value="Rond&ocirc;nia">RO</option>
                      <option value="Roraima">RR</option>
                      <option value="Rio Grande do Sul">RS</option>
                      <option value="Santa Catarina">SC</option>
                      <option value="Sergipe">SE</option>
                      <option value="S&atilde;o Paulo">SP</option>
                      <option value="Tocantins">TO</option>
                    </select>
                  </div>
                  <div class="linha t3">
                    <label>
                      curso ou setor no qual o v&iacute;deo foi produzido
                    </label>
                    <input type="text" name="curso" id="curso" />
                  </div>
                  <div class="linha t3 titulo">
                    <label>Estudantes</label>
                  </div>
                  <div id="estudantes">
                      <div class="linha t3">
                        <label>
                          nome
                        </label>
                        <input type="text" name="nomeEstudante" />
                      </div>
                      <div class="linha t3">
                        <label>
                          curso
                        </label>
                        <input type="text" name="cursoEstudante" />
                      </div>
                  </div>
                  <div class="linha t1">
                    <a href="javascript:;" class="adicionar" id="adicionarEstudante">adicionar + estudante</a>
                  </div>
                  <div class="linha t3 titulo">
                    <label>Professores</label>
                  </div>
                  <div id="professores">
                  <div class="linha t3">
                    <label>
                      nome
                    </label>
                    <input type="text" name="nomeProfessor" />
                  </div>
                  
                  
                  <div class="linha t3">
                    <label>
                      vincula&ccedil;&atilde;o (curso/setor/grupo de pesquisa)
                    </label>
                    <input type="text" name="vinculacao" />
                  </div>
                  </div>
                  <div class="linha t1">
                    <a href="javascript:;" class="adicionar" id="adicionarProfessor">adicionar + professor</a>
                  </div>
                  
                  <div class="linha t3 titulo">
                    <label>Contato do respons&aacute;vel pela inscri&ccedil;&atilde;o</label>
                  </div>
                                    <div class="linha t3">
                    <label>
                      Nome
                    </label>
                    <input type="text" name="nomeResponsavel" />
                  </div>
                                    <div class="linha t4">
                    <label>
                      Email
                    </label>
                    <input type="text" name="emailResponsavel" />
                  </div>
                                    <div class="linha t4">
                    <label>
                      Telefone
                    </label>
                    <input type="text" name="telResponsavel" id="telResponsavel" />
                  </div>
                  
                  
                  
                  <div class="linha t3 codigo" id="captchaimage">
                    <label for="captcha">
                      Confirma&ccedil;&atilde;o
                    </label>
                    <br />
                                        <a class="img" href="javascript:;" onclick="$('#captcha_image').attr('src', 'http://app.cmais.com.br/portal/js/validate/demo/captcha/images/image.php?'+new Date)" id="refreshimg" title="Clique para gerar outro código">
                                          <img src="http://app.cmais.com.br/portal/js/validate/demo/captcha/images/image.php?<?php echo time(); ?>" width="132" height="46" alt="Captcha image" id="captcha_image" />
                                        </a>
                    <label class="msg" for="captcha">
                      Digite no campo abaixo os caracteres que você vê na imagem:
                    </label>
                    <input class="caracteres" type="text" maxlength="6" name="captcha" id="captcha" />
                    <input class="enviar" type="submit" name="enviar" id="enviar" value="enviar inscri&ccedil;&atilde;o" />
                  </div>
                </form>
                 <?php endif; ?>
                <div class="box-padrao grid1">
                  <a href="http://www.abtu.org.br/site/"><img src="http://cmais.com.br/portal/images/logo-abtu.png" alt="ABTU" /></a>
                </div>
              </div>
            </div>
            <!-- /ESQUERDA -->

            <!-- DIREITA -->
            <div id="direita" class="grid1">
              <!-- BOX PUBLICIDADE -->
              <div class="box-publicidade grid1">
                <!-- cultura360-assets-300x250 -->
                <script type='text/javascript'>
                GA_googleFillSlot("cmais-assets-300x250");
                </script>
              </div>
              <!-- / BOX PUBLICIDADE -->
            </div>
            <!-- /DIREITA -->
          </div>
          <!-- /CAPA -->
        </div>
        <!-- /CONTEUDO PAGINA -->
      </div>
      <!-- /MIOLO -->
    </div>
    <!-- / CAPA SITE -->

  <script type="text/javascript" src="http://cmais.com.br/portal/js/validate/jquery.validate.js"></script> 
  <script src="http://cmais.com.br/portal/js/jquery.maskedinput.js" type="text/javascript"></script>
    <script type="text/javascript">
    
       
      $(document).ready(function(){
        var num = 0;
        $("#telResponsavel").mask("(99) 99999999?9");
        
        $('.adicionar').click(function()
          {
            action = $(this).attr('id');
            if (action == 'adicionarEstudante')
            {
          $('#estudantes').append('<div class="linha t3"><label>nome</label><input type="text" name="nomeEstudante'+num+'" /></div><div class="linha t3"><label>curso</label><input type="text" name="cursoEstudante'+num+'" /></div>');              
            }
            if (action == 'adicionarProfessor')
            {
          $('#professores').append('<div class="linha t3"><label>nome</label><input type="text" name="nomeProfessor'+num+'" /></div><div class="linha t3"><label>vincula&ccedil;&atilde;o (curso/setor/grupo de pesquisa)</label><input type="text" name="vinculacao'+num+'" /></div>');              
            }
            num++;            
          }
        );
        // validate signup form on keyup and submit
        var validator = $("#form-inscricao").validate({
          rules:{
            nomeVideo:{
        required:true,
        minlength:2
      },
            sinopse:{
        required:true
      },
      nome:{
        required:true,
        minlength:2
      },
      endereco:{
              required: true,
              minlength: 3
            },    
            cidade:{
              required: true,
              minlength: 3
            },
            estado:{
              required: true
            },
            curso:{
              required: true,
        minlength:2
            },
      nomeEstudante:{
        required:true,
        minlength:2
      },
      cursoEstudante:{
        required:true,
        minlength:2
      },
            nomeProfessor:{
              required: true,
        minlength:2
            },
      vinculacao:{
              required: true,
        minlength:2
      },
      nomeResponsavel:{
              required: true,
        minlength:2
            },
      emailResponsavel:{
              required: true,
        minlength:2
            },
      telResponsavel:{
              required: true,
        minlength:2
            },
            captcha: {
              required: true,
              remote: "/portal/js/validate/demo/captcha/process.php"
            }
          },
          messages:{            
            nomeVideo: "Este campo &eacute; Obrigat&oacute;rio. Digite um nome de v&iacute;deo v&aacute;lido. ",
            sinopse: "Este campo &eacute; Obrigat&oacute;rio.",
      nome: "Este campo &eacute; Obrigat&oacute;rio. Digite um nome de institui&ccedil;&atilde;o v&aacute;lido. ",
      endereco: "Este campo &eacute; Obrigat&oacute;rio.",
            cidade: "Este campo &eacute; Obrigat&oacute;rio.",
            estado: "Este campo &eacute; Obrigat&oacute;rio.",
            curso: "Este campo &eacute; Obrigat&oacute;rio. Digite um nome de curso v&aacute;lido.",
      nomeEstudante: "Este campo &eacute; Obrigat&oacute;rio. Digite um nome v&aacute;lido.",
      cursoEstudante: "Este campo &eacute; Obrigat&oacute;rio. Digite um nome de curso v&aacute;lido.",
      nomeProfessor: "Este campo &eacute; Obrigat&oacute;rio. Digite um nome v&aacute;lido.",
      nomeResponsvel: "Este campo &eacute; Obrigat&oacute;rio. Digite um nome v&aacute;lido.",
      emailResponsvel: "Este campo &eacute; Obrigat&oacute;rio. Digite um nome v&aacute;lido.",
      telResponsvel: "Este campo &eacute; Obrigat&oacute;rio. Digite um nome v&aacute;lido.",
      vinculacao: "Este campo &eacute; Obrigat&oacute;rio. Digite uma vincula&ccedil;&atilde;o v&aacute;lida.",
            captcha: "Digite corretamente o código que está ao lado."
          }
        });
      });
      // Contador de Caracters
      function limitText (limitField, limitNum, textCounter)
      {
        if (limitField.value.length > limitNum)
          limitField.value = limitField.value.substring(0, limitNum);
        else
          $(textCounter).html(limitNum - limitField.value.length);
      }
    </script> 
    

