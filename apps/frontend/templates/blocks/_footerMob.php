<script>
	function setCookieAndRedirect(cookieName, cookieValue, cookieExpires, cookiePath, cookieDomain, urlToRedirect) {
		alert(cookieValue);
		classicVersion = setCookie(cookieName,cookieValue,cookieExpires,cookiePath,cookieDomain);
		if (classicVersion == 'yes')
			window.location = urlToRedirect;
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
		  <p><a href="javascript:setCookieAndRedirect('classic', 'yes', '', '/', 'cmais.com.br', 'http://cmais.com.br');" title="versão clássica" rel="external">Versão clássica</a></p>
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
