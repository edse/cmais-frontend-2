var cont=0;
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
      $('#id'+data.handler+'.accordion-body iframe').each(function(){
        $(this).attr("id", "player"+cont);
        cont++;
      })
    });
    
  };  
  
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

});
function getFrameID(id) {
    console.log("getFrameId")
    var elem = document.getElementById(id);
    if (elem) {
        if (/^iframe$/i.test(elem.tagName)) return id; //Frame, OK
        // else: Look for frame
        var elems = elem.getElementsByTagName("iframe");
        if (!elems.length) return null; //No iframe found, FAILURE
        for (var i = 0; i < elems.length; i++) {
            if (/^https?:\/\/(?:www\.)?youtube(?:-nocookie)?\.com(\/|$)/i.test(elems[i].src)) break;
        }
        elem = elems[i]; //The only, or the best iFrame
        if (elem.id) return elem.id; //Existing ID, return it
        // else: Create a new ID
        do { //Keep postfixing `-frame` until the ID is unique
            id += "-frame";
        } while (document.getElementById(id));
        elem.id = id;
        return id;
    }
    // If no element, return null.
    return null;
}

// Define YT_ready function.
var YT_ready = (function() {
    var onReady_funcs = [],
        api_isReady = false;
/* @param func function     Function to execute on ready
         * @param func Boolean      If true, all qeued functions are executed
         * @param b_before Boolean  If true, the func will added to the first
                                     position in the queue*/
    return function(func, b_before) {
        if (func === true) {
            api_isReady = true;
            for (var i = 0; i < onReady_funcs.length; i++) {
                // Removes the first func from the array, and execute func
                onReady_funcs.shift()();
            }
        }
        else if (typeof func == "function") {
            if (api_isReady) func();
            else onReady_funcs[b_before ? "unshift" : "push"](func);
        }
    }
})();
// This function will be called when the API is fully loaded

function onYouTubePlayerAPIReady() {
    YT_ready(true)
}

var players = {};
//Define a player storage object, to enable later function calls,
//  without having to create a new class instance again.
YT_ready(function() {
    $(".accordion-body + iframe[id]").each(function() {
        var identifier = this.id;
        var frameID = getFrameID(identifier);
        if (frameID) { //If the frame exists
            players[frameID] = new YT.Player(frameID, {
                events: {
                    "onReady": createYTEvent(frameID, identifier)
                }
            });
        }
    });
});


// Returns a function to enable multiple events
function createYTEvent(frameID, identifier) {
    return function (event) {
        var player = players[frameID]; // player object
        var the_div = $('#'+identifier).parent();
        the_div.children('.thumb').click(function() {
            var $this = $(this);
            $this.fadeOut().next().addClass('play');
            if ($this.next().hasClass('play')) {
                player.playVideo();
            }
        });
    }
}
// Load YouTube Frame API
(function(){ //Closure, to not leak to the scope
  var s = document.createElement("script");
  s.src = "http://www.youtube.com/player_api"; /* Load Player API*/
  var before = document.getElementsByTagName("script")[0];
  before.parentNode.insertBefore(s, before);
})();
