
    <link rel="stylesheet" href="/portal/css/tvcultura/sites/<?php echo $section->Site->getSlug() ?>.css" type="text/css" />
    <link rel="stylesheet" href="/portal/css/tvcultura/secoes/contato.css" type="text/css" />

    <?php use_helper('I18N', 'Date') ?>
    <?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'asset' => $asset, 'section' => $section)) ?>

    <!-- CAPA SITE -->
    <div id="capa-site">

      <?php if(isset($displays["alerta"])) include_partial_from_folder('blocks','global/breakingnews', array('displays' => $displays["alerta"])) ?>

      <!-- MIOLO -->
      <div id="miolo">
        
        <!-- BOX LATERAL -->
        <?php include_partial_from_folder('blocks','global/shortcuts') ?>
        <!-- BOX LATERAL -->

        <!-- CONTEUDO PAGINA -->
        <div id="conteudo-pagina">
          <!-- CAPA -->
          <div class="capa grid3">
            <!-- ESQUERDA -->
            <div id="esquerda" class="grid2">
              <div class="contato grid2">
                <div class="contatoWrapper">
                  <h3 class="tit-pagina grid3">Processo seletivo de tutoria - Curso inglês Online</h3>
                  <p class="titu">Escola Virtual de Programas Educacionais do Estado de São Paulo (EVESP)</p>
                  
                  <div class="msgErro" style="min-height: 80px  ">
                    <span class="alerta"></span>
                    <div class="boxMsg">
                      <p class="aviso">Atenção – Leia as orientações para a realização da prova escrita!</p>
                      <p>Compareça ao local munido dos seguintes documentos: Documento de Identidade – RG, Habilitação e o CPF originais. (o documento de identidade deverá ter foto). Sem estes documentos, o candidato será impedido de fazer a prova.</p>
                    </div>
                    <hr />
                  </div>
                  
                  <div class="texto">
                    <?php echo html_entity_decode($asset->AssetContent->render()) ?>
                  </div>
                  
                </div>
              </div>
            </div>
            <!-- /ESQUERDA -->
            
            <!-- DIREITA -->
            <div id="direita" class="grid1">
            </div>
            <!-- /DIREITA -->
            
          </div>
          <!-- /CAPA -->
          
        </div>
        <!-- /CONTEUDO PAGINA -->
        
      </div>
      <!-- /MIOLO -->

    </div>
    <!-- / CAPA SITE -->
    
