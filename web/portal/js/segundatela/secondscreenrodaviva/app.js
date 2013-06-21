$(document).ready(function() {
  //arrays para players multiplos
  var cont = 0;
  var player = new Array();
  var players_ids = new Array();
  var playing;
  var playing_id = false;
  
  $('#status').fadeIn('slow');

  var log, serverUrl, socket;

  var interval = 0;
  var fakeInterval = 0;
  var timeout = 0;
  var tryin   = 3;
  var mult    = 0;
  
  //serverUrl = 'ws://200.136.27.7:80/secondscreenrodaviva';
  serverUrl = 'ws://200.136.27.25:80/secondscreenrodaviva';
  
  var content_url = "/segundatela/secondscreenrodaviva/contents.json";
  var last_content_url = "/segundatela/secondscreenrodaviva/last-content.json";
  
  tryToConnect = function() {
    if (window.MozWebSocket) {
      socket = new MozWebSocket(serverUrl);
    } else if (window.WebSocket) {
      socket = new WebSocket(serverUrl);
    }else{
      $('.offline').html("Error");
      $('.tryin-p').html("Your browser doesn't support Websockets.");
      return;
    }

    socket.onclose = function(msg) {
      $('#tryin-p').show();
      startClock();
      $('#users').hide();
      
      $('.offline').show();
      $('.online').css('display', 'none');
      
      return $('#status a').removeClass("btn-success").addClass('btn-danger').html('disconnected');
    };

    socket.onopen = function(msg) {
      clearInterval(fakeInterval);
      $('#tryin-p').hide();
      $('#users').show();
      $('.offline').hide();
      $('.online').show();
      return $('#status a').removeClass("btn-danger").addClass('btn-success').html('connected');
    };
    
    socket.onmessage = function(msg) {
      if(msg){
        //console.log(msg);
        response = JSON.parse(msg.data);
        switch (response.action) {
          case "ping":
            return ping(response.data);
          case "contentInfo":
            return contentInfo(response.data, false);
          case "clientDisconnected":
            return clientDisconnected(response.data);
          case "clientConnected":
            return clientConnected(response.data);
          case "contentBan":
            return contentBan(response.data);
          case "onAir":
            return onAir(response.data);
          case "offAir":
            return offAir(response.data);
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

  ping = function(data) {
    if(data){
      $('#watching').html(data);
    }
  }

  contentInfo = function(data, json) {
    var c = 'icon-align-left';
    if(data.type == 'people')
      c = 'icon-user';
    if(data.type == 'place')
      c = 'icon-map-marker';
    if(data.type == 'poll')
      c = 'icon-enquete';
    var html = '<div class="accordion-group"><div class="accordion-heading"><a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#id'+data.uid+'" rel1="'+data.id+'" rel2="'+data.source+'"><i class="'+c+' icon-white"></i>'+data.tag+'</a></div>';
    html += '<div id="id'+data.uid+'" class="accordion-body collapse"><div class="accordion-inner">';
    html += "";
    html += '</div></div></div>';
    $('#accordion2').prepend(html);
    if(!json)
      document.getElementById('audio-ping').play();
    //console.log(data.url);
    $('#id'+data.uid).load(data.url, function(){
      $('#id'+data.uid+'.accordion-body iframe').each(function(i){
        if($(this).attr('src').indexOf("youtube") != -1){
          cont++;
          //console.log(cont);
          $(this).attr("id","player"+cont);
          onYouTubeIframeAPIReadyPlayer("player"+cont , cont)
        }
      });
    });
    return;
  };
  
  onYouTubeIframeAPIReadyPlayer = function(obj, cont) {
    console.log("start"+cont);
    console.log("obj:"+obj);
    console.log("contador:"+cont);
    player[cont] = new YT.Player(obj);
    console.log("player:"+player[cont]);
    player[cont].addEventListener("onStateChange", function(res){
      if(res.data == 1){
        playing = res.target;
        console.log('playing:'+playing);
      }
    });
  }
  
  // retrive sent contents by ajax
  $.ajax({
    //url:"http://cmais.com.br/segundatela/log/secondscreenapp/contents.json",
    //url:"/cache_master/cmais.com.br/segundatela/secondscreenapp/contents.json",
    url: content_url,
    dataType: 'json',
    success:function(json){
      if(json!=null){
        $.each(json, function( key, value ) {
          if(!value.banned)
            contentInfo(value, true);
        });
      }
    }
  });
  
  window.fakeService = function(){
    clearInterval(interval);
    $('.offline').hide();
    $('.online').show();
    fakeInterval = setInterval(function(){
      // 15s
      $.ajax({
        //url:"http://cmais.com.br/segundatela/log/secondscreenapp/last-content.json",
        //url:"/cache_master/cmais.com.br/segundatela/secondscreenapp/last-content.json",
        url: last_content_url,
        dataType: 'json',
        success:function(json){
          add = false;
          if(json.uid){
            if($('#accordion2 .accordion-group:first').find('.collapse').attr("id")!="id"+json.uid){
              add = true;
            }
          }
          if(add)
            contentInfo(json, false);
        }
      });
    }, 15000);
  }

  startClock = function(){
    tryin = (tryin+mult)*3;
    interval = setInterval(function(){
      if(tryin>1){
        tryin--;
        $('#tryin-v').html(tryin);
      }else{
        clearInterval(interval);
        if(mult<3){
          mult++;
          $('#tryin-v').html("0");
          tryToConnect();
        }else{
          fakeService();
          $('#tryin-p').hide();
        }
      }
    }, 1000);
  }

  $('.accordion-body').live('hidden', function() {
    if(playing)
      playing.pauseVideo();
  });
  
  $('.accordion-body').live('shown', function() { 
    //scroll
    var el = $(this).parent();
    if($('.navbar-fixed-top').css('position') == "static"){
      $('html, body').animate({
          scrollTop: el.offset().top
      }, "fast");
    }
    else{
      $('html, body').animate({
          scrollTop: el.offset().top-100
      }, "fast");
    }
  });
  
  $(".accordion").collapse();

});