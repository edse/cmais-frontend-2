//yotube API
var tag = document.createElement('script');
tag.src = "//www.youtube.com/iframe_api";
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
//arrays para players multiplos
var cont = 0;
var player = new Array();
var players_ids = new Array();
var playing=null;
var playing_id = false;
var cont =  0;
$(document).ready(function() {

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
    var html = '<div class="accordion-group"><div class="accordion-heading"><a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#id'+data.handler+'" rel1="'+data.id+'" rel2="'+data.source+'"><i class="'+c+' icon-white"></i>'+data.tag+'</a></div>';
    html += '<div id="id'+data.handler+'" class="accordion-body collapse"><div class="accordion-inner">';
    html += "";
    html += '</div></div></div>';
    $('#accordion2').prepend(html);
    //console.log(data.url);
    $('#id'+data.handler).load(data.url, function(){
      $('#id'+data.handler+'.accordion-body iframe').each(function(i){
        if($(this).attr('src').indexOf("youtube") != -1){
          $(this).attr("id","player"+cont);
          players_ids[i] = "player"+cont;
          cont++;
        }
      });
      onYouTubeIframeAPIReady()
  });  
  
  $('#myTab a').click(function(e) {
    e.preventDefault();
    $(this).tab('show');
  });
  
  // colocando e tirando ativo
  $('.accordion-body').live('hidden', function() {
    //remove barra ativa
    $(this).prev().find('a').removeClass('ativo');
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

}});
 
function checkState(res){
  if(res.data==1){
    playing_id=players_ids[i];
  }
}
function onYouTubeIframeAPIReady() {
  console.log("start");
  for(var i=0; i < players_ids.length; i++){
    player[i] = new YT.Player(players_ids[i]);
    console.log(player[i]);
    player[i].addEventListener("onStateChange", function(res){
      if(res.data == 1){
        playing = res.target;
        console.log('playing:');
        console.log(playing);
      }
    });
    
  }
} 