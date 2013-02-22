<link rel="stylesheet" href="/portal/css/tvcultura/secoes/defaultPrograma.css" type="text/css" />
<link rel="stylesheet" href="/portal/css/tvcultura/sites/<?php echo $section->Site->getSlug() ?>.css" type="text/css" />
<script type="text/javascript" src="http://cmais.com.br/portal/js/mediaplayer/swfobject.js"></script>
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
      <div class="capa grid3 home">
        <!-- ESQUERDA -->
        <div class="grid2" id="esquerda">
          
           <script>
      $(function(){
        $('.btn-port').click(function(){
          $(this).addClass('ativo');
          $('.btn-esp').removeClass('ativo');
        });
        $('.btn-esp').click(function(){
          $(this).addClass('ativo');
          $('.btn-port').removeClass('ativo');
        });
        
      });
    </script>
    
          <!-- NOTICIA INTERNA -->
          <div class="box-interna ">
            <div class="idioma">Selecione o idioma/ Elige tu idioma:
              <a href="javascript: stream1();" class="ativo btn-port">Português</a>
              <!--a class="btn-esp" href="javascript: stream2();">español</a-->
            </div>
            <div id="live"></div>
            <script>
              jQuery(document).ready(function(){
                stream1();
              });
              function stream1(){
                var so = new SWFObject('http://cmais.com.br/portal/js/mediaplayer/player.swf','mpl','630','358','9');
                so.addVariable('controlbar', 'bottom');
                so.addVariable('autostart', 'true');
                so.addVariable('streamer', 'rtmp://200.136.27.12/live');
                so.addVariable('file', 'tv');
                so.addVariable('type', 'video');
                so.addParam('allowscriptaccess','always');
                so.addParam('allowfullscreen','true');
                so.addParam('wmode','transparent');
                so.write('live');
              }
              function stream2(){
                var so = new SWFObject('http://cmais.com.br/portal/js/mediaplayer/player.swf','mpl','630','358','9');
                so.addVariable('controlbar', 'bottom');
                so.addVariable('autostart', 'true');
                so.addVariable('streamer', 'rtmp://200.136.27.12/live');
                so.addVariable('file', 'tv');
                so.addVariable('type', 'video');
                so.addParam('allowscriptaccess','always');
                so.addParam('allowfullscreen','true');
                so.addParam('wmode','transparent');
                so.write('live');
              }
            </script>
            <p><?php echo $section->getDescription() ?></p>  
            <!--div class="box-seminario">
              <h3>Participe</h3>
              <p class="content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nisi magna, sollicitudin euismod sodales ac, congue non purus. Cras blandit posuere vulputate. Donec eu risus nisl. In eget tincidunt enim. Donec feugiat lacinia orci at sagittis. Integer et lectus vitae sem feugiat ultrices condimentum in enim para: <a href="mailto:seminario@tvcultura.com.br" title="seminario@tvcultura.com.br">seminario@tvcultura.com.br</a></p>
            </div-->
          </div>
          <!-- /NOTICIA INTERNA -->
        </div>
        <!-- ESQUERDA -->
        <!-- DIREITA -->
        <div id="direita" class="grid1">
          <div class="box-seminario">
            <h3>Programação</h3>
            <div class="content">
            <p class="titulos">25 DE FEVEREIRO</p>
            <p class="titulos">Radiodifusão pública para quê?</p>
            <p class="azul">9h00 – Abertura</p>
            <p class="azul">9h10 - Palestra</p>
            <p>Muniz Sodré (professor emérito da Universidade Federal do Rio de Janeiro, autor de cerca de 30 livros nas áreas de Comunicação e Cultura) + 30 minutos de debate</p>
            <p class="azul">10h00 – Palestra</p>
            <p>Jorge da Cunha Lima (escritor e jornalista; presidente do Conselho Diretor da Associação de Televisões Educativas e Culturais Ibero-Americanas (ATEI); presidiu a TV Cultura, o Conselho Curador da FPA, a TV Gazeta e a ABEPEC) + 30 minutos de debate</p>
            <a class="veja" href="http://www.cmais.com.br/seminario2013/programacao">veja a programação completa</a>
           </div>
          </div>
          
          
        </div>
        <!-- /DIREITA -->
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
<link href='http://fonts.googleapis.com/css?family=Quattrocento+Sans' rel='stylesheet' type='text/css'>