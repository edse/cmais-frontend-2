<body onload="MM_preloadImages('../backBubbleB.png')">
		<div id="flashContent">
		  <table width="200" border="0" align="center">
		      <tr>
		        <td align="right"><p><a href="../index.html" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image2','','../backBubbleB.png',1)"><img src="telaRAintro.jpg" alt="" width="640" height="480" border="0" usemap="#Map" /></a></p>
		          <p><a href="../index.html"><img src="../backBubbleA.png" alt="" width="64" height="64" border="0" /></a><a href="../index.html" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image2','','../backBubbleB.png',1)"></a></p></td>
	        </tr>
	      </table>
		</div>
	
    <map name="Map" id="Map">
      <area shape="circle" coords="156,324,114" href="instrucoesCamA.html" alt="" />
      <area shape="circle" coords="486,324,114" href="instrucoesNoCam.html" alt="" />
    </map>
<?php
  $assets = Doctrine_Query::create()
    ->select('a.*')
    ->from('Asset a, SectionAsset sa')
    ->where('sa.asset_id = a.id')
    ->andWhereIn('sa.section_id',  array(12, 28, 27, 26, 29, 25))
    ->orderBy('rand()')
    ->execute();
?>
<?php use_helper('I18N', 'Date') ?>
<?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'asset' => $asset, 'section' => $section)) ?>
<link href="/portal/tvratimbum/css/geral.css" type="text/css" rel="stylesheet">
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
<script type="text/javascript">
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
        </script>
<div id="bodyWrapper">

  <div class="conteudoWrapper" align="center">
    
    <?php include_partial_from_folder('tvratimbum','global/top', array('site'=> $site,'section'=>$section)) ?>
    
    <div class="conteudo internas">
      <div class="colunaMaior exceptionCM">
        <div class="trilha">
          <p><a href="/">TV Rá Tim Bum</a></p><span>&gt;&gt;</span><a href="/jogos">Jogos</a><span>&gt;&gt;</span><a href="<?php echo $asset->retriveUrl()?>"><?php echo $asset->getTitle()?></a>
        </div>
        <div id="box-jogos-interna">
          <div class="wrapper">
            <div class="topo-esq"></div>
            <div class="topo">
              <a href="/jogos" class="enunciado">Jogos</a>
            </div>
            <div class="personagem-escolhido">
              <div class="logo-destaque">
                <?php if ($asset->Site->Program->getImageThumb()): ?>
                <a href="<?php echo $asset->Site->retriveUrl() ?>" title="<?php echo $asset->getTitle()?>">
                	<img alt="<?php echo $asset->getTitle()?>" src="http://midia.cmais.com.br/programs/<?php echo $asset->Site->Program->getImageThumb() ?>" />
                </a>
                <?php else: ?>
                <a href="javascript:history.back()" title="<?php echo $asset->getTitle()?>">
                	<img alt="<?php echo $asset->getTitle()?>" src="http://midia.cmais.com.br/programs/<?php echo $asset->Site->getImageThumb() ?>" />
                </a>
                <?php endif; ?>
              </div>
              <p><?php echo $asset->getTitle()?></p>
            </div>
            <div class="info">
              <div align="center" class="jogo">
                <?php echo html_entity_decode($asset->AssetContent->getContent()) ?>
              </div>
              <p><?php echo $asset->getDescription()?></p>
            </div>
            <hr />
            <?php /*  
            <div class="btn-barra">
              <span class="pontaBarra"></span>
              <a href="#">Enviar para um amigo</a>
              <span class="caudaBarra"></span>
            </div>
            <span class="picote"></span>
            */ ?>
          </div>
          <hr />
          <div class="saibaMais">
            <span class="alcaA"></span>
            <span class="alcaB"></span>
            <h2><span class="mais">+</span>Jogos</h2>
            <div class="carrossel jcarousel-container jcarousel-container-horizontal" style="display: block;">
              <div class="jcarousel-prev jcarousel-prev-horizontal" style="display: block;" disabled="false"></div><div class="jcarousel-next jcarousel-next-horizontal" style="display: block;" disabled="false"></div><div class="jcarousel-clip jcarousel-clip-horizontal">
                <ul class="jcarousel-list jcarousel-list-horizontal" style="width: 1980px; left: 0px;">
                  <?php foreach($assets as $a): ?>
                  <li class="jcarousel-item jcarousel-item-horizontal jcarousel-item-1 jcarousel-item-1-horizontal" jcarouselindex="1">
                    <a href="<?php echo $a->retriveUrl()?>" class="aImg">
                      <img alt="<?php echo $a->getTitle()?>" src="<?php echo $a->retriveImageUrlByImageUsage("image-3-b") ?>">
                    </a>
                    <a href="<?php echo $a->retriveUrl()?>" class="aTxt">
                      <span class="nomeRlacionado"><?php echo $a->getTitle()?></span>
                      <span class="nomeItem"><?php echo $a->getDescription()?></span>
                    </a>
                  </li>
                  <?php endforeach; ?>
                </ul>
              </div>
            </div>
            <hr />
            <span class="picote"></span>
          </div>
        </div>
      </div>
    </div>

    <?php include_partial_from_folder('tvratimbum','global/footer') ?>
    <hr />
  </div>
</div>



