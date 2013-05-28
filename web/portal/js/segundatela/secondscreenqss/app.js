var iOS = ( navigator.userAgent.match(/(iPad|iPhone|iPod)/g) ? true : false );

$(document).ready(function() {
  $('.accordion-body').collapse('show');
  $('.accordion-body').collapse('hide');

  getParameter = function (name) {
    return decodeURI((RegExp(name + '=' + '(.+?)(&amp;|$)').exec(location.search)||[,null])[1]);
  }

  /*
  verifyToken = function(token) {
    $.ajax({
      url: "./sign-in/token.php",
      data: {
        token: token,
        app: "secondscreenqss"
      },
      type: "POST",
      dataType: "json",
      success:function(json){
        if(json.status == "success"){
          client_name = json.name;
          client_email = json.email;
          client_avatar = json.avatar;
          //$('#hello-alert').fadeIn('slow');
          //$('#login-alert-message').html(json.message);
        }
        else{
          self.location.href='./sign-in';
        }
      }
    });
  }
  verifyToken(client_token);
  */
  
  //arrays para players multiplos
  var cont = 0;
  var player = new Array();
  var players_ids = new Array();
  var playing;
  var playing_id = false;
  
  $('#status').fadeIn('slow');

  var log, serverUrl, socket;

  var interval = 0;
  //var fakeInterval = 0;
  var timeout = 0;
  var tryin   = 3;
  var mult    = 2;
  
  serverUrl = 'ws://200.136.27.7:80/secondscreenqss';

  var question_url  = "/segundatela/secondscreenqss/questions.json";

  
  tryToConnect = function() {
    if (window.MozWebSocket) {
      socket = new MozWebSocket(serverUrl);
    } else if (window.WebSocket) {
      socket = new WebSocket(serverUrl);
    }else{
      alert("Your browser doesn't support Websockets.");
      //$('.offline').html("Error");
      //$('.tryin-p').html("Your browser doesn't support Websockets.");
      return;
    }

    socket.onclose = function(msg) {
      //$('#tryin-p').show();
      startClock();
      $('#users').hide();
      $('#points').hide();
      return $('#status').removeClass('online').addClass('offline').html('desconectado');
    };

    socket.onopen = function(msg) {
      clearInterval(interval);
      //clearInterval(fakeInterval);
      //$('#tryin-p').hide();
      //$('#users a').addClass('btn-success').css('opacity', 1);
      $('#users a').css('opacity', 1);
      $('#users').show();
      $('#points a').css('opacity', 1);
      $('#points').show();
      //$('#status a').removeClass("btn-danger").addClass('btn-success').css('opacity', 1).html('conectado');
      $('#status').removeClass('offline').addClass('online').html('conectado');
      return sendToken({
        "token":  client_token,
        "name":  client_name,
        "email":  client_email,
        "avatar":  client_avatar
      });
      //return $('#status a').css('opacity', 1).html('conectado');
    };
    
    socket.onmessage = function(msg) {
      if(msg){
        //console.log(msg);
        response = JSON.parse(msg.data);
        switch (response.action) {
          case "ping":
            return ping(response.data);
          //case "contentInfo":
            //return contentInfo(response.data, false);
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
    /*
    if(data){
      $('#ajax-loader-qss').hide(); 
      //$('#watching').html(data.users);
      //$('#eurekas').html(data.userRanking);
      var info = data.ranking;
      var c = 0;
      $('#ranking-diario').html(null);
      
       
          
      for(id in info) {
        name = info[id][0];
        points = info[id][1];
        avatar = info[id][2];
        if(name){
          c++;
          var html_rank = '<!--posicao-->'
          html_rank +='<li style="list-style:none; border-bottom:1px solid #eeeeee; float:left; width:100%">'
          html_rank +=  '<span class="colocacao" style="margin-left: 0;">'+c+'º</span>'
          html_rank +=  '<span class="avatar '+avatar+'"></span>'
          html_rank +=  '<span class="nome_colocacao">'+name+'</span> '
          html_rank +=  '<span class="eurekas">'+points+' eurekas</span>'
          html_rank += '</li>'
          html_rank += '<!--/posicao-->'
          $('#ranking-diario').append(html_rank);
          //$('#rankingTable').append('<tr><td>'+c+'</td><td>'+info[id][2]+'</td><td>'+info[id][0]+'</td><td>'+info[id][1]+'</td></tr>');
        }        
      }
      
      //$('#ranking').fadeIn('slow');
      //$('#rankingTable').html(data.users);
    }
    */
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
    //html +=         '<span class="points label label-important" style="margin-left: 5px;">'+data.level+'</span>';
    //html +=         '<span class="points label label-important" style="margin-left: 5px;">'+data.points+' Eurekas!</span>';
    html +=       '</div>';
    html +=     '<div class="accordion-inner">';
    //if(clock){
      //console.log(data)
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
    //}
    html +=      '</div>';
    html +=    '</div>';
    html +=    '<!--resposta-->';
    html +=  '</div>';
    html +=  '<!--/pergunta chamada-->';
    
    
  
    /*
    var html = '<div class="accordion-group"><div class="accordion-heading"><a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#uid'+data.uid+'"><i class="icon-question-sign icon-white"></i> '+data.question+'</a></div>';
    html += '<div id="uid'+data.uid+'" class="accordion-body collapse"><div class="accordion-inner">';
    html += '<div class="question-info" style="float: right;">';
    html += '<span class="level label label-success" style="margin-left: 5px;">'+data.points+' Eurekas!</span>';
    html += '<span class="points label label-info" style="margin-left: 5px;">'+data.level+'</span>';
    html += '<span class="time label" style="margin-left: 5px;">tempo: '+data.time+'s</span>';
    html += '</div>';
    html += '<div class="page-header" style="margin-top: -40px;"><h1 class="question-text" style="margin-top: 40px;">'+data.question+'</h1></div>';
    if(clock){
      //html += '<p class="lead">Answers:</p>';
      html += '<ul class="answers media-list">';
      for(var i=0; i<data.answers.length; i++){
        html += '<li class="answer" id="q'+data.uid+'a'+i+'" style="margin-top: 25px;"><a class="btn'+btn_style+'" rel="'+data.uid+'">';
        html += '<span>'+data.answers[i].text+'</span></a></li>';
      }
      html += '</ul>';
    }
    html += '</div>';
    html += '</div></div></div>';
    */
    $('#accordion2').prepend(html);
    
    if(!json){
      // Send Answer
      $('#uid'+data.uid+' .answers .resposta').live('click', function(){
      //$(".answers .resposta").live('click', function(){
        //console.log('---'+$(this).attr('rel'));
        if(!$(this).parent().hasClass('disabled')){
          $(this).parent().find('li').each(function(index){
            $(this).css("background","#000");
          });
          //$(this).removeClass('btn-primary').addClass('btn-warning');
          //remaining time
          //var t = $(this).parent().parent().parent().parent().parent().find('.accordion-body .time').html();
          //var p = t.split('tempo: ');
          //var time = parseInt(p[1]);
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
      //$('.accordion-body').collapse('hide');
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
        /*
        $('#uid'+data.uid+' .answers').find('.btn').each(function(index){
          $(this).removeClass('btn-primary').addClass("disabled");
        });
        */
        $('#uid' + data.uid + ' ul li').css('background', '#666');
        $('#uid' + data.uid + ' ul li p').css('color', '#333');
        $('#uid' +data.uid+ ' .answers .resposta').die('click');
        /*
        $('#uid'+data.uid+' .answers').find('.resposta').each(function(index){
          $(this).parent().addClass("disabled");
        });
        */
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
    //console.log("start"+cont);
    //console.log("obj:"+obj);
    //console.log("contador:"+cont);
    player[cont] = new YT.Player(obj);
    //console.log("player:"+player[cont]);
    player[cont].addEventListener("onStateChange", function(res){
      if(res.data == 1){
        playing = res.target;
        //console.log('playing:'+playing);
      }
    });
  }
  
  /* retrive sent contents by ajax
  $.ajax({
    url: content_url,
    dataType: 'json',
    success:function(json){
      //console.log(json);
      if(json!=null){
        $.each(json, function( key, value ) {
          if(!value.banned)
            contentInfo(value, true);
        });
      }
    }
  });
  */
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

  startClock = function(){
    tryin = (tryin+mult)*3;
    clearInterval(interval);
    interval = setInterval(function(){
      console.log(tryin);
      if(tryin>1){
        tryin--;
        $('#tryin-v').html(tryin);
      }else{
        clearInterval(interval);
        //tryToConnect();
        if(mult<3){
          mult++;
          $('#tryin-v').html("0");
          tryToConnect();
        }else{
          //fakeService();
          $('#tryin-p').hide();
        }
      }
    }, 1000);
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
  
  //$(".accordion").collapse();
  
  $('.accordion').collapse({
    toggle: true
  });

  //
  /*
  // Send Answer
  $('.answers .resposta').live('click', function(){
  //$(".answers .resposta").live('click', function(){
    console.log('---'+$(this).attr('rel'));
    if(!$(this).parent().hasClass('disabled')){
      $(this).parent().parent().find('li').each(function(index){
        $(this).css("background","#ccc");
      });
      //$(this).removeClass('btn-primary').addClass('btn-warning');
      //remaining time
      //var t = $(this).parent().parent().parent().parent().parent().find('.accordion-body .time').html();
      //var p = t.split('tempo: ');
      //var time = parseInt(p[1]);
      var time = 0;
      //send answer
      window.clearInterval(window.interval);
      window.audio_tictac.pause();
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
  */
  wrongAnswer = function(data) {
    if( !iOS ){
      window.audio_tictac.pause();
      window.audio_wrong.currentTime = 0;
      window.audio_wrong.play();
    }
    //$('#uid'+data.question+' .answer a').removeClass('btn-primary').addClass('btn-danger');
    $('#uid'+data.question+' ul li').css('background', 'red');
    $('#uid'+data.question+' li:nth-child('+data.correct_index+')').css('background','green');
    $('#eurekas').html(data.points);
    $('#uid'+data.question+' .answers .resposta').die('click');
    //$('#uid'+data.question+' .resposta').removeAttr('href');
    /*
    $('#points').fadeTo('fast', 0.1, function() {
      $('#points').fadeTo('fast', 1);
    });
    */
  };

  correctAnswer = function(data) {
    if( !iOS ){
      window.audio_tictac.pause();
      window.audio_correct.currentTime = 0;
      window.audio_correct.play();
    }
    //$('#uid'+data.question+' .answer a').removeClass('btn-primary').addClass('btn-danger');
    //$('#uid'+data.question+' .answer:nth-child('+data.correct_index+') a').removeClass('btn-primary').removeClass('btn-warning').addClass('btn-success');
    $('#uid'+data.question+' ul li').css('background', 'red');
    $('#uid'+data.question+' li:nth-child('+data.correct_index+')').css('background','green');
    $('#eurekas').html(data.points);
    $('#uid'+data.question+' .answers .resposta').die('click');
    /*
    $('#points').fadeTo('fast', 0.1, function() {
      $('#points').fadeTo('fast', 1);
    });
    */
  };

  function sendToken(info){
    //console.log('sendToken');
    var payload;
    payload = new Object();
    payload.action = "token";
    data = new Object();
    data.token = info.token;
    data.name = info.name;
    data.email = info.email;
    data.avatar = info.avatar;
    payload.data = data;
    return socket.send(JSON.stringify(payload));
  }

});