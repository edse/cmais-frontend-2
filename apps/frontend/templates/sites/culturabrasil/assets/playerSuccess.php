<html xmlns="http://www.w3.org/1999/xhtml"
  xmlns:fb="https://www.facebook.com/2008/fbml">
  <head> 
    <meta charset="utf-8">
    <title>Cultura Brasil - RadarCultura</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="http://cmais.com.br/portal/js/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="http://cmais.com.br/portal/js/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
    <link href="http://cmais.com.br/portal/css/tvcultura/sites/radarcultura.css" rel="stylesheet" type="text/css" />

    
    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="./bootstrap/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="./bootstrap/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="./bootstrap/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="./bootstrap/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="./bootstrap/ico/apple-touch-icon-57-precomposed.png">
    
    <script src="http://cmais.com.br/portal/js/jwPlayer/jquery-1.7.2.min.js"></script>
    <script src="http://cmais.com.br/portal/js/bootstrap/bootstrap.js"></script>
    <style type="text/css">
      .row { width: 415px; }
    	h1 a { text-indent:-9999px; background:url(http://cmais.com.br/portal/images/radarcultura/i-logo-cultura-brasil-cinza.gif) no-repeat; width:216px; height:54px; display: block; margin:0 auto; }
			#mediaplayer_wrapper { margin-bottom:20px;}
    </style>
  </head>
 
  <body>
    <!-- container -->
    <div id="radar-home" class="">
       
     <div class="row">
        <h1><a href="#" title="Radar Cultura">Radar Cultura</a></h1>
        <script type="text/javascript" src="http://cmais.com.br/portal/js/jwPlayer/jwplayer.js?start=am"></script>
        <!-- Add-On Info Here -->
        <div id='mediaplayer'></div>
        <script type="text/javascript">
			jwplayer('mediaplayer').setup({
				'flashplayer' : 'http://cmais.com.br/portal/js/jwPlayer/player.swf',
				'id' : 'playerID',
				'screencolor' : '333333',
				'controlbar' : 'none',
				'autostart': 'true',
				'width' : '415',
				'height' : '35',
				'file' : 'radioam',
				'streamer' : 'rtmp://200.136.27.12/live',
				'plugins' : {
					'audiolivestream-1' : {
						format : 'Playing: %track',
						buffer : 'Buffering: %perc%',
						backgroundCss : false,
						trackCss : 'color: #fff; font-size: 11px;'
					}
				}
			});

        </script>
      </div>
    </div>
    <!-- container -->
 

  </body>
</html>

