<?php use_helper('I18N', 'Date') ?>
<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<!--[if lt IE 8]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/sites/vilasesamo2/internas.css" type="text/css" />

<script>
  $("body").addClass("cuidadores artigo");
  <?php if($section->Parent->getSlug()=="cuidadores"):?>
    $(document).ready(function(){
      $(".btn-cuidadores-topo").addClass("active");
    });  
  <?php endif; ?>
</script>

<!-- HEADER -->
<?php include_partial_from_folder('sites/vila-sesamo', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'section' => $section)) ?>
<!-- /HEADER -->

<!--content-->
<div id="content">
  
  <!--section -->
  <section class="filtro row-fluid">
    
    <!--container conteudo-->
    <div class="b-verde borda-arredonda">
      <h1>
        <span class="icones-sprite-interna icone-cuidadores-grande"></span>
        <?php echo $section->getTitle() ?>
        <a class="todos-assets" title="voltar para todas atividades">
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
                <span class="data"><?php echo format_date($asset->getUpdatedAt(), "g") ?> - Por</span>
                
                <?php $colaboradores = $asset->retriveRelatedAssetsByRelationType("Colaborador") ?>
                <?php if(count($colaboradores) > 0): ?>
                  <?php
                    $autores = array();
                    foreach($colaboradores as $c) {
                      $autores[] = $c->AssetPerson->getName();
                    }
                  ?>
                  <span class="nome">
                    <?php if(count($autores) > 0): ?>
                      <?php echo implode(", ", $autores) ?>
                    <?php endif; ?>.
                  </span>
                  <?php else: ?>
                    <?php if($asset->AssetContent->getAuthor()): ?>
                      <span class="nome"><?php echo $asset->AssetContent->getAuthor() ?></span>
                    <?php endif; ?>
                  <?php endif; ?>
              </div>
              
              <!--compartilhar redes-->
              <?php //include_partial_from_folder('sites/vila-sesamo', 'global/shareArticle', array('site' => $site, 'mainSite' => $mainSite, 'section' => $section, 'uri'=>$uri)) ?>
              <!--/compartilhar redes-->
              
            </header>
            <!--/header-->
            
            <!--section-->
            <section>
              <p><?php echo $asset->getDescription() ?></p>
              <?php $preview = $asset->retriveRelatedAssetsByRelationType("Preview") ?>
              <?php if(count($preview) > 0): ?>
                <p>
                  <img id="img-capa" src="<?php echo $preview[0]->retriveImageUrlByImageUsage("image-13-b") ?>" alt="<?php echo $asset->getTitle() ?>" />
                  <span id="legenda" ><?php echo $preview[0]->getDescription() ?></span>
                </p>
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
            <div class="clearboth">
              
              <!--compartilhar redes-->
              <?php include_partial_from_folder('sites/vila-sesamo', 'global/shareArticle', array('site' => $site, 'mainSite' => $mainSite, 'section' => $section, 'uri'=>$uri)) ?>
              <!--/compartilhar redes-->
               
              <!--sobre os autores-->
              <?php if(count($colaboradores) > 0): ?>
              <h2>
                <i class="icones-sprite-interna icone-carregar-verde"></i>
                sobre o autor:
              </h2>
                <?php foreach($colaboradores as $c): ?>
                  <article class="sobre-autor">
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
                <h3>Gostou desse artigo? Comente!</h3>
              </div>
              
              <fb:comments href="<?php echo $uri ?>" numposts="3" width="580" publish_feed="true"></fb:comments>
              
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
          <div class="box-sobre">
            <h2>
              <i class="icones-sprite-interna icone-carregar-verde"></i>
              sobre...
            </h2>
            <div class="links">
              <?php foreach($tags as $t): ?>
                <a href="http://cmais.com.br/vila-sesamo/busca?output=search&q=<?php echo $t ?>" title="<?php echo $t ?>"><?php echo $t ?></a>
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
                <h2 class="titulo-box">
                  <i class="icones-sprite-interna icone-artigo-ve-pequeno"></i>
                  Para ler
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
            <?php endif; ?>
          <?php endif; ?>
          </div>
          <!-- /para ler-->
          
          <!-- para brincar junto-->
          <div class="box-brincarjunto destaques">
            <h2 class="titulo-box">
              <i class="icones-sprite-menu icone-cuidadores"></i>
              Para brincar junto
            </h2>
           
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
                <a href="/vila-sesamo/jogos/livro-animado-0" title="">
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
                <a href="/vila-sesamo/jogos/livro-animado-0" title="">
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
                <a href="/vila-sesamo/jogos/livro-animado-0" title="">
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
            
          </div>
          <!-- /para brincar junto-->
                     
        </div>
        <!--/col dir -->
        
        <!--destaques-->
        <?php
          $particularSection = Doctrine::getTable('Section')->findOneBySiteIdAndSlug($site->getId(),"cuidadores");
          $block = Doctrine::getTable('Block')->findOneBySectionIdAndSlug($particularSection->getId(), "destaques-secundarios"); // Pega o bloco "destaques-secundarios" da seção "para os pais"
          if ($block) $_displays["destaques-secundarios"] = $block->retriveDisplays(); // Pega os destaques do bloco "destaques-secundarios"    
        ?>        
        <?php if(isset($_displays['destaques-secundarios'])): ?>
          <?php if(count($_displays['destaques-secundarios']) > 0): ?>
            <div class="span4 pull-right banner">
          
              <!--destaque -->
              <?php foreach($_displays['destaques-secundarios'] as $d): ?>
              <a href="<?php echo $d->retriveUrl() ?>" title="<?php echo $d->getTitle() ?>">
                <img src="<?php echo $d->retriveImageUrlByImageUsage("image-13") ?>" alt="<?php echo $d->getTitle() ?>" />
              </a>
              <?php endforeach; ?> 
              <!--/destaque -->
          
              <!--face like box-->
              <iframe src="//www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Ftvcultura&amp;width&amp;height=290&amp;colorscheme=light&amp;show_faces=true&amp;header=true&amp;stream=false&amp;show_border=true&amp;appId=446708858755935" scrolling="no" frameborder="0" style="border:none; overflow:hidden; height:290px;width: 287px;margin-bottom: 20px;" allowTransparency="true"></iframe>
              <!--/face like box-->
            </div>
          <?php endif; ?>
        <?php endif; ?>
        <!--destaques-->
        
      </div>
      <!--/container-->
      
    </div>
    <!--container conteudo-->
    
  </section>
  <!--/section-->
  
</div>
<!--section--> 
       
