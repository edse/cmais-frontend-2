<?php
if(isset($pager)){
  if($pager->count() == 1){
    header("Location: ".$pager->getCurrent()->retriveUrl());
    die();
  }  
}  
?>

<?php use_helper('I18N', 'Date') ?>

<!-- Le styles--> 
<link href="/portal/js/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="/portal/js/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
<link href="/portal/css/tvcultura/sites/culturabrasil.css" rel="stylesheet" type="text/css" />
    
<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<script src="/portal/js/bootstrap/bootstrap.js"></script>

<?php include_partial_from_folder('sites/culturabrasil', 'global/menu', array('siteSections' => $siteSections, 'displays' => $displays, 'section'=>$section)) ?>

<!-- section miolo -->
<section class="miolo">
  
  <!--container-->
  <div class="container">
  
    <?php // include_partial_from_folder('sites/culturabrasil', 'global/breadcrumbs', array('site' => $site, 'section' => $section)) ?>
    
    <!--breadcrumb-->
    <div class="row-fluid pontilhada">
      <ul class="breadcrumb">
        <?php if($section->Site->getSlug() == "culturabrasil"): ?>
        <li><a href="<?php echo url_for('homepage')?>"><?php echo $site->getTitle() ?></a> <span class="divider">»</span></li>
        <li><?php echo $section->getTitle(); ?> </li>
        <?php else: ?>
        <li><a href="<?php echo url_for('homepage')?>programas">Programas</a> <span class="divider">»</span></li>
        <li><?php echo $site->getTitle(); ?> </li>
        <?php endif; ?>         
      </ul>
    </div>
    <!--/breadcrumb-->

    <div class="row-fluid">
      <div class="destaque-cultura">
        <div class="busca-titulo">
          <h1 class="resultadoo">
            Resultado da Busca
          </h1>
          <h2 class="encontradas">
            Foram encontrados 300 resultados com a expressão “Elis Regina”
          </h2>
        </div>
      </div>

    
    <!--clounaprincipal-->
    <div class="row-fluid" style="clear: both;">
      <?php
      /*
      <!--lista assets-->
      <div class="lista-assets span8">
        <?php if(count($pager) > 0): ?>
          <?php foreach($pager->getResults() as $d): ?>
            <a href="<?php echo $uri . '/' . $d->getSlug(); ?>" title=" <?php echo $d->getTitle(); ?>">
                <?php $related = $d->retriveRelatedAssetsByAssetTypeId(2); ?>
                <?php if ($related[0]->getThumbnail2()): ?>
                <div class="row-fluid titulo">
                  
                </div>
                <?php endif;?>
            <div class="row-fluid" style="margin-left:10px">
              <?php $related = $d->retriveRelatedAssetsByAssetTypeId(2); ?>
              <?php if ($related[0]->getThumbnail2()): ?>
              <div class="span3" style="margin-left:0px">
                <h6><?php if ($d->AssetContent->getHeadlineShort()): ?><?php echo $d->AssetContent->getHeadlineShort(); ?><?php endif; ?>&nbsp;</h6>
                <img src="<?php echo $related[0]->getThumbnail2() ?>" alt=" <?php echo $d->getTitle(); ?>" class="thumb">
              </div>
              <?php endif; ?>
              <div class="span9">
                <h2><?php echo $d->getTitle(); ?></h2>
                <p>
                  <?php echo $d->getDescription(); ?>
                </p>  
              </div>
            </div>    
           </a>
            
          <?php endforeach; ?>
        <?php endif; ?>
        <!--paginador-->
        <?php include_partial_from_folder('sites/culturabrasil', 'global/paginator', array('page' => $page, 'pager' => $pager)) ?>
        <!--paginador-->
      </div>
      <!--listaAssets>
      
     
       */  
       ?>
       <!--estatico-->
       <div class="lista-assets span8">
                              <a href="http://cmais.com.br/frontend_dev.php/culturabrasil/entrevistas/brasileiros-da-ultima-hora-por-fabio-trummer" title=" Brasileiros da última hora, por Fábio Trummer">
                                                <div class="row-fluid titulo">
                  
                </div>
                            <div class="row-fluid" style="margin-left:10px">
                                          <div class="span3" style="margin-left:0px">
                <h6>Destaques 2009&nbsp;</h6>
                <img src="http://midia.cmais.com.br/assets/image/thumbnail/eddietrumer_03_1279818915.jpg" alt=" Brasileiros da última hora, por Fábio Trummer" class="thumb">
              </div>
                            <div class="span9">
                <h2>Brasileiros da última hora, por Fábio Trummer</h2>
                <p>
                  Vocalista da banda Eddie elege cinco músicas de discos que se destacaram em 2009. Tem Lucas Santana, Karina Buhr, Cidadão Instigado e Céu.                </p>  
              </div>
            </div>    
           </a>
            
                      <a href="http://cmais.com.br/frontend_dev.php/culturabrasil/entrevistas/nove-integrantes-e-coisa-pouca-por-moveis-coloniais-de-acaju" title=" Nove integrantes é coisa pouca?, por Móveis Coloniais de Acaju">
                                                <div class="row-fluid titulo">
                  
                </div>
                            <div class="row-fluid" style="margin-left:10px">
                                          <div class="span3" style="margin-left:0px">
                <h6>Família grande&nbsp;</h6>
                <img src="http://midia.cmais.com.br/assets/image/thumbnail/moveiscoloniaisdeacaju_03_1279818916.jpg" alt=" Nove integrantes é coisa pouca?, por Móveis Coloniais de Acaju" class="thumb">
              </div>
                            <div class="span9">
                <h2>Nove integrantes é coisa pouca?, por Móveis Coloniais de Acaju</h2>
                <p>
                  A banda brasiliense organizou uma seleção musical com conjuntos com, no mínimo, nove integrantes. Com Karnak, Banda Mantiqueira e Karnak.                </p>  
              </div>
            </div>    
           </a>
            
                      <a href="http://cmais.com.br/frontend_dev.php/culturabrasil/entrevistas/sons-porretas-com-a-orquestra-contemporanea-de-olinda" title=" Sons porretas com a Orquestra Contemporânea de Olinda">
                                                <div class="row-fluid titulo">
                  
                </div>
                            <div class="row-fluid" style="margin-left:10px">
                                          <div class="span3" style="margin-left:0px">
                <h6>Volume máximo&nbsp;</h6>
                <img src="http://midia.cmais.com.br/assets/image/thumbnail/orquestracontemporanea_01_1270480433.jpg" alt=" Sons porretas com a Orquestra Contemporânea de Olinda" class="thumb">
              </div>
                            <div class="span9">
                <h2>Sons porretas com a Orquestra Contemporânea de Olinda</h2>
                <p>
                  Seleção musical de primeira tem Academia da Berlinda, Isaar e Eddie.                 </p>  
              </div>
            </div>    
           </a>
            
                      <a href="http://cmais.com.br/frontend_dev.php/culturabrasil/entrevistas/macumba-de-primeira" title=" Macumba de primeira">
                                            <div class="row-fluid" style="margin-left:10px">
                                          <div class="span9">
                <h2>Macumba de primeira</h2>
                <p>
                  Rodrigo Brandão e Tiago Munhoz, da Mamelo Sound System, enfileiram batucadas sangue azul.                 </p>  
              </div>
            </div>    
           </a>
            
                      <a href="http://cmais.com.br/frontend_dev.php/culturabrasil/entrevistas/compositores-em-feminino" title=" Compositores em feminino">
                                                <div class="row-fluid titulo">
                  
                </div>
                            <div class="row-fluid" style="margin-left:10px">
                                          <div class="span3" style="margin-left:0px">
                <h6>Atrás da porta&nbsp;</h6>
                <img src="http://midia.cmais.com.br/assets/image/thumbnail/mallu_09_1270588633.jpg" alt=" Compositores em feminino" class="thumb">
              </div>
                            <div class="span9">
                <h2>Compositores em feminino</h2>
                <p>
                  A cantora e compositora paulistana Mallu Magalhães sugere uma playlist em que compositores criam letras a partir da alma feminina.                </p>  
              </div>
            </div>    
           </a>
            
                      <a href="http://cmais.com.br/frontend_dev.php/culturabrasil/entrevistas/brasil-latino" title=" Brasil latino">
                                                <div class="row-fluid titulo">
                  
                </div>
                            <div class="row-fluid" style="margin-left:10px">
                                          <div class="span3" style="margin-left:0px">
                <h6>Soy loco por ti&nbsp;</h6>
                <img src="http://midia.cmais.com.br/assets/image/thumbnail/gatonegro_03_1273608504.jpg" alt=" Brasil latino" class="thumb">
              </div>
                            <div class="span9">
                <h2>Brasil latino</h2>
                <p>
                  Tango, bolero, paixão e língua espanhola temperam a seleção musical assinada por Natalia Mallo e Ramiro Murillo, ambos do gatoNegro.                </p>  
              </div>
            </div>    
           </a>
            
                      <a href="http://cmais.com.br/frontend_dev.php/culturabrasil/entrevistas/zeca-baleiro-e-as-letras-nonsenses" title=" Zeca Baleiro e as letras nonsenses">
                                                <div class="row-fluid titulo">
                  
                </div>
                            <div class="row-fluid" style="margin-left:10px">
                                          <div class="span3" style="margin-left:0px">
                <h6>Sem pé nem cabeça&nbsp;</h6>
                <img src="http://midia.cmais.com.br/assets/image/thumbnail/zecabaleiro_02_1276118769.jpg" alt=" Zeca Baleiro e as letras nonsenses" class="thumb">
              </div>
                            <div class="span9">
                <h2>Zeca Baleiro e as letras nonsenses</h2>
                <p>
                  O cantor e compositor Zeca Baleiro seleciona alguns versos curiosos, infames ou inusitados, da música brasileira. Nem Caetano escapa!                 </p>  
              </div>
            </div>    
           </a>
            
                      <a href="http://cmais.com.br/frontend_dev.php/culturabrasil/entrevistas/rock-na-veia-por-nico-fornaglia" title=" Rock na veia, por Nico Fornaglia">
                                                <div class="row-fluid titulo">
                  
                </div>
                            <div class="row-fluid" style="margin-left:10px">
                                          <div class="span3" style="margin-left:0px">
                <h6>Festa de arromba&nbsp;</h6>
                <img src="http://midia.cmais.com.br/assets/image/thumbnail/nicofornaglia_02_1280854829.jpg" alt=" Rock na veia, por Nico Fornaglia" class="thumb">
              </div>
                            <div class="span9">
                <h2>Rock na veia, por Nico Fornaglia</h2>
                <p>
                  Diretor de TV promove viagem pela Jovem Guarda, rock psicodélico, progressivo e dos anos 1980. Tem Ronnie Cord, O Bando e Novos Baianos.                </p>  
              </div>
            </div>    
           </a>
            
                      <a href="http://cmais.com.br/frontend_dev.php/culturabrasil/entrevistas/sambas-urbanos-sambas-gostosos" title=" Sambas urbanos, sambas gostosos">
                                                <div class="row-fluid titulo">
                  
                </div>
                            <div class="row-fluid" style="margin-left:10px">
                                          <div class="span3" style="margin-left:0px">
                <h6>&nbsp;</h6>
                <img src="http://midia.cmais.com.br/assets/image/thumbnail/paulalima_01_1272907874.jpg" alt=" Sambas urbanos, sambas gostosos" class="thumb">
              </div>
                            <div class="span9">
                <h2>Sambas urbanos, sambas gostosos</h2>
                <p>
                  A cantora Paula Lima convoca Jorge Ben, Arlindo Cruz e Martinália.                </p>  
              </div>
            </div>    
           </a>
            
                          <!--paginador-->
            <div class="row">
    <div class="pagination pagination-centered">
      <ul>
        <li class="back-pag"><a href="javascript: goToPage(1);" class="paginacao" title="Primeira"><i class="icon-fast-backward"></i></a></li>
        <li class="back-pag" ?=""><a href="javascript: goToPage(1);" class="paginacao" title="Anterior"><i class="icon-backward"></i></a></li>
                <li class="back-pag active"><a href="javascript: goToPage(1);">1</a></li>
                <li class="back-pag "><a href="javascript: goToPage(2);">2</a></li>
                <li class="back-pag "><a href="javascript: goToPage(3);">3</a></li>
                <li class="back-pag"><a href="javascript: goToPage(2);" class="paginacao" title="Próximo"><i class="icon-forward"></i></a></li>
        <li class="back-pag"><a href="javascript: goToPage(3);" class="paginacao" title="Última"><i class="icon-fast-forward"></i></a></li>
      </ul>
    </div>
  </div>
  <!--form id="page_form" action="" method="post">
    <input type="hidden" name="return_url" value="
Notice: Undefined variable: url in /var/frontend/apps/frontend/templates/sites/culturabrasil/_paginator.php on line 17
" />
    <input type="hidden" name="page" id="page" value="" />
  </form-->
  <form id="page_form" action="" method="post">
      <input type="hidden" name="return_url" value="
Notice: Undefined variable: url in /var/frontend/apps/frontend/templates/sites/culturabrasil/_paginator.php on line 21
">
      <input type="hidden" name="page" id="page" value="">
      <!--input type="hidden" name="letter" id="letter" value="" /-->
    </form>
  <script>
  function goToPage(i){
    $("#page").val(i);
    $("#page_form").submit();
  }
  function goToLetter(i){
    $("#letter").val(i);
    $("#page").val("");
    $("#page_form").submit();
  }
  </script>
          <!--paginador-->
      </div>
      <!--estatico-->
      
      <!--coluna direita-->
      <div class="lista-assets redes span4">
        
        <?php
          $sobreSection = Doctrine::getTable('section')->findOneBySiteIdAndSlug($site->id, "sobre");
          $sobreSectionAssets = $sobreSection->getAssets();
          if(count($sobreSectionAssets) > 0) {
            $sobre = $sobreSectionAssets[0];
          }
        ?>

        <?php if(isset($sobre)):?>
          <!-- Aqui poderia entrar a descrição do programa, por exemplo! Mas pode colocar em qualquer lugar desde que o código acima venha antes... -->
        <?php endif; ?>
      
        <div class="row-fluid">      
          <div class="span12 direita">
            <div class="banner-radio">
              <script type='text/javascript'>
                GA_googleFillSlot("home-geral300x250");
              </script>
            </div>
          </div>
        </div>
      </div>
      <!--/coluna-direita-->
      
    </div>
    <!--/coluna principal-->
    
    
    </div>
    
    <!-- sem resultado -->
    <div class="row-fluid">
      
      <div class="destaque-cultura">
        <div class="busca-titulo">
          <h1 class="resultadoo">
            Resultado da Busca
          </h1>
          <h2 class="encontradas">
            Sua pesquisa - Lorem Ipsulum - não encontrou nenhum documento correspondente
          </h2>
        </div>
      </div>
      
      <div class="row-fluid busca-titulo" style="clear: both;">
        <h1 class="resultadoo">Sugestões</h1>
        <h2 class="encontradas">Certifique-se de que todas as palavras estejam escritas corretamente.</h2>
        <h2 class="encontradas">Tente palavras-chave diferentes.</h2>
        <h2 class="encontradas">Tente palavras-chave mais genéricas.</h2>
      </div>
      
    </div>  
    <!-- /sem resultado -->
  </div>
  <!--/container--> 
</section>
<!-- /section miolo --> 
