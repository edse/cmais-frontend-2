<?php use_helper('I18N', 'Date') ?>

<!-- Le styles--> 
<link href="/portal/js/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="/portal/js/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
<link href="/portal/css/tvcultura/sites/culturabrasil.css" rel="stylesheet" type="text/css" />

<!--fonte-->
<link href='http://fonts.googleapis.com/css?family=Asap:400,700,400italic,700italic&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
<!--fonte-->
<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<script src="/portal/js/bootstrap/bootstrap.js"></script>
<!-- Navbar -->
<div class="navbar navbar-inverse">
  <div class="navbar-inner">
    <div class="container" style="width: 414px;">
      <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="brand" href="http://cmais.com.br/">Cmais</a>
      <div class="nav-collapse collapse">
        <ul class="nav">
          <li class="tvcultura">
            <a href="http://tvcultura.com.br" title="TV Cultura" target="_blank">TV Cultura</a>
          </li>
          <li class="tvratimbum">
            <a href="http://tvratimbum.com.br" title="TV Rá Tim Bum" target="_blank">TV Rá Tim Bum</a>
          </li>
          <li class="multicultura">
            <a href="http://multicultura.com.br" title="Multicultura" target="_blank">Multicultura</a>
          </li>
          <li class="univesp">
            <a href="http://univesp.tv.br" title="Univesp TV" target="_blank">Univesp TV</a>
          </li>
          <li class="active culturabrasil">
            <a href="http://culturabrasil.com.br" title="Cultura Brasil" target="_blank">Cultura Brasil</a>
          </li>
          <li class="culturafm">
            <a href="http://www.culturafm.com.br" title="Cultura FM" target="_blank">Cultura FM</a>
          </li>
          <!--
          <li class="itunes">
            <a href="http://itunes.apple.com/br/app/radio-cultura/id370066053" title="Itunes" target="_blank">Itunes</a>
          </li>
          <li class="facebook">
            <a href="http://facebook.com/tvcultura" title="Facebook" target="_blank">Facebook</a>
          </li>
          <li class="google">
            <a href="https://google.com/+tvcultura" title="Google+" target="_blank">Google+</a>
          </li>
          <li class="instagram">
            <a href="http://instagram.com/tvcultura" title="Instagram" target="_blank">Instagram</a>
          </li>
          <li class="twitter">
            <a href="http://twitter.com/tvcultura" title="Twitter" target="_blank">Twitter</a>
          </li>
          <li class="youtube">
            <a href="http://youtube.com/tvcultura" title="Youtube" target="_blank">Youtube</a>
          </li>
          <li class="feed">
            <a href="http://tvcultura.cmais.com.br/feed" title="Feed" target="_blank">Feed</a>
          </li>
          -->
        </ul>
      </div>
    </div>
  </div>
</div> 
<!--topo cmais-->

 
<!--section topo--> 
<section class="topo"> 
  <!--container topo--> 
  <div class="container row-fluid">
    <!--logo-->
    <div class="logo">
       <a href="http://cmais.com.br/culturabrasil" title="Cultura Brasil">
        <img src="/portal/images/capaPrograma/culturabrasil/logoculturabrasil.jpg" alt="Cultura Brasil" />
      </a>
    </div>
    <!--/logo--> 
    
    <!--menu cultura brasil-->
    <?php if(count($siteSections) > 0): ?>        
    <ul class="nav menu-principal nav-pills">
      <?php foreach($siteSections as $k=>$s): ?>
        <?php $subsections = $s->subsections(); ?>
        <?php if(count($subsections) > 0): ?>
          <!-- botao --->
          <li class="dropdown <?php if($section->getParentSectionId() == $s->id): ?>active<?php endif; ?>">
            <a class="dropdown-toggle" data-toggle="dropdown" href="javascript:;" title="<?php echo $s->getTitle()?>">
              <?php echo $s->getTitle()?>
              <b class="caret"></b>
            </a>
            <ul class="dropdown-menu">
              <?php foreach($subsections as $s): ?>
              <li class="">
                <a class="dropdown" href="<?php echo $s->retriveUrl()?>" title="<?php echo $s->getTitle()?>"><?php echo $s->getTitle()?></a>
              </li>
              <?php endforeach; ?>
            </ul>
          </li>
          <!-- botao --->
            <?php else: ?>  
          <!-- botao --->
          <li class="<?php if($section->id == $s->id): ?>active<?php endif; ?>">
            <a href="<?php if($s->getSlug() == "home"): ?>/<?php else: ?><?php echo $s->retriveUrl()?><?php endif; ?>" title="<?php echo $s->getTitle()?>"><?php echo $s->getTitle()?></a>
          </li>
          <!-- /botao --->
        <?php endif; ?>
      
      <?php endforeach; ?>          
   </ul>
   <?php endif; ?>
   <!--/menu cultura brasil-->
   
   <!-- ouca a radio -->
   <a id="ouca" class="ouca" href="javascript:;">
     <img src="/portal/images/capaPrograma/culturabrasil/ouca-a-radio.png" alt="Ouça a rádio Cultura Brasil"/>
   </a>
    <!-- ouca a radio -->
    
  </div>
 <!--/container topo-->
  
</section>
<!--/section topo-->

<!--section miolo--> 
<section class="miolo">
  <!-- container miolo -->
  <div class="container row-fluid">
    <?php if(isset($displays['destaque-principal'])): ?>
      <?php if(count($displays['destaque-principal']) > 0): ?>
        <!-- box-carrossel -->
        <div id="carrossel-radar" class="carousel slide">
          <div class="carousel-inner">
            <?php foreach($displays['destaque-principal'] as $k=>$d): ?>          
              <!-- item -->
              <div class="<?php if($k==1): ?>active<?php endif; ?> item">
                <a href="<?php echo $d->retriveUrl() ?>" title="<?php echo $d->getTitle() ?>">
                  <?php /*<img src="<?php echo $d->retriveImageUrlByImageUsage('image-10-b') ?>" alt="<?php echo $d->getTitle() ?>" /> */ ?>
                  <img src="<?php echo $d->retriveImageUrlByImageUsage('original') ?>" alt="<?php echo $d->getTitle() ?>" />
                  <div class="carousel-caption">
                    <h3><?php echo $d->getLabel() ?></h3>
                    <h4><?php echo $d->getTitle() ?></h4>
                    <p><?php echo html_entity_decode($d->getDescription()) ?></p>
                  </div>
                </a>
              </div>
              <!-- /item -->
            <?php endforeach; ?>
          </div>
          <!-- Carousel nav -->
          <a class="carousel-control left" href="#carrossel-radar" data-slide="prev">&lsaquo;</a>
          <a class="carousel-control right" href="#carrossel-radar" data-slide="next">&rsaquo;</a>
        </div>
        <!-- /box-carrossel -->
      <?php endif; ?>
    <?php endif; ?>
    
    <!--colunas-->
    <div class="row-fluid">
      
      <!--coluna esquerda -->
      <div class="span4">
        
        <!--destaque-->
        <div class="destaque-cultura">
          <div class="programa">
            <span>Bossamoderna</span><i class="borda-titulo"></i>
          </div>
          <a href="#" title="">
            <h2>Rios</h2>
            <img src="http://www.culturabrasil.com.br/midia/image/originais/Geraldo_Azevedo___Interna_1374535758.jpg" alt="" class="big">
            <p>Tárik de Souza embarca num viagem fluvial com músicas que têm como temática os cursos d’água. Com Geraldo Azevedo, Roberta Sá e Patrícia Bastos.</p>
          </a>
        </div>  
        <!--/destaque-->
        
        <!--destaque-->
        <div class="destaque-cultura">
          <div class="programa">
            <span>Solano Ribeiro</span><i class="borda-titulo"></i>
          </div>
          <a href="#" title="">
            <h2>Francisco</h2>
            <img src="http://www.culturabrasil.com.br/midia/image/originais/Franciscos__Interna_1374520304.jpg" alt="" class="big">
            <p>Na visita do Papa, um especial de Franciscos. Mas não espere um programa religioso. A edição traz obras dos vários Franciscos da música popular brasileira e também alguns apelos...</p>
          </a>
        </div>  
        <!--/destaque-->
        
        <!--destaque-->
        <div class="destaque-cultura">
          <div class="programa">
            <span>supertonica</span><i class="borda-titulo"></i>
          </div>
          <a href="#" title="">
            <h2>A voz-ritmo de Marcelo Pretto</h2>
            <img src="http://www.culturabrasil.com.br/midia/image/originais/Marcus_e_Arrigo___Superto_1374278295.jpg" alt="" class="big">
            <p>Arrigo Barbané entrevista o cantor autodidata, ator e arte-educador, integrante dos grupos A Barca e Barbatuques.</p>
          </a>
        </div>  
        <!--/destaque-->
        
      </div>  
      <!--/coluna esquerda -->
      
      <!--coluna do meio -->
      <div class="span4">
        
        <!--destaque playlist -->
        <div class="destaque-playlist">
          <h1>Playlists</h1>
          <!--item-->
          <div class="item">
            <a href="http://www.culturabrasil.com.br/playlists/rolling-stones-made-in-brazil">
              <img src="http://www.culturabrasil.com.br/midia/image/default/rollingstones_01_1303744795.jpg" alt="Rolling Stones made in Brazil">
              <h2>Rolling Stones made in Brazil</h2>
              <p>Versões para sucessos da banda inglesa por artistas brasileiros: Caetano Veloso, Jerry Adriani, Ronnie Von, The Bubbles, Os Tarântulas e Claudia Ohana.</p>
            </a>
          </div>
          <!--item--> 
          
          <!--item-->
          <div class="item">
            <a href="http://www.culturabrasil.com.br/playlists/rolling-stones-made-in-brazil">
              <h2>Caetano Experimental</h2>
              <p>A vontade de Caetano Veloso por fazer algo diferente em música popular o levou ao tropicalismo, à poesia concreta e à dodecafonia.</p>
            </a>
          </div>
          <!--item--> 
          
          <!--item-->
          <div class="item">
            <a href="http://www.culturabrasil.com.br/playlists/rolling-stones-made-in-brazil">
              <h2>Artistas de um sucesso</h2>
              <p>Seleção reúne artistas marcados para sempre por algum grande sucesso. Com Brylho (foto), Paulo Diniz, , Markinhos Moura e Vanessa Rangel.</p>
            </a>
          </div>
          <!--item-->  
          
        </div>
        <span class="linha-culturabrasil"></span> 
        <a href="#" title="mais playlists">
          <span class="mais">+ Playlists</span>
        </a>
        <!--destaque playlist -->
        
        <!--destaque frases -->
        <div class="destaque-cultura frase">
          <div class="programa">
            <span>FRASES</span><i class="borda-titulo"></i>
          </div>
          <h2>"A gente tem que aprender a ser pequeno!"</h2>
          <p>Paulo Bellinati, violonista, sobre a música instrumental brasileira</p>
        </div>
        <span class="linha-culturabrasil"></span>
        <a href="#" title="mais frases"> 
          <span class="mais">+ Frases</span>
        </a>   
        <!--destaque frases -->
        
        <!--destaque widgets -->
        <div class="destaque-cultura">
          <p>Copie o código abaixo para incorporar o Controle Remoto ao seu blog ou site</p> 
          <textarea rows="3">&lt;iframe src="http://www.culturabrasil.com.br/widget" frameborder="0" scrolling="no" width="145" height="55"&gt;&lt;/iframe&gt;</textarea>
        </div>  
        <!--destaque widgets -->
      </div>
      <!--/coluna do meio -->
      
      <!--coluna direita -->
      <div class="span4">
        
        <!-- destaque agenda -->
        <div class="destaque-cultura agenda">
          <div class="programa">
            <span>AGENDA</span><i class="borda-titulo"></i>
          </div>
          <h2>23 de julho de 2013</h2>
          
          <!-- item -->
          <div class="item">
            <a href="#" title="">
              <h3>05:45</h3>
              <p>Novo Telecurso Ensino Fundamental</p>
            </a>
          </div>
          <!-- /item -->
          
          <!-- item -->
          <div class="item">
            <a href="#" title="">
              <h3>06:00</h3>
              <p>Novo Telecurso Ensino Médio</p>
            </a>
          </div>  
          <!-- /item -->
          
          <!-- item -->
          <div class="item">
            <a href="#" title="">
              <h3>06:15</h3>
              <p>Telecurso TEC</p>
            </a>
          </div>  
          <!-- /item -->
          
          <!-- item -->
          <div class="item">
            <a href="#" title="">
              <h3>06:30</h3>
              <p>Telecurso Profissionalizante</p>
            </a>
          </div>
          <!-- /item -->
          
          <!-- item -->
          <div class="item">
            <a href="#" title="">
              <h3>06:50</h3>
              <p>Guia do Trânsito</p>
            </a>
          </div>
          <!-- /item -->
          
          <!-- item -->
          <div class="item">
            <a href="#" title="">
              <h3>07:00</h3>
              <p>Guia do Dia</p>
            </a>
          </div>
          <!-- /item -->
          
          <!-- item -->
          <div class="item">
            <a href="#" title="">
              <h3>08:00</h3>
              <p>Pronto Atendimento</p>
            </a>
          </div>
          <!-- /item -->
          
          <!-- item -->
          <div class="item">
            <a href="#" title="">
              <h3>08:35</h3>
              <p>Bob, o Construtor</p>
            </a>
          </div>
          <!-- /item -->
          
        </div>
        <span class="linha-culturabrasil"></span>
        <a href="#" title="agenda completa"> 
          <span class="mais">Agenda Completa</span>
        </a> 
        <!-- /destaque agenda -->
        
        <!--banner -->
        <div class="banner-culturabrasil">
          <script type='text/javascript'>
            GA_googleFillSlot("home-geral300x250");
          </script>
        </div>
        <!-- banner -->  
        
      </div>
      <!--/coluna direita -->
    </div>
    <!--/colunas-->
  </div>
  <!-- /container miolo -->
</section>
<!--/section miolo-->

<!--section rodape--> 
<section class="rodape">

  <div class="container row-fluid">
    
    <!-- faceebook -->
    <div class="span4">
      <span>Redes Sociais</span><i class="borda-titulo clara"></i>
      <div class="box-facebook">
        <fb:like-box href="https://www.facebook.com/culturabrasil" width="310" height="260" show_faces="true" border_color="#DDDDDD" background_color="#FFFFFF" stream="false" header="true"></fb:like-box>
      </div>
    </div>  
    <!-- / facebook -->
    
    <!-- googleplus -->
    <div class="span4 ">
      <div class="google">
        <!-- Place this tag where you want the widget to render. -->
        <div class="g-page" data-width="310" data-href="https://plus.google.com/105992922006548285318" data-showtagline="false" data-showcoverphoto="false" data-rel="publisher"></div>
        
        <!-- Place this tag after the last widget tag. -->
        <script type="text/javascript">
          window.___gcfg = {lang: 'pt-BR'}; 
        
          (function() {
            var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
            po.src = 'https://apis.google.com/js/plusone.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
          })();
        </script>
      </div>
    </div> 
    <!-- /googleplus -->
    
    <!-- twiter -->
    <div class="span4 twitter">
      <a class="twitter-timeline" href="https://twitter.com/culturabrasil2" data-widget-id="360106760419287041">Tweets de @culturabrasil2</a>
      <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
    </div> 
    <!-- /twiter -->
    
    
    
  </div>
  
</section>
<!--section rodape-->  
<script>
$(document).ready(function(){
  $('#carrossel-radar').mouseenter(function(){
    $('.carousel-control').fadeIn("fast");
  });
  $('#carrossel-radar').mouseleave(function(){
    $('.carousel-control').fadeOut("fast");
  });
});
</script>  
