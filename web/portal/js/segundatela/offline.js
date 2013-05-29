$(document).ready(function() {
  //arrays para players multiplos
  var cont = 0;
  var player = new Array();
  var players_ids = new Array();
  var playing;
  var playing_id = false;
  
  $('#status').fadeIn('slow');

  contentInfo = function(data) {
    //console.log("<<<<<");
    var c = 'icon-align-left';
    if(data.type == 'people')
      c = 'icon-user';
    if(data.type == 'place')
      c = 'icon-map-marker';
    if(data.type == 'poll')
      c = 'icon-enquete';
    if(data.source){
      var html = '<div class="accordion-group"><div class="accordion-heading"><a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#id'+data.handler+'" rel1="'+data.id+'" rel2="'+data.source+'"><i class="'+c+' icon-white"></i>'+data.tag+'</a></div>';
      html += '<div id="id'+data.handler+'" class="accordion-body collapse"><div class="accordion-inner">';
      html += "";
      html += '</div></div></div>';
      $('#accordion2').prepend(html).fadeIn('fast');
      //console.log(data.url);
      $('#id'+data.handler).load(data.url, function(){
        $('#id'+data.handler+'.accordion-body iframe').each(function(i){
          if($(this).attr('src').indexOf("youtube") != -1){
            cont++;
            //console.log(cont);
            $(this).attr("id","player"+cont);
            onYouTubeIframeAPIReadyPlayer("player"+cont , cont)
          }
        });      
      });
    }    
  }
  
  onYoutubeVerify (handler) {
    $('#id'+handler+'.accordion-body iframe').each(function(i){
      if($(this).attr('src').indexOf("youtube") != -1){
        cont++;
        $(this).attr("id","player"+cont);
        onYouTubeIframeAPIReadyPlayer("player"+cont , cont)
      }
    });
  } 
  
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
