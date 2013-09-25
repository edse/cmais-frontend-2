<?php
$xml = file_get_contents(urldecode($_REQUEST["url"]));
$podcasts = new SimpleXMLElement($xml);
?>

<!--header-->
<?php include_partial_from_folder('blocks', 'global/headerMob') ?>
<!--/header-->
<?php $brasil = strrpos($_GET['url'], "brasil");?>
<?php $fm = strrpos($_GET['url'], "fm");?>

<div id="cmais"  data-fullscreen="true">

	
	<!--CONTEUDO RADIO-->
	<div class="radio" >
		
		<!--ESCOLHA DE RADIO-->
		<div class="alinha" align="center">
			<div class="btn-escolha">
				<a class="cbrasil <?php if($brasil == TRUE) echo "selected"?>" href="<?php echo url_for('homepage') . 'culturabrasil' ?>" title="Cultura Brasil">Cultura Brasil</a>
				<a class="cfm <?php if($fm == TRUE) echo "selected"?>" href="<?php echo url_for('homepage') . 'culturafm' ?>" title="Cultura FM">Cultura FM</a>
			</div>
		</div>
		<!--ESCOLHA DE RADIO-->
		
		<!--LISTA RADIO CULTURA BRASIL-->
		<ul data-role="listview" class="plCultBrasil">
			
			<!--PLAYLIST-->
			<li data-role="list-divider" class="divisor degrade bordas">
			  <p>
  			  <a href="#" class="escolhida" data-direction="reverse" data-rel="back">
  			    Playlists
  			  </a>
  			  
  			  <img src="http://cmais.com.br/portal/images/capaPrograma/mob/seta-playlist.gif" height="10px">
  			  
  			  <a href="#" class="escolhida">
  			    <?php echo $_REQUEST['playlist'] ?>
  			  </a>
			  </p>
			  <a href="#" class="voltar" data-direction="reverse" data-rel="back">
         &nbsp;&nbsp;voltar
       </a>
			</li>
			<!--/PLAYLIST-->
			
			<!--PLAYLIST TITULO-->
			<?php
			foreach($podcasts->channel->item as $p){
			?>
			<li class="playlistNome">
 			  <a href="<?php echo $p->enclosure["url"]?>">
 			    <p><?php echo $p->title?></p>
 			    <div class="linha2"></div>
 			  </a>
			</li>
			<?php
			}
			?>
			<!--/PLAYLIST TITULO-->
								
		</ul>
		<!--/LISTA RADIO CULTURA BRASIL-->
		
	</div>
	<!--/CONTEUDO RADIO-->
	
  <!-- mobile320x50 -->
  <div id="banner-320x50" class="banner">
    <script type='text/javascript'>
    GA_googleFillSlot("mobile2-320x50");
    </script>
  </div>
  <!-- mobile320x50 -->
	
</div>
<!--/PAGINA INDEX-->

<!--footer-->
<?php include_partial_from_folder('blocks', 'global/footerMob', array('site'=>$site,'section'=>$section)) ?>
<!--/footer-->