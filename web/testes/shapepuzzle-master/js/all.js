/*****
 *
 *   Point2D.js
 *
 *****/

/*****
 *
 *   constructor
 *
 *****/
function Point2D(x, y) {
  if(arguments.length > 0) {
    this.x = x;
    this.y = y;
  }
}

/*****
 *
 *   clone
 *
 *****/
Point2D.prototype.clone = function() {
  return new Point2D(this.x, this.y);
};
/*****
 *
 *   add
 *
 *****/
Point2D.prototype.add = function(that) {
  return new Point2D(this.x + that.x, this.y + that.y);
};
/*****
 *
 *   addEquals
 *
 *****/
Point2D.prototype.addEquals = function(that) {
  this.x += that.x;
  this.y += that.y;

  return this;
};
/*****
 *
 *   offset - used in dom_graph
 *
 *   This method is based on code written by Walter Korman
 *      http://www.go2net.com/internet/deep/1997/05/07/body.html
 *   which is in turn based on an algorithm by Sven Moen
 *
 *****/
Point2D.prototype.offset = function(a, b) {
  var result = 0;

  if(!(b.x <= this.x || this.x + a.x <= 0 )) {
    var t = b.x * a.y - a.x * b.y;
    var s;
    var d;

    if(t > 0) {
      if(this.x < 0) {
        s = this.x * a.y;
        d = s / a.x - this.y;
      } else if(this.x > 0) {
        s = this.x * b.y;
        d = s / b.x - this.y
      } else {
        d = -this.y;
      }
    } else {
      if(b.x < this.x + a.x) {
        s = (b.x - this.x ) * a.y;
        d = b.y - (this.y + s / a.x);
      } else if(b.x > this.x + a.x) {
        s = (a.x + this.x) * b.y;
        d = s / b.x - (this.y + a.y);
      } else {
        d = b.y - (this.y + a.y);
      }
    }

    if(d > 0) {
      result = d;
    }
  }

  return result;
};
/*****
 *
 *   rmoveto
 *
 *****/
Point2D.prototype.rmoveto = function(dx, dy) {
  this.x += dx;
  this.y += dy;
};
/*****
 *
 *   scalarAdd
 *
 *****/
Point2D.prototype.scalarAdd = function(scalar) {
  return new Point2D(this.x + scalar, this.y + scalar);
};
/*****
 *
 *   scalarAddEquals
 *
 *****/
Point2D.prototype.scalarAddEquals = function(scalar) {
  this.x += scalar;
  this.y += scalar;

  return this;
};
/*****
 *
 *   subtract
 *
 *****/
Point2D.prototype.subtract = function(that) {
  return new Point2D(this.x - that.x, this.y - that.y);
};
/*****
 *
 *   subtractEquals
 *
 *****/
Point2D.prototype.subtractEquals = function(that) {
  this.x -= that.x;
  this.y -= that.y;

  return this;
};
/*****
 *
 *   scalarSubtract
 *
 *****/
Point2D.prototype.scalarSubtract = function(scalar) {
  return new Point2D(this.x - scalar, this.y - scalar);
};
/*****
 *
 *   scalarSubtractEquals
 *
 *****/
Point2D.prototype.scalarSubtractEquals = function(scalar) {
  this.x -= scalar;
  this.y -= scalar;

  return this;
};
/*****
 *
 *   multiply
 *
 *****/
Point2D.prototype.multiply = function(scalar) {
  return new Point2D(this.x * scalar, this.y * scalar);
};
/*****
 *
 *   multiplyEquals
 *
 *****/
Point2D.prototype.multiplyEquals = function(scalar) {
  this.x *= scalar;
  this.y *= scalar;

  return this;
};
/*****
 *
 *   divide
 *
 *****/
Point2D.prototype.divide = function(scalar) {
  return new Point2D(this.x / scalar, this.y / scalar);
};
/*****
 *
 *   divideEquals
 *
 *****/
Point2D.prototype.divideEquals = function(scalar) {
  this.x /= scalar;
  this.y /= scalar;

  return this;
};
/*****
 *
 *   comparison methods
 *
 *   these were a nice idea, but ...  It would be better to define these names
 *   in two parts so that the first part is the x comparison and the second is
 *   the y.  For example, to test p1.x < p2.x and p1.y >= p2.y, you would call
 *   p1.lt_gte(p2).  Honestly, I only did these types of comparisons in one
 *   Intersection routine, so these probably could be removed.
 *
 *****/

/*****
 *
 *   compare
 *
 *****/
Point2D.prototype.compare = function(that) {
  return (this.x - that.x || this.y - that.y);
};
/*****
 *
 *   eq - equal
 *
 *****/
Point2D.prototype.eq = function(that) {
  return (this.x == that.x && this.y == that.y );
};
/*****
 *
 *   lt - less than
 *
 *****/
Point2D.prototype.lt = function(that) {
  return (this.x < that.x && this.y < that.y );
};
/*****
 *
 *   lte - less than or equal
 *
 *****/
Point2D.prototype.lte = function(that) {
  return (this.x <= that.x && this.y <= that.y );
};
/*****
 *
 *   gt - greater than
 *
 *****/
Point2D.prototype.gt = function(that) {
  return (this.x > that.x && this.y > that.y );
};
/*****
 *
 *   gte - greater than or equal
 *
 *****/
Point2D.prototype.gte = function(that) {
  return (this.x >= that.x && this.y >= that.y );
};
/*****
 *
 *   utility methods
 *
 *****/

/*****
 *
 *   lerp
 *
 *****/
Point2D.prototype.lerp = function(that, t) {
  return new Point2D(this.x + (that.x - this.x) * t, this.y + (that.y - this.y) * t);
};
/*****
 *
 *   distanceFrom
 *
 *****/
Point2D.prototype.distanceFrom = function(that) {
  var dx = this.x - that.x;
  var dy = this.y - that.y;
  return Math.sqrt(dx * dx + dy * dy);
};
/*****
 *
 *   min
 *
 *****/
Point2D.prototype.min = function(that) {
  return new Point2D(Math.min(this.x, that.x), Math.min(this.y, that.y));
};
/*****
 *
 *   max
 *
 *****/
Point2D.prototype.max = function(that) {
  return new Point2D(Math.max(this.x, that.x), Math.max(this.y, that.y));
};
/*****
 *
 *   toString
 *
 *****/
Point2D.prototype.toString = function() {
  return this.x + "," + this.y;
};
/*****
 *
 *   get/set methods
 *
 *****/

/*****
 *
 *   setXY
 *
 *****/
Point2D.prototype.setXY = function(x, y) {
  this.x = x;
  this.y = y;
};
/*****
 *
 *   setFromPoint
 *
 *****/
Point2D.prototype.setFromPoint = function(that) {
  this.x = that.x;
  this.y = that.y;
};
/*****
 *
 *   swap
 *
 *****/
Point2D.prototype.swap = function(that) {
  var x = this.x;
  var y = this.y;

  this.x = that.x;
  this.y = that.y;

  that.x = x;
  that.y = y;
};



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
  
  this.game.context.drawImage(this.img, this.position.x, this.position.y);    

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

  this.tolerance = 200;
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
    this.game.context.globalAlpha = 1;
    this.game.context.beginPath();
    this.game.context.drawImage(this.img, this.position.x, this.position.y);
  }
  else{
    this.game.context.save();
    
    if(this.placed)
      this.game.context.globalAlpha = 1
    else if(!this.game.is_over)
      this.game.context.globalAlpha = 0.8
    else
      this.game.context.globalAlpha = 1
  
    this.game.context.fillStyle = "rgba(255, 255, 255, 0.5)";
  
    if(this == this.game.selected){
      this.game.context.fillStyle = "rgba(0, 0, 255, 0.1)";
    }
    else if(this.game.over == this)
      this.game.context.fillStyle = "rgba(255, 0, 0, 0.1)";
  
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
        if(this.game.drip.currentTime != 0)
          this.game.drip.currentTime = 0;
        this.game.drip.play();
      }
    }
  
    //draw
    this.game.context.beginPath();
    this.game.context.drawImage(this.img, this.position.x, this.position.y);
    
    this.game.context.closePath();
    this.game.context.restore();
  }
  /*
  if(this.game.debug){
    console.log('pieace: '+this.id+' drew at: '+this.position.x+', '+this.position.y);
  }
  */
}

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
}

Piece.prototype.mouse_is_over = function() {
  return this.game.mouse.isOverPiece(this);
}



/*****
 *
 *   puzzle.js
 *
 *****/

/*****
 *
 *   constructor
 *
 *****/
function Puzzle(id, game, sound, size, pos, positions) {
  
  console.log(id)
  console.log(positions)
  this.pos = pos;
  this.positions = positions;
  this.num_pieces = positions.length;
  this.remaining_time = this.num_pieces*30;
  this.time_to_complete = this.remaining_time;
  this.items_to_load = this.num_pieces*2+1;
  this.loaded_items = 0;
  this.id = id;
  this.game = game;
  this.pieces = new Array();
  this.holders = new Array();
  this.position = null;
  if(sound){
    this.has_voice = sound.has_voice;
    this.has_sound = sound.has_sound;
  }
  if(size){
    this.width = size.width;
    this.height = this.height;
  }
  this.loadAssets();
}

Puzzle.prototype.loadAssets = function() {
  console.log('puzzle start loading...');
  //IMAGE
  this.img = new Image();
  this.img.src = "img/"+this.id+"/"+this.id+".png";
  this.img.onload = this.loaded_items++;

  //PIECES & HOLDERS
  for(i=1; i<=this.num_pieces; i++){
    //HODLER IMAGE
    var h = new Image();
    if(i<10)
      h.src = "img/"+this.id+"/h0"+i+".png";
    else
      h.src = "img/"+this.id+"/h"+i+".png";
    h.onload = this.loaded_items++;
    var holder = this.placeHolder(i, h);

    //PIECE IMAGE
    var p = new Image();
    if(i<10)
      p.src = "img/"+this.id+"/p0"+i+".png";
    else
      p.src = "img/"+this.id+"/p"+i+".png";
    p.onload = this.loaded_items++;
    this.placePiece(i, p, holder);
  }
  
  //VOICE & SOUNDS
  var sounds = []
  if(this.has_voice){
    sounds.push({
      type: "audio",
      src: "img/"+this.id+"/voice",
      slug: "voice"
    });
  }
  if(this.has_sound){
    sounds.push({
      type: "audio",
      src: "img/"+this.id+"/sound",
      slug: "sound"
    });
  }
  if(this.has_voice || this.has_sound){
    this.itens_to_load2 = sounds.length;
    loadAssetsII(this, sounds);
  }
}

Puzzle.prototype.init = function(){
  console.log('initing puzzle...');
  clearTimeout(this.iniTimeout);
  this.loaded = true;
  this.solved = false;
}

Puzzle.prototype.placePiece = function(id, img, holder){
  x = Math.floor(Math.random()*(this.game.canvas.width-img.width));
  y = Math.floor(Math.random()*(this.game.canvas.height-img.height));
  temp = new Piece(
    id,
    this.game,
    img,
    holder,
    new Point2D(x,y),
    new Point2D(x,y),
    true,
    false
  );
  this.pieces.push(temp);
  console.log('puzzle pieces array length>>'+this.pieces.length);
}

Puzzle.prototype.placeHolder = function(id, img){
  var x = this.positions[id-1].x+this.pos.x;
  var y = this.positions[id-1].y+this.pos.y;
  temp = new Holder(
    id,
    this.game,
    img,
    new Point2D(x,y),
    false
  );
  this.holders.push(temp);
  console.log('puzzle holders array length>>'+this.holders.length+' '+temp.position.x+','+temp.position.y);
  return temp;
}

Puzzle.prototype.draw = function(){

  if(this.solved){    
    $('#stage').html("Stage "+this.game.stage+" completed!");
    $('#pieces').html(this.num_pieces+" pieces in "+(this.time_to_complete-this.remaining_time)+"s");
    
    if(!this.has_voice && !this.has_sound){
      this.game.chimes.play();
      $('#modal-success').fadeIn();
    }
    else if(this.has_voice && this.has_sound){
      this.game.chimes.addEventListener('ended', function(){
        this.currentTime = 0;
        this.pause();
        window.game.puzzle.voice.play();
      });
      this.voice.addEventListener('ended', function(){
        this.currentTime = 0;
        this.pause();
        window.game.puzzle.sound.play();
        $('#modal-success').fadeIn();
      });
      this.game.chimes.play();
    }
    else if(this.has_voice && !this.has_sound){
      this.game.chimes.addEventListener('ended', function(){
        this.currentTime = 0;
        this.pause();
        window.game.puzzle.voice.play();
        $('#modal-success').fadeIn();
      });
      this.game.chimes.play();
    }
    this.solved = false;
  }
  else{
    
    if(this.num_pieces > this.game.placed_pieces.length){
    
      //HOLDERS
      for(var i = 0; i < this.holders.length; i++){
        this.holders[i].draw();
      }
    
      //PIECES
      var not_placed = new Array();
      var over = false;
      for(var i = 0; i < this.pieces.length; i++){
        piece = this.pieces[i];
        if(!piece.placed)
          not_placed.push(piece);
        else if(piece != this.game.selected)
          piece.draw();
      }
      
      if(!over){
        this.game.over = null;
      }
    
      //move
      if((this.game.selected != null)&&(this.game.selected.moveble)){
        this.game.selected.x = this.game.mouse.x;
        this.game.selected.y = this.game.mouse.y;
      }
      
      //NOT PLACED PIECES  
      for(var i = 0; i < not_placed.length; i++){
        not_placed[i].draw();
      }
      if(this.game.selected)
        this.game.selected.draw();
      
      //move
      if((this.game.selected != null)&&(this.game.selected.moveble)){
        this.game.selected.position.x = this.game.mouse.x-this.game.selected.img.width/2;
        this.game.selected.position.y = this.game.mouse.y-this.game.selected.img.height/2;
      }
      
      //Game Over
      if(this.remaining_time <= 0){
        window.m.stopGame();
        if(confirm('Timeup! Game Over! Wanna try again?')){
          this.game.is_over = false;
          this.game.init();
          window.m.startGame();
        }
      }
      else{
        if(!this.game.is_over){
          //console.log(this.num_pieces+" - "+this.game.placed_pieces.length)
          if(this.num_pieces == this.game.placed_pieces.length){
            this.game.is_over = true;
            this.solved = true;
          }
        }
      }
    
    }else{
      this.game.context.drawImage(this.img, (this.game.canvas.width/2)-(this.img.width/2), (this.game.canvas.height/2)-(this.img.height/2));
      window.m.pauseGame();
    }
  
  }

}




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
  if(this.game.debug)
    console.log('over '+piece.id)
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
  window.m.interv();
  this.x = xx;
  this.y = yy;
  this.event = e;
  
  if(this.game.debug){
    console.log('move: '+this.x+', '+this.y);
  }

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
  if(this.game.debug)
    console.log(this.game.puzzle.pieces.length);

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

  if(this.game.debug){
    console.log('down ('+this.game.over.id+') '+this.x+', '+this.y);
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

  this.puzzle = new Puzzle("001", this, "", new Point2D(100,100), {width: 298, height: 400}, new Array());

  //init
  this.canvas = document.getElementById('canvas');
  this.context = this.canvas.getContext('2d');

  //canvas resize
  this.canvas.width = Math.round(window.innerWidth);
  this.canvas.height = Math.round(window.innerHeight);
  console.log("canvas: "+this.canvas.width+", "+this.canvas.height)
  this.original_width = this.canvas.width;
  this.original_height = this.canvas.height;

  //size  
  this.font_size = Math.round(this.canvas.width/20);
  this.scaled_width = (this.canvas.width/this.scale)/2;
  this.scaled_height = (this.canvas.height/this.scale)/2;
  console.log('scaled_width: '+this.scaled_width);
  console.log('scaled_height: '+this.scaled_height);
      
  this.items_to_load = 4;
  this.loaded_items = 0;
  this.loaded = false;
  this.interval = null;
  this.maxElapsedTime = 0;
  this.start_time = 0;

  this.loadAssets();
}

Game.prototype.loadAssets = function() {
  console.log('start loading...');
  
  this.assets = Array({
      type: "audio",
      src: "audio/drip",
      slug: "drip"
    },{
      type: "audio",
      src: "audio/twang",
      slug: "twang"
    },{
      type: "audio",
      src: "audio/01_Alex_Must_Once_Upon_a_Time",
      slug: "bgm"
    },{
      type: "audio",
      src: "audio/chimes",
      slug: "chimes"
    }
  );
  
  this.items_to_load = this.assets.length;
  loadAssetsI(this, this.assets);
}

Game.prototype.init = function(){
  console.log('loading done!')
  console.log('initing...')
  clearTimeout(this.iniTimeout);
  
  /*
  if(window.innerHeight <= 600){
    this.context.scale(0.5,0.5);
    this.scale = 0.5;
  }else
    this.scale = 1;
  */

  //IMAGE SIZE
  if(this.resized)
    this.apply_scale();

  this.loaded = true;
  this.auto_snap = true;
  this.pieces = new Array();
  this.holders = new Array();
  this.placed_pieces = new Array();
  this.moving = true;
  this.selected = null;
  this.over = null;
  this.is_over = false;

  this.num_pieces = 5;

  //console.log(this.img.width+','+this.img.height)
  
  this.clock_interval = null;
  this.mouse = new Mouse(this);
  
  this.puzzles = [
    new Puzzle("006", this, {has_voice: true, has_sound: true}, {width: 298, height: 400}, new Point2D((this.canvas.width/2-298/2)+5, (this.canvas.height/2-400/2)+5), new Array(
      new Point2D(82,0),
      new Point2D(0,193),
      new Point2D(166,283),
      new Point2D(65,127))),
    new Puzzle("008", this, {has_voice: true, has_sound: false}, {width: 298, height: 400}, new Point2D((this.canvas.width/2-427/2)+5, (this.canvas.height/2-433/2)+5), new Array(
      new Point2D(28,0),
      new Point2D(0,257),
      new Point2D(58,109),
      new Point2D(185,0))),
    new Puzzle("005", this, {has_voice: true, has_sound: true}, {width: 298, height: 400}, new Point2D((this.canvas.width/2-346/2)+2, (this.canvas.height/2-425/2)+5), new Array(
      new Point2D(40,0),
      new Point2D(28,37),
      new Point2D(176,37),
      new Point2D(0,186),
      new Point2D(175,179))),
    new Puzzle("016", this, {has_voice: true, has_sound: true}, {width: 298, height: 400}, new Point2D((this.canvas.width/2-497/2), (this.canvas.height/2-500/2)+2), new Array(
      new Point2D(73,0),
      new Point2D(98,157),
      new Point2D(0,268),
      new Point2D(169,329))),
    new Puzzle("011", this, {has_voice: true, has_sound: false}, {width: 298, height: 400}, new Point2D((this.canvas.width/2-386/2), (this.canvas.height/2-466/2)+2), new Array(
      new Point2D(0,0),
      new Point2D(49,46),
      new Point2D(0,227),
      new Point2D(174,227),
      new Point2D(84,373))),
    new Puzzle("012", this, {has_voice: true, has_sound: false}, {width: 298, height: 400}, new Point2D((this.canvas.width/2-490/2), (this.canvas.height/2-454/2)+2), new Array(
      new Point2D(54,0),
      new Point2D(0,101),
      new Point2D(287,75),
      new Point2D(59,242),
      new Point2D(287,242))),
    new Puzzle("015", this, {has_voice: true, has_sound: false}, {width: 298, height: 400}, new Point2D((this.canvas.width/2-735/2), (this.canvas.height/2-466/2)+2), new Array(
      new Point2D(565,0),
      new Point2D(438,184),
      new Point2D(315,105),
      new Point2D(0,50),
      new Point2D(138,157))),
    new Puzzle("004", this, {has_voice: true, has_sound: true}, {width: 298, height: 400}, new Point2D((this.canvas.width/2-467/2), (this.canvas.height/2-333/2)), new Array(
      new Point2D(0,173),
      new Point2D(49,66),
      new Point2D(207,0),
      new Point2D(286,24),
      new Point2D(115,120),
      new Point2D(170,115))),
    new Puzzle("007", this, {has_voice: true, has_sound: false}, {width: 298, height: 400}, new Point2D((this.canvas.width/2-337/2)+3, (this.canvas.height/2-433/2)+5), new Array(
      new Point2D(0,61),
      new Point2D(144,0),
      new Point2D(27,38),
      new Point2D(26,58),
      new Point2D(95,226),
      new Point2D(193,215))),
    new Puzzle("009", this, {has_voice: true, has_sound: true}, {width: 298, height: 400}, new Point2D((this.canvas.width/2-425/2)+5, (this.canvas.height/2-666/2)+10), new Array(
      new Point2D(79,0),
      new Point2D(0,118),
      new Point2D(54,512),
      new Point2D(294,538),
      new Point2D(102,346),
      new Point2D(247,341))),
    new Puzzle("010", this, {has_voice: true, has_sound: true}, {width: 298, height: 400}, new Point2D((this.canvas.width/2-316/2), (this.canvas.height/2-446/2)+2), new Array(
      new Point2D(4,0),
      new Point2D(12,90),
      new Point2D(0,276),
      new Point2D(162,272),
      new Point2D(12,363),
      new Point2D(162,363))),
    new Puzzle("013", this, {has_voice: true, has_sound: true}, {width: 298, height: 400}, new Point2D((this.canvas.width/2-653/2), (this.canvas.height/2-433/2)+2), new Array(
      new Point2D(0,112),
      new Point2D(375,0),
      new Point2D(81,0),
      new Point2D(273,212),
      new Point2D(364,212),
      new Point2D(508,212))),
    new Puzzle("014", this, {has_voice: true, has_sound: false}, {width: 298, height: 400}, new Point2D((this.canvas.width/2-515/2), (this.canvas.height/2-500/2)+2), new Array(
      new Point2D(0,0),
      new Point2D(37,58),
      new Point2D(191,264),
      new Point2D(286,315),
      new Point2D(391,309),
      new Point2D(339,188))),
    new Puzzle("017", this, {has_voice: true, has_sound: true}, {width: 298, height: 400}, new Point2D((this.canvas.width/2-540/2), (this.canvas.height/2-348/2)+2), new Array(
      new Point2D(0,0),
      new Point2D(125,223),
      new Point2D(292,223),
      new Point2D(203,26),
      new Point2D(291,24),
      new Point2D(444,72))),
    new Puzzle("018", this, {has_voice: true, has_sound: false}, {width: 298, height: 400}, new Point2D((this.canvas.width/2-671/2), (this.canvas.height/2-456/2)+2), new Array(
      new Point2D(0,225),
      new Point2D(274,225),
      new Point2D(435,186),
      new Point2D(206,0),
      new Point2D(206,186),
      new Point2D(87,47))),
    new Puzzle("019", this, {has_voice: true, has_sound: true}, {width: 298, height: 400}, new Point2D((this.canvas.width/2-455/2), (this.canvas.height/2-490/2)+2), new Array(
      new Point2D(0,3),
      new Point2D(205,0),
      new Point2D(13,235),
      new Point2D(229,235),
      new Point2D(159,404),
      new Point2D(297,404),
      new Point2D(374,263))),
    new Puzzle("001", this, {has_voice: true, has_sound: false}, {width: 298, height: 400}, new Point2D((this.canvas.width/2-306/2), (this.canvas.height/2-347/2)-5), new Array(
      new Point2D(0,14),
      new Point2D(89,0),
      new Point2D(90,34),
      new Point2D(84,84),
      new Point2D(56,164),
      new Point2D(173,161),
      new Point2D(20,234))),
    new Puzzle("002", this, {has_voice: true, has_sound: false}, {width: 298, height: 400}, new Point2D((this.canvas.width/2-475/2)+20, (this.canvas.height/2-376/2)+32), new Array(
      new Point2D(30,18),
      new Point2D(0,81),
      new Point2D(192,5),
      new Point2D(271,0),
      new Point2D(271,88),
      new Point2D(320,164),
      new Point2D(259,172),
      new Point2D(184,152),
      new Point2D(120,138))),
    new Puzzle("003", this, {has_voice: true, has_sound: false}, {width: 298, height: 400}, new Point2D((this.canvas.width/2-303/2), (this.canvas.height/2-355/2)-5), new Array(
      new Point2D(96,0),
      new Point2D(16,23),
      new Point2D(97,87),
      new Point2D(1,145),
      new Point2D(0,203),
      new Point2D(55,196),
      new Point2D(145,209),
      new Point2D(195,281),
      new Point2D(142,280),
      new Point2D(40,277)))
  ];

  this.puzzle = this.puzzles[this.stage-1];

}

Game.prototype.render = function() {
  
  this.draw_bg();
    
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
    
  }

}


Game.prototype.draw_bg = function() {
  if(!this.scale) this.scale = 1;
  this.context.fillStyle = "rgba(125, 125, 125, 1)";
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
    this.context.fillStyle = grad;
    this.context.fillRect(0,0,this.canvas.width/this.scale, this.canvas.height/this.scale);
    this.context.restore();
  }
  
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
}

Game.prototype.draw_remaining = function() {
  this.context.save();
  this.fade1 = this.fade1+(0.010*this.alpha);
  if(this.fade1 >= 0.6)
    this.alpha = -1;
  else if(this.fade1 <= 0.2)
    this.alpha = 1;
  this.context.fillStyle = "rgba(255, 255, 255, "+this.fade1+")";
  this.context.strokeStyle = "rgba(0, 0, 0, 0.5)";
  this.context.lineWidth = 2;
  this.context.font = "bold "+this.font_size+"px Arial";
  this.context.textBaseline = 'top';
  this.context.textAlign = 'left';
  this.context.strokeText(this.puzzle.remaining_time, 10, 40);
  this.context.fillText(this.puzzle.remaining_time, 10, 40);
  var metrics = this.context.measureText(this.stage+"/"+this.puzzles.length+" ");
  this.context.strokeText(this.stage+"/"+this.puzzles.length, this.canvas.width/this.scale-metrics.width, 40);
  this.context.fillText(this.stage+"/"+this.puzzles.length, this.canvas.width/this.scale-metrics.width, 40);
  this.context.restore();
}

Game.prototype.draw_loading = function() {
  this.fade1 = this.fade1+0.025;
  if(this.fade1 >= 1)
    this.fade1 = 0;
  this.fade2 = 1-this.fade1;
  
  this.context.fillStyle = "rgba(255, 255, 255, "+this.fade2+")";
  this.context.strokeStyle = "rgba(255, 255, 255, "+this.fade1+")";
  this.context.font = "bold "+this.font_size+"px Arial";
  this.context.textBaseline = 'middle';
  this.context.textAlign = 'center';
  this.context.lineWidth = 5;
  this.context.strokeText("LOADING", this.canvas.width/2, this.canvas.height/2);
  this.context.fillText("LOADING", this.canvas.width/2, this.canvas.height/2);
  //console.log('loading...');
}

Game.prototype.apply_scale = function(){

  var w = this.original_width;
  var h = this.original_height;
  
  if(this.puzzle != undefined){
    w = this.puzzle.width;
    h = this.puzzle.height;
  }

  document.getElementById('canvas').width = window.innerWidth;
  document.getElementById('canvas').height = window.innerHeight;
  
  var rw = document.getElementById('canvas').width / w;
  var rh = document.getElementById('canvas').height / h;
  this.scale = Math.min(rw,rh);

  this.context.scale(this.scale,this.scale);
  console.log('scale: '+this.scale);  
  this.resized = false;
}

////////////////////////////////////////
/*
Game.prototype.clockTick = function() {
  this.puzzle.remaining_time--;
}
*/
Game.prototype.getTimer = function() {
  return (new Date().getTime() - this.start_time); //milliseconds
}

Game.prototype.nextStage = function() {
  this.is_over = false;
  this.stage++;
  this.num_lines++;
  window.game.init();
  window.m.startGame();
}



// polyfill for animation frame
( function() {
  
  var lastTime = 0;
  var vendors = ['ms', 'moz', 'webkit', 'o'];
  for(var x = 0; x < vendors.length && !window.requestAnimationFrame; ++x) {
    window.requestAnimationFrame = window[vendors[x] + 'RequestAnimationFrame'];
    window.cancelAnimationFrame = window[vendors[x] + 'CancelAnimationFrame'] || window[vendors[x] + 'CancelRequestAnimationFrame'];
  }
  if(!window.requestAnimationFrame) {
    console.log('!window.requestAnimationFrame');
    window.requestAnimationFrame = function(callback, element) {
      var currTime = new Date().getTime();
      var timeToCall = Math.max(0, 22 - (currTime - lastTime));
      var id = window.setTimeout(function() { callback(currTime + timeToCall);
      }, timeToCall);
      lastTime = currTime + timeToCall;
      return id;
    };
  }
  if(!window.cancelAnimationFrame) {
    window.cancelAnimationFrame = function(id) {
      clearTimeout(id);
    };
  }
}());

if(Modernizr.fullscreen){
  function RunPrefixMethod(obj, method) {
    var pfx = ["webkit", "moz", "ms", "o", ""];
    var p = 0, m, t;
    while (p < pfx.length && !obj[m]) {
      m = method;
      if (pfx[p] == "") {
        m = m.substr(0,1).toLowerCase() + m.substr(1);
      }
      m = pfx[p] + m;
      t = typeof obj[m];
      if (t != "undefined") {
        pfx = [pfx[p]];
        return (t == "function" ? obj[m]() : obj[m]);
      }
      p++;
    }
  
  }
}

// GAME START
var game = new Game();
var interval = null;
var gameInterval = null;
//game.debug = false;
window.m = {
  game : game
};
window.m.interv = function() {
  interval = setTimeout("window.m.game.mouse.moving = false; document.getElementById('moving').value = false; window.m.intervClear();", 500);
}
window.m.intervClear = function() {
  clearInterval(interval)
}
window.m.stopGame = function() {
  clearInterval(gameInterval);
  
  game.started = false;
  window.m.stopSFX();
  window.m.stopBGM();
  window.cancelAnimationFrame(game.interval);

  $('#home').addClass('active');

  $('#play').show();
  $('.control').hide();
  
  $('#canvas, #canvas_bg').hide();
  $('.content').show();

}
window.m.startGame = function() {
  gameInterval = setInterval(function() { game.puzzle.remaining_time--; },1000);
  game.started = true;
  //resizeGame();
  window.m.startSFX();
  window.m.startBGM();
  loop();
  $('#home').removeClass('active');
  $('#canvas, #canvas_bg, .control').show();
  $('.content, #play, #exitfullscreen, #bgm, #sfx, #autosnap').hide();
}
window.m.pauseGame = function() {
  clearInterval(gameInterval);
  game.started = false;
  window.cancelAnimationFrame(game.interval);

  $('#play').show();
  $('.control').hide();  
}
window.m.stopSFX = function() {
  window.m.game.drip.volume = 0.0;
  window.m.game.twang.volume = 0.0;
  window.m.game.drip.pause();
  window.m.game.twang.pause();
  $('#sfxoff').hide();
  $('#sfx').show();
}
window.m.startSFX = function() {
  window.m.game.drip.volume = 1.0;
  window.m.game.twang.volume = 1.0;
  $('#sfxoff').show();
  $('#sfx').hide();
}
window.m.stopBGM = function() {
  window.m.game.bgm.volume = 0.0;
  window.m.game.bgm.pause();
  $('#bgmoff').hide();
  $('#bgm').show();
}
window.m.startBGM = function() {
  window.m.game.bgm.volume = 1.0;
  window.m.game.bgm.play();
  $('#bgmoff').show();
  $('#bgm').hide();
}
window.m.autoSnap = function() {
  window.m.game.auto_snap = true;
  $('#autosnapoff').show();
  $('#autosnap').hide();
}
window.m.autoSnapOff = function() {
  window.m.game.auto_snap = false;
  $('#autosnapoff').hide();
  $('#autosnap').show();
}
window.m.fullscreen = function() {
  RunPrefixMethod(game.canvas, "RequestFullScreen");
}
window.m.exitfullscreen = function() {
  RunPrefixMethod(document, 'CancelFullScreen');
}

function start() {
  window.m.startGame();
}
function stop() {
  window.m.stopGame();
}
function pause() {
  window.m.pauseGame();
}

function loop() {
  game.interval = window.requestAnimationFrame(loop, game.canvas);

  game.render();

  var elapsed = game.getTimer() - game.time;
  game.time = game.getTimer();
  //elapsed = Math.min(20, Math.max(-20, elapsed));
  if(elapsed > game.maxElapsedTime)
    game.maxElapsedTime = elapsed;

  /*
  game.context.textAlign = 'left';
  game.context.fillStyle = "rgba(255, 255, 255, 1)";
  game.context.font = "bold 12px Arial";
  game.context.fillText("scale: " + game.scale, 50, 90);
  game.context.fillText("loaded items: " + game.loaded_items, 50, 100);
  game.context.fillText(">>> " + elapsed, 50, 110);
  game.context.fillText("maxElapsedTime>>> " + game.maxElapsedTime, 50, 120);
  game.context.fillText(game.puzzle.remaining_time, 50, 130);
  game.context.fillText("auto-snap: "+game.auto_snap, 50, 140);
  */

}


function loadAssetsI(g,assets) {
  //alert('>>'+atttr);
  for(i=0; i<assets.length; i++){
    if(assets[i].type == "image"){
      //IMAGE
      eval("g."+assets[i].slug+' = new Image();');
      eval("g."+assets[i].slug+'.src = "'+assets[i].src+'";');
      eval("g."+assets[i].slug+'.onload = g.loaded_items++;');
    }
    else if(assets[i].type == "audio"){
      //AUDIO
      eval("g."+assets[i].slug+' = document.createElement(\'audio\');');
      eval("g."+assets[i].slug+'.addEventListener(\'canplaythrough\', itemLoaded(g), false);');
      var source= document.createElement('source');
      if(Modernizr.audio.ogg){
        source.type= 'audio/ogg';
        source.src= assets[i].src+'.ogg';
      }
      else if(Modernizr.audio.mp3){
        source.type= 'audio/mpeg';
        source.src= assets[i].src+'.mp3';
      }
      if(source.src != ""){
        eval("g."+assets[i].slug+'.appendChild(source);');
      }
      else{
        // no MP3 or OGG audio support
        g.itens_to_load--;
      }
    }
  }
}

function loadAssetsII(g,assets) {
  //alert('>>'+atttr);
  for(i=0; i<assets.length; i++){
    if(assets[i].type == "image"){
      //IMAGE
      eval("g."+assets[i].slug+' = new Image();');
      eval("g."+assets[i].slug+'.src = "'+assets[i].src+'";');
      eval("g."+assets[i].slug+'.onload = g.loaded_items++;');
    }
    else if(assets[i].type == "audio"){
      //AUDIO
      eval("g."+assets[i].slug+' = document.createElement(\'audio\');');
      eval("g."+assets[i].slug+'.addEventListener(\'canplaythrough\', itemLoadedII(g), false);');
      var source= document.createElement('source');
      if(Modernizr.audio.ogg){
        source.type= 'audio/ogg';
        source.src= assets[i].src+'.ogg';
      }
      else if(Modernizr.audio.mp3){
        source.type= 'audio/mpeg';
        source.src= assets[i].src+'.mp3';
      }
      if(source.src != ""){
        eval("g."+assets[i].slug+'.appendChild(source);');
      }
      else{
        // no MP3 or OGG audio support
        g.itens_to_load2--;
      }
    }
  }
}

function itemLoaded(g) {
  g.loaded_items++;
}

function itemLoadedII(g) {
  g.loaded_items2++;
}

function mediaSupport(mimetype, container) {
  var elem = document.createElement(container);
  if(typeof elem.canPlayType == 'function'){
    var playable = elem.canPlayType(mimetype);
    if((playable.toLowerCase() == 'maybe')||(playable.toLowerCase() == 'probably')){
      return true;
    }
  }
  return false;
}
/*
//Handle the melody
  if(mediaSupport('audio/ogg; codecs=vorbis', 'audio') ||
    mediaSupport('audio/mpeg', 'audio')) {

function resizeGame() {
    document.getElementById('canvas').width = window.innerWidth;
    document.getElementById('canvas').height = window.innerHeight;
    console.log("canvas: "+window.innerWidth+", "+window.innerHeight)
    //game.init();
}
*/

function resizeGame() {  
  console.log("window: " + window.innerWidth + ", " + window.innerHeight)
  //if(game.started){
    game.resized = true;
    game.init();
 //}
}


window.addEventListener('resize', resizeGame, false);
window.addEventListener('orientationchange', resizeGame, false);

//

$(function() {
  $("#test").popover({
    animation: true,
    placement: 'right',
    delay: { show: 200, hide: 2000 }
  });
  
  $(".popover-test").popover();
  $(".tooltip-test").tooltip();
  
  $("#promo").alert();
  
  //$('#modal-success').modal();
    
  $("#next").click(function() {
    game.nextStage();
    $('#modal-success').fadeOut();
  });

  $("#test").click(function() {
    start();
    setTimeout('$(\'#test\').popover(\'hide\')', 1500);
  });
  
});
