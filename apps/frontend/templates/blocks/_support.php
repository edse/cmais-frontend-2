<?php if(isset($displays)): ?>
  <?php if(count($displays) > 0): ?>
		<div class="grid3 apoio">
		<?php foreach($displays as $d): ?>
			<?php if ($d->getDescription()): ?>
  		<p><?php echo $d->getDescription() ?></p>
			<?php elseif ($d->Asset->getDescription()): ?>
  		<p><?php echo $d->Asset->getDescription() ?></p>
			<?php endif; ?>
			<?php if ($d->getImage()): ?>
  		<img src="http://midia.cmais.com.br/displays/<?php echo $d->getImage() ?>" alt="<?php echo $d->getTitle() ?>">
  		<?php elseif ($d->Asset->AssetImage->getImage()): ?>
  			<?php echo html_entity_decode($d->Asset->AssetImage->getImage()) ?>
  		<?php endif;?>
  	<?php endforeach; ?>    
		</div>
  <?php endif; ?>
<?php endif; ?>