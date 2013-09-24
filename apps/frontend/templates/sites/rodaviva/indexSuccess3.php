<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/secoes/aovivo.css" type="text/css" />
<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/sites/rodaviva.css" type="text/css" />

<?php use_helper('I18N', 'Date') ?>
<?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'section' => $section)) ?>

    <!-- CAPA SITE -->
    <div id="capa-site">

      <?php if(isset($displays["alerta"])) include_partial_from_folder('blocks','global/breakingnews', array('displays' => $displays["alerta"])) ?>

     

      <!-- MIOLO -->
      <div id="miolo">
        
       

        <!-- CONTEUDO PAGINA -->
        <div id="conteudo-pagina">
          
          <!-- CAPA -->
          <div class="capa grid3">
            <div class="box">
      <img src="../../../portal/images/capaPrograma/rodaviva/roda-novo.png" usemap="#Map" />
      <map name="Map" id="Map">
        <area shape="rect" coords="610,0,636,25" href="http://facebook.com/rodaviva" target="_blank" alt="Facebook" />
        <area shape="rect" coords="582,0,608,25" href="http://www.youtube.com/user/rodaviva" target="_blank" alt="YouTube" />
        <area shape="rect" coords="554,0,580,25" href="http://twitter.com/rodaviva" target="_blank" alt="Twitter" />
      </map>
        <div class="texto" style="margin: 15px 0 0 167px; font-size: 20px; width: 635px; font-weight: bolder; line-height: 20px; color: #5b5a50; text-align: left;">
			<p>Não perca! Nesta segunda-feira estreia o novo site do Roda Viva, com Mario Sergio Conti.</p>
			<p>A partir das 19h do dia 17/10, você vai poder acompanhar os bastidores e a transmissão interativa do programa, que trará o polêmico Cabo Anselmo.</p>
			<p>Fique ligado e participe!</p>
		</div>
        <div class="texto" style="margin: 15px 0 0 167px; text-align: left;"><a style="text-decoration: underline; margin-top: 15px; font-size: 16px; font-weight: bold; color: #938f76;" href="http://cmais.com.br/mario-sergio-conti-estreia-nova-fase-do-roda-viva">Saiba mais sobre o novo formato</a></div>
      </div>
          </div>
          <!-- /CAPA -->
          
        </div>
        <!-- /CONTEUDO PAGINA -->
        
      </div>
      <!-- /MIOLO -->
      
    </div>
    <!-- /CAPA SITE -->