  <div class="box-padrao grid1">
    <h2>Arquivo</h2>
    <ul class="nav nav-tabs" id="myTab2" style="margin-bottom: 10px;">
      <li class="active" style="width: 100%" ><a href="#" style="width: 295px; border: none; margin:0 0 0 0; text-align: left; padding: 0 0 0 11px;">Navegue pelo calendário</a></li>
    </ul>  
    <div id="datepicker"></div>
  </div>
  
  <script type="text/javascript" src="http://cmais.com.br/js/jquery-ui-1.8.7/js/jquery-ui-1.8.7.custom.min.js"></script>
  <script src="http://cmais.com.br/portal/js/jquery-ui-i18n.min.js" type="text/javascript"></script>
  
  <!--script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script-->
  <!--script type="text/javascript" src="https://www.youtube.com/iframe_api"></script--> 
  <!--script type="text/javascript" src="http://cmais.com.br/portal/js/segundatela/offline.js?nocache=<?php echo time()?>"></script-->

  <script>
  
    <?php
    
  //puxando logs do programa
  $i = 0;
  echo 'var dateList = new Array();';
  if ($handle = opendir('./portal/js/segundatela/log/')) {
    while (false !== ($programast = readdir($handle))) {
      
      if ($programast != "." && $programast != "..") {
        $programast = explode ('-', $programast);
        
        if($programast[0]==$nomePrograma){
          $dateJson = explode(".", $programast[3]);
          
          //criando variavel para o javascript
          echo 'dateList['.$i.'] = "'.$programast[1].'-'.$programast[2].'-'.$dateJson[0].'";';
          $i++;
        } 
      }
    }
    
    //echo 'dateList['.$i.'] = "'.date("d").'-'.date("m").'-'.date("Y").'";';
    closedir($handle);
  }
  
  ?>
  
  $(function(){ 
    // retrive sent contents by ajax 
    /*
    $.ajax({
      url:"http://cmais.com.br/portal/js/segundatela/log/jornaldacultura-<?php //echo $date; ?>/*.json",
      dataType: "json",
      success:function(json){
        $.each(json, function( key, value ) {
          contentInfo(value);
        });
      }
    });
    */
    $.datepicker.setDefaults($.datepicker.regional['pt-BR']);
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
    $("#datepicker").datepicker("setDate",<?php echo '"'.$date.'"';?>); 
    function putZero(number){
      if(number.length<=1){
        number="0"+number;
      }
      return number;
    }
    
    function highlightDays(date) {
        var dmy = putZero(String(date.getDate())) + "-" + (putZero(String(date.getMonth()+1))) + "-" + date.getFullYear();
        
        for (var j = 0; j < dateList.length; j++) {
            if(dmy == dateList[j]) {
              return [true, ''];
            }
        }
      return [false, 'not-select'];  
    }
        
    function dateJsonSelected(){
      date = $(this);
      //console.log(date.context.value);
      window.location = "http://cmais.com.br/segundatela/<?php echo $nomePrograma ?>/" + date.context.value
    }
    
  });
  </script>