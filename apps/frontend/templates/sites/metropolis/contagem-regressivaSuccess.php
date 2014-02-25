<script>
// Initiate Countdown
$(document).ready(function() {
	$('#countdown_dashboard').countDown({
		targetDate: {
			'day': 		1,
			'month': 	8,
			'year': 	2011,
			'hour': 	20,
			'min': 		10,
			'sec': 		0
		},
		onComplete: function() { self.location.href='http://tvcultura.cmais.com.br/metropolis'; }
	});
});
$('#countdown_dashboard').startCountDown();
</script>
<style>
	/*Contador Metrópolis*/
.contador-box{
	float: left;
	margin: 30px 0 0 170px;
	width: 640px;
}
.contador-box p{
	float: left;
	font-size: 20px;
	font-weight: bold;
	margin-bottom: 15px;
}
.contador-box h2.metropolis{
	background: url(http://cmais.com.br/portal/images/logo-metropolis_countdown.png) no-repeat;
	display: block;
	float: left;
	overflow: hidden;
	text-indent: -9999px;
	width: 640px;
	height: 153px;
}
.metrocounter{
	float: left;
    margin: 30px 0 0 235px !important;
}

</style>

<meta http-equiv="Cache-Control" content="no-cache, no-store" />
<meta http-equiv="Pragma" content="no-cache, no-store" />
<meta http-equiv="expires" content="Mon, 06 Jan 1990 00:00:01 GMT" />

<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/secoes/contato.css" type="text/css" />
<link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/sites/<?php echo $section->Site->getSlug() ?>.css" type="text/css" />

<?php use_helper('I18N', 'Date') ?>
<?php include_partial_from_folder('blocks', 'global/menu', array('channels' => $channels, 'live' => $live, 'editorials' => $editorials, 'site' => $site, 'mainSite' => $mainSite, 'coming' => $coming, 'important' => $important)) ?>


    <!-- CAPA SITE -->
    <div id="capa-site">
    	
      <?php if(isset($displays["alerta"])) include_partial_from_folder('blocks','global/breakingnews', array('displays' => $displays["alerta"])) ?>
    	
      <!-- MIOLO -->
      <div id="miolo">
        <!-- CONTEUDO PAGINA -->
        <div id="conteudo-pagina">
          <!-- CAPA -->
          <div class="capa grid3">
          	<div class="contador-box">
          		<p>Falta pouco para a estreia do Novo Metropólis na TV e na Web.</p>
          		<h2 class="metropolis">Metrópolis</h2>
          	</div>
          	<div class="contador metrocounter">
                
                <div class="capa-contador"> 
					<link rel="stylesheet" href="http://cmais.com.br/portal/js/contador/style/main.css" type="text/css" />
		            <link rel="stylesheet" href="http://cmais.com.br/portal/css/tvcultura/secoes/contador.css" type="text/css" />
                    <script language="Javascript" type="text/javascript" src="http://cmais.com.br/portal/js/contador/js/jquery.lwtCountdown-1.0.js"></script>
                  <!-- Countdown dashboard start -->
                  <div id="countdown_dashboard" style="width:520px;">
					
                    <div class="dash days_dash">
                      <div class="digit">0</div>
                      <div class="digit">0</div>
                      <span class="dash_title" style="font-size:15px; margin: auto;">dias</span>
                    </div>
                    <div class="dash hours_dash">
                      <div class="digit">0</div>
                      <div class="digit">0</div>
                      <span class="dash_title" style="font-size:15px; margin: auto;">horas</span>
                    </div>
                    <div class="dash minutes_dash">
                      <div class="digit">0</div>

                      <div class="digit">0</div>
                      <span class="dash_title" style="font-size:15px; margin: auto;">minutos</span>
                    </div>
                    <div class="dash seconds_dash">
                      <div class="digit">0</div>
                      <div class="digit">0</div>
                      <span class="dash_title" style="font-size:15px; margin: auto;">segundos</span>

                    </div>
                  </div>
                  <!-- Countdown dashboard end -->

                </div>
              </div>
          </div>
          <!-- /CAPA -->
        </div>
        <!-- /CONTEUDO PAGINA -->
      </div>
      <!-- /MIOLO -->
    </div>
    <!-- / CAPA SITE -->
    </body>
</html>