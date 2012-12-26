<link href="/portal/css/tvcultura/sites/cocorico2/home.css" rel="stylesheet">

<style type="text/css">
/* tooltip*/
.tooltip-inner { background:#747a3a; padding:3px 10px; font-size: 13px; line-height:15px; }
.tooltip.in,
.tooltip { opacity: 1; filter: alpha(opacity=100);}
.tooltip.bottom .tooltip-arrow {  border-bottom-color: #747a3a;}
/* tooltip*/
</style>

<!-- container-->
<div class="container tudo">
  <!-- row-->
  <div class="row-fluid">
  	teste destque-topo
  	 <?php if(isset($displays['destaque-topo'])): ?>
      <?php if(count($displays['destaque-topo']) > 0): ?>
    <div class="span12">
      <div id="myCarousel" class="carousel slide span12">
        <!-- Carousel items -->
        <div class="carousel-inner">
        <?php foreach($displays['destaque-topo'] as $k=>$d): ?>    
           <div class="<?php if($k==0): ?>active <?php endif; ?>item">
                <a href="<?php echo $d->getHeadline() ?>" title="<?php echo $d->getTitle() ?>"><img src="<?php echo $d->Asset->retriveImageUrlByImageUsage('original') ?>" class="span12"/></a>
           </div>
        </div>
        <?php endforeach; ?>
        <!-- Carousel nav -->
        <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
        <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
      </div>
    </div>
       <?php endif; ?>
    <?php endif; ?>
    <div class="divisoria span12"></div>
  </div>
  <!-- /row-->
  <!-- row-->
  <div class="row-fluid menu">
    <div class="navbar">
      <div class="navbar-inner">
        <ul class="nav">
          <li class="personagens"><a href="/cocorico/personagens" class="btn-tooltip" rel="tooltip" data-placement="bottom" data-original-title="ver todos"></a></li>
          <li class="joguinhos"><a class="icon" href="/cocorico/joguinhos" title="Joguinhos"></a><a href="/cocorico/joguinhos" title="Joguinhos">Joguinhos</a><span></span></li>
          <li class="brincadeiras"><a class="icon"  href="/cocorico/brincadeiras" title="Brincadeiras"></a><a href="/cocorico/brincadeiras" title="Brincadeiras">Brincadeiras</a><span></span></li>
          <li class="tvcoco"><a class="icon"  href="/cocorico/tvcocorico" title="TV Cocoricó"></a><a href="/cocorico/tvcocorico" title="TV Cocoricó">TV Cocoricó</a><span></span></li>
          <li class="diario"><a class="icon"  href="/cocorico/diario-do-julio" title="Diário do Júlio"></a><a href="/cocorico/diario-do-julio" title="Diário do Júlio">Diário do Júlio</a><span></span></li>
          <li class="familia"><a  href="/cocorico/em-familia" title="Em família">Em família</a></li>
        </ul>
      </div>
      <div class="lista-personagens">
        <h3>turma</h3>
        <ul>
          <li><a href="#" title="Astolfo"><img src="/portal/images/capaPrograma/cocorico/menu-astolfo.png" alt="Astolfo" /></a></li>
          <li><a href="#" title="Astolfo"><img src="/portal/images/capaPrograma/cocorico/menu-astolfo.png" alt="Astolfo" /></a></li>
          <li><a href="#" title="Astolfo"><img src="/portal/images/capaPrograma/cocorico/menu-astolfo.png" alt="Astolfo" /></a></li>
          <li><a href="#" title="Astolfo"><img src="/portal/images/capaPrograma/cocorico/menu-astolfo.png" alt="Astolfo" /></a></li>
          <li><a href="#" title="Astolfo"><img src="/portal/images/capaPrograma/cocorico/menu-astolfo.png" alt="Astolfo" /></a></li>
          <li><a href="#" title="Astolfo"><img src="/portal/images/capaPrograma/cocorico/menu-astolfo.png" alt="Astolfo" /></a></li>
          <li><a href="#" title="Astolfo"><img src="/portal/images/capaPrograma/cocorico/menu-astolfo.png" alt="Astolfo" /></a></li>
          <li><a href="#" title="Astolfo"><img src="/portal/images/capaPrograma/cocorico/menu-astolfo.png" alt="Astolfo" /></a></li>
        </ul>
      </div>
    </div>
  </div>
  <!-- /row-->
  <!--row-->
  <div class="row-fluid conteudo">
    <div class="span8 col-esq">
      <div class="destaque-home joguinhos">
        <a href="/cocorico/joguinhos" class="span9"><img class="span12" src="/portal/images/capaPrograma/cocorico/jogo-home.jpg" alt="jogo" /></a>
        <div class="box span3">
          <span class="mais"></span>
          <div class="tit"><a href="/cocorico/joguinhos">Joguinhos</a><span></span></div>
          <ul>
            <li><a href="/cocorico/joguinhos-interna" title="jogo"><img class="span12" src="/portal/images/capaPrograma/cocorico/jogo-home.jpg" alt="nome jogo" />Nome do joguinho</a></li>
            <li><a href="/cocorico/joguinhos-interna" title="jogo"><img class="span12" src="/portal/images/capaPrograma/cocorico/jogo-home.jpg" alt="nome jogo" />Nome do joguinho</a></li>
          </ul>
        </div>
      </div>
      <div class="span12">
        <a class="box destaques span6" href="/cocorico/receitinhas" title="jogo">
        <bold>
          Receitinhas
        </bold><img class="span12" src="/portal/images/capaPrograma/cocorico/jogo-home.jpg" alt="nome jogo" />Nome do joguinho<span></span></a>
        <a class="box destaques span6" href="/cocorico/receitinhas" title="jogo">
        <bold>
          papel de parede
        </bold><img class="span12" src="/portal/images/capaPrograma/cocorico/jogo-home.jpg" alt="nome jogo" />Nome do joguinho<span></span></a>
      </div>
    </div>
    <div class="span4 col-dir">
      <a class="logo" href="/cocorico/tvcocorico"><img class="span12" src="/portal/images/capaPrograma/cocorico/tvcoco.png" /></a>
      <div class="tvcoco span12">
        <h2><i class="icon-star-empty"></i>Próximo Convidado<i class="icon-star-empty"></i></h2>
        <a class="convidado span12" href="/cocorico/tvcocorico/convidado" title=""><img src="/portal/images/capaPrograma/cocorico/jogo-home.jpg" alt="proximo convidade" /> Nome convidado<span class="mais"></span></a>
        
        <div class="enquete span12">
          <h3>enquete do dia</h3>
          <p>Como você brinca quando esta chovendo?</p>
          <form class="navbar-form pull-left">
            <div class="versus"></div>
            <div class="span6">
              <label class="radio">
                <input type="radio" class="regular-radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                no videogame
              </label>
              <img class="span12" src="/portal/images/capaPrograma/cocorico/jogo-home.jpg" alt="" />
            </div>
            <!-- versus -->
            <div class="span6 last">
              <label class="radio">
                <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2" checked>
              no computador </label>
              <img class="span12" src="/portal/images/capaPrograma/cocorico/jogo-home.jpg" alt="" />
            </div>
            <div class="votar span12"><span></span><a href="#" class="span11">votar</a><span class="last"></span></div>
          </form>
          <form class="navbar-form pull-left inativo" >
            <div class="versus"></div>
            <div class="span6">
              <label class="radio">no videogame</label>
              <img class="span12" src="/portal/images/capaPrograma/cocorico/jogo-home.jpg" alt="" />
              <p>50%</p>
            </div>
            <!-- versus -->
            <div class="span6 last">
              <label class="radio">no computador </label>
              <img class="span12" src="/portal/images/capaPrograma/cocorico/jogo-home.jpg" alt="" />
              <p>50%</p>
            </div>
            <a href="#" title="Ver enquetes anteriores">Ver enquetes anteriores</a>
          </form>
        </div>
      </div>
    </div>
  </div>
  
  <!-- /row-->
  <div class="row-fluid  border-top"></div>
  <div class="row-fluid rodape" >
    <h3>2012 &copy; tv cultura - fpa</h3>
    <div class="span2">
      <a href="#" class="bold" title="Em família">em família</a>
      <ul>
        <li><a href="#" title="Na TV">Na TV</a></li>
        <li><a href="#" title="Nas lojas">Nas lojas</a></li>
        <li><a href="#" title="Nas Redes">Nas Redes</a></li>
        <li><a href="#" title="Nos Teatros">Nos Teatros</a></li>
        <li><a href="#" title="Nos Cinemas">Nos Cinemas</a></li>
        <li><a href="#" title="Na Web">Na Web</a></li>
        <li><a href="#" title="Agenda">Agenda</a></li>
        <li><a href="#" title="Newsletter">Newsletter</a></li>
        <li><a href="#" title="Fale Conosco">Fale Conosco</a></li>
      </ul>
    </div>
    <div class="span2"> <a href="#" class="bold" title="Em família">tv cocoricó</a>
      <ul>
        <li><a href="#" title="Sobre o programa">Sobre o programa</a></li>
        <li><a href="#" title="Livro de receitas">Livro de receitas</a></li>
        <li><a href="#" title="Bastidores">Bastidores</a></li>
        <li><a href="#" title="Tour Virtual">Tour Virtual</a></li>
        <li><a href="#" title="Receitinhas">Receitinhas</a></li>
        <li><a href="#" title="Envie seu vídeo">Envie seu vídeo</a></li>
        <li><a href="#" title="Enquete">Enquete</a></li>
      </ul>
    </div>
    <div class="span2"> <a href="#" class="bold" title="Cocoricó">cocoricó</a>
      <ul>
        <li><a href="#" title="Sobre a série">Sobre a série</a></li>
        <li><a href="#" title="Diário do Júlio">Diário do Júlio</a></li>
        <li><a href="#" title="Personagens">Personagens</a></li>
        <li><a href="#" title="Cocoricolândia">Cocoricolândia</a></li>
        <li><a href="#" title="Autógrafos">Autógrafos</a></li>
      </ul>
    </div>
    <div class="span2 joguinhos"> <a href="#" class="bold" title="Jogos e Brincadeiras">Jogos e Brincadeiras</a>
      <ul>
        <li><a href="#" title="Joguinhos">Joguinhos</a></li>
        <li><a href="#" title="Receitinhas">Receitinhas</a></li>
        <li><a href="#" title="Para colorir">Para colorir</a></li>
        <li><a href="#" title="Rádio">Rádio</a></li>
        <li><a href="#" title="Vídeos">Vídeos</a></li>
        <li><a href="#" title="Clipes musicais">Clipes musicais</a></li>
        <li><a href="#" title="Papel de parede">Papel de parede</a></li>
        <li><a href="#" title="Carinhas animadas">Carinhas animadas</a></li>
        <li><a href="#" title="Cartões Comemorativos">Cartões Comemorativos</a></li>
        <li><a href="#" title="Atividades para imprimir">Atividades para imprimir</a></li>
      </ul></div>
    <div class="span3 sites"> <a href="#" class="bold" title="Sites Relacionados">Sites Relacionados</a>
      <ul>
        <li><a href="#" class="quintal" title="Quintal da Cultura">Quintal da Cultura</a></li>
        <li><a href="#" class="tvrtb" title="TV Rá Tim Bum!">TV Rá Tim Bum!</a></li>
        <li class="last"><a href="#" class="cultura" title="TV Cultura">TV Cultura</a></li>
        <li><a href="#" class="castelo" title="Castelo Rá Tim Bum">Castelo Rá Tim Bum</a></li>
        <li><a href="#" class="vila" title="Vila Sésamo">Vila Sésamo</a></li>
      </ul></div>
    
  </div>
  <!--row-->
</div>
<!-- /container-->