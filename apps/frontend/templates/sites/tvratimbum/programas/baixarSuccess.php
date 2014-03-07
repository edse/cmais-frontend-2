<?php
  if(!isset($section_id)) $section_id = 16;
  if(!isset($site_id) || $site_id == "all") $site_id = "";

  $sites = Doctrine_Query::create()
    ->select('s.*')
    ->from('Site s, SectionAsset sa, Asset a')
    ->where('s.id = a.site_id')
    ->andWhere('sa.asset_id = a.id')
    ->andWhereIn('sa.section_id',  array(16,1057,1058,1059,1060))
    ->orderBy('s.title')
    ->execute();

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
<script src="http://cmais.com.br/portal/tvratimbum/js/scroll.jquery.js" type="text/javascript"></script>

<script type="text/javascript">
  //carrossel
  $(function(){
    $('.carrossel').jcarousel({
      wrap: "both"
    });
   // startclock();
  })
  
  function setSection(i){
    $('#section_id').val(i);
    $('#filter').submit();
  }
  
  /*var timeID=null;
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
  }*/
</script>
<script>
  function loadScroll(){
    var page = 2;
    $('#infinite_scroll').scrollLoad({
      url : 'http://app.cmais.com.br/ajax/infinitescroll',
      dataType: "jsonp",
      getData : function() {
        return "page="+$('#pag').val()+"&section_id=<?php echo $section_id?>&site_id=<?php echo $site_id?>";
      },
      start : function() {
        $('<div class="loading"><img src="http://cmais.com.br/portal/tvratimbum/image/loading.gif"/></div>').appendTo(this);
      },
      ScrollAfterHeight : 95,     //this is the height in percentage
      onload : function( data ) {
        $(this).append( data );
        $('.loading').remove();
        $('#pag').val(parseInt($('#pag').val())+1);
      },
      continueWhile : function( resp ) {
        if( $(this).children('li').length >= 100 ) {
          return false;
        }
        return true;
      }
    });
  }
  $(document).ready(function(){
    $.ajax({
      url: "http://app.cmais.com.br/ajax/infinitescroll",
      dataType: "jsonp",
      data: "page=1&section_id=<?php echo $section_id?>&site_id=<?php echo $site_id?>",
      success: function(data){
        $('#infinite_scroll').html(data.data);
        loadScroll();
      }
    });
  });
</script>
<input type="hidden" name="pag" id="pag" value="1" />
<style>
  #infinite_scroll{height:900px;overflow-y:scroll;margin-top:50px;}
  #infinite_scroll a{font-weight:bold;}
  #infinite_scroll p{margin-bottom:20px;width:600px;}
  .loading{text-align:right;margin-top:-100px;}
</style>

<div id="bodyWrapper">

  <div class="conteudoWrapper" align="center">
    
    <?php include_partial_from_folder('tvratimbum','global/top', array('site'=> $site,'section'=>$section)) ?>

    <div class="conteudo internas">
      <div class="colunaMaior">
        <div class="trilha">
          <p><a href="/">TV Rá Tim Bum</a></p><span>&gt;&gt;</span><a href="/baixar">Baixar</a>
        </div>
        <div id="box-jogos-baixar">
          <div class="topo-esq"></div>
          <div class="topo">
            <a href="/baixar" class="enunciado">Baixar</a>
            <form action="" method="post" name="filter" id="filter">
              <input type="hidden" name="section_id" id="section_id" value="" />
              <select name="site_id" id="site_id" onchange="$('#filter').submit();">
                <option value="all">Todos os programas</option>
                <?php foreach($sites as $s): ?>
                  <option value="<?php echo $s->getId()?>"<?php if($s->getId() == $site_id) echo ' selected="selected"'?>><?php echo $s->getTitle()?></option>
                <?php endforeach; ?>
              </select>
            </form>
          </div>
          <hr />
          <div class="categorias">
            <ul>
              <li><a href="/baixar"><span class="pontaBarra"></span><span class="miolo">Todas</span><span class="caudaBarra"></span></a></li>
              <li><a href="javascript: setSection('1057');"><span class="pontaBarra"></span><span class="miolo">Brincadeiras</span><span class="caudaBarra"></span></a></li>
              <li><a href="javascript: setSection('1058');"><span class="pontaBarra"></span><span class="miolo">Carinhas</span><span class="caudaBarra"></span></a></li>
              <li><a href="javascript: setSection('1059');"><span class="pontaBarra"></span><span class="miolo">Cartões</span><span class="caudaBarra"></span></a></li>
              <li><a href="javascript: setSection('1060');"><span class="pontaBarra"></span><span class="miolo">Papéis de parede</span><span class="caudaBarra"></span></a></li>
            </ul>
            <hr />
          </div>

          <?php /* 
          <div class="escolhido"><!-- aparecer� somente quando o item for escolhido -->
            <p>Nome do programa/imagem/jogo/video escolhido</p>
          </div>
          */ ?>

          <div class="lista-programas" id="infinite_scroll" style="width:632px"></div>
          <hr />
          <span class="picote"></span>
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

