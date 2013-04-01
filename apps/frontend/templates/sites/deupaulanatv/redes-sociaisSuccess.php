<link rel="stylesheet" href="/portal/css/tvcultura/sites/deupaulanatv.css" type="text/css" />
<script type="text/javascript" src="/portal/js/validate/jquery.validate.js"></script>
<script>
/*
function updateTweets(){
  $.ajax({
    url: "/index.php/ajax/tweetmonitor",
    data: "monitor_id=3",
    success: function(data) {
      $('#twitter').html(data);
    }
  });
}
$(function(){ //onready
  updateTweets();
  var t=setTimeout("updateTweets()",10000);
});
*/
</script>

<script type='text/javascript'>var _sf_startpt=(new Date()).getTime()</script>

<?php use_helper('I18N', 'Date') ?>
<?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'asset' => $asset, 'section' => $section)) ?>

<div id="bg-chamada">
<?php if(isset($displays["alerta"])) include_partial_from_folder('blocks','global/breakingnews', array('displays' => $displays["alerta"])) ?>
</div>

<div id="bg-topo"></div>

<div id="bg-paula">

    <!-- CAPA SITE -->
    <div id="capa-site">

      <!-- BARRA SITE -->
      <div id="barra-site">

        <div class="topo-programa">
          <?php if(isset($program) && $program->id > 0): ?>
          <h2>
            <a href="<?php echo $program->retriveUrl() ?>" style="text-decoration: none;">
              <?php if($program->getImageThumb() != ""): ?>
                <img src="http://midia.cmais.com.br/programs/<?php echo $program->getImageThumb() ?>" alt="<?php echo $program->getTitle() ?>" title="<?php echo $program->getTitle() ?>" />
              <?php else: ?>
                <h3 class="tit-pagina grid1"><?php echo $program->getTitle() ?></h3>
              <?php endif; ?>
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

        <?php if(isset($siteSections) && $site->getType() != "Portal"): ?>
        <!-- box-topo -->
        <div class="box-topo grid3">

          <?php include_partial_from_folder('blocks','global/sections-menu', array('siteSections' => $siteSections)) ?>

          <?php if(isset($section->slug)): ?>
            <?php if(!in_array(strtolower($section->getSlug()), array('home','homepage','home-page','index'))): ?>
            <div class="navegacao txt-10">
              <a href="<?php echo $site->retriveUrl() ?>" title="Home">Home</a>
              <span>&gt;</span>
              <a href="<?php echo $section->retriveUrl()?>" title="<?php echo $section->getTitle()?>"><?php echo $section->getTitle()?></a>
            </div>
            <?php endif; ?>
          <?php endif; ?>

        </div>
        <!-- /box-topo -->
        <?php endif; ?>

      </div>
      <!-- /BARRA SITE -->

      <!-- MIOLO -->
      <div id="miolo">
        
        <!-- BOX LATERAL -->
        <?php include_partial_from_folder('blocks','global/shortcuts') ?>
        <!-- BOX LATERAL -->

        <!-- CONTEUDO PAGINA -->
        <div id="conteudo-pagina">
          
          <!-- CAPA -->
          <div class="capa grid3">
            <h3 class="tit-pagina grid3">#Redes Sociais</h3>
            
            <!-- ESQUERDA -->
            <div id="esquerda" class="grid2">
              <div class="col-esq grid1">
                <p class="tit-paula mesegue">#Me Segue</p>
                <!-- BOX TWITTER -->
                <div class="grid1">
                  <a href="http://twitter.com/deupaulanatv" class="twitter-follow-button" target="_blank">Siga @deupaulanatv</a>
                  <style>
                    /*
                    #twitter {border:1px solid #666}
                    #twitter .topo-fb { background-color:#666; overflow:hidden; padding:10px;}
                    #twitter .avatar { margin-right:10px; float:left; }
                    #twitter .topo-fb img { width:31px; }
                    #twitter .topo-fb h3 {font-size:11px; color:#fff;}
                    #twitter .topo-fb h4 a {font-size:14px; color:#fff; font-weith:bold;}
                    #twitter ul {background:#fff; height:360px; overflow:hidden; overflow-y: scroll;}
                    #twitter ul img {width:30px;}
                    #twitter ul li {border-bottom:1px dotted #ddd; padding-top:5px;}
                    #twitter ul .avatar {margin: 10px;}
                    #twitter ul li a { color:#ff6633;}
                    #twitter ul li a,
                    #twitter ul li p {font-size:12px; line-height:16px; margin-bottom:5px;}
                    #twitter ul li p {margin-left:50px; padding-right:10px;}
                    #twitter ul li:last-child {border:none; margin-bottom:10px;}
                    #twitter .respiro {background:#ffffff; height:20px; display:none;}
                    */
                  </style>
                  <!-- <div id="twitter"></div> -->
                  <a class="twitter-timeline" href="https://twitter.com/deupaulanatv" data-widget-id="317383631679127552">Tweets de @deupaulanatv</a>
                  <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
                  <hr />
                </div>
              <!-- /BOX TWITTER -->
              </div>
                
              <div class="col-dir grid1">
                <p class="tit-paula meadd">#Me Add</p>
                <div id="canal" class="grid1">
                  <!-- BOX CANAL YOUTUBE -->
                  <script src="http://www.gmodules.com/ig/ifr?url=http://www.google.com/ig/modules/youtube.xml&up_channel=deupaulanatv&synd=open&w=300&h=390&title=&border=%23ffffff%7C3px%2C1px+solid+%23999999&output=js"></script>
                  <!-- /BOX CANAL YOUTUBE -->
                </div>
              </div>

            </div>
            <!-- /ESQUERDA -->
            
            <!-- DIREITA -->
            <div id="direita" class="grid1">
              <p class="tit-paula mecurte">#Me Curte</p>                     
              <!-- BOX FACEBOOK -->
              <div class="facebook" style="background-color: white; padding:10px 0; ">             
                  <fb:like-box href="https://www.facebook.com/DeuPaulaNaTV" width="290" show_faces="true" stream="true" header="true"></fb:like-box>                                  
              </div>
              <!-- /BOX FACEBOOK -->
            </div>
            <!-- /DIREITA -->
            
          </div>
          <!-- /CAPA -->

        </div>
        <!-- /CONTEUDO PAGINA -->

      </div>
      <!-- /MIOLO -->

    </div>
    <!-- /CAPA SITE -->   

    </div>
    
