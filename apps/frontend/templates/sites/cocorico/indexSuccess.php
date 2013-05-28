<link href="/portal/css/tvcultura/sites/cocorico/home.css" rel="stylesheet">

<style type="text/css">
/* tooltip*/
.tooltip-inner { background:#747a3a; padding:3px 10px; font-size: 13px; line-height:15px; }
.tooltip.in,
.tooltip { opacity: 1; filter: alpha(opacity=100);}
.tooltip.bottom .tooltip-arrow {  border-bottom-color: #747a3a;}
/* tooltip*/
</style>


<script>
  $(document).ready(function() {
    $('#myCarousel').carousel({
      interval : 3000
    });
    $("button#fechar , body").click(function() {
      $('#modal-video').remove();
      $('.modal-backdrop.bg-video').remove();
    });
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
        <a href="<?php echo $displays['destaque-principal-joguinhos'][0]->retriveUrl() ?>" class="span9" title="<?php echo $displays['destaque-principal-joguinhos'][0]->getDescription() ?>">
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
            <?php /*   
          <?php $se = $displays["destaque-2"][0]->Asset->Sections[0]->getTitle(); ?>
            <?php $se_link = $displays["destaque-2"][0]->Asset->Sections[0]->getSlug(); ?>
            
            <?php
              $display_img_src = $displays['destaque-2'][0]->retriveImageUrlByImageUsage('image-5-b');
              if ($display_img_src == '') {
                $related = $displays['destaque-2'][0]->Asset->retriveRelatedAssetsByRelationType('Preview');
                $display_img_src = $related[0]->retriveImageUrlByImageUsage('image-5-b');
              }
            ?>
           */
          ?>
           <!-- box-destaque 1 -->
            <div class="span6 box-destaque tvcocorico">
              <h3><a href="<?php echo $displays['destaque-2'][0]->retriveUrl() ?>"><?php echo $displays['destaque-2'][0]->Block->getTitle() ?></a></h3>
              <a href="<?php echo $displays['destaque-2'][0]->retriveUrl() ?>"><img src="<?php echo $displays["destaque-2"][0]->retriveImageUrlByImageUsage('image-3-b') ?>" alt="<?php echo $displays["destaque-2"][0]->getTitle() ?>"></a>
              <a href="<?php echo $displays['destaque-2'][0]->retriveUrl() ?>"><?php echo $displays["destaque-2"][0]->getTitle() ?></a>
             </div>
            <!-- /box-destaque 1 -->
          
          <?php endif; ?>
        <?php endif; ?>
                
        <?php if(isset($displays['destaque-3'])):?>
          <?php if(count($displays['destaque-3']) > 0): ?>
             <?php /*
          <?php $se = $displays["destaque-3"][0]->Asset->Sections[0]->getTitle(); ?>
            <?php $se_link = $displays["destaque-3"][0]->Asset->Sections[0]->getSlug(); ?>
            
            <?php
              $display_img_src = $displays['destaque-3'][0]->retriveImageUrlByImageUsage('image-5-b');
              if ($display_img_src == '') {
                $related = $displays['destaque-3'][0]->Asset->retriveRelatedAssetsByRelationType('Preview');
                $display_img_src = $related[0]->retriveImageUrlByImageUsage('image-5-b');
              }
            ?>
              */ ?>
           
           <!-- box-destaque 2 -->
            <div class="span6 box-destaque">
              <h3><a href="<?php echo $displays['destaque-3'][0]->retriveUrl() ?>"><?php echo $displays['destaque-3'][0]->Block->getTitle() ?></a></h3>
              <a href="<?php echo $displays['destaque-3'][0]->retriveUrl() ?>"><img src="<?php echo $displays["destaque-3"][0]->retriveImageUrlByImageUsage('image-3-b') ?>" alt="<?php echo $displays["destaque-3"][0]->getTitle() ?>"></a>
              <a href="<?php echo $displays['destaque-3'][0]->retriveUrl() ?>"><?php echo $displays["destaque-3"][0]->getTitle() ?></a>
             </div>
            <!--/box-destaque 2 -->
            
          <?php endif; ?>
        <?php endif; ?>
      </div>
    </div>
    
    <div class="span4 col-dir">
      <a class="logo" href="<?php echo $site->retriveUrl() ?>/tvcocorico">
        <img class="span12" src="/portal/images/capaPrograma/<?php echo $site-> getSlug(); ?>/tvcoco.png" />
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
            
        <a class="convidado span12" href="http://tvcultura.cmais.com.br/cocorico/tvcocorico/convidados/<?php echo $displays['destaque-tv-cocorico'][0]->Asset->getSlug() ?>" title="Próximo convidado: <?php echo $displays['destaque-tv-cocorico'][0]->getTitle() ?>">
          <img src="<?php echo $display_img_src ?>" alt="<?php echo $displays['destaque-tv-cocorico'][0]->getTitle() ?>" />
          <?php //echo $displays['destaque-tv-cocorico'][0]->getTitle() ?>
          <?php $tam=35; $str=$displays['destaque-tv-cocorico'][0]->getTitle(); mb_internal_encoding("UTF-8"); if(strlen($str) <= $tam) echo $str; else echo mb_substr($str, 0, $tam-1)."&hellip;" ?>
        </a>
        <a href="<?php echo $site->retriveUrl() ?>/tvcocorico/convidados">
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
          ->orderBy('a.id desc')
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
  <!-- RODAPE -->
		<div id="rodape-portal">
			<div class="capa-voltar-topo">
				<a class="voltar-topo" href="#"><span></span>voltar ao topo</a>
			</div>
			<div class="capa-rodape">
				<div class="box-rodape">
					<div class="col-esq">
						<ul>
							<li class="tit">Portal</li>
							<li><a href="http://www.cmais.com.br" title="Home">Home</a></li>
							<li><a href="http://www.cmais.com.br/videos" title="V&iacute;deos">V&iacute;deos</a></li>
      				<li><a href="http://www.cmais.com.br/aovivo" title="Home">Ao Vivo</a></li>
			        <li><a href="http://www.cmais.com.br/expediente" title="Expediente">Expediente</a></li>
						</ul>
						<ul>
							<li class="tit">Editorias</li>
							<li><a href="http://www.cmais.com.br/arte-e-cultura" title="Arte &amp; Cultura">Arte &amp; Cultura</a></li>
							<li><a href="http://www.cmais.com.br/educacao" title="Educa&ccedil;&atilde;o">Educa&ccedil;&atilde;o</a></li>
							<li><a href="http://www.cmais.com.br/infantil" title="+ Crian&ccedil;a">+ Crian&ccedil;a</a></li>
							<li><a href="http://www.cmais.com.br/jornalismo" title="Jornalismo">Jornalismo</a></li>
          		<li><a href="http://www.cmais.com.br/musica" title="M&uacute;sica">M&uacute;sica</a></li>
						</ul>
					</div>
					<div class="col-central">
						<div class="posicao">
							<p class="tit">+Populares</p>
							<ul>
								<li><a href="http://tvcultura.cmais.com.br" class="tit">TV Cultura</a></li>
								<li><a href="http://tvcultura.cmais.com.br/transito" title="Guia do Trânsito">Guia do Trânsito</a></li>
								<li><a href="http://tvcultura.cmais.com.br/jornaldacultura" title="Jornal da Cultura">Jornal da Cultura</a></li>
								<li><a href="http://tvcultura.cmais.com.br/metropolis" title="Metr&oacute;polis">Metr&oacute;polis</a></li>
								<li><a href="http://tvcultura.cmais.com.br/provocacoes" title="Provoca&ccedil;&otilde;es">Provoca&ccedil;&otilde;es</a></li>
                <li><a href="http://tvcultura.cmais.com.br/quintaldacultura" title="Quintal da Cultura">Quintal da Cultura</a></li>
								<li><a href="http://tvcultura.cmais.com.br/reportereco" title="Reporter Eco">Repórter Eco</a></li>
								<li><a href="http://tvcultura.cmais.com.br/rodaviva" title="Roda Viva">Roda Viva</a></li>
							</ul>
							<ul>
								<li><a href="http://www.culturabrasil.com.br/" class="tit" title="R&aacute;dio Cultura Brasil">R&aacute;dio Cultura Brasil</a></li>
								<li><a href="http://www.culturabrasil.com.br/especiais" title="Especiais">Especiais</a></li>
								<li><a href="http://www.culturabrasil.com.br/entrevistas" title="Entrevistas">Entrevistas</a></li>
								<li><a href="http://www.culturabrasil.com.br/radarcultura" title="RadarCultura">RadarCultura</a></li>
								<li><a href="http://www.culturabrasil.com.br/playlists" title="Playlists">Playlists</a></li>
								<li><a href="http://www.culturabrasil.com.br/podcasts" title="Podcasts">Podcasts</a></li>
							</ul>
							<ul>
								<li><a href="http://culturafm.cmais.com.br" class="tit" title="R&aacute;dio Cultura FM">R&aacute;dio Cultura FM</a></li>
								<li><a href="http://culturafm.cmais.com.br/selecao-do-ouvinte" title="Sele&ccedil;&atilde;o do Ouvinte">Sele&ccedil;&atilde;o do Ouvinte</a></li>
								<li><a href="http://culturafm.cmais.com.br/guia-do-ouvinte" title="Grade de Programa&ccedil;&atilde;o">Grade de Programa&ccedil;&atilde;o</a></li>
								<li><a href="http://culturafm.cmais.com.br/para-ouvir" title="Podcasts">Podcasts</a></li>
							</ul>
						</div>
						<div class="posicao">
							<ul>
								<li><a href="http://univesp.tv.br/" class="tit">Univesp TV</a></li>
								<li><a href="http://univesptv.cmais.com.br/inglescommusica" title="Ingl&ecirc;s Com M&uacute;sica">Ingl&ecirc;s Com M&uacute;sica</a></li>
								<li><a href="http://univesptv.cmais.com.br/pedagogia-unesp" title="Pedagogia Unesp">Pedagogia Unesp</a></li>
                <li><a href="http://univesptv.cmais.com.br/cursos" title="Cursos Livres">Cursos Livres</a></li>
                <li><a href="http://univesptv.cmais.com.br/licenciatura-em-ciencias" title="Licenciatura em
ciências">Licenciatura em
ciências</a></li>
							</ul>
							<ul>
								<li><a href="http://www.multicultura.com.br/" class="tit">multiCULTURA</a></li>
								<li><a href="http://multicultura.cmais.com.br/o-que-e-1" title="O que &eacute;">O que &eacute;</a></li>
								<li><a href="http://multicultura.cmais.com.br/como-assistir-o-multicultura" title="Como Assistir">Como Assistir</a></li>
								<li><a href=" http://multicultura.cmais.com.br/programacao" title="Programa&ccedil;&atilde;o">Programa&ccedil;&atilde;o</a></li>
							</ul>
							<ul>
								<li><a href="http://www.tvratimbum.com.br/" class="tit">TV R&aacute; Tim Bum</a></li>
                <li><a href="http://tvratimbum.cmais.com.br/xtudo" title="X-Tudo ">X-Tudo </a></li>
								<li><a href="http://www.tvcultura.com.br/cocorico" title="Cocoric&oacute;">Cocoric&oacute;</a></li>
								<li><a href="http://tvratimbum.cmais.com.br/baudehistorias" title="Ba&uacute; de Hist&oacute;rias">Ba&uacute; de Hist&oacute;rias</a></li>
								<li><a href="http://tvratimbum.cmais.com.br/mundodalua" title="Mundo da Lua">Mundo da Lua</a></li>
							</ul>
						</div>
						<div class="posicao">
							<ul>
								<li class="tit">Pela Web</li>
								<li><a href="http://www.facebook.com/tvcultura" title="Facebook">Facebook</a></li>
								<li><a href="http://www.flickr.com/photos/televisaocultura" title="Flickr">Flickr</a></li>
								<li><a href="https://google.com/+tvcultura" title="Google+">Google+</a></li>
								<li><a href="http://instagram.com/tvcultura" title="Instagram">Instagram</a></li>
								<li><a href="http://twitter.com/#!/tvcultura" title="Twitter">Twitter</a></li>
								<li><a href="http://www.youtube.com/cultura" title="Youtube">Youtube</a></li>
							</ul>
							<ul>
								<li><a href="http://www2.tvcultura.com.br/fpa/" class="tit">Funda&ccedil;&atilde;o Padre Anchieta</a></li>
								<li><a href="http://fpa.com.br/sic" title="SiC - Serviço de Informações ao Cidadão">SiC</a></li>
								<li><a href="http://www2.tvcultura.com.br/fpa/institucional/licitacoes.aspx" title="Licitações">Licitações</a></li>
								<li><a href="http://cmais.com.br/captacao" title="Captacao">Capta&ccedil;&atilde;o</a></li>
						    <li><a href="http://cmais.com.br/imprensa" title="Assessoria de Imprensa">Assessoria de Imprensa</a></li>
	      				<li><a href="http://www2.tvcultura.com.br/faleconosco/" title="Fale Conosco">Fale Conosco</a></li>
								<li><a href="http://www2.tvcultura.com.br/selecao/" title="Trabalhe Conosco">Trabalhe Conosco</a></li>
								<li><a href="http://cmais.com.br/cedoc/" title="Cedoc">Cedoc</a></li>
							</ul>
							
              <a href="http://cmais.com.br/programas-de-a-z" class="tit todos">Todos os sites</a>
              <a href="http://cmais.com.br/busca?term=ver+todo+o+conte%C3%BAdo" class="tit todos">Todo o conteúdo</a>

						</div>
					</div>
					<div class="col-dir">
						<!-- a class="fpa" href="http://www2.tvcultura.com.br/fpa/" title="Funda&ccedil;&atilde;o Padre Anchieta">Funda&ccedil;&atilde;o Padre Anchieta</a-->
						<a class="cultura" href="http://tvcultura.cmais.com.br/" title="TV Cultura">TV Cultura</a>
					</div>
					<div class="copyright">
						<p>Copyright &copy; 1996 - <?php echo date('Y') ?> Funda&ccedil;&atilde;o Padre Anchieta</p>
					</div>
				</div>
				
			</div>
		</div>
		<!-- /RODAPE -->
</div>
<!-- /container-->
<div class="modal-backdrop bg-video hide"></div>
