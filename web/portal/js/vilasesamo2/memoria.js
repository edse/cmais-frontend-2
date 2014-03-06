/* AppCacheUI: https://github.com/timdream/appcacheui */
/*(function(){var e={init:function(){var a=document,b=a.body,c=window.applicationCache;if(c)if(b){this.info=a.getElementById("appcache_info");if(!this.info){a.cE=a.createElement;var d=a.cE("a"),a=a.cE("div");a.id="appcache_info";d.href="";a.appendChild(d);b.firstChild&&b.insertBefore(a,b.firstChild);this.info=a}"checking,downloading,progress,noupdate,cached,updateready,obsolete,error".split(",").forEach(function(a){c.addEventListener(a,e)})}else console.log("Premature init. Put the <script> in <body>.")},
handleEvent:function(a){this.info.className=this.info.className.replace(/ ?appcache\-.+\b/g,"")+" appcache-"+a.type;"progress"===a.type&&a.total&&this.info.setAttribute("data-progress",a.loaded+1+"/"+a.total)}};e.init()})();
*/
//create all the variables
var score;
var cardsmatched;
var clicks;
var soundsCelebrating = new Array();
var soundsError = new Array();
var countClickWrong = 0;
var clickWrong = new Array(0,1);
var posWrong = clickWrong[Math.round(Math.random(clickWrong.length))];

var ui = $("#game");
var uiIntro = $("#gameIntro");
var uiStats = $("#gameStats");
var uiComplete = $("#gameComplete");
var uiCards= $("#cards");
var uiReset = $("#reset");
var uiScore = $("#gameScore");
var uiTime = $("#time");
var uiClick = $("#click");
var uiPlay = $("#gamePlay");
var uiAgain = $("#gameAgain");
var uiTimer = $("#timer");
var uiSplash = $("#splash");
var uiFullscreen = $("#fullscreen");
var decent = styleSupport('transition');

//create deck array
var matchingGame = {};
matchingGame.deck = [
/*'ie', 'ie-icon',
'fx', 'fx-icon', 
'cr', 'cr-icon',
'sf', 'sf-icon',
'op', 'op-icon',
'ns', 'ns-icon',
'ms', 'ms-icon',
'tb', 'tb-icon',
'fm', 'fm-icon'
*/
'bel-a', 'bel-b',
'bbeto-a', 'bbeto-b',
'comecome-a', 'comecome-b',
'elmo-a', 'elmo-b',
'enio-a', 'enio-b',
'garibaldo-a', 'garibaldo-b',
'grover-a', 'grover-b',
'ggrupo-a', 'ggrupo-b',
'zoe-a', 'zoe-b'
];

matchingGame.clone = $.extend(true, [], matchingGame.deck);

//on document load the lazy way
$(function(){
  var loader = new PxLoader();
  
  loader.addImage('http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/memoria/acerto.png');
  loader.addImage('http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/memoria/contador.jpg');
  loader.addImage('http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/memoria/pontos_final.jpg');
  loader.addImage('http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/memoria/predio.png');
  loader.addImage('http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/memoria/tela_inicial.png');
  loader.addImage('http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/memoria/vire-celular.png');
  
  loader.addImage('http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/memoria/botoes/botao_novamente.jpg');
  loader.addImage('http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/memoria/botoes/jogar.jpg');
  loader.addImage('http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/memoria/botoes/over_novamente.jpg');
  loader.addImage('http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/memoria/botoes/reinicio.jpg');
  loader.addImage('http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/memoria/botoes/botao_over.jpg');

  loader.addImage('http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/memoria/cartas/bel.jpg');
  loader.addImage('http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/memoria/cartas/beto.jpg');
  loader.addImage('http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/memoria/cartas/comecome.jpg');
  loader.addImage('http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/memoria/cartas/elmo.jpg');
  loader.addImage('http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/memoria/cartas/enio.jpg');
  loader.addImage('http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/memoria/cartas/garibaldo.jpg');
  loader.addImage('http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/memoria/cartas/grover.jpg');
  loader.addImage('http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/memoria/cartas/sivan.jpg');
  loader.addImage('http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/memoria/cartas/verso.jpg');
  loader.addImage('http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/memoria/cartas/zoe.jpg');
  
  loader.addProgressListener(function(e) {
    if (e.completedCount * 5 < 100) {
      uiPlay.text(e.completedCount * 4 + '%');
    }
  });
  loader.addCompletionListener(function() {
    uiPlay.text('Jogar');
    ui.addClass('open');
  });
  loader.start();
  init();
});
function acessibilidadeVisual(){
  var cont = 0;
  var line=1;
  setTimeout(function(){  
    $('.card').each(function(i){
      $(this).attr("tabindex", "0");
      var colLetter = 65+cont;
      
      var col = String.fromCharCode(colLetter)
      if(i==5 || i==11){
        cont = 0;
      }
      $(this).attr('aria-label', "coluna:"+col+" - Linha:"+line)
      cont++;
    })
  },1000)
}
//initialise game
function init() {
  if (!decent) { //workaround for IE9
    uiSplash.addClass('disable');
  }
  playGame = false;
  uiPlay.click(function(e) {
    e.preventDefault();
    ui.removeClass("open");
    startGame();
  });
  uiAgain.click(function(e) {
    e.preventDefault();
    reStartGame();
  });
  uiReset.click(function(e) {
    e.preventDefault();
    reStartGame();
    $('.card').addClass('reset');
    $('.reset').bind("webkitTransitionEnd transitionend oTransitionEnd", function(){
      $('.reset').removeClass('reset');
    });
  });
  if (typeof document.cancelFullScreen != 'undefined' ||
    typeof document.mozCancelFullScreen != 'undefined' ||
    typeof document.webkitCancelFullScreen != 'undefined') {
    uiFullscreen.click(toggleFullscreen);
    uiFullscreen.addClass('support');
  }

  document.addEventListener('keydown', closebox, false);

  
  
}

//start game and create cards from deck array
function startGame() {
  ui.addClass('play');
  uiTime.text("0");
  uiClick.text("0");
  score = 0;
  cardsmatched = 0;
  clicks = 0;
  if (playGame == false) {
    playGame = true;
    $.shuffle(matchingGame.deck.sort(function(){return 0.5 - Math.random();}));
    for(var i=0;i<17;i++){
      $(".card:first-child").clone().appendTo("#cards");
    }
    // initialize each card's position
    uiCards.children().each(function(index) {
      // align the cards to be 3x6 ourselves.
      $(this).css({
        "left" : ($(this).width() + 5) * (index % 6),
        "top" : ($(this).height() + 5) * Math.floor(index / 6)
      });
      // get a pattern from the shuffled deck
      var pattern = matchingGame.deck.pop();
      // visually apply the pattern on the card's back side.
      $(this).find(".back").addClass(pattern);
      // embed the pattern data into the DOM element.
      $(this).attr("data-pattern",pattern.substr(0,2));
      // listen the click event on each card DIV element.
      $(this).click(selectCard);
    });
    acessibilidadeVisual();
    playSound("Start_bel_ola");
    timer();
  }
}


//timer for game
function timer() {
  if (playGame) {
    scoreTimeout = setTimeout(function() {
      uiTimer.text(++score);
      timer();
    }, 1000);
  }
}

//onclick function add flip class and then check to see if cards are the same
function selectCard() {
  // we do nothing if there are already two cards flipped.
  if ($(".card-flipped").size() > 1) {
    return;
  }
  if(!$(this).hasClass("card-flipped")) {
    playSound('car_flipped');
    uiClick.text(++clicks);
    $(this).addClass("card-flipped");
  }
  // check the pattern of both flipped card 0.7s later.
  if ($(".card-flipped").size() == 2) {
    setTimeout(checkPattern,700);
  }
}

//if pattern is same remove cards otherwise flip back
function checkPattern() {
  var pattern = isMatchPattern();
  if (pattern) {
    uiSplash.addClass('match');
    $('.matched').removeClass('current');
    $('#' + pattern).addClass('matched current');
    $('.match').bind("webkitTransitionEnd transitionend oTransitionEnd", function(){
      uiSplash.removeClass('match');
    });
    $(".card-flipped").removeClass("card-flipped").addClass("card-removed");
    $(".card-removed").bind("webkitTransitionEnd transitionend oTransitionEnd", removeTookCards);
    if(!decent) { //workaround for IE9
      removeTookCards();
    }
    
    
  } else {
    soundsError[0] = "Error_garibaldo_tente";
    soundsError[1] = "Error_garibaldo_opa";
    soundsError[2] = "Error_garibaldo_tente_de_novo";
    if(countClickWrong > posWrong){
      playSound(soundsError[Math.round(Math.random(soundsError.length))]);
      countClickWrong = 0;
    }else{
      playSound('car_flipped');
      countClickWrong++;
    }
    $(".card-flipped").removeClass("card-flipped");
  }
}

//put 2 flipped cards in an array then check the image to see if it's the same.

function isMatchPattern() {
  var cards = $(".card-flipped");
  var pattern = $(cards[0]).data("pattern");
  var anotherPattern = $(cards[1]).data("pattern");
  if (pattern == anotherPattern) {
    return pattern;
  } else {
    return false;
  }
}

//check to see if all cardmatched variable is less than 8 if so remove card only otherwise remove card and end game
function removeTookCards() {
  soundsCelebrating[0]= "Macthing_bel_ae_viva";
  soundsCelebrating[1]= "Macthing_garibaldo_muito_bem";
  playSound(soundsCelebrating[Math.round(Math.random(soundsCelebrating.length))]);
  if (cardsmatched < 8){
    cardsmatched++;
    $(".card-removed").remove();
  } else {
    $(".card-removed").remove();
    EndGame();
  }
}

function EndGame() {
  clearTimeout(scoreTimeout);
  
  // Define score formula
  total_score =  ( 33/(score/60) + 66/(clicks/24) ).toFixed(2);
  $('#score').html('Sua pontuaÃ§Ã£o: ' + total_score + '<br>' + clicks + ' cliques em ' + score + ' segundos');
  ui.addClass('end').removeClass('play');
  
  playSound('Final_garibaldo');
  setTimeout(function(){
    playSound('Final_play_again');  
  },3500);
  
}

//recreate the original card , stop the timer and re populate the array with class names
function reStartGame(){
  ui.removeClass('end');
  $('.matched').removeClass('current');
  uiSplash.removeClass('matchend');
  uiSplash.find('span').removeClass('matched');
  playGame = false;
  uiCards.html("<div class='card'><div class='face front'></div><div class='face back'></div></div>");
  clearTimeout(scoreTimeout);
  matchingGame.deck = $.extend(true, [], matchingGame.clone);
  startGame();
}

function closebox(ev) {
  if(ev.which == 27 && window.location.hash.length > 1)
    window.location.hash = '';
}

function playSound(soundFileName) {
  if(mediaSupport('audio/ogg; codecs=vorbis', 'audio') || mediaSupport('audio/mpeg', 'audio')) {
    /*
    //$(".tampa").css("z-index", "10");
    $(".audio").trigger('load');
    $(".audio").bind("load",function(){
          $('.audio').trigger('play')
      });
    $('.audio').trigger('play')
    $('.audio').bind("ended", function(){
        $(".tampa").css("z-index", "-1");
    });
    */
  }
}

function toggleFullscreen() {
if ((document.fullScreenElement && document.fullScreenElement !== null) ||
  (!document.mozFullScreen && !document.webkitIsFullScreen)) {
    enterFullscreen(document.documentElement);
  } else {
    cancelFullscreen();
  }
}

function enterFullscreen(docElm) {
  if (docElm.requestFullscreen) {
      docElm.requestFullscreen();
  }
  else if (docElm.mozRequestFullScreen) {
      docElm.mozRequestFullScreen();
  }
  else if (docElm.webkitRequestFullScreen) {
      docElm.webkitRequestFullScreen();
  }
}

function cancelFullscreen() {
  if (document.exitFullscreen) {
      document.exitFullscreen();
  }
  else if (document.mozCancelFullScreen) {
      document.mozCancelFullScreen();
  }
  else if (document.webkitCancelFullScreen) {
      document.webkitCancelFullScreen();
  }
}

function styleSupport(p) {
    var b = document.body || document.documentElement;
    var s = b.style;
    if(typeof s[p] == 'string') {return true; }

    // Tests for vendor specific prop
    v = ['Moz', 'Webkit', 'Khtml', 'O', 'ms'],
    p = p.charAt(0).toUpperCase() + p.substr(1);
    for(var i=0; i<v.length; i++) {
      if(typeof s[v[i] + p] == 'string') { return true; }
    }
    return false;
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
 * jQuery shuffle
 *
 * Copyright (c) 2008 Ca-Phun Ung <caphun at yelotofu dot com>
 * Licensed under the MIT (MIT-LICENSE.txt) license.
 *
 * http://github.com/caphun/jquery.shuffle
 *
 * Shuffles an array or the children of a element container.
 * This uses the Fisher-Yates shuffle algorithm <http://jsfromhell.com/array/shuffle [v1.0]>
 */

(function($){

  $.fn.shuffle = function() {
    return this.each(function(){
      var items = $(this).children().clone(true);
      return (items.length) ? $(this).html($.shuffle(items)) : this;
    });
  }

  $.shuffle = function(arr) {
    for(var j, x, i = arr.length; i; j = parseInt(Math.random() * i), x = arr[--i], arr[i] = arr[j], arr[j] = x);
    return arr;
  }
})(jQuery);

$(document).ready(function(){
  console.log("entrei")
  var cardWidth;
  var cardHeight;
  //ajustando cartas na tela 
  setInterval(function(){
    cardWidth = ($('.conteudo-asset').width() / 6) -8;
    cardHeight = cardWidth * 1.33;
    if(cardWidth >= 115) cardWidth = 115;
    if(cardHeight >= 149) cardHeight = 149;
    $('.card').css({
      "width" :Math.round(cardWidth) + "px",
      "height":Math.round(cardHeight)+ "px"
    });
    setSize(); 
  },500);
  
  
  var width;
  var height;  
  function setSize(){
    if(window.innerWidth < 980){
      $('.interna.jogos #content .conteudo-asset').css('height', (cardHeight*3)+"px");
    }
    $('.card').each(function(i){
      if( i >=0 && i <= 5){
        if(i==0){
          width = 0;
          $(this).css("left","0px");
        }else{
          width = $('.card').width() + width + 4;
          height = $('.card').height() + 5;
          $(this).css("top","0px");
          $(this).css("left",width+"px");
        }
      }else if(i >= 6 && i <= 11){
        if(i==6){
          width = 0;
          height = $('.card').height() + 4;
          $(this).css({
            "top" :height+"px",
            "left":"0px"
          });
        }else{
          width = $('.card').width() + width + 4;
          height = $('.card').height() + 5;
          $(this).css("top",height+"px");
          $(this).css("left",width+"px");
        }
      }else if(i >= 12){
        if(i==12){
          width = 0;
          height = $('.card').height()*2 + 10;
          $(this).css({
            "top" :height+"px",
            "left":"0px"
          });
        }else{
          width = $('.card').width() + width + 4;
          height = $('.card').height()*2 + 10;
          $(this).css("top",height+"px");
          $(this).css("left",width+"px");
        }
      }
      
    });
  }//setSize
});