<link rel="stylesheet" href="/portal/css/tvcultura/geral2.css?a=<?php echo time() ?>" type="text/css" />

<?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'asset' => $asset, 'section' => $section)) ?>
<style>
#capa-site h1{text-align: left; margin-top: 40px; font-size: 24px; margin-bottom: 20px;}
.lista-calendario .barra-grade .tit {width: 95%;padding: 0 10px;}
.lista-calendario .mapa{width:100%; height:750px; border: 1px solid #333;background:#ccc;clear:both; margin-top:20px;}
.lista-calendario .toggle{width:100%;}
.lista-calendario .search-map{margin: 20px -3px 5px 20px;border: none;padding: 5px 15px;width: 400px;}
.lista-calendario #enviar{border: none;display:block;width: 70px;height: 31px;float: left;margin-top: 20px;background:#4a8cf6 url(lupa-azul-branca.jpg) no-repeat center center;}
#form-map{float: left;}
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
      <form id="form-map" action="" method="post">
        <input type="text" name="" class="search-map">
        <input type="submit" id="enviar" value=""/>
      </form>  
    </div>  
  </div>
</div>