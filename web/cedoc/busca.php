<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- 1 -->
    <meta charset="utf-8">
    <title>CEDOC</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="/portal/js/bootstrap/css/bootstrap.css" rel="stylesheet"-->
    <link href="/portal/js/bootstrap/css/bootstrap-responsive.css" rel="stylesheet"-->
    <link href="/portal/css/tvcultura/sites/cedoc2.css" rel="stylesheet">
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <!--
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="../assets/ico/favicon.png">
    -->
    <script>
      $.ajax({
        url: "http://cmais.com.br/cedoc/includes/topo.inc.html",
        dataType: 'html'
      }).done(function(data) {
        $('#cedocTopo').html(data);
      });
      $.ajax({
        url: "http://cmais.com.br/cedoc/includes/menu.inc.html",
        dataType: 'html'
      }).done(function(data) {
        $('#cedocMenu').html(data);
      });
      $.ajax({
        url: "http://cmais.com.br/cedoc/includes/footer.inc.html",
        dataType: 'html'
      }).done(function(data) {
        $('#cedocFooter').html(data);
      });
    </script>    
  </head>

  <body>

    
     <link rel="stylesheet" href="/portal/css/tvcultura/sites/topo-fpa.css" type="text/css" />
<script src="/portal/js/jquery-1.7.2.min.js" type="text/javascript"></script>
<script type="text/javascript" src="/portal/js/fpa.js"></script>

<div id="cedocTopo"></div>

    
    <div class="container" id="geral">

      <!-- Main hero unit for a primary marketing message or call to action -->
      <div class="conteudo">
        
        <div id="cedocMenu"></div>
        
        <div class="span8">
          <script>
            (function() {
              var cx = '014171385304484677642:rn0zsdt5eig';
              var gcse = document.createElement('script');
              gcse.type = 'text/javascript';
              gcse.async = true;
              gcse.src = (document.location.protocol == 'https' ? 'https:' : 'http:') +
                  '//www.google.com/cse/cse.js?cx=' + cx;
              var s = document.getElementsByTagName('script')[0];
              s.parentNode.insertBefore(gcse, s);
            })();
          </script>
          <gcse:searchresults-only linkTarget="_self">Buscando...</gcse:searchresults-only>
        </div>
         
      </div>

      <div id="cedocFooter"></div>
          
   </body>
</html>
