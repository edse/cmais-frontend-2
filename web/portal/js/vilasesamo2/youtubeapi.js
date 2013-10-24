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
  
  $('.container-itens a').click(function(){
      console.log('temho');
    //if(playing)
      //playing.pauseVideo(); 
  });
  if(playing)
      playing.pauseVideo(); 
  
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

  
});
