function Game(){this.started=!1;this.stage=1;this.num_lines=2;this.alpha=this.scale=1;this.fade2=this.fade1=0;this.resized=!0;this.debug=!1;this.puzzle=new Puzzle("001",this,"",new Point2D(100,100),{width:298,height:400},[]);this.canvas=document.getElementById("canvas");this.context=this.canvas.getContext("2d");this.canvas.width=Math.round(window.innerWidth);this.canvas.height=Math.round(window.innerHeight);console.log("canvas: "+this.canvas.width+", "+this.canvas.height);this.original_width=this.canvas.width;
this.original_height=this.canvas.height;this.font_size=Math.round(this.canvas.width/20);this.scaled_width=this.canvas.width/this.scale/2;this.scaled_height=this.canvas.height/this.scale/2;console.log("scaled_width: "+this.scaled_width);console.log("scaled_height: "+this.scaled_height);this.items_to_load=4;this.loaded_items=0;this.loaded=!1;this.interval=null;this.start_time=this.maxElapsedTime=0;this.loadAssets()}
Game.prototype.loadAssets=function(){console.log("start loading...");this.assets=[{type:"audio",src:"audio/drip",slug:"drip"},{type:"audio",src:"audio/twang",slug:"twang"},{type:"audio",src:"audio/01_Alex_Must_Once_Upon_a_Time",slug:"bgm"},{type:"audio",src:"audio/chimes",slug:"chimes"}];this.items_to_load=this.assets.length;loadAssetsI(this,this.assets)};
Game.prototype.init=function(){console.log("loading done!");console.log("initing...");clearTimeout(this.iniTimeout);this.resized&&this.apply_scale();this.auto_snap=this.loaded=!0;this.pieces=[];this.holders=[];this.placed_pieces=[];this.moving=!0;this.over=this.selected=null;this.is_over=!1;this.num_pieces=5;this.clock_interval=null;this.mouse=new Mouse(this);this.puzzles=[new Puzzle("006",this,{has_voice:!0,has_sound:!0},{width:298,height:400},new Point2D(this.canvas.width/2-149+5,this.canvas.height/
2-200+5),[new Point2D(82,0),new Point2D(0,193),new Point2D(166,283),new Point2D(65,127)]),new Puzzle("008",this,{has_voice:!0,has_sound:!1},{width:298,height:400},new Point2D(this.canvas.width/2-213.5+5,this.canvas.height/2-216.5+5),[new Point2D(28,0),new Point2D(0,257),new Point2D(58,109),new Point2D(185,0)]),new Puzzle("005",this,{has_voice:!0,has_sound:!0},{width:298,height:400},new Point2D(this.canvas.width/2-173+2,this.canvas.height/2-212.5+5),[new Point2D(40,0),new Point2D(28,37),new Point2D(176,
37),new Point2D(0,186),new Point2D(175,179)]),new Puzzle("016",this,{has_voice:!0,has_sound:!0},{width:298,height:400},new Point2D(this.canvas.width/2-248.5,this.canvas.height/2-250+2),[new Point2D(73,0),new Point2D(98,157),new Point2D(0,268),new Point2D(169,329)]),new Puzzle("011",this,{has_voice:!0,has_sound:!1},{width:298,height:400},new Point2D(this.canvas.width/2-193,this.canvas.height/2-233+2),[new Point2D(0,0),new Point2D(49,46),new Point2D(0,227),new Point2D(174,227),new Point2D(84,373)]),
new Puzzle("012",this,{has_voice:!0,has_sound:!1},{width:298,height:400},new Point2D(this.canvas.width/2-245,this.canvas.height/2-227+2),[new Point2D(54,0),new Point2D(0,101),new Point2D(287,75),new Point2D(59,242),new Point2D(287,242)]),new Puzzle("015",this,{has_voice:!0,has_sound:!1},{width:298,height:400},new Point2D(this.canvas.width/2-367.5,this.canvas.height/2-233+2),[new Point2D(565,0),new Point2D(438,184),new Point2D(315,105),new Point2D(0,50),new Point2D(138,157)]),new Puzzle("004",this,
{has_voice:!0,has_sound:!0},{width:298,height:400},new Point2D(this.canvas.width/2-233.5,this.canvas.height/2-166.5),[new Point2D(0,173),new Point2D(49,66),new Point2D(207,0),new Point2D(286,24),new Point2D(115,120),new Point2D(170,115)]),new Puzzle("007",this,{has_voice:!0,has_sound:!1},{width:298,height:400},new Point2D(this.canvas.width/2-168.5+3,this.canvas.height/2-216.5+5),[new Point2D(0,61),new Point2D(144,0),new Point2D(27,38),new Point2D(26,58),new Point2D(95,226),new Point2D(193,215)]),
new Puzzle("009",this,{has_voice:!0,has_sound:!0},{width:298,height:400},new Point2D(this.canvas.width/2-212.5+5,this.canvas.height/2-333+10),[new Point2D(79,0),new Point2D(0,118),new Point2D(54,512),new Point2D(294,538),new Point2D(102,346),new Point2D(247,341)]),new Puzzle("010",this,{has_voice:!0,has_sound:!0},{width:298,height:400},new Point2D(this.canvas.width/2-158,this.canvas.height/2-223+2),[new Point2D(4,0),new Point2D(12,90),new Point2D(0,276),new Point2D(162,272),new Point2D(12,363),new Point2D(162,
363)]),new Puzzle("013",this,{has_voice:!0,has_sound:!0},{width:298,height:400},new Point2D(this.canvas.width/2-326.5,this.canvas.height/2-216.5+2),[new Point2D(0,112),new Point2D(375,0),new Point2D(81,0),new Point2D(273,212),new Point2D(364,212),new Point2D(508,212)]),new Puzzle("014",this,{has_voice:!0,has_sound:!1},{width:298,height:400},new Point2D(this.canvas.width/2-257.5,this.canvas.height/2-250+2),[new Point2D(0,0),new Point2D(37,58),new Point2D(191,264),new Point2D(286,315),new Point2D(391,
309),new Point2D(339,188)]),new Puzzle("017",this,{has_voice:!0,has_sound:!0},{width:298,height:400},new Point2D(this.canvas.width/2-270,this.canvas.height/2-174+2),[new Point2D(0,0),new Point2D(125,223),new Point2D(292,223),new Point2D(203,26),new Point2D(291,24),new Point2D(444,72)]),new Puzzle("018",this,{has_voice:!0,has_sound:!1},{width:298,height:400},new Point2D(this.canvas.width/2-335.5,this.canvas.height/2-228+2),[new Point2D(0,225),new Point2D(274,225),new Point2D(435,186),new Point2D(206,
0),new Point2D(206,186),new Point2D(87,47)]),new Puzzle("019",this,{has_voice:!0,has_sound:!0},{width:298,height:400},new Point2D(this.canvas.width/2-227.5,this.canvas.height/2-245+2),[new Point2D(0,3),new Point2D(205,0),new Point2D(13,235),new Point2D(229,235),new Point2D(159,404),new Point2D(297,404),new Point2D(374,263)]),new Puzzle("001",this,{has_voice:!0,has_sound:!1},{width:298,height:400},new Point2D(this.canvas.width/2-153,this.canvas.height/2-173.5-5),[new Point2D(0,14),new Point2D(89,0),
new Point2D(90,34),new Point2D(84,84),new Point2D(56,164),new Point2D(173,161),new Point2D(20,234)]),new Puzzle("002",this,{has_voice:!0,has_sound:!1},{width:298,height:400},new Point2D(this.canvas.width/2-237.5+20,this.canvas.height/2-188+32),[new Point2D(30,18),new Point2D(0,81),new Point2D(192,5),new Point2D(271,0),new Point2D(271,88),new Point2D(320,164),new Point2D(259,172),new Point2D(184,152),new Point2D(120,138)]),new Puzzle("003",this,{has_voice:!0,has_sound:!1},{width:298,height:400},new Point2D(this.canvas.width/
2-151.5,this.canvas.height/2-177.5-5),[new Point2D(96,0),new Point2D(16,23),new Point2D(97,87),new Point2D(1,145),new Point2D(0,203),new Point2D(55,196),new Point2D(145,209),new Point2D(195,281),new Point2D(142,280),new Point2D(40,277)])];this.puzzle=this.puzzles[this.stage-1]};
Game.prototype.render=function(){this.draw_bg();this.loaded?this.puzzle.loaded?(this.puzzle.draw(),this.draw_remaining()):(this.draw_loading(),0<this.puzzle.items_to_load&&this.puzzle.loaded_items==this.puzzle.items_to_load&&(this.puzzle.items_to_load=0,this.puzzle.iniTimeout=setTimeout("game.puzzle.init();",3E3))):0<this.items_to_load&&this.loaded_items==this.items_to_load&&(this.items_to_load=0,this.init());if(this.debug&&(void 0!=this.mouse&&(document.getElementById("mx").value=this.mouse.x,document.getElementById("my").value=
this.mouse.y,document.getElementById("moving").value=this.mouse.moving),void 0!=this.puzzle&&(document.getElementById("hx").value=this.puzzle.holders[0].position.x,document.getElementById("hy").value=this.puzzle.holders[0].position.y,document.getElementById("hx2").value=this.puzzle.holders[1].position.x,document.getElementById("hy2").value=this.puzzle.holders[1].position.y,document.getElementById("px").value=this.puzzle.pieces[0].position.x,document.getElementById("py").value=this.puzzle.pieces[0].position.y,
document.getElementById("p").value=this.puzzle.num_pieces),this.over?document.getElementById("over").value=this.over.id:document.getElementById("over").value="",this.selected?document.getElementById("selected").value=this.selected.id:document.getElementById("selected").value="",this.loaded))document.getElementById("pp").value=this.placed_pieces.length};
Game.prototype.draw_bg=function(){this.scale||(this.scale=1);this.context.fillStyle="rgba(125, 125, 125, 1)";this.context.fillRect(0,0,this.canvas.width/this.scale,this.canvas.height/this.scale);this.placed_pieces&&(this.context.save(),grad=this.context.createRadialGradient(this.canvas.width/this.scale/2,this.canvas.height/this.scale/2,0,this.canvas.width/this.scale/2,this.canvas.height/this.scale/2,this.canvas.width/this.scale),this.puzzle.num_pieces>this.placed_pieces.length?(grad.addColorStop(1,
"rgb(256, 256, 256)"),grad.addColorStop(0,"rgb(100, 100, 100)")):(grad.addColorStop(0,"rgb(256, 256, 256)"),grad.addColorStop(1,"rgb(100, 100, 100)")),this.context.fillStyle=grad,this.context.fillRect(0,0,this.canvas.width/this.scale,this.canvas.height/this.scale),this.context.restore())};
Game.prototype.draw_remaining=function(){this.context.save();this.fade1+=0.01*this.alpha;0.6<=this.fade1?this.alpha=-1:0.2>=this.fade1&&(this.alpha=1);this.context.fillStyle="rgba(255, 255, 255, "+this.fade1+")";this.context.strokeStyle="rgba(0, 0, 0, 0.5)";this.context.lineWidth=2;this.context.font="bold "+this.font_size+"px Arial";this.context.textBaseline="top";this.context.textAlign="left";this.context.strokeText(this.puzzle.remaining_time,10,40);this.context.fillText(this.puzzle.remaining_time,
10,40);var a=this.context.measureText(this.stage+"/"+this.puzzles.length+" ");this.context.strokeText(this.stage+"/"+this.puzzles.length,this.canvas.width/this.scale-a.width,40);this.context.fillText(this.stage+"/"+this.puzzles.length,this.canvas.width/this.scale-a.width,40);this.context.restore()};
Game.prototype.draw_loading=function(){this.fade1+=0.025;1<=this.fade1&&(this.fade1=0);this.fade2=1-this.fade1;this.context.fillStyle="rgba(255, 255, 255, "+this.fade2+")";this.context.strokeStyle="rgba(255, 255, 255, "+this.fade1+")";this.context.font="bold "+this.font_size+"px Arial";this.context.textBaseline="middle";this.context.textAlign="center";this.context.lineWidth=5;this.context.strokeText("LOADING",this.canvas.width/2,this.canvas.height/2);this.context.fillText("LOADING",this.canvas.width/
2,this.canvas.height/2)};Game.prototype.apply_scale=function(){var a=this.original_width,b=this.original_height;void 0!=this.puzzle&&(a=this.puzzle.width,b=this.puzzle.height);document.getElementById("canvas").width=window.innerWidth;document.getElementById("canvas").height=window.innerHeight;a=document.getElementById("canvas").width/a;b=document.getElementById("canvas").height/b;this.scale=Math.min(a,b);this.context.scale(this.scale,this.scale);console.log("scale: "+this.scale);this.resized=!1};
Game.prototype.getTimer=function(){return(new Date).getTime()-this.start_time};Game.prototype.nextStage=function(){this.is_over=!1;this.stage++;this.num_lines++;this.init();window.m.startGame()};function Holder(a,b,c,d,e){0<arguments.length?(this.id=a,this.game=b,this.img=c,this.position=d,this.moveble=e):(this.id=0,this.moveble=this.position=this.img=this.game=null)}
Holder.prototype.draw=function(){this.game.context.drawImage(this.img,this.position.x,this.position.y)}(function(){for(var a=0,b=["ms","moz","webkit","o"],c=0;c<b.length&&!window.requestAnimationFrame;++c)window.requestAnimationFrame=window[b[c]+"RequestAnimationFrame"],window.cancelAnimationFrame=window[b[c]+"CancelAnimationFrame"]||window[b[c]+"CancelRequestAnimationFrame"];window.requestAnimationFrame||(console.log("!window.requestAnimationFrame"),window.requestAnimationFrame=function(b){var c=
(new Date).getTime(),f=Math.max(0,22-(c-a)),g=window.setTimeout(function(){b(c+f)},f);a=c+f;return g});window.cancelAnimationFrame||(window.cancelAnimationFrame=function(a){clearTimeout(a)})}());if(Modernizr.fullscreen)var RunPrefixMethod=function(a,b){for(var c=["webkit","moz","ms","o",""],d=0,e,f;d<c.length&&!a[e];){e=b;""==c[d]&&(e=e.substr(0,1).toLowerCase()+e.substr(1));e=c[d]+e;f=typeof a[e];if("undefined"!=f)return"function"==f?a[e]():a[e];d++}};
var game=new Game,interval=null,gameInterval=null;window.m={game:game};window.m.interv=function(){interval=setTimeout("window.m.game.mouse.moving = false; document.getElementById('moving').value = false; window.m.intervClear();",500)};window.m.intervClear=function(){clearInterval(interval)};
window.m.stopGame=function(){clearInterval(gameInterval);game.started=!1;window.m.stopSFX();window.m.stopBGM();window.cancelAnimationFrame(game.interval);$("#home").addClass("active");$("#play").show();$(".control").hide();$("#canvas, #canvas_bg").hide();$(".content").show()};
window.m.startGame=function(){gameInterval=setInterval(function(){game.puzzle.remaining_time--},1E3);game.started=!0;window.m.startSFX();window.m.startBGM();loop();$("#home").removeClass("active");$("#canvas, #canvas_bg, .control").show();$(".content, #play, #exitfullscreen, #bgm, #sfx, #autosnap").hide()};window.m.pauseGame=function(){clearInterval(gameInterval);game.started=!1;window.cancelAnimationFrame(game.interval);$("#play").show();$(".control").hide()};
window.m.stopSFX=function(){window.m.game.drip.volume=0;window.m.game.twang.volume=0;window.m.game.drip.pause();window.m.game.twang.pause();$("#sfxoff").hide();$("#sfx").show()};window.m.startSFX=function(){window.m.game.drip.volume=1;window.m.game.twang.volume=1;$("#sfxoff").show();$("#sfx").hide()};window.m.stopBGM=function(){window.m.game.bgm.volume=0;window.m.game.bgm.pause();$("#bgmoff").hide();$("#bgm").show()};
window.m.startBGM=function(){window.m.game.bgm.volume=1;window.m.game.bgm.play();$("#bgmoff").show();$("#bgm").hide()};window.m.autoSnap=function(){window.m.game.auto_snap=!0;$("#autosnapoff").show();$("#autosnap").hide()};window.m.autoSnapOff=function(){window.m.game.auto_snap=!1;$("#autosnapoff").hide();$("#autosnap").show()};window.m.fullscreen=function(){RunPrefixMethod(game.canvas,"RequestFullScreen")};window.m.exitfullscreen=function(){RunPrefixMethod(document,"CancelFullScreen")};
function start(){window.m.startGame()}function stop(){window.m.stopGame()}function pause(){window.m.pauseGame()}function loop(){game.interval=window.requestAnimationFrame(loop,game.canvas);game.render();var a=game.getTimer()-game.time;game.time=game.getTimer();a>game.maxElapsedTime&&(game.maxElapsedTime=a)}
function loadAssetsI(a,b){for(i=0;i<b.length;i++)if("image"==b[i].type)eval("g."+b[i].slug+" = new Image();"),eval("g."+b[i].slug+'.src = "'+b[i].src+'";'),eval("g."+b[i].slug+".onload = g.loaded_items++;");else if("audio"==b[i].type){eval("g."+b[i].slug+" = document.createElement('audio');");eval("g."+b[i].slug+".addEventListener('canplaythrough', itemLoaded(g), false);");var c=document.createElement("source");Modernizr.audio.ogg?(c.type="audio/ogg",c.src=b[i].src+".ogg"):Modernizr.audio.mp3&&(c.type=
"audio/mpeg",c.src=b[i].src+".mp3");""!=c.src?eval("g."+b[i].slug+".appendChild(source);"):a.itens_to_load--}}
function loadAssetsII(a,b){for(i=0;i<b.length;i++)if("image"==b[i].type)eval("g."+b[i].slug+" = new Image();"),eval("g."+b[i].slug+'.src = "'+b[i].src+'";'),eval("g."+b[i].slug+".onload = g.loaded_items++;");else if("audio"==b[i].type){eval("g."+b[i].slug+" = document.createElement('audio');");eval("g."+b[i].slug+".addEventListener('canplaythrough', itemLoadedII(g), false);");var c=document.createElement("source");Modernizr.audio.ogg?(c.type="audio/ogg",c.src=b[i].src+".ogg"):Modernizr.audio.mp3&&
(c.type="audio/mpeg",c.src=b[i].src+".mp3");""!=c.src?eval("g."+b[i].slug+".appendChild(source);"):a.itens_to_load2--}}function itemLoaded(a){a.loaded_items++}function itemLoadedII(a){a.loaded_items2++}function mediaSupport(a,b){var c=document.createElement(b);return"function"==typeof c.canPlayType&&(c=c.canPlayType(a),"maybe"==c.toLowerCase()||"probably"==c.toLowerCase())?!0:!1}function resizeGame(){console.log("window: "+window.innerWidth+", "+window.innerHeight);game.resized=!0;game.init()}
window.addEventListener("resize",resizeGame,!1);window.addEventListener("orientationchange",resizeGame,!1);$(function(){$("#test").popover({animation:!0,placement:"right",delay:{show:200,hide:2E3}});$(".popover-test").popover();$(".tooltip-test").tooltip();$("#promo").alert();$("#next").click(function(){game.nextStage();$("#modal-success").fadeOut()});$("#test").click(function(){start();setTimeout("$('#test').popover('hide')",1500)})});
function Mouse(a){this.game=a;this.y=this.x=0;this.up=this.down=!1;var b=this;this.moving=!1;this.interval=null;this.touches=[];this.element=document.getElementById("canvas");this.element.addEventListener("pointerdown",function(a){b.onPointerDown(a)},!1);this.element.addEventListener("pointermove",function(a){b.onPointerMove(a)},!1);this.element.addEventListener("pointerup",function(a){b.onPointerUp(a)},!1)}
Mouse.prototype.isOverBall=function(a){var b=!1;0<this.x&&0<this.y&&(0<a.x&&0<a.y)&&(this.x>=a.x-a.radius&&this.x<=a.x+a.radius&&this.y>=a.y-a.radius&&this.y<=a.y+a.radius)&&(b=!0,this.game.debug&&console.log("over "+this.x+" "+this.y));return b};
Mouse.prototype.isOverPiece=function(a){this.game.debug&&console.log("over "+a.id);var b=[];b[0]=new Point2D(a.position.x,a.position.y);b[1]=new Point2D(a.position.x+a.img.width,a.position.y);b[2]=new Point2D(a.position.x+a.img.width,a.position.y+a.img.height);b[3]=new Point2D(a.position.x,a.position.y+a.img.height);pt=new Point2D(this.x,this.y);for(var a=!1,c=-1,d=b.length,e=d-1;++c<d;e=c)(b[c].y<=pt.y&&pt.y<b[e].y||b[e].y<=pt.y&&pt.y<b[c].y)&&pt.x<(b[e].x-b[c].x)*(pt.y-b[c].y)/(b[e].y-b[c].y)+b[c].x&&
(a=!a);return a};Mouse.prototype.isOverRect=function(a,b,c,d){var e=[];e[0]=a;e[1]=b;e[2]=c;e[3]=d;pt=new Point2D(this.x,this.y);a=!1;b=-1;c=e.length;for(d=c-1;++b<c;d=b)(e[b].y<=pt.y&&pt.y<e[d].y||e[d].y<=pt.y&&pt.y<e[b].y)&&pt.x<(e[d].x-e[b].x)*(pt.y-e[b].y)/(e[d].y-e[b].y)+e[b].x&&(a=!a);return a};
Mouse.prototype.onPointerMove=function(a){this.touches=a.getPointerList();if(this.touches[0]){var b=this.touches[0],c=b.x/this.game.scale,b=b.y/this.game.scale;this.x=c;this.y=b}this.moving=!0;window.m.interv();this.x=c;this.y=b;this.event=a;this.game.debug&&console.log("move: "+this.x+", "+this.y)};
Mouse.prototype.onPointerDown=function(a){this.touches=a.getPointerList();if(this.touches[0]){var b=this.touches[0],c=b.y/this.game.scale;this.x=b.x/this.game.scale;this.y=c}this.down=!0;this.up=!1;this.event=a;this.game.over&&(this.game.selected=this.game.over);a=!1;this.game.debug&&console.log(this.game.puzzle.pieces.length);for(b=0;b<this.game.puzzle.pieces.length;b++)piece=this.game.puzzle.pieces[b],piece.placed||(!a&&this.isOverPiece(piece)&&(a=!0),a&&!this.game.selected&&(this.game.over=piece,
this.game.selected=this.game.over));this.game.debug&&console.log("down ("+this.game.over.id+") "+this.x+", "+this.y)};
Mouse.prototype.onPointerUp=function(a){this.touches=a.getPointerList();if(this.touches[0]){var b=this.touches[0],c=b.y/this.game.scale;this.x=b.x/this.game.scale;this.y=c}this.up=!0;this.down=!1;this.event=a;this.game.selected&&this.game.selected.near()&&!this.game.selected.placed?(this.game.selected.position.x=this.game.selected.holder.position.x,this.game.selected.position.y=this.game.selected.holder.position.y,this.game.selected.placed=!0,this.game.selected.moveble=!1,this.game.placed_pieces.push(this.game.selected),
0!=this.game.drip.currentTime&&(this.game.drip.currentTime=0),this.game.drip.play()):this.game.selected&&!this.game.selected.near()&&(this.game.selected.p=0,this.game.selected.moveble=!1,this.game.selected.placed=!1,0!=this.game.twang.currentTime&&(this.game.twang.currentTime=0),this.game.twang.play());this.game.selected=null;this.game.debug&&console.log("up")};
function Piece(a,b,c,d,e,f,g,h){0<arguments.length?(this.id=a,this.game=b,this.img=c,this.position=e,this.initial=f,this.holder=d):(this.id=0,this.holder=this.target=this.initial=this.position=this.img=this.game=null,this.moveble=!1);this.m=(d.position.y-this.y)/(d.position.x-this.x);this.b=d.position.y-this.m*d.position.x;this.p=0.5<=Math.random()?0.1:-0.1;this.tolerance=200;this.moveble=!0;this.placed=this.moving=!1}
Piece.prototype.draw=function(){!this.moveble&&!this.placed?(this.position.x=this.initial.x,this.position.y=this.initial.y,this.moveble=!0,this.game.context.save(),this.game.context.globalAlpha=1,this.game.context.beginPath(),this.game.context.drawImage(this.img,this.position.x,this.position.y)):(this.game.context.save(),this.game.context.globalAlpha=this.placed?1:this.game.is_over?1:0.8,this.game.context.fillStyle="rgba(255, 255, 255, 0.5)",this==this.game.selected?this.game.context.fillStyle="rgba(0, 0, 255, 0.1)":
this.game.over==this&&(this.game.context.fillStyle="rgba(255, 0, 0, 0.1)"),this.near()&&this==this.game.selected&&(this.game.context.fillStyle="rgba(0, 255, 0, 0.1)",!0==this.game.auto_snap&&!this.placed&&(this.game.selected.position.x=this.game.selected.holder.position.x,this.game.selected.position.y=this.game.selected.holder.position.y,this.game.selected.placed=!0,this.game.selected.moveble=!1,this.game.placed_pieces.push(this.game.selected),0!=this.game.drip.currentTime&&(this.game.drip.currentTime=
0),this.game.drip.play())),this.game.context.beginPath(),this.game.context.drawImage(this.img,this.position.x,this.position.y),this.game.context.closePath(),this.game.context.restore())};Piece.prototype.near=function(){var a=!1,b=this.position.x-this.holder.position.x,c=this.position.y-this.holder.position.y;b*b+c*c<=this.tolerance&&(a=!0);return a};Piece.prototype.mouse_is_over=function(){return this.game.mouse.isOverPiece(this)};function Point2D(a,b){0<arguments.length&&(this.x=a,this.y=b)}
Point2D.prototype.clone=function(){return new Point2D(this.x,this.y)};Point2D.prototype.add=function(a){return new Point2D(this.x+a.x,this.y+a.y)};Point2D.prototype.addEquals=function(a){this.x+=a.x;this.y+=a.y;return this};
Point2D.prototype.offset=function(a,b){var c=0;if(!(b.x<=this.x||0>=this.x+a.x)){var d;0<b.x*a.y-a.x*b.y?0>this.x?(d=this.x*a.y,d=d/a.x-this.y):0<this.x?(d=this.x*b.y,d=d/b.x-this.y):d=-this.y:b.x<this.x+a.x?(d=(b.x-this.x)*a.y,d=b.y-(this.y+d/a.x)):b.x>this.x+a.x?(d=(a.x+this.x)*b.y,d=d/b.x-(this.y+a.y)):d=b.y-(this.y+a.y);0<d&&(c=d)}return c};Point2D.prototype.rmoveto=function(a,b){this.x+=a;this.y+=b};Point2D.prototype.scalarAdd=function(a){return new Point2D(this.x+a,this.y+a)};
Point2D.prototype.scalarAddEquals=function(a){this.x+=a;this.y+=a;return this};Point2D.prototype.subtract=function(a){return new Point2D(this.x-a.x,this.y-a.y)};Point2D.prototype.subtractEquals=function(a){this.x-=a.x;this.y-=a.y;return this};Point2D.prototype.scalarSubtract=function(a){return new Point2D(this.x-a,this.y-a)};Point2D.prototype.scalarSubtractEquals=function(a){this.x-=a;this.y-=a;return this};Point2D.prototype.multiply=function(a){return new Point2D(this.x*a,this.y*a)};
Point2D.prototype.multiplyEquals=function(a){this.x*=a;this.y*=a;return this};Point2D.prototype.divide=function(a){return new Point2D(this.x/a,this.y/a)};Point2D.prototype.divideEquals=function(a){this.x/=a;this.y/=a;return this};Point2D.prototype.compare=function(a){return this.x-a.x||this.y-a.y};Point2D.prototype.eq=function(a){return this.x==a.x&&this.y==a.y};Point2D.prototype.lt=function(a){return this.x<a.x&&this.y<a.y};Point2D.prototype.lte=function(a){return this.x<=a.x&&this.y<=a.y};
Point2D.prototype.gt=function(a){return this.x>a.x&&this.y>a.y};Point2D.prototype.gte=function(a){return this.x>=a.x&&this.y>=a.y};Point2D.prototype.lerp=function(a,b){return new Point2D(this.x+(a.x-this.x)*b,this.y+(a.y-this.y)*b)};Point2D.prototype.distanceFrom=function(a){var b=this.x-a.x,a=this.y-a.y;return Math.sqrt(b*b+a*a)};Point2D.prototype.min=function(a){return new Point2D(Math.min(this.x,a.x),Math.min(this.y,a.y))};
Point2D.prototype.max=function(a){return new Point2D(Math.max(this.x,a.x),Math.max(this.y,a.y))};Point2D.prototype.toString=function(){return this.x+","+this.y};Point2D.prototype.setXY=function(a,b){this.x=a;this.y=b};Point2D.prototype.setFromPoint=function(a){this.x=a.x;this.y=a.y};Point2D.prototype.swap=function(a){var b=this.x,c=this.y;this.x=a.x;this.y=a.y;a.x=b;a.y=c};
function Puzzle(a,b,c,d,e,f){console.log(a);console.log(f);this.pos=e;this.positions=f;this.num_pieces=f.length;this.time_to_complete=this.remaining_time=30*this.num_pieces;this.items_to_load=2*this.num_pieces+1;this.loaded_items=0;this.id=a;this.game=b;this.pieces=[];this.holders=[];this.position=null;c&&(this.has_voice=c.has_voice,this.has_sound=c.has_sound);d&&(this.width=d.width,this.height=this.height);this.loadAssets()}
Puzzle.prototype.loadAssets=function(){console.log("puzzle start loading...");this.img=new Image;this.img.src="img/"+this.id+"/"+this.id+".png";this.img.onload=this.loaded_items++;for(i=1;i<=this.num_pieces;i++){var a=new Image;a.src=10>i?"img/"+this.id+"/h0"+i+".png":"img/"+this.id+"/h"+i+".png";a.onload=this.loaded_items++;var a=this.placeHolder(i,a),b=new Image;b.src=10>i?"img/"+this.id+"/p0"+i+".png":"img/"+this.id+"/p"+i+".png";b.onload=this.loaded_items++;this.placePiece(i,b,a)}a=[];this.has_voice&&
a.push({type:"audio",src:"img/"+this.id+"/voice",slug:"voice"});this.has_sound&&a.push({type:"audio",src:"img/"+this.id+"/sound",slug:"sound"});if(this.has_voice||this.has_sound)this.itens_to_load2=a.length,loadAssetsII(this,a)};Puzzle.prototype.init=function(){console.log("initing puzzle...");clearTimeout(this.iniTimeout);this.loaded=!0;this.solved=!1};
Puzzle.prototype.placePiece=function(a,b,c){x=Math.floor(Math.random()*(this.game.canvas.width-b.width));y=Math.floor(Math.random()*(this.game.canvas.height-b.height));temp=new Piece(a,this.game,b,c,new Point2D(x,y),new Point2D(x,y),!0,!1);this.pieces.push(temp);console.log("puzzle pieces array length>>"+this.pieces.length)};
Puzzle.prototype.placeHolder=function(a,b){temp=new Holder(a,this.game,b,new Point2D(this.positions[a-1].x+this.pos.x,this.positions[a-1].y+this.pos.y),!1);this.holders.push(temp);console.log("puzzle holders array length>>"+this.holders.length+" "+temp.position.x+","+temp.position.y);return temp};
Puzzle.prototype.draw=function(){if(this.solved)$("#stage").html("Stage "+this.game.stage+" completed!"),$("#pieces").html(this.num_pieces+" pieces in "+(this.time_to_complete-this.remaining_time)+"s"),!this.has_voice&&!this.has_sound?(this.game.chimes.play(),$("#modal-success").fadeIn()):this.has_voice&&this.has_sound?(this.game.chimes.addEventListener("ended",function(){this.currentTime=0;this.pause();window.game.puzzle.voice.play()}),this.voice.addEventListener("ended",function(){this.currentTime=
0;this.pause();window.game.puzzle.sound.play();$("#modal-success").fadeIn()}),this.game.chimes.play()):this.has_voice&&!this.has_sound&&(this.game.chimes.addEventListener("ended",function(){this.currentTime=0;this.pause();window.game.puzzle.voice.play();$("#modal-success").fadeIn()}),this.game.chimes.play()),this.solved=!1;else if(this.num_pieces>this.game.placed_pieces.length){for(var a=0;a<this.holders.length;a++)this.holders[a].draw();for(var b=[],a=0;a<this.pieces.length;a++)piece=this.pieces[a],
piece.placed?piece!=this.game.selected&&piece.draw():b.push(piece);this.game.over=null;null!=this.game.selected&&this.game.selected.moveble&&(this.game.selected.x=this.game.mouse.x,this.game.selected.y=this.game.mouse.y);for(a=0;a<b.length;a++)b[a].draw();this.game.selected&&this.game.selected.draw();null!=this.game.selected&&this.game.selected.moveble&&(this.game.selected.position.x=this.game.mouse.x-this.game.selected.img.width/2,this.game.selected.position.y=this.game.mouse.y-this.game.selected.img.height/
2);0>=this.remaining_time?(window.m.stopGame(),confirm("Timeup! Game Over! Wanna try again?")&&(this.game.is_over=!1,this.game.init(),window.m.startGame())):!this.game.is_over&&this.num_pieces==this.game.placed_pieces.length&&(this.solved=this.game.is_over=!0)}else this.game.context.drawImage(this.img,this.game.canvas.width/2-this.img.width/2,this.game.canvas.height/2-this.img.height/2),window.m.pauseGame()};