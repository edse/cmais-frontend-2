<?php use_helper('I18N', 'Date') ?>
<?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'section' => $section)) ?>

<!-- Le styles--> 
<link href="/portal/css/tvcultura/sites/cocorico2/geral.css" rel="stylesheet">
<link href="/portal/css/tvcultura/sites/cocorico2/media.css" rel="stylesheet">
<link href="/portal/css/tvcultura/sites/cocorico2/home.css" rel="stylesheet">
<script src="/portal/js/jquery-1.7.2.min.js" type="text/javascript"></script>

<?php use_helper('I18N', 'Date') ?>
<script type="text/javascript">  
  $(document).ready(function() {
    $('.btn-tooltip').tooltip();
  }); 
</script>
<!-- container-->
<div class="container tudo">
  <!-- row-->  
  <div class="row-fluid">  
    <?php if(isset($displays['destaque-topo'])): ?>
      <?php if(count($displays['destaque-topo']) > 0): ?>
        <div class="span12">
          <div id="myCarousel" class="carousel slide span12">
            <!-- Carousel items -->
            <div class="carousel-inner">
            	<?php foreach($displays['destaque-topo'] as $k=>$d): ?>    
              <div class=<?php if($k==0): ?>active<?php endif; ?> item>
                <a href="<?php echo $d->getHeadline() ?>" title="<?php echo $d->getTitle() ?>"><img src="<?php echo $d->Asset->retriveImageUrlByImageUsage('original') ?>" class="<?php echo $d->getTitle() ?>"/></a>
              </div>
              
            </div>
            	<?php endforeach; ?>
            <!-- Carousel nav -->
            <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
            <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
          </div>
        </div>    
      <?php endif; ?>
    <?php endif; ?>
    <div class="divisoria span12"></div>
  </div>
  <!-- /row-->
  <!-- row-->
  <div class="row-fluid menu">
    <div class="navbar">
    	    	
 	<?php include_partial_from_folder('sites/cocorico2', 'global/menu') ?>
            
      <?php include_partial_from_folder('sites/cocorico2', 'global/personagens', array('siteSections' => $siteSections, 'displays' => $displays, 'section'=>$section, 'uri'=>$uri, 'site'=>$site)) ?>
    
    </div>
  </div>
  <!-- /row-->
  <!--row conteudo-->
  <div class="row-fluid conteudo">
    <!--coluna esquerda-->
    <div class="span8 col-esq">
      <!--destaque principal-->
      <?php if(isset($displays['destaque-principal'])):?>
        <?php if(count($displays['destaque-principal']) > 0): ?> 	
          <?php 
          foreach($displays['destaque-principal'] as $k=>$d):
          $secao = $displays['destaque-principal'] -> getSections();
          $secao_destaque = $secao[0];
          ?>
            <div class="destaque-home <?php if($secao_destaque=='joguinhos'): ?>joguinhos<?php endif; ?><?php if($secao_destaque=='receitinhas'): ?>receitinhas<?php endif; ?>">
              <a href="/cocorico2/<?php if($secao_destaque=='joguinhos'): ?>joguinhos<?php endif; ?><?php if($secao_destaque=='receitinhas'): ?>receitinhas<?php endif; ?>" class="span9"><img class="span12" src="/portal/images/capaPrograma/cocorico2/jogo-home.jpg" alt="<?php echo $displays['destaque-principal'][0]->getTitle() ?>" /></a>
              <div class="box span3 <?php if($secao_destaque=='joguinhos'): ?>joguinhos<?php endif; ?><?php if($secao_destaque=='receitinhas'): ?>receitinhas<?php endif; ?>">
                <span class="mais"></span>
                <div class="tit"><a href="/cocorico2/<?php if($secao_destaque=='joguinhos'): ?>joguinhos<?php endif; ?><?php if($secao_destaque=='receitinhas'): ?>receitinhas<?php endif; ?>"><?php if($secao_destaque=='joguinhos'): ?>Joguinhos<?php endif; ?><?php if($secao_destaque=='receitinhas'): ?>Receitinhas<?php endif; ?></a><span></span></div>
                <ul>
                  <li><a href="/cocorico2/<?php if($secao_destaque=='joguinhos'): ?>joguinhos<?php endif; ?><?php if($secao_destaque=='receitinhas'): ?>receitinhas<?php endif; ?>" title="<?php echo $displays['destaque-principal'][1]->getTitle() ?>"><img class="span12" src="<?php echo $displays['destaque-principal'][1]->Asset->retriveImageUrlByImageUsage('original') ?>" alt="<?php echo $displays['destaque-principal'][1]->getTitle() ?>" /><?php echo $displays['destaque-principal'][1]->getTitle() ?></a></li>
                  <li><a href="/cocorico2/<?php if($secao_destaque=='joguinhos'): ?>joguinhos<?php endif; ?><?php if($secao_destaque=='receitinhas'): ?>receitinhas<?php endif; ?>" title="<?php echo $displays['destaque-principal'][2]->getTitle() ?>"><img class="span12" src="<?php echo $displays['destaque-principal'][2]->Asset->retriveImageUrlByImageUsage('original') ?>" alt="<?php echo $displays['destaque-principal'][2]->getTitle() ?>" /><?php echo $displays['destaque-principal'][2]->getTitle() ?></a></li>
                </ul>
              </div>
            </div>
          <?php endforeach; ?>
        <?php endif; ?>
      <?php endif; ?>
      <!--/destaque principal--> 
      <!--destaques-->
      <div class="span12">
        <!--destaque 2-->
        <?php if(isset($displays['destaque-2'])):?>
    	    <?php if(count($displays['destaque-2']) > 0): ?>
            <?php foreach($displays['destaque-2'] as $k=>$d): ?>
              <a class="box destaques span6" href="<?php echo $d->RetriveUrl() ?>" title="jogo">
                <bold><?php echo $d->getHeadline() ?></bold>
                <img class="span12" src="<?php echo $d->Asset->retriveImageUrlByImageUsage('original')?>" alt="<?php echo $d->getTitle() ?>" /><?php echo $d->getTitle() ?><span></span>
              </a>
            <?php endforeach; ?>
          <?php endif; ?>
        <?php endif; ?> 
        <!--/destaque 2-->
        <!--destaque 3-->       
        <?php if(isset($displays['destaque-3'])):?>
  	      <?php if(count($displays['destaque-3']) > 0): ?>
  	        <?php foreach($displays['destaque-3'] as $k=>$d): ?>
              <a class="box destaques span6" href="<?php echo $d->retriveUrl() ?>" title="<?php echo $d->getTitle() ?>">
                <bold><?php echo $d->getHeadline() ?></bold>
                <img class="span12" src="<?php echo $d->Asset->retriveImageUrlByImageUsage('original') ?>" alt="<?php echo $d->getTitle() ?>" /><?php echo $d->getTitle() ?><span></span>
              </a>
            <?php endforeach; ?>
          <?php endif; ?>
        <?php endif; ?>
      </div> 
      <!--/destaques-->           
    </div>
    <!--/coluna esquerda-->
    <!--coluna direita-->
    <div class="span4 col-dir">
      <a class="logo" href="/cocorico2/tvcocorico2"><img class="span12" src="/portal/images/capaPrograma/cocorico2/tvcoco.png" /></a>
      <!-- tv coco -->
      <div class="tvcoco span12">
        <!--convidado-->
        <?php if(isset($displays['tv-cocorico2'])):?>
    	    <?php if(count($displays['tv-cocorico2']) > 0): ?>
    	      <?php foreach($displays['tv-cocorico2'] as $k=>$d): ?>
              <h2><i class="icon-star-empty"></i><?php echo $d->getHeadline() ?><i class="icon-star-empty"></i></h2>
              <a class="convidado span12" href="/cocorico2/tvcocorico2/convidado" title=""><img src="<?php echo $d->Asset->retriveImageUrlByImageUsage ?>" alt="<?php echo $d->getTitle() ?>" /> <?php echo $d->getTitle() ?><span class="mais"></span></a>
            <?php endforeach; ?>
          <?php endif; ?>
        <?php endif; ?> 
        <!--/convidado-->
        
        <!--ENQUETE-->
       
        <!--/ENQUETE-->
      </div>
      <!-- /tvcoco-->
    </div>
    <!--/coluna direita-->
  </div>
  <!--row conteudo-->
  <!-- /row-->
  <div class="row-fluid  border-top"></div>
  <?php include_partial_from_folder('sites/cocorico2', 'global/rodape', array('siteSections' => $siteSections, 'displays' => $displays, 'section'=>$section, 'uri'=>$uri)) ?>
  <!--row-->
</div>
<!-- /container-->
<script type="text/javascript" src="/portal/js/validate/jquery.validate.js"></script>
<script>
$(document).ready(function(){
  $('#votar-input').click(function(){
    $('label.error').css('display','none');
  });
  //valida form
  var validator = $('.form-voto').validate({
    submitHandler: function(form){
      sendAnswer()
    },
    rules:{
        opcao:{
          required: true
        }
      },
      messages:{
        opcao: ""
      }
    });
});
//enviar voto
function sendAnswer(){
  $.ajax({
    type: "POST",
    dataType: "json",
    data: $("#e<?php echo $respostas[0]->Asset->getId()?>").serialize(),
    url: "<?php echo url_for('homepage')?>ajax/enquetes",
    beforeSend: function(){
      $('.votar').hide();
      $('#ajax-loader').show();
    },
    success: function(data){
      $(".form-voto").hide();
      $("form.inativo").fadeIn("fast");
      var i=0;
      $.each(data, function(key, val) {
        
        $('.resposta-'+i).html(val.votes);
        i++;
      });
    }
  });
  
}
</script>