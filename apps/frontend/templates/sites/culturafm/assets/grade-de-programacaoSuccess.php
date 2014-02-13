    <link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/sites/culturafm.css" type="text/css" />
    <style>
    #direita {
        margin-top: 10px;
    }
    #esquerda .stream {
        float: left;
        margin-top: 5px;
    }
    #esquerda .stream a {
        background: none repeat scroll 0 0 #FF6633;
        clear: none;
        color: #FFFFFF;
        float: left;
        margin-right: 5px;
        padding: 0 3px;
        width: auto;
    }
    #esquerda .stream a.ativo, #esquerda .stream a:hover {
        background: none repeat scroll 0 0 #333333;
        text-decoration: none;
    }
    </style>    

    <?php use_helper('I18N', 'Date') ?>
    <?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'asset' => $asset, 'section' => $section)) ?>

	 <div id="bg-site"></div>
    
    <!-- CAPA SITE -->
    <div id="capa-site">

        <?php include_partial_from_folder('sites/culturafm','global/newheader', array('site' => $site, 'section' => $section, 'uri' => $uri, 'program' => $program, 'siteSections'=>$siteSections)) ?>


      <!-- MIOLO -->
      <div id="miolo">
        
        <?php include_partial_from_folder('blocks','global/shortcuts') ?>

        <!-- CONTEUDO PAGINA -->
        <div id="conteudo-pagina">
          <!-- CAPA -->
          <div class="capa grid3">
          	<div class="grid2">
       		  <h3 class="tit-pagina grid2"><?php echo $asset->getTitle() ?></h3> 
       		  <br /> 
              <p style="text-align:left; margin-bottom:20px;"><?php echo $asset->getDescription()?></p>
            </div>
            <?php echo html_entity_decode($asset->AssetContent->render()) ?>

          </div>
          <!-- /CAPA -->
        </div>
        <!-- /CONTEUDO PAGINA -->
        
      </div>
      <!-- /MIOLO -->

    </div>
    <!-- / CAPA SITE -->