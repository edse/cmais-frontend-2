<?php
if (isset($pager)) {
	if ($pager -> count() == 1) {
		header("Location: " . $pager -> getCurrent() -> retriveUrl());
		die();
	}
}
?>
<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/secoes/<?php echo $section->Parent->getSlug() ?>.css" type="text/css" />
<link type="text/css" href="http://cmais.com.br/portal/js/jquery-ui/css/jquery-ui-1.7.2.custom.css" rel="stylesheet" />
<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/secoes/todos-videos.css" type="text/css" />
<script type="text/javascript" src="http://cmais.com.br/portal/js/jquery-ui/js/jquery-ui-1.7.2.custom.min.js"></script>
<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/sites/<?php echo $section->Site->getSlug() ?>.css" type="text/css" />
<script type="text/javascript">
		$(function(){
	// Datepicker
	$('#datepicker').datepicker({
	beforeShowDay: dateLoading,
	onSelect: redirect,<?php if((isset($date)) && ($date != "")):
	?>defaultDate: new Date("<?php echo $date ?>"),<?php endif;?>
		dateFormat: 'yy-mm-dd',
		inline: true
		});
		});
</script>
<script type="text/javascript">
		function redirect(d){
	//self.location.href = './<?php echo $section->getSlug() ?>
		?d='+d;
		send(d);
		}

		//cache the days and months
		var cached_days = [];
		var cached_months = [];

		function dateLoading(date) {
		var year_month = ""+ (date.getFullYear()) +"-"+ (date.getMonth()+1) +"";
		var year_month_day = ""+ year_month+"-"+ date.getDate()+"";
		var opts = "";
		var i = 0;
		var ret = false;
		i = 0;
		ret = false;

		for (i in cached_months) {
		if (cached_months[i] == year_month){
		// if found the month in the cache
		ret = true;
		break;
		}
		}

		// check if the month was not cached
		if (ret == false) {
		//  load the month via .ajax
		opts= "month="+ (date.getMonth()+1);
		opts=opts +"&year="+ (date.getFullYear());
	<?php if ($category):
	?>
			opts=opts +"&category_id=<?php if($category): ?><?php echo $category->getId() ?><?php endif;?>";<?php else:?>
			opts=opts +"&section_id=<?php if($section): ?><?php echo $section->getId() ?><?php endif;?>";<?php endif;?>
		// opts=opts +"&day="+ (date.getDate());
		// we will use the "async: false" because if we use async call, the datapickr will wait for the data to be loaded

		$.ajax({
			url : "/ajax/getdays",
			data : opts,
			dataType : "json",
			async : false,
			success : function(data) {
				// add the month to the cache
				cached_months[cached_months.length] = year_month;
				$.each(data.days, function(i, day) {
					cached_days[cached_days.length] = year_month + "-" + day.day + "";
				});
			}
		});
		}

		i = 0;
		ret = false;

		// check if date from datapicker is in the cache otherwise return false
		// the .ajax returns only days that exists
		for(i in cached_days) {
			if(year_month_day == cached_days[i]) {
				ret = true;
			}
		}
		return [ret, ''];
		}
</script>
<?php use_helper('I18N', 'Date')
?>
<?php include_partial_from_folder('blocks', 'global/menu', array('channels' => $channels, 'live' => $live, 'editorials' => $editorials, 'site' => $site, 'mainSite' => $mainSite, 'coming' => $coming, 'important' => $important))
?>

<!-- CAPA SITE -->
<div class="bg-metropolis">
	<div id="capa-site">
		<!-- BREAKING NEWS -->
		<?php if(isset($displays["alerta"])) include_partial_from_folder('blocks','global/breakingnews', array('displays' => $displays["alerta"]))
		?>
		<!-- /BREAKING NEWS -->
		<!-- BARRA SITE -->
		<div id="barra-site">
			<div class="topo-programa">
				<h2><a href="http://www.cmais.com.br/metropolis" title="Metrópolis"> <img title="Metrópolis" alt="Metrópolis" src="http://cmais.com.br/portal/images/capaPrograma/metropolis/logometropolis.png"> </a></h2>
				<!--
				<?php if(isset($program) && $program->id > 0):
				?>
				<h2><a href="<?php echo $program->retriveUrl() ?>" title="<?php echo $program->getTitle() ?>"> <img title="<?php echo $program->getTitle() ?>" alt="<?php echo $program->getTitle() ?>" src="http://midia.cmais.com.br/programs/<?php echo $program->getImageThumb() ?>"> </a></h2>
				<?php endif;?>
				-->
				<?php if(isset($program) && $program->id > 0):
				?>
				<?php include_partial_from_folder('blocks','global/like', array('site' => $site, 'uri' => $uri, 'program' => $program))
				?>
				<?php endif;?>

				<?php if(isset($program) && $program->id > 0):
				?>
				<!-- horario -->
				<div id="horario">
					<p>
						<?php echo html_entity_decode($program->getSchedule())
						?>
					</p>
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
				<div class="capa grid3 exceptionn">
					<!-- tudo metropolis -->
					<div class="tudo-metropolis">
						<span class="bordaTopRV"></span>
						<div class="centroRV">
							<!-- ESQUERDA -->
							<div class="esq">
								<div class="noticia-interna" style="margin-left:0;">
									<h3><?php echo $section->getTitle()
									?></h3>
									<span class="faixa"></span>
								</div>
								<?php if(isset($displays["destaque-principal"])):
								?>
								<?php if($displays["destaque-principal"][0]->id > 0):
								?>
								<!-- NOTICIA INTERNA -->
								<div class="box-interna grid2">
									<h3><a href="<?php echo $displays["destaque-principal"][0]->retriveUrl() ?>"><?php echo $displays["destaque-principal"][0]->getTitle()
									?></a></h3>
									<a href="<?php echo $displays["destaque-principal"][0]->retriveUrl() ?>" class="txt-16"><?php echo $displays["destaque-principal"][0]->getDescription()
									?></a>
									<div class="assinatura grid2">
										<p class="sup"></p>
									</div>
									<div class="texto">
										<div class="box-relacionados grid1">
											<?php if($displays["destaque-principal"][0]->retriveImageUrlByImageUsage("image-3") != ""):
											?>
											<a href="<?php echo $displays["destaque-principal"][0]->retriveUrl() ?>" title="<?php echo $displays["destaque-principal"][0]->getTitle() ?>"> <img src="<?php echo $displays["destaque-principal"][0]->retriveImageUrlByImageUsage("image-3-b") ?>" alt="<?php echo $displays["destaque-principal"][0]->getTitle() ?>" name="<?php echo $displays["destaque-principal"][0]->getTitle() ?>" style="width: 300px;" class="310x186" /> </a>
											<?php endif;?>
										</div>
										<?php if(isset($displays["destaque-principal"][0]->AssetContent)):
										?>
										<p>
											<?php echo $displays["destaque-principal"][0]->AssetContent->getHeadlineLong()
											?>
										</p>
										<?php endif;?>
									</div>
								</div>
								<!-- /NOTICIA INTERNA -->
								<?php endif;?>
								<?php endif;?>

								<?php if(count($pager) > 0):
								?>
								<!-- BOX LISTAO -->
								<div class="box-listao grid2">
									<?php if(isset($date)):
									?>
									<h3><?php echo format_date(strtotime($date),"D")
									?></h3>
									<?php endif?>
									<ul>
										<?php foreach($pager->getResults() as $d):
										?>
										<li>
											<?php if($d->retriveImageUrlByImageUsage("image-1") != ""):
											?>
											<a class="img" href="<?php echo $d->retriveUrl() ?>" title="<?php echo $d->getTitle() ?>"> <img src="<?php echo $d->retriveImageUrlByImageUsage("image-1") ?>" alt="<?php echo $d->getTitle() ?>" name="<?php echo $d->getTitle() ?>" style="width: 90px" /> </a>
											<?php endif;?>
											<div class="box-texto grid2">
												<a href="<?php echo $d->retriveUrl() ?>" class="titulos"><span class="<?php echo $d->AssetType->getSlug() ?>"></span><?php echo $d->getTitle()
												?></a>
												<p>
													<?php echo $d->getDescription()
													?>
												</p>
												<p class="fonte">
													<a href="#"><?php echo $d->retriveLabel()
													?></a> | <?php echo format_datetime($d->getCreatedAt(),"P")
													?>
													| <?php echo format_datetime($d->getCreatedAt(),"t")
													?>
												</p>
											</div>
										</li>
										<?php endforeach;?>
									</ul>
								</div>
								<!-- /BOX LISTAO -->
								<?php endif;?>

								<?php if(isset($pager)):
								?>
								<?php if($pager->haveToPaginate()):
								?>
								<!-- PAGINACAO <?php echo $pager->getPage() ?>/<?php echo $pager->getLastPage() ?> -->
								<div class="paginacao grid3">
									<div class="centraliza" style="float:left; margin-left: 10px;">
										<a href="javascript: goToPage(<?php echo $pager->getPreviousPage() ?>);" class="btn-ante"></a>
										<a class="btn anterior" href="javascript: goToPage(<?php echo $pager->getPreviousPage() ?>);">Anterior</a>
										<ul>
											<?php foreach ($pager->getLinks() as $page):
											?>
											<?php if ($page == $pager->getPage()):
											?>
											<li>
												<a href="javascript: goToPage(<?php echo $page ?>);" class="ativo"><?php echo $page
												?></a>
											</li>
											<?php else:?>
											<li>
												<a href="javascript: goToPage(<?php echo $page ?>);"><?php echo $page
												?></a>
											</li>
											<?php endif;?>
											<?php endforeach;?>
										</ul>
										<a class="btn proxima" href="javascript: goToPage(<?php echo $pager->getNextPage() ?>);">Pr&oacute;xima</a>
										<a href="javascript: goToPage(<?php echo $pager->getNextPage() ?>);" class="btn-prox"></a>
									</div>
								</div>
								<form id="page_form" action="" method="post">
									<input type="hidden" name="return_url" value="<?php echo $url?>" />
									<input type="hidden" name="page" id="page" value="" />
								</form>
								<script>
									function goToPage(i) {
										$("#page").val(i);
										$("#page_form").submit();
									}
								</script>
								<!--// PAGINACAO -->
								<?php endif;?>
								<?php endif;?>
							</div>
							<!-- /ESQUERDA -->
							<!-- DIREITA -->
							<div class="dir">
								<!-- BOX PUBLICIDADE -->
								<div class="box-publicidade grid1">
									<!-- programas-assets-300x250 -->
									<script type='text/javascript'>
										GA_googleFillSlot("cmais-assets-300x250");

									</script>
									<?php include_partial_from_folder('blocks','global/facebook-1c-2', array('site' => $site, 'url' => $url)) ?>
								</div>
								<!-- / BOX PUBLICIDADE -->
								<!-- CALENDARIO -->
								<div class="box-padrao grid1">
									<div class="topo">
										<span></span>
										<div class="capa-titulo">
											<h4>arquivo</h4>
										</div>
									</div>
									<div id="datepicker"></div>
								</div>
								<!-- /CALENDARIO -->
							</div>
							<!-- /DIREITA -->
						</div>
						<span class="bordaBottomRV"></span>
					</div>
					<!-- /tudo metropolis -->
				</div>
				<!-- /CAPA -->
				<?php if(isset($displays["rodape-interno"])) include_partial_from_folder('blocks','global/support', array('displays' => $displays["rodape-interno"]))
				?>
			</div>
			<!-- /CONTEUDO PAGINA -->
		</div>
		<!-- /MIOLO -->
	</div>
	<!-- / CAPA SITE -->
</div>
<!-- /bg metropolis -->
<form id="send" action="" method="post">
	<input type="hidden" name="d" id="d" value="<?php echo $d ?>" />
</form>
<script>
function send(d) {
$("#d").val(d);
$("#send").submit();
}
</script>
