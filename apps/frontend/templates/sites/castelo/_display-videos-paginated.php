			<?php if(isset($pager)): ?>
				<?php if(count($pager) > 0): ?>
          <div id="menu-rodape" class="grid3">
          	
          	<ul class="abas">
          	  <li class="neutro"><a href="videos">Todos os V&iacute;deos</a><span></span></li>
          	  
          	</ul>
          	
          	<div id="galeria-videos" class="abas-conteudo conteudo-rodape grid3">
          		
          	  <!--div class="busca">
          	  	<form id="busca-galeria" name="busca" action="" method="post">
          	  	  <label class="busque">Busque por <span>palavra-chave</span></label>
          	  	  <input type="text" class="campo-busca" name="busca" id="campo-busca" value="<?php if(isset($_REQUEST['busca'])) echo $_REQUEST['busca']; ?>"/>
          	  	  <input type="submit" class="buscar" name="buscar" id="buscar" value="buscar" style="cursor:pointer" />
          	  	</form>
          	  </div-->
          	  
          	  <div id="todas" class="filho blocos" style="display:block;">
          	  	<div class="capa">
          	  	  <ul>
                  <?php if(count($pager) > 0): ?>
                    <?php foreach($pager->getResults() as $d): ?>
          	  	  	<li class="conteudo-lista">
          	  	  	  <a href="<?php echo $d->retriveUrl() ?>" class="bg" title="<?php echo $d->getTitle() ?>"><img class="" src="<?php echo $d->retriveImageUrlByImageUsage("image-3") ?>" alt="<?php echo $d->getTitle() ?>" /><span></span></a>
          	  	  	  <a href="<?php echo $d->retriveUrl() ?>" class="titulos" title="<?php echo $d->getTitle() ?>"><?php echo $d->getTitle() ?></a>
          	  	  	</li>
          	  	  	<?php endforeach; ?>
          	  	  <?php endif; ?>
          	      </ul>
          	    </div>
          	  </div>
          	  
                  	  
              <?php if(isset($pager)): ?>
                <?php if($pager->haveToPaginate()): ?>
          	  <!-- PAGINACAO -->
          	  <div class="paginacao grid3">
          	    <div class="centraliza">
          	      <a href="javascript: goToPage(<?php echo $pager->getPreviousPage() ?>);" class="btn-ante"></a>
          	      <a class="btn anterior" href="javascript: goToPage(<?php echo $pager->getPreviousPage() ?>);">Anterior</a>
          	      <ul>
                    <?php foreach ($pager->getLinks() as $page): ?>
                      <?php if ($page == $pager->getPage()): ?>
                    <li><a href="javascript: goToPage(<?php echo $page ?>);" class="ativo"><?php echo $page ?></a></li>
                      <?php else: ?>
                    <li><a href="javascript: goToPage(<?php echo $page ?>);"><?php echo $page ?></a></li>
                      <?php endif; ?>
                    <?php endforeach; ?>
          	      </ul>
          	      <a class="btn proxima" href="javascript: goToPage(<?php echo $pager->getNextPage() ?>);">Pr&oacute;xima</a>
          	      <a href="javascript: goToPage(<?php echo $pager->getNextPage() ?>);" class="btn-prox"></a>
          	    </div>
          	  </div>
              <form id="page_form" action="" method="post">
              	<input type="hidden" name="return_url" value="<?php echo $url?>" />
              	<input type="hidden" name="page" id="page" value="" />
              	<input type="hidden" name="busca" id="busca" value="<?php echo $busca ?>" />
              </form>
              <script>
              	function goToPage(i){
                	$("#page").val(i);
                	$("#page_form").submit();
              	}
              </script>
		      		<!--/ PAGINACAO -->
		        <?php endif; ?>
		      <?php endif; ?>
			</div>
		  </div>
			<?php endif; ?>
		<?php endif; ?>