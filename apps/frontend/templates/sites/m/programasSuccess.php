<?php
  //pega todas as letras do alfabeto
  $char = 'A';
  $programs_az["#"] = array();
  for ($i=0; $i < 26; $i++) {
    $chars[] = $char;
    $programs_az["$char"] = array();
    $char++;
  }

  $programs = Doctrine_Query::create()
    ->select('p.*')
    ->from('Program p')
    ->where('p.is_active = ?', 1)
    ->andWhere('p.channel_id = ?', 1)
    ->orderBy('p.title ASC')
    ->execute();
	
  // separa os programas de acordo com a letra inicial
  foreach($chars as $k=>$c)
  {
    foreach($programs as $p)
    {
      $firstChar = substr($p->getTitle(),0,1);
	  
		  if ($k==0 && preg_match("/[^A-Z]/",$firstChar))
		  {
		    if (preg_match("/[0-9]/",$firstChar))
		      $programs_az["#"][] = $p;
		  }
		  else
        if ($firstChar == "$c")
          $programs_az["$c"][] = $p;
		}
	}

  // O bloco abaixo foi um jeito que encontrei de jogar dentro do array os programas cuja letra inicial começa com acento.
  // Vou arrumar isso assim que resolver o problema do encoding
  foreach($programs as $p)
  {
    if ($p->getSiteId() == 159)
      $programs_az["E"][] = $p;
    if ($p->getSiteId() == 262)
      $programs_az["E"][] = $p;
    if ($p->getSiteId() == 10)
      $programs_az["A"][] = $p;
  }
?>

<!--header-->
<?php include_partial_from_folder('blocks', 'global/headerMob') ?>
<!--/header-->

<!--PAGINA INDEX-->
<div id="cmais"  data-fullscreen="true">

	<!--CONTEUDO PROGRAMAS-->
	<div class="programas" >
		
		<!--LISTA PROGRAMAS-->
		<ul data-role="listview" data-filter="true" data-filter-placeholder="Buscar Programa" class="buscador">
			<?php if (count($programs_az) > 0): ?>
				<?php foreach($programs_az as $k=>$programs): ?>
			<!--LETRA DIVISOR TITULO-->
			<li data-role="list-divider" class="divisor degrade bordas"><?php echo $k; ?></li>
			<!--/LETRA DIVISOR TITULO-->
					<?php if (count($programs) > 0): ?>
						<?php foreach($programs as $p): ?>
							<?php $programSite = $p->getSite() ?>
			<!--PROGRAMAS TITULO-->
			<li class="programaNome"><a href="<?php echo url_for('homepage') . 'programa/' . $programSite->getSlug(); ?>" data-transition="slide" data-ajax="false"><p><?php echo $p->getTitle(); ?></p><div class="linha2"></div></a></li>
			<!--/PROGRAMAS TITULO-->
						<?php endforeach; ?>
					<?php else: ?>
			<!--PROGRAMAS TITULO-->
			<li></li>
			<!--/PROGRAMAS TITULO-->
					<?php endif; ?>
				<?php endforeach; ?>
			<?php endif; ?>
		</ul>
		<!--/LISTA PROGRAMAS-->
		
	</div>
	<!--/CONTEUDO PROGRAMAS-->
</div>
<!--/PAGINA INDEX-->

<!--footer-->
<?php include_partial_from_folder('blocks', 'global/footerMob', array('site'=>$site, 'section'=>$section)) ?>
<!--/footer-->