<script src="http://cmais.com.br/portal/js/jquery-1.7.2.min.js" type="text/javascript"></script>
<a id="ouca" class="ouca controle-remoto" href="javascript:;">
  <img src="/portal/images/capaPrograma/culturabrasil/oucaculturabrasil.jpg" alt="Ouça a rádio Cultura Brasil"/>
</a>
<script>
$(document).ready(function(){
  var controle = null;
  $('.controle-remoto').click(function(){
    if(controle == null || controle.closed){
      controle = window.open('http://culturabrasil.cmais.com.br/controleremoto','controle','width=300,height=600,scrollbars=no');
    } else {
      controle.focus();
    }
  });
});  
</script>