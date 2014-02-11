<script type="text/javascript" src="/js/jquery-ui-1.8.7/js/jquery-ui-1.8.7.custom.min.js"></script>
<script src="http://cmais.com.br/portal/js/jquery-ui-i18n.min.js" type="text/javascript"></script>
<link type="text/css" href="http://cmais.com.br/portal/js/jquery-ui/css/ui-lightness/jquery-ui-1.8.11.custom.css" rel="stylesheet" />
<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/sites/<?php echo $site->getSlug() ?>.css" type="text/css" />
<script type="text/javascript">
	$(function() {
		$("#rodape-portal, body").addClass('branco');

	})
</script>
<?php use_helper('I18N', 'Date')
?>
<?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'section' => $section))
?>

<!-- CAPA SITE -->
<div class="bg-provocacoes branco">
  <div id="capa-site">
    <!-- BREAKING NEWS -->
    <?php if(isset($displays["alerta"])) include_partial_from_folder('blocks','global/breakingnews', array('displays' => $displays["alerta"]))
    ?>
    <!-- /BREAKING NEWS -->
    <!-- BARRA SITE -->
    <div id="barra-site">
      <div class="topo-programa">
        <?php if(isset($program) && $program->id > 0):
        ?>
        <h2><a href="<?php echo $program->retriveUrl() ?>" title="<?php echo $program->getTitle() ?>"> <img title="<?php echo $program->getTitle() ?>" alt="<?php echo $program->getTitle() ?>" src="http://midia.cmais.com.br/programs/<?php echo $program->getImageThumb() ?>"> </a></h2>
        <?php endif;?>

        <?php if(isset($program) && $program->id > 0):
        ?>
        <?php include_partial_from_folder('blocks','global/like', array('site' => $site, 'uri' => $uri, 'program' => $program))
        ?>
        <?php endif;?>

        <?php if(isset($program) && $program->id > 0):
        ?>
        <!-- horario -->
        <div id="horario">
          <p><?php echo html_entity_decode($program->getSchedule())
          ?></p>
        </div>
        <!-- /horario -->
        <?php endif;?>
      </div>
      <div class="box-topo grid3">
        <!-- menu --> 
          <?php if(count($siteSections) > 0): ?>
          <!-- menu interna -->
          <ul class="menu-interna">
            <?php foreach($siteSections as $s): ?>
              <?php $subsections = $s->subsections(); ?>
              <?php if(count($subsections) > 0): ?>
                <li class="m-<?php echo $s->getSlug() ?> span"><a href="#" class="abre-menu" title="<?php echo $s->getTitle() ?>"><?php echo $s->getTitle() ?><span></span></a>
                  <div class="submenu-interna toggle-menu" style="display:none;">
                    <ul style="display:block;">
                    <?php foreach($subsections as $s): ?>
                      <li><a href="<?php echo $s->retriveUrl()?>"><?php echo $s->getTitle()?></a></li>
                    <?php endforeach; ?>
                    </ul>
                  </div>
                </li>
              <?php else: ?>
                <li class="m-<?php echo $s->getSlug() ?>"><a href="<?php echo $s->retriveUrl()?>" title="<?php echo $s->getTitle() ?>"><?php echo $s->getTitle() ?></a></li>
              <?php endif; ?>
            <?php endforeach; ?>
          </ul>
          <!-- /menu interna -->
          <?php endif; ?>
          <!-- /menu -->
      </div>
      <!-- /box-topo -->
    </div>
    <!-- /BARRA SITE -->
    <!-- MIOLO -->
    <div id="miolo">
      <!-- BOX LATERAL -->
      <?php include_partial_from_folder('blocks','global/shortcuts')
      ?>
      <!-- BOX LATERAL -->
      <!-- CONTEUDO PAGINA -->
      <div id="conteudo-pagina exceptionn">
        <!-- CAPA -->
        <div class="capa grid3 exceptionn" id="imagens">
          <div class="tudo-provocacoes">
            <span class="bordaTopRV"></span>
            <div class="centroRV excp">
              <div class="video" >
                <div class="cabecalho">
                  <h2><?php echo $section->getTitle()
                  ?></h2>
                </div>
                <div class="busca">
                  <form class="chave" name="busca" id="busca" method="post">
                    <input type="hidden" name="ordem" id="ordem" value="" />
                    <input type="hidden" name="sequencia" id="sequencia" value="" />
                    <div class="palavra-chave">
                      <p>Buscar palavra-chave</p>
                      <input class="campo" type="text" name="palavra" id="palavra" value="<?php if(isset($_REQUEST['palavra'])) echo $_REQUEST['palavra'] ?>" />
                      <a href="javascript: document.busca.submit()" class="confirmar"><span>buscar</span></a>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <span class="bordaBottomRV"></span>
            <div class="listaVideos">
              <div class="boxLista-video">
                <span class="topo"></span>
                <div class="centro">
                  <div class="centrowrapper">
                    <span class="faixa"></span>
                    <a title="Diogo Mainardi" href="http://tvcultura.cmais.com.br/rodaviva/diogo-mainardi" class="imgTumb"> <img name="Diogo Mainardi" alt="Diogo Mainardi" src="http://cmais.com.br/portal/images/capaPrograma/rodaviva/img-padrao.png"> </a>
                    <span class="faixa"></span>
                    <h4><a href="http://tvcultura.cmais.com.br/rodaviva/diogo-mainardi">Diogo Mainardi</a></h4>
                    
                    <span class="exibido">Exibido em 20/08/12</span>
                    <a href="http://tvcultura.cmais.com.br/rodaviva/diogo-mainardi" class="mais"><span>+</span></a>
                  </div>
                </div>
                <span class="bottom"></span>
              </div>
              <div class="boxLista-video">
                <span class="topo"></span>
                <div class="centro">
                  <div class="centrowrapper">
                    <span class="faixa"></span>
                    <a title="Alexandre Padilha" href="http://tvcultura.cmais.com.br/rodaviva/alexandre-padilha" class="imgTumb"> <img name="Alexandre Padilha" alt="Alexandre Padilha" src="http://img.youtube.com/vi/xqvbtKJMN5s/0.jpg"> </a>
                    <span class="faixa"></span>
                    <h4><a href="http://tvcultura.cmais.com.br/rodaviva/alexandre-padilha">Alexandre Padilha</a></h4>
                    
                    <span class="exibido">Exibido em 13/08/12</span>
                    <a href="http://tvcultura.cmais.com.br/rodaviva/alexandre-padilha" class="mais"><span>+</span></a>
                  </div>
                </div>
                <span class="bottom"></span>
              </div>
              <div class="boxLista-video">
                <span class="topo"></span>
                <div class="centro">
                  <div class="centrowrapper">
                    <span class="faixa"></span>
                    <a title="Janio de Freitas" href="http://tvcultura.cmais.com.br/rodaviva/janio-de-freitas" class="imgTumb"> <img name="Janio de Freitas" alt="Janio de Freitas" src="http://img.youtube.com/vi/r-9OXBJQOj0/0.jpg"> </a>
                    <span class="faixa"></span>
                    <h4><a href="http://tvcultura.cmais.com.br/rodaviva/janio-de-freitas">Janio de Freitas</a></h4>
                    
                    <span class="exibido">Exibido em 06/08/12</span>
                    <a href="http://tvcultura.cmais.com.br/rodaviva/janio-de-freitas" class="mais"><span>+</span></a>
                  </div>
                </div>
                <span class="bottom"></span>
              </div>
              <div class="boxLista-video">
                <span class="topo"></span>
                <div class="centro">
                  <div class="centrowrapper">
                    <span class="faixa"></span>
                    <a title="Rafinha Bastos" href="http://tvcultura.cmais.com.br/rodaviva/rafinha-bastos" class="imgTumb"> <img name="Rafinha Bastos" alt="Rafinha Bastos" src="http://img.youtube.com/vi/DYn4SWSaLKw/0.jpg"> </a>
                    <span class="faixa"></span>
                    <h4><a href="http://tvcultura.cmais.com.br/rodaviva/rafinha-bastos">Rafinha Bastos</a></h4>
                    
                    <span class="exibido">Exibido em 30/07/12</span>
                    <a href="http://tvcultura.cmais.com.br/rodaviva/rafinha-bastos" class="mais"><span>+</span></a>
                  </div>
                </div>
                <span class="bottom"></span>
              </div>
              <div class="boxLista-video">
                <span class="topo"></span>
                <div class="centro">
                  <div class="centrowrapper">
                    <span class="faixa"></span>
                    <a title="João Ubaldo Ribeiro" href="http://tvcultura.cmais.com.br/rodaviva/joao-ubaldo-ribeiro-4" class="imgTumb"> <img name="João Ubaldo Ribeiro" alt="João Ubaldo Ribeiro" src="http://img.youtube.com/vi/XZ6nnCNbPxQ/0.jpg"> </a>
                    <span class="faixa"></span>
                    <h4><a href="http://tvcultura.cmais.com.br/rodaviva/joao-ubaldo-ribeiro-4">João Ubaldo Ribeiro</a></h4>
                    
                    <span class="exibido">Exibido em 23/07/12</span>
                    <a href="http://tvcultura.cmais.com.br/rodaviva/joao-ubaldo-ribeiro-4" class="mais"><span>+</span></a>
                  </div>
                </div>
                <span class="bottom"></span>
              </div>
              <div class="boxLista-video">
                <span class="topo"></span>
                <div class="centro">
                  <div class="centrowrapper">
                    <span class="faixa"></span>
                    <a title="Roberto Mangabeira Unger" href="http://tvcultura.cmais.com.br/rodaviva/roberto-mangabeira-unger-5" class="imgTumb"> <img name="Roberto Mangabeira Unger" alt="Roberto Mangabeira Unger" src="http://img.youtube.com/vi/5wTFZf-cJDg/0.jpg"> </a>
                    <span class="faixa"></span>
                    <h4><a href="http://tvcultura.cmais.com.br/rodaviva/roberto-mangabeira-unger-5">Roberto Mangabeira Unger</a></h4>
                    
                    <span class="exibido">Exibido em 16/07/12</span>
                    <a href="http://tvcultura.cmais.com.br/rodaviva/roberto-mangabeira-unger-5" class="mais"><span>+</span></a>
                  </div>
                </div>
                <span class="bottom"></span>
              </div>
              <div class="boxLista-video">
                <span class="topo"></span>
                <div class="centro">
                  <div class="centrowrapper">
                    <span class="faixa"></span>
                    <a title="Antônio Gilberto Bertechini" href="http://tvcultura.cmais.com.br/rodaviva/antonio-gilberto-bertechini-4" class="imgTumb"> <img name="Antônio Gilberto Bertechini" alt="Antônio Gilberto Bertechini" src="http://img.youtube.com/vi/Nw9spMudOes/0.jpg"> </a>
                    <span class="faixa"></span>
                    <h4><a href="http://tvcultura.cmais.com.br/rodaviva/antonio-gilberto-bertechini-4">Antônio Gilberto Bertechini</a></h4>
                    
                    <span class="exibido">Exibido em 09/07/12</span>
                    <a href="http://tvcultura.cmais.com.br/rodaviva/antonio-gilberto-bertechini-4" class="mais"><span>+</span></a>
                  </div>
                </div>
                <span class="bottom"></span>
              </div>
              <div class="boxLista-video">
                <span class="topo"></span>
                <div class="centro">
                  <div class="centrowrapper">
                    <span class="faixa"></span>
                    <a title="Chico de Oliveira" href="http://tvcultura.cmais.com.br/rodaviva/chico-de-oliveira-2" class="imgTumb"> <img name="Chico de Oliveira" alt="Chico de Oliveira" src="http://img.youtube.com/vi/IBdnKAqqH0E/0.jpg"> </a>
                    <span class="faixa"></span>
                    <h4><a href="http://tvcultura.cmais.com.br/rodaviva/chico-de-oliveira-2">Chico de Oliveira</a></h4>
                    
                    <span class="exibido">Exibido em 02/07/12</span>
                    <a href="http://tvcultura.cmais.com.br/rodaviva/chico-de-oliveira-2" class="mais"><span>+</span></a>
                  </div>
                </div>
                <span class="bottom"></span>
              </div>
              <div class="boxLista-video">
                <span class="topo"></span>
                <div class="centro">
                  <div class="centrowrapper">
                    <span class="faixa"></span>
                    <a title="Muniz Sodré" href="http://tvcultura.cmais.com.br/rodaviva/muniz-sodre-3" class="imgTumb"> <img name="Muniz Sodré" alt="Muniz Sodré" src="http://img.youtube.com/vi/MSCEm9UePTc/0.jpg"> </a>
                    <span class="faixa"></span>
                    <h4><a href="http://tvcultura.cmais.com.br/rodaviva/muniz-sodre-3">Muniz Sodré</a></h4>
                    
                    <span class="exibido">Exibido em 25/06/12</span>
                    <a href="http://tvcultura.cmais.com.br/rodaviva/muniz-sodre-3" class="mais"><span>+</span></a>
                  </div>
                </div>
                <span class="bottom"></span>
              </div>
              <!-- PAGINACAO -->
              <div class="paginacao grid3">
                <div class="centraliza">
                  <a class="btn-ante" href="javascript: goToPage(1);"></a>
                  <a href="javascript: goToPage(1);" class="btn anterior">Anterior</a>
                  <ul>
                    <li><a class="ativo" href="javascript: goToPage(1);">1</a></li>
                    <li><a href="javascript: goToPage(2);">2</a></li>
                    <li><a href="javascript: goToPage(3);">3</a></li>
                    <li><a href="javascript: goToPage(4);">4</a></li>
                    <li><a href="javascript: goToPage(5);">5</a></li>
                  </ul>
                  <a href="javascript: goToPage(2);" class="btn proxima">Próxima</a>
                  <a class="btn-prox" href="javascript: goToPage(2);"></a>
                </div>
              </div>
              <form method="post" action="" id="page_form">
                <input type="hidden" value="http://tvcultura.cmais.com.br/rodaviva/programas" name="return_url">
                <input type="hidden" value="" id="page" name="page">
                <input type="hidden" value="" id="palavra" name="palavra">
                <input type="hidden" value="" id="ordem" name="ordem">
                <input type="hidden" value="" id="sequencia" name="sequencia">
                <input type="hidden" value="" id="ate" name="ate">
              </form>
              <script>
				function goToPage(i) {
					$("#page").val(i);
					$("#page_form").submit();
				}
              </script>
              <!-- PAGINACAO -->
            </div>
             <!-- BOX PUBLICIDADE 2 -->
		  <div class="box-publicidade pub-grd grid3">
		    <!-- programas-assets-728x90 -->
		    <script type='text/javascript'>
		      GA_googleFillSlot("cmais-assets-728x90");
		    </script>
		  </div>
		  <!-- / BOX PUBLICIDADE 2 -->
          </div>
         
        </div>
         
      </div>
      <!-- /CONTEUDO PAGINA -->
    </div>
    <!-- /MIOLO -->
  </div>
  <!-- /capa site -->
</div>
<!-- bg provoca-->



