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
      <!--breadcrumbs-->
      <?php if($section->getParentSectionId()): ?>
      <?php $parentSection = Doctrine::getTable('section')->findOneById($section->getParentSectionId()); ?>
      <?php endif; ?>
      <?php if(isset($parentSection)): ?>
      <!--breadcrumb-->
      <div class="row-fluid">
         <ul class="breadcrumb">
           <li><a href="<?php echo url_for('homepage') . $site->getSlug() ?>"><?php echo $site->getTitle() ?></a> <span class="divider">/</span></li>
           <li><a href="#"><?php echo $parentSection->getTitle(); ?></a> <span class="divider">/</span></li>
           <li><a href="<?php echo $section->retriveUrl(); ?>"><?php echo $section->getTitle(); ?></a></li>
         </ul>
      </div>
      <!--breadcrumbs-->
      <?php endif;?>
      
      <!--topo Artista/contagem-->
      <div id="row-fluid">
        <!--Titulo-->
        <div class="page-header musicas">
          <h1>
            <?php echo $artist?> <small>lista completa de músicas</small>
          </h1>
          
          <!--contagem-->
          <div class="contagem pull-right">
          <?php if(isset($letter)):?>
            <?php if($pager->count() > 1):?>
              <h3><?php echo $pager->count()?><small> Músicas começando com "<?php echo strtoupper($letter)?>"</small></h3>
            <?php elseif($pager->count() == 1):?>
              <h3>1<small> Música começando com a letra "<?php echo strtoupper($letter)?>"</small></h3>
            <?php else:?>
              <h3>Nenhuma<small> Música começando com a letra "<?php echo strtoupper($letter)?>"</small></h3>
            <?php endif; ?>
          <?php else:?>
            <?php if($pager->count() > 1):?>
              <h3><?php echo $pager->count()?><small> Músicas</small></h3>
            <?php elseif($pager->count() == 1):?>
              <h3>1<small> Música</small></h3>
            <?php else:?>
              <h3>Nenhuma<small> Música</small></h3>
            <?php endif; ?>
          <?php endif; ?>
          </div>
          <!--/contagem--> 
        </div>
        <!--/Titulo-->
      </div>
      <!--/topo Artista/contagem-->
      
      <?php  /*if($letter != ""): ?>
          <h3><small>Músicas começando com </small><?php echo strtoupper($letter)?></h3>
        <?php endif; */ ?>
      <!--letras-->
      <div class="row-fluid pagination pagination-centered">
        <ul>
          <li<?php if($letter == "#"): ?> class="active"<?php endif; ?>><a href="javascript: goToLetter('#');">#</a></li>
          <li<?php if($letter == "a"): ?> class="active"<?php endif; ?>><a href="javascript: goToLetter('a');">A</a></li>
          <li<?php if($letter == "b"): ?> class="active"<?php endif; ?>><a href="javascript: goToLetter('b');">B</a></li>
          <li<?php if($letter == "c"): ?> class="active"<?php endif; ?>><a href="javascript: goToLetter('c');">C</a></li>
          <li<?php if($letter == "d"): ?> class="active"<?php endif; ?>><a href="javascript: goToLetter('d');">D</a></li>
          <li<?php if($letter == "e"): ?> class="active"<?php endif; ?>><a href="javascript: goToLetter('e');">E</a></li>
          <li<?php if($letter == "f"): ?> class="active"<?php endif; ?>><a href="javascript: goToLetter('f');">F</a></li>
          <li<?php if($letter == "g"): ?> class="active"<?php endif; ?>><a href="javascript: goToLetter('g');">G</a></li>
          <li<?php if($letter == "h"): ?> class="active"<?php endif; ?>><a href="javascript: goToLetter('h');">H</a></li>
          <li<?php if($letter == "i"): ?> class="active"<?php endif; ?>><a href="javascript: goToLetter('i');">I</a></li>
          <li<?php if($letter == "j"): ?> class="active"<?php endif; ?>><a href="javascript: goToLetter('j');">J</a></li>
          <li<?php if($letter == "l"): ?> class="active"<?php endif; ?>><a href="javascript: goToLetter('l');">L</a></li>
          <li<?php if($letter == "m"): ?> class="active"<?php endif; ?>><a href="javascript: goToLetter('m');">M</a></li>
          <li<?php if($letter == "n"): ?> class="active"<?php endif; ?>><a href="javascript: goToLetter('n');">N</a></li>
          <li<?php if($letter == "o"): ?> class="active"<?php endif; ?>><a href="javascript: goToLetter('o');">O</a></li>
          <li<?php if($letter == "p"): ?> class="active"<?php endif; ?>><a href="javascript: goToLetter('p');">P</a></li>
          <li<?php if($letter == "q"): ?> class="active"<?php endif; ?>><a href="javascript: goToLetter('q');">Q</a></li>
          <li<?php if($letter == "r"): ?> class="active"<?php endif; ?>><a href="javascript: goToLetter('r');">R</a></li>
          <li<?php if($letter == "s"): ?> class="active"<?php endif; ?>><a href="javascript: goToLetter('s');">S</a></li>
          <li<?php if($letter == "t"): ?> class="active"<?php endif; ?>><a href="javascript: goToLetter('t');">T</a></li>
          <li<?php if($letter == "u"): ?> class="active"<?php endif; ?>><a href="javascript: goToLetter('u');">U</a></li>
          <li<?php if($letter == "v"): ?> class="active"<?php endif; ?>><a href="javascript: goToLetter('v');">V</a></li>
          <li<?php if($letter == "x"): ?> class="active"<?php endif; ?>><a href="javascript: goToLetter('x');">X</a></li>
          <li<?php if($letter == "z"): ?> class="active"<?php endif; ?>><a href="javascript: goToLetter('z');">Z</a></li>
        </ul>
      </div>
      <!--/letras-->        
      <!--Centro pagina-->
      <div class="row-fluid musicas" >
        <!--coluna esquerda-->
        <div class="span8" style="margin: 0 0 0 0;">
          <table class="table table-condensed table-hover musica">
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
                  <td class="play"><a href="<?php echo url_for('@homepage') ?>radarcultura/musicas/<?php echo $d->getSlug(); ?>" class="btn btn-mini btn-inverse pull-right" ><i class="icon-list icon-white"></i> ver detalhes </a></td>
                </tr>
              <?php endforeach; ?>
            <?php endif; ?>
            </tbody>
          </table>
        </div>
        <!--/coluna esquerda-->
        <!--coluna direita-->
        <div class="span4 direita">
          <!--sobre o programa-->
          <?php
              $displays = array();
              $block_sobre = Doctrine_Query::create()
                ->select('b.*')
                ->from('Block b, Section s')
                ->where('b.section_id = s.id')
                ->andWhere('s.slug = ?', 'home')
                ->andWhere('b.slug = ?', 'sobre-o-programa')
                ->andWhere('s.site_id = ?', $site->id)
                ->execute();
            
              if(count($block_sobre) > 0){
                $displays["sobre-o-programa"] = $block_sobre[0]->retriveDisplays();
              }
            ?>
            <?php if(isset($displays['sobre-o-programa'])):?>
              <?php if(count($displays['sobre-o-programa']) > 0): ?>
              <div class="thumbnail">
                <div class="page-header">
                  <h4><?php echo $displays['sobre-o-programa'][0]->getTitle() ?></h4>
                </div>
                <p><?php echo $displays['sobre-o-programa'][0]->getDescription() ?></p>
                <p><a href="<?php echo $displays['sobre-o-programa'][0]->retriveUrl() ?>" title="<?php echo $displays['sobre-o-programa'][0]->getTitle() ?>" class="btn btn-mini btn-inverse"><i class="icon-chevron-right icon-white"></i> saiba mais</a></p>
              </div>
              <?php endif; ?>
            <?php endif; ?>
            <!--/sobre o programa-->
            <!--como participar-->
            <?php
              $displays = array();
              $block_comoparticipar = Doctrine_Query::create()
                ->select('b.*')
                ->from('Block b, Section s')
                ->where('b.section_id = s.id')
                ->andWhere('s.slug = ?', 'home')
                ->andWhere('b.slug = ?', 'como-participar')
                ->andWhere('s.site_id = ?', $site->id)
                ->execute();
            
              if(count($block_comoparticipar) > 0){
                $displays["como-participar"] = $block_comoparticipar[0]->retriveDisplays();
              }
            ?>
           <?php if(isset($displays['como-participar'])):?>
              <?php if(count($displays['como-participar']) > 0): ?>       
                <div class="thumbnail">
                  <div class="page-header">
                    <h4><?php echo $displays['como-participar'][0]->getTitle() ?></h4>
                  </div>
                  <p><?php echo $displays['como-participar'][0]->getDescription() ?></p>
                  <p><a href="<?php echo $displays['como-participar'][0]->retriveUrl() ?>" title="<?php echo $displays['como-participar'][0]->getTitle() ?>" class="btn btn-mini btn-inverse"><i class="icon-chevron-right icon-white"></i> saiba mais</a></p>
                </div>
              <?php endif; ?>
            <?php endif; ?>
            <!--/como participar-->
            <!--banner-->
            <div class="">
              <div class="banner-radio">
                <script type='text/javascript'>
                  GA_googleFillSlot("cmais-assets-300x250");
                </script>
              </div>
            </div>
            <!--/banner-->
         </div>
         <!--/coluna direita-->
         
      </div>
      <!--/centro pagina-->
      <!--paginaçao-->
       <?php if ($pager->haveToPaginate()): ?>
        <div class="pagination pagination-centered">
          <ul>
            <li<?php if($pager->getPage() == 1): ?> class="disabled"<?php endif; ?>><a href="javascript: goToPage(<?php echo $pager->getPreviousPage() ?>);" title="Anterior">«</a></li>
            <?php foreach ($pager->getLinks() as $page): ?>
              <li<?php if ($page == $pager->getPage()): ?> class="active"<?php endif; ?>><a href="javascript: goToPage(<?php echo $page ?>);" title="Página <?php echo $page?>"><?php echo $page?></a></li>
            <?php endforeach; ?>
            <li<?php if($pager->getPage() == $pager->getLastPage()): ?> class="disabled"<?php endif; ?>><a href="javascript: goToPage(<?php echo $pager->getNextPage() ?>);" title="Próxima">»</a></li>          
          </ul>
        </div>
        <?php endif; ?>
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