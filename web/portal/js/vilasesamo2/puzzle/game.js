//$('body').prepend('<div id="grid-size"></div>')
function Game(canvas) {
  this.started = false;
  this.stage = 1;
  this.num_lines = 2;
  this.scale = 1;
  this.alpha = 1;
  this.fade1 = 0;
  this.fade2 = 0;
  this.resized = true;
  this.debug = false;
      
  this.items_to_load = 4;
  this.loaded_items = 0;
  this.loaded = false;
  this.interval = null;
  this.maxElapsedTime = 0;
  this.start_time = 0;

  //init
  this.canvas = document.getElementById('canvas');
  this.context = this.canvas.getContext('2d');

  //canvas resize
  this.canvas.width = Math.round(window.innerWidth);
  this.canvas.height = Math.round(window.innerHeight);
  console.log("canvas: "+this.canvas.width+", "+this.canvas.height);
  this.original_width = this.canvas.width;
  this.original_height = this.canvas.height;

  //size  
  //this.font_size = Math.round(this.canvas.width/20);
  this.font_size = 40;
  this.scaled_width = (this.canvas.width/this.scale)/2;
  this.scaled_height = (this.canvas.height/this.scale)/2;
  console.log('scaled_width: '+this.scaled_width);
  console.log('scaled_height: '+this.scaled_height);

  
  this.puzzle = new Puzzle("001", this, "http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/puzzle/001/001.png", new Array("http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/puzzle/001/p01.png","http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/puzzle/001/p02.png","http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/puzzle/001/p03.png","http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/puzzle/001/p04.png","http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/puzzle/001/p05.png"), new Array("http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/puzzle/001/h01.png","http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/puzzle/001/h02.png","http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/puzzle/001/h03.png","http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/puzzle/001/h04.png","http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/puzzle/001/h05.png"), {has_voice: false, has_sound: false}, {width: 298, height: 400}, new Point2D((this.canvas.width/2-306/2), (this.canvas.height/2-347/2)), new Array(
      new Point2D(-100,-100),
      new Point2D(218,-78),
      new Point2D(200,249),
      new Point2D(-127,191),
      new Point2D(-284,130)));
  
  this.loadAssets();
}

Game.prototype.loadAssets = function() {
  console.log('start loading...');
  
  this.assets = Array({
      type: "audio",
      src: "http://cmais.com.br/portal/audio/vilasesamo/puzzle/drip",
      slug: "drip"
    },{
      type: "audio",
      src: "http://cmais.com.br/portal/audio/vilasesamo/puzzle/twang",
      slug: "twang"
    },/*{
      type: "audio",
      src: "audio/01_Alex_Must_Once_Upon_a_Time",
      slug: "bgm"
    },*/{
      type: "audio",
      src: "http://cmais.com.br/portal/audio/vilasesamo/puzzle/chimes",
      slug: "chimes"
    }
  );
  
  this.items_to_load = this.assets.length;
  loadAssetsI(this, this.assets);
};

Game.prototype.init = function(){
  console.log('loading done!')
  console.log('initing...')
  clearTimeout(this.iniTimeout);
  
  //IMAGE SIZE
  if(this.resized)
    this.apply_scale();

  this.loaded = true;
  this.auto_snap = true;
  this.pieces = new Array();
  this.holders = new Array();
  this.placed_pieces = new Array();
  this.moving = true;
  this.selected = false;
  this.over = null;
  this.is_over = false;

  this.num_pieces = 5;
  
  this.clock_interval = null;
  this.mouse = new Mouse(this);
  
  this.puzzles = [
    new Puzzle("001", this, "http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/puzzle/001/001.png", new Array("http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/puzzle/001/p01.png","http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/puzzle/001/p02.png","http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/puzzle/001/p03.png","http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/puzzle/001/p04.png","http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/puzzle/001/p05.png"), new Array("http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/puzzle/001/h01.png","http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/puzzle/001/h02.png","http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/puzzle/001/h03.png","http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/puzzle/001/h04.png","http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/puzzle/001/h05.png"), {has_voice: false, has_sound: false}, {width: 298, height: 400}, new Point2D((this.canvas.width/2-306/2), (this.canvas.height/2-347/2)), new Array(
      new Point2D(-100,-100),
      new Point2D(218,-78),
      new Point2D(200,249),
      new Point2D(-127,191),
      new Point2D(-284,130))),
    new Puzzle("002", this, "http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/puzzle/002/002.png", new Array("http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/puzzle/002/p01.png","http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/puzzle/002/p02.png","http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/puzzle/002/p03.png","http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/puzzle/002/p04.png","http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/puzzle/002/p05.png","http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/puzzle/002/p06.png","http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/puzzle/002/p07.png"), new Array("http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/puzzle/002/h01.png","http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/puzzle/002/h02.png","http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/puzzle/002/h03.png","http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/puzzle/002/h04.png","http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/puzzle/002/h05.png","http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/puzzle/002/h06.png","http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/puzzle/002/h07.png"), {has_voice: false, has_sound: false}, {width: 298, height: 400}, new Point2D((this.canvas.width/2-306/2), (this.canvas.height/2-347/2)), new Array(
      new Point2D(35,-151),
      new Point2D(-305,-135),
      new Point2D(-304,179),
      new Point2D(-181,174),
      new Point2D(197,283),
      new Point2D(118,125),
      new Point2D(332,-141))),
    new Puzzle("003", this, "http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/puzzle/003/003.png", new Array("http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/puzzle/003/p01.png","http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/puzzle/003/p02.png","http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/puzzle/003/p03.png","http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/puzzle/003/p04.png","http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/puzzle/003/p05.png","http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/puzzle/003/p06.png","http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/puzzle/003/p07.png","http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/puzzle/003/p08.png","http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/puzzle/003/p09.png"), new Array("http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/puzzle/003/h01.png","http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/puzzle/003/h02.png","http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/puzzle/003/h03.png","http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/puzzle/003/h04.png","http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/puzzle/003/h05.png","http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/puzzle/003/h06.png","http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/puzzle/003/h07.png","http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/puzzle/003/h08.png","http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/puzzle/003/h09.png"), {has_voice: false, has_sound: false}, {width: 298, height: 400}, new Point2D((this.canvas.width/2-306/2), (this.canvas.height/2-347/2)), new Array(
      new Point2D(-270,-149),
      new Point2D(-269,60),
      new Point2D(-323,293),
      new Point2D(-12,225),
      new Point2D(277,213),
      new Point2D(344,40),
      new Point2D(87,60),
      new Point2D(66,-148),
      new Point2D(380,-148)))
  ];

  this.puzzle = this.puzzles[this.stage-1];
  //this.puzzle.stopGame();
  this.puzzle.init();
};

Game.prototype.render = function() {
  
  this.draw_bg();
  this.draw_logo();
    
  //LOADING
  if(!this.loaded){
    if((this.items_to_load > 0)&&(this.loaded_items == this.items_to_load)){
      this.items_to_load = 0;
      this.init();
    }
  }
  else{
    //PUZZLE LOADING
    if(!this.puzzle.loaded){
      this.draw_loading();
      if((this.puzzle.items_to_load > 0)&&(this.puzzle.loaded_items == this.puzzle.items_to_load)){
        this.puzzle.items_to_load = 0;
        this.puzzle.iniTimeout = setTimeout("game.puzzle.init();", 3000);
      }
    }
    else{
      //DRAW PUZZLE
      this.puzzle.draw();
      
      //REMAINING TIME
      this.draw_remaining();
    }
  
  }

  //DEBUG
  if(this.debug){
    /*
    if(this.mouse != undefined){
      document.getElementById('mx').value = this.mouse.x;
      document.getElementById('my').value = this.mouse.y;
      document.getElementById('moving').value = this.mouse.moving;
    }
  
    if(this.puzzle != undefined){
      document.getElementById('hx').value = this.puzzle.holders[0].position.x;
      document.getElementById('hy').value = this.puzzle.holders[0].position.y;
      document.getElementById('hx2').value = this.puzzle.holders[1].position.x;
      document.getElementById('hy2').value = this.puzzle.holders[1].position.y;
      document.getElementById('px').value = this.puzzle.pieces[0].position.x;
      document.getElementById('py').value = this.puzzle.pieces[0].position.y;
      document.getElementById('p').value = this.puzzle.num_pieces;
    }
    
    if(this.over)
      document.getElementById('over').value = this.over.id;
    else
      document.getElementById('over').value = "";
    if(this.selected)
      document.getElementById('selected').value = this.selected.id;
    else
      document.getElementById('selected').value = "";
  
    if(this.loaded)
      document.getElementById('pp').value = this.placed_pieces.length;
    */
  }

};


Game.prototype.draw_bg = function() {
  if(!this.scale) this.scale = 1;
  this.context.fillStyle = "rgba(1, 114, 249, 1)";
  this.context.fillRect(0,0,this.canvas.width/this.scale,this.canvas.height/this.scale);

  if(this.placed_pieces){
    this.context.save();
    grad = this.context.createRadialGradient(this.canvas.width/this.scale/2, this.canvas.height/this.scale/2, 0, this.canvas.width/this.scale/2, this.canvas.height/this.scale/2, this.canvas.width/this.scale);
    if(this.puzzle.num_pieces > this.placed_pieces.length){
      grad.addColorStop(1, ['rgb(', 256, ', ', 256, ', ', 256, ')'].join(''));
      grad.addColorStop(0, ['rgb(', 100, ', ', 100, ', ', 100, ')'].join(''));
    }else{
      grad.addColorStop(0, ['rgb(', 256, ', ', 256, ', ', 256, ')'].join(''));
      grad.addColorStop(1, ['rgb(', 100, ', ', 100, ', ', 100, ')'].join(''));
    }
    //this.context.fillStyle = grad;
    this.context.fillRect(0,0,this.canvas.width/this.scale, this.canvas.height/this.scale);
    this.context.restore();
  }
};
  
Game.prototype.draw_logo = function() {
	 var img = new Image();
	  img.src = 'http://cmais.com.br/portal/images/capaPrograma/vilasesamo2/puzzle/icones/logo.png';
  if(!this.scale) this.scale = 1;
  //this.context.fillStyle = "rgba(1, 114, 249, 1)";
	this.context.beginPath();
	this.context.rect(10, 50, 200, 100);
	//this.context.fill();
	this.context.lineWidth = 5;
	this.context.strokeStyle = 'black';
	this.context.drawImage(img, 10, 50, 200, 100);
	
	
};
  /*
  var width = this.canvas.width, 
    height = this.canvas.height, 
    x = this.canvas.width, 
    y = this.canvas.height,
    rx =this.canvas.width/2,
    ry = this.canvas.height/2;
  if(this.mouse != undefined){
    rx = this.mouse.x;
    ry = this.mouse.y;
  }
  var xc = ~~(256 * rx / width);
  var yc = ~~(256 * ry / height);
  
  this.context.save();
  grad = this.context.createRadialGradient(rx, ry, 0, rx, ry, this.canvas.width); 
  grad.addColorStop(0, '#000');
  grad.addColorStop(1, ['rgb(', 256, ', ', 0, ', ', 0, ')'].join(''));
  this.context.fillStyle = grad;
  this.context.fillRect(0,0,x,y);
  this.context.restore();
  */

  /*
  //puzzle image
  var offsetx = Math.round(this.scaled_width-(this.img_width)/2);
  var offsety = Math.round(this.scaled_height-(this.img_height)/2);
  offsety += 40;
  this.context.globalAlpha = 0.2;
  this.context.drawImage(this.img, offsetx, offsety, this.img_width, this.img_height);
  */
//};

Game.prototype.draw_remaining = function() {
  this.context.save();
  this.fade1 = this.fade1+(0.010*this.alpha);
  if(this.fade1 >= 0.6)
    this.alpha = -1;
  else if(this.fade1 <= 0.2)
    this.alpha = 1;
  this.context.fillStyle = "rgba(255, 220, 40, 0.9)";
  this.context.strokeStyle = "rgba(0, 0, 0, 0.5)";
  this.context.lineWidth = 2;
  this.context.font = "bold "+this.font_size+"px Arial";
  this.context.textBaseline = 'top';
  this.context.textAlign = 'left';
  this.context.strokeText("Tempo: "+this.puzzle.remaining_time, 10, 150);
  this.context.fillText("Tempo: "+this.puzzle.remaining_time, 10, 150);
  var metrics = this.context.measureText(this.stage+"/"+this.puzzles.length+" ");
  this.context.strokeText(this.stage+"/"+this.puzzles.length, this.canvas.width/this.scale-metrics.width, 80,80);
  this.context.fillText(this.stage+"/"+this.puzzles.length, this.canvas.width/this.scale-metrics.width, 80,80);
  this.context.restore();
};

Game.prototype.draw_loading = function() {
  this.fade1 = this.fade1+0.025;
  if(this.fade1 >= 1)
    this.fade1 = 0;
  this.fade2 = 1-this.fade1;
  
  //this.context.fillStyle = "rgba(255, 255, 255, "+this.fade2+")";
  this.context.strokeStyle = "rgba(255, 255, 255, "+this.fade1+")";
  this.context.font = "bold "+this.font_size+"px Arial";
  this.context.textBaseline = 'middle';
  this.context.textAlign = 'center';
  this.context.lineWidth = 5;
  this.context.strokeText("LOADING", (this.canvas.width/this.scale)/2, (this.canvas.height/this.scale)/2);
  this.context.fillText("LOADING", (this.canvas.width/this.scale)/2, (this.canvas.height/this.scale)/2);
  //console.log('loading...');
};

Game.prototype.apply_scale = function(){

  var w = this.original_width;
  var h = this.original_height;
  
  if(game.puzzle.width != undefined){
    w = game.puzzle.width*3.2;
    h = game.puzzle.height*3.2;
  }

  document.getElementById('canvas').width = window.innerWidth;
  document.getElementById('canvas').height = window.innerHeight;
  
  var rw = document.getElementById('canvas').width / w;
  var rh = document.getElementById('canvas').height / h;
  this.scale = Math.min(rw,rh);
  //this.scale = rh;
  //this.scale = 1;

  this.context.scale(this.scale,this.scale);
  //console.log('scale: '+this.scale+' pw: '+w+' cw:'+document.getElementById('canvas').width);  
  this.resized = false;
  $(".modal-dialog").css("margin-top", "-"+$(".modal-dialog").height()/2+"px").css("margin-left", "-"+$(".modal-dialog").width()/2+"px");
  //alert('scale: '+this.scale)
};

////////////////////////////////////////
/*
Game.prototype.clockTick = function() {
  this.puzzle.remaining_time--;
}
*/
Game.prototype.getTimer = function() {
  return (new Date().getTime() - this.start_time); //milliseconds
};

Game.prototype.restart = function() {
  this.resized = true;
  this.init();
  //this.puzle.init();
};

Game.prototype.nextStage = function() {
  $(".modal-dialog").find('img').remove();
  if(this.puzzles.length < this.stage+1){
    this.stage = this.stage-2;
    this.is_over = true;
    this.solved = true;
    this.init();
    startGame();
    /*
    this.is_over = true;
    this.solved = true;
    stopGame();
    */
  }else{
    this.is_over = false;
    this.stage++;
    this.num_lines++;
    this.init();
    startGame();
  }
};

