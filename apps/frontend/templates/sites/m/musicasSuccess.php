<!--header-->
<?php include_partial_from_folder('blocks', 'global/headerMob') ?>
<!--/header-->

<div id="cmais"  data-fullscreen="true">
	<!--SCRIPT MUDA RADIO-->
	<script>
		$(document).ready(function(){
			
			$('.cbrasil').click(function(){
				//torna o botão selecionado
				$('.cbrasil').addClass('selected');
				$('.cfm').removeClass('selected');
				
				//muda lista
				$('.plCultBrasil').fadeIn('fast');
				$('.plCultFm').hide();
			});
			
			$('.cfm').click(function(){
				//torna o botão selecionado
				$('.cfm').addClass('selected');
				$('.cbrasil').removeClass('selected');
				
				//muda lista
				$('.plCultFm').fadeIn('fast');
				$('.plCultBrasil').hide();			
			});
		});
	</script>
	<!--/SCRIPT MUDA RADIO-->
	
	<!--CONTEUDO RADIO-->
	<div class="radio" >
		
		<!--ESCOLHA DE RADIO-->
		<div class="alinha" align="center">
			<div class="btn-escolha">
				
				<a class="cbrasil selected" href="#">Cultura Brasil</a>
				<a class="cfm" href="#">Cultura FM</a>
			
			</div>
		</div>
		<!--ESCOLHA DE RADIO-->
		
		<!--LISTA RADIO CULTURA BRASIL-->
		<ul data-role="listview" class="plCultBrasil">
			
			<!--PLAYLIST-->
			<li data-role="list-divider" class="divisor degrade bordas">Playlists</li>
			<!--/PLAYLIST-->
			
			<!--PLAYLIST TITULO-->
			<li class="playlistNome"><a href="#">Estúdio F Cultura Brasil<div class="linha2"></div></a></li>
			<li class="playlistNome"><a href="#">Toda Música Cultura Brasil<div class="linha2"></div></a></li>
			<li class="playlistNome"><a href="#">Play Estúdio Cultura Brasil<div class="linha2"></div></a></li>
			<li class="playlistNome"><a href="#">Tropicállia Cultura Brasil<div class="linha2"></div></a></li>
			<li class="playlistNome"><a href="#">Nara Leão Cultura Brasil<div class="linha2"></div></a></li>
			<li class="playlistNome"><a href="#">Na subida do morro é diferente Cultura Brasil<div class="linha2"></div></a></li>
			<li class="playlistNome"><a href="#">Sussego Cultura Brasil<div class="linha2"></div></a></li>
			<!--/PLAYLIST TITULO-->
								
		</ul>
		<!--/LISTA RADIO CULTURA BRASIL-->
		
		<!--LISTA RADIO CULTURA  FM-->
		<ul data-role="listview" class="plCultFm"  style="display:none;">
			
			<!--PLAYLIST-->
			<li data-role="list-divider" class="divisor degrade bordas">Playlists</li>
			<!--/PLAYLIST-->
			
			<!--PLAYLIST TITULO-->
			<li class="playlistNome"><a href="#">Estúdio F Cultura FM<div class="linha2"></div></a></li>
			<li class="playlistNome"><a href="#">Toda Música Cultura FM<div class="linha2"></div></a></li>
			<li class="playlistNome"><a href="#">Play Estúdio Cultura FM<div class="linha2"></div></a></li>
			<li class="playlistNome"><a href="#">Tropicállia Cultura FM<div class="linha2"></div></a></li>
			<li class="playlistNome"><a href="#">Nara Leão Cultura FM<div class="linha2"></div></a></li>
			<li class="playlistNome"><a href="#">Na subida do morro é diferente Cultura FM<div class="linha2"></div></a></li>
			<li class="playlistNome"><a href="#">Sussego Cultura FM<div class="linha2"></div></a></li>
			<!--/PLAYLIST TITULO-->
								
		</ul>
		<!--/LISTA RADIO CULTURA FM-->
		
	</div>
	<!--/CONTEUDO RADIO-->
	
</div>
<!--/PAGINA INDEX-->

<!--footer-->
<?php include_partial_from_folder('blocks', 'global/footerMob', array('site'=>$site)) ?>
<!--/footer-->