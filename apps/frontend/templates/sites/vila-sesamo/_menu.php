  <?php
   if($section->getSlug() == "home"){
     $classLogo = "sprite-logo-sesamo";
     //$border = "";
   }else{
    $classLogo = "";
    //$border = "<i class='sprite-detalhe-amarelo4'></i>";
   }
   
  ?>
  <!--nav-->
  <nav class="header-bar" role="navigation" aria-label="Site Navigation" >
    
    <!--content-->
    <div class="content">
      
      <h1>
        <a href="<?php echo $site->retriveUrl(); ?>" class="<?php echo $classLogo; ?>" title="Logo Vila Sésamo">
          <img src="http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/logo-vila-menu.jpg"  alt=""/>
        </a>
        <?php //echo $border ?>
      </h1>
      
      <!--lista menu-->
      <ul>
        <li class="btn-personagens" data-width="260" data-time="1000" data-back="500">
          <a href="<?php echo $site->retriveUrl(); ?>/personagens" title="Personagens">
            <span class="texto">Personagens</span>
            <i class="sprite-btn-personagens"></i>
            <span class="fundo fundo-personagens"></span>
            <span class="borda borda-personagens"></span>
          </a>
        </li>
        
        
        <!--lista item-->
        <li class="btn-atividades" data-width="225" data-time="800" data-back="500">
          <a href="<?php echo $site->retriveUrl(); ?>/atividades"  title="Atividades">
            <span class="texto">Atividades</span>
            <i class="sprite-btn-atividades"></i>
            <span class="fundo fundo-atividades"></span>
            <span class="borda borda-atividades"></span>
          </a>
       </li>
       <!--/lista item-->
       
       <!--lista item-->
        <li class="btn-videos" data-width="170" data-time="400" data-back="200">
          <a href="<?php echo $site->retriveUrl(); ?>/videos"  title="Vídeos">
            <span class="texto">Vídeos</span>
            <i class="sprite-btn-videos"></i>
            <span class="fundo fundo-videos"></span>
            <span class="borda borda-videos"></span>
          </a>
        </li>
        <!--/lista item-->
        
        <!--lista item-->
        <li class="btn-jogos" data-width="160" data-time="400" data-back="200">
          <a href="<?php echo $site->retriveUrl(); ?>/jogos" title="Jogos">
            <span class="texto">Jogos</span>
            <i class="sprite-btn-jogos"></i>
            <span class="fundo fundo-jogos"></span>
            <span class="borda borda-jogos"></span>
          </a>
        </li>
        <!--/lista item-->
        
      </ul>
      <!--/lista menu-->
    </div>
    <!--/content-->
  </nav>
  <!--/nav-->