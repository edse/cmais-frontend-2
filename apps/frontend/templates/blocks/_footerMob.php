<script>
	function setCookieAndRedirect(cookieName, cookieValue, cookieExpires, cookiePath, cookieDomain, urlToRedirect) {
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
		<?php /*
			$url = '';
			if ($site->getSlug() != 'm') {
				if (isset($asset))
					$url = 'http://cmais.com.br/' . $site->getSlug() . '/' . $asset->getSlug() . '?from=m';
				else
					if ($site->getSlug() == 'cmais')
						$url = 'http://cmais.com.br?from=m';
					else
						$url = 'http://cmais.com.br/' . $site->getSlug() . '?from=m';
			}
			else {
				if (isset($section)) {
					$url = 'http://cmais.com.br/' . $section->getSlug() . '?from=m';
					if ($section->getSlug() == 'culturafm' || (isset($_GET['url']) && strpos($_GET['url'], "radiofm")))
						$url = 'http://culturafm.cmais.com.br?from=m';
					if ($section->getSlug() == 'culturabrasil' || (isset($_GET['url']) && strpos($_GET['url'], "culturabrasil.com.br")))
						$url = 'http://www.culturabrasil.com.br';
					if ($section->getSlug() == 'programas')
						$url = 'http://cmais.com.br/programas-de-a-z?from=m';
				}
			}
		
		 * 
		 */?>
		<?php /*
		<div class="footerBotoes">
			<?php if ($url != ''): ?>
		  <p><a href="<?php echo $url ?>" title="versão clássica" rel="external">Versão clássica</a></p>
		  <?php else: ?>
			<p><a href="http://cmais.com.br?from=m" title="versão clássica" rel="external">Versão clássica</a></p>
		  <?php endif; ?>
		  <p>Copyright © 1996 - <?php echo date('Y') ?> Fundação Padre Anchieta</p>
		</div>
		 * 
		 */
		?>
		<div class="footerBotoes">
		  <p><a href="javascript:setCookieAndRedirect('classic','yes','','/','cmais.com.br','http://cmais.com.br');" title="versão clássica" rel="external">Versão clássica</a></p>
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
