<?php
  $htmlDir = "/var/frontend/web/cdeoc/html/";
  $xmlDir = "/var/frontend/web/cdeoc/xml/";
  $xmlDirConv = "/var/frontend/web/cdeoc/xml/converted/";
  
  if (is_dir($xmlDir))
  {
    $pointer  = opendir($xmlDir);  
    while ($itensName = readdir($pointer))
    {
      if (!in_array($itensName, array(".", "..", "converted" )) )
      {
        //$itens[] = $itensName;
        echo $itensName . "<br />\n";
        
        $aux = explode('.',$itensName);
        $htmlFile = $htmlDir . $aux[0] . ".html";
        $xmlFile = $xmlDir . $itensName;
        
        if (file_exists($xmlFile)) {
          $filme = simplexml_load_file($xmlFile);
          $html = "<html>
  <head>
    <title>$filme->TITULO</title>
  </head>
  <body>
    <h3>$filme->TITULO</h3>
    
    <ul>";
              
          foreach($filme as $k=>$d)
          {
            if(!in_array($k,array('TITULO','THESAURUSLIST','IDENTIDADELIST')))
            {
              $html .= "
      <li><strong>$k:</strong> $d</li>";
            }
          }
          $html .= "
    </ul>
    
    <h4>THESAURUSLIST:</h4>
    <p>";
          $k = 1;
          
          foreach($filme->THESAURUSLIST->THESAURUS as $d)
          {
            $html .= "$d";
            if($k < count($filme->THESAURUSLIST->THESAURUS))
            {
              $html .= ", ";   
            }
            $k++;
          }
          
          $html .= "</p>
        
    <h4>IDENTIDADELIST:</h4>
    <p>";
          $k = 1;
          
          foreach($filme->IDENTIDADELIST->IDENTIDADE as $d)
          {
            $html .= "$d";
            if($k < count($filme->IDENTIDADELIST->IDENTIDADE))
            {
              $html .= ", ";
            }
            $k++;
          }
          
          $html .= "</p>
          
  </body>
</html>
";
          if (file_put_contents($htmlFile, $html))
          {
            $xmlFileNew = $xmlDirConv . $itensName;  
            if (copy($xmlFile,$xmlFileNew))
            {
              unlink($xmlFile);
            }
          }
        }
        else {
          exit('Failed to open: '.$filme);
        }
      }
    }  
  }
?>
