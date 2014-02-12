<!DOCTYPE html>
<html xmlns:fb="http://www.facebook.com/2008/fbml" xmlns:og="http://opengraphprotocol.org/schema/">
  <head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta http-equiv="Cache-Control" content="no-cache, no-store" />
    <meta http-equiv="Pragma" content="no-cache, no-store" />
    <meta http-equiv="expires" content="Mon, 06 Jan 1990 00:00:01 GMT" />
    <?php include_title()    ?>
    <?php include_metas()    ?>
    <?php include_meta_props()    ?>
    <meta name="google-site-verification" content="sPxYSUnxlnoyUdly_hNwIHma64gh9iosgNcOBrZBYdo" />
    <meta property="fb:admins" content="100000889563712"/>
    <meta property="fb:app_id" content="124792594261614"/>
    <link rel="shortcut icon" href="http://cmais.com.br/portal/images/icon/favicon.png" type="image/x-icon" />
    <link rel="image_src" href="http://cmais.com.br/portal/images/logoCMAIS.jpg" />
    <meta name="description" content="cmais+ O portal de conteúdo da Cultura" />
    <meta name="keywords" content="cultura, educacao, infantil, jornalismo" />
    <link rel="stylesheet" href="http://cmais.com.br/portal/css/geral.css" type="text/css" />
    <link rel="stylesheet" href="http://cmais.com.br/portal/quintal/css/geralQuintal.css" type="text/css" />
    <link rel="stylesheet" href="http://cmais.com.br/portal/quintal/css/indexQuintal.css" type="text/css" />
    <!-- scripts -->
    <script type="text/javascript" src="http://cmais.com.br/portal/js/jquery-ui/js/jquery-1.5.1.min.js"></script>
    <script type="text/javascript" src="http://cmais.com.br/portal/js/jcarousel/lib/jquery.jcarousel.min.js"></script>
    <script type="text/javascript" src="http://cmais.com.br/portal/js/portal.js"></script>
    <script type="text/javascript" src="http://cmais.com.br/portal/js/jPlayer/js/jquery.jplayer.min.js"></script>
  </head>
  <script type="text/javascript">
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-22770265-1']);
    _gaq.push(['_setDomainName', '.cmais.com.br']);
    _gaq.push(['_trackPageview']); (function() {
      var ga = document.createElement('script');
      ga.type = 'text/javascript';
      ga.async = true;
      ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
      var s = document.getElementsByTagName('script')[0];
      s.parentNode.insertBefore(ga, s);
    })();

  </script>
  <body>
    <!--ALLWRAPPER-->
    <div class="allWrapper">
      <?php use_helper('I18N', 'Date')      ?>
      <?php include_partial_from_folder('blocks', 'global/menu', array('site' => $site, 'mainSite' => $mainSite, 'asset' => $asset, 'section' => $section))      ?>

      <!--CONTENT WRAPPER-->
      <div class="contentWrapper" align="center">
        <!--CONTENT-->
        <div class="content">
          <!--MENU QUINTAL-->
          <?php include_partial_from_folder('sites/quintaldacultura', 'global/menu')          ?>

          <hr />
          <!--CONTEUDO-->
          <div class="conteudo">
            <!--p class="breadcrumb"><a href="/">cmais</a> &gt;&gt; Quintal da Cultura</p-->
            <!--CONTEUDO WRAPPER-->
            <div class="conteudoWrapper">
              <!--ITENS BACKGROUND-->
              <?php include_partial_from_folder('sites/quintaldacultura', 'global/itensBackground')              ?>
              <!--/ITENS BACKGROUND-->
              <!--MENU PRINCIPAL-->
              <div id="menu-quintal-principal">
                <script>
                  $(document).ready(function() {
                    $('area[id*="btn"],area[id*="map"]').hover(function() {
                      $('#over-' + $(this).attr('name')).show();
                    })
                    $('area[id*="btn"],area[id*="map"]').mouseleave(function() {
                      $('#over-' + $(this).attr('name')).hide();
                    })
                  })
                </script>
                <!--MENU-BOTOES-->
                <img class="over" src="http://cmais.com.br/portal/quintal/images/indexNovo/img-todos-personagens.png" border="0" usemap="#personagensMap" id="personagens"/>
                <map name="personagensMap">
                  <area shape="poly" id="btn-teobaldo" name="teobaldo" title="videos" alt="videos" coords="74,557,72,541,84,528,82,502,76,475,46,395,37,328,52,298,50,285,22,284,12,242,25,180,44,167,55,142,50,124,30,99,32,65,60,39,98,41,132,62,139,86,138,115,126,135,105,140,121,150,148,152,174,160,231,90,240,66,274,31,286,31,291,38,294,48,269,84,258,92,246,126,237,202,227,211,202,212,176,232,164,247,242,391,257,485,249,495,243,502,242,518,242,542,218,537,223,513,217,471,184,416,148,372,124,374,108,398,117,523,131,550,128,560" href="/quintaldacultura/videos/todos">
                  <area shape="poly" id="btn-quelonio" name="quelonio" title="Como escrever uma cartinha para a turma do quintal" alt="Como escrever uma cartinha para a turma do quintal" coords="274,487,308,489,330,520,352,506,368,542,394,590,371,608,352,614,347,636,347,650,312,664,298,658,294,645,267,649,248,641,192,642,190,592,256,586,247,553,250,533,248,503" href="/quintaldacultura/como-escrever-uma-cartinha-para-a-turma-do-quintal">
                  <area shape="poly" id="btn-quelonio" name="quelonio" title="Como escrever uma cartinha para a turma do quintal" alt="Como escrever uma cartinha para a turma do quintal" coords="416,504,435,590,455,603,474,617,507,619,522,608,510,594,479,586,458,538,438,515" href="/quintaldacultura/como-escrever-uma-cartinha-para-a-turma-do-quintal">
                  <area shape="poly" id="btn-osorio" name="osorio" title="atividades" alt="atividades" coords="269,92,292,206,349,257,404,270,390,343,368,407,358,507,401,587,384,611,358,619,352,643,379,651,416,641,438,618,420,565,407,489,449,421,493,504,569,582,561,604,541,616,528,642,547,652,567,644,569,600,575,582,585,560,565,514,524,471,508,351,527,276,565,220,561,176,566,150,584,132,587,100,575,80,539,72,512,85,500,117,498,127,484,148,459,154,434,163,347,147,330,138,329,113,299,92" href="/quintaldacultura/atividades">
                  <area shape="poly" id="btn-minhoquias" name="minhoquias" title="baixar" alt="baixar" coords="529,691,494,655,487,625,479,625,485,665,531,715,654,718,654,673,623,653,599,648,595,611,602,599,616,580,602,566,580,572,578,592,574,598,575,610,572,647,530,671" href="/quintaldacultura/baixar">
                  <area shape="poly" id="btn-doroteia" name="doroteia" title="imagens" alt="imagens" coords="618,99,560,52,558,33,629,14,672,14,694,31,671,50,628,42,606,48,663,70,673,72,681,55,707,44,705,37,716,39,724,25,741,29,747,41,748,52,755,61,766,59,775,73,763,88,780,91,795,101,804,137,821,174,811,181,800,181,802,191,795,206,791,232,795,248,788,258,774,261,759,261,751,256,757,237,754,191,736,227,717,260,707,258,702,245,698,215,691,235,696,256,696,275,690,289,683,298,691,305,690,313,686,326,670,325,682,378,693,385,690,398,687,423,647,385,627,331,617,322,607,326,607,365,603,382,564,449,567,461,577,467,604,465,614,482,591,500,560,494,537,486,532,477,545,420,567,377,562,316,557,300,546,295,532,282,569,222,568,198" href="http://tvcultura.cmais.com.br/sid/turminha-do-sid">
                  <area shape="poly" id="btn-ludovico" name="ludovico" title="jogos" alt="jogos" coords="678,672,677,635,695,609,681,589,691,570,681,551,678,495,693,402,699,391,725,360,701,363,698,351,693,329,713,335,711,322,694,297,701,296,722,301,729,270,737,262,740,286,748,283,742,266,743,258,747,256,766,275,768,286,774,285,790,266,789,284,824,279,823,289,806,300,815,316,826,305,829,313,819,327,914,312,934,320,941,335,929,352,854,382,855,394,867,400,868,408,854,415,911,482,887,501,865,513,842,568,920,566,946,574,951,584,952,598,930,631,885,636,871,630,873,622,884,614,901,613,897,599,880,601,833,615,816,623,784,600,784,581,799,521,775,526,776,550,772,569,775,629,757,665,737,688,700,691" href="/quintaldacultura/jogos">
                </map>
                <!--/MENU-BOTOES-->
                <img id="over-teobaldo" class="over" src="http://cmais.com.br/portal/quintal/images/indexNovo/over-videos-teobaldo.png" usemap="#over-teobaldoMap" style="display:none;"/>
                <map name="over-teobaldoMap">
                  <area id="map-teobaldo" name="teobaldo" title="videos" alt="videos" shape="poly" coords="81,193,156,192,152,115,156,83,122,32,123,10,38,6,5,21,2,35,24,66,23,91,22,186,50,196" href="/quintaldacultura/videos/todos">
                </map>
                <img id="over-quelonio" class="over" src="http://cmais.com.br/portal/quintal/images/indexNovo/over-cartinhas-quelonio.png" usemap="#over-quelonioMap" style="display:none;"/>
                <map name="over-quelonioMap">
                  <area id="map-quelonio" name="quelonio" title="Como escrever uma cartinha para a turma do quintal" alt="Como escrever uma cartinha para a turma do quintal" shape="poly" coords="97,245,160,235,243,223,240,158,220,148,173,60,180,34,126,7,93,35,128,79,98,90,2,106,2,133,27,196" href="/quintaldacultura/como-escrever-uma-cartinha-para-a-turma-do-quintal">
                </map>
                <img id="over-minhoquias" class="over" src="http://cmais.com.br/portal/quintal/images/indexNovo/over-baixar-minhoquias.png" usemap="#over-minhoquiasMap" usemap="#over-minhoquiasMap" style="display:none;"/>
                <map name="over-minhoquiasMap">
                  <area id="map-minhoquias" name="minhoquias" title="baixar" alt="baixar" shape="poly" coords="3,129,47,203,194,198,195,64,165,29,103,4,35,1" href="/quintaldacultura/baixar">
                </map>
                <img id="over-osorio" class="over" src="http://cmais.com.br/portal/quintal/images/indexNovo/over-atividades-osorio.png" usemap="#over-osorioMap" style="display:none;"/>
                <map name="over-osorioMap">
                  <area id="map-osorio" name="osorio" title="atividades" alt="atividades" shape="poly" coords="51,241,298,237,298,155,299,93,283,89,261,91,243,44,87,4,36,4,38,73,7,89,2,156,15,195,23,221" href="/quintaldacultura/atividades">
                </map>
                <img id="over-doroteia" class="over" src="http://cmais.com.br/portal/quintal/images/indexNovo/over-imagens-filomena.png"  usemap="#over-doroteiaMap" style="display:none;"/>
                <map name="over-doroteiaMap">
                  <area id="map-doroteia" name="doroteia" title="imagens" alt="imagens" shape="poly" coords="81,4,3,38,3,274,211,276,210,97,220,76,124,11" href="http://tvcultura.cmais.com.br/sid/turminha-do-sid">
                </map>
                <img id="over-ludovico" class="over" src="http://cmais.com.br/portal/quintal/images/indexNovo/over-jogos-ludovico.png" usemap="#over-ludovicoMap" style="display:none;"/>
                <map name="over-ludovicoMap">
                  <area id="map-ludovico" name="ludovico" title="jogos" alt="jogos"  shape="poly" coords="115,4,221,5,227,54,291,111,306,154,294,172,280,174,242,303,113,331,87,358,41,365,3,351,0,289,26,253,12,175,7,99,15,31,20,11" href="/quintaldacultura/jogos">
                </map>
              </div>
              <!--/MENU PRINCIPAL-->
            </div>
            <!--/CONTEUDO WRAPPER-->
            <!--DESTAQUE JOGUINHOS -->
            <?php include_partial_from_folder('sites/quintaldacultura', 'global/destaque-joguinhos')            ?>
            <!--DESTAQUE JOGUINHOS -->
            <!--FOOTER QUINTAL-->
            <?php include_partial_from_folder('sites/quintaldacultura', 'global/footer')            ?>
            <!--/FOOTER QUINTAL-->
          </div>
          <!--/CONTEUDO-->
        </div>
        <!--/CONTENT-->
      </div>
      <!--/CONTENT WRAPPER-->
      <!--FOOTER-->
      <?php include_partial_from_folder('blocks', 'global/footer')
      ?>
      <!--/FOOTER-->
    </div>
    <!--/ALLWRAPPER-->
  </body>
</html>