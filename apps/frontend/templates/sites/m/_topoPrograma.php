		<fieldset class="ui-grid-a">
			<div class="ui-block-a">
				<?php if ($program->Site->getImageIcon()): ?>
				<div class="logo">
					<img title="<?php echo $program->getTitle(); ?>" alt="<?php echo $program->getTitle(); ?>" src="http://midia.cmais.com.br/programs/<?php echo $program->Site->getImageIcon() ?>">
				</div>
				<?php endif; ?>
			</div>
			<div class="ui-block-b titulo">
				<div class="textoPrograma">
					<p><?php echo $program->getTitle(); ?></p>
					<p><?php echo html_entity_decode($program->getSchedule()); ?></p>
				</div>
			</div>     
		</fieldset>