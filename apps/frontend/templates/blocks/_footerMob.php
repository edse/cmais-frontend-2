<script>
	function setCookieAndRedirect(urlToRedirect) {
		setCookie('classic', 'yes', 0, '/', 'cmais.com.br');
		classicVersion = getCookie('classic');
		if (classicVersion == 'yes')
			window.location = "http://cmais.com.br";
		else
			alert('Redirecionamento inválido!')
	}
</script>
	<!--FOOTER-->
	<div class="footer programas" align="center">
		
		<!-- FIO LARANJA -->
		<div class="fio"></div>
		<!-- /FIO LARANJA -->
		<div class="footerBotoes">
		  <p><a href="javascript:setCookieAndRedirect();" title="versão clássica" rel="external">Versão clássica</a></p>
		  <p>Copyright © 1996 - <?php echo date('Y') ?> Fundação Padre Anchieta</p>
		</div>
		
	</div>
	<!--/FOOTER-->
	
</div>
<!--/JQUERY MOBILE-->
</body>
<!--/Body-->

</html>
<!--/html-->
