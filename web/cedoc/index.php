<?php
  include_once("includes/geral.php");
  
  // pagination
  $pageLimit = 25;
  $currentPage = isset($_REQUEST['offset']) ? $_REQUEST['offset'] : 1; 
  $nextPage = $currentPage + $pageLimit;
  @$prevPage = $_REQUEST['offset'] > 1 ? ($currentPage - $pageLimit) : false;
  
  $dir = "/var/frontend/web/cedoc/html/";
  $currentFiles = array();
  if (is_dir($dir))
  {
    $filecount = 0;
    if (glob($dir . "*.html") != false)
      $filecount = count(glob($dir . "*.html"));
    
    $counter = 1;    
    $pointer = opendir($dir);
    while (false !== ($file = readdir($pointer)))
    {
      if (!in_array($file, array(".", "..", "converted" ) ) )
      {
        if ($counter >= $currentPage)
        {
          if($counter < $nextPage)
          {
            $currentFiles[] = $file;
            
            $filePath = $dir . $file;
            $htmlCode = file_get_contents($filePath);
            preg_match("/<title>(.*?)<\\/title>/si", $htmlCode, $match);
            $title[] = $match[1];
            preg_match("/<meta name=\"description\" content=\"(.*?)\" \/>/si", $htmlCode, $match);
            $description[] = $match[1];
          }
          else
            break;
        }
        $counter++;
      }
    }
  }
  closedir($pointer);
  
  if (count($currentFiles) < $pageLimit)
    $nextPage = false;
?>
<?php echo $cmaisHeader ?>

    <div class="container-narrow">

      <div class="row-fluid">
        <div class="span7">
          <h1>CEDOC<br>
            <small>Centro de Documentação da Fundação Padre Anchieta</small>
          </h1>
        </div>
        <ul class="nav nav-pills pull-right span5">
          <li class="pull-right active"><a href="/cedoc" title="Início">Início</a></li>
          <li class="pull-right"><a href="/cedoc/thesaurus" title="Thesaurus">Thesaurus</a></li>
          <li class="pull-right"><a href="/cedoc/identidade" title="Identidade">Identidade</a></li>
          <li class="pull-right"><a href="/cedoc/sobre" title="Sobre">Sobre</a></li>
        </ul>
        <form class="form-search pull-right" action="busca.php">
          <div class="input-append">
            <input type="hidden" name="output" value="search">
            <input type="text" name="q" class="search-query input-large">
            <button type="submit" class="btn">Buscar</button>
          </div>
        </form>        
      </div>
      
      <p class="total">Total de registros: <strong><?php echo number_format($filecount, 0, "",".") ?></strong></p>
      
      <!--div class="row-fluid" style="clear:both"-->
        <ul class="pager">
          <li<?php if(!$prevPage): ?> class="disabled"<?php endif; ?>><a href="index.php?offset=<?php echo $prevPage; ?>" title="Anterior">Anterior</a></li>
          <li<?php if(!$nextPage): ?> class="disabled"<?php endif; ?>><a href="index.php?offset=<?php echo $nextPage; ?>" title="Próxima">Próxima</a></li>
        </ul>
      <!--/div-->
      
      
      <div class="row-fluid">
        <table class="table table-striped">
          <thead>
            <tr>
              <th>Documento</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($currentFiles as $k=>$d): ?>                
            <tr>
              <td>
                <strong><?php echo $title[$k] ?></strong>
                <br>
                <span class="docDescription"><?php echo $description[$k] ?></span>
              </td>
              <td>
                <a href="html/<?php echo $d ?>" class="btn btn-mini btn-inverse pull-right btnFilme" title="<?php echo $title[$k] ?>"><i class="icon-list icon-white"></i> ver detalhes </a>
              </td>
            </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
      
      <div class="footer">
        <p><img src="/cedoc/images/realizacao.jpg" alt="Realização"></p>
      </div>

    </div>
<?php echo $cmaisFooter ?>    


