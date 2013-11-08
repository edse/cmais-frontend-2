<?php
  if(isset($asset)) {
    $categories = array();
    $sections = $asset->getSections();
    foreach($sections as $s) {
      if($s->getParentSectionId() == 3181 && !$campaign) {
        if($s->getIsActive() == 1) 
          $campaign = $s;
      }
      if($s->getParentSectionId() == 3194) {
        $categories[] = $s;
      }
    }
    
    if(isset($campaign)) { // se o asset fizer parte de uma campanha, o "veja também" só terá assets da mesma...
      $see_also_by_campaign = Doctrine_Query::create()
        ->select('a.*')
        ->from('Asset a, SectionAsset sa')
        ->where('a.site_id = ?', $site->getId())
        ->andWhere('sa.asset_id = a.id')
        ->andWhere('sa.section_id = ?', $campaign->getId())
        ->andWhereIn('sa.section_id', array(2387,2388,2389))
        ->andWhere('a.asset_type_id = ?', 1)
        ->andWhere('a.date_start IS NULL OR a.date_start <= ?', date("Y-m-d H:i:s"))
        ->andWhere('a.id != ?', $asset->getId())
        ->andWhere('a.is_active = ?', 1)
        ->orderby('sa.display_order')
        ->limit(80)
        ->execute();
    }
    else { // senão, prioriza assets com a mesma tag, depois concatena com assets da mesma categoria e por último com assets da mesma seção.
      $tags = array();
      if(count($asset->getTags())>0){
        foreach($asset->getTags() as $t)
          $tags[] = $t;
      }
      if(count($tags) > 0) {
        $see_also_by_tag = Doctrine_Query::create()
          ->select('a.*')
          ->from('Asset a, SectionAsset sa, tag t, tagging tg')
          ->where('a.site_id = ?', $site->getId())
          ->andWhere('sa.asset_id = a.id')
          ->andWhereIn('sa.section_id', array(2387,2388,2389))
          ->andWhere('a.date_start IS NULL OR a.date_start <= ?', date("Y-m-d H:i:s"))
          ->andWhere('a.is_active = ?', 1)
          ->andWhere('tg.taggable_id = a.id')
          ->andWhere('tg.tag_id = t.id')
          ->andWhereIn('t.name', $tags)
          ->andWhere('a.id != ?', $asset->getId())
          ->andWhere('a.asset_type_id = ?', 1)
          ->limit(80)
          ->execute();
      }
      if(count($categories) > 0) {
        $see_also_by_categories = Doctrine_Query::create()
          ->select('a.*')
          ->from('Asset a, SectionAsset sa')
          ->where('a.site_id = ?', $site->getId())
          ->andWhere('sa.asset_id = a.id')
          ->andWhereIn('sa.section_id', $categories)
          ->andWhereIn('sa.section_id', array(2387,2388,2389))
          ->andWhere('a.asset_type_id = ?', 1)
          ->andWhere('a.date_start IS NULL OR a.date_start <= ?', date("Y-m-d H:i:s"))
          ->andWhere('a.id != ?', $asset->getId())
          ->andWhere('a.is_active = ?', 1)
          ->orderby('sa.display_order')
          ->limit(80)
          ->execute();
        }
      $see_also_by_section = Doctrine_Query::create()
        ->select('a.*')
        ->from('Asset a, SectionAsset sa')
        ->where('a.site_id = ?', $site->getId())
        ->andWhere('sa.asset_id = a.id')
        ->andWhere('sa.section_id = ?', $section->getId())
        ->andWhere('a.asset_type_id = ?', 1)
        ->andWhere('a.date_start IS NULL OR a.date_start <= ?', date("Y-m-d H:i:s"))
        ->andWhere('a.id != ?', $asset->getId())
        ->andWhere('a.is_active = ?', 1)
        ->orderby('sa.display_order')
        ->limit(80)
        ->execute();
    }
  }
  
?>
<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/sites/vilasesamo2/internas.css" type="text/css" />
<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/sites/vilasesamo2/assets.css" type="text/css" />

<script src="http://cmais.com.br/portal/js/jquery-ui/js/jquery-ui-1.8.11.custom.min.js"></script>
<script src="http://cmais.com.br/portal/js/modernizr/modernizr.min.js" type="text/javascript"></script>
<script src="http://cmais.com.br/portal/js/hammer.min.js" type="text/javascript"></script>
<script type="text/javascript" src="http://cmais.com.br/portal/js/responsive-carousel/script.js"></script>
<link type="text/css" rel="stylesheet" href="http://cmais.com.br/portal/js/responsive-carousel/style-vilasesamo.css"/>
<script type="text/javascript" src="http://cmais.com.br/portal/js/bootstrap/bootstrap-fileupload.js"></script>

<script>
  $("body").addClass("interna <?php echo $section->getSlug() ?>");

</script>
<!-- HEADER -->
<?php include_partial_from_folder('sites/vilasesamo2', 'global/menuprincipal', array('site' => $site, 'mainSite' => $mainSite, 'section' => $section)) ?>
<!-- /HEADER -->
<div id="content">
  <section class="scroll row-fluid">
    <h3><i class="sprite-icon-colorir-med"></i><?php echo $section->getTitle() ?><i class="seta-scroll sprite-scroll-<?php echo $section->getSlug() ?>"></i></h3>
  </section>
  <section class="filtro row-fluid">
    <h3><i class="sprite-icon-colorir-med"></i><?php echo $section->getTitle() ?><a class="todos-assets"><i class="sprite-btn-voltar-<?php echo $section->getSlug() ?>"></i><p>todos os jogos</p></a></h3>
    <div class="conteudo-asset">
      <h2><?php echo $asset->getTitle() ?></h2>
      <p><a href="#" title="Hábitos para uma vida saudável"><img src="http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/btn-habitos-peq.png" alt="Hábitos para uma vida saudável" /></a><?php echo $asset->getDescription() ?></p>
      
      <?php if(isset($asset)): ?>
      <div class="asset">
        <?php if($asset->AssetType->getSlug() == "video"): ?>
        <iframe width="900" height="675" src="http://www.youtube.com/embed/<?php echo $asset->AssetVideo->getYoutubeId() ?>?wmode=transparent&rel=0" frameborder="0" allowfullscreen></iframe>
        <?php elseif($asset->AssetType->getSlug() == "content"): ?>
          <?php if($section->getSlug() == "atividades"): ?>
            <?php $related = $asset->retriveRelatedAssetsByRelationType("Download"); ?>
        <img src="<?php echo $related[0]->retriveImageUrlByImageUsage("image-14-b") ?>" alt="<?php echo $asset->getTitle() ?>" />
        <div>
          <a href="<?php echo $related[0]->retriveImageUrlByImageUsage("original") ?>" title="Imprimir" target="_blank">Imprimir</a>
          <a href="http://cmais.com.br/actions/vilasesamo/download.php?file=<?php echo $related[0]->retriveImageUrlByImageUsage("original") ?>" title="Baixar">Baixar</a>
        </div>
          <?php else: ?>
            <?php echo html_entity_decode($asset->AssetContent->render()) ?>
          <?php endif; ?>
        <?php elseif($asset->AssetType->getSlug() == "image"): ?>
        <img src="<?php echo $asset->retriveImageUrlByImageUsage("image-14-b") ?>" alt="<?php echo $asset->getTitle() ?>" />
        <?php endif; ?>
      </div>
      <?php endif; ?>
      
    </div>
  </section>
  
  <?php if(isset($see_also_by_campaign) || isset($see_also_by_tag) || isset($see_also_by_categories) || isset($see_also_by_section)): ?>
  <section class="relacionados">
    <h2>Brinque também com:</h2>
    <div id="carrossel-interna">
      <div class="carrossel-i" id="carrossel-i"> 
        <div class="slider">
          <div class="slider-mask-wrap">
            <div class="slider-mask">
              <ul class="slider-target">
                <?php if(isset($campaign)): ?>
                  <?php if(count($see_also_by_campaign) > 0): ?>
                    <?php foreach($see_also_by_campaign as $k=>$d): ?>
                      <?php
                        $sections = $d->getSections();
                        foreach($sections as $s) {
                          if(in_array($s->getSlug(),array("videos","jogos","atividades"))) {
                            $assetSection = $s;
                            break;
                          }
                        }
                      ?>
                <!--li class="video"-->
                <li class="<?php echo $assetSection; ?>">
                  <!--div class="inner personagens bel"-->
                  <div>
                    <!--a href="/vilasesamo2jogos/nomedojogo1" title="Nome do jogo 1" class="btn-bel"-->
                    <a href="<?php echo $d->retriveUrl() ?>" title="<?php echo $d->getTitle() ?>">
                      <img src="<?php echo $d->retriveImageUrlByImageUsage("image-13-b") ?>" alt="<?php echo $d->getTitle() ?>">
                    </a>
                  </div>
                  <a class="nome" href="<?php echo $d->retriveUrl() ?>" title="<?php echo $d->getTitle() ?>"><i class="sprite-ico-videos-p"></i><?php echo $d->getTitle() ?></a>
                </li>
                    <?php endforeach; ?>
                  <?php endif; ?>
                <?php else: ?>
                  <?php if(isset($see_also_by_tag)): ?>
                    <?php if(count($see_also_by_tag) > 0): ?>
                      <?php foreach($see_also_by_tag as $k=>$d): ?>
                        <?php
                          $sections = $d->getSections();
                          foreach($sections as $s) {
                            if(in_array($s->getSlug(),array("videos","jogos","atividades"))) {
                              $assetSection = $s;
                              break;
                            }
                          }
                          $assetID[] = $d->getId();
                        ?>
                <!--li class="video"-->
                <li class="<?php echo $assetSection ?>">
                  <!--div class="inner personagens bel"-->
                  <div>
                    <!--a href="/vilasesamo2jogos/nomedojogo1" title="Nome do jogo 1" class="btn-bel"-->
                    <a href="<?php echo $d->retriveUrl() ?>" title="<?php echo $d->getTitle() ?>">
                      <img src="<?php echo $d->retriveImageUrlByImageUsage("image-13-b") ?>" alt="<?php echo $d->getTitle() ?>">
                    </a>
                  </div>
                  <a class="nome" href="<?php echo $d->retriveUrl() ?>" title="<?php echo $d->getTitle() ?>"><i class="sprite-ico-videos-p"></i><?php echo $d->getTitle() ?></a>
                </li>
                      <?php endforeach; ?>
                    <?php endif; ?>
                  <?php endif; ?>
                  <?php if(isset($see_also_by_categories)): ?>
                    <?php if(count($see_also_by_categories) > 0): ?>
                      <?php foreach($see_also_by_categories as $k=>$d): ?>
                        <?php if(!in_array($d->getId(), $assetID)): ?>
                          <?php
                            $sections = $d->getSections();
                            foreach($sections as $s) {
                              if(in_array($s->getSlug(),array("videos","jogos","atividades"))) {
                                $assetSection = $s;
                                break;
                              }
                            }
                            $assetID[] = $d->getId();
                          ?>
                <!--li class="video"-->
                <li class="<?php echo $assetSection ?>">
                  <!--div class="inner personagens bel"-->
                  <div>
                    <!--a href="/vilasesamo2jogos/nomedojogo1" title="Nome do jogo 1" class="btn-bel"-->
                    <a href="<?php echo $d->retriveUrl() ?>" title="<?php echo $d->getTitle() ?>">
                      <img src="<?php echo $d->retriveImageUrlByImageUsage("image-13-b") ?>" alt="<?php echo $d->getTitle() ?>">
                    </a>
                  </div>
                  <a class="nome" href="<?php echo $d->retriveUrl() ?>" title="<?php echo $d->getTitle() ?>"><i class="sprite-ico-videos-p"></i><?php echo $d->getTitle() ?></a>
                </li>
                        <?php endif; ?>
                      <?php endforeach; ?>
                    <?php endif; ?>
                  <?php endif; ?>
                  
                  
                  <?php if(isset($see_also_by_section)): ?>
                    <?php if(count($see_also_by_section) > 0): ?>
                      <?php foreach($see_also_by_section as $k=>$d): ?>
                        <?php if(!in_array($d->getId(), $assetID)): ?> 
                          <?php $assetID[] = $d->getId(); ?>
                <!--li class="video"-->
                <li class="<?php echo $section->getTitle() ?>">
                  <!--div class="inner personagens bel"-->
                  <div>
                    <!--a href="/vilasesamo2jogos/nomedojogo1" title="Nome do jogo 1" class="btn-bel"-->
                    <a href="<?php echo $d->retriveUrl() ?>" title="<?php echo $d->getTitle() ?>">
                      <img src="<?php echo $d->retriveImageUrlByImageUsage("image-13-b") ?>" alt="<?php echo $d->getTitle() ?>">
                    </a>
                  </div>
                  <a class="nome" href="<?php echo $d->retriveUrl() ?>" title="<?php echo $d->getTitle() ?>"><i class="sprite-ico-videos-p"></i><?php echo $d->getTitle() ?></a>
                </li>
                        <?php endif; ?>
                      <?php endforeach; ?>
                    <?php endif; ?>
                  <?php endif; ?>
                  
                <?php endif; ?>
              </ul>
            </div>
          </div>
              
          <div class="slider-nav">
            <div class="arrow-left arrow personagem">
              <span title="Back" class="sprite-seta-esquerda personagens" style="display:block;"></span>
            </div>
            <div class="arrow-right arrow personagem">
              <span title="Next" class="sprite-seta-direita personagens" style="display:block;"></span>
            </div>
          </div>
          
        </div>
      </div>
    </div>    
    <span class="divisa tipo2"></span>
  </section>
  <?php endif; ?>
  
  <?php if(isset($campaign)): ?>
  <section class="form row-fluid">
    <div class="span8">
    <h2><?php echo $campaign->getTitle(); ?></h2>
    <p><?php echo $campaign->getDescription(); ?></p>
    <form class="form-horizontal">
      <div class="control-group span8">
        <label class="control-label sprite-ico-nome" for="nome"></label>
        <div class="controls">
          <input type="text" id="nome" placeholder="Nome" value="Nome">
        </div>
      </div>
      
      <div class="control-group idade span2">
        <label class="control-label sprite-ico-idade" for="idade"></label>
        <div class="controls">
          <input type="text" id="idade" placeholder="Idade" value="Idade">
        </div>
      </div>
      
      <div class="control-group span8">
        <label class="control-label sprite-ico-cidade" for="cidade"></label>
        <div class="controls">
          <input type="text" id="cidade" placeholder="Cidade" value="Cidade">
        </div>
      </div>
      <div class="control-group estado span2">
        <div class="controls">
          <select id="estado">
            <option selected="selected" value="">UF</option>
            <option value="Acre">AC</option>
            <option value="Alagoas">AL</option>
            <option value="Amazonas">AM</option>
            <option value="Amapá">AP</option>
            <option value="Bahia">BA</option>
            <option value="Ceará">CE</option>
            <option value="Distrito Federal">DF</option>
            <option value="Espirito Santo">ES</option>
            <option value="Goiás">GO</option>
            <option value="Maranhão">MA</option>
            <option value="Minas Gerais">MG</option>
            <option value="Mato Grosso do Sul">MS</option>
            <option value="Mato Grosso">MT</option>
            <option value="Pará">PA</option>
            <option value="Paraíba">PB</option>
            <option value="Pernambuco">PE</option>
            <option value="Piauí">PI</option>
            <option value="Paraná">PR</option>
            <option value="Rio de Janeiro">RJ</option>
            <option value="Rio Grande do Norte">RN</option>
            <option value="Rondônia">RO</option>
            <option value="Roraima">RR</option>
            <option value="Rio Grande do Sul">RS</option>
            <option value="Santa Catarina">SC</option>
            <option value="Sergipe">SE</option>
            <option value="São Paulo">SP</option>
            <option value="Tocantins">TO</option>
          </select>
        </div>
      </div>
      <div class="control-group span8">
        <label class="control-label sprite-ico-email" for="email"></label>
        <div class="controls">
          <input type="text" id="email" placeholder="Email" value="Email">
        </div>
      </div>
       <div class="control-group span2 idade anexo">
        <label class="control-label sprite-ico-anexo" for="anexo"></label>
        <div class="controls">
          <!--input id="datafile" type="file" name="datafile" size="1"-->
          <a href="#" title="Anexar">Anexar</a>
        </div>
      </div>
      <div class="control-group span12 msg">
        <label class="control-label sprite-ico-mensagem" for="mensagem"></label>
        <div class="controls">
          <textarea id="mensagem" placeholder="Mensagem" value="Mensagem"></textarea>
        </div>
      </div>
      <div class="control-group span11">
        <label class="radio">
          <input type="radio" name="concorco" id="concorco" value="concorco" checked>
          Declaro que li e estou de acordo com os <a href="#">Termos e Condições</a>.
        </label>
        <button type="submit" class="btn">enviar minha brincadeira</button>
      </div>
    </form>
    </div>
    <div class="span4">
      <iframe width="300" height="246" src="//www.youtube.com/embed/gjQA0n_1fg4" frameborder="0" allowfullscreen></iframe>
    </div>
  </section>
  <?php endif; ?>
  
  <section class="pais">
    <span class="divisa"></span>
    <h2>Para adultos <i class="sprite-seta-down"></i></h2>
    <div class="content span12 row-fluid">
      
      <div class="redes">
        <p>Compartilhe esta brincadeira:</p>
        <g:plusone size="medium" count="false"></g:plusone>
        <a href="//pinterest.com/pin/create/button/" data-pin-do="buttonBookmark" ><img src="//assets.pinterest.com/images/pidgets/pin_it_button.png" alt="Pinterest" style="margin-top:-10px;" /></a>
        <fb:like href="<?php echo $uri ?>" layout="button_count" show_faces="false" send="false"></fb:like>
        <a href="http://twitter.com/share" class="twitter-share-button" data-count="horizontal" data-via="portalcmais" data-related="tvcultura">Tweet</a>
      </div>
      <div class="span4 dica">
        <i class="sprite-aspa-esquerda"></i>
        <h2><a href="#">Nome da Dica</a></h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam consequat metus ut leo interdum eleifend. Duis vel mauris et nunc posuere vehicula a id arcu. Maecenas malesuada ante ac consequat viverra. Vivamus tempor, nulla quis facilisis ullamcorper, tortor odio elementum eros, sit amet cursus felis elit vel diam. Fusce fringilla, nulla eu luctus lacinia, risus turpis varius orci, vel fringilla sem eros eu diam. Pellentesque sodales cursus elit, ac suscipit eros consectetur nec.
        Aenean at metus.</p>
        <i class="sprite-aspa-direita"></i>
        <button type="submit" class="btn">baixar</button>
      </div>
      <div class="span4 box-select">
        <a href="#" title=""> <img src="http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/escola-pra-cachorro.jpg" alt="thumb asset" /> </a>
        <h2><a>Nome jogo</a></h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam consequat metus ut leo interdum eleifend.</p>
      </div>
      <div class="span4">
        <p>Conheça nossos parceiros:</p>
        <a class="publicidade" href="#" title="Publicidade">
          <img src="http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/banner-sesc.png" alt="Sesc" />
        </a>
        <a class="publicidade" href="#" title="Publicidade">
          <img src="http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/banner-mapa.png" alt="Mapa do Brincar" />
        </a>
        
        <p>Você também pode escolher o jogo de acordo com as preferências da criança:</p>
        <div class="btn-group">
          <a class="btn dropdown-toggle" data-toggle="dropdown" href="#"> Selecione a categoria <span class="caret sprite-seta-down-amarela"></span> </a>
          <ul class="dropdown-menu">
            <li><a href="#">categoria 01</a></li>
            <li><a href="#">categoria 02</a></li>
            <li><a href="#">categoria 03</a></li>
            <li><a href="#">categoria 04</a></li>
          </ul>
        </div>
      </div>
      <h2 class="fechar-toogle ativo"><i class="sprite-seta-up"></i></h2>
    </div>
    
    <span class="linha"></span>
  </section>
</div>
<script>
//carrossel interna
$('#carrossel-i').responsiveCarousel({
  arrowLeft: '.arrow-left span.personagens',
  arrowRight: '.arrow-right span.personagens',
  target:'#carrossel-i .slider-target',
  unitElement:'#carrossel-i .slider-target > li',
  mask:'#carrossel-i .slider-mask',
  easing:'linear',
  dragEvents:true,
  speed:200,
  slideSpeed:1000
});


if(screen.width > 1024){
  $('#carrossel-i').mouseenter(function(){
    $('.arrow.personagem').fadeIn('fast');
  });
  
  $('#carrossel-mobile').mouseenter(function(){
    $('.arrow.destaque-mobile').fadeIn('fast');
  });
};
if(navigator.appName!='Microsoft Internet Explorer')
{
  //carrossel personagens redraw pra tablet e celular home
  window.addEventListener('load', function() {
    $('.carrossel-i, #carrossel-mobile').responsiveCarousel('redraw');
  });
  window.addEventListener("orientationchange", function() {
    $('.carrossel-i, #carrossel-mobile').responsiveCarousel('redraw');
  }, false);
  window.addEventListener("resize", function() {
    $('.carrossel-i, #carrossel-mobile').responsiveCarousel('redraw');
  }, false);
  //carrossel personagens redraw pra tablet e celular home
}
</script>
