<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/sites/doctorwho.css" type="text/css" />

<?php use_helper('I18N', 'Date') ?>
<?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'section' => $section)) ?>
  <div class="bg-doctorWho">
      <!-- CAPA SITE -->
      <div id="capa-site">
      <!--img class="drWho" src="http://cmais.com.br/portal/images/capaPrograma/doctorwho/bg-drWho.jpg" alt="Doctor Who" />
      <div class="redes">
              <div class="curtir">
          <fb:like href="https://www.facebook.com/pages/Dr-Who/341430049210852" send="false" layout="button_count" width="75" show_faces="true"></fb:like>
              </div>
            </div-->
      <!-- BARRA SITE --> 
        <div id="barra-site">
          <div class="topo-programa"> 
              <h2><a title="Roda Viva" href="http://tvcultura.cmais.com.br/doctorwho"><img src="http://cmais.com.br/portal/images/capaPrograma/doctorwho/logo-doctorwho.png" alt="Doctor Who" title="Doctor Who"></a></h2>
            <!-- curtir -->
                <div class="redes">
                  <div class="curtir">
                    <div style="display:block; float: left; margin-right:10px;">
                    <div id="___plusone_0" style="height: 20px; width: 32px; display: inline-block; text-indent: 0pt; margin: 0pt; padding: 0pt; background: none repeat scroll 0% 0% transparent; border-style: none; float: none; line-height: normal; font-size: 1px; vertical-align: baseline;"><iframe width="100%" scrolling="no" frameborder="0" title="+1" vspace="0" tabindex="-1" style="position: static; left: 0pt; top: 0pt; width: 32px; margin: 0px; border-style: none; height: 20px; visibility: visible;" src="https://plusone.google.com/_/+1/fastbutton?url=http%3A%2F%2Ftvcultura.cmais.com.br%2Frodaviva&amp;size=medium&amp;count=false&amp;annotation=&amp;hl=pt-BR&amp;jsh=m%3B%2F_%2Fapps-static%2F_%2Fjs%2Fgapi%2F__features__%2Frt%3Dj%2Fver%3DO8v2EQ8nyPM.en.%2Fsv%3D1%2Fam%3D!uXA1SJUHioGIFdxJYA%2Fd%3D1%2F#id=I1_1328286265338&amp;parent=http%3A%2F%2Ftvcultura.cmais.com.br&amp;rpctoken=425021818&amp;_methods=onPlusOne%2C_ready%2C_close%2C_open%2C_resizeMe%2C_renderstart" name="I1_1328286265338" marginwidth="0" marginheight="0" id="I1_1328286265338" hspace="0" allowtransparency="true"></iframe></div>
                    </div>
                    <fb:like href="https://www.facebook.com/pages/Dr-Who/341430049210852" send="false" layout="button_count" width="75" show_faces="true"></fb:like>
                  </div>
                  <iframe scrolling="no" frameborder="0" allowtransparency="true" src="http://platform.twitter.com/widgets/tweet_button.1326407570.html#_=1328286265242&amp;_version=2&amp;count=horizontal&amp;enableNewSizing=false&amp;id=twitter-widget-0&amp;lang=en&amp;original_referer=http%3A%2F%2Ftvcultura.cmais.com.br%2Frodaviva&amp;size=m&amp;text=Roda%20Viva%20-%20cmais%2B%20O%20portal%20de%20conte%C3%BAdo%20da%20Cultura&amp;url=http%3A%2F%2Ftvcultura.cmais.com.br%2Frodaviva&amp;via=rodaviva" class="twitter-share-button twitter-count-horizontal" style="width: 110px; height: 20px;" title="Twitter Tweet Button"></iframe>
                  <ul>                         
                    <li><a title="Facebook" href="" class="fb">Facebook</a></li>
                    <li><a title="Twitter" href="" class="twt">Twitter</a></li>
                    <li><a title="YouTube" href="" class="ytb">YouTube</a></li>
                    <li><a title="RSS" href="" class="rss">RSS</a></li>
                  </ul>
                </div>
               <!-- /curtir -->
                    <!-- horario -->
                <div id="horario">
                  <p>Segunda a sexta às 21h30</p>
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
                <a href="<?php echo $section->retriveUrl()?>" title="<?php echo $section->getTitle()?>"><?php echo $section->getTitle()?></a>
              </div>
              <?php endif; ?>
    
            </div>
            <!-- /box-topo -->
            
          </div>
          <!-- /BARRA SITE -->
        <!-- MIOLO -->
          <div id="miolo">
        <div class="mioloDrWho">
          <div class="temporadasWrapper">
            <div class="temporadas">
              <p class="titTem"><span>1ª a 4ª Temporada</span></p>
              <a class="imgTem" href="/doctorwho/primeiroaoquarto/index.html"><img src="http://cmais.com.br/portal/images/capaPrograma/doctorwho/img-lixo.jpg" alt="Doctor Who" /></a>
              <a class="txtTem" href="/doctorwho/primeiroaoquarto/index.html">
                <!--h3></h3>
                <p></p-->
              </a>
            </div>
            <div class="temporadas">
              <p class="titTem"><span>5ª Temporada</span></p>
              <a class="imgTem" href="/doctorwho/quintoano/index.html"><img src="http://cmais.com.br/portal/images/capaPrograma/doctorwho/img-lixo1.jpg" alt="Doctor Who" /></a>
              <a class="txtTem" href="/doctorwho/quintoano/index.html">
                <!--h3></h3>
                <p></p-->
              </a>
            </div>
            <div class="temporadas">
              <p class="titTem"><span>6ª Temporada</span></p> 
              <a class="imgTem" href="/doctorwho/sextoano/index.html"><img src="http://cmais.com.br/portal/images/capaPrograma/doctorwho/img-lixo2.jpg" alt="Doctor Who" /></a>
              <a class="txtTem" href="/doctorwho/sextoano/index.html">
              	<!-- sim, sou eu! -->
                <!--h3></h3>
                <p></p-->
              </a>
            </div>
          </div>
        </div> 
          </div>
        <!-- /MIOLO -->
      </div>
    <!-- /CAPA SITE -->
  </div>