<link rel="stylesheet" href="/portal/css/tvcultura/sites/amigosecreto.css" type="text/css" />
<?php use_helper('I18N', 'Date')
?>
<?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'section' => $section))
?>

<!--HEADER AMIGO SECRETO-->
<div id="header-as">
  <div class="fundo-as-1">
    <a href="/amigosecreto" title="Amigo Secreto" id="btn-as-tv-cultura"></a>
    <p><?php echo $displays["alerta"][0]->getDescription();?></p>
  </div>
  <!--FUNDO CLARO-A-->
  <div class="fundo-as-2">
    <!--FUNDO CLARO-B-->
    <div class="fundo-as-2a"></div>
    <!--FUNDO CLARO-B-->
      <!--CAPA-SITE-->
      <div id="capa-site" class="as">
        <?php if(isset($displays["alerta"])) include_partial_from_folder('blocks','global/breakingnews', array('displays' => $displays["alerta"]))
        ?>
     
        <!-- MIOLO -->
        <div id="miolo">
          <?php include_partial_from_folder('blocks','global/shortcuts')
          ?>
      
          <!-- CONTEUDO PAGINA -->
          <div id="conteudo-pagina">
            <?php
            /*
            if ((isset($displays["destaque-principal"])) && (count($displays["destaque-principal"]) > 0))
              include_partial_from_folder('blocks', 'global/display3c', array('displays' => $displays["destaque-principal"]));
            else
              include_partial_from_folder('blocks', 'global/display5c-v2', array('displays' => $displays["destaque-principal-2"]));
            */
            ?>
            <!--ESTATICO-->
            <div class="novoDestaque">
              <div class="enunciado">
                <h2><a href="http://tvcultura.cmais.com.br/grade">Confira na tela da Cultura</a></h2>
                <span></span>
              </div>
              <div class="destaque-5">
                <ul id="v2" class="grid3">
                                                      <li>
                  <div class="curtir">
                    <fb:like href="http://tvcultura.cmais.com.br/matinecultura" layout="button_count" show_faces="false" width="170" fb-xfbml-state="rendered" class="fb_edge_widget_with_comment fb_iframe_widget"><span style="height: 20px; width: 80px;"><iframe id="f2065bcb48" name="f16cf68d38" scrolling="no" style="border: none; overflow: hidden; height: 20px; width: 80px;" title="Like this content on Facebook." class="fb_ltr" src="http://www.facebook.com/plugins/like.php?api_key=124792594261614&amp;locale=pt_BR&amp;sdk=joey&amp;channel_url=http%3A%2F%2Fstatic.ak.facebook.com%2Fconnect%2Fxd_arbiter.php%3Fversion%3D17%23cb%3Df381592aa%26origin%3Dhttp%253A%252F%252Ftvcultura.cmais.com.br%252Ff3bce5330c%26domain%3Dtvcultura.cmais.com.br%26relation%3Dparent.parent&amp;href=http%3A%2F%2Ftvcultura.cmais.com.br%2Fmatinecultura&amp;node_type=link&amp;width=170&amp;layout=button_count&amp;colorscheme=light&amp;show_faces=false&amp;extended_social_context=false"></iframe></span></fb:like>
                  </div>
                    <div class="logo">
                      <a href="http://tvcultura.cmais.com.br/matinecultura">
                        <img title="Matinê Cultura" alt="Matinê Cultura" src="http://midia.cmais.com.br/programs/4d7c282bc8951a202c289ae2f2855a2085d7b599.png">
                      </a>                      
                    </div>
                    <a class="foto" href="http://tvcultura.cmais.com.br/matinecultura" title="Super K">
                      <img alt="Super K" src="http://midia.cmais.com.br/displays/8e9b56f284e7a2758c2fe8f6426c141900bd9a47.jpg">
                    </a>
                    <div class="descricao">
                      <a class="tit" href="http://tvcultura.cmais.com.br/matinecultura" title="Super K">
                        Super K                     </a>
                      <a href="http://tvcultura.cmais.com.br/matinecultura" title="Super K">Terça-feira, às 17:30</a>
                    </div>
                    
                  </li>
                                                      <li>
                  <div class="curtir">
                    <fb:like href="https://www.facebook.com/Cartaozinho" layout="button_count" show_faces="false" width="170" fb-xfbml-state="rendered" class="fb_edge_widget_with_comment fb_iframe_widget"><span style="height: 20px; width: 83px;"><iframe id="f5ac6adfc" name="f229a21964" scrolling="no" style="border: none; overflow: hidden; height: 20px; width: 83px;" title="Like this content on Facebook." class="fb_ltr" src="http://www.facebook.com/plugins/like.php?api_key=124792594261614&amp;locale=pt_BR&amp;sdk=joey&amp;channel_url=http%3A%2F%2Fstatic.ak.facebook.com%2Fconnect%2Fxd_arbiter.php%3Fversion%3D17%23cb%3Df209e3ad18%26origin%3Dhttp%253A%252F%252Ftvcultura.cmais.com.br%252Ff3bce5330c%26domain%3Dtvcultura.cmais.com.br%26relation%3Dparent.parent&amp;href=https%3A%2F%2Fwww.facebook.com%2FCartaozinho&amp;node_type=link&amp;width=170&amp;layout=button_count&amp;colorscheme=light&amp;show_faces=false&amp;extended_social_context=false"></iframe></span></fb:like>
                  </div>
                    <div class="logo">
                      <a href="http://cmais.com.br/cartaozinho">
                        <img title="Cartãozinho Verde" alt="Cartãozinho Verde" src="http://midia.cmais.com.br/programs/35cb6940ac81c1444861fb9fd2042df36b34d4e4.png">
                      </a>                      
                    </div>
                    <a class="foto" href="http://cmais.com.br/cartaozinho" title="Feras e Ferinhas: Raí">
                      <img alt="Feras e Ferinhas: Raí" src="http://midia.cmais.com.br/displays/259dacc9128c3cf2417a2fd2296b8debc30bb88f.jpg">
                    </a>
                    <div class="descricao">
                      <a class="tit" href="http://cmais.com.br/cartaozinho" title="Feras e Ferinhas: Raí">
                        Feras e Ferinhas: Raí                     </a>
                      <a href="http://cmais.com.br/cartaozinho" title="Feras e Ferinhas: Raí">Terça-feira, às 19:00</a>
                    </div>
                    
                  </li>
                                                      <li>
                  <div class="curtir">
                    <fb:like href="https://www.facebook.com/penarua" layout="button_count" show_faces="false" width="170" fb-xfbml-state="rendered" class="fb_edge_widget_with_comment fb_iframe_widget"><span style="height: 20px; width: 92px;"><iframe id="f3495acc" name="f36a800e68" scrolling="no" style="border: none; overflow: hidden; height: 20px; width: 92px;" title="Like this content on Facebook." class="fb_ltr" src="http://www.facebook.com/plugins/like.php?api_key=124792594261614&amp;locale=pt_BR&amp;sdk=joey&amp;channel_url=http%3A%2F%2Fstatic.ak.facebook.com%2Fconnect%2Fxd_arbiter.php%3Fversion%3D17%23cb%3Df3b8c4eba%26origin%3Dhttp%253A%252F%252Ftvcultura.cmais.com.br%252Ff3bce5330c%26domain%3Dtvcultura.cmais.com.br%26relation%3Dparent.parent&amp;href=https%3A%2F%2Fwww.facebook.com%2Fpenarua&amp;node_type=link&amp;width=170&amp;layout=button_count&amp;colorscheme=light&amp;show_faces=false&amp;extended_social_context=false"></iframe></span></fb:like>
                  </div>
                    <div class="logo">
                      <a href="http://cmais.com.br/penarua">
                        <img title="Pé na Rua" alt="Pé na Rua" src="http://midia.cmais.com.br/programs/61a5c9fbb0c283c56af15ef6bebd4d6dbf7d44c1.png">
                      </a>                      
                    </div>
                    <a class="foto" href="http://cmais.com.br/penarua" title="Mais vale uma amizade colorida que um namoro em preto e branco?">
                      <img alt="Mais vale uma amizade colorida que um namoro em preto e branco?" src="http://midia.cmais.com.br/displays/941e8554563fdfada3cbaa1b620b72f7153aea18.jpg">
                    </a>
                    <div class="descricao">
                      <a class="tit" href="http://cmais.com.br/penarua" title="Mais vale uma amizade colorida que um namoro em preto e branco?">
                        Mais vale uma amizade colorida que um namoro em preto e branco?                     </a>
                      <a href="http://cmais.com.br/penarua" title="Mais vale uma amizade colorida que um namoro em preto e branco?">Terça-feira, às 19:15</a>
                    </div>
                    
                  </li>
                                                      <li>
                  <div class="curtir">
                    <fb:like href="https://www.facebook.com/CacadoresDeMitosNaTVCultura" layout="button_count" show_faces="false" width="170" fb-xfbml-state="rendered" class="fb_edge_widget_with_comment fb_iframe_widget"><span style="height: 20px; width: 83px;"><iframe id="fdabeb1d8" name="f9ce4f01" scrolling="no" style="border: none; overflow: hidden; height: 20px; width: 83px;" title="Like this content on Facebook." class="fb_ltr" src="http://www.facebook.com/plugins/like.php?api_key=124792594261614&amp;locale=pt_BR&amp;sdk=joey&amp;channel_url=http%3A%2F%2Fstatic.ak.facebook.com%2Fconnect%2Fxd_arbiter.php%3Fversion%3D17%23cb%3Df2d5cd893c%26origin%3Dhttp%253A%252F%252Ftvcultura.cmais.com.br%252Ff3bce5330c%26domain%3Dtvcultura.cmais.com.br%26relation%3Dparent.parent&amp;href=https%3A%2F%2Fwww.facebook.com%2FCacadoresDeMitosNaTVCultura&amp;node_type=link&amp;width=170&amp;layout=button_count&amp;colorscheme=light&amp;show_faces=false&amp;extended_social_context=false"></iframe></span></fb:like>
                  </div>
                    <div class="logo">
                      <a href="http://tvcultura.cmais.com.br/cacadoresdemitos">
                        <img title="Caçadores de Mitos" alt="Caçadores de Mitos" src="http://midia.cmais.com.br/programs/b184bd0d97a090b726b84bf85ab4780344cf2cdc.png">
                      </a>                      
                    </div>
                    <a class="foto" href="http://tvcultura.cmais.com.br/cacadoresdemitos" title="Tortura de Bambu">
                      <img alt="Tortura de Bambu" src="http://midia.cmais.com.br/assets/image/image-9/49a59c70644a60590ee9fd7cf591c428cd253096.jpg">
                    </a>
                    <div class="descricao">
                      <a class="tit" href="http://tvcultura.cmais.com.br/cacadoresdemitos" title="Tortura de Bambu">
                        Tortura de Bambu                      </a>
                      <a href="http://tvcultura.cmais.com.br/cacadoresdemitos" title="Tortura de Bambu">Terça-feira, às 19:30</a>
                    </div>
                    
                  </li>
                                                      <li>
                  <div class="curtir">
                    <fb:like href="https://www.facebook.com/sarahjanenatvcultura" layout="button_count" show_faces="false" width="170" fb-xfbml-state="rendered" class="fb_edge_widget_with_comment fb_iframe_widget"><span style="height: 20px; width: 96px;"><iframe id="f148ac43e" name="f2356703c" scrolling="no" style="border: none; overflow: hidden; height: 20px; width: 96px;" title="Like this content on Facebook." class="fb_ltr" src="http://www.facebook.com/plugins/like.php?api_key=124792594261614&amp;locale=pt_BR&amp;sdk=joey&amp;channel_url=http%3A%2F%2Fstatic.ak.facebook.com%2Fconnect%2Fxd_arbiter.php%3Fversion%3D17%23cb%3Dfce4f4dc%26origin%3Dhttp%253A%252F%252Ftvcultura.cmais.com.br%252Ff3bce5330c%26domain%3Dtvcultura.cmais.com.br%26relation%3Dparent.parent&amp;href=https%3A%2F%2Fwww.facebook.com%2Fsarahjanenatvcultura&amp;node_type=link&amp;width=170&amp;layout=button_count&amp;colorscheme=light&amp;show_faces=false&amp;extended_social_context=false"></iframe></span></fb:like>
                  </div>
                    <div class="logo">
                      <a href="http://tvcultura.cmais.com.br/sarahjane">
                        <img title="As Aventuras de Sarah Jane" alt="As Aventuras de Sarah Jane" src="http://midia.cmais.com.br/programs/1bbb78ac7fc79823f0840bbe9ab3c66867e1e68d.png">
                      </a>                      
                    </div>
                    <a class="foto" href="http://tvcultura.cmais.com.br/sarahjane" title="O Garoto Perdido">
                      <img alt="O Garoto Perdido" src="http://midia.cmais.com.br/assets/image/image-9/d8c076e76a71db997e8e1ee8463f53281adb85cb.jpg">
                    </a>
                    <div class="descricao">
                      <a class="tit" href="http://tvcultura.cmais.com.br/sarahjane" title="O Garoto Perdido">
                        O Garoto Perdido                      </a>
                      <a href="http://tvcultura.cmais.com.br/sarahjane" title="O Garoto Perdido">Terça-feira, às 20:15</a>
                    </div>
                    
                  </li>
                                   </ul>
              </div>
            </div>
            <!--ESTATICO-->
      
            <!-- CAPA -->
            <div class="capa grid3">
              <!-- ESQUERDA -->
              <div id="esquerda" class="grid2">
                <!-- col-esq -->
                <div class="col-esq grid1">
                  <?php //include_partial_from_folder('blocks','global/display-1c-live')
                  ?>
                  <!--ESTATICO-->
                  <div class="box-padrao novoNoAr grid1">
                    <div class="enunciado">
                      <h2>No Ar</h2>
                      <span></span>
                    </div>
                    <div class="noAr-box">
                                          <a href="http://cmais.com.br/quintaldacultura" title="">
                        <img src="http://midia.cmais.com.br/programs/c6075c3e3c86909fddd816089f5bed0b2bb6bb21.jpg" alt="Quintal da Cultura">
                      </a>
                                          <p class="chapeu">Quintal da Cultura</p><br>
                      <a class="titulos" href="http://cmais.com.br/quintaldacultura" title=""></a>
                      <p>Aqui no Quintal, a criançada pode brincar e assistir a uma programação inteligente!</p>
                    </div>
                  </div>
                  <div class="box-padrao proximasAtracoes grid1">
                        <div class="enunciado">
                          <h2>Próximas Atrações</h2>
                        </div>
                        <div class="proximasAtracoes-box">
                          <p><span>17:30</span><a href="http://tvcultura.cmais.com.br/matinecultura" title="Matinê Cultura">Matinê Cultura</a></p>
                          <p><span>19:00</span><a href="http://tvcultura.cmais.com.br/cartaozinho" title="Cartãozinho Verde">Cartãozinho Verde</a></p>
                          <a class="gradeCompleta" href="http://cmais.com.br/grade" title="Veja a grade completa">Veja a grade completa</a>
                        </div>
                      </div>
                  <!--ESTATICO-->
      
                  <?php //include_partial_from_folder('blocks','global/display-1c-coming')
                  ?>
      
                  <?php if(isset($displays["destaque-padrao-1"])) include_partial_from_folder('blocks','global/display1c-news', array('displays' => $displays["destaque-padrao-1"]))
                  ?>
      
                  <?php if(isset($displays["destaque-quintal-da-cultura"])) include_partial_from_folder('blocks','global/display1c-quintal', array('displays' => $displays["destaque-quintal-da-cultura"]))
                  ?>
      
                  <?php if(isset($displays["destaque-noticias"])) include_partial_from_folder('blocks','global/news', array('displays' => $displays["destaque-noticias"]))
                  ?>
      
                  <?php if(isset($displays["publicidade-300x50"])) include_partial_from_folder('blocks','global/banner-300x50', array('displays' => $displays["publicidade-300x50"]))
                  ?>
                </div>
                <!-- /col-esq -->
                <!-- col-dir -->
                <div class="col-dir grid1">
                  <?php if(isset($displays["destaque-padrao-2"])) include_partial_from_folder('blocks','global/display1c-news', array('displays' => $displays["destaque-padrao-2"]))
                  ?>
      
                  <?php if(isset($displays["destaque-padrao-3"])) include_partial_from_folder('blocks','global/display1c-news', array('displays' => $displays["destaque-padrao-3"]))
                  ?>
      
                  <?php if(isset($displays["destaque-padrao-4"])) include_partial_from_folder('blocks','global/display1c-news', array('displays' => $displays["destaque-padrao-4"]))
                  ?>
      
                  <?php if(count($displays["destaque-padrao-5"]) > 0 ) include_partial_from_folder('blocks','global/display1c-news', array('displays' => $displays["destaque-padrao-5"]))
                  ?>
                </div>
                <!-- /col-dir -->
              </div>
              <!-- /ESQUERDA -->
              <!-- DIREITA -->
              <div id="direita" class="grid1">
                <!-- publicidade -->
                <div class="box-publicidade grid1">
                  <!-- home-geral300x250 -->
                  <script type='text/javascript'>
              GA_googleFillSlot("tvcultura-homepage-300x250");
      
                  </script>
                </div>
                <!-- /publicidade -->
                <!-- BOX PADRAO Noticia -->
                <div class="box-padrao grid1">
                  <!--div class="topo claro">
                  <span></span>
                  <div class="capa-titulo">
                  <h4>Conte&uacute;dos + recentes</h4>
                  <a href="/feed" class="rss" title="rss" style="display: block"></a>
                  </div>
                  </div-->
                  <?php //if(isset($displays["destaque-noticias-recentes"])) include_partial_from_folder('blocks','global/recent-news', array('displays' => $displays["destaque-noticias-recentes"]))
                  ?>
      
                  <?php if(count($displays["destaque-padrao-6"]) > 0 ) include_partial_from_folder('blocks','global/display1c-news', array('displays' => $displays["destaque-padrao-6"]))
                  ?>
      
                  <?php if(count($displays["destaque-padrao-7"]) > 0 ) include_partial_from_folder('blocks','global/display1c-news', array('displays' => $displays["destaque-padrao-7"]))
                  ?>
                </div>
                <!-- /BOX PADRAO Noticia -->
                <?php /*
             <!-- BOX PADRAO + Visitados -->
             <div class="box-padrao mais-visitados grid1">
             <div class="topo">
             <span></span>
             <div class="capa-titulo">
             <h4>+ visitados</h4>
             </div>
             </div>
             <?php // if(isset($displays["destaque-mais-visitados"])) include_partial_from_folder('blocks','global/popular-news', array('displays' => $displays["destaque-mais-visitados"]))
             ?>
             </div>
             <!-- /BOX PADRAO + Visitados -->
             */
       ?> <?php if(isset($displays["destaque-para-ouvir"])):
              ?>
              <?php if(count($displays["destaque-para-ouvir"]) > 0 ):
              ?>
              <!-- BOX PADRAO Para Ouvir -->
              <div class="box-padrao box-borda grid1">
                <div class="topo">
                  <span></span>
                  <div class="capa-titulo">
                    <h4>para ouvir</h4>
                  </div>
                </div>
                <?php if(isset($displays["destaque-para-ouvir"])) include_partial_from_folder('blocks','global/radios', array('displays' => $displays["destaque-para-ouvir"]))
                ?>
                <div class="detalhe-borda grid1"></div>
              </div>
              <!-- /BOX PADRAO Para Ouvir -->
              <?php endif;?>
              <?php endif;?>
      
              <?php if(isset($displays["destaque-carrossel-2"])) include_partial_from_folder('blocks','global/display1c-carrossel', array('displays' => $displays["destaque-carrossel-2"]))
              ?>
            </div>
            <!-- /DIREITA -->
          </div>
          <!-- /CAPA -->
          <?php include_partial_from_folder('blocks','global/staffpick')
          ?>
        </div>
        <!-- /CONTEUDO PAGINA -->
      </div>
      <!-- /MIOLO -->
      </div>
      <!-- /CAPA SITE -->
  </div>
  <!--/FUNDO CLARO-->
</div>
<!--/HEADER AMIGO SECRETO-->
