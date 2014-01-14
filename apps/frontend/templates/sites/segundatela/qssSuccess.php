<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/sites/segundatela/quemsabesabe.css?nocache=<?php echo time()?>" type="text/css" />
<!-- modal-->
<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
      ×
    </button>
    <h3 id="myModalLabel">Como funciona</h3>
  </div>
  <div class="modal-body">
    <p>A Segunda Tela (ou Second Screen) é um complemento em tempo real à televisão (a primeira tela). Ao utilizá-la, seja em computadores, smartphones ou tablets, o “teleinternauta” recebe informações extras e pontos importantes sobre o assunto que está sendo tratado no programa que está no ar no momento. Por exemplo, se o Jornal da Cultura veicula uma matéria sobre o mercado imobiliário, o usuário recebe em sua Segunda Tela, simultaneamente, conteúdos e dicas complementares à reportagem, como um histórico dos preços de imóveis nos últimos meses e telefones úteis para obter mais informações sobre o assunto. E essa é apenas uma das muitas possibilidades que a Segunda Tela oferece! Fique ligado no cmais+ e na programação da TV Cultura para descobrir as próximas novidades que surgirão com o uso desta nova ferramenta de interatividade!</p>
  </div>
</div>
<!-- /modal -->

<!--header-->
<div class="section-header">
  <div class="container">
    <!-- Main hero unit for a primary marketing message or call to action -->
    <div class="hero-unit">
      <div class="bgtopo"></div>
      <div class="col-esq">
        <h1>Quem Sabe Sabe</h1>
        <p>Um game show de conhecimento, estratégia e sorte.
          </br>Segunda a sexta, às 19h20</p>
        <div class="redes">
          <div class="gplus">
            <g:plusone size="medium" count="false"></g:plusone>
          </div>
          <div class="fb">
            <fb:like href="http://cmais.com.br/segundatela" layout="button_count" show_faces="false" send="false" width="160"></fb:like>
          </div>
          <div class="twt">
            <a href="http://twitter.com/share" class="twitter-share-button" data-count="horizontal" data-via="tvcultura" data-related="tvcultura">Tweet</a>
          </div>
        </div>
      </div>
      
      <div class="col-dir">
        <div id="box-clock" style="display: block;">
          <div id="no-ar">
           <p>no ar</p>
           <ul style="width: 47px;">
            <li id="hours"> </li>
            <li id="point">:</li>
            <li id="min"> </li>
            <!--
            <li id="point">:</li>
            <li id="sec"> </li>
            -->
          </ul>
          </div>
  
        </div>  
        <div class="menu-jc">
          <ul>
            <li><a href="#myModal" role="button" data-toggle="modal" class="como">como funciona</a></li>
            <li><span class="barra">|</span></li>  
            <li><p class="online hide" style="color: green">Conectado</p></li>
            <li><p class="offline">Desconectado</p></li>
            </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<!--/header-->
<div id="login-alert-error-login" class="alert alert-block alert-error hide" style="margin: 0;">
  <div class="container">
    <!--button type="button" class="close fechar" data-dismiss="alert">×</button-->
    <h4 class="alert-heading">Puxa, puxa, que puxa!</h4>
    <p id="login-alert-message"></p>
  </div>
</div>
<!--Login-->
<div class="section-login">
  <div class="container">
    <div class="span10">
      <h3>LOGIN</h3>
    </div>
    <form action="" method="POST" id="form-login">
      <div class="span3">
        <label>Email</label> 
        <input type="email" name="login_email" id="login_email" />
        
      </div>
      <div class="span3">
        <label>Senha</label> 
        <input type="password" name="login_password" id="login_password" />
        
      </div>
      <div class="span3">
        <label style="margin-bottom: 8px;">&nbsp;</label>
        <input id="enviar" type="submit" class="logar" value="ENTRAR">
      </div>   
    </form>
    
    <form action="" method="POST" id="form-esqueceu" style="display:none;">
      <div class="span3">
        <label>Email</label> 
        <input type="email" name="email_esqueceu" id="email_esqueceu" />
      </div>
      <div class="span3">
        <label style="margin-bottom: 8px;">&nbsp;</label>
        <input id="recuperar" type="submit" class="logar" value="ENVIAR">
        <a href="javascript:;" type="submit" class="voltar logar">VOLTAR</a>
      </div>   
    </form>
  </div>
</div>
<!--/login-->

<div id="login-alert-error" class="alert alert-block alert-error hide">
  <div class="container">
    <!--button type="button" class="close fechar" data-dismiss="alert">×</button-->
    <h4 class="alert-heading">Puxa, puxa, que puxa!</h4>
    <p id="login-alert-message"></p>
    <p>Acesse a conta que foi criada com este e-mail, clicando no link "Esqueci minha senha", ou cadastre outro e-mail.</p>
  </div>
</div>
<!--cadastro-->
<div class="section-cadastro">
  <div class="container">
    <div class="span10">
      <h3>AINDA NÃO SOU CADASTRADO</h3>
    </div>
    <!-- esquerda -->
    <form action="" method="POST" id="signup-form">
      <div class="span3">
        <label>Nome/Apelido</label> 
        <input type="text" name="signup_name" id="signup_name" />
        <label>E-mail</label> 
        <input type="text" name="signup_email" id="signup_email" />
        <label>Senha</label> 
        <input type="password" name="signup_password" id="signup_password" />  
      </div>
      <div class="span4">
      <label>Escolha seu avatar:</label>
        <ul>
          <li>
            <a href="javascript:;" class="avatar avatar-1" data-source="avatar-1"></a>
          </li>
          <li>
            <a href="javascript:;" class="avatar avatar-2" data-source="avatar-2"></a>
          </li>
          <li>
            <a href="javascript:;" class="avatar avatar-3" data-source="avatar-3"></a>
          </li>
          <li>
            <a href="javascript:;" class="avatar avatar-4" data-source="avatar-4"></a>
          </li>
          <li>
            <a href="javascript:;" class="avatar avatar-5" data-source="avatar-5"></a>
          </li>
          <li>
            <a href="javascript:;" class="avatar avatar-6" data-source="avatar-6"></a>
          </li>
          <li>
            <a href="javascript:;" class="avatar avatar-7" data-source="avatar-7"></a>
          </li>
          <li>
            <a href="javascript:;" class="avatar avatar-8" data-source="avatar-8"></a>
          </li>
          <li>
            <a href="javascript:;" class="avatar avatar-9" data-source="avatar-9"></a>
          </li>
          <li>
            <a href="javascript:;" class="avatar avatar-10" data-source="avatar-10"></a>
          </li>
        </ul>
        
        <input id="signup_avatar" type="hidden" name="signup_avatar" value="">
        
      </div>
      <div class="span4">
        <input type="submit" class="cadastrar" value="CADASTRAR">
      </div>
   </form>
   <!-- /esquerda -->
  </div>
</div>

<script>
  $(document).ready(function() {
    setInterval( function() {
      var minutes = new Date().getMinutes();
      $("#min").html(( minutes < 10 ? "0" : "" ) + minutes);
        },1000);
    setInterval( function() {
      var hours = new Date().getHours();
      $("#hours").html(( hours < 10 ? "0" : "" ) + hours);
        }, 1000);
     //close
     $('.fechar').click(function(){
       $(this).parent().hide();
     });
        
    //val avatar
    $('.avatar').click(function(){
      $('.avatar').removeClass('selected');
      $(this).addClass('selected');
      
      var avatar = $(this).attr('data-source');
      $('#signup_avatar').attr('value', avatar);
    });
    
    $('.esqueci').click(function(){
      $('#form-login').hide();
      $('#form-esqueceu').fadeIn('fast');
    }); 
    
    $('.voltar').click(function(){
      $('#form-esqueceu').hide();
      $('#form-login').fadeIn('fast');
    });  
       
      
 });
 </script>
 <!--SCRIPT-->
<script type="text/javascript" src="http://cmais.com.br/portal/js/validate/jquery.validate.js"></script>
<script>
$(document).ready(function(){
  
  //lcadastro
  var validator = $('#signup-form').validate({
    submitHandler: function(form){
     $.ajax({
        url: "/segundatela-qss/site/sign-in/sign-up.php",
        data: {
          name: $('#signup_name').val(),
          email: $('#signup_email').val(),
          password: $('#signup_password').val(),
          avatar: $('#signup_avatar').val(),
          app: "secondscreenqss"
        },
        type: "POST",
        dataType: "json",
        success:function(json){
          //$('.alert').hide();
          if(json.status == "success"){
            //$('#alert-success').fadeIn('slow');
            login({
              email: $('#signup_email').val(),
              password: $('#signup_password').val(),
              app: "secondscreenqss"
            });
          }
          else if(json.status == "taken"){
            $('#login-alert-error').fadeIn('slow');
            $('#login-alert-message').html(json.message);
            $('#signup_email').select();
          }
          else
            $('#alert-error').fadeIn('slow');
          console.log(json);
        }
      });        
  
    },
    rules:{
      signup_name:{
        required: true
      },
      signup_email:{
        required:true,
        email:true
      },
      signup_password:{
        required:true
      },
      signup_avatar:{
        required:true
      }
    },
    messages:{
      signup_avatar:"Selecione um avatar."
    },
    success: function(label){
      // set &nbsp; as text for IE
      label.html("&nbsp;").addClass("checked");
    }
  });
  
   var validator = $('#form-login').validate({
    submitHandler: function(form){
       $.ajax({
        url: "/segundatela-qss/site/sign-in/sign-in.php",
        data: {
          email: $('#login_email').val(),
          password: $('#login_password').val(),
          app: "secondscreenqss"
        },
        type: "POST",
        dataType: "json",
        success:function(json){
          $('#login-alert-error-login').hide();
          //$('.alert').hide();
          if(json.status == "success"){
            $('#login-alert-error-login').hide();
            //self.location.href="./qssonline/?token="+json.token;
            self.location.href="/segundatela-qss/site/?token="+json.token;
          }
          else{
            $('#login-alert-error-login').fadeIn('slow');
            $('#login-alert-message').html(json.message);
          }
          console.log(json);
        }
      });
  
    },
    rules:{
      login_email:{
        required:true,
        email:true
      },
      login_password:{
        required:true
      }
    },
    success: function(label){
      // set &nbsp; as text for IE
      label.html("&nbsp;").addClass("checked");
    }
  });
  
  function login(data){
    $.ajax({
      url: "/segundatela-qss/site/sign-in/sign-in.php",
      data: data,
      type: "POST",
      dataType: "json",
      success:function(json){
        //$('.alert').hide();
        if(json.status == "success"){
          //self.location.href="./qssonline/?token="+json.token;
          self.location.href="/segundatela-qss/site/?token="+json.token;  
        }
        else{
          $('#login-alert-error').fadeIn('slow');
          $('#login-alert-message').html(json.message);
        }
        console.log(json);
      }
    });
  }
 
  
  //Recupera senha
  var validator = $('#form-esqueceu').validate({
    submitHandler: function(form){
     $.ajax({
        type: "POST",
        dataType: "text",
        data: $("#form-esqueceu").serialize(),
        beforeSend: function(){

        },
        success: function(data){
          alert(data);
          window.location.href="javascript:;";
          if(data == "1"){

          }
          else {

          }
        }
      });
  
    },
    rules:{
      email_esqueceu:{
        required: true,
        email:true
      }
    },
    messages:{
      email_esqueceu:"Insira um e-mail válido"
    },
    
    success: function(label){
      // set &nbsp; as text for IE
      label.html("&nbsp;").addClass("checked");
    }
  });
});
</script>