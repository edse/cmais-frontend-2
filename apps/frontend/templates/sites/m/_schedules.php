<?php
  $schedules = Doctrine_Query::create()
    ->select('s.*')
    ->from('Schedule s')
    ->where('s.channel_id = 1')
    ->andWhere('s.date_start >= ?', date('Y-m-d H:i:s'))
    ->orderBy('s.date_start asc')
    ->limit(5)
    ->execute();
?>
	<div class="progamacaoDia">

	  <!--CONTEUDO GRADE-->
	  <div class="grade" >
	    
	    <!--CABEÇALHO-->
	    <h2>PROGRAMAÇÃO</h2>
	    
	    <a href="<?php echo url_for('homepage') . $site->getSlug() . '/grade' ?>" class="gradeCompleta" data-direction="slide" data-rel="external">Grade completa</a>
	
			<div class="grade">
				
		    <!--GRADE ACCORDION-->
		    <div class="accordin" data-role="collapsible-set">
		    	
		    	<?php foreach($schedules as $k=>$d): ?>
		      <!--ITEM-->
		      <?php if ($k == 0): ?>
		      <div class="titulo" data-role="collapsible" data-collapsed="false" name="1">
		      <?php else: ?>
		      <div class="titulo" data-role="collapsible" data-collapsed="true" name="1">
		      <?php endif; ?>
		      	
		        <!--HORA / NOME / SETA-->
		        <h3>
		          <p class="hora"><?php echo format_datetime($d->getDateStart(),'HH:mm') ?></p>
		          <p class="nome"><?php echo $d->Program->getTitle() ?></p>
		          <span class="1 seta mudaPosicao"></span>
		        </h3>
		        <!--/HORA / NOME / SETA-->
		        
		        <!--DESCRIÇÃO-->
		        <div class="artigo">
		          <fieldset class="ui-grid-a">
		           
		            <div class="ui-block-a">
		               <a title="<?php echo $d->Program->getTitle() ?>" href="<?php echo url_for('homepage') . $site->getSlug() . '/programa?slug=' . $d->Program->Site->getSlug() ?>" data-transition="slide" rel="external"></a>
		              <div class="fotinho">
		                <img src="<?php echo $d->retriveLiveImage() ?>" width="100%">
		              </div>
		              
		            </div>
		            <div class="ui-block-b">
		              <h4><?php echo $d->Program->getTitle() ?></h4>
		              <p class="descricao"><?php echo $d->Program->getDescription() ?></p>
		            </div>     
		          </fieldset>
		        </div>
		        <!--/DESCRIÇÃO-->
		        
		      </div>
		      <!--/ITEM-->
		      <?php endforeach; ?>
		      
		    </div>
		    <!--/GRADE ACCORDION-->
		    
			</div>
			
	  </div>
	  <!--/CONTEUDO GRADE-->
	</div>
