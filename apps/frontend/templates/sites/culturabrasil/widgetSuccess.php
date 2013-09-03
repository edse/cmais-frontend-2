<html>
  <head>
  </head>  
  <body style="margin: 0; padding: 0;">
<script src="http://cmais.com.br/portal/js/jquery-1.7.2.min.js" type="text/javascript"></script>
<a id="ouca" class="ouca controle-remoto" href="javascript:;" style="width: 144px;height: 40px;display: block;overflow: hidden;float: left;">
  <img src="/portal/images/capaPrograma/culturabrasil/oucaculturabrasil.jpg" alt="Ouça a rádio Cultura Brasil" style=" width:100%"/>
</a>
<script>
$(document).ready(function(){
  var controle = null;
  $('.controle-remoto').click(function(){
    if(controle == null || controle.closed){
      controle = window.open('http://culturabrasil.cmais.com.br/controleremoto','controle','width=400,height=600,scrollbars=no');
    } else {
      controle.focus();
    }
  });
});  
</script>
<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-22770265-1']);
  _gaq.push(['_setDomainName', 'cmais.com.br']);
  _gaq.push(['_setAllowHash', 'false']);
  _gaq.push(['_trackPageview']);
  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>
</body>
</html>