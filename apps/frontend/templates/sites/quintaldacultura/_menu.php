<div class="cabecalho">
  <div id="horario">
    <a class="cultura" href="http://tvcultura.cmais.com.br/grade" target="_blank">
      <img src="http://cmais.com.br/portal/quintal/images/logo-tv.png" />
      <h2>TV Cultura</h2>
      <p>segunda a sexta: 9h30 (reprise) <br>e 14h30 (inédito) • sábado: 8h45</p>      
      <span class="divisa"></span>
    </a>
    
    <a class="rtb" href="http://tvratimbum.cmais.com.br/grade" target="_blank">
      <img src="http://cmais.com.br/portal/quintal/images/logo-rtb.png" />
      <h2>TV Rá Tim Bum!</h2>
      <p>segunda a sexta: 7h • 1h</p>      
      <span class="divisa"></span>
    </a>
    
    <a class="agenda" href="/quintaldacultura/agenda">
      <h2><span class="sprite-ico-agenda"></span>Agenda</h2>
      <span class="divisa"></span>
    </a>
    
    <a class="dvd" href="javascript:;">
      <h2>DVD</h2>
    </a>
    
  </div>
  <h1><a href="http://cmais.com.br/quintaldacultura">Quintal da Cultura</a></h1>
  <ul>
    <li><a class="jogos" href="/quintaldacultura/jogos" title="Jogos"><span class="sprite-ico-jogos"></span>Jogos</a></li>
    <li><a class="videos" href="/quintaldacultura/videos" title="Vídeos"><span  class="sprite-ico-videos"></span>V&iacute;deos</a></li>
    <li><a class="musica" href="/quintaldacultura/musicas"><span  class="sprite-ico-musicas"></span>M&uacute;sicas</a></li>
    <li><a class="atividades" href="/quintaldacultura/diversao" title="Diversão"><span  class="sprite-ico-diversao"></span>Diversão</a></li>
    <li><a class="atividades" href="/quintaldacultura/turma" title="A Turma"><span  class="sprite-ico-aturma"></span>A Turma</a></li>
  </ul>
</div>

<!--modal para os pais-->
<div class="modal-dvd" style="display:none;">
  <div class="container-dvd">
    <p>
      A partir de agora, você está saindo da área exclusiva para crianças do<br>
        site Quintal da Cultura e entrando numa parte direcionada para adultos.<br>
        Então, preferimos que você fique brincando por aqui ou<br>
        chame o papai ou a mamãe para te acompanhar, tá combinado?
    </p>
    <a class="back" href="javascript:;" title="Volar para a brincadeira">voltar para a brincadeira!</a>
    <a class="access" href="http://cmais.com.br/quintaldacultura/dvd-do-quintal-da-cultura" target="_self" title="Acessar">acessar</a>  
  </div>
  <div class="modal-bac"></div>
</div>

<script>
$('.dvd').click(function(){
  $('.modal-dvd').fadeIn('fast');
});
$('.back').click(function(){
  $('.modal-dvd').hide();
});
</script>
<!--/modal para os pais-->