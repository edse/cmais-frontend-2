<link rel="stylesheet" href="http://cmais.com.br/portal/css/cmais.css" type="text/css" />
<script type="text/javascript" src="http://cmais.com.br/portal/js/swfobject/swfobject.js"></script>
<script type="text/javascript" src="http://cmais.com.br/portal/js/mediaplayer/swfobject.js"></script>
<!--script type="text/javascript" src="http://cmais.com.br/portal/js/redirect_mobile.js"></script-->



<?php use_helper('I18N', 'Date') ?>
<?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'asset' => $asset, 'section' => $section)) ?>

<script>
  var te = null;
  var interval = null;
  var desativar = false;
  
  function checkStreamingEnd(){
    var request = $.ajax({
      dataType: 'jsonp',
      data: "destaque_home=home",
      success: function(data) {
        if(data.data == 2){
          $('#live_div').html('');  //APAGA O CONTEUDO HTML
          $('#videos_div').show();  //MOSTRA A DIV DE VÍDEOS
          $('#live_div').remove();  //REMOVE A DIV
          desativar = true;         //DESATIVA A CHECAGEM DO STREAMING  
        }//else{
          //console.log("Ainda Ativo");
        //}
      },
      url: '/ajax/streamingend'
    });
    if(desativar == false) var interval = setTimeout('checkStreamingEnd()', 120000); //2 minutos
  }
  var timeout = setTimeout("location.reload(true);",600000); //10 minutos 
</script>

    <!-- CAPA SITE -->
    <div id="capa-site">
      
      <?php if(isset($displays["alerta"])) include_partial_from_folder('blocks','global/breakingnews', array('displays' => $displays["alerta"])) ?>
      
      <ul class="menutv">
        <li><a href="http://cmais.com.br/aovivo" title="Assista à TV Cultura">Assista à TV Cultura</a></li>
        <li class="center"><a href="javascript:;" id="controle-remoto" class="redesB" title="Ouça as rádios">Ouça as rádios</a></li> 
        <li><a href="http://tvcultura.cmais.com.br" title="Confira à Programação da TV">Confira a Programação da TV</a></li>
      </ul>

      <!-- MIOLO -->
      <div id="miolo">

        <?php include_partial_from_folder('blocks','global/shortcuts') ?>

        <!-- CONTEUDO PAGINA -->
        <div id="conteudo-pagina">
          
          <!-- CAPA -->
          <div class="capa grid3">

            <!-- col1 -->
            <?php if(isset($displays["destaque-revista"])) include_partial_from_folder('blocks','global/display-3c-revista', array('displays' => $displays["destaque-revista"])) ?>
            <!-- /col1 -->

            <!-- ESQUERDA -->
            <div id="esquerda" class="grid2">

              <!-- col-esq -->
              <div class="col-esq grid1">
                
                

                <!-- BOX PADRAO Noticia -->
                <?php if(isset($displays["destaque-padrao-1"])) include_partial_from_folder('blocks','global/display1c-news', array('displays' => $displays["destaque-padrao-1"])) ?>
                <!-- /BOX PADRAO Noticia -->
                
                <!-- BOX PADRAO Noticia -->
                <?php if(isset($displays["destaque-padrao-2"])) include_partial_from_folder('blocks','global/display1c-news', array('displays' => $displays["destaque-padrao-2"])) ?>
                <!-- /BOX PADRAO Noticia -->
                
                <!-- BOX PADRAO Mais recentes -->
                <div class="box-padrao grid1">
                  <div class="topo claro">
                    <span></span>
                    <div class="capa-titulo">
                      <h4>Conte&uacute;dos + recentes</h4>
                      <a href="/feed" class="rss" title="rss" style="display: block"></a>
                    </div>
                  </div>
                  <?php if(isset($displays["destaque-noticias-recentes"])) include_partial_from_folder('blocks','global/recent-news', array('displays' => $displays["destaque-noticias-recentes"])) ?>
                </div>
                <!-- BOX PADRAO Mais recentes -->
                
                <!-- BOX PUBLICIDADE 3 -->
                <?php if(isset($displays["publicidade-300x50"])) include_partial_from_folder('blocks','global/banner-300x50', array('displays' => $displays["publicidade-300x50"])) ?>
                <!-- / BOX PUBLICIDADE 3 -->
                
                <!-- BOX ASSESSORIA -->
                <?php //if(isset($displays["destaque-assesoria-300x50"])) include_partial_from_folder('blocks','global/banner-300x50', array('displays' => $displays["destaque-assesoria-300x50"])) ?>
                <!-- / BOX ASSESSORIA -->                
                
              </div>
              <!-- /col-esq -->
              
              <!-- col-dir -->
              <div class="col-dir grid1">
                
                <!-- BOX PADRAO Noticia -->
                <?php if(isset($displays["destaque-padrao-3"])) include_partial_from_folder('blocks','global/display1c-news', array('displays' => $displays["destaque-padrao-3"])) ?>
                <!-- /BOX PADRAO Noticia -->
                
                <!-- BOX PADRAO Noticia -->
                <?php if(isset($displays["destaque-padrao-4"])) include_partial_from_folder('blocks','global/display1c-news', array('displays' => $displays["destaque-padrao-4"])) ?>
                <!-- /BOX PADRAO Noticia -->
                
                <!-- BOX PADRAO Noticia -->
                <?php if(isset($displays["destaque-padrao-5"])) include_partial_from_folder('blocks','global/display1c-news', array('displays' => $displays["destaque-padrao-5"])) ?>
                <!-- /BOX PADRAO Noticia -->
                
                <!-- BOX PADRAO Previsao -->
                <!--
                <?php if(isset($displays["destaque-previsao"])): ?>
                <div class="box-padrao grid1">
                  <div class="topo azul">
                    <span></span>
                    <div class="capa-titulo">
                      <h4>previs&atilde;o do tempo</h4>
                    </div>
                  </div>
                  <div class="tempo">
                    <?php echo html_entity_decode($displays["destaque-previsao"][0]->getHtml()) ?>
                  </div>
                </div>
                <?php endif; ?>
                -->
                <!-- BOX PADRAO Previsao -->

                <?php if(isset($displays["destaque-padrao-6"])) include_partial_from_folder('sites/cmais','global/destaque_home_acervo', array('displays' => $displays["destaque-padrao-6"])) ?>
                
                <?php if(isset($displays["destaque-padrao-7"])) include_partial_from_folder('sites/cmais','global/destaque_home_acervo', array('displays' => $displays["destaque-padrao-7"])) ?>
                
              </div>
              <!-- /col-dir -->
            </div>

            <!-- /ESQUERDA -->
            <!-- DIREITA -->
            <div id="direita" class="grid1">
              
              <?php //SE TIVER UM PROGRAMA == LIVE 
              $schedules = Doctrine_Query::create()
                ->select('s.*')
                ->from('Schedule s')
                ->where('s.is_live = ?', 1)
                ->andWhere('s.date_start < ?', date('Y-m-d H:i:s'))
                ->andWhere('s.date_end > ?', date('Y-m-d H:i:s'))
                ->andWhere('s.channel_id = ?', 1)
                ->orderBy('s.date_start asc')
                ->limit('1')
                ->execute();
              
              if((isset($schedules)) && (count($schedules) > 0)): 
                //MOSTRA O FLASH ENCODER 
                $displays_videos = "";
                ?>
              <div class="box-padrao noticia grid1" id="live_div">
                <p class="chapeu jornalismo">Ao Vivo </p>   
                <div id="livestream2" style="display: none;"><p>Seu browser não suporta Flash.</p></div>
                  <script> 
                    var so = new SWFObject('http://cmais.com.br/portal/js/mediaplayer/player.swf','mpl','310','205','9');
                    so.addVariable('controlbar', 'over');
                    so.addVariable('autostart', 'false');
                    so.addVariable('streamer', 'rtmp://200.136.27.12/livepkgr');
                    so.addVariable('file', 'tvcultura4?adbe-live-event=liveevent');
                    so.addVariable('type', 'video');
                    so.addParam('allowscriptaccess','always');
                    so.addParam('allowfullscreen','true');
                    so.addParam('wmode','transparent'); 
                    so.write('livestream2');
                    $('#livestream2').show();
                    var interval = setTimeout('checkStreamingEnd()', 120000); // 2 minutos
                  </script>
                  <a class="titulos" href="http://cmais.com.br/aovivo">
                    <?php 
                      if($schedules[0]->title != "")
                        echo $schedules[0]->title;
                      else
                        echo $schedules[0]->Program;
                    ?>
                  </a>
                  <p>
                    <?php if($schedules[0]->description_short != ""){
                        echo substr($schedules[0]->description_short, 0, 180);
                        if(strlen($schedules[0]->description_short) > 180) echo "...";
                      }
                    ?>
                  </p>
                </div>
                <div id="videos_div" style="display: none">
                  <p class="chapeu jornalismo">Assista Agora </p>
                  <?php if(isset($displays["destaque-videos"])) include_partial_from_folder('blocks','global/display-1c-videos-carrossel', array('displays' => $displays["destaque-videos"])) ?>
                </div>
              <?php //SE NÃO TIVER, CARREGA O BLOCO DE VÍDEO ABAIXO  
                elseif(count($displays["destaque-videos"]) > 0):?>
                <!-- BOX NOTICIA VIDEO -->
                <p class="chapeu jornalismo">Vídeo </p> 
                
                <?php
                  /*
                  $hora_atual  = date("H:i:s");
                  $hora1  = array("00:00:00","01:00:00","02:00:00","03:00:00","04:00:00","05:00:00","06:00:00","07:00:00","08:00:00","09:00:00","10:00:00","11:00:00","12:00:00","13:00:00","14:00:00","15:00:00","16:00:00","17:00:00","18:00:00","19:00:00","20:00:00","21:00:00","22:00:00","23:00:00");
                  $hora2  = array("00:15:00","01:15:00","02:15:00","03:15:00","04:15:00","05:015:00","06:15:00","07:15:00","08:15:00","09:15:00","10:15:00","11:15:00","12:15:00","13:15:00","14:15:00","15:15:00","16:15:00","17:15:00","18:45:00","19:15:00","20:15:00","21:15:00","22:15:00","23:15:00");
                  foreach ($hora1 as $key => $hora1) {
                    if($hora_atual >= $hora1 && $hora_atual <= $hora2[$key]){
                      $exibe_destaque_roda = TRUE;
                    }
                  }
                  
                  if($exibe_destaque_roda){
                      //EXIBE A CHAMADA O VÍDEO DE DESTAQUE DO RODA VIVA - CRIAR BLOCO ASTOLFO
                    //if(isset($displays["destaque-video-roda"])) include_partial_from_folder('blocks','global/display-1c-videos-carrossel', array('displays' => $displays["destaque-video-roda"]));  
                  }else{
                    if(isset($displays["destaque-videos"])) include_partial_from_folder('blocks','global/display-1c-videos-carrossel', array('displays' => $displays["destaque-videos"])); 
                  }
                  */
                ?>
                
                <?php
                  if(isset($displays["destaque-videos"])){
                    $displays_videos = "destaque";
                    include_partial_from_folder('blocks','global/display-1c-videos-carrossel', array('displays' => $displays["destaque-videos"]));
                  }
                ?>
                <!-- /BOX NOTICIA VIDEO -->
                                                 
                <?php // SE NÃO TIVER NENHUM DESTAQUE CARREGA O PULL DE VÍDEOS - CALHAU 
                elseif(count($displays["pull-videos"]) > 0):?>
                    <p class="chapeu jornalismo">Chamadas </p> 
                    <?php
                    $displays_videos = "pull";
                    include_partial_from_folder('blocks','global/display-1c-videos-carrossel', array('displays' => $displays["pull-videos"]));
                endif; 
                ?>
              <!-- BOX PUBLICIDADE -->
              <!--div class="box-publicidade grid1"-->
              <div id='div-gpt-ad-1399575363196-0' class="box-publicidade grid1">
                 <!-- home-geral300x250 -->
                 <?php 
                  function detectMobile() {
                    $devices = array('android' => 'android', 'blackberry' => 'blackberry', 'iphone' => '(iphone|ipod|ipad)', 'opera' => '(opera mini|opera mobi)', 'palm' => '(avantgo|blazer|elaine|hiptop|palm|plucker|xiino)', 'windows' => 'windows ce; (iemobile|ppc|smartphone)', 'generic' => '(kindle|mobile|mmp|midp|o2|pda|pocket|psp|symbian|smartphone|treo|up.browser|up.link|vodafone|wap)');
                    $useragent = strtolower($_SERVER['HTTP_USER_AGENT']);
                    $accept = strtolower($_SERVER['HTTP_ACCEPT']);
                    $mobile = false;
                    if(isset($_SERVER['HTTP_X_WAP_PROFILE']) || isset($_SERVER['HTTP_PROFILE']) || strpos($accept, "application/vnd.wap.xhtml+xml") > 0 || strpos($accept, "text/vnd.wap.wml") > 0) {
                        $mobile = "WAP";
                    }else{
                      foreach ($devices as $device => $keys) {
                        if(preg_match("/$keys/i", $useragent)) {
                          $mobile = $device;
                        }
                      }
                    }
                    return $mobile;
                  }
                if(detectMobile()) {
                ?>
                <script type='text/javascript'>
                  GA_googleFillSlot("Ipad-300x250");
                </script>
                <?php
                }else {
                  ?>
                  <!-- home-geral300x250 -->
                  
                  <script type='text/javascript'>
                  googletag.cmd.push(function() { googletag.display('div-gpt-ad-1399575363196-0'); });
                  </script>
                  <?php
                  /*
                  <script type='text/javascript'>
                    GA_googleFillSlot("home-geral300x250");
                  </script>
                   */
                   ?>
                    
                  <?php 
                }
              ?>
              </div>
              <!-- / BOX PUBLICIDADE -->

              <!-- home-infantil -->
              <div id='div-gpt-ad-1399463717883-0' class="box-publicidade grid1">
                <!-- home-infantil -->
                <script type='text/javascript'>
                googletag.cmd.push(function() { googletag.display('div-gpt-ad-1399463717883-0'); });
                </script>
              </div>
               
              <?php include_partial_from_folder('blocks','global/facebook-1c', array('site' => $site, 'url' => $url)) ?>
              <?php //include_partial_from_folder('blocks','global/twitter-1c', array('site' => $site)) ?>
            
              <!-- BOX PUBLICIDADE -->
              
                <?php
                /*
                <div class="box-publicidade grid1">
                  <!-- home-geral2-300x250 -->
                  <script type='text/javascript'>
                  GA_googleFillSlot("home-geral2-300x250");
                  </script>
                </div>
                * 
                */
                ?>
                <!-- home-geral2-300x250 -->
                <div id='div-gpt-ad-1399560781907-0' class="box-publicidade grid1">
                  <script type='text/javascript'>
                  googletag.cmd.push(function() { googletag.display('div-gpt-ad-1399560781907-0'); });
                  </script>
                </div>
             
              <!-- / BOX PUBLICIDADE -->

            </div>
            <!-- /DIREITA -->
            
            <!-- LISTA BLOGS -->
            <div class="lista-blogs grid3">
              <ul>
                <?php if(isset($displays["destaque-editoria-1"])) include_partial_from_folder('blocks','global/display-1c-editorial', array('displays' => $displays["destaque-editoria-1"])) ?>
                <?php if(isset($displays["destaque-editoria-2"])) include_partial_from_folder('blocks','global/display-1c-editorial', array('displays' => $displays["destaque-editoria-2"])) ?>
                <?php if(isset($displays["destaque-editoria-3"])) include_partial_from_folder('blocks','global/display-1c-editorial', array('displays' => $displays["destaque-editoria-3"])) ?>
                <?php if(isset($displays["destaque-editoria-4"])) include_partial_from_folder('blocks','global/display-1c-editorial', array('displays' => $displays["destaque-editoria-4"], 'last' => 1)) ?>
              </ul>
            </div>
            <!-- /LISTA BLOGS -->
            
          </div>
          <!-- /CAPA -->
          
        </div>
        <!-- /CONTEUDO PAGINA -->
        
      </div>
      <!-- /MIOLO -->
      
    </div>
    <!-- / CAPA SITE -->
<script type="text/javascript" src="https://www.youtube.com/iframe_api"></script> 

<script>
    
    
    //removendo a "gambiarra" anterior que dava o play
    $('.carrossel-videos .capa-video').remove();
    
    //se for pull-videos o mandante, tirar as bolinhas
    <?php if($displays_videos == "pull"): ?>
      $(".pag-bola").hide();
      
    <?php endif; ?>
    
    //controle youtube
    var cont = 0;
    var player = new Array();
    var players_ids = new Array();
    var player;
    var playing;
    var id;
    var quantVideos=0;
    //var id2;
    $('.carrossel-videos .video iframe').each(function(i){
      //verificando se a url tem youtube no iframe
      if($(this).attr('src').indexOf("youtube") != -1){
        
        //separando a url para isolar o id do youtube, para passar para o youtube API e não deixar de "puxar" o vídeo
        id = $(this).attr('src').split("?");
        var id2 =  id[0].split("/");
        
        //atualizando o src do iframe
        $(this).attr('src', id[0]);
        
        //aplicando uma tag div no lugar do iframe senão o youtube API considera uma tentativa de invasão
        $(this).parent().append('<div id="player'+i+'"></div>');
        $(this).remove();
        quantVideos=i;
        
      }
      
      //setTimeout para a função onYouTubeIframeAPIReadyCmais() reconhecer a tag no DOM 
      setTimeout(function(){
        
          /*
           * chamando função do player para js
           * por default do API o nome é onYouTubeIframeAPIReady() renomei para possibilitar chama-lá a hora que quiser no código e poder passar parâmetros
           * parâmetros (string:id, string:contador, numero:width, numero:height, string:id)
           */ 
          onYouTubeIframeAPIReadyCmais("player"+i, i, 310, 216, id2[id2.length-1]); 
          
          //tratando url para adicionar parametro rel=0 e quaisquer mais que venha a ter
          youTubeUrl = $("#player"+i).attr('src').split("?"); 
          //console.log(youTubeUrl[0]+"?rel=0"+youTubeUrl[1]);
          
          //passando o attributo src para o respectivo player
          $("#player"+i).attr('src', youTubeUrl[0]+"?rel=0&"+youTubeUrl[1]);
          
        },3000);
    });
    
    
         
        
    
    onYouTubeIframeAPIReadyCmais = function(obj, cont, width, height, id) { 
      //console.log("start"+cont);
      //console.log(id2[id2.length-1]+"?rel=0");
      //console.log("obj:"+obj);
      //console.log("contador:"+cont);
      //console.log(id)
      //player[cont] = new YT.Player(obj);
      player[cont] = new YT.Player(obj,{ 
        height: height,
        width: width,
        videoId: id
      });
       
      console.log("player:"+player[cont]);
      player[cont].addEventListener("onStateChange", function(res){
         //console.log(res.data);
         //console.log("playing");
            
         playing = res.target;
         switch(res.data){
           // data 1 = unstarted
           case -1:
            //console.log("unstarted");
            <?php if($displays_videos == "pull"): ?>
              setTimeout(function(){
                pareiCarrossel();  
              },800);
            <?php endif; ?>
           break;
           // data 0 = stop
           case 0:
            //console.log("stop");
            
            //caso destaque-videos seja o principal
            <?php if($displays_videos == "destaque"): ?>
              recomecaCarrossel();
            <?php endif; ?>
            
            <?php if($displays_videos == "pull"): ?>
              proximoVideo();
              pareiCarrossel();
            <?php endif; ?>
            
           break;
           // data 1 = play
           case 1:
            //console.log(playing);
            <?php if($displays_videos == "destaque"): ?>
              pareiCarrossel();
            <?php endif; ?>
            
           break;
           // data 2 = paused
           case 2:
           
            //caso destaque-videos seja o principal
            <?php if($displays_videos == "destaque"): ?>
              recomecaCarrossel();
            <?php endif; ?> 
             
           break;
            //data 3 = buffering
           case 3:
            //console.log("buffering");
            <?php if($displays_videos == "destaque"): ?>
              pareiCarrossel();
            <?php endif; ?>
  
            //console.log('parei o carrossel');
           break;
            //data 5 = video cued
           case 5:
            //console.log("video cued");
           break;
           
         }
         
         $('.carrossel-videos .pag-bola').mousedown(function() {
            //console.log(playing);
            if(playing)
             playing.pauseVideo();
             pareiCarrossel();
          });
          
          
          
      });
      <?php if($displays_videos == "pull"): ?>
        setTimeout(function(){
          pareiCarrossel();
        },1800);
      <?php endif; ?>      
      
      
      
    }
    
    pareiCarrossel = function(){
      window.clearInterval(window.tCarrossel);
    }
    recomecaCarrossel = function(){
     window.clearInterval(window.tCarrossel);
     window.tCarrossel = setInterval(function(){
        // Pega o item ativo
        atual = $('#destaque').find('.ativo');
        // Verifica se ï¿½ o ï¿½ltimo item para mudar para o primeiro e recomeï¿½ar o ciclo
        if ($(atual).is(":last-child")){
          proximo = $("#destaque").find('.abas-menu li:first, abas-conteudo li:first');
        }else{
          proximo = $(atual).next();
        }
        // Simula o click do mï¿½todo "changeAbas"
        $(proximo).find('a').click();
      // Intervalo 8000 milisegundos (8 segundos)
      },8000);
            
    }
    
    var contVideo = 0;
    proximoVideo = function(){
      
      // Pega o item ativo
      atual = $('#destaque').find('.ativo');
      // Verifica se ï¿½ o ï¿½ltimo item para mudar para o primeiro e recomeï¿½ar o ciclo
      if ($(atual).is(":last-child")){
        proximo = $("#destaque").find('.abas-menu li:first, abas-conteudo li:first');
      }else{
        proximo = $(atual).next();
      }
      // Simula o click do mï¿½todo "changeAbas"
      console.log(contVideo);
      console.log(quantVideos);
      $(proximo).find('a').click();
      
        
      
      setTimeout(function(){
        if(contVideo >= quantVideos){
          contVideo=0;
          player[contVideo].seekTo(0, false);
        }else{ 
          contVideo++;
          player[contVideo].playVideo();
        };
      }, 800);      
    }
      
</script>




