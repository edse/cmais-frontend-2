<link rel="stylesheet" href="/portal/css/tvcultura/geral.css" type="text/css" />
<link rel="stylesheet" href="/portal/css/tvcultura/sites/tvcocorico.css" type="text/css" />

<?php use_helper('I18N', 'Date') ?>
<!-- TOPO CMAIS REDUZIDO-->
<?php include_partial_from_folder('blocks','global/menu-reduzido') ?>
<!-- /TOPO CMAIS REDUZIDO-->

  <!--GOOGLE ANALYTICS-->
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

<div id="palco">
    <!-- CAPA SITE -->
    <div id="capa-site">
      
      <!--LOGO TVCOCORICO -->
      <h1>
      	<a href="/tvcocorico" title="TV Cocórico" target="_self">
	        <img src="/portal/images/capaPrograma/cocoricoHome/logo-tv-cocorico.png" alt="TV Cocorico" />
    	</a>
      </h1>  
      <!--LOGO TVCOCORICO -->
      
      <!--MENU-->
      <?php include_partial_from_folder('sites/tvcocorico','global/menu') ?>  
      <!--/MENU-->  
            
      <!-- HORARIO -->
      <div id="horario-tv">
        <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
        <a href="http://youtube.com.br" title="Canal TV Cocoricó">
          <img src="/portal/images/capaPrograma/cocoricoHome/youtube-tvcocorico.png" alt="TV Cocorico" />
        </a>
      </div>
      <!-- HORARIO -->
      
      <!--VIDEO-->
      <div id="video-tv-cocorico">
        <img src="/portal/images/capaPrograma/cocoricoHome/no_ar.jpg" />
      </div>
      <!--/VIDEO-->
      
      <!--PROMOCAO-->  
      <?php // include_partial_from_folder('sites/tvcocorico', 'global/promocao') ?>          
      <!--/PROMOCAO-->
      
      <!--PROMOCAO->
      <div id="respPromocao" >
        <a href="javascript:;" class="troca tCha"></a>
        <p class="recebeu">
        Ganhadores da guitarra do Júlio:<br/><br/>
        <span class="preto">Artur da Silva de Oliveira, 4 anos – São Paulo</span><br/>
        <span class="preto">Gabrielle Antunes Rosa, 4 anos - Curitiba</span><br/>
        <span class="preto">Mateus Ferreira Jacques, 4 anos - Florianópolis</span><br/>
        <span class="preto">Maria Luiza Vieira Brito, 8 anos - Itapevi</span><br/>
        <span class="preto">Deborah Genovese Fernandes, 6 anos  - São Paulo</span><br/><br/>

        Parabéns!<br/>
        <span class="obs">*Entraremos em contato por e-mail para a retirada do brinquedo.</span>
        </p>

        
      </div>
      <!--PROMOCAO-->
      
      <div id="back">
      <!-- HOLOFOTES -->
        <div id="holofote-01" class="holofote"></div>
        <div id="holofote-02" class="holofote"></div>
        <div id="holofote-03" class="holofote"></div>
        <div id="holofote-04" class="holofote"></div>
        <div id="holofote-05" class="holofote"></div>
        <div id="holofote-06" class="holofote"></div>
        <!-- /HOLOFOTES -->
      </div>  
    </div>
    <!-- /CAPA SITE -->
</div>
