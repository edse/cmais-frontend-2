var iOS = ( navigator.userAgent.match(/(iPad|iPhone|iPod)/g) ? true : false );

$(document).ready(function() {
  $('.accordion-body').collapse('show');
  $('.accordion-body').collapse('hide');

  getParameter = function (name) {
    return decodeURI((RegExp(name + '=' + '(.+?)(&amp;|$)').exec(location.search)||[,null])[1]);
  }

  //arrays para players multiplos
  var cont = 0;
  var player = new Array();
  var players_ids = new Array();
  var playing;
  var playing_id = false;
  
  $('#status').fadeIn('slow');

  var log, serverUrl, socket;

  var interval = 0;
  var timeout = 0;
  var tryin   = 3;
  var mult    = 2;
  var interval_rank = 0;
  
  //serverUrl = 'ws://200.136.27.7:80/secondscreenqss';
  //serverUrl = 'ws://127.0.0.1:8181/secondscreenqss';
  //serverUrl = 'ws://200.136.27.8:80/secondscreenqss';
  serverUrl = 'ws://200.136.27.25:80/secondscreenqss';

  //var question_url  = "/web/questions.json";
  var question_url  = "/segundatela/secondscreenqss/questions.json";
  var ranking_today_url  = "/segundatela/secondscreenqss/ranking-today.json";
  var ranking_alltime_url  = "/segundatela/secondscreenqss/ranking-alltime.json";

  tryToConnect = function() {
    if (window.MozWebSocket) {
      socket = new MozWebSocket(serverUrl);
    } else if (window.WebSocket) {
      socket = new WebSocket(serverUrl);
    }else{
      alert("Your browser doesn't support Websockets.");
      return;
    }

    socket.onclose = function(msg) {
      startClock();
      $('#users').hide();
      $('#points').hide();
      return $('#status').removeClass('online').addClass('offline').html('desconectado');
    };

    socket.onopen = function(msg) {
      clearInterval(interval);
      $('#status').removeClass('offline').addClass('online').html('conectado');
      return sendToken({
        "token":  client_token,
        "name":  client_name
      });
    };

    socket.onmessage = function(msg) {
      if(msg){
        response = JSON.parse(msg.data);
        switch (response.action) {
          case "ping":
            return ping(response.data);
          case "questionInfo":
            return questionInfo(response.data, false, true);
          case "contentBan":
            return contentBan(response.data);
          case "questionBan":
            return questionBan(response.data);
          case "wrongAnswer":
            return wrongAnswer(response.data);
          case "correctAnswer":
            return correctAnswer(response.data);
        }
      }
      return;
    };
  };
  tryToConnect(serverUrl);

  contentBan = function(data) {
    if(data){
      $('#uid'+data).parent().remove();
    }
    return;
  };

  questionBan = function(data) {
    if(data){
      if( !iOS ){
        window.audio_tictac.pause();
        window.audio_wrong.play();
      }
      $('#uid'+data.uid+' .answers').find('.btn').each(function(index){
        $(this).removeClass('btn-primary').addClass("disabled");
      });
      window.clearInterval(window.interval);
      $('#uid'+data).parent().remove();
    }
    return;
  };

  ping = function(data) {
    $('#eurekas').html(data.points);
  }

  questionInfo = function(data, json, clock) {
    var btn_style = " disabled";
    if(clock){
      btn_style = " btn-primary";
    }
    var html =  '<!--pergunta chamada-->';
    html += '<div class="accordion-group">';
    html +=   '<div class="accordion-heading">';
    html +=     '<span class="cantoneira cant-perg-esq-sup"></span>';
    html +=     '<span class="cantoneira cant-perg-dir-sup"></span>';
    html +=     '<span class="cantoneira-esq-meio cant-perg-esq-meio"></span>';
    html +=     '<span class="cantoneira-dir-meio cant-perg-dir-meio"></span>';
    html +=     '<span class="cantoneira cant-perg-esq-inf"></span>';
    html +=     '<span class="cantoneira cant-perg-dir-inf"></span>';
    html +=     '<a class="accordion-toggle" data-toggle="collapse"  data-parent="#accordion2" href="#uid'+data.uid+'">';
    html +=     '<span class="seta"></span>';
    html +=       '<p>'+ data.question + '</p>';
    html +=     '</a>'
    html +=   '</div>'
    html +=   '<!--resposta-->';
    html +=   '<div id="uid'+data.uid+'" class="accordion-body collapse">';
    html +=       '<div style="display:block; margin:0 auto; width:100px;">';
    if(!json){
    html +=         '<span class="time label" >tempo: '+data.time+'s</span>';
    }
    html +=       '</div>';
    html +=     '<div class="accordion-inner">';
    html +=      '<ul class="answers">';
    var letras = new Array("A", "B", "C", "D");
    for(var i=0; i<data.answers.length; i++){
      html +=         '<li>'; 
      html +=          '<span class="cantoneira-b cant-item-esq letra">'+letras[i]+'</span>';
      html +=          '<span id="q'+data.uid+'a'+i+'" rel="'+data.uid+'" class="resposta"><p>' + data.answers[i].text + '</p></span>';
      html +=          '<span class="cantoneira-b cant-item-dir"></span>';
      html +=        '</li>';
    }
    html +=      '</ul>';
    html +=      '</div>';
    html +=    '</div>';
    html +=    '<!--resposta-->';
    html +=  '</div>';
    html +=  '<!--/pergunta chamada-->';
    $('#accordion2').prepend(html);

    if(!json){
      // Send Answer
      $('#uid'+data.uid+' .answers .resposta').live('click', function(){
        if(!$(this).parent().hasClass('disabled')){
          $(this).parent().find('li').each(function(index){
            $(this).css("background","#000");
          });
          var time = 0;
          //send answer            
          window.clearInterval(window.interval);
          if( !iOS ){
            window.audio_tictac.pause();
          };
          var payload = new Object();
          var data = new Object();
          payload.action = "answer";
          data.answer = $(this).find('p').html();
          data.question = $(this).attr('rel');
          data.time = time;
          payload.data = data;
          return socket.send(JSON.stringify(payload));
        }
      });
    } 

    if(!json && !iOS)
      document.getElementById('audio-ping').play();

    if(clock){
      $('#uid'+data.uid).collapse('show');
      if(window.interval){
        if( !iOS ){
          window.audio_tictac.pause();
        }
        window.clearInterval(window.interval);
      }
      window.interval = window.setInterval('tick()', 1000);
      if( !iOS ){
        window.audio_tictac.play();
      }
    }

    tick = function(){
      var t = $('#uid'+data.uid+' .time').html();
      var p = t.split('tempo: ');
      var time = parseInt(p[1]);
      time--;
      $('#uid'+data.uid+' .time').html('tempo: '+time+'s');
      if(time<1){
        if( !iOS ){
          window.audio_tictac.pause();
          window.audio_wrong.play();
        }
        $('#uid' + data.uid + ' ul li').css('background', '#666');
        $('#uid' + data.uid + ' ul li p').css('color', '#333');
        $('#uid' +data.uid+ ' .answers .resposta').die('click');
        window.clearInterval(window.interval);
        //send empty answer
        var payload;
        payload = new Object();
        payload.action = "answer";
        payload.data = "null";
        socket.send(JSON.stringify(payload));
      }
      else if(time==5){
        $('#uid'+data.uid+' .time').removeClass('label-warning').addClass('label-important');
      }
      else if(time==10){
        $('#uid'+data.uid+' .time').addClass('label-warning');
      }
    };
    return;
  };

  onYouTubeIframeAPIReadyPlayer = function(obj, cont) {
    player[cont] = new YT.Player(obj);
    player[cont].addEventListener("onStateChange", function(res){
      if(res.data == 1){
        playing = res.target;
      }
    });
  }

  // retrive sent questions by ajax
  $.ajax({
    url: question_url,
    dataType: 'json',
    success:function(json){
      //console.log(json);
      if(json!=null){
        $.each(json, function( key, value ) {
          if(!value.banned)
            questionInfo(value, true, false);
        });
      }
    }
  });

  //retrive ranking by ajax
  getRanking = function(){
    $.ajax({
      url: ranking_today_url,
      dataType: 'json',
      success:function(json){
        if(json!=null){
          $('#ranking-diario').html(null);
          for(var i=0; i<json.length; i++){
            var html_rank = '';
            html_rank +='<li style="list-style:none; border-bottom:1px solid #eeeeee; float:left; width:100%">';
            html_rank +=  '<span class="colocacao" style="margin-left: 0;">'+(i+1)+'º</span>';
            html_rank +=  '<span class="avatar '+json[i].avatar+'"> </span>';
            html_rank +=  '<span class="nome_colocacao">'+json[i].name+'</span>';
            html_rank +=  '<span class="eurekas">'+json[i].points+' eurekas</span>';
            html_rank += '</li>';
            $('#ranking-diario').append(html_rank);
          }
        }
      }
    });
    $.ajax({
      url: ranking_alltime_url,
      dataType: 'json',
      success:function(json){
        if(json!=null){
          $('#ranking-semanal').html(null);
          for(var i=0; i<json.length; i++){
            var html_rank = '';
            html_rank +='<li style="list-style:none; border-bottom:1px solid #eeeeee; float:left; width:100%">';
            html_rank +=  '<span class="colocacao" style="margin-left: 0;">'+(i+1)+'º</span>';
            html_rank +=  '<span class="avatar '+json[i].avatar+'"> </span>';
            html_rank +=  '<span class="nome_colocacao">'+json[i].name+'</span>';
            html_rank +=  '<span class="eurekas">'+json[i].points+' eurekas</span>';
            html_rank += '</li>';
            $('#ranking-semanal').append(html_rank);
          }
        }
      }
    });
  }
  window.getRanking();
  interval_rank = setInterval(function(){
    window.getRanking();
  }, 120000);//120000ms = 2min

  startClock = function(){
    tryin = (tryin+mult)*3;
    clearInterval(interval);
    interval = setInterval(function(){
      if(tryin>1){
        tryin--;
        $('#tryin-v').html(tryin);
      }else{
        clearInterval(interval);
        if(mult<3){
          mult++;
          tryToConnect();
        }
      }
    }, 1000);
  }

  wrongAnswer = function(data) {
    if(!iOS){
      window.audio_tictac.pause();
      window.audio_wrong.currentTime = 0;
      window.audio_wrong.play();
    }
    $('#uid'+data.question+' ul li').css('background', 'red');
    $('#uid'+data.question+' li:nth-child('+data.correct_index+')').css('background','green');
    $('#eurekas').html(data.points);
    $('#uid'+data.question+' .answers .resposta').die('click');
  };

  correctAnswer = function(data) {
    if(!iOS){
      window.audio_tictac.pause();
      window.audio_correct.currentTime = 0;
      window.audio_correct.play();
    }
    $('#uid'+data.question+' ul li').css('background', 'red');
    $('#uid'+data.question+' li:nth-child('+data.correct_index+')').css('background','green');
    $('#eurekas').html(data.points);
    $('#uid'+data.question+' .answers .resposta').die('click');
  };

  function sendToken(info){
    var payload;
    payload = new Object();
    payload.action = "token";
    data = new Object();
    data.token = info.token;
    data.name = info.name;
    payload.data = data;
    return socket.send(JSON.stringify(payload));
  }

  $('.accordion-body').live('hidden', function() {
    if(playing)
      playing.pauseVideo();
    $(this).prev().find('.seta').removeClass('seta-hide');  
  });

  $('.accordion-body').live('shown', function() { 
    //scroll
    $(this).prev().find('.seta').addClass('seta-hide'); 
    //var el = $(this).parent();
    var el = $('.hero-unit');
    if($('.navbar-fixed-top').css('position') == "static"){
      $('html, body').animate({
          scrollTop: el.offset().top
      }, "fast");
    }
    else{
      $('html, body').animate({
          scrollTop: el.offset().top
      }, "fast");
    }
  });
  
  $('.accordion').collapse({
    toggle: true
  });

});
