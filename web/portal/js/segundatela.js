(function() {

  $(document).ready(function() {

    $('#status').fadeIn('slow');

    var log, serverUrl, socket;

    var interval = 0;
    var fakeInterval = 0;
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
      
      console.log("<<<<<");
      
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
      console.log(data.url);
      //$('#id'+data.handler).load(data.url);

      $.ajax({
        url:"http://cmais.com.br/ajax/fetchurl",
        data: {url: data.url},
        dataType: 'jsonp', // Notice! JSONP <-- P (lowercase)
        success:function(json){
          // do stuff with json (in this case an array)
          //alert(json);
          $('#id'+data.handler).html(json.html);
        },
        error:function(){
          alert("Error");
        },
      });

      /*
      $.ajax({
        url: "http://cmais.com.br/frontend_dev.php/ajax/fetchurl",
        data: {url: data.url},
        dataType: "jsonp",
        jsonp : "callback",
        jsonpCallback: "jsonpcallback"
      });
      
      function jsonpcallback(rtndata) {
        console.log(">>>>");
        console.log(rtndata);
        $('#id'+data.handler).html(rtndata.html);
      }
      */ 
      
      return;
    };
    
    // retrive sent contents by ajax
    $.ajax({
      url:"http://cmais.com.br/ajax/fetchurl",
      data: {url: "http://200.136.27.32:8080/log/contents.json"},
      dataType: 'jsonp',
      success:function(json){
        //console.log(json);
        $.each(json, function( key, value ) {
          //console.log(value)
          contentInfo(value);
        });
      }
    });
    
    
    window.fakeService = function(){
      clearInterval(interval);
      $('.offline').hide();
      $('.online').show();
      fakeInterval = setInterval(function(){
        // 30 em 30
        $.ajax({
          url:"http://cmais.com.br/ajax/fetchurl",
          data: {url: "http://200.136.27.32:8080/log/last-content.json"},
          dataType: 'jsonp',
          success:function(json){
            //console.log(json);
            console.log('1:');
            console.log($('#accordion2 .accordion-group:first').find('.collapse').attr("id"))
            console.log('2:');
            console.log(json.handler);
            add = false;
            if($('#accordion2 .accordion-group:first').find('.collapse').attr("id")!="id"+json.handler){
              add = true;
            }
            if(add)
              contentInfo(json);
          }
        });
        
      }, 30000);
    }

    
    

  });
}).call(this);



//yotube API
var tag = document.createElement('script');
tag.src = "//www.youtube.com/iframe_api";
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
  console.log("startei")
  $('.accordion-body iframe').on("each", function(i){
    $(this).attr("id","player"+i);
    players[i] = $("#player"+i);
  });
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
    if(playing)
      playing.pauseVideo();
  });

  $('.accordion-body').live('shown', function() { 
    //remove barra ativa
    $(this).prev().find('a').addClass('ativo');
    //scroll
    var el = $(this).parent();
    $('html, body').animate({
      scrollTop: el.offset().top
    }, "fast");
  });

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