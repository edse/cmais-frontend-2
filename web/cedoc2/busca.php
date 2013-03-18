<!DOCTYPE html>
<html lang="en">
  <head>
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
  </head>

  <body>

    
     <link rel="stylesheet" href="/portal/css/tvcultura/sites/topo-fpa.css" type="text/css" />
<script src="/portal/js/jquery-1.7.2.min.js" type="text/javascript"></script>
<script type="text/javascript" src="/portal/js/fpa.js"></script>

<script>
  $.post('http://cmais.com.br/cedoc2/includes/topo.inc.html', function(data) {
    $('#cedocTopo').html(data);
  });
</script>
<div id="cedocTopo"></div>

    
    <div class="container" id="geral">

      <!-- Main hero unit for a primary marketing message or call to action -->
      <div class="conteudo">
        <script>
          $.post('http://cmais.com.br/cedoc2/includes/menu.inc.html', function(data) {
            $('#cedocMenu').html(data);
          });
        </script>
        <div id="cedocMenu"></div>
        
        <div class="span8">
          <div id='cse' style='width: 100%;'>Procurando...</div>
          <script src='//www.google.com/jsapi' type='text/javascript'></script>
          <script type='text/javascript'>
          google.load('search', '1', {language: 'pt', style: google.loader.themes.MINIMALIST});
          google.setOnLoadCallback(function() {
            var customSearchOptions = {};
            var customSearchControl = new google.search.CustomSearchControl('014171385304484677642:rn0zsdt5eig', customSearchOptions);
            customSearchControl.setResultSetSize(google.search.Search.FILTERED_CSE_RESULTSET);
            customSearchControl.setLinkTarget(google.search.Search.LINK_TARGET_SELF);
            var options = new google.search.DrawOptions();
            options.enableSearchResultsOnly();
            customSearchControl.draw('cse', options);
            function parseParamsFromUrl() {
              var params = {};
              var parts = window.location.search.substr(1).split('&');
              for (var i = 0; i < parts.length; i++) {
                var keyValuePair = parts[i].split('=');
                var key = decodeURIComponent(keyValuePair[0]);
                params[key] = keyValuePair[1] ?
                    decodeURIComponent(keyValuePair[1].replace(/\+/g, ' ')) :
                    keyValuePair[1];
              }
              return params;
            }
            var urlParams = parseParamsFromUrl();
            var queryParamName = 'q';
            if (urlParams[queryParamName]) {
              customSearchControl.execute(urlParams[queryParamName]);
            }
          }, true);
          </script>
        </div>
         
      </div>

      <div class="row-fluid">
        <div class="span5 apoio"> 
          <h2>Realização:</h2>
          <ul>
            <li class="cultura"><a href="http://www.cmais.com.br">Cultura</a></li>
            <li class="ministerio"><a href="http://www.cultura.gov.br">Ministério da Cultura</a></li>
            <li class="governo"><a href="http://www.brasil.gov.br">Governo Federal</a></li>
          </ul>
        </div>
      </div>

    </div> <!-- /container -->    
    <div id="footer">
      <div class="container">
        <a class="voltar-topo" href="#geral">Voltar ao topo</a>
        <a href="http://tvcultura.cmais.com.br/" class="logo-fpa" title="Fundação Padre Anchieta">Fundação Padre Anchieta</a>
        <ul class="span3 first">
          <li class="tit"><a href="/cedoc/quem-somos" title="Quem Somos">Quem Somos</a></li>
          <li class="tit mg"><a href="/cedoc/acervo" title="Acervo">Acervo</a></li>
          <li><a href="/cedoc/pesquisa-audiovisual"title="Pesquisa Audiovisual">Pesquisa Audiovisual</a></li>
          <li><a href="/cedoc/linha-do-tempo" title="Linha do Tempo">Linha do Tempo</a></li>
          <li><a href="#" title="Memória Oral">Memória Oral</a></li>
        </ul>  
        <ul class="span3">
          <li class="tit"><a href="/cedoc/central-de-relacionamento" title="Central de Relacionamento ">Central de Relacionamento </a></li>
          <li class="tit"><a href="/cedoc/licitacoes" title="Licitações ">Licitações </a></li>
          <li class="tit"><a href="/cedoc/pesquisa-trabalhe-conosco"title="Trabalhe Conosco">Trabalhe Conosco</a></li>
        </ul>  
        <ul class="span3">
          <li class="tit mg"><a href="/cedoc/emissoras" title="Emissoras">Emissoras</a></li>
          <li><a href="http://tvcultura.cmais.com.br/" title="TV Cultura">TV Cultura</a></li>
          <li><a href="http://univesptv.cmais.com.br/"title="Univesp TV">Univesp TV</a></li>
          <li><a href="http://multicultura.cmais.com.br/" title="multiCultura">multiCultura</a></li>
          <li><a href="http://tvratimbum.cmais.com.br/" title="TV Rá Tim Bum">TV Rá Tim Bum</a></li>
          <li><a href="http://www.culturabrasil.com.br/" title="Cultura Brasil">Cultura Brasil</a></li>
          <li><a href="http://culturafm.cmais.com.br/" title="Cultura FM">Cultura FM</a></li>
          <li><a href="http://tvratimbum.cmais.com.br/radio" title="Rádio Rá Tim Bum">Rádio Rá Tim Bum</a></li>
          <li><a href="http://tvcultura.cmais.com.br/cocorico/radio" title="Rádio Cocoricó">Rádio Cocoricó</a></li>
        </ul>  
        <ul class="span3 last">
          <li class="tit mg"><p>Portais</p></li>
          <li><a href="http://cmais.com.br/" title="cmais +">cmais +</a></li>
          <li><a href="http://www.culturabrasil.com.br/"title="Cultura Brasil">Cultura Brasil</a></li>
          <li class="tit sic"><a href="http://fpa.com.br/sic/" title="SIC">SIC</a></li>
        </ul> 
        <p class="copyright">Copyright © 2013 Fundação Padre Anchieta</p>     
      </div>
    </div>

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- <script src="/portal/js/jquery-1.7.2.min.js" type="text/javascript"></script> -->
    <script type="text/javascript" src="/portal/js/bootstrap/transition.js"></script>
    <!--<script type="text/javascript" src="/portal/js/bootstrap/alert.js"></script>-->
    <script type="text/javascript" src="/portal/js/bootstrap/modal.js"></script>
    <script type="text/javascript" src="/portal/js/bootstrap/dropdown.js"></script>
    <script type="text/javascript" src="/portal/js/bootstrap/scrollspy.js"></script>
    <script type="text/javascript" src="/portal/js/bootstrap/tab.js"></script>
    <script type="text/javascript" src="/portal/js/bootstrap/tooltip.js"></script>
    <script type="text/javascript" src="/portal/js/bootstrap/popover.js"></script>
    <script type="text/javascript" src="/portal/js/bootstrap/button.js"></script>
    <script type="text/javascript" src="/portal/js/bootstrap/collapse.js"></script>
    <script type="text/javascript" src="/portal/js/bootstrap/carousel.js"></script>
    <script type="text/javascript" src="/portal/js/bootstrap/typeahead.js"></script>
    <script type="text/javascript" src="/portal/js/bootstrap/transition.js"></script>
    <script type="text/javascript" src="/portal/js/bootstrap/transition.js"></script>
    
   </body>
</html>
