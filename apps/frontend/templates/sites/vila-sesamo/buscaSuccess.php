<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<!--[if lt IE 8]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/sites/vilasesamo2/internas.css" type="text/css" />

<script>
  $("body").addClass("interna campanhas");
</script>

<!-- HEADER -->
<?php include_partial_from_folder('sites/vila-sesamo', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'section' => $section)) ?>
<!-- /HEADER -->

<!--content-->
<div id="content">
  
  <!--section -->
  <section class="filtro row-fluid pais">
    
    <!--container conteudo-->
    <div class="b-amarelo borda-arredonda">
   
      <h1>
        Palavra chave
      </h1>
      
      <!--container-->
      <div class="container-busca">
					<script>
					  (function() {
					    var cx = '005232987476052626260:fifvz-rfcl0';
					    var gcse = document.createElement('script');
					    gcse.type = 'text/javascript';
					    gcse.async = true;
					    gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
					        '//www.google.com/cse/cse.js?cx=' + cx;
					    var s = document.getElementsByTagName('script')[0];
					    s.parentNode.insertBefore(gcse, s);
					  })();
					</script>
          <gcse:searchresults-only>Buscando...</gcse:searchresults-only>
      </div>
      <!--container-->
  </section>
  <!--/section-->
  <script>
  
    if(getURLParameter("term") == "null" || getURLParameter("term") == ""){
      $('.b-amarelo h1').text('Sem resultados a busca');
    }else{
      var busca = getURLParameter("term");
      $('.b-amarelo h1').text(busca);
      $('#google_search').show();
    }
  
  function getURLParameter(name) {
      return decodeURI(
          (RegExp(name + '=' + '(.+?)(&|$)').exec(location.search)||[,null])[1]
      );
  }
  </script>
  
</div>
<!--/div-->  