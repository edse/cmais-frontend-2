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
var clickWrong = new Array(0,2);
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
var character;
var position;
var enterHelp;
if(str.indexOf("iPhone") != -1 || str.indexOf("iPod") != -1 || str.indexOf("Mac OS") != -1){
  enterHelp = "enter";
}else{
  enterHelp = "NVDA + enter";
}
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
  $('#gamePlay').attr("aria-label", "você está no meio da página, no botão Jogar, aperte "+enterHelp+" pra começar o jogo da memória amiguinho!");
  $('#reset').html("botão resete, aperte "+enterHelp+ "caso queria reiniciar o jogo.");
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
    console.log("entrei loaderCompletition");
    uiPlay.html('<span aria-hidden="true" tabindex="-1">Jogar</span>');
    ui.addClass('open');
    $('#gamePlay span').hide();
        
    setTimeout(function(){
      $('#gamePlay').focus();
    },500);
    init();
  });
  
  loader.start();
  
  //loadSound
  sound01 = loadAudio('http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/memoria/audio/Macthing_garibaldo_muito_bem.mp3');
  sound02 = loadAudio('http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/memoria/audio/Macthing_garibaldo_muito_bem.ogg');
  sound03 = loadAudio('http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/memoria/audio/car_flipped.mp3');
  sound04 = loadAudio('http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/memoria/audio/car_flipped.ogg');
  sound05 = loadAudio('http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/memoria/audio/Error_garibaldo_tente.mp3');
  sound06 = loadAudio('http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/memoria/audio/Error_garibaldo_tente.ogg');
  sound07 = loadAudio('http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/memoria/audio/Final_garibaldo.mp3');
  sound08 = loadAudio('http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/memoria/audio/Final_garibaldo.ogg');
  sound09 = loadAudio('http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/memoria/audio/Final_play_again.mp3');
  sound10 = loadAudio('http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/memoria/audio/Final_play_again.ogg');
  
  filesToLoad = 9;
  filesLoaded = 0;
  
  //AppLoaded();
  function loadAudio(uri)
  {
      console.log("entrei audio");
      var audio = new Audio();
      //audio.onload = isAppLoaded; // It doesn't works!
      audio.addEventListener('canplaythrough', isAppLoaded, false); // It works!!
      audio.src = uri;
      return audio;
  }
  
  function isAppLoaded()
  {
      console.log("entrei AppLoaded");
      filesLoaded++;
      if (filesLoaded >= filesToLoad){
        uiPlay.html('<span aria-hidden="true" tabindex="-1">Jogar</span>');
        ui.addClass('open');
        $('#gamePlay span').hide();
        //init();
      }
  }
  //init();
});

var cardWidth;
var cardHeight;
//ajustando cartas na tela 

$(window).on("resize", function(){
  setCardSize();
  
  var adjust = setInterval(function(){
    setPosition();   
  },50);
  
  setTimeout(function(){
    clearInterval(adjust);
  },3000);
  
});


var width;
var height; 
function setCardSize(){
  if($('.conteudo-asset').width() < 430){
    cardWidth = ($('.conteudo-asset').width() / 6) - 2;
  }else{
    cardWidth = ($('.conteudo-asset').width() / 6) - 6;
  }
  cardHeight = cardWidth * 1.33;
  if(cardWidth >= 115) cardWidth = 115;
  if(cardHeight >= 149) cardHeight = 149;
  $('.card').css({
    "width" :Math.round(cardWidth) + "px",
    "height":Math.round(cardHeight)+ "px"
  });
} 
function setPosition(){
  
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
    if(height){
      if($('.conteudo-asset').width() <= 899){
        $('.interna.jogos #content .conteudo-asset').css('height', parseInt(height*2.5)+"px");
      }else{
        $('.interna.jogos #content .conteudo-asset').css('height', "995px");  
      }
    }
  });
}//setPosition

function acessibilidadeVisual(){
  var cont = 1;
  var line=1;
  setTimeout(function(){  
    $('.card').each(function(i){
      $(this).attr("tabindex", "0");
      var colLetter = 64+cont;
      
      var col = String.fromCharCode(colLetter)
      if(i==5 || i==11){
        cont = 0;
      }
      if(i==6 || i==12){
        line++;
      }
      $(this).attr('aria-label',"Coluna: "+ col+". Linha:"+line)
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
  
  
  uiPlay.on("keydown", function(event){
    if(event.which == 13) {
      //event.preventDefault();
      console.log("começo");
      uiPlay.attr('aria-hidden', 'true').attr('tabindex', '-1');
      ui.removeClass("open");
      startGame();
      $('#gameStats').prepend("<p id='ex-jogo' style='font-size:1px; text-indent:-999999' aria-label='Oi, espalhamos dezoito cartas. Com tres linhas com seis colunas, ajude o garibaldo a encontrar os pares. Aperte "+ enterHelp +" em cada carta e falarei o personagem da carta. Comandos navegação - tab = vou para próxima carta a direita. shift+tab = vou uma carta para a esquerda. "+ enterHelp +" = viro carta e leio qual personagem que é.' tabindex='0'>Oi, espalhamos dezoito cartas. Com tres linhas com seis colunas, ajude o garibaldo a encontrar os pares. Aperte "+ enterHelp +" em cada carta e falarei o personagem da carta. Comandos navegação - tab = vou para próxima carta a direita. shift+tab = volto uma carta para esquerda. "+ enterHelp +" = viro carta e leio qual personagem que é.</p>");
      setTimeout(function(){
        $('#ex-jogo').focus();
      },1000);
    } 
  });
  uiAgain.on("keydown",function(event){
    if(event.which == 13) {
      //event.preventDefault();
      console.log("reinicio");
      reStartGame();
    } 
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
  uiReset.on("keydown",function(event){
    if(event.which == 13) {
      //event.preventDefault();
      console.log("restart");
      reStartGame();
      $('.card').addClass('reset');
      $('.reset').bind("webkitTransitionEnd transitionend oTransitionEnd", function(){
        $('.reset').removeClass('reset');
      });
    } 
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
      $(this).attr("data-position",index);
      $(this).append("<p id='characther"+index+"' class='characther' aria-live='polite' aria-label='' tabindex='0'></p>");
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
      $(this).on("keydown", function( event ) {
        if ( event.which == 13 ) {
          //event.preventDefault();
          console.log("seleciono");
          switch($(this).attr('data-pattern')){
            case "be":
              character = "carta com a bel";
            break;
            case "bb":
              character = "carta com o beto";
            break;
            case "co":
              character = "carta com o come-come";
            break;
            case "el":
              character = "carta com o elmo";
            break;
            case "en":
              character = "carta com o ênio";
            break;
            case "ga":
              character = "carta com o garibaldo";
            break;
            case "gr":
              character = "carta com o groover";
            break;
            case "gg":
              character = "carta com a sivan";
            break;
            case "zo":
              character = "carta com a zoe";
            break;
          }
          if ($(".card-flipped").size() > 1) {
            return;
          }
          if(!$(this).hasClass("card-flipped")) {
            playSound('car_flipped');
            uiClick.text(++clicks);
            position = $(this).index();
            //$(this).addClass("card-flipped").append('<p id="characther" class="characther" aria-live="polite" aria-label="'+character+'" tabindex="0">'+character+'</p> ');
            $(this).addClass("card-flipped");
            
            var whichCard = 0;
            $('.card-flipped').each(function(){
              whichCard += i;
            }); 
            
            if(whichCard==17){
              $(this).find('.characther').attr("aria-label",character+". Selecione a próxima carta").html(".");
            }else if(whichCard == 34){
              $(this).find('.characther').attr("aria-label",character+". Vamos ver se acertou?").html(".");;
            }
            var charPos = $(this).attr("data-position");
            setTimeout(function(){
              $('#characther'+charPos).focus();
              console.log("foquei 3");
            },800);
            //$(this).find('.back').attr('tab-index','-1').attr('aria-hidden', 'true');  
          }
          // check the pattern of both flipped card 0.7s later.
          if ($(".card-flipped").size() == 2) {
            setTimeout(checkPattern,1200);
          }
        } 
      });
    });
    setCardSize();
    
    var adjust = setInterval(function(){
      setPosition();   
    },50);
    
    setTimeout(function(){
      clearInterval(adjust);
    },3000); 
    acessibilidadeVisual();
    //playSound("Start_bel_ola");
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
  $('.characther').attr("aria-label", "").html("").attr("tabindex", "-1");
  
  var pattern = isMatchPattern();
  if (pattern) {
    setTimeout(function(){
      if($('.card').eq(position)){
        $('.card').eq(position).focus();
      }else{
        $('.card').eq(0).focus();
      }
    },1800);
    uiSplash.addClass('match');
    $('.matched').removeClass('current');
    $('#' + pattern).addClass('matched current');
    var quant = 0;
    $('.card').each(function(i){
      quant = i
    });
    var pairs = (quant-1)/2;
    var pares = "";
    if(pairs==1){
      pares="par";
    }else{
      pares="pares";
    }
    if(pairs >= 1){
      $('#ex-jogo').attr('aria-label','Parabéns! você acertou. agora você tem mais '+pairs+' '+ pares+'  para econtrar. Vamos lá?. Ajude o Garibaldo .');
      $('#ex-jogo').html('Parabéns! você acertou. agora você tem mais '+pairs+' '+ pares+'  para econtrar. Vamos lá?. Ajude o Garibaldo .');
    }else{
      $('#ex-jogo').remove();
    }
    setTimeout(function(){
      $('#ex-jogo').focus();
      setTimeout(function(){
        $('.card').eq(0).focus();
      },7000);
    },1000);
    $('.match').bind("webkitTransitionEnd transitionend oTransitionEnd", function(){
      uiSplash.removeClass('match');
    });
    $(".card-flipped").removeClass("card-flipped").addClass("card-removed");
    $(".card-removed").bind("webkitTransitionEnd transitionend oTransitionEnd", removeTookCards);
    if(!decent) { //workaround for IE9
      removeTookCards();
    }
    
    
  } else {
    /*
    soundsError[0] = "Error_garibaldo_tente";
    soundsError[1] = "Error_garibaldo_opa";
    soundsError[2] = "Error_garibaldo_tente_de_novo";
    if(countClickWrong > posWrong){
      //playSound(soundsError[Math.round(Math.random(soundsError.length))]);
      playSound("Error_garibaldo_tente");
      countClickWrong = 0;
    }else{
      playSound('car_flipped');
      countClickWrong++;
    }
    */
    playSound('car_flipped');
    setTimeout(function(){
      playSound("Error_garibaldo_tente");
    },2500);
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
   // return false;
  }
}

//check to see if all cardmatched variable is less than 8 if so remove card only otherwise remove card and end game
function removeTookCards() {
  soundsCelebrating[0]= "Macthing_bel_ae_viva";
  soundsCelebrating[1]= "Macthing_garibaldo_muito_bem";
  //playSound(soundsCelebrating[Math.round(Math.random(soundsCelebrating.length))]);
  setTimeout(function(){
    playSound("Macthing_garibaldo_muito_bem");
  },2000);
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
  $('#score').attr('aria-label', 'Sua pontuação amiguinho: ' + parseInt(total_score) +". Com " + clicks + ' Cliques em ' + score + ' segundos').html('Sua pontuação amiguinho: ' + parseInt(total_score) +".<br>Com "+ clicks + ' Cliques em ' + score + ' segundos');
  ui.addClass('end').removeClass('play');
  setTimeout(function(){
    playSound('Final_garibaldo');
    setTimeout(function(){
      playSound('Final_play_again');
      setTimeout(function(){
        $('#score').focus();
      },4000);  
    },3500);
  },2000);
  
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
  $('#ex-jogo').remove();
  
  $('#gameStats').prepend("<p id='ex-jogo' style='font-size:1px; text-indent:-999999' aria-label='Oi, espalhamos dezoito cartas. Com tres linhas com seis colunas, ajude o garibaldo a encontrar os pares. Aperte "+ enterHelp +" em cada carta e falarei o personagem da carta. Comandos navegação - tab = vou para próxima carta a direita. shift+tab = vou uma carta para a esquerda. "+ enterHelp +" = viro carta e leio qual personagem que é.' tabindex='0'>Oi, espalhamos dezoito cartas. Com tres linhas com seis colunas, ajude o garibaldo a encontrar os pares. Aperte "+ enterHelp +" em cada carta e falarei o personagem da carta. Comandos navegação - tab = vou para próxima carta a direita. shift+tab = volto uma carta para esquerda. "+ enterHelp +" = viro carta e leio qual personagem que é.</p>");
  setTimeout(function(){
    $('#ex-jogo').focus();
  }, 1000);
  setCardSize();

  startGame();
}

function closebox(ev) {
  if(ev.which == 27 && window.location.hash.length > 1)
    window.location.hash = '';
}

function playSound(soundFileName) {
  if(mediaSupport('audio/ogg; codecs=vorbis', 'audio') || mediaSupport('audio/mp3', 'audio')) {
    $(".tampa").css("z-index", "10");
    $(".audio source").attr("src", "http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/memoria/audio/"+soundFileName+".mp3").attr("type", "audio/mp3");
    $(".audio source:last-child").attr("src", "http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/memoria/audio/"+soundFileName+".ogg").attr("type", "audio/ogg");
    $(".audio").trigger('load');
    $(".audio").bind("load",function(){
      $('.audio').trigger('play')
    });
    $('.audio').trigger('play');
    $('.audio').bind("ended", function(){
        $(".tampa").css("z-index", "-1");
    });
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

