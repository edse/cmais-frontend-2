<?php
  $programs = Doctrine_Query::create()
    ->select('p.*')
    ->from('Program p, ChannelProgram cp')
    ->where('p.id = cp.program_id')
    ->andWhere('cp.channel_id = ?', 2)
    ->andWhere('p.is_active = ?', 1)
    ->orderBy('p.title')
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
<script type="text/javascript">
 //carrossel
  $(function(){
    $('.carrossel').jcarousel({
      wrap: "both"
    });
    //startclock();
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

<div id="bodyWrapper">

  <div class="conteudoWrapper" align="center">
    
    <?php include_partial_from_folder('tvratimbum','global/top', array('site'=> $site,'section'=>$section)) ?>
    
    <div class="conteudo internas">
      
      <div class="colunaMaior">
        <div class="trilha">
          <p><a href="/">TV Rá Tim Bum &gt;&gt;</a></p><a href="/programas">Programas</a>
        </div>
        
        <div id="box-programas-home">
          <div class="topo-esq"></div>
        
          <div class="topo">
            <a href="" class="enunciado">Programas</a>
          </div>
          
          <div class="lista-programas">
            <ul>
            <?php foreach($programs as $p): ?>
            	<?php if($p->Site->id > 0): ?>
              <li>
                <div class="boxPersonagens-tip">
                  <a href="<?php echo $p->retriveUrl()?>">
                    <img src="http://midia.cmais.com.br/programs/<?php echo $p->getImageThumb() ?>" alt="<?php echo $p->getTitle() ?>" title="<?php echo $p->getTitle() ?>" />
                    <span><?php echo $p->getTitle()?></span>
                  </a>
                </div>
              </li>
              <?php endif; ?>
            <?php endforeach; ?>
            </ul>
          </div>
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

