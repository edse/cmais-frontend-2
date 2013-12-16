<?php use_helper('I18N', 'Date') ?>
<?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'section' => $section)) ?>
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
      <div class="row-fluid" style="margin:10px 0 0 0;">
        <div id="socialAlertOk" class="alert alert-info alert-in hide">
          <span class="badge"><strong>Obrigado pela sua participação!</strong></span><span> Em breve, sua playlist irá ao ar no RadarCultura. Fique ligado!</span><button type="button" class="close" data-dismiss="alert">×</button>
        </div>
        <div id="socialAlertError" class="alert alert-error alert-in hide">
          <span class="badge"><strong>Ocorreu um erro!</strong></span><span> Por favor, tente novamente em alguns instantes.</span><button type="button" class="close" data-dismiss="alert">×</button>
        </div>
      </div>
      
      <div class="row-fluid">  
        <?php //include_partial_from_folder('sites/radarcultura', 'global/menu', array('siteSections' => $siteSections, 'displays' => $displays, 'section'=>$section, 'uri'=>$uri)) ?>
          <?php include_partial_from_folder('blocks', 'global/menu', array('siteSections' => $siteSections, 'displays' => $displays, 'section'=>$section, 'uri'=>$uri)) ?>
      </div>
        <!--topo menu/alert/logo-->
      <!--breadcrumbs-->
      <?php include_partial_from_folder('sites/radarcultura', 'global/breadcrumbs', array('site' => $site, 'section' => $section)) ?>
   
      <!--topo Playlits/contagem-->
      <div id="row-fluid">
        <!--Titulo-->
        <div class="musicas">
           <h1>
            <?php echo $section->getTitle()?> <small><?php echo $section->getDescription() ?></small>
          </h1> 
          
          <!--contagem-->
          <div class="pull-right">
            <a href="javascript:;" class="btn btn-large btn-info" id="socialBtn" data-toggle="modal" data-target="#modal"><i class="icon-share-alt icon-white"></i> Crie sua playlist</a>     
          </div>
          <!--/contagem-->
         
        </div>
        <!--/Titulo-->
        
      </div>
      <!--/topo Playlists/contagem-->
      
      
      <?php include_partial_from_folder('sites/radarcultura', 'global/modal-playlist');?>

      <div class="container">  
      <!--Centro pagina-->
      <div class="row-fluid musicas" >
        <!--coluna esquerda-->
        <div class="span8" style="margin: 0 0 0 0;">
          <table class="table table-striped playlist">
            <tbody>
              <thead>
                <tr>
                  <th>Nome</th>
                  <th>Autor</th>
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
                  <td><?php echo $d->AssetContent->getAuthor(); ?></td>
                  <td><a href="<?php echo url_for('@homepage') ?><?php echo $d->getSlug(); ?>" class="btn btn-mini btn-inverse pull-right" ><i class="icon-list icon-white"></i> ver detalhes </a></td>
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
        <!-- PAGINACAO <?php echo $pager->getPage() ?>/<?php echo $pager->getLastPage() ?> -->
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
      $(document).ready(function(){
        $('#socialBtn').click(function(){ 
          $('html, body').animate({
            scrollTop: $("#guia-topo").offset().top
          }, "slow");
        });
      });
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
