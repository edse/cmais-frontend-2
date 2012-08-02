<script>
	function setCookieAndRedirect(cookieName, cookieValue, cookieExpires, cookiePath, cookieDomain, urlToRedirect) {
		//alert(cookieValue);
		setCookie(cookieName,cookieValue,cookieExpires,cookiePath,cookieDomain);
		classicVersion = getCookie('classic');
		if (window.location.href.indexOf("?teste") > 0)
			alert(document.cookie);
		if (classicVersion == 'yes')
			window.location = urlToRedirect;
		else
			alert('Redirecionamento inválido!')
		/*
		setCookie('classic', 'yes', '', '/', '.cmais.com.br');
		if (window.location.href.indexOf("?teste") > 0)
			alert(document.cookie);
		*/
	}
</script>
	<!--FOOTER-->
	<div class="footer programas" align="center">
		
		<!-- FIO LARANJA -->
		<div class="fio"></div>
		<!-- /FIO LARANJA -->
		<div class="footerBotoes">
		  <p><a href="javascript:setCookieAndRedirect('classic', 'yes', 0, '/', '.cmais.com.br', 'http://cmais.com.br');" title="versão clássica" rel="external">Versão clássica</a></p>
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
