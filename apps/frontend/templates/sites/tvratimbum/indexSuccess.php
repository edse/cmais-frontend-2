<?php use_helper('I18N', 'Date') ?>
<?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'asset' => $asset, 'section' => $section)) ?>
<link href="http://cmais.com.br/portal/tvratimbum/css/geral.css" type="text/css" rel="stylesheet">
<link href="http://cmais.com.br/portal/tvratimbum/css/novoLayout-2014.css" type="text/css" rel="stylesheet">
<link href="http://cmais.com.br/portal/tvratimbum/css/jquery.jcarousel.css" rel="stylesheet" type="text/css" />
<script src="http://cmais.com.br/portal/tvratimbum/js/jquery-1.4.4.min.js" type="text/javascript"></script>
<script src="http://cmais.com.br/portal/tvratimbum/js/jquery-ui-1.8.9.min.js" type="text/javascript"></script>
<script src="http://cmais.com.br/portal/tvratimbum/js/jquery.jcarousel.pack.js" type="text/javascript"></script>
<script src="http://cmais.com.br/portal/tvratimbum/js/jPlayer/js/jquery.jplayer.min.js" type="text/javascript"></script>
<script type="text/javascript">
  //carrocel
$(function(){
    $('.carrossel').jcarousel({
      wrap: "both"
    });
    /*startclock();*/
  });
  /*var timeID=null;
  var timerRunning=false;
  function stopclock (){
    if(timerRunning)
      clearTimeout(timerID);
    timerRunning=false;
  }
  function startclock(){
    stopclock();
    showtime();
  }
  function showtime() {
    var now=new Date();
    var hours= now.getHours();
    var minutes= now.getMinutes();
    var timeValue=""+ hours;
    timeValue += ((minutes<10) ? ":0" : ":") + minutes
    document.clock.face.value= timeValue
    timerID = setTimeout("showtime()",1000);
    timerRunning = true;
  }*/
</script>

<div id="bodyWrapper">

  <div class="conteudoWrapper" align="center">
    
    <?php include_partial_from_folder('tvratimbum','global/top', array('site'=> $site,'section'=>$section)) ?>
    
    <div class="conteudo">

      <div class="coluna">
        <?php if(isset($displays["videos"])) include_partial_from_folder('tvratimbum','global/display-1c-video', array('displays' => $displays["videos"])) ?>        
        <hr />
        <?php if(isset($displays["imagens"])) include_partial_from_folder('tvratimbum','global/display-1c-imagens', array('displays' => $displays["imagens"])) ?>
        <hr />
        <?php //if(isset($displays["baixar"])) include_partial_from_folder('tvratimbum','global/display-1c-baixar', array('displays' => $displays["baixar"])) ?>
        
        <!--hr /-->
        <?php //if(isset($displays["ta-sabendo"])) include_partial_from_folder('tvratimbum','global/display-1c-tasabendo', array('displays' => $displays["ta-sabendo"])) ?>
      </div>

      <div class="coluna">
        <?php if(isset($displays["jogos"])) include_partial_from_folder('tvratimbum','global/display-1c-jogos', array('displays' => $displays["jogos"])) ?>
        <hr />
        <?php //if(isset($displays["atividades"])) include_partial_from_folder('tvratimbum','global/display-1c-atividades', array('displays' => $displays["atividades"])) ?>
        <hr />
        <?php if(isset($displays["para-os-pais"])) include_partial_from_folder('tvratimbum','global/display-1c-paraospais') ?>
        <!--hr /-->
        <?php //if(isset($displays["agenda"])) include_partial_from_folder('tvratimbum','global/display-1c-agenda', array('displays' => $displays["agenda"])) ?>
      </div>

      <div class="coluna">
        <div id="box-noAr">
          <?php include_partial_from_folder('tvratimbum','global/live') ?>
          <span class="picote"></span>
          <?php include_partial_from_folder('tvratimbum','global/next') ?>
          <span class="picote"></span>
          <?php /*
          <?php include_partial_from_folder('tvratimbum','global/important') ?>
          <span class="picote"></span>
					 */ ?>
        </div>
        <hr />
        <div id="radioPlayer">
          <a class="imgRadioPlayer" href="http://tvratimbum.cmais.com.br/radio">R&aacute;dio TV R&aacute; Tim Bum</a>
        </div>
        <hr />
        <?php //if(isset($displays["voce-sabia"])) include_partial_from_folder('tvratimbum','global/display-1c-vocesabia', array('displays' => $displays["voce-sabia"])) ?>
        <hr />
         <?php //if(isset($displays["especial"])) include_partial_from_folder('tvratimbum','global/display-1c-especial', array('displays' => $displays["especial"])) ?>
        <hr />
        <?php /*
        <div id="box-novidades">
          <div class="topo">
            <h3>Receba as novidades da tv</h3>
          </div>
          <div class="ico-ponta"></div>
          <hr />
          <div class="box-input">
            <div class="formulario">
              <div class="instrucao">
                <p>Preencha os campos abaixo e clique no bot&atilde;o para receber as novidades da TV R&aacute; Tim Bum no seu e-mail!</p>
              </div>
              <form id="formaFale" class="formaFale" name="sendMail" method="post" action="#">
                <p class="nome"><label> Seu nome:</label><input name="nome" type="text" /></p>
                <p class="email"><label>Seu e-mail:</label><input name="email" type="text" /></p>
              </form>
              <div class="btn-barra">
                <span class="pontaBarra"></span>
                <a href="">Cadastrar</a>
                <span class="caudaBarra"></span>
              </div>
            </div>
            <div class="erro" style="display: none;">
              <div class="instrucao">
                <p class="ops">Ops!</p>
                <p>Os campos em <span>vermelho</span> apresentam erro. Preencha corretamente para prosseguir.</p>
              </div>
              <form id="formaFale" class="formaFale" name="sendMail" method="post" action="#">
                <p class="nome"><label> Seu nome:</label><input class="error" name="nome" type="text" /></p>
                <p class="email"><label>Seu e-mail:</label><input name="email" type="text" /></p>
              </form>
              <div class="btn-barra">
                <span class="pontaBarra"></span>
                <a href="">Cadastrar</a>
                <span class="caudaBarra"></span>
              </div>
            </div>
            <div class="sucesso" style="display: none;">
              <div class="instrucao">
                <p class="resposta">Seu e-mail foi cadastrado com sucesso.</p>
                <p>Em breve voce recebera novidades do site e da TV Ra Tim Bum.</p>
              </div>
            </div>
            <span class="picote"></span>
          </div>  
          <hr />
        </div>
        */ ?>
        
      </div>
    </div>
    <?php include_partial_from_folder('tvratimbum','global/footer') ?>
    <hr />
  </div>
</div>

