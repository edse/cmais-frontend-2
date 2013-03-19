<?php
$cmaisHeader = "
<!DOCTYPE html>
<html xmlns:fb=\"http://www.facebook.com/2008/fbml\" xmlns:og=\"http://opengraphprotocol.org/schema/\"> 
  <head>
    <link href=\"/feed\" type=\"application/atom+xml\" rel=\"alternate\" title=\"cmais+ feed\" />
    <link rel=\"stylesheet\" href=\"/portal/css/geral.css?nocache=54321\" type=\"text/css\" />
    <link rel=\"stylesheet\" href=\"/portal/css/tvcultura/geral2.css?a=131325\" type=\"text/css\" />
    <!--[if IE]>
      <link rel=\"stylesheet\" type=\"text/css\" href=\"/portal/css/ie-only.css\" />
    <![endif]-->
    <meta http-equiv=\"Content-type\" content=\"text/html; charset=utf-8\" />
    <meta http-equiv=\"Cache-Control\" content=\"no-cache, no-store\" />
    <meta http-equiv=\"Pragma\" content=\"no-cache, no-store\" />
    <meta http-equiv=\"expires\" content=\"Mon, 06 Jan 1990 00:00:01 GMT\" />

    <title>Identidade - CEDOC - cmais+ O portal de conteúdo da Cultura</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"title\" content=\"Identidade - CEDOC - cmais+ O portal de conteúdo da Cultura\" />
    <meta name=\"description\" content=\"Lista de Identidades - CEDOC\" />
    <meta name=\"keywords\" content=\"fundação padre anchienta, documentação, filmes, vídeos, educacao, infantil, jornalismo, Arte, cultura, cinema, teatro, espetáculo, peça, pintura, exposição, exposições, TV, jornalismo, literatura, livro, música, show, MPB, vídeo, TV Cultura \" />
    <meta name=\"language\" content=\"pt_BR\" />
    <meta name=\"robots\" content=\"index, follow\" />
    <meta property=\"og:title\" content=\"Identidade - CEDOC - cmais+ O portal de conteúdo da Cultura\" />
    <meta property=\"og:type\" content=\"website\" />
    <meta property=\"og:description\" content=\"Lista de Identidades - CEDOC\" />
    <meta property=\"og:url\" content=\"http://cmais.com.br/cedoc/identidade/\" />
    <meta property=\"og:site_name\" content=\"cmais+\" />
    <meta property=\"og:image\" content=\"http://cmais.com.br/portal/images/logoCMAIS.jpg\" />

    <meta name=\"google-site-verification\" content=\"sPxYSUnxlnoyUdly_hNwIHma64gh9iosgNcOBrZBYdo\" />

    <meta property=\"fb:admins\" content=\"100000889563712\"/>
    <meta property=\"fb:app_id\" content=\"124792594261614\"/>

    <link rel=\"shortcut icon\" href=\"/portal/images/icon/favicon.png\" type=\"image/x-icon\" />

    <!-- scripts -->
    <script src=\"/portal/js/jquery-1.7.2.min.js\" type=\"text/javascript\"></script>
    <!--script type=\"text/javascript\" src=\"/portal/js/jquery-ui/js/jquery-1.5.1.min.js\"></script-->
    <script type=\"text/javascript\" src=\"/portal/js/portal.js\"></script>
    <script type=\"text/javascript\" src=\"/portal/js/jcarousel/lib/jquery.jcarousel.min.js\"></script>
    <script type=\"text/javascript\" src=\"http://platform.twitter.com/widgets.js\"></script>
    <script type=\"text/javascript\" src=\"http://apis.google.com/js/plusone.js\">
      {lang: 'pt-BR'}
    </script>

    <!-- DFP -->
    <script type='text/javascript' src='http://partner.googleadservices.com/gampad/google_service.js'></script>
    <script type='text/javascript'>
    GS_googleAddAdSenseService(\"ca-pub-6681834746443470\");
    GS_googleEnableAllServices();
    </script>
    <script type='text/javascript'>
    /*
    GA_googleAddSlot(\"ca-pub-6681834746443470\", \"cmais-aovivo-300x250\");
    GA_googleAddSlot(\"ca-pub-6681834746443470\", \"cmais-aovivo-728x90\");
    GA_googleAddSlot(\"ca-pub-6681834746443470\", \"cmais-arteecultura-300x250\");
    GA_googleAddSlot(\"ca-pub-6681834746443470\", \"cmais-educacao-300x250\");
    GA_googleAddSlot(\"ca-pub-6681834746443470\", \"cmais-grade-300x250\");
    GA_googleAddSlot(\"ca-pub-6681834746443470\", \"cmais-homepage-300x250-2\");
    GA_googleAddSlot(\"ca-pub-6681834746443470\", \"cmais-jornalismo-300x250\");
    GA_googleAddSlot(\"ca-pub-6681834746443470\", \"cmais-musica-300x250\");
    GA_googleAddSlot(\"ca-pub-6681834746443470\", \"cultura360-assets-300x250\");
    GA_googleAddSlot(\"ca-pub-6681834746443470\", \"cultura360-assets-728x90\");
    GA_googleAddSlot(\"ca-pub-6681834746443470\", \"cultura360-homepage-300x250\");
    GA_googleAddSlot(\"ca-pub-6681834746443470\", \"jornaldacultura-assets-300x250\");
    GA_googleAddSlot(\"ca-pub-6681834746443470\", \"metropolis-assets-300x250\");
    GA_googleAddSlot(\"ca-pub-6681834746443470\", \"metropolis-assets-728x90\");
    GA_googleAddSlot(\"ca-pub-6681834746443470\", \"metropolis-homepage-300x250\");
    GA_googleAddSlot(\"ca-pub-6681834746443470\", \"nossalingua-assets-300x250\");
    GA_googleAddSlot(\"ca-pub-6681834746443470\", \"nossalingua-assets-728x90\");
    GA_googleAddSlot(\"ca-pub-6681834746443470\", \"nossalingua-homepage-300x250\");
    GA_googleAddSlot(\"ca-pub-6681834746443470\", \"preestreia-assets-300x250\");
    GA_googleAddSlot(\"ca-pub-6681834746443470\", \"programas-assets-300x250\");
    GA_googleAddSlot(\"ca-pub-6681834746443470\", \"programas-assets-728x90\");
    GA_googleAddSlot(\"ca-pub-6681834746443470\", \"programas-homepage-300x250\");
    GA_googleAddSlot(\"ca-pub-6681834746443470\", \"srbrasil-assets-300x250\");
    GA_googleAddSlot(\"ca-pub-6681834746443470\", \"srbrasil-assets-728x90\");
    GA_googleAddSlot(\"ca-pub-6681834746443470\", \"srbrasil-homepage-300x250\");
    GA_googleAddSlot(\"ca-pub-6681834746443470\", \"tvcultura-homepage-728x90\");
    GA_googleAddSlot(\"ca-pub-6681834746443470\", \"deupaulanatv-300x250\");
    GA_googleAddSlot(\"ca-pub-6681834746443470\", \"CartaoVerde728x90\");
    GA_googleAddSlot(\"ca-pub-6681834746443470\", \"provocacoes-728x90\");
    GA_googleAddSlot(\"ca-pub-6681834746443470\", \"reisdarua-728x90\");
    */
    GA_googleAddSlot(\"ca-pub-6681834746443470\", \"tvcultura-homepage-300x250\");
    GA_googleAddSlot(\"ca-pub-6681834746443470\", \"univesptv-728x90\");
    GA_googleAddSlot(\"ca-pub-6681834746443470\", \"univesptv-300x250\");
    GA_googleAddSlot(\"ca-pub-6681834746443470\", \"multicultura-300x250\");
    GA_googleAddSlot(\"ca-pub-6681834746443470\", \"deupaulanatv-125x125\");
    GA_googleAddSlot(\"ca-pub-6681834746443470\", \"culturafm-300x250\");
    GA_googleAddSlot(\"ca-pub-6681834746443470\", \"culturafm-728x90\");
    GA_googleAddSlot(\"ca-pub-6681834746443470\", \"home-geral300x250\");
    GA_googleAddSlot(\"ca-pub-6681834746443470\", \"home-geral728x90\");
    GA_googleAddSlot(\"ca-pub-6681834746443470\", \"home-geral2-300x250\");
    GA_googleAddSlot(\"ca-pub-6681834746443470\", \"cmais-assets-300x250\");
    GA_googleAddSlot(\"ca-pub-6681834746443470\", \"cmais-assets-728x90\");
    GA_googleAddSlot(\"ca-pub-6681834746443470\", \"cmais-homepage-300x250\");
    GA_googleAddSlot(\"ca-pub-6681834746443470\", \"cmais-assets-250x250\");
    GA_googleAddSlot(\"ca-pub-6681834746443470\", \"maiscrianca\");

    </script>
    <script type='text/javascript'>
    GA_googleFetchAds();
    </script>
    <!-- /DFP -->

    <script type=\"text/javascript\">
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
    <!-- /scripts -->
    
    <!-- Le styles -->
    <link href=\"/portal/js/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">
    <link href=\"/portal/js/bootstrap/css/bootstrap-responsive.min.css\" rel=\"stylesheet\">
    <script src=\"/portal/js/bootstrap/bootstrap.js\"></script>
    <link href=\"../css/style.css\" rel=\"stylesheet\" type=\"text/css\" />
    
    <script>
      (function() {
        var cx = '014171385304484677642:rn0zsdt5eig';
        var gcse = document.createElement('script'); gcse.type = 'text/javascript'; gcse.async = true;
        gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
            '//www.google.com/cse/cse.js?cx=' + cx;
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(gcse, s);
      })();
    </script>
    
    
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
    <![endif]-->
        

  </head>
  <body>
    <link rel=\"stylesheet\" href=\"/portal/css/cmais.css\" type=\"text/css\" />
<script type=\"text/javascript\" src=\"/portal/js/swfobject/swfobject.js\"></script>
<!--Controle-Remoto-->
<script src=\"http://www.culturabrasil.com.br/js/config.js\" type=\"text/javascript\"></script>

<script src=\"http://www.culturabrasil.com.br/js/jquery.xmldom.min.js\" type=\"text/javascript\"></script>
<script src=\"http://www.culturabrasil.com.br/js/Menu.class.js\" type=\"text/javascript\"></script>
<script src=\"http://www.culturabrasil.com.br/js/User.class.js\" type=\"text/javascript\"></script>

<script type=\"text/javascript\">
    var Menu    = new Menu(); 
    var User    = new User(); 

    $(function(){
      $('#logo').click(function(){
        location.href=URL;
      });
      Menu.initHandler();
      User.initHandler();

      var controle = null;

      $('#controle-remoto, #ouca').click(function(){
        if(controle == null || controle.closed){
          controle = window.open('http://www.culturabrasil.com.br/controle-remoto?start=am','controle','width=300,height=600,scrollbars=no');
        } else {
          controle.focus();
        }
      });
    });
</script>
<!--/CONTROLE REMOTO-->

<!--GUIA TOPO-->
<div id=\"guia-topo\" align=\"center\">
  <!--topo Cmais-->
  <div id=\"topo-cmais\">
  
    <!--Logo Cultura-->
    <a href=\"http://tvcultura.cmais.com.br\" id=\"logoCultura\" title=\"Portal TV Cultura\">
      <img src=\"/portal/images/logos-cultura/logo-cultura-0.png\" width=\"80\" height=\"77\"/>
    </a>  
    <!--Logo Cultura-->
    
    <!--menu parte 2-->
    <div id=\"menu-portal-2\">
      
      <h1>
        <a href=\"http://cmais.com.br\" title=\"cmais+ O portal de conteúdo da Cultura\">cmais+ O portal de conteúdo da Cultura</a>
      </h1>  
      
      <!--menu editorias-->
      <ul class=\"abas\">
       <li class=\"m-infantil\" style=\"float:right; margin:0 0px 0 0 !important;\"><a title=\"Joguinhos + Criança\" href=\"http://cmais.com.br/infantil\">Joguinhos</a></li>
       <li class=\"m-musica\" style=\"float:right\"><a title=\"Música\" href=\"http://cmais.com.br/musica\">Música</a></li>
       <li class=\"m-educacao\" style=\"float:right\"><a title=\"Educação\" href=\"http://cmais.com.br/educacao\">Educação</a></li>
       <li class=\"m-arte-e-cultura \" style=\"float:right\"><a title=\"Arte &amp; Cultura\" href=\"http://cmais.com.br/arte-e-cultura\">Arte &amp; Cultura</a></li>
       <li class=\"m-jornalismo\" style=\"float:right\"><a title=\"Jornalismo\" href=\"http://cmais.com.br/jornalismo\">Jornalismo</a></li>
       <li class=\"m-cursos\" style=\"float:right\"><a title=\"Cursos\" href=\"http://univesptv.cmais.com.br/cursos\">Cursos</a></li>
      </ul> 
      <!--menu editorias-->
      
      <!-- Busca Portal -->
      <form class=\"busca-portal\" action=\"/busca\" method=\"post\">
        <input type=\"hidden\" name=\"site_id\" id=\"site_id\" value=\"\" />
        <input class=\"ipt-txt\" type=\"text\" name=\"term\" id=\"term\" value=\"\" />
                <input class=\"ipt-submit\" type=\"submit\" value=\"OK\" />
      </form>
      <!-- /Busca Portal -->  
         
    </div>
    <!--menu parte 2-->
    
    <!--menu parte 1-->
    <div id=\"menu-portal-1\">
      
      <!--FACEBOOK-->
      
      <!--curtir-->
      <div id=\"facebook-cultura\">
        
                
        <!--curtir-->
        <div class=\"fb-like\" data-href=\"http://www.facebook.com/tvcultura\" data-send=\"false\" data-layout=\"button_count\" data-width=\"110\" data-show-faces=\"true\"></div>
      
      </div>
      <!--/FACEBOOK-->
      
      <!-- Menu Portal -->
      <ul id=\"menu-portal\">
        <!-- Menu TV -->
        <li class=\"m-tv\"><a href=\"#\" class=\"filho m_tv_tvcultura\" title=\"TV\">PROGRAMAS<span></span></a>
          <div class=\"menu-aberto padrao tv grid3\">
            <ul class=\"abas-menu abas\">
              <li class=\"neutro\">
                <p>escolha um canal</p>
                <span></span>
              </li>
              <li class=\"tvcultura ativo\"><a href=\"javascript:;\" title=\"TV Cultura\" class=\"m_tv_tvcultura\">TV Cultura</a><span class=\"decoracao\"></span></li>
              <li class=\"univesptv\"><a href=\"javascript:;\" title=\"Univesp TV\" class=\"m_tv_univesptv\">Univesp TV</a><span class=\"decoracao\"></span></li>
              <li class=\"multicultura\"><a href=\"javascript:;\" title=\"multiCULTURA\" class=\"m_tv_multicultura\">multiCULTURA</a><span class=\"decoracao\"></span></li>
              <li class=\"tvrtb\"><a href=\"javascript:;\" title=\"TV R&aacute; Tim Bum\" class=\"m_tv_tvrtb\">TV R&aacute; Tim Bum</a><span class=\"decoracao\"></span></li>
            </ul>
            <!-- Abas Conteudo -->
            <ul class=\"abas-conteudo\">
              <li id=\"tvcultura\" class=\"filho\"></li>
              <li id=\"univesptv\" class=\"filho\" style=\"display:none;\"></li>
              <li id=\"multicultura\" class=\"filho\" style=\"display:none;\"></li>
              <li id=\"tvrtb\" class=\"filho\" style=\"display:none;\"></li>
            </ul>
            <!-- /Abas Conteudo -->
          </div>
        </li>
        <!-- /Menu TV -->
        
        <!-- Menu No Ar -->
        <li class=\"m-noar\"><a class=\"filho m_ar_tvcultura\" href=\"#\" title=\"PROGRAMA&Ccedil;&Atilde;O\">GRADE DE PROGRAMA&Ccedil;&Atilde;O<span></span></a>
          <div class=\"menu-aberto padrao ar grid3\">
            <ul class=\"abas-menu abas\">
              <li class=\"neutro\">
                <p>escolha um canal</p>
                <span></span>
              </li>
              <li class=\"tvcultura\"><a href=\"javascript:;\" title=\"TV Cultura\" class=\"m_ar_tvcultura\">TV Cultura</a><span class=\"decoracao\"></span></li>
              <li class=\"univesptv\"><a href=\"javascript:;\" title=\"Univesp TV\" class=\"m_ar_univesptv\">Univesp TV</a><span class=\"decoracao\"></span></li>
              <li class=\"multicultura\"><a href=\"javascript:;\" title=\"multiCULTURA\" class=\"m_ar_multicultura\">multiCULTURA</a><span class=\"decoracao\"></span></li>
              <li class=\"tvrtb\"><a href=\"javascript:;\" title=\"TV R&aacute; Tim Bum\" class=\"m_ar_tvrtb\">TV R&aacute; Tim Bum</a><span class=\"decoracao\"></span></li>
            </ul>
            <!-- Abas Conteudo -->
            <ul class=\"abas-conteudo\">
              <li id=\"ar-tvcultura\" class=\"filho\"></li>
              <li id=\"ar-univesptv\" class=\"filho\" style=\"display:none;\"></li>
              <li id=\"ar-multicultura\" class=\"filho\" style=\"display:none;\"></li>
              <li id=\"ar-tvrtb\" class=\"filho\" style=\"display:none;\"></li>
            </ul>
            <!-- /Abas Conteudo -->
          </div>
        </li>
        <!-- /Menu No Ar -->
        
        <!-- Menu Radio -->
            <li class=\"m-radio\"><a href=\"#\" class=\"filho m_radio_am\" title=\"RADIO\">R&Aacute;DIOS<span></span></a>
              <div class=\"menu-aberto padrao radio grid3\">
                <ul class=\"abas-menu abas\">
                  <li class=\"neutro\">
                    <p>escolha uma esta&ccedil;&atilde;o</p>
                    <span></span>
                  </li>
                  <li class=\"radio-cb\"><a href=\"javascript:;\" title=\"R&aacute;dio Cultura Brasil\" class=\"m_radio_am\">Cultura Brasil</a><span class=\"decoracao\"></span></li>
                  <li class=\"radio-fm\"><a href=\"javascript:;\" title=\"R&aacute;dio FM\" class=\"m_radio_fm\">Cultura FM</a><span class=\"decoracao\"></span></li>
                  <li class=\"radio-rtb\"><a href=\"#radio-rtb\"  title=\"R&aacute;dio R&aacute; Tim Bum\">R&aacute;dio R&aacute; Tim Bum</a><span class=\"decoracao\"></span></li>
                  <li class=\"radio-cocorico\"><a href=\"#radio-cocorico\" title=\"TV R&aacute; Tim Bum\">R&aacute;dio Cocoric&oacute;</a><span class=\"decoracao\"></span></li>
                </ul>
                <!-- Abas Conteudo -->
                <ul class=\"abas-conteudo\">
                  <li id=\"radio-cb\" class=\"filho\"></li>
                  <li id=\"radio-fm\" class=\"filho\" style=\"display:none;\"></li>
                  <li id=\"radio-rtb\" class=\"filho\" style=\"display: none; \">
                    <a href=\"http://tvratimbum.cmais.com.br/radio\" class=\"bg-Ratimbum\"></a>
                  </li>
                  <li id=\"radio-cocorico\" class=\"filho\" style=\"display: none; \">
                    <a href=\"http://www3.tvcultura.com.br/cocorico/radio\" class=\"bg-Cocorico\"></a>
                  </li>
                </ul>
                <!-- /Abas Conteudo -->
              </div>
            </li>
            <!-- /Menu Radio -->
        
        <!-- Menu Videos -->
        <li class=\"m-videos\"><a href=\"http://cmais.com.br/videos\" title=\"VIDEOS\">V&Iacute;DEOS</a></li>
        <!-- /Menu Videos -->

        <!-- Menu ao Vivo -->
        <li class=\"m-aovivo\"><a href=\"http://cmais.com.br/aovivo\" title=\"AO VIVO\">AO VIVO</a></li>
        <!-- /Menu ao Vivo -->

      </ul>
      <!--redes sociais-->
      <div id=\"redesnovo\">
        <a href=\"javascript:;\" id=\"controle-remoto\" class=\"redesB\" title=\"controle-remoto\" target=\"_blank\"></a>
        <a href=\"http://itunes.apple.com/br/app/radio-cultura/id370066053\" id=\"apple\" class=\"redesA\" title=\"Apple store\" target=\"_blank\"></a>
        <a href=\"https://google.com/+tvcultura\" id=\"google\" class=\"redesA\" title=\"Google+\" target=\"_blank\"></a>
        <a href=\"http://statigr.am/tvcultura\" id=\"instangram\" class=\"redesA\" title=\"Instagram\" target=\"_blank\"></a>
        <a href=\"http://facebook.com/tvcultura\" id=\"face\" class=\"redesA\" title=\"Facebook\" target=\"_blank\"></a>
        <a href=\"http://twitter.com/tvcultura\" id=\"twit\" class=\"redesA\" title=\"Twitter\" target=\"_blank\"></a>
        <a href=\"http://youtube.com/cultura\" id=\"youtube\" class=\"redesA\" title=\"Youtube \" target=\"_blank\"></a>
        <a href=\"http://tvcultura.cmais.com.br/feed\" id=\"rss\" class=\"redesA\" title=\"RSS\" target=\"_blank\"></a>
      </div>
      <!--redes sociais-->
        
    </div>
    <!--menu parte 1-->

    
      
  </div>
  <!--/topo Cmais-->
</div>
<!--/GUIA TOPO-->
";

$cmaisFooter = "
    <!-- RODAPE -->
    <div id=\"rodape-portal\">
      <div class=\"capa-voltar-topo\">
        <a class=\"voltar-topo\" href=\"#\"><span></span>voltar ao topo</a>
      </div>
      <div class=\"capa-rodape\">
        <div class=\"box-rodape\">
          <div class=\"col-esq\">
            <ul>
              <li class=\"tit\">Portal</li>
              <li><a href=\"http://www.cmais.com.br\" title=\"Home\">Home</a></li>
              <li><a href=\"http://www.cmais.com.br/videos\" title=\"V&iacute;deos\">V&iacute;deos</a></li>
              <li><a href=\"http://www.cmais.com.br/aovivo\" title=\"Home\">Ao Vivo</a></li>
              <li><a href=\"http://www.cmais.com.br/expediente\" title=\"Expediente\">Expediente</a></li>
            </ul>
            <ul>
              <li class=\"tit\">Editorias</li>
              <li><a href=\"http://www.cmais.com.br/arte-e-cultura\" title=\"Arte &amp; Cultura\">Arte &amp; Cultura</a></li>
              <li><a href=\"http://www.cmais.com.br/educacao\" title=\"Educa&ccedil;&atilde;o\">Educa&ccedil;&atilde;o</a></li>
              <li><a href=\"http://www.cmais.com.br/infantil\" title=\"+ Crian&ccedil;a\">+ Crian&ccedil;a</a></li>
              <li><a href=\"http://www.cmais.com.br/jornalismo\" title=\"Jornalismo\">Jornalismo</a></li>
              <li><a href=\"http://www.cmais.com.br/musica\" title=\"M&uacute;sica\">M&uacute;sica</a></li>
            </ul>
          </div>
          <div class=\"col-central\">
            <div class=\"posicao\">
              <p class=\"tit\">+Populares</p>
              <ul>
                <li><a href=\"http://tvcultura.cmais.com.br\" class=\"tit\">TV Cultura</a></li>
                <li><a href=\"http://tvcultura.cmais.com.br/transito\" title=\"Guia do Trânsito\">Guia do Trânsito</a></li>
                <li><a href=\"http://tvcultura.cmais.com.br/jornaldacultura\" title=\"Jornal da Cultura\">Jornal da Cultura</a></li>
                <li><a href=\"http://tvcultura.cmais.com.br/metropolis\" title=\"Metr&oacute;polis\">Metr&oacute;polis</a></li>
                <li><a href=\"http://tvcultura.cmais.com.br/provocacoes\" title=\"Provoca&ccedil;&otilde;es\">Provoca&ccedil;&otilde;es</a></li>
                <li><a href=\"http://tvcultura.cmais.com.br/quintaldacultura\" title=\"Quintal da Cultura\">Quintal da Cultura</a></li>
                <li><a href=\"http://tvcultura.cmais.com.br/reportereco\" title=\"Reporter Eco\">Repórter Eco</a></li>
                <li><a href=\"http://tvcultura.cmais.com.br/rodaviva\" title=\"Roda Viva\">Roda Viva</a></li>
              </ul>
              <ul>
                <li><a href=\"http://www.culturabrasil.com.br/\" class=\"tit\" title=\"R&aacute;dio Cultura Brasil\">R&aacute;dio Cultura Brasil</a></li>
                <li><a href=\"http://www.culturabrasil.com.br/especiais\" title=\"Especiais\">Especiais</a></li>
                <li><a href=\"http://www.culturabrasil.com.br/entrevistas\" title=\"Entrevistas\">Entrevistas</a></li>
                <li><a href=\"http://www.culturabrasil.com.br/radarcultura\" title=\"RadarCultura\">RadarCultura</a></li>
                <li><a href=\"http://www.culturabrasil.com.br/playlists\" title=\"Playlists\">Playlists</a></li>
                <li><a href=\"http://www.culturabrasil.com.br/podcasts\" title=\"Podcasts\">Podcasts</a></li>
              </ul>
              <ul>
                <li><a href=\"http://culturafm.cmais.com.br\" class=\"tit\" title=\"R&aacute;dio Cultura FM\">R&aacute;dio Cultura FM</a></li>
                <li><a href=\"http://culturafm.cmais.com.br/selecao-do-ouvinte\" title=\"Sele&ccedil;&atilde;o do Ouvinte\">Sele&ccedil;&atilde;o do Ouvinte</a></li>
                <li><a href=\"http://culturafm.cmais.com.br/guia-do-ouvinte\" title=\"Grade de Programa&ccedil;&atilde;o\">Grade de Programa&ccedil;&atilde;o</a></li>
                <li><a href=\"http://culturafm.cmais.com.br/para-ouvir\" title=\"Podcasts\">Podcasts</a></li>
              </ul>
            </div>
            <div class=\"posicao\">
              <ul>
                <li><a href=\"http://univesp.tv.br/\" class=\"tit\">Univesp TV</a></li>
                <li><a href=\"http://univesptv.cmais.com.br/inglescommusica\" title=\"Ingl&ecirc;s Com M&uacute;sica\">Ingl&ecirc;s Com M&uacute;sica</a></li>
                <li><a href=\"http://univesptv.cmais.com.br/pedagogia-unesp\" title=\"Pedagogia Unesp\">Pedagogia Unesp</a></li>
                <li><a href=\"http://univesptv.cmais.com.br/cursos\" title=\"Cursos Livres\">Cursos Livres</a></li>
                <li><a href=\"http://univesptv.cmais.com.br/licenciatura-em-ciencias\" title=\"Licenciatura em
ciências\">Licenciatura em
ciências</a></li>
              </ul>
              <ul>
                <li><a href=\"http://www.multicultura.com.br/\" class=\"tit\">multiCULTURA</a></li>
                <li><a href=\"http://multicultura.cmais.com.br/o-que-e-1\" title=\"O que &eacute;\">O que &eacute;</a></li>
                <li><a href=\"http://multicultura.cmais.com.br/como-assistir-o-multicultura\" title=\"Como Assistir\">Como Assistir</a></li>
                <li><a href=\" http://multicultura.cmais.com.br/programacao\" title=\"Programa&ccedil;&atilde;o\">Programa&ccedil;&atilde;o</a></li>
              </ul>
              <ul>
                <li><a href=\"http://www.tvratimbum.com.br/\" class=\"tit\">TV R&aacute; Tim Bum</a></li>
                <li><a href=\"http://tvratimbum.cmais.com.br/xtudo\" title=\"X-Tudo \">X-Tudo </a></li>
                <li><a href=\"http://www.tvcultura.com.br/cocorico\" title=\"Cocoric&oacute;\">Cocoric&oacute;</a></li>
                <li><a href=\"http://tvratimbum.cmais.com.br/baudehistorias\" title=\"Ba&uacute; de Hist&oacute;rias\">Ba&uacute; de Hist&oacute;rias</a></li>
                <li><a href=\"http://tvratimbum.cmais.com.br/mundodalua\" title=\"Mundo da Lua\">Mundo da Lua</a></li>
              </ul>
            </div>
            <div class=\"posicao\">
              <ul>
                <li class=\"tit\">Pela Web</li>
                <li><a href=\"http://www.facebook.com/tvcultura\" title=\"Facebook\">Facebook</a></li>
                <li><a href=\"http://www.flickr.com/photos/televisaocultura\" title=\"Flickr\">Flickr</a></li>
                <li><a href=\"https://google.com/+tvcultura\" title=\"Google+\">Google+</a></li>
                <li><a href=\"http://statigr.am/tvcultura\" title=\"Instagram\">Instagram</a></li>
                <li><a href=\"http://twitter.com/#!/tvcultura\" title=\"Twitter\">Twitter</a></li>
                <li><a href=\"http://www.youtube.com/cultura\" title=\"Youtube\">Youtube</a></li>
              </ul>
              <ul>
                <li><a href=\"http://www2.tvcultura.com.br/fpa/\" class=\"tit\">Funda&ccedil;&atilde;o Padre Anchieta</a></li>
                <li><a href=\"http://fpa.com.br/sic\" title=\"SiC - Serviço de Informações ao Cidadão\">SiC</a></li>
                <li><a href=\"http://www2.tvcultura.com.br/fpa/institucional/licitacoes.aspx\" title=\"Licitações\">Licitações</a></li>
                <li><a href=\"http://cmais.com.br/captacao\" title=\"Captacao\">Capta&ccedil;&atilde;o</a></li>
                <li><a href=\"http://cmais.com.br/imprensa\" title=\"Assessoria de Imprensa\">Assessoria de Imprensa</a></li>
                <li><a href=\"http://www2.tvcultura.com.br/faleconosco/\" title=\"Fale Conosco\">Fale Conosco</a></li>
                <li><a href=\"http://www2.tvcultura.com.br/selecao/\" title=\"Trabalhe Conosco\">Trabalhe Conosco</a></li>
              </ul>
              
              <a href=\"http://cmais.com.br/programas-de-a-z\" class=\"tit todos\">Todos os sites</a>
              <a href=\"http://cmais.com.br/busca?term=ver+todo+o+conte%C3%BAdo\" class=\"tit todos\">Todo o conteúdo</a>

            </div>
          </div>
          <div class=\"col-dir\">
            <!-- a class=\"fpa\" href=\"http://www2.tvcultura.com.br/fpa/\" title=\"Funda&ccedil;&atilde;o Padre Anchieta\">Funda&ccedil;&atilde;o Padre Anchieta</a-->
            <a class=\"cultura\" href=\"http://tvcultura.cmais.com.br/\" title=\"TV Cultura\">TV Cultura</a>
          </div>
          <div class=\"copyright\">
            <p>Copyright &copy; 1996 - 2012 Funda&ccedil;&atilde;o Padre Anchieta</p>
          </div>
        </div>
        
      </div>
    </div>
    <!-- /RODAPE -->    
    <div id=\"fb-root\"></div>
    <script>
      window.fbAsyncInit = function() {
        FB.init({appId: '124792594261614', status: true, cookie: true, xfbml: true});
      };
      (function() {
        var e = document.createElement('script'); e.async = true;
        e.src = document.location.protocol +
          '//connect.facebook.net/pt_BR/all.js';
        document.getElementById('fb-root').appendChild(e);
      }());
    </script>

  </body>
</html>
";

?>