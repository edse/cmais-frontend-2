<link rel="stylesheet" href="/portal/css/tvcultura/secoes/defaultPrograma.css" type="text/css" />
<link rel="stylesheet" href="/portal/css/tvcultura/sites/<?php echo $section->Site->getSlug() ?>.css" type="text/css" />
<?php use_helper('I18N', 'Date')
?>
<?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'section' => $section))
?>

<div class="bg-chamada">
  <?php if(isset($displays["alerta"])) include_partial_from_folder('blocks','global/breakingnews', array('displays' => $displays["alerta"]))
  ?>

  <!--div id="chamada" class="grid3">
    <span>teste</span><a href="#" target="fdsfds">fsdfdsfsdf fsdf sdfsd fds</a>
  </div-->
</div>
<!-- CAPA SITE -->
<div id="capa-site">
  <!-- BARRA SITE -->
  <div id="barra-site">
    <div class="topo-programa">
      <h2><a href="http://cmais.com.br/seminario2013"> <img alt="Seminário 2013" src="/portal/images/capaPrograma/seminario2013/logo.png"> </a></h2>
      <!-- horario -->
      <div id="horario">
        <p>25 e 26 de fevereiro</p>
      </div>
      <!-- /horario -->
      
    </div>
    <!-- box-topo -->
    <div class="box-topo grid3">
      <?php include_partial_from_folder('blocks','global/sections-menu', array('siteSections' => $siteSections))
      ?>

      <?php if(!in_array(strtolower($section->getSlug()), array('home','homepage','home-page','index'))):
      ?>
      <div class="navegacao txt-10">
        <a href="../" title="Home">Home</a>
        <span>&gt;</span>
        <a href="<?php echo $section->retriveUrl()?>" title="<?php echo $section->getTitle()?>"><?php echo $section->getTitle()
        ?></a>
      </div>
      <?php endif;?>
    </div>
    <!-- /box-topo -->
  </div>
  <!-- /BARRA SITE -->
  <!-- MIOLO -->
  <div id="miolo">
    <?php include_partial_from_folder('blocks','global/shortcuts')
    ?>

    <!-- CONTEUDO PAGINA -->
    <div id="conteudo-pagina">
      <!-- CAPA -->
      <div class="capa grid3">
        <!-- ESQUERDA -->
        <div class="grid2" id="esquerda">
          <!-- NOTICIA INTERNA -->
          <div class="box-interna ">
            <p class="titulos">Conselho Curador convida especialistas para debater os desafios e rumos da radiodifusão pública </p>
         
            <div class="texto">
              <p>Neste mês de fevereiro, haverá uma reunião especial do Conselho Curador da Fundação Padre Anchieta. Durante dois dias, os conselheiros irão se reunir em um seminário com o objetivo de ampliar e aprofundar sua reflexão acerca dos desafios e rumos da radiodifusão pública. Para tanto, o Conselho Curador convidou pesquisadores, especialistas e gestores de instituições públicas e privadas das áreas de cultura, educação e comunicação para expor suas visões, trocar informações, debater cenários e ideias.</p>
              <p>Por se tratar de um encontro de trabalho, planejado de forma a permitir que os conselheiros disponham de tempo para debater, com cada palestrante, as questões que considerem mais relevantes, o evento não será aberto. Mas, para que todos os interessados possam acompanhar o evento, ele será transmitido em tempo real, pela internet.</p>
              <p>Para assistir ao seminário, bastará acessar <a href="http://cmais.com.br/seminario2013" alt="cmais.com.br/seminario2013">cmais.com.br/seminario2013</a>, nos próximos dias 25 e 26, das 9h às 18h.</p>
              <p>Aos que assistirem ao seminário pela internet e quiserem enviar um comentário sobre os temas em exposição e debate, pedimos que o encaminhem para a organização do evento pelo email <a  href="mailto:seminario@tvcultura.com.br" target="_blank">seminario@tvcultura.com.br</a>. Esse endereço ficará disponível para envio de comentários entre os dias 25 de fevereiro e 4 de março.</p>
              <p>Contamos com a sua audiência e com seu interesse em refletir conosco.</p>
              <p>Abraços fraternos.</p>
              <p><bold>João Sayad</bold><br/><i>Presidente Executivo da TV Cultura</i></p>
              <p></p>
              <p></p>
              <p></p>
              <p></p>
            </div>
          </div>
          <!-- /NOTICIA INTERNA -->
        </div>
        <!-- ESQUERDA -->
        <!-- DIREITA -->
        <div id="direita" class="grid1">
          <!-- BOX PUBLICIDADE -->
          <div class="box-publicidade grid1">
            <!-- programas-homepage-300x250 -->
            <script type='text/javascript'>
              GA_googleFillSlot("cmais-asssets-300x250");

            </script>
          </div>
          <!-- / BOX PUBLICIDADE -->
          
        </div>
        <!-- /DIREITA -->
      </div>
      <!-- /CAPA -->
      <?php if (isset($displays["rodape-interno"])):
      ?>
      <!--APOIO-->
      <?php include_partial_from_folder('blocks','global/support', array('displays' => $displays["rodape-interno"]))
      ?>
      <!--/APOIO-->
      <?php endif;
      ?>
    </div>
    <!-- /CONTEUDO PAGINA -->
  </div>
  <!-- /MIOLO -->
</div>
<!-- /CAPA SITE -->
