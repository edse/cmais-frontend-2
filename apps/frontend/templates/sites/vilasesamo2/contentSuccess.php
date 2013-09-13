<link rel="stylesheet" href="/portal/css/tvcultura/sites/vilasesamo2/internas.css" type="text/css" />
<link rel="stylesheet" href="/portal/css/tvcultura/sites/vilasesamo2/assets.css" type="text/css" />

<script src="/portal/js/jquery-ui/js/jquery-ui-1.8.11.custom.min.js"></script>
<script src="/portal/js/modernizr/modernizr.min.js" type="text/javascript"></script>
<script src="/portal/js/hammer.min.js" type="text/javascript"></script>
<script type="text/javascript" src="/portal/js/responsive-carousel/script.js"></script>
<link type="text/css" rel="stylesheet" href="/portal/js/responsive-carousel/style-vilasesamo.css"/>
<script type="text/javascript" src="/portal/js/bootstrap/bootstrap-fileupload.js"></script>

<script>
  $("body").addClass("interna");

</script>
<!-- HEADER -->
<?php include_partial_from_folder('sites/vilasesamo2', 'global/menuprincipal', array('site' => $site, 'mainSite' => $mainSite, 'section' => $section))
?>
<!-- /HEADER -->
<div id="content">
  <section class="scroll row-fluid">
    <h3><span class="sprite-icon-jogos-med"></span>Jogos<span class="seta-scroll sprite-scroll-jogos"></span></h3>
  </section>
  <section class="filtro row-fluid">
    <h3><span class="sprite-icon-jogos-med"></span>Jogos<a class="todos-assets"><span class="sprite-btn-voltar-jogos"></span><p>todos os jogos</p></a></h3>
    <div class="conteudo-asset">
      <h2>nome do jogo</h2>
    <p><a href="#" title="Hábitos para uma vida saudável"><img src="/portal/images/capaPrograma/vilasesamo2/btn-habitos-peq.png" alt="Hábitos para uma vida saudável" /></a>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut erat massa, ullamcorper sit amet elementum sed, sollicitudin non massa. Mauris ante tortor, feugiat quis dolor id, congue pharetra nisl. Maecenas suscipit eu diam et pellentesque. Morbi fermentum libero ac diam tristique, in egestas lectus rhoncus. Proin ut pellentesque massa. Morbi metus. </p>
      
      <div class="asset">
        <img src="/portal/images/capaPrograma/vilasesamo2/escola-pra-cachorro.jpg" alt="exemplo" />
      </div>
    </div>
  </section>
  <section class="relacionados">
    <h2>Brinque também com:</h2>
    <?php include_partial_from_folder('sites/vilasesamo2', 'global/menuCarrosselinternas', array('site' => $site, 'mainSite' => $mainSite, 'section' => $section));?>
    <span class="divisa tipo2"></span>


  </section>
  <section class="form row-fluid">
    <div class="span8">
    <h2>Brincar é um direito da criança</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ultrices sapien at massa condimentum venenatis. In luctus vulputate massa, quis faucibus tellus pharetra nec. Donec convallis ligula eu augue mattis luctus. Aliquam scelerisque quam metus. Desenhe sua brincadeira preferida e envie para a galeria do site! </p>
    <form class="form-horizontal" id="form-contato">
      <div class="control-group span8">
        <label class="control-label sprite-ico-nome" for="nome"></label>
        <div class="controls">
          <input type="text" id="nome" name="nome" placeholder="Nome" value="Nome" accesskey="n">
        </div>
      </div>
      
      <div class="control-group idade span2">
        <label class="control-label sprite-ico-idade" for="idade"></label>
        <div class="controls">
          <input type="text" id="idade" name="idade" placeholder="Idade" value="Idade" accesskey="i">
        </div>
      </div>
      
      <div class="control-group span8">
        <label class="control-label sprite-ico-cidade" for="cidade"></label>
        <div class="controls">
          <input type="text" id="cidade" name="cidade" placeholder="Cidade" value="Cidade" accesskey="c">
        </div>
      </div>
      <div class="control-group estado span2">
        <div class="controls">
          <select id="estado" name="estado">
            <option selected="selected" value="">UF</option>
            <option value="Acre">AC</option>
            <option value="Alagoas">AL</option>
            <option value="Amazonas">AM</option>
            <option value="Amapá">AP</option>
            <option value="Bahia">BA</option>
            <option value="Ceará">CE</option>
            <option value="Distrito Federal">DF</option>
            <option value="Espirito Santo">ES</option>
            <option value="Goiás">GO</option>
            <option value="Maranhão">MA</option>
            <option value="Minas Gerais">MG</option>
            <option value="Mato Grosso do Sul">MS</option>
            <option value="Mato Grosso">MT</option>
            <option value="Pará">PA</option>
            <option value="Paraíba">PB</option>
            <option value="Pernambuco">PE</option>
            <option value="Piauí">PI</option>
            <option value="Paraná">PR</option>
            <option value="Rio de Janeiro">RJ</option>
            <option value="Rio Grande do Norte">RN</option>
            <option value="Rondônia">RO</option>
            <option value="Roraima">RR</option>
            <option value="Rio Grande do Sul">RS</option>
            <option value="Santa Catarina">SC</option>
            <option value="Sergipe">SE</option>
            <option value="São Paulo">SP</option>
            <option value="Tocantins">TO</option>
          </select>
        </div>
      </div>
      <div class="control-group span8">
        <label class="control-label sprite-ico-email" for="email"></label>
        <div class="controls">
          <input type="text" id="email" name="email" placeholder="Email" value="Email" accesskey="e">
        </div>
      </div>
       <div class="control-group span2 idade anexo">
        <label class="control-label sprite-ico-anexo" for="anexo" accesskey="a"></label>
        <div class="controls">
          <input id="datafile" type="file" name="datafile" size="1" name="datafile">
          <!--a href="#" title="Anexar">Anexar</a!-->
        </div>
      </div>
      <div class="control-group span12 msg">
        <label class="control-label sprite-ico-mensagem" for="mensagem"></label>
        <div class="controls">
          <textarea id="mensagem" name="mensagem" placeholder="Mensagem" value="Mensagem" accesskey="m"></textarea>
        </div>
      </div>
      <div class="control-group span11">
        <label class="radio">
          <input type="radio" name="concorco" id="concorco" value="concorco" checked>
          Declaro que li e estou de acordo com os <a href="#">Termos e Condições</a>.
        </label>
        <button type="submit" class="btn">enviar minha brincadeira</button>
      </div>
    </form>
    <div class="sucesso">
     <p>Sua brincadeira foi enviada com sucesso e em breve estará em nossa galeria de brincadeiras!</p>
     <button type="submit" class="btn">visitar a galeria de brincadeiras</button>
    </div>
    
    </div>
    <div class="span4">
      <iframe width="300" height="246" src="//www.youtube.com/embed/gjQA0n_1fg4" frameborder="0" allowfullscreen></iframe>
    </div>


  </section>
  <section class="pais">
    <span class="divisa"></span>
    <h2>Para adultos <span class="sprite-seta-down"></span></h2>
    <div class="redes">
        <p>Compartilhe esta brincadeira:</p>
        <g:plusone size="medium" count="false"></g:plusone>
        <a href="//pinterest.com/pin/create/button/" data-pin-do="buttonBookmark" ><img src="//assets.pinterest.com/images/pidgets/pin_it_button.png" alt="Pinterest" style="margin-top:-10px;" /></a>
        <fb:like href="<?php echo $uri ?>" layout="button_count" show_faces="false" send="false"></fb:like>
        <a href="http://twitter.com/share" class="twitter-share-button" data-count="horizontal" data-via="portalcmais" data-related="tvcultura" style="width: 80px;">Tweet</a>
      </div>
    <div class="content span12 row-fluid">
      
      
      <div class="span4 dica">
        
        <h2><span class="sprite-aspa-esquerda"></span><a href="#">Nome da Dica</a></h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam consequat metus ut leo interdum eleifend. Duis vel mauris et nunc posuere vehicula a id arcu. Maecenas malesuada ante ac consequat viverra. Vivamus tempor, nulla quis facilisis ullamcorper, tortor odio elementum eros, sit amet cursus felis elit vel diam. Fusce fringilla, nulla eu luctus lacinia, risus turpis varius orci, vel fringilla sem eros eu diam. Pellentesque sodales cursus elit, ac suscipit eros consectetur nec.
        Aenean at metus.<span class="sprite-aspa-direita"></span></p>
        
        <button type="submit" class="btn">baixar</button>
      </div>
      <div class="span4 box-select">
        <a href="#" title=""> <img src="/portal/images/capaPrograma/vilasesamo2/escola-pra-cachorro.jpg" alt="thumb do jogo" /> </a>
        <h2><a>Nome jogo</a></h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam consequat metus ut leo interdum eleifend.</p>
      </div>
      <div class="span4">
        <p>Conheça nossos parceiros:</p>
        <a class="publicidade" href="#" title="Publicidade">
          <img src="/portal/images/capaPrograma/vilasesamo2/banner-sesc.png" alt="Sesc" />
        </a>
        <a class="publicidade" href="#" title="Publicidade">
          <img src="/portal/images/capaPrograma/vilasesamo2/banner-mapa.png" alt="Mapa do Brincar" />
        </a>
        
        <p>Você também pode escolher o jogo de acordo com as preferências da criança:</p>
        <div class="btn-group">
          <a class="btn dropdown-toggle" data-toggle="dropdown" href="#"> Selecione a categoria <span class="caret sprite-seta-down-amarela"></span> </a>
          <ul class="dropdown-menu">
            <li><a href="#">categoria 01</a></li>
            <li><a href="#">categoria 02</a></li>
            <li><a href="#">categoria 03</a></li>
            <li><a href="#">categoria 04</a></li>
          </ul>
        </div>
      </div>
      <h2 class="fechar-toogle ativo"><span class="sprite-seta-up"></span></h2>
    </div>
    
    <span class="linha"></span>
  </section>
</div>
<script>
//carrossel interna
$('#carrossel-i').responsiveCarousel({
  arrowLeft: '.arrow-left span.personagens',
  arrowRight: '.arrow-right span.personagens',
  target:'#carrossel-i .slider-target',
  unitElement:'#carrossel-i .slider-target > li',
  mask:'#carrossel-i .slider-mask',
  easing:'linear',
  dragEvents:true,
  speed:200,
  slideSpeed:1000
});


if(screen.width > 1024){
  $('#carrossel-i').mouseenter(function(){
    $('.arrow.personagem').fadeIn('fast');
  });
  
  $('#carrossel-mobile').mouseenter(function(){
    $('.arrow.destaque-mobile').fadeIn('fast');
  });
};
if(navigator.appName!='Microsoft Internet Explorer')
{
  //carrossel personagens redraw pra tablet e celular home
  window.addEventListener('load', function() {
    $('.carrossel-i, #carrossel-mobile').responsiveCarousel('redraw');
  });
  window.addEventListener("orientationchange", function() {
    $('.carrossel-i, #carrossel-mobile').responsiveCarousel('redraw');
  }, false);
  window.addEventListener("resize", function() {
    $('.carrossel-i, #carrossel-mobile').responsiveCarousel('redraw');
  }, false);
  //carrossel personagens redraw pra tablet e celular home
}
</script>

<script type="text/javascript" src="/portal/js/validate/jquery.validate.js"></script>
<script type="text/javascript" src="/portal/js/validate/additional-methods.js"></script>
<!--script>
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

</script-->

<!--form-->
<script type="text/javascript">
  $(document).ready(function(){
    var validator = $('#form-contato').validate({
      
      submitHandler: function(form){
        form.submit();
      },
      rules:{
        nome:{
          required:true,
          minlength: 2
        },
        idade:{
          required:true
        },
        cidade:{
          required:true,
          minlength: 3
        },
        estado:{
          required:true          
        },
        email:{
          required:true,
          email: true
        },        
        datafile:{
          required: true,
          accept: "png|jpe?g|gif",
          filesize: 15728640
        },
        mensagem:{
          required:true,
          minlength: 3
        },
        concorda:{
          required: true
        }
        
      },
      /*messages:{
        nome: "Digite um nome v&aacute;lido. Este campo &eacute; Obrigat&oacute;rio.",
        
        email: "Digite um e-mail v&aacute;lido. Este campo &eacute; Obrigat&oacute;rio.",
        cidade: "Este campo &eacute; Obrigat&oacute;rio.",
        datafile: {
          accept: "O arquivo precisa estar no formato JPG, GIF ou PNG",
          filesize: "O arquivo não pode ser maior que 15MB"
        },
        concorda: "Este campo &eacute; Obrigat&oacute;rio."
      },*/
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
