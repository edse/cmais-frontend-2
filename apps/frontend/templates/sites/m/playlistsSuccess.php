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
			  
				
				
				<a class="cbrasil <?php if($brasil == TRUE) echo "selected"?>" href="http://172.20.18.133/index.php/m/culturabrasil">Cultura Brasil</a>
				<a class="cfm <?php if($fm == TRUE) echo "selected"?>" href="http://172.20.18.133/index.php/m/culturafm">Cultura FM</a>
			
			</div>
		</div>
		<!--ESCOLHA DE RADIO-->
		
		<!--LISTA RADIO CULTURA BRASIL-->
		<ul data-role="listview" class="plCultBrasil">
			
			<!--PLAYLIST-->
			<li data-role="list-divider" class="divisor degrade bordas">Playlists > <a href="#" class="escolhida"><?php echo $_REQUEST['playlist'] ?></a> </li>
			<!--/PLAYLIST-->
			
			<!--PLAYLIST TITULO-->
			<?php
			foreach($podcasts->channel->item as $p){
			?>
			<li class="playlistNome"><a href="<?php echo $p->enclosure["url"]?>"><?php echo $p->title?><div class="linha2"></div></a></li>
			<?php
			}
			?>
			<!--/PLAYLIST TITULO-->
								
		</ul>
		<!--/LISTA RADIO CULTURA BRASIL-->
		
	</div>
	<!--/CONTEUDO RADIO-->
	
</div>
<!--/PAGINA INDEX-->

<!--footer-->
<?php include_partial_from_folder('blocks', 'global/footerMob') ?>
<!--/footer-->