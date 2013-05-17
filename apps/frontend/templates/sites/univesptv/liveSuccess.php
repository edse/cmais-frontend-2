<link rel="stylesheet" href="/portal/css/tvcultura/secoes/aovivo.css" type="text/css" />
<link type="text/css" href="/portal/univesptv/css/geral.css" rel="stylesheet" /> 
<script type="text/javascript" src="/portal/js/mediaplayer/swfobject.js"></script>  
<script type="text/javascript" src="/portal/js/bootstrap/bootstrap.js"></script>
<style>
#direita { margin-top:0;}
#esquerda .stream {float: left; margin-top: 5px;}
#esquerda .stream a {background: none repeat scroll 0 0 #FF6633; clear: none;color: #FFFFFF; float: left;margin-right: 5px; padding: 0 3px; width: auto; }
#esquerda .stream a.ativo, #esquerda .stream a:hover { background: none repeat scroll 0 0 #333333;text-decoration: none;}

.nav-tabs > li { margin-bottom:0; }
.nav-tabs { background:#666; border:none; border-left: 1px dotted #fff;  }
.nav-tabs > li { border-right: 1px dotted #fff; }
.nav-tabs > li > a { font-weight:bold; text-transform:uppercase;color:#fff; background:#666;border:none; padding:0; height:30px; line-height: 30px; margin:0; font-size:16px; min-width:100px; text-align:center; }
.nav-tabs > li:hover > a,
.nav-tabs > .active > a,
.nav-tabs > .active > a:hover {  background:#333; color:#fff; border:none; }
</style>

<script type="text/javascript">
  $(function(){
    checkStreamingStart();
  });
  
  function checkStreamingStart(){
    $.ajax({
      url: "/ajax/streaming",
      data: "channel_id=3",
      dataType: "text",
      success: function(data){
        eval(data);
      }
    });
  }

  function checkStreamingEnd(){
    $.ajax({
      url: "/ajax/streamingend",
      data: "channel_id=3",
      dataType: "text",
      success: function(data){
        eval(data);
      }
    });
  }

  function timerStart(){
    $.ajax({
      url: "/ajax/timer",
      data: "channel_id=3",
      dataType: "text",
      success: function(data){
        eval(data);
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
         <h2 class="grid3"><img style="float:left;" src="http://midia.cmais.com.br/programs/<?php echo $site->getImageThumb() ?>" alt="Univesp TV" title="Univesp TV" /></h2>

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

              <?php include_partial_from_folder('blocks','global/share-2c', array('site' => $site, 'uri' => $uri)) ?>
              
            </div>
            <!-- /ESQUERDA -->

            <!-- DIREITA -->
            <div id="direita" class="grid1">                         

              <h2>Redes Sociais</h2>
              <!-- abas -->
              <div class="">
                <ul class="nav nav-tabs" id="myTab">
                  <li class="active"><a data-toggle="tab" href="#facebook">Facebook</a></li>
                  <li class=""><a data-toggle="tab" href="#twitter">Twitter</a></li>
                </ul>
                <div class="tab-content" id="myTabContent">
                  <div id="facebook" class="tab-pane fade active in">
                    <div class="fb-comments" data-href="cmais.com.br/segundatela/jornaldacultura/<?php echo $date; ?>" data-width="300px" data-num-posts="10"></div> 
                  </div>
                  <div id="twitter" class="tab-pane fade">
                    <a class="twitter-timeline" href="https://twitter.com/search?q=%40jornal_cultura" data-widget-id="316640392126808065">Tweets sobre "@jornal_cultura"</a>
                    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
                  </div>
                </div>
              </div>
              <!-- /abas -->



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
              <li><a href="http://www.desenvolvimento.sp.gov.br" class="governoSp"><img src="/portal/univesptv/images/logo-goversoSp.jpg" alt="Governo do Estado de S&atilde;o Paulo" /></a></li>
              <li><a href="http://www.fapesp.br" class="fapesp"><img src="/portal/univesptv/images/logo-fapesp.png" alt="FAPESP" /></a></li>
              <li><a href="http://www.unicamp.br" class="unicamp"><img src="/portal/univesptv/images/logo-unicamp.png" alt="UNICAMP" /></a></li>
              <li><a href="http://www.unesp.br" class="unesp"><img src="/portal/univesptv/images/logo-unesp.png" alt="UNESP" /></a></li>
              <li><a href="http://www.usp.br" class="usp"><img src="/portal/univesptv/images/logo-usp.png" alt="USP" /></a></li>
              <li><a href="http://www.fundap.sp.gov.br" class="fundap"><img src="/portal/univesptv/images/logo-fundap.jpg" alt="FUNDAP" /></a></li>
              <li><a href="http://www.centropaulasouza.sp.gov.br" class="cps"><img src="/portal/univesptv/images/logo-cps.png" alt="Centro Paula Souza" /></a></li>
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
    
