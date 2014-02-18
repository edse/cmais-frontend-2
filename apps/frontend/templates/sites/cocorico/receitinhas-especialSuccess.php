<?php
$assets = $pager->getResults(); //depois tem de ordenar por ranking...
?>

<script type="text/javascript" src="http://cmais.com.br/portal/js/bootstrap/popover.js"></script>
<link href="http://cmais.com.br/portal/css/tvcultura/sites/cocorico/brincadeiras.css" rel="stylesheet">

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
  
  <div class="row-fluid conteudo destaques especial">
    
    <div class="span4 form-especial">
      <div class="seta"></div>
      <div class="form">
        <h2>Receitinhas com Milho!</h2>
        <p>Doce ou salgada, todo mundo conhece uma receitinha deliciosa que tenha milho entre os ingredientes. Envie para nós! As 02 (duas) receitinhas mais criativas vão ganhar 01 (um) livro de receitas da Rebeca Chamma! E ainda podem ser apresentadas na Cozinha da Amiga da Zazá!</p>
        <p>Aproveite e assista a essa seleção de receitinhas com milho que já foram feitas em nossa cozinha!</p>  
        <div class="divisao"></div>
        <form class="form-horizontal" id="form-contato" method="post" action="http://app.cmais.com.br/actions/cocorico/sendmail.php" enctype="multipart/form-data">
          <h2>Envie sua receitinha com milho:</h2>
          <div class="control-group g-nome">
            <label class="control-label nome" for="nome"></label>
            <div class="controls">
              <input type="text" id="nome" name="nome" data-default="Seu nomea" value="Seu nomea">
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
        <a href="/cocorico/receitinhas-interna" title="link do jogo"><img class="span12" src="http://cmais.com.br/portal/images/capaPrograma/cocorico/jogo-home.jpg" alt="jogo" /></a>
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
        <a href="/cocorico/receitinhas-interna" title="link do jogo"><img class="span12" src="http://cmais.com.br/portal/images/capaPrograma/cocorico/jogo-home.jpg" alt="jogo" /></a>
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
      <li class="span3"><a href="/cocorico/receitinhas-interna" title=""><img class="span12" src="http://cmais.com.br/portal/images/capaPrograma/cocorico/jogo-home.jpg" alt="jogo" />Nome do Joguinho</a></li>
      <li class="span3"><a href="/cocorico/receitinhas-interna" title=""><img class="span12" src="http://cmais.com.br/portal/images/capaPrograma/cocorico/jogo-home.jpg" alt="jogo" />Nome do Joguinho</a></li>
      <li class="span3"><a href="/cocorico/receitinhas-interna" title=""><img class="span12" src="http://cmais.com.br/portal/images/capaPrograma/cocorico/jogo-home.jpg" alt="jogo" />Nome do Joguinho</a></li>
      <li class="span3"><a href="/cocorico/receitinhas-interna" title=""><img class="span12" src="http://cmais.com.br/portal/images/capaPrograma/cocorico/jogo-home.jpg" alt="jogo" />Nome do Joguinho</a></li>
      <li class="span3"><a href="/cocorico/receitinhas-interna" title=""><img class="span12" src="http://cmais.com.br/portal/images/capaPrograma/cocorico/jogo-home.jpg" alt="jogo" />Nome do Joguinho</a></li>
      <li class="span3"><a href="/cocorico/receitinhas-interna" title=""><img class="span12" src="http://cmais.com.br/portal/images/capaPrograma/cocorico/jogo-home.jpg" alt="jogo" />Nome do Joguinho</a></li>
      <li class="span3"><a href="/cocorico/receitinhas-interna" title=""><img class="span12" src="http://cmais.com.br/portal/images/capaPrograma/cocorico/jogo-home.jpg" alt="jogo" />Nome do Joguinho</a></li>
      <li class="span3"><a href="/cocorico/receitinhas-interna" title=""><img class="span12" src="http://cmais.com.br/portal/images/capaPrograma/cocorico/jogo-home.jpg" alt="jogo" />Nome do Joguinho</a></li>
      <li class="span3"><a href="/cocorico/receitinhas-interna" title=""><img class="span12" src="http://cmais.com.br/portal/images/capaPrograma/cocorico/jogo-home.jpg" alt="jogo" />Nome do Joguinho</a></li>
      <li class="span3"><a href="/cocorico/receitinhas-interna" title=""><img class="span12" src="http://cmais.com.br/portal/images/capaPrograma/cocorico/jogo-home.jpg" alt="jogo" />Nome do Joguinho</a></li>
      <li class="span3"><a href="/cocorico/receitinhas-interna" title=""><img class="span12" src="http://cmais.com.br/portal/images/capaPrograma/cocorico/jogo-home.jpg" alt="jogo" />Nome do Joguinho</a></li>
      <li class="span3"><a href="/cocorico/receitinhas-interna" title=""><img class="span12" src="http://cmais.com.br/portal/images/capaPrograma/cocorico/jogo-home.jpg" alt="jogo" />Nome do Joguinho</a></li>
      <li class="span3"><a href="/cocorico/receitinhas-interna" title=""><img class="span12" src="http://cmais.com.br/portal/images/capaPrograma/cocorico/jogo-home.jpg" alt="jogo" />Nome do Joguinho</a></li>
      <li class="span3"><a href="/cocorico/receitinhas-interna" title=""><img class="span12" src="http://cmais.com.br/portal/images/capaPrograma/cocorico/jogo-home.jpg" alt="jogo" />Nome do Joguinho</a></li>
      <li class="span3"><a href="/cocorico/receitinhas-interna" title=""><img class="span12" src="http://cmais.com.br/portal/images/capaPrograma/cocorico/jogo-home.jpg" alt="jogo" />Nome do Joguinho</a></li>
      <li class="span3"><a href="/cocorico/receitinhas-interna" title=""><img class="span12" src="http://cmais.com.br/portal/images/capaPrograma/cocorico/jogo-home.jpg" alt="jogo" />Nome do Joguinho</a></li>
      
    </ul>
    </div>
    
    
  </div>
  <!-- /row-->
 <!--row-->
  <div class="row-fluid conteudo">
    <ul class="destaques-small destaque2">
      <li class="span2"><a href="/cocorico/receitinhas-interna" title=""><img class="span12" src="http://cmais.com.br/portal/images/capaPrograma/cocorico/jogo-home.jpg" alt="jogo" />Nome do Joguinho</a></li>
      <li class="span2"><a href="/cocorico/receitinhas-interna" title=""><img class="span12" src="http://cmais.com.br/portal/images/capaPrograma/cocorico/jogo-home.jpg" alt="jogo" />Nome do Joguinho</a></li>
      <li class="span2"><a href="/cocorico/receitinhas-interna" title=""><img class="span12" src="http://cmais.com.br/portal/images/capaPrograma/cocorico/jogo-home.jpg" alt="jogo" />Nome do Joguinho</a></li>
      <li class="span2"><a href="/cocorico/receitinhas-interna" title=""><img class="span12" src="http://cmais.com.br/portal/images/capaPrograma/cocorico/jogo-home.jpg" alt="jogo" />Nome do Joguinho</a></li>
      <li class="span2"><a href="/cocorico/receitinhas-interna" title=""><img class="span12" src="http://cmais.com.br/portal/images/capaPrograma/cocorico/jogo-home.jpg" alt="jogo" />Nome do Joguinho</a></li>
      <li class="span2"><a href="/cocorico/receitinhas-interna" title=""><img class="span12" src="http://cmais.com.br/portal/images/capaPrograma/cocorico/jogo-home.jpg" alt="jogo" />Nome do Joguinho</a></li>
      <li class="span2"><a href="/cocorico/receitinhas-interna" title=""><img class="span12" src="http://cmais.com.br/portal/images/capaPrograma/cocorico/jogo-home.jpg" alt="jogo" />Nome do Joguinho</a></li>
      <li class="span2"><a href="/cocorico/receitinhas-interna" title=""><img class="span12" src="http://cmais.com.br/portal/images/capaPrograma/cocorico/jogo-home.jpg" alt="jogo" />Nome do Joguinho</a></li>
      <li class="span2"><a href="/cocorico/receitinhas-interna" title=""><img class="span12" src="http://cmais.com.br/portal/images/capaPrograma/cocorico/jogo-home.jpg" alt="jogo" />Nome do Joguinho</a></li>
      <li class="span2"><a href="/cocorico/receitinhas-interna" title=""><img class="span12" src="http://cmais.com.br/portal/images/capaPrograma/cocorico/jogo-home.jpg" alt="jogo" />Nome do Joguinho</a></li>
      <li class="span2"><a href="/cocorico/receitinhas-interna" title=""><img class="span12" src="http://cmais.com.br/portal/images/capaPrograma/cocorico/jogo-home.jpg" alt="jogo" />Nome do Joguinho</a></li>
      <li class="span2"><a href="/cocorico/receitinhas-interna" title=""><img class="span12" src="http://cmais.com.br/portal/images/capaPrograma/cocorico/jogo-home.jpg" alt="jogo" />Nome do Joguinho</a></li>
      <li class="span2"><a href="/cocorico/receitinhas-interna" title=""><img class="span12" src="http://cmais.com.br/portal/images/capaPrograma/cocorico/jogo-home.jpg" alt="jogo" />Nome do Joguinho</a></li>
      <li class="span2"><a href="/cocorico/receitinhas-interna" title=""><img class="span12" src="http://cmais.com.br/portal/images/capaPrograma/cocorico/jogo-home.jpg" alt="jogo" />Nome do Joguinho</a></li>
      <li class="span2"><a href="/cocorico/receitinhas-interna" title=""><img class="span12" src="http://cmais.com.br/portal/images/capaPrograma/cocorico/jogo-home.jpg" alt="jogo" />Nome do Joguinho</a></li>
      <li class="span2"><a href="/cocorico/receitinhas-interna" title=""><img class="span12" src="http://cmais.com.br/portal/images/capaPrograma/cocorico/jogo-home.jpg" alt="jogo" />Nome do Joguinho</a></li>
      <li class="span2"><a href="/cocorico/receitinhas-interna" title=""><img class="span12" src="http://cmais.com.br/portal/images/capaPrograma/cocorico/jogo-home.jpg" alt="jogo" />Nome do Joguinho</a></li>
      <li class="span2"><a href="/cocorico/receitinhas-interna" title=""><img class="span12" src="http://cmais.com.br/portal/images/capaPrograma/cocorico/jogo-home.jpg" alt="jogo" />Nome do Joguinho</a></li>
      <li class="span2"><a href="/cocorico/receitinhas-interna" title=""><img class="span12" src="http://cmais.com.br/portal/images/capaPrograma/cocorico/jogo-home.jpg" alt="jogo" />Nome do Joguinho</a></li>
      <li class="span2"><a href="/cocorico/receitinhas-interna" title=""><img class="span12" src="http://cmais.com.br/portal/images/capaPrograma/cocorico/jogo-home.jpg" alt="jogo" />Nome do Joguinho</a></li>
      <li class="span2"><a href="/cocorico/receitinhas-interna" title=""><img class="span12" src="http://cmais.com.br/portal/images/capaPrograma/cocorico/jogo-home.jpg" alt="jogo" />Nome do Joguinho</a></li>
      <li class="span2"><a href="/cocorico/receitinhas-interna" title=""><img class="span12" src="http://cmais.com.br/portal/images/capaPrograma/cocorico/jogo-home.jpg" alt="jogo" />Nome do Joguinho</a></li>
      <li class="span2"><a href="/cocorico/receitinhas-interna" title=""><img class="span12" src="http://cmais.com.br/portal/images/capaPrograma/cocorico/jogo-home.jpg" alt="jogo" />Nome do Joguinho</a></li>
      <li class="span2"><a href="/cocorico/receitinhas-interna" title=""><img class="span12" src="http://cmais.com.br/portal/images/capaPrograma/cocorico/jogo-home.jpg" alt="jogo" />Nome do Joguinho</a></li>
    </ul>
  </div>
  <!-- /row-->
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
  <!-- rodape-->
  <div class="row-fluid  border-top"></div>
  <div class="row-fluid rodape" >
    <h3>2012 &copy; tv cultura - fpa</h3>
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
  $(document).ready(function(){
    var validator = $('#form-contato').validate({
      
      submitHandler: function(form){
        form.submit();
      },
      rules:{
        nome:{
          required:required:function(){
              validate('#nome');
            },
          minlength: 2
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
          minlength: 100
        },
        datafile:{
          //required: true,
          accept: "png|jpe?g|gif",
          filesize: 15728640
        },
        regulamento:{
          required:true
        }
        
        
      },
      messages:{
        nome: "Todos os campos são obrigatórios.",
        estado: "Todos os campos são obrigatórios.",
        cidade: "Todos os campos são obrigatórios.",
        regulamento: "Todos os campos são obrigatórios.",
        datafile:  "Todos os campos são obrigatórios."        
      },
      success: function(label){
        // set &nbsp; as text for IE
        label.addClass("checked");
        $("label.error.checked").css("display","none");
        label.html("&nbsp;");
      }
    });
  });
  
  function validate(obj){
    if($(obj).val()==$(obj).attr("data-default"))
      $(obj).val('');
  }
</script>