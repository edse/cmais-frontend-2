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
<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/sites/transito.css?a=1234" type="text/css" />
<style>
.azul .window { background-color: #6AACD2; }
.verde .window { background-color: #136F13; }
</style>
<script type="text/javascript" src="http://cmais.com.br/portal/js/mediaplayer/swfobject.js"></script>

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
          <div class="fundo-topo"></div>
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
        <div class="box-topo grid3" style="z-index: 3">

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
                    <option value="9">Avenida Aricanduva</option>
                    <option value="6">Avenida Dummont Villares</option>
                    <option value="8">Avenida Pompéia</option>
                    <option value="3">Avenida Tiradentes</option>
                    <option value="7">Freguesia do Ó</option>
                    <option value="5">Marginal Pinheiros - Est. Pinheiros</option>
                    <option value="4">Marginal Pinheiros - Jockey Club</option>
                    <option value="11">Marginal Pinheiros - Av. dos Bandeirantes</option>
                    <option value="1" selected="selected">Marginal Tietê - 1</option>
                    <option value="10">Marginal Tietê - 2</option>
                    <option value="2">Radial Leste x Salim Farah Maluf</option>
                    <option value="12">Avenida Rubem Berta</option>
                  </select> 
                </form>

                <div id="livestream"><embed type="application/x-shockwave-flash" src="http://www.cmais.com.br/portal/js/mediaplayer/player.swf" width="310" height="240" style="undefined" id="mpl" name="mpl" quality="high" allowscriptaccess="always" allowfullscreen="true" wmode="transparent" flashvars="controlbar=over&amp;autostart=false&amp;streamer=rtmp://200.136.27.12/live&amp;file=camera&amp;type=video"></div>
                
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
                          
                          if ($(this).val() == "1")
                            $("#livestream").html('<embed type="application/x-shockwave-flash" src="http://www.cmais.com.br/portal/js/mediaplayer/player.swf" width="310" height="240" style="undefined" id="mpl" name="mpl" quality="high" allowscriptaccess="always" allowfullscreen="true" wmode="transparent" flashvars="controlbar=over&amp;autostart=true&amp;streamer=rtmp://200.136.27.12/live&amp;file=camera&amp;type=video">');
                          else if ($(this).val() == "2")
                            $("#livestream").html('<img src="http://200.136.27.15/cameras/imagem.php?cam=belenzinho" style="width: 310px; height: 240px;" alt="Radial Leste x Salim Farah Maluf">'); 
                          else if ($(this).val() == "3")
                            $("#livestream").html('<img src="http://200.136.27.15/cameras/imagem.php?cam=tiradentes"  style="width: 310px; height: 240px;" alt="Av. Tiradentes">'); 
                          else if ($(this).val() == "4")
                            $("#livestream").html('<img src="http://200.136.27.15/cameras/imagem.php?cam=mpinheiros"  style="width: 310px; height: 240px;" alt="Marginal Pinheiros - Jockey Club">'); 
                          else if ($(this).val() == "5")
                            $("#livestream").html('<img src="http://200.136.27.15/cameras/imagem.php?cam=somar"  style="width: 310px; height: 240px;" alt="Marginal Pinheiros - Est. Pinheiros">'); 
                          else if ($(this).val() == "6")
                            $("#livestream").html('<img src="http://200.136.27.15/cameras/imagem.php?cam=santana"  style="width: 310px; height: 240px;" alt="Av. Dummont Villares">');
                          else if ($(this).val() == "7")
                            $("#livestream").html('<img src="http://200.136.27.15/cameras/imagem.php?cam=freguesia"  style="width: 310px; height: 240px;" alt="Freguesia do Ó">');
                          else if ($(this).val() == "8")
                            $("#livestream").html('<img src="http://200.136.27.15/cameras/imagem.php?cam=pompeia"  style="width: 310px; height: 240px;" alt="Av. Pompéia">');
                          else if ($(this).val() == "9")
                            $("#livestream").html('<img src="http://200.136.27.15/cameras/imagem.php?cam=aricanduva"  style="width: 310px; height: 240px;" alt="Av. Aricanduva">');
                          else if ($(this).val() == "10")
                            $("#livestream").html('<img src="http://200.136.27.15/cameras/imagem.php?cam=mtiete"  style="width: 310px; height: 240px;" alt="Marginal Tietê - 2">');
                          else if ($(this).val() == "11")
                            $("#livestream").html('<img src="http://200.136.27.15/cameras/imagem.php?cam=emae"  style="width: 310px; height: 240px;" alt="Marginal Pinheiros - Av. dos Bandeirantes">');
                          else if ($(this).val() == "12")
                            $("#livestream").html('<img src="http://200.136.27.15/cameras/imagem.php?cam=rberta"  style="width: 310px; height: 240px;" alt="Avenida Rubem Berta">');
                                   
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
                <div class="pageload" style="float: left; margin-top: 6px;"><img src="http://cmais.com.br/portal/images/capaPrograma/transito/transparent_loading.gif" alt="carregando..." /></div>
                <img id="img-litoral" src="http://www.dersa.sp.gov.br/santos.jpg" alt="Balsa de Santos - Guarujá" style="width: 310px; height: 240px;" />  
              </div>
              
              <script>
              $(function(){
                var imigrantes = 0;
                var anchieta = 0;
                $.ajax({
                  url: "http://app.cmais.com.br/portal/cams.php?s=ecovias",
                  dataType: "jsonp",
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
                  url: "http://app.cmais.com.br/portal/cams.php?fpa=1&s=ecopistas",
                  dataType: "jsonp",
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
                    
                    
                    /* CAMERAS DA BANDEIRANTES E ANHANGUERA - OFF
                    $('#opcao-via-1').append('<option value="http://200.246.17.101/cameras/cam01.jpg">Bandeirantes - Km 13</option>');
                    $('#opcao-via-1').append('<option value="http://200.246.17.101/cameras/cam02.jpg">Bandeirantes - Km 21</option>');
                    $('#opcao-via-1').append('<option value="http://200.246.17.101/cameras/cam03.jpg">Bandeirantes - Km 27</option>');
                    $('#opcao-via-1').append('<option value="http://200.246.17.101/cameras/cam05.jpg">Bandeirantes - Km 38</option>');
                    $('#opcao-via-1').append('<option value="http://200.246.17.101/cameras/cam07.jpg">Bandeirantes - Km 47</option>');
                    $('#opcao-via-1').append('<option value="http://200.246.17.101/cameras/cam18.jpg">Anhanguera - Km 13</option>');
                    $('#opcao-via-1').append('<option value="http://200.246.17.101/cameras/cam20.jpg">Anhanguera - Km 22</option>');
                    $('#opcao-via-1').append('<option value="http://200.246.17.101/cameras/cam21.jpg">Anhanguera - Km 26</option>');
                    $('#opcao-via-1').append('<option value="http://200.246.17.101/cameras/cam23.jpg">Anhanguera - Km 52</option>');
                    */
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
                GA_googleFillSlot("cmais-assets-300x250");
                </script>
              </div>
              <!-- / BOX PUBLICIDADE -->
  
              <script>
              $(document).ready(function(){
                
                $('.btn-cameras-ao-vivo').click(function(){
                  $('.conteudo-mapa-sao-paulo').hide();
                  //$('.conteudo-portal-de-videos').hide();
                  $('.conteudo-camera-ao-vivo, .cont-direita').fadeIn('slow');
                  $('.btn-mapa-sao-paulo, .btn-portal-de-videos').removeClass('ativo');
                  $(this).addClass('ativo');
                }); 
                
                $('.btn-mapa-sao-paulo').click(function(){
                  $('.conteudo-camera-ao-vivo, .cont-direita').hide();
                  //$('.conteudo-portal-de-videos').hide();
                  $('.conteudo-mapa-sao-paulo').fadeIn('slow');
                  $('.btn-cameras-ao-vivo, .btn-portal-de-videos').removeClass('ativo');
                  $(this).addClass('ativo');
                });  
                
                $('.btn-portal-de-videos').click(function(){
                  $('.conteudo-camera-ao-vivo').hide();
                  $('.conteudo-mapa-sao-paulo').hide();
                  //$('.conteudo-portal-de-videos').fadeIn('slow');
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
                      <!--li class="btn-portal-de-videos  btn-li ">
                        <a href="#telas" title="Portal de vídeo" class="m_portal_de_video btn-menu">Portal de vídeo</a>
                        <span class="decoracao"></span>
                      </li-->
                  </ul>
                  
                  <!--CONTEUDOS -->
                  <ul class="conteudos" >

                     <!--CAMERA AO VIVO-->
                     <li class="conteudo-camera-ao-vivo" >
                       
                       <!--Mapa-->
                       <div class="container-camera">
                         
                       <div class="conteudo-camera-ao-vivo"> 
                          
                       <div id="rodovias">
                          
                          <!--facebook--> 
                          <div class="cont-direita">
                            <!-- BOX TWITTER -->
                              <div id="twitter" style="border:0">
                                <a class="twitter-timeline" href="https://twitter.com/search?q=%40Guia_Dia" data-widget-id="322465702533537792">Tweets sobre "@Guia_Dia"</a>
                                <script>
                                  !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
                                </script>
                              </div>
                           
                            <?php include_partial_from_folder('blocks','global/facebook-1c', array('site' => $site, 'uri' => $uri)) ?>
                            <!-- /BOX TWITTER -->   
                          </div>
                          <!--/facebook-->  
                          <div id="legendas-ruas"></div>
                          
                          <!-- <div style="display: block;z-index: 1000;color: black;position: absolute;top: 5px;left: 640px;">Fonte: CET</div> -->
                          
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
                             <!-- <a href="#dialogLapa" name="modal" id="camera01" class="fundo pos01" title="Viaduto Nossa Senhora da Lapa"></a>-->
                             <!-- <a href="#dialog" name="modal" id="camera02" class="fundo pos02" title="Avenida Sumare/ Dr Arnaldo"></a>-->
                             <a href="#dialogBelenzinho" name="modal" id="camera03" class="fundo pos03" title="Radial Leste X Salim Farah Maluf"></a>
                             <!-- <a href="#dialogRadial" name="modal" id="camera04" class="fundo pos04" title="Radial Leste"></a>-->
                             <a href="#dialogTiradentes" name="modal" id="camera05" class="fundo pos05" title="Avenida Tiradentes"></a>
                             
                             <!--<a href="#dialog" name="modal" id="camera07" class="fundo pos07" title="Bandeirantes"></a>-->
                             <a href="#dialogMarginalPinheiros" name="modal" id="camera08" class="fundo pos08" title="Marginal Pinheiros - Jockey Club"></a>
                             <a href="#dialogMarginalPinheiros2" name="modal" id="camera09" class="fundo pos09" title="Marginal Pinheiros - Est. Pinheiros"></a>
                             <a href="#dialogMarginalPinheiros3" name="modal" id="camera21" class="fundo pos21" title="Marginal Pinheiros - Av. dos Bandeirantes"></a>
                             <a href="#dialogSantana" name="modal" id="camera10" class="fundo pos10" title="SESC Santana"></a>
                             <a href="#dialogaSenna" name="modal" id="camera11" class="fundo pos11" title="Ayrton Senna"></a>
                             <a href="#dialogaImigrantes" name="modal" id="camera12" class="fundo pos12" title="Imigrantes"></a>
                             <a href="#dialogaAnchieta" name="modal" id="camera13" class="fundo pos13" title="Anchieta"></a>
                             <a href="#dialogaMarginalTiete" name="modal" id="camera14" class="fundo pos14" title="Marginal Tietê"></a> 
                             <!-- <a href="#dialogaAnhanguera" name="modal" id="camera15" class="fundo pos15" title="Anhanguera"></a>-->
                             <!--<a href="#dialogaBandeirantes" name="modal" id="camera16" class="fundo pos16" title="Bandeirantes"></a>-->
                             <a href="#dialogaRaposo" name="modal" id="camera17" class="fundo pos17" title="Raposo Tavares"></a>
                             <a href="#dialogPompeia" name="modal" id="camera18" class="fundo pos18" title="Avenida Pompéia"></a>
                             <a href="#dialogAricanduva" name="modal" id="camera19" class="fundo pos19" title="Aricanduva"></a>
                             <a href="#dialogFreguesia" name="modal" id="camera20" class="fundo pos20" title="Freguesia"></a>
                             <a href="#dialogRubemBerta" name="modal" id="camera22" class="fundo pos22" title="Avenida Rubem Berta"></a> 
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
                      <img src="http://200.136.27.15/cameras/imagem.php?cam=tiradentes" alt="Avenida Tiradentes">
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
                  <div id="dialogFreguesia" class="window">
                    <a href="#" class="close"></a><br />
                    <div class="textoModal">
                      <img src="http://200.136.27.15/cameras/imagem.php?cam=freguesia" alt="Freguesia do Ó">
                      <h4>Freguesia do Ó</h4> 
                      <p></p>
                    </div>
                  </div>
                  <!-- Máscara para cobrir a tela -->
                  <div id="mask"></div>
                 </div>
                 <!--/MODAl CAMERA verde-->
                 
                  <!--MODAl CAMERA verde-->
                <div class="verde">
                  <div id="dialogAricanduva" class="window">
                    <a href="#" class="close"></a><br />
                    <div class="textoModal">
                      <img src="http://200.136.27.15/cameras/imagem.php?cam=aricanduva" alt="Aricanduva">
                      <h4>Aricanduva</h4>  
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
                      <img src="http://200.136.27.15/cameras/imagem.php?cam=mpinheiros" alt="Marginal Pinheiros - Jockey Club">
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
                      <img src="http://200.136.27.15/cameras/imagem.php?cam=pompeia" alt="Avenida Pompéia">
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
                      <img src="http://200.136.27.15/cameras/imagem.php?cam=somar" alt="Marginal Pinheiros - Est. Pinheiros">
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
                  <div id="dialogaMarginalTiete" class="window">
                    <a href="#" class="close"></a><br />
                    <div class="textoModal">
                      <img src="http://200.136.27.15/cameras/imagem.php?cam=mtiete" alt="Marginal Tietê">
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
                      <img src="http://200.136.27.15/cameras/imagem.php?cam=belenzinho" alt="Belenzinho">
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
                      <img src="http://200.136.27.15/cameras/imagem.php?cam=santana"  alt="SESC Santana">
                      <h4>Avenida Dummont Villares</h4>  
                      <p></p>
                    </div>
                  </div>
                  <!-- Máscara para cobrir a tela -->
                  <div id="mask"></div>
                 </div>
                 <!--/MODAl CAMERA verde-->
                 
                <!--MODAl CAMERA verde-->
                <div class="verde">
                  <div id="dialogMarginalPinheiros3" class="window">
                    <a href="#" class="close"></a><br />
                    <div class="textoModal">
                      <img src="http://200.136.27.15/cameras/imagem.php?cam=emae"  alt="Marginal Pinheiros - Av. dos Bandeirantes">
                      <h4>Marginal Pinheiros - Av. dos Bandeirantes</h4>  
                      <p></p>
                    </div>
                  </div>
                  <!-- Máscara para cobrir a tela -->
                  <div id="mask"></div>
                 </div>
                 <!--/MODAl CAMERA verde-->

                <!--MODAl CAMERA verde-->
                <div class="verde">
                  <div id="dialogRubemBerta" class="window">
                    <a href="#" class="close"></a><br />
                    <div class="textoModal">
                      <img src="http://200.136.27.15/cameras/imagem.php?cam=rberta"  alt="Avenida Rubem Berta">
                      <h4>Avenida Rubem Berta</h4>  
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
                      <img  alt="Ayrton Senna" src="http://cmais.com.br/portal/images/capaPrograma/transito/transparent_loading.gif" id="img-ayrtonsenna">
                      <h4>Ayrton Senna</h4>
                      <form id="opcoes-ayrton-senna" action="" method="post" style="float: left;">
                        <select id="ayrton-senna" class="required">
                        </select>
                      </form> 
                      <div class="pageload" style="float: left; margin-top: 6px;"><img src="http://cmais.com.br/portal/images/capaPrograma/transito/transparent_loading.gif" alt="carregando..." /></div>
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
                      <img alt="Imigrantes" src="http://cmais.com.br/portal/images/capaPrograma/transito/transparent_loading.gif" id="img-imigrantes">
                      <h4>Imigrantes</h4>
                      <form id="opcoes-imigrantes" action="" method="post" style="float: left;">
                        <select id="imigrantes" class="required">
                        </select>
                      </form> 
                      <div class="pageload" style="float: left; margin-top: 6px;"><img src="http://cmais.com.br/portal/images/capaPrograma/transito/transparent_loading.gif" alt="carregando..." /></div>
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
                      <img alt="Anchieta" src="http://cmais.com.br/portal/images/capaPrograma/transito/transparent_loading.gif" id="img-anchieta">
                      <h4>Anchieta</h4>
                      <form id="opcoes-anchieta" action="" method="post" style="float: left;">
                        <select id="anchieta" class="required">
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
                  <div id="dialogaBandeirantes" class="window" style="top: 80px; left: 240px">
                    <a href="#" class="close"></a><br />
                    <div class="textoModal">
                      <!--img style="width: 310px; height: 240px;" alt="Bandeirantes" src="http://200.246.17.101/cameras/cam01.jpg" id="img-bandeirantes"-->
                      <img style="width: 310px; height: 240px;" alt="Bandeirantes" src="" id="img-bandeirantes">
                      <h4>Bandeirantes</h4>
                      <form id="opcoes-bandeirantes" action="" method="post">
                        <select id="bandeirantes" class="required">
                          <option value="" selected="selected"></option>
                          <option value="http://200.246.17.101/cameras/cam01.jpg">Bandeirantes - Km 13</option>
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
                      <!--img style="width: 310px; height: 240px;" alt="Anhanguera" src="http://200.246.17.101/cameras/cam18.jpg" id="img-anhanguera"-->
                      <img style="width: 310px; height: 240px;" alt="Anhanguera" src="" id="img-anhanguera">
                      <h4>Anhanguera</h4>
                      <form id="opcoes-anhanguera" action="" method="post">
                        <select id="anhanguera" class="required">
                          <option value="" selected="selected"></option>
                          <option value="http://200.246.17.101/cameras/cam18.jpg">Anhanguera - Km 13</option>
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
                            <td class="sbdireita"><img src="http://cmais.com.br/portal/images/capaPrograma/transito/mapa-sao-paulo-seta-verde.png"></td>
                          </tr>
                          <tr class="table-cor2">
                            <td >Castelo/A.Senna</td>
                            <td>22.6</td>
                            <td>2,3%</td>
                            <td class="sbdireita"><img src="http://cmais.com.br/portal/images/capaPrograma/transito/mapa-sao-paulo-seta-verde.png"></td>
                          </tr>
                          <tr class="table-cor1">
                            <td  class="sbesquerda table-av" rowspan="2">2 - Marginal Pinheiros</td>
                            <td>Castelo/Interlagos</td>
                            <td>18.5</td>
                            <td>28,3%</td>
                            <td class="sbdireita"><img src="http://cmais.com.br/portal/images/capaPrograma/transito/mapa-sao-paulo-seta-cinza.png"></td>
                          </tr>
                          <tr class="table-cor2">
                            <td>Interlagos/Castelo</td>
                            <td>22.6</td>
                            <td>2,3%</td>
                            <td class="sbdireita"><img src="http://cmais.com.br/portal/images/capaPrograma/transito/mapa-sao-paulo-seta-cinza.png"></td>
                          </tr>
                          <tr  class="table-cor1">
                            <td class="sbesquerda table-av" rowspan="2">3 - Bandeirantes</td>
                            <td>Imigrantes/Marginal</td>
                            <td>18.5</td>
                            <td>28,3%</td>
                            <td class="sbdireita"><img src="http://cmais.com.br/portal/images/capaPrograma/transito/mapa-sao-paulo-seta-verde.png"></td>
                          </tr>
                          <tr class="table-cor2">
                            <td>Marginal/Imigrantes</td>
                            <td>22.6</td>
                            <td>2,3%</td>
                            <td class="sbdireita"><img src="http://cmais.com.br/portal/images/capaPrograma/transito/mapa-sao-paulo-seta-verm.png"></td>
                          </tr>
                          <tr  class="table-cor1">
                            <td class="sbesquerda table-av" rowspan="2">4 - Eixo Norte-Sul</td>
                            <td>Aeroporto/Santana</td>
                            <td>18.5</td>
                            <td>28,3%</td>
                            <td class="sbdireita"><img src="http://cmais.com.br/portal/images/capaPrograma/transito/mapa-sao-paulo-seta-cinza.png"></td>
                          </tr>
                          <tr class="table-cor2">
                            <td>Santana/Aeroporto</td>
                            <td>22.6</td>
                            <td>2,3%</td>
                            <td class="sbdireita"><img src="http://cmais.com.br/portal/images/capaPrograma/transito/mapa-sao-paulo-seta-verde.png"></td>
                          </tr>
                          <tr  class="table-cor1">
                            <td class="sbesquerda sbembaixo table-av" rowspan="2">5 - Eixo Leste-Oeste</td>
                            <td>Lapa/Penha</td>
                            <td>18.5</td>
                            <td>28,3%</td>
                            <td class="sbdireita"><img src="http://cmais.com.br/portal/images/capaPrograma/transito/mapa-sao-paulo-seta-verm.png"></td>
                          </tr>
                          <tr  class="table-cor2">
                            <td class="sbembaixo">Penha/Lapa</td>
                            <td class="sbembaixo">22.6</td>
                            <td class="sbembaixo">2,3%</td>
                            <td class="sbembaixo sbdireita"><img src="http://cmais.com.br/portal/images/capaPrograma/transito/mapa-sao-paulo-seta-cinza.png"></td>
                          </tr>
                        </table> 
                      
                    </div>
                  </div>
                  
                  <!-- Máscara para cobrir a tela -->
                    <div id="mask"></div>
                 
                 </div>
                           <!--/MODAl CAMERA Eixo-->
                
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
                  <!--facebook-->
                  
                  <!-- Máscara para cobrir a tela -->
                    <div id="mask"></div>
                 
                 </div>
                 
                           <!--/MODAl CAMERA Corre-->                          <!--/MODAIS--> 
                          
                       </div>
                       </div>
                       </div>
                       <!--Mapa-->
                       
                       
                     </li>
                     <!--CAMERA AO VIVO-->
                     
                     <!--MAPA SAO PAULO-->
                     <li class="conteudo-mapa-sao-paulo" style="display:block">
                       <iframe width="970" height="880" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maplink.com.br/transitoonline/tvcultura_2" style="border: 0px solid gray; width: 964px;height:880px;"></iframe>
                     </li>
                     <!--MAPA SAO PAULO--> 
                     

                  </ul>
                  <!--CONTEUDOS --> 
                  
                       
              </div>
              <!-- MENU E OPÇÕES--> 
            
              <!-- BOX PUBLICIDADE 2 -->
              <!--div class="box-publicidade pub-grd grid3"-->
                <!-- cmais-assets-728x90 -->
                <!--script type='text/javascript'>
                GA_googleFillSlot("cmais-assets-728x90");
                </script-->
              <!--/div-->
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
