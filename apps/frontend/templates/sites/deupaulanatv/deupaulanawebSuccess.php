<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/sites/<?php echo $section->Site->getSlug() ?>.css" type="text/css" />
<script type="text/javascript" src="http://cmais.com.br/portal/js/mediaplayer/swfobject.js"></script>    
<script type="text/javascript" src="http://cmais.com.br/portal/js/validate/jquery.validate.js"></script>

<script type='text/javascript'>var _sf_startpt=(new Date()).getTime()</script>

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

<?php use_helper('I18N', 'Date') ?>
<?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'asset' => $asset, 'section' => $section)) ?>

<?php
  $asset = Doctrine_Query::create()
    ->select('a.*')
    ->from('Asset a, SectionAsset sa')
    ->where('sa.section_id = ?', 985)
    ->andWhere('sa.asset_id = a.id')
    ->andWhere('a.is_active = ?', 1)
    ->orderBy('a.id desc')
    ->fetchOne();
?>

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
        
        <!-- ESQUERDA -->
        <div id="esquerda" class="grid2">
         <!-- NOTICIA INTERNA -->
          <div class="box-interna grid2">
            
            <h3><?php echo $asset->getTitle() ?></h3>
            <p><?php echo $asset->getDescription() ?></p>

            <div class="assinatura grid2">
                  <p class="sup"></p>
                  <p class="inf"></p>
                  <div class="box-compartilhar cp-sembg grid2">                  
					  <div class="btn-compartilhar">
					  	<p class="compartilhar">Compartilhar</p>
					   	<a class="print" href="JavaScript:window.print();"></a>	    
					    <a class="twt" href="https://twitter.com/deupaulanatv" target="_blank"></a>
					    <a class="fb" href="https://www.facebook.com/DeuPaulaNaTV" target="_blank"></a>
					  </div>				
				  </div>
                </div>
            
            <div class="texto">
              <div id="live"><p>Seu browser não suporta Flash.</p></div>
            <script>
            jQuery(document).ready(function(){                 
              var so = new SWFObject('http://cmais.com.br/portal/js/mediaplayer/player.swf','mpl','640','364','9');
              so.addVariable('controlbar', 'bottom');
              so.addVariable('autostart', 'true');
              so.addVariable('streamer', 'rtmp://200.136.27.12/live');
              so.addVariable('file', 'deupaulanatv');
              so.addVariable('type', 'video');
              so.addParam('allowscriptaccess','always');
              so.addParam('allowfullscreen','true');
              so.addParam('wmode','transparent');
              so.write('live');
            });
            </script>
            
            <div style="display:block;">
            <?php $relacionados = $asset->retriveRelatedAssetsByRelationType('Asset Relacionado'); ?>
            <?php if(count($relacionados) > 0): ?>
                <p class="tit">Posts Relacionados</p>
                <ul class="posts">
                  <?php foreach($relacionados as $k=>$d): ?>
                  <li><a href="<?php echo $d->retriveUrl()?>"><?php echo $d->getTitle()?></a></li>
                  <?php endforeach; ?>
                </ul>
                <?php if(count($asset->getTags()) > 0): ?>
                  <p class="tags">Tags:
                  <?php foreach($asset->getTags() as $t): ?>
                    <a href="#"><span><?php echo $t?></span></a>
                  <?php endforeach; ?>
                  </p>
                <?php endif; ?>
            <?php endif; ?>
            </div>
          </div>
                                            
          <!-- barra compartilhar -->
          <?php include_partial_from_folder('blocks','global/share-2c', array('site' => $site, 'uri' => $uri)) ?>
          <?php /*
          <div class="box-compartilhar grid2">
            <a href="javascript:;" class="comentar" style="display:block"><span></span>Comentários</a>

            <div class="btn-compartilhar" style="width: auto;">
              <p class="compartilhar">Compartilhar</p>

              <div class="face" style="display:block; width: 380px;">
                <div style="display:block; float: left; margin-right: 40px;">
                  <g:plusone size="medium" count="false"></g:plusone>
                </div>
                
                <div style="display:block; float: left; margin-right: 0px;">
                  <fb:like href="http://tvcultura.cmais.com.br/vitrine/45-anos-de-star-trek" layout="button_count" show_faces="false" send="true" width="160"></fb:like>
                </div>
                
                <div style="display:block; float: left; text-align: left;">
                  <a href="http://twitter.com/share" class="twitter-share-button" data-count="horizontal" data-via="tvcultura" data-related="tvcultura">Tweet</a>
                </div>
              </div>  
            </div>
          </div>
          <!-- /barra compartilhar -->

          <!-- comentario facebook -->
          <div class="comentario-fb grid2" style="display:block">
            <fb:comments href="http://tvcultura.cmais.com.br/tvcultura" numposts="3" width="610" publish_feed="true"></fb:comments>
            <hr />
          </div>
          <!-- /comentario facebook -->
          */ ?>
          </div>
          <!-- /NOTICIA INTERNA -->

          
        </div>
        <!-- /ESQUERDA -->

        
        <!-- DIREITA -->
        <div id="direita" class="grid1">
          
          <!-- BOX PUBLICIDADE -->
          <div class="box-publicidade pub-125x125" style="width: 125px; height: 125px;">
            <script type='text/javascript'>
            GA_googleFillSlot("deupaulanatv-125x125");
            </script>
          </div>
          <!-- / BOX PUBLICIDADE -->

              <!-- Mande seu tema -->
              <div id="sucesso" style="display:none" class="sucesso"></div>
              <div id="erro-tema" style="display:none">Erro! Não foi possível enviar seu tema.</div>
              <form id="form-tema" name="form-tema" method="post" action="">
                <input type="hidden" name="mande-seu-tema" id="mande-seu-tema" value="mande-seu-tema" />
                <input type="hidden" name="section_id" id="section_id" value="981" />             
                <p>Mande o seu #tema</p> 
                <input class="seutema" type="text" name="tema" id="tema" />
                <input class="enviar" type="submit" name="enviar-tema" id="enviar-tema" value="enviar" />
                <img src="http://cmais.com.br/portal/images/ajax-loader.gif" alt="enviando..." style="display:none" width="16px" height="16px" id="ajax-loader-tema" />             
              </form>
              <script type="text/javascript">
                $(document).ready(function(){
                  var validator_tema = $('#form-tema').validate({
                    submitHandler: function(form){
                      $.ajax({
                        type: "POST",
                        dataType: "text",
                        data: $("#form-tema").serialize(),
                        beforeSend: function(){
                          $('input#enviar-tema').attr('disabled','disabled');
                          $('img#ajax-loader-tema').show();
                        },
                        success: function(data){
                          $('input#enviar-tema').removeAttr('disabled');
                          if(data == "1"){
                            $("#form-tema").clearForm();
                            $("#sucesso").show();
                            $('img#ajax-loader-tema').hide();
                            $('#form-tema').hide();
                          }
                          else {
                          	$("#erro-tema").show();
                          	$('img#ajax-loader-tema').hide();
                          	$('#form-tema').hide();
                          }
                        }
                      });					
                    },
                    rules:{
                      tema:{
                        required: true,
                        minlength: 2
                      }
                    },
                    messages:{
                      tema: "Digite um tema v&aacute;lido."
                    },
                    success: function(label){
                      // set &nbsp; as text for IE
                      label.html("&nbsp;").addClass("checked");
                    }
                  });
                });
              </script>
              <!-- /Mande seu tema -->
		  
		  <!-- CHAT -->
          <div class="box-padrao grid1">
            <?php if(isset($displays['chat'])): ?>
              <?php echo html_entity_decode($displays['chat'][0]->getHtml()); ?>                    
            <?php endif; ?>
          </div>
          <!-- /CHAT -->
          
          <!-- BOX TWITTER -->
          <div class="grid1 box-padrao">
            <p class="tit-paula mesegue">#Me Segue</p>                
                <a href="http://twitter.com/deupaulanatv" class="twitter-follow-button" target="_blank">Siga @deupaulanatv</a>
                  <style>
                    /*
                    #twitter {border:1px solid #666}
                    #twitter .topo-fb { background-color:#666; overflow:hidden; padding:10px;}
                    #twitter .avatar { margin-right:10px; float:left; }
                    #twitter .topo-fb img { width:31px; }
                    #twitter .topo-fb h3 {font-size:11px; color:#fff;}
                    #twitter .topo-fb h4 a {font-size:14px; color:#fff; font-weith:bold;}
                    #twitter ul {background:#fff; height:360px; overflow:hidden;}
                    #twitter ul img {width:30px;}
                    #twitter ul li {border-bottom:1px dotted #ddd; padding-top:5px; overflow:hidden;}
                    #twitter ul .avatar {margin: 10px;}
                    #twitter ul li a { color:#ff6633;}
                    #twitter ul li a,
                    #twitter ul li p {font-size:12px; line-height:16px; margin-bottom:5px;}
                    #twitter ul li p {margin-left:50px; padding-right:10px;}
                    #twitter ul li:last-child {border:none; margin-bottom:10px;}
                    #twitter .respiro {background:#ffffff; height:20px;}
                    */
                  </style>
                  <!-- <div id="twitter"></div> -->
                  <a class="twitter-timeline" href="https://twitter.com/deupaulanatv" data-widget-id="317383631679127552">Tweets de @deupaulanatv</a>
                  <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
                  <hr />
            </div>
            <!-- /BOX TWITTER -->
          </div>

        </div>
        <!-- /DIREITA -->
                    
      </div>
      <!-- /CAPA -->
                
    </div>
    <!-- /CONTEUDO PAGINA -->
    
  </div>

</div>

