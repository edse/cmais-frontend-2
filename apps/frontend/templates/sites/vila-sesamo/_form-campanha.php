  <?php if($campaign): ?>
  <span class="divisa carregar"></span>
  <!--section-->
  <section class="form row-fluid">
    
    <!--span12-->
    <div class="span12">
      <h2><?php echo $campaign->getTitle(); ?></h2>
      <p><?php echo $campaign->getDescription(); ?></p>
    </div>
    <!--/span12-->
    
    <!--span8-->
    <div class="span8">
      
      <div class="msgAcerto" id="statusMsg_0" style="display:none">
        <p>
          Sua brincadeira foi enviada com sucesso<br/>
          e em breve estará em nossa galeria de brincadeiras!
        </p>
      </div>

      <div class="msgErro" id="statusMsg_1" style="display:none">
        <p>
          Formato de imagem inválido<br/>
          Por favor, tente com JPG, PNG ou GIF!
        </p>
      </div>

      <div class="msgErro" id="statusMsg_2" style="display:none">
        <p>
          Arquivo muito grande<br/>
          Por favor, tente com um arquivo de até 15 MB!
        </p>
      </div>
      
      <div class="msgErro" id="statusMsg_3" style="display:none">
        <p>
          Erro inesperado<br/>
          Por favor, tente mais tarde!
        </p>
      </div>
      
      <!--form-->    
      <form class="form-horizontal" id="form-contato" action="http://cmais.com.br/actions/vilasesamo/campanhas/brincar-e-um-direito-da-crianca.php" method="post" enctype="multipart/form-data">
        <input type="hidden" id="campanha" name="campanha" value="<?php echo $campaign->getTitle() ?>" />
        <!--Nome-->
        <div class="control-group span8">
          <label class="control-label sprite-ico-nome" for="nome"></label>
          <input type="text" id="nome" placeholder="Nome" name="nome">
        </div>
        <!--/Nome-->
        
        <!--Idade-->
        <div class="control-group idade span2">
          <label class="control-label sprite-ico-idade" for="idade"></label>
          <input type="text" id="idade" placeholder="Idade" name="idade" maxlength="2">
        </div>
        <!--/Idade-->
        
        <!--Cidade-->
        <div class="control-group span8 cidade">
          <label class="control-label sprite-ico-cidade" for="cidade"></label>
          <input type="text" id="cidade" placeholder="Cidade" name="cidade">
        </div>
        <!--/Cidade-->
        
        <!--Estado-->
        <div class="control-group estado span2">
          <select id="estado" name="estado">
            <option selected="selected" value="">UF</option>
            <option value="Acre">AC</option>
            <option value="Alagoas">AL</option>
            <option value="Amazonas">AM</option>
            <option value="Amapá">AP</option>
            <option value="Bahia">BA</option>
            <option value="Ceará">CE</option>
            <option value="Distrito Federal">DF</option>
            <option value="Espirito Santo">ES</option>
            <option value="Goiás">GO</option>
            <option value="Maranhão">MA</option>
            <option value="Minas Gerais">MG</option>
            <option value="Mato Grosso do Sul">MS</option>
            <option value="Mato Grosso">MT</option>
            <option value="Pará">PA</option>
            <option value="Paraíba">PB</option>
            <option value="Pernambuco">PE</option>
            <option value="Piauí">PI</option>
            <option value="Paraná">PR</option>
            <option value="Rio de Janeiro">RJ</option>
            <option value="Rio Grande do Norte">RN</option>
            <option value="Rondônia">RO</option>
            <option value="Roraima">RR</option>
            <option value="Rio Grande do Sul">RS</option>
            <option value="Santa Catarina">SC</option>
            <option value="Sergipe">SE</option>
            <option value="São Paulo">SP</option>
            <option value="Tocantins">TO</option>
          </select>
        </div>
        <!--/Estado-->
        
        <!--Email-->
        <div class="control-group span8">
          <label class="control-label sprite-ico-email" for="email"></label>
          <input type="text" id="email" placeholder="Email" name="email">
        </div>
        <!--/Email-->
        
        <!--Anexo-->
         <div class="control-group span2 idade anexo">
          <label class="control-label sprite-ico-anexo" for="anexo"></label>
          <input id="datafile" type="file" name="datafile">
          <!--a href="#" title="Anexar">Anexar</a-->
        </div>
        <!--/Anexo-->
        
        <!--Msg-->
        <div class="control-group span12 msg">
          <label class="control-label sprite-ico-mensagem" for="mensagem"></label>
          <textarea id="mensagem" placeholder="Mensagem" name="mensagem"></textarea>
        </div>
        <!--/Msg-->
        
        <!--concorda-->
        <div class="control-group span11">
          <label class="radio">
            <input type="radio" name="concordo" id="concordo" value="concordo">
            Declaro que li e estou de acordo com os Termos e Condições acima 2.
          </label>
          <button type="submit" class="btn">enviar minha brincadeira</button>
        </div>
        <!--/concorda-->
         
        <!--Termos e condições-->
        <div class="span12 termo">
          <?php include_partial_from_folder('sites/vila-sesamo', 'global/termos') ?>
        </div>
        <!--/Termos e condições-->
         
        
      </form>
      <!--/form-->
      
    </div>
    <!--/span8-->
    
    <!--span4-->
    <div class="span4">
      <!--iframe width="300" height="246" src="http://www.youtube.com/embed/qTFP8I3PHJc?wmode=transparent&rel=0" frameborder="0" allowfullscreen></iframe-->
      <?php
        $block = Doctrine::getTable('Block')->findOneBySectionIdAndSlug($campaign->getId(), "destaque-principal");
        if($block) $displays["destaque-principal"] = $block->retriveDisplays();
      ?>
      <?php if(isset($displays["destaque-principal"])): ?>
        <?php if(count($displays["destaque-principal"]) > 0): ?>
          <?php if($displays["destaque-principal"][0]->Asset->AssetType->getSlug() == "video"): ?>
      <iframe width="300" height="246" src="http://www.youtube.com/embed/<?php echo $displays["destaque-principal"][0]->Asset->AssetVideo->getYoutubeId() ?>?wmode=transparent&rel=0" frameborder="0" allowfullscreen></iframe>
          <?php elseif($displays["destaque-principal"][0]->Asset->AssetType->getSlug() == "image"): ?>
      <img src="<?php echo $displays["destaque-principal"][0]->retriveImageUrlByImageUsage("image-3-b") ?>" alt="<?php echo $displays["destaque-principal"][0]->getTitle() ?>" />           
          <?php else: ?>
      <?php echo $displays["destaque-principal"][0]->getDescription(); ?>            
          <?php endif; ?>
        <?php endif; ?>
      <?php endif; ?>
    </div>
    <!--span4-->
    
  </section>
  <!--/section-->
  <?php endif; ?>

<script type="text/javascript" src="http://cmais.com.br/portal/js/validate/jquery.validate.js"></script>
<script type="text/javascript" src="http://cmais.com.br/portal/js/validate/additional-methods.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
    var validator = $('#form-contato').validate({
      
      submitHandler: function(form){
        /*
        $.ajax({
          type: "POST",
          dataType: "text",
          data: $("#form-contato").serialize(),
          url: "http://cmais.com.br/actions/vilasesamo/campanhas/brincar-e-um-direito-da-crianca.php",
          beforeSend: function(){
            $('input#enviar').attr('disabled','disabled');
            $(".msgAcerto").hide();
            $(".msgErro").hide();
            $('img#ajax-loader').show();
          },
          success: function(data){
            $('input#enviar').removeAttr('disabled');
            window.location.href="#";
            alert(data);
            if(data == "0"){
              $("#form-contato").clearForm();
              $("#form-contato").hide();
              $("#statusMsg_0").show();
              $('img#ajax-loader').hide();
            }
            else if(data > 0) {
              $(".msgErro").hide();
              $("#statusMsg_"+data).show();
              $('img#ajax-loader').hide();
            }
            else {
              alert('Erro inesperado!');
            }
          }
        });    */
       form.submit();     
        
      },
      rules:{
        nome:{
          required: true,
          minlength: 2
        },
        idade:{
          required: true,
          number: true
        },
        email:{
          required: true,
          email: true
        },
        cidade:{
          required: true,
          minlength: 3
        },
        estado:{
          required: true
        },
        mensagem:{
          required: true
        },
        datafile:{
          required: true,
          accept: "png|jpe?g|gif",
          filesize: 15728640
        },
        concordo:{
          required: true
        }
        
      },
      success: function(label){
      }
    });
  });
  
  function validate(obj){
    if($(obj).val()==$(obj).attr("data-default"))
      $(obj).val('');
  }
</script>  
