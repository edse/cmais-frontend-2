<?php use_helper('I18N', 'Date') ?>

<!-- Le styles--> 
<link href="/portal/css/tvcultura/sites/cocorico/home.css" rel="stylesheet">

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
              <div class=<?php if($k==1): ?>active<?php endif; ?> item>
                <a href="<?php echo $d->getHeadline() ?>" title="<?php echo $d->getTitle() ?>"><img src="<?php echo $displays->retriveImageUrlByImageUsage('original') ?>" class="<?php echo $d->getTitle() ?>"/></a>
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
                  <li><a href="/cocorico2/<?php if($secao_destaque=='joguinhos'): ?>joguinhos<?php endif; ?><?php if($secao_destaque=='receitinhas'): ?>receitinhas<?php endif; ?>" title="<?php echo $displays['destaque-principal'][1]->getTitle() ?>"><img class="span12" src="<?php echo $displays['destaque-principal'][1]->$d->retriveImageUrlByImageUsage ?>" alt="<?php echo $displays['destaque-principal'][1]->getTitle() ?>" /><?php echo $displays['destaque-principal'][1]->getTitle() ?></a></li>
                  <li><a href="/cocorico2/<?php if($secao_destaque=='joguinhos'): ?>joguinhos<?php endif; ?><?php if($secao_destaque=='receitinhas'): ?>receitinhas<?php endif; ?>" title="<?php echo $displays['destaque-principal'][2]->getTitle() ?>"><img class="span12" src="<?php echo $displays['destaque-principal'][2]->$d->retriveImageUrlByImageUsage ?>" alt="<?php echo $displays['destaque-principal'][2]->getTitle() ?>" /><?php echo $displays['destaque-principal'][2]->getTitle() ?></a></li>
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
              <a class="box destaques span6" href="<?php echo $d->retriveImageUrlByImageUsage('original') ?>" title="jogo">
                <bold><?php echo $d->getHeadline() ?></bold>
                <img class="span12" src="<?php echo $displays->retriveImageUrlByImageUsage('original') ?>" alt="<?php echo $d->getTitle() ?>" /><?php echo $d->getTitle() ?><span></span>
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
                <img class="span12" src="<?php echo $d->retriveImageUrlByImageUsage ?>" alt="<?php echo $d->getTitle() ?>" /><?php echo $d->getTitle() ?><span></span>
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
      <a class="logo" href="/cocorico2/tvcocorico"><img class="span12" src="/portal/images/capaPrograma/cocorico2/tvcoco.png" /></a>
      <!-- tv coco -->
      <div class="tvcoco span12">
        <!--convidado-->
        <?php if(isset($displays['tv-cocorico'])):?>
    	    <?php if(count($displays['tv-cocorico']) > 0): ?>
    	      <?php foreach($displays['tv-cocorico'] as $k=>$d): ?>
              <h2><i class="icon-star-empty"></i><?php echo $d->getHeadline() ?><i class="icon-star-empty"></i></h2>
              <a class="convidado span12" href="/cocorico2/tvcocorico/convidado" title=""><img src="<?php echo $d->retriveImageUrlByImageUsage ?>" alt="<?php echo $d->getTitle() ?>" /> <?php echo $d->getTitle() ?><span class="mais"></span></a>
            <?php endforeach; ?>
          <?php endif; ?>
        <?php endif; ?> 
        <!--/convidado-->
        <!--ENQUETE-->
        <?php
        //pergunta bloco enquete - 1º destaque
        $q = $displays["enquete"][0]->Asset->AssetQuestion->getQuestion();
        
        //doctrine para respostas
        $respostas = Doctrine_Query::create()
          ->select('aa.*')
          ->from('AssetAnswer aa')
          ->where('aa.asset_question_id = ?', (int)$displays["enquete"][0]->Asset->AssetQuestion->id)
          ->execute();
          
        //imagens respectivas das respostas
        $imgs = $respostas[0]->Asset->retriveRelatedAssetsByAssetTypeId(2);
        $img_0 = "http://midia.cmais.com.br/assets/image/original/".$imgs[0]->AssetImage->file.".jpg";
        $imgs = $respostas[1]->Asset->retriveRelatedAssetsByAssetTypeId(2);
        $img_1 = "http://midia.cmais.com.br/assets/image/original/".$imgs[0]->AssetImage->file.".jpg";
		
        ?>
         <div class="enquete span12">
          <h3>enquete do dia</h3>
          <p><?php echo $q;?></p>
          <!--Pergunta-->
          <form method="post" id="e<?php echo $respostas[0]->Asset->getId()?>" class="form-voto navbar-form pull-left" style="min-width:296px; ">
            <?php 
            $form = new BaseForm();
            echo $form->renderHiddenFields();
            ?>
            <div class="versus"></div>
            <?php for($i=0; $i<count($respostas); $i++): ?>
            <div class="span6 <?php if($i>0)echo "last"?>">
              <label class="radio" for="resposta<?php echo $i?>">
                <input type="radio" name="opcao" id="resposta<?php echo $i?>" class="resposta required" value="<?php echo $respostas[$i]->Asset->AssetAnswer->id ?>"  />
                <?php echo $respostas[$i]->Asset->AssetAnswer->getAnswer() ?>
                <?php if($i==0){$img = $img_0;}else{$img = $img_1;}?>
                <div class="capa-img"><img class="" src="<?php echo $img; ?>" alt="" /></div>
              </label>
              
              
            </div>
            <?php endfor; ?>
            <img src="/portal/images/ajax-loader.gif" alt="computando voto..." width="16px" height="16px" id="ajax-loader" style="display:none;" />
            <div class="votar span12">
              <span></span>
              <input id="votar-input" class="span11" type="submit" value="votar" />
              <span class="last"></span>
              
            </div>
          </form>
          
          <!--/Pergunta-->
          <!--Resposta FORM INATIVA-->
          <form class="navbar-form pull-left inativo" style="display: none;">
            <div class="versus"></div>
            <?php for($i=0; $i<count($respostas); $i++): ?>
            <div class="span6 <?php if($i>0)echo "last"?>">
              <label class="radio"><?php echo $respostas[$i]->Asset->AssetAnswer->getAnswer() ?></label>
              <?php if($i==0){$img = $img_0;}else{$img = $img_1;}?>
              <div class="capa-img"><img class="span12" src="<?php echo $img; ?>" alt="" /></div>
              <p class="resposta-<?php echo $i?>">50%</p>
            </div>
            <?php endfor;?>
            <a href="#" title="Ver enquetes anteriores">Ver enquetes anteriores</a>
          </form>
          <!--/Resposta-->
        </div>
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