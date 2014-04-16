//IOS
iOS = false;
p = navigator.platform;
if( p === 'iPad' || p === 'iPhone' || p === 'iPhone Simulator' || p === 'iPod' )
  iOS = true;
console.log("iOS? "+iOS);

// polyfill for animation frame
( function() {
  
  var lastTime = 0;
  var vendors = ['ms', 'moz', 'webkit', 'o'];
  for(var x = 0; x < vendors.length && !window.requestAnimationFrame; ++x) {
    window.requestAnimationFrame = window[vendors[x] + 'RequestAnimationFrame'];
    window.cancelAnimationFrame = window[vendors[x] + 'CancelAnimationFrame'] || window[vendors[x] + 'CancelRequestAnimationFrame'];
  }
  if(!window.requestAnimationFrame) {
    console.log('!window.requestAnimationFrame');
    window.requestAnimationFrame = function(callback, element) {
      var currTime = new Date().getTime();
      var timeToCall = Math.max(0, 22 - (currTime - lastTime));
      var id = window.setTimeout(function() { callback(currTime + timeToCall);
      }, timeToCall);
      lastTime = currTime + timeToCall;
      return id;
    };
  }
  if(!window.cancelAnimationFrame) {
    window.cancelAnimationFrame = function(id) {
      clearTimeout(id);
    };
  }
}());

if(Modernizr.fullscreen){
  function RunPrefixMethod(obj, method) {
    var pfx = ["webkit", "moz", "ms", "o", ""];
    var p = 0, m, t;
    while (p < pfx.length && !obj[m]) {
      m = method;
      if (pfx[p] == "") {
        m = m.substr(0,1).toLowerCase() + m.substr(1);
      }
      m = pfx[p] + m;
      t = typeof obj[m];
      if (t != "undefined") {
        pfx = [pfx[p]];
        return (t == "function" ? obj[m]() : obj[m]);
      }
      p++;
    }
  
  }
}

// GAME START
var game = new Game();
var interval = null;
var gameInterval = null;
game.debug = true;

interv = function() {
  interval = setTimeout("game.mouse.moving = false; document.getElementById('moving').value = false; intervClear();", 1000);
};

intervClear = function() {
  clearInterval(interval)
};

stopGame = function() {
  clearInterval(gameInterval);
  
  game.started = false;
  stopSFX();
  //stopBGM();
  window.cancelAnimationFrame(game.interval);

  $('#home').addClass('active');
  $('#canvas, #canvas_bg, .abs, .control, #modal-success').hide();
  $('#play, .content, .container').show();
  $('#body').css('padding-top', '20px');
  $('#body').css('margin-bottom', '20px');
};

startGame = function() {  
  window.scrollTo(0, 0);
  
  gameInterval = setInterval(function() { game.puzzle.remaining_time--; },1000);
  game.started = true;
  //resizeGame();
  startSFX();
  //startBGM();
  loop();

  game.drip.play();
  //game.twang.play();
  //game.drip.play();
  //game.drip.src = game.twang.src;
  //setTimeout("game.drip.play()",1000)
  //game.drip.play();

  $('#modal-success').removeClass('show');
  //$("#modal-success").css("top", "-2000px");
  
  $('#canvas, .control, .abs').show();
  $('.content, #play, #exitfullscreen, #bgm, #sfx, #autosnap').hide();
  $('.container, .footer').hide();
  $('#body').css('padding', '0px');
  $('#body').css('margin', '0px');
};

pauseGame = function() {
  clearInterval(gameInterval);
  game.started = false;
  window.cancelAnimationFrame(game.interval);

  $('#play').show();
  $('.control').hide();  
};

pauseClock = function() {
  clearInterval(gameInterval);
  game.started = false;  
};

restartGame = function() {
  game.restart();
};

stopSFX = function() {
  game.drip.volume = 0.0;
  game.twang.volume = 0.0;
  game.drip.pause();
  game.twang.pause();
  $('#sfxoff').hide();
  $('#sfx').show();
};

startSFX = function() {
  game.drip.volume = 1.0;
  game.twang.volume = 1.0;
  $('#sfxoff').show();
  $('#sfx').hide();
};

stopBGM = function() {
  game.bgm.volume = 0.0;
  game.bgm.pause();
  $('#bgmoff').hide();
  $('#bgm').show();
};

startBGM = function() {
  if(iOS){
    $('#bgmoff').show();
    $('#bgm').hide();
    if(game.bgm.currentTime <= 0){
      game.bgm.src = "/audio/01_Alex_Must_Once_Upon_a_Time.mp3";
      game.bgm.play();
    }
    console.log("startBGM-ios");
  }else{
    game.bgm.volume = 1.0;
    game.bgm.play();
    $('#bgmoff').show();
    $('#bgm').hide();
    console.log("startBGM");
  }
};

autoSnap = function() {
  game.auto_snap = true;
  $('#autosnapoff').show();
  $('#autosnap').hide();
};

autoSnapOff = function() {
  game.auto_snap = false;
  $('#autosnapoff').hide();
  $('#autosnap').show();
};

fullscreen = function() {
  RunPrefixMethod(game.canvas, "RequestFullScreen");
};

exitfullscreen = function() {
  RunPrefixMethod(document, 'CancelFullScreen');
};

function start() {
  startGame();
}
function stop() {
  stopGame();
}
function pause() {
  pauseGame();
}
function restart() {
  restartGame();
}

function loop() {
  game.interval = window.requestAnimationFrame(loop, game.canvas);

  game.render();

  var elapsed = game.getTimer() - game.time;
  game.time = game.getTimer();
  //elapsed = Math.min(20, Math.max(-20, elapsed));
  if(elapsed > game.maxElapsedTime)
    game.maxElapsedTime = elapsed;

  /*
  game.context.textAlign = 'left';
  game.context.fillStyle = "rgba(255, 255, 255, 1)";
  game.context.font = "bold 12px Arial";
  game.context.fillText("scale: " + game.scale, 50, 90);
  game.context.fillText("loaded items: " + game.loaded_items, 50, 100);
  game.context.fillText(">>> " + elapsed, 50, 110);
  game.context.fillText("maxElapsedTime>>> " + game.maxElapsedTime, 50, 120);
  game.context.fillText(game.puzzle.remaining_time, 50, 130);
  game.context.fillText("auto-snap: "+game.auto_snap, 50, 140);
  */

}


function loadAssetsI(g,assets) {
  //alert('>>'+atttr);
  for(i=0; i<assets.length; i++){
    console.log("Loading: "+assets[i].slug);
    if(assets[i].type == "image"){
      //IMAGE
      eval("g."+assets[i].slug+' = new Image();');
      eval("g."+assets[i].slug+'.src = "'+assets[i].src+'";');
      eval("g."+assets[i].slug+'.onload = g.loaded_items++;');
    }
    else if(assets[i].type == "audio"){
      //AUDIO
      eval("g."+assets[i].slug+' = document.createElement(\'audio\');');
      eval("g."+assets[i].slug+'.addEventListener(\'canplaythrough\', itemLoaded(g), false);');
      var source= document.createElement('source');
      if(Modernizr.audio.ogg){
        source.type= 'audio/ogg';
        source.src= assets[i].src+'.ogg';
      }
      else if(Modernizr.audio.mp3){
        source.type= 'audio/mpeg';
        source.src= assets[i].src+'.mp3';
      }
      if(source.src != ""){
        eval("g."+assets[i].slug+'.appendChild(source);');
        console.log("g."+assets[i].slug+'.appendChild(source);');
      }
      else{
        // no MP3 or OGG audio support
        g.itens_to_load--;
      }
    }
  }
}

function loadAssetsII(g,assets) {
  //alert('>>'+atttr);
  for(i=0; i<assets.length; i++){
    if(assets[i].type == "image"){
      //IMAGE
      eval("g."+assets[i].slug+' = new Image();');
      eval("g."+assets[i].slug+'.src = "'+assets[i].src+'";');
      eval("g."+assets[i].slug+'.onload = g.loaded_items++;');
    }
    else if(assets[i].type == "audio"){
      //AUDIO
      eval("g."+assets[i].slug+' = document.createElement(\'audio\');');
      eval("g."+assets[i].slug+'.addEventListener(\'canplaythrough\', itemLoadedII(g), false);');
      var source= document.createElement('source');
      if(Modernizr.audio.ogg){
        source.type= 'audio/ogg';
        source.src= assets[i].src+'.ogg';
      }
      else if(Modernizr.audio.mp3){
        source.type= 'audio/mpeg';
        source.src= assets[i].src+'.mp3';
      }
      if(source.src != ""){
        eval("g."+assets[i].slug+'.appendChild(source);');
      }
      else{
        // no MP3 or OGG audio support
        g.itens_to_load2--;
      }
    }
  }
}

function itemLoaded(g) {
  g.loaded_items++;
}

function itemLoadedII(g) {
  g.loaded_items2++;
}

function mediaSupport(mimetype, container) {
  var elem = document.createElement(container);
  if(typeof elem.canPlayType == 'function'){
    var playable = elem.canPlayType(mimetype);
    if((playable.toLowerCase() == 'maybe')||(playable.toLowerCase() == 'probably')){
      return true;
    }
  }
  return false;
}
/*
//Handle the melody
  if(mediaSupport('audio/ogg; codecs=vorbis', 'audio') ||
    mediaSupport('audio/mpeg', 'audio')) {

function resizeGame() {
    document.getElementById('canvas').width = window.innerWidth;
    document.getElementById('canvas').height = window.innerHeight;
    console.log("canvas: "+window.innerWidth+", "+window.innerHeight)
    //game.init();
}
*/

function resizeGame() {  
  console.log("window: " + window.innerWidth + ", " + window.innerHeight);
  var modal = document.getElementById("modal-dialog"); 
  var mh =  modal.style.height;
  var mw =  modal.style.width;
  console.log(mw +" - "+ mh)
  //$(".modal-dialog").css("margin-top", "-"+$(".modal-dialog").height()/2+"px").css("margin-left", "-"+$(".modal-dialog").width()/2+"px");
  if(game.started){
    game.resized = true;
    game.init();
    //game.puzle.init();
  }
}


window.addEventListener('resize', resizeGame, false);
window.addEventListener('orientationchange', resizeGame, false);

//

$(function() {
  /*
  $("#test").popover({
    animation: true,
    placement: 'right',
    delay: { show: 200, hide: 2000 }
  });
  
  $(".popover-test").popover();
  $(".tooltip-test").tooltip();
  
  $("#promo").alert();
  */
  
  //$('#modal-success').modal();
    
  $("#next").click(function() {
    if(!iOS){
      if(game.puzzle.has_voice){
        game.puzzle.voice.pause();
        game.puzzle.voice.currentTime = 0;
        $("#btn_voice").removeClass('disabled');
      }
      if(game.puzzle.has_sound){
        game.puzzle.sound.pause();
        game.puzzle.sound.currentTime = 0;
        $("#btn_sound").removeClass('disabled');
      }
    }
    game.nextStage();
    $('#modal-success').fadeOut();
  });

  $("#btn_voice").click(function() {
    if(game.puzzle.has_voice && !$("#btn_voice").hasClass('disabled')){
      game.puzzle.voice.addEventListener('ended', function(){
        $("#btn_voice").removeClass('disabled');
      });
      $("#btn_voice").addClass('disabled');
      game.puzzle.voice.play();
    }
  });

  $("#btn_sound").click(function() {
    if(game.puzzle.has_sound && !$("#btn_sound").hasClass('disabled')){
      game.puzzle.sound.addEventListener('ended', function(){
        $("#btn_sound").removeClass('disabled');
      });
      $("#btn_sound").addClass('disabled');
      game.puzzle.sound.play();
    }
  });
  
  /*
  $("#test").click(function() {
    start();
    //setTimeout('$(\'#test\').popover(\'hide\')', 1500);
  });
  */
  
  $("#play, #btn-play, #play-btn-lg").click(function() {
    start();
  });
  
  $("#btn-pause").click(function() {
    pause();
  });
  
  $("#btn-fullscreen").click(function() {
    fullscreen();
  });
  
  $("#btn-exitfullscreen").click(function() {
    exitfullscreen();
  });
  
  $("#btn-bmg-on").click(function() {
    //startBGM();
  });
  
  $("#btn-bmg-off").click(function() {
    //stopBGM();
  });
  
  $("#btn-sfx-on").click(function() {
    startSFX();
  });
  
  $("#btn-sfx-off").click(function() {
    stopSFX();
  });
  
  $("#btn-autosnap-on").click(function() {
    autoSnap();
  });
  
  $("#btn-autosnap-off").click(function() {
    autoSnapOff();
  });

  $("#play-top").click(function() {
    start();
  });
  
  //$("#modal-success").removeClass('show');
  
  $("#modal-success").css("height", game.canvas.height+"px");

  $("#btn-home").click(function() {
    self.location.href="./index.html";
  });

});