(function() {

  //$('body').on('contextmenu', function(e){ return false; });

  $(document).ready(function() {

    $('#status').fadeIn('slow');

    var log, serverUrl, socket;
    
    //serverUrl = 'ws://200.136.27.32:443/quiz';
    //serverUrl = 'ws://172.20.1.79:4443/quiz';
    //serverUrl = 'ws://172.20.18.133:4443/secondscreen';
    //serverUrl = 'ws://200.136.27.32:4443/secondscreen';
    //serverUrl = 'ws://200.136.27.32:443/secondscreen';
    //serverUrl = 'ws://172.20.18.133:4442/secondscreen';
    serverUrl = 'ws://cmais.com.br:4442/secondscreen';
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
      console.log('socket open');
      $('.offline').hide();
      $('.online').show();
    };
    
    socket.onmessage = function(msg) {
      console.log(msg.data)
      if(msg){
        response = JSON.parse(msg.data);
        switch (response.action) {
          case "contentInfo":
            return contentInfo(response.data);
          case "appInfo":
            return appInfo(response.data);
          case "clientDisconnected":
            return clientDisconnected(response.data);
          case "clientConnected":
            return clientConnected(response.data);
        }
      }
      return;
    };

    socket.onclose = function(msg) {
      $('.offline').show();
      $('.online').hide();
      return;
    };

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

    contentInfo = function(data) {
      /*
      $('#result').load('ajax.html #test', function(result) {
        var variable = $('#result').html();
      });
      */
      var c = 'icon-align-left';
      if(data.type == 'people')
        c = 'icon-user';
      if(data.type == 'place')
        c = 'icon-map-marker';
      var html = '<div class="accordion-group"><div class="accordion-heading"><a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#id'+data.handler+'" rel1="'+data.id+'" rel2="'+data.source+'"><i class="'+c+' icon-white"></i>'+data.tag+'</a></div>';
      html += '<div id="id'+data.handler+'" class="accordion-body collapse"><div class="accordion-inner">';
      html += "";
      html += '</div></div></div>';
      $('#accordion2').prepend(html);
      $('#id'+data.handler).load(data.url);
      return;
    };

    appInfo = function(data) {
      // SENT CONTENT
      /*
      $('.numero').html(data.clients);
      $('.online').fadeTo('fast', 0.1, function() {
        $('.online').fadeTo('fast', 1, function() {
          $('.online').fadeTo('fast', 0.1, function() {
            $('.online').fadeTo('fast', 1);
          });
        });
      });
      */
      return;
    };

  });
}).call(this);

window.onload=function(){
  window.onbeforeunload = function(){        
    return "Atenção: Ao fechar essa janela você perderá as interações automaticas do programa.";        
  }
}

