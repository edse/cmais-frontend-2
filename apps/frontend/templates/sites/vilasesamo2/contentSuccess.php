<link rel="stylesheet" href="/portal/css/tvcultura/sites/vilasesamo2/internas.css" type="text/css" />
<link rel="stylesheet" href="/portal/css/tvcultura/sites/vilasesamo2/assets.css" type="text/css" />

<script type="text/javascript" src="/portal/js/responsive-carousel/script.js"></script>
<link type="text/css" rel="stylesheet" href="/portal/js/responsive-carousel/style-vilasesamo.css"/>

<script>
  $("body").addClass("interna");

</script>
<!-- HEADER -->
<?php include_partial_from_folder('sites/vilasesamo2', 'global/menuprincipal', array('site' => $site, 'mainSite' => $mainSite, 'section' => $section))
?>
<!-- /HEADER -->
<div id="content">
  <section class="scroll row-fluid">
    <h3><i class="sprite-icon-jogos-med"></i>Jogos<i class="seta-scroll sprite-scroll-jogos"></i></h3>
  </section>
  <section class="filtro row-fluid">
    <h3><i class="sprite-icon-jogos-med"></i>Jogos<a class="todos-assets"><i class="sprite-btn-voltar-jogos"></i><p>todos os jogos</p></a></h3>
    <div class="conteudo-asset">
      <h2>nome do jogo</h2>
    <p><a href="#" title="Hábitos para uma vida saudável"><img src="/portal/images/capaPrograma/vilasesamo2/btn-habitos-peq.png" alt="Hábitos para uma vida saudável" /></a>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut erat massa, ullamcorper sit amet elementum sed, sollicitudin non massa. Mauris ante tortor, feugiat quis dolor id, congue pharetra nisl. Maecenas suscipit eu diam et pellentesque. Morbi fermentum libero ac diam tristique, in egestas lectus rhoncus. Proin ut pellentesque massa. Morbi metus. </p>
      
      <div class="asset">
        <img src="/portal/images/capaPrograma/vilasesamo2/escola-pra-cachorro.jpg" />
      </div>
    </div>
  </section>
  <section class="relacionados">
    <h2>Brinque também com:</h2>
    <!--
    <p><a href="/vilasesamo2/elmo" alt="Elmo">Elmo</a>, <a href="/vilasesamo2/elmo" alt="Elmo">Elmo</a>, <a href="/vilasesamo2/elmo" alt="Elmo">Elmo</a>, <a href="/vilasesamo2/elmo" alt="Elmo">Elmo</a></p>
    <a class="todos-assets"><i class="sprite-btn-voltar-jogos"></i><p>todos os jogos</p></a>
    <br />
    -->
    <?php include_partial_from_folder('sites/vilasesamo2', 'global/menuCarrosselinternas', array('site' => $site, 'mainSite' => $mainSite, 'section' => $section));?>
    


  </section>
  <section class="form">
    <h2>Brincar é um direito da criança</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ultrices sapien at massa condimentum venenatis. In luctus vulputate massa, quis faucibus tellus pharetra nec. Donec convallis ligula eu augue mattis luctus. Aliquam scelerisque quam metus. Desenhe sua brincadeira preferida e envie para a galeria do site! </p>
    <form class="form-horizontal">
      <div class="control-group">
        <label class="control-label" for="nome">Nome</label>
        <div class="controls">
          <input type="text" id="nome" placeholder="Nome" value="Nome">
        </div>
      </div>
      
      <div class="control-group">
        <label class="control-label" for="idade">Idade</label>
        <div class="controls">
          <input type="text" id="idade" placeholder="Idade" value="Idade">
        </div>
      </div>
      
      <div class="control-group">
        <label class="control-label" for="cidade">Cidade</label>
        <div class="controls">
          <input type="text" id="cidade" placeholder="Cidade" value="Cidade">
        </div>
      </div>
      <div class="control-group">
        <label class="control-label" for="estado">UF</label>
        <div class="controls">
          <input type="text" id="estado" placeholder="Estado" value="Estado">
        </div>
      </div>
      <div class="control-group">
        <label class="control-label" for="email">Email</label>
        <div class="controls">
          <input type="text" id="email" placeholder="Email" value="Email">
        </div>
      </div>
       <div class="control-group">
        <label class="control-label" for="anexo">Anexo</label>
        <div class="controls">
          <input type="text" id="anexo" placeholder="Anexo" value="Anexo">
        </div>
      </div>
      <div class="control-group">
        <label class="control-label" for="mensagem">Mensagem</label>
        <div class="controls">
          <textarea id="mensagem" placeholder="Mensagem" value="Mensagem"></textarea>
        </div>
      </div>
      <div class="control-group">
        <label class="radio">
          <input type="radio" name="concorco" id="concorco" value="concorco" checked>
          Declaro que li e estou de acordo com os <a href="#">Termos e Condições</a>.
        </label>
      </div>
      <div class="control-group">
        <div class="controls">
          <label class="checkbox">
            <input type="checkbox"> Remember me
          </label>
          <button type="submit" class="btn">Sign in</button>
        </div>
      </div>
    </form>


  </section>
  <section class="pais">
    <span class="divisa"></span>
    <h2>para os pais <i class="sprite-seta-down"></i></h2>
    <div class="content span12 row-fluid">
      <div class="redes">
        <g:plusone size="medium" count="false"></g:plusone>
        <a href="//pinterest.com/pin/create/button/" data-pin-do="buttonBookmark" ><img src="//assets.pinterest.com/images/pidgets/pin_it_button.png" style="margin-top:-10px;" /></a>
        <fb:like href="<?php echo $uri ?>" layout="button_count" show_faces="false" send="false"></fb:like>
        <a href="http://twitter.com/share" class="twitter-share-button" data-count="horizontal" data-via="portalcmais" data-related="tvcultura">Tweet</a>
      </div>
      <div class="span4 dica">
        <i class="sprite-aspa-esquerda"></i>
        <h2><a href="#">Nome da Dica</a></h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam consequat metus ut leo interdum eleifend. Duis vel mauris et nunc posuere vehicula a id arcu. Maecenas malesuada ante ac consequat viverra. Vivamus tempor, nulla quis facilisis ullamcorper, tortor odio elementum eros, sit amet cursus felis elit vel diam. Fusce fringilla, nulla eu luctus lacinia, risus turpis varius orci, vel fringilla sem eros eu diam. Pellentesque sodales cursus elit, ac suscipit eros consectetur nec.
        Aenean at metus.</p>
        <i class="sprite-aspa-direita"></i>
      </div>
      <div class="span4 box-select">
        <a href="#" title=""> <img src="/portal/images/capaPrograma/vilasesamo2/escola-pra-cachorro.jpg" alt="" /> </a>
        <h2><a>Nome jogo</a></h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam consequat metus ut leo interdum eleifend.</p>
      </div>
      <div class="span4">
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
        <a class="publicidade" href="#" title="Publicidade"> <!-- vilasesamo -->
        <script type='text/javascript'>
          GA_googleFillSlot("vilasesamo");
        </script>
        <p>Publicidade</p> </a>
      </div>
      <h2 class="fechar-toogle ativo"><i class="sprite-seta-up"></i></h2>
    </div>
    
    <span class="linha"></span>
  </section>
</div>
