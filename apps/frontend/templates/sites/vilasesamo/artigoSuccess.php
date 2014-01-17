<?php use_helper('I18N', 'Date') ?>

<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<!--[if lt IE 8]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/sites/vilasesamo2/internas.css" type="text/css" />

<?php
$noscript = "  <noscript>Desculpe mas no seu navegador não esta habilitado o Javascript, habilite-o e recarregue a página para o banner aparecer.</noscript>"
?>

<?php 
  $assetSection = $asset->getSections();
  
  foreach($assetSection  as $a){
    if($a->getSlug() == 'pais-e-educadores')
      $assetSection = 'pais-e-educadores';
  }
  
?>
<script>
  $("body").addClass("cuidadores artigo");
  <?php if($assetSection=="pais-e-educadores"):?>
    $(document).ready(function(){
      $(".btn-cuidadores-topo").addClass("active");
    });  
  <?php endif; ?>
</script>
<?php echo $noscript; ?>

<!-- HEADER -->
<?php include_partial_from_folder('sites/vilasesamo', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'section' => $section)) ?>
<!-- /HEADER -->

<!--content-->
<div id="content">

	<!--Explicação acessibilidade-->
	<h1 tabindex="0" class="ac-explicacao">
	 <?php echo $asset->getDescription(); ?>
	</h1>


  <!--section -->
  <section class="filtro row-fluid">
    
    <!--container conteudo-->
    <div class="b-verde borda-arredonda">
      <h1>
        <span class="icones-sprite-interna icone-cuidadores-grande"></span>
        <?php echo $section->getTitle() ?>
        <a href="/<?php echo $site->getSlug() ?>/<?php echo $section->getSlug() ?>" class="todos-assets" target="_self" title="voltar para todos os artigos" aria-label="voltar para todos os artigos">
          <i class="icones-setas icone-voltar-artigo" href="/<?php echo $site->getSlug() ?>/<?php echo $section->getSlug() ?>"></i>
          <p>todos os artigos</p>
        </a>
      </h1>
      
      <!--container-->
      <div class="container-cuidadores row-fluid">
        
        <!--col esq -->
        <div class="span8 col-esq">
          
          <!--conteudo artcle-->
          <article>
            
            <!--header-->
            <header>
              
              <h1><?php echo $asset->getTitle() ?></h1>
               
              <div class="overflow">
                <?php $colaboradores = $asset->retriveRelatedAssetsByRelationType("Colaborador") ?>
                <span class="data"><?php echo format_date($asset->getUpdatedAt()) ?><?php if(count($colaboradores) > 0) echo " - Por" ?> </span> 
                <?php if(count($colaboradores) > 0): ?>
                  
                  <span class="nome">
                    <?php if(count($colaboradores) > 0): ?>
                      <?php//echo implode(", ", $autores) ?>
                      <?php
                      foreach($colaboradores as $c):
                        echo '<a class="autores" data-scroll="'.$c->getSlug().'"href="javascript:;">'.$c->AssetPerson->getName() . "</a>, ";
                      endforeach;
                      ?>
                    <?php endif; ?>.
                  </span>
                  <?php else: ?>
                    <?php if($asset->AssetContent->getAuthor()): ?>
                      <span class="nome"><?php echo $asset->AssetContent->getAuthor() ?></span>
                    <?php endif; ?>
                  <?php endif; ?>
              </div>
              
              <!--compartilhar redes-->
              <?php //include_partial_from_folder('sites/vilasesamo', 'global/shareArticle', array('site' => $site, 'mainSite' => $mainSite, 'section' => $section, 'uri'=>$uri)) ?>
              <!--/compartilhar redes-->
              <div class="divisa"></div>
            </header>
            <!--/header-->
            
            <!--section-->
            <section>
              <p><?php echo $asset->getDescription() ?></p>
              <?php $preview = $asset->retriveRelatedAssetsByRelationType("Preview") ?>
              <?php if(count($preview) > 0): ?>
              <div class="img-topo-asset">  
                <p class="img-destaque-asset" aria-label="Imagem do artigo. Descrição"."<?php echo $preview[0]->getDescription() ?><?php echo $preview[0]->getDescription() ?>">
                  <img id="img-capa" src="<?php echo $preview[0]->retriveImageUrlByImageUsage("image-13-b") ?>" alt="<?php echo $asset->getTitle() ?>" />
                  <span id="legenda" ><?php echo $preview[0]->getDescription() ?></span>
                </p>
              </div>
              <?php endif; ?>
              <?php echo html_entity_decode($asset->AssetContent->render()) ?>
              
              <!--imprimir/baixar-->
              <!--div class="imprimir">
                
                <a class="option-assets" href="#" title="Imprimir" target="_blank">
                  <i class="icones-sprite-interna icone-imprimir-verde"></i>
                  <span>Imprimir</span>
                </a>
                
                <a class="option-assets baixar" href="#" title="Baixar">
                  <i class="icones-sprite-interna icone-baixar-verde"></i>
                  <span>Baixar</span>
                </a>
                
              </div-->
              <!--/imprimir/baixar-->
              
              
            </section>
            <!--/section-->
           
            <!--footer-->
            <div class="clearboth" aria-label="Você está no rodapé do artigo... Com links para as redes sociais para curtir e compartilhar!" tabindex="0">
              
              <!--compartilhar redes-->
              <?php include_partial_from_folder('sites/vilasesamo', 'global/shareArticle', array('site' => $site, 'mainSite' => $mainSite, 'section' => $section, 'uri'=>$uri)) ?>
              <!--/compartilhar redes-->
               
              <!--sobre os autores-->
              <?php if(count($colaboradores) > 0): ?>
              <h2>
                <i class="icones-sprite-interna icone-carregar-verde" style="margin:0!important;"></i>
                sobre o autor:
              </h2>
                <?php foreach($colaboradores as $c): ?>
                  <article class="sobre-autor" id="<?php echo $c->getSlug() ?>">
                    <div class="sombra-amarela"></div>
                    <div class="foto-sobre">
                      <?php $preview = $c->retriveRelatedAssetsByRelationType("Preview") ?>
                        <?php if($preview): ?>
                          <?php if($preview[0]->retriveImageUrlByImageUsage("image-13")): ?>
                            <img src="<?php echo $preview[0]->retriveImageUrlByImageUsage("image-13") ?>" alt="<?php echo $c->getTitle() ?>" name="<?php echo $c->getTitle() ?>">
                          <?php endif; ?>
                        <?php endif; ?>
                    </div>
                    <div class="descricao-sobre">
                      <h3><?php echo $c->getTitle() ?></h3>
                      <p><?php echo $c->AssetPerson->getBio() ?></p>
                      
                      <!--Lista de Contatos-->
                      <?php
                        $Web = $c->AssetPerson->getWebsiteUrl();
                        $Facebook = $c->AssetPerson->getFacebookUrl();
                        $Twitter = $c->AssetPerson->getTwitterUrl();
                        $YouTube = $c->AssetPerson->getYoutubeUrl();
                      ?>
                      
                      <?php if($c->AssetPerson->getHeadline() != ""): ?>
                        <?php 
                        $emails = explode(",", $c->AssetPerson->getHeadline());
                        foreach($emails as $k=>$e):
                        ?>
                          <a href="mailto: <?php echo $e ?> " title="envie uma mensagem para <?php echo $c->getTitle() ?>"><?php echo $e ?></a>
                          <?php if($k > 0 || $Web != "" || $Facebook != "" || $Twitter != "" || $YouTube != ""  ){ echo ", "; }else{ echo "."; } ?>
                          
                        <?php endforeach;?>
                      <?php endif; ?>
                      
                      <?php if($Web != ""): ?>
                        <?php 
                        $webs = explode(",", $Web);
                        foreach($webs as $k=>$w):
                        ?>
                          <a href="<?php echo $Web ?>" target="_blank" title="<?php echo $Web ?>">Site <?php echo ($k + 1) ?></a>
                          <?php if( $k > 0 || $Facebook != "" || $Twitter != "" || $YouTube != ""  ){ echo ", "; }else{ echo "."; } ?>
                        <?php endforeach;?>
                      <?php endif; ?>
                      
                      <?php if($Facebook != ""): ?>
                        <a href="<?php echo $Facebook ?>" target="_blank" title="">Facebook</a>
                        <?php if( $Twitter != "" || $YouTube != ""  ){ echo ", "; }else{ echo "."; } ?>
                      <?php endif; ?>
                      
                      <?php if($Twitter != ""): ?>  
                        <a href="<?php echo $Twitter ?>" target="_blank" title="">Twitter</a>
                        <?php if($YouTube != ""  ){ echo ", "; }else{ echo "."; } ?>
                      <?php endif; ?>
                      
                      <?php if($YouTube != ""): ?>
                        <a href="<?php echo $YouTube ?>" target="_blank" title="">Canal Youtube</a>
                        <?php echo "."; ?>
                      <?php endif; ?>
                      <!--Lista de Contatos-->
                      
                    </div>
                  </article>
                <?php endforeach; ?>
              <?php endif; ?>
              
        
              <!--/sobre os autores-->
              
              <div id="comente-este-artigo">              
                <div class="divisa"></div>
                <i class="icones-form icone-fale-conosco-ve"></i>
                <h3 tabindex="0">Gostou desse artigo? Comente!</h3>
              </div>
              <!-- Box comentario FB-->
              <fb:comments href="<?php echo $uri ?>" numposts="3" width="580" publish_feed="true" aria-hidden="true"></fb:comments> <!-- Tentativa de esconder o box do FB-->

            </div>
           
            <!--/footer-->
            
          </article> 
          <!--/conteudo artcle--> 
        </div>
        <!--/col esq -->
        
        <!--col dir -->
        <div class="span4 col-dir">
         
  
          <!--tags-->
          <?php
            $tags = array();
            $sections = $asset->getSections();
            foreach($sections as $s) { // pega as categorias (seções-filhas da seção "categorias") pra utilizar como se fossem tags
              if($s->getParentSectionId() > 0) {
                $parentSection = Doctrine::getTable('Section')->findOneById($s->getParentSectionId());
                if($parentSection->getSlug() == "categorias") {
                  $tags[] = $s->getTitle();
                }
              }
            }  
            if(count($asset->getTags())>0){
              foreach($asset->getTags() as $t) {
                $tags[] = $t;
              }
            }
          ?>
          <?php if(count($tags) > 0): ?>
          <div class="box-sobre" aria-label="Links relacionados à matéria" tabindex="0">
            <h2>
              <i class="icones-sprite-interna icone-carregar-verde"></i>
              <span>sobre os temas</span>
            </h2>
            <div class="links">
              <?php foreach($tags as $t): ?>
                <a href="http://cmais.com.br/vilasesamo/busca?output=search&term=<?php echo $t ?>" title="<?php echo $t ?>"><?php echo $t ?></a>
              <?php endforeach; ?>
            </div>
            <div class="bottom-box-sobre">
              <img src="/portal/images/capaPrograma/vilasesamo2/box-bottom-sobre.png" alt=""/>
            </div>
          </div>  
          <?php endif; ?>
          <!--/tags-->

          <!-- para ler-->
          <?php
          if(count($tags) > 0) {
            $related_articles = Doctrine_Query::create()
              ->select('a.*')
              ->from('Asset a, SectionAsset sa, tag t, tagging tg')
              ->where('a.site_id = ?', $site->getId())
              ->andWhere('sa.asset_id = a.id')
              ->andWhere('sa.section_id = ?', $section->getId())
              ->andWhere('a.date_start IS NULL OR a.date_start <= ?', date("Y-m-d H:i:s"))
              ->andWhere('a.date_end IS NULL OR a.date_end >= ?', date("Y-m-d H:i:s"))
              ->andWhere('a.is_active = ?', 1)
              ->andWhere('tg.taggable_id = a.id')
              ->andWhere('tg.tag_id = t.id')
              ->andWhereIn('t.name', $tags)
              ->andWhere('a.id != ?', $asset->getId())
              ->andWhere('a.asset_type_id = ?', 1)
              ->limit(4)
              ->execute();
            }
          ?>
          <?php if(isset($related_articles)): ?>
            <?php if(count($related_articles) > 0): ?>
              <div class="box-ler">
                <h2 class="titulo-box" aria-label="Artigos Relacionados" tabindex="0">
                  <i class="icones-sprite-interna icone-artigo-ve-pequeno"></i>
                  <span>Artigos Relacionados</span>
                </h2>
              
                <!--lista-->
                <ul>
                  <?php foreach($related_articles as $ra): ?>
                    <!--item-->
                    <li>
                      <a href="<?php echo $ra->retriveUrl() ?>" title="<?php echo $ra->getTitle() ?>">
                        <h3><?php echo $ra->getTitle() ?></h3>
                        <p><?php echo $ra->getDescription() ?></p>
                      </a>
                      <div class="divisa"></div>
                    </li>
                    <!--item-->
                  <?php endforeach; ?>
              </ul>
              <!--/lista-->
             </div>
            <?php endif; ?>
          <?php endif; ?>
          
          <!-- /para ler-->
          
          <!-- para brincar junto-->
          <div class="box-brincarjunto destaques" aria-label="Para brincar Junto" tabindex="0">
            <h2 class="titulo-box">
              <i class="icones-sprite-menu icone-cuidadores"></i>
              <span>Para brincar junto</span>
            </h2>
           
  
           <!--destaque jogos--> 
           <?php
          if(count($tags) > 0) {
            $particularSection = Doctrine::getTable('Section')->findOneBySiteIdAndSlug($site->getId(), "jogos");
            $related_asset = Doctrine_Query::create()
              ->select('a.*')
              ->from('Asset a, SectionAsset sa, tag t, tagging tg')
              ->where('a.site_id = ?', $site->getId())
              ->andWhere('sa.asset_id = a.id')
              ->andWhere('sa.section_id = ?', $particularSection->getId())
              ->andWhere('a.date_start IS NULL OR a.date_start <= ?', date("Y-m-d H:i:s"))
              ->andWhere('a.date_end IS NULL OR a.date_end >= ?', date("Y-m-d H:i:s"))
              ->andWhere('a.is_active = ?', 1)
              ->andWhere('tg.taggable_id = a.id')
              ->andWhere('tg.tag_id = t.id')
              ->andWhereIn('t.name', $tags)
              ->andWhere('a.id != ?', $asset->getId())
              ->andWhere('a.asset_type_id = ?', 1)
              ->limit(1)
              ->execute();
            }
          ?>
          <?php if(isset($related_asset)): ?>  
            <?php if(count($related_asset) > 0): ?>  
             <article class="jogos">
                <a href="<?php echo $related_asset[0]->retriveUrl() ?>" title="<?php echo $related_asset[0]->getTitle() ?>">
                  <?php $preview = $related_asset[0]->retriveRelatedAssetsByRelationType("Preview") ?>
                  <?php if(count($preview) > 0): ?>
                    <img src="<?php echo $preview[0]->retriveImageUrlByImageUsage("image-13") ?>" alt="<?php echo $related_asset[0]->getTitle() ?>" />
                  <?php endif; ?>
                  <i class="icones-sprite-interna icone-jogos-pequeno"></i>
                  <div class="texto">
                    <img class="altura" src="/portal/images/capaPrograma/vilasesamo2/altura.png" alt="">
                    <?php echo $related_asset[0]->getTitle() ?>
                  </div>
                </a>
              </article>
            <?php endif; ?>
          <?php endif; ?>
          <!--/destaque jogos-->
           
          <!--destaque videos-->
          <?php
          if(count($tags) > 0) {
            $particularSection = Doctrine::getTable('Section')->findOneBySiteIdAndSlug($site->getId(), "videos");
            $related_asset = Doctrine_Query::create()
              ->select('a.*')
              ->from('Asset a, SectionAsset sa, tag t, tagging tg')
              ->where('a.site_id = ?', $site->getId())
              ->andWhere('sa.asset_id = a.id')
              ->andWhere('sa.section_id = ?', $particularSection->getId())
              ->andWhere('a.date_start IS NULL OR a.date_start <= ?', date("Y-m-d H:i:s"))
              ->andWhere('a.date_end IS NULL OR a.date_end >= ?', date("Y-m-d H:i:s"))
              ->andWhere('a.is_active = ?', 1)
              ->andWhere('tg.taggable_id = a.id')
              ->andWhere('tg.tag_id = t.id')
              ->andWhereIn('t.name', $tags)
              ->andWhere('a.id != ?', $asset->getId())
              ->andWhere('a.asset_type_id = ?', 6)
              ->limit(1)
              ->execute();
            }
          ?>
          <?php if(isset($related_asset)): ?>
            <?php if(count($related_asset) > 0): ?>
              <article class="videos">
                <a href="<?php echo $related_asset[0]->retriveUrl() ?>" title="<?php echo $related_asset[0]->getTitle() ?>">
                  <div class="yt-menu">
                    <img class="youtubeImage" src="http://img.youtube.com/vi/<?php echo $related_asset[0]->AssetVideo->getYoutubeId() ?>/0.jpg" alt="<?php echo $related_asset[0]->getTitle() ?>">
                  </div>
                  
                  <i class="icones-sprite-interna icone-videos-pequeno"></i>
                  <div class="texto">
                    <img class="altura" src="/portal/images/capaPrograma/vilasesamo2/altura.png" alt="">
                    <?php echo $related_asset[0]->getTitle() ?>
                  </div>
                </a>
              </article>
            <?php endif; ?>
          <?php endif; ?>
          <!--/destaque videos-->
          
          <!--destaque atividades-->
             <?php
              if(count($tags) > 0) {
                $particularSection = Doctrine::getTable('Section')->findOneBySiteIdAndSlug($site->getId(), "atividades");
                $related_asset = Doctrine_Query::create()
                  ->select('a.*')
                  ->from('Asset a, SectionAsset sa, tag t, tagging tg')
                  ->where('a.site_id = ?', $site->getId())
                  ->andWhere('sa.asset_id = a.id')
                  ->andWhere('sa.section_id = ?', $particularSection->getId())
                  ->andWhere('a.date_start IS NULL OR a.date_start <= ?', date("Y-m-d H:i:s"))
                  ->andWhere('a.date_end IS NULL OR a.date_end >= ?', date("Y-m-d H:i:s"))
                  ->andWhere('a.is_active = ?', 1)
                  ->andWhere('tg.taggable_id = a.id')
                  ->andWhere('tg.tag_id = t.id')
                  ->andWhereIn('t.name', $tags)
                  ->andWhere('a.id != ?', $asset->getId())
                  ->andWhere('a.asset_type_id = ?', 1)
                  ->limit(1)
                  ->execute();
              }
            ?>
            <?php if(isset($related_asset)): ?>  
              <?php if(count($related_asset) > 0): ?>
              <article class="atividades">
                 <a href="<?php echo $related_asset[0]->retriveUrl() ?>" title="<?php echo $related_asset[0]->getTitle() ?>">
                  <?php $preview = $related_asset[0]->retriveRelatedAssetsByRelationType("Preview") ?>
                  <?php if(count($preview) > 0): ?>
                    <img src="<?php echo $preview[0]->retriveImageUrlByImageUsage("image-13") ?>" alt="<?php echo $related_asset[0]->getTitle() ?>">
                  <?php endif; ?>
                  <i class="icones-sprite-interna icone-atividades-pequeno"></i>
                  <div class="texto">
                    <img class="altura" src="/portal/images/capaPrograma/vilasesamo2/altura.png" alt="">
                    <?php echo $related_asset[0]->getTitle() ?>             
                  </div>
                </a>
              </article>
              <?php endif; ?>
            <?php endif; ?>
            <!--/destaque atividades-->
              
          </div>
          <!-- /para brincar junto-->
                     
        </div>
        <!--/col dir -->
        
        <!--destaques-->
        <div class="span4 col-direita" aria-label="Banner de publicidade do programa. Imagem do Elmo dançando com fones de ouvido." tabindex="0">
          <?php
            $particularSection = Doctrine::getTable('Section')->findOneBySiteIdAndSlug($site->getId(),"pais-e-educadores");
            $block = Doctrine::getTable('Block')->findOneBySectionIdAndSlug($particularSection->getId(), "destaques-secundarios"); // Pega o bloco "destaques-secundarios" da seção "para os pais"
            if ($block) $_displays["destaques-secundarios"] = $block->retriveDisplays(); // Pega os destaques do bloco "destaques-secundarios"    
          ?>        
          <?php if(isset($_displays['destaques-secundarios'])): ?>
            <?php if(count($_displays['destaques-secundarios']) > 0): ?>
            
                <!--destaque -->
                <?php foreach($_displays['destaques-secundarios'] as $d): ?>
                <a href="<?php echo $d->retriveUrl() ?>" title="<?php echo $d->getTitle() ?>">
                  <img src="<?php echo $d->retriveImageUrlByImageUsage("image-13") ?>" alt="<?php echo $d->getTitle() ?>" />
                </a>
                <?php endforeach; ?> 
                <!--/destaque -->
              
            <?php endif; ?>
          <?php endif; ?>
          
          <!-- banner vilasesamo -->
          <?php include_partial_from_folder('sites/vilasesamo', 'global/banner300x250', array('site' => $site, 'section' => $section)) ?>
          <!-- /banner vilasesamo -->
      
          <!--face like box-->
          <iframe title="Box Facebook" tabindex="-1" src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2FVilaSesamoOficial&amp;width&amp;height=290&amp;colorscheme=light&amp;show_faces=true&amp;header=true&amp;stream=false&amp;show_border=true&amp;appId=446708858755935" scrolling="no" frameborder="0" style="width: 300px;margin-bottom: 20px;border:none; overflow:hidden; height:290px;" allowTransparency="true"></iframe>
          <!--/face like box-->
        
        </div>
        <!--destaques-->
        
        <!-- banner vilasesamo -->
        <?php include_partial_from_folder('sites/vilasesamo', 'global/banner300x250', array('site' => $site, 'section' => $section,'asset'=> $asset)) ?>
        <!-- /banner vilasesamo -->
        
      </div>
      <!--/container-->
      
    </div>
    <!--container conteudo-->
    
  </section>
  <!--/section-->
  
</div>
<!--section--> 
<script> 
$('.autores').click(function(){
  var who = $(this).attr('data-scroll')
  console.log(who);
  var where = $('#'+who).offset().top-140;
  goTop(where);
});
function goTop(where){
  $('html, body').animate({
    scrollTop:where
  }, "slow");
}      
</script>
<?php echo $noscript; ?>

<!--Tabindex no corpo do atigo-->
<script>
$('.col-esq article a').each(function(index) {
  $(this).attr('tabindex', 0);
});
</script>
<?php echo $noscript; ?>

<!--Links das imagens do artigo-->
<script>
$('.col-esq article p img').each(function(index) {
  $(this).attr('tabindex', -1).attr('aria-hidden',true);
});
</script>
<?php echo $noscript; ?>

<!-- Box ler
<script>
$('.texto').each(function(index) {
  $(this).attr('tabindex', -1).attr('aria-hidden',true);
});
</script>
<?php echo $noscript; ?>

-->


