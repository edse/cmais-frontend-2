<?php use_helper('I18N', 'Date') ?>  
<!doctype html>
<html lang="pt">
<!--HEAD-->
<head>
 
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





    
    <div class="navbar">
      <div class="navbar-inner">
        <div class="container">
     
          <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
     
          <!--LOGO CULTURA-->
          <a href="/fpa" title="Fundação Padre Anchieta" class="brand">
            <img src="/portal/images/capaPrograma/fpa/logo-fpa.png" class="logo-fpa" alt="Fundação Padre Anchieta" />
          </a>
          <!--/LOGO CULTURA-->

          <!-- Everything you want hidden at 940px or less, place within here -->
          <div class="nav-collapse collapse">
            <!-- .nav, .navbar-search, .navbar-form, etc -->
          </div>
     
        </div>
      </div>
    </div>
     


</div> 
<!-- /FUNDO-TOPO-->