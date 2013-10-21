<?php
  if(isset($asset)) {
    /*
     * Procura por duas seções no asset: uma entre as seções "videos", "jogos" e "atividades"; e outra que seja filha de "campanhas".
     */
    $sectionChecked = false;
    $campaignChecked = false;
    $sections = $asset->getSections();
    foreach($sections as $s) {
      if(in_array($s->getSlug(),array("videos","jogos","atividades")) && $sectionChecked == false) { // Se uma entre as seções "videos", "jogos" e "atividades" ainda não foi achada, continua procurando...
        $section = $s;
        $sectionChecked = true;
      }
      if($s->getParentSectionId() == 3181 && $campaignChecked == false) { // Se a campanha ainda não foi achada, continua procurando...
        $campaign = $s;
        $campaignChecked = true;
      }
    }
    
    if(isset($campaign)) { // se o asset fizer parte de uma campanha, o "veja também" só terá assets dessa campanha...
      /*
      $see_also = Doctrine_Query::create()
        ->select('a.*')
        ->from('Asset a, SectionAsset sa')
        ->where('a.site_id = ?', $site->getId())
        ->andWhere('sa.asset_id = a.id')
        ->andWhere('sa.section_id = ?', $campaign->getId())
        //->andWhere('a.asset_type_id = ?', 1)
        ->andWhere('a.date_start IS NULL OR a.date_start <= ?', date("Y-m-d H:i:s"))
        ->andWhere('a.is_active = ?', 1)
        ->orderby('sa.display_order')
        ->limit(80)
        ->execute();*/
    }
    else { // senão, prioriza assets com a mesma tag e depois concatena com assets da mesma categoria.
      
      $tags = $asset->getTags();
      print_r($tags);
      
      /*
      $see_also = Doctrine_Query::create()
        ->select('a.*')
        ->from('Asset a, SectionAsset sa')
        ->where('a.site_id = ?', $site->getId())
        ->andWhere('sa.asset_id = a.id')
        ->andWhere('sa.section_id = ?', $campaign->getId())
        //->andWhere('a.asset_type_id = ?', 1)
        ->andWhere('a.date_start IS NULL OR a.date_start <= ?', date("Y-m-d H:i:s"))
        ->andWhere('a.is_active = ?', 1)
        ->orderby('sa.display_order')
        ->limit(80)
        ->execute();
       * 
       */
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
    <h3><i class="sprite-icon-colorir-med"></i>Atividades<i class="seta-scroll sprite-scroll-<?php echo $section->getSlug() ?>"></i></h3>
  </section>
  <section class="filtro row-fluid">
    <h3><i class="sprite-icon-colorir-med"></i>Atividades<a class="todos-assets"><i class="sprite-btn-voltar-<?php echo $section->getSlug() ?>"></i><p>todos os jogos</p></a></h3>
    <div class="conteudo-asset">
      <h2><?php echo $asset->getTitle() ?></h2>
    <p><a href="#" title="Hábitos para uma vida saudável"><img src="http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/btn-habitos-peq.png" alt="Hábitos para uma vida saudável" /></a><?php echo $asset->getDescription() ?></p>
      
      <div class="asset">
        <?php if($asset->AssetType->getSlug() == "video"): ?>
        <iframe width="900" height="675" src="http://www.youtube.com/embed/<?php echo $asset->AssetVideo->getYoutubeId() ?>?wmode=transparent&rel=0" frameborder="0" allowfullscreen></iframe>
        <?php elseif($asset->AssetType->getSlug() == "content"): ?>
          <?php if($section->getSlug() == "atividades"): ?>
            <?php $related = $asset->retriveRelatedAssetsByRelationType("Download"); ?>
        <img src="<?php echo $related[0]->retriveImageUrlByImageUsage("image-14-b") ?>" alt="<?php echo $asset->getTitle() ?>" />
        <div>
          <a href="<?php echo $related[0]->retriveImageUrlByImageUsage("image-14-b") ?>" title="Imprimir" target="_blank">Imprimir</a>
          <a href="http://cmais.com.br/actions/vilasesamo/download.php?file=<?php echo $related[0]->retriveImageUrlByImageUsage("image-14-b") ?>" title="Baixar">Baixar</a>
        </div>
          <?php else: ?>
            <?php echo html_entity_decode($asset->AssetContent->render()) ?>
          <?php endif; ?>
        <?php elseif($asset->AssetType->getSlug() == "image"): ?>
        <img src="<?php echo $asset->retriveImageUrlByImageUsage("image-14-b") ?>" alt="<?php echo $asset->getTitle() ?>" />
        <?php endif; ?>
      </div>
    </div>
  </section>
  
  <section class="relacionados">
    <h2>Brinque também com:</h2>
    <?php include_partial_from_folder('sites/vilasesamo2', 'global/menuCarrosselinternas', array('site' => $site, 'mainSite' => $mainSite, 'section' => $section));?>
    <span class="divisa tipo2"></span>
  </section>
  
  <section class="form row-fluid">
    <div class="span8">
    <h2>Brincar é um direito da criança</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ultrices sapien at massa condimentum venenatis. In luctus vulputate massa, quis faucibus tellus pharetra nec. Donec convallis ligula eu augue mattis luctus. Aliquam scelerisque quam metus. Desenhe sua brincadeira preferida e envie para a galeria do site! </p>
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
