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
    <?php include_partial_from_folder('blocks','global/shortcuts') ?>
    
    <script>
      $(function(){
        $('#btnDia1').click(function(){
          $('#dia1').show();
          $('#dia2').hide();
          $(this).addClass('ativo');
          $('#btnDia2').removeClass('ativo');
        });
        $('#btnDia2').click(function(){
          $('#dia2').show();
          $('#dia1').hide();
          $(this).addClass('ativo');
          $('#btnDia1').removeClass('ativo');
        });
      });
    </script>

    <!-- CONTEUDO PAGINA -->
    <div id="conteudo-pagina">
      <!-- CAPA -->
      <div class="capa grid3">
        
          <div class="box-seminario top">
            <h3>Programação</h3>
            <div class="content">
              <div class="data"><a href="javascript:;" class="ativo" id="btnDia1" title="25 de fevereiro">25 DE FEVEREIRO</a> | <a href="javascript:;" id="btnDia2" title="26 de fevereiro">26 DE FEVEREIRO</a></div>
              <div class="box-toggle">
                <div id="dia1">
                  <p class="titulos">Radiodifusão pública para quê?</p>
                  <p class="azul">9h00 – Abertura</p>
                  
                  <p class="azul">9h10 - Palestra</p>
                  <p>Muniz Sodré (professor emérito da Universidade Federal do Rio de Janeiro, autor de cerca de 30 livros nas áreas de Comunicação e Cultura) </p>
                  <p>+ 30 minutos de debate</p>
                  
                  <p class="azul">10h00 – Palestra</p>
                  <p>Jorge da Cunha Lima (escritor e jornalista; presidente do Conselho Diretor da Associação de Televisões Educativas e Culturais Ibero-Americanas (ATEI); presidiu a TV Cultura, o Conselho Curador da FPA, a TV Gazeta e a ABEPEC)</p>
                  <p>+ 30 minutos de debate</p>
                  
                  <p class="azul">10h45 – Palestra</p>
                  <p>Danilo Santos de Miranda (diretor geral do SESC, presidiu o Comitê Diretor do Fórum Cultural Mundial)</p>
                  <p>+ 30 minutos de debate</p>
                  
                  <p class="azul">11h30 – Palestra</p>
                  <p>Juca Ferreira (ex-ministro da Cultura; atual secretário municipal da Cultura de São Paulo) </p>
                  <p>+ 30 minutos de debate</p>
                  
                  <p class="azul">Almoço – 12h30 a 14h30</p>
                  
                  <p class="azul">14h30 – Palestra</p>
                  <p>Eugênio Bucci (professor da ECA/USP; diretor do curso de Pós-Graduação em Jornalismo com Ênfase em Direção Editorial da ESPM) </p>
                  <p>+ 30 minutos de debate</p>
                  
                  <p class="azul">15h30 - Palestra</p>
                  <p>Roberto de Oliveira (ex-diretor de programação da TV Cultura, foi vice-presidente do Grupo Bandeirantes e passou por cargos de direção na Globo e na TV Futura)  </p>
                  <p>+ 30 minutos de debate</p>
                 
                  <p class="azul">Café - 16h15 a 16h30</p>
                  
                  <p class="azul">16h30 – Mesa Redonda: visão acadêmica e de organizações não governamentais</p>
                  <p>Murilo César Ramos (professor de Comunicação da UnB, pesquisador do Laboratório de Políticas de Comunicação – LaPCom –, membro do conselho curador da EBC) </p>
                  <p>&nbsp;</p>
                  <p>João Brant (coordenador executivo do Intervozes – Coletivo Brasil de Comunicação) </p>
                  <p>&nbsp;</p>
                  <p>Esther Hamburger (crítica e ensaísta; professora livre docente da ECA-USP, onde chefiou o Departamento de Cinema, Radio e Televisão) </p>
                  <p>&nbsp;</p>
                  <p>+ 30 minutos de debate</p>
                </div>
               
                
                <div id="dia2" style="display: none;">
                  <p class="titulos">O cenário institucional da televisão 1</p>
                  <p class="azul">9h00 - Palestra</p>
                  <p>Hollman Morris (jornalista colombiano, adquiriu prestígio internacional com reportagens televisivas sobre os paramilitares colombianos; atual diretor da emissora pública Canal Capital, de Bogotá)</p>
                  <p>+ 30 minutos de debate</p>
                  
                  <p class="azul">9h45 – Palestra</p>
                  <p>Lúcia Araújo (gerente geral do Canal Futura, foi diretora de jornalismo da TV Bandeirantes e da TV Cultura)</p>
                  <p>+ 30 minutos de debate</p>
                  
                  <p class="azul">Café - 10h30 a 10h45</p>
                  
                  <p class="titulos">Financiamento e sustentabilidade</p>
                  
                  <p class="azul">10h45</p>
                  <p>Carlos Antonio Luque (economista, professor titular da FEA-USP, diretor-presidente da Fundação Instituto de Pesquisas Econômica – FIPE) </p>
                  
                  <p class="azul">11h00</p>
                  <p>Yacoff Sarkovas (CEO da Edelman Significa, especialista em construção de marcas)</p>
                  
                  <p class="azul">11h15</p>
                  <p>Paulo Nassar (jornalista, professor  ECA/USP e diretor-geral da Associação Brasileira de Comunicação Empresarial – Aberje)</p>
                  
                  <p class="azul">Almoço - 12h30 a 14h30</p>
                  <p class="titulos">O cenário institucional da televisão 2</p>
                  
                  <p class="azul">14h30 – Palestra</p>
                  <p>Luiz Carlos Bresser-Pereira (economista, professor emérito da FGV, foi ministro da Fazenda e da Administração e Reforma do Estado)</p>
                  <p>+ 30 minutos de debate</p>
                  
                  <p class="azul">14h45 - Palestra</p>
                  <p>Manoel Rangel (cineasta; diretor-presidente da Ancine e secretário-executivo da Conferência de Autoridades Audiovisuais e Cinematográficas Iberoamericanas)</p>
                  <p>+ 30 minutos de debate</p>
                  
                  <p class="titulos">Tecnologia, novas mídias</p>
                  
                  <p class="azul">15h15 – Palestra</p>
                  <p>Eduardo Brandini (vice-presidente de conteúdo e gerente de programação e novas mídias da TV Cultura; professor da FAAP)</p>
                  
                  <p class="azul">15h30 – Palestra</p>
                  <p>Nicolás Copano (produtor e apresentador de TV chileno, dirige e apresenta o programa Demasiado Tarde, transmitido ao vivo pela internet e retransmitido pela CNN Chile)</p>
                  
                  <p class="azul">15h45 – Palestra</p>
                  <p>André Mermelstein (diretor da revista Tela Viva; professor da FAAP)</p>
                  <p>+ 30 minutos de debate</p>
                  
                  <p class="titulos">Encerramento</p>
                  <p>Palavras dos presidentes João Sayad e Belisário dos Santos Jr.</p>
                  
                </div>
              </div>
              
            </div>
          </div>
         
        <!-- DIREITA -->
        <div id="direita" class="grid1">
          
          
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

<link href='http://fonts.googleapis.com/css?family=Quattrocento+Sans' rel='stylesheet' type='text/css'>
