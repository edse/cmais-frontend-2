function Game(canvas) {
  this.canvas = canvas;
  this.img_width = 480;
  this.img_height = 480;
  this.init();
}

Game.prototype.init = function(){
  this.num_lines = document.getElementById('scale').value;
  this.num_pieces = document.getElementById('scale').value * document.getElementById('scale').value;
  this.piece_width = this.img_width / this.num_lines;
  this.piece_height = this.img_height / this.num_lines;
  this.pieces = new Array();
  this.holders = new Array();
  this.moving = true;
  this.selected = null;
  this.over = null;
  this.context = this.canvas.getContext("2d");
  this.mouse = new Mouse(this);
  this.placeHolders();
  this.placePieces();
}

Game.prototype.placePieces = function(){
  for(i=0; i<this.num_pieces; i++){
    x = Math.floor(Math.random()*canvas.width-this.piece_width)+this.piece_width;
    y = Math.floor(Math.random()*canvas.height-this.piece_height)+this.piece_height;
    temp = {
      id:i+1,
      x:x,
      y:y,
      width:this.piece_width,
      height:this.piece_height,
      startPoint: new Point2D(this.x,this.y),
      target: new Point2D(this.holders[i].x,this.holders[i].y),
      moveble:true,
      placed:false
    }
    this.pieces.push(temp);
    console.log('pieces array length>>'+this.pieces.length);
  }
}

Game.prototype.placeHolders = function(){
  var pieces = 1;
  var offsetx = this.canvas.width/this.img_width;
  var offsety = this.canvas.height/this.img_height;
  for(var i = 1; i <= this.num_lines; ++i) {
    for(var j = 1; j <= this.num_lines; ++j) {
      temp = {
        id:pieces,
        x:j*this.piece_width+offsetx,
        y:i*this.piece_height+offsety,
        moveble:false
      }
      this.holders.push(temp);
      console.log('holders array length>>'+this.holders.length);
      pieces++;
    }
  }
}

////////////////////////////////////////

Game.prototype.draw = function() {
}

Game.prototype.render = function() {
  
  //bg
  this.context.fillStyle = '#FEFEFE';
  this.context.fillRect(0,0,this.canvas.width,this.canvas.height);
  //box
  this.context.strokeStyle = '#000000';
  this.context.lineWidth = 1;
  this.context.strokeRect(1,1,this.canvas.width-2,this.canvas.height-2);

  this.context.save();

  for(var i = 0; i < this.holders.length; i++){
    holder = this.holders[i];
    this.context.fillStyle = "rgba(255, 255, 255, 0.5)";
    this.context.beginPath();
    this.context.strokeRect(holder.x-this.piece_width/2,holder.y-this.piece_height/2,this.piece_width,this.piece_height);
    this.context.fillRect(holder.x-this.piece_width/2,holder.y-this.piece_height/2,this.piece_width,this.piece_height);
    this.context.fillStyle = "rgba(0, 0, 0, 0.5)";
    this.context.fillText(holder.id, holder.x-3, holder.y+3);
    this.context.closePath();
  }

  var overNone = true;
  for(var i = 0; i < this.pieces.length; i++){
    piece = this.pieces[i];
    this.context.fillStyle = "rgba(255, 255, 255, 0.5)";
    over = this.mouse.isOverPiece(piece);
    if(!this.selected){
      if(over){
        this.over = piece;
        overNone = false;
        this.context.fillStyle = "rgba(255, 0, 0, 0.5)";
      }
    }else if(piece == this.selected){
      this.context.fillStyle = "rgba(0, 0, 255, 0.5)";
    }
    
    //target distance
    var dx = piece.x - piece.target.x;
    var dy = piece.y - piece.target.y;
    var distance = (dx * dx + dy * dy);
    if(distance <= 80){
      this.context.fillStyle = "rgba(0, 255, 0, 0.5)";
      piece.placed = true;
    }else
      piece.placed = false;

    //piece.draw();
    this.context.beginPath();
    //this.context.translate(this.x, this.y);
    this.context.strokeRect(piece.x-piece.width/2,piece.y-piece.height/2,piece.width,piece.height);
    this.context.fillRect(piece.x-piece.width/2,piece.y-piece.height/2,piece.width,piece.height);
    this.context.fillStyle = "rgba(0, 0, 0, 0.5)";
    this.context.fillText(piece.id, piece.x-3, piece.y+3);
    //this.context.fill();
    this.context.closePath();
  }
  this.context.restore();

  if(overNone){
    this.over = null;
  }
  
  //move
  if((this.selected != null)&&(this.selected.moveble)){
    /*
    var dx = this.mouse.x - this.selected.x;
    var dy = this.mouse.y - this.selected.y;
    this.selected.x = this.mouse.x-dx;
    this.selected.y = this.mouse.y-dy;
    */
    this.selected.x = this.mouse.x;
    this.selected.y = this.mouse.y;
  }

  this.context.restore();
  
  
  document.getElementById('mx').value = this.mouse.x;
  document.getElementById('my').value = this.mouse.y;

  //document.getElementById('px').value = this.pieces[0].x;
  //document.getElementById('py').value = this.pieces[0].y;

  document.getElementById('hx').value = this.holders[0].x;
  document.getElementById('hy').value = this.holders[0].y;
  document.getElementById('hx2').value = this.holders[1].x;
  document.getElementById('hy2').value = this.holders[1].y;

  document.getElementById('moving').value = this.mouse.moving;
  if(this.over)
    document.getElementById('over').value = this.over.id;
  else
    document.getElementById('over').value = "";
  if(this.selected)
    document.getElementById('selected').value = this.selected.id;
  else
    document.getElementById('selected').value = "";

  document.getElementById('p').value = this.num_pieces;
  document.getElementById('l').value = this.num_lines;
  document.getElementById('pw').value = this.piece_width;
  document.getElementById('ph').value = this.piece_height;

}

Game.prototype.update = function() {
  /*
  var running = false;
  for(var i = 0; i < this.pieces.length; i++){
    piece = this.pieces[i];
    ball.x = this.mouse.x;
    ball.y = this.mouse.y;
  }
  this.running = running;
  */
}

