<?php use_helper('I18N', 'Date') ?>
<?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'section' => $section)) ?>
<link href="http://cmais.com.br/portal/tvratimbum/css/geral.css" type="text/css" rel="stylesheet">
<link href="http://cmais.com.br/portal/tvratimbum/css/novoLayout-2014.css" type="text/css" rel="stylesheet">
<link href="http://cmais.com.br/portal/tvratimbum/css/institucional.css" type="text/css" rel="stylesheet">
<link href="http://cmais.com.br/portal/tvratimbum/css/jquery.jcarousel.css" rel="stylesheet" type="text/css" />
<script src="http://cmais.com.br/portal/tvratimbum/js/jquery-1.4.4.min.js" type="text/javascript"></script>
<script src="http://cmais.com.br/portal/tvratimbum/js/jquery-ui-1.8.9.min.js" type="text/javascript"></script>
<script src="http://cmais.com.br/portal/tvratimbum/js/jquery.jcarousel.pack.js" type="text/javascript"></script>
<script src="http://cmais.com.br/portal/tvratimbum/js/jPlayer/js/jquery.jplayer.min.js" type="text/javascript"></script>
<!--body Wrapper-->
<div id="bodyWrapper" >
 
  <!--Conteudo Wrapper-->
  <div class="conteudoWrapper" align="center">
    
    <!--TOPO TVRTB-->
    <?php include_partial_from_folder('tvratimbum','global/top', array('site'=> $site,'section'=>$section)) ?>
    <!--TOPO TVRTB-->
    
    <!--Conteudo-->
    <div class="conteudo internas">

      <!--Esquerda-->
      <div class="colunaMaior">
        
        <!--Trilha-->
        <div class="trilha">
            <a href="http://tvratimbum.cmais.com.br/" title="Tv Ra Tim Bum" target="_self">TV R&aacute; Tim Bum</a><span>&gt;&gt;<span>&gt;&gt;</span><a href="#">Ancine</a>
        </div>
        <!--Trilha-->
          
          <!--box-institucional-->
          <div id="box-institucional-home">
            
              <!--box-wrapper-->
              <div class="wrapper">
                
                <!--topo-esq-->
                <div class="topo-esq"></div>
                <!--topo-esq--> 
                
                <!--topo-->  
                <div class="topo"> 
                  <a class="enunciado" href="">ANCINE</a>
                </div>
                <!--topo-->
                <?php
                $displays = array();
         
                $blocks = Doctrine_Query::create()
                 ->select('b.*')
                 ->from('Block b, Section s')
                 ->where('b.section_id = s.id')
                 ->andWhere('s.slug = ?', 'ancine')
                 ->andWhere('s.site_id = ?', $site->id)
                 ->orderBy('b.id desc')
                 ->execute();
                                                     
                           if(count($blocks) > 0){
                             foreach($blocks as $b){
                               $displays[$b->getSlug()] = $b->retriveDisplays();
                             }
                           }
                            ?>

                <!--explicacao--> 
                <div class="explicacao">  
        
                <?php foreach($displays as $b): ?>  
                  
                 <p><b><?php echo $b[0]->Block->getTitle() ?></b></p>
                      
                    <?php foreach($b as $d): ?> 
                       <p><?php echo $d->getTitle() ?><a href= "http://midia.cmais.com.br/assets/file/original/<?php echo $d->Asset->AssetFile->getFile() ?>" target="_blank"><br><?php echo $d->getDescription() ?></a></p>
                    <?php endforeach; ?>
                 
                <?php endforeach; ?>
                        
                </div>
                <!--explicacao--> 
 
               
                <hr />
                <span class="picote"></span>
              </div>
              <!--box-wrapper-->
              
            </div>
            <!--box-institucional-->
             
      </div>
      <!--Esquerda-->
      
      <!--Direita-->
      <div class="coluna">
        
          <!--se liga-->
          <div class="galeriaVideos seLiga">
            
            <div class="enunciado">
              <span class="ico-seLiga"></span>
              <h2>Se Liga!</h2>
            </div>
            
            <span class="alcaA"></span>
            <span class="alcaB"></span>
            
            <div class="seLiga-box">
              <span class="top"></span>
              <div class="propaganda">
                <a href="http://www.facebook.com/ratimbum" title="fanpage" target="_blank">
                  <img src="http://cmais.com.br/portal/tvratimbum/image/fanpagetvrtb.jpg" alt="propaganda" />
                </a>
              </div>
              <span class="bottom"></span>
            </div>
            
          </div>
          <!--/se liga-->
          
          <hr />

          <!-- para os pais -->
          <?php if(isset($displays["para-os-pais"])) include_partial_from_folder('tvratimbum','global/display-1c-paraospais') ?>
          <!--/para os pais -->

              
        </div>
        <!--Direita-->
        <hr />
            <!--div id="voceSabia">
              <span class="galho"></span>
              <h3>Voc&ecirc; Sabia<span></span></h3>
              <p>Escolhendo brinquedos com pouca embalagem voce ajuda o planeta, pois produz menos lixo.</p>
              <p class="exclamacao">Fa&ccedil;a sua parte!</p>
              <img alt="mundo" src="http://cmais.com.br/portal/tvratimbum/image/ex-24.png"><!--tamanho maximo da imagem: 125x130>
            
            </div-->
      </div>
      <!--Direita-->
      
    
    
    <!--Rodape-->
    <?php include_partial_from_folder('tvratimbum','global/footer') ?>
    <!--Rodape-->
    <hr />
  </div>
  <!--Conteudo Wrapper-->
  
</div>
<!--body Wrapper-->
