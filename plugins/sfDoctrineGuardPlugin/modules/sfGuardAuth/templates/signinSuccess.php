<!DOCTYPE html>
<html>
    <head>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
    <link rel="shortcut icon" href="/favicon.ico" />
    <?php include_stylesheets() ?>
    <?php include_javascripts() ?>
    <style>
    .form-noindent { background-color: #fff; border: 1px solid #c3d9ff; }
    li{ list-style: square inside none; }
    label { padding-left: 5px; }
    td { padding-left: 5px; }
    #dashboard-side { 1px solid #C3D9FF; border: 1px solid rgb(195, 217, 255); }
    #dashboard-blog { padding-bottom: 0px; margin-bottom: 0px; }
    .form-noindent { padding-bottom: 5px; }
    .module h3 { padding-top: 9px; text-align: center; }
    .error_list { padding: 5px; background-color: Cornsilk; }
    .error_list li { list-style: none; text-align: center; }
    </style>
	<script>
	$(function() {
		$('#signin_username').focus();
	});
	</script>
  </head>
  <body>

    <?php use_helper('I18N') ?>

        <div id="alerts">
        </div>
        <div id="header">
            <h1><?php echo __('Entrar', null, 'sf_guard') ?></h1>
        </div>

        <div id="content">
            <div id="dashboard-main" style="width: 72%; margin-right: 20px;">


<div id="maincontent">
  <table cellspacing="0" cellpadding="0" border="0" width="100%">
  <tbody><tr>
  <td width="75%" valign="top">
<div>
<strong>Para acessar o Astolfo, entre com o login e senha fornecidos.</strong>
<br /><br />
O Astolfo faz o gerenciamento de todos os web-assets da Fundação Padre Anchieta.<br />
O principal objetivo do Astolfo é de tornar ágil e fácil o gerenciamento dos portais e sites da Fundação Padre Anchieta.<br /><br />
Algumas das principais métas do Astolfo são:<br /><br />
<ul>
  <li>Centralizar o gerenciamento de todos os portais e sites em uma única aplicação.</li>
  <li>Simplificar o workflow tornando-o uniforme para todos os portais, sites, canals e programas.</li>
  <li>Gerenciamento de todos os tipos de assets produzidos pela fundação.</li>
  <li>Upload automático de vídeos para o YouTube.
  <li>Redução drástica do espaço de armazenamento nescessário para o Astolfo.</li>
  <li>Tornar simples a manutenção do sistema e elaboração de novas features.</li>
  <li>3 Diferentes níveis de usuários. Administradores, editores e colaboradores.</li>
</ul>
<br><br>
Entre com suas credênciais ao lado ou <a href="#">peça a criação de sua conta agora</a>.
<br><br>
</div>
  </td>


  <td align="center" valign="top">
  
  
  </td>
  </tr>
  </tbody></table>
  
  </div>
  
  
  </body>
</html>


            </div>
            <div id="dashboard-side">
                <div id="dashboard-blog" class="module">
                    <h3>Entre com a sua conta do Astolfo</h3>
                    <div class="module-info">
            <div id="sf_admin_bar">

<div id="rhs">
  <div id="rhs_login_signup_box" style="background-color:#e8eefa;">

<?php echo get_partial('sfGuardAuth/signin_form', array('form' => $form)) ?>



  <br>
  
<div style="padding: 5px">
<table cellspacing="3" cellpadding="6" border="0" width="100%" class="form-noindent">
  <tbody><tr>
  <td bgcolor="#e8eefa" align="center" style="font-size: 83%; text-align: center;">
  <b>Você não tem uma conta no Astolfo?</b><br />
  <a href="#"><strong>Crie uma conta agora</strong></a>
  </td>
  </tr>
</tbody></table>
</div>

  </div>

  </div>              
            </div>
                    </div>
                </div>
            </div>