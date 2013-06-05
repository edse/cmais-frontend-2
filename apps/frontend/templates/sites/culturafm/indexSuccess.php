<script type="text/javascript" src="/portal/js/culturafm.js"></script>
<link rel="stylesheet" href="/portal/css/tvcultura/sites/culturafm.css" type="text/css" />
<script type="text/javascript" src="/portal/js/swfobject/swfobject.js"></script>
<?php use_helper('I18N', 'Date') ?>
<?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'asset' => $asset, 'section' => $section)) ?>
<!-- remover este css depois que acabar campanha da radio -->
<script type="text/javascript">
  $(function() {
    $("body").addClass('home');
   $('.m-colunistas, .submenu-interna').mouseover(function() {
     $('.toggle-menu').slideDown("fast");
   });
   $('.m-colunistas, .submenu-interna').mouseleave(function() {
     $('.toggle-menu').slideUp("fast");
   });
  });
</script>
<style type="text/css">
  .programacao { height:114px; }
</style>

<a href="http://culturafm.cmais.com.br/contato" class="position" title="Dê sua opinião">
  <div style="position: fixed;top:247px; left:0;" class="btn-feedback"></div>
</a>

<div id="bg-site"></div>
<!-- CAPA SITE -->
<div id="capa-site">
  <?php if(isset($displays["alerta"])) include_partial_from_folder('blocks','global/breakingnews', array('displays' => $displays["alerta"])) ?>

  <!-- BARRA SITE -->
  <div id="barra-site">
       
    <div class="topo-programa" id="home">
      
      <div id="horario" style="margin-top:10px;top:20px;">
        <a href="javascript: window.open('http://www.culturabrasil.com.br/controle-remoto?start=fm','controle','width=300,height=600,scrollbars=no');void(0);" class="aovivo">ao vivo</a>
      </div>
    
      <!-- descomentar esta linha depois q acabar campanha da radio -->
      <h2><a href="http://culturafm.cmais.com.br"><img title="<?php echo $site->getTitle() ?>" alt="<?php echo $site->getTitle() ?>" src="/portal/images/capaPrograma/culturafm/logo.png"></a></h2>
      <?php if(isset($program) && $program->id > 0): ?>
      <?php include_partial_from_folder('blocks','global/social-networks', array('site' => $site, 'uri' => $uri, 'program' => $program)) ?>
      <?php endif;?>

      
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
        <a href="<?php echo $asset->retriveUrl() ?>" title="<?php echo $asset->getTitle()?>"><?php echo $asset->getTitle() ?></a>
      </div>
      <?php endif;?>
      <?php endif;?>
    </div>
    <!-- /box-topo -->
    <?php endif;?>
  </div>
  <!-- /BARRA SITE -->
  <!-- MIOLO -->
  <div id="miolo">
    <?php include_partial_from_folder('blocks','global/shortcuts') ?>

    <!-- CONTEUDO PAGINA -->
    <div id="conteudo-pagina">
      <!-- CAPA -->
      <div class="capa grid3">
        <!-- ESQUERDA -->
        <div id="esquerda" class="grid2">
          
          <?php /*if(isset($displays["destaque-principal"])) include_partial_from_folder('sites/culturafm','global/display-carousel', array('displays' => $displays["destaque-principal"])) */ ?>
          
          <!-- col-esq -->
          <div class="col-esq grid1">
            
            <?php if(isset($displays["destaque-1"])) include_partial_from_folder('sites/culturafm','global/display', array('displays' => $displays["destaque-1"])) ?>
 
            <?php if(isset($displays["destaque-2"])) include_partial_from_folder('sites/culturafm','global/display', array('displays' => $displays["destaque-2"])) ?>
            
          </div>
          <!-- /col-esq -->
          <!-- col-dir -->
          <div class="col-dir grid1">
            <!-- BOX PADRAO Mais recentes -->
            <div class="box-padrao grid1">
              <div class="topo claro">
                <span></span>
                <div class="capa-titulo">
                  <h4>Para ouvir</h4>
                  <!-- <a href="#" class="setas" title="Guia do Ouvinte"></a> -->
                </div>
              </div>
            </div>
            <!-- BOX PADRAO Mais recentes -->
            <!-- BOX RADIO -->
            <div class="paraouvir" style="margin-bottom: 20px">
              <?php if(isset($displays["destaque-podcast"])) include_partial_from_folder('blocks','global/display-1c-audio-gallery', array('displays' => $displays["destaque-podcast"])) ?>
            </div>
            <!-- /BOX RADIO -->

            <?php if(isset($displays["destaque-selecao-do-ouvinte"])) include_partial_from_folder('sites/culturafm','global/display-text-only', array('displays' => $displays["destaque-selecao-do-ouvinte"])) ?>

          </div>
          <!-- /col-dir -->
        </div>
        <!-- /ESQUERDA -->
        <!-- DIREITA -->
        <div id="direita" class="grid1">
           <!-- BOX PADRAO -->
            <div class="box-padrao grid1">
              <div class="topo claro">
                <span></span>
                <div class="capa-titulo">
                  <h4>Programação do dia</h4>
                </div>
              </div>
              <?php $date = date("Y/m/d");
      $schedules = Doctrine_Query::create() -> select('s.*') -> from('Schedule s') -> where('s.channel_id = ?', 6) -> andWhere('s.date_start >= ? AND s.date_start <= ?', array($date . ' 00:00:00', $date . ' 23:59:59')) -> orderBy('s.date_start asc') -> limit(50) -> execute();
              ?>
              <ul class="programacao">
                <?php foreach($schedules as $k=>$d): ?>
                <li><a href="<?php echo $d->retriveUrl() ?>" name="<?php echo $d->retriveTitle() ?>" title="<?php echo $d->retriveTitle() ?>"><span><?php echo format_datetime($d->getDateStart(), "HH:mm") ?></span><?php echo $d->retriveTitle() ?></a></li>
                <?php endforeach; ?>
              </ul>
              <!--a href="http://culturafm.cmais.com.br/guia-do-ouvinte" class="vermais">Ver mais</a-->
            </div>
            <!-- BOX PADRAO -->
          
          
          <!-- BOX PUBLICIDADE -->
          <div class="box-publicidade grid1">
            <!-- culturafm-300x250 -->
            <script type='text/javascript'>
        GA_googleFillSlot("culturafm-300x250");

            </script>
          </div>
          <!-- / BOX PUBLICIDADE -->
          
          <?php include_partial_from_folder('blocks','global/facebook-1c', array('site' => $site, 'uri' => $uri)) ?>
          
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