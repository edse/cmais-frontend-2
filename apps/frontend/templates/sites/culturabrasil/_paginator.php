<?php if(isset($pager)): ?>
  <?php if($pager->haveToPaginate()): ?>
  <div class="row">
    <div class="pagination pagination-centered">
      <ul>
        <li class="back-pag"><a href="javascript: goToPage(<?php echo $pager->getFirstPage() ?>);" class="paginacao" title="Primeira"><i class="icon-fast-backward"></i></a></li>
        <li class="back-pag"?><a href="javascript: goToPage(<?php echo $pager->getPreviousPage() ?>);" class="paginacao"  title="Anterior"><i class="icon-backward"></i></a></li>
        <?php foreach ($pager->getLinks() as $page): ?>
        <li class="back-pag <?php if ($page == $pager->getPage()): ?>active<?php endif; ?>" ><a href="javascript: goToPage(<?php echo $page ?>);"><?php echo $page ?></a></li>
        <?php endforeach; ?>
        <li class="back-pag"><a href="javascript: goToPage(<?php echo $pager->getNextPage() ?>);" class="paginacao" title="Próximo"><i class="icon-forward"></i></a></li>
        <li class="back-pag"><a href="javascript: goToPage(<?php echo $pager->getLastPage() ?>);" class="paginacao" title="Última"><i class="icon-fast-forward"></i></a></li>
      </ul>
    </div>
  </div>
  <!--form id="page_form" action="" method="post">
    <input type="hidden" name="return_url" value="<?php echo $url?>" />
    <input type="hidden" name="page" id="page" value="" />
  </form-->
  <form id="page_form" action="" method="post">
      <input type="hidden" name="return_url" value="<?php echo $url?>" />
      <input type="hidden" name="page" id="page" value="" />
      <!--input type="hidden" name="letter" id="letter" value="<?php if(isset($letter)) echo $letter;?>" /-->
      <input type="hidden" name="term" id="term" value="<?php echo $term ?>" />
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