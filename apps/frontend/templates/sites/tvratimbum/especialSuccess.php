<?php
  //echo "<br><br><br><br>site> ".$site_id." section> ".$section_id;
  if((($site_id > 0)&&($site_id != "all")&&($section_id == ""))){
    $assets = Doctrine_Query::create()
      ->select('a.*')
      ->from('Asset a, SectionAsset sa')
      ->where('sa.asset_id = a.id')
      ->andWhere('a.site_id = ?', (int)$site_id)
      ->andWhereIn('sa.section_id',  array(19))
      ->orderBy('a.id desc')
      ->execute();
  }elseif(($section_id > 0)&&(($site_id <= 0)||($site_id == "all"))){
    $assets = Doctrine_Query::create()
      ->select('a.*')
      ->from('Asset a, SectionAsset sa')
      ->where('sa.asset_id = a.id')
      ->andWhereIn('sa.section_id',  array($section_id))
      ->orderBy('a.id desc')
      ->execute();
  }elseif((($site_id > 0)&&($site_id != "all")&&($section_id > 0))){
    $assets = Doctrine_Query::create()
      ->select('a.*')
      ->from('Asset a, SectionAsset sa')
      ->where('sa.asset_id = a.id')
      ->andWhere('a.site_id = ?', (int)$site_id)
      ->andWhereIn('sa.section_id',  array($section_id))
      ->orderBy('a.id desc')
      ->execute();
  }
  else{
    $assets = Doctrine_Query::create()
      ->select('a.*')
      ->from('Asset a, SectionAsset sa')
      ->where('sa.asset_id = a.id')
      ->andWhereIn('sa.section_id',  array(19))
      ->orderBy('a.id desc')
      ->execute();
  }
  
  $sites = array();
  foreach($assets as $a){
    if(!in_array($a->Site, $sites))
      $sites[] = $a->Site;
  }

  if(!isset($displays["voce-sabia"])){
    $block = Doctrine::getTable('Block')->findOneById(587);
    if($block)
      $vocesabia = $block->retriveDisplays();
  }
?>
<?php use_helper('I18N', 'Date') ?>
<?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'asset' => $asset, 'section' => $section)) ?>
<link href="http://cmais.com.br/portal/tvratimbum/css/geral.css" type="text/css" rel="stylesheet">
<link href="http://cmais.com.br/portal/tvratimbum/css/novoLayout-2014.css" type="text/css" rel="stylesheet">
<link href="http://cmais.com.br/portal/tvratimbum/css/jquery.jcarousel.css" rel="stylesheet" type="text/css" />
<script src="http://cmais.com.br/portal/tvratimbum/js/jquery-1.4.4.min.js" type="text/javascript"></script>
<script src="http://cmais.com.br/portal/tvratimbum/js/jquery-ui-1.8.9.min.js" type="text/javascript"></script>
<script src="http://cmais.com.br/portal/tvratimbum/js/jquery.jcarousel.pack.js" type="text/javascript"></script>
<script src="http://cmais.com.br/portal/tvratimbum/js/jPlayer/js/jquery.jplayer.min.js" type="text/javascript"></script>
<script type="text/javascript">
  //carrossel
  $(function(){
    $('.carrossel').jcarousel({
      wrap: "both"
    });
    startclock();
  })
  
  function setSection(i){
    $('#section_id').val(i);
    $('#filter').submit();
  }
  
  var timeID=null;
  var timerRunning=false;
  function stopclock (){
    if(timerRunning)
      clearTimeout(timerID);
    timerRunning=false;
  }
  function startclock(){
    stopclock();
    showtime();
  }
  function showtime() {
    var now=new Date();
    var hours= now.getHours();
    var minutes= now.getMinutes();
    var timeValue=""+ hours;
    timeValue += ((minutes<10) ? ":0" : ":") + minutes
    document.clock.face.value= timeValue
    timerID = setTimeout("showtime()",1000);
    timerRunning = true;
  }
</script>

<div id="bodyWrapper">

  <div class="conteudoWrapper" align="center">
    
    <?php include_partial_from_folder('tvratimbum','global/top', array('site'=> $site,'section'=>$section)) ?>
    
    <div class="conteudo internas">
      <div class="colunaMaior">
        <div class="trilha">
          <p><a href="/">TV Rá Tim Bum</a></p><span>&gt;&gt;</span><a href="/especial">Especial</a>
        </div>
        <div id="box-especial-interna">
          <div class="wrapper">
            <div class="topo-esq"></div>
            <div class="topo">
              <a href="/especial" class="enunciado">Especial</a>
            </div>
            <div class="lista-programas">
              <ul>
              <?php foreach($assets as $a): ?>
              <li>
                <a href="<?php echo $a->retriveUrl()?>" class="aImg">
                  <img alt="<?php echo $a->getTitle()?>" src="<?php echo $a->retriveImageUrlByImageUsage("image-3-b") ?>">
                </a>
                <a href="<?php echo $a->retriveUrl()?>" class="aTxt">
                  <span class="nomeRlacionado"><?php echo $a->getTitle()?></span>
                  <?php /* <span class="nomeItem"><?php echo $a->getDescription()?></span> */?>
                </a>
              </li>
              <?php endforeach; ?>
            </ul>
          </div>
          
          <?php /*
          <div class="paginacao">
            <ul>
              <li><a href="" class="primeira"><span>&lt;&lt;</span>primeira</a></li>
              <li><a href="" class="anterior">anterior</a></li>
              <li><span class="nPaginas">3 de 10</span></li>
              <li><a href="" class="proximo">próximo</a></li>
              <li><a href="" class="ultima">última<span>&gt;&gt;</span></a></li>
            </ul> 
          </div>
          */ ?>
          <hr />
          <span class="picote"></span>
        </div>
      </div>
    </div>
    <div class="coluna">
      <div id="box-noAr">
        <?php include_partial_from_folder('tvratimbum','global/live') ?>
        <span class="picote"></span>
        <?php include_partial_from_folder('tvratimbum','global/next') ?>
        <span class="picote"></span>
        <?php include_partial_from_folder('tvratimbum','global/important') ?>
        <span class="picote"></span>
      </div>
      <hr />
      <?php //if(isset($vocesabia)) include_partial_from_folder('tvratimbum','global/display-1c-vocesabia', array('displays' => $vocesabia)) ?>
    </div>
  </div>
  
  <?php include_partial_from_folder('tvratimbum','global/footer') ?>
  <hr />
</div>

</div>

