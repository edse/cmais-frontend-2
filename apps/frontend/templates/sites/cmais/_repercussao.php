		<?php if(isset($displays)): ?>
			<?php foreach ($displays as $k => $d): ?>
	        <h2>
	          <i class="ico-setas ico-aspas-a"></i>
	            <span class="aspas">“</span><?php echo $d->getTitle()?><span class="aspas">”</span> 
	          <i class="ico-setas ico-aspas-b"></i>
	        </h2>
	        <p><?php echo $d->getDescription()?></p>  				
			<?php endforeach;?>
		<?php endif;?>  