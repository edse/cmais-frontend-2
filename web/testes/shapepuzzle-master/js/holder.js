/*****
 *
 *   holder.js
 *
 *****/

/*****
 *
 *   constructor
 *
 *****/
function Holder(id, game, img, position, moveble) {
  if(arguments.length > 0) {
    this.id = id;
    this.game = game;
    this.img = img;
    this.position = position;
    this.moveble = moveble;
  }
  else{
    this.id = 0;
    this.game = null;
    this.img = null;
    this.position = null;
    this.moveble = null;
  }
}

Holder.prototype.draw = function() {
  /*
  this.game.context.save();
  this.game.context.globalAlpha = 0.15
  this.game.context.fillStyle = "rgba(255, 255, 255, 0.5)";
  this.game.context.beginPath();
  */
  this.game.context.save();
  //this.game.context.translate(this.game.canvas.width/2, this.game.canvas.height/2);
  this.game.context.drawImage(this.img, this.position.x, this.position.y);
  this.game.context.restore();
  
  //this.game.context.strokeRect(this.x-this.game.piece_width/2,this.y-this.game.piece_height/2,this.game.piece_width,this.game.piece_height);
  //this.game.context.fillRect(holder.x-this.piece_width/2,holder.y-this.piece_height/2,this.piece_width,this.piece_height);
  /*
  this.game.context.fillStyle = "rgba(0, 0, 0, 0.5)";
  this.game.context.fillText(this.id, this.x-3, this.y+3);
  this.game.context.closePath();
  this.game.context.restore();
  */

  /*
  if(this.game.debug)
    console.log('holder: '+this.id+' drew');
  */

}
