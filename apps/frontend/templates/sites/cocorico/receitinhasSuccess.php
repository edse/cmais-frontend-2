<?php 
$assets = $pager->getResults();
?>

<link href="http://cmais.com.br/portal/css/tvcultura/sites/cocorico/brincadeiras.css" rel="stylesheet">

<!-- container-->
<div class="container tudo receitinhas">
  <!--topo coco-->
  <?php include_partial_from_folder('sites/cocorico', 'global/topo-coco', array('site'=>$site)) ?>
  <!--/topo coco-->
  
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
  <?php include_partial_from_folder('sites/cocorico', 'global/breadcrumb-section', array('site'=>$site,'section'=>$section)) ?> 
  <!-- /breadcrumb-->
  
  <a href="<?php echo $site->retriveUrl() ?>/receitinhas" class="tit-pagina">Receitinhas</a>
  <div class="zaza">
    <p>Cozinha da Amiga Zazá</p>
  </div>


  <!--row-->
  
  <div class="row-fluid conteudo destaques especial">
    
    <div class="span4 form-especial">
      <div class="seta"></div>
      <div class="form">
        <h2>Receitinhas com Milho!</h2>
        <p>Doce ou salgada, todo mundo conhece uma receitinha deliciosa que tenha milho entre os ingredientes. Envie para nós! As 02 (duas) receitinhas mais criativas vão ganhar 01 (um) livro de receitas da Rebeca Chamma! E ainda podem ser apresentadas na Cozinha da Amiga da Zazá!</p>
        <p>Aproveite e assista a essa seleção de receitinhas com milho que já foram feitas em nossa cozinha!</p>  
        <div class="divisao"></div>
        <form class="form-horizontal" id="form-contato" method="post" action="/actions/cocorico/sendmail.php" enctype="multipart/form-data">
          <h2>Envie sua receitinha com milho:</h2>
          <div class="control-group g-nome">
            <label class="control-label nome" for="nome"></label>
            <div class="controls">
              <input type="text" id="nome" name="nome" placeholder="Seu nome">
            </div>
          </div>
          <div class="control-group g-cidade">
            <label class="control-label cidade" for="cidade"></label>
            <div class="controls">
              <input type="text" id="cidade" name="cidade" placeholder="Sua cidade">
              <select class="span1" id="estado" name="estado">
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
              <textarea id="receita" placeholder="Escreva aqui sua receitinha" name="receita"></textarea>
            </div>
          </div>
          <div class="control-group g-file">
            <label class="control-label file" for="file"></label>
            <div class="controls">
               <input id="datafile" type="file" name="datafile" size="6">
            </div>
           
          </div>
          <div class="control-group g-regulamento">
            <label>Regulamento</label>
            <div class="box-regulamento">
              <p>1. Participação:</p>
              <p>REGULAMENTO VEM DO ASTOLFO... EX: Esta é uma ação de caráter exclusivamente cultural que visa estimular a interação do participante com o programa de televisão TV Cocoricó, sem qualquer modalidade de sorteio ou pagamento, nem vinculado à aquisição ou uso de qualquer bem, direito ou serviço, nos termos da Lei 5.768/71 e do Decreto n° 70.951/72, e que é realizado pela Fundação Padre Anchieta Centro Paulista de Rádio e TVs Educativas. Esta ação destina-se ao público em geral, sem qualquer limitação, e está devidamente regulada conforme às
              disposições do Código Civil (10.406/02) e Lei de Direitos Autorais (9.610/98).
              </p>
              
            </div>
            
            <div class="controls">
               <input id="regulamento" class="check" type="checkbox" name="regulamento">
               <label>Li e concordo com o regulamento.</label>
            </div>
           
            <button type="submit" class="btn">enviar</button>
          </div>
                   
         
        </form>
      </div>
    </div>
    
    <div class="span8">
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
    </div>
    <div class="span8">
      <ul class="destaques-small destaque-especial ">
      <li class="span3"><a href="/cocorico/receitinhas-interna" title=""><img class="span12" src="/portal/images/capaPrograma/cocorico/jogo-home.jpg" alt="jogo" />Nome do Joguinho</a></li>
      <li class="span3"><a href="/cocorico/receitinhas-interna" title=""><img class="span12" src="/portal/images/capaPrograma/cocorico/jogo-home.jpg" alt="jogo" />Nome do Joguinho</a></li>
      <li class="span3"><a href="/cocorico/receitinhas-interna" title=""><img class="span12" src="/portal/images/capaPrograma/cocorico/jogo-home.jpg" alt="jogo" />Nome do Joguinho</a></li>
      <li class="span3"><a href="/cocorico/receitinhas-interna" title=""><img class="span12" src="/portal/images/capaPrograma/cocorico/jogo-home.jpg" alt="jogo" />Nome do Joguinho</a></li>
      <li class="span3"><a href="/cocorico/receitinhas-interna" title=""><img class="span12" src="/portal/images/capaPrograma/cocorico/jogo-home.jpg" alt="jogo" />Nome do Joguinho</a></li>
      <li class="span3"><a href="/cocorico/receitinhas-interna" title=""><img class="span12" src="/portal/images/capaPrograma/cocorico/jogo-home.jpg" alt="jogo" />Nome do Joguinho</a></li>
      <li class="span3"><a href="/cocorico/receitinhas-interna" title=""><img class="span12" src="/portal/images/capaPrograma/cocorico/jogo-home.jpg" alt="jogo" />Nome do Joguinho</a></li>
      <li class="span3"><a href="/cocorico/receitinhas-interna" title=""><img class="span12" src="/portal/images/capaPrograma/cocorico/jogo-home.jpg" alt="jogo" />Nome do Joguinho</a></li>
      <li class="span3"><a href="/cocorico/receitinhas-interna" title=""><img class="span12" src="/portal/images/capaPrograma/cocorico/jogo-home.jpg" alt="jogo" />Nome do Joguinho</a></li>
      <li class="span3"><a href="/cocorico/receitinhas-interna" title=""><img class="span12" src="/portal/images/capaPrograma/cocorico/jogo-home.jpg" alt="jogo" />Nome do Joguinho</a></li>
      <li class="span3"><a href="/cocorico/receitinhas-interna" title=""><img class="span12" src="/portal/images/capaPrograma/cocorico/jogo-home.jpg" alt="jogo" />Nome do Joguinho</a></li>
      <li class="span3"><a href="/cocorico/receitinhas-interna" title=""><img class="span12" src="/portal/images/capaPrograma/cocorico/jogo-home.jpg" alt="jogo" />Nome do Joguinho</a></li>
      <li class="span3"><a href="/cocorico/receitinhas-interna" title=""><img class="span12" src="/portal/images/capaPrograma/cocorico/jogo-home.jpg" alt="jogo" />Nome do Joguinho</a></li>
      <li class="span3"><a href="/cocorico/receitinhas-interna" title=""><img class="span12" src="/portal/images/capaPrograma/cocorico/jogo-home.jpg" alt="jogo" />Nome do Joguinho</a></li>
      <li class="span3"><a href="/cocorico/receitinhas-interna" title=""><img class="span12" src="/portal/images/capaPrograma/cocorico/jogo-home.jpg" alt="jogo" />Nome do Joguinho</a></li>
      <li class="span3"><a href="/cocorico/receitinhas-interna" title=""><img class="span12" src="/portal/images/capaPrograma/cocorico/jogo-home.jpg" alt="jogo" />Nome do Joguinho</a></li>
      
    </ul>
    </div>
    
    
  </div>
  <!-- /row-->










  <?php if(count($favoritos) > 0): ?>
  <div class="row-fluid conteudo destaques ytb">
    <?php if(isset($favoritos[0])): ?>
      <?php $related = $favoritos[0]->retriveRelatedAssetsByAssetTypeId(6); ?>
    <div class="span4">
      <a href="<?php echo $favoritos[0]->retriveUrl() ?>" title="<?php echo $favoritos[0]->getTitle() ?>"><img class="span12" src="http://img.youtube.com/vi/<?php echo $related[0]->AssetVideo->getYoutubeId() ?>/0.jpg" alt="<?php echo $favoritos[0]->getTitle() ?>" /></a>
      <a href="<?php echo $favoritos[0]->retriveUrl() ?>" class="span12 btn" title="<?php echo $favoritos[0]->getTitle() ?>">
        <span class=""></span>
        <?php //echo $favoritos[0]->getTitle() ?>
        <?php $tam=22; $str=$favoritos[0]->getTitle(); mb_internal_encoding("UTF-8"); if(strlen($str) <= $tam) echo $str; else echo mb_substr($str, 0, $tam-1)."&hellip;" ?>
      </a>
      <!-- RANKING -->
      <?php include_partial_from_folder('sites/cocorico', 'global/ranking', array('section' => $section, 'asset' => $favoritos[0])) ?>
      <!--/RANKING -->
    </div>
    <?php endif; ?>
    
    <?php if(isset($favoritos[1])): ?>
      <?php $related = $favoritos[1]->retriveRelatedAssetsByAssetTypeId(6); ?>
    <div class="span4">
      <a href="<?php echo $favoritos[1]->retriveUrl() ?>" title="<?php echo $favoritos[1]->getTitle() ?>"><img class="span12" src="http://img.youtube.com/vi/<?php echo $related[0]->AssetVideo->getYoutubeId() ?>/0.jpg" alt="<?php echo $favoritos[1]->getTitle() ?>" /></a>
      <a href="<?php echo $favoritos[1]->retriveUrl() ?>" class="span12 btn" title="<?php echo $favoritos[1]->getTitle() ?>" >
        <span class=""></span>
        <?php //echo $favoritos[1]->getTitle() ?>
        <?php $tam=22; $str=$favoritos[1]->getTitle(); mb_internal_encoding("UTF-8"); if(strlen($str) <= $tam) echo $str; else echo mb_substr($str, 0, $tam-1)."&hellip;" ?>
      </a>
      <!-- RANKING -->
      <?php include_partial_from_folder('sites/cocorico', 'global/ranking', array('section'=>$site, 'asset'=>$favoritos[1])) ?>
      <!--/RANKING -->
    </div>    
    <?php endif; ?>
    
    <?php if(isset($favoritos[2])): ?>
      <?php $related = $favoritos[2]->retriveRelatedAssetsByAssetTypeId(6); ?>
    <div class="span4">
      <a href="<?php echo $favoritos[2]->retriveUrl() ?>" title="<?php echo $favoritos[2]->getTitle() ?>"><img class="span12" src="http://img.youtube.com/vi/<?php echo $related[0]->AssetVideo->getYoutubeId() ?>/0.jpg" alt="<?php echo $favoritos[2]->getTitle() ?>" /></a>
      <a href="<?php echo $favoritos[2]->retriveUrl() ?>" class="span12 btn" title="<?php echo $favoritos[2]->getTitle() ?>" >
        <span class=""></span>
        <?php //echo $favoritos[2]->getTitle() ?>
         <?php $tam=22; $str=$favoritos[2]->getTitle(); mb_internal_encoding("UTF-8"); if(strlen($str) <= $tam) echo $str; else echo mb_substr($str, 0, $tam-1)."&hellip;" ?>
      </a>
      <!-- RANKING -->
      <?php include_partial_from_folder('sites/cocorico', 'global/ranking', array('section'=>$site, 'asset'=>$favoritos[2])) ?>
      <!--/RANKING -->
    </div>
    <?php endif; ?>
  </div>
  <!-- /row--> 
  <?php endif; ?>
  
  <!--row-->
  <?php if(count($pager) > 0): ?>
  <div class="row-fluid conteudo ytb">
    <ul class="destaques-small">
    <?php foreach($pager->getResults() as $d): ?>
      <?php $related = $d->retriveRelatedAssetsByAssetTypeId(6); ?>
      <li class="span2">
        <a href="<?php echo $d->retriveUrl() ?>" title="<?php echo $d->getTitle() ?>">
          <img class="span12" src="http://img.youtube.com/vi/<?php echo $related[0]->AssetVideo->getYoutubeId() ?>/1.jpg" alt="<?php echo $d->getTitle() ?>" />
          <p><?php $tam=16; $str=$d->getTitle(); mb_internal_encoding("UTF-8"); if(strlen($str) <= $tam) echo $str; else echo mb_substr($str, 0, $tam-1)."&hellip;" ?></p>
        </a>
      </li>
    <?php endforeach; ?>
    </ul>
  </div>

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

  <?php else: ?>
    <p>Nenhuma receitinha encontrada.</p> 
  <?php endif; ?>
  
  <!-- rodapé-->
  <div class="row-fluid  border-top"></div>
  <?php include_partial_from_folder('sites/cocorico', 'global/rodape', array('siteSections' => $siteSections, 'displays' => $displays, 'section'=>$section, 'uri'=>$uri)) ?>
  <!--/rodapé-->
  
  <!-- /rodape-->
</div>
<!-- /container-->