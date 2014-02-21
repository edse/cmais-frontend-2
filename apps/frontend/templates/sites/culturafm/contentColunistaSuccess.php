<link type="text/css" href="http://cmais.com.br/portal/css/tvcultura/secoes/programas.css" rel="stylesheet">
<link type="text/css" href="http://cmais.com.br/portal/css/tvcultura/sites/culturafm.css" rel="stylesheet">
<link rel="stylesheet" href="http://cmais.com.br/portal/js/jquery-ui/css/jquery-ui-1.7.2.custom.css" type="text/css">
<script src="http://cmais.com.br/portal/js/jquery-ui/js/jquery-ui-1.7.2.custom.min.js" type="text/javascript">
<script type="text/javascript">
	$(function() {
		
	 $('.m-colunistas, .submenu-interna').mouseover(function() {
	      
	   $('.toggle-menu').slideDown("fast");
	    
	 });
	 $('.m-colunistas, .submenu-interna').mouseleave(function() {

	   $('.toggle-menu').slideUp("fast");
	 });

    });
    
</script>
	<script
	type = "text/javascript" > $(function() {
		// Datepicker
		$('#datepicker').datepicker({
			//beforeShowDay: dateLoading,
			onSelect : redirect,
			defaultDate : new Date("2012/09/18"),
			dateFormat : 'yy/mm/dd',
			altFormat : 'yy-mm-dd',
			inline : true
		});
	});
	function redirect(d) {
		send('culturafm', d);
		//self.location.href = 'http://culturafm.cmais.com.br/guia-do-ouvinte?d='+d;
	}

	//cache the days and months
	var cached_days = [];
	var cached_months = [];
	function dateLoading(date) {
		var year_month = "" + (date.getFullYear()) + "-" + (date.getMonth() + 1) + "";
		var year_month_day = "" + year_month + "-" + date.getDate() + "";
		var opts = "";
		var i = 0;
		var ret = false;
		i = 0;
		ret = false;
		for(i in cached_months) {
			if(cached_months[i] == year_month) {
				// if found the month in the cache
				ret = true;
				break;
			}
		}
		// check if the month was not cached
		if(ret == false) {
			// load the month via .ajax
			opts = "month=" + (date.getMonth() + 1);
			opts = opts + "&year=" + (date.getFullYear());
			opts = opts + "&program_id=394";
			// opts=opts +"&day="+ (date.getDate());
			// we will use the "async: false" because if we use async call, the datapickr will wait for the data to be loaded
			$.ajax({
				url : "http://app.cmais.com.br/ajax/getdays",
				data : opts,
				dataType : "jsonp",
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
<?php use_helper('I18N', 'Date') ?>
<?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'asset' => $asset, 'section' => $section)) ?>

<!--a href="http://culturafm.cmais.com.br/contato" class="position" title="Dê sua opinião" style="display: none;">
  <div style="position: fixed;top:247px; left:0;" class="btn-feedback"></div>
</a-->

<div id="bg-site"></div>
<div id="capa-site">
	<?php include_partial_from_folder('sites/culturafm','global/newheader', array('site' => $site, 'section' => $section, 'uri' => $uri, 'program' => $program, 'siteSections'=>$siteSections)) ?>
  <!-- MIOLO -->
  <div id="miolo">
  	<?php include_partial_from_folder('blocks','global/shortcuts') ?>
  	
    <!-- CONTEUDO PAGINA -->
    <div id="conteudo-pagina">
      <!-- CAPA -->
      <div class="capa grid3">
        <!--ESQUERDA-->
        <div class="grid2" id="esquerda">
        	<h3 style="float:none" class="tit-pagina grid2"><?php echo $asset->getTitle(); ?></h3>
        	<p><?php echo $asset->getDescription() ?></p>
            <div class="assinatura grid2">
              <p class="sup"><?php echo $asset->AssetContent->getAuthor() ?> <span><?php echo $asset->retriveLabel() ?></span></p>
              <p class="inf"><?php echo format_date($asset->getCreatedAt(), "g") ?> - Atualizado em <?php echo format_date($asset->getUpdatedAt(), "g") ?></p>
              <?php include_partial_from_folder('blocks','global/share-small', array('site' => $site, 'uri' => $uri)) ?>
            </div>
        	<div style="text-align: left"><?php echo html_entity_decode($asset->AssetContent->render()) ?></div>
        	
          <!-- comentario facebook -->
          <div class="comentario-fb grid2" style="display:block">
            <fb:comments href="<?php echo $uri ?>" numposts="3" width="610" publish_feed="true"></fb:comments>
            <hr />
          </div>
          <!-- /comentario facebook -->
          <?php
            $sections = $asset->getSections();
            $section = $sections[0];
            $assets = $section->getAssets();
          ?>
          <?php if(count($assets) > 1): ?> 
          <a class="voltar" href="javascript:history.back()">&lsaquo;&lsaquo; voltar</a>
          <?php endif; ?>
        </div>
        <!--/ESQUERDA-->
        <!-- DIREITA -->
        <div class="grid1" id="direita">
        	<?php
	          $displays = array();
	          
	          $blocks = Doctrine_Query::create()
	            ->select('b.*')
	            ->from('Block b, Section s')
	            ->where('b.section_id = s.id')
	            ->andWhere('s.slug = ?', $section->getSlug())
	            ->andWhere('s.site_id = ?', $site->id)
							->execute();
							
			      if(count($blocks) > 0){
			        foreach($blocks as $b){
			          $displays["sobre"] = $b->retriveDisplays();
			        }
			      }
        	?>
        	<?php if(isset($displays['sobre'])): ?>
        		<?php if(count($displays['sobre']) > 0): ?>
          <!-- destaque secundario -->	
          <div id="destaque" class="uma-coluna destaque grid1">
            <ul class="abas-conteudo conteudo">
              <li style="display: block; height: auto;" id="bloco1" class="filho">
                <img src="<?php echo $displays['sobre'][0]->retriveImageUrlByImageUsage("image-8-b") ?>" alt="<?php echo $displays['sobre'][0]->getTitle() ?>">
                <p class="titulos"><?php echo $displays['sobre'][0]->getTitle() ?></p>
                <p><?php echo $displays['sobre'][0]->getDescription() ?></p></li>
                
              <!--li style="display: block; height: auto;" id="bloco1" class="filho">
              	<a class="media" href="<?php echo $displays['sobre'][0]->retriveUrl() ?>" title="<?php echo $displays['sobre'][0]->getTitle() ?>">
              		<img src="<?php echo $displays['sobre'][0]->retriveImageUrlByImageUsage("image-8-b") ?>" alt="<?php echo $displays['sobre'][0]->getTitle() ?>">
              	</a>
              	<a href="<?php echo $displays['sobre'][0]->retriveUrl() ?>" class="titulos" title="<?php echo $displays['sobre'][0]->getTitle() ?>"><?php echo $displays['sobre'][0]->getTitle() ?></a>
              	<p><?php echo $displays['sobre'][0]->getDescription() ?></p></li-->
            </ul>
          </div>
          <!-- /destaque secundario -->
          	<?php endif; ?>
          <?php endif; ?>
          
          <?php //include_partial_from_folder('sites/culturafm','global/programacaododia') ?>
          <?php include_partial_from_folder('sites/culturafm','global/recentesColunista', array('asset' => $asset)) ?>
          
          <!-- BOX PUBLICIDADE -->
          <div class="box-publicidade grid1">
            <!-- culturafm-300x250 -->
            <script type="text/javascript">
				GA_googleFillSlot("culturafm-300x250");

            </script><script src="http://pubads.g.doubleclick.net/gampad/ads?correlator=992806083932014&amp;output=json_html&amp;callback=GA_googleSetAdContentsBySlotForSync&amp;impl=s&amp;client=ca-pub-6681834746443470&amp;slotname=culturafm-300x250&amp;page_slots=culturafm-300x250&amp;cookie=ID%3D92f85a2d13e3fe88%3AT%3D1334062340%3AS%3DALNI_MZm08l6j7VTImPqL37xIU1-3L0eEQ&amp;url=http%3A%2F%2Fculturafm.cmais.com.br%2Fguia-do-ouvinte&amp;ref=http%3A%2F%2F172.20.17.129%2Ffrontend_dev.php%2Fculturafm%2Fpara-ouvir&amp;lmt=1347992705&amp;dt=1347992705946&amp;cc=100&amp;biw=1903&amp;bih=864&amp;adk=4276249504&amp;adx=1153&amp;ady=317&amp;ifi=1&amp;oid=3&amp;u_tz=-180&amp;u_his=5&amp;u_java=true&amp;u_h=1080&amp;u_w=1920&amp;u_ah=972&amp;u_aw=1920&amp;u_cd=24&amp;u_nplug=6&amp;u_nmime=87&amp;flash=11.2.202&amp;gads=v2&amp;ga_vid=1364026977.1347992706&amp;ga_sid=1347992706&amp;ga_hid=1433285561"></script>
            <!--
            <div id="google_ads_div_culturafm-300x250_ad_wrapper">
              <div style="display:inline-block;" id="google_ads_div_culturafm-300x250_ad_container">
                <ins style="width: 300px; height: 250px; display: inline-table; position: relative; border: 0px none;"><ins style="width: 300px; height: 250px; display: block; position: relative; border: 0px none;"><iframe width="300" scrolling="no" height="250" frameborder="0" id="google_ads_iframe_culturafm-300x250" name="google_ads_iframe_culturafm-300x250" marginwidth="0" marginheight="0" style="border: 0px none; position: absolute; top: 0px; left: 0px;"></iframe></ins></ins>
              </div>
            </div>
            <script>
				GA_googleCreateDomIframe("google_ads_div_culturafm-300x250_ad_container", "culturafm-300x250");

            </script>
            -->
          </div>
          <!-- / BOX PUBLICIDADE -->
        </div>
        <!-- /DIREITA -->
      </div>
      <!-- /CAPA -->
    </div>
    <!-- /CONTEUDO PAGINA -->
  </div>
  <!-- /MIOLO -->
</div>