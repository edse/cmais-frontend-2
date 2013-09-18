<link rel="stylesheet" href="/portal/css/tvcultura/sites/vilasesamo2/internas.css" type="text/css" />
<link rel="stylesheet" href="/portal/css/tvcultura/sites/vilasesamo2/assets.css" type="text/css" />

<script>
  $("body").addClass("interna");

</script>
<style>
.q-pers-01{display:block; width: 140px; height:140px; background:#00000;}
.q-pers-02{display:block; width: 200px; height:200px; background:blue;}
.q-pers-03{display:block; width: 300px; height:300px; background:red;}
.q-pers-04{display:block; width: 350px; height:350px; background:yellow;}
</style>
<!-- HEADER -->
<?php include_partial_from_folder('sites/vilasesamo2', 'global/menuprincipal', array('site' => $site, 'mainSite' => $mainSite, 'section' => $section))
?>
<!-- /HEADER -->
<div id="content">
  <section class="filtro row-fluid">
    <h3><span class="sprite-icon-jogos-med"></span>Jogos<a class="todos-assets" href="/vilasesamo2/jogos"><span class="sprite-btn-voltar-jogos"></span><p>todos os jogos</p></a></h3>
    <div class="conteudo-asset">
      <h2>Personagens</h2>
    
      
      <div class="asset">
        <div class="q-pers-01"></div>
        <div class="q-pers-02"></div>
        <div class="q-pers-03"></div>
        <div class="q-pers-04"></div>
      </div>
    </div>
  </section>
</div>
