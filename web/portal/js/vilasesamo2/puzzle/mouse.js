/*****
 *
 *   Mouse.js
 *
 *****/

/*****
 *
 *   constructor
 *
 *****/
function Mouse(game) {
  this.game = game;
  this.x = 0;
  this.y = 0;
  this.down = false;
  this.up = false;
  var me = this;
  this.moving = false;
  this.interval = null;
  this.touches = [];

  //this.element = window;
  this.element = document.getElementById('canvas');
  
  this.element.addEventListener('pointerdown', function(e){ me.onPointerDown(e) }, false );
  this.element.addEventListener('pointermove', function(e){ me.onPointerMove(e) }, false );
  this.element.addEventListener('pointerup', function(e){ me.onPointerUp(e) }, false );
  

}

/*****
 *
 *   isOverBall
 *    -
 *
 *****/
Mouse.prototype.isOverBall = function(ball) {
  var r = false;
  if((this.x > 0 && this.y > 0)&&(ball.x > 0 && ball.y > 0)){
    if(((this.x >= (ball.x - ball.radius)) && (this.x <= (ball.x + ball.radius)))&&
    ((this.y >= (ball.y - ball.radius)) && (this.y <= (ball.y + ball.radius)))){
      r = true;
      if(this.game.debug==true){
        //console.log('over '+this.x+' '+this.y);
      }
    }
  }
  return r;
}

/*****
 *
 *   isOverPiece
 *    -
 *
 *****/
Mouse.prototype.isOverPiece = function(piece) {
  if(this.game.debug==true)
    //console.log('over '+piece.id)
  var poly = new Array();
  poly[0]= new Point2D(piece.position.x, piece.position.y);
  poly[1]= new Point2D(piece.position.x+piece.img.width, piece.position.y);
  poly[2]= new Point2D(piece.position.x+piece.img.width, piece.position.y+piece.img.height);
  poly[3]= new Point2D(piece.position.x, piece.position.y+piece.img.height);
  pt = new Point2D(this.x, this.y);
  for(var c = false, i = -1, l = poly.length, j = l - 1; ++i < l; j = i)
      ((poly[i].y <= pt.y && pt.y < poly[j].y) || (poly[j].y <= pt.y && pt.y < poly[i].y))
      && (pt.x < (poly[j].x - poly[i].x) * (pt.y - poly[i].y) / (poly[j].y - poly[i].y) + poly[i].x)
      && (c = !c);
  return c;
}

/*****
 *
 *   isOverRect
 *    -
 *
 *****/
Mouse.prototype.isOverRect = function(p1, p2, p3, p4) {
  var poly = new Array();
  poly[0]=p1;
  poly[1]=p2;
  poly[2]=p3;
  poly[3]=p4;
  pt = new Point2D(this.x, this.y);
  for(var c = false, i = -1, l = poly.length, j = l - 1; ++i < l; j = i)
      ((poly[i].y <= pt.y && pt.y < poly[j].y) || (poly[j].y <= pt.y && pt.y < poly[i].y))
      && (pt.x < (poly[j].x - poly[i].x) * (pt.y - poly[i].y) / (poly[j].y - poly[i].y) + poly[i].x)
      && (c = !c);
  return c;
}

/*****
 *
 *   mousemove
 *
 *****/
Mouse.prototype.onPointerMove = function(e) {
  
  //this.touches = e.getPointerList();
  this.touches = e.getPointerList()
  //console.log('-> '+this.touches[0].x);
  //for(var i=0; i<touches.length; i++){
    if(this.touches[0]){
      var touch = this.touches[0];
      var xx = touch.x/this.game.scale;
      var yy = touch.y/this.game.scale;
      this.x = xx;
      this.y = yy;
    }
//  }

  this.moving = true;
  //window.m.interv();
  this.x = xx;
  this.y = yy;
  this.event = e;
  
  //if(this.game.debug==true){
    console.log('move: '+this.x+', '+this.y);
    console.log('scale:'+document.getElementById('canvas').width / (this.game.puzzle.width*3.2))
    //console.log(this.)
  //}

}

/*****
 *
 *   mousedown
 *
 *****/
Mouse.prototype.onPointerDown = function(e) {
  this.touches = e.getPointerList()
  if(this.touches[0]){
    var touch = this.touches[0];
    var xx = touch.x/this.game.scale;
    var yy = touch.y/this.game.scale;
    this.x = xx;
    this.y = yy;
  }

  this.down = true;
  this.up = false;
  this.event = e;
  
  //select
  if(this.game.over){
    this.game.selected = this.game.over;
  }
  //test
  var over = false;
  if(this.game.debug==true)
    //console.log(this.game.puzzle.pieces.length);

  for(var i = 0; i < this.game.puzzle.pieces.length; i++){
    piece = this.game.puzzle.pieces[i];
    if(!piece.placed){
      if(!over && this.isOverPiece(piece))
        over = true;
      if(over && !this.game.selected){
        this.game.over = piece;
        this.game.selected = this.game.over
      }
    }
  }

  if(this.game.debug==true){
    //console.log('down ('+this.game.over.id+') '+this.x+', '+this.y);
  }
}

/*****
 *
 *   mouseup
 *
 *****/
Mouse.prototype.onPointerUp = function(e) {
  this.touches = e.getPointerList()
  if(this.touches[0]){
    var touch = this.touches[0];
    var xx = touch.x/this.game.scale;
    var yy = touch.y/this.game.scale;
    this.x = xx;
    this.y = yy;
  }

  this.up = true;
  this.down = false;
  this.event = e;

  //place
  if((this.game.selected)&&(this.game.selected.near())&&(!this.game.selected.placed)){
    this.game.selected.position.x = this.game.selected.holder.position.x;
    this.game.selected.position.y = this.game.selected.holder.position.y;
    this.game.selected.placed = true;
    this.game.selected.moveble = false;
    this.game.placed_pieces.push(this.game.selected);
    //sfx
    if(this.game.drip.currentTime != 0)
      this.game.drip.currentTime = 0;
    this.game.drip.play();
  }else if((this.game.selected)&&(!this.game.selected.near())){
    this.game.selected.p = 0
    this.game.selected.moveble = false;
    this.game.selected.placed = false;
    //sfx
    if(!iOS){
      game.drip.src = "http://cmais.com.br/portal/audio/vilasesamo/puzzle/twang.mp3";
      game.drip.play();
    }else{
      game.drip.src = "http://cmais.com.br/portal/audio/vilasesamo/puzzle/twang.mp3";
      game.drip.play();
    }
    /*
    if(!window.m.iOS){
      if(window.m.game.twang.currentTime != 0)
        window.m.game.twang.currentTime = 0;
      window.m.game.twang.play();
    }else{
      window.m.game.drip.src = "http://cmais.com.br/portal/audio/vilasesamo/puzzle/twang.mp3";
      window.m.game.drip.play();
    }
    */
  }

  //unselect
  this.game.selected = null;

  if(this.game.debug==true){
    //console.log('up');
  }

}

