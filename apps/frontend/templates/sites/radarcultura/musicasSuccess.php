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
        
    <div class="container lista-musica">
      <!-- box-alert-topo -->
      <div class="row span8 alert alert-block alert-info radarIndex">
        <a href="#" type="button" class="btn btn-mini btn-info pull-right"><i class="icon-share-alt icon-white"></i> link direcionado</a>
        <span><strong>Lorem Ipsulum</strong> Lorem Ipsum é simplesmente uma simulação de texto da indústria.</span>
      </div>      
      <!-- /box-alert-topo-->
      <!-- logo --->
      <div class="span2 row pull-right">
        <ul class="span2 direita row pull-right">
          <li class="span2 logo row pull-right">
            <img src="/radar2012/images/Logo-Radar.jpg" alt="Radar Cultura" />
          </li>
          <li class="span2 row">
            <a href="javascript: window.open('http://172.20.17.129/radar2012/player.html?start=am','controle','width=450,height=150,left=50,top=50,scrollbars=no'); return false;" class="btn btn-inverse btn-mini"><i class="icon-music icon-white"></i> Ouvir a Rádio Cultura Brasil</a>
          </li>
        </ul>  
      </div>
      <!-- logo --->

      <!-- menu --->
      <div class="span8 row">
        <ul class="nav menu-principal nav-tabs pull-right">
          <!-- botao --->
          <li class="">
            <a href="/radar2012/index.html" title="Home">Radar Cultura</a>
          </li>
          <!-- /botao --->
          
          <!-- botao --->
          <li class="active">
            <a href="/radar2012/lista-artista.html" title="Artistas">Artistas</a>
          </li>
          <!-- /botao --->
          
          <!-- botao --->
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#" title="Conteúdo">
              Conteúdo
              <b class="caret"></b>
            </a>
            <ul class="dropdown-menu">
               
              <li class="">
                <a href="/radar2012/lista-assets.html" title="Entrevista">Entrevistas</a>
              </li>
              <li class="">
                <a href="/radar2012/lista-assets.html" title="Cinco Sons">Cinco Sons</a>
              </li>
            </ul>
          </li>
          <!-- botao --->
          
          <!-- botao --->
          <li class="">
            <a href="/radar2012/lista-playlist.html" title="Playlist">Playlist</a>
          </li>
          <!-- botao --->
          
          <!-- botao --->
          <li class="">
            <a href="/radar2012/aovivo.html" title="Ao Vivo">Ao Vivo</a>
          </li>
          <!-- botao --->
          
          <!-- botao --->
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#" title="Sobre">
              Sobre
              <b class="caret"></b>
            </a>
            <ul class="dropdown-menu">
               
              <li class="">
                <a href="/radar2012/asset-conteudo-como-participar.html" title="Como Participar">Como Participar</a>
              </li>
              <li class="">
                <a href="/radar2012/asset-conteudo-sobre.html" title="Sobre o Programa">Sobre o Programa</a>
              </li>
            </ul>
          </li>
          <!-- botao --->
       </ul>
     </div>
     <!-- menu --->

     <div class="span12 row">
       <div class="row">
          <ul class="breadcrumb">
            <li><a href="lista-artista.html">Artistas</a> <span class="divider">/</span></li>
            <li><a href="lista-musica.html"><?php echo $artist?></a> <span class="divider">
          </ul>
        </div>
        
        <section id="row">
          <div class="page-header">
            <h1><?php echo $artist?> <small>lista completa de músicas</small>
              
            <div class="contagem2 pull-right">
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
                 
          </div>
        </section>


        <?php  /*if($letter != ""): ?>
          <h3><small>Músicas começando com </small><?php echo strtoupper($letter)?></h3>
        <?php endif; */ ?>

        <div class="row pagination pagination-centered">
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
        </div>
        
        <div class="span12 row-fluid" style="margin:0 0 0 0; " >
          <table class="table table-condensed table-hover musica span8">
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
        
            

            <ul class="direita span4">
              
              <li class="span12">
                <div class="thumbnail">
                  <div class="caption">
                    <div class="page-header">
                      <h4>Sobre o programa</h4>
                    </div>
                    <p>cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    <p><a href="asset-conteudo-sobre.html" class="btn btn-small btn-inverse"><i class="icon-chevron-right icon-white"></i> saiba mais</a></p>
                  </div>
                </div>
              </li>
              <li class="span12">
                <div class="thumbnail">
                  <div class="caption">
                    <div class="page-header">
                      <h4>Como Participar</h4>
                    </div>
                    <p>cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    <p><a href="asset-conteudo-como-participar.html" class="btn btn-small btn-inverse"><i class="icon-chevron-right icon-white"></i> saiba mais</a></p>
                  </div>
                </div>
              </li>
              <li class="span12">
                <div class="banner-radio">
                  <script type='text/javascript'>
                    GA_googleFillSlot("cmais-assets-300x250");
                  </script>
                </div>
              </li>
            </ul>
          </div>

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
        
          <div class="container pull-left">
            <div class="banner-radio horizontal">
              <script type='text/javascript'>
                GA_googleFillSlot("cmais-assets-728x90");
              </script>
            </div>
          </div>
        
      </div>

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
