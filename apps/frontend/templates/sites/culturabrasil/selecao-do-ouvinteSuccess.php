<?php use_helper('I18N', 'Date') ?>

<!-- Le styles--> 
<link href="/portal/js/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="/portal/js/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
<link href="/portal/css/tvcultura/sites/culturabrasil.css" rel="stylesheet" type="text/css" />

<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<script src="/portal/js/bootstrap/bootstrap.js"></script>

<?php include_partial_from_folder('sites/culturabrasil', 'global/menu', array('siteSections' => $siteSections, 'displays' => $displays, 'section'=>$section)) ?>

 


<!--section miolo--> 
<section class="miolo programa" >
  <!-- container miolo -->
  <div class="container row-fluid">
    <!--breadcrumb-->
    <div class="row-fluid pontilhada">
      <ul class="breadcrumb">
        <li><a href="/">Cultura Brasil</a><span class="divider">»</span></li>
        <li>Entrevistas </li>
      </ul>
    </div>
    <!--/breadcrumb-->
    <!-- coluna esquerda -->
    <div class="span8" style="margin:0; padding:0 10px;">
      
      <!-- titulo -->
      <h1>Seleção do ouvinte</h1>
      <p class="horario">Preencha e envie o formulário abaixo com até seis músicas adequadas à programação da rádio.</p>
      <!--titulo-->
      
      <!-- row form -->
      <div class="row-fluid">
        <!--form-->
        <form id="form-selecao" >
          <!-- form principal -->
          <fieldset>
            
            <label>Nome</label>
            <input id="nome" name="nome" class="required span12" type="text" >
            
          </fieldset>
          <fieldset>
            <div class="span4">
              <label>Bairro</label>
              <input id="bairro" name="bairro" class="required span4" type="text" >
            </div>
            <div class="span4">
              <label>Cidade</label>
              <input id="cidade" name="ciadade" class="required span4" type="text" >
            </div>
            <div class="span1">
              <label>UF</label>
              <select class="required span1" id="estado">
                <option value="" selected="selected">--</option>
                <option value="Acre">AC</option>
                <option value="Alagoas">AL</option>
                <option value="Amazonas">AM</option>
                <option value="Amapá">AP</option>
                <option value="Bahia">BA</option>
                <option value="Ceará">CE</option>
                <option value="Distrito Federal">DF</option>
                <option value="Espirito Santo">ES</option>
                <option value="Goiás">GO</option>
                <option value="Maranhão">MA</option>
                <option value="Minas Gerais">MG</option>
                <option value="Mato Grosso do Sul">MS</option>
                <option value="Mato Grosso">MT</option>
                <option value="Pará">PA</option>
                <option value="Paraíba">PB</option>
                <option value="Pernambuco">PE</option>
                <option value="Piauí">PI</option>
                <option value="Paraná">PR</option>
                <option value="Rio de Janeiro">RJ</option>
                <option value="Rio Grande do Norte">RN</option>
                <option value="Rondônia">RO</option>
                <option value="Roraima">RR</option>
                <option value="Rio Grande do Sul">RS</option>
                <option value="Santa Catarina">SC</option>
                <option value="Sergipe">SE</option>
                <option value="São Paulo">SP</option>
                <option value="Tocantins">TO</option>
              </select>
            </div>
            <div class="span3">
              <label>País</label>
              <input id="pais" name="pais" class="required span3" type="text" >
            </div>
          </fieldset>
          <fieldset> 
            <div class="span4">
              <label>Telefone</label>
              <input id="telefone" name="telefone" class="required span4" type="text" >
            </div>
            <div class="span4">
              <label>E-mail</label>
              <input id="email" name="email" class="span4" type="text" >
            </div>
          </fieldset>
          <!-- form principal -->
          
          <input type="hidden" value="20">
          
          <!-- item musica 1-->
          <fieldset>
            <legend>Musica 1</legend>
            
            <div class="borda-pontilhada"></div>
            
            <label>Musica</label>
            <input id="musica1" name="musica1" type="text">
            
            <label>Intérprete</label>
            <input id="interprete1" name="interprete1" type="text">
            
          </fieldset>
          <!-- item musica 1 -->
          
          
        </form>
        <!--/form-->
        <!-- /row form -->
      </div>
      
              
    </div>  
    <!-- /coluna esquerda -->
    
    <!--coluna direita -->
    <div class="span4 box-direita">
      
      <!--banner -->
      <div class="banner-culturabrasil">
        <script type='text/javascript'>
          GA_googleFillSlot("home-geral300x250");
        </script>
      </div>
      <!-- /banner -->  
      
    </div>
    <!--/coluna direita -->
    
  </div>  
  <!-- /container miolo -->  

</section>
<!--/section miolo-->

  

