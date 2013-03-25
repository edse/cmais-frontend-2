(function() {

  $(document).ready(function() {

    $('#status').fadeIn('slow');

    var log, serverUrl, socket;

    var timeout = 0;
    var tryin   = 3;
    var mult    = 0;
    
    serverUrl = 'ws://200.136.27.32:80/secondscreen';
    
    startClock = function(){
      tryin = (tryin+mult)*3;
      interval = setInterval(function(){
        if(tryin>1){
          tryin--;
          $('#tryin-v').html(tryin);
        }else{
          clearInterval(interval);
          if(mult<100){
            mult++;
            $('#tryin-v').html("0");
            tryToConnect();
          }else{
            $('#tryin-p').hide();
          }
        }
      }, 1000);
    }

    tryToConnect = function() {
      if (window.MozWebSocket) {
        socket = new MozWebSocket(serverUrl);
      } else if (window.WebSocket) {
        socket = new WebSocket(serverUrl);
      }else{
        $('.offline').html("Erro");
        $('.tryin-p').html("Seu browser não suporta websockets e também não tem o plugin Flash Player instalado.");
        return;
      }

      socket.onclose = function(msg) {
        $('.offline').show();
        $('#tryin-p').show();
        $('.online').css('display', 'none');
        startClock();
        return;
      };

      socket.onopen = function(msg) {
        $('#tryin-p').hide();
        $('.offline').hide();
        $('.online').show();
      };
      
      socket.onmessage = function(msg) {
        if(msg){
          //console.log(msg);
          response = JSON.parse(msg.data);
          switch (response.action) {
            case "contentInfo":
              return contentInfo(response.data);
            case "clientDisconnected":
              return clientDisconnected(response.data);
            case "clientConnected":
              return clientConnected(response.data);
            case "contentBan":
              return contentBan(response.data);
          }
        }
        return;
      };

    };
    tryToConnect(serverUrl);

    clientConnected = function(data) {
      $('.numero').html(data.clientCount);
      $('.online').fadeTo('fast', 0.1, function() {
        $('.online').fadeTo('fast', 1, function() {
          $('.online').fadeTo('fast', 0.1, function() {
            $('.online').fadeTo('fast', 1);
          });
        });
      });
      return;
    };

    clientDisconnected = function(data) {
      $('.numero').html(data.clientCount);
      $('.online').fadeTo('fast', 0.1, function() {
        $('.online').fadeTo('fast', 1, function() {
          $('.online').fadeTo('fast', 0.1, function() {
            $('.online').fadeTo('fast', 1);
          });
        });
      });
      return;
    };

    contentBan = function(data) {
      if(data){
        $('#id'+data).parent().remove();
      }
      return;
    };

    contentInfo = function(data) {
      var c = 'icon-align-left';
      if(data.type == 'people')
        c = 'icon-user';
      if(data.type == 'place')
        c = 'icon-map-marker';
      if(data.type == 'poll')
        c = 'icon-enquete';
      var html = '<div class="accordion-group"><div class="accordion-heading"><a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#id'+data.handler+'" rel1="'+data.id+'" rel2="'+data.source+'"><i class="'+c+' icon-white"></i>'+data.tag+'</a></div>';
      html += '<div id="id'+data.handler+'" class="accordion-body collapse"><div class="accordion-inner">';
      html += "";
      html += '</div></div></div>';
      $('#accordion2').prepend(html);
      //$('#id'+data.handler).load(data.url);
      $('#id'+data.handler).html('<p></p><p style="text-align: center"><iframe allowfullscreen="" frameborder="0" height="390" src="http://www.youtube.com/embed/7u_-AgRQDVE?wmode=transparent&amp;rel=0#t=0m0s" title="PMG 030_poesia_bertold_brecht" width="640"></iframe></p><p style="text-align: justify">Se os tubarÃµes fossem homens, eles seriam mais gentÃ­s com os peixes pequenos. Se os tubarÃµes fossem homens, eles fariam construir resistentes caixas do mar, para os peixes pequenos com todos os tipos de alimentos dentro, tanto vegetais, quanto animais. Eles cuidariam para que as caixas tivessem Ã¡gua sempre renovada e adotariam todas as providÃªncias sanitÃ¡rias cabÃ­veis se por exemplo um peixinho ferisse a barbatana, imediatamente ele faria uma atadura a fim de que nÃ£o moressem antes do tempo. Para que os peixinhos nÃ£o ficassem tristonhos, eles dariam cÃ¡ e lÃ¡ uma festa aquÃ¡tica, pois os peixes alegres tem gosto melhor que os tristonhos.</p><p style="text-align: justify">Naturalmente tambÃ©m haveria escolas nas grandes caixas, nessas aulas os peixinhos aprenderiam como nadar para a guela dos tubarÃµes. Eles aprenderiam, por exemplo a usar a geografia, a fim de encontrar os grandes tubarÃµes, deitados preguiÃ§osamente por aÃ­. Aula principal seria naturalmente a formaÃ§Ã£o moral dos peixinhos. Eles seriam ensinados de que o ato mais grandioso e mais belo Ã© o sacrifÃ­cio alegre de um peixinho, e que todos eles deveriam acreditar nos tubarÃµes, sobretudo quando esses dizem que velam pelo belo futuro dos peixinhos. Se encucaria nos peixinhos que esse futuro sÃ³ estaria garantido se aprendessem a obediÃªncia. Antes de tudo os peixinhos deveriam guardar-se antes de qualquer inclinaÃ§Ã£o baixa, materialista, egoÃ­sta e marxista. E denunciaria imediatamente os tubarÃµes se qualquer deles manifestasse essas inclinaÃ§Ãµes.</p<p style="text-align: justify">Se os tubarÃµes fossem homens, eles naturalmente fariam guerra entre si a fim de conquistar caixas de peixes e peixinhos estrangeiros.As guerras seriam conduzidas pelos seus prÃ³prios peixinhos. Eles ensinariam os peixinhos que, entre os peixinhos e outros tubarÃµes existem gigantescas diferenÃ§as. Eles anunciariam que os peixinhos sÃ£o reconhecidamente mudos e calam nas mais diferentes lÃ­nguas, sendo assim impossÃ­vel que entendam um ao outro. Cada peixinho que na guerra matasse alguns peixinhos inimigos da outra lÃ­ngua silenciosos, seria condecorado com uma pequena ordem das algas e receberia o tÃ­tulo de herÃ³i.</p>z<p style="text-align: justify">Se os tubarÃµes fossem homens, haveria entre eles naturalmente tambÃ©m uma arte, haveria belos quadros, nos quais os dentes dos tubarÃµes seriam pintados em vistosas cores e suas guelas seriam representadas como inocentes parques de recreio, nas quais se poderia brincar magnificamente. Os teatros do fundo do mar mostrariam como os valorosos peixinhos nadam entusiasmados para as guelas dos tubarÃµes.A mÃºsica seria tÃ£o bela, tÃ£o bela, que os peixinhos sob seus acordes e a orquestra na frente, entrariam em massa para as guelas dos tubarÃµes sonhadores e possuÃ­dos pelos mais agradÃ¡veis pensamentos. TambÃ©m haveria uma religiÃ£o ali.</p><p style="text-align: justify">Se os tubarÃµes fossem homens, eles ensinariam essa religiÃ£o. E sÃ³ na barriga dos tubarÃµes Ã© que comeÃ§aria verdadeiramente a vida. Ademais, se os tubarÃµes fossem homens, tambÃ©m acabaria a igualdade que hoje existe entre os peixinhos, alguns deles obteriam cargos e seriam postos acima dos outros. Os que fossem um pouquinho maiores poderiam inclusive comer os menores, isso sÃ³ seria agradÃ¡vel aos tubarÃµes, pois eles mesmos obteriam assim mais constantemente maiores bocados para devorar. E os peixinhos maiores que deteriam os cargos valeriam pela ordem entre os peixinhos para que estes chegassem a ser, professores, oficiais, engenheiros da construÃ§Ã£o de caixas e assim por diante. Curto e grosso, sÃ³ entÃ£o haveria civilizaÃ§Ã£o no mar, se os tubarÃµes fossem homens.</p><p style="text-align: justify"><strong>Sobre o autor:<br></strong>Bertolt Brecht (1898-1956) foi um dramaturgo, poeta e encenador alemÃ£o do sÃ©culo XX. Seus trabalhos artÃ­sticos e teÃ³ricos influenciaram profundamente o teatro contemporÃ¢neo, tornando-o mundialmente conhecido a partir das apresentaÃ§Ãµes de sua companhia o "Berliner Ensemble" realizadas em Paris durante os anos 1954 e 1955.</p><p></p><br /><a href="http://cmais.com.br" target="_blank"><img src="http://cmais.com.br/portal/images/capaPrograma/cocorico/logocmais.png" style="margin-bottom:15px;" /></a>');
      return;
    };

  });
}).call(this);



  //yotube API
  var tag = document.createElement('script');
  tag.src = "http://www.youtube.com/iframe_api";
  var firstScriptTag = document.getElementsByTagName('script')[0];
  firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
  //arrays para players multiplos
  var player = new Array();
  var cont = 0;
  var players = new Array();
  var playing = false; 
  function checkState(res){
    if(res.data==1){
      playing=players[i].attr("id");
    }
  }
  function onYouTubeIframeAPIReady() {
    console.log("startei");
    $('.accordion-body iframe').each(function(i){
      $(this).attr("id","player"+i);
      players[i] = $("#player"+i);
    })
    for(var i=0; i < players.length; i++){
      player[i] = new YT.Player(players[i].attr("id"));
      player[i].addEventListener("onStateChange", function(res){
        if(res.data == 1){
          var i = res.target.a.id.substring(6,7);
          playing = player[i];
        }
      });
    }
  }  
$(document).ready(function() {
  $('#myTab a').click(function(e) {
    e.preventDefault();
    $(this).tab('show');
  });

  // colocando e tirando ativo
  $('.accordion-body').live('hidden', function() {
    //remove barra ativa
    $(this).prev().find('a').removeClass('ativo');
  });

  $(".accordion-body").live("shown", function(){
    //player stop
    if(playing)
      playing.pauseVideo();
    //remove barra ativa
    $(this).prev().find('a').addClass('ativo');
    //scroll
    var el = $(this).parent();
    $('html, body').animate({
      scrollTop: el.offset().top
    }, "fast");
  });
  
    
  
  /*
  $('.accordion-body').on('hidden', function() {
    //remove barra ativa
    $(this).prev().find('a').removeClass('ativo');
  });
  
  $('.accordion-body').on('show', function() {
    //player stop
    if(playing)
      playing.pauseVideo();
    //remove barra ativa
    $(this).prev().find('a').addClass('ativo');
    //scroll
    var el = $(this).parent();
    $('html, body').animate({
      scrollTop: el.offset().top
    }, "fast");
  });
  */

  // padding ultimo conteudo
  $('.accordion-body').each(function() {
    $(this).find('p:last').css('padding-bottom', '15px');
  });

});

/*
window.onload=function(){
  window.onbeforeunload = function(){        
    return "Atenção: Ao fechar essa janela você perderá as interações automaticas do programa.";        
  }
}
*/