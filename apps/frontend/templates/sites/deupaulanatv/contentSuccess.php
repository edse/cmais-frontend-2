<?php
  if(!isset($displays["bio"])){
    $block = Doctrine::getTable('Block')->findOneById(548);
    if($block)
      $bio = $block->retriveDisplays();
  }
?>
<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/sites/deupaulanatv.css" type="text/css" />
<script type="text/javascript" src="http://cmais.com.br/portal/js/validate/jquery.validate.js"></script>

<script type='text/javascript'>var _sf_startpt=(new Date()).getTime()</script>

<?php use_helper('I18N', 'Date') ?>
<?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'section' => $section)) ?>

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
            <a href="<?php echo $site->retriveUrl() ?>" style="text-decoration: none;">
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

        <!-- box-topo -->
        <div class="box-topo grid3">

          <?php include_partial_from_folder('blocks','global/sections-menu', array('siteSections' => $siteSections)) ?>

          <div class="navegacao txt-10">
            <a href="<?php echo $site->retriveUrl() ?>" title="Home">Home</a>
            <span>&gt;</span>
            <a href="<?php echo $site->retriveUrl() ?>/playlists" title="Playlists">Playlists</a>
            <span>&gt;</span>
            <a href="<?php echo $asset->retriveUrl()?>" title="<?php echo $asset->getTitle()?>"><?php echo $asset->getTitle()?></a>
          </div>

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
            
            <!-- ESQUERDA -->
            <div id="esquerda" class="grid2">
             <!-- NOTICIA INTERNA -->
              <div class="box-interna grid2">

                <div class="data"><p><?php echo date("j", strtotime($asset->getCreatedAt())) ?> <span><?php echo substr(format_date($asset->getCreatedAt(),"m"), 0, 3) ?></span></p></div>
                <h3><?php echo $asset->getTitle() ?></h3>
                <p><?php echo $asset->getDescription() ?></p>

                <div class="assinatura grid2">
                  <?php include_partial_from_folder('blocks','global/share-small', array('site' => $site, 'uri' => $uri)) ?>
                  <p class="sup"> <span><?php /*echo $asset->retriveLabel()*/ ?></span></p>
                  <p class="inf"><?php /*echo format_date($asset->getCreatedAt(), "g") ?> - Atualizado em <?php echo format_date($asset->getUpdatedAt(), "g")*/ ?></p>
                  <?php include_partial_from_folder('blocks','global/share-small', array('site' => $site, 'uri' => $uri)) ?>
                </div>

                <div class="texto">
                  <?php echo html_entity_decode($asset->AssetContent->render()) ?>
                  
                  <?php if(count($asset->getTags()) > 0): ?>
                    <p class="tags">Tags:
                    <?php foreach($asset->getTags() as $t): ?>
                      <a href="#"><span><?php echo $t?></span></a>
                    <?php endforeach; ?>
                    </p>
                  <?php endif; ?>
                  
                  <?php if(isset($next)): ?>
                  <?php if($next != "javascript:;" && $next != ""): ?>
                  <a href="<?php echo $next ?>" class="btn proxima"></a>
                  <?php endif; ?>
                  <?php endif; ?>
                  <?php if(isset($prev)): ?>
                  <?php if($prev != "javascript:;" && $prev != ""): ?>
                  <a href="<?php echo $prev ?>" class="btn anterior"></a>
                  <?php endif; ?>
                  <?php endif; ?>
                  
                  <?php /*
                  <?php if(isset($pager)): ?>
                    <?php if($pager->haveToPaginate()): ?>
                    <!-- PAGINACAO -->
                    <?php if(($page != $pager->getPreviousPage())&&($page != "")): ?>
                    <a href="<?php echo $url ?>?page=<?php echo $pager->getPreviousPage() ?>" class="btn proxima"></a>
                    <?php endif; ?>
                    <?php if($page != $pager->getNextPage()): ?>
                    <a href="<?php echo $url ?>?page=<?php echo $pager->getNextPage() ?>" class="btn anterior"></a>
                    <?php endif; ?>
                    <!-- PAGINACAO -->
                    <?php endif; ?>
                  <?php endif; ?>
                  */ ?>

                </div>

              <!-- barra compartilhar -->
              <?php include_partial_from_folder('blocks','global/share-2c', array('site' => $site, 'uri' => $uri, 'asset' => $asset)) ?>
              <!-- /barra compartilhar -->

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

              <!-- Bio -->
              <div class="box-padrao grid1">
                <p class="tit-paula bio">#bio</p>
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

              <!-- Playlist -->
              <?php 
              $playlists = Doctrine_Query::create()
                ->select('a.*')
                ->from('Asset a, SectionAsset sa')
                ->where('sa.section_id = ?', 985)
                ->andWhere('sa.asset_id = a.id')
                ->andWhere('a.is_active = ?', 1)
                ->orderBy('a.id desc')
                ->execute();
              ?>
              <div class="box-padrao grid1">
                <p class="tit-paula playlist">#playlist</p>
                <ul class="itens">
                <?php foreach($playlists as $k => $d): ?>
                  <?php $imgs = $d->retriveRelatedAssetsByAssetTypeId(2); ?>
                  <?php if(count($imgs) > 0): ?>
                    <li><a href="<?php echo $d->retriveUrl()?>"><img alt="<?php echo $d->getTitle() ?>" title="<?php echo $d->getTitle() ?>" onmouseout="this.src='<?php echo $imgs[0]->retriveImageUrlByImageUsage('image-7-b') ?>';" onmouseover="this.src='<?php echo $imgs[1]->retriveImageUrlByImageUsage('image-7-b') ?>';" src="<?php echo $imgs[0]->retriveImageUrlByImageUsage('image-7-b') ?>"></a></li>
                  <?php endif; ?>
                <?php endforeach; ?>
                </ul>
              </div>
              <!-- /Playlist -->

              <!-- BOX PUBLICIDADE -->
              <div class="box-publicidade grid1">
                <script type='text/javascript'>
                GA_googleFillSlot("cmais-assets-300x250");
                </script>
              </div>                                        
              <!-- / BOX PUBLICIDADE -->

              <!-- BOX FACEBOOK -->
              <?php include_partial_from_folder('blocks','global/facebook-1c', array('site' => $site, 'url' => $url)) ?>
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