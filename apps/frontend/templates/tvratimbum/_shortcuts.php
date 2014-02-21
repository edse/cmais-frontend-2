    <div id="menu-lateral">
	  <div id="dialog2" class="facebookBox window">
    		<script type="text/javascript">
				$(document).ready(function() {
					$('a[name=modal]').click(function(e) {
						e.preventDefault();
						
						var id = $(this).attr('href');
					
						var maskHeight = $(document).height();
						var maskWidth = $(window).width();
					
						$('#mask2').css({'width':maskWidth,'height':maskHeight});
				
						$('#mask2').fadeIn(1000);	
						$('#mask2').fadeTo("slow",0.8);	
					
						//Get the window height and width
						var winH = $(window).height();
						var winW = $(window).width();
				              
						$(id).css('top',  winH/2-$(id).height()/2);
						$(id).css('left', winW/2-$(id).width()/2);
					
						$(id).fadeIn(2000); 
					
					});
					
					$('.window .close').click(function (e) {
						e.preventDefault();
						
						$('#mask2').hide();
						$('.window').hide();
					});		
					
					$('#mask2').click(function () {
						$(this).hide();
						$('.window').hide();
					});			
					
				});
			</script>
			<a class="close" href="">x</a>
			<img src="http://cmais.com.br/portal/tvratimbum/image/ico-facebookDraw.png" alt="TV R&aacute; Tim Bum" title="TV R&aacute; Tim Bum" />
			<h2><a href="https://facebook.com/tvratimbum" target="_blank">facebook.com/ratimbum</a></h2>
			<p>Você está sendo redirecionado para página da TV Ra-Tim-Bum no Facebook, uma rede social permitida apenas para usuários maiores de 13 anos. A nossa página no Facebook é voltada para informações aos pais.</p>
			<div class="btn-barra">
				<span class="pontaBarra"></span>
				<a href="https://facebook.com/tvratimbum" target="_blank">Continuar</a>
				<span class="caudaBarra"></span>
			</div>
		</div>
		<div id="dialog3" class="twitterBox window">
			<script type="text/javascript">
				$(document).ready(function() {
					$('a[name=modal]').click(function(e) {
						e.preventDefault();
						
						var id = $(this).attr('href');
					
						var maskHeight = $(document).height();
						var maskWidth = $(window).width();
					
						$('#mask3').css({'width':maskWidth,'height':maskHeight});
				
						$('#mask3').fadeIn(1000);	
						$('#mask3').fadeTo("slow",0.8);	
					
						//Get the window height and width
						var winH = $(window).height();
						var winW = $(window).width();
				              
						$(id).css('top',  winH/2-$(id).height()/2);
						$(id).css('left', winW/2-$(id).width()/2);
					
						$(id).fadeIn(2000); 
					
					});
					
					$('.window .close').click(function (e) {
						e.preventDefault();
						
						$('#mask3').hide();
						$('.window').hide();
					});		
					
					$('#mask3').click(function () {
						$(this).hide();
						$('.window').hide();
					});			
					
				});
			</script>
			<a class="close" href="">x</a>
			<img src="http://cmais.com.br/portal/tvratimbum/image/ico-twitterDraw.png" alt="TV R&aacute; Tim Bum" title="TV R&aacute; Tim Bum" />
			<h2><a href="http://twitter.com/tvratimbum" target="_blank">@tvratimbum</a></h2>
			<p>Você está sendo redirecionado para página da TV Ra-Tim-Bum no Twitter. A nossa página no Twitter é voltada para informações aos pais.</p>
			<div class="btn-barra">
				<span class="pontaBarra"></span>
				<a href="http://twitter.com/tvratimbum" target="_blank">Continuar</a>
				<span class="caudaBarra"></span>
			</div>
		</div>
      <ul>
        <li><a class="ml-facebook" href="#dialog2" name="modal">Facebook</a></li>
        <li><a class="ml-youtube" href="http://www.youtube.com.br/tvratimbum">Youtube</a></li>
      </ul>
    </div>
