<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/secoes/defaultPrograma.css" type="text/css" />
<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/sites/<?php echo $section->Site->getSlug() ?>.css" type="text/css" />
<script type="text/javascript" src="http://cmais.com.br/portal/js/mediaplayer/swfobject.js"></script>
<?php use_helper('I18N', 'Date') ?>
<?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'section' => $section)) ?>

<div class="bg-chamada">
  <?php if(isset($displays["alerta"])) include_partial_from_folder('blocks','global/breakingnews', array('displays' => $displays["alerta"])) ?>
</div>
<!-- CAPA SITE -->
<div id="capa-site">
  <!-- BARRA SITE -->
  <div id="barra-site">
    <div class="topo-programa">
      <h2><a href="http://cmais.com.br/seminario2013"> <img alt="Seminário 2013" src="http://cmais.com.br/portal/images/capaPrograma/seminario2013/logo.png"> </a></h2>
      <!-- horario -->
      <div id="horario">
        <p>25 e 26 de fevereiro</p>
      </div>
      <!-- /horario -->
      
    </div>
    <!-- box-topo -->
    <div class="box-topo grid3">
      <?php include_partial_from_folder('blocks','global/sections-menu', array('siteSections' => $siteSections)) ?>

      <?php if(!in_array(strtolower($section->getSlug()), array('home','homepage','home-page','index'))): ?>
      <div class="navegacao txt-10">
        <a href="../" title="Home">Home</a>
        <span>&gt;</span>
        <a href="<?php echo $section->retriveUrl()?>" title="<?php echo $section->getTitle()?>"><?php echo $section->getTitle() ?></a>
      </div>
      <?php endif;?>
    </div>
    <!-- /box-topo -->
  </div>
  <!-- /BARRA SITE -->
  <!-- MIOLO -->
  <div id="miolo">
    <?php include_partial_from_folder('blocks','global/shortcuts') ?>

    <!-- CONTEUDO PAGINA -->
    <div id="conteudo-pagina">
      <!-- CAPA -->
      <div class="capa grid3 home">
        <!-- ESQUERDA -->
        <div class="grid2" id="esquerda">
        
          
          
          <script>
          /*
            $(function(){
              $('.btn-port').click(function(){
                $('#video-port').show();
                $('#video-esp').hide();
                $(this).addClass('ativo');
                $('.btn-esp').removeClass('ativo');
              });
              $('.btn-esp').click(function(){
                $('#video-esp').show();
                $('#video-port').hide();
                $(this).addClass('ativo');
                $('.btn-port').removeClass('ativo');
              });
            });*/
           
           function stream1() {
    $('#video-port').html('<iframe width="630" height="358" src="http://www.youtube.com/embed/8tOELd0XXjM?wmode=transparent&rel=0" frameborder="0" allowfullscreen></iframe>');
    $('.idioma .btn-esp').removeClass('ativo');
    $('.idioma .btn-port').addClass('ativo');      
  }

  function stream2() {
    $('#video-port').html('<iframe width="630" height="358" src="http://www.youtube.com/embed/0xGI5HoLLus?wmode=transparent&rel=0" frameborder="0" allowfullscreen></iframe>');
    $('.idioma .btn-port').removeClass('ativo');
    $('.idioma .btn-esp').addClass('ativo');   
  }
          </script>
    
          <!-- NOTICIA INTERNA -->
          <div class="box-interna ">
            
            <div class="idioma">Selecione o idioma/ Elige tu idioma:
              <a class="ativo btn-esp" href="javascript: stream2();">áudio original</a>
              <a href="javascript: stream1();" class="btn-port">áudio dublado</a>
              
            </div>
           
            <div id="video-port" style="display:block;">
              <iframe width="630" height="358" src="http://www.youtube.com/embed/0xGI5HoLLus?wmode=transparent&rel=0" frameborder="0" allowfullscreen></iframe>
            </div>
            
            <!--div id="video-esp" style="display:none;">
              <iframe width="630" height="358" src="http://www.youtube.com/embed/0xGI5HoLLus?wmode=transparent&rel=0" frameborder="0" allowfullscreen></iframe>
            </div-->            
           
            
            <p><?php echo $section->getDescription() ?></p>  
           
          </div>
          <!-- /NOTICIA INTERNA -->
        </div>
        <!-- ESQUERDA -->
        <script>
          function timer1()
          {
            var request = jQuery.ajax({
              data: {
                site_id: '1174',
                section_id: '2240',
                limit: '3',
                orderby: 'date_start asc',
                days: '2013-02-25, 2013-02-26'
              },
              dataType: 'html',
              success: function(data) {
                jQuery('#programacao').html(data);
              },
              url: 'http://app.cmais.com.br/ajax/scheduledisplays?time=asdfg'
            }); 
          }
          
          jQuery(window).load(function() {
            var t=setInterval("timer1()",300000);
          });
          timer1(); 
        </script>
        <!-- DIREITA -->
        <div id="direita" class="grid1" style="margin-top: 0px;">
          <div class="box-seminario">
            <h3>Programação</h3>
            <div class="content">
              <div id="programacao">
                ...
              </div>
              <a class="veja" href="http://www.cmais.com.br/seminario2013/programacao">veja a programação completa</a>
           </div>
          </div>
          
          
        </div>
        <!-- /DIREITA -->
      </div>
      <!-- /CAPA -->
      <?php if (isset($displays["rodape-interno"])): ?>
      <!--APOIO-->
      <?php include_partial_from_folder('blocks','global/support', array('displays' => $displays["rodape-interno"])) ?>
      <!--/APOIO-->
      <?php endif; ?>
    </div>
    <!-- /CONTEUDO PAGINA -->
  </div>
  <!-- /MIOLO -->
</div>
<!-- /CAPA SITE -->
<link href='http://fonts.googleapis.com/css?family=Quattrocento+Sans' rel='stylesheet' type='text/css'>