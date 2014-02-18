<?php 
//var_dump($displays['receitinhas-especiais']);

 // if (count($displays['receitinhas-especiais']) > 0){
   //   foreach($displays['receitinhas-especiais'] as $d){
     //   $related = $d->Asset->retriveRelatedAssetsByAssetTypeId(6);  
       // echo $related[0]->AssetVideo->getYoutubeId();       
    //}
  //}     

  //die("\nFIM");
?>


<?php 
$assets = $pager->getResults();
?>

<script type="text/javascript" src="http://cmais.com.br/portal/js/bootstrap/popover.js"></script>
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
  
  <?php
  /* CONCURSO RECEITINHAS
  <div class="row-fluid conteudo destaques especial">
    <div class="span4 form-especial">
      <div class="seta"></div>
      <div class="form">
        <h2>Receitinhas com Milho!</h2>
        <p>Concurso Encerrado!</p>
        <p>Em breve divulgaremos os ganhadores e as receitas enviadas!</p> 
        <p>Enquanto isso, aproveite e assista a essa seleção de receitinhas com milho que já foram feitas em nossa cozinha!</p>
        <p>Bom apetite!</p>
        <!--p>Doce ou salgada, todo mundo conhece uma receitinha deliciosa que tenha milho entre os ingredientes. Envie para nós! As 02 (duas) receitinhas mais criativas vão ganhar 01 (um) livro de receitas da Rebeca Chamma! E ainda podem ser apresentadas na Cozinha da Amiga da Zazá!</p>
        <p>Aproveite e assista a essa seleção de receitinhas com milho que já foram feitas em nossa cozinha!</p-->  
        <div class="divisao"></div>
        <?php
        /*
        <form class="form-horizontal" id="form-contato" method="post" action="http://app.cmais.com.br/actions/cocorico/sendmail.php" enctype="multipart/form-data">
          <h2>Envie sua receitinha com milho:</h2>
          <div class="control-group g-nome">
            <label class="control-label nome" for="nome"></label>
            <div class="controls">
              <input type="text" id="nome" name="nome" placeholder="Seu nome" value="Seu nome">
            </div>
          </div>
          <div class="control-group g-email">
            <label class="control-label email" for="email"></label>
            <div class="controls">
              <input type="text" id="email" name="email" placeholder="Seu email" value="Seu email">
            </div>
          </div>
          <div class="control-group g-cidade">
            <label class="control-label cidade" for="cidade"></label>
            <div class="controls">
              <input type="text" id="cidade" name="cidade" placeholder="Sua cidade" value="Sua cidade">
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
              <textarea id="receita" placeholder="Escreva aqui sua receitinha" value="Escreva aqui sua receitinha" name="receita"></textarea>
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
              <!-- regulamento -->
              <?php
                $AssetRegulamento = Doctrine_Query::create()
                  ->select('a.*')
                  ->from('Asset a')
                  ->where('a.id = ?', 138617)
                  ->andWhere('a.is_active = ?', 1)
                  ->limit(1)
                  ->execute(); 
                foreach ($AssetRegulamento as $a) {
                  echo $a->AssetContent->render(); 
                }
              ?>
              <!-- /regulamento -->
            </div>
            
            <div class="controls">
               <input id="regulamento" class="check" type="checkbox" name="regulamento">
               <label>Li e concordo com o regulamento.</label>
            </div>
            <p class="sucesso" style="display:none;">Hum... Essa receitinha parece uma delícia! Obrigado!</p>
            
            <?php
            //if(isset($_GET["success"])=="1" || isset($_GET["success"])=="2"){
            ?>
              <!-- p class="sucesso">Hum... Essa receitinha parece uma delícia! Obrigado!</p -->
            <?php  
            //}
            ?>
            
            <button type="submit"name="enviar" id="enviar" class="btn">enviar</button>
          </div>
                   
        </form>
        
      </div>
    </div>

    
    <div class="span8 ytb">
  <?php $cont = 0; ?>
    <?php if (count($displays['receitinhas-especiais']) > 0): ?>      
      <?php foreach($displays['receitinhas-especiais'] as $d): ?>
        <?php $related = $d->Asset->retriveRelatedAssetsByAssetTypeId(6);?>  
              
        
        <div class="span6">
          <a href="<?php echo $d->retriveUrl() ?>" title="link do jogo"><img class="span12" src="http://img.youtube.com/vi/<?php echo $related[0]->AssetVideo->getYoutubeId(); ?>/0.jpg" alt="<?php echo $d->getTitle() ?>" /></a>
          <a href="<?php echo $d->retriveUrl() ?>" class="span12 btn" title=""><?php echo $d->getTitle() ?></a>
          <ul class="likes">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
          </ul>
        </div>
        <?php 
          if($cont == 1){
             $cont=0;?>  
          </div><div class="span8 ytb"> 
        <?php 
          }else{
           $cont++;
          }
        ?>        
          
        <?php endforeach; ?>      
    
    </div>  
  <?php endif; ?>
  
  </div>
  <!-- /row-->
  
     *  
    */ ?>

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
  <!-- /rows--> 
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
    <!-- PAGINACAO <?php echo $pager->getPage() ?>/<?php echo $pager->getLastPage() ?> -->
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



<script type="text/javascript" src="http://cmais.com.br/portal/js/validate/jquery.validate.js"></script>
<script type="text/javascript" src="http://cmais.com.br/portal/js/validate/additional-methods.js"></script>
<script>
$(document).ready(function(){
      /* form tv cocorico */
  $('.btn-form').click(function(){
   $('.destaque-home-tv').hide();
   $('.interatividade').fadeIn("fast"); 
  })
  $('#votar-input').click(function(){
    $('label.error').css('display','none');
  });
});

</script>

<!--form-->
<script type="text/javascript">
  function getSuccess(variable) {
    var query = window.location.search.substring(1);
    var vars = query.split("&");
    for (var i=0;i<vars.length;i++){
      var pair = vars[i].split("=");
      if (pair[0] == variable) {
        return pair[1];
      }
    }
  }
  var success = getSuccess("success");
  if(success == 1 || success ==2){
    $(".sucesso").show();  
  }

  $(document).ready(function(){
    
    $('button#enviar').click(function(){
      //$(".msgAcerto, .msgErro").hide();
      //alert("Enviou");
      $('.sucesso').hide(); 
    });

    function clearForm(){
      $(':input','#form-contato')
      .not(':button, :submit, :reset, :hidden')
      .val('')
      .removeAttr('checked')
      .removeAttr('selected');
    }
    
    var validator = $('#form-contato').validate({
      
      submitHandler: function(form){
        form.submit();
        
        /*var form = $("#form-contato").serialize();
            $.ajax({
              type: "POST",
              dataType: "text",
              url: $("#form-contato").attr("action"),
              data: form+'&datafile='+encodeURIComponent(datafile),
              beforeSend: function(){
                $('button#enviar').attr('disabled','disabled');
                $('img#ajax-loader').show();
              },
              success: function(data){
                $('button#enviar').removeAttr('disabled');
                window.location.href="#";
                  alert(data);
                  console.log(data);
                if($.trim(data) == "1"){
                  //$("#form-contato").clearForm();
                  clearForm();
                  $(".sucesso").html("Hum... Essa receitinha parece ser uma delícia! Obrigado!");
                  console.log("mensagem enviada com sucesso");
                  
                }else if($.trim(data) == "2"){
                  console.log("Puxa, puxa que puxa! Imagem é maior que 15 MB! Escolha uma menor!");
                  $(".sucesso").html("Puxa, puxa que puxa! Imagem é maior que 15 MB! Escolha uma menor!");
                  $(".sucesso").show();
                }else{
                  console.log("Puxa, puxa que puxa! Alguma coisa deu errado! Tente de novo!");
                  $(".sucesso").html("Puxa, puxa que puxa! Alguma coisa deu errado! Tente de novo!");
                  $(".sucesso").show();
                }
              }
            });
            */
        
      },
      rules:{
        nome:{
          required:true,
          minlength: 2
        },
        email:{
          required:true,
          email: true
        },
        estado:{
          required:true         
        },
        
        cidade:{
          required:true,
          minlength: 3
        },
        receita:{
          required:true,
          minlength: 2
        },
        
        regulamento:{
          required:true
        }
        
        
      },
      messages:{
        nome: "Puxa, puxa que puxa! Acho que você esqueceu de preencher alguma coisa. Tente de novo!",
        email: "Puxa, puxa que puxa! Acho que você esqueceu de preencher alguma coisa. Tente de novo!",
        estado: "Puxa, puxa que puxa! Acho que você esqueceu de preencher alguma coisa. Tente de novo!",
        cidade: "Puxa, puxa que puxa! Acho que você esqueceu de preencher alguma coisa. Tente de novo!",
        receita: "Puxa, puxa que puxa! Acho que você esqueceu de preencher alguma coisa. Tente de novo!",
        regulamento: "Puxa, puxa que puxa! Acho que você esqueceu de preencher alguma coisa. Tente de novo!"
          
      },
      success: function(label){
        // set &nbsp; as text for IE
        label.addClass("checked");
        $("label.error.checked").css("display","none");
        label.html("&nbsp;");
        //$("button#enviar").css("margin-top","20px");
      }
    });
  });
  
  function validate(obj){
    if($(obj).val()==$(obj).attr("data-default"))
      $(obj).val('');
  }
</script>
