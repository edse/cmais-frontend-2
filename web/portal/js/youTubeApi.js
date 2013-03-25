$(document).ready(function() {
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
    // colocando e tirando ativo
    $('.accordion-body').on('hidden', function() {
      console.log("fechei");
      //remove barra ativa
      $(this).prev().find('a').removeClass('ativo');
    });
  
    $('.accordion-body').on('show', function() {
      console.log("abri");
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
  }  

  $('#myTab a').click(function(e) {
    e.preventDefault();
    $(this).tab('show');
  });

  

  // padding ultimo conteudo
  $('.accordion-body').each(function() {
    $(this).find('p:last').css('padding-bottom', '15px');
  });

});