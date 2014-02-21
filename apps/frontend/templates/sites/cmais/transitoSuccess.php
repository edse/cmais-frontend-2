<script type="text/javascript" src="http://cmais.com.br/portal/js/mediaplayer/swfobject.js"></script>
<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/secoes/transito.css" type="text/css" />

<?php use_helper('I18N', 'Date') ?>
<?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'asset' => $asset, 'section' => $section)) ?>

    <!-- CAPA SITE -->
    <div id="capa-site">

      <?php if(isset($displays["alerta"])) include_partial_from_folder('blocks','global/breakingnews', array('displays' => $displays["alerta"])) ?>

      <!-- barra site -->
      <div id="barra-site">

        <!-- box-topo -->
        <div class="box-topo grid3">
          <h3 class="tit-pagina">Trânsito Ao Vivo em São Paulo</h3>
          <div class="navegacao txt-10">
            <a href="http://cmais.com.br" title="Home">Home</a>
            <span>&gt;</span>
            <a href="http://cmais.com.br/jornalismo" title="Jornalismo">Jornalismo</a>
            <span>&gt;</span>
            <a href="http://cmais.com.br/jornalismo/transito" title="Transito">Tr&acirc;nsito</a>
          </div>
        </div>
        <!-- /box-topo -->
        
      </div>
      <!-- /barra site -->

      <!-- MIOLO -->
      <div id="miolo">

        <!-- BOX LATERAL -->
        <?php include_partial_from_folder('blocks','global/shortcuts') ?>
        <!-- BOX LATERAL -->

        <!-- CONTEUDO PAGINA -->
        <div id="conteudo-pagina">

          <!-- CAPA -->
          <div class="capa grid3">
            
            <!-- barra compartilhar -->
            <!--?php include_partial_from_folder('blocks','global/share-small', array('site' => $site, 'uri' => $uri)) ?-->
            <!-- /barra compartilhar -->

            <!-- TRANSITO -->
            <div class="box-transito grid3">
              <div class="tiete grid1">
                <p>Bairro da Lapa</p>
                <p class="desc">Av. Nossa Senhora da Lapa</p>

                <!-- video player -->
                <div id="livestream"></div>
                <script>
                    var so = new SWFObject('http://cmais.com.br/portal/js/mediaplayer/player.swf','mpl','310','240','9');
                    so.addVariable('controlbar', 'over');
                    so.addVariable('autostart', 'true');
                    so.addVariable('streamer', 'rtmp://200.136.27.12/live');
                    so.addVariable('file', 'camera');
                    so.addVariable('type', 'video');
                    so.addParam('allowscriptaccess','always');
                    so.addParam('allowfullscreen','true');
                    so.addParam('wmode','transparent');
                    so.write("livestream");

                    $(document).ready(function() {
                      $("#opcoes-litoral").change(function () {
                        $("#opcoes-litoral option:selected").each(function () {
                          $("#img-litoral").attr('src', $(this).val());
                        });
                      }).change();
                      
                      $("#opcoes-interior").change(function () {
                        $("#opcoes-interior option:selected").each(function () {
                          $("#img-interior").attr('src', $(this).val());
                        });
                      }).change();

                      setInterval('change1()', 10000);
                      setInterval('change2()', 10000);
                      
                    });

                    function change1(){
                      $("#opcoes-interior").change();
                    }
                    function change2(){
                      $("#opcoes-litoral").change();
                    }

                </script>
                <!-- /video player -->

              </div>
              
              <div class="outras grid1">
                <p>Estradas para o litoral</p>
                <form id="opcoes-litoral" action="" method="post">
                  <select id="opcao-via-1" class="required"> 
                    <!--
                    <option value="http://ecovias.com.br/Content/Cameras/Imigrantes-12.jpg">Imigrantes - Planalto</option>
                    <option value="http://ecovias.com.br/Content/Cameras/Imigrantes-20.jpg">Imigrantes - Planalto 2</option>
                    <option value="http://ecovias.com.br/Content/Cameras/Imigrantes-28.jpg">Imigrantes - Balança Planalto</option>
                    <option value="http://ecovias.com.br/Content/Cameras/Imigrantes-32.jpg">Imigrantes - Pedágio Piratininga</option>
                    <option value="http://ecovias.com.br/Content/Cameras/Imigrantes-40.jpg">Imigrantes - Planalto 3</option>
                    <option value="http://ecovias.com.br/Content/Cameras/Imigrantes-48.jpg">Imigrantes - Serra</option>
                    <option value="http://ecovias.com.br/Content/Cameras/Imigrantes-56.jpg">Imigrantes - Balança Baixada</option>
                    <option value="http://ecovias.com.br/Content/Cameras/Imigrantes-58.jpg">Imigrantes - Acesso Baixada</option>
                    <option value="http://ecovias.com.br/Content/Cameras/Anchieta-13.jpg">Anchieta - Ribeirão dos Couros</option>
                    <option value="http://ecovias.com.br/Content/Cameras/Anchieta-23.jpg">Anchieta - Trevo da Volksvagem</option>
                    <option value="http://ecovias.com.br/Content/Cameras/Anchieta-31.jpg">Anchieta - Pedágio Riacho Grande</option>
                    <option value="http://ecovias.com.br/Content/Cameras/Anchieta-43.jpg">Anchieta - Serra</option>
                    <option value="http://ecovias.com.br/Content/Cameras/Anchieta-55.jpg">Anchieta - Trevo de Cubatão</option>
                    <option value="http://ecovias.com.br/Content/Cameras/Conego-250.jpg">Cônego Domênico Rangoni - Pedágio Santos</option>
                    <option value="http://ecovias.com.br/Content/Cameras/Nobrega-280.jpg">Padre Manoel da Nobrega - Pedágio São Vicente</option>
                    -->
                    <option value="http://www.der.sp.gov.br/img_cameras/name9.jpg">Padre Manoel da Nobrega - Km 292</option>
                    <option value="http://www.der.sp.gov.br/img_cameras/name2.jpg">Padre Manoel da Nobrega - Km 323</option>
                    <option value="http://www.der.sp.gov.br/img_cameras/name13.jpg">Padre Manoel da Nobrega - Km 337</option>
                    <option value="http://www.der.sp.gov.br/img_cameras/name3.jpg">Padre Manoel da Nobrega - Km 344</option>
                    <option value="http://www.dersa.sp.gov.br/santos.jpg">Balsa de Santos -> Guarujá</option>
                    <option value="http://www.dersa.sp.gov.br/guaruja1.jpg">Balsa de Guarujá -> Santos</option>
                    <option value="http://www.dersa.sp.gov.br/bertioga/bertioga.jpg">Balsa de Bertioga -> Guarujá</option>
                    <option value="http://www.dersa.sp.gov.br/saosebastiao.jpg">Balsa de São Sebastião -> Ilha Bela</option>
                    <option value="http://www.dersa.sp.gov.br/ilhabela.jpg" selected="selected">Balsa de Ilha Bela -> São Sebastião</option>
                  </select>
                </form>
                <img id="img-litoral" src="" alt="nome da via" style="width: 310px; height: 240px;" />  
              </div>
              
              <div class="estradas grid1">
                <p>Estradas para o interior</p>
                <form id="opcoes-interior" action="" method="post">
                  <select id="opcao-via-2" class="required"> 
                    <option value="http://www.der.sp.gov.br/img_cameras/name25.jpg" selected="selected">Raposo Tavares - Km 12,5</option>
                    <option value="http://www.der.sp.gov.br/img_cameras/name8.jpg">Raposo Tavares - Km 17</option>
                    <option value="http://www.der.sp.gov.br/img_cameras/name30.jpg">Raposo Tavares - Km 20</option>
                    <option value="http://200.246.17.101/cameras/cam18.jpg">Anhanguera - Km 13</option>
                    <option value="http://200.246.17.101/cameras/cam20.jpg">Anhanguera - Km 22</option>
                    <option value="http://200.246.17.101/cameras/cam21.jpg">Anhanguera - Km 26</option>
                    <option value="http://200.246.17.101/cameras/cam23.jpg">Anhanguera - Km 52</option>
                    <option value="http://200.246.17.101/cameras/cam01.jpg">Bandeirantes - Km 13</option>
                    <option value="http://200.246.17.101/cameras/cam02.jpg">Bandeirantes - Km 21</option>
                    <option value="http://200.246.17.101/cameras/cam03.jpg">Bandeirantes - Km 27</option>
                    <option value="http://200.246.17.101/cameras/cam05.jpg">Bandeirantes - Km 38</option>
                    <option value="http://200.246.17.101/cameras/cam07.jpg">Bandeirantes - Km 47</option>                  </select>
                </form>
                <img id="img-interior" src="" alt="nome da via" style="width: 310px; height: 240px;" />  
              </div>
              
              <script>
              $.ajax({
                  url: "http://app.cmais.com.br/portal/cams.php?s=ecovias",
                  dataType: "jsonp",
                  success: function(data){
                    $.each(data, function(i,data){
                      $('#opcao-via-1').append('<option value="'+data.src+'">'+data.title+'</option>');
                    });
                  }
                });
                $.ajax({
                  url: "http://app.cmais.com.br/portal/cams.php?s=ecopistas",
                  dataType: "jsonp",
                  success: function(data){
                    $.each(data, function(i,data){
                      $('#opcao-via-2').append('<option value="'+data.src+'">'+data.title+'</option>');
                    });
                  }
                });
              </script>
              
              <div class="mapa-transito grid3">
                <iframe width="970" height="798" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com.br/maps?f=q&amp;source=s_q&amp;hl=pt-BR&amp;geocode=&amp;q=S%C3%A3o+Paulo+-+S%C3%A3o+Paulo&amp;aq=0&amp;sll=-14.239424,-53.186502&amp;sspn=53.291683,107.138672&amp;ie=UTF8&amp;hq=&amp;hnear=S%C3%A3o+Paulo&amp;z=10&amp;ll=-23.548943,-46.638818&amp;output=embed"></iframe><br /><small><a href="http://maps.google.com.br/maps?f=q&amp;source=embed&amp;hl=pt-BR&amp;geocode=&amp;q=S%C3%A3o+Paulo+-+S%C3%A3o+Paulo&amp;aq=0&amp;sll=-14.239424,-53.186502&amp;sspn=53.291683,107.138672&amp;ie=UTF8&amp;hq=&amp;hnear=S%C3%A3o+Paulo&amp;z=10&amp;ll=-23.548943,-46.638818" style="color:#0000FF;text-align:left">Exibir mapa ampliado</a></small>
              </div>
            
            </div>
            <!-- /TRANSITO -->

            <!-- BOX PUBLICIDADE 2 -->
          <div class="box-publicidade pub-grd grid3">
            <!-- cmais-assets-728x90 -->
            <script type='text/javascript'>
            GA_googleFillSlot("cmais-assets-728x90");
            </script>
          </div>
          <!-- / BOX PUBLICIDADE 2 -->

          </div><!-- /CAPA -->
          
        </div>
        <!-- /CONTEUDO PAGINA -->
        
      </div>
      <!-- /MIOLO -->

    </div>
    <!-- / CAPA SITE -->
    
<div id="result" style="display:none;"></div>

