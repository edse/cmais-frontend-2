<!DOCTYPE html>
<html>
  <head>
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
</head>
<body>

<!-- Place this tag where you want both of the search box and the search results to render -->
<gcse:search></gcse:search>
<ul>
  
<?php
  $htmlDir = "html/";
  
  if (is_dir($htmlDir))
  {
    $pointer  = opendir($htmlDir);  
    while ($itensName = readdir($pointer))
    {
      if (!in_array($itensName, array(".", "..", "converted" )) )
      {
?>
  <li><a href="html/<?php echo $itensName ?>" title="<?php echo $itensName ?>"><?php echo $itensName ?></a></li>
<?php
        
      }
    }  
  }
?>
</ul>
</body>
</html>
      