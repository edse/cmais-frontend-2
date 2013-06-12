<link rel="stylesheet" href="/portal/css/tvcultura/geral2.css?a=<?php echo time() ?>" type="text/css" />

<?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'asset' => $asset, 'section' => $section)) ?>
<style>
#capa-site h1{text-align: left; margin-top: 40px; font-size: 24px; margin-bottom: 20px;}
.lista-calendario .barra-grade .tit {width: 95%;padding: 0 10px;}
.lista-calendario .mapa{width:100%; height:750px; border: 1px solid #333;background:#ccc;clear:both; margin-top:20px;}
.lista-calendario .toggle{width:100%;}
.lista-calendario .ipt-txt {border-radius: 0px;width: 300px;float: left;height: 22px;line-height: 25px;font-size: 12px;color: #333;padding-left: 30px;border: 1px solid #c5c5c5;border-right: none;background: #fff}
.lista-calendario .search-map{margin: 20px 20px -3px 5px 20px;border: none;padding: 5px 15px;width: 400px;}
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
        <input type="text" name="" id="search-map">
        <input type="submit" id="enviar" value=""/>
      </form>  
    </div>  
  </div>
</div>