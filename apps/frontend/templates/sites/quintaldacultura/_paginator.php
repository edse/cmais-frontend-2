<?php if(isset($pager)): ?>
  <?php if($pager->haveToPaginate()): ?>
  <!-- PAGINACAO <?php echo $pager->getPage() ?>/<?php echo $pager->getLastPage() ?> -->
  <div class="paginacao" style="display: none">
      <ul id="pgContainer">
        <li><a href="javascript: goToPage(<?php echo $pager->getFirstPage() ?>);" class="sprite-seta-pag-esq" title="Primeira"></a></li>
        <!--li><a href="javascript: goToPage(<?php //echo $pager->getPreviousPage() ?>);" class="sprite-seta-pag-esq"  title="Anterior"><i class="icon-backward"></i></a></li-->
        <?php $i=0; ?>
        <?php foreach ($pager->getLinks() as $page): ?>
          <li id="pgNumber" <?php if($i == 4 ):?>style="margin:0!important;"<?php endif; if ($page == $pager->getPage()): ?>class="ativo"<?php endif; ?>>
            <a <?php if($i == 2 ):?>style="width:21px!important;"<?php endif; ?> href="javascript: goToPage(<?php echo $page ?>);"><?php echo $page ?></a>
            <?php if( $i < 4 && $i != $pager->getLastPage()):?><span>.</span><?php endif; ?>
            <?php $i++; ?>  
              
          </li> 
        <?php endforeach; ?>
        
 
	        <script>
	          $(function(){ 
  	          var i = <?php echo count($pager->getLinks()); ?>;
  	          var width = ($("#pgNumber").width() * i) + (10 * i) - 10;
  	          $('#pgContainer').css({'width':width,"margin":"0 auto"})
	          }); 
	        </script>
        
        
        <!--li><a href="javascript: goToPage(<?php //echo $pager->getNextPage() ?>);" class="paginacao" title="Próximo"><i class="sprite-seta-pag-dir"></i></a></li-->
        <li><a href="javascript: goToPage(<?php echo $pager->getLastPage() ?>);" class="sprite-seta-pag-dir" title="Última"></a></li>
      </ul>
  </div>
  
  <form id="page_form" action="" method="post">
      <input type="hidden" name="return_url" value="<?php echo $url?>" />
      <input type="hidden" name="page" id="page" value="" />
  </form>
    
  <script>
  function goToPage(i){
    $("#page").val(i);
    $("#page_form").submit();
  }
  function goToLetter(i){
    $("#letter").val(i);
    $("#page").val("");
    $("#page_form").submit();
  }
  </script>
  <?php endif; ?>
<?php endif; ?>


