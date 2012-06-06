
<!--TOPO-->
 <fieldset class="ui-grid-a">
    <div class="espaco10"></div>
    <!--VOLTAR-->
    <div class="ui-block-a">
     
     <a href="#" class="voltar" data-direction="reverse" data-rel="back" style="padding-left:20px">voltar</a> 
     
      
    </div>
    <!--/VOLTAR-->
    
    <!--TIPO-->
    <div class="ui-block-b">
      
      <p>
       	<?php if ($asset->Site->getSlug() == 'cmais'): ?>
       		<?php if ($asset->retriveLabel()): ?>
       			<?php echo $asset->retriveLabel() ?>
       		<?php endif; ?>
       	<?php else: ?>
       		<?php echo $asset->Site->getTitle() ?>
       	<?php endif; ?>
      </p>
              
    </div>  
    <!--/TIPO-->
       
  </fieldset>
  <!--TOPO-->