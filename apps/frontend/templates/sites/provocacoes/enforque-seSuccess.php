<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/secoes/contato.css" type="text/css" />
<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/sites/<?php echo $section->Site->getSlug() ?>.css" type="text/css" />

<script type="text/javascript" src="http://cmais.com.br/portal/js/jquery-ui/js/jquery-ui-1.7.2.custom.min.js"></script>
<script src="http://cmais.com.br/portal/js/jquery-ui-i18n.min.js" type="text/javascript"></script>
<link type="text/css" href="http://cmais.com.br/portal/js/jquery-ui/css/jquery-ui-1.7.2.custom.css" rel="stylesheet" />

<?php /*
<script type="text/javascript">

  $(function(){ //onready
    $.datepicker.setDefaults($.datepicker.regional['pt-BR']);
    // Datepicker
    $('#datepicker').datepicker({
      beforeShowDay: dateLoading,
      onSelect: redirect,
      dateFormat: 'yy/mm/dd',
      altFormat: 'yy-mm-dd',
      <?php if(isset($date)): ?>defaultDate: new Date("<?php echo str_replace("-","/",$date) ?>"),<?php endif; ?>
      inline: true
    });
    //hover states on the static widgets
    $('#dialog_link, ul#icons li').hover(function() {
       $(this).addClass('ui-state-hover'); 
     },
      function() { $(this).removeClass('ui-state-hover'); }
    );
  });
</script>
 */ ?>
<?php use_helper('I18N', 'Date')
?>
<?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'asset' => $asset, 'section' => $section))
?>

<div class="bg-provocacoes">
  <!-- CAPA SITE -->
  <div id="capa-site">
    <!-- BREAKING NEWS -->
    <?php if(isset($displays["alerta"])) include_partial_from_folder('blocks','global/breakingnews', array('displays' => $displays["alerta"]))
    ?>
    <!-- /BREAKING NEWS -->
    <!-- BARRA SITE -->
    <div id="barra-site">
      <div class="topo-programa">
        <?php if(isset($program) && $program->id > 0): ?>
        <h2><a href="<?php echo $program->retriveUrl() ?>" title="<?php echo $program->getTitle() ?>"> <img title="<?php echo $program->getTitle() ?>" alt="<?php echo $program->getTitle() ?>" src="http://midia.cmais.com.br/programs/<?php echo $program->getImageThumb() ?>"> </a></h2>
        <?php endif;?>

        <?php if(isset($program) && $program->id > 0): ?>
        <?php include_partial_from_folder('blocks','global/like', array('site' => $site, 'uri' => $uri, 'program' => $program)) ?>
        <?php endif;?>

        <?php if(isset($program) && $program->id > 0): ?>
        <!-- horario -->
        <div id="horario">
          <p><?php echo html_entity_decode($program->getSchedule()) ?></p>
        </div>
        <!-- /horario -->
        <?php endif;?>
      </div>
      <!-- box-topo -->
      <div class="box-topo grid3">
        <!-- menu --> 
          <?php if(count($siteSections) > 0): ?>
          <!-- menu interna -->
          <ul class="menu-interna">
            <?php foreach($siteSections as $s): ?>
              <?php $subsections = $s->subsections(); ?>
              <?php if(count($subsections) > 0): ?>
                <li class="m-<?php echo $s->getSlug() ?> span"><a href="#" class="abre-menu" title="<?php echo $s->getTitle() ?>"><?php echo $s->getTitle() ?><span></span></a>
                  <div class="submenu-interna toggle-menu" style="display:none;">
                    <ul style="display:block;">
                    <?php foreach($subsections as $s): ?>
                      <li><a href="<?php echo $s->retriveUrl()?>"><?php echo $s->getTitle()?></a></li>
                    <?php endforeach; ?>
                    </ul>
                  </div>
                </li>
              <?php else: ?>
                <li class="m-<?php echo $s->getSlug() ?>"><a href="<?php echo $s->retriveUrl()?>" title="<?php echo $s->getTitle() ?>"><?php echo $s->getTitle() ?></a></li>
              <?php endif; ?>
            <?php endforeach; ?>
          </ul>
          <!-- /menu interna -->
          <?php endif; ?>
          <!-- /menu -->
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
      <div id="conteudo-pagina exceptionn">
        <!-- CAPA -->
        <div class="capa grid3 exceptionn">
          <div class="tudo-provocacoes">
            <span class="bordaTopRV"></span>
            <div class="centroRV">
              <div class="faleConosco">
                <h2><?php echo $section->getTitle() ?></h2>
                <!--p><?php echo $section->getDescription()?></p-->
                <script>
                  $(document).ready(function() {
                    $('.abre-form').click(function() {
                      $('.box.fechado').hide();
                      $('.box.aberto').fadeIn('fast');
                    });

                    $('.fecha-form').click(function() {
                      $('.box.fechado').show();
                      $('.box.aberto').hide();
                    })
                  });

                </script>
                <div class="box fechado">
                  <p class="icon abre-form">Vamos, enforque-se na corda da liberdade.</p>
                  <p class="btn abre-form">preencha o formulário</p>
                </div>
                <div class="box msg" style="display:none;">
                  <div class="msgErro" style="display:none">
                    <p class="aviso">Sua mensagem não pode ser enviada.</p>
                  </div>
                  <div class="msgAcerto" style="display:none">
                    <p class="aviso">Informações enviadas com sucesso. Aguarde até amanhã para nos provocar novamente.</p>
                  </div>
                </div>
                <div class="box aberto" style="display: none;">
                  <p class="icon fecha-form">Vamos, enforque-se na corda da liberdade. Mas só uma vez por dia.</p>
                  <p>Escreva aqui tudo o que você quiser, com toda a liberdade que algum dia talvez não lhe tenham deixado ter. Escreva sobre o Brasil, o mundo, as pessoas, as coisas, tudo. Não importa se os outros amarão ou odiarão suas palavras, desde que respeitem o seu direito de escrevê-las.</p>
                  <p>Aqui você também pode mandar as suas indicações de peças, filmes, eventos, livros, etc.</p>
                  <form id="form-contato" method="post" action="">
                    <label class="med">Nome
                      <input type="text" name="nome" id="nome" />
                    </label>
                    <label class="peq">Idade
                      <input type="text" name="idade" id="idade" />
                    </label>
                    <label class="grd">E-mail
                      <input type="text" name="email" id="email" />
                    </label>
                    <label class="grd">Website
                      <input type="text" name="website" id="website" />
                    </label>
                    <div class="grd">
                      <label class="mensagem">Mensagem</label>
                      <textarea name="mensagem" id="mensagem" onKeyDown="limitText(this,1000,'#textCounter');"></textarea>
                      <p class="txt-10"><span id="textCounter">1000</span> caracteres restantes</p>
                    </div>
                    <div class="codigo" id="captchaimage">
                      <label for="captcha">Confirmação</label>
                      <br />
                      <a class="img" href="javascript:;" onclick="$('#captcha_image').attr('src', '/portal/js/validate/demo/captcha/images/image.php?'+new Date)" id="refreshimg" title="Clique para gerar outro código"> <img src="http://cmais.com.br/portal/js/validate/demo/captcha/images/image.php?<?php echo time();?>" width="132" height="46" alt="Captcha image" id="captcha_image" /> </a>
                      <label class="msg" for="captcha">Digite no campo abaixo os caracteres que você vê na imagem:</label>
                      <input class="caracteres" type="text" maxlength="6" name="captcha" id="captcha" />
                    </div>
                    <img src="http://cmais.com.br/portal/images/ajax-loader.gif" alt="enviando..." style="display:none" width="16px" height="16px" id="ajax-loader" />
                    <input type="submit" value="confirmar" id="enviar" name="enviar" class="btn">
                    <input type="submit" value="cancelar" id="cancelar" name="cancelar" class="btn">
                  </form>
                </div>
                <!-- LISTA -->
                <?php if(count($pager) > 0): ?>
                <!-- BOX LISTAO -->
                <div class="box-listao grid2">
                  <ul>
                    <?php $current_date = '';?>
                    <?php foreach($pager->getResults() as $d):$date= explode(' ', $d->getCreatedAt());$date= $date[0]; ?>

                    <?php if($current_date != $date): ?>

                    <h2 id="data-post"><?php echo format_date(strtotime($date),"D") ?></h2>
                    <li><?php if(isset($date)): ?>
                    <p class="titulos"><?php echo format_date(strtotime($d->getCreatedAt()),"t") ?></p><?php endif?>

                    <a href="<?php echo $d->retriveUrl() ?>" class="titulos"><span class="texto"></span><?php echo $d->getTitle() ?></a><p><?php echo $d->getDescription() ?></p></li>
                    <?php else:?>
                    <li><?php if(isset($date)): ?>
                    <p class="titulos"><?php echo format_date(strtotime($d->getCreatedAt()),"t") ?></p><?php endif?>

                    <a href="<?php echo $d->retriveUrl() ?>" class="titulos"><span class="texto"></span><?php echo $d->getTitle() ?></a><p><?php echo $d->getDescription() ?></p></li>
                    <?php endif;?>
                    <?php $current_date = $date;?>
                    <?php endforeach;?>
                  </ul>
                </div>
                <!-- /BOX LISTAO -->
                <?php endif;?>

                <?php if(isset($pager)): ?>
                <?php if($pager->haveToPaginate()): ?>
                <!-- PAGINACAO <?php echo $pager->getPage() ?>/<?php echo $pager->getLastPage() ?> -->
                <div class="paginacao grid3">
                  <div class="centraliza">
                    <a href="javascript: goToPage(<?php echo $pager->getPreviousPage() ?>);" class="btn-ante"></a>
                    <a class="btn anterior" href="javascript: goToPage(<?php echo $pager->getPreviousPage() ?>);">Anterior</a>
                    <ul>
                      <?php foreach ($pager->getLinks() as $page): ?>
                      <?php if ($page == $pager->getPage()): ?>
                      <li><a href="javascript: goToPage(<?php echo $page ?>);" class="ativo"><?php echo $page ?></a></li>
                      <?php else:?>
                      <li><a href="javascript: goToPage(<?php echo $page ?>);"><?php echo $page  ?></a></li>
                      <?php endif;?>
                      <?php endforeach;?>
                    </ul>
                    <a class="btn proxima" href="javascript: goToPage(<?php echo $pager->getNextPage() ?>);">Pr&oacute;xima</a>
                    <a href="javascript: goToPage(<?php echo $pager->getNextPage() ?>);" class="btn-prox"></a>
                  </div>
                </div>
                <form id="page_form" action="" method="post">
                  <input type="hidden" name="return_url" value="<?php echo $url?>" />
                  <input type="hidden" name="page" id="page" value="" />
                </form>
                <script>
                  function goToPage(i) {
                    $("#page").val(i);
                    $("#page_form").submit();
                  }
                </script>
                <!--// PAGINACAO -->
                <?php endif;?>
                <?php endif;?>

                <!-- /LISTA -->
              </div>
              <!-- direita -->
              <style>
                .veja { float:left; }
                .btn-veja { margin-top:20px; }
              </style>
              <div class="veja">
                <div class="box-publicidade">
                  <script type='text/javascript'>
                    GA_googleFillSlot("cmais-assets-300x250");

                  </script>
                </div>
                <!--p class="btn-veja"><span>Arquivo</span></p-->
                <div id="datepicker"></div>
              </div>
              <!-- /direita -->
            </div>
            <span class="bordaBottomRV"></span>
          </div>
        </div>
      </div>
      <!-- /CONTEUDO PAGINA -->
    </div>
    <!-- /MIOLO -->
  </div>
  <!-- / CAPA SITE -->
</div>
<!--/bg provoca-->
<script type="text/javascript" src="http://cmais.com.br/portal/js/validate/jquery.validate.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
    /* somente para teste
     $('input#enviar').click(function() {
     $('.box.msg, .msgAcerto').show();
     $(".box.aberto").hide();
     });
     */
    $('input#cancelar').click(function() {
      $('#form-contato').clearForm();
    })
    var validator = $('#form-contato').validate({
      submitHandler : function(form) {
        $.ajax({
          type : "POST",
          dataType : "text",
          data : $("#form-contato").serialize(),
          beforeSend : function() {
            $('input#enviar').hide();
            $('img#ajax-loader').show();
            /*$('input#enviar').attr('disabled', 'disabled');
             $(".msgAcerto").hide();
             $(".msgErro").hide();
             $('img#ajax-loader').show();*/
          },
          success : function(data) {
            $('input#enviar').show();
            $('img#ajax-loader').hide();
            window.location.href = "#";

            if(data == "1") {
              $('.box.msg, .msgAcerto').show();
              $(".box.aberto").hide();
              /*
               $("#form-contato").clearForm();
               $(".msgAcerto").show();
               $('img#ajax-loader').hide();
               */
            } else {
              $(".box.msg, .msgErro").show();
              $(".box.aberto").hide();
            }
          }
        });
      },
      rules : {
        nome : {
          required : true,
          minlength : 2
        },
        email : {
          required : true,
          email : true
        },
        website : {
          required : true
        },
        idade : {
          required : true
        },
        mensagem : {
          required : true,
          minlength : 2
        },
        captcha : {
          required : true,
          remote : "/portal/js/validate/demo/captcha/process.php"
        }
      },
      messages : {
        nome : "Digite um nome v&aacute;lido. Este campo &eacute; obrigat&oacute;rio.",
        idade : "Este campo &eacute; obrigat&oacute;rio.",
        email : "Digite um e-mail v&aacute;lido. Este campo &eacute; obrigat&oacute;rio.",
        website : "Este campo &eacute; obrigat&oacute;rio.",
        mensagem : "Este campo &eacute; obrigat&oacute;rio.",
        captcha : "Digite corretamente o código que está ao lado."
      },
      success : function(label) {
        // set &nbsp; as text for IE
        label.html("&nbsp;").addClass("checked");
      }
    });
  });
  
  $('#captcha_image').attr('src', '/portal/js/validate/demo/captcha/images/image.php?'+new Date);
  
  // Contador de Caracters
  function limitText(limitField, limitNum, textCounter) {
    if(limitField.value.length > limitNum)
      limitField.value = limitField.value.substring(0, limitNum);
    else
      $(textCounter).html(limitNum - limitField.value.length);
  }
</script>