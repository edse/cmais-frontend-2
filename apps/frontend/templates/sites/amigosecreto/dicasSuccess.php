<link rel="stylesheet" href="/portal/css/tvcultura/sites/amigosecreto.css" type="text/css" />
<script type="text/javascript" src="/portal/js/scrollTo/scripts/jquery.min.js"></script>
<script type="text/javascript" src="/portal/js/scrollTo/scripts/jquery.scrollto.js"></script>
<?php use_helper('I18N', 'Date') ?>
<?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'section' => $section)) ?>
<!--/CONTANER-->
<div class="container amigo-secreto">
  <!--CAPA-SITE-->
  <div id="capa-site">
    <!--botao-voltar-->
    <a id="btn-voltar-as" href="/amigosecreto" title="Amigo Secreto"></a>
    <!--/botao-voltar-->
    <!--DICAS-AS-->
    <div id="dica-as">
      <!--BOTOES PERSONAGENS-->
      <ul>
        <li class="first">
          <div class="btn-hover-as selected" name="osorio-asset" title="Osório"></div>
          <a href="#" id="btn-osorio-as"></a>
        </li>
        <li>
          <div class="btn-hover-as"  name="teobaldo-asset" title="Teobaldo"></div>
          <a href="#" id="btn-teobaldo-as"></a>
        </li>
        <li>
          <div class="btn-hover-as" name="ludovico-asset" title="Ludovico"></div>
          <a href="#" id="btn-ludovico-as"></a>
        </li>
        <li>
          <div class="btn-hover-as" name="doroteia-asset" title="Dorotéia"></div>
          <a href="#" id="btn-doroteia-as"></a>
        </li>
        <li>
          <div class="btn-hover-as" name="filomena-asset" title="Filomena"></div>
          <a href="#" id="btn-filomena-as"></a>
        </li>
        <li>
          <div class="btn-hover-as" name="joao-asset" title="João"></div>
          <a href="#" id="btn-joao-as"></a>
        </li>
        <li>
          <div class="btn-hover-as" name="eric-asset" title="Eric"></div>
          <a href="#" id="btn-eric-as"></a>
        </li>
        <li>
          <div class="btn-hover-as" name="pedro-asset" title="Pedro"></div>
          <a href="#" id="btn-pedro-as"></a>
        </li>
        <li>
          <div class="btn-hover-as" name="matheus-asset" title="Matheus"></div>
          <a href="#" id="btn-matheus-as"></a>
        </li>
        <li>
          <div class="btn-hover-as" name="julio-asset" title="Júlio"></div>
          <a href="#" id="btn-julio-as"></a>
        </li>
        <li>
          <div class="btn-hover-as" name="lilica-asset" title="Lilica"></div>
          <a href="#" id="btn-lilica-as"></a>
        </li>
        <li>
          <div class="btn-hover-as" name="caco-asset" title="Caco"></div>
          <a href="#" id="btn-caco-as"></a>
        </li>
      </ul>
      <!--/BOTOES PERSONAGENS-->
      <!--BLOG-AS-->
      <div id="blog-as">
        <!--DIV NAO APAGAR-->
        <div style="padding:1px"></div>
        <!--/DIV NAO APAGAR-->
        <!--ASSET-->
        <a id="osorio-asset"></a> 
          <?php if(isset($displays['osorio'])): ?>
            <?php if(count($displays['osorio']) > 0): ?>
              <?php foreach($displays['osorio'] as $k=>$d): ?>
                <div class="blog-as-header">
                  <i class="ico-lateral"></i><h1><?php echo $d->getTitle() ?></h1>
                </div>
                <div class="blog-as-body">
                  <?php echo html_entity_decode($d->Asset->AssetContent->render()) ?>  
                </div>        
              <?php endforeach; ?>
            <?php endif;?>
          <?php endif; ?>
        <hr class="divisor"/> 
        <!--ASSET-->
        <!--/ASSET-->
        <a id="teobaldo-asset"></a> 
        <?php if(isset($displays['teobaldo'])): ?>
          <?php if(count($displays['teobaldo']) > 0): ?>
            <?php foreach($displays['teobaldo'] as $k=>$d): ?>
              <div class="blog-as-header">
                <i class="ico-lateral"></i><h1><?php echo $d->getTitle() ?></h1>
              </div>
              <div class="blog-as-body">
                <?php echo html_entity_decode($d->Asset->AssetContent->render()) ?>  
              </div>        
            <?php endforeach; ?>
          <?php endif;?>
        <?php endif; ?>
        <hr class="divisor"/> 
        <!--/ASSET-->
        <!--/ASSET-->
        <a id="ludovico-asset"></a>   
        <?php if(isset($displays['ludovico'])): ?>
          <?php if(count($displays['ludovico']) > 0): ?>
            <?php foreach($displays['ludovico'] as $k=>$d): ?>
              <div class="blog-as-header">
                <i class="ico-lateral"></i><h1><?php echo $d->getTitle() ?></h1>
              </div>
              <div class="blog-as-body">
                <?php echo html_entity_decode($d->Asset->AssetContent->render()) ?>  
              </div>        
            <?php endforeach; ?>
          <?php endif;?>
        <?php endif; ?>
        <hr class="divisor"/> 
        <!--/ASSET-->
        <!--/ASSET-->
        <a id="doroteia-asset"></a>    
        <?php if(isset($displays['doroteia'])): ?>
          <?php if(count($displays['doroteia']) > 0): ?>
            <?php foreach($displays['doroteia'] as $k=>$d): ?>
              <div class="blog-as-header">
                <i class="ico-lateral"></i><h1><?php echo $d->getTitle() ?></h1>
              </div>
              <div class="blog-as-body">
                <?php echo html_entity_decode($d->Asset->AssetContent->render()) ?>  
              </div>        
            <?php endforeach; ?>
          <?php endif;?>
        <?php endif; ?>
        <hr class="divisor"/> 
        <!--/ASSET-->
        <!--/ASSET-->
        <a id="filomena-asset"></a>   
        <?php if(isset($displays['filomena'])): ?>
          <?php if(count($displays['filomena']) > 0): ?>
            <?php foreach($displays['filomena'] as $k=>$d): ?>
            <div class="blog-as-header">
              <i class="ico-lateral"></i><h1><?php echo $d->getTitle() ?></h1>
            </div>
            <div class="blog-as-body">
            <?php echo html_entity_decode($d->Asset->AssetContent->render()) ?>  
            </div>        
            <?php endforeach; ?>
          <?php endif;?>
        <?php endif; ?>
        <hr class="divisor"/> 
        <!--/ASSET-->
        <!--/ASSET-->
        <a id="joao-asset"></a>   
        <?php if(isset($displays['joao'])): ?>
          <?php if(count($displays['joao']) > 0): ?>
            <?php foreach($displays['joao'] as $k=>$d): ?>
              <div class="blog-as-header">
                <i class="ico-lateral"></i><h1><?php echo $d->getTitle() ?></h1>
              </div>
              <div class="blog-as-body">
                <?php echo html_entity_decode($d->Asset->AssetContent->render()) ?>  
              </div>        
            <?php endforeach; ?>
          <?php endif;?>
        <?php endif; ?>
        <hr class="divisor"/> 
        <!--/ASSET-->
        <!--/ASSET-->
        <a id="eric-asset"></a>   
        <?php if(isset($displays['eric'])): ?>
          <?php if(count($displays['eric']) > 0): ?>
            <?php foreach($displays['eric'] as $k=>$d): ?>
              <div class="blog-as-header">
                <i class="ico-lateral"></i><h1><?php echo $d->getTitle() ?></h1>
              </div>
              <div class="blog-as-body">
                <?php echo html_entity_decode($d->Asset->AssetContent->render()) ?>  
              </div>        
            <?php endforeach; ?>
          <?php endif;?>
        <?php endif; ?>
        <hr class="divisor"/> 
        <!--/ASSET-->
        <!--/ASSET-->
        <a id="pedro-asset"></a>   
        <?php if(isset($displays['pedro'])): ?>
          <?php if(count($displays['pedro']) > 0): ?>
            <?php foreach($displays['pedro'] as $k=>$d): ?>
              <div class="blog-as-header">
                <i class="ico-lateral"></i><h1><?php echo $d->getTitle() ?></h1>
              </div>
              <div class="blog-as-body">
                <?php echo html_entity_decode($d->Asset->AssetContent->render()) ?>  
              </div>        
            <?php endforeach; ?>
          <?php endif;?>
        <?php endif; ?>
        <hr class="divisor"/> 
        <!--/ASSET--> 
        <!--/ASSET-->
        <a id="matheus-asset"></a>   
        <?php if(isset($displays['matheus'])): ?>
          <?php if(count($displays['matheus']) > 0): ?>
            <?php foreach($displays['matheus'] as $k=>$d): ?>
              <div class="blog-as-header">
                <i class="ico-lateral"></i><h1><?php echo $d->getTitle() ?></h1>
              </div>
              <div class="blog-as-body">
                <?php echo html_entity_decode($d->Asset->AssetContent->render()) ?>  
              </div>        
            <?php endforeach; ?>
          <?php endif;?>
        <?php endif; ?>
        <hr class="divisor"/> 
        <!--/ASSET-->
        <!--/ASSET-->
        <a id="julio-asset"></a>   
        <?php if(isset($displays['julio'])): ?>
          <?php if(count($displays['julio']) > 0): ?>
            <?php foreach($displays['julio'] as $k=>$d): ?>
              <div class="blog-as-header">
                <i class="ico-lateral"></i><h1><?php echo $d->getTitle() ?></h1>
              </div>
              <div class="blog-as-body">
                <?php echo html_entity_decode($d->Asset->AssetContent->render()) ?>  
              </div>        
            <?php endforeach; ?>
          <?php endif;?>
        <?php endif; ?>
        <hr class="divisor"/> 
        <!--/ASSET-->
        <!--/ASSET-->
        <a id="lilica-asset"></a>   
        <?php if(isset($displays['lilica'])): ?>
          <?php if(count($displays['lilica']) > 0): ?>
            <?php foreach($displays['lilica'] as $k=>$d): ?>
              <div class="blog-as-header">
                <i class="ico-lateral"></i><h1><?php echo $d->getTitle() ?></h1>
              </div>
              <div class="blog-as-body">
                <?php echo html_entity_decode($d->Asset->AssetContent->render()) ?>  
              </div>        
            <?php endforeach; ?>
          <?php endif;?>
        <?php endif; ?>
        <hr class="divisor"/> 
        <!--/ASSET-->
        <!--/ASSET-->
        <a id="caco-asset"></a>   
        <?php if(isset($displays['caco'])): ?>
          <?php if(count($displays['caco']) > 0): ?>
            <?php foreach($displays['caco'] as $k=>$d): ?>
              <div class="blog-as-header">
                <i class="ico-lateral"></i><h1><?php echo $d->getTitle() ?></h1>
              </div>
              <div class="blog-as-body">
                <?php echo html_entity_decode($d->Asset->AssetContent->render()) ?>  
              </div>        
            <?php endforeach; ?>
          <?php endif;?>
        <?php endif; ?>
        <!--/ASSET-->    
      </div>
      <!--/BLOG-AS-->
    </div>
    <!--/DICAS-AS-->
   </div>
  <!--/CAPA-SITE-->
</div>
<!--/CONTANER-->
<script>
  $(document).ready(function(){
    goTop('osorio-asset')
    $('a[id|=btn]').hover(function(){
      $(this).prev('.btn-hover-as').css('display','block');
    });
    $('.btn-hover-as').mouseout(function(){
      $(this).not('.selected').css('display','none');
    });
    $('.btn-hover-as').click(function(){
      //alert($(this).attr('name'))
      $('.btn-hover-as').css('display','none').removeClass('selected');
      $(this).addClass('selected');
      goTop($(this).attr('name'));
    });
    function goTop(id){
      $('#'+id).ScrollTo({
       duration: 1500,
       onlyIfOutside: true
      });
    }
  });
</script>