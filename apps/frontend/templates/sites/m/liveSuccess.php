<?php use_helper('I18N', 'Date') ?>
<?php
	$live = Doctrine_Query::create()
	  ->select('s.*')
	  ->from('Schedule s')
	  ->where('s.channel_id = 1')
	  ->andWhere('s.date_start <= ? AND s.date_end > ?', array(date('Y-m-d H:i:s', time()), date('Y-m-d H:i:s', time())))
    ->andWhere('s.is_live = 1')
	  ->orderBy('s.date_start desc')
		->limit(1)
		->fetchOne();
		
  $schedules = Doctrine_Query::create()
    ->select('s.*')
    ->from('Schedule s')
    ->where('s.channel_id = 1')
    ->andWhere('s.date_start >= ?', date('Y-m-d H:i:s'))
    ->andWhere('s.is_live = 1')
    ->orderBy('s.date_start asc')
    ->limit(4)
    ->execute();
		
?>

<!DOCTYPE html>
<html>
  <head> 
  <title>Cmais+</title> 
  
  <!--HEADER PADRAO JQUERY MOBILE-->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"> 
  <meta http-equiv="Content-type" content="text/html; charset=utf-8" />

  <link rel="stylesheet" href="http://code.jquery.com/mobile/1.0/jquery.mobile-1.0.min.css" />


  <script src="http://code.jquery.com/jquery-1.6.4.min.js"></script>
  <script src="http://code.jquery.com/mobile/1.0/jquery.mobile-1.0.min.js"></script>

  
  <!--GOOGLE ANALYTICS-->
  <script type="text/javascript">
      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-22770265-1']);
      _gaq.push(['_setDomainName', 'cmais.com.br']);
      _gaq.push(['_setAllowHash', 'false']);
      _gaq.push(['_trackPageview']);
      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();
  </script>
  <!--/GOOGLE ANALYTICS-->
  
</head>
<!--/HEADER PADRAO JQUERY MOBILE-->

<!--css-->
<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/sites/mob.css" type="text/css" />
<!--/css-->

<!--Body-->
<body>

<!--JQUERY MOBILE-->
<div data-role="page">
	
	<!-- TOPO -->
	<div class="headerLive">
		
		<!--LogoCmais-->
		<h2 class="logoLive">
			<img src="http://cmais.com.br/portal/images/capaPrograma/mob/aovivoLogo.png" width="100%">
		</h2>
		<!--/LogoCmais-->
		
		<!--LogoCmais-->
		<h1 class="logoCmais">
			<img src="http://cmais.com.br/portal/images/capaPrograma/mob/logoCmaisLive.png" width="100%">
		</h1>
		<!--/LogoCmais-->
		
		<h3>
			<span class="titulo"><?php echo $section->getTitle(); ?></span>
			<span class="desc"><?php echo $section->getDescription(); ?></span>
		</h3>

	</div>
	<!-- /TOPO -->
	
	<!-- CONTEUDO -->
	<div class="conteudoLive">
		
		<!--PROGRAMAS-->
		<ul>
			<?php if($live): ?>
		  <!--PROGRAMA ITEM-->
		  <li class="noar degrade">
			  <a href="/transmissao" title="<?php echo $live->Program->getTitle() ?>" class="aovivo"  data-transition="slide" rel="external"></a>
				    	
				<!--PROGRAMA FOTO-->
				<div class="foto">
					<img src="<?php echo $live->retriveLiveImage() ?>" alt="<?php echo $live->Program->getTitle() ?>" width="100%">           
				</div>
		    <!--/PROGRAMA FOTO-->
			    
				<!--PROGRAMA TITULO-->
				<h3><?php echo $live->Program->getTitle() ?></h3>
				<!--/PROGRAMA TITULO-->
				
				<!--PROGRAMA LINHA ENFEITE-->
				<div class="linha"></div>
				<!--/PROGRAMA LINHA ENFEITE-->
				
				<!--PROGRAMA DATA - HORA -->
				<span class="data"><?php echo format_datetime($live->getDateStart(),'dd/MM/yyyy - HH:mm') ?></span>
				<!--PROGRAMA DATA - HORA-->
				 
				<!--PROGRAMA NO AR-->
				<div class="noar">
					<span>no ar</span>
				</div>
				<!--/PROGRAMA NO AR-->
				
				<!--PROGRAMA SETA-->
				<span class="seta">
					<img src="http://cmais.com.br/portal/images/capaPrograma/mob/seta-no-ar.png" width="100%">
				</span>
				<!--PROGRAMA SETA-->
			</li>
			<!--/PROGRAMA ITEM-->
			<?php endif; ?>
			
			<?php if(count($schedules) > 0): ?>
				<?php foreach($schedules as $k=>$d): ?>
		  <!--PROGRAMA ITEM-->
		  <li class="noar degrade">
			  <a href="<?php echo url_for('homepage') . 'programa/' . $d->Program->Site->getSlug() ?>" title="<?php echo $d->Program->getTitle() ?>" class="aovivo"  data-transition="slide" rel="external"></a>
			  
				<?php if ($d->retriveLiveImage()): ?>				    	
				<!--PROGRAMA FOTO-->
				<div class="foto">
					<img src="<?php echo $d->retriveLiveImage() ?>" alt="<?php echo $d->Program->getTitle() ?>" width="100%">           
				</div>
		    <!--/PROGRAMA FOTO-->
		    <?php endif; ?>
			    
				<!--PROGRAMA TITULO-->
				<h3><?php echo $d->Program->getTitle() ?></h3>
				<!--/PROGRAMA TITULO-->
				
				<!--PROGRAMA LINHA ENFEITE-->
				<div class="linha"></div>
				<!--/PROGRAMA LINHA ENFEITE-->
				
				<!--PROGRAMA DATA - HORA -->
				<span class="data"><?php echo format_datetime($d->getDateStart(),'dd/MM/yyyy - HH:mm') ?></span>
				<!--PROGRAMA DATA - HORA-->
				 
				<!--PROGRAMA SETA-->
				<span class="seta">
					<img src="http://cmais.com.br/portal/images/capaPrograma/mob/seta-not-no-ar.png" width="100%">
				</span>
				<!--PROGRAMA SETA-->
			</li>
			<!--/PROGRAMA ITEM-->
				<?php endforeach; ?>
			<?php endif; ?>	
		</ul>	
		<!--/PROGRAMAS-->
		
    <!-- mobile320x50 -->
    <div id="banner-320x50" class="banner">
      <script type='text/javascript'>
      GA_googleFillSlot("mobile2-320x50");
      </script>
    </div>
    <!-- mobile320x50 -->
    
	</div>
	<!-- /CONTEUDO -->
	
  <!--FOOTER-->
	<div class="footerLive degrade" align="center">
		
		<div class="voltarLive" align="center">
			<a href="#" data-transition="slideup" data-rel="back" >
				<img src="http://cmais.com.br/portal/images/capaPrograma/mob/voltar-ao-site.png" width="88%">
			</a>
		</div>
		<div class="fio"></>
		
	</div>
	<!--/FOOTER-->
	
</div>
<!--/JQUERY MOBILE-->
</body>
<!--/Body-->

</html>
<!--/html-->

