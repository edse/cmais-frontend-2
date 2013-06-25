<?php
  //header('Content-Type: text/html; charset=utf-8');
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
    ->from('Program p, ChannelProgram cp')
    ->where('p.id = cp.program_id')
    ->andWhere('cp.channel_id = ?', 3)
    ->andWhere('p.is_active = ?', 1)
    ->orderBy('p.title')
    ->execute();
	
  // separa os programas de acordo com a letra inicial
  foreach($chars as $k=>$c)
  {
    foreach($programs as $p)
    {
      $firstChar = substr($p->getTitle(),0,1);
	  //echo $firstChar;
	  //$teste = $p->getTitle();
	  //echo $teste[0];
	  
	  if ($k==0 && preg_match("/[^A-Z]/",$firstChar))
	  {
	  	/*
        if (in_array($firstChar,array("Á","Â")))
          $programs_az["A"][] = $p;
        if (in_array($firstChar,array("É","Ê")))
	      $programs_az["E"][] = $p;
	    if (in_array($firstChar,array("Í")))
	      $programs_az["I"][] = $p;
	    if (in_array($firstChar,array("Ó","Ô")))
	      $programs_az["O"][] = $p;
	    if (in_array($firstChar,array("Ú")))
	      $programs_az["U"][] = $p;
		 * 
		 */
	    if (preg_match("/[0-9]/",$firstChar))
	      $programs_az["#"][] = $p;
	    /*
		 else
	      $programs_az["#"][] = $p;
		 * 
		 */
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

  //print_r($programs_az);
?>
<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/secoes/todosSites.css" type="text/css" />

<?php use_helper('I18N', 'Date') ?>
<?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'asset' => $asset, 'section' => $section)) ?>
    
    <!-- CAPA SITE -->
    <div id="capa-site">

      <?php //if(isset($displays["alerta"])) include_partial_from_folder('blocks','global/breakingnews', array('displays' => $displays["alerta"])) ?>


      <!-- BARRA SITE -->
      <div id="barra-site">

        <div class="topo-programa">
          
          <h2><a href="<?php echo $site->retriveUrl() ?>"><img title="<?php echo $site->getTitle() ?>" alt="<?php echo $site->getTitle() ?>" src="http://midia.cmais.com.br/programs/<?php echo $site->getImageThumb() ?>" /></a></h2>
          
          <?php if(isset($program) && $program->id > 0): ?>
          <?php include_partial_from_folder('blocks','global/like', array('site' => $site, 'uri' => $uri, 'program' => $program)) ?>
          <?php endif; ?>
          
          <?php if(isset($program) && $program->id > 0): ?>
          <!-- horario -->
          <div id="horario">
            <p>Canal digital 2.2 da multiprogramação da TV Cultura</p>
          </div>
          <!-- /horario -->
          <?php endif; ?>

        </div>

        <?php if(isset($siteSections)): ?>
        <!-- box-topo -->
        <div class="box-topo grid3">
          
          <?php include_partial_from_folder('blocks','global/sections-menu2', array('siteSections' => $siteSections)) ?>

          <?php if(isset($section)): ?>
            <?php if(!in_array(strtolower($section->getSlug()), array('home','homepage','home-page','index'))): ?>
            <div class="navegacao txt-10">
              <a href="<?php echo $site->retriveUrl() ?>" title="Home">Home</a>
              <span>&gt;</span>
              <a href="<?php echo $section->retriveUrl()?>" title="<?php echo $section->getTitle()?>"><?php echo $section->getTitle()?></a>
            </div>
            <?php endif; ?>
          <?php endif; ?>

        </div>
        <!-- /box-topo -->
        <?php endif; ?>

      </div>
      <!-- /BARRA SITE -->
      
      <!-- MIOLO -->
      <div id="miolo">

        <!-- BOX LATERAL -->
        <?php include_partial_from_folder('blocks','global/shortcuts') ?>
        <!-- BOX LATERAL -->

        <!-- CONTEUDO PAGINA -->
        <div id="conteudo-pagina">

          <!-- CAPA -->
          <div class="capa grid3">
            
            <!-- busca site
            <div class="busca-sites grid3">
                <p>Destacar apenas:</p>
                <form id="destacar-site">
                    <input type="checkbox" id="sites" name="destacar" /><label for="sites">sites de programas</label>
                    <input type="checkbox" id="blogs" name="destacar" /><label for="blogs">blogs</label>
                    <input type="checkbox" id="especiais" name="destacar" /><label for="especiais">especiais</label>
                </form>
            </div> -->

            <!-- /busca site -->

            <!-- todos sites -->
            <div class="todos-sites grid3">
            	<div class="indice">
            		<ul>
            			<li><a href="#num"><span>#</span></a></li>
            			<?php foreach($chars as $c): ?>
            			<li><a href="#<?php echo strtolower($c); ?>"><span class="<?php if (count($programs_az["$c"]) == 0): ?>semPrograma<?php endif; ?>"><?php echo $c; ?></span></a></li>
            			<?php endforeach; ?>
            		</ul>
            	</div>
            	<?php foreach($programs_az as $k=>$programs): ?>
            	<div class="listaGeral">
            		<div class="box-listaGeral">
            			<a class="voltarTopo" title="voltar para o topo" href="#" style="display:block; padding-top:70px">voltar para o topo</a>
            			<h3><a name="<?php if ($k=='#') echo 'num'; else echo strtolower($k); ?>" style="display:block; padding-top:70px"><?php echo $k; ?></a></h3>
            			<?php if (count($programs) > 0): ?>
            			<ul>
            				<?php foreach($programs as $p): ?>
                            <li>
                              <a href="<?php echo str_replace("tvcultura.cmais.com.br/", "", $p->retriveUrl()); ?>"><?php echo $p->getTitle(); ?><?php if ($p->getImageIcon() || $p->getSchedule()): ?><span><p style="min-height:80px"><?php if ($p->getImageIcon()): ?><img class="logo" src="http://midia.cmais.com.br/programs/<?php echo $p->getImageIcon(); ?>" /><?php endif; ?></p><img class="seta" src="/portal/images/ico-bg-indiceOver.png" /><p><?php echo $p->getSchedule(); ?></p></span><?php endif; ?></a>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                        <?php else: ?>
                        <ul><li>Nenhum programa</li></ul>
                        <?php endif; ?>  
            		</div>
            	</div>
            	<?php endforeach; ?>
			</div>
			<!-- /todos sites --> 

          </div>
          <!-- /CAPA -->
          
          <!-- publicidade -->
          <div class="box-publicidade pub-grd grid3">
            <!-- univesptv-728x90 -->
            <script type='text/javascript'>
            GA_googleFillSlot("univesptv-728x90");
            </script>
          </div>
          <!-- /publicidade -->
        
        </div>
        <!-- /CONTEUDO PAGINA -->

      </div>
      <!-- /MIOLO -->

    </div>
    <!-- / CAPA SITE -->
    