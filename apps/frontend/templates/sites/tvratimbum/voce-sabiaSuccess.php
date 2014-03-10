<?php
  $programs = Doctrine_Query::create()
    ->select('p.*')
    ->from('Program p, ChannelProgram cp')
    ->where('p.id = cp.program_id')
    ->andWhere('cp.channel_id = ?', 2)
    ->orderBy('p.title')
    ->execute();
    
  if(!isset($displays["voce-sabia"])){
    $block = Doctrine::getTable('Block')->findOneById(587);
    if($block)
      $vocesabia = $block->retriveDisplays();
  }
?>
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
  $(function(){
    $('dt a').click(function(){
      $(this).parent().next('dd').toggle();
      
      if($(this).parent().next('dd').is(':visible')){
        $(this).addClass('ativo');  
      }
      
      if($(this).parent().next('dd').is(':hidden')){
        $(this).removeClass('ativo');  
      }
      
    });
  })
  
 //carrossel
  $(function(){
    $('.carrossel').jcarousel({
      wrap: "both"
    });
    //startclock();
  })
  
  function setSection(i){
    $('#section_id').val(i);
    $('#filter').submit();
  }
  
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
    
    <div class="conteudo internas">
      
      <div class="colunaMaior">
        <div class="trilha">
          <p><a href="/">TV Rá Tim Bum &gt;&gt;</a></p><a href="/voce-sabia">Você sabia?</a>
        </div>
        
        <!--VOCE SABIA-->
        <div id="box-voce-sabia">
          <div class="topo-esq"></div>
        
          <div class="topo">
            <a href="" class="enunciado">VOCÊ SABIA?</a>
          </div>
          
          <div class="lista-escolha">

            <!-- ITEM -->
            <dl>
              <dt><a href="javascript:;">Coisas estranhas e engraçadas</a></dt>
              <dd style="display:none;">
                <div>
                  <img src="http://cmais.com.br/portal/tvratimbum/image/coisas-engracadas.jpg" alt="Coisas estranhas e engraçadas"/>
                </div>  
                <ul>  
                  <li><span>»</span> Que de cada seis habitantes do planeta Terra, um mora na China.</li>
                  <li><span>»</span> Que ninguém pode lamber o cotovelo, porque é impossível tocá-lo com a própria língua.</li> 
                  <li><span>»</span> Que Thomas Edson, inventor da lâmpada, tinha medo do escuro.</li>
                  <li><span>»</span> Que é possível fazer uma vaca subir escadas, mas é impossível fazê-la descer.</li>
                  <li><span>»</span> Que foi um goleiro, chamado William McCrum, em 1891 foi o inventor do pênalti na Inglaterra.</li>
                </ul>
              </dd>  
            </dl>  
            <!-- /ITEM -->
            
            <!-- ITEM -->
            <dl>
              <dt><a href="javascript:;">Coisas científicas</a></dt>
              <dd style="display:none;">
                <div>
                  <img src="http://cmais.com.br/portal/tvratimbum/image/coisas-cientificas.jpg" alt="Coisas científicas"/>
                </div>
                <ul>
                  <li><span>»</span> Que quando você refrigera alguma coisa, você não está esfriando essa coisa, apenas retirando o seu calor.</li> 
                  <li><span>»</span> Que um espirro tem a velocidade de 160km/h.</li>
                  <li><span>»</span> Que rir durante o dia, faz com que você durma melhor a noite.</li>
                  <li><span>»</span> Que os cientistas calculam que a velocidade do pensamento chega a 240 km/h.</li>
                  <li><span>»</span> Que uma pessoa possui cerca de um milhão de fios de cabelos.</li>
                  <li><span>»</span> Que o material mais resistente criado pela natureza é a teia de aranha.</li>
                  <li><span>»</span> Que milhões de árvores no mundo são plantadas por esquilos que enterram suas nozes e esquecem onde esconderam.</li>
                  <li><span>»</span> Que Pong foi o primeiro vídeo game inventado no mundo, pelos norte-americanos, em 1972.</li>
                  <li><span>»</span> Que a piracema é o nome do fenômeno de subida dos peixes até a cabeceira dos rios.</li>
                  <li><span>»</span> Que a distância entre a Terra e o Sol é de 149.600.000 km.</li>
                </ul>
              </dd>    
            </dl>  
            <!-- /ITEM -->
            
            <!-- ITEM -->
            <dl>
              <dt><a href="javascript:;">Coisas de bicho</a></dt>
              <dd style="display:none;">
                <div>
                  <img src="http://cmais.com.br/portal/tvratimbum/image/coisas-bicho.jpg" alt="Coisa de bicho"/>
                </div>
                <ul>
                  <li><span>»</span> Que as tarântulas são os insetos que podem viver até 30 anos. E por isso são os mais longevos da Terra.0</li>
                  <li><span>»</span> Que o menor coração do reino animal é o do beija-flor, que chega a bater até mil vezes por minuto. E o maior coração é o da Baleia (tem o tamanho de um barco) e bate apenas 25 vezes por minuto.</li>
                  <li><span>»</span> Que os mosquitos têm dentes.</li>
                  <li><span>»</span> Que as lesmas possuem 4 narizes.</li>
                  <li><span>»</span> Que as corujas são as únicas aves que podem ver a cor azul.</li>
                  <li><span>»</span> Que o recorde do tempo de voo de uma galinha é de 13 segundos.</li>
                  <li><span>»</span> Que 3 segundos é o tempo que dura a memória de um peixinho dourado em um aquário.</a></li>
                  <li><span>»</span> Que o olho de um avestruz é maior que seu próprio cérebro.</li>
                  <li><span>»</span> Que as girafas podem limpar as suas orelhas com a língua.</li>
                  <li><span>»</span> Que as formigas se espreguiçam quando acordam.</li>
                </ul>
              </dd>  
            </dl>  
            <!-- ITEM -->

          </div>
          <hr />
          <span class="picote"></span>
        </div>
        <!--/VOCE SABIA-->
        
      </div>
      
      <div class="coluna">
        <div id="box-noAr">
          <?php include_partial_from_folder('tvratimbum','global/live') ?>
          <span class="picote"></span>
          <?php include_partial_from_folder('tvratimbum','global/next') ?>
          <span class="picote"></span>
          <?php include_partial_from_folder('tvratimbum','global/important') ?>
          <span class="picote"></span>
        </div>
        
        <hr />
        <?php //if(isset($vocesabia)) include_partial_from_folder('tvratimbum','global/display-1c-vocesabia', array('displays' => $vocesabia)) ?>
      </div>
    </div>
    
    <?php include_partial_from_folder('tvratimbum','global/footer') ?>
    <hr />
  </div>
</div>

