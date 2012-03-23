<?php use_helper('I18N', 'Date') ?>
<?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'asset' => $asset, 'section' => $section)) ?>
<link href="/portal/tvratimbum/css/geral.css" type="text/css" rel="stylesheet">
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
<!--CORPO -->
<div id="bodyWrapper">

  <!--Conteudo Wrapper-->
  <div class="conteudoWrapper" align="center">
    
    <!--Include Topo-->
    <?php include_partial_from_folder('tvratimbum','global/top') ?>
    <!--Include Topo-->  
    
    <!--Conteudo-->  
    <div class="conteudo">
      
     
    </div>
    <!--/Conteudo-->
    
    <!--Include rodapé-->
    <?php include_partial_from_folder('tvratimbum','global/footer') ?>
    <!--Include rodapé-->

  </div>
  <!--/Conteudo Wrapper-->

</div>
<!--/CORPO -->
