<?php if(isset($displays)): ?>
  <?php if(count($displays) > 0): ?>
		<div class="grid3 apoio">
		<?php foreach($displays as $d): ?>
  		<p>
    		<?php echo $d->getDescription() ?>
  		</p>
  		  <img src="http://midia.cmais.com.br/programs/<?php echo $d->getImage() ?>" alt="<?php echo $d->getTitle() ?>">
  	<?php endforeach; ?>    
		</div>
  <?php endif; ?>
<?php endif; ?>