<?php 
  //$include_destaque = rand(0,1);
  $include_destaque = 1;
  if($include_destaque == 1)
    include_partial_from_folder('sites/quintaldacultura', 'global/novos_joguinhos_peixonauta');
 // else 
    //include_partial_from_folder('sites/quintaldacultura', 'global/novos-joguinhos-peixonauta');
?>