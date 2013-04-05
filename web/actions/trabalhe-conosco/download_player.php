<?php
  $file = 'http://www.longtailvideo.com/download/jwplayer-3242.zip';
  $newfile = 'flashplayer6.zip';
  
  $file2 = 'http://download.itnt.netdna-cdn.com/22/216834/812914/mediaplayerviral.zip';
  $newfile2 = 'flashplayer5.zip';
  
  if (!copy($file, $newfile)) {
      echo "Falha ao copiar $file...\n";
  }
  
  if (!copy($file2, $newfile2)) {
      echo "Falha ao copiar $file...\n";
  }
?>