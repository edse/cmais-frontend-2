<!--header-->
<?php include_partial_from_folder('blocks', 'global/headerMob') ?>
<!--/header-->

<div id="cmais"  data-fullscreen="true">
		
	<!--CONTEUDO GRADE-->
	<div class="grade" >
    
    <!--CABEÇALHO-->
    <h2>GRADE COMPLETA</h2>
    <div class="data">
      <div class="seta-esquerda">
        <a href="javascript: send('<?php echo $sChannel->getSlug() ?>','<?php echo $prevDate ?>');">
          <img src="http://cmais.com.br/portal/images/capaPrograma/mob/seta-esquerda-grade.png" width="100%">
        </a>
      </div>
      <p><?php echo format_date($date, 'P') ?></p>  
      <div class="seta-direita">
        <a href="javascript: send('<?php echo $sChannel->getSlug() ?>','<?php echo $nextDate ?>');">
          <img src="http://cmais.com.br/portal/images/capaPrograma/mob/seta-direita-grade.png" width="100%">
        </a>
      </div>  
    </div>
		<!--/CABEÇALHO-->
		
		<form id="send" action="" method="post">
    	<input type="hidden" name="c" id="c" value="<?php echo $sChannel->getSlug() ?>" />
    	<input type="hidden" name="d" id="d" value="<?php echo $d?>" />
    </form>
    <script>
      function send(c,d){
        $("#c").val(c);
        $("#d").val(d);
        $("#send").submit();
      }
    </script>
		
	</div>
	<div class="progamacaoDia">

	  <!--CONTEUDO GRADE-->
	  <div class="grade" >
	    
	    <!--CABEÇALHO-->
	    <h2>PROGRAMAÇÃO</h2>
	    
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
		               <a title="<?php echo $d->Program->getTitle() ?>" href="<?php echo url_for('homepage') . 'programa/' . $d->Program->Site->getSlug() ?>" data-transition="slide" rel="external"></a>
		              <div class="fotinho">
		              	<?php if ($d->retriveLiveImage()): ?>
		                <img src="<?php echo $d->retriveLiveImage() ?>" width="100%">
		                <?php endif; ?>
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
	
	<!--/CONTEUDO GRADE-->
	
  <!-- mobile320x50 -->
  <div id="banner-320x50" class="banner">
    <script type='text/javascript'>
    GA_googleFillSlot("mobile2-320x50");
    </script>
  </div>
  <!-- mobile320x50 -->
	
</div>
<!--/PAGINA INDEX-->

<!--footer-->
<?php include_partial_from_folder('blocks', 'global/footerMob', array('site'=>$site,'section'=>$section)) ?>
<!--/footer-->