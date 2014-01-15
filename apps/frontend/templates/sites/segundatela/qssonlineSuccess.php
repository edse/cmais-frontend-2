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
            <li><p id="status" class="online">--</p></li>
            </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<!--/header-->
<!--section-body-->
<div class="section-body">
  
  <!--container-->
  <div class="container">
    
    <!--row-->
    <div class="row-fluid conteudo">
    
      <!-- esquerda -->
      <div class="span8">
        <h2>SEGUNDA TELA</h2>
        
          
          <!--h2>PERGUNTAS PASSADAS</h2-->
          
        <!--perguntas-->
        <div class="accordion" id="accordion2">
          
          
        </div>
        <!--/perguntas-->
      </div>
      <!--/esquerda-->
      
      <!-- direita -->
      <div class="span4">
        <h2>PONTUAÇÃO</h2>
        
        <!-- abas -->
        <div class="">
          <!--
          <!--botoes abas
          <ul class="nav nav-tabs" id="myTab">
            <li><span class="cantoneira-b cant-item-esq"></span></li>
            <li class="active"><a data-toggle="tab" href="#diaria">DIÁRIA</a></li>
            <li class=""><a data-toggle="tab" href="#semanal">SEMANAL</a></li>
            <li style="float:right;border:none;"><span class="cantoneira-b cant-item-dir"></span></li>
          </ul>  
          <!--botoes abas
          -->
          
          <!--lista classificacao-->
          <div class="tab-content" id="myTabContent">
            
            <!--item lista-->
            <div id="diaria" class="tab-pane fade active in">
              
              <div id="ranking-user"class="row-fluid"></div>  
              <div id="ranking-diario"class="row-fluid"></div>  
                 <img id="ajax-loader-qss" src="http://cmais.com.br/portal/images/ajax-loader-qss.gif" style="margin: 5% auto; display:block;">
              </div>
              <!--item lista-->
            
            <!--item lista-->
            <div id="semanal" class="tab-pane fade">
            </div>
            <!--item lista-->
            
          </div>
          <!--/lista classificacao-->
          
        </div>
        <!-- /abas -->
        
      </div>
      <!-- /direita -->
      
    </div>
    <!--/row-->
    
  </div>
  <!--container-->
  
</div>
<!--/section-body-->


<script type="text/javascript" src="http://cmais.com.br/portal/js/websocket-js/swfobject.js"></script>
<script type="text/javascript" src="http://cmais.com.br/portal/js/websocket-js/web_socket.js?a"></script>
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
  
     
    });
</script>
<script>
<?php
 /*
 var client_token  = '<?php echo $_REQUEST['token']?>';
 var client_name   = '<?php echo $_REQUEST['name']?>';
 var client_email  = '<?php echo $_REQUEST['email']?>';
 var client_avatar = '<?php echo $_REQUEST['avatar']?>';

 
 var html_rankUser = '<!--posicao-->'
 html_rankUser +='<li style="list-style:none; border-bottom:1px solid #eeeeee; float:left; width:100%">'
 html_rankUser +=  '<span class="colocacao user" style="margin-left: 0;"></span>'
 html_rankUser +=  '<span class="avatar '+client_avatar+'"></span>'
 html_rankUser +=  '<span class="nome_colocacao">'+client_name+'</span> '
 html_rankUser +=  '<span id="eurekas" class="eurekas">-- eurekas</span>'
 html_rankUser += '</li>'
 html_rankUser += '<!--/posicao-->'
 $('#ranking-user').append(html_rankUser);
 */
 ?>
</script>
<script src="http://cmais.com.br/portal/js/segundatela/secondscreenqss/json2.js"></script>
<script src="http://cmais.com.br/portal/js/segundatela/secondscreenqss/app.js"></script>

<audio id="audio-ping">
  <source src="http://cmais.com.br/portal/audio/ping.mp3" />
  <source src="http://cmais.com.br/portal/audio/ping.ogg" />
</audio>
<audio id="audio_tictac" loop>
  <source src="http://cmais.com.br/portal/audio/tictac.mp3" />
  <source src="http://cmais.com.br/portal/audio/tictac.ogg" />
</audio>
<audio id="audio_correct">
  <source src="http://cmais.com.br/portal/audio/correct.mp3" />
  <source src="http://cmais.com.br/portal/audio/correct.ogg" />
</audio>
<audio id="audio_wrong">
  <source src="http://cmais.com.br/portal/audio/wrong.mp3" />
  <source src="http://cmais.com.br/portal/audio/wrong.ogg" />
</audio>
