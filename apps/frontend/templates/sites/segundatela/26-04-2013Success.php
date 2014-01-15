
<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/sites/segundatela/jornaldacultura.css" type="text/css" />
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
      <h1>Jornal da Cultura</h1>
      <p>Mais que um jornal, uma tradução das notícias.</br>Segunda a sábado, às 21h</p>
      <div class="redes">
        <div class="gplus">
          <g:plusone size="medium" count="false"></g:plusone>
        </div>
        <div class="fb">
          <fb:like href="http://cmais.com.br/segundatela" layout="button_count" show_faces="false" send="false" width="160"></fb:like>
        </div>
        <div class="twt">
          <a href="http://twitter.com/share" class="twitter-share-button" data-url="http://cmais.com.br/segundatela" data-count="horizontal" data-via="tvcultura" data-related="tvcultura">Tweet</a>
        </div>
      </div>
    </div>
    <div class="col-dir">
      <div class="menu-jc">
        <a href="#myModal" role="button" data-toggle="modal" class="como">como funciona</a>
        <br/>
        <p class="online hide" style="color: green">Conectado</p><p class="offline">Desconectado</p>
        <span id="tryin-p" style="font-size: 10px;clear: both; float: right; width: 110px;" class="hide">conectando em <span id="tryin-v" style="margin: 1px; float: right;"></span></span>
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
      <!-- CALENDARIO -->
      <?php $nomePrograma = "jornaldacultura";?>
      <?php include_partial_from_folder('sites/segundatela', 'global/calendarJson', array('nomePrograma' => $nomePrograma, 'date' => $date)) ?>
      <!-- /CALENDARIO -->
      <h2>Redes Sociais</h2>
      <!-- abas -->
      <div class="">
        <ul class="nav nav-tabs" id="myTab">
          <li class="active"><a data-toggle="tab" href="#facebook">Facebook</a></li>
          <li class=""><a data-toggle="tab" href="#twitter">Twitter</a></li>
        </ul>
        <div class="tab-content" id="myTabContent">
          <div id="facebook" class="tab-pane fade active in">
            <div class="fb-comments" data-href="cmais.com.br/segundatela/jornaldacultura/<?php echo $date; ?>" data-width="300px" data-num-posts="10"></div> 
          </div>
          <div id="twitter" class="tab-pane fade">
            <a class="twitter-timeline" href="https://twitter.com/search?q=%40jornal_cultura" data-widget-id="316640392126808065">Tweets sobre "@jornal_cultura"</a>
            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
          </div>
        </div>
      </div>
      <!-- /abas -->
    </div>
    <!-- /direita -->
  </div>
  
  