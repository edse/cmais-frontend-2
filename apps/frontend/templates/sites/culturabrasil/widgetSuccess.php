<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="Description" content="Portal de música brasileira da Fundação Padre Anchieta" />
<meta name="Keywords" content="musica brasileira, cultura brasileira, mpb, tv cultura" />
<meta name="Author" content="Eric Mantoani" />
<meta name="Owner" content="Rádio Cultura Brasil" />
<meta name="Googlebot" content="all" />
<meta name="robots" content="Index,Follow" />
<meta name="robots" content="All" />
<meta name="content-language" content="pt-br" />
<meta http-equiv="Content-Language" content="pt-br" />
<meta name="Identifier-URL" content="http://www.culturabrasil.com.br/" />
<meta name="revisit-after" content="1 day" /> 

<link rel="stylesheet" href="/css/reset.css" type="text/css" media="screen" />
<link rel="stylesheet" href="/css/site.css" type="text/css" media="screen" />
<link rel="shortcut icon" href="/images/ico.png" />

<script src="http://www.culturabrasil.com.br/js/config.js" type="text/javascript"></script>
<script src="http://www.culturabrasil.com.br/js/jquery-1.3.2.js" type="text/javascript"></script>
<script src="http://www.culturabrasil.com.br/js/jquery.xmldom.min.js" type="text/javascript"></script>
<script src="http://www.culturabrasil.com.br/js/Menu.class.js" type="text/javascript"></script>
<script src="http://www.culturabrasil.com.br/js/User.class.js" type="text/javascript"></script>

<script type="text/javascript">
  
    
    var Menu    = new Menu(); 
    var User    = new User(); 
    $(function(){
      
      $('#logo').click(function(){
        location.href=URL;
      });
      
      Menu.initHandler();
      
      User.initHandler();
      
      
            
      
      var controle = null;

      $('.controle-remoto').click(function(){
        if(controle == null || controle.closed){
          controle = window.open('http://www.culturabrasil.com.br/controle-remoto?start=am','controle','width=300,height=600,scrollbars=no');
        } else {
          controle.focus();
        }
      });
      
          
      
    });
  
</script>

<title>Cultura Brasil - Controle Remoto Widget</title>

</head>
<body>

<li id="controle-remoto" class="controle-remoto widget">
  <h1>Controle Remoto - Ouça Ao Vivo</h1>
</li>


<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-3743400-15");
pageTracker._setDomainName("none");
pageTracker._setAllowLinker(true);
pageTracker._trackPageview();
} catch(err) {}</script>


</body>
</html>