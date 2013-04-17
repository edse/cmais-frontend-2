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
      <p>Participante para Videoconferência:</p>
      
      <label class="span6">Nome completo:<input type="text" name="nome" id="nome" /></label>
      <label class="span2">Idade: <input type="text" name="idade" id="idade" /></label>
      <label class="span8">Endereço: <input type="text" name="endereco" id="endereco" /></label>
      <label class="span6">Bairro: <input type="text" name="bairro" id="bairro" /></label>
      <label class="span2">CEP: <input type="text" name="cep" id="cep" /></label>
      <label class="span6">Cidade: <input type="text" name="cidade" id="cidade" /></label>
      <label class="span2">RG: <input type="text" name="rg" id="rg" /></label>
      <label class="span3">CPF: <input type="text" name="cpf" id="cpf" /></label>
      <label class="span3">Data de nascimento: <input type="text" name="nascimento" id="nascimento" /></label>
      <label class="span3">Telefone para contato: <input type="text" name="telefone" id="telefone" /></label>
      <label class="span8">Nome da mãe: <input type="text" name="nomemae" id="nomemae" /></label>
      <label class="span8">Você tem todas as condições de saúde para participar do programa?</label>
      <br />
      <label class="span5"><input type="radio" id="saudecondicoes" name="saudecondicoes" value="sim" />Sim</label>
      <label class="span5"><input type="radio" id="saudecondicoes" name="saudecondicoes" value="não" />Não</label>
      </label>
      <label class="span8">Você tem alguma restrição de saúde que a produção precise saber (ex.: diabetes, trombose, marcapasso, restrição alimentar, etc...) ?  <input type="text" name="sauderestricoes" id="sauderestricoes" /></label>
      <input class="enviar" type="submit" name="enviar" id="enviar" value="ENVIAR" style="cursor:pointer" />
      <img src="/portal/images/ajax-loader.gif" alt="enviando..." style="display:none" width="16px" height="16px" id="ajax-loader" />
    </form>  
</div> 
<!-- /capa site-->
<script type="text/javascript" src="/portal/js/validate/jquery.validate.js"></script>
<script src="/portal/js/jquery.maskedinput.js" type="text/javascript"></script>
<script type="text/javascript">
  $(document).ready(function(){
    $('#cpf').mask("999.999.999-99");
    $('#cep').mask("99999-999");
    $('#telefone').mask("(99) 9999-9999");
    $('#nascimento').mask("99/99/9999");
    
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
 