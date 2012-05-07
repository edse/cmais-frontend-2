
<link rel="stylesheet" href="/portal/css/tvcultura/secoes/defaultPrograma.css" type="text/css" />
<script src="/portal/js/orbit/jquery.orbit-1.2.3.min.js" type="text/javascript"></script>
<link rel="stylesheet" href="/portal/css/tvcultura/sites/castelo/geral.css" type="text/css" />

<body data-twttr-rendered="true"style="background: none !important;">
<?php use_helper('I18N', 'Date') ?>
<script type="text/javascript">
$(document).ready(function(){
  $('#rodape-portal').hide();
  $('body').addClass('bac');
});
</script>

<!--GOOGLE ANALYTICS-->
<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-22770265-1']);
  _gaq.push(['_setDomainName', 'cmais.com.br']);
  _gaq.push(['_setAllowHash', 'false']);
  _gaq.push(['_trackPageview']);
  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();
</script>
<!--GOOGLE ANALYTICS-->
<div class="base">
  
  
  
  <!--CONTEUDO-->
  <div class="mioloF">

      <!--CONTAINER ASSSET -->
      <div class="container">
     
        <!-- NOTICIA INTERNA -->
        <div class="box-interna grid2">
          
          
          <div class="topo claro">
            <span></span>
            <div class="capa-titulo">
              <h4>Entrevista</h4>
              <a href="/feed" class="rss" title="rss" style="display: block"></a>
            </div>
          </div>
          <h3><?php echo $asset->getTitle() ?></h3>
          <div class="assinatura grid2">
            <p class="sup"><?php echo $asset->AssetContent->getAuthor() ?> <span><?php echo $asset->retriveLabel() ?></span></p>
            <p class="inf"><?php echo format_date($asset->getCreatedAt(), "g") ?> - Atualizado em <?php echo format_date($asset->getUpdatedAt(), "g") ?></p>
            <?php include_partial_from_folder('blocks','global/share-small', array('site' => $site, 'uri' => $uri)) ?>
          </div>
          
          <div class="texto">
            <?php echo html_entity_decode($asset->AssetContent->render()) ?>
          </div>
          
          <?php $relacionados = $asset->retriveRelatedAssets(); ?>
          <?php if(count($relacionados) > 0): ?>
            
          <!-- SAIBA MAIS -->
          <div class="box-padrao grid2" style="margin-bottom: 20px;">
            <div id="saibamais">                                                            
            <h4>Veja +</h4>                                                            
            <ul class="conteudo">
            <?php foreach($relacionados as $k=>$d): ?>        
              <li style="width: auto;">
                <a class="titulos" href="<?php echo $d->retriveUrl()?>" title="<?php echo $d->getTitle()?>" style="width: auto;"><?php echo $d->getTitle()?></a>
              </li>
            <?php endforeach; ?>
              
            </ul>
           </div>
          </div>
          <!-- SAIBA MAIS -->
            
          <?php endif; ?>
      
          <?php include_partial_from_folder('blocks','global/share-2c', array('site' => $site, 'uri' => $uri)) ?>
          
           

        </div>
        <!-- /NOTICIA INTERNA --> 
        
      </div>
      <!--CONTAINER ASSSET -->
  </div>
  <!--/CONTEUDO-->
  

  
</div>
</body>