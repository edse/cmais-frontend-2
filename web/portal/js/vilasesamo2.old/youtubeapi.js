/*
  $(document).ready(function() {
  //arrays para players multiplos
  var cont = 0;
  var player = new Array();
  var players_ids = new Array();
  var playing;
  var playing_id = false;
  
  onYouTubeIframeAPIReadyPlayer = function(obj, cont) {
    console.log("start"+cont);
    //console.log("obj:"+obj);
    //console.log("contador:"+cont);
    player[cont] = new YT.Player(obj);
    //console.log("player:"+player[cont]);
    player[cont].addEventListener("onStateChange", function(res){
      if(res.data == 1){
        $('#carrossel-interna-personagem').responsiveCarousel('stopSlideShow');
        $('#carrossel-interna-artigo').responsiveCarousel('stopSlideShow');
        playing = res.target;
        console.log('playing:'+playing);
      }
      if(res.data == 0){
        $('#carrossel-interna-personagem').responsiveCarousel('toggleSlideShow');
        $('#carrossel-interna-artigo').responsiveCarousel('toggleSlideShow');
      }
    });
  }
  
  $('#selector-interna-artigo  a').on('click', function (ev) {
    if(!$(this).hasClass('current')){
      playing.pauseVideo();
    } 
  });
  
  $('.videoorimage iframe').each(function(i){
    if($(this).attr('src').indexOf("youtube") != -1){
      cont++;
      console.log(cont);
      $(this).attr("id","player"+cont);
      onYouTubeIframeAPIReadyPlayer("player"+cont , cont)
    }
  });

  
});

*/
	 $(document).ready(function() {
	  //arrays para players multiplos
	  var cont = 0;
	  var player = new Array();
	  var players_ids = new Array();
	  var playing;
	  var playing_id = false;
	  
	  onYouTubeIframeAPIReadyPlayer = function(obj, cont) {
	    //console.log("start"+cont);
	    //console.log("obj:"+obj);
	    //console.log("contador:"+cont);
	    player[cont] = new YT.Player(obj);
	    //console.log("player:"+player[cont]);
	    player[cont].addEventListener("onStateChange", function(res){
	      if(res.data == 1){
	        $('#carrossel-interna-personagem').responsiveCarousel('stopSlideShow');
	        $('#carrossel-interna-artigo').responsiveCarousel('stopSlideShow');
	        playing = res.target;
	        //console.log('playing:'+playing.pauseVideo());
	      }
	      if(res.data == 0){
	        $('#carrossel-interna-personagem').responsiveCarousel('toggleSlideShow');
	        $('#carrossel-interna-artigo').responsiveCarousel('toggleSlideShow');
	      }
	    });
	  }
	  
	  $('.videoorimage iframe').each(function(i){
	    if($(this).attr('src').indexOf("youtube") != -1){
	      cont++;
	      $(this).attr("id","player"+cont);
	      onYouTubeIframeAPIReadyPlayer("player"+cont , cont)
	    }
	  });
	});