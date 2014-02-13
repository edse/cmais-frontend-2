<?php use_helper('I18N', 'Date')
?>

<link href="http://cmais.com.br/portal/css/tvcultura/sites/cocorico/joguinhos.css" rel="stylesheet">
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
  <?php include_partial_from_folder('sites/cocorico', 'global/breadcrumb-section', array('site'=>$site,'section'=>$section, 'asset'=>$asset))  ?>
  <!-- /breadcrumb-->
  <!--btn voltar-->
  <?php $se_link = $asset -> Sections[0] -> getSlug();?>
  <a href="<?php echo $site->retriveUrl() ?>/<?php echo $se_låink ?>" class="voltar">voltar<span class="divisao"></span></a>
  <!-- /btn voltar-->
  <!-- titulo da pagina -->
  <div class="tit-pagina span7">
    <h2><?php $tam=32; $str=$asset->getTitle(); mb_internal_encoding("UTF-8"); if(strlen($str) <= $tam) echo $str; else echo mb_substr($str, 0, $tam-1)."&hellip;" ?></h2>
    <span></span>
    <!-- RANKING -->
    <?php $section = $asset -> getSections();?>
    <?php include_partial_from_folder('sites/cocorico', 'global/ranking', array('asset'=>$asset,'section'=>$section[0])) ?>
    <!--/RANKING -->
  </div>
  <a id="btn_1" href="javascript: vote('<?php echo $asset->getId()?>');" class="curtir" title="Curtir">curtir</a>
  <img src="/images/spinner_bar.gif" style="display: none; float: right;" id="v_load" />
  <a id="btn_2" href="javascript:;" class="curtir disabled" title="Curtir">curtir</a>
  <!-- titulo da pagina -->
  <!--row-->
  <div class="row-fluid conteudo">
    <p><?php echo $asset -> getDescription();?></p>
    <style>
      canvas { position: absolute;}
      #canvasDiv { height: 520px;    margin-left: -20px; margin-bottom:20px; }
      #canvasDiv { *display:none }
      .ie { background:#1893CF; border-radius:10px; -moz-border-radius: 10px; -webkit-border-radius: 10px; padding:20px;  clear:both; }
      .ie p { color: #FFFFFF;  font-size: 30px; clear: both; font-family:'ubuntu',sans-serif; text-align:center;  }
      .ie { margin-top /*\**/: -400px\9; *margin-top:0; }
      #pagErro { height: 320px;  margin: 60px auto;  position: relative;  width: 560px;}
      #pagErro .julio { background: url("http://cmais.com.br/portal/images/imgJulio.png") no-repeat scroll 0 0 transparent;  float: left;  height: 291px;  width: 229px;}
      #pagErro .msgErro { float: left; width: 312px;}
      #pagErro .msgErro h3 { font-size: 30px; margin-bottom:15px; color:#fff;}
      #pagErro p { font-size: 16px;   font-weight: bold;  text-align: left; margin-bottom: 20px; }
      #pagErro .pattern { width: 530px; height:30px; position:absolute; bottom: 0; background:url(images/pattern.png) repeat; }
    </style>

    <br/><br/>
    <div id="canvasDiv"></div>
    
    <script type="text/javascript" src="http://cmais.com.br/portal/js/drawing-cocorico/drawing.js"></script>
    <script type="text/javascript">
      drawingApp.init();

    </script>
    <!--[if IE]>
    <div class="ie">
    <div id="pagErro">
    <div class="julio"></div>
    <div class="msgErro">
    <h3>Puxa, puxa que puxa!</h3>
    <p>Este joguinho não funciona no Internet Explorer.</p>
    <p>Peça a ajuda de um adulto para abrir em um outro navegador, ok? :)</p>
    </div>
    <div class="pattern"></div>
    </div>

    </div>
    <![endif]-->
  </div>
  <!--/row-->
  <style>
    .m0{margin-left:0px!important;}
  </style>
  <!-- destaques-->
  <div class="row-fluid row conteudo destaques">
    <ul class="destaques-small">
      <?php /*
      <?php $related = $asset->retriveRelatedAssetsByRelationType('Preview') ?>
      <?php foreach($related as $d): ?>
      <li class="span2">
        <a href="javascript:;" title="<?php echo $d->getTitle() ?>" class="btn-desenho" data-source="<?php echo $related[0]->retriveImageUrlByImageUsage('Preview') ?>">
          <img alt="<?php echo $d->getTitle() ?>" src="<?php echo $related[0]->retriveImageUrlByImageUsage('image-7') ?>" class="span12">
          <?php $tam=18; $str=$d->getTitle(); mb_internal_encoding("UTF-8"); if(strlen($str) <= $tam) echo $str; else echo mb_substr($str, 0, $tam-1)."&hellip;" ?>
        </a></li>
      <?php endforeach;?>
       
       */ ?>

       <li class="span2 astolfo" style="display: none;">
        <a href="javascript:;" title="Astolfo" class="btn-desenho" data-source="http://cmais.com.br/portal/images/capaPrograma/cocorico/para-colorir/astolfo-transparente.png">
          <img alt="Astolfo" src="http://cmais.com.br/portal/images/capaPrograma/cocorico/para-colorir/astolfo_preview.jpg" class="span12">
          Astolfo
        </a>
       </li>
       <li class="span2 caco m0">
        <a href="javascript:;" title="Astolfo" class="btn-desenho" data-source="http://cmais.com.br/portal/images/capaPrograma/cocorico/para-colorir/caco-transparente.png">
          <img alt="Astolfo" src="http://cmais.com.br/portal/images/capaPrograma/cocorico/para-colorir/caco_preview.jpg" class="span12">
          Caco
        </a>
       </li>
       <li class="span2">
        <a href="javascript:;" title="Astolfo" class="btn-desenho" data-source="http://cmais.com.br/portal/images/capaPrograma/cocorico/para-colorir/feito-transparente.png">
          <img alt="Astolfo" src="http://cmais.com.br/portal/images/capaPrograma/cocorico/para-colorir/feito_preview.jpg" class="span12">
          Feito
        </a>
       </li>
       <li class="span2">
        <a href="javascript:;" title="Astolfo" class="btn-desenho" data-source="http://cmais.com.br/portal/images/capaPrograma/cocorico/para-colorir/lilica-transparente.png">
          <img alt="Astolfo" src="http://cmais.com.br/portal/images/capaPrograma/cocorico/para-colorir/lilica_preview.jpg" class="span12">
          Lilica
        </a>
       </li>
       <li class="span2" style="margin-left:20px;">
        <a href="javascript:;" title="Astolfo" class="btn-desenho" data-source="http://cmais.com.br/portal/images/capaPrograma/cocorico/para-colorir/lola-transparente.png">
          <img alt="Astolfo" src="http://cmais.com.br/portal/images/capaPrograma/cocorico/para-colorir/lola_preview.jpg" class="span12">
          Lola
        </a>
       </li>
       <li class="span2">
        <a href="javascript:;" title="Astolfo" class="btn-desenho" data-source="http://cmais.com.br/portal/images/capaPrograma/cocorico/para-colorir/oriba-transparente.png">
          <img alt="Astolfo" src="http://cmais.com.br/portal/images/capaPrograma/cocorico/para-colorir/oriba_preview.jpg" class="span12">
          Oriba
        </a>
       </li>
       <li class="span2">
        <a href="javascript:;" title="Astolfo" class="btn-desenho zaza" data-source="http://cmais.com.br/portal/images/capaPrograma/cocorico/para-colorir/zaza-transparente.png">
          <img alt="Astolfo" src="http://cmais.com.br/portal/images/capaPrograma/cocorico/para-colorir/zaza_preview.jpg" class="span12">
          Zaza
        </a>
       </li>
    </ul>
  </div>
  <!-- /destaques-->
  <?php $assets = Doctrine_Query::create() -> select('a.*') -> from('Asset a, SectionAsset sa, Section s') -> where('a.id = sa.asset_id') -> andWhere('s.id = sa.section_id') -> andWhere('s.slug = "joguinhos"') -> andWhere('a.site_id = ?', (int)$site -> id) -> andWhere('a.asset_type_id = 1') -> andWhere("(a.date_start IS NULL OR a.date_start <= CURRENT_TIMESTAMP)") -> groupBy('sa.asset_id') -> orderBy('a.id desc') -> limit(6) -> execute();?>
  <?php if (count($assets) > 0): ?>
  <!--row-->
  <div class="row-fluid relacionados">
    <div class="tit">
      <span class="mais"></span><a href="/cocorico/joguinhos">Joguinhos</a><span></span>
    </div>
    <ul class="destaques-small">
      <?php foreach($assets as $d): ?>
      <?php $related = $d->retriveRelatedAssetsByRelationType('Preview') ?>
      <li class="span2"><a href="<?php echo $d->retriveUrl() ?>" title="<?php echo $d->getTitle() ?>"> <img class="span12" src="<?php echo $related[0]->retriveImageUrlByImageUsage('image-7') ?>" alt="<?php echo $d->getTitle() ?>" /> <?php //echo $d->getTitle()?>
      <?php $tam=18; $str=$d->getTitle(); mb_internal_encoding("UTF-8"); if(strlen($str) <= $tam) echo $str; else echo mb_substr($str, 0, $tam-1)."&hellip;" ?></a></li>
      <?php endforeach;?>
    </ul>
  </div>
  <!-- /row-->
  <?php endif;?>

  <!-- rodapé-->
  <div class="row-fluid  border-top"></div>
  <?php include_partial_from_folder('sites/cocorico', 'global/rodape', array('siteSections' => $siteSections, 'displays' => $displays, 'section'=>$section, 'uri'=>$uri)) ?>
  <!--/rodapé-->
</div>
<!-- /container-->
<script>
  function vote(id) {
    $.ajax({
      type : "GET",
      dataType : "text",
      data : "asset_id=" + id,
      url : "http://app.cmais.com.br/ajax/ranking",
      beforeSend : function() {
        $('#btn_1').hide();
        $('#btn_2').show();
        $('#v_load').show();
      },
      success : function(data) {
        if(data == 1) {
          //alert('Voto realizado com sucesso!');
          $('#btn_1').hide();
          $('#btn_2').show();
        } else {
          alert('Erro!');
          $('#btn_1').show();
          $('#btn_2').hide();
        }
        $('#v_load').hide();
      }
    });
  }
</script>
