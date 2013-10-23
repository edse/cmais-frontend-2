<script type="text/javascript" src="http://cmais.com.br/portal/js/culturafm.js"></script>
<link rel="stylesheet" href="/portal/css/tvcultura/sites/culturafm-home2013.css" type="text/css" />
<script type="text/javascript" src="http://cmais.com.br/portal/js/swfobject/swfobject.js"></script>
<script type="text/javascript" src="http://cmais.com.br/portal/js/bootstrap/bootstrap.js"></script>


<?php use_helper('I18N', 'Date') ?>
<?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'asset' => @$asset, 'section' => $section)) ?>


<!-- container -->
<div role="container">
  
  <!--header principal-->
  <header id="main-header" role="main" role="banner" >
    
    <!--logo-->
    <h1>
      <a href="http://culturafm.cmais.com.br" title="">
        <img title="<?php echo $site->getTitle() ?>" alt="<?php echo $site->getTitle() ?>" src="http://midia.cmais.com.br/programs/<?php echo $program->getImageThumb() ?>">
      </a>
    </h1>
    <!--/logo-->
    
    <!-- network -->
    <?php if(isset($program) && $program->id > 0): ?>
    <?php include_partial_from_folder('sites/culturafm','global/social-network', array('site' => $site, 'uri' => $uri, 'program' => $program)) ?>
    <?php endif;?>
    <!-- network -->
    
    <!--box ouça as rádios -->
    <div id="listen">
      <h1>Ouça as rádios</h1>
      <a href="javascript: window.open('http://culturabrasil.cmais.com.br/controleremoto','controle','width=400,height=600,scrollbars=no');void(0);" title="Rádio Cultura Brasil" class="link-radio cbrasil">Cultura brasil</a>
      <a href="javascript: window.open('http://culturafm.cmais.com.br/controleremoto','controle','width=400,height=600,scrollbars=no');void(0);" title="Rádio Cultura FM" class="link-radio cfm">Cultura FM</a>
    </div>  
    <!--/box ouça as rádios -->
    
    <?php if(isset($siteSections)): ?>
    <!-- main-nav -->    
    <nav role="navigation" id="main-nav">
      <?php include_partial_from_folder('sites/culturafm','global/menuNovo', array('siteSections' => $siteSections))?>
    </nav>
    <!-- /main-nav -->
    <?php endif;?>
    
  </header>
  <!--/header principal-->

  <!--content-holder-->
  <div id="content-holder">
    
    <!--coluna esquerda-->
    <div class="grid3"> 
         
      <!--destaque cultura agora-->
      <div class="destaque c-agora">
        <h1>Cultura Agora<i class="seta"></i></h1>
			<?php if(isset($displays["destaque-cultura-agora"])): ?>
				<?php foreach ($displays["destaque-cultura-agora"] as $k => $d): ?>
			        <!--item-->
			        <article>
			          
			          <h2><?php echo $d->getTitle()?></h2>
			          <a href="<?php echo $d->retriveUrl()?>" title="<?php echo $d->getTitle()?>">
			            <p><?php echo $d->getDescription()?></p>  
			          </a>
			          <div class="linha-hr"></div>     
			        </article>
			        <!--item-->
				<?php endforeach;?>
			<?php endif;?>   
      </div>  
      <!--/destaque cultura agora-->
      
      
      <!--programacao do dia -->
	  <?php $date = date("Y/m/d");
		$schedules = Doctrine_Query::create() -> select('s.*') 
		-> from('Schedule s') 
		-> where('s.channel_id = ?', 6) 
		-> andWhere('s.date_start >= ? AND s.date_start <= ?', array($date . ' 00:00:00', $date . ' 23:59:59')) 
		-> orderBy('s.date_start asc') 
		-> limit(50) 
		-> execute();
      ?>
      <div class="programacao">
        <i class="seta2"></i>
          <h2>Programação do Dia</h2>
        <!--lista-->    
        <ul>
        <?php foreach($schedules as $k=>$d): 
	         $agora = 0;
	         if((strtotime(date('Y-m-d H:i:s')) >= strtotime($d->getDateStart())) && (strtotime(date('Y-m-d H:i:s')) <= strtotime($d->getDateEnd()))) $agora = 1;
		?>        	
          <li<?php if($agora==1) echo ' style="font-weight:bold!important;"'?>>
            <span><?php echo format_datetime($d->getDateStart(), "HH:mm") ?></span>
            <a href="<?php echo $d->retriveUrl() ?>" title="<?php echo $d->retriveTitle() ?>">
              <span><?php echo $d->retriveTitle() ?></span>
            </a>
          </li>
          <?php endforeach; ?>
        </ul>  
        <!--/lista-->
        
      </div>
      <!--/programacao do dia -->
      
      <!--classicos na tv cultura-->
      <div class="destaque c-classicos">
        <i class="seta2"></i>
          <h2>Classicos na Tv Cultura</h2>
		<?php if(isset($displays["destaque-classicos"])): ?>
			<?php foreach ($displays["destaque-classicos"] as $k => $d): ?>
		        <a href="<?php echo str_replace("/home/","/",$d->retriveUrl()) ?>" title="<?php echo $d->getTitle() ?>">
		          <article>
		            <img src="<?php echo $d->retriveImageUrlByImageUsage("default") ?>" alt="<?php echo $d->getTitle() ?>">
		            <p class="titulo"><?php echo $d->getTitle() ?></p>
		            <p><?php echo $d->getDescription() ?></p>
		          </article>
		        </a>
            <?php endforeach; ?>
    	<?php endif; ?>	
      </div>  
      <!--/classicos na tv cultura-->
      
      <!--destaque cd-->
      <div class="destaque c-radio">
        
        
   <?php if(isset($displays["destaque-foto-cd-da-semana"])): ?>
	   <?php foreach ($displays["destaque-foto-cd-da-semana"] as $k => $d): ?>    
        
    	 <!--cd da semana-->
        <div class="destaque c-radio-dest">
          <i class="seta2"></i>
          <h2>CD da Semana</h2>
          
          <a href="<?php echo str_replace("/home/","/",$d->retriveUrl()) ?>" title="<?php echo $d->getTitle() ?>">
            <article>
              <img src="<?php echo $d->retriveImageUrlByImageUsage("default") ?>" alt="<?php echo $d->getTitle() ?>">
              <p class="titulo"><?php echo $d->getTitle() ?></p>
              <p><?php echo $d->getDescription() ?></p>
            </article>
          </a>
          
        </div>  
        <!--/cd da semana-->
        
    	 <?php endforeach; ?>
	   <?php endif; ?>	   
        
        <?php if(isset($displays["destaque-cd-da-semana"]))  include_partial_from_folder('blocks','global/display-1c-audio-gallery', array('displays' => $displays["destaque-cd-da-semana"])) ?>
      </div>
      <!--/destaque cd-->
      
    </div>
    <!--/coluna esquerda-->
    
    
    <!--coluna meio-->
    <div class="grid4 marginLeft10">
      
      <!--carrossel-->
      <div id="myCarousel" class="carousel slide">
        <!-- Carousel items -->
        <div class="carousel-inner">
			<?php if(isset($displays["destaque-carrossel"])): ?>
				<?php foreach ($displays["destaque-carrossel"] as $k => $d): ?>          
			      <!--item-->
			      <div class="<?php if($k == 0): ?>active<?php endif; ?> item">
			      	<h2><?php echo $d->getTitle() ?></h2>
			        <a href="<?php echo $d->retriveUrl() ?>" title="<?php echo $d->getTitle() ?>">
			          <img width="424" src="<?php echo $d->retriveImageUrlByImageUsage("image-4-b") ?>" alt="<?php echo $d->getTitle() ?>">
			          <p> <?php echo $d->getDescription() ?></p>
			        </a>
			      </div>
			      <!--/item-->
			    <?php endforeach; ?>
		  	<?php endif; ?>          
        </div>
        <!-- Carousel nav -->
        <a class="carousel-control left" href="#myCarousel" data-slide="prev"></a>
        <a class="carousel-control right" href="#myCarousel" data-slide="next"></a>
      </div>
      <!--carrossel-->
      
      <!--destaque programas-->
      <div class="container-destaque">
		<?php if(isset($displays["destaque-programas"])): ?>
			<?php foreach ($displays["destaque-programas"] as $k => $d): ?>	 	    
		        <!--destaque small-->
		        <div class="destaque-small <?php if($k == 1 || $k == 3) echo "marginLeft10"?>">
		          <h2><?php echo $d->getTitle() ?></h2>
		          <a href="<?php echo $d->retriveUrl() ?>" title="<?php echo $d->getTitle() ?>">
		            <img src="<?php echo $d->retriveImageUrlByImageUsage("image-2-b") ?>" alt="<?php echo $d->getTitle() ?>">
		            <p> <?php echo $d->getDescription() ?></p>
		          </a>
		        </div>  
		        <!--/destaque small-->
		    <?php endforeach; ?>
  		<?php endif; ?> 
      </div>  
      <!--/destaque programas-->
      
      <div class="linha-hr marginBottom20"></div>
      
      <!--destaque programas-->
      <div class="container-destaque">
		<?php if(isset($displays["destaque-compositor-mes"])): ?>
			<?php foreach ($displays["destaque-compositor-mes"] as $k => $d): ?>	
		        <!--destaque small-->
		        <div class="destaque-small compositor">
		         <h2><?php echo $d->getTitle() ?><i class="seta2"></i></h2>
		          <a href="<?php echo $d->retriveUrl() ?>" title="<?php echo $d->getTitle() ?>">
		            <img src="<?php echo $d->retriveImageUrlByImageUsage("image-2-b") ?>" alt="<?php echo $d->getTitle() ?>">
		            <p><?php echo $d->getTitle() ?> </p>
		          </a>
		        </div>  
		        <!--/destaque small-->
		    <?php endforeach; ?>
  		<?php endif; ?> 
        
        
        <!--destaque small-->
        <div id="news-radio" class="destaque-small marginLeft10">
          <h2>Newsletter<i class="seta2"></i></h2>
          <img src="/portal/images/capaPrograma/culturafm/novahome/envelope.jpg" alt="Newsletter">
          <p>Cadastre-se para receber e-mails com destaques da nossa programação</p>
          
          <!--form send news-->
          <form id="form-email" action="" method="post">
            <label for="newsletter" id="lbl_news">Digite aqui seu e-mail</label>
            <div id="msgAcerto" style="display:none;">Cadastro efetuado com sucesso</div>
            <div id="msgErro" style="display:none;">Erro! Tente novamente mais tarde.</div>
            <input type="text" name="email_newsletter" id="news" class="news">
            <input type="hidden" name="site" value="culturafm">
            <input type="submit" name="send_news" id="send_news" class="send_news" value="Enviar">
            <img src="http://cmais.com.br/portal/images/ajax-loader.gif" alt="enviando..." style="display:none; width: 16px!important;height:16px!important;position: absolute;bottom: -26px;left: 50%; " id="ajax-loader" />
          </form>
          <!--!form send news-->
        </div>  
        <!--/destaque small-->
        
      
      </div>  
      <!--/destaque programas-->
      
      <!-- facebook-->
      <div id="fb-root"></div>
      <script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/pt_BR/all.js#xfbml=1";
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));</script>
      
      
      <div class="fb-like-box" data-href="http://facebook.com/culturafmoficial" data-width="422" data-height="340" data-colorscheme="light" data-show-faces="true" data-header="true" data-stream="false" data-show-border="true"></div>
      <!-- /facebook-->
      
    </div>  
    <!--/coluna meio-->
    
    <!--coluna esquerda-->
    <div id="mais-ouvidos" class="grid2">
      <h2>Mais Ouvidos</h2>
  
      <!--lista-->
      <ul class="mais-ouvidos">

        <!--/item-->
		<?php if(isset($displays["destaque-mais-ouvidos"])): ?>
			<?php foreach ($displays["destaque-mais-ouvidos"] as $k => $d): ?>	 		
				<li>
					<a href="<?php echo $d->retriveUrl()?>" title="<?php echo $d->getTitle()?>">
						<img src="http://midia.cmais.com.br/displays/<?php echo $d->getImage() ?>" alt="<?php echo $d->getTitle() ?>" width="50px" height="50px"/>
						<p>
						  <strong><?php echo $d->getTitle() ?></strong> <br />
						  <?php echo $d->getDescription() ?>
					  </p>
					</a>
				</li>
		    <?php endforeach; ?>
		 <?php endif; ?>
        <!--item-->
      </ul>  
      <!--/lista-->
      
    </div>
    <!--/coluna esquerda-->
    
  </div>  
  <!--/content-holder-->
    
</div>
<!-- /container-->

<script type="text/javascript" src="http://cmais.com.br/portal/js/validate/jquery.validate.js"></script>
<script>
$('.c-radio .chapeu').remove();
$('.c-radio').find('.titulos').remove();

$//('.c-radio').append('<div class="seta2" style="top: 14px;left: 10px;"></div>')
var validator = $('#form-email').validate({
      
      submitHandler: function(form){
        //form.submit();
        $.ajax({
          type: "POST",
          dataType: "text",
          //url: "http://app.cmais.com.br/actions/culturafm/newsletter.php",
          url: "/actions/culturafm/newsletter.php",
          data: $("#form-email").serialize(),
          beforeSend: function(){
            $('#send_news, #news, #lbl_news').hide();
            $('#ajax-loader').show();
          },
          success: function(data){
            //window.location.href="#";
            if(data == "0"){
              $('#ajax-loader, #news').hide();
              $('#msgAcerto').show();
            }
            else {
              $('#ajax-loader, #news').hide();
              $('#msgErro').show();
            }
          }
        });         
      },
      rules:{
        newsletter:{
          required:true,
          email: true
        }
      },
      success: function(label){
        label.addClass("checked");
        $("label.error.checked").css("display","none");
        label.html("&nbsp;");
      }
    });

</script>
