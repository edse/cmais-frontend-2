<link href="/portal/css/tvcultura/sites/cocorico/home.css" rel="stylesheet">

<style type="text/css">
/* tooltip*/
.tooltip-inner { background:#747a3a; padding:3px 10px; font-size: 13px; line-height:15px; }
.tooltip.in,
.tooltip { opacity: 1; filter: alpha(opacity=100);}
.tooltip.bottom .tooltip-arrow {  border-bottom-color: #747a3a;}
/* tooltip*/
</style>

<!-- container-->
<div class="container tudo">
  <!-- row carrossel-->
  <div class="row-fluid">
  	 <?php if(isset($displays['destaque-topo'])): ?>
      <?php if(count($displays['destaque-topo']) > 0): ?>
      <div class="span12">
        <div id="myCarousel" class="carousel slide span12">
          <!-- Carousel items -->
          <div class="carousel-inner"> 
          	<?php foreach($displays['destaque-topo'] as $k=>$d): ?>  
            <div class="<?php if($k==0): ?>active <?php endif; ?>item ">
              <a href="<?php echo $d->getHeadline() ?>" title="<?php echo $d->getTitle() ?>"><img src="<?php echo $d->Asset->retriveImageUrlByImageUsage('original') ?>" class="span12"/></a>
            </div>
             <?php endforeach; ?>       
          </div>
          <!-- Carousel nav -->
          <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
          <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
        </div>
      </div>
      <?php endif; ?>
    <?php endif; ?>
    <div class="divisoria span12"></div>
  </div>
  <!-- /row carrossel-->
  
  <!-- row-->
  <div class="row-fluid menu">
    <div class="navbar">
      <!--menu principal-->
      <?php include_partial_from_folder('sites/cocorico', 'global/menu', array('site'=>$site)) ?>
      <!--/menu principal-->
      <!--menu personagens -->
      <?php include_partial_from_folder('sites/cocorico', 'global/personagens', array('site'=>$site)) ?>
      <!--/menu personagens -->
    </div>
  </div>
  <!-- /row-->
  
  <!--row-->
  <div class="row-fluid conteudo">
    <div class="span8 col-esq">
    	<?php /*
    	<!--joguinhos e receitinhas-->
    	<?php if(isset($displays['destaque-principal'])):?>
        <?php if(count($displays['destaque-principal']) > 0): ?> 	
          
          <?php 
          $secao = $displays['destaque-principal'][0]->Asset->getSections();
          $secao_destaque = $secao[0]; 
          ?>
          
         	 <?php $related = $d->Asset->retriveRelatedAssetsByRelationType('Preview'); ?>
          	<?php if(count($related) > 0): ?>
          			
      		<div class="destaque-home <?php if($secao_destaque=='joguinhos'): ?>joguinhos<?php endif; ?><?php if($secao_destaque=='receitinhas'): ?>receitinhas<?php endif; ?>">
              <a href="/cocorico2/<?php if($secao_destaque=='joguinhos'): ?>joguinhos<?php endif; ?><?php if($secao_destaque=='receitinhas'): ?>receitinhas<?php endif; ?>" class="span9"><img class="span12" src="<?php echo $related[0]->retriveImageUrlByImageUsage('original') ?>" alt="<?php echo $displays['destaque-principal'][0]->getTitle() ?>" /></a>
              <div class="box span3 <?php if($secao_destaque=='joguinhos'): ?>joguinhos<?php endif; ?><?php if($secao_destaque=='receitinhas'): ?>receitinhas<?php endif; ?>">
                <span class="mais"></span>
                <div class="tit"><a href="/cocorico2/<?php if($secao_destaque=='joguinhos'): ?>joguinhos<?php endif; ?><?php if($secao_destaque=='receitinhas'): ?>receitinhas<?php endif; ?>"><?php if($secao_destaque=='joguinhos'): ?>Joguinhos<?php endif; ?><?php if($secao_destaque=='receitinhas'): ?>Receitinhas<?php endif; ?></a><span></span></div>
                <ul>
                  <li><a href="/cocorico2/<?php if($secao_destaque=='joguinhos'): ?>joguinhos<?php endif; ?><?php if($secao_destaque=='receitinhas'): ?>receitinhas<?php endif; ?>" title="<?php echo $displays['destaque-principal'][1]->getTitle() ?>"><img class="span12" src="<?php echo $related[1]->retriveImageUrlByImageUsage('original') ?>" alt="<?php echo $displays['destaque-principal'][1]->getTitle() ?>" /><?php echo $displays['destaque-principal'][1]->getTitle() ?></a></li>
                  <li><a href="/cocorico2/<?php if($secao_destaque=='joguinhos'): ?>joguinhos<?php endif; ?><?php if($secao_destaque=='receitinhas'): ?>receitinhas<?php endif; ?>" title="<?php echo $displays['destaque-principal'][2]->getTitle() ?>"><img class="span12" src="<?php echo $related[2]->retriveImageUrlByImageUsage('original') ?>" alt="<?php echo $displays['destaque-principal'][2]->getTitle() ?>" /><?php echo $displays['destaque-principal'][2]->getTitle() ?></a></li>
                </ul>
              </div>
            </div>
            <?php endif;?>
         
        <?php endif; ?>
      <?php endif; ?>
      <!--/joguinhos e receitinhas-->
       */ ?>
      <?php if(isset($displays['destaque-principal-joguinhos'])):?>
        <?php if(count($displays['destaque-principal-joguinhos']) > 0): ?>
          <?php $related = $displays['destaque-principal-joguinhos'][0]->Asset->retriveRelatedAssetsByRelationType('Preview'); ?>
          
      <div class="destaque-home joguinhos span12">
        <?php if(count($related) > 0): ?>
        <a href="<?php echo $displays['destaque-principal-joguinhos'][0]->retriveUrl() ?>" class="span9" title="<?php echo $displays['destaque-principal-joguinhos'][0]->getTitle() ?>"><img class="span12" src="<?php echo $related[0]->retriveImageUrlByImageUsage('original') ?>" alt="<?php echo $displays['destaque-principal-joguinhos'][0]->getTitle() ?>" /></a>
        <?php endif; ?>
        <div class="box span3">
          <span class="mais"></span>
          <div class="tit"><a href="<?php echo $site->retriveUrl() ?>/joguinhos">Joguinhos</a><span></span></div>
          <ul>
            <?php $related = $displays['destaque-principal-joguinhos'][1]->Asset->retriveRelatedAssetsByRelationType('Preview'); ?>
            <?php if(count($related) > 0): ?>
            <li><a href="<?php echo $displays['destaque-principal-joguinhos'][1]->retriveUrl() ?>" title="<?php echo $displays['destaque-principal-joguinhos'][1]->getTitle() ?>"><img class="span12" src="<?php echo $related[0]->retriveImageUrlByImageUsage('original') ?>" alt="<?php echo $displays['destaque-principal-joguinhos'][1]->getTitle() ?>" /><?php echo $displays['destaque-principal-joguinhos'][1]->getTitle() ?></a></li>
            <?php endif; ?>
            <?php $related = $displays['destaque-principal-joguinhos'][2]->Asset->retriveRelatedAssetsByRelationType('Preview'); ?>
            <?php if(count($related) > 0): ?>
            <li><a href="<?php echo $displays['destaque-principal-joguinhos'][2]->retriveUrl() ?>" title="<?php echo $displays['destaque-principal-joguinhos'][2]->getTitle() ?>"><img class="span12" src="<?php echo $related[0]->retriveImageUrlByImageUsage('original') ?>" alt="<?php echo $displays['destaque-principal-joguinhos'][2]->getTitle() ?>" /><?php echo $displays['destaque-principal-joguinhos'][2]->getTitle() ?></a></li>
            <?php endif; ?>
          </ul>
        </div>
      </div>
      
        <?php endif; ?>
      <?php endif; ?>

      <?php if(isset($displays['destaque-principal-receitinhas'])):?>
        <?php if(count($displays['destaque-principal-receitinhas']) > 0): ?>
          <?php $related = $displays['destaque-principal-receitinhas'][0]->Asset->retriveRelatedAssetsByRelationType('Preview'); ?>
          

      <div class="destaque-home receitinhas span12">
      
        <?php if(count($related) > 0): ?>
        <a href="<?php echo $displays['destaque-principal-receitinhas'][0]->retriveUrl() ?>" class="span9" title="<?php echo $displays['destaque-principal-receitinhas'][0]->getTitle() ?>"><img class="span12" src="<?php echo $related[0]->retriveImageUrlByImageUsage('original') ?>" alt="<?php echo $displays['destaque-principal-receitinhas'][0]->getTitle() ?>" /></a>
        <?php endif; ?>
        <div class="box span3">
          <span class="mais"></span>
          <div class="tit"><a href="<?php echo $site->retriveUrl() ?>/receitinhas">Receitinhas</a><span></span></div>
          <ul>
            <?php $related = $displays['destaque-principal-receitinhas'][1]->Asset->retriveRelatedAssetsByRelationType('Preview'); ?>
            <?php if(count($related) > 0): ?>
            <li><a href="<?php echo $displays['destaque-principal-receitinhas'][1]->retriveUrl() ?>" title="<?php echo $displays['destaque-principal-receitinhas'][1]->getTitle() ?>"><img class="span12" src="<?php echo $related[0]->retriveImageUrlByImageUsage('original') ?>" alt="<?php echo $displays['destaque-principal-receitinhas'][1]->getTitle() ?>" /><?php echo $displays['destaque-principal-receitinhas'][1]->getTitle() ?></a></li>
            <?php endif; ?>
            <?php $related = $displays['destaque-principal-receitinhas'][2]->Asset->retriveRelatedAssetsByRelationType('Preview'); ?>
            <?php if(count($related) > 0): ?>
            <li><a href="<?php echo $displays['destaque-principal-receitinhas'][2]->retriveUrl() ?>" title="<?php echo $displays['destaque-principal-receitinhas'][2]->getTitle() ?>"><img class="span12" src="<?php echo $related[0]->retriveImageUrlByImageUsage('original') ?>" alt="<?php echo $displays['destaque-principal-receitinhas'][2]->getTitle() ?>" /><?php echo $displays['destaque-principal-receitinhas'][2]->getTitle() ?></a></li>
            <?php endif; ?>
          </ul>
        </div>
      </div>
      
        <?php endif; ?>
      <?php endif; ?>
       
      <div class="span12">
        <?php if(isset($displays['destaque-2'])):?>
          <?php if(count($displays['destaque-2']) > 0): ?>
          <a class="box destaques span6" href="<?php echo $displays['destaque-2'][0]->retriveUrl() ?>" title="<?php echo $displays['destaque-2'][0]->getTitle() ?>">
            <p class="bold">
              <?php echo $displays['destaque-2'][0]->getTitle() ?>
            </p>
            <?php
              $display_img_src = $displays['destaque-2'][0]->retriveImageUrlByImageUsage('original');
              if ($display_img_src == '') {
                $related = $displays['destaque-2'][0]->Asset->retriveRelatedAssetsByRelationType('Preview');
                $display_img_src = $related[0]->retriveImageUrlByImageUsage('original');
              }
            ?>
            <?php if($display_img_src != ''): ?>
            <img class="span12" src="<?php echo $display_img_src ?>" alt="<?php echo $displays['destaque-2'][0]->getTitle() ?>" /><?php echo $displays['destaque-2'][0]->getTitle() ?>
            <i class="ico-mais"></i>
            <?php endif; ?>
            
          </a>
          <?php endif; ?>
        <?php endif; ?>
        
        <?php if(isset($displays['destaque-3'])):?>
          <?php if(count($displays['destaque-3']) > 0): ?>
        <a class="box destaques span6" href="<?php echo $displays['destaque-3'][0]->retriveUrl() ?>" title="<?php echo $displays['destaque-3'][0]->getTitle() ?>">
          <p class="bold">
            <?php echo $displays['destaque-3'][0]->getTitle() ?>
          </p>
          <?php
            $display_img_src = $displays['destaque-3'][0]->retriveImageUrlByImageUsage('original');
            if ($display_img_src == '') {
              $related = $displays['destaque-3'][0]->Asset->retriveRelatedAssetsByRelationType('Preview');
              $display_img_src = $related[0]->retriveImageUrlByImageUsage('original');
            }
          ?>
          <?php if($display_img_src != ''): ?>
          <img class="span12" src="<?php echo $display_img_src ?>" alt="<?php echo $displays['destaque-3'][0]->getTitle() ?>" /><?php echo $displays['destaque-3'][0]->getTitle() ?>
          <i class="ico-mais"></i> 
          <?php endif; ?>
        </a>
          <?php endif; ?>
        <?php endif; ?>
      </div>
    </div>
    <div class="span4 col-dir">
      <a class="logo" href="<?php echo $site->retriveUrl() ?>/tvcocorico2">
        <img class="span12" src="/portal/images/capaPrograma/cocorico2/tvcoco.png" />
      </a>
      <div class="tvcoco span12">
        <h2><i class="icon-star-empty"></i>Próximo Convidado<i class="icon-star-empty"></i></h2>
        <?php if(isset($displays['destaque-tv-cocorico'])):?>
          <?php if(count($displays['destaque-tv-cocorico']) > 0): ?>
            <?php
              $display_img_src = $displays['destaque-tv-cocorico'][0]->retriveImageUrlByImageUsage('original');
              if ($display_img_src == '') {
                $related = $displays['destaque-tv-cocorico'][0]->Asset->retriveRelatedAssetsByRelationType('Preview');
                $display_img_src = $related[0]->retriveImageUrlByImageUsage('original');
              }
            ?>
            
        <a class="convidado span12" href="<?php echo $displays['destaque-tv-cocorico'][0]->retriveUrl() ?>" title="Próximo convidado: <?php echo $displays['destaque-tv-cocorico'][0]->getTitle() ?>"><img src="<?php echo $display_img_src ?>" alt="<?php echo $displays['destaque-tv-cocorico'][0]->getTitle() ?>" /><?php echo $displays['destaque-tv-cocorico'][0]->getTitle() ?><span class="mais"></span></a>
          <?php endif; ?>
        <?php endif; ?>
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
          <form method="post" id="e<?php echo $respostas[0]->Asset->getId()?>" class="form-voto navbar-form pull-left span12" style="min-width:296px; ">
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
          <form class="navbar-form pull-left inativo span12" style="display: none;">
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
    </div>
  </div>
  
  <!-- rodapé-->
  <div class="row-fluid  border-top"></div>
  <?php include_partial_from_folder('sites/cocorico', 'global/rodape') ?>
  <!--/rodapé-->
</div>
<!-- /container-->
<!-- script enquete -->
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
<!--/script enquete -->