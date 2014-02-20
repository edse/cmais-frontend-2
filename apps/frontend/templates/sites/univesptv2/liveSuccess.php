<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/secoes/aovivo.css" type="text/css" />
<link type="text/css" href="http://cmais.com.br/portal/univesptv/css/geral.css" rel="stylesheet" /> 
<script type="text/javascript" src="http://cmais.com.br/portal/js/mediaplayer/swfobject.js"></script>  
<style>
#direita { margin-top:0;}
#esquerda .stream {float: left; margin-top: 5px;}
#esquerda .stream a {background: none repeat scroll 0 0 #FF6633; clear: none;color: #FFFFFF; float: left;margin-right: 5px; padding: 0 3px; width: auto; }
#esquerda .stream a.ativo, #esquerda .stream a:hover { background: none repeat scroll 0 0 #333333;text-decoration: none;}
</style>

<script type="text/javascript">
  $(function(){
    checkStreamingStart();
  });
  
  function checkStreamingStart(){
    $.ajax({
      url: "http://app.cmais.com.br/ajax/streaming",
      data: "channel_id=3",
      dataType: "text",
      success: function(data){
        eval(data);
      }
    });
  }

  function checkStreamingEnd(){
    $.ajax({
      url: "http://app.cmais.com.br/ajax/streamingend",
      data: "channel_id=3",
      dataType: "text",
      success: function(data){
        eval(data);
      }
    });
  }

  function timerStart(){
    $.ajax({
      url: "http://app.cmais.com.br/ajax/timer",
      data: "channel_id=3",
      dataType: "jsonp",
      type: "GET",
      success: function(data){
        eval(data.data);
      }
    });
  }
</script>

<?php use_helper('I18N', 'Date') ?>
<?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'section' => $section)) ?>

    <!-- CAPA SITE -->
    <div id="capa-site">

      <?php //if(isset($displays["alerta"])) include_partial_from_folder('blocks','global/breakingnews', array('displays' => $displays["alerta"])) ?>

      <!-- BARRA SITE -->
      <div id="barra-site">
         <h2 class="grid3"><img style="float:left;" src="http://cmais.com.br/portal/images/capaPrograma/logo-univesptv.png" alt="Univesp TV" title="Univesp TV" /></h2>

        <!-- box-topo -->
        <div class="box-topo grid3">

          <!-- menu interna -->
          <ul class="menu-interna grid3">
            <li><a href="http://cmais.com.br/grade?c=univesptv" title="Grade de Programação">Grade de Programação</a></li>
            <li><a href="http://www.youtube.com/univesptv" title="Vídeos">Vídeos</a></li>
            <li><a href="http://blogunivesptv.blogspot.com" title="Blog da Programação">Blog da Programação</a></li>
            <li><a href="http://blogdoinglescommusica.blogspot.com" title="Inglês com Música">Inglês com Música</a></li>
              

          </ul>
          <!-- /menu interna -->

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
          <div class="capa grid3">
            <h3 class="tit-pagina">Confira a programação ao vivo</h3>

            <!-- ESQUERDA -->
            <div id="esquerda" class="grid2">
              
              <div id="livestream2" style="display: none;"><p>Seu browser não suporta Flash.</p></div>

              <!-- lista calendario -->
              <?php include_partial_from_folder('blocks','global/display-2c-broadcast2', array('live_id' => $schedules[0]->id, 'channel_id'=>3)) ?>
              <!-- /lista calendario -->

              <?php include_partial_from_folder('blocks','global/share-2c', array('site' => $site, 'uri' => $uri, 'asset' => $asset)) ?>
              
            </div>
            <!-- /ESQUERDA -->

            <!-- DIREITA -->
            <div id="direita" class="grid1">                         

              <!-- publicidade -->
              <div class="box-publicidade grid1">
                <!-- univesptv-300x250 -->
				<script type='text/javascript'>
				GA_googleFillSlot("univesptv-300x250");
				</script>
              </div>
              <!-- /publicidade -->

            </div>
            <!-- /DIREITA -->
            
            <!-- APOIO -->
          <ul id="apoio" class="grid3">
              <li><a href="http://www.desenvolvimento.sp.gov.br" class="governoSp"><img src="http://cmais.com.br/portal/univesptv/images/logo-goversoSp.jpg" alt="Governo do Estado de S&atilde;o Paulo" /></a></li>
              <li><a href="http://www.fapesp.br" class="fapesp"><img src="http://cmais.com.br/portal/univesptv/images/logo-fapesp.png" alt="FAPESP" /></a></li>
              <li><a href="http://www.unicamp.br" class="unicamp"><img src="http://cmais.com.br/portal/univesptv/images/logo-unicamp.png" alt="UNICAMP" /></a></li>
              <li><a href="http://www.unesp.br" class="unesp"><img src="http://cmais.com.br/portal/univesptv/images/logo-unesp.png" alt="UNESP" /></a></li>
              <li><a href="http://www.usp.br" class="usp"><img src="http://cmais.com.br/portal/univesptv/images/logo-usp.png" alt="USP" /></a></li>
              <li><a href="http://www.fundap.sp.gov.br" class="fundap"><img src="http://cmais.com.br/portal/univesptv/images/logo-fundap.jpg" alt="FUNDAP" /></a></li>
              <li><a href="http://www.centropaulasouza.sp.gov.br" class="cps"><img src="http://cmais.com.br/portal/univesptv/images/logo-cps.png" alt="Centro Paula Souza" /></a></li>
          </ul>
          <!-- APOIO -->
            
          </div>
          <!-- /CAPA -->
          
        </div>
        <!-- /CONTEUDO PAGINA -->
        
      </div>
      <!-- /MIOLO -->
      
    </div>
    <!-- /CAPA SITE -->
    
