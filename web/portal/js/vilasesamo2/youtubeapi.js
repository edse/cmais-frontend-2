$(document).ready(function() {
  //arrays para players multiplos
  var cont = 0;
  var player = new Array();
  var players_ids = new Array();
  var playing;
  var playing_id = false;
  
  $('.videoorimage iframe').each(function(i){
    if($(this).attr('src').indexOf("youtube") != -1){
      cont++;
      console.log(cont);
      $(this).attr("id","player"+cont);
      //onYouTubeIframeAPIReadyPlayer("player"+cont , cont)
    }
  });
  
  /*
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
  
  
  function onVerifyYoutube(){
    $('.accordion-body iframe').each(function() {
        if($(this).attr('src').indexOf('youtube') != -1){
          //console.log("go "+cont);
          cont++;
          $(this).attr('id','player'+cont);
          onYouTubeIframeAPIReadyPlayer('player'+cont , cont);
       }
    });   
  }
  setTimeout(onVerifyYoutube,5000);
*/  
});
