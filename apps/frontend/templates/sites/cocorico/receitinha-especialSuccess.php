<?php use_helper('I18N', 'Date') ?>

<script type="text/javascript" src="http://cmais.com.br/portal/js/bootstrap/tooltip.js"></script>
<link href="http://cmais.com.br/portal/css/tvcultura/sites/cocorico/brincadeiras.css" rel="stylesheet">

<!-- container-->
<div class="container tudo">
  <!--topo coco-->
  <?php include_partial_from_folder('sites/cocorico', 'global/topo-coco', array('site'=>$site)) ?>
  <!--/topo coco-->
  
 <!-- row-->
  <div class="row-fluid menu">
    <!-- row-->
  <div class="row-fluid menu">
    <div class="navbar">
      <!--menu principal-->
      <?php include_partial_from_folder('sites/cocorico', 'global/menu', array('site'=>$site)) ?>
      <!--/menu principal-->
      <!--menu personagens -->
      <?php include_partial_from_folder('sites/cocorico', 'global/personagens', array('site'=>$site)) ?>
      <!--/menu personagens -->
    </div>
  </div>
  <!-- /row-->
  
  <!-- breadcrumb-->
  <?php include_partial_from_folder('sites/cocorico', 'global/breadcrumb-section', array('site'=>$site,'section'=>$section, 'asset'=>$asset)) ?> 
  <!-- /breadcrumb-->
  
  <!--btn voltar-->
  <a href="javascript:window.history.go(-1)" class="voltar">voltar<span class="divisao"></span></a>
  <!-- /btn voltar-->
  
  <!-- titulo da pagina -->
  <div class="tit-pagina">
    <h2><?php $tam=32; $str=$asset->getTitle(); mb_internal_encoding("UTF-8"); if(strlen($str) <= $tam) echo $str; else echo mb_substr($str, 0, $tam-1)."&hellip;" ?></h2>
    <span></span>
    <!-- RANKING -->
    <?php $section = $asset->getSections(); ?>
    <?php include_partial_from_folder('sites/cocorico', 'global/ranking', array('asset'=>$asset,'section'=>$section[0])) ?>
    <!--/RANKING -->
  </div>
  <a id="btn_1" href="javascript: vote('<?php echo $asset->getId() ?>');" class="curtir" title="Curtir">curtir</a>
  <img src="/images/spinner_bar.gif" style="display: none; float: right;" id="v_load" />
  <a id="btn_2" href="javascript:;" class="curtir disabled" title="Curtir">curtir</a>
  <!-- titulo da pagina -->
  
  <!--row-->
  <div class="row-fluid conteudo">
    <div class="span6 receita">
    <p class="alerta"><span></span>Na cozinha, Sempre peça ajuda a um adulto!</p>
    <?php echo html_entity_decode($asset->AssetContent->render()) ?>
    </div>
    <div class="span6">
      <?php $related_video = $asset->retriveRelatedAssetsByAssetTypeId(6); ?>
      <?php 
      if (count($related_video) > 0):
        $offset = "0m0s";
        if($related_video[0]->AssetVideo->getStartFrom() != ""){
          $p = explode(":",$related_video[0]->AssetVideo->getStartFrom());
          $offset = $p[0]."m".$p[1]."s";
        }
      ?>
      <iframe width="460" height="259" src="http://www.youtube.com/embed/<?php echo $related_video[0]->AssetVideo->getYoutubeId() ?>?wmode=transparent&rel=0<?php echo "#t=".$offset; ?>" frameborder="0" allowfullscreen></iframe>
      <?php endif; ?>
    </div>
  </div>
  <!--/row-->
  
   <!--row-->
  <div class="row-fluid conteudo destaques especial">
    <div class="span12">
      <div class="interna">
        <form class="form-horizontal">
          <h2>Envie sua receitinha:</h2>
          <div class="control-group g-nome">
            <label class="control-label nome" for="nome"></label>
            <div class="controls">
              <input type="text" id="nome" placeholder="Seu nome">
            </div>
          </div>
          <div class="control-group g-cidade">
            <label class="control-label cidade" for="cidade"></label>
            <div class="controls">
              <input type="text" id="cidade" placeholder="Sua cidade">
               <select class="span1">
                 <option value="" selected="selected">UF</option>
                 <option value="Acre">AC</option>
                 <option value="Alagoas">AL</option>
                 <option value="Amazonas">AM</option>
                 <option value="Amap&aacute;">AP</option>
                 <option value="Bahia">BA</option>
                 <option value="Cear&aacute;">CE</option>
                 <option value="Distrito Federal">DF</option>
                 <option value="Espirito Santo">ES</option>
                 <option value="Goi&aacute;s">GO</option>
                 <option value="Maranh&atilde;o">MA</option>
                 <option value="Minas Gerais">MG</option>
                 <option value="Mato Grosso do Sul">MS</option>
                 <option value="Mato Grosso">MT</option>
                 <option value="Par&aacute;">PA</option>
                 <option value="Para&iacute;ba">PB</option>
                 <option value="Pernambuco">PE</option>
                 <option value="Piau&iacute;">PI</option>
                 <option value="Paran&aacute;">PR</option>
                 <option value="Rio de Janeiro">RJ</option>
                 <option value="Rio Grande do Norte">RN</option>
                 <option value="Rond&ocirc;nia">RO</option>
                 <option value="Roraima">RR</option>
                 <option value="Rio Grande do Sul">RS</option>
                 <option value="Santa Catarina">SC</option>
                 <option value="Sergipe">SE</option>
                 <option value="S&atilde;o Paulo">SP</option>
                 <option value="Tocantins">TO</option>
              </select>
            </div>
           
          </div>
           <div class="control-group g-receita">
            <label class="control-label receita" for="receita"></label>
            <div class="controls">
              <textarea id="receita" placeholder="Escreva aqui sua receitinha"></textarea>
            </div>
            <button type="submit" class="btn">enviar</button>
          </div>
         
         
        </form>
      </div>
    </div>   
  </div>
  <!-- /row-->
  
    <?php
    $assets = Doctrine_Query::create()
      ->select('a.*')
      ->from('Asset a, SectionAsset sa, Section s')
      ->where('a.id = sa.asset_id')
      ->andWhere('s.id = sa.section_id')
      ->andWhere('s.slug = "receitinhas"')
      ->andWhere('a.site_id = ?', (int)$site->id)
      ->andWhere('a.asset_type_id = 1')
      ->andWhere("(a.date_start IS NULL OR a.date_start <= CURRENT_TIMESTAMP)")
      ->groupBy('sa.asset_id')
      ->orderBy('a.id desc')
      ->limit(6)
      ->execute();
  ?>
  <?php
    $assets = Doctrine_Query::create()
      ->select('a.*')
      ->from('Asset a, SectionAsset sa, Section s')
      ->where('a.id = sa.asset_id')
      ->andWhere('s.id = sa.section_id')
      ->andWhere('s.slug = "receitinhas"')
      ->andWhere('a.site_id = ?', (int)$site->id)
      ->andWhere('a.asset_type_id = 1')
      ->andWhere("(a.date_start IS NULL OR a.date_start <= CURRENT_TIMESTAMP)")
      ->groupBy('sa.asset_id')
      ->orderBy('a.id desc')
      ->limit(6)
      ->execute();
  ?>
  <?php if (count($assets) > 0): ?>
  <!--row-->
  <div class="row-fluid relacionados ytb">
    <div class="tit"><span class="mais"></span><a href="<?php echo $site->retriveUrl() ?>/receitinhas">Receitinhas</a><span></span></div>
    <ul class="destaques-small">
      <?php foreach($assets as $d): ?>
        <?php $related = $d->retriveRelatedAssetsByAssetTypeId(6); ?>
      <li class="span2">
        <a href="<?php echo $d->retriveUrl() ?>" title="<?php echo $d->getTitle() ?>">
          <img class="span12" src="http://img.youtube.com/vi/<?php echo $related[0]->AssetVideo->getYoutubeId() ?>/1.jpg" alt="<?php echo $d->getTitle() ?>" />
          <p><?php $tam=16; $str=$d->getTitle(); mb_internal_encoding("UTF-8"); if(strlen($str) <= $tam) echo $str; else echo mb_substr($str, 0, $tam-1)."&hellip;" ?></p>
        </a>
      </li>
      <?php endforeach; ?>
    </ul>
  </div>
  <!-- /row-->
  <?php endif; ?>

  <!-- rodapé--> 
  <div class="row-fluid  border-top"></div>
  <?php include_partial_from_folder('sites/cocorico', 'global/rodape', array('siteSections' => $siteSections, 'displays' => $displays, 'section'=>$section, 'uri'=>$uri)) ?>
  <!--/rodapé-->
</div>
<!-- /container-->

<script>
function vote(id){
  $.ajax({
    type: "GET",
    dataType: "text",
    data: "asset_id="+id,
    url: "http://app.cmais.com.br/ajax/ranking",
    beforeSend: function(){
      $('#btn_1').hide();
      $('#btn_2').show();
      $('#v_load').show();
    },
    success: function(data){
      if(data == 1){
        $('#btn_1').hide();
        $('#btn_2').show();
      }else{
        //alert('Erro!');
        $('#btn_1').show();
        $('#btn_2').hide();
      }
      $('#v_load').hide();
    }
  });
}
</script> 