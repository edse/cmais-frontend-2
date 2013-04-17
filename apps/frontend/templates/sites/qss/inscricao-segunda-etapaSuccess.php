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
    <form id="form-contato" method="post" action="/actions/qss/inscricao.php">
      <p>Participante para Vídeoconferência:</p>
      
      <label>Nome completo:<input type="text" name="nome" id="nome" /></label>
      <label>Idade: <input type="text" name="idade" id="idade" /></label>
      <label>Endereço: <input type="text" name="endereco" id="endereco" /></label>
      <label>Bairro: <input type="text" name="bairro" id="bairro" /></label>
      <label>CEP: <input type="text" name="cep" id="cep" /></label>
      <label>Cidade: <input type="text" name="cidade" id="cidade" /></label>
      <label>RG: <input type="text" name="rg" id="rg" /></label>
      <label>CPF: <input type="text" name="cpf" id="cpf" /></label>
      <label>Data de nascimento: <input type="text" name="nascimento" id="nascimento" /></label>
      <label>Telefone para contato: <input type="text" name="telefone" id="telefone" /></label>
      <label>Nome da mãe: <input type="text" name="nomemae" id="nomemae" /></label>
      <label>Você tem todas as condições de saúde para participar do programa?
        <input type="radio" id="saudecondicoes" name="saudecondicoes" value="sim" />Sim
        <input type="radio" id="saudecondicoes" name="saudecondicoes" value="não" />Não
      </label>
      <label>Você tem alguma restrição de saúde que a produção precise saber (ex.: diabetes, trombose, marcapasso, restrição alimentar, etc...) ?  <input type="text" name="sauderestricoes" id="sauderestricoes" /></label>
      <input class="enviar" type="submit" name="enviar" id="enviar" value="ENVIAR" style="cursor:pointer" />
      <img src="/portal/images/ajax-loader.gif" alt="enviando..." style="display:none" width="16px" height="16px" id="ajax-loader" />
    </form>  
</div> 
<!-- /capa site-->
<script type="text/javascript" src="/portal/js/validate/jquery.validate.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
    var validator = $('#form-contato').validate({
      rules:{
        nome:{
          required:true
        },
        idade:{
          required:true,
          number: true
        },
        endereco:{
          required:true
        },
        bairro:{
          required:true
        },
        cep:{
          required:true
        },
        cidade:{
          required:true
        },
        rg:{
          required:true
        },
        cpf:{
          required:true
        },
        nascimento:{
          required:true
        },
        telefone:{
          required:true
        },
        nomemae:{
          required:true
        },
        saudecondicoes:{
          required:true
        },
        sauderestricoes:{
          required:true
        }
      },
      messages:{
        email: "Digite um e-mail válido.",
        idade: "Idade precisa ser números."
      },
      success: function(label){
        // set &nbsp; as text for IE
        label.html("&nbsp;").addClass("checked");
      }
    });
  });
</script>
 