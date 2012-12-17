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
    <?php
    $arrayNome      = array("osorio", "teobaldo", "ludovico", "doroteia", "filomena", "joao", "eric", "pedro", "matheus", "julio", "lilica", "caco");
    $arrayNomeExibi = array("Osório", "Teobaldo", "Ludovico", "Dorotéia", "Filomena", "João", "Eric", "Pedro", "Matheus", "Júlio", "Lilica", "Caco")
    ?>
    <!--DICAS-AS-->
    <div id="dica-as">
      <!--BOTOES PERSONAGENS-->
      <ul>
        <?php for($i=0;$i<count($arrayNome); $i++): ?>
   
            <li class="<?php if($i==0) echo "first";?>">
              <div class="btn-hover-as <?php if($i==0) echo "selected";?>" name="<?php echo $arrayNome[$i]?>-asset" title="<?php echo $arrayNomeExibi[$i]?>"></div>
              <?php if($arrayNome != 'filomena' || $arrayNome != 'lilica'):?>
              <a href="#" id="btn-<?php echo $arrayNome[$i]?>-as"></a>
              <?php else:?>
              <a href="#" id="btn-<?php echo $arrayNome[$i]?>-as" style="opacity: 0.5;"></a>
              <?php endif;?>
            </li>
        <?php endfor;?>
      </ul>
      <!--/BOTOES PERSONAGENS-->
      <!--BLOG-AS-->
      <div id="blog-as">
        <!--DIV NAO APAGAR-->
        <div style="padding:1px"></div>
        <!--/DIV NAO APAGAR-->
        <?php
        for($j=0;$j<count($arrayNome); $j++):
        $nome = $arrayNome[$j];
        ?>
          <!--ASSET-->
          <a id="<?php echo $arrayNome[$j]?>-asset"></a> 
            <?php if(isset($displays[$nome])): ?>
              <?php if(count($displays[$nome]) > 0): ?>
                <?php foreach($displays[$nome] as $k=>$d): ?>
                  <div class="blog-as-header">
                    <i class="ico-lateral"></i><h1><?php echo $d->getTitle() ?></h1>
                  </div>
                  <div class="blog-as-body">
                    <?php echo html_entity_decode($d->Asset->AssetContent->render()) ?>  
                  </div>        
                <?php endforeach; ?>
              <hr class="divisor"/> 
              <?php endif;?>
            <?php endif; ?>
   
          <!--ASSET-->
        <?php endfor;?>
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