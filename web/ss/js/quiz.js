(function() {

  //$('body').on('contextmenu', function(e){ return false; });

  $(document).ready(function() {

    $('#status').fadeIn('slow');

    var log, serverUrl, socket;
    
    serverUrl = 'ws://200.136.27.32:443/quiz';
    //serverUrl = 'ws://172.20.1.79:4443/quiz';
    //serverUrl = 'ws://200.136.27.32:7770/quiz';
    if (window.MozWebSocket) {
      socket = new MozWebSocket(serverUrl);
    } else if (window.WebSocket) {
      socket = new WebSocket(serverUrl);
    }else{
      $('#start').hide();
      $('#server-down').hide();
      $('#game').hide();
      $('#flash-needed').show();
      return;
    }
    
    socket.onopen = function(msg) {
      $('#start').hide();
      $('#status a').removeClass("btn-danger").addClass('btn-success').html('Conectado');
      $('#status').fadeIn('slow');
      $('#status-players').fadeIn('slow');
      $('#status-points').fadeIn('slow');
      $('#user-name').fadeIn('slow');
      return $('#name').focus();
    };
    
    socket.onmessage = function(msg) {
      if(msg){
        //console.log(msg);
        response = JSON.parse(msg.data);
        switch (response.action) {
          case "echo":
            return chat(response);
          case "statusMsg":
            return statusMsg(response.data);
          case "clientConnected":
            return clientConnected(response.data);
          case "clientDisconnected":
            return clientDisconnected(response.data);
          case "questionInfo":
            return questionInfo(response.data);
          case "startGame":
            return startGame(response.data);
          case "endGame":
            return endGame(response.data);
          case "gameover":
            return gameover2(response.data);
          case "serverInfo":
            return serverInfo(response.data);
          case "nameTaken":
            return nameTaken();
          case "emailTaken":
            return emailTaken();
          case "nameSet":
            return nameSet(response.data);
          case "wrongAnswer":
            return wrongAnswer(response.data);
          case "correctAnswer":
            return correctAnswer(response.data);
          case "ranking":
            return ranking2(response.data);
        }
      }
      return;
    };

    socket.onclose = function(msg) {
      //window.audio_tictac.pause();
      $('#status a').removeClass('btn-success').addClass('btn-danger').html('Desconectado');
      $('#start').hide();
      $('#status-players').hide();
      $('#status-points').hide();
      $('#game').hide();
      $('#user-name').hide();
      $('#next').hide();
      $('#first').hide();
      $('#ranking').hide();
      $('#gameover').hide();
      $('#server-down').show();
      return;
    };
    
    wrongAnswer = function(data) {
      //window.audio_tictac.pause();
      //window.audio_wrong.currentTime = 0;
      //window.audio_wrong.play();
      $('.answer a').removeClass('btn-primary').addClass('btn-danger');
      $('.answer:nth-child('+data+') a').removeClass('btn-primary').removeClass('btn-warning').addClass('btn-success');

      setTimeout(function(){
        $('#game').fadeOut("slow", function(){
          $('#next').fadeIn("slow");
        });
      }, 2000);
    };

    correctAnswer = function(data) {
      //window.audio_tictac.pause();
      //window.audio_correct.currentTime = 0;
      //window.audio_correct.play();
      $('.answer .btn-warning').removeClass('btn-warning').addClass('btn-success');
      $('.answer .btn').addClass('btn-danger');

      $('#status-points .points').html(data)
      $('#status-points').fadeTo('fast', 0.1, function() {
        $('#status-points').fadeTo('fast', 1);
      });
      setTimeout(function(){
        $('#game').fadeOut("slow", function(){
          $('#next').fadeIn("slow");
        });
      }, 2000);
    };

    clientConnected = function(data) {
      $('#status-players a').html('Jogadores: '+data.clientCount);
      $('#status-players').fadeTo('fast', 0.1, function() {
        $('#status-players').fadeTo('fast', 1);
      });
      return;
    };

    clientDisconnected = function(data) {
      $('#status-players a').html('Jogadores: '+data.clientCount);
      $('#status-players').fadeTo('fast', 0.1, function() {
        $('#status-players').fadeTo('fast', 1);
      });
      return;
    };

    nameSet = function(data) {
      if(data.name){
        $('#name').val(data.name);
        $('#user-name').hide();
        $('#first').fadeIn("slow");
      }
      return;
    };

    nameTaken = function() {
      $('#user-name .page-header :first').prepend('<div class="alert alert-error hide pull-right"><strong>Puxa, puxa que puxa!</strong> Outro jogador já entrou como <strong>'+$('#name').val()+'</strong>.</div>');
      $('#user-name .page-header :first .alert').fadeIn('slow');
      $('#name').focus();
      return;
    };

    emailTaken = function() {
      $('#user-name .page-header :first').prepend('<div class="alert alert-error hide pull-right"><strong>Puxa, puxa que puxa!</strong> Outro jogador já entrou com o email <strong>'+$('#email').val()+'</strong>.</div>');
      $('#user-name .page-header :first .alert').fadeIn('slow');
      $('#email').focus();
      return;
    };

    ranking2 = function(info) {
      //console.log(info);
      $('#rankingTable').html('');
      var c = 0;
      for(id in info) {
        c++;
        name = info[id][0];
        points = info[id][1];
        $('#rankingTable').append('<tr><td>'+c+'</td><td>'+name+'</td><td>'+points+'</td></tr>');
      }
      $('#ranking').fadeIn('slow');
      return;
    };

    gameInfo = function(gameinfo) {
      if(gameinfo.started){
        //$('#next').fadeIn("slow");
        $('#first').fadeIn("slow");
      }
      return;
    };

    startGame = function(data) {
      $('#questions-view .question').remove();
      $('.questions li').remove();
      $('#game').show();
      $('#first').show();
      //$('#next').show();
      return;
    };

    endGame = function(data) {
      $('#goback li').show();
      if(data.winner){
        $('.page-header').prepend('<div class="alert hide pull-right"><strong>Game Over!</strong> The winner was <strong>'+data.winner+'</strong> with <strong>'+data.points+'</strong> points.</div>');
      }else
        alert('Game Over!');
      return;
    };

    gameover2 = function(data) {
      $('#first').hide();
      $('#game').hide();
      $('#next').hide();
      $('#gameover').show();
      return;
    };

    questionInfo = function(data) {
      //<li class="active"><a rel="q2" class="left-button"><i class="icon-chevron-right"></i> Question #2</a></li>
      //data.question.question
      $('.questions li').removeClass('active');
      $('.questions').prepend('<li class="active"><a rel="q'+data.number+'" class="left-button"><i class="icon-chevron-right"></i> Pergunta #'+parseInt(parseInt(data.number)+1)+'</a></li>');
            
      var html = '<div id="q'+data.number+'" class="question span9" style="border: 3px double #eee; padding: 25px; margin-top: 10px;"><div class="question-info pull-right">';
      html += '<span class="level label label-success" style="margin-left: 5px;">nível: '+data.question.level+'</span>';
      html += '<span class="points label label-info" style="margin-left: 5px;">pontos: '+data.question.points+'</span>';
      html += '<span class="time label" style="margin-left: 5px;">tempo restante: '+data.question.time+'s</span></div><div class="page-header">';
      html += '<h1 class="question-text" style="margin-top: 40px;font-size: 26px;">'+data.question.question+'</h1></div>';
      html += '<p class="lead">Respostas:</p>';
      html += '<ul class="answers media-list">';
      for(var i=0; i<data.question.answers.length; i++){
        html += '<li class="answer" id="q'+data.number+'a'+i+'" style="margin-top: 25px;"><a class="btn btn-primary" rel="'+data.number+'">';
        html += '<span>'+data.question.answers[i].answer+'</span></a></li>';
      }
      html += '</ul></div>';
      
      $('#ranking').hide();
      $('#questions-view .question').hide();
      $('#questions-view').append(html);
      
      $('#game').fadeIn("fast", function(){
        $('#next').fadeOut("fast");
        $('#first').fadeOut("fast");
      });
      
      if(window.interval){
        //window.audio_tictac.pause();
        window.clearInterval(window.interval);
      }
      window.interval = window.setInterval('tick()', 1000);
      //window.audio_tictac.play();
      tick = function(){
        var t = $('#q'+data.number+' .time').html();
        var p = t.split('tempo restante: ');
        var time = parseInt(p[1]);
        time--;
        $('#q'+data.number+' .time').html('tempo restante: '+time+'s');
        if(time<1){
          //window.audio_tictac.pause();
          //window.audio_wrong.play();
          $('#q'+data.number+' .answers').find('.btn').each(function(index){
            $(this).removeClass('btn-primary').addClass("disabled");
          });
          window.clearInterval(window.interval);
          //send empty answer
          /*
          var payload;
          payload = new Object();
          payload.action = "answer";
          payload.data = "null";
          socket.send(JSON.stringify(payload));
          */
        }
        else if(time==5){
          $('#q'+data.number+' .time').removeClass('label-warning').addClass('label-important');
        }
        else if(time==10){
          $('#q'+data.number+' .time').addClass('label-warning');
        }
      };
      
      return;
    };

    function sendUserName(){
      if(($('#name').val()!="")&&($('#email').val()!="")&&($('#agree').is(':checked'))){
        $('#user-name .alert').remove();
        var payload;
        payload = new Object();
        data = new Object();
        payload.action = "name";
        data.name = $('#name').val();
        data.email = $('#email').val();
        payload.data = data;
        return socket.send(JSON.stringify(payload));
      }
      else{
        if($('#name').val()=="")
          return $('#name').focus();
        else if($('#email').val()=="")
          return $('#email').focus();
        else
          $('#agree').focus();
      }   
    }

    $('#send-name').click(function() {
      sendUserName();
    });

    $('#name').bind('keypress', function(e) {
      var code = (e.keyCode ? e.keyCode : e.which);
      if(code == 13 && this.value) {
        sendUserName();
      }
    });

    $('#email').bind('keypress', function(e) {
      var code = (e.keyCode ? e.keyCode : e.which);
      if(code == 13 && this.value) {
        sendUserName();
      }
    });

    $(".answer .btn").live('click', function(){
      if(!$(this).hasClass('disabled')){
        
        $(this).parent().parent().find('.btn').each(function(index){
          $(this).removeClass('btn-primary').addClass("disabled");
        });
        $(this).removeClass('btn-primary').addClass('btn-warning');
        
        //remaining time
        var t = $(this).parent().parent().parent().find('.question-info .time').html();
        var p = t.split('tempo restante: ');
        var time = parseInt(p[1]);
        
        //send answer
        window.clearInterval(window.interval);
        //window.audio_tictac.pause();
        var payload = new Object();
        var data = new Object();
        payload.action = "answer";
        data.answer = $(this).find('span').html();
        data.question = $(this).attr('rel');
        data.time = time;
        payload.data = data;
        return socket.send(JSON.stringify(payload));
      }
    });
    
    $(".left-button").live('click', function(){
      if($(this).attr('rel')!=null){
        $('.nav-list li').removeClass('active');
        $(this).parent().addClass('active');
        $("#game .question").each(function(index){
          $(this).hide();
        });
        $('#game #'+$(this).attr('rel')).show();
      }
      return true;
    });

  });
}).call(this);

window.onload=function(){
  window.onbeforeunload = function(){        
    return "Atenção: Ao fechar essa janela você perderá automaticamente seus pontos.";        
  }
}

