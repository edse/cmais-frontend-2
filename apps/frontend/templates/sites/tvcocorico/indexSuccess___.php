<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/geral.css" type="text/css" />
<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/sites/tvcocorico.css" type="text/css" />

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
  <!--/GOOGLE ANALYTICS-->  

<div id="palco">
    <!-- CAPA SITE -->
    <div id="capa-site">
      
      <!--LOGO TVCOCORICO -->
      <h1>
        <img src="http://cmais.com.br/portal/images/capaPrograma/cocoricoHome/logo-tv-cocorico.png" alt="TV Cocorico" />
      </h1>  
      <!--LOGO TVCOCORICO -->
      
      <!-- MENU COCORICO -->
      <div id="menu-tv-cocorico">
        <!--LISTA-BOTOES-->
        <ul>
          <!--BOTÃO-->
          <li>
            <a href="http://www3.tvcultura.com.br/cocorico/turma/" target="_self" title="Turma Cocorico">
              <img src="http://cmais.com.br/portal/images/capaPrograma/cocoricoHome/btn-turma.png" />
            </a>
          </li>
          <!--/BOTÃO-->
          <!--BOTÃO-->
          <li>
            <a href="http://www3.tvcultura.com.br/cocorico/jogos/" target="_self" title="Jogos">
              <img src="http://cmais.com.br/portal/images/capaPrograma/cocoricoHome/btn-jogos.png" />
            </a>
          </li>
          <!--/BOTÃO-->
          <!--BOTÃO-->
          <li>
            <a href="http://www3.tvcultura.com.br/cocorico/videos/" target="_self" title="Vídeos">
              <img src="http://cmais.com.br/portal/images/capaPrograma/cocoricoHome/btn-videos.png" />
            </a>
          </li>
          <!--/BOTÃO-->
          <!--BOTÃO-->
          <li>
            <a href="http://www3.tvcultura.com.br/cocorico/imagens/" target="_self" title="Imagens">
              <img src="http://cmais.com.br/portal/images/capaPrograma/cocoricoHome/btn-imagens.png" />
            </a>
          </li>
          <!--/BOTÃO-->
          <!--BOTÃO-->
          <li>
            <a href="http://www3.tvcultura.com.br/cocorico/radio/" target="_self" title="Rádio">
              <img src="http://cmais.com.br/portal/images/capaPrograma/cocoricoHome/btn-radio.png" />
            </a>
          </li>
          <!--/BOTÃO-->
          <!--BOTÃO-->
          <li>
            <a href="http://www3.tvcultura.com.br/cocorico/extras/" target="_self" title="Extras">
              <img src="http://cmais.com.br/portal/images/capaPrograma/cocoricoHome/btn-extras.png" />
            </a>
          </li>
          <!--/BOTÃO-->
          <!--BOTÃO-->
          <li class="m03">
            <a href="http://www3.tvcultura.com.br/cocorico/especiais/" target="_self" title="Especiais">
              <img src="http://cmais.com.br/portal/images/capaPrograma/cocoricoHome/btn-especiais.png" />
            </a>
          </li>
          <!--/BOTÃO-->
        </ul>
        <!--/LISTA-BOTOES-->  
      </div>
      <!-- /MENU COCORICO -->  
            
      <!-- HORARIO -->
      <div id="horario-tv">
        <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
        <p>AO VIVO DE 2ª a 6ª, ÀS 11H</p>
      </div>
      <!-- HORARIO -->
      
      <!--VIDEO-->
      <div id="video-tv-cocorico">
        <img src="http://cmais.com.br/portal/images/capaPrograma/cocoricoHome/no_ar.jpg" />
      </div>
      <!--/VIDEO-->
      
      <!--PROMOCAO-->  
      <?php include_partial_from_folder('sites/tvcocorico', 'global/promocao') ?>          
      <!--/PROMOCAO-->
      
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
