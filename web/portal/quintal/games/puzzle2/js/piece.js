/*****
 *
 *   Piece.js
 *
 *****/

/*****
 *
 *   constructor
 *
 *****/
function Piece(id, width, height, x, y, tx, ty) {
  if(arguments.length > 0) {
    this.id = id;
    this.width = width;
    this.height = height;
    this.x = x;
    this.y = y;
    this.target = new Point2D(tx,ty);
    this.startPoint = new Point2D(this.x,this.y);
  }
  else{
    this.id = 0;
    this.width = 10;
    this.height = 10;
    this.x = 0;
    this.y = 0;
    this.target = new Point2D(0,0);
    this.startPoint = new Point2D(0,0);
  }
  this.moving = false;
}


Piece.prototype.draw = function() {
  this.context.beginPath();
  //this.context.translate(this.x, this.y);
  this.context.strokeRect(this.x-this.width/2,this.y-this.height/2,this.width,this.height);
  //this.context.fill();
  this.context.closePath();
}
