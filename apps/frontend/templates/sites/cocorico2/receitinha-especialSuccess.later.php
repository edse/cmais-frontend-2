<?php
$assets = $pager->getResults();
$asset = $assets[0];
?>

<script type="text/javascript" src="http://cmais.com.br/portal/js/bootstrap/tooltip.js"></script>
<link href="http://cmais.com.br/portal/css/tvcultura/sites/cocorico/brincadeiras.css" rel="stylesheet">

<!-- container-->
<div class="container tudo">
  <!--topo coco-->
  <?php include_partial_from_folder('sites/cocorico', 'global/topo-coco', array('site'=>$site)) ?>
  <!--/topo coco-->
  
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
   <ul class="breadcrumb">
     <li><a href="<?php echo $site->retriveUrl() ?>">Home</a> <span class="divider">&rsaquo;</span></li>
     <li><a href="<?php echo $site->retriveUrl() ?>/receitinhas">Receitinha Especial</a> <span class="divider">&rsaquo;</span></li>
     <li class="active"><?php echo $asset->getTitle() ?></li>
  </ul>
  <!-- /breadcrumb-->
  
  <!--btn voltar-->
  <a href="javascript:window.history.go(-1)" class="voltar">voltar<span class="divisao"></span></a>
  <!-- /btn voltar-->
  
  <!-- titulo da pagina -->
  <div class="tit-pagina span7 tit-especial">
    <h2><?php echo $asset->getTitle() ?></h2>
    <span></span>
    <!-- RANKING -->
    <?php $section = $asset->getSections(); ?>
    <?php include_partial_from_folder('sites/cocorico2', 'global/ranking', array('asset'=>$asset,'section'=>$section[0])) ?>
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
     <?php $related = $asset->retriveRelatedAssetsByAssetTypeId(6); ?>
      <?php if (count($related) > 0): ?>
      <iframe width="460" height="259" src="http://www.youtube.com/embed/<?php echo $related[0]->AssetVideo->getYoutubeId() ?>?wmode=transparent#t=0m0s" frameborder="0" allowfullscreen></iframe>
     <?php endif; ?>
    </div>
  </div>
  <!--/row-->
  
  <!--row-->
  <div class="row-fluid conteudo destaques especial">
    <div class="span12">
      <div class="interna">
        <form class="form-horizontal">
          <h2>Envie sua receitinha de verão:</h2>
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
  <?php if (count($assets) > 0): ?>
  <!--row-->
  <div class="row-fluid relacionados">
    <div class="tit"><span class="mais"></span><a href="<?php echo $site->retriveUrl() ?>/receitinhas">Receitinhas</a><span></span></div>
    <ul class="destaques-small">
      <?php foreach($assets as $d): ?>
        <?php $related = $d->retriveRelatedAssetsByRelationType('Preview') ?>
      <li class="span2"><a href="<?php echo $d->retriveUrl() ?>" title="<?php echo $d->getTitle() ?>"><img class="span12" src="<?php echo $related[0]->retriveImageUrlByImageUsage('image-7') ?>" alt="<?php echo $d->getTitle() ?>" /><?php echo $d->getTitle() ?></a></li>
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
        alert('Voto realizado com sucesso!');
        $('#btn_1').hide();
        $('#btn_2').show();
      }else{
        alert('Erro!');
        $('#btn_1').show();
        $('#btn_2').hide();
      }
      $('#v_load').hide();
    }
  });
}
</script>