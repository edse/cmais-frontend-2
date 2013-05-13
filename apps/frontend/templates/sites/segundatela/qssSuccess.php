<link rel="stylesheet" href="/portal/css/tvcultura/sites/segundatela/quemsabesabe.css?nocache=<?php echo time()?>" type="text/css" />
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
            <a href="http://twitter.com/share" class="twitter-share-button" data-count="horizontal" data-via="portalcmais" data-related="tvcultura">Tweet</a>
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

<!--Login-->
<div class="section-login">
  <div class="container">
    <div class="span10">
      <h3>LOGIN</h3>
    </div>
    <form action="" method="POST" id="form-login">
      <div class="span3">
        <label>Email</label> 
        <input type="email" name="email_login" id="email_login" />
        <label class="checkbox" for="manter_conectado" id="conectado">
          <input type="checkbox" name="manter_conectado" id="manter_conectado" ><span class="txt_manterconectado">Mantenha-me conectado</span>
        </label>
      </div>
      <div class="span3">
        <label>Senha</label> 
        <input type="password" name="senha_login" id="senha_login" />
        <a href="#" class="esqueci" >Esqueci minha senha</a>
      </div>
      <div class="span3">
        <label style="margin-bottom: 8px;">&nbsp;</label>
        <input id="enviar" type="submit" class="logar" value="ENTRAR">
      </div>   
    </form>
    
    <form action="" method="POST" id="form-esqueceu">
      <div class="span3">
        <label>Email</label> 
        <input type="email" name="email_esqueceu" id="email_esqueceu" />
      </div>
      <div class="span3">
        <label style="margin-bottom: 8px;">&nbsp;</label>
        <input id="recuperar" type="submit" class="logar" value="ENVIAR">
      </div>   
    </form>
  </div>
</div>
<!--/login-->
<!--cadastro-->
<div class="section-cadastro">
  <div class="container">
    <div class="span10">
      <h3>AINDA NÃO SOU CADASTRADO</h3>
    </div>
    <!-- esquerda -->
    <form action="" method="POST" id="form-cadastro">
      <div class="span3">
        <label>Nome/Apelido</label> 
        <input type="text" name="nome_cadastro" id="nome_cadastro" />
        <label>E-mail</label> 
        <input type="text" name="email_cadastro" id="email_cadastro" />
        <label>Senha</label> 
        <input type="text" name="senha_cadastro" id="senha_cadastro" />  
      </div>
      <div class="span4">
      <label>Escolha seu avatar:</label>
        <ul>
          <li>
            <a href="javascript:;" class="avatar av1" data-source="av1"></a>
          </li>
          <li>
            <a href="javascript:;" class="avatar av2" data-source="av2"></a>
          </li>
          <li>
            <a href="javascript:;" class="avatar av3" data-source="av3"></a>
          </li>
          <li>
            <a href="javascript:;" class="avatar av4" data-source="av4"></a>
          </li>
          <li>
            <a href="javascript:;" class="avatar av5" data-source="av5"></a>
          </li>
          <li>
            <a href="javascript:;" class="avatar av6" data-source="av6"></a>
          </li>
          <li>
            <a href="javascript:;" class="avatar av7" data-source="av7"></a>
          </li>
          <li>
            <a href="javascript:;" class="avatar av8" data-source="av8"></a>
          </li>
          <li>
            <a href="javascript:;" class="avatar av9" data-source="av9"></a>
          </li>
          <li>
            <a href="javascript:;" class="avatar av10" data-source="av10"></a>
          </li>
        </ul>
        
        <input id="id_avatar" type="hidden" name="avatar" value="">
        
      </div>
      <div class="span4">
        <input type="submit" class="cadastrar" value="CADASTRAR">
      </div>
   </form>
   <!-- /esquerda -->
  </div>
</div>
<!--cadastro-->
<!--audio id="audio-ping">
  <source src="/portal/audio/ping.mp3" />
  <source src="/portal/audio/ping.ogg" />
</audio-->
<!--script type="text/javascript" src="/portal/js/json2.js"></script-->
<!--script type="text/javascript" src="/portal/js/segundatela/secondscreencartaoverde/app.js?nocache=<?php echo time()?>"></script-->
<!--script type="text/javascript" src="https://www.youtube.com/iframe_api"></script-->    
<!--script type="text/javascript" src="/portal/js/websocket-js/swfobject.js"></script-->
<!--script type="text/javascript" src="/portal/js/websocket-js/web_socket.js?a"></script-->
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
        
    //val avatar
    $('.avatar').click(function(){
      $('.avatar').removeClass('selected');
      $(this).addClass('selected');
      
      var avatar = $(this).attr('data-source');
      $('#id_avatar').attr('value', avatar);
    });
    
    $('.esqueci').click(function(){
      $('#form-login').hide();
      $('#form-esqueceu').fadeIn('fast');
    })  
      
    });
 </script>
 <!--SCRIPT-->
<script type="text/javascript" src="/portal/js/validate/jquery.validate.js"></script>
<script>
$(document).ready(function(){
  
  //login
  var validator = $('#form-login').validate({
    submitHandler: function(form){
     $.ajax({
        type: "POST",
        dataType: "text",
        data: $("#form-login").serialize(),
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
      email_login:{
        required: true,
        email:true
      },
      senha_login:{
        required:true
      },
      manter_conectado:{
        required:true
      },
    },
    success: function(label){
      // set &nbsp; as text for IE
      label.html("&nbsp;").addClass("checked");
    }
  });
  
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
    success: function(label){
      // set &nbsp; as text for IE
      label.html("&nbsp;").addClass("checked");
    }
  });
});
</script>