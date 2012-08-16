<!--header-->
<?php include_partial_from_folder('blocks', 'global/headerMob') ?>
<!--/header-->

<div id="cmais"  data-fullscreen="true">
    
  <!--CONTEUDO Content-->
  <div class="content" align="left" >
      
      <?php include_partial_from_folder('sites/m', 'global/topoAsset', array('asset'=>$asset)) ?>
      
      <!--ASSET-->
      <div class="asset">
      
        <div class="titulo">
          <h2><?php echo $asset->getTitle() ?></h2>
          <?php if ($asset->getDescription()): ?>
          <div class="olho">
            <p><?php echo $asset->getDescription() ?></p>
            <div class="espaco10"></div>
          </div>
          <?php endif; ?>
        </div>
        <div class="espaco10 bordaTopo"></div>
        <div class="data"><p>Atualizado em <?php echo format_date($asset->getUpdatedAt(), "g") ?></p></div>
        <div class="autor"><?php if ($asset->AssetContent->getAuthor()): ?><p>Por <?php echo $asset->AssetContent->getAuthor() ?></p><?php endif; ?>
        </div>
        
        <!--div class="fotob">
          <img src="http://midia.cmais.com.br/assets/image/image-6-b/bcfdf549db1a12278bf0b14e91c6151727b75572.jpg" width="100%"/>
        </div-->
        
        <div class="conteudo">
        	<p><img src="http://midia.cmais.com.br/assets/image/original/<?php echo $asset->AssetImage->getOriginalFile(); ?>" alt="<?php echo $asset->getTitle(); ?>"></p>
        </div>  
          
      </div>
      <!--/ASSET-->
      <?php include_partial_from_folder('sites/m', 'global/topoAsset', array('asset'=>$asset)) ?> 
      <div class="espaco30"></div>  
  </div>
  <!--/CONTEUDO Content-->
  
  <!-- mobile320x50 -->
  <div id='div-gpt-ad-1344351883965-0' class="banner">
    <script type='text/javascript'>
    googletag.cmd.push(function() { googletag.display('div-gpt-ad-1344351883965-0')});
    </script>
  </div>
  <!-- mobile320x50 -->
  
</div>
<!--/PAGINA INDEX-->

<!--footer-->
<?php include_partial_from_folder('blocks', 'global/footerMob', array('site'=>$site,'asset'=>$asset)) ?>
<!--/footer-->