<?php
  set_time_limit(0);
  $db = new PDO('mysql:unix_socket=/var/run/mysqld/mysqld.sock;dbname=cedoc;', 'root', 'root');
  
  $htmlDir = "/var/frontend/web/cedoc/html/";
  $xmlDir = "/var/frontend/web/cedoc/xml/";
  $xmlDirConv = "/var/frontend/web/cedoc/xml/converted/";
  
  
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
          $xmlString = file_get_contents($xmlFile);
          $xmlString = str_replace('&', '&amp;', $xmlString);
          $filme = simplexml_load_string($xmlString);
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
          $thesaurus_count = 0;
          foreach($filme->THESAURUSLIST->THESAURUS as $d)
          {
            $html .= "$d";
            if($k < count($filme->THESAURUSLIST->THESAURUS))
            {
              $html .= ", ";   
            }
            $k++;
            
            $stmt = $db->query("SELECT * FROM thesaurus WHERE title = '" . $d . "' ORDER BY title ASC");
              
            if($stmt->rowCount() == 0)
            {
              $stmt = $db->prepare("INSERT INTO thesaurus(title) VALUES('" . $d . "')");
              $stmt->execute();
              $thesaurus_count += $stmt->rowCount();
            }           
              
          }
          
          $html .= "</p>
        
    <h4>IDENTIDADELIST:</h4>
    <p>";
          $k = 1;
          $identidade_count = 0;
          foreach($filme->IDENTIDADELIST->IDENTIDADE as $d)
          {
            $html .= "$d";
            if($k < count($filme->IDENTIDADELIST->IDENTIDADE))
            {
              $html .= ", ";
            }
            $k++;

            $stmt = $db->query("SELECT * FROM identidade WHERE title = '" . $d . "' ORDER BY title ASC");
              
            if($stmt->rowCount() == 0)
            {
              $stmt = $db->prepare("INSERT INTO identidade(title) VALUES('" . $d . "')");
              $stmt->execute();
              $identidade_count += $stmt->rowCount();
            }           
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
