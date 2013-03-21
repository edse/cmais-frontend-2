<?php use_helper('I18N', 'Date') ?>
<?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'asset' => $asset, 'section' => $section)) ?>
<link href="/portal/tvratimbum/css/geral.css?nocache=123" type="text/css" rel="stylesheet">
<link href="/portal/tvratimbum/css/novoLayout-2012.css" type="text/css" rel="stylesheet">
<link href="/portal/tvratimbum/css/jquery.jcarousel.css" rel="stylesheet" type="text/css" />
<script src="/portal/tvratimbum/js/jquery-1.4.4.min.js" type="text/javascript"></script>
<script src="/portal/tvratimbum/js/jquery-ui-1.8.9.min.js" type="text/javascript"></script>
<script src="/portal/tvratimbum/js/jquery.jcarousel.pack.js" type="text/javascript"></script>
<script src="/portal/tvratimbum/js/jPlayer/js/jquery.jplayer.min.js" type="text/javascript"></script>
<script type="text/javascript">
  //carrocel
  $(function(){
    $('.carrossel').jcarousel({
      wrap: "both"
    });
    startclock();
  })
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
          <p><a href="/">TV Rá Tim Bum</a></p><span>&gt;&gt;</span><a href="/programas">Programas</a><span>&gt;&gt;</span><a href="<?php $site->retriveUrl()?>"><?php echo $site->getTitle()?></a>
        </div>
        <div id="box-programas-programaEscolhido">
          <div class="wrapper">
            <div class="topo-esq"></div>
            <div class="topo"> 
              <a href="<?php echo $site->retriveUrl()?>" class="enunciado"><?php echo $site->getTitle()?></a>
            </div>
            <div class="programaEscolhido-info">
              <img alt="<?php echo $site->retriveUrl()?>" src="http://midia.cmais.com.br/programs/<?php echo $site->Program->getSiteThumb() ?>" />
              <div class="box-infos">
                <?php /*
                <div class="horario">
                  <p><?php echo html_entity_decode($site->Program->getSchedule())?></p>
                </div>
                 */ ?>
                <?php /*
                <div class="btn-episodeo">
                  <span class="picote"></span>
                  <a href="<?php echo $site->retriveUrl()?>/episodios">Episódios</a>
                </div>
                */ ?>
                <?php
                  $sec = Doctrine_Query::create()
                    ->select('s.*')
                    ->from('Section s')
                    ->where('s.slug = ?', "programacao")
                    ->andWhere('s.site_id = ?', $site->getId())
                    ->fetchOne();
                  if($sec):
                ?>
                <div class="btn-diario">
                  <span class="picote"></span>
                  <a href="http://tvratimbum.cmais.com.br/grade">Diário de programação</a>
                </div>
                <hr />
                <?php endif; ?>
                <p class="breve"><?php if($site->Program->getLongDescription()!=""):?><?php echo html_entity_decode($site->Program->getLongDescription())?><?php else:?><?php echo html_entity_decode($site->Program->getDescription())?><?php endif;?></p>
              </div>
            </div>
            <hr />
            <span class="picote"></span>
          </div>
          <!--
          <span class="alcaA"></span>
          <span class="alcaB"></span>
          -->
          <hr />
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
          <?php if($assets): ?> 
          <?php include_partial_from_folder('tvratimbum','global/personagens-carrossel', array('displays' => $assets)) ?>
          <span class="picote"></span>
          <?php endif; ?>
        </div>
        <hr />
            
        <div class="coluna interna">
          <?php if(isset($displays["imagens"])) include_partial_from_folder('tvratimbum','global/display-1c-imagens', array('displays' => $displays["imagens"])) ?>        
          
          <?php if(isset($displays["videos"])) include_partial_from_folder('tvratimbum','global/display-1c-video', array('displays' => $displays["videos"])) ?>        
          <hr />
          <?php if(isset($displays["jogos"])) include_partial_from_folder('tvratimbum','global/display-1c-jogos', array('displays' => $displays["jogos"])) ?>
        </div>
        
        <div class="coluna interna">
          <?php if(isset($displays["baixar"])) include_partial_from_folder('tvratimbum','global/display-1c-baixar', array('displays' => $displays["baixar"])) ?>
          <hr />
          <?php if(isset($displays["atividades"])) include_partial_from_folder('tvratimbum','global/display-1c-atividades', array('displays' => $displays["atividades"])) ?>
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
        <hr />
        <?php /*
        <hr />
        <?php include_partial_from_folder('tvratimbum','global/display-1c-recadinhos', array('site_id' => $site->getId())) ?>
        */ ?>
      </div>
    </div>

    <?php include_partial_from_folder('tvratimbum','global/footer') ?>
    <hr />
  </div>
</div>
