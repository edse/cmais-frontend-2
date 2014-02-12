<?php use_helper('I18N', 'Date') ?>  
<!doctype html>
<html lang="pt">
<!--HEAD-->
<head>
  <meta name="viewport" content="width=device-width,max-width=0.7, initial-scale=0.7 ">
  
  <!-- SCRIPTS -->
  <script src="/portal/js/jquery-1.7.2.min.js" type="text/javascript"></script>
  <script src="/portal/js/bootstrap/bootstrap.min.js"></script>
  <script src="/portal/js/fpa.js" type="text/javascript"></script>
  <!-- SCRIPTS -->
  
  <!-- CSS BOOTSTRAP -->
  <link rel="stylesheet" href="/portal/js/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="/portal/js/bootstrap/css/bootstrap-responsive.min.css">
  <link rel="stylesheet" href="/portal/css/geral.css" type="text/css" />
  <link rel="stylesheet" href="/portal/css/tvcultura/sites/fpa.css" type="text/css" />
  <?php if($site->getSlug()=="central-de-relacionamento"):?>
    <link rel="stylesheet" href="/portal/css/tvcultura/sites/central-de-relacionamento.css" type="text/css" />
  <?php endif;?>  
  <!-- /CSS BOOTSTRAP -->
    
</head>
<!--HEAD-->
<?php $slug = substr($section->getSlug(),0, 6); ?>
<!--BODY-->
<body <?php if ($site->getSlug()=="fpa" && $slug == "decada") echo "class='linha-do-tempo'";?> >

<!--FUNDO-TOPO-->
<?php if ($site->getSlug()=="fpa" && $slug == "decada"):?>
<div id="fundo-topo" style="position: fixed;">
<?php else:?>
<div id="fundo-topo" class="">
<?php endif;?>  
  <!--CONTAINER-->
  <div class="container principal">

    <!--LOGO CULTURA-->
    <a href="/fpa" title="Fundação Padre Anchieta" class="pull-left">
      <img src="http://cmais.com.br/portal/images/capaPrograma/fpa/logo-fpa.png" class="logo-fpa" alt="Fundação Padre Anchieta" />
    </a>
    <!--/LOGO CULTURA-->

    <!--LISTA DE BOTOES-->
    <ul id="topo-fpa" class="nav-pills font-btn nav">
      <?php if($site->getSlug()=="fpa" && $section->getSlug()=="quem-somos"){$ativo="active";}else{$ativo="";} ?>
      <li class="<?php echo $ativo?>">
        <a href="http://www2.tvcultura.com.br/fpa/institucional/quemsomos.aspx" class="link margin-0 <?php echo $ativo?>" title="Quem Somos">Quem Somos</a>
        <b class="seta-hover <?php echo $ativo?>"></b>
      </li>

      <?php if(substr($section->getSlug(), 0, 6)=="decada"){$ativo="active";}else{$ativo="";} ?>
      <li class="dropdown <?php echo $ativo?>" id="acervo">
        <a class="link <?php echo $ativo?>" data-toggle="dropdown" href="#" title="Acervo">
          Acervo
          <b class="caret"></b>
        </a>
        <b class="seta-hover <?php echo $ativo?>"></b>
        <ul class="dropdown-menu ">
         <!--<li><a href="#" title="Pesquisa Audiovisual" target="_blank">Pesquisa Audiovisual</a></li>-->
         <li><a href="/fpa/decada-60" title="Linha do Tempo">Linha do Tempo</a></li>
        </ul>
      </li>
      <?php if($site->getSlug()=="central-de-relacionamento"){$ativo="active";}else{$ativo="";} ?>
      <li class="<?php echo $ativo?>">
        <a href="/central-de-relacionamento" class="link <?php echo $ativo?>" title="Linha do Tempo">Central de Relacionamento</a>
        <b class="seta-hover <?php echo $ativo?>"></b>
      </li>
      
      <li class="">
        <a href="http://www2.tvcultura.com.br/fpa/institucional/licitacoes.aspx" class="link" title="Licitações">Licitações</a>
        <b class="seta-hover"></b>
      </li>
      <?php if($section->getSlug()=="trabalhe-conosco" || $section->getSlug()=="realizar-cadastro"){$ativo="active";}else{$ativo="";} ?>
      <li class="<?php echo $ativo;?>">
        <a href="http://www2.tvcultura.com.br/selecao/" class="link <?php echo $ativo;?>" title="Trabalhe Conosco">Trabalhe Conosco</a>
        <b class="seta-hover <?php echo $ativo;?>"></b>
      </li>
      
      <li class="dropdown " id="emissoras">
        <a class="margin-0" class="link" data-toggle="dropdown" href="#emissoras" title="Emissoras">
          Emissoras
          <b class="caret"></b>
        </a>
        <b class="seta-hover"></b>
        <ul class="dropdown-menu ">
         <li><a href="http://tvcultura.cmais.com.br/" title="Tv Cultura" target="_blank">TV Cultura</a></li>
         <li><a href="http://univesptv.cmais.com.br/" title="Univesp TV" target="_blank">Univesp TV</a></li>
         <li><a href="http://multicultura.cmais.com.br/" title="multiCultura" target="_blank">multiCultura</a></li>
         <li><a href="http://tvratimbum.cmais.com.br/" title="TV Rá Tim Bum!" target="_blank">TV Rá Tim Bum!</a></li>
         <li><a href="http://www.culturabrasil.com.br/" title="Cultura Brasil" target="_blank">Cultura Brasil</a></li>
         <li><a href="http://culturafm.cmais.com.br/" title="Cultura Fm" target="_blank">Cultura Fm</a></li>
         <!-- <li><a href="http://tvratimbum.cmais.com.br/radio" title="Rádio Rá Tim Bum" target="_blank">Rádio Rá Tim Bum</a></li> -->
         <!-- <li><a href="http://www3.tvcultura.com.br/cocorico/radio" title="Rádio Cocoricó" target="_blank">Rádio Cocoricó</a></li> -->
        </ul>
      </li>
      
      <li class="dropdown " id="portais">
        <a class="margin-0" class="link" data-toggle="dropdown" href="portais" title="Portais">
          Portais
          <b class="caret"></b>
        </a>
        <b class="seta-hover"></b>
        <ul class="dropdown-menu">
         <li><a href="http://cmais.com.br/" title="CMAIS+" target="_blank">CMAIS+</a></li>
         <li><a href="http://www.culturabrasil.com.br/" title="Cultura Brasil" target="_blank">Cultura Brasil</a></li>
        </ul>
      </li>
      
      <?php if($site->getSlug()=="sic"){$ativo="active";}else{$ativo="";} ?>
      <li class="<?php echo $ativo?>">
        <a href="http://fpa.com.br/sic/" class="link <?php echo $ativo?>" title="SiC">SiC</a>
        <b class="seta-hover <?php echo $ativo?>"></b>
      </li>
    </ul>
    <!--/LISTA DE BOTOES-->
     
  </div>
  <!--/CONTAINER-->

</div> 
<!-- /FUNDO-TOPO-->