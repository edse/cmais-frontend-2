<?php use_helper('I18N', 'Date') ?>
<?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'section' => $section)) ?>
<?php 

function slugfy($string){
  
  $string = str_ireplace("À", "a", $string);
  $string = str_ireplace("Á", "a", $string);
  $string = str_ireplace("Ã", "a", $string);
  $string = str_ireplace("Â", "a", $string);
  $string = str_ireplace("à", "a", $string);
  $string = str_ireplace("á", "a", $string);
  $string = str_ireplace("ã", "a", $string);
  $string = str_ireplace("â", "a", $string);

  $string = str_ireplace("È", "e", $string);
  $string = str_ireplace("É", "e", $string);
  $string = str_ireplace("Ê", "e", $string);
  $string = str_ireplace("è", "e", $string);
  $string = str_ireplace("é", "e", $string);
  $string = str_ireplace("ê", "e", $string);

  $string = str_ireplace("Ì", "i", $string);
  $string = str_ireplace("Í", "i", $string);
  $string = str_ireplace("Î", "i", $string);
  $string = str_ireplace("ì", "i", $string);
  $string = str_ireplace("í", "i", $string);
  $string = str_ireplace("î", "i", $string);
  
  $string = str_ireplace("Ò", "o", $string);
  $string = str_ireplace("Ó", "o", $string);
  $string = str_ireplace("Ô", "o", $string);
  $string = str_ireplace("Õ", "o", $string);
  $string = str_ireplace("ò", "o", $string);
  $string = str_ireplace("ó", "o", $string);
  $string = str_ireplace("ô", "o", $string);
  $string = str_ireplace("õ", "o", $string);

  $string = str_ireplace("Ù", "u", $string);
  $string = str_ireplace("Ú", "u", $string);
  $string = str_ireplace("Û", "u", $string);
  $string = str_ireplace("ù", "u", $string);
  $string = str_ireplace("ú", "u", $string);
  $string = str_ireplace("û", "u", $string);
  
  $string = str_ireplace("Ç", "c", $string);
  $string = str_ireplace("ç", "c", $string);

  $string = str_ireplace("'", "-", $string);

  $string = str_ireplace("&", "e", $string);
  
  //$string = str_ireplace("À", "a", $string);
  
  $text = preg_replace('~[^\\pL\d]+~u', '-', $string);
  // trim
  $text = trim($text, '-');
  // transliterate
  if (function_exists('iconv'))
  {
    $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
  }
  // lowercase
  $text = strtolower($text);
  // remove unwanted characters
  $text = preg_replace('~[^-\w]+~', '', $text);
  if (empty($text))
  {
    $text = 'n-a';
  }
  
  $slug = $text;
  return str_replace("por-", "", str_replace(" ", "", $slug));
}
?>
    <!-- Le styles--> 
    <link href="http://cmais.com.br/portal/js/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="http://cmais.com.br/portal/js/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
    <link href="http://cmais.com.br/portal/css/tvcultura/sites/radarcultura.css" rel="stylesheet" type="text/css" />
    
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <script src="http://cmais.com.br/portal/js/bootstrap/bootstrap.js"></script>
    
    <!--container-->
    <div class="container">
      
        <?php include_partial_from_folder('sites/radarcultura', 'global/modal-feedback') ?>
        
        <!--topo menu/alert/logo-->
        <div class="row-fluid">  
          <?php include_partial_from_folder('sites/radarcultura', 'global/menu', array('siteSections' => $siteSections, 'displays' => $displays, 'section'=>$section, 'uri'=>$uri)) ?>
          
        </div>
        <!--topo menu/alert/logo-->
        <?php include_partial_from_folder('sites/radarcultura', 'global/breadcrumbs', array('site' => $site, 'section' => $section, 'artista' => $artist)) ?>
        <!--letra-->      
        <div class="row-fluid">  
          <div class="row-fluid musicas">
            <h1>Lista de músicas por artistas</h1>
              
            <!--
            <?php if(isset($letter) != ""): ?>
              <h3><?php echo strtoupper($letter)?> <small>artistas que começam com a letra "<?php echo strtoupper($letter)?>"</small></h3>
            <?php endif; ?>
            -->
            
            <div class="span5 pull-right">
              <!--busca-->
              <form action="" method="post" id="busca-radar">
                <div class="row-fluid">
                  <input class="btn pull-right btn-busca" type="submit" value="Busca">
                  <div class="input-prepend">
                   <input class="span8 pull-right" id="busca-input" type="text" name="busca-input" value="<?php if(isset($busca_radar)) echo $busca_radar?>" /><span class="add-on pull-right"><i class="icon-search"></i></span>
                  </div>
                </div>  
                <!-- div class="row-fluid">
                  <label class="radio inline" style="margin-left: 35px">
                    <input type="radio" name="busca-por" id="busca-por1" value="musicas" />
                    Por Título
                  </label>
                  <label class="radio inline">
                    <input type="radio" name="busca-por" id="busca-por2" value="artistas" checked="checked" />
                    Por Artista
                  </label>
                </div-->
              </form>
              <!--/busca--> 
            </div> 
          </div>

          <div class="pagination pagination-centered artista">
            <ul>
              <li<?php if($letter == "#"): ?> class="active"<?php endif; ?>><a href="<?php echo url_for('@homepage') ?>artistas/letra/1-9">#</a></li>
              <li<?php if($letter == "a"): ?> class="active"<?php endif; ?>><a href="<?php echo url_for('@homepage') ?>artistas/letra/a">A</a></li>
              <li<?php if($letter == "b"): ?> class="active"<?php endif; ?>><a href="<?php echo url_for('@homepage') ?>artistas/letra/b">B</a></li>
              <li<?php if($letter == "c"): ?> class="active"<?php endif; ?>><a href="<?php echo url_for('@homepage') ?>artistas/letra/c">C</a></li>
              <li<?php if($letter == "d"): ?> class="active"<?php endif; ?>><a href="<?php echo url_for('@homepage') ?>artistas/letra/d">D</a></li>
              <li<?php if($letter == "e"): ?> class="active"<?php endif; ?>><a href="<?php echo url_for('@homepage') ?>artistas/letra/e">E</a></li>
              <li<?php if($letter == "f"): ?> class="active"<?php endif; ?>><a href="<?php echo url_for('@homepage') ?>artistas/letra/f">F</a></li>
              <li<?php if($letter == "g"): ?> class="active"<?php endif; ?>><a href="<?php echo url_for('@homepage') ?>artistas/letra/g">G</a></li>
              <li<?php if($letter == "h"): ?> class="active"<?php endif; ?>><a href="<?php echo url_for('@homepage') ?>artistas/letra/h">H</a></li>
              <li<?php if($letter == "i"): ?> class="active"<?php endif; ?>><a href="<?php echo url_for('@homepage') ?>artistas/letra/i">I</a></li>
              <li<?php if($letter == "j"): ?> class="active"<?php endif; ?>><a href="<?php echo url_for('@homepage') ?>artistas/letra/j">J</a></li>
              <li<?php if($letter == "k"): ?> class="active"<?php endif; ?>><a href="<?php echo url_for('@homepage') ?>artistas/letra/k">K</a></li>
              <li<?php if($letter == "l"): ?> class="active"<?php endif; ?>><a href="<?php echo url_for('@homepage') ?>artistas/letra/l">L</a></li>
              <li<?php if($letter == "m"): ?> class="active"<?php endif; ?>><a href="<?php echo url_for('@homepage') ?>artistas/letra/m">M</a></li>
              <li<?php if($letter == "n"): ?> class="active"<?php endif; ?>><a href="<?php echo url_for('@homepage') ?>artistas/letra/n">N</a></li>
              <li<?php if($letter == "o"): ?> class="active"<?php endif; ?>><a href="<?php echo url_for('@homepage') ?>artistas/letra/o">O</a></li>
              <li<?php if($letter == "p"): ?> class="active"<?php endif; ?>><a href="<?php echo url_for('@homepage') ?>artistas/letra/p">P</a></li>
              <li<?php if($letter == "q"): ?> class="active"<?php endif; ?>><a href="<?php echo url_for('@homepage') ?>artistas/letra/q">Q</a></li>
              <li<?php if($letter == "r"): ?> class="active"<?php endif; ?>><a href="<?php echo url_for('@homepage') ?>artistas/letra/r">R</a></li>
              <li<?php if($letter == "s"): ?> class="active"<?php endif; ?>><a href="<?php echo url_for('@homepage') ?>artistas/letra/s">S</a></li>
              <li<?php if($letter == "t"): ?> class="active"<?php endif; ?>><a href="<?php echo url_for('@homepage') ?>artistas/letra/t">T</a></li>
              <li<?php if($letter == "u"): ?> class="active"<?php endif; ?>><a href="<?php echo url_for('@homepage') ?>artistas/letra/u">U</a></li>
              <li<?php if($letter == "v"): ?> class="active"<?php endif; ?>><a href="<?php echo url_for('@homepage') ?>artistas/letra/v">V</a></li>
              <li<?php if($letter == "x"): ?> class="active"<?php endif; ?>><a href="<?php echo url_for('@homepage') ?>artistas/letra/x">X</a></li>
              <li<?php if($letter == "z"): ?> class="active"<?php endif; ?>><a href="<?php echo url_for('@homepage') ?>artistas/letra/z">Z</a></li>
            </ul>
            <br/>
            
            <?php if(isset($letter)):?>
              <small><strong id="qtd_result"><?php echo $pager->count()?></strong> ARTISTAS CADASTRADOS COM A LETRA "<?php echo strtoupper($letter)?>"</small>
            <?php else:?>
              <small><strong id="qtd_result"><?php echo $pager->count()?></strong> ARTISTAS CADASTRADOS</small>
            <?php endif; ?>
          
          </div>
          
          
       </div>
       <!--letras-->
       <!--lista-->
       <div class="row-fluid" id="resultado_busca">
        <div class=" span6">
          <table class="table table-striped artista">
            <tbody>
              <thead>
                <tr>
                  <th>Artista / Intérprete</th>
                  <th></th>
                </tr>
              </thead>
               <?php if(count($pager) > 0): ?>
                <?php
                $counter = 0; 
                foreach($pager->getResults() as $d):
                  if($counter >= 30)
                    break;
                  $counter++;
                  ?>
                  <tr>
                    <td><a href="<?php echo url_for('@homepage') ?>artistas/<?php echo slugfy($d->getDescription()); ?>"><?php echo str_ireplace("Por ", "", $d->getDescription()); ?></a></td>
                    <td><a href="<?php echo url_for('@homepage') ?>artistas/<?php echo slugfy($d->getDescription()); ?>" class="btn btn-mini btn-inverse pull-right" ><i class="icon-list icon-white"></i> listar musicas </a></td>
                  </tr>
                <?php endforeach; ?>
              <?php endif; ?>
            </tbody>
          </table>
        </div>  
        <div class="span6">
          <table class="table table-striped artista">
            <tbody>
              <thead>
                <tr>
                  <th>Artista / Intérprete</th>
                  <th></th>
                </tr>
              </thead>
              <?php if(count($pager) > 0): ?>
                <?php
                $counter = 0;
                foreach($pager->getResults() as $d):
                  $counter++;
                  if($counter > 30):
                  ?>
                  <tr>
                    <td><a href="<?php echo url_for('@homepage') ?>artistas/<?php echo slugfy($d->getDescription()); ?>"><?php echo str_ireplace("Por ", "", $d->getDescription()); ?></a></td>
                    <td class="play"><a href="<?php echo url_for('@homepage') ?>artistas/<?php echo slugfy($d->getDescription()); ?>" class="btn btn-mini btn-inverse pull-right" ><i class="icon-list icon-white"></i> listar musicas </a></td>
                  </tr>
                  <?php endif; ?>
                <?php endforeach; ?>
              <?php endif; ?>
            </tbody>
          </table>
        </div>
      </div>
      <!--lista-->

      <!--paginador-->
      <?php include_partial_from_folder('sites/radarcultura', 'global/paginator', array('page' => $page, 'pager' => $pager,'letter'=>$letter)) ?>
      <!--paginador-->

      <!--banner horizontal-->    
      <div class="container">
        <div class="banner-radio horizontal">
          <script type='text/javascript'>
            GA_googleFillSlot("cmais-assets-728x90");
          </script>
        </div>
      </div>
      <!--banner horizontal-->
    </div>
    <!--container-->
    
   <script>
      $('#busca-radar').submit(function() {
	  	if($("#busca-input").val() != "" ){
 			$("#resultado_busca").html("");
 			$("#resultado_paginacao").html("");
 			
	 		$.ajax({
	           type : "GET", 
	           dataType: "jsonp",
	           data: $('#busca-radar').serialize(),
	           url: "http://app.cmais.com.br/index.php/ajax/radar-artista",
	           success: function(json){
	             	$("#qtd_result").text(json.qtd_result);
	             	$("#resultado_busca").html(json.data);
	             	$("#resultado_paginacao").html(json.paginacao);
	          }
	        });
	    }
        return false;
      });
    </script>

