<div id="mask"></div>  

<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/sites/<?php echo $section->Site->getSlug() ?>.css" type="text/css" />
<link href='http://fonts.googleapis.com/css?family=Amaranth' rel='stylesheet' type='text/css'>

<script type="text/javascript">
  $(document).ready(function() {  
    $('a[name=modal]').click(function(e) {
      e.preventDefault();
      var id = $(this).attr('href');
      var maskHeight = $(document).height();
      var maskWidth = $(window).width();
      $('#mask').css({'width':maskWidth,'height':maskHeight});
      $('#mask').fadeIn(1000);  
      $('#mask').fadeTo("slow",0.8);  
      //Get the window height and width
      var winH = $(window).height();
      var winW = $(window).width();
      $(id).css('top',  winH/2-$(id).height()/2);
      $(id).css('left', winW/2-$(id).width()/2);
      $(id).fadeIn(2000); 
    });
    $('.window .close').click(function (e) {
      e.preventDefault();
      $('#mask').hide();
      $('.window').hide();
    });   
    $('#mask').click(function () {
      $(this).hide();
      $('.window').hide();
    });     
  });
</script>

<?php use_helper('I18N', 'Date') ?>
<?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'section' => $section)) ?>

<div id="bg-anima">
    <div id="boxes">
      <div class="window" id="dialog">
        <a class="close" href="#">Fechar</a>
        <h3>O que é?</h3>
        <span class="linha"></span>
        <p>O Programa ANIMACULTURA tem por objetivo estimular o crescimento e a dinamização da indústria brasileira de conteúdos culturais, através do incentivo ao desenvolvimento e à produção de projetos transmídia, com foco em séries de animação.</p>
        <p>O ANIMACULTURA contempla todo o processo de criação, desenvolvimento, produção, teledifusão e comercialização da série e conteúdos transmídia, e por isso foi dividido em três etapas.</p>
        <p>Na primeira etapa, serão selecionados de 5 a 10 projetos, que receberão R$ 135.000,00 para desenvolvimento da co-produção, desenvolvimento do projeto completo transmídia e produção do episódio piloto da série. Ao final desta etapa, os projetos participam de nova seleção para a segunda etapa.</p>
        <p>Quem já possuir projeto transmídia, episódio piloto produzido e propostas de co-produção para série, poderá se inscrever diretamente para a segunda etapa. Esta etapa destina-se à produção de séries, de 13, 26, 39 ou 52 episódios. Após produzidos, os projetos participarão da terceira etapa.</p>
        <p>Projetos transmídia com séries prontas concorrem à terceira etapa do concurso. Nessa etapa, de pós-produção, teledifusão e comercialização, os projetos recebem recursos para produção do conteúdo transmídia e exploração comercial do projeto.</p>
        <p>Para segunda e terceira etapa do edital não existe um orçamento pré-determinado para cada projeto selecionado, já que o orçamento de cada projeto inscrito é específico de acordo com o conteúdo transmídia planejado. Para efeito de análise e seleção, serão considerados os aspectos artísticos de cada proposta em relação ao plano orçamentário para as determinadas etapas.</p>
        <p>As inscrições para as três etapas serão abertas simultaneamente e devem ser realizadas pelo autor do projeto (pessoa física), que indicará uma produtora responsável ao longo do processo de seleção do concurso. Para se inscrever, basta acessar a plataforma LUM (<a style="font-weight:bold; color:#8006bc" href="http://www.lumlab.com.br/">www.lumlab.com.br</a>), e preencher formulário online até o dia 24 de outubro de 2011. A plataforma LUM entra no ar no dia 22 de setembro.</p>
        <p>O concurso ANIMACULTURA é um programa da Fundação Padre Anchieta, com apoio da Associação Brasileira de Cinema de Animação &ndash; ABCA, Associação Brasileira de Produtoras Independentes de Televisão &ndash; ABPITV, Brazilian TV Producers - BTVP e o Consulado do Canadá, com o acompanhamento e regulação da Agência Nacional do Cinema &ndash; ANCINE, no âmbito dos Fundos de Financiamento da Indústria Cinematográfica Nacional &ndash; FUNCINE. Todas as séries produzidas serão exibidas pela TV Cultura.</p>
      </div>
    </div>
    
    <!-- CAPA SITE -->
    <div id="capa-site">

            <!-- CHAMADA -->
            <!-- /CHAMADA -->

      <!-- BARRA SITE -->

      <div id="barra-site">
        <div class="topo-programa">
          <h2>
            <a style="text-decoration: none;" href="http://tvcultura.cmais.com.br/animacultura">
                <img title="Anima Cultura" alt="Anima Cultura" src="http://cmais.com.br/portal/images/capaPrograma/logo-anima.png">
                </a>
            </h2>                                                      
        </div>
      </div>
      <!-- /BARRA SITE -->
      <!-- MIOLO -->
      <div id="miolo">
        <!-- CONTEUDO PAGINA -->
        <div id="conteudo-pagina">
          <!-- CAPA -->
          <div class="capa grid3">
      <div class="animaBox">
        <div class="oqueeh">
          <a href="#dialog" name="modal">
            <h3>O que é?</h3>
            <p>Conheça o ANIMACULTURA, o primeiro concurso nacional para projetos transmídia com foco em séries de animação.</p>
            <span></span>
          </a>
        </div>
        <div class="projetos">
          <a href="http://midia.cmais.com.br/assets/file/original/478a25fbf27509d3eb88f66704a5fe27b26d308d.pdf" target="_blank">
            <h3>Regulamento</h3>
            <p>Saiba mais sobre o concurso, suas etapas, inscrições e prazos.</p>
            <span></span>
          </a>
        </div>
        <div class="participe">
          <a href="http://lumlab.com.br/">
            <h3>Fique ligado</h3>
            <p>A partir do dia 22, acesse a plataforma LUM e inscreva-se online.</p>
            <span></span>
          </a>
        </div>
      </div>
            
            <h2 style="text-align: left">ERRATA ANIMACULTURA:</h2>
            <div class="texto" style="text-align: left">Corrigimos as porcentagens dos subitens 7.5.2 e 7.5.3, de acordo com o parâmetro estabelecido no item 3, referente ao valor das ações da Coordenação Executiva do ANIMACULTURA.</div>
            
          </div>
          <!-- /CAPA -->
        </div>
        <!-- /CONTEUDO PAGINA -->
      </div>
      <!-- /MIOLO -->
    </div>
    <!-- /CAPA SITE -->

    
      <div class="rodapePatrocinadores">
        <!--img tiltle="patrocinadores" alt="patrocinadores" src="http://cmais.com.br/portal/images/bkg-rodape.png" class="patrocinadores"-->
      </div>
   
    </div>

