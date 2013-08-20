<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://www.facebook.com/2008/fbml" xml:lang="en">
  <head>
    <link href="http://cmais.com.br/feed" type="application/atom+xml" rel="alternate" title="cmais+ feed" />
    <link rel="stylesheet" href="http://cmais.com.br/portal/css/geral.css?nocache=1234567" type="text/css" />
    <link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/geral2.css?a=11234" type="text/css" />
    <link href="http://cmais.com.br/portal/css/tvcultura/sites/radarcultura.css" rel="stylesheet" type="text/css" />
    <!--[if IE]>
      <link rel="stylesheet" type="text/css" href="/portal/css/ie-only.css" />
    <![endif]-->
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta http-equiv="Cache-Control" content="no-cache, no-store" />
    <meta http-equiv="Pragma" content="no-cache, no-store" />
    <meta http-equiv="expires" content="Mon, 06 Jan 1990 00:00:01 GMT" />

    <?php include_title() ?>
    <?php include_metas() ?>
    <?php include_meta_props() ?>

    <meta name="google-site-verification" content="sPxYSUnxlnoyUdly_hNwIHma64gh9iosgNcOBrZBYdo" />

    <meta property="fb:admins" content="100000889563712"/>
    <meta property="fb:app_id" content="498504570187162"/>

    <link rel="shortcut icon" href="http://cmais.com.br/portal/images/icon/favicon.png" type="image/x-icon" />

    <!-- scripts -->
    <script src="http://cmais.com.br/portal/js/jquery-1.7.2.min.js" type="text/javascript"></script>
    <!--script type="text/javascript" src="/portal/js/jquery-ui/js/jquery-1.5.1.min.js"></script-->
    <script type="text/javascript" src="http://cmais.com.br/portal/js/portal.js"></script>
    
    <script type="text/javascript" src="http://cmais.com.br/portal/js/jcarousel/lib/jquery.jcarousel.min.js"></script>
    <script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
    
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
    GA_googleAddSlot("ca-pub-6681834746443470", "home-geral300x250");
    GA_googleAddSlot("ca-pub-6681834746443470", "home-geral728x90");
    GA_googleAddSlot("ca-pub-6681834746443470", "home-geral2-300x250");
    GA_googleAddSlot("ca-pub-6681834746443470", "cmais-assets-300x250");
    GA_googleAddSlot("ca-pub-6681834746443470", "cmais-assets-728x90");
    GA_googleAddSlot("ca-pub-6681834746443470", "cmais-assets-250x250");
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

  </head>
  <body>

    <?php echo $sf_content ?>

    <?php include_partial_from_folder('blocks', 'global/footer') ?>
    
    <div id="fb-root"></div>
    <script>
      window.fbAsyncInit = function() {
        FB.init({
          appId      : '498504570187162', // App ID
          status     : true, // check login status
          cookie     : true, // enable cookies to allow the server to access the session
          xfbml      : true  // parse XFBML
        });
      };
      // Load the SDK Asynchronously
      (function(d){
         var js, id = 'facebook-jssdk', ref = d.getElementsByTagName('script')[0];
         if (d.getElementById(id)) {return;}
         js = d.createElement('script'); js.id = id; js.async = true;
         js.src = "//connect.facebook.net/pt_BR/all.js";
         ref.parentNode.insertBefore(js, ref);
       }(document));
    </script>

  </body>
</html>