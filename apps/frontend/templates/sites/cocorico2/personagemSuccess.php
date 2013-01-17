<link href="/portal/css/tvcultura/sites/cocorico/home.css" rel="stylesheet">
<link href="/portal/css/tvcultura/sites/cocorico/tvcocorico.css" rel="stylesheet">
<script type="text/javascript">
  $(document).ready(function() {
    $('.destaques-small li:nth-child(6)').css('margin-right', '0');
    $('.destaques-small li:nth-child(12)').css('margin-right', '0');    
  });
</script>
<!-- container-->
<div class="container tudo">

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
  <ul class="breadcrumb personagem">
     <li><a href="<?php echo $site->retriveUrl() ?>">Cocoricó</a> <span class="divider">&rsaquo;</span></li>
     <li><a href="<?php echo $site->retriveUrl() ?>/personagens">Personagens</a> <span class="divider">&rsaquo;</span></li>
     <li class="active"><?php echo $section->getTitle() ?></li>
  </ul>
  <!-- /breadcrumb-->

  <!--btn voltar-->
  <a href="../personagens" class="voltar personagem">voltar<span class="divisao"></span></a>
  <!-- /btn voltar-->


  <!--row-->
  <div class="row-fluid conteudo">
    <div class="span8 col-esq">
      <!-- titulo da pagina -->
      <div class="tit-pagina span12">
        <h2><?php echo $section->getTitle() ?></h2>
      </div>
      <?php if(isset($displays["imagens"][0]) && isset($displays["imagens"][1]) && isset($displays["imagens"][2]) && isset($displays["imagens"][3])): ?>
      <!-- titulo da pagina -->
      <div class="destaque-home">
        <img class="span9" src="<?php echo $displays["imagens"][0]->retriveImageUrlByImageUsage('original') ?>" alt="<?php echo $displays["imagens"][0]->getTitle() ?>" />
        <div class="box span3">
          <ul>
            <li><img class="span12" src="<?php echo $displays["imagens"][1]->retriveImageUrlByImageUsage('original') ?>" alt="<?php echo $displays["imagens"][1]->getTitle() ?>" /></li>
            <li><img class="span12" src="<?php echo $displays["imagens"][2]->retriveImageUrlByImageUsage('original') ?>" alt="<?php echo $displays["imagens"][2]->getTitle() ?>" /></li>
            <li><img class="span12" src="<?php echo $displays["imagens"][3]->retriveImageUrlByImageUsage('original') ?>" alt="<?php echo $displays["imagens"][3]->getTitle() ?>" /></li>
          </ul>
        </div>
        <p><?php echo html_entity_decode($displays["texto"][0]->Asset->AssetContent->render()) ?></p>
      </div>
      <?php endif; ?>
      <div class="span12">
        <?php if(isset($displays["conteudos"][0])): ?>
          <?php $se = $displays["conteudos"][0]->Asset->Sections; ?>
        <a class="box destaques span6" href="<?php echo $displays["conteudos"][0]->Asset->retriveUrl() ?>" title="<?php echo $displays["conteudos"][0]->getTitle() ?>">
          <p class="bold">
            <?php echo $se[0]->getTitle() ?>
          </p>
          <img src="<?php echo $displays["conteudos"][0]->retriveImageUrlByImageUsage("default") ?>" alt="<?php echo $displays["conteudos"][0]->getTitle() ?>" name="<?php echo $displays["conteudos"][0]->getTitle() ?>" />
          <?php echo $displays["conteudos"][0]->getTitle() ?><span> </span>
        </a>
        <?php endif; ?>
        <?php if(isset($displays["conteudos"][1])): ?>
          <?php $se = $displays["conteudos"][1]->Asset->Sections; ?>
        <a class="box destaques span6" style="float: right;" href="<?php echo $displays["conteudos"][1]->Asset->retriveUrl() ?>" title="<?php echo $displays["conteudos"][1]->getTitle() ?>">
          <p class="bold">
            <?php echo $se[0]->getTitle() ?>
          </p>
          <img src="<?php echo $displays["conteudos"][1]->retriveImageUrlByImageUsage("default") ?>" alt="<?php echo $displays["conteudos"][1]->getTitle() ?>" name="<?php echo $displays["conteudos"][1]->getTitle() ?>" />
          <?php echo $displays["conteudos"][1]->getTitle() ?><span> </span>
        </a>
        <?php endif; ?>
      </div>
    </div>
    <?php if(isset($displays["autografo"][0])): ?>
    <div class="span4 autografo">
      <form class="form-horizontal">
        <h2>Autografo</h2>
        <div class="divisao"></div>
        <p>Escreva seu nome no campo abaixo e clique no botão
        <bold>
          BAIXAR
        </bold> para ter seu autógrafo personalizado do seu personagem favorito!</p>
        <div class="control-group g-nome">
          <label class="control-label nome" for="nome"></label>
          <div class="controls">
            <input type="text" id="nome" placeholder="Seu nome">
          </div>
        </div>
        <div class="control-group g-autografo">
          <a href="http://midia.cmais.com.br/assets/image/original/<?php echo $displays["autografo"][0]->Asset->AssetImage->getFile().".".$displays["autografo"][0]->Asset->AssetImage->getExtension() ?>" title="BAIXAR" target="_blank"><img src="http://midia.cmais.com.br/assets/image/original/<?php echo $displays["autografo"][0]->Asset->AssetImage->getFile().".".$displays["autografo"][0]->Asset->AssetImage->getExtension()?>" alt="BAIXAR" /></a>
          <div class="capa-btn">
            <span></span>
            <a id="getimage" class="btn" style="padding-top: 9px; width: 85%">enviar</a>
            <span class="last"></span>
          </div>
        </div>
      </form>
    </div>
    <!-- banner -->
    <div class="span4">
      <!-- portal-cocorico-300x250 -->
      <script type='text/javascript'>
        GA_googleFillSlot("portal-cocorico-300x250");
      </script>
    </div>
    <!-- banner -->
    
    <script type="text/javascript">
      $(document).ready(function() {
        $("#getimage").click(function() {
          if($('#nome').val())
            self.open('http://cmais.com.br/actions/cocorico/image.php?n='+$('#nome').val()+'&u=http://midia.cmais.com.br/assets/image/original/<?php echo $displays["autografo"][0]->Asset->AssetImage->getFile().".".$displays["autografo"][0]->Asset->AssetImage->getExtension() ?>');
          else
            $('#nome').focus();
        });
      });
    </script>
    <?php endif; ?>
  </div>
  <!--/row-->
  
  <!-- rodapé-->
  <div class="row-fluid  border-top"></div>
  <?php include_partial_from_folder('sites/cocorico', 'global/rodape', array('siteSections' => $siteSections, 'displays' => $displays, 'section'=>$section, 'uri'=>$uri)) ?>
  <!--/rodapé-->
  
</div>
<!-- /container-->
