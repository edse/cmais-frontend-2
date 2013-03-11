<?php
$assets = $pager->getResults(); //depois tem de ordenar por ranking...
?>

<script type="text/javascript" src="/portal/js/bootstrap/popover.js"></script>
<link href="/portal/css/tvcultura/sites/cocorico/brincadeiras.css" rel="stylesheet">

<!-- container-->
<div class="container tudo receitinhas">
  <!-- row-->
  <div class="row-fluid menu">
    <div class="navbar">
      <!-- MENU PRINCIPAL -->
      <?php include_partial_from_folder('sites/cocorico', 'global/menu', array('site' => $site)) ?>
      <!--/MENU PRINCIPAL -->
      
      <!-- PERSONAGENS -->
      <?php include_partial_from_folder('sites/cocorico', 'global/personagens', array('site' => $site)) ?>
      <!--/PERSONAGENS --> 
    </div>
  </div>
  <!-- /row-->
  <!-- breadcrumb-->
  <ul class="breadcrumb">
     <li><a href="<?php echo $site->retriveUrl() ?>">Home</a> <span class="divider">&rsaquo;</span></li>
     <li><a href="<?php echo $site->retriveUrl() ?>/receitinhas">Receitinhas Especiais</a> <span class="divider">&rsaquo;</span></li>
     <li class="active"><?php //echo getTitle() ?></li>
  </ul>
  <!-- /breadcrumb-->
  
  <a href="#" class="tit-pagina">Receitinhas</a>
  <div class="zaza"><a href="<?php echo $site->retriveUrl() ?>/cozinha-da-zaza">zaza</a></div>
  
  <!--row-->
  <?php if(isset($displays['receitinhas-especiais'])):?>
    <?php if(count($displays['receitinhas-especiais']) > 0): ?>
  
  <div class="row-fluid conteudo destaques especial">
    <div class="span4 form-especial">
      <div class="seta"></div>
      <div class="form">
        <h2><?php echo $displays['receitinhas-especiais']->getTitle() ?></h2>
        <p><?php echo $displays['receitinhas-especiais']->getDescription() ?></p>
        <div class="divisao"></div>
        <form class="form-horizontal">
          <h2>Envie sua receitinha:</h2>
          <div class="control-group g-nome">
            <label class="control-label nome" for="nome"></label>
            <div class="controls">
              <input type="text" id="nome" placeholder="Seu nome">
            </div>
          </div>
          <div class="control-group g-cidade">
            <label class="control-label cidade" for="cidade"></label>
            <div class="controls">
              <input type="text" id="cidade" placeholder="Sua cidade">
               <select class="span1">
                 <option value="" selected="selected">UF</option>
                 <option value="Acre">AC</option>
                 <option value="Alagoas">AL</option>
                 <option value="Amazonas">AM</option>
                 <option value="Amap&aacute;">AP</option>
                 <option value="Bahia">BA</option>
                 <option value="Cear&aacute;">CE</option>
                 <option value="Distrito Federal">DF</option>
                 <option value="Espirito Santo">ES</option>
                 <option value="Goi&aacute;s">GO</option>
                 <option value="Maranh&atilde;o">MA</option>
                 <option value="Minas Gerais">MG</option>
                 <option value="Mato Grosso do Sul">MS</option>
                 <option value="Mato Grosso">MT</option>
                 <option value="Par&aacute;">PA</option>
                 <option value="Para&iacute;ba">PB</option>
                 <option value="Pernambuco">PE</option>
                 <option value="Piau&iacute;">PI</option>
                 <option value="Paran&aacute;">PR</option>
                 <option value="Rio de Janeiro">RJ</option>
                 <option value="Rio Grande do Norte">RN</option>
                 <option value="Rond&ocirc;nia">RO</option>
                 <option value="Roraima">RR</option>
                 <option value="Rio Grande do Sul">RS</option>
                 <option value="Santa Catarina">SC</option>
                 <option value="Sergipe">SE</option>
                 <option value="S&atilde;o Paulo">SP</option>
                 <option value="Tocantins">TO</option>
              </select>
            </div>
           
          </div>
           <div class="control-group g-receita">
            <label class="control-label receita" for="receita"></label>
            <div class="controls">
              <textarea id="receita" placeholder="Escreva aqui sua receitinha"></textarea>
            </div>
            <button type="submit" class="btn">enviar</button>
          </div>
         
         
        </form>
      </div>
    </div>
   
    <?php endif; ?>
      <?php endif; ?>
      
    <div class="span8">
      
       <?php if(isset($displays['receitinhas-especiais'])):?>
    <?php if(count($displays['receitinhas-especiais']) > 1): ?>
      <div class="span6">
        <a href="/cocorico/receitinhas-interna" title="link do jogo"><img class="span12" src="/portal/images/capaPrograma/cocorico/jogo-home.jpg" alt="jogo" /></a>
        <a href="/cocorico/receitinhas-interna" class="span12 btn" title="">Nome do Joguinho</a>
        <ul class="likes">
          <li class="ativo"></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
        </ul>      
      </div>
      
        <?php endif; ?>
      <?php endif; ?>
      
      <?php if(isset($displays['receitinhas-especiais'])):?>
    <?php if(count($displays['receitinhas-especiais']) > 2): ?>
      
      <div class="span6">
        <a href="/cocorico/receitinhas-interna" title="link do jogo"><img class="span12" src="/portal/images/capaPrograma/cocorico/jogo-home.jpg" alt="jogo" /></a>
        <a href="/cocorico/receitinhas-interna" class="span12 btn" title="">Nome do Joguinho</a>
        <ul class="likes">
          <li class="ativo"></li>
          <li></li>
          <li></li>
          <li></li>
          <li></li>
        </ul>     
      </div>
      
         <?php endif; ?>
      <?php endif; ?>
      
    </div>
    
      <?php if(isset($displays['receitinhas-especiais'])):?>
    <?php if(count($displays['receitinhas-especiais']) > 3): ?>
          
    <div class="span8">
      
      <ul class="destaques-small destaque-especial ">
       <?php foreach($displays['receitinhas-especiais'] as $d): ?>
        <li class="span3"><a href="<?php echo $d->retriveUrl() ?>" title="<?php echo $d->getTitle() ?>"><img class="span12" src="http://img.youtube.com/vi/<?php echo $d->AssetVideo->getYoutubeId() ?>/1.jpg" alt="<?php echo $d->getTitle() ?>" />" alt="<?php echo $d->getTitle() ?>" /><?php $tam=16; $str=$d->getTitle(); mb_internal_encoding("UTF-8"); if(strlen($str) <= $tam) echo $str; else echo mb_substr($str, 0, $tam-1)."&hellip;" ?></a></li>
        <?php endforeach; ?>
      </ul>
      
    </div>
    <?php endif; ?>
    <?php endif; ?>
  </div>
  <!-- /row-->
  
 
 <?php if (count($assets) > 0): ?>
 <!--row-->
  <div class="row-fluid conteudo">
    <ul class="destaques-small destaque2">
      <?php foreach($assets as $d): ?>
      <li class="span2"><a href="<?php echo $d->retriveUrl() ?>" title="<?php echo $d->getTitle() ?>"><img class="span12" src="http://img.youtube.com/vi/<?php echo $d->AssetVideo->getYoutubeId() ?>/1.jpg" alt="<?php echo $d->getTitle() ?>" /><?php $tam=16; $str=$d->getTitle(); mb_internal_encoding("UTF-8"); if(strlen($str) <= $tam) echo $str; else echo mb_substr($str, 0, $tam-1)."&hellip;" ?></a></li>
      <?php endforeach; ?>
    </ul>
  </div>
  <!-- /row-->
 <?php endif; ?>
  
    <?php if($pager->haveToPaginate()): ?>
    <!-- PAGINACAO -->
    <div class="pagination pagination-centered">
      <ul>
        <li class="anterior"><a href="javascript: goToPage(<?php echo $pager->getPreviousPage() ?>);" title="Anterior"></a></li>
        <?php foreach ($pager->getLinks() as $page): ?>
          <?php if ($page == $pager->getPage()): ?>
        <li class="active"><a href="javascript: goToPage(<?php echo $page ?>);"><?php echo $page ?></a></li>
          <?php else: ?>
        <li><a href="javascript: goToPage(<?php echo $page ?>);"><?php echo $page ?></a></li>
          <?php endif; ?>
        <?php endforeach; ?>
        <li class="proximo" title="Próximo"><a href="javascript: goToPage(<?php echo $pager->getNextPage() ?>);"></a></li>
      </ul>
    </div>
    <form id="page_form" action="" method="post">
      <input type="hidden" name="return_url" value="<?php echo $url?>" />
      <input type="hidden" name="page" id="page" value="" />
    </form>
    <script>
      function goToPage(i){
        $("#page").val(i);
        $("#page_form").submit();
      }
    </script>
    <!--// PAGINACAO -->
    <?php endif; ?>


  <!-- rodape-->
  <div class="row-fluid  border-top"></div>
  <div class="row-fluid rodape" >
    <h3>2013 &copy; fundação padre anchieta - tv cultura</h3>
    <div class="span2">
      <a href="#" class="bold" title="Em família">em família</a>
      <ul>
        <li><a href="#" title="Na TV">Na TV</a></li>
        <li><a href="#" title="Nas lojas">Nas lojas</a></li>
        <li><a href="#" title="Nas Redes">Nas Redes</a></li>
        <li><a href="#" title="Nos Teatros">Nos Teatros</a></li>
        <li><a href="#" title="Nos Cinemas">Nos Cinemas</a></li>
        <li><a href="#" title="Na Web">Na Web</a></li>
        <li><a href="#" title="Agenda">Agenda</a></li>
        <li><a href="#" title="Newsletter">Newsletter</a></li>
        <li><a href="#" title="Fale Conosco">Fale Conosco</a></li>
      </ul>
    </div>
    <div class="span2"> <a href="#" class="bold" title="Em família">tv cocoricó</a>
      <ul>
        <li><a href="#" title="Sobre o programa">Sobre o programa</a></li>
        <li><a href="#" title="Livro de receitas">Livro de receitas</a></li>
        <li><a href="#" title="Bastidores">Bastidores</a></li>
        <li><a href="#" title="Tour Virtual">Tour Virtual</a></li>
        <li><a href="#" title="Receitinhas">Receitinhas</a></li>
        <li><a href="#" title="Envie seu vídeo">Envie seu vídeo</a></li>
        <li><a href="#" title="Enquete">Enquete</a></li>
      </ul>
    </div>
    <div class="span2"> <a href="#" class="bold" title="Cocoricó">cocoricó</a>
      <ul>
        <li><a href="#" title="Sobre a série">Sobre a série</a></li>
        <li><a href="#" title="Diário do Júlio">Diário do Júlio</a></li>
        <li><a href="#" title="Personagens">Personagens</a></li>
        <li><a href="#" title="Cocoricolândia">Cocoricolândia</a></li>
        <li><a href="#" title="Autógrafos">Autógrafos</a></li>
      </ul>
    </div>
    <div class="span2 joguinhos"> <a href="#" class="bold" title="Jogos e Brincadeiras">Jogos e Brincadeiras</a>
      <ul>
        <li><a href="#" title="Joguinhos">Joguinhos</a></li>
        <li><a href="#" title="Receitinhas">Receitinhas</a></li>
        <li><a href="#" title="Para colorir">Para colorir</a></li>
        <li><a href="#" title="Rádio">Rádio</a></li>
        <li><a href="#" title="Vídeos">Vídeos</a></li>
        <li><a href="#" title="Clipes musicais">Clipes musicais</a></li>
        <li><a href="#" title="Papel de parede">Papel de parede</a></li>
        <li><a href="#" title="Carinhas animadas">Carinhas animadas</a></li>
        <li><a href="#" title="Cartões Comemorativos">Cartões Comemorativos</a></li>
        <li><a href="#" title="Atividades para imprimir">Atividades para imprimir</a></li>
      </ul></div>
    <div class="span3 sites"> <a href="#" class="bold" title="Sites Relacionados">Sites Relacionados</a>
      <ul>
        <li><a href="#" class="quintal" title="Quintal da Cultura">Quintal da Cultura</a></li>
        <li><a href="#" class="tvrtb" title="TV Rá Tim Bum!">TV Rá Tim Bum!</a></li>
        <li class="last"><a href="#" class="cultura" title="TV Cultura">TV Cultura</a></li>
        <li><a href="#" class="castelo" title="Castelo Rá Tim Bum">Castelo Rá Tim Bum</a></li>
        <li><a href="#" class="vila" title="Vila Sésamo">Vila Sésamo</a></li>
      </ul></div>
    
  </div>
  <!-- /rodape-->
</div>
<!-- /container-->