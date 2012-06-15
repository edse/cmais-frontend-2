	<!--FOOTER-->
	<div class="footer programas" align="center">
		
		<!-- FIO LARANJA -->
		<div class="fio"></div>
		<!-- /FIO LARANJA -->
		
		<div class="footerBotoes">
		  <?php if ($site->getSlug() != 'm'): ?>
		  	<?php if (isset($asset)): ?>
		    <p><a href="<?php echo url_for(@homepage) . $site->getSlug() . '/' . $asset->getSlug() ?>?from=m" title="versão clássica" rel="external">Versão clássica</a></p>
		    <?php else: ?>
		    <p><a href="<?php echo url_for(@homepage) . $site->getSlug() ?>?from=m" title="versão clássica" rel="external">Versão clássica</a></p>
		    <?php endif; ?>
		  <?php else: ?>
	  		<?php if (isset($section)): ?>
		  		<?php if ($section->getSlug() == 'culturafm' || (isset($_GET['url']) && strpos($_GET['url'], "radiofm"))): ?>
		    <p><a href="http://culturafm.cmais.com.br?from=m" title="versão clássica" rel="external">Versão clássica</a></p>
	    		<?php elseif ($section->getSlug() == 'culturabrasil' || (isset($_GET['url']) && strpos($_GET['url'], "culturabrasil.com.br"))): ?>
		    <p><a href="http://www.culturabrasil.com.br" title="versão clássica" rel="external">Versão clássica</a></p>
			    <?php else: ?>
		  	<p><a href="<?php echo url_for(@homepage) ?>cmais?from=m" title="versão clássica" rel="external">Versão clássica</a></p>
		  		<?php endif; ?>
		  	<?php endif; ?>
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
