$(document).ready(function() {
  var log, serverUrl, socket;

  var interval = 0;
  var fakeInterval = 0;
  var timeout = 0;
  var tryin   = 3;
  var mult    = 0;
  
  serverUrl = 'ws://200.136.27.25:80/chatculturabrasil';
  //serverUrl = 'ws://172.20.80.2:80/chatapp';
  
  tryToConnect = function() {
    if (window.MozWebSocket) {
      socket = new MozWebSocket(serverUrl);
    } else if (window.WebSocket) {
      socket = new WebSocket(serverUrl);
    }else{
      $('.status').html("Erro: Seu browser não suporta websockets!");
      return;
    }

    socket.onclose = function(msg) {
      $('#tryin').html("10");
      $('.reconnect').show();
      $('.status').html('desconectado');
      $('.status').removeClass("text-success").addClass("text-danger");
      $('#input-name').prop('disabled', true);
      $('#input-comment').prop('disabled', true);
      $('#send').prop('disabled', true);
      startClock();
    };

    socket.onopen = function(msg) {
      clearInterval(fakeInterval);
      $('.reconnect').hide();
      $('#tryin').html("10");
      $('.status').html('conectado');
      $('.status').removeClass("text-danger").addClass("text-success");
      $('#input-name').prop('disabled', false);
      $('#input-comment').prop('disabled', false);
      $('#send').prop('disabled', false);
    };
    
    socket.onmessage = function(msg) {
      if(msg){
        response = JSON.parse(msg.data);
        switch (response.action) {
          case "ping":
            return ping(response.data);
          case "contentInfo":
            return contentInfo(response.data, false);
          case "contentInfoAll":
            return contentInfoAll(response.data);
        }
      }
      return;
    };

  };
  tryToConnect(serverUrl);

  ping = function(data) {
    if(data){
      $('#watching').html(data);
    }
  }

  contentInfo = function(data, json) {
    var html = '<tr id="id'+data.id+'"><td class="text-primary">'+data.time+'</td><td><strong>'+data.name+':</strong> '+data.comment+'</td></tr>';  
    $('#chat-content').append(html);
    $("#chat-content").scrollTop(document.getElementById('chat-content').scrollHeight+2); 
    return;
  };

  contentInfoAll = function(data) {
    $.each(data, function( key, value ) {
      console.log(value)
      contentInfo(value, true);
    });
    return;
  };

  startClock = function(){
    tryin = 10;
    interval = setInterval(function(){
      console.log(tryin);
      if(tryin>1){
        tryin--;
        $('#tryin').html(tryin);
      }else{
        clearInterval(interval);
        tryToConnect();
      }
    }, 1000);
  }

  $("textarea, input").keypress(function(event) {
    if(event.which == 13) {
      event.preventDefault();
      send();
    }
  });

  $("#send").click(function() {
    send();
  });

  function send() {
    if(!$("#input-name").val()){
      $("#input-name").focus();
      return;
    }
    if(!$("#input-comment").val()){
      $("#input-comment").focus();
      return;
    }

    var payload = new Object();
    var data = new Object();
    payload.action = "comment";
    data.name = $("#input-name").val();
    data.comment = $("#input-comment").val();
    payload.data = data;
    socket.send(JSON.stringify(payload));
    
    $("#input-comment").val("").focus();
  };

});