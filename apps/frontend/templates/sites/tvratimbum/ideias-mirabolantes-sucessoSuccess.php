<?php
$d['destaque-principal'] = Doctrine::getTable('Block')->findOneById(1176);
$d['videos'] = Doctrine::getTable('Block')->findOneById(1177);
?>

<?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'section' => $section)) ?>
<!--CSS-->
<link href="/portal/tvratimbum/css/geral.css" type="text/css" rel="stylesheet">
<link href="/portal/tvratimbum/css/novoLayout-2012.css" type="text/css" rel="stylesheet">
<link href="/portal/tvratimbum/css/jquery.jcarousel.css" rel="stylesheet" type="text/css" />
<link href="/portal/tvratimbum/css/ferias-especial.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="/portal/css/tvcultura/secoes/contato.css" type="text/css" />
<!--CSS-->

<!--SCRIPT-->
<script src="/portal/tvratimbum/js/jquery-1.4.4.min.js" type="text/javascript"></script>
<!--script src="/portal/tvratimbum/js/jquery-ui-1.8.9.min.js" type="text/javascript"></script-->
<script src="/portal/tvratimbum/js/jquery.jcarousel.pack.js" type="text/javascript"></script>

<script src="/portal/tvratimbum/js/jPlayer/js/jquery.jplayer.min.js" type="text/javascript"></script>

<!--SCRIPT-->

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
        
            <?php include_partial_from_folder('tvratimbum','global/especial-destaque', array('displays'=>$d['destaque-principal'],'section'=>$section )) ?>
            
                       
            <hr />
            
            <span class="picote"></span>
            
          </div>
          <!--/WRAPPER-->
        </div>
        <!--/BOX-ESPECIAL-INTERNA-->
                
        <!--FORM IDEIAS MIRABOLANTES-->
        <div id="form-piada"> 
          <span class="alca pos01"></span>
          <span class="alca pos02"></span>
          
          
          <!--CONTATO-->
          <div class="contato">

            <!--MSG ACERTO-->
            <div class="msgAcerto" style="display:block">
              <p>
                Sua idéia foi recebida com sucesso!<br/><br/>
                O conteúdo será avaliado pela equipe<br/>
                responsável e as selecionadas<br/>
                serão publicadas.<br/><br/>
                
                Obrigado pela participação,<br/>
                TV Rá Tim Bum!
              </p>
              <div class="btn-barra">
                <span class="pontaBarra"></span>
                <a href="http://tvratimbum.cmais.com.br/ideias-mirabolantes" id="enviar-outra">enviar outra idéia mirabolante</a>
                <span class="caudaBarra"></span>
              </div>  
              
            </div>  
            <!--/MSG ACERTO-->
            
          <span class="picote"></span>  
          
          </div>
          <!--/CONTATO-->
          
        </div>
        <!--/FORM IDEIAS MIRABOLANTES-->
        
        <!--VIDEOS-->
        <?php 
          if(isset($d["videos"])):
            if(count($d["videos"]) > 0):
         ?>
              <div class="galeriaVideos">
                <div class="enunciado">
                  <h2><span class="mais">+</span>Ideias Mirabolantes</h2>
                </div>
                <span class="alcaA"></span>
                <span class="alcaB"></span>
                <div class="listaGaleria">
                  <div class="wrappperlistaGaleria">
                      <ul>
                        <?php foreach($d["videos"] as $a): ?>
                        <li>
                          <a class="aImg" href="<?php echo $a->retriveUrl()?>">
                            <img src="<?php echo $a->retriveImageUrlByImageUsage("image-1-b") ?>" alt="<?php echo $a->getTitle()?>" />
                          </a>
                          <a class="aTxt" href="<?php echo $a->retriveUrl()?>">
                            <span class="nomeRlacionado"><?php echo $a->getTitle()?></span>
                          </a>
                        </li>
                        <?php endforeach; ?>
                      </ul>
                  </div>
                </div>
               
              </div>
          <?php
            endif;
           endif;?>
        <!--VIDEOS-->
        
            
            
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
