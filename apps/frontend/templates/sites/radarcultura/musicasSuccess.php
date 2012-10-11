<?php use_helper('I18N', 'Date') ?>
<?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'section' => $section)) ?>

    <!-- Le styles -->
    <link href="/portal/js/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/portal/js/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
    <link href="/portal/css/tvcultura/sites/radarcultura.css" rel="stylesheet" type="text/css" />

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <script src="/portal/js/bootstrap/bootstrap.js"></script>
    
    <!--container-->
    <div class="container">
      
      <?php include_partial_from_folder('sites/radarcultura', 'global/modal-feedback') ?>
        
      <!--topo menu/alert/logo-->
      <div class="row-fluid">
        <?php include_partial_from_folder('sites/radarcultura', 'global/alert', array('site' => $site)) ?>
      </div>
      <div class="row-fluid">  
        <?php include_partial_from_folder('sites/radarcultura', 'global/menu', array('siteSections' => $siteSections, 'displays' => $displays, 'section'=>$section)) ?>
      </div>
        <!--topo menu/alert/logo-->
      
      <?php include_partial_from_folder('sites/radarcultura', 'global/breadcrumbs', array('site' => $site, 'section' => $section)) ?>
      
      <!--topo Artista/contagem-->
      <div id="row-fluid">
        <div class="row-fluid musicas">
            <h1>Lista de músicas por artistas
              <?php if(isset($letter)):?>
                <small><strong><?php echo $pager->count()?></strong> MÚSICAS CADASTRADAS COM A LETRA "<?php echo strtoupper($letter)?>"</small>
              <?php else:?>
                <small><strong><?php echo $pager->count()?></strong> MÚSICAS CADASTRADAS</small>
              <?php endif; ?>  
            </h1>
            
            <!--contagem-->
            <form action="" method="post">
              <input class="btn pull-right btn-busca" type="submit" value="Busca">
              <div class="input-prepend">
               <input class="span3 pull-right" id="inputIcon" type="text" name="busca"><span class="add-on pull-right"><i class="icon-search"></i></span>
              </div>
            <form>
            <!--/contagem--> 
          </div>
      </div>
      <!--/topo Artista/contagem-->
      
      <?php  /*if($letter != ""): ?>
          <h3><small>Músicas começando com </small><?php echo strtoupper($letter)?></h3>
        <?php endif; */ ?>
      
      <?php if($artist == ""): ?>
      <!--letras-->
      <div class="row-fluid pagination pagination-centered">
        <ul>
          <li<?php if($letter == "#"): ?> class="active"<?php endif; ?>><a href="<?php echo url_for('@homepage') ?>musicas/letra/1-9">#</a></li>
          <li<?php if($letter == "a"): ?> class="active"<?php endif; ?>><a href="<?php echo url_for('@homepage') ?>musicas/letra/a">A</a></li>
          <li<?php if($letter == "b"): ?> class="active"<?php endif; ?>><a href="<?php echo url_for('@homepage') ?>musicas/letra/b">B</a></li>
          <li<?php if($letter == "c"): ?> class="active"<?php endif; ?>><a href="<?php echo url_for('@homepage') ?>musicas/letra/c">C</a></li>
          <li<?php if($letter == "d"): ?> class="active"<?php endif; ?>><a href="<?php echo url_for('@homepage') ?>musicas/letra/d">D</a></li>
          <li<?php if($letter == "e"): ?> class="active"<?php endif; ?>><a href="<?php echo url_for('@homepage') ?>musicas/letra/e">E</a></li>
          <li<?php if($letter == "f"): ?> class="active"<?php endif; ?>><a href="<?php echo url_for('@homepage') ?>musicas/letra/f">F</a></li>
          <li<?php if($letter == "g"): ?> class="active"<?php endif; ?>><a href="<?php echo url_for('@homepage') ?>musicas/letra/g">G</a></li>
          <li<?php if($letter == "h"): ?> class="active"<?php endif; ?>><a href="<?php echo url_for('@homepage') ?>musicas/letra/h">H</a></li>
          <li<?php if($letter == "i"): ?> class="active"<?php endif; ?>><a href="<?php echo url_for('@homepage') ?>musicas/letra/i">I</a></li>
          <li<?php if($letter == "j"): ?> class="active"<?php endif; ?>><a href="<?php echo url_for('@homepage') ?>musicas/letra/j">J</a></li>
          <li<?php if($letter == "l"): ?> class="active"<?php endif; ?>><a href="<?php echo url_for('@homepage') ?>musicas/letra/l">L</a></li>
          <li<?php if($letter == "m"): ?> class="active"<?php endif; ?>><a href="<?php echo url_for('@homepage') ?>musicas/letra/m">M</a></li>
          <li<?php if($letter == "n"): ?> class="active"<?php endif; ?>><a href="<?php echo url_for('@homepage') ?>musicas/letra/n">N</a></li>
          <li<?php if($letter == "o"): ?> class="active"<?php endif; ?>><a href="<?php echo url_for('@homepage') ?>musicas/letra/o">O</a></li>
          <li<?php if($letter == "p"): ?> class="active"<?php endif; ?>><a href="<?php echo url_for('@homepage') ?>musicas/letra/p">P</a></li>
          <li<?php if($letter == "q"): ?> class="active"<?php endif; ?>><a href="<?php echo url_for('@homepage') ?>musicas/letra/q">Q</a></li>
          <li<?php if($letter == "r"): ?> class="active"<?php endif; ?>><a href="<?php echo url_for('@homepage') ?>musicas/letra/r">R</a></li>
          <li<?php if($letter == "s"): ?> class="active"<?php endif; ?>><a href="<?php echo url_for('@homepage') ?>musicas/letra/s">S</a></li>
          <li<?php if($letter == "t"): ?> class="active"<?php endif; ?>><a href="<?php echo url_for('@homepage') ?>musicas/letra/t">T</a></li>
          <li<?php if($letter == "u"): ?> class="active"<?php endif; ?>><a href="<?php echo url_for('@homepage') ?>musicas/letra/u">U</a></li>
          <li<?php if($letter == "v"): ?> class="active"<?php endif; ?>><a href="<?php echo url_for('@homepage') ?>musicas/letra/v">V</a></li>
          <li<?php if($letter == "x"): ?> class="active"<?php endif; ?>><a href="<?php echo url_for('@homepage') ?>musicas/letra/x">X</a></li>
          <li<?php if($letter == "z"): ?> class="active"<?php endif; ?>><a href="<?php echo url_for('@homepage') ?>musicas/letra/z">Z</a></li>
        </ul>
        
      </div>
      <!--/letras-->
      <?php endif; ?>
        
      <!--Centro pagina-->
      <div class="row-fluid musicas" >

          <table class="table table-striped musica">
            <tbody>
              <thead>
                <tr>
                  <th>Música</th>
                  <th>Intérprete</th>
                  <th>Compositor</th>
                  <th style="text-align: right;"></th>
                </tr>
              </thead>
            <?php if(count($pager) > 0): ?>
              <?php
              foreach($pager->getResults() as $d):
                $aux = explode(";", $d->AssetContent->getHeadlineShort());
                ?>
                <tr>
                  <td><?php echo $d->getTitle(); ?></td>
                  <td><?php echo str_ireplace("Por ", "", $d->getDescription()); ?></td>
                  <td><?php echo $aux[4] ?></td>
                  <td class="play"><a href="<?php echo url_for('@homepage') ?>musicas/<?php echo $d->getSlug(); ?>" class="btn btn-mini btn-inverse pull-right" ><i class="icon-list icon-white"></i> ver detalhes </a></td>
                </tr>
              <?php endforeach; ?>
            <?php endif; ?>
            </tbody>
          </table>


         
      </div>
      <!--/centro pagina-->
      <!--paginaçao-->
      <?php include_partial_from_folder('sites/radarcultura', 'global/paginator', array('page' => $page, 'pager' => $pager)) ?>
      <!--/paginaçao-->
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
    <!--/container-->
    
    <!--form paginacao-->
    <form id="page_form" action="" method="post">
      <input type="hidden" name="return_url" value="<?php echo $url?>" />
      <input type="hidden" name="page" id="page" value="" />
      <input type="hidden" name="letter" id="letter" value="<?php if(isset($letter)) echo $letter;?>" />
    </form>
    <script>
      function goToPage(i){
        $("#page").val(i);
        //$("#letter").val("");
        $("#page_form").submit();
      }
      function goToLetter(i){
        $("#letter").val(i);
        $("#page").val("");
        $("#page_form").submit();
      }
    </script>
    <!--/form paginacao-->  