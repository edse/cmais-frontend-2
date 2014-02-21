<!DOCTYPE html> 
<html> 
  <head> 
  <title>Trânsito - Anchieta</title> 
  
  <!--HEADER PADRAO JQUERY MOBILE-->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"> 
  <meta http-equiv="Content-type" content="text/html; charset=utf-8" />

  <link rel="stylesheet" href="http://code.jquery.com/mobile/1.0/jquery.mobile-1.0.min.css" />
  <!--CSS PAGINA TRANSITO-->
  <link rel="stylesheet" href="../../css/transito.css" />
  <!--/CSS PAGINA TRANSITO-->
  
  <script src="http://code.jquery.com/jquery-1.6.4.min.js"></script>
  <script src="http://code.jquery.com/mobile/1.0/jquery.mobile-1.0.min.js"></script>
  <!--/HEADER PADRAO JQUERY MOBILE-->
</head> 

<body> 

<!--PAGINA ZONA-->
<div id="rodovia" data-role="page" data-fullscreen="true" >
  
  <!--TOPO-->
  <div data-role="header" class="header">
    
      <h1 class="tituloHeader">
  
        <img src="../../images/logo_cmais.png"/>
  
      </h1>
      
  </div>
  <!--/TOPO-->
  
  <!--CORPO-->
  <div id="corpo" data-role="content">
    
    <a href="../../index.php" class="btn-voltar ico-left" data-direction="reverse"> Home</a>
    <a href="../../estradas.html" class="btn-voltar tipo ico-left" data-direction="reverse">Local</a>
    <a href="../litoral.html" class="btn-voltar estradas ico-left" data-direction="reverse">Estrada</a>
      <!--Regiao escolhida-->
      <div class="barra">
        <p>&nbsp</p>
      </div>
      <!--/Regiao escolhida-->
      
      <!--Container-->
      <div id="container"> 
        <!--Script Anchieta-->
        <script>
            $(function(){
                $("#opcoes-estrada").change(function () {
                  $("#estrada option:selected").each(function () {
                    var src = $(this).val();
                    $("#img-estrada").fadeOut('fast',function() {
                      $("#img-estrada").attr('src', src);
                      $('.pageload').show();
                      var t=setTimeout(function(){
                        $("#img-estrada").ready(function(){
                          $('.pageload').hide();
                          $("#img-estrada").fadeIn();
                        });
                      },1000);                      
                    });
                                                            
                  });
                });
                
                var anchieta = 0;
                
                $("#img-estrada").hide();
                $.ajax({
                  url: "http://app.cmais.com.br/portal/cams.php?s=ecovias",
                  dataType: "jsonp",
                  success: function(data){
                    $.each(data, function(i,data){
                      var a = new String(data.src);
                      //Anchieta
                      if(a.indexOf("Anchieta")>=0){
                        data.title = data.title;
                        if(anchieta==0){
                          $("#estrada").append('<option value="'+data.src+'" selected="selected">'+data.title+'</option>');
                          $("#img-estrada").attr('src', data.src).fadeIn('fast');
                          anchieta++;
                        }
                        else {
                          $('#estrada').append('<option value="'+data.src+'">'+data.title+'</option>');
                        }
                      }
                    });
                  },
                  complete: function(){
                    $('.pageload').hide();
                  }
                });
              });
            </script>
        <!--Script Anchieta--> 
        <span class="rodovia">Anchieta</span> 
        <!--Selecione a Avenida-->
        <div id="selecione" data-role="fieldcontain" align="center">
                      
          
          <form id="opcoes-estrada" action="" method="post">
            <select id="estrada" class="required" data-role="none">
                
            </select>
          </form> 
          
          <div class="pageload" style="margin: 0px auto;"><img src="http://cmais.com.br/portal/images/capaPrograma/transito/transparent_loading.gif" alt="carregando..." /></div>
          <img id="img-estrada" src="" alt="" style="width: 95%; display: none;" /> 
        </div>
        <!--/Selecione a Avenida--> 
          
        <!--PARTICIPE / MAPAS-->
        <div id="btn-nav" align="center">
          <a href="../../participe.html" id="btn-participe" class="flLeft" data-ajax="false">Participe</a>
          <a href="../../cmaisgoogle.html" id="btn-mapa" class="flRight"  data-ajax="false">
            <div class="w100">
              <div class="cont-btn-mapa">
                 Mapas
              </div>
            </div>
          </a>
        </div>
        <!--PARTICIPE / MAPAS-->
                  
     </div> 
     <!--/Container-->  
                
  </div>
  <!--CORPO-->
  
</div>
<!--PAGINA ZONA-->


  


</body>
</html>