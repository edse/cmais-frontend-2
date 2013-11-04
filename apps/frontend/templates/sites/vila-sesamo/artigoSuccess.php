<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<!--[if lt IE 8]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/sites/vilasesamo2/internas.css" type="text/css" />

<script>
  $("body").addClass("cuidadores");
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
        <i class="icones-setas icone-voltar-artigo"></i>
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
              
              <h1>NOME DO ARTIGO com quebra de linha de texto e espaçamento entrelinhas de 30 pt</h1>
               
              <div class="overflow">
                <span class="data">DD/MM/AAAA - por</span>
                <span class="nome">Nome do Autor</span>
              </div>
              
              <!--compartilhar redes-->
              <?php include_partial_from_folder('sites/vila-sesamo', 'global/shareArticle', array('site' => $site, 'mainSite' => $mainSite, 'section' => $section, 'uri'=>$uri)) ?>
              <!--/compartilhar redes-->
              
            </header>
            <!--/header-->
            
            <!--section-->
            <section>
              <?php echo html_entity_decode($asset->AssetContent->render()) ?>
              
              <!--imprimir/baixar-->
              <div class="imprimir">
                
                <a class="option-assets" href="#" title="Imprimir" target="_blank">
                  <i class="icones-sprite-interna icone-imprimir-verde"></i>
                  <span>Imprimir</span>
                </a>
                
                <a class="option-assets baixar" href="#" title="Baixar">
                  <i class="icones-sprite-interna icone-baixar-verde"></i>
                  <span>Baixar</span>
                </a>
                
              </div>
              <!--/imprimir/baixar-->
              
              
            </section>
            <!--/section-->
            
            <!--footer-->
            <div class="clearboth">
              
              <!--compartilhar redes-->
              <?php include_partial_from_folder('sites/vila-sesamo', 'global/shareArticle', array('site' => $site, 'mainSite' => $mainSite, 'section' => $section, 'uri'=>$uri)) ?>
              <!--/compartilhar redes-->
              
              <!--sobre os autores-->
              <h2>
                <i class="icones-sprite-interna icone-carregar-verde"></i>
                sobre o autor:
              </h2>
              <article class="sobre-autor">
                <div class="sombra-amarela"></div>
                <div class="foto-sobre">
                  <img src="http://midia.cmais.com.br/displays/d175b4dffffcee009d8fbfd9d1febcc80f1937c4.jpg" alt="Histórias de Cozinha" name="Histórias de Cozinha">
                </div>
                <div class="descricao-sobre">
                  <h3>Professora Miriam Sousa</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer adipiscing scelerisque erat, in bibendum diam facilisis sit amet. Suspendisse quis nisi imperdiet, commodo ipsum non, palesuada ante. Donec ultrices aliquet justo urabitur vitae.</p>
                  <a href="#">Contato@profmirian.com.br</a><br>
                  <a href="#">www.profmiriam.com.br</a>
                </div>
              </article>
              
              <article class="sobre-autor">
                <div class="sombra-amarela"></div>
                <div class="foto-sobre">
                  <img src="http://midia.cmais.com.br/displays/d175b4dffffcee009d8fbfd9d1febcc80f1937c4.jpg" alt="Histórias de Cozinha" name="Histórias de Cozinha">
                </div>
                <div class="descricao-sobre">
                  <h3>Professora Miriam Sousa</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer adipiscing scelerisque erat, in bibendum diam facilisis sit amet. Suspendisse quis nisi imperdiet, commodo ipsum non, palesuada ante. Donec ultrices aliquet justo urabitur vitae.</p>
                  <a href="#">Contato@profmirian.com.br</a><br>
                  <a href="#">www.profmiriam.com.br</a>
                </div>
              </article>
              <!--/sobre os autores-->
              
              <div class="comente">              
                <div class="divisa"></div>
                <i class="icones-form icone-balao-verde"></i>
                <p>Gostou desse artigo? Comente!</p>
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
          <div class="box-sobre">
            <h2>
              <i class="icones-sprite-interna icone-carregar-verde"></i>
              sobre...
            </h2>
            <div class="links">
              <a href="#" title="titulo">habitos saudáveis</a>
              <a href="#" title="titulo">comunicação</a>
              <a href="#" title="titulo">pré-escolar</a>
              <a href="#" title="titulo">auto-conhecimento</a>
              <a href="#" title="titulo">ciência</a>
            </div>
            <div class="bottom-box-sobre">
              <img src="/portal/images/capaPrograma/vilasesamo2/box-bottom-sobre.png" alt=""/>
            </div>
          </div>
          <!--/tags-->
          
          <!-- para ler-->
          <div class="box-ler">
            <h2 class="titulo-box">
              <i class="icones-sprite-interna icone-artigo-ve-pequeno"></i>
              Para ler
            </h2>
            
            <!--lista-->
            <ul>
              <!--item-->
              <li>
                <a href="#" title="titulo">
                  <h3>Nome do Artigo</h3>
                  <p>Lorem ipsum dolor sit amet, consect etur adi piscing elit. Sed in com modo posuere.</p>
                </a>
                <div class="divisa"></div>
              </li>
              <!--item-->
              
              <!--item-->
              <li>
                <a href="#" title="titulo">
                  <h3>Nome do Artigo</h3>
                  <p>Lorem ipsum dolor sit amet, consect etur adi piscing elit. Sed in com modo posuere.</p>
                </a>
                <div class="divisa"></div>
              </li>
              <!--item-->
              
              <!--item-->
              <li>
                <a href="#" title="titulo">
                  <h3>Nome do Artigo</h3>
                  <p>Lorem ipsum dolor sit amet, consect etur adi piscing elit. Sed in com modo posuere.</p>
                </a>
                <div class="divisa"></div>
              </li>
              <!--item-->
              
              <!--item-->
              <li>
                <a href="#" title="titulo">
                  <h3>Nome do Artigo</h3>
                  <p>Lorem ipsum dolor sit amet, consect etur adi piscing elit. Sed in com modo posuere.</p>
                </a>
                <div class="divisa"></div>
              </li>
              <!--item-->
              
              
            </ul>
            <!--/lista-->
            
          </div>
          <!-- /para ler-->
          
          <!-- para brincar junto-->
          <div class="box-brincarjunto destaques">
            <h2 class="titulo-box">
              <i class="icones-sprite-menu icone-cuidadores"></i>
              Para brincar junto
            </h2>
           
           <!--destaque jogos--> 
           <article class="jogos">
              <a href="/vila-sesamo/jogos/livro-animado-0" title="">
                <img src="http://midia.cmais.com.br/assets/image/image-13/0bf1d319befd5fd100aac2c1c42e930127307d50.jpg" alt="Livro Animado">
                <i class="icones-sprite-interna icone-jogos-pequeno"></i>
                <div class="texto">
                  <img class="altura" src="/portal/images/capaPrograma/vilasesamo2/altura.png" alt="">
                  Livro Animado
                </div>
              </a>
            </article>
            <!--/destaque jogos-->
            
            <!--destaque atividades-->
            <article class="atividades">
              <a href="/vila-sesamo/jogos/livro-animado-0" title="">
                <img src="http://midia.cmais.com.br/assets/image/image-13/f3f8a63c5113759db96963dd1f8e8bba5720446d.jpg" alt="Monte monstrinhos - Recorte e brinque ">
                <i class="icones-sprite-interna icone-atividades-pequeno"></i>
                <div class="texto">
                  <img class="altura" src="/portal/images/capaPrograma/vilasesamo2/altura.png" alt="">
                  Monte monstrinhos - Recorte e brinque             
                </div>
              </a>
            </article>
            <!--/destaque atividades-->
            
            <!--destaque videos-->
            <article class="videos">
              <a href="/vila-sesamo/jogos/livro-animado-0" title="">
                <div class="yt-menu">
                  <img src="http://img.youtube.com/vi/mxHhbk9XUUE/0.jpg" alt="Só eu sou eu - Vila Sésamo">
                </div>
                
                <i class="icones-sprite-interna icone-videos-pequeno"></i>
                <div class="texto">
                  <img class="altura" src="/portal/images/capaPrograma/vilasesamo2/altura.png" alt="">
                  Canção do Garibaldo - Vila Sésamo
                </div>
              </a>
            </article>
            <!--/destaque videos-->
            
          </div>
          <!-- /para brincar junto-->
                     
        </div>
        <!--/col dir -->
        
        <!--destaques-->
        <div class="span4 pull-right banner">
          
          <!--destaque 1 -->
          <a href="#" title="">
            <img src="/portal/images/capaPrograma/vilasesamo2/destaque.png" alt""/>
          </a>
          <!--/destaque 1 -->
          
          
          <!--destaque 2 -->
          <a href="#" title="">
            <img src="/portal/images/capaPrograma/vilasesamo2/destaque.png" alt""/>
          </a>
          <!--/destaque 2 -->
          
          <!--face like box-->
          <iframe src="//www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Ftvcultura&amp;width&amp;height=290&amp;colorscheme=light&amp;show_faces=true&amp;header=true&amp;stream=false&amp;show_border=true&amp;appId=446708858755935" scrolling="no" frameborder="0" style="border:none; overflow:hidden; height:290px;width: 287px;margin-bottom: 20px;" allowTransparency="true"></iframe>
          <!--/face like box-->
        </div>
        <!--destaques-->
        
      </div>
      <!--/container-->
      
    </div>
    <!--container conteudo-->
    
  </section>
  <!--/section-->
  
</div>
<!--section--> 
       
<?php /*programado
 * 
<?php use_helper('I18N', 'Date') ?>

<!-- HEADER -->
<?php include_partial_from_folder('sites/vila-sesamo', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'section' => $section))?>
<!-- /HEADER -->

<!-- barra do titulo da seção -->
<div>
  <span><?php echo $section->getTitle() ?></span>
  <a href="/<?php echo $site->getSlug() ?>/<?php echo $section->getSlug() ?> " title="todos os artigos">todos os artigos</a>
</div>
<!--/barra do titulo da seção -->

<!-- esquerda -->
<div>
  
  <!-- titulo, data de publicação, autor, compartilhe, headline e imagem de cabeçalho do texto -->
  <div>
    <h1><?php echo $asset->getTitle() ?></h1>
    <span><?php echo format_date($asset->getUpdatedAt(), "g") ?></span>
    
    <?php $colaboradores = $asset->retriveRelatedAssetsByRelationType("Colaborador") ?>
    <?php if(count($colaboradores) > 0): ?>
      <?php
        $autores = array();
        foreach($colaboradores as $c) {
          $autores[] = $c->AssetPerson->getName();
        }
      ?>      
    <span>Por <?php if(count($autores) > 0): ?><?php echo implode(", ", $autores) ?><?php endif; ?>.</span>
    <?php else: ?>
      <?php if($asset->AssetContent->getAuthor()): ?>
    <span>Por <?php echo $asset->AssetContent->getAuthor() ?></span>
      <?php endif; ?>
    <?php endif; ?>
    
    <p>Compartilhe este artigo: <?php // redes sociais aqui  ?></p>
    <p><?php $asset->getDescription() ?></p>
    <?php $preview = $asset->retriveRelatedAssetsByRelationType("Preview") ?>
    <?php if(count($preview) > 0): ?>
    <p><img src="<?php echo $preview[0]->retriveImageUrlByImageUsage("image-13") ?>" alt="<?php echo $asset->getTitle() ?>" /></p>
    <?php endif; ?>
  </div>
  <!--/titulo, data de publicação, autor, compartilhe, headline e imagem de cabeçalho do texto -->
  
  <!-- conteudo -->
  <div>
    <?php echo html_entity_decode($asset->AssetContent->render()) ?>
  </div>
  <!-- /conteudo -->
  
  <!-- compartilhe -->
  <div>
    <p>Compartilhe este artigo: <?php //redes sociais aqui  ?></p>
  </div>
  <!--/compartilhe-->
  
  <!--autores-->
  <?php if(count($colaboradores) > 0): ?>
  <div>
    <p>Sobre os autores:</p>
    <?php foreach($colaboradores as $c): ?>
    <div>
      <?php $preview = $c->retriveRelatedAssetsByRelationType("Preview") ?>
      <?php if($preview): ?>
        <?php if($preview[0]->retriveImageUrlByImageUsage("image-13")): ?>
      <img src="<?php echo $preview[0]->retriveImageUrlByImageUsage("image-13") ?>" alt="<?php echo $c->getTitle() ?>" />
        <?php endif; ?>
      <?php endif; ?>
      <p><?php echo $c->getTitle() ?></p>
      <p><?php echo $c->AssetPerson->getBio() ?></p>
      <p><a href="mailto: <?php echo $c->AssetPerson->getHeadline() ?>" title="envie uma mensagem para <?php echo $c->getTitle() ?>"><?php echo $c->AssetPerson->getHeadline() ?></a></p>
      <p><a href="<?php echo $c->AssetPerson->getWebsiteUrl() ?>" target="_blank" title=""><?php echo $c->AssetPerson->getWebsiteUrl() ?></a></p>
    </div>      
    <?php endforeach; ?>
  </div>
  <?php endif; ?>
  <!--/autores-->
  
  <!--facebook comentarios-->
  <fb></fb>
  <!--/facebook comentarios-->
  
</div>
<!--/esquerda-->

<!--direita-->
<div>
  
  <!--nuvem de tags -->
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
  <p>+ sobre</p>
  <ul>
    <?php foreach($tags as $t): ?>
    <li><a href="http://cmais.com.br/vila-sesamo/busca?output=search&q=<?php echo $t ?>" title="<?php echo $t ?>"><?php echo $t ?></a></li>
    <?php endforeach; ?>
  </ul>
  <?php endif; ?>
  <!--/nuvem de tags-->
  
  <!-- artigos relacionados -->
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
  <ul>      
      <?php foreach($related_articles as $ra): ?>
    <li>
      <a href="<?php echo $ra->retriveUrl() ?>" title="<?php echo $ra->getTitle() ?>">
        <span><?php echo $ra->getTitle() ?></span>
        <span><?php echo $ra->getDescription() ?></span>
      </a>
    </li> 
      <?php endforeach; ?>
  </ul>
    <?php endif; ?>
  <?php endif; ?>
  <!--/artigos relacionados -->
  
  
  <!--atividade relacionada -->
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
  <div>
      <?php $preview = $related_asset[0]->retriveRelatedAssetsByRelationType("Preview") ?>
      <?php if(count($preview) > 0): ?>
    <img src="<?php echo $preview[0]->retriveImageUrlByImageUsage("image-13") ?>" alt="<?php echo $related_asset[0]->getTitle() ?>" />
      <?php endif; ?>
    <i class="icones-sprite-interna icone-atividades-pequeno"></i>
    <div>
      <img class="altura" src="/portal/images/capaPrograma/vilasesamo2/altura.png"/>
      <?php echo $related_asset[0]->getTitle() ?>
    </div>
  </div>
    <?php endif; ?>
  <?php endif; ?>
  <!--/atividade relacionada -->
  
  <!--jogo relacionada -->
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
  <div>
      <?php $preview = $related_asset[0]->retriveRelatedAssetsByRelationType("Preview") ?>
      <?php if(count($preview) > 0): ?>
    <img src="<?php echo $preview[0]->retriveImageUrlByImageUsage("image-13") ?>" alt="<?php echo $related_asset[0]->getTitle() ?>" />
      <?php endif; ?>
    <i class="icones-sprite-interna icone-jogos-pequeno"></i>
    <div>
      <img class="altura" src="/portal/images/capaPrograma/vilasesamo2/altura.png"/>
      <?php echo $related_asset[0]->getTitle() ?>
    </div>
  </div>
    <?php endif; ?>
  <?php endif; ?>
  <!--/jogo relacionado -->
   
  <!--video relacionado -->
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
  <div>
    <img class="youtubeImage" src="http://img.youtube.com/vi/<?php echo $related_asset[0]->AssetVideo->getYoutubeId() ?>/0.jpg" alt="<?php echo $related_asset[0]->getTitle() ?>">
    <i class="icones-sprite-interna icone-videos-pequeno"></i>
    <div>
      <img class="altura" src="/portal/images/capaPrograma/vilasesamo2/altura.png"/>
      <?php echo $related_asset[0]->getTitle() ?>
    </div>
  </div>
    <?php endif; ?>
  <?php endif; ?>
  <!--/video relacionado -->
  
  <!--outros destaques-->
  <?php
    $particularSection = Doctrine::getTable('Section')->findOneBySiteIdAndSlug($site->getId(),"para-os-pais");
    $block = Doctrine::getTable('Block')->findOneBySectionIdAndSlug($particularSection->getId(), "destaques-secundarios"); // Pega o bloco "destaques-secundarios" da seção "para os pais"
    if ($block) $_displays["destaques-secundarios"] = $block->retriveDisplays(); // Pega os destaques do bloco "destaques-secundarios"    
  ?>        
  <?php if(isset($_displays['destaques-secundarios'])): ?>
    <?php if(count($_displays['destaques-secundarios']) > 0): ?>
  <div class="span4 col-direita">
    <?php foreach($_displays['destaques-secundarios'] as $d): ?>
    <a class="destaque-small" href="<?php echo $d->retriveUrl() ?>" title="<?php echo $d->getTitle() ?>">
      <img src="<?php echo $d->retriveImageUrlByImageUsage("image-13") ?>" alt="<?php echo $d->getTitle() ?>" />
    </a>
    <?php endforeach; ?> 
    
  </div>
    <?php endif; ?>
  <?php endif; ?>
  <!--/outros destaques-->
  
</div>
<!--/direita-->

*/?>

