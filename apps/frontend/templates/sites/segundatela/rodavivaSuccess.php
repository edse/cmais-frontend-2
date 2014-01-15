<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/sites/segundatela/rodaviva.css?nocache=<?php echo time()?>" type="text/css" />
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

<div class="container">
  <!-- Main hero unit for a primary marketing message or call to action -->
  <div class="hero-unit">
    <div class="bgtopo"></div>
    <div class="col-esq">
      <h1><?php echo $section->getTitle()?></h1>
      <p><?php echo $section->getDescription()?></p>
      <div class="redes">
        <div class="gplus">
          <g:plusone size="medium" count="false"></g:plusone>
        </div>
        <div class="fb">
          <fb:like href="http://cmais.com.br/segundatela/rodaviva" layout="button_count" show_faces="false" send="false" width="160"></fb:like>
        </div>
        <div class="twt">
          <a href="http://twitter.com/share" class="twitter-share-button" data-count="horizontal" data-via="tvcultura" data-related="tvcultura">Tweet</a>
        </div>
      </div>
    </div>
    <div class="col-dir">
      <div id="box-clock" style="display: none;">
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
          <li><a href="#myModal" role="button" data-toggle="modal" class="como">como funciona</a><li>
          <li><span class="barra">|</span></li>
          <li><p class="online hide" style="color: green">Conectado</p></li>
          <li><p class="offline">Desconectado</p></li>
          </ul>
      </div>
    </div>
  </div>
  <!-- Example row of columns -->
  <div class="row-fluid conteudo">
    <!-- esquerda -->
    <div class="span8">
      <h2>segunda tela</h2>
      <!-- accordion -->
      <div class="accordion" id="accordion2"></div>
      <!-- /accordion -->
    </div>
    <!-- /esquerda -->
    <!-- direita -->
    <div class="span4">
      <!--div class="box first">
          <h2>Câmera do Caruso</h2>
          <iframe width="300" height="213" src="http://www.youtube.com/embed/cJ2ne2qUTww?rel=0" frameborder="0" allowfullscreen></iframe>
      </div-->
      
      <?php if(isset($displays['camera-caruso'])):?> 
          <?php if(count($displays['camera-caruso']) > 0): ?>
            <div class="box first">
                <h2><?php echo $displays['camera-caruso'][0]->Block->getTitle() ?></h2> 
                <iframe width="300" height="213" src="http://www.youtube.com/embed/<?php echo $displays['camera-caruso'][0]->getTitle(); ?>?rel=0" frameborder="0" allowfullscreen></iframe>
            </div>
         <?php endif; ?>
      <?php endif; ?>
      
      <div class="box">
        <h2>Redes Sociais</h2>
        <!-- CALENDARIO -->
      <?php $nomePrograma = "rodaviva";?>
      <?php include_partial_from_folder('sites/segundatela', 'global/calendarJson', array('nomePrograma' => $nomePrograma, 'date' => $date)) ?>
      <!-- /CALENDARIO -->
        <!-- abas -->
        <div class="">
          <ul class="nav nav-tabs" id="myTab">
            <li class="active"><a data-toggle="tab" href="#facebook">Facebook</a></li>
            <li class=""><a data-toggle="tab" href="#twitter">Twitter</a></li>
          </ul>
          <div class="tab-content" id="myTabContent">
            <div id="facebook" class="tab-pane fade active in">
              <div class="fb-comments" data-href="cmais.com.br/segundatela/rodaviva/<?php echo $date; ?>" data-width="300px" data-num-posts="10"></div>
            </div>
            <div id="twitter" class="tab-pane fade">
              <a class="twitter-timeline" href="https://twitter.com/search?q=%23rodaviva" data-widget-id="317371676063039488">Tweets sobre "#rodaviva"</a>
              <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
            </div>
          </div>
        </div>
        <!-- /abas -->
      </div>
    </div>
    <!-- /direita -->
  </div>

  <audio id="audio-ping">
    <source src="http://cmais.com.br/portal/audio/ping.mp3" />
    <source src="http://cmais.com.br/portal/audio/ping.ogg" />
  </audio>

  <script type="text/javascript" src="https://www.youtube.com/iframe_api"></script>    
  <script type="text/javascript" src="http://cmais.com.br/portal/js/websocket-js/swfobject.js"></script>
  <script type="text/javascript" src="http://cmais.com.br/portal/js/websocket-js/web_socket.js?a"></script>
  <script type="text/javascript" src="http://cmais.com.br/portal/js/json2.js"></script>
  <script type="text/javascript" src="http://cmais.com.br/portal/js/segundatela/secondscreenrodaviva/app.js?nocache=<?php echo time()?>"></script>
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