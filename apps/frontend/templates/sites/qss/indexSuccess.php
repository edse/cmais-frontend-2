<link rel="stylesheet" href="/portal/css/tvcultura/sites/<?php echo $section->Site->getSlug() ?>.css" type="text/css" />
<?php use_helper('I18N', 'Date') ?>
<?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'section' => $section)) ?>

<!-- CAPA SITE -->
<div id="capa-site">
  <img src="/portal/images/capaPrograma/qss/background-qss.jpg" alt="Quem Sabe Sabe">    
  <!-- curtir -->
    <div class="redes">
      <div class="curtir">
        <div style="display:block; float: left; margin-right:10px;">
        <g:plusone size="medium" count="false"></g:plusone>
        </div>
        <fb:like href="<?php if($site->getFacebookUrl()): ?><?php echo $site->getFacebookUrl() ?><?php else: ?><?php echo $uri ?><?php endif; ?>" layout="button_count" show_faces="false" send="true" width="160"></fb:like>
      </div>
      <!--<a href="http://twitter.com/share" class="twitter-share-button" data-count="horizontal" data-via="<?php if($site->getTwitterAccount()): ?><?php echo $site->getTwitterAccount() ?><?php else: ?>tvcultura<?php endif; ?>">Tweet</a>-->
    </div>
    <!-- /curtir -->
    <div class="msgErro" style="display:none">
      <span class="alerta"></span>
      <div class="boxMsg">
        <p class="aviso">Sua mensagem não pode ser enviada.</p>
        <p>Confirme se todos os campos foram preenchidos corretamente e verifique seus dados. Você pode ter esquecido de preencher algum campo ou errado alguma informação.</p>
      </div>
      <hr />
    </div>
    <div class="msgAcerto" style="display:none">
      <span class="alerta"></span>
      <div class="boxMsg">
        <p class="aviso">Mensagem enviada com sucesso!</p>
        <p>Obrigado por entrar em contato com nosso programa. Em breve retornaremos sua mensagem.</p>
      </div>
      <hr />
    </div>
    <form id="form-contato" method="post" action="">
      <p>Cadastre o seu e-mail para ser informado sobre a data de início das inscrições:</p>
      <input type="text" name="cadastro" id="input" />
      <input class="enviar" type="submit" name="enviar" id="enviar" value="enviar mensagem" style="cursor:pointer" />
      <img src="/portal/images/ajax-loader.gif" alt="enviando..." style="display:none" width="16px" height="16px" id="ajax-loader" />
    </form>  
</div> 
<!-- /capa site-->
 
