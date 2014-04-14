/*****
 *
 *   piece.js
 *
 *****/

/*****
 *
 *   constructor
 *
 *****/
function Piece(id, game, img, holder, position, initial, moveble, placed) {
  if(arguments.length > 0) {
    this.id = id;
    this.game = game;
    this.img = img;
    this.position = position;
    this.initial = initial;
    this.holder = holder;
  }
  else{
    this.id = 0;
    this.game = null;
    this.img = null;
    this.position = null;
    this.initial = null;
    this.target = null;
    this.holder = null;
    this.moveble = false;
  }
  
  //for animation
  this.m = (holder.position.y - this.y)/(holder.position.x - this.x);
  this.b = holder.position.y - (this.m * holder.position.x);
  if(Math.random() >= 0.5)
    this.p = 0.1;
  else
    this.p = -0.1;

  this.tolerance = 550;
  this.moveble = true;
  this.moving = false;
  this.placed = false;
}


Piece.prototype.draw = function() {
  if((!this.moveble)&&(!this.placed)){
    this.position.x = this.initial.x;
    this.position.y = this.initial.y;
    this.moveble = true;

    /*
    this.p = this.p*1.1;
    var x = this.position.x + this.p;
    var y = this.m * this.position.x + this.b;
    if((x > this.game.canvas.width-this.img.width) || 
      (y > this.game.canvas.height-this.img.height) || 
      (x < this.img.width) || 
      (y < this.img.height)){
      this.moveble = true;
      this.position.x = x;
      this.position.y = y;
      this.initial = new Point2D(x,y)
    }
    */
    this.game.context.save();
    //this.game.context.translate(this.game.canvas.width/2, this.game.canvas.height/2)
    this.game.context.globalAlpha = 1;
    this.game.context.beginPath();
    this.game.context.drawImage(this.img, this.position.x/this.game.scale, this.position.y/this.game.scale);
  }
  else{
    this.game.context.save();
    //this.game.context.translate(this.game.canvas.width/2, this.game.canvas.height/2)
    if(this.placed)
      this.game.context.globalAlpha = 1
    else if(!this.game.is_over)
      this.game.context.globalAlpha = 0.8
    else
      this.game.context.globalAlpha = 1
    /*
    this.game.context.fillStyle = "rgba(255, 255, 255, 0.5)";
  
    if(this == this.game.selected){
      this.game.context.fillStyle = "rgba(0, 0, 255, 0.1)";
    }
    else if(this.game.over == this)
      this.game.context.fillStyle = "rgba(255, 0, 0, 0.1)";
    */
    //target distance
    if(this.near() && this == this.game.selected){
      this.game.context.fillStyle = "rgba(0, 255, 0, 0.1)";
      if((this.game.auto_snap == true)&&(!this.placed)){
        //place
        this.game.selected.position.x = this.game.selected.holder.position.x;
        this.game.selected.position.y = this.game.selected.holder.position.y;
        this.game.selected.placed = true;
        this.game.selected.moveble = false;
        this.game.placed_pieces.push(this.game.selected);
        //sfx
        if(!iOS){
          //if(game.drip.currentTime != 0)
            //game.drip.currentTime = 0;
          game.drip.src = "http://cmais.com.br/portal/audio/vilasesamo/puzzle/drip.mp3";
          game.drip.play();
          //game.drip.play();
        }else{
          game.drip.src = "http://cmais.com.br/portal/audio/vilasesamo/puzzle/drip.mp3";
          game.drip.play();
        }
        //alert('drip')
      }
    }
  
    //draw
    this.game.context.beginPath();
    if(this.position.x<0){
      this.position.x = 0;
    }
    if(this.position.y<0){
      this.position.y = 0;
    }
    if(this.position.y > $("#grid-size").height()){
      console.log("y maior");
      this.position.y = $("#grid-size").height() - this.img.height/2; 
    }

    this.game.context.drawImage(this.img, this.position.x, this.position.y);
    
    this.game.context.closePath();
    this.game.context.restore();
  }
  /*
  if(this.game.debug){
    console.log('pieace: '+this.id+' drew at: '+this.position.x+', '+this.position.y);
  }
  */
};

Piece.prototype.near = function() {
  //target distance
  var r = false
  var dx = this.position.x - this.holder.position.x;
  var dy = this.position.y - this.holder.position.y;
  var distance = (dx * dx + dy * dy);
  if(distance <= this.tolerance){
    r = true;
  }
  /*
  if(this.game.debug){
    console.log(this.id+': '+distance)
  }
  */
  return r;
};

Piece.prototype.mouse_is_over = function() {
  return this.game.mouse.isOverPiece(this);
};