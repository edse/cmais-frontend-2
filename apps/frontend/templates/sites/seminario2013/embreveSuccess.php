<link rel="stylesheet" href="/portal/css/tvcultura/secoes/defaultPrograma.css" type="text/css" />
<link rel="stylesheet" href="/portal/css/tvcultura/sites/<?php echo $section->Site->getSlug() ?>.css" type="text/css" />
<?php use_helper('I18N', 'Date')
?>
<?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'section' => $section))
?>

<div class="bg-chamada">
  <?php if(isset($displays["alerta"])) include_partial_from_folder('blocks','global/breakingnews', array('displays' => $displays["alerta"]))
  ?>

  <!--div id="chamada" class="grid3">
    <span>teste</span><a href="#" target="fdsfds">fsdfdsfsdf fsdf sdfsd fds</a>
  </div-->
</div>
<!-- CAPA SITE -->
<div id="capa-site">
  <!-- BARRA SITE -->
  <div id="barra-site">
    <div class="topo-programa">
      <h2><a href="http://cmais.com.br/seminario2013"> <img alt="Seminário 2013" src="/portal/images/capaPrograma/seminario2013/logo.png"> </a></h2>
      <!-- horario -->
      <div id="horario">
        <p>25 e 26 de fevereiro</p>
      </div>
      <!-- /horario -->
      
    </div>
    <!-- box-topo -->
    <div class="box-topo grid3">
      <?php include_partial_from_folder('blocks','global/sections-menu', array('siteSections' => $siteSections))
      ?>

      <?php if(!in_array(strtolower($section->getSlug()), array('home','homepage','home-page','index'))):
      ?>
      <div class="navegacao txt-10">
        <a href="../" title="Home">Home</a>
        <span>&gt;</span>
        <a href="<?php echo $section->retriveUrl()?>" title="<?php echo $section->getTitle()?>"><?php echo $section->getTitle()
        ?></a>
      </div>
      <?php endif;?>
    </div>
    <!-- /box-topo -->
  </div>
  <!-- /BARRA SITE -->
  <!-- MIOLO -->
  <div id="miolo">
    <?php include_partial_from_folder('blocks','global/shortcuts')
    ?>

    <!-- CONTEUDO PAGINA -->
    <div id="conteudo-pagina">
      <!-- CAPA -->
      <div class="capa grid3">
        
       <style type="text/css">
         .box-interna .texto p a { color:#0091C8 !important; }
         .capa { min-height:500px; }
       </style>
          <!-- NOTICIA INTERNA -->
          <div class="box-interna ">
            
            <iframe width="640" height="390" src="http://www.youtube.com/embed/videoseries?list=PL0Qz-covvhxSzQaY2cuxWcwekgje5UcDd" frameborder="0" allowfullscreen></iframe>
            
            <!--
            <p class="titulos">O Seminário Cultura 2013 já foi encerrado.</p>
            <div class="texto">
              <p> Obrigado por assistir.</p>
              <p><a href="http://cmais.com.br/seminario2013/programacao" alt="Programação">Veja aqui como foi a programação do evento</a></p>
            </div>
            -->
            
          </div>
          <!-- /NOTICIA INTERNA -->
     
        
      </div>
      <!-- /CAPA -->
      <?php if (isset($displays["rodape-interno"])):
      ?>
      <!--APOIO-->
      <?php include_partial_from_folder('blocks','global/support', array('displays' => $displays["rodape-interno"]))
      ?>
      <!--/APOIO-->
      <?php endif;
      ?>
    </div>
    <!-- /CONTEUDO PAGINA -->
  </div>
  <!-- /MIOLO -->
</div>
<!-- /CAPA SITE -->
