<?php
include_once './sign-in/check.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>· Quem Sabe, Sabe · Jogo de perguntas baseado em conhecimento, estratégia e sorte · TV Cultura · cmais+</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="This application allows you to receive extra information synchronized with the content you're watching on television.">
    <meta name="author" content="Emerson Estrella">

    <!-- Le styles -->
    <link href="../docs/assets/css/bootstrap.css" rel="stylesheet">
    <link href="../docs/assets/css/bootstrap-responsive.css" rel="stylesheet">

    <link href="css/qss.css" rel="stylesheet">
    <link href="../docs/assets/css/docs.css" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="img/ico.png">
    
  </head>

  <body>

    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <a class="brand pull-left" href="http://cmais.com.br/qss" target="_blank">
          <div style="text-align: center;">
          <img src="img/logo2.png" alt="Quem Sabe, Sabe - TV Cultura - cmais+" />
          <div>Quem Sabe, Sabe</div>
          </div>
        </a>

        <div class="container">
                    
          <div class="btn-toolbar pull-right" style="margin-right: 15px;">

            <div id="users" class="btn-group pull-left hide">
              <a class="btn btn-large btn-danger disabled" title="Número de jogadores"><i class="icon-user icon-white"></i> <span id="watching">0</span></a>
            </div>

            <div id="status" class="btn-group pull-left">
              <a class="btn btn-large btn-danger disabled" title="Conexão">Desconectado</a>
            </div>

            <div id="points" class="btn-group pull-left hide">
              <a class="btn btn-large btn-primary disabled" title="Pontuação"><span id="eurekas"><?php echo $_REQUEST["points"] ?></span> Eurekas!</a>
            </div>

          </div>
          
        </div>
        
        <div class="hr-logo"></div>

      </div><!-- /navbar-inner -->
      
    </div>
    
    
    <div class="container-fluid">
      
      <div class="row-fluid">
        
        <div class="span7">
          <div class="page-header">
            <h4>Curiosidades <small> sobre os temas das perguntas</small></h4>
          </div>
          <div class="accordion" id="accordion2"></div>
        </div>

        <div class="span5">
          <div class="page-header">
            <h4>Top 20 <small> melhores jogadores</small></h4>
          </div>
          <table class="table table-striped table-hover table-bordered">
            <thead>
              <tr>
                <th>Rank</th>
                <th>Avatar</th>
                <th>Nome</th>
                <th>Eurekas</th>
              </tr>
            </thead>
            <tbody id="rankingTable"></tbody>
          </table>
        </div>

      </div>

      <div class="row-fluid">
        
        <div class="span12">
          <div class="page-header">
            <h4>Perguntas <small>valendo <i>Eurekas</i></small></h4>
          </div>
          <div class="accordion" id="accordion3"></div>
        </div>
        
      </div>

    </div>
    
  </div>

  <hr class="soften">
  
  <!--
  <footer style="margin-top: 15px; text-align: center;">
    <a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/3.0/"><img alt="Creative Commons License" style="border-width:0" src="http://i.creativecommons.org/l/by-nc-sa/3.0/88x31.png"></a><br /><a href="http://second-screen.appengine.com">Second Screen Application</span> developed by <a href="http://emersonestrella.appspot.com">Emerson Estrella</a>.<br />Licensed under a <a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/3.0/">Creative Commons Attribution-NonCommercial-ShareAlike 3.0 Unported License</a>.
  </footer>
  -->

  <script src="js/jquery.js"></script>
  <script src="js/bootstrap-v2.3.1/js/bootstrap.min.js"></script>
  <!--
  <script src="../docs/assets/js/bootstrap-tooltip.js"></script>
  <script src="../docs/assets/js/bootstrap-popover.js"></script>
  <script src="../docs/assets/js/bootstrap-collapse.js"></script>
  --> 

  <script>
  var client_token  = '<?php echo $_REQUEST['token']?>';
  var client_name   = '<?php echo $_REQUEST['name']?>';
  var client_email  = '<?php echo $_REQUEST['email']?>';
  var client_avatar = '<?php echo $_REQUEST['avatar']?>';
  </script>

  <script src="js/json2.js"></script>
  <script src="js/app.js"></script>

  <!--
  <div id="fb-root"></div>
  <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>
  -->

  <audio id="audio-ping">
    <source src="../audio/ping.mp3" />
    <source src="../audio/ping.ogg" />
  </audio>
  <audio id="audio_tictac" loop>
    <source src="../audio/tictac.mp3" />
    <source src="../audio/tictac.ogg" />
  </audio>
  <audio id="audio_correct">
    <source src="../audio/correct.mp3" />
    <source src="../audio/correct.ogg" />
  </audio>
  <audio id="audio_wrong">
    <source src="../audio/wrong.mp3" />
    <source src="../audio/wrong.ogg" />
  </audio>

</body>
</html>