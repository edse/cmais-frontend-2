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
  this.down_x = 0;
  this.down_y = 0;
  this.up_x = 0;
  this.up_y = 0;
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
      console.log('over '+this.x+' '+this.y);
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
  poly[0]= new Point2D(piece.x-piece.width/2, piece.y-piece.height/2);
  poly[1]= new Point2D(piece.x+piece.width/2, piece.y-piece.height/2);
  poly[2]= new Point2D(piece.x+piece.width/2, piece.y+piece.height/2);
  poly[3]= new Point2D(piece.x-piece.width/2, piece.y+piece.height/2);
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
 *   getX
 *
 *****/
Mouse.prototype.getX = function() {
  return this.x;
}

/*****
 *
 *   getY
 *
 *****/
Mouse.prototype.getY = function() {
  return this.y;
}

/*****
 *
 *   getDownX
 *
 *****/
Mouse.prototype.getDownX = function() {
  return this.down_x;
}

/*****
 *
 *   getDownY
 *
 *****/
Mouse.prototype.getDownY = function() {
  return this.down_y;
}

/*****
 *
 *   getUpX
 *
 *****/
Mouse.prototype.getUpX = function() {
  return this.up_x;
}

/*****
 *
 *   getUpY
 *
 *****/
Mouse.prototype.getUpY = function() {
  return this.up_y;
}

/*****
 *
 *   getDown
 *
 *****/
Mouse.prototype.getDown = function() {
  return this.down;
}

/*****
 *
 *   getUp
 *
 *****/
Mouse.prototype.getUp = function() {
  return this.up;
}


/*****
 *
 *   mousemove
 *
 *****/
Mouse.prototype.mousemove = function(event) {
  this.moving = true;
  window.m.interv();
  
  body_scrollLeft = document.body.scrollLeft,
  element_scrollLeft = document.documentElement.scrollLeft,
  body_scrollTop = document.body.scrollTop,
  element_scrollTop = document.documentElement.scrollTop,
  offsetLeft = this.element.offsetLeft,
  offsetTop = this.element.offsetTop;
  
  var xx, yx;
  if (event.pageX || event.pageY) {
    xx = event.pageX;
    yx = event.pageY;
  } else {
    xx = event.clientX + body_scrollLeft + element_scrollLeft;
    yx = event.clientY + body_scrollTop + element_scrollTop;
  }
  
  xx -= offsetLeft;
  yx -= offsetTop;
  
  this.x = xx;
  this.y = yx;
  this.event = event;
  //console.log('move '+xx);
}

/*****
 *
 *   mousedown
 *
 *****/
Mouse.prototype.mousedown = function(event) {
  var xx, yy;
  if (event.pageX || event.pageY) {
    xx = event.pageX;
    yy = event.pageY;
  } else {
    xx = event.clientX + body_scrollLeft + element_scrollLeft;
    yy = event.clientY + body_scrollTop + element_scrollTop;
  }
  xx -= offsetLeft;
  yy -= offsetTop;
  this.down_x =  xx;
  this.down_y = yy;
  this.down = true;
  this.up = false;
  this.up_x = 0;
  this.up_y = 0;
  this.event = event;
  
  //select
  if(this.game.over){
    this.game.selected = this.game.over;
  }

  console.log('down');
}

/*****
 *
 *   mouseup
 *
 *****/
Mouse.prototype.mouseup = function(event) {
  var xx, yy;
  if (event.pageX || event.pageY) {
    xx = event.pageX;
    yy = event.pageY;
  } else {
    xx = event.clientX + body_scrollLeft + element_scrollLeft;
    yy = event.clientY + body_scrollTop + element_scrollTop;
  }
  xx -= offsetLeft;
  yy -= offsetTop;
  this.up_x =  xx;
  this.up_y = yy;
  this.up = true;
  this.down = false;
  this.down_x = 0;
  this.down_y = 0;
  /*
  if(this.game.selected_ball != null){
    //new move
    this.game.currentPlayerFirstHit = false;
    this.game.currentPlayerLastHit = false;
    if(this.game.selected_ball.id != "move" && this.game.selected_ball.id != "rotate"){
      var vx = (this.game.selected_ball.x - this.up_x) * 0.1;
      var vy = (this.game.selected_ball.y - this.up_y) * 0.1;
      
      this.game.selected_ball.startPoint = new Point2D(this.game.selected_ball.x, this.game.selected_ball.y);
      this.game.selected_ball.velocityx = vx;
      this.game.selected_ball.velocityy = vy;

      this.game.running = true;
      this.game.currentPlayer = this.game.selected_ball.id;
    }
  }
  else if(this.game.is_moving)
    this.game.is_moving = false;
  */
 
  if((this.game.selected)&&(this.game.selected.placed)){
    this.game.selected.placed = true;
    this.game.selected.moveble = false;
    this.game.selected.x = this.game.selected.target.x;
    this.game.selected.y = this.game.selected.target.y;
  }
 
  //unselect
  if(this.game.selected){
    this.game.selected = null;
  }

  console.log('up');

}



/*****
 *
 *   keyup
 *
 *****/
Mouse.prototype.keyup = function(e) {
  if(e.keyCode == 27){
    document.body.style.cursor = 'auto';
    this.up_x =  (event.pageX) + Math.abs(this.game.get_x()) - this.game.canvas.offsetLeft;
    this.up_y = (event.pageY) + Math.abs(this.game.get_y()) - this.game.canvas.offsetTop;;
    this.up = true;
    this.down = false;
    this.down_x = 0;
    this.down_y = 0;
    this.game.selected_ball = null;
  }
}

/*****
 *
 *   touchstart
 *
 *****/
Mouse.prototype.touchstart = function(e) {
  e.preventDefault();
  pageX = e.targetTouches[0].pageX;
  pageY = e.targetTouches[0].pageY;
  
  this.down_x =  (pageX) + Math.abs(this.game.get_x()) - this.game.canvas.offsetLeft;
  this.down_y = (pageY) + Math.abs(this.game.get_y()) - this.game.canvas.offsetTop;;
  this.down = true;
  this.up = false;
  this.up_x = 0;
  this.up_y = 0;
}

/*****
 *
 *   touchstop
 *
 *****/
Mouse.prototype.touchend = function(e) {
  //e.preventDefault();
  //alert('touchend');
  //console.log('touchend: '+e.targetTouches[0].pageX);
  //pageX = e.targetTouches[0].pageX;
  //pageY = e.targetTouches[0].pageY;
  //this.up_x =  (pageX) + Math.abs(this.game.get_x()) - this.game.canvas.offsetLeft;
  //this.up_y = (pageY) + Math.abs(this.game.get_y()) - this.game.canvas.offsetTop;;
  this.up_x =  this.x;
  this.up_y = this.y;
  this.up = true;
  this.down = false;
  this.down_x = 0;
  this.down_y = 0;
  if(this.game.selected_ball != null){
    //new move
    this.game.currentPlayerFirstHit = false;
    this.game.currentPlayerLastHit = false;
    if(this.game.selected_ball.id != "move" && this.game.selected_ball.id != "rotate"){
      var vx = (this.game.selected_ball.x - this.up_x) * 0.1;
      var vy = (this.game.selected_ball.y - this.up_y) * 0.1;
      
      this.game.selected_ball.startPoint = new Point2D(this.game.selected_ball.x, this.game.selected_ball.y);
      this.game.selected_ball.velocityx = vx;
      this.game.selected_ball.velocityy = vy;
      this.game.storeMove(this.game.selected_ball.id,vx,vy); 
      if(this.game.selected_ball.velocityx > this.game.maxSpeed)
        this.game.selected_ball.velocityx = this.game.maxSpeed;
      if(this.game.selected_ball.velocityy > this.game.maxSpeed)
        this.game.selected_ball.velocityy = this.game.maxSpeed;

      this.game.running = true;
      this.game.currentPlayer = this.game.selected_ball.id;
      
      //this.game.runningBalls.push(this.game.selected_ball);

    }
    else if(this.game.selected_ball.id == "rotate"){
      //alert(keepers[0].angle)
      //$('#msg').val("gamemove<->"+$('#game_id').val()+"<->"+"k"+selected_ball.k+"<->"+keepers[selected_ball.k].angle);
      //send();
    }
    else if(this.game.selected_ball.id == "move"){
      //alert(keepers[0].angle)
      //$('#msg').val("gamemove<->"+$('#game_id').val()+"<->"+"k"+selected_ball.k+"<->"+keepers[selected_ball.k].x+"<->"+keepers[selected_ball.k].y);
      //send();
    }
  }
  else if(this.game.is_moving)
    this.game.is_moving = false;
  this.game.selected_ball = null;
}

/*****
 *
 *   touchmove
 *
 *****/
Mouse.prototype.touchmove = function(e) {
  //e.preventDefault();
  //console.log(e.targetTouches[0].pageX);
  pageX = e.targetTouches[0].pageX;
  pageY = e.targetTouches[0].pageY;
  this.x = pageX + Math.abs(this.game.get_x()) - this.game.canvas.offsetLeft;
  this.y = pageY + Math.abs(this.game.get_y()) - this.game.canvas.offsetTop;
  
  this.x = pageX + Math.abs(this.game.get_x()) - this.game.canvas.offsetLeft;
  this.y = pageY + Math.abs(this.game.get_y()) - this.game.canvas.offsetTop;

}
