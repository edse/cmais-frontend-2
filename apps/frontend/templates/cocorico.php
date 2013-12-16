<!DOCTYPE html>
<html lang="en">
    <link href="/feed" type="application/atom+xml" rel="alternate" title="cmais+ feed" />
    
    <!--meta name="viewport" content="width=device-width, initial-scale=1.0"-->
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta http-equiv="Cache-Control" content="no-cache, no-store" />
    <meta http-equiv="Pragma" content="no-cache, no-store" />
    <meta http-equiv="expires" content="Mon, 06 Jan 1990 00:00:01 GMT" />

    <?php include_title() ?>
    <?php include_metas() ?>
    <?php include_meta_props() ?>


    <meta name="google-site-verification" content="sPxYSUnxlnoyUdly_hNwIHma64gh9iosgNcOBrZBYdo" />

    <meta property="fb:admins" content="100000889563712"/>
    <meta property="fb:app_id" content="124792594261614"/>

    <link rel="shortcut icon" href="http://cmais.com.br/portal/images/favicon.ico" />

    <!-- scripts -->
    <script src="http://cmais.com.br/portal/js/jquery-1.7.2.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="http://apis.google.com/js/plusone.js">
      {lang: 'pt-BR'}
    </script>
                  

    <!-- DFP -->
    <script type='text/javascript' src='http://partner.googleadservices.com/gampad/google_service.js'></script>
    <script type='text/javascript'>
    GS_googleAddAdSenseService("ca-pub-6681834746443470");
    GS_googleEnableAllServices();
    </script>
    
    <script type='text/javascript'>
    GA_googleAddSlot("ca-pub-6681834746443470", "maiscrianca");
    GA_googleAddSlot("ca-pub-6681834746443470", "portal-cocorico");
    GA_googleAddSlot("ca-pub-6681834746443470", "portal-cocorico-300x250");
    GA_googleAddSlot("ca-pub-6681834746443470", "portal-cocorico-familia");

    </script>
    <script type='text/javascript'>
    GA_googleFetchAds();
    </script>
    <!-- /DFP -->

    <script type="text/javascript">
      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-22770265-1']);
      _gaq.push(['_setDomainName', 'cmais.com.br']);
      _gaq.push(['_setAllowHash', 'false']);
      _gaq.push(['_trackPageview']);
      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();
    </script>
    <!-- /scripts -->
    <!-- Le styles -->
    <link href="http://cmais.com.br/portal/css/tvcultura/sites/cocorico/bootstrap.css" rel="stylesheet">
    <!--link href="http://cmais.com.br/portal/js/bootstrap/css/bootstrap.css" rel="stylesheet"-->
    <!--link href="http://cmais.com.br/portal/js/bootstrap/css/bootstrap-responsive.css" rel="stylesheet"-->
    
    <script type="text/javascript" src="http://cmais.com.br/portal/js/bootstrap/bootstrap.js"></script>
    <script type="text/javascript" src="http://cmais.com.br/portal/js/bootstrap/tab.js"></script>
    <script type="text/javascript" src="http://cmais.com.br/portal/js/cocorico.js?nocache=<?php echo rand(); ?>"></script>
    <link href="http://cmais.com.br/portal/css/tvcultura/sites/cocorico/geral.css" rel="stylesheet">
    <!--link href="http://cmais.com.br/portal/css/tvcultura/sites/cocorico/media.css" rel="stylesheet"-->
    
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    
    <!--[if lte IE 8]>
  <link type="text/css" rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/sites/cocorico/ie8.css" />
  <![endif]-->

  
  </head>
  <body>
    <?php //include_partial_from_folder('blocks', 'global/menu_reduzido_abrace') ?>
    
    
    <?php echo $sf_content ?>
    
    <div id="fb-root"></div> 
 <!--link href='http://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'-->
 
  </body>
</html>