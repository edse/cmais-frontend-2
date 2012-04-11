<script>
function isDevice(OSName)
  {
  var system = navigator.appVersion.toLowerCase(); // get local system values
  var OSName = OSName.toLowerCase(); // put parameter value to lowecase
   
  // put some parameters value in standard names
  if (OSName == "macos") OSName = "mac";
  if (OSName == "windows") OSName = "win";
  if (OSName == "unix") OSName = "x11";
     
  if (system.indexOf(OSName) != -1)
      return true;
    else
      return false;
  }
  
  if (isDevice('iphone') || isDevice('ipod') || isDevice('Android'))
  {
    window.location.href="http://tvcultura.cmais.com.br/transito2/mobile/index.php";
  }
</script>
<link rel="stylesheet" href="/portal/css/tvcultura/sites/<?php echo $section->Site->getSlug() ?>.css" type="text/css" />
<style>
.azul .window { background-color: #6AACD2; }
.verde .window { background-color: #136F13; }
</style>
<script type="text/javascript" src="/portal/js/mediaplayer/swfobject.js"></script>

<?php
  $xmlTransitoAgoraCET = file_get_contents('http://cetsp1.cetsp.com.br/monitransmapa/xmltransitoagora.asp');
  try {
    $transitoagora = new SimpleXMLElement($xmlTransitoAgoraCET);
  } catch (Exception $e) {}
  
  $xmlCorredoresCET = file_get_contents('http://cetsp1.cetsp.com.br/monitransmapa/xmlcorredores.asp');

  try {
    $corredores = new SimpleXMLElement($xmlCorredoresCET);
  } catch (Exception $e) {}
  
  //$imgMarginalPinheiros = '<img src="'.trim(file_get_contents("http://200.136.27.15/cameras/pinheironeto.php")).'" style="width: 310px; height: 240px;" alt="Marginal Pinheiros - Jockey Club">';
  //$imgMarginalPinheiros2 = '<img src="'.trim(file_get_contents("http://200.136.27.15/cameras/somar.php")).'" style="width: 310px; height: 240px;" alt="Marginal Pinheiros - Estação Pinheiros">';
  //imgSantana = '<img src="'.trim(file_get_contents("http://200.136.27.15/cameras/santana.php")).'" style="width: 310px; height: 240px;" alt="Santana">';
?>
<?php use_helper('I18N', 'Date') ?>
<?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'section' => $section)) ?>
    
    <!-- CAPA SITE -->
    <div id="capa-site">

      <?php if(isset($displays["alerta"])) include_partial_from_folder('blocks','global/breakingnews', array('displays' => $displays["alerta"])) ?>

      <!-- BARRA SITE -->
      <div id="barra-site">
        <div class="topo-programa">
          <?php if(isset($program) && $program->id > 0): ?>
          <h2>
            <a href="<?php echo $program->retriveUrl() ?>"> 
              <img src="http://midia.cmais.com.br/programs/<?php echo $program->getImageThumb() ?>" alt="<?php echo $program->getTitle() ?>" title="<?php echo $program->getTitle() ?>" />
            </a>
          </h2>
          <?php endif; ?>

          <?php if(isset($program) && $program->id > 0): ?>
          <?php include_partial_from_folder('blocks','global/like', array('site' => $site, 'uri' => $uri, 'program' => $program)) ?>
          <?php endif; ?>
          
          <?php if(isset($program) && $program->id > 0): ?>
          <!-- horario -->
          <div id="horario">
            <p><?php echo html_entity_decode($program->getSchedule()) ?></p>
          </div>
          <!-- /horario -->
          <?php endif; ?>
        </div>

        <!-- box-topo -->
        <div class="box-topo grid3">

          <?php include_partial_from_folder('blocks','global/sections-menu', array('siteSections' => $siteSections)) ?>

          <?php if(isset($section->slug)): ?>
            <?php if(!in_array(strtolower($section->getSlug()), array('home','homepage','home-page','index'))): ?>
            <div class="navegacao txt-10">
              <a href="../" title="Home">Home</a>
              <span>&gt;</span>
              <a href="<?php echo $section->retriveUrl()?>" title="<?php echo $section->getTitle()?>"><?php echo $section->getTitle()?></a>
            </div>
            <?php endif; ?>
          <?php endif; ?>

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
            
            <!-- TRANSITO -->
            <div class="box-transito grid3" align="left">
              <div class="textoVerde grid1">

                <p>CÂMERAS DE SÃO PAULO</p>
                <form id="opcoes-livestream" action="" method="post">
                  <select id="opcao-livestream-1" class="required">
                    <option value="6" selected="selected">Av. Dummont Villares</option>
                    <option value="8">Av. Pompéia</option>
                    <option value="3">Av. Tiradentes</option> 
                    <option value="5">Marginal Pinheiros - Estação Pinheiros</option>
                    <option value="4">Marginal Pinheiros - Jockey Club</option>
                    <option value="1">Marginal Tietê</option>
                    <option value="2">Radial Leste X Salim Farah Maluf</option>
                    <option value="7">Radial Leste - Metrô Tatuapé</option>
                  </select> 
                </form>

                <div id="livestream"><img src="http://200.136.27.15/cameras/img_santana.php"  style="width: 310px; height: 240px;" alt="SESC Santana"></div>
                
                <script>
                    $(document).ready(function() {
                    
                      $("#opcao-via-1").change(function () {
                        $("#opcao-via-1 option:selected").each(function () {
                          $("#img-litoral").attr('src', $(this).val());
                        });
                      }).change();
                       
                      $("#opcoes-ayrton-senna").change(function () {
                        $("#opcoes-ayrton-senna option:selected").each(function () {
                          $("#img-ayrtonsenna").attr('src', $(this).val());
                        });
                      }).change();

                      $("#opcoes-imigrantes").change(function () {
                        $("#imigrantes option:selected").each(function () {
                          $("#img-imigrantes").attr('src', $(this).val());
                        });
                      }).change();

                      $("#opcoes-anchieta").change(function () {
                        $("#anchieta option:selected").each(function () {
                          $("#img-anchieta").attr('src', $(this).val());
                        });
                      }).change();

                      $("#opcoes-bandeirantes").change(function () {
                        $("#bandeirantes option:selected").each(function () {
                          $("#img-bandeirantes").attr('src', $(this).val());
                        });
                      }).change();

                      $("#opcoes-anhanguera").change(function () {
                        $("#anhanguera option:selected").each(function () {
                          $("#img-anhanguera").attr('src', $(this).val());
                        });
                      }).change();

                      $("#opcoes-raposo").change(function () {
                        $("#raposo option:selected").each(function () {
                          $("#img-raposo").attr('src', $(this).val());
                        });
                      }).change();
                       
                      $("#opcao-livestream-1").change(function () {
                        $("#opcao-livestream-1 option:selected").each(function () {
                          if ($(this).val() == "8")
                            $("#livestream").html('<img src="http://200.136.27.15/cameras/img_pompeia.php"  style="width: 310px; height: 240px;" alt="Av. Pompéia">');
                          else if ($(this).val() == "2")
                            $("#livestream").html('<img src="http://200.136.27.15/cameras/img_belenzinho.php" style="width: 310px; height: 240px;" alt="Belenzinho">'); 
                          else if ($(this).val() == "3")
                            $("#livestream").html('<img src="http://200.136.27.15/cameras/img_tiradentes.php"  style="width: 310px; height: 240px;" alt="Avenida Tiradentes">'); 
                          else if ($(this).val() == "4")
                              $("#livestream").html('<img src="http://200.136.27.15/cameras/img_pinheironeto.php"  style="width: 310px; height: 240px;" alt="Marginal Pinheiros - Jockey Club">'); 
                          else if ($(this).val() == "5")
                              $("#livestream").html('<img src="http://200.136.27.15/cameras/img_somar.php"  style="width: 310px; height: 240px;" alt="Marginal Pinheiros - Est. Pinheiros">'); 
                          else if ($(this).val() == "6")
                              $("#livestream").html('<img src="http://200.136.27.15/cameras/img_santana.php"  style="width: 310px; height: 240px;" alt="SESC Santana">');
                          else if ($(this).val() == "7")
                              $("#livestream").html('<img src="http://200.136.27.15/cameras/img_radial.php"  style="width: 310px; height: 240px;" alt="Radial Leste - Metrô Tatuapé">');
                          else if ($(this).val() == "1")
                              $("#livestream").html('<embed type="application/x-shockwave-flash" src="http://www.cmais.com.br/portal/js/mediaplayer/player.swf" width="310" height="240" style="undefined" id="mpl" name="mpl" quality="high" allowscriptaccess="always" allowfullscreen="true" wmode="transparent" flashvars="controlbar=over&amp;autostart=true&amp;streamer=rtmp://200.136.27.12/live&amp;file=camera&amp;type=video">');         
                        });
                      });
                      
                    });

                </script>
                <!-- /video player -->

              </div>
              
              <div class="textoAzul grid1" align="left">
              <p>ESTRADAS LITORAL/INTERIOR</p>
                <form id="opcoes-litoral" action="" method="post" style="float: left;">
                  <select id="opcao-via-1" class="required" style=""> 
                    <option value="http://www.dersa.sp.gov.br/santos.jpg" selected="selected">Balsa de Santos - Guarujá</option>
                    <option value="http://www.dersa.sp.gov.br/guaruja1.jpg">Balsa de Guarujá - Santos</option>
                    <option value="http://www.dersa.sp.gov.br/bertioga/bertioga.jpg">Balsa de Bertioga - Guarujá</option>
                    <option value="http://www.dersa.sp.gov.br/saosebastiao.jpg">Balsa de São Sebastião - Ilha Bela</option>
                    <option value="http://www.dersa.sp.gov.br/ilhabela.jpg">Balsa de Ilha Bela - São Sebastião</option>
                  </select>
                </form>
                <div class="pageload" style="float: left; margin-top: 6px;"><img src="/portal/images/capaPrograma/transito/transparent_loading.gif" alt="carregando..." /></div>
                <img id="img-litoral" src="http://www.dersa.sp.gov.br/santos.jpg" alt="Balsa de Santos - Guarujá" style="width: 310px; height: 240px;" />  
              </div>
              
              <script>
              $(function(){
                var imigrantes = 0;
                var anchieta = 0;
                $.ajax({
                  url: "/portal/cams.php?s=ecovias",
                  dataType: "json",
                  success: function(data){
                    $.each(data, function(i,data){
                      var a = new String(data.src);
                      //Imigrantes
                      if(a.indexOf("Imigrantes")>=0){
                        data.title = "Imigrantes - "+data.title;
                        if(imigrantes==0){
                          $('#imigrantes').append('<option value="'+data.src+'" selected="selected">'+data.title+'</option>');
                          $("#img-imigrantes").attr('src', data.src);
                        }
                        else
                          $('#imigrantes').append('<option value="'+data.src+'">'+data.title+'</option>');
                        imigrantes++;
                      }
                      //Anchieta
                      if(a.indexOf("Anchieta")>=0){
                        data.title = "Anchieta - "+data.title;
                        if(anchieta==0){
                          $('#anchieta').append('<option value="'+data.src+'" selected="selected">'+data.title+'</option>');
                          $("#img-anchieta").attr('src', data.src);
                        }
                        else
                          $('#anchieta').append('<option value="'+data.src+'">'+data.title+'</option>');
                        anchieta++;
                      }
                      $('#opcao-via-1').append('<option value="'+data.src+'">'+data.title+'</option>');
                    });
                    $('#opcao-via-1').append('<option value="http://www.der.sp.gov.br/img_cameras/name9.jpg">Padre Manoel da Nobrega - Km 292</option>');
                    $('#opcao-via-1').append('<option value="http://www.der.sp.gov.br/img_cameras/name2.jpg">Padre Manoel da Nobrega - Km 323</option>');
                    $('#opcao-via-1').append('<option value="http://www.der.sp.gov.br/img_cameras/name13.jpg">Padre Manoel da Nobrega - Km 337</option>');
                    $('#opcao-via-1').append('<option value="http://www.der.sp.gov.br/img_cameras/name3.jpg">Padre Manoel da Nobrega - Km 344</option>');

                    interior();
                  }
                });
              });
              function interior(){
                var ayrtonsenna = 0;
                $.ajax({
                  url: "/portal/cams.php?fpa=1&s=ecopistas",
                  dataType: "json",
                  success: function(data){
                    $.each(data, function(i,data){
                      var a = data.title.substring(5,data.title.length);
                      //Ayrton Senna
                      if(a.indexOf("Ayrton Senna")>=0){
                        if(ayrtonsenna==0){
                          $("#img-ayrtonsenna").attr('src', data.src);
                          $('#ayrton-senna').append('<option value="'+data.src+'" selected="selected">'+a+'</option>');
                        }
                        else
                          $('#ayrton-senna').append('<option value="'+data.src+'">'+a+'</option>');
                        ayrtonsenna++;
                      }

                      $('#opcao-via-1').append('<option value="'+data.src+'">'+a+'</option>');
                    });
                    
                    $('#opcao-via-1').append('<option value="http://200.246.17.101/cameras/cam01.jpg">Bandeirantes - Km 13</option>');
                    $('#opcao-via-1').append('<option value="http://200.246.17.101/cameras/cam02.jpg">Bandeirantes - Km 21</option>');
                    $('#opcao-via-1').append('<option value="http://200.246.17.101/cameras/cam03.jpg">Bandeirantes - Km 27</option>');
                    $('#opcao-via-1').append('<option value="http://200.246.17.101/cameras/cam05.jpg">Bandeirantes - Km 38</option>');
                    $('#opcao-via-1').append('<option value="http://200.246.17.101/cameras/cam07.jpg">Bandeirantes - Km 47</option>');
                    $('#opcao-via-1').append('<option value="http://200.246.17.101/cameras/cam18.jpg">Anhanguera - Km 13</option>');
                    $('#opcao-via-1').append('<option value="http://200.246.17.101/cameras/cam20.jpg">Anhanguera - Km 22</option>');
                    $('#opcao-via-1').append('<option value="http://200.246.17.101/cameras/cam21.jpg">Anhanguera - Km 26</option>');
                    $('#opcao-via-1').append('<option value="http://200.246.17.101/cameras/cam23.jpg">Anhanguera - Km 52</option>');
                    $('#opcao-via-1').append('<option value="http://www.der.sp.gov.br/img_cameras/name25.jpg">Raposo Tavares - Km 12,5</option>');
                    $('#opcao-via-1').append('<option value="http://www.der.sp.gov.br/img_cameras/name8.jpg">Raposo Tavares - Km 17</option>');
                    $('#opcao-via-1').append('<option value="http://www.der.sp.gov.br/img_cameras/name30.jpg">Raposo Tavares - Km 20</option>');

                    $('#opcao-via-1').show();
                    $('.pageload').hide();
                  }
                });
              }
              </script>  
             
              <!-- BOX PUBLICIDADE -->
              <div class="box-publicidade grid1">
                <!-- cmais-homepage-300x250-2 -->
                <script type='text/javascript'>
                GA_googleFillSlot("cmais-homepage-300x250-2");
                </script>
              </div>
              <!-- / BOX PUBLICIDADE -->
  
              <script>
              $(document).ready(function(){
                
                $('.btn-cameras-ao-vivo').click(function(){
                  $('.conteudo-mapa-sao-paulo').hide();
                  $('.conteudo-portal-de-videos').hide();
                  $('.conteudo-camera-ao-vivo').fadeIn('slow');
                  $('.btn-mapa-sao-paulo, .btn-portal-de-videos').removeClass('ativo');
                  $(this).addClass('ativo');
                }); 
                
                $('.btn-mapa-sao-paulo').click(function(){
                  $('.conteudo-camera-ao-vivo').hide();
                  $('.conteudo-portal-de-videos').hide();
                  $('.conteudo-mapa-sao-paulo').fadeIn('slow');
                  $('.btn-cameras-ao-vivo, .btn-portal-de-videos').removeClass('ativo');
                  $(this).addClass('ativo');
                });  
                
                $('.btn-portal-de-videos').click(function(){
                  $('.conteudo-camera-ao-vivo').hide();
                  $('.conteudo-mapa-sao-paulo').hide();
                  $('.conteudo-portal-de-videos').fadeIn('slow');
                  $('.btn-cameras-ao-vivo, .btn-mapa-sao-paulo').removeClass('ativo');
                  $(this).addClass('ativo');
                });
                
                if(document.location.hash != ""){
                  $('.conteudo-camera-ao-vivo').hide();
                  $('.conteudo-mapa-sao-paulo').hide();
                  $('.conteudo-portal-de-videos').fadeIn('slow');
                  $('.btn-cameras-ao-vivo, .btn-mapa-sao-paulo').removeClass('ativo');
                  $(this).addClass('ativo');
                }
                
              });
              </script>
              <!-- MENU E OPÇÕES-->                          
              <div class="mapa-sao-paulo grid3">
                   
                   <a href="telas"></a> 
                   <ul class="abas-menu abas">
                      <li class="neutro">
                        <p>escolha</p>
                        <span></span>
                      </li>
                      
                      <!--CAMERAS AO VIVO -->
                      <li class="btn-cameras-ao-vivo btn-li ativo">
                        <a href="#telas" title="Câmeras ao vivo" class="m_cameras_ao_vivo btn-menu">Câmeras ao vivo</a>
                        <span class="decoracao"></span>
                      </li>
                      <!--CAMERAS AO VIVO -->
                      <li class="btn-mapa-sao-paulo  btn-li ">
                        <a href="#telas" title="Mapa de São Paulo" class="m_mapa_sao_paulo btn-menu">Mapa de São Paulo</a>
                        <span class="decoracao"></span>
                      </li>
                      <li class="btn-portal-de-videos  btn-li ">
                        <a href="#telas" title="Portal de vídeo" class="m_portal_de_video btn-menu">Portal de vídeo</a>
                        <span class="decoracao"></span>
                      </li>
                  </ul>
                  
                  <!--CONTEUDOS -->
                  <ul class="conteudos" style="height: 730px;">
                    
                     <!--CAMERA AO VIVO-->
                     <li class="conteudo-camera-ao-vivo" >
                       
                       <!--Mapa-->
                       <div id="rodovias">
                         
                          <div id="legendas-ruas"></div>
                          
                          <div style="display: block;z-index: 1000;color: black;position: absolute;top: 5px;left: 640px;">Fonte: CET</div>
                          
                          <!--topo mapa-->
                          <div class="topo-mapa">
                              <p>
                                Informação atualizada em <span><?php echo $transitoagora->data; ?></span> às <span><?php echo $transitoagora->hora; ?></span><br/>
                                <span><?php echo $transitoagora->lentidaocidade; ?> km</span> ou <span><?php echo $transitoagora->percentcidade; ?>%</span> dos <span><?php echo $transitoagora->monitorados; ?> km</span> monitorados no<br/> 
                                momento apresentam lentidão.
                              </p>  
                          </div>
                          <!--topo mapa-->
                          
                          <!--lateral mapa-->
                           <div id="mapa-sp-legenda"> 
                              <!--legendas-->
                              <ul>
                                <?php foreach($transitoagora->regiao as $k=>$r): ?>
                                <li class="<?php echo strtolower($r->Attributes()->ID); ?>">
                                  <h4><?php echo $r->Attributes()->ID; ?></h4>
                                  <p>Lentidão: <?php echo $r->lentidao; ?> Km (<?php echo $r->percent; ?>%)</p>
                                  <span class="<?php echo strtolower($r->tendencia) ?> setatamanho"></span>  
                                  <span class="seta pos-<?php echo strtolower($r->Attributes()->ID); ?>"></span>  
                                </li>
                                <?php endforeach; ?>
                              </ul>
                              
                               
                              <!--/legendas-->
                              
                              <!--botoes/modais-->
                              <!--a class="pos01" href="#dialogEixo"  name="modal"title="Tendência por Eixo">Tendência por Eixo</a-->
                              <a class="pos02" href="#dialogCorre" name="modal" title="Lentidão dos Corredores">Lentidão dos Corredores</a>                              
                              <!--/botoes/modais-->
                              
                              </div>    
                              <!--/lateral mapa-->
                              
                              <!--/cameras mapa-->
                           <div id="cameras">
                             <!-- <a href="#dialogLapa" name="modal" id="camera01" class="fundo pos01" title="Viaduto Nossa Senhora da Lapa"></a> -->
                             <a href="#dialogLapa" name="modal" id="camera01" class="fundo pos01" title="Marginal Tietê"></a>
                             <!--a href="#dialog" name="modal" id="camera02" class="fundo pos02" title="Avenida Sumare/ Dr Arnaldo"></a-->
                             <a href="#dialogBelenzinho" name="modal" id="camera03" class="fundo pos03" title="Radial Leste X Salim Farah Maluf"></a>
                             <a href="#dialogRadial" name="modal" id="camera04" class="fundo pos04" title="Radial Leste"></a>
                             <a href="#dialogTiradentes" name="modal" id="camera05" class="fundo pos05" title="Avenida Tiradentes"></a>
                             <!--a href="#dialog" name="modal" id="camera06" class="fundo pos06" title="Rubem Beta / 23 de Maio"></a-->
                             <!--a href="#dialog" name="modal" id="camera07" class="fundo pos07" title="Bandeirantes"></a-->
                             <a href="#dialogMarginalPinheiros" name="modal" id="camera08" class="fundo pos08" title="Marginal Pinheiros - Jockey Club"></a>
                             <a href="#dialogMarginalPinheiros2" name="modal" id="camera09" class="fundo pos09" title="Marginal Pinheiros - Est. Pinheiros"></a>
                             <a href="#dialogSantana" name="modal" id="camera10" class="fundo pos10" title="SESC Santana"></a>
                             
                             <a href="#dialogaSenna" name="modal" id="camera11" class="fundo pos11" title="Ayrton Senna"></a>
                             <a href="#dialogaImigrantes" name="modal" id="camera12" class="fundo pos12" title="Imigrantes"></a>
                             <a href="#dialogaAnchieta" name="modal" id="camera13" class="fundo pos13" title="Anchieta"></a>
                             <!-- <a href="#dialogaMarginalTiete" name="modal" id="camera14" class="fundo pos14" title="Marginal Tietê"></a> -->
                             <a href="#dialogaAnhanguera" name="modal" id="camera15" class="fundo pos15" title="Anhanguera"></a>
                             <a href="#dialogaBandeirantes" name="modal" id="camera16" class="fundo pos16" title="Bandeirantes"></a>
                             <a href="#dialogaRaposo" name="modal" id="camera17" class="fundo pos17" title="Raposo Tavares"></a>
                             <a href="#dialogPompeia" name="modal" id="camera18" class="fundo pos18" title="Avenida Pompéia"></a>
                           </div>
                           <!--/cameras mapa-->
                           <!--MODAIS-->
                           <script>
                           $(document).ready(function() { 

                  $('a[name=modal]').click(function(e) {
                    e.preventDefault();
                    
                    var id = $(this).attr('href');

                    var maskHeight = $(document).height();
                    var maskWidth = $(window).width();
                  
                    $('#mask').css({'width':maskWidth,'height':maskHeight});
                
                    $('#mask').fadeIn("slow");  
                    $('#mask').fadeTo("slow",0.8);  
                  
                    //Get the window height and width
                    var winH = $(window).height();
                    var winW = $(window).width();
                              
                    $(id).css('top',  winH/2-$(id).height()/2);
                    $(id).css('left', winW/2-$(id).width()/2);
                  
                    $(id).fadeIn(1000); 
                  
                  });
                  
                  $('.window .close').click(function (e) {
                    e.preventDefault();
                    
                    $('#mask').hide();
                    $('.window').hide();
                  });   
                  
                  $('#mask').click(function () {
                    $(this).hide();
                    $('.window').hide();
                  });     
                  
                });
                
                </script>
                
                <!--MODAl CAMERA verde-->
                <div class="verde">
                  <div id="dialogLapa" class="window">
                    <a href="#" class="close"></a><br />
                    <div class="textoModal">
                      <embed id="mpl" width="310" height="240" flashvars="controlbar=over&autostart=true&streamer=rtmp://200.136.27.12/live&file=camera&type=video" wmode="transparent" allowfullscreen="true" allowscriptaccess="always" quality="high" name="mpl" style="undefined" src="http://www.cmais.com.br/portal/js/mediaplayer/player.swf" type="application/x-shockwave-flash">
                      <h4>Marginal Tietê</h4>  
                      <p></p>
                    </div>
                  </div>
                  <!-- Máscara para cobrir a tela -->
                    <div id="mask"></div>
                 </div>
                 <!--/MODAl CAMERA verde-->

                <!--MODAl CAMERA verde-->
                <div class="verde">
                  <div id="dialogTiradentes" class="window">
                    <a href="#" class="close"></a><br />
                    <div class="textoModal">
                      <img src="http://200.136.27.15/cameras/img_tiradentes.php" alt="Avenida Tiradentes">
                      <h4>Avenida Tiradentes</h4>  
                      <p></p>
                    </div>
                  </div>
                  <!-- Máscara para cobrir a tela -->
                  <div id="mask"></div>
                 </div>
                 <!--/MODAl CAMERA verde-->

                <!--MODAl CAMERA verde-->
                <div class="verde">
                  <div id="dialogMarginalPinheiros" class="window">
                    <a href="#" class="close"></a><br />
                    <div class="textoModal">
                      <img src="http://200.136.27.15/cameras/img_pinheironeto.php" alt="Marginal Pinheiros - Jockey Club">
                      <h4>Marginal Pinheiros - Jockey Club</h4>
                      <p></p>
                    </div>
                  </div>
                  <!-- Máscara para cobrir a tela -->
                  <div id="mask"></div>
                 </div>
                 <!--/MODAl CAMERA verde-->
                 
                 <!--MODAl CAMERA verde-->
                <div class="verde">
                  <div id="dialogRadial" class="window">
                    <a href="#" class="close"></a><br />
                    <div class="textoModal">
                      <img src="http://200.136.27.15/cameras/img_radial.php" alt="Radial Leste - Metrô Tatuapé">
                      <h4>Radial Leste - Metrô Tatuapé</h4>
                      <p></p>
                    </div>
                  </div>
                  <!-- Máscara para cobrir a tela -->
                  <div id="mask"></div>
                 </div>
                 <!--/MODAl CAMERA verde-->
                 
                 <!--MODAl CAMERA verde-->
                <div class="verde">
                  <div id="dialogPompeia" class="window">
                    <a href="#" class="close"></a><br />
                    <div class="textoModal">
                      <img src="http://200.136.27.15/cameras/img_pompeia.php" alt="Avenida Pompéia">
                      <h4>Avenida Pompéia</h4>
                      <p></p>
                    </div>
                  </div>
                  <!-- Máscara para cobrir a tela -->
                  <div id="mask"></div>
                 </div>
                 <!--/MODAl CAMERA verde-->

                <!--MODAl CAMERA verde-->
                <div class="verde">
                  <div id="dialogMarginalPinheiros2" class="window">
                    <a href="#" class="close"></a><br />
                    <div class="textoModal">
                      <img src="http://200.136.27.15/cameras/img_somar.php" alt="Marginal Pinheiros - Est. Pinheiros">
                      <h4>Marginal Pinheiros - Est. Pinheiros</h4>
                      <p></p>
                    </div>
                  </div>
                  <!-- Máscara para cobrir a tela -->
                  <div id="mask"></div>
                 </div>
                 <!--/MODAl CAMERA verde-->
                 
                <!--MODAl CAMERA verde-->
                <div class="verde">
                  <div id="dialogMarginalTiete" class="window">
                    <a href="#" class="close"></a><br />
                    <div class="textoModal">
                      <?php echo $imgMarginalTiete; ?>
                      <h4>Marginal Tietê</h4>
                      <p></p>
                    </div>
                  </div>
                  <!-- Máscara para cobrir a tela -->
                  <div id="mask"></div>
                 </div>
                 <!--/MODAl CAMERA verde-->
                 
                <!--MODAl CAMERA verde-->
                <div class="verde">
                  <div id="dialogBelenzinho" class="window">
                    <a href="#" class="close"></a><br />
                    <div class="textoModal">
                      <img src="http://200.136.27.15/cameras/img_belenzinho.php" alt="Belenzinho">
                      <h4>Radial Leste X Salim Farah Maluf</h4>  
                      <p></p>
                    </div>
                  </div>
                  <!-- Máscara para cobrir a tela -->
                  <div id="mask"></div>
                 </div>
                 <!--/MODAl CAMERA verde-->
                 
                <!--MODAl CAMERA verde-->
                <div class="verde">
                  <div id="dialogSantana" class="window">
                    <a href="#" class="close"></a><br />
                    <div class="textoModal">
                      <img src="http://200.136.27.15/cameras/img_santana.php"  alt="SESC Santana">
                      <h4>Avenida Dummont Villares</h4>  
                      <p></p>
                    </div>
                  </div>
                  <!-- Máscara para cobrir a tela -->
                  <div id="mask"></div>
                 </div>
                 <!--/MODAl CAMERA verde-->
                         
                <!--MODAl CAMERA azul-->
                <div class="azul">
                  <div id="dialogaSenna" class="window">
                    <a href="#" class="close"></a><br />
                    <div class="textoModal">
                      <img style="width: 310px; height: 240px;" alt="Ayrton Senna" src="/portal/images/capaPrograma/transito/transparent_loading.gif" id="img-ayrtonsenna">
                      <h4>Ayrton Senna</h4>
                      <form id="opcoes-ayrton-senna" action="" method="post" style="float: left;">
                        <select id="ayrton-senna" class="required">
                        </select>
                      </form> 
                      <div class="pageload" style="float: left; margin-top: 6px;"><img src="/portal/images/capaPrograma/transito/transparent_loading.gif" alt="carregando..." /></div>
                    </div>
                  </div>
                  <!-- Máscara para cobrir a tela -->
                  <div id="mask"></div>
                </div> 
                <!--/MODAl CAMERA azul-->

                <!--MODAl CAMERA azul-->
                <div class="azul">
                  <div id="dialogaImigrantes" class="window" style="top: 195px">
                    <a href="#" class="close"></a><br />
                    <div class="textoModal">
                      <img style="width: 310px; height: 240px;" alt="Imigrantes" src="/portal/images/capaPrograma/transito/transparent_loading.gif" id="img-imigrantes">
                      <h4>Imigrantes</h4>
                      <form id="opcoes-imigrantes" action="" method="post" style="float: left;">
                        <select id="imigrantes" class="required">
                        </select>
                      </form> 
                      <div class="pageload" style="float: left; margin-top: 6px;"><img src="/portal/images/capaPrograma/transito/transparent_loading.gif" alt="carregando..." /></div>
                    </div>
                  </div>
                  <!-- Máscara para cobrir a tela -->
                  <div id="mask"></div>
                </div> 
                <!--/MODAl CAMERA azul-->

                <!--MODAl CAMERA azul-->
                <div class="azul">
                  <div id="dialogaAnchieta" class="window" style="top: 310px; left: 240px">
                    <a href="#" class="close"></a><br />
                    <div class="textoModal">
                      <img style="width: 310px; height: 240px;" alt="Anchieta" src="/portal/images/capaPrograma/transito/transparent_loading.gif" id="img-anchieta">
                      <h4>Anchieta</h4>
                      <form id="opcoes-anchieta" action="" method="post" style="float: left;">
                        <select id="anchieta" class="required">
                        </select>
                      </form> 
                      <div class="pageload" style="float: left; margin-top: 6px;"><img src="/portal/images/capaPrograma/transito/transparent_loading.gif" alt="carregando..." /></div>
                    </div>
                  </div>
                  <!-- Máscara para cobrir a tela -->
                  <div id="mask"></div>
                </div> 
                <!--/MODAl CAMERA azul-->

                <!--MODAl CAMERA azul-->
                <div class="azul">
                  <div id="dialogaBandeirantes" class="window" style="top: 80px; left: 240px">
                    <a href="#" class="close"></a><br />
                    <div class="textoModal">
                      <img style="width: 310px; height: 240px;" alt="Bandeirantes" src="http://200.246.17.101/cameras/cam01.jpg" id="img-bandeirantes">
                      <h4>Bandeirantes</h4>
                      <form id="opcoes-bandeirantes" action="" method="post">
                        <select id="bandeirantes" class="required">
                          <option value="http://200.246.17.101/cameras/cam01.jpg" selected="selected">Bandeirantes - Km 13</option>
                          <option value="http://200.246.17.101/cameras/cam02.jpg">Bandeirantes - Km 21</option>
                          <option value="http://200.246.17.101/cameras/cam03.jpg">Bandeirantes - Km 27</option>
                          <option value="http://200.246.17.101/cameras/cam05.jpg">Bandeirantes - Km 38</option>
                          <option value="http://200.246.17.101/cameras/cam07.jpg">Bandeirantes - Km 47</option>
                        </select>
                      </form> 
                    </div>
                  </div>
                  <!-- Máscara para cobrir a tela -->
                  <div id="mask"></div>
                </div> 
                <!--/MODAl CAMERA azul-->

                <!--MODAl CAMERA azul-->
                <div class="azul">
                  <div id="dialogaAnhanguera" class="window" style="top: 80px; left: 240px">
                    <a href="#" class="close"></a><br />
                    <div class="textoModal">
                      <img style="width: 310px; height: 240px;" alt="Anhanguera" src="http://200.246.17.101/cameras/cam18.jpg" id="img-anhanguera">
                      <h4>Anhanguera</h4>
                      <form id="opcoes-anhanguera" action="" method="post">
                        <select id="anhanguera" class="required">
                          <option value="http://200.246.17.101/cameras/cam18.jpg" selected="selected">Anhanguera - Km 13</option>
                          <option value="http://200.246.17.101/cameras/cam20.jpg">Anhanguera - Km 22</option>
                          <option value="http://200.246.17.101/cameras/cam21.jpg">Anhanguera - Km 26</option>
                          <option value="http://200.246.17.101/cameras/cam23.jpg">Anhanguera - Km 52</option>
                        </select>
                      </form> 
                    </div>
                  </div>
                  <!-- Máscara para cobrir a tela -->
                  <div id="mask"></div>
                </div> 
                <!--/MODAl CAMERA azul-->

                <!--MODAl CAMERA azul-->
                <div class="azul">
                  <div id="dialogaRaposo" class="window" style="top: 80px; left: 240px">
                    <a href="#" class="close"></a><br />
                    <div class="textoModal">
                      <img style="width: 310px; height: 240px;" alt="Raposo Tavares" src="http://www.der.sp.gov.br/img_cameras/name25.jpg" id="img-raposo">
                      <h4>Raposo Tavares</h4>
                      <form id="opcoes-raposo" action="" method="post">
                        <select id="raposo" class="required">
                          <option value="http://www.der.sp.gov.br/img_cameras/name25.jpg" selected="selected">Raposo Tavares - Km 12,5</option>
                          <option value="http://www.der.sp.gov.br/img_cameras/name8.jpg">Raposo Tavares - Km 17</option>
                          <option value="http://www.der.sp.gov.br/img_cameras/name30.jpg">Raposo Tavares - Km 20</option>
                        </select>
                      </form> 
                    </div>
                  </div>
                  <!-- Máscara para cobrir a tela -->
                  <div id="mask"></div>
                </div> 
                <!--/MODAl CAMERA azul-->

                <?php /*
                <!--MODAl CAMERA Eixo-->
                <div id="eixo">
                  <div id="dialogEixo" class="window">
                    <a href="#" class="close"></a><br />
                    <div class="textoModal" align="center">
                      <h4>Lentidão nos principais eixos</h4> 
                        <div id="topo-table">
                          <ul>
                            <li>Na cidade às  <span>15h53<span></li>
                            <li>Lentidão:  <span>3,2%<span></li>
                            <li>Tendência:  <span>3,2%</span></li>
                          </ul>
                        </div>  
                        <table width="674" border="0" cellpadding="1" cellspacing="1">
                          <tr class="table-head">
                            <td class="sbesquerda sbtopo" width="170">EIXO</td>
                            <td class="sbtopo" width="140">SENTIDO</td>
                            <td class="sbtopo" width="90">LENTIDÃO<br/>(km)</td>
                            <td class="sbtopo" width="140">%EM RELAÇÃO <br/>À LENTIDÃO<br/>DA CIDADE</td>
                            <td class="sbtopo sbdireita" width="120">TENDÊNCIA</td>
                          </tr>
                          <tr class="table-cor1">
                            <td class="sbesquerda table-av" rowspan="2">1 - Marginal Tiête</td>
                            <td>A.Senna/Castelo<br></td>
                            <td>18.5</td>
                            <td>28,3% </td>
                            <td class="sbdireita"><img src="/portal/images/capaPrograma/transito/mapa-sao-paulo-seta-verde.png"></td>
                          </tr>
                          <tr class="table-cor2">
                            <td >Castelo/A.Senna</td>
                            <td>22.6</td>
                            <td>2,3%</td>
                            <td class="sbdireita"><img src="/portal/images/capaPrograma/transito/mapa-sao-paulo-seta-verde.png"></td>
                          </tr>
                          <tr class="table-cor1">
                            <td  class="sbesquerda table-av" rowspan="2">2 - Marginal Pinheiros</td>
                            <td>Castelo/Interlagos</td>
                            <td>18.5</td>
                            <td>28,3%</td>
                            <td class="sbdireita"><img src="/portal/images/capaPrograma/transito/mapa-sao-paulo-seta-cinza.png"></td>
                          </tr>
                          <tr class="table-cor2">
                            <td>Interlagos/Castelo</td>
                            <td>22.6</td>
                            <td>2,3%</td>
                            <td class="sbdireita"><img src="/portal/images/capaPrograma/transito/mapa-sao-paulo-seta-cinza.png"></td>
                          </tr>
                          <tr  class="table-cor1">
                            <td class="sbesquerda table-av" rowspan="2">3 - Bandeirantes</td>
                            <td>Imigrantes/Marginal</td>
                            <td>18.5</td>
                            <td>28,3%</td>
                            <td class="sbdireita"><img src="/portal/images/capaPrograma/transito/mapa-sao-paulo-seta-verde.png"></td>
                          </tr>
                          <tr class="table-cor2">
                            <td>Marginal/Imigrantes</td>
                            <td>22.6</td>
                            <td>2,3%</td>
                            <td class="sbdireita"><img src="/portal/images/capaPrograma/transito/mapa-sao-paulo-seta-verm.png"></td>
                          </tr>
                          <tr  class="table-cor1">
                            <td class="sbesquerda table-av" rowspan="2">4 - Eixo Norte-Sul</td>
                            <td>Aeroporto/Santana</td>
                            <td>18.5</td>
                            <td>28,3%</td>
                            <td class="sbdireita"><img src="/portal/images/capaPrograma/transito/mapa-sao-paulo-seta-cinza.png"></td>
                          </tr>
                          <tr class="table-cor2">
                            <td>Santana/Aeroporto</td>
                            <td>22.6</td>
                            <td>2,3%</td>
                            <td class="sbdireita"><img src="/portal/images/capaPrograma/transito/mapa-sao-paulo-seta-verde.png"></td>
                          </tr>
                          <tr  class="table-cor1">
                            <td class="sbesquerda sbembaixo table-av" rowspan="2">5 - Eixo Leste-Oeste</td>
                            <td>Lapa/Penha</td>
                            <td>18.5</td>
                            <td>28,3%</td>
                            <td class="sbdireita"><img src="/portal/images/capaPrograma/transito/mapa-sao-paulo-seta-verm.png"></td>
                          </tr>
                          <tr  class="table-cor2">
                            <td class="sbembaixo">Penha/Lapa</td>
                            <td class="sbembaixo">22.6</td>
                            <td class="sbembaixo">2,3%</td>
                            <td class="sbembaixo sbdireita"><img src="/portal/images/capaPrograma/transito/mapa-sao-paulo-seta-cinza.png"></td>
                          </tr>
                        </table> 
                      
                    </div>
                  </div>
                  
                  <!-- Máscara para cobrir a tela -->
                    <div id="mask"></div>
                 
                 </div>
                           <!--/MODAl CAMERA Eixo-->
                  */ ?>                         
                
                <!--MODAl CAMERA corre-->
                <div id="corre">

                  <div id="dialogCorre" class="window">
                    <a href="#" class="close"></a><br />
                    <div class="textoModal" align="center">
                      <h4>Lentidão nos corredores</h4> 
                        <div id="topo-table">
                          <ul>
                            <li>Na cidade às  <span><?php echo $transitoagora->lentidaocidade; ?><span></li>
                            <li>Lentidão:  <span><?php echo $transitoagora->percentcidade; ?><span></li>
                            <li>Tendência:  <span><?php echo $transitoagora->tendenciacidade; ?></span></li>
                          </ul>
                        </div>  
                        <table width="674" class"mtop20" cellpadding="1" cellspacing="1">
                          <tr class="table-head">
                            <td class="sbtopo sbesquerda" width="120">CORREDOR</td>
                            <td class="sbtopo" width="98">SENTIDO</td>
                            <td class="sbtopo" width="117">VIA</td>
                            <td class="sbtopo sbdireita" width="113">LENTIDÃO (km)</td>
                          </tr>
                         </table>
                         <div class="table-modal ">
                             <table width="658" class="mbottom20" border="0" cellpadding="1" cellspacing="1">
                              <?php if(isset($corredores)) { foreach($corredores->corredor as $c): ?> 
                              <tr>
                                <td width="141" class="sbesquerda"><?php echo $c->Attributes()->ID; ?></td>
                                <td width="99"><?php echo $c->sentido; ?></td>
                                <td width="138"><?php echo $c->via; ?></td>
                                <td width="119"class="sbdireita"><?php echo $c->lentidao/1000; ?></td>
                              </tr>
                              <?php endforeach; } ?>
                            </table> 
                        </div>
                      
                      
                    </div>
                  </div>
                  
                  <!-- Máscara para cobrir a tela -->
                    <div id="mask"></div>
                 
                 </div>
                           <!--/MODAl CAMERA Corre-->                          <!--/MODAIS--> 
                          
                       </div>
                       <!--Mapa-->
                       
                       
                     </li>
                     <!--CAMERA AO VIVO--> 
                     
                     <!--MAPA SAO PAULO-->
                     <li class="conteudo-mapa-sao-paulo" style="display:none">
                       
                        
    <script type="text/javascript" src="http://static.maplink.com.br/assets/cache/0000000000a0c1f15a954de877613d63a4a01ff8d0.js" charset="UTF-8"></script>
    <script type="text/javascript" src="http://static.maplink.com.br/assets/cache/13317494184d0792756e91c53dac11eff6f9660f59.js" charset="UTF-8"></script>
    <link type="text/css" rel="stylesheet" href="http://static.maplink.com.br/assets/cache/1331749418e3202aea761d3d587dfcfc43c6982565.css" media="screen" />
  <style type="text/css">
  body {margin:0; padding:0;}
  
  .infowindow{
    z-index:99999;
  }
  .controle_mapa{
    font-size:11px;
    margin:10px 0 0 15px; 
    border:solid 2px #AAAAAA;
    position:absolute;
    top:36px;
    left:48px;
    z-index:100;
    -webkit-border-radius: 5px;
    -webkit-box-shadow: 0 0px 4px  #999999; 
    -moz-border-radius: 5px;
    -moz-box-shadow:0 0 4px #999999; 
    border-radius:5px;
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffff', endColorstr='#EDEDED'); /* for IE */
    background: -webkit-gradient(linear, left top, left bottom, from(#ffffff), to(#EDEDED)); /* for webkit browsers */
    background: -moz-linear-gradient(top,  #ffffff,  #EDEDED); /* for firefox 3.6+ */
    box-shadow: 0 0px 4px #999999;
    opacity:0.90;
    -moz-opacity: 0.90;
  }
  .resumo_transito{display:none;}
  .tempos_trajeto{display:block;}
  
  .resumo_transito .info { border-top:solid 1px #ffffff; border-bottom:solid 1px #DDDDDD; padding:10px;}
  .tempos_trajeto .info { padding:10px; font-size:11px; color:#666666;}
  
  .resumo_transito .legenda { border-top:solid 1px #ffffff; padding:10px; font-size:11px; color:#666666;}
  .tempos_trajeto .legenda { border-top:solid 1px #DDDDDD; padding:10px; font-size:11px; color:#666666;}
  
  .tablewrapper{max-height:200px;overflow:auto;}
  .tempos_trajeto .info{padding: 10px 10px 0;}
  
  h1{
    font-size:16px;
    line-height:30px;
    font-weight:bold;
    color: #4D4D4D;
    border-bottom: solid 1px #DDD;
    padding-left: 7px;
    display: block;
    overflow: hidden;
    margin-bottom:0;
  }
  
  
  
  .style1 {background-color:#ffffff;font-weight:bold;border:2px #006699 solid;}
  .selecao{border-bottom:solid 1px #DDDDDD;padding:10px;}
  .clear {clear:both;}
  table.corredores{
    display:block;
    margin-bottom:0;
  }
  table.corredores tr td{
    padding:7px 7px 6px;
    font-size:11px;
  }
  table.corredores tr:nth-child(odd){background:#fff;}
  table.corredores thead td{
    font-weight:bold;
    color:#333;
  }
  #trechos{display:none;}
  .marker_special_route{
    background:transparent url(http://static.maplink.com.br/assets/image/transitoonline/clockbg.png) 50% 50% no-repeat;
    display:block;
    font-size:18px;
    line-height:36px;
    height:32px;
    width:32px;
    font-weight:bold;
    color:#222;
    text-shadow: #fff 0 1px 0;
    text-align:center;
    letter-spacing:-1px;
    margin-left: -14px;
      margin-top: -15px;
      opacity:0.80;
    -moz-opacity: 0.80;
      
  }
  table tr td.alignright{
    text-align:right;
  }
  
  table tr td.aligncenter{
    text-align:center;
  }
  h1,div.selecao{
    cursor:pointer;
  }
  .expandir{
    text-align:right;
    margin-left:10px;
  }
  
  a:hover{
    text-decoration:none;
  }
  .legendacores{padding:5px 10px;}
  .legendapontos{padding:5px;font-size:12px;}
  .legendapontos img{margin:0 5px;vertical-align:-4px;}
  #share{
  padding:10px 0 0;
  margin:0;
  float:right;
  }
  .topbar {
    height: 40px;
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    z-index: 10000;
    overflow: visible;
  }
  </style>

  <script>
  window.onload = function () {
    init();
  }
  </script>  
  
  <div id="map_canvas" style="width:100%;margin-top:0px;"></div>
  
    
    <div class="controle_mapa">
      <div class="selecao">Ver: 
        <select name="" id="selecao_controle" >
        <option value="resumo"  >Resumo da cidade</option>
        <option value="rotas" selected="selected" >Tempos de trajeto</option>
      </select>
      <span class="expandir" id="toggle_button">esconder</span>
    </div>
    <div class="infowrapper">
      <!-- Div do resumo de trânsito -->
        <div id="resumo_transito" class="resumo_transito">
          <h1><span id="name_city"></span></h1> 
            <div class="info"> 
              <p><span class="label verde">&nbsp;&nbsp;&nbsp;</span>&nbsp;<strong>Livre:</strong> <span id="trans_livre"></span> Km</p> 
              <p><span class="label amarelo">&nbsp;&nbsp;&nbsp;</span>&nbsp;<strong>Fluindo:</strong> <span id="trans_fluindo"></span> Km</p> 
              <p><span class="label laranja">&nbsp;&nbsp;&nbsp;</span>&nbsp;<strong>Fluxo Intenso:</strong> <span id="trans_intenso"></span> Km</p> 
              <p><span class="label vermelho">&nbsp;&nbsp;&nbsp;</span>&nbsp;<strong>Lento:</strong> <span id="trans_lento"></span> Km</p> 
              <p><span class="total"><strong>Lento+Intenso:</strong> <span id="trans_total"></span> km</span></p>
              <p><span class="totalmonitorado">Total Monitorado: <span id="total_monitorado"></span> km</span></p>
          </div>
          <div class="legenda">*Atualizado em: <span id="trans_datetime"></span></div> 
        </div>
      <!-- Div do resumo de trânsito -->
      <!-- Div do tempos de trajeto -->
      <div id="tempos_trajeto" class="tempos_trajeto">
        <h1>TvCultura</h1> 
            <div class="info">
          <p>Escolha:
            <select name="" id="selecao_trajeto" style="width:315px;">
              <option value="default" selected="selected">Selecione</option>
                            <option value="249" id="50">Aeroporto Congonhas sentido Cumbica</option>
                            <option value="250" id="51">Aeroporto Cumbica sentido Congonhas </option>
                            <option value="293" id="123">Av. Aricanduva sentido Pq. do Carmo</option>
                            <option value="291" id="121">Av. Aricanduva sentido Radial Leste</option>
                            <option value="292" id="122">Av. Aricanduva sentido Radial Leste (alternativa)</option>
                            <option value="302" id="132">Av. Brasil sentido Av. Brig. Luís Antônio (Av. Rebouças > Av. Brig. Luís Antônio)</option>
                            <option value="303" id="133">Av. Brasil sentido Av. Brig. Luís Antônio (Av. Rebouças > Av. Brig. Luís Antônio) (alternativa)</option>
                            <option value="304" id="134">Av. Brasil sentido Av. Rebouças (Av. Brig. Luís Antônio > Av. Rebouças)</option>
                            <option value="305" id="135">Av. Brasil sentido Av. Rebouças (Av. Brig. Luís Antônio > Av. Rebouças) (alternativa)</option>
                            <option value="325" id="155">Av. D. Pedro I sentido Av. do Estado</option>
                            <option value="326" id="156">Av. D. Pedro I sentido Av. do Estado (alternativa)</option>
                            <option value="328" id="158">Av. D. Pedro I sentido Av. Dr. Ricardo Jafet</option>
                            <option value="327" id="157">Av. D. Pedro I sentido Av. Dr. Ricardo Jafet (alternativa)</option>
                            <option value="281" id="111">Av. dos Bandeirantes sentido Imigrantes (Marginal Pinheiros > Washington Luis)</option>
                            <option value="280" id="110">Av. dos Bandeirantes sentido Imigrantes (Marginal Pinheiros > Washington Luis) (alternativa)</option>
                            <option value="313" id="143">Av. dos Bandeirantes sentido Marginal (Vd. Ministro Aliomar Baleeiro > Av. Moreira Guimarães)</option>
                            <option value="314" id="144">Av. dos Bandeirantes sentido Marginal (Vd. Ministro Aliomar Baleeiro > Av. Moreira Guimarães) (alternativa)</option>
                            <option value="283" id="113">Av. dos Bandeirantes sentido Marginal (Washington Luis > Marginal Pinheiros)</option>
                            <option value="282" id="112">Av. dos Bandeirantes sentido Marginal (Washington Luis > Marginal Pinheiros) (alternativa)</option>
                            <option value="336" id="166">Av. Dr. Arnaldo sentido Av. Rebouças (Av. Sumaré > Av. Rebouças)</option>
                            <option value="337" id="167">Av. Dr. Arnaldo sentido Av. Rebouças (Av. Sumaré > Av. Rebouças) (alternativa)</option>
                            <option value="286" id="116">Av. Ibirapuera sentido Bairro (Av. Indianápolis > Av. dos Bandeirantes)</option>
                            <option value="287" id="117">Av. Ibirapuera sentido Bairro (Av. Indianápolis > Av. dos Bandeirantes) (alternativa)</option>
                            <option value="284" id="114">Av. Ibirapuera sentido Centro (Av. dos Bandeirantes > Av. Indianápolis)</option>
                            <option value="285" id="115">Av. Ibirapuera sentido Centro (Av. dos Bandeirantes > Av. Indianápolis) (alternativa)</option>
                            <option value="404" id="257">Av. Inajar de Souza sentido Bairro (Marginal do Tietê > Pç. Benedito Durval Pestana Barbosa)</option>
                            <option value="406" id="259">Av. Inajar de Souza sentido Bairro (Marginal do Tietê > Pç. Benedito Durval Pestana Barbosa) (alternativa)</option>
                            <option value="403" id="256">Av. Inajar de Souza sentido Marginal do Tietê (Pç. Benedito Durval Pestana Barbosa > Marginal do Tietê)</option>
                            <option value="405" id="258">Av. Inajar de Souza sentido Marginal do Tietê (Pç. Benedito Durval Pestana Barbosa > Marginal do Tietê) (alternativa)</option>
                            <option value="300" id="130">Av. Paulista sentido Consolação</option>
                            <option value="301" id="131">Av. Paulista sentido Consolação (alternativa)</option>
                            <option value="298" id="128">Av. Paulista sentido Paraiso</option>
                            <option value="299" id="129">Av. Paulista sentido Paraiso (alternativa)</option>
                            <option value="390" id="243">Av. Prof. Francisco Morato sentido Marginal do Pinheiros (Av. Dr. Ghilherme Dumont Vilares > R. Sapetuba)</option>
                            <option value="391" id="244">Av. Prof. Francisco Morato sentido Marginal do Pinheiros (Av. Dr. Ghilherme Dumont Vilares > R. Sapetuba) (alternativa)</option>
                            <option value="399" id="252">Av. Prof. Francisco Morato sentido Rodoanel (R. Sapetuba > Av. Dr. Ghilherme Dumont Vilares)</option>
                            <option value="400" id="253">Av. Prof. Francisco Morato sentido Rodoanel (R. Sapetuba > Av. Dr. Ghilherme Dumont Vilares) (alternativa)</option>
                            <option value="310" id="140">Av. Rebouças sentido Av. Dr. Arnaldo (Av. Brig. Faria Lima > R. Estados Unidos)</option>
                            <option value="311" id="141">Av. Rebouças sentido Av. Dr. Arnaldo (Av. Brig. Faria Lima > R. Estados Unidos) (alternativa)</option>
                            <option value="276" id="106">Av. Rebouças sentido Av. Dr. Arnaldo (Marginal do Pinheiros > Av. Dr. Arnaldo)</option>
                            <option value="277" id="107">Av. Rebouças sentido Av. Dr. Arnaldo (Marginal do Pinheiros > Av. Dr. Arnaldo) (alternativa)</option>
                            <option value="329" id="159">Av. Rebouças sentido Marginal Pinheiros (Av. Dr. Arnaldo > Av. Brig. Faria Lima)</option>
                            <option value="312" id="142">Av. Rebouças sentido Marginal Pinheiros (Av. Dr. Arnaldo > Av. Brig. Faria Lima) (alternativa)</option>
                            <option value="279" id="109">Av. Rebouças sentido Marginal Pinheiros (Av. Dr. Arnaldo > Marginal do Pinheiros)</option>
                            <option value="278" id="108">Av. Rebouças sentido Marginal Pinheiros (Av. Dr. Arnaldo > Marginal do Pinheiros) (alternativa)</option>
                            <option value="322" id="152">Av. Salim Farah Maluf sentido Av. Prof. Luís Ignácio de Anhaia Melo (Radial Leste > Av. Prof. Luís Ignácio de Anhaia Melo)</option>
                            <option value="323" id="153">Av. Salim Farah Maluf sentido Av. Prof. Luís Ignácio de Anhaia Melo (Radial Leste > Av. Prof. Luís Ignácio de Anhaia Melo) (alternativa)</option>
                            <option value="330" id="160">Av. Salim Farah Maluf sentido Radial Leste (Av. Prof. Luís Ignácio de Anhaia Melo > Radial Leste)</option>
                            <option value="324" id="154">Av. Salim Farah Maluf sentido Radial Leste (Av. Prof. Luís Ignácio de Anhaia Melo > Radial Leste) (alternativa)</option>
                            <option value="319" id="149">Av. Santo Amaro sentido Av. dos Bandeirantes (R. Alexandre Dumas > Av. dos Bandeirantes)</option>
                            <option value="320" id="150">Av. Santo Amaro sentido Av. dos Bandeirantes (R. Alexandre Dumas > Av. dos Bandeirantes) (alternativa)</option>
                            <option value="331" id="161">Av. Santo Amaro sentido R. Alexandre Dumas (Av. dos Bandeirantes > R. Alexandre Dumas)</option>
                            <option value="321" id="151">Av. Santo Amaro sentido R. Alexandre Dumas (Av. dos Bandeirantes > R. Alexandre Dumas) (alternativa)</option>
                            <option value="338" id="168">Av. Tiradentes sentido Centro</option>
                            <option value="339" id="169">Av. Tiradentes sentido Centro (alternativa)</option>
                            <option value="296" id="126">Corredor Norte-Sul sentido Norte (Av. dos Bandeirantes > Vd. Santa Generosa)</option>
                            <option value="334" id="164">Corredor Norte-Sul sentido Norte (Av. dos Bandeirantes > Vd. Santa Generosa) (alternativa)</option>
                            <option value="297" id="127">Corredor Norte-Sul sentido Norte (Vd. Santa Generosa > Pça. da Sé)</option>
                            <option value="335" id="165">Corredor Norte-Sul sentido Norte (Vd. Santa Generosa > Pça. da Sé) (alternativa)</option>
                            <option value="294" id="124">Corredor Norte-Sul sentido Sul (Pça. da Sé > Vd. Santa Generosa)</option>
                            <option value="332" id="162">Corredor Norte-Sul sentido Sul (Pça. da Sé > Vd. Santa Generosa) (alternativa)</option>
                            <option value="295" id="125">Corredor Norte-Sul sentido Sul (Vd. Santa Generosa > Av. dos Bandeirantes)</option>
                            <option value="333" id="163">Corredor Norte-Sul sentido Sul (Vd. Santa Generosa > Av. dos Bandeirantes) (alternativa)</option>
                            <option value="275" id="105">Marginal do Pinheiros sentido Interlagos (Pte. Cidade Jardim > Pte. João Dias)</option>
                            <option value="274" id="104">Marginal do Pinheiros sentido Interlagos (Pte. Cidade Jardim > Pte. João Dias) (alternativa)</option>
                            <option value="273" id="103">Marginal do Pinheiros sentido Rod. Pres. Castelo Branco (Pte. João Dias > Pte. Cidade Jardim)</option>
                            <option value="272" id="102">Marginal do Pinheiros sentido Rod. Pres. Castelo Branco (Pte. João Dias > Pte. Cidade Jardim) (alternativa)</option>
                            <option value="379" id="232">Marginal do Tietê sentido Marginal Pinheiros (Pte. do Piqueri > Pte. Cidade Universitária)</option>
                            <option value="380" id="233">Marginal do Tietê sentido Marginal Pinheiros (Pte. do Piqueri > Pte. Cidade Universitária) (alternativa)</option>
                            <option value="308" id="138">Marginal do Tietê sentido Rod. Ayrton Senna (Pte. Casa Verde > Pte. Tatuapé)</option>
                            <option value="309" id="139">Marginal do Tietê sentido Rod. Ayrton Senna (Pte. Casa Verde > Pte. Tatuapé) (alternativa)</option>
                            <option value="306" id="136">Marginal do Tietê sentido Rod. Ayrton Senna (Pte. do Piqueri > Pte. Gov. Orestes Quércia)</option>
                            <option value="307" id="137">Marginal do Tietê sentido Rod. Ayrton Senna (Pte. do Piqueri > Pte. Gov. Orestes Quércia) (alternativa)</option>
                            <option value="381" id="234">Marginal do Tietê sentido Rod. Ayrton Senna (Pte. dos Remédios > Vd. Imig. Nordestino)</option>
                            <option value="382" id="235">Marginal do Tietê sentido Rod. Castelo Branco (Vd. Imig. Nordestino > Pte. dos Remédios)</option>
                            <option value="341" id="170">Marginal do Tietê sentido Rod. Pres. Castelo Branco (Pte. Casa Verde > Pte. Piqueri)</option>
                            <option value="342" id="171">Marginal do Tietê sentido Rod. Pres. Castelo Branco (Pte. Casa Verde > Pte. Piqueri) (alternativa)</option>
                            <option value="271" id="101">Marginal do Tietê sentido Rod. Pres. Castelo Branco (Pte. Jânio Quadros > Pte. Casa Verde)</option>
                            <option value="270" id="100">Marginal do Tietê sentido Rod. Pres. Castelo Branco (Pte. Jânio Quadros > Pte. Casa Verde) (alternativa)</option>
                            <option value="205" id="1">Marginal Pinheiros sentido Interlagos (Rod. Castelo Branco > Pte. Transamérica)</option>
                            <option value="200" id="2">Marginal Pinheiros sentido Rod. Castelo Branco (Pte. Ary Torres > Pte. João Dias)</option>
                            <option value="290" id="120">Radial Leste sentido Bairro (Av. do Estado > Av. Salim Farah Maluf)</option>
                            <option value="315" id="145">Radial Leste sentido Bairro (R. da Figueira > Av. Aricanduva)</option>
                            <option value="316" id="146">Radial Leste sentido Bairro (R. da Figueira > Av. Aricanduva) (alternativa)</option>
                            <option value="289" id="119">Radial Leste sentido Centro (Av. Salim Farah Maluf > Av. do Estado)</option>
                            <option value="288" id="118">Radial Leste sentido Centro (Av. Salim Farah Maluf > Av. do Estado) (alternativa)</option>
                            <option value="317" id="147">Radial Leste sentido Centro (Vd. Cons. Carrão > Vd. Bresser)</option>
                            <option value="318" id="148">Radial Leste sentido Centro (Vd. Cons. Carrão > Vd. Bresser) (alternativa)</option>
                            <option value="396" id="249">Rod. Anchieta (SP 150) sentido Rodoanel (Av. Juntas Provisórias > Rodoanel)</option>
                            <option value="389" id="242">Rod. Anchieta (SP 150) sentido São Paulo (Rodoanel > Av. Juntas Provisórias)</option>
                            <option value="393" id="246">Rod. Anhanguera (SP 330) sentido Rodoanel (Marginal Tietê > Rodoanel)</option>
                            <option value="384" id="237">Rod. Anhanguera (SP 330) sentido São Paulo (Rodoanel > Marginal Pinheiros)</option>
                            <option value="392" id="245">Rod. dos Bandeirantes (SP 348) sentido Rodoanel (Marginal Tietê > Rodoanel)</option>
                            <option value="383" id="236">Rod. dos Bandeirantes (SP 348) sentido São Paulo (Rodoanel > Marginal Pinheiros)</option>
                            <option value="397" id="250">Rod. dos Imigrantes (SP 160) sentido Rodoanel (Av. Eliomar Baleeiro > Rodoanel)</option>
                            <option value="388" id="241">Rod. dos Imigrantes (SP 160) sentido São Paulo (Rodoanel > Av. Eliomar Baleeiro)</option>
                            <option value="402" id="255">Rod. Pres. Castelo Branco (SP 280) sentido Rodoanel (Marginal Pinheiros > Rodoanel) (Pista central)</option>
                            <option value="394" id="247">Rod. Pres. Castelo Branco (SP 280) sentido Rodoanel (Marginal Pinheiros > Rodoanel) (Pista Expressa)</option>
                            <option value="401" id="254">Rod. Pres. Castelo Branco (SP 280) sentido São Paulo (Rodoanel > Marginal Pinheiros) (Pista central)</option>
                            <option value="385" id="238">Rod. Pres. Castelo Branco (SP 280) sentido São Paulo (Rodoanel > Marginal Pinheiros) (Pista Expressa)</option>
                            <option value="395" id="248">Rod. Raposo Tavares (SP 270) sentido Rodoanel (Marginal Pinheiros > Rodoanel)</option>
                            <option value="387" id="240">Rod. Raposo Tavares (SP 270) sentido São Paulo (Rodoanel > Marginal Pinheiros)</option>
                            <option value="398" id="251">Rod. Régis Bittencourt (BR 116) sentido Rodoanel (Av. Prof. Francisco Morato > Rodoanel)</option>
                            <option value="386" id="239">Rod. Régis Bittencourt (BR 116) sentido São Paulo (Rodoanel > Av. Prof. Francisco Morato)</option>
                            <option value="204" id="6">Rodoanel sentido Mauá</option>
                            <option value="203" id="5">Rodoanel sentido Perus</option>
                            <option value="343" id="172">Vd. Antártica sentido Av. Dr. Arnaldo (Av. Francisco Matarazzo > Av. Dr. Arnaldo)</option>
                            <option value="345" id="174">Vd. Antártica sentido Av. Dr. Arnaldo (Av. Francisco Matarazzo > Av. Dr. Arnaldo) (alternativa)</option>
                            <option value="346" id="175">Vd. Antártica sentido Av. Mq. de São Vicente (Av. Dr. Arnaldo > Av. Mq. de São Vicente)</option>
                            <option value="344" id="173">Vd. Antártica sentido Av. Mq. de São Vicente (Av. Dr. Arnaldo > Av. Mq. de São Vicente) (alternativa)</option>
                            
            </select>
          </p>
        </div>
        <div id="trechos" class="info"></div>
        <div class="legendacores" style="display:none;">
          <strong>LEGENDA:</strong>&nbsp;
          <span class="label verde">Livre</span>
              <span class="label amarelo">Fluindo</span>
              <span class="label laranja">Fluxo Intenso</span>
              <span class="label vermelho">Lento</span>
        </div>
        <div class="legendapontos" style="display:none;">
          <img src="http://static.maplink.com.br/assets/image/transitoonline/marker_special_route_a.png" alt="" />Origem
          <img src="http://static.maplink.com.br/assets/image/transitoonline/marker_special_route_b.png" alt="" />Destino
          <img src="http://static.maplink.com.br/assets/image/transitoonline/marker_special_route.png" alt="" />Parada
        </div>
          <div class="legenda"></div>
      </div>
      <!-- Div do tempos de trajeto -->
    </div>
  </div>
     
<script src="http://services.maplink.com.br/maplinkapi2/api.ashx?v=4&key=exHwaw3huAH6NXLsNJVWT0NjaDVIGxOAymUFb0RjwnOMNY32ymVrc03OzAHJNvNEyndaaM2jG0HHRBpqzZLvaAF4GJA=" type="text/javascript"></script>
<script type="text/javascript" src="http://corp.maplink.com.br/maplinkplugin/plugin.ashx?client=25"></script>
<script type="text/javascript">
    var Map;
    var AjaxRequest;
    var AjaxRequestIncidentes;
  var LayerIncidentes = null;
  var arrayLayerSpecialRoutes = [];
  var listenerRouteTime;
  var ajaxObjGetSpecialRoutes = null;
  var ajaxObjGetLastUpdate = null;
  var lastUpdate = null;
  var loopSpecialRoutes = null;
  var loopIncidentes = null;
  var arrayExcerpt = [];
  
    function atualiza_infos() {
        var center = Map.getCenter();
        if (AjaxRequest != null)
            AjaxRequest.abort();

        var currentTime = new Date();
        var month = currentTime.getMonth() + 1;
        var day = currentTime.getDate();
        var year = currentTime.getFullYear();
        var hours = currentTime.getHours();
        var minutes = currentTime.getMinutes();

        var time = ("" + year + month + day + hours + minutes);

        AjaxRequest = $.ajax({
            url: '/get_location_status_by_latlng',
            data: ({
                x: center.x,
                y: center.y,
                t: time
            }),

            success: function (data) {
                //alert(data);
                try
                {
                  var result = eval(data);
                  var status = result.statusLength.split(",");
                  var livre = status[4].substring(0, status[4].indexOf('.'));
                  var fluindo = status[3].substring(0, status[3].indexOf('.'));
                  var intenso = status[2].substring(0, status[2].indexOf('.'));
                  var lento = status[1].substring(0, status[1].indexOf('.'));
                  var parado = status[0].substring(0, status[0].indexOf('.'));
                  var total = parseInt(intenso) + parseInt(lento);
                  var totalMonitorado = parseInt(livre) + parseInt(fluindo) + parseInt(intenso) + parseInt(lento) + parseInt(parado);
                  var updTime = result.lastUpdate;
  
                  var date = updTime.replace("/Date(","");
                  date = date.replace(")/","");
  
                  var d = new Date();
                  d.setTime(parseInt(date));
  
                  var month = d.getMonth() + 1;
                  var day = d.getDate();
                  var year = d.getFullYear();
                  var hours = d.getHours();
                  if(hours < 10) hours = "0"+hours;
                  var minutes = d.getMinutes();
                  if(minutes < 10) minutes = "0"+minutes;
                  var seconds = d.getSeconds();
                  if(seconds < 10) seconds = "0"+seconds;
  
                  var dateString = day + "/" + month + "/" + year + " - " + hours+":"+minutes+":"+seconds;
  
  
                  $("#name_city").text(result.cityName + ", " + result.stateName);
                  $("#trans_livre").text(livre);
                  $("#trans_fluindo").text(fluindo);
                  $("#trans_intenso").text(intenso);
                  $("#trans_lento").text(lento);
                  $("#trans_total").text(total);
                  $("#trans_datetime").text(dateString);
                  $("#total_monitorado").text(totalMonitorado);
                  AjaxRequest = null;
                }
                catch(ex){}
            }
        });
    }

    function updateIncidentes()
    {
      var bounds = Map.getBounds();

      if (AjaxRequestIncidentes != null)
        AjaxRequestIncidentes.abort();
        
      AjaxRequestIncidentes = $.ajax({
        url : '/incidentes/get',
        data : ( {
          minx : bounds.getSouthWest().x,
          miny : bounds.getSouthWest().y,
          maxx : bounds.getNorthEast().x,
          maxy : bounds.getNorthEast().y,
          z : ___LBSAPI.CurrentMap.getZoom()
        }),

        success : function(data) {
        try{
            data = eval(data);
  
            if (LayerIncidentes != null) {
              ___LBSAPI.CurrentMap.removeOverlay(LayerIncidentes);
              LayerIncidentes = null;
            }
  
            LayerIncidentes = new LBS.Layer.Markers();
            ___LBSAPI.CurrentMap.addOverlay(LayerIncidentes);
  
            for ( var i in data) {
              if((data[i].type == 'cluster') || (data[i].type != 'cluster' && typeof(data[i].title) != 'undefined'))
              {
                addMarkerIncidentes(data[i]);
              }
            }
            AjaxRequestIncidentes = null;
        }
        catch(ex)
        {
        }
        }
      });
    }
    function addMarkerIncidentes(data)
    {
      var latlng = new GLatLng(data.latitude, data.longitude);
  
    var icon = new GIcon();
    icon.iconSize = new GSize(29, 33);
    icon.iconAnchor = new GPoint(5, 31);
    icon.infoWindowAnchor = new GPoint(33 / 2, 0);
  
    var mmarker = null;
  
    if (data.type == 'cluster') {
      icon.iconSize = new GSize(48, 43);
      icon.iconAnchor = new GPoint(5, 41);
      icon.infoWindowAnchor = new GPoint(43 / 2, 0);
      data.count = parseInt(data.count);
  
      if (data.count >= 2 && data.count < 10) {
        icon.image = "http://static.maplink.com.br/assets/image/pois/incidentes_feiras_" + data.count
            + ".png";
      } else {
        icon.image = "http://static.maplink.com.br/assets/image/pois/incidentes_feiras_10mais.png";
      }
      mmarker = new GMarker(latlng, {
        draggable : false,
        icon : icon
      });
  
      GEvent.addListener(mmarker, "click", function(latlng) {
        Map.setCenter(new GLatLng(latlng.object.latlng.y,
                      latlng.object.latlng.x), 
                Map.getZoom() + 1);
      });
    } else {
      if (data.category == '13') {
        icon.image = "http://static.maplink.com.br/assets/image/pois/incidentes_feiras.png";
      } else {
        icon.image = "http://static.maplink.com.br/assets/image/pois/incidentes_eventos_acidentes_transito.png";
      }
      mmarker = new GMarker(latlng, {
        draggable : false,
        icon : icon
      });
  
      var codigoHTML = null;
      var url = getNameURL() + 'cameras-e-radares/'
          + data.id + '/' + data.key_name;
  
      // tratarDiaDaSemana
      var weekDay = "";
      var weekDay1 = "";
      var weekDay2 = "";
      var days = [];
      if(data.week)
      {
        days = data.week.split("|");
        if(days[1])
        {
          
          var day1 = parseInt(days[0]);
          var day2 = parseInt(days[days.length-1]);
          if(day1 <= 6 && day1 >= 2  ) {
            weekDay1 = day1 + "ª feira";
          }else if (day1 == 1) {
            weekDay1 = "Domingo";
          }else if (day1 == 7) {
            weekDay1 = "Sábado";
          }
          
          if(day2 <= 6 && day2 >= 2  ) {
            weekDay2 = day2 + "ª feira";
          }else if (day2 == 1) {
            weekDay2 = "Domingo";
          }else if (day2 == 7) {
            weekDay2 = "Sábado";
          }
        }
        else
        {
          
          var numero = parseInt(data.week);
          if (numero <= 6 && numero >= 2  ) {
            weekDay = numero + "ª feira";
          } else if (numero == 1) {
            weekDay = "Domingo";
          } else if (numero == 7) {
            weekDay = "Sábado";
          }
        }
      }
      else
      {
        weekDay = null;
      }
  
      // tratar horario
  
      codigoHTML = "<div class='infowindow'><div style='background-color:#F0F3F6; padding:5px'>";
      codigoHTML += "<span style='font-weight:bold;font-size:1.0em'>";
      codigoHTML += data.title;
      codigoHTML += "</span>";
      codigoHTML += "</div>";
      codigoHTML += "<div style='width: 100%; height: 1px; background-color: rgb(204, 204, 204); margin: 0px 0px 3px;'></div>";
      codigoHTML += "<div style='line-height: 15px;'>";
      codigoHTML += "<span style='font-weight:bold;font-size:1em;'>Local: </span>"
          + data.city;
      if((!weekDay || !weekDay1) && data.category == '13')
      {
        codigoHTML += "<br/><span style='font-weight:bold;font-size:1em;'>Dias da semana: </span>";
        codigoHTML += (weekDay2 != "") ? "de " + weekDay1 + " à " + weekDay2 : weekDay;
      } 
      if(data.dateBegin)
      {
        codigoHTML += "<br/><span style='font-weight:bold;font-size:1em;'>Horário: </span>"
          + data.dateBegin;
        if(data.category == '13')
          codigoHTML += " - " + data.dateEnd;
      }
      //alert(data.category);
      
      // codigoHTML += "<br/><span
      // style='font-weight:bold;font-size:1em;'>Endereço: </span>" +
      // data.address;
      codigoHTML += "</div>";
    
  
       GEvent.addListener(mmarker, "click", function(latlng) {
        mmarker.openInfoWindow(codigoHTML, {
          maxSize : new GSize(245, 350),
          minSize : new GSize(245, 150)
        });
      });
    }
      
    LayerIncidentes.addMarker(mmarker);
    }

    function getNameURL() 
    {
      var urlTemp;
      urlTemp = location.href.substring(location.href.indexOf('?') + 1);
      return urlTemp;
    }
    
    function init() {
      
        Map = new MMap2(document.getElementById('map_canvas'));

        Map.paddingForInfoWindow = new LBS.Bounds(50,10,10,10);
        
        Map.setCenter(new MPoint(-46.638818,-23.548943),13);

        Map.addLayer(LBS_TRAFFIC_LAYER_2, { 'timeUpdate': 15, 'tileConfigId': '1' });

        //Map.addControl(new GMapTypeControl(), new GControlPosition(G_ANCHOR_TOP_RIGHT, new GSize(5, 5)));
        Map.addControl(new GLargeMapControl());
        
        //document.getElementById('map_canvas').style.height = (document.body.offsetHeight - 68) + "px";
        $('#map_canvas').height($(window).height() - $('.topbar').height());
        Map.checkResize();
        // alert(document.getElementById('map_canvas').style.height);
    GEvent.addListener(Map, "moveend", function(r){
      Atualizadados();
    });
        Atualizadados();
    }

    $(window).resize(function () {
        $('#map_canvas').height($(window).height() - $('.topbar').height());
        Map.checkResize();
    });

    function Atualizadados() {
        atualiza_infos();
//        updateIncidentes();
        loopIncidentes = setTimeout("Atualizadados();", 60000);
    }

    function cancel_update_incidentes()
    {
      if(loopIncidentes != null)
    {
      clearTimeout(loopIncidentes);
    }
    }
    
    $('#selecao_controle').change(function(){
      cancel_update_special_routes();
      Map.removeLayer(LBS_TRAFFIC_LAYER_2);
        remove_layers();
        if($(this).val() == 'resumo')
        {
          $('#resumo_transito').show();
      $('#tempos_trajeto').hide();
      Map.addLayer(LBS_TRAFFIC_LAYER_2, { 'timeUpdate': 15, 'tileConfigId': '1' });
        }
        else if($(this).val() == 'rotas')
        {
//          cancel_update_incidentes();
          $('#resumo_transito').hide();
      $('#tempos_trajeto').show();  
        }
  });
    
    $('#selecao_trajeto').change(function(){
        
      if($(this).val() != 'default')
        {
        cancel_update_special_routes();
      update_trechos();
        }
        else
        {       
          cancel_update_special_routes();
          remove_layers();  
          Map.removeLayer(LBS_TRAFFIC_LAYER_2);
      $('.legendacores, .legendapontos').hide();
          $('#trechos').hide();
        }
  });

    function update_trechos()
  {
      checkLastUpdate(get_trechos);
      loopSpecialRoutes = setTimeout('update_trechos();',60000);
  }

  function cancel_update_special_routes()
  {
    if(loopSpecialRoutes != null)
    {
      clearTimeout(loopSpecialRoutes);
      lastUpdate = null;
    }
  } 

  function checkLastUpdate(callback)
  {
    if(ajaxObjGetLastUpdate != null)
    {
      ajaxObjGetLastUpdate.abort();
      ajaxObjGetLastUpdate = null;
    }
    ajaxObjGetLastUpdate = $.ajax({
        url : '/special_routes/get_last_update/',
        success : function(data) {
        try
        {
          data = eval(data);
          
          var updTime = data;
                  
          if(lastUpdate != updTime)
          {
                    lastUpdate = updTime;
                    
                    /* parser date */
            var date = updTime.replace("/Date(","");
                    date = date.replace(")/","");
    
                    var d = new Date();
                    d.setTime(parseInt(date));
    
                    var month = d.getMonth() + 1;
                    var day = d.getDate();
                    var year = d.getFullYear();
                    var hours = d.getHours();
                    if(hours < 10) hours = "0"+hours;
                    var minutes = d.getMinutes();
                    if(minutes < 10) minutes = "0"+minutes;
                    var seconds = d.getSeconds();
                    if(seconds < 10) seconds = "0"+seconds;
    
                    var dateString = day + "/" + month + "/" + year + " - " + hours+":"+minutes+":"+seconds;
            
            $('.tempos_trajeto .legenda').html('*Atualizado em: ' + dateString);

            /* get trechos */
                    callback();
          }
          else
          {
            return false;
          }
          
          ajaxObjGetLastUpdate = null;
        }
        catch(ex)
        {
          return false;
        }
      }
    });
  }

    function get_trechos()
    {
      /* apaga outros layers e carrega novo layer */
      remove_layers();
    arrayLayerSpecialRoutes[$('#selecao_trajeto').children("option:selected").attr("id")] = new LBS.Layer.Markers();
    Map.addOverlay(arrayLayerSpecialRoutes[$('#selecao_trajeto').children("option:selected").attr("id")]);
    
    
    if(ajaxObjGetSpecialRoutes != null)
    {
      ajaxObjGetSpecialRoutes.abort();
      ajaxObjGetSpecialRoutes = null;
    }
    ajaxObjGetSpecialRoutes = $.ajax({
        url : '/special_routes/get_special_excerpt/',
        data : ( {
          id : $('#selecao_trajeto').children("option:selected").attr("id")         
        }),
        success : function(data) {
        try
        {
            data = eval(data);

            /* cria Array que vai armazenar MPoint para ajustar o zoom */
          var arrayPoints = [];
          arrayExcerpt = [];
                      
            /* formata lista de trechos na tabela*/
            var html = '';
            html += '<div class="tablewrapper">';
          html += '<table class="corredores">';
          html += '<thead>';
          html += ' <td width="250px" colspan="2">Trecho</td>';
          html += ' <td>Km/h</td>';
          html += ' <td>Tempo</td>';
          html += '</thead>';
          for(var i = 0 ; i < data.length ; i++)
          {
            var points = formata_pontos(data[i].points);
            /* continua formatando lista de trechos na tabela*/
            html += '<tr>';
            html += ' <td>' + data[i].situation + '</td>';
            html += ' <td><a href="javascript:void();" class="link_foco_mapa" id="'+i+'" onclick="set_center_excerpt(' + points[0].x + ',' + points[0].y + ',' + points[1].x + ',' + points[1].y + ');">' + data[i].name.replace('-','<br />')+'</td>';
            html += ' <td class="aligncenter">'+data[i].speed+'</td>';
            html += ' <td class="aligncenter">'+data[i].time+'\'</td>';
            html += '</tr>';

            /* carrega markers de inicio, fim e paradas */
            arrayPoints.push(new MPoint(points[0].x, points[0].y));
            arrayPoints.push(new MPoint(points[points.length-1].x, points[points.length-1].y));
              
            /* carrega objetos e trechos */
            arrayExcerpt[i] = {
                time: data[i].time,
                points: points,
                lat: data[i].lat,
                lng: data[i].lng,
                flag_origem:data[i].marker_origem,
                flag_destino:data[i].marker_destino,
                marker_origem:null,
                marker_destino:null,
                marker_tempo:null
            };
          }
          html += '</table>';
          html += '</div>';

          
          
          $('#trechos').html(html);

                        
              Map.setCenter(new GLatLng(-23.539601,-46.739122),12);
                            /* carrega markers com os tempos, origem, destino e paradas*/
              load_route_markers(arrayExcerpt);
              load_time_markers(arrayExcerpt);
              listenerRouteTime = GEvent.addListener(Map, "moveend", function(){
                load_time_markers(arrayExcerpt);
          });
              Map.removeLayer(LBS_TRAFFIC_LAYER_2);
          Map.addLayer(LBS_TRAFFIC_LAYER_2, { 'timeUpdate': 15, 'tileConfigId': $('#selecao_trajeto').val() });

          
              $('#trechos').show(); 
          $('.legendacores, .legendapontos').show();
              ajaxObjGetSpecialRoutes = null;       
        }
        catch(ex)
        {
          $('#trechos').show();
          $('.legendacores, .legendapontos').show();
        }
        }
      });
    }

    function load_time_markers(excerpts)
    {
      for (var index in excerpts)
      {
        /* carrega tempos */
        var ponto_medio = new GLatLng(excerpts[index].lat,excerpts[index].lng);

        if(excerpts[index].marker_tempo == null)
        {
          excerpts[index].marker_tempo = document.createElement('div');
        }
        excerpts[index].marker_tempo.style.visibility='hidden';
        excerpts[index].marker_tempo.style.position = 'absolute';
        
          Map.getPane(G_MAP_FLOAT_PANE).appendChild(excerpts[index].marker_tempo);
          excerpts[index].marker_tempo.innerHTML = "<div class='marker_special_route' align='left' nowrap >"+excerpts[index].time+"'</div>";
        
        var p = Map.getLayerPxFromLatLng(ponto_medio);
          
        excerpts[index].marker_tempo.style.left = (p.x) + 'px';
        excerpts[index].marker_tempo.style.top = (p.y) + 'px';
  
        excerpts[index].marker_tempo.style.cursor = 'pointer';
        excerpts[index].marker_tempo.style.visibility = 'visible';
      }
    }

    function set_center_excerpt(x1,y1,x2,y2)
    {
        var arrayPoints = Array();
        arrayPoints.push(new MPoint(x1,y1));
        arrayPoints.push(new MPoint(x2,y2));
        
      // obtem o zoom para mostrar todos os pontos adicionados no mapa
        var z = Map.getZoomForPoints(arrayPoints);
        // obtem o extent dos pontos
        var b = LBS.Bounds.fromArray(arrayPoints);
        // seta o novo centro do mapa
        Map.setCenter(b.getCenter(),z-1);
    }

    function load_route_markers(excerpts)
    {
      if($(".marker_special_route").length != 0)
        {
        $(".marker_special_route").remove();
        }
        for (var index in excerpts)
        {
      /* carrega markers */
      var latlng = new GLatLng(excerpts[index].points[0].y, excerpts[index].points[0].x);
      
      var icon = new GIcon();
      icon.iconSize = new GSize(18, 18);
      icon.iconAnchor = new GPoint(9, 9);
      icon.infoWindowAnchor = new GPoint(9, 9);
      if(excerpts[index].flag_origem == '1')
      {
        icon.image = "http://static.maplink.com.br/assets/image/transitoonline/marker_special_route_a.png";
      }
      else
      {
        icon.image = "http://static.maplink.com.br/assets/image/transitoonline/marker_special_route.png";
      }
      excerpts[index].marker_origem = new GMarker(latlng, {draggable : false,icon : icon});

      arrayLayerSpecialRoutes[$('#selecao_trajeto').children("option:selected").attr("id")].addMarker(excerpts[index].marker_origem);
      if(excerpts[index].flag_origem == '0')
      {
        excerpts[index].marker_origem.hide();
      }
    
      var latlng = new GLatLng(excerpts[index].points[excerpts[index].points.length-1].y, excerpts[index].points[excerpts[index].points.length-1].x);
      
      var icon = new GIcon();
      icon.iconSize = new GSize(18, 18);
      icon.iconAnchor = new GPoint(9, 9);
      icon.infoWindowAnchor = new GPoint(9, 9);
      if(excerpts[index].flag_destino == '1')
      {
        icon.image = "http://static.maplink.com.br/assets/image/transitoonline/marker_special_route_b.png";
      }
      else
      {
        icon.image = "http://static.maplink.com.br/assets/image/transitoonline/marker_special_route.png";
      }
      
    
      excerpts[index].marker_destino = new GMarker(latlng, {draggable : false,icon : icon});
            
      arrayLayerSpecialRoutes[$('#selecao_trajeto').children("option:selected").attr("id")].addMarker(excerpts[index].marker_destino);

      if(excerpts[index].flag_destino == '0')
      {
        excerpts[index].marker_destino.hide();
      }
    
           
        }
    }

    function formata_pontos(points)
    {
        var new_points = Array();
      var aux_points = points.split(';');
      for(var i=0; i<aux_points.length; i++)
      {
          if(i==0 || i==aux_points.length-1)
          {
          var aux_point = aux_points[i].split(',');
          new_points.push({
              x: aux_point[0],
              y: aux_point[1]
          });
          }
      }
      return new_points;
    }

    function remove_layers()
    {
        if($(".marker_special_route").length != 0)
        {
        $(".marker_special_route").remove();
        }
        if(listenerRouteTime)
        {
        GEvent.removeListener(listenerRouteTime);
        }
      for(var index in arrayLayerSpecialRoutes)
        {
          if (arrayLayerSpecialRoutes[index]) {
          Map.removeOverlay(arrayLayerSpecialRoutes[index]);
          arrayLayerSpecialRoutes[index] = null;
        }
        }
    }

    $(function() {
      /* arraste da DIV de controle_mapa */
      $(".controle_mapa").draggable({ 
          containment: 'parent',
          cursor: 'move',
          handle: 'h1,div.selecao'
    });
      /* acao de esconder/expandir do controle_mapa */
    $("#toggle_button").click(function(){
      $(".infowrapper").slideToggle('fast',function(){
        var text = $("#toggle_button").text();
        if(text == 'expandir')
        {
          $("#toggle_button").text('esconder');
        }
        else
        {
          $("#toggle_button").text('expandir');
        }
      });
      
    });
    /* efeito menu superior */
    $('.topbar').dropdown();
    /* efeito de destaque para o trecho com hover */
    $("a.link_foco_mapa").live('mouseover',function(){
          var index = $(this).attr('id');
          for(var i in arrayExcerpt)
          {
            if (i != index)
            {
              arrayExcerpt[i].marker_tempo.style.opacity = 0.5;
              if(arrayExcerpt[i].flag_origem != '0')
              {
                arrayExcerpt[i].marker_origem.setOpacity(0.35);
              }
              if(arrayExcerpt[i].flag_destino != '0')
              {
                arrayExcerpt[i].marker_destino.setOpacity(0.35);
              }
            }
            else
            {
              if(arrayExcerpt[i].flag_origem == '0')
              {
                arrayExcerpt[i].marker_origem.show();
              }
              if(arrayExcerpt[i].flag_destino == '0')
              {
                arrayExcerpt[i].marker_destino.show();
              }
            }
          }
    });
    /* remove efeito de destaque para o trecho com hover */
    $("a.link_foco_mapa").live('mouseout',function(){
      var index = $(this).attr('id');
          for(var i in arrayExcerpt)
          {
            if (i == index)
            {
              if(arrayExcerpt[i].flag_origem == '0')
              {
                arrayExcerpt[i].marker_origem.hide();
              }
              if(arrayExcerpt[i].flag_destino == '0')
              {
                arrayExcerpt[i].marker_destino.hide();
              }
            }
            else
            {
              arrayExcerpt[i].marker_tempo.style.opacity = 1;
              if(arrayExcerpt[i].flag_origem != '0')
              {
                arrayExcerpt[i].marker_origem.setOpacity(1);
              }
              if(arrayExcerpt[i].flag_destino != '0')
              {
                arrayExcerpt[i].marker_destino.setOpacity(1);
              }
            }
          }
    });
    });
        $(window).load(function(){
    var array = $('#selecao_trajeto option');
      $(array[1]).attr('selected',true);
      $('#selecao_trajeto').trigger('change');
    });
    
            
</script>
                        
                        
                     </li>
                     <!--MAPA SAO PAULO--> 
                     
                     <!--PORTAL DE VIDEOS-->
                     <li class="conteudo-portal-de-videos" style="display:none">
                     <!--
                      <a name="ytd" />
                      -->
                      <!-- Youtube Direct embed - start --> 
                      <!--
                      <script type="text/javascript" src="https://cmais-tvcultura.appspot.com/js/ytd-embed.js"></script>
                      <script type="text/javascript">
                      var ytdInitFunction = function() {
                        var ytd = new Ytd();
                        ytd.setAssignmentId("1001");
                        ytd.setCallToAction("callToActionId-1001");
                        var containerWidth = 350;
                        var containerHeight = 550;
                        ytd.setYtdContainer("ytdContainer-1001", containerWidth, containerHeight);
                        ytd.ready();
                      };
                      if (window.addEventListener) {
                        window.addEventListener("load", ytdInitFunction, false);
                      } else if (window.attachEvent) {
                        window.attachEvent("onload", ytdInitFunction);
                      }
                      </script>
                      <a id="callToActionId-1001" href="javascript:void(0);"><img src="https://cmais-tvcultura.appspot.com/images/calltoaction.png"></a>
                      <div id="ytdContainer-1001"></div>
                      -->
                      <!-- Youtube Direct embed - end --> 
                      <a name="ytd" />
                      <script type="text/javascript" src="https://cmais-tvcultura.appspot.com/js/ytd-embed.js"></script>
                      <script type="text/javascript">
                      var ytdInitFunction = function() {
                        var ytd = new Ytd();
                        ytd.setAssignmentId("1001");
                        ytd.setCallToAction("callToActionId-1001");
                        var containerWidth = 350;
                        var containerHeight = 550;
                        ytd.setYtdContainer("ytdContainer-1001", containerWidth, containerHeight);
                        ytd.ready();
                      };
                      if (window.addEventListener) {
                        window.addEventListener("load", ytdInitFunction, false);
                      } else if (window.attachEvent) {
                        window.attachEvent("onload", ytdInitFunction);
                      }
                      </script>
                      <div class="youtube">
                        <a id="callToActionId-1001" href="javascript:void(0);" class="upload"></a>
                        <div id="ytdContainer-1001"></div>
                        
                      </div>
                      <div class="participe">
                        <div class="img-enviar"></div>
                        <a href="#" class="titulos">Participe! Envie seu vídeo.</a>
                        <!--a href="#">Duis lectus nibh, venenatis sed consectetur id, interdum vel ante. Nam suscipit, massa hendrerit consectetur auctor, erat quam tempor quam, eget aliquam diam metus eget lorem. Cras id arcu nisi, eget lobortis urna. Aenean consectetur mattis iaculis. Maecenas euismod massa eget dui tincidunt viverra. </a-->
                      </div>
                     </li>
                     <!--PORTAL DE VIDEOS-->      
                  </ul>
                  <!--CONTEUDOS -->         
              </div>
              <!-- MENU E OPÇÕES--> 
            
              <!-- BOX PUBLICIDADE 2 -->
              <div class="box-publicidade pub-grd grid3">
                <!-- cmais-assets-728x90 -->
                <script type='text/javascript'>
                GA_googleFillSlot("cmais-assets-728x90");
                </script>
              </div>
              <!-- / BOX PUBLICIDADE 2 -->

            </div>
            <!-- /TRANSITO -->
            
          </div>
          <!-- /CAPA -->
          
        </div>
        <!-- /CONTEUDO PAGINA -->
        
      </div>
      <!-- /MIOLO -->

    </div>
    <!-- / CAPA SITE -->
