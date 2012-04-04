/*****
 *
 *   Ball.js
 *
 *****/

/*****
 *
 *   constructor
 *
 *****/
function Ball(id, radius, x, y) {
  if(arguments.length > 0) {
    this.id = id;
    this.radius = radius;
    this.x = x;
    this.y = y;
  }
  else{
    this.id = 0;
    this.radius = 10;
    this.x = 0;
    this.y = 0;
  }
  this.speed = 0;
  this.angle = 0;
  this.velocityx = 0;
  this.velocityy = 0;
  this.mass = this.radius*8;
  this.nextx = this.x;
  this.nexty = this.y;
  this.anglespeed = 0;
  this.rangle = 0;
  this.speed = 0;
  this.center = new Point2D(this.x,this.y);
  this.startPoint = new Point2D(this.x,this.y);
  this.running = false;
}

/*****
 *
 *   draw
 *
 *****/
Ball.prototype.draw = function() {
  return true;
};


