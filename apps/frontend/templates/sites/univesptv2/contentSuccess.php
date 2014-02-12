<?php
$block = Doctrine::getTable('Block')->findOneById(671);
if($block)
  $destaque_sobre_o_blog = $block->retriveDisplays();
$block = Doctrine::getTable('Block')->findOneById(672);
if($block)
  $destaque_multiplo_1 = $block->retriveDisplays();
$block = Doctrine::getTable('Block')->findOneById(673);
if($block)
  $destaque_links_1 = $block->retriveDisplays();
$block = Doctrine::getTable('Block')->findOneById(674);
if($block)
  $destaque_links_2 = $block->retriveDisplays();
?>
<link type="text/css" href="http://cmais.com.br/portal/univesptv/css/geral.css" rel="stylesheet" />
<script type="text/javascript" src="http://cmais.com.br/portal/js/mediaplayer/swfobject.js"></script>
<link type="text/css" href="http://cmais.com.br/portal/js/jquery-ui/css/jquery-ui-1.7.2.custom.css" rel="stylesheet" />
<script type="text/javascript" src="http://cmais.com.br/portal/js/jquery-ui/js/jquery-ui-1.7.2.custom.min.js"></script>

<script type="text/javascript">
$(function(){
  // Datepicker
  $('#datepicker').datepicker({
    beforeShowDay: dateLoading,
    onSelect: redirect,
    <?php if((isset($date)) && ($date != "")): ?>defaultDate: new Date("<?php echo $date ?>"),<?php endif; ?>
    dateFormat: 'yy-mm-dd',
    inline: true
  });
});
</script>
<script type="text/javascript">
  function redirect(d){
    self.location.href='http://univesptv.cmais.com.br/blog/?d='+d;
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
      <?php if ($category): ?>
      opts=opts +"&category_id=<?php if($category): ?><?php echo $category->getId() ?><?php endif; ?>";
      <?php else: ?>
      opts=opts +"&section_id=<?php if($section): ?><?php echo $section->getId() ?><?php endif; ?>";
      <?php endif; ?>
      // opts=opts +"&day="+ (date.getDate());
      // we will use the "async: false" because if we use async call, the datapickr will wait for the data to be loaded

      $.ajax({
        url: "http://app.cmais.com.br/ajax/getdays",
        data: opts,
        dataType: "json",
        async: false,
        success: function(data){
          // add the month to the cache
          cached_months[cached_months.length]= year_month ;
          $.each(data.days, function(i, day){
            cached_days[cached_days.length]= year_month +"-"+ day.day +"";
          });
        }
      });
    }

    i = 0;
    ret = false;

    // check if date from datapicker is in the cache otherwise return false
    // the .ajax returns only days that exists
    for (i in cached_days) {
      if (year_month_day == cached_days[i]) {
        ret = true;
      }
    }
    return [ret, ''];
  }
</script>

<?php use_helper('I18N', 'Date') ?>
<?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'section' => $section)) ?>

    <!-- CAPA SITE -->
    <div id="capa-site">

      <?php //if(isset($displays["alerta"])) include_partial_from_folder('blocks','global/breakingnews', array('displays' => $displays["alerta"])) ?>

      <!-- BARRA SITE -->
      <div id="barra-site">

        <div class="topo-programa">
          
          <h2><a href="<?php echo $site->retriveUrl() ?>"><img title="<?php echo $site->getTitle() ?>" alt="<?php echo $site->getTitle() ?>" src="http://cmais.com.br/portal/univesptv/images/logo-univesptv.png" /></a></h2>
          
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
              <a href="<?php echo $asset->retriveUrl()?>" title="<?php echo $asset->getTitle()?>"><?php echo $asset->getTitle()?></a>
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
            
            <!-- ESQUERDA -->
            <div id="esquerda" class="grid2">

              <!-- NOTICIA INTERNA -->
              <div class="box-interna grid2">
                <h3><?php echo $asset->getTitle() ?></h3>
                <p><?php echo $asset->getDescription() ?></p>
                <div class="assinatura grid2">
                  <p class="sup"><?php echo $asset->AssetContent->getAuthor() ?> <span><?php echo $asset->retriveLabel() ?></span></p>
                  <p class="inf"><?php echo format_date($asset->getCreatedAt(), "g") ?> - Atualizado em <?php echo format_date($asset->getUpdatedAt(), "g") ?></p>

                  <?php include_partial_from_folder('blocks','global/share-small', array('site' => $site, 'uri' => $uri)) ?>

                </div>
                
                <div class="texto">
                  <p><?php echo html_entity_decode($asset->AssetContent->render()) ?></p>
                </div>

                <span class="leia">Permalink: <a href="<?php echo $asset->retriveUrl()?>"><?php echo $asset->retriveUrl()?></a></span><br /><br />
                <?php if(count($asset->getTags()) > 0): ?>
                  <p class="tags">Tags:
                  <?php foreach($asset->getTags() as $t): ?>
                    <a href="http://cmais.com.br/busca?site_id=<?php echo $site->getId()?>&term=<?php echo urlencode($t)?>"><span><?php echo $t?></span></a>
                  <?php endforeach; ?>
                  </p>
                <?php endif; ?>

                <?php $relacionados = $asset->retriveRelatedAssetsByRelationType('Asset Relacionado'); ?>
                <?php if(count($relacionados) > 0): ?>
                  <!-- SAIBA MAIS -->
                  <div class="box-padrao grid2" style="margin-bottom: 20px;">
                    <div id="saibamais">                                                            
                    <h4>saiba +</h4>                                                            
                    <ul class="conteudo">
                      <?php foreach($relacionados as $k=>$d): ?>
                        <li style="width: auto;">
                          <a class="titulos" href="<?php echo $d->retriveUrl()?>" style="width: auto;"><?php echo $d->getTitle()?></a>
                        </li>
                      <?php endforeach; ?>
                    </ul>
                   </div>
                  </div>
                  <!-- SAIBA MAIS -->
                <?php endif; ?>

                <?php include_partial_from_folder('blocks','global/share-2c', array('site' => $site, 'uri' => $uri)) ?>

              </div>
              <!-- /NOTICIA INTERNA -->
                              
            </div>
            <!-- /ESQUERDA -->

          <!-- DIREITA -->
          <div id="direita" class="grid1">

            <!-- BOX NOTICIA -->
            <?php if(isset($destaque_sobre_o_blog)) include_partial_from_folder('blocks','global/display1c-news', array('displays' => $destaque_sobre_o_blog)) ?>
            <!-- /BOX NOTICIA -->

            <!-- BOX PUBLICIDADE -->
            <div class="box-publicidade grid1">
              <!-- univesptv-300x250 -->
				<script type='text/javascript'>
				GA_googleFillSlot("univesptv-300x250");
				</script>
            </div>
            <!-- / BOX PUBLICIDADE -->

            <!-- BOX PADRAO MULTIPLO -->
            <div class="box-padrao grid1">
              <div class="topo claro">
                <span></span>
                <div class="capa-titulo">
                  <h4>+ recentes</h4>
                  <a href="/feed" class="rss" title="rss" style="display: block"></a>
                </div>
              </div>
              <?php if(isset($destaque_multiplo_1)) include_partial_from_folder('blocks','global/recent-news', array('displays' => $destaque_multiplo_1)) ?>
            </div>
            <!-- BOX PADRAO MULTIPLO -->
            
            <!-- BOX PADRAO LINKS -->
            <div class="box-padrao box-borda grid1">
              <div class="topo">
                <span></span>
                <div class="capa-titulo">
                  <h4>Categorias</h4>
                </div>
              </div>
              <?php if(isset($destaque_links_1)) include_partial_from_folder('blocks','global/radios', array('displays' => $destaque_links_1)) ?>
              <div class="detalhe-borda grid1">
              </div>
            </div>
            <!-- /BOX PADRAO LINKS -->

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
                                  
            <!-- BOX PADRAO LINKS -->
            <div class="box-padrao box-borda grid1">
              <div class="topo">
                <span></span>
                <div class="capa-titulo">
                  <h4>Links Úteis</h4>
                </div>
              </div>
              <?php if(isset($destaque_links_2)) include_partial_from_folder('blocks','global/radios', array('displays' => $destaque_links_2)) ?>
              <div class="detalhe-borda grid1">
              </div>
            </div>
            <!-- /BOX PADRAO LINKS -->

          </div>
          <!-- /DIREITA -->

          <!-- APOIO -->
          <ul id="apoio" class="grid3">
              <li><a href="http://www.desenvolvimento.sp.gov.br" class="governoSp"><img src="http://cmais.com.br/portal/univesptv/images/logo-goversoSp.jpg" alt="Governo do Estado de S&atilde;o Paulo" /></a></li>
              <li><a href="http://www.fapesp.br" class="fapesp"><img src="http://cmais.com.br/portal/univesptv/images/logo-fapesp.png" alt="FAPESP" /></a></li>
              <li><a href="http://www.unicamp.br" class="unicamp"><img src="http://cmais.com.br/portal/univesptv/images/logo-unicamp.png" alt="UNICAMP" /></a></li>
              <li><a href="http://www.unesp.br" class="unesp"><img src="http://cmais.com.br/portal/univesptv/images/logo-unesp.png" alt="UNESP" /></a></li>
              <li><a href="http://www.usp.br" class="usp"><img src="http://cmais.com.br/portal/univesptv/images/logo-usp.png" alt="USP" /></a></li>
              <li><a href="http://www.fundap.sp.gov.br" class="fundap"><img src="http://cmais.com.br/portal/univesptv/images/logo-fundap.jpg" alt="FUNDAP" /></a></li>
              <li><a href="http://www.centropaulasouza.sp.gov.br" class="cps"><img src="http://cmais.com.br/portal/univesptv/images/logo-cps.png" alt="Centro Paula Souza" /></a></li>
          </ul>
          <!-- APOIO -->
          
        </div>
        <!-- /CAPA -->

      </div>
      <!-- /CONTEUDO PAGINA -->
                  
      </div><!-- /MIOLO -->
            
    </div><!-- /CAPA SITE -->



