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
    ->orderBy('p.title ASC')
    ->execute();
	
  $comAcentos = array('à', 'á', 'â', 'ã', 'ä', 'å', 'ç', 'è', 'é', 'ê', 'ë', 'ì', 'í', 'î', 'ï', 'ñ', 'ò', 'ó', 'ô', 'õ', 'ö', 'ù', 'ü', 'ú', 'ÿ', 'À', 'Á', 'Â', 'Ã', 'Ä', 'Å', 'Ç', 'È', 'É', 'Ê', 'Ë', 'Ì', 'Í', 'Î', 'Ï', 'Ñ', 'Ò', 'Ó', 'Ô', 'Õ', 'Ö', 'O', 'Ù', 'Ü', 'Ú');
  $semAcentos = array('a', 'a', 'a', 'a', 'a', 'a', 'c', 'e', 'e', 'e', 'e', 'i', 'i', 'i', 'i', 'n', 'o', 'o', 'o', 'o', 'o', 'u', 'u', 'u', 'y', 'A', 'A', 'A', 'A', 'A', 'A', 'C', 'E', 'E', 'E', 'E', 'I', 'I', 'I', 'I', 'N', 'O', 'O', 'O', 'O', 'O', '0', 'U', 'U', 'U');
        
  // separa os programas de acordo com a letra inicial
  foreach($chars as $k=>$c)
  {
    foreach($programs as $p)
    {
      str_replace($comAcentos, $semAcentos, $p->getTitle());
      $firstChar = substr($p->getTitle(),0,1);
      
	    if ($k==0 && preg_match("/[^A-Z]/",$firstChar))
	    {
	      if (preg_match("/[0-9]/",$firstChar))
	        $programs_az["#"][] = $p;
      }
	    else
      {
        if ($firstChar == "$c")
        {
          $programs_az["$c"][] = $p;
        }
      }
    }
  }
  // O bloco abaixo foi um jeito que encontrei de jogar dentro do array os programas cuja letra inicial começa com acento.
  // Vou arrumar isso assim que resolver o problema do encoding
  
  foreach($programs as $p)
  {
    if (in_array($p->getSiteId(), array(159,262,1205)))
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

      <?php if(isset($displays["alerta"])) include_partial_from_folder('blocks','global/breakingnews', array('displays' => $displays["alerta"])) ?>

      <!-- BARRA SITE -->
      <div id="barra-site">

        <!-- box-topo -->
        <div class="box-topo grid3">
            <h3 class="tit-pagina grid3">Todos os Programas</h3>
            <div class="navegacao txt-10">
                <a href="http://cmais.com.br" title="Home">Home</a>
                <span>&gt;</span>
                <a href="http://cmais.com.br/programas-a-z" title="Todos os Programas">Todos os Programas</a>
            </div>
        </div>
        <!-- /box-topo -->
        
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
                              <a href="<?php echo $p->retriveUrl(); ?>"><?php echo $p->getTitle(); ?><?php if ($p->getImageIcon() || $p->getSchedule()): ?>
                                <span>
                                  <?php if ($p->getImageIcon()){ ?>
                                  <p style="height:auto;">
                                      <img class="logo" src="http://midia.cmais.com.br/programs/<?php echo $p->getImageIcon(); ?>" />
                                  </p>
                                      <img class="seta" src="http://cmais.com.br/portal/images/ico-bg-indiceOver.png" />
                                  <?php }else{ ?>
                                      <img class="seta" src="http://cmais.com.br/portal/images/ico-bg-indiceOver.png" />
                                  <?php }?>
                                  <p>
                                  <?php  
                                    echo $p->getSchedule(); 
                                  ?>
                                  
                                  </p>
                                  </span>
                                    <?php endif; ?>
                                  </a>
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
            <!-- cmais-assets-728x90 -->
            <script type='text/javascript'>
            GA_googleFillSlot("cmais-assets-728x90");
            </script>
          </div>
          <!-- /publicidade -->
        
        </div>
        <!-- /CONTEUDO PAGINA -->

      </div>
      <!-- /MIOLO -->

    </div>
    <!-- / CAPA SITE -->
    