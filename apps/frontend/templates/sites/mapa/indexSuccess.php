<link rel="stylesheet" href="/portal/css/tvcultura/geral2.css?a=<?php echo time() ?>" type="text/css" />

<?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'asset' => $asset, 'section' => $section)) ?>
<style>
h1{text-align: left; margin-top: 40px; font-size: 24px; margin-bottom: 20px;}
.lista-calendario .barra-grade .tit {width: 95%;padding: 5px;}
.lista-calendario .mapa{width:100%; height:750px; border: 1px solid #333;background:#ccc;}
</style>
<div id="capa-site">
  <h1>TV Cultura - Mapa de Cobertura</h1>
  <div class="lista-calendario">
    <div class="barra-grade">                    
      <a href="#" class="btn-toggle tit">Cobertura Nacional</a>
      <a href="#" class="botao btn-toggle"></a>
    </div>
    <div class="grade toggle" style="background:none; padding-bottom: 25px; display: none;">
      teste de conteudo
    </div>
    
    <div class="mapa">
      <form action="" method="post">
        <input type="search" name="" id="search-map">
        <input type="submit" id="enviar" />
      </form>  
    </div>  
  </div>
</div>