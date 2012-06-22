	<!--FOOTER-->
	<div class="footer programas" align="center">
		
		<!-- FIO LARANJA -->
		<div class="fio"></div>
		<!-- /FIO LARANJA -->
		<?php
			$url = '';
			if ($site->getSlug() != 'm') {
				if (isset($asset))
					$url = url_for(@homepage) . $asset->getSlug() . '?from=m';
				else
					$url = url_for(@homepage) . '?from=m';
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
		?>
		
		<div class="footerBotoes">
			<?php if ($url != ''): ?>
		  <p><a href="<?php echo $url ?>" title="versão clássica" rel="external">Versão clássica</a></p>
		  <?php else: ?>
			<p><a href="http://cmais.com.br?from=m" title="versão clássica" rel="external">Versão clássica</a></p>
		  <?php endif; ?>
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
