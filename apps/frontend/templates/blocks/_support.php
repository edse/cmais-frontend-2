<?php if(isset($displays)): ?>
  <?php if(count($displays) > 0): ?>
    <!--APOIO-->
		<div class="grid3 apoio">
		<?php foreach($displays as $d): ?>
			<?php if ($d->getDescription()): ?>
  		<p><?php echo $d->getDescription() ?></p>
			<?php elseif ($d->Asset->getDescription()): ?>
  		<p><?php echo $d->Asset->getDescription() ?></p>
			<?php endif; ?>
			<?php if ($d->getImage()): ?>
  		<img src="http://midia.cmais.com.br/displays/<?php echo $d->getImage() ?>" alt="<?php echo $d->getTitle() ?>">
  		<?php elseif ($d->Asset->AssetImage->getOriginalFile()): ?>
  		<img src="http://midia.cmais.com.br/assets/image/original/<?php echo $d->Asset->AssetImage->getOriginalFile() ?>" alt="<?php echo $d->getTitle() ?>">
  		<?php endif;?>
  	<?php endforeach; ?>    
		</div>
		<!--/APOIO-->
  <?php endif; ?>
<?php endif; ?>