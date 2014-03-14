<?php use_helper('I18N', 'Date') ?>

<!-- Le styles--> 
<link href="http://cmais.com.br/portal/js/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="http://cmais.com.br/portal/js/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
<link href="http://cmais.com.br/portal/css/tvcultura/sites/culturabrasil.css" rel="stylesheet" type="text/css" />

<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<script src="http://cmais.com.br/portal/js/bootstrap/bootstrap.js"></script>

<?php include_partial_from_folder('sites/culturabrasil', 'global/menu', array('siteSections' => $siteSections, 'displays' => $displays, 'section'=>$section)) ?>

 


<!--section miolo--> 
<section class="miolo selecao" >
  <!-- container miolo -->
  <div class="container row-fluid">
    <!--breadcrumb-->
    <div class="row-fluid pontilhada">
      <ul class="breadcrumb">
        <li><a href="/">Cultura Brasil</a><span class="divider">»</span></li>
        <li>Seleção do ouvinte </li>
      </ul>
    </div>
    <!--/breadcrumb-->
    <!-- coluna esquerda -->
    <div class="span8" style="*margin:-10px;margin:0;">
      
      <!-- titulo -->
      <h1>Seleção do ouvinte</h1>
      <p class="horario"><?php echo $section->getDescription() ?></p>
      <!--titulo-->
      
      <!-- row form -->
      <div class="row-fluid">
        
        <!--form-->
        <form id="form-selecao" action="" method="post" >
          <div class="box msg">
            <div class="msgErro" style="display:none">
              <p class="aviso">Sua mensagem não pode ser enviada.</p>
            </div>
            <div class="msgAcerto" style="display:none">
              <p class="aviso">Mensagem enviada com sucesso.</p>
            </div>
          </div>
          <!-- form principal -->
          <fieldset>
            
            <label>Nome</label>
            <input id="nome" name="nome" class="required span12" type="text" >
            
          </fieldset>
          <fieldset>
            <div class="span4">
              <label>Bairro</label>
              <input id="bairro" name="bairro" class="span12" type="text" >
            </div>
            <div class="span4">
              <label>Cidade</label>
              <input id="cidade" name="ciadade" class="required span12" type="text" >
            </div>
            <div class="span2">
              <label>UF</label>
              <select class="span12" id="estado" name="estado">
                <option value="" selected="selected">--</option>
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
            <div class="span2">
              <label>País</label>
              <input id="pais" name="pais" class="span12" type="text" >
            </div>
          </fieldset>
          <fieldset> 
            <div class="span4">
              <label>Telefone</label>
              <input id="telefone" name="telefone" class="span12" type="text" >
            </div>
            <div class="span4">
              <label>E-mail</label>
              <input id="email" name="email" class="span12" type="text" >
            </div>
          </fieldset>
          <!-- form principal -->
          
          <?php
          $itens=19;
          for($i = 0; $i <= $itens; $i++):
          ?>
          <!-- item musica-->
          <fieldset>
            <legend>Música <?php echo $i+1; ?></legend>
            
            <div class="borda-pontilhada"></div>
            <div class="box">
              <label>Música</label>
              <input id="musica<?php echo $i+1; ?>" name="musica<?php echo $i+1; ?>" class="required span12" type="text">
            </div>
            <div class="box">
              <label>Intérprete</label>
              <input id="interprete<?php echo $i+1; ?>" name="interprete<?php echo $i+1; ?>" class="required span12" type="text">
            </div>
          </fieldset>
          <!-- item musica-->
          <?php endfor; ?>
          <img src="http://cmais.com.br/portal/images/ajax-loader.gif" alt="enviando..." style="display:none" id="ajax-loader" />
          <input type="submit" class="enviar pull-right" id="enviar" value="enviar"/>
          
        </form>
        <!--/form-->
        <!-- /row form -->
      </div>
      
              
    </div>  
    <!-- /coluna esquerda -->
    
    <!--coluna direita -->
    <div class="span4 box-direita">
      
      <!--banner -->
      <div class="banner-culturabrasil">
        <script type='text/javascript'>
          GA_googleFillSlot("home-geral300x250");
        </script>
      </div>
      <!-- /banner -->  
      
    </div>
    <!--/coluna direita -->
    
  </div>  
  <!-- /container miolo -->  

</section>
<!--/section miolo-->

<script type="text/javascript" src="http://cmais.com.br/portal/js/validate/jquery.validate.js"></script>
<script type="text/javascript">
$(document).ready(function() {
  	$('input#enviar').click(function(){
  	  $(".msgAcerto, .msgErro").hide();
  	});
  	
  	var validator = $('#form-selecao').validate({
      submitHandler: function(form){
        form.submit();
      },
    	
    	/*
      $.ajax({
        type : "POST",
        dataType : "text",
        data : $("#form-selecao").serialize(),
        beforeSend : function() {
          $('input#enviar').hide();
          $('img#ajax-loader').show();
        },
        success : function(data) {
          $('input#enviar').show();
          $('img#ajax-loader').hide();
          window.location.href = "javascript:;";
          
          if(data == "1") {
            $('.box.msg, .msgAcerto').show();
            $("#form-selecao").clearForm();
            $('html, body').animate({
              scrollTop: $('.navbar-inner').offset().top
            }, "slow");
            $('input[type="text"]').val("");
          } else {
            $(".box.msg, .msgErro").show();
            $('html, body').animate({
              scrollTop: $('.navbar-inner').offset().top
            }, "slow");
          }
        }
      });
      */
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
      cidade : {
        required : true,
        minlength : 2
      }
    },
    messages : {
      nome : "Digite um nome v&aacute;lido. Este campo &eacute; obrigat&oacute;rio.",
      email : "Digite um e-mail v&aacute;lido. Este campo &eacute; obrigat&oacute;rio.",
      cidade : "Este campo &eacute; obrigat&oacute;rio."
    },
    success : function(label) {
      // set &nbsp; as text for IE
      label.html("&nbsp;").addClass("checked");
    }
  });
});
</script> 

