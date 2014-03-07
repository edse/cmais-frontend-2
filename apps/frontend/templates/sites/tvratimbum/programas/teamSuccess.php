<?php
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
  //carrocel
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
          <p><a href="/">TV Rá Tim Bum</a></p><span>&gt;&gt;</span><a href="/programas">Programas</a><span>&gt;&gt;</span><a href="<?php echo $site->retriveUrl()?>"><?php echo $site->getTitle()?></a><span>&gt;&gt;</span><a href="<?php echo $site->retriveUrl()?>/personagens/<?php echo $asset->getSlug()?>"><?php echo $asset->getTitle()?></a>
        </div>
        <div id="box-programas-personagem">
          <div class="wrapper">
            <div class="topo-esq"></div>
            <div class="topo">
              <a href="<?php echo $site->retriveUrl()?>" class="enunciado"><?php echo $site->getTitle()?></a>
            </div>
            <div class="personagem-escolhido">
              <p><?php echo $asset->getTitle()?></p>
            </div>
            <div class="info">
              <span class="carimbo"></span>   
              <div class="imagem-personagem">
                <img title="<?php echo $asset->getTitle()?>" alt="<?php echo $asset->getTitle()?>" src="<?php echo $asset->retriveImageUrlByImageUsage("image-6-b")?>" />
              </div>
              <p><?php echo html_entity_decode($asset->AssetPerson->getBio()) ?></p>
            </div>
            <hr />  
            <span class="picote"></span>
            <?php
              $assets = Doctrine_Query::create()
                ->select('a.*')
                ->from('Asset a')
                ->where('a.site_id = ?', $site->getId())
                ->andWhere('a.asset_type_id = ?', 20)
                ->andWhere('a.is_active = ?', 1)
                ->orderBy('a.title')
                ->execute();
            ?>
            <?php if($assets) include_partial_from_folder('tvratimbum','global/personagens-carrossel', array('displays' => $assets)) ?>
            <hr />
            <span class="picote"></span>
          </div>
          <?php /*
          <span class="alcaA"></span>
          <span class="alcaB"></span>
          <hr />
          <div class="saibaMais">
            <h2>Saiba</h2><span class="mais">+</span><hr>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse vel dolor nisi, vehicula feugiat felis. Nulla venenatis auctor lacinia. Cras ornare aliquet nunc. Integer ut lorem quis eros mollis aliquam ac in lacus. Phasellus dignissim placerat nulla, eu sollicitudin augue hendrerit sit amet. Curabitur placerat tristique nulla, non rutrum velit pellentesque nec.</p>
            <p>Aliquam ullamcorper libero quis massa consequat sed consequat quam vulputate. Maecenas a imperdiet velit. Quisque turpis neque, egestas sit amet vehicula eu, consectetur eu tortor. Integer nec velit id sapien ultricies laoreet facilisis et velit. Nullam viverra faucibus felis in porta. Fusce elementum tristique justo eu adipiscing. Nulla facilisi. Maecenas in nisi justo, sed dapibus ligula.</p>
            <p>Quisque id diam sed mauris viverra egestas pellentesque at sem. In mollis tincidunt dignissim. Duis facilisis, sem eget feugiat mollis, arcu sem imperdiet lorem, in euismod leo magna ac nibh. Mauris ac neque sit amet metus consectetur vulputate. Donec tempor dignissim pretium.</p>
            <span class="picote"></span>
          </div>
          */ ?>
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
        <?php if(isset($displays["voce-sabia"])) include_partial_from_folder('tvratimbum','global/display-1c-vocesabia', array('displays' => $displays["voce-sabia"])) ?>
      </div>
    </div>

    <?php include_partial_from_folder('tvratimbum','global/footer') ?>
    <hr />
  </div>
</div>


