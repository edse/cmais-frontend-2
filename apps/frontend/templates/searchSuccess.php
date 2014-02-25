  <link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/secoes/busca.css" type="text/css" />
<?php use_helper('I18N', 'Date') ?>
<?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'asset' => $asset, 'section' => $section)) ?>
<style>
#form-search{ z-index: 1;margin: 0 auto;display: block;background: #FFFFFF;padding-top: 20px;}
.search-term{border: none;padding: 5px 15px;width: 400px;float: left;}
#content-search{overflow: hidden;margin: 0 auto;display: block;width: 500px;border:1px solid #CCCCCC;}
#search{border: none;display:block;width: 70px;height: 30px;float: left;background:#4a8cf6 url(http://cmais.com.br/portal/images/lupa-azul-branca.jpg) no-repeat center center;float: left;}
</style>
    <!-- CAPA SITE -->
    <div id="capa-site">

      <?php if(isset($displays["alerta"])) include_partial_from_folder('blocks','global/breakingnews', array('displays' => $displays["alerta"])) ?>

      <!-- BARRA SITE -->
      <div id="barra-site">
        <?php
        /*
        <div class="box-topo grid3">
          <?php if(isset($_GET['term'])):?>
                  <h3 class="tit-pagina">Resultado de busca para "<?php echo $_GET['term'] ?>".</h3>
          <?php else:?>
                  <h3 class="tit-pagina">Resultado da busca.</h3>
          <?php endif;?>
        </div>
        */
        ?>
      </div>
      <!-- /BARRA SITE -->

      <!-- MIOLO -->
      <div id="miolo">

        <!-- BOX LATERAL -->
        <?php include_partial_from_folder('blocks','global/shortcuts') ?>
        <!-- BOX LATERAL -->

        <!-- CONTEUDO PAGINA -->
        <div id="conteudo-pagina">
        
        <!-- RESULTADO BUSCA -->
        <div style="text-align:left">
          <!--input search-->
          <form id="form-search" action="/busca" method="get">
            <div id="content-search">
              <input type="text" id="term" name="term" placeholder="Busca" class="search-term" />
              <input type="submit" id="search" name="search" value="" style="cursor:pointer"/>
            </div>
          </form>
          <!--/input search-->
          <script type="text/javascript">
            (function() {
              var cx = '005232987476052626260:gkqgz9ihn4w';
              var gcse = document.createElement('script');
              gcse.type = 'text/javascript';
              gcse.async = true;
              gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
                  '//www.google.com/cse/cse.js?cx=' + cx;
              var s = document.getElementsByTagName('script')[0];
              s.parentNode.insertBefore(gcse, s);
            })();
          </script>
          <gcse:searchresults-only>Buscando...</gcse:searchresults-only>
         </div>
          <!-- /RESULTADO BUSCA -->


		<script>
			function getURLParameter(name) {
			    return decodeURI(
			        (RegExp(name + '=' + '(.+?)(&|$)').exec(location.search)||[,null])[1]
			    );
			}
			if(getURLParameter("term") != "" && getURLParameter("term") != "null"){
				var busca = getURLParameter("term");
				$('.search-term').val(busca);
			}
		</script>



          <!-- BOX PUBLICIDADE -->
          <div class="box-publicidade pub-grd grid3">
            <!-- cmais-homepage-300x250 -->
            <script type='text/javascript'>
            GA_googleFillSlot("cmais-assets-728x90");
            </script>
          </div>
          <!-- / BOX PUBLICIDADE -->

        </div>
        <!-- CONTEUDO PAGINA -->
      </div>
      <!-- /MIOLO -->
    </div>
    <!-- / CAPA SITE -->
