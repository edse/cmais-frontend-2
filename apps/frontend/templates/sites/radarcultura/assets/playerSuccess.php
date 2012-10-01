<?php use_helper('I18N', 'Date') ?>
<?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'section' => $section)) ?>

<html xmlns="http://www.w3.org/1999/xhtml"
  xmlns:fb="https://www.facebook.com/2008/fbml">
  <head>
    <meta charset="utf-8">
    <title>Cultura Brasil - RadarCultura</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link rel="stylesheet" href="/portal/css/geral.css?nocache=1234" type="text/css" />
    <link rel="stylesheet" href="/portal/css/tvcultura/geral2.css?a=1" type="text/css" />
    <link rel="stylesheet" href="http://172.20.17.129/radar2012/css/radarcultura.css" type="text/css" />    
  	<link href="/portal/js/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/portal/js/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
    <link href="/portal/css/tvcultura/sites/radarcultura.css" rel="stylesheet" type="text/css" />

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="./bootstrap/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="./bootstrap/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="./bootstrap/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="./bootstrap/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="./bootstrap/ico/apple-touch-icon-57-precomposed.png">
    
    <script src="/portal/js/jquery-1.7.2.min.js"></script>
    <script src="/radar2012/bootstrap/js/bootstrap.js"></script>
    <style type="text/css">
      .row { width: 415px; }
    	h1 a { text-indent:-9999px; background:url(images/i-logo-cultura-brasil-cinza.gif) no-repeat; width:216px; height:54px; display: block; margin:0 auto; }
			#mediaplayer_wrapper { margin-bottom:20px;}
    </style>
  </head>

  <body>
    <!-- container -->
    <div id="radar-home" class="">
      
     <div class="row">
        <h1><a href="#" title="Radar Cultura">Radar Cultura</a></h1>
        <p>olha eu aqui!</p>
        <?php echo html_entity_decode($asset->AssetContent->render()) ?>
        
      </div>
    </div>
    <!-- container -->


  </body>
</html>

