<link type="text/css" href="http://cmais.com.br/portal/js/orbit/orbit-1.2.3.css" rel="stylesheet" />
<script type="text/javascript" src="http://cmais.com.br/portal/js/orbit/jquery.orbit-1.2.3.min.js"></script>
<script type="text/javascript" src="http://cmais.com.br/portal/js/validate/jquery.validate.js"></script>
<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/secoes/programaVideosInterna.css" type="text/css" />
<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/sites/deupaulanatv.css" type="text/css" />
<script type="text/javascript">
$(window).load(function() {
  $('#featured').orbit({
    'bullets' : true,   
    'bulletThumbs': true
  });
});
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

        <?php if(isset($siteSections)): ?>
        <!-- box-topo -->
        <div class="box-topo grid3">

          <?php include_partial_from_folder('blocks','global/sections-menu', array('siteSections' => $siteSections)) ?>

          <?php if(isset($section->slug)): ?>
            <?php if(!in_array(strtolower($section->getSlug()), array('home','homepage','home-page','index'))): ?>
            <div class="navegacao txt-10">
              <a href="<?php echo $site->retriveUrl() ?>" title="Home">Home</a>
              <span>&gt;</span>
              <a href="<?php echo $site->retriveUrl() ?>/fotos" title="Fotos">Fotos</a>
              <span>&gt;</span>
              <a href="<?php echo $asset->retriveUrl()?>" title="<?php echo $asset->getTitle()?>"><?php echo $asset->getTitle()?></a>
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

            <h3 class="tit-pagina grid2"><?php echo $asset->getTitle() ?></h3>
               <div id="esquerda" class="grid2">
              <div class="box-interna grid2" style="margin-bottom:0px;">
                <a href="#" class="txt-16"><?php echo $asset->getDescription() ?></a>
                <p></p>
              </div>

              <!-- GALERIA DE FOTOS -->
              <div class="container galeriaNew grid2" style="margin-bottom: 10px;">

                <div id="featured">
                <?php $related = $asset->retriveRelatedAssetsByAssetTypeId(2); ?>
                <?php if(count($related)>0): ?>
                  <?php foreach($related as $d): ?>
                  <img src="<?php echo $d->retriveImageUrlByImageUsage('image-6-b') ?>" alt="<?php echo $d->getTitle() ?>" data-thumb="<?php echo $d->retriveImageUrlByImageUsage('image-1') ?>" data-caption="#html<?php echo $d->getSlug() ?>" />
                  <?php endforeach; ?>
                <?php endif; ?>
                </div>

                <!-- THUMBNAILS -->
                <?php if(count($related)>0): ?>
                  <?php foreach($related as $d): ?>
                  <?php $related_content = $d->retriveRelatedAssetsByAssetTypeId(1); ?>
                  <span class="orbit-caption" id="html<?php echo $d->getSlug() ?>">
                    <span class="espaco">
                      <?php echo $d->getDescription() ?><?php if($d->AssetImage->getHeadline()!="") echo "<br>".$d->AssetImage->getHeadline() ?><?php if($d->AssetImage->getAuthor()!="") echo "<br>Foto: ".$d->AssetImage->getAuthor() ?>
                      <?php if(count($related_content)>0): ?>
                      <br /><a href="<?php echo $related_content[0]->retriveUrl()?>" target="_blank">Saiba mais</a>
                      <?php endif; ?>
                    </span>
                  </span>
                  <?php endforeach; ?>
                <?php endif; ?>
              </div>
              <!-- /GALERIA DE FOTOS -->
              
              <hr />
              
              <!-- barra compartilhar -->
              <?php include_partial_from_folder('blocks','global/share-2c', array('site' => $site, 'uri' => $uri, 'asset' => $asset)) ?>
              <!-- /barra compartilhar -->

            </div>

            <div id="direita" class="grid1 direitaMais">

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

              <!-- Bio -->
              <div class="box-padrao grid1">
                <p class="tit-paula bio">#bio</p>
                <?php $block = Doctrine::getTable('Block')->find(548); $bio = $block->retriveDisplays(); ?>
                <img class="img-150x90" src="<?php echo $bio[0]->Asset->retriveImageUrlByImageUsage('image-7') ?>" alt="<?php echo $bio[0]->getTitle() ?>" />
                <a href="http://tvcultura.cmais.com.br/deupaulanatv/sobre-mim" class="titulos" title="<?php echo $bio[0]->getTitle() ?>"><?php echo $bio[0]->getTitle() ?></a>
                <p><?php echo $bio[0]->getDescription() ?></p>
                <ul class="redes-sociais">
                  <li><a href="https://www.facebook.com/DeuPaulaNaTV" title="Facebook" target="_blank">Facebook</a></li>
                  <li><a href="http://twitter.com/deupaulanatv" title="Twitter" class="twt" target="_blank">Twitter</a></li>
                  <li><a href="http://www.youtube.com/deupaulanatv" title="Youtube" class="ytb" target="_blank">Youtube</a></li>
                </ul>
              </div>
              <!-- /Bio -->

              <!-- BOX PUBLICIDADE -->
              <!--div class="box-publicidade grid1">
                <script type='text/javascript'>
                GA_googleFillSlot("cmais-assets-300x250");
                </script>
              </div-->                                        
              <!-- / BOX PUBLICIDADE -->

            </div>
            
          </div>
          <!-- CAPA -->
          
          <!-- MENU-RODAPE -->                                        
          </div>
          <!-- /CONTEUDO PAGINA -->
        
        </div>
        <!-- /MIOLO -->
      
      </div>
      <!-- / CAPA SITE -->

    </div>



