<?php use_helper('I18N', 'Date') ?>
<?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'asset' => $asset, 'section' => $section)) ?>
<script type="text/javascript" src="/portal/js/redirect_mobile.js"></script>
<!-- CAPA SITE -->
<div id="capa-site">
  <?php if(isset($displays["alerta"])) include_partial_from_folder('blocks','global/breakingnews', array('displays' => $displays["alerta"]))  ?>

  <!-- banner -->
  <!--
  <div class="banner">
  <h2><a href="http://tvcultura.cmais.com.br">Tv Cultura</a></h2>
  <div class="curtir">
  <fb:like href="http://facebook.com/tvcultura" layout="button_count" show_faces="false" width="170"></fb:like>
  </div>

  <div class="box-publicidade pub-grd">

  <script type='text/javascript'>
  GA_googleFillSlot("home-geral728x90");
  </script>
  </div>

  </div>
  -->
  <!-- /banner -->
  <!-- MIOLO -->
  <div id="miolo" style="margin-top:40px" >
    <?php include_partial_from_folder('blocks','global/shortcuts') ?>

    <!-- CONTEUDO PAGINA -->
    <div id="conteudo-pagina">
      <link rel="stylesheet" href="/portal/css/tvcultura/sites/home-madmen.css" type="text/css" />
      <div class="detalhe esq"></div>
      <div class="detalhe dir"></div>
      <!--
      <?php
      if ((isset($displays["destaque-principal"])) && (count($displays["destaque-principal"]) > 0))
      include_partial_from_folder('blocks', 'global/display3c', array('displays' => $displays["destaque-principal"]));
      else
      include_partial_from_folder('blocks', 'global/display5c-v2', array('displays' => $displays["destaque-principal-2"]));
      ?>
      -->
      <?php if(isset($displays)): ?>
      <?php if(count($displays) > 0):
      ?>
      <!-- DESTAQUE 5C -->
      <div class="novoDestaque">
        <div id="topo-destaque">
          <a class="banner-topo" href="http://tvcultura.cmais.com.br/madmen" title="Mad Men"><img src="/portal/images/capaPrograma/home-madmen/img-topo.jpg" alt="Mad Men" /></a>
          <div class="logo">
            <a class="logo" href="http://tvcultura.cmais.com.br/madmen" title="Mad Men"><img src="/portal/images/capaPrograma/home-madmen/logomadmen.png" alt="Mad Men" /></a>
            <p>estreia 24 de abril | Quarta, às 22h</p>
          </div>
        </div>
        <div class="enunciado">
          <h2><a href="http://tvcultura.cmais.com.br/grade">Esta semana na TV Cultura</a></h2>
          <span></span>
        </div>
        <div class="destaque-5">
          <ul id="v2" class="grid3">
            <?php foreach($displays as $k=>$d): ?>
            <?php
            if ($d -> Asset -> Site -> getFacebookUrl() != "")
              $u = $d -> Asset -> Site -> getFacebookUrl();
            else
              $u = $d -> retriveUrl(); ?>
            <li>
            <div class="curtir">
              <fb:like href="<?php echo $u?>" layout="button_count" show_faces="false" width="170"></fb:like>
            </div>
            <div class="logo">
              <a href="<?php echo $d->retriveUrl() ?>"> <img title="<?php echo $d->Asset->Site->Program->getTitle() ?>" alt="<?php echo $d->Asset->Site->Program->getTitle() ?>" src="http://midia.cmais.com.br/programs/<?php echo $d->Asset->Site->getImageIcon() ?>" /> </a>
            </div><a class="foto" href="<?php echo $d->retriveUrl() ?>" title="<?php echo $d->getTitle() ?>"> <img alt="<?php echo $d->getTitle() ?>" src="<?php echo $d->retriveImageUrlByImageUsage('image-9') ?>"  /> </a>
            <div class="descricao">
              <a class="tit" href="<?php echo $d->retriveUrl() ?>" title="<?php echo $d->getTitle() ?>"> <?php echo $d->getTitle() ?></a>
              <a  href="<?php echo $d->retriveUrl() ?>" title="<?php echo $d->getTitle() ?>"><?php echo $d->getLabel() ?></a>
            </div></li>
            <?php endforeach;?>
          </ul>
        </div>
      </div>
      <!-- /DESTAQUE 5C -->
      <?php endif;?>
      <?php endif;?>

      <!-- CAPA -->
      <div class="capa grid3">
        <!-- ESQUERDA -->
        <div id="esquerda" class="grid2">
          <!-- col-esq -->
          <div class="col-esq grid1">
            <?php include_partial_from_folder('blocks','global/display-1c-live') ?>

            <?php include_partial_from_folder('blocks','global/display-1c-coming') ?>

            <?php if(isset($displays["destaque-padrao-1"])) include_partial_from_folder('blocks','global/display1c-news', array('displays' => $displays["destaque-padrao-1"])) ?>

            <?php if(isset($displays["destaque-quintal-da-cultura"])) include_partial_from_folder('blocks','global/display1c-quintal', array('displays' => $displays["destaque-quintal-da-cultura"])) ?>

            <?php if(isset($displays["destaque-noticias"])) include_partial_from_folder('blocks','global/news', array('displays' => $displays["destaque-noticias"])) ?>

            <?php if(isset($displays["publicidade-300x50"])) include_partial_from_folder('blocks','global/banner-300x50', array('displays' => $displays["publicidade-300x50"])) ?>
          </div>
          <!-- /col-esq -->
          <!-- col-dir -->
          <div class="col-dir grid1">
            <?php if(isset($displays["destaque-padrao-2"])) include_partial_from_folder('blocks','global/display1c-news', array('displays' => $displays["destaque-padrao-2"])) ?>

            <?php if(isset($displays["destaque-padrao-3"])) include_partial_from_folder('blocks','global/display1c-news', array('displays' => $displays["destaque-padrao-3"])) ?>

            <?php if(isset($displays["destaque-padrao-4"])) include_partial_from_folder('blocks','global/display1c-news', array('displays' => $displays["destaque-padrao-4"])) ?>

            <?php if(count($displays["destaque-padrao-5"]) > 0 ) include_partial_from_folder('blocks','global/display1c-news', array('displays' => $displays["destaque-padrao-5"])) ?>
          </div>
          <!-- /col-dir -->
        </div>
        <!-- /ESQUERDA -->
        <!-- DIREITA -->
        <div id="direita" class="grid1">
          <!-- publicidade -->
          <div class="box-publicidade grid1">
            <!-- home-geral300x250 -->
            <script type='text/javascript'>
              GA_googleFillSlot("tvcultura-homepage-300x250");

            </script>
          </div>
          <!-- /publicidade -->
          <!-- BOX PADRAO Noticia -->
          <div class="box-padrao grid1">
            <!--div class="topo claro">
            <span></span>
            <div class="capa-titulo">
            <h4>Conte&uacute;dos + recentes</h4>
            <a href="/feed" class="rss" title="rss" style="display: block"></a>
            </div>
            </div-->
            <?php //if(isset($displays["destaque-noticias-recentes"])) include_partial_from_folder('blocks','global/recent-news', array('displays' => $displays["destaque-noticias-recentes"]))  ?>

            <?php if(count($displays["destaque-padrao-6"]) > 0 ) include_partial_from_folder('blocks','global/display1c-news', array('displays' => $displays["destaque-padrao-6"])) ?>

            <?php if(count($displays["destaque-padrao-7"]) > 0 ) include_partial_from_folder('blocks','global/display1c-news', array('displays' => $displays["destaque-padrao-7"])) ?>
          </div>
          <!-- /BOX PADRAO Noticia -->
          <?php /*
             <!-- BOX PADRAO + Visitados -->
             <div class="box-padrao mais-visitados grid1">
             <div class="topo">
             <span></span>
             <div class="capa-titulo">
             <h4>+ visitados</h4>
             </div>
             </div>
             <?php // if(isset($displays["destaque-mais-visitados"])) include_partial_from_folder('blocks','global/popular-news', array('displays' => $displays["destaque-mais-visitados"]))
             ?>
             </div>
             <!-- /BOX PADRAO + Visitados -->
             */ ?>
        <?php if(isset($displays["destaque-para-ouvir"])): ?>
        <?php if(count($displays["destaque-para-ouvir"]) > 0 ): ?>
        <!-- BOX PADRAO Para Ouvir -->
        <div class="box-padrao box-borda grid1">
          <div class="topo">
            <span></span>
            <div class="capa-titulo">
              <h4>para ouvir</h4>
            </div>
          </div>
          <?php if(isset($displays["destaque-para-ouvir"])) include_partial_from_folder('blocks','global/radios', array('displays' => $displays["destaque-para-ouvir"])) ?>
          <div class="detalhe-borda grid1"></div>
        </div>
        <!-- /BOX PADRAO Para Ouvir -->
        <?php endif;?>
        <?php endif;?>

        <?php if(isset($displays["destaque-carrossel-2"])) include_partial_from_folder('blocks','global/display1c-carrossel', array('displays' => $displays["destaque-carrossel-2"]))  ?>
      </div>
      <!-- /DIREITA -->
    </div>
    <!-- /CAPA -->
    <?php include_partial_from_folder('blocks','global/staffpick') ?>
  </div>
  <!-- /CONTEUDO PAGINA -->
</div>
<!-- /MIOLO -->
</div> <!-- /CAPA SITE -->
