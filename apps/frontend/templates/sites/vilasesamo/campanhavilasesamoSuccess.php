<?php  $noscript = "  <noscript>Desculpe mas no seu navegador não esta habilitado o Javascript, habilite-o e recarregue a página para o banner aparecer.</noscript>" ?>


<link rel="stylesheet" media="only screen and (min-width:501px) and (max-width:979px)" href="http://cmais.com.br/portal/css/tvcultura/sites/vilasesamo2/media_medium_screen.css" />
<link rel="stylesheet" media="only screen and (min-width:50px) and (max-width:500px)" href="http://cmais.com.br/portal/css/tvcultura/sites/vilasesamo2/media_smal_screen.css" />
<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/sites/vilasesamo2/internas.css" type="text/css" />
<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/sites/vilasesamo2/assets.css" type="text/css" />
<!-- Add fancyBox main JS and CSS files -->
  <script type="text/javascript" src="http://cmais.com.br/portal/js/fancybox2.1.5/jquery.fancybox.js"></script>
  <script type="text/javascript" src="http://cmais.com.br/portal/js/fancybox2.1.5/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>
  <link rel="stylesheet" type="text/css" href="http://cmais.com.br/portal/js/fancybox2.1.5/jquery.fancybox.css?v=2.1.5" media="screen" />




<!-- HEADER -->
<?php include_partial_from_folder('sites/vilasesamo', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'section' => $section)) ?>
<!-- /HEADER -->

<!--content-->
<div id="content">
  <section class="filtro">
    <h1>
      <i class="icones-sprite-interna icone-participe-grande"></i>
     Participe
   </h1>
  </section>
  <!--section-->
  <section  class="campanhasuccess" >
   <?php include_partial_from_folder('sites/vilasesamo', 'global/form-campanha-anexo', array("site" => $site,  "parent" => $section->Parent)) ?>
  </section>
  <!--section-->
  
  <!--section-->
  <section class="todos-itens">
      <h2>Neste mês:</h2>
      <div class="accordion " id="accordion2">
        <!--primeiro grupo - ativo no mes -->
        <?php
          //$sectionCampaign = Doctrine::getTable('Section')->findOneBySiteIdAndSlug($site->getId(), $campaign->getSlug());
          $sectionCampaign = Doctrine::getTable('Section')->findOneBySiteIdAndSlug($site->getId(), "brincando-na-comunidade");
          $blocks = Doctrine_Query::create()
            ->select('b.*')
            ->from('Block b, Section s')
            ->where('b.section_id = s.id')
            ->andWhere('s.slug = ?', $sectionCampaign->getSlug())
            ->andWhere('b.slug = ?', 'enviados') 
            ->andWhere('s.site_id = ?', $site->id)
            ->execute();
        
          if(count($blocks) > 0){
            $displays_enviados['enviados'] = $blocks[0]->retriveDisplays();
          }
          if(isset($displays_enviados['enviados'])): 
            if(count($displays_enviados['enviados']) > 0):
            ?>
            <div class="accordion-group">
              <div class="accordion-heading">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOfMonth">
                 <?php echo $section->Parent->getTitle();?>
                </a>
              </div>
         		<div id="collapseOfMonth" class="accordion-body collapse" style="height: 0px;">
                <div class="accordion-inner">
                  <ul id="container" class="row-fluid">
                    
                         <?php foreach($displays_enviados['enviados'] as $k=>$ai): ?>
                          <li class="span4 element">
                            <a id="texto<?php echo $k ?>" data-number="<?php echo $k?>" class="fancybox texto" rel="gallery" href="#" title="<?php echo $ai->Asset->getDescription() ?>" aria-label="<?php echo $ai->Asset->getDescription() ?>">
                              <div class="container-image"> 
                                <img src="http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/thumb.jpg" alt="">
                              </div>
                              <i class="icones-sprite-interna icone-participe-pequeno"></i>
                              <div><img class="altura" src="http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/altura.png"><?php echo $ai->getTitle(); ?></div>
                              <div class="conteudoTexto"><?php echo $ai->Asset->AssetContent->render()?></div>
                            </a>
                          </li>
                          
                        <?php endforeach; ?>
                        
			                <script>
														  $(".fancybox").fancybox({
													       	beforeShow : function() {
													         $('.fancybox-skin').addClass('c1');
													   		 },
													   		 afterLoad   : function() {
													   		  this.content = this.element.context.lastElementChild.innerHTML;
													   		  $('.fancybox-inner').addClass('conteudoTexto').show();
                                 },
													   		 helpers : {
													            title: {
													                type: 'over'
													            }
													          }
													      });
													      
														 
											     
											</script>
                      
                  </ul>
                </div>
              </div>
            </div>
            <?php
            else:
            ?>
              <h3>EM BREVE GALERIA DOS ENVIADOS</h3>
            <?php   
            endif;
          endif;
          ?>
          <!--/primeiro grupo - ativo no mes -->
      
      
      <h2>Aproveite e veja nossas campanhas passadas:</h2>    
      <!--grupo - arquivo -->
      <?php
      //pegando campanhas->subsections pra listar blocos enviados
      $sectionListCampaign = Doctrine::getTable('Section')->findOneBySiteIdAndSlug($site->getId(), "campanhas");
      foreach($sectionListCampaign->subsections() as $k=>$ss):
        if($ss->getTitle() != $section->Parent->getTitle()):
          $sectionCampaign = Doctrine::getTable('Section')->findOneBySiteIdAndSlug($site->getId(), $ss->getSlug());
          $blocks = Doctrine_Query::create()
            ->select('b.*')
            ->from('Block b, Section s')
            ->where('b.section_id = s.id')
            ->andWhere('s.slug = ?', $sectionCampaign->getSlug())
            ->andWhere('b.slug = ?', 'enviados') 
            ->andWhere('s.site_id = ?', $site->id)
            ->execute();
        if(isset($blocks)){
          if(count($blocks) > 0):
            $displays_enviados['enviados'] = $blocks[0]->retriveDisplays();
          endif;    
        }
        ?>
        <?php 
          if(isset($displays_enviados['enviados'])):
            if(count($displays_enviados['enviados']) > 0):
            ?>
            <div class="accordion-group">
              <div class="accordion-heading">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse<?php echo $k?>">
                  <?php echo $ss->getTitle() ?>
                </a>
              </div>
              <div id="collapse<?php echo $k ?>" class="accordion-body collapse" style="height: 0px;">
                <div class="accordion-inner ">
                  <ul id="container<?php echo $k ?>" class="row-fluid">
                          <?php foreach($displays_enviados['enviados'] as $ai): ?>
                          	
                          <li class="span4 element" >
                            <a class="fancybox2" rel="gallery1" href="<?php echo $ai->Asset->retriveImageUrlByImageUsage('original'); ?>" title="<?php echo $ai->Asset->getTitle()." - ". $ai->Asset->getDescription() ?>" aria-label="<?php echo $ai->Asset->AssetImage->getHeadline() ?>">
                              <div class="container-image"> 
                                <img src="<?php echo $ai->Asset->retriveImageUrlByImageUsage('image-13'); ?>" alt="<?php echo $ai->getTitle(); ?>">
                              </div>
                              <i class="icones-sprite-interna icone-participe-pequeno"></i>
                              <div><img class="altura" src="http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/altura.png"><?php echo $ai->getTitle(); ?></div>
                            </a>
                          </li>
                        <?php endforeach; ?>
                      
                  </ul>
                </div>
              </div>
            </div>
            <?php  
            endif; 
          endif;  
        endif;
      endforeach;
      ?>
      <!--grupo - arquivo -->
      
  </section>
  <!--/section-->

</div>


  
<script src="http://cmais.com.br/portal/js/isotope/jquery.isotope.min.js"></script>
<?php echo $noscript ?>
<script src="http://cmais.com.br/portal/js/vilasesamo2/internas-isotope.js"></script>
<?php echo $noscript ?>
<!--/content-->
          
<script type="text/javascript">
		  
      $(".fancybox2").fancybox({
      	beforeShow : function() {
         $('.fancybox-skin').css({'background' :'#fff'});
   		 },
        helpers : {
            title: {
                type: 'over'
            }
          }
      });
      //$(".todos-itens li").addClass("campanhasuccess");
      


    var $containerA = $("#container0, #container1, #container2, #container3, #container4, #container5, #container6, #container7");
   
    $containerA.isotope({
      itemSelector : '.element'
    });
    setTimeout(function(){
      $containerA.isotope({ filter:"" });
    },1000); 
 /* var colors=["interna jogos","interna atividades","interna videos"];
  var quant = colors.length;
  var which = Math.round(Math.random()*quant);
  if(which > 3){
    which = 3;*/
  

  $("body").addClass("interna campanhasuccess");
  $(".todos-itens li").addClass("campanhasuccess");
</script>