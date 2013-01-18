<link href="/portal/css/tvcultura/sites/cocorico/brincadeiras.css" rel="stylesheet">


<script type="text/javascript">
  $(document).ready(function() {
    $('.destaques-small li:nth-child(6)').css('margin-right', '0');
    $('.destaques-small li:nth-child(12)').css('margin-right', '0');
  });
</script>


<!-- container-->
<div class="container tudo">
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
     <li><a href="<?php echo $site->retriveUrl() ?>">Cocoricó</a> <span class="divider">&rsaquo;</span></li>
     <li><a href="<?php echo $site->retriveUrl() ?>/papel-de-parede">papel de parede</a> <span class="divider">&rsaquo;</span></li>
     <li class="active"><?php echo $asset->getTitle()?></li>
  </ul>
  <!-- /breadcrumb-->
  
  <!--btn voltar-->
  <a href="javascript:window.history.go(-1)" class="voltar">voltar<span class="divisao"></span></a>
  <!-- /btn voltar-->
  
  <!-- titulo da pagina -->
  <div class="tit-pagina span7">
    <h2><?php echo $asset->getTitle() ?></h2>
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
  <div class="row-fluid conteudo box-papel-parede" id="videos">
    <p class="span12"><?php echo $asset->getDescription(); ?></p>
    <?php $preview = $asset->retriveRelatedAssetsByRelationType('Preview'); ?>
     <?php if(count($preview) > 0): ?>
       <img src="<?php echo $preview[0]->retriveImageUrlByImageUsage('original') ?>" alt="<?php echo $preview[0]->getTitle() ?>" />
     <?php endif; ?>
    <?php $download = $asset->retriveRelatedAssetsByRelationType('Download'); ?>
    <ul>
      <?php foreach($download as $k=>$d): ?>
        <?php if($k==0):?>
          <li class="celular">
            <a href="http://midia.cmais.com.br/assets/image/original/<?php echo $d->AssetImage->getOriginalFile() ?>" target="_blank"><i class="icon-celular"></i>320 x 480</a>
          </li>
        <?php elseif($k==1):?>
          <li>
            <a href="http://midia.cmais.com.br/assets/image/original/<?php echo $d->AssetImage->getOriginalFile() ?>" target="_blank"><i class="icon-monitor"></i>800 x 600</a>
          </li>
        <?php elseif($k==2):?>  
          <li>
            <a href="http://midia.cmais.com.br/assets/image/original/<?php echo $d->AssetImage->getOriginalFile() ?>" target="_blank"><i class="icon-monitor"></i>1024 x 768</a>
          </li>
        <?php elseif($k==3):?>
          <li>
            <a href="http://midia.cmais.com.br/assets/image/original/<?php echo $d->AssetImage->getOriginalFile() ?>" target="_blank"><i class="icon-monitor"></i>1280x1024</a>
          </li>  
        <?php endif; ?>
      <?php endforeach; ?>
      <?php if(count($preview) > 0): ?>
        <li>
          <a href="<?php echo $preview[0]->retriveImageUrlByImageUsage('original') ?>" target="_blank"><i class="icon-monitor"></i>1280x768</a>
        </li>
      <?php endif; ?>
    </ul>
    
    
    
    
  </div>
  <!--/row-->
  
  <!--row-->
  <div class="row-fluid relacionados">
    <div class="tit imprima"><span class="mais"></span><a href="/cocorico/joguinhos">papel de parede</a><span></span></div>
    <ul class="destaques-small">
      <li class="span2"><a href="#" title=""><img class="span12" src="/portal/images/capaPrograma/cocorico/jogo-home.jpg" alt="jogo" />Nome do Joguinho</a></li>
      <li class="span2"><a href="#" title=""><img class="span12" src="/portal/images/capaPrograma/cocorico/jogo-home.jpg" alt="jogo" />Nome do Joguinho</a></li>
      <li class="span2"><a href="#" title=""><img class="span12" src="/portal/images/capaPrograma/cocorico/jogo-home.jpg" alt="jogo" />Nome do Joguinho</a></li>
      <li class="span2"><a href="#" title=""><img class="span12" src="/portal/images/capaPrograma/cocorico/jogo-home.jpg" alt="jogo" />Nome do Joguinho</a></li>
      <li class="span2"><a href="#" title=""><img class="span12" src="/portal/images/capaPrograma/cocorico/jogo-home.jpg" alt="jogo" />Nome do Joguinho</a></li>
      <li class="span2"><a href="#" title=""><img class="span12" src="/portal/images/capaPrograma/cocorico/jogo-home.jpg" alt="jogo" />Nome do Joguinho</a></li>
      
    </ul>
  </div>
  <!-- /row-->
 
  
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
    url: "/ajax/ranking",
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