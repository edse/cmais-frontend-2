<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>· Second Screen Application · Client side : Receive extra information synchronized with the content you're watching on television ·</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="This application allows you to receive extra information synchronized with the content you're watching on television.">
    <meta name="author" content="Emerson Estrella">

    <!-- Le styles -->
    <link href="/portal/js/bootstrap-edse/assets/css/bootstrap.css" rel="stylesheet">
    <link href="/portal/js/bootstrap-edse/assets/css/bootstrap-responsive.css" rel="stylesheet">

    <link href="/portal/js/bootstrap-edse/assets/css/docs.css" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="img/ico.png">
    
    <style>
      .fb-comments, .fb-comments iframe[style] {width: 100% !important;}
    </style>

  </head>

  <body>

    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        
      <a class="brand2 pull-left" href="#" data-toggle="popover" data-placement="bottom" data-content="Here you can seach content on Wikipedia, fetch its contents, and display it in a HTML editor, where you can edit, save and send it in real time to all clients." title="Hi there!" data-original-title="Hi there!"><img src="img/logo.png" alt="Second Screen Application · Admin Tool" style="float: left;" /></a>

        <div class="container">
                    
          <div class="btn-toolbar pull-right" style="margin-right: 15px;">

            <div id="users" class="btn-group pull-left hide">
              <a class="btn btn-large btn-success disabled"><i class="icon-user icon-white"></i> <span id="watching">0</span></a>
            </div>

            <div id="status" class="btn-group pull-left">
              <a class="btn btn-large btn-danger disabled">Offline</a>
            </div>

          </div>
          
        </div>

      </div><!-- /navbar-inner -->
      
    </div>
    
    
    <div class="container-fluid">
      
      <div class="row-fluid server-status">
        
        <div class="span7">
          <div class="page-header">
            <h4>Second Screen <small>extra content synchronized with your TV</small></h4>
          </div>
          <div class="accordion" id="accordion2"></div>
        </div>
        
        <div class="span5">
          <div class="page-header">
            <h4>Social <small id="nun_clients">twitter, facebook, google+</small></h4>
          </div>
          <a class="twitter-timeline" href="https://twitter.com/emersonestrella" data-widget-id="310872686291189760">Tweets by @emersonestrella</a>
          <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
        </div>
        
      </div>

    </div>
    
  </div>

  <hr class="soften">
  
  <footer style="margin-top: 15px; text-align: center;">
    <a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/3.0/"><img alt="Creative Commons License" style="border-width:0" src="http://i.creativecommons.org/l/by-nc-sa/3.0/88x31.png"></a><br /><a href="http://second-screen.appengine.com">Second Screen Application</span> developed by <a href="http://emersonestrella.appspot.com">Emerson Estrella</a>.<br />Licensed under a <a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/3.0/">Creative Commons Attribution-NonCommercial-ShareAlike 3.0 Unported License</a>.
  </footer>
    
  <script src="/portal/js/bootstrap-edse/assets/js/jquery.js"></script>
  <script src="/portal/js/bootstrap-edse/assets/js/bootstrap.min.js"></script>

  <audio id="audio-ping">
    <source src="/portal/audio/ping.mp3" />
    <source src="/portal/audio/ping.ogg" />
  </audio>

  <script type="text/javascript" src="https://www.youtube.com/iframe_api"></script>    
  <script type="text/javascript" src="/portal/js/websocket-js/swfobject.js"></script>
  <script type="text/javascript" src="/portal/js/websocket-js/web_socket.js?a"></script>
  <script type="text/javascript" src="/portal/js/json2.js"></script>
  <script type="text/javascript" src="/portal/js/segundatela/secondscreenapp/app.js?nocache=<?php echo time()?>"></script>

  <div id="fb-root"></div>
  <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>

</body>
</html>