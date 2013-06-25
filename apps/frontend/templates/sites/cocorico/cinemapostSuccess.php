
<link href="http://cmais.com.br/portal/css/tvcultura/sites/cocorico/familia.css" rel="stylesheet">


<!-- container-->
<div class="container tudo">
  <!-- row-->
  <div class="row-fluid">
    <div class="topo-coco">
      <h1 class="span3"><a href="/cocorico" title="Cocorico"><img src="http://cmais.com.br/portal/images/capaPrograma/cocorico/logo-coco.png" alt="Cocoricó" /></a></h1>
      <!-- BOX PUBLICIDADE 2 -->
      <div class="box-publicidade span9">
        <!-- portal-cocorico -->
        <script type='text/javascript'>
        GA_googleFillSlot("portal-cocorico-familia");
        </script>
      </div>
      <!-- / BOX PUBLICIDADE 2 -->
       <fb:like href="http://www3.tvcultura.com.br/cocorico/" send="true" layout="button_count" width="450" show_faces="false" font="arial"></fb:like>
    </div>
    <div class="divisoria span12"></div>
  </div>
  <!-- /row-->
  <!-- row-->
  <?php include_partial_from_folder('sites/cocorico', 'global/menu-em-familia', array('s'=>'nocinema', 'site'=>$site)) ?>
  <!-- /row-->
  <!-- breadcrumb-->
  <?php include_partial_from_folder('sites/cocorico', 'global/breadcrumb-section', array('site'=>$site,'section'=>$section, 'asset'=>$asset)) ?> 
  <!-- /breadcrumb-->
  <!-- voltar -->
  <a href="javascript:window.history.go(-1)" class="voltar">voltar<span class="divisao"></span></a>
  <!-- /voltar --> 
  <h2 class="tit-pagina">no cinema</h2>
  <!--row post-->
  <div id="agenda" class="row-fluid conteudo ">
    <!--coluna esquerda -->
    <div class="span8">
     
     <!-- paginacao -->
    <!-- <div class="row-fluid">
        <div class="paginacao">
          <a href="#" class="anterior" title="Evento Anterior"><span></span>Evento Anterior</a>
          <a href="#" class="proximo" title="Próximo Event">Próximo Evento<span></span></a>
        </div>
      </div>
      <!-- /paginacao -->
      
      
      
      <!-- titulo post -->  
      <div class="row-fluid titulo-post">
        <h2><?php echo $asset->getTitle(); ?></h2>
        <span><?php echo $asset->AssetContent->getHeadlineShort() ?></span>
      </div>
      <!-- /titulo post -->    
    
          <?php include_partial_from_folder('sites/cocorico', 'global/like', array('site'=>$site, 'uri'=>$uri)) ?>
      
      <!-- asset -->
      <div class="row-fuid asset">
        <p><?php echo html_entity_decode($asset->AssetContent->render()) ?></p>  
      </div>
      <!-- /asset -->

      <!-- paginacao -->
      <!--<div class="row-fluid">
        <div class="paginacao">
          <a href="#" class="anterior" title="Evento Anterior"><span></span>Evento Anterior</a>
          <a href="#" class="proximo" title="Próximo Event">Próximo Evento<span></span></a>
        </div>
      </div>
      <!-- paginacao --> 
    </div>
    <!--/coluna esquerda --> 
    <!--coluna direita -->
    <div class="span4 acontece">
      <!-- topo acontece -->
      <div class="topo">
          <div class="bac-blue">
            <h3>
              <i class="ico-naweb ico-cinema"></i>
              Acontece
              <i class="ico-seta-titulo seta-acontece"></i>
           </h3>
         </div>
       </div>
       <!-- /topo acontece -->
       <?php
       
       $blocks = Doctrine_Query::create()
          ->select('b.*')
          ->from('Block b, Section s')
          ->where('b.section_id = s.id')
          ->andWhere('s.slug = ?', "agenda")
          ->andWhere('b.slug = ?', 'acontece') 
          ->andWhere('s.site_id = ?', $site->id)
          ->execute();
        
        //echo count($blocks)."<br>";
        
        if(count($blocks) > 0){
          $displays_acontece['acontece'] = $blocks[0]->retriveDisplays();
        }
       
        if(isset($displays_acontece['acontece'])): 
          if(count($displays_acontece['acontece']) > 0): 
            include_partial_from_folder('sites/cocorico', 'global/display-1-destaque', array('displays' => $displays_acontece['acontece']));
          endif;
        endif;
        ?>
       <!-- banner -->
       <div class="">
         <!-- portal-cocorico-300x250 -->
         <script type='text/javascript'>
           GA_googleFillSlot("portal-cocorico-300x250");
         </script>
       </div>
       <!-- banner -->
    </div>
    <!--/coluna direita -->
  </div> 
  <!--/row post-->
  <!--row-->
  <div class="row-fluid  border-top"></div>
  <?php include_partial_from_folder('sites/cocorico', 'global/rodape-em-familia', array('siteSections' => $siteSections, 'displays' => $displays, 'section'=>$section, 'uri'=>$uri)) ?>
  <!-- /row-->
</div>
<!-- /container-->
<script type="text/javascript" src="//assets.pinterest.com/js/pinit.js"></script>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pt_BR/all.js#xfbml=1&appId=418273974898589";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>