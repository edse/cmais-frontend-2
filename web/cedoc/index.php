<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />

    <!-- Put the following javascript before the closing </head> tag. -->
    <script>
      (function() {
        var cx = '014171385304484677642:rn0zsdt5eig';
        var gcse = document.createElement('script'); gcse.type = 'text/javascript'; gcse.async = true;
        gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
            '//www.google.com/cse/cse.js?cx=' + cx;
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(gcse, s);
      })();
    </script>
    <style>
      ul {
        clear:both;
      }
      .pagination {
        list-style: none;
        clear:both;
        margin:0 auto;
        float: left;
        margin-bottom: 20px;
        margin-top: 20px;
      }
      .pagination li {
        float: left;
        margin-right: 20px;
      }
    </style>
  </head>
<body>

<div class="row-fluid">
  <ul class="nav nav-pills">
    <li class=""><a href="./index.php" title="Início">Início</a></li>
    <li class=""><a href="./thesaurus/index.html" title="Thesaurus">Thesaurus</a></li>
    <li class=""><a href="./identidade/index.html" title="Identidade">Identidade</a></li>
    <li class=""><a href="./sobre.html" title="Sobre o projeto">Sobre o projeto</a></li>
  </ul>
</div>

<!-- Place this tag where you want both of the search box and the search results to render -->
<gcse:search></gcse:search>
<?php
  // pagination
  $pageLimit = 10;
  $currentPage = isset($_REQUEST['offset']) ? $_REQUEST['offset'] : 1; 
  $nextPage = $currentPage + 10;
  $prevPage = $_REQUEST['offset'] > 1 ? ($currentPage - 10) : false;
  
  $dir = "/var/frontend/web/cedoc/html/";
  $currentFiles = array();
  if (is_dir($dir))
  {
    $counter = 1;    
    $pointer = opendir($dir);
    while (false !== ($file = readdir($pointer)))
    {
      if ( !in_array($file, array(".", "..", "converted" ) ) )
      {
        if ($counter >= $currentPage)
        {
          if($counter < $nextPage)
          {
            $currentFiles[] = $file;
          }
          else
            break;
        }
        $counter++;
      }
    }
  }
  closedir($pointer);
  
  if (count($currentFiles) < 10)
    $nextPage = false;
?>
<ul class="pagination">
  <li><?php if($prevPage): ?><a href="index.php?offset=<?php echo $prevPage; ?>" title="anterior"><< Anterior</a><?php else: ?><< Anterior<?php endif; ?></li>
  <li><?php if($nextPage): ?><a href="index.php?offset=<?php echo $nextPage; ?>" title="próxima">Próxima >></a><?php else: ?>Próxima >><?php endif; ?></li>
</ul>
<ul>
<?php foreach($currentFiles as $k=>$d): ?>
  <li><a href="html/<?php echo $d ?>" title="<?php echo $d ?>"><?php echo $d ?></a></li>
<?php endforeach; ?>
</ul>
<ul class="pagination">
  <li><?php if($prevPage): ?><a href="index.php?offset=<?php echo $prevPage; ?>"><< Anterior</a><?php else: ?><< Anterior<?php endif; ?></li>
  <li><?php if($nextPage): ?><a href="index.php?offset=<?php echo $nextPage; ?>">Próxima >></a><?php else: ?>Próxima >><?php endif; ?></li>
</ul>

</body>
</html>
      