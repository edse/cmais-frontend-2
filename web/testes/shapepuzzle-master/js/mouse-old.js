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

  //this.element = window;
  this.element = document.getElementById('canvas');
  
  this.element.addEventListener('mousemove', function(e){ me.mousemove(e) }, false);
  this.element.addEventListener('mousedown', function(e){ me.mousedown(e) }, false);
  this.element.addEventListener('mouseup', function(e){ me.mouseup(e) }, false);
  this.element.addEventListener("keyup", function(e){ me.keyup(e) }, false);
  
  this.element.addEventListener('touchstart', function(e) { me.touchstart(e) }, false);
  this.element.addEventListener('touchmove', function(e) { me.touchmove(e) }, false);
  this.element.addEventListener('touchend', function(e) { me.touchend(e) }, false);
  
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

      if(this.game.debug){
        console.log('over '+this.x+' '+this.y);
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
Mouse.prototype.mousemove = function(e) {
  body_scrollLeft = document.body.scrollLeft,
  element_scrollLeft = document.documentElement.scrollLeft,
  body_scrollTop = document.body.scrollTop,
  element_scrollTop = document.documentElement.scrollTop,
  offsetLeft = this.element.offsetLeft,
  offsetTop = this.element.offsetTop;
  
  var xx, yy;
  if (e.pageX || e.pageY) {
    xx = e.pageX;
    yy = e.pageY;
  } else {
    xx = e.clientX + body_scrollLeft + element_scrollLeft;
    yy = e.clientY + body_scrollTop + element_scrollTop;
  }
  
  //xx -= offsetLeft;
  //yy -= offsetTop;
  
  //xx += document.getElementById("game").style.marginLeft*2;
  //yy += document.getElementById("game").style.marginTop*2;

  xx = xx/this.game.scale;
  yy = yy/this.game.scale;

  this.moving = true;
  window.m.interv();
  this.x = xx;
  this.y = yy;
  this.event = e;

  /*
  //if(this.game.debug){
    document.getElementById('moving').value = this.moving;
    document.getElementById('mx').value = this.x;
    document.getElementById('my').value = this.y;
    console.log('move '+xx);
  //}
  */
}

/*****
 *
 *   mousedown
 *
 *****/
Mouse.prototype.mousedown = function(e) {
  this.down = true;
  this.up = false;
  this.event = e;
  
  //select
  if(this.game.over){
    this.game.selected = this.game.over;
  }

  if(this.game.debug){
    console.log('down');
  }
}

/*****
 *
 *   mouseup
 *
 *****/
Mouse.prototype.mouseup = function(e) {
  e.preventDefault();

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
    if(this.game.twang.currentTime != 0)
      this.game.twang.currentTime = 0;
    this.game.twang.play();
  }

  //unselect
  this.game.selected = null;

  if(this.game.debug){
    console.log('up');
  }

}

/*****
 *
 *   touchstart
 *
 *****/
Mouse.prototype.touchstart = function(e) {
  //if(this.game.debug)
    console.log('touch start');

  this.game.drip.play();

  e.preventDefault();

  this.moving = false;
  this.down = true;
  this.up = false;
  this.event = e;
  
  if(this.game.debug){
    console.log('touch start');
  }
  
}

/*****
 *
 *   touchstop
 *
 *****/
Mouse.prototype.touchend = function(e) {
  //if(this.game.debug)
    console.log('touchend');
    
  e.preventDefault();

  this.moving = false;
  this.up = true;
  this.down = false;
  this.x = -1;
  this.y = -1;

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
    this.game.selected = null;
    //sfx
    if(this.game.twang.currentTime != 0)
      this.game.twang.currentTime = 0;
    this.game.twang.play();
  }
  
  //unselect
  this.game.selected = null;
 
}

/*****
 *
 *   touchmove
 *
 *****/
Mouse.prototype.touchmove = function(e) {

  e.preventDefault();

  body_scrollLeft = document.body.scrollLeft,
  element_scrollLeft = document.documentElement.scrollLeft,
  body_scrollTop = document.body.scrollTop,
  element_scrollTop = document.documentElement.scrollTop,
  offsetLeft = this.element.offsetLeft,
  offsetTop = this.element.offsetTop;

  var xx, yy, touch_event = e.touches[0]; //first touch
  if (touch_event.pageX || touch_event.pageY) {
    xx = touch_event.pageX;
    yy = touch_event.pageY;
  } else {
    xx = touch_event.clientX + body_scrollLeft + element_scrollLeft;
    yy = touch_event.clientY + body_scrollTop + element_scrollTop;
  }  
  //xx -= offsetLeft;
  //yy -= offsetTop;
    
  xx = xx/this.game.scale;
  yy = yy/this.game.scale;

  this.moving = true;
  this.x = xx;
  this.y = yy;
  this.event = e;

  //select
  if(this.game.over){
    this.game.selected = this.game.over;
  }

  //if(this.game.debug)
    console.log('touchmove '+xx);

}
