<link href="http://cmais.com.br/portal/css/tvcultura/sites/cocorico/home.css" rel="stylesheet">

<style type="text/css">
/* tooltip*/
.tooltip-inner { background:#747a3a; padding:3px 10px; font-size: 13px; line-height:15px; }
.tooltip.in,
.tooltip { opacity: 1; filter: alpha(opacity=100);}
.tooltip.bottom .tooltip-arrow {  border-bottom-color: #747a3a;}
/* tooltip*/
</style>

<script>
  $(document).ready(function(){
    alert("teste"+$(window).width()+"/"+$('body').width()+"/"+$(document).width());
  })
</script>

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
              <a href="<?php echo $d->getUrl() ?>" title="<?php echo $d->getTitle() ?>"><img src="<?php echo $d->Asset->retriveImageUrlByImageUsage('original') ?>" class="span12" alt="<?php echo $d->getTitle() ?>"/></a>
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
        <a href="<?php echo $displays['destaque-principal-joguinhos'][0]->retriveUrl() ?>" class="span9" title="<?php echo $displays['destaque-principal-joguinhos'][0]->getTitle() ?>">
          <img class="span12" src="<?php echo $related[0]->retriveImageUrlByImageUsage('image-5-b') ?>" alt="<?php echo $displays['destaque-principal-joguinhos'][0]->getTitle() ?>" />
        </a>
        <?php endif; ?>
        <div class="box span3">
          <span class="mais"></span>
          <div class="tit"><a href="<?php echo $site->retriveUrl() ?>/joguinhos">Joguinhos</a><span></span></div>
          <ul>
            <?php $related = $displays['destaque-principal-joguinhos'][1]->Asset->retriveRelatedAssetsByRelationType('Preview'); ?> 
            <?php if(count($related) > 0): ?>
            <li>
              <a href="<?php echo $displays['destaque-principal-joguinhos'][1]->retriveUrl() ?>" title="<?php echo $displays['destaque-principal-joguinhos'][1]->getTitle() ?>">
                <img class="span12" src="<?php echo $related[0]->retriveImageUrlByImageUsage('image-5-b') ?>" alt="<?php echo $displays['destaque-principal-joguinhos'][1]->getTitle() ?>" />
                <?php //echo $displays['destaque-principal-joguinhos'][1]->getTitle() ?>
                <?php $tam=18; $str=$displays['destaque-principal-joguinhos'][1]->getTitle(); mb_internal_encoding("UTF-8"); if(strlen($str) <= $tam) echo $str; else echo mb_substr($str, 0, $tam-1)."&hellip;" ?>
              </a>
            </li>
            <?php endif; ?>
            <?php $related = $displays['destaque-principal-joguinhos'][2]->Asset->retriveRelatedAssetsByRelationType('Preview'); ?>
            <?php if(count($related) > 0): ?>
            <li>
              <a href="<?php echo $displays['destaque-principal-joguinhos'][2]->retriveUrl() ?>" title="<?php echo $displays['destaque-principal-joguinhos'][2]->getTitle() ?>">
                <img class="span12" src="<?php echo $related[0]->retriveImageUrlByImageUsage('image-5-b') ?>" alt="<?php echo $displays['destaque-principal-joguinhos'][2]->getTitle() ?>" />
                <?php //echo $displays['destaque-principal-joguinhos'][2]->getTitle() ?>
                <?php $tam=18; $str=$displays['destaque-principal-joguinhos'][2]->getTitle(); mb_internal_encoding("UTF-8"); if(strlen($str) <= $tam) echo $str; else echo mb_substr($str, 0, $tam-1)."&hellip;" ?>
             </a>
            </li>
            <?php endif; ?>
          </ul>
        </div>
      </div>
      
        <?php endif; ?>
      <?php endif; ?>

      <?php if(isset($displays['destaque-principal-brincadeiras'])):?>
        <?php if(count($displays['destaque-principal-brincadeiras']) > 0): ?>
          <?php $related = $displays['destaque-principal-brincadeiras'][0]->Asset->retriveRelatedAssetsByRelationType('Preview'); ?>
          

      <div class="destaque-home receitinhas span12">
      
        <?php if(count($related) > 0): ?>
        <a href="<?php echo $displays['destaque-principal-brincadeiras'][0]->retriveUrl() ?>" class="span9" title="<?php echo $displays['destaque-principal-brincadeiras'][0]->getTitle() ?>"><img class="span12" src="<?php echo $related[0]->retriveImageUrlByImageUsage('image-5-b') ?>" alt="<?php echo $displays['destaque-principal-brincadeiras'][0]->getTitle() ?>" /></a>
        <?php endif; ?>
        <div class="box span3">
          <span class="mais"></span>
          <div class="tit"><a href="<?php echo $site->retriveUrl() ?>/paiol">Paiol</a><span></span></div>
          <ul>
            <?php $related = $displays['destaque-principal-brincadeiras'][1]->Asset->retriveRelatedAssetsByRelationType('Preview'); ?>
            <?php if(count($related) > 0): ?>
            <li><a href="<?php echo $displays['destaque-principal-brincadeiras'][1]->retriveUrl() ?>" title="<?php echo $displays['destaque-principal-brincadeiras'][1]->getTitle() ?>"><img class="span12" src="<?php echo $related[0]->retriveImageUrlByImageUsage('image-5-b') ?>" alt="<?php echo $displays['destaque-principal-brincadeiras'][1]->getTitle() ?>" /><?php echo $displays['destaque-principal-brincadeiras'][1]->getTitle() ?></a></li>
            <?php endif; ?>
            <?php $related = $displays['destaque-principal-brincadeiras'][2]->Asset->retriveRelatedAssetsByRelationType('Preview'); ?>
            <?php if(count($related) > 0): ?>
            <li><a href="<?php echo $displays['destaque-principal-brincadeiras'][2]->retriveUrl() ?>" title="<?php echo $displays['destaque-principal-brincadeiras'][2]->getTitle() ?>"><img class="span12" src="<?php echo $related[0]->retriveImageUrlByImageUsage('image-5-b') ?>" alt="<?php echo $displays['destaque-principal-brincadeiras'][2]->getTitle() ?>" /><?php echo $displays['destaque-principal-brincadeiras'][2]->getTitle() ?></a></li>
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
              <?php echo $displays['destaque-2'][0]->Asset->Sections[0]->getTitle() ?>
            </p>
            <?php
              $display_img_src = $displays['destaque-2'][0]->retriveImageUrlByImageUsage('image-5-b');
              if ($display_img_src == '') {
                $related = $displays['destaque-2'][0]->Asset->retriveRelatedAssetsByRelationType('Preview');
                $display_img_src = $related[0]->retriveImageUrlByImageUsage('image-5-b');
              }
            ?>
            <?php if($display_img_src != ''): ?>
            <img class="span12" src="<?php echo $display_img_src ?>" alt="<?php echo $displays['destaque-2'][0]->getTitle() ?>" />
            <?php //echo $displays['destaque-2'][0]->getTitle() ?>
            <?php $tam=33; $str=$displays['destaque-2'][0]->getTitle(); mb_internal_encoding("UTF-8"); if(strlen($str) <= $tam) echo $str; else echo mb_substr($str, 0, $tam-1)."&hellip;" ?>
            <i class="ico-mais"></i>
            <?php endif; ?>
            
          </a>
          <?php endif; ?>
        <?php endif; ?>
        
        <?php if(isset($displays['destaque-3'])):?>
          <?php if(count($displays['destaque-3']) > 0): ?>
        <a class="box destaques span6" href="<?php echo $displays['destaque-3'][0]->retriveUrl() ?>" title="<?php echo $displays['destaque-3'][0]->getTitle() ?>">
          <p class="bold">
            <?php echo $displays['destaque-3'][0]->Asset->Sections[0]->getTitle() ?>
          </p>
          <?php
            $display_img_src = $displays['destaque-3'][0]->retriveImageUrlByImageUsage('image-5-b');
            if ($display_img_src == '') {
              $related = $displays['destaque-3'][0]->Asset->retriveRelatedAssetsByRelationType('Preview');
              $display_img_src = $related[0]->retriveImageUrlByImageUsage('image-5-b');
            }
          ?>
          <?php if($display_img_src != ''): ?>
          <img class="span12" src="<?php echo $display_img_src ?>" alt="<?php echo $displays['destaque-3'][0]->getTitle() ?>" />
          <?php //echo $displays['destaque-3'][0]->getTitle() ?>
          <?php $tam=33; $str=$displays['destaque-3'][0]->getTitle(); mb_internal_encoding("UTF-8"); if(strlen($str) <= $tam) echo $str; else echo mb_substr($str, 0, $tam-1)."&hellip;" ?>
          <i class="ico-mais"></i> 
          <?php endif; ?>
        </a>
          <?php endif; ?>
        <?php endif; ?>
      </div>
    </div>
    <div class="span4 col-dir">
      <a class="logo" href="<?php echo $site->retriveUrl() ?>/tvcocorico">
        <img class="span12" src="http://cmais.com.br/portal/images/capaPrograma/cocorico2/tvcoco.png" />
      </a>
      <div class="tvcoco span12">
        <a class="btn-programacao" href="<?php echo $site->retriveUrl(); ?>/natv" title="">
         Confira os horários da programação 
        </a>
        <h2><i class="icon-star-empty"></i>Próximo Convidado<i class="icon-star-empty"></i></h2>
        <?php if(isset($displays['destaque-tv-cocorico'])):?>
          <?php if(count($displays['destaque-tv-cocorico']) > 0): ?>
            <?php
              $display_img_src = $displays['destaque-tv-cocorico'][0]->retriveImageUrlByImageUsage('image-5-b');
              if ($display_img_src == '') {
                $related = $displays['destaque-tv-cocorico'][0]->Asset->retriveRelatedAssetsByRelationType('Preview');
                $display_img_src = $related[0]->retriveImageUrlByImageUsage('image-5-b');
              }
            ?>
            
        <a class="convidado span12" href="<?php echo $displays['destaque-tv-cocorico'][0]->retriveUrl() ?>" title="Próximo convidado: <?php echo $displays['destaque-tv-cocorico'][0]->getTitle() ?>">
          <img src="<?php echo $display_img_src ?>" alt="<?php echo $displays['destaque-tv-cocorico'][0]->getTitle() ?>" />
          <?php //echo $displays['destaque-tv-cocorico'][0]->getTitle() ?>
          <?php $tam=35; $str=$displays['destaque-tv-cocorico'][0]->getTitle(); mb_internal_encoding("UTF-8"); if(strlen($str) <= $tam) echo $str; else echo mb_substr($str, 0, $tam-1)."&hellip;" ?>
        </a>
        <a href="<?php echo $site->retriveUrl() ?>/convidados">
          <span class="mais"></span>
        </a>
          <?php endif; ?>
        <?php endif; ?>
        <!--ENQUETE-->
        <?php
        $assets = Doctrine_Query::create()
          ->select('a.*')
          ->from('Asset a, SectionAsset sa, Section s')
          ->where('a.id = sa.asset_id')
          ->andWhere('s.id = sa.section_id')
          ->andWhere('s.slug = "enquetes"')
          ->andWhere('a.site_id = ?', (int)$site->id)
          ->andWhere('a.asset_type_id = 10')
          //->orderBy('a.id desc')
          ->limit(1)
          ->execute();
         //doctrine para respostas
          $respostas = Doctrine_Query::create()
            ->select('aa.*')
            ->from('AssetAnswer aa')
            ->where('aa.asset_question_id = ?', (int)$assets[0]->AssetQuestion->id)
            ->execute();
          ?>  
        <?php include_partial_from_folder('sites/cocorico', 'global/tvenquete', array('site'=>$site,'assets'=>$assets, 'respostas'=>$respostas)) ?>
        <!--/ENQUETE-->
      </div>
    </div>
  </div>
  
  <!-- rodapé-->
  <div class="row-fluid  border-top"></div>
  <?php include_partial_from_folder('sites/cocorico', 'global/rodape', array('siteSections' => $siteSections, 'displays' => $displays, 'section'=>$section, 'uri'=>$uri)) ?>
  <!--/rodapé-->
</div>
<!-- /container-->

<!-- script enquete -->
<script type="text/javascript" src="http://cmais.com.br/portal/js/validate/jquery.validate.js"></script>
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
    dataType: "jsonp",
    data: $("#e<?php echo $respostas[0]->Asset->getId()?>").serialize(),
    url: "http://app.cmais.com.br/ajax/enquetes",
    beforeSend: function(){
      $('.votar').hide();
      $('#ajax-loader').show();
    },
    success: function(data){
      $(".form-voto").hide();
      $("form.inativo").fadeIn("fast");
      var i=0;
      $.each(data, function(key, val) {
        $('.resposta-'+i).html(parseInt(parseFloat(val.votes))+"%");
        i++;
      });
    }
  });
  
}
</script>
<!--/script enquete -->