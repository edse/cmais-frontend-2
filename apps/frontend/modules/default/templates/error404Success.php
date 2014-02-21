<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/secoes/paginaErros.css" type="text/css" />

<?php use_helper('I18N', 'Date') ?>
<?php include_partial_from_folder('blocks', 'global/menu', array('channels' => $channels, 'live' => $live, 'editorials' => $editorials, 'site' => $site, 'mainSite' => $mainSite, 'coming' => $coming, 'important' => $important)) ?>

    <!-- CAPA SITE -->
    <div id="capa-site">
      
      <!-- MIOLO -->
      <div id="miolo">

        <!-- BOX LATERAL -->
        <?php include_partial_from_folder('blocks','global/shortcuts') ?>
        <!-- BOX LATERAL -->
        
        <!-- CONTEUDO PAGINA -->
        <div id="conteudo-pagina">

          <!-- CAPA -->
          <div class="capa grid3">

            <div id="pagErro" style="width: 560px;">
              <div class="julio"></div>
              <div class="msgErro" style="width: 312px;">
                  <h3 style="margin-bottom: 15px;">Puxa, puxa que puxa!</h3>
                  <!-- <p class="url"><?php echo $uri ?></p> -->
                  <p>Olha só, nós não conseguimos encontrar a p&aacute;gina que voc&ecirc; procura. Por favor, tente novamente mais tarde ou use a busca do nosso site.</p>
                </div>
                <form id="buscaErro" method="post" action="/busca">
                  <input type="text" class="texto" id="erro" name="erro" />
                  <input type="submit" class="buscar" id="buscar" value="buscar" name="buscar"/>
                </form>
            </div>
                      
          </div>
          <!-- /CAPA -->
          <!-- BOX PUBLICIDADE 2 -->
		  <div class="box-publicidade pub-grd grid3">
		    <!-- programas-assets-728x90 -->
		    <script type='text/javascript'>
		      GA_googleFillSlot("cmais-assets-728x90");
		    </script>
		  </div>
		  <!-- / BOX PUBLICIDADE 2 -->          
        </div>
        <!-- /CONTEUDO PAGINA -->
        
      </div>
      <!-- /MIOLO -->
      
    </div>
    <!-- / CAPA SITE -->
