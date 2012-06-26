<?php /*
<script>
$(function(){ //onready
  var m_tv_tvcultura = "";
  var m_tv_univesptv = "";
  var m_tv_multicultura = "";
  var m_tv_tvrtb = "";
  var m_radio_am = "";
  var m_radio_fm = "";
  var m_ar_tvcultura = "";
  var m_ar_univesptv = "";
  var m_ar_multicultura = "";
  var m_ar_tvrtb = "";
  $('.m_tv_tvcultura').click(function(){
    if(m_tv_tvcultura == ""){
      $.ajax({
        url: "<?php echo url_for("@ajax5");?>",
        data: "content=tvcultura",
        success: function(data) {
          m_tv_tvcultura = data;
          $('#tvcultura').html(m_tv_tvcultura);
          $('#tvcultura').show();
        }
      });
    }
    $('#tvcultura').html(m_tv_tvcultura);
    $('#tvcultura').show();
  });
  $('.m_tv_univesptv').click(function(){
    if(m_tv_univesptv == ""){
      $.ajax({
        url: "<?php echo url_for("@ajax5");?>",
        data: "content=univesptv",
        success: function(data) {
          m_tv_univesptv = data;
          $('#univesptv').html(m_tv_univesptv);
          $('#univesptv').show();
        }
      });
    }
    $('#univesptv').html(m_tv_univesptv);
    $('#univesptv').show();
  });
  $('.m_tv_multicultura').click(function(){
    if(m_tv_multicultura == ""){
      $.ajax({
        url: "<?php echo url_for("@ajax5");?>",
        data: "content=multicultura",
        success: function(data) {
          m_tv_multicultura = data
          $('#multicultura').html(m_tv_multicultura);
          $('#multicultura').show();
        }
      });
    }
    $('#multicultura').html(m_tv_multicultura);
    $('#multicultura').show();
  });
  $('.m_tv_tvrtb').click(function(){
    if(m_tv_tvrtb == ""){
      $.ajax({
        url: "<?php echo url_for("@ajax5");?>",
        data: "content=tvrtb",
        success: function(data) {
          m_tv_tvrtb = data
          $('#tvrtb').html(m_tv_tvrtb);
          $('#tvrtb').show();
        }
      });
    }
    $('#tvrtb').html(m_tv_tvrtb);
    $('#tvrtb').show();
  });
  
  $('.m_radio_am').click(function(){
    if(m_radio_am == ""){
      $.ajax({
        url: "<?php echo url_for("@ajax5");?>",
        data: "content=radioam",
        success: function(data) {
          m_radio_am = data
          $('#radio-cb').html(m_radio_am);
          $('#radio-cb').show();
        }
      });
    }
    $('#radio-cb').html(m_radio_am);
    $('#radio-cb').show();
  });
  $('.m_radio_fm').click(function(){
    if(m_radio_fm == ""){
      $.ajax({
        url: "<?php echo url_for("@ajax5");?>",
        data: "content=radiofm",
        success: function(data) {
          m_radio_fm = data
          $('#radio-fm').html(m_radio_fm);
          $('#radio-fm').show();
        }
      });
    }
    $('#radio-fm').html(m_radio_fm);
    $('#radio-fm').show();
  });
  
  $('.m_ar_tvcultura').click(function(){
    if(m_ar_tvcultura == ""){
      $.ajax({
        url: "<?php echo url_for("@ajax5");?>",
        data: "content=no-ar-tvcultura",
        success: function(data) {
          m_ar_tvcultura = data
          $('#ar-tvcultura').html(m_ar_tvcultura);
          $('#ar-tvcultura').show();
        }
      });
    }
    $('#ar-tvcultura').html(m_ar_tvcultura);
    $('#ar-tvcultura').show();
  });
  $('.m_ar_univesptv').click(function(){
    if(m_ar_univesptv == ""){
      $.ajax({
        url: "<?php echo url_for("@ajax5");?>",
        data: "content=no-ar-univesptv",
        success: function(data) {
          m_ar_univesptv = data
          $('#ar-univesptv').html(m_ar_univesptv);
          $('#ar-univesptv').show();
        }
      });
    }
    $('#ar-univesptv').html(m_ar_univesptv);
    $('#ar-univesptv').show();
  });
  $('.m_ar_multicultura').click(function(){
    if(m_ar_multicultura == ""){
      $.ajax({
        url: "<?php echo url_for("@ajax5");?>",
        data: "content=no-ar-multicultura",
        success: function(data) {
          m_ar_multicultura = data
          $('#ar-multicultura').html(m_ar_multicultura);
          $('#ar-multicultura').show();
        }
      });
    }
    $('#ar-multicultura').html(m_ar_multicultura);
    $('#ar-multicultura').show();
  });
  $('.m_ar_tvrtb').click(function(){
    if(m_ar_tvrtb == ""){
      $.ajax({
        url: "<?php echo url_for("@ajax5");?>",
        data: "content=no-ar-tvrtb",
        success: function(data) {
          m_ar_tvrtb = data
          $('#ar-tvrtb').html(m_ar_tvrtb);
          $('#ar-tvrtb').show();
        }
      });
    }
    $('#ar-tvrtb').html(m_ar_tvrtb);
    $('#ar-tvrtb').show();
  });

});
</script>
*/ ?>
    <!-- TOPO PORTAL -->
    <div id="topo-portal" class="topo-geral capa-topo">
      <!-- Barra Portal -->
      <div id="barra-portal">
        <h1><a href="http://cmais.com.br" title="cmais+ O portal de conteúdo da Cultura">cmais+ O portal de conteúdo da Cultura</a></h1>
        <!-- Barra Menu -->
        <div class="barra-menu">
          <!-- Menu Portal -->
          <ul id="menu-portal">
            <!-- Menu TV -->
            <li class="m-tv"><a href="#" class="filho m_tv_tvcultura" title="TV">TV<span></span></a>
              <div class="menu-aberto padrao tv grid3">
                <ul class="abas-menu abas">
                  <li class="neutro">
                    <p>escolha um canal</p>
                    <span></span>
                  </li>
                  <li class="tvcultura ativo"><a href="javascript:;" title="TV Cultura" class="m_tv_tvcultura">TV Cultura</a><span class="decoracao"></span></li>
                  <li class="univesptv"><a href="javascript:;" title="Univesp TV" class="m_tv_univesptv">Univesp TV</a><span class="decoracao"></span></li>
                  <li class="multicultura"><a href="javascript:;" title="multiCULTURA" class="m_tv_multicultura">multiCULTURA</a><span class="decoracao"></span></li>
                  <li class="tvrtb"><a href="javascript:;" title="TV R&aacute; Tim Bum" class="m_tv_tvrtb">TV R&aacute; Tim Bum</a><span class="decoracao"></span></li>
                </ul>
                <!-- Abas Conteudo -->
                <ul class="abas-conteudo">
                  <li id="tvcultura" class="filho"></li>
                  <li id="univesptv" class="filho" style="display:none;"></li>
                  <li id="multicultura" class="filho" style="display:none;"></li>
                  <li id="tvrtb" class="filho" style="display:none;"></li>
                </ul>
                <!-- /Abas Conteudo -->
              </div>
            </li>
            <!-- /Menu TV -->
            <!-- Menu Radio -->
            <li class="m-radio"><a href="#" class="filho m_radio_am" title="RADIO">R&Aacute;DIO<span></span></a>
              <div class="menu-aberto padrao radio grid3">
                <ul class="abas-menu abas">
                  <li class="neutro">
                    <p>escolha uma esta&ccedil;&atilde;o</p>
                    <span></span>
                  </li>
                  <li class="radio-cb"><a href="javascript:;" title="R&aacute;dio Cultura Brasil" class="m_radio_am">R&aacute;dio Cultura Brasil</a><span class="decoracao"></span></li>
                  <li class="radio-fm"><a href="javascript:;" title="R&aacute;dio FM" class="m_radio_fm">R&aacute;dio Cultura FM</a><span class="decoracao"></span></li>
                  <li class="radio-rtb"><a href="#radio-rtb" title="R&aacute;dio R&aacute; Tim Bum">R&aacute;dio R&aacute; Tim Bum</a><span class="decoracao"></span></li>
                  <li class="radio-cocorico"><a href="#radio-cocorico" title="TV R&aacute; Tim Bum">R&aacute;dio Cocoric&oacute;</a><span class="decoracao"></span></li>
                </ul>
                <!-- Abas Conteudo -->
                <ul class="abas-conteudo">
                  <li id="radio-cb" class="filho"></li>
                  <li id="radio-fm" class="filho" style="display:none;"></li>
                  <li id="radio-rtb" class="filho" style="display: none; ">
                    <a href="http://tvratimbum.cmais.com.br/radio" class="bg-Ratimbum"></a>
                  </li>
                  <li id="radio-cocorico" class="filho" style="display: none; ">
                    <a href="http://www.tvcultura.com.br/cocorico/radio/" class="bg-Cocorico"></a>
                  </li>
                </ul>
                <!-- /Abas Conteudo -->
              </div>
            </li>
            <!-- /Menu Radio -->
            <!-- Menu No Ar -->
            <li class="m-noar"><a class="filho m_ar_tvcultura" href="#" title="PROGRAMA&Ccedil;&Atilde;O">PROGRAMA&Ccedil;&Atilde;O<span></span></a>
              <div class="menu-aberto padrao ar grid3">
                <ul class="abas-menu abas">
                  <li class="neutro">
                    <p>escolha um canal</p>
                    <span></span>
                  </li>
                  <li class="tvcultura"><a href="javascript:;" title="TV Cultura" class="m_ar_tvcultura">TV Cultura</a><span class="decoracao"></span></li>
                  <li class="univesptv"><a href="javascript:;" title="Univesp TV" class="m_ar_univesptv">Univesp TV</a><span class="decoracao"></span></li>
                  <li class="multicultura"><a href="javascript:;" title="multiCULTURA" class="m_ar_multicultura">multiCULTURA</a><span class="decoracao"></span></li>
                  <li class="tvrtb"><a href="javascript:;" title="TV R&aacute; Tim Bum" class="m_ar_tvrtb">TV R&aacute; Tim Bum</a><span class="decoracao"></span></li>
                </ul>
                <!-- Abas Conteudo -->
                <ul class="abas-conteudo">
                  <li id="ar-tvcultura" class="filho"></li>
                  <li id="ar-univesptv" class="filho" style="display:none;"></li>
                  <li id="ar-multicultura" class="filho" style="display:none;"></li>
                  <li id="ar-tvrtb" class="filho" style="display:none;"></li>
                </ul>
                <!-- /Abas Conteudo -->
              </div>
            </li>
            <!-- /Menu No Ar -->

            <!-- Menu Editorias -->
            <li class="m-editorias"><a class="filho" href="#" title="CONTE&Uacute;DO">CONTE&Uacute;DO<span></span></a>
              <div class="menu-aberto padrao editorias">
                <ul class="abas">
                  <li class="neutro">
                    <p>escolha uma editoria</p>
                    <span></span>
                  </li>
                  <li class="m-arte-e-cultura"><a title="Arte &amp; Cultura" href="http://cmais.com.br/arte-e-cultura">Arte &amp; Cultura</a></li>
                  <li class="m-musica"><a title="Música" href="http://cmais.com.br/musica">Música</a></li>
                  <li class="m-infantil"><a title="+ Criança" href="http://cmais.com.br/infantil">+ Criança</a></li>
                  <li class="m-educacao"><a title="Educação" href="http://cmais.com.br/educacao">Educação</a></li>
                  <li class="m-jornalismo"><a title="Jornalismo" href="http://cmais.com.br/jornalismo">Jornalismo</a></li>
                </ul>
              </div>
            </li>
            <!-- /Menu Editorias -->

            <!-- Menu Videos -->
            <li class="m-videos"><a href="http://cmais.com.br/videos" title="VIDEOS">V&Iacute;DEOS</a></li>
            <!-- /Menu Videos -->

            <!-- Menu ao Vivo -->
            <li class="m-aovivo"><a href="http://cmais.com.br/aovivo" title="AO VIVO">AO VIVO</a></li>
            <!-- /Menu ao Vivo -->

            <!-- Menu Compartilhe -->
            <li class="m-compartilhe"><a class="filho" href="#" title="COMPARTILHE">Curtir e Seguir<span></span></a>
              <ul class="menu-aberto compartilhe">
                <li><a class="face" href="http://www.facebook.com/tvcultura" target="_blank" title="Facebook">Facebook</a></li>
                <li><a class="twitter" href="http://twitter.com/tvcultura" target="_blank" title="Twitter">Twitter</a></li>
                <li><a class="youtube" href="http://www.youtube.com/cultura" target="_blank" title="Youtube">Youtube</a></li>
                <li><a class="flickr" href="http://www.flickr.com/photos/televisaocultura" target="_blank" title="Flickr">Flickr</a></li>
              </ul>
            </li>
            <!-- /Menu Compartilhe -->

          </ul>
          <!-- /Menu-Portal -->

          <!-- Busca Portal -->
          <form class="busca-portal" action="/busca" method="post">
            <input type="hidden" name="site_id" id="site_id" value="<?php if((isset($site)) && (($site->type == "Programa Simples") || ($site->type == "Programa"))) echo $site->getId();?>" />
            <input class="ipt-txt" type="text" name="term" id="term" value="<?php if($_REQUEST['term']) echo $_REQUEST['term']; ?>" />
            <?php if($_REQUEST['filter']): ?>
            <input type="hidden" name="filter" id="filter" value="<?php echo $_REQUEST['filter']; ?>" />
            <?php endif; ?>
            <input class="ipt-submit" type="submit" value="OK" />
          </form>
          <!-- /Busca Portal -->

        </div>
        <!-- /Barra Menu -->

      </div>
      <!-- /Barra Portal -->

    </div>
    <!-- /TOPO PORTAL -->

    <?php /*
    <img style="display:none;" src="http://midia2.cmais.com.br/<?php if($section) echo $section->id; else echo "0"; ?>/<?php if($asset) echo $asset->id; else echo "0"; ?>/<?php echo $_SERVER['REMOTE_ADDR'] ?>/contador.gif" />
     */ ?>