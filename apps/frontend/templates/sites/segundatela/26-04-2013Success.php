
<link rel="stylesheet" href="/portal/css/tvcultura/sites/segundatela/jornaldacultura.css" type="text/css" />
<!-- modal-->
<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
      ×
    </button>
    <h3 id="myModalLabel">Como funciona</h3>
  </div>
  <div class="modal-body">
    <p>A Segunda Tela (ou Second Screen) é um complemento em tempo real à televisão (a primeira tela). Ao utilizá-la, seja em computadores, smartphones ou tablets, o “teleinternauta” recebe informações extras e pontos importantes sobre o assunto que está sendo tratado no programa que está no ar no momento. Por exemplo, se o Jornal da Cultura veicula uma matéria sobre o mercado imobiliário, o usuário recebe em sua Segunda Tela, simultaneamente, conteúdos e dicas complementares à reportagem, como um histórico dos preços de imóveis nos últimos meses e telefones úteis para obter mais informações sobre o assunto. E essa é apenas uma das muitas possibilidades que a Segunda Tela oferece! Fique ligado no cmais+ e na programação da TV Cultura para descobrir as próximas novidades que surgirão com o uso desta nova ferramenta de interatividade!</p>
  </div>
</div>
<!-- /modal -->

<div class="container">
  <!-- Main hero unit for a primary marketing message or call to action -->
  <div class="hero-unit">
    <div class="bgtopo"></div>
    <div class="col-esq">
      <h1>Jornal da Cultura</h1>
      <p>Mais que um jornal, uma tradução das notícias.</br>Segunda a sábado, às 21h</p>
      <div class="redes">
        <div class="gplus">
          <g:plusone size="medium" count="false"></g:plusone>
        </div>
        <div class="fb">
          <fb:like href="http://cmais.com.br/segundatela" layout="button_count" show_faces="false" send="false" width="160"></fb:like>
        </div>
        <div class="twt">
          <a href="http://twitter.com/share" class="twitter-share-button" data-url="http://cmais.com.br/segundatela" data-count="horizontal" data-via="portalcmais" data-related="tvcultura">Tweet</a>
        </div>
      </div>
    </div>
    <div class="col-dir">
      <div class="menu-jc">
        <a href="#myModal" role="button" data-toggle="modal" class="como">como funciona</a>
        <br/>
        <p class="online hide" style="color: green">Conectado</p><p class="offline">Desconectado</p>
        <span id="tryin-p" style="font-size: 10px;clear: both; float: right; width: 110px;" class="hide">conectando em <span id="tryin-v" style="margin: 1px; float: right;"></span></span>
      </div>
    </div>
  </div>
  <!-- Example row of columns -->
  <div class="row-fluid conteudo">
    <!-- esquerda -->
    <div class="span8"> 
      <h2>segunda tela</h2>
      <!-- accordion -->
      <div class="accordion" id="accordion2"></div>
      <!-- /accordion -->
    </div>
    <!-- /esquerda -->
    <!-- direita -->
    <div class="span4">
      <!-- CALENDARIO -->
      <div class="box-padrao grid1">
        <h2>Arquivo</h2>
        <ul class="nav nav-tabs" id="myTab2" style="margin-bottom: 10px;">
          <li class="active" style="width: 100%" ><a href="#" style="width: 295px; border: none; margin:0 0 0 0; text-align: left; padding: 0 0 0 11px;">Navegue pelo calendário</a></li>
        </ul>  
        <div id="datepicker"></div>
      </div>
      <!-- /CALENDARIO -->
      <h2>Redes Sociais</h2>
      <!-- abas -->
      <div class="">
        <ul class="nav nav-tabs" id="myTab">
          <li class="active"><a data-toggle="tab" href="#facebook">Facebook</a></li>
          <li class=""><a data-toggle="tab" href="#twitter">Twitter</a></li>
        </ul>
        <div class="tab-content" id="myTabContent">
          <div id="facebook" class="tab-pane fade active in">
            <div class="fb-comments" data-href="cmais.com.br/segundatela/jornaldacultura/<?php echo $date; ?>" data-width="300px" data-num-posts="10"></div> 
          </div>
          <div id="twitter" class="tab-pane fade">
            <a class="twitter-timeline" href="https://twitter.com/search?q=%40jornal_cultura" data-widget-id="316640392126808065">Tweets sobre "@jornal_cultura"</a>
            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
          </div>
        </div>
      </div>
      <!-- /abas -->
    </div>
    <!-- /direita -->
  </div>

  <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
  <script type="text/javascript" src="https://www.youtube.com/iframe_api"></script> 
  <script type="text/javascript" src="http://cmais.com.br/portal/js/segundatela/offline.js?nocache=<?php echo time()?>"></script>

  <script>
  
    <?php
  
  //puxando logs do programa
  $i = 0;
  echo 'var dateList = new Array();';
  if ($handle = opendir('./portal/js/segundatela/log/')) {
    while (false !== ($programast = readdir($handle))) {
      
      if ($programast != "." && $programast != "..") {
        $programast = explode ('-', $programast);
        
        if($programast[0]=="jornaldacultura"){
          $dateJson = explode(".", $programast[3]);
          
          //criando variavel para o javascript
          echo 'dateList['.$i.'] = "'.$programast[1].'-'.$programast[2].'-'.$dateJson[0].'";';
          $i++;
          /*
          $arrayDate = array($programast[1], $programast[2], $programast[3]);
          
          $dateJson = implode("-", $arrayDate);
          $dateJson = explode(".", $dateJson);
          
          $dateList[$i] = $dateJson[0];
          $i++;
           */
        } 
      }
    }
    closedir($handle);
  }
  
  ?>
  
  $(function(){ 
    // retrive sent contents by ajax 
    $.ajax({
      url:"/portal/js/segundatela/log/jornaldacultura-<?php echo $date; ?>.json",
      dataType: "json",
      success:function(json){
        $.each(json, function( key, value ) {
          contentInfo(value);
        });
      }
    });
    
    // Datepicker    
    $('#datepicker').datepicker({
      minDate: '01-03-2013',
      maxDate:"1w",
      beforeShowDay: highlightDays,
      onSelect: dateJsonSelected,
      dateFormat: 'dd-mm-yy',
      altFormat: 'dd-mm-yy',
      dayNamesMin: ['Dom','Seg','Ter','Qua','Qui','Sex','Sáb','Dom'],
      monthNames: ['Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'],
      nextText:" ",
      prevText:" ",
      inline: true
    });
    
    function putZero(number){
      if(number.length<=1){
        number="0"+number;
      }
      return number;
    }
    
    function highlightDays(date) {
        var today = String(<?php echo date("d-m-Y")?>);
        console.log(today)
        var dmy = putZero(String(date.getDate())) + "-" + (putZero(String(date.getMonth()+1))) + "-" + date.getFullYear();
        for (var j = 0; j < dateList.length; j++) {
            if (dmy == dateList[j]) {
              return [true, ''];
            }
        }
        return [false, 'not-select'];
    }
        
    function dateJsonSelected(){
      date = $(this);
      console.log(date.context.value);
      //window.location = "http://cmais.com.br/segundatela/jornaldacultura/" + date.context.value
    }
    
  });
  </script>