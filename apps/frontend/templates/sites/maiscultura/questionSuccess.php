<?php $a = Doctrine_Query::create() -> select('aa.*') -> from('AssetAnswer aa, RelatedAsset ra, Asset a') -> where('aa.asset_id = a.id') -> andWhere('a.id = ra.asset_id') -> andWhere('ra.parent_asset_id = ?', (int)$asset->id) -> orderBy('ra.display_order') -> execute();?>

<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/secoes/defaultPrograma.css" type="text/css" />
<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/secoes/programaBlog.css" type="text/css" />
<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/sites/<?php echo $asset->Site->getSlug() ?>.css" type="text/css" />


<link href="http://cmais.com.br/js/audioplayer/jPlayer.Blue.Monday.2.0.0/jplayer.blue.monday.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="http://cmais.com.br/js/audioplayer/jplayer_min.js"></script>

<link rel="stylesheet" href="http://cmais.com.br/portal/js/bootstrap/css/bootstrap.min.css">
<script type="text/javascript" src="http://cmais.com.br/portal/js/validate/jquery.validate.js"></script>

<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/sites/maiscultura/question.css" type="text/css" />


<?php use_helper('I18N', 'Date') ?>
<?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'asset' => $asset, 'section' => $section)) ?>

  <div class="bg-chamada">
    <?php if(isset($displays["alerta"])) include_partial_from_folder('blocks','global/breakingnews', array('displays' => $displays["alerta"])) ?>
  </div>
  <div class="bg-site"></div>

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

            <!-- ESQUERDA -->
            <!--div id="esquerda" class="grid2"-->
            <div>
              <!-- NOTICIA INTERNA -->
              <div class="box-interna">
                <h3><?php echo $asset->getTitle() ?></h3>
                <p><br /><?php echo $asset->getDescription() ?></p>
                
                
                <div class="texto">
                  <!--LISTA-Videos-->
              <div id="votacao-video">
          
                <?php $verifica_video = $a[0] -> Asset -> retriveRelatedAssetsByAssetTypeId(6);
                $verifica_imagem = $a[0] -> Asset -> retriveRelatedAssetsByAssetTypeId(2); ?>

                <?php if(count($verifica_video) > 0): ?>
                <!--LISTA-Videos-->
                <form method="post" id="e<?php echo $a[0]->Asset->getId()?>" class="form-votacao">
                  <p><?php echo $asset -> AssetQuestion -> getQuestion();?></p>
                  <ul id="lista-videos">
                    <?php for($i=0; $i<count($a); $i++){ $v = $a[$i]->Asset->retriveRelatedAssetsByAssetTypeId(6); $opcao = $a[$i]->Asset->AssetAnswer->getAnswer(); ?>
                    <li><iframe title="<?php echo $opcao ?>" width="310" height="210" src="http://www.youtube.com/embed/<?php echo $v[0] -> AssetVideo -> getYoutubeId();?>?wmode=transparent#t=0m0s" frameborder="0" allowfullscreen></iframe>
                    <input type="radio" name="opcao" id="opcao-<?php echo $i;?>" class="form-contato" value="<?php echo $a[$i] -> Asset -> AssetAnswer -> id;?>"  />
                    <label for="opcao-<?php echo $i;?>"> <?php echo $opcao  ?></label></li>
                    <?php };?>
                  </ul>
                  <?php endif;?>

                  <?php if(count($verifica_imagem) > 0): ?>
                  <!--LISTA-Videos-->
                  <form method="post" id="e<?php echo $a[0]->Asset->getId()?>" class="form-votacao">
                    <p><?php echo $asset -> AssetQuestion -> getQuestion();?></p>
                    <ul id="lista-videos">
                      <?php for($i=0; $i<count($a); $i++){ $img = $a[$i]->Asset->retriveRelatedAssetsByAssetTypeId(2); $opcao = $a[$i]->Asset->AssetAnswer->getAnswer(); ?>
                      <li><img src="<?php echo $img[0] -> retriveImageUrlByImageUsage('image-3-b');?>" >
                      <input type="radio" name="opcao" id="opcao-<?php echo $i;?>" class="form-contato" value="<?php echo $a[$i] -> Asset -> AssetAnswer -> id;?>"  />
                      <label for="opcao-<?php echo $i;?>"> <?php echo $opcao  ?></label></li>
                      <?php };?>
                    </ul>
                    <?php endif;?>

                    <div class="votacao">
                      <input id="votar" type="submit" value="votar" />
                      <div id="enviando-voto" align="center"style="display:none">
                        <img src="http://cmais.com.br/portal/images/ajax-loader.gif" alt="enviando..." style="display:none;" width="16px" height="16px" id="ajax-loader-b">
                        Registrando voto, aguarde um momentinho...
                      </div>
                    </div>
                  </form>
                  <!--/LISTA-Videos-->
                  <!--RESULTADO PARCIAL-->
                  <div id="resultado-video" style="display:none;">
                    <h2>Resultado Parcial: </h2>
                    <!--LISTA-RESULTADO-->
                    <?php
                    for($i=0; $i<count($a); $i++): ?>
                    <ul class="parcial-<?php echo $i?> classificacao <?php if($i%2==0):?> right <?php else:?> left<?php endif;?>">
                    <li>
                    <p><?php $a[$i] -> Asset -> AssetAnswer -> getAnswer();?></p> <span>00%</span>
                    <div class="progress progress-success">
                      <div class="bar" style="width: 40%"></div>
                    </div>
                    </li>
                    </ul> <?php endfor;?>
                    <!--/LISTA-RESULTADO-->
                    <h2>Agradecemos seu voto! </h2>
                  </div>
                  <!--/RESULTADO PARCIAL-->
                </div>
          
                  
                  
                 
                
                  

              </div>
              <!-- /texto -->
              </div>
              <!-- NOTICIA INTERNA -->
            </div>
            <!-- /ESQUERDA -->
            
            <!-- DIREITA -->
            <div id="direita" class="grid1">

              <!-- BOX PADRAO -->
              <?php if(isset($displays["destaque-apresentadores"])) include_partial_from_folder('blocks','global/display-1c-hosts', array('displays' => $displays["destaque-apresentadores"])) ?>
              <!-- /BOX PADRAO -->
              
             

              <?php $relacionados = array(); if($asset) $relacionados = $asset->retriveRelatedAssets2(); ?>
              <?php if(count($relacionados) > 0): ?>
              <!-- BOX PADRAO Mais recentes -->
              <div class="box-padrao content grid1">
                <div class="topo claro">
                  <div class="capa-titulo">
                    <img src="http://cmais.com.br/portal/images/capaPrograma/cartaozinho/tit-relacionadas.png" />
                    <a href="#" class="rss" title="rss"></a>
                  </div>
                </div>
                <?php if(count($relacionados) > 0) include_partial_from_folder('blocks','global/recent-news', array('displays' => $relacionados)) ?>
              </div>
              <!-- BOX PADRAO Mais recentes -->
              <?php endif; ?>

              <?php if(isset($displays["destaque-noticias-recentes"])): ?>
              <!-- BOX PADRAO Mais recentes -->
              <div class="box-padrao grid1">
                <div class="topo claro">
                  <span></span>
                  <div class="capa-titulo">
                    <h4>+ recentes</h4>
                    <a href="<?php echo $site->getSlug() ?>/feed" class="rss" title="rss" style="display: block"></a>
                  </div>
                </div>
                <?php if(isset($displays["destaque-noticias-recentes"])) include_partial_from_folder('blocks','global/recent-news', array('displays' => $displays["destaque-noticias-recentes"])) ?>
              </div>
              <!-- BOX PADRAO Mais recentes -->
              <?php endif; ?>

              <?php if(isset($displays["destaque-categorias"])): ?>
              <!-- BORDA 02 -->
              <div class="box-padrao box-borda grid1">
                <div class="topo claro">
                  <span></span>
                  <div class="capa-titulo">
                    <h4><?php if(isset($displays["destaque-categorias"])) echo $displays["destaque-categorias"][0]->Block->getTitle() ?></h4>
                  </div>
                </div>
                <div class="conteudo top tipo2">
                  <?php if(isset($displays["destaque-categorias"])) include_partial_from_folder('blocks','global/popular-news', array('displays' => $displays["destaque-categorias"])) ?>
                </div>
                <div class="detalhe-borda grid1"></div>
              </div>
              <!-- /BORDA 02 -->
              <?php endif; ?>
              
              <?php if(isset($displays["destaque-links"])): ?>
              <!-- BOX PADRAO + Visitados -->
              <div class="box-padrao mais-visitados grid1">
                <div class="topo">
                  <span></span>
                  <div class="capa-titulo">
                    <h4><?php if(isset($displays["destaque-links"])) echo $displays["destaque-links"][0]->Block->getTitle() ?></h4>
                  </div>
                </div>
                <?php if(isset($displays["destaque-links"])) include_partial_from_folder('blocks','global/popular-news', array('displays' => $displays["destaque-links"])) ?>
              </div>
              <!-- /BOX PADRAO + Visitados -->
              <?php endif; ?>

              <?php //include_partial_from_folder('blocks','global/facebook-1c-2', array('site' => $site, 'url' => $url)) ?>

            </div>
            <!-- /DIREITA -->

            </div>
            <!-- /CAPA -->
          </div>
        <!-- /CONTEUDO PAGINA -->

      </div>
      <!-- /MIOLO -->
    </div>
    <!-- / CAPA SITE -->
    

<script>
  //valida form votacao
  $(document).ready(function() {
    var validator = $('.form-votacao').validate({
      submitHandler : function(form) {
        sendAnswer()
      },
      rules : {
        opcao : {
          required : true
        }
      },
      messages : {
        opcao : "Escolha uma opção para votar."
      }
    });
  });

<?php echo "var nome = new Array();\n";
foreach ($a as $key => $value) {
  $c = $value -> Asset -> AssetAnswer -> getAnswer();
  echo "nome[" . $key . "]= '" . $c . "';\n";
}
?>
  function sendAnswer(){
$.ajax({
type: "POST",
dataType: "jsonp",
data: $('.form-votacao').serialize(),
url: "http://app.cmais.com.br/ajax/enquetes",
  beforeSend: function(){
  $('.btn-barra.votacao').hide();
  $('#ajax-loader-b').show();
  },

  success: function(data){
  $(".form-votacao, #ajax-loader-b").hide();
  $("#resultado-video").fadeIn("fast");
  var i=0;
  $.each(data, function(key, val) {
    //console.log(i+nome);
    //nome[i]
  $('.parcial-'+i).html("<li><p>"+val.answer+"</p><span>"+val.votes+"</span><div class='progress progress-success'><div class='bar' style='width:"+val.votes+"'></div></div></li>")
  i++;
  });
  }
  });

  }
</script>