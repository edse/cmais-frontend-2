<?php use_helper('I18N', 'Date') ?>
<?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'section' => $section)) ?>
<!--CSS-->
<link href="http://cmais.com.br/portal/tvratimbum/css/geral.css" type="text/css" rel="stylesheet">
<link href="http://cmais.com.br/portal/tvratimbum/css/novoLayout-2014.css" type="text/css" rel="stylesheet">
<link href="http://cmais.com.br/portal/tvratimbum/css/jquery.jcarousel.css" rel="stylesheet" type="text/css" />
<link href="http://cmais.com.br/portal/tvratimbum/css/ferias-especial.css" rel="stylesheet" type="text/css" />
<!--CSS-->

<!--SCRIPT-->
<script src="http://cmais.com.br/portal/tvratimbum/js/jquery-1.4.4.min.js" type="text/javascript"></script>
<script src="http://cmais.com.br/portal/tvratimbum/js/jquery-ui-1.8.9.min.js" type="text/javascript"></script>
<script src="http://cmais.com.br/portal/tvratimbum/js/jquery.jcarousel.pack.js" type="text/javascript"></script>
<script src="http://cmais.com.br/portal/tvratimbum/js/jPlayer/js/jquery.jplayer.min.js" type="text/javascript"></script>
<script type="text/javascript">
  //carrossel
  $(function(){
    $('.carrossel').jcarousel({
      wrap: "both"
    });
  })
</script>
<!--/SCRIPT-->

<!--BODY WRAPPER-->
<div id="bodyWrapper">

  <!--CONTEUDO WRAPPER-->
  <div class="conteudoWrapper" align="center">
    
    <!--MENU RA-TIM-BUM-->
    <?php include_partial_from_folder('tvratimbum','global/top', array('site'=> $site,'section'=>$section)) ?>
    <!--/MENU RA-TIM-BUM-->
    
    <!--CONTEUDO INTERNAS-->
    <div id="ferias" class="conteudo internas">
      
      <!--COLUNA MAIOR-->
      <div class="colunaMaior">
        
        <!--TRILHA-->
        <div class="trilha">
          <p><a href="/" title="TV Rá tim Bum">TV Rá Tim Bum</a></p><span>&gt;&gt;</span><a href="/especial" title="Especial">Especial</a></p><span>&gt;&gt;</span><a href="#" title="<?php echo $section->getTitle() ?>"><?php echo $section->getTitle() ?></a>
        </div>
        <!--/TRILHA-->
        
        <!--BOX-ESPECIAL-INTERNA-->
        <div id="box-especial-interna">
          <!--WRAPPER-->
          <div class="wrapper">
            
            <div class="topo-esq"></div>
            <!--TOPO-->
            <div class="topo">
              <a href="/especial" class="enunciado">Especial</a>
            </div>
            <!--/TOPO-->
            
            <!--TITULO-->
            <div class="tarja-titulo">
              <p><?php echo $section->getTitle() ?></p>
            </div>  
            <!--/TITULO-->
        
            <?php include_partial_from_folder('tvratimbum','global/especial-destaque', array('displays'=>$displays['destaque-principal'], 'section'=>$section)) ?>
            
            <hr />
            
            <span class="picote"></span>
            
          </div>
          <!--/WRAPPER-->
        </div>
        <!--/BOX-ESPECIAL-INTERNA-->
        
        <!--COLUNA-640-->
        <div class="coluna-640">
          <!--VIDEOS-ESPECIAL-->
          <?php include_partial_from_folder('tvratimbum','global/videos-especial-ferias',array('displays' => $displays["videos"])) ?>
          <!--/VIDEOS-ESPECIAL-->
          
          <?php if(isset($displays['baixar'])): ?>
            <?php if(count($displays['baixar']) > 0): ?>
          <!--BAIXAR-->
          <div id="especial-baixar">
            <!--TOPO BAIXAR ESPECIAL-->
            <div class="topo-esq"></div>
            <div class="topo">
              <p><a href="/baixar" title="baixar"><?php echo $displays['baixar'][0]->Block->getTitle() ?></a></p> 
            </div>
            <!--/TOPO BAIXAR ESPECIAL-->

            <!--CONTEUDO-BAIXAR-->
            <div class="conteudo-baixar">
              <div class="imagem"><img src="<?php echo $displays['baixar'][0]->retriveImageUrlByImageUsage("image-3-b") ?>" alt="<?php echo $displays['baixar'][0]->getTitle() ?>" title="<?php echo $displays['baixar'][0]->getTitle() ?>" /></div>
              <span class="titulo"><?php echo $displays['baixar'][0]->getTitle() ?></span>
              <p><?php echo $displays['baixar'][0]->getDescription() ?></p>
              <div class="btn-barra">
                <span class="pontaBarra"></span>
                <a href="<?php echo $displays['baixar'][0]->Asset->retriveUrl(); ?>" title="brincar agora: <?php echo $displays['baixar'][0]->getTitle() ?>" target="_blank">brincar agora</a>
                <span class="caudaBarra"></span>
              </div>
            </div>
            <!--/CONTEUDO-BAIXAR-->
            
            <span class="picote baixo"></span>
          </div>  
          <!--/BAIXAR-->
            <?php endif; ?>
          <?php endif; ?>
        </div>
        <!--COLUNA-640-->
        
        <!--COLUNA 300-->
        <div class="coluna-300">
          
          <!--Banner-->
          <?php include_partial_from_folder('tvratimbum','global/banner-300x250') ?> 
          <!--/Banner-->  
          
        </div>
        <!--/COLUNA 300-->
        
      </div>
      <!--/COLUNA MAIOR-->
      
 
  </div>
  <!--/ CONTEUDO INTERNAS-->
  
  <!--FOOTER RA TIM BUM-->
  <?php include_partial_from_folder('tvratimbum','global/footer') ?>
  <!--/FOOTER RA TIM BUM-->
  <hr />
  </div>
  <!--/CONTEUDO WRAPPER-->

</div>
<!--/BODY WRAPPER-->