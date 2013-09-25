<?php
$video = $displays["videos"][0];
/*
echo "<br />Numero de destaques: " . count($displays["videos"]);
$video = $displays["videos"][0];
echo "<br />#1 destaque titulo: " . $video -> getTitle();
echo "<br />#1 destaque desc: " . $video -> getDescription();
echo "<br />#1 destaque YTID: " . $video -> Asset -> AssetVideo -> getYoutubeId();
*/
?>
<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/sites/<?php echo $section->Site->getSlug() ?>.css" type="text/css" />
<?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'section' => $section))
?>

<!-- CAPA SITE -->
<div id="capa-site" align="center">
  <!-- CONTEUDO PAGINA -->
  <div id="conteudo-pagina" class="castelo">
    <!--VIDEO-->
    <div class="video">
      <iframe width="420" height="315" src="http://www.youtube.com/embed/<?php echo $video -> Asset -> AssetVideo -> getYoutubeId();?>?wmode=transparent&rel=0" frameborder="0" allowfullscreen></iframe>
    </div>
    <!--VIDEO-->
  </div>
  
  <!-- /CONTEUDO PAGINA -->
</div>
<!-- /CAPA SITE -->