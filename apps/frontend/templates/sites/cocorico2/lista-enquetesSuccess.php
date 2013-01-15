<link href="/portal/css/tvcultura/sites/cocorico/tvcocorico.css" rel="stylesheet">
<script type="text/javascript">
  $(document).ready(function() {
    $('.destaques-small li:nth-child(6)').css('margin-right', '0');
    $('.destaques-small li:nth-child(12)').css('margin-right', '0');
  });

</script>
<!-- container-->
<div class="container tudo tvcocorico">
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
  <!-- breadcrumb-->
  <ul class="breadcrumb">
    <li><a href="<?php echo $site->retriveUrl() ?>">TV Cocorico</a><span class="divider">&rsaquo;</span></li>
    <li class="active">Enquetes Anteriores</li>
  </ul>
  <!-- /breadcrumb-->
  <!-- titulo da pagina -->
  <div class="tit-pagina">
    <h2><?php echo $section->getTitle(); ?></h2>
  </div>
  <!-- titulo da pagina -->
  
  <!--row lista-enquetes-->
  <div id="lista-enquetes" class="row-fluid conteudo destaques">
    <!-- lista -->
    <ul class="lista">
      
      <?php
       $displays_home = array();
       $blocks = Doctrine_Query::create()
         ->select('b.*')
         ->from('Block b, Section s') 
         ->where('b.section_id = s.id')
         ->andWhere('s.slug = ?', "home")//mudar para home quando for no ar
           ->andWhere('b.slug = ?', 'enquete') 
         ->andWhere('s.site_id = ?', $site->id)
         ->execute();
      
        if(count($blocks) > 0):
          $displays_home['enquete'] = $blocks[0]->retriveDisplays();
        

          foreach($displays_home['enquete'] as $d): 
            //doctrine para respostas
            
            
      ?>
          <!-- item -->
          <li class="item-lista">
            <i class="ico-confirma"></i>
            <h4><?php echo $d[0]->getHeadline();?></h4>
            <h3><?php echo $d[0]->Asset->AssetQuestion->getQuestion();?></h3>
            <div class="resultado">00% - <?php echo $d[0]->Asset->AssetQuestion->AssetAnswer->getAnswer()?></div>
            <i class="ico-versus-enquete"></i>
            <div class="resultado verde"><?php echo $d[0]->Asset->AssetQuestion->AssetAnswer->getAnswer()?> - 00% </div>
          </li>
            <!-- pontilhado -->
            <li><hr></li>
            <!-- /pontilhado -->
          <!-- /item -->
       <?php
          endforeach;
        endif;
       ?>
      
      
    </ul>
    <!-- /lista -->
  </div>
  <!-- /row lista-enquetes-->
  <!-- paginacao -->
  <div class="pagination pagination-centered">
    <ul>
      <li class="anterior"><a href="#" title="Anterior"></a></li>
      <li class="active"><a href="#" title="1">1</a></li>
      <li><a href="#" title="1">2</a></li>
      <li><a href="#" title="1">3</a></li>
      <li><a href="#" title="1">...</a></li>
      <li><a href="#" title="1">18</a></li>
      <li class="proximo" title="Próximo"><a href="#"></a></li>
    </ul>
  </div>
  <!-- /paginacao -->
  <!-- rodapé-->
  <div class="row-fluid  border-top"></div>
  <?php include_partial_from_folder('sites/cocorico', 'global/rodape', array('siteSections' => $siteSections, 'displays' => $displays, 'section'=>$section, 'uri'=>$uri)) ?>
  <!--/rodapé-->
</div>
<!-- /container-->
