/*****
 *
 *   Game.js
 *
 *****/

window.onload = function () {

  var canvas = document.getElementById('canvas');
  var context = canvas.getContext('2d');
  var game = new Game(canvas);
  var inteval = null;
  
  var maxElapsedTime = 0;
  var start_time = 0;
  var time = getTimer();

  function getTimer () {
    return (new Date().getTime() - start_time); //milliseconds
  }
    
  function drawFrame() {
    //window.requestAnimationFrame(drawFrame, canvas);
    //game.draw();
    game.render();

    var elapsed = getTimer() - time;
    time = getTimer();
      
    //elapsed = Math.min(20, Math.max(-20, elapsed));
    if(elapsed > maxElapsedTime)
      maxElapsedTime = elapsed;
      
    context.fillText(">>> "+elapsed, 50, 50);
    context.fillText("maxElapsedTime>>> "+maxElapsedTime, 50, 60);
  }
  
  window.m = {game: game};
  window.m.interv = function () {
    interval = setTimeout("window.m.game.mouse.moving = false; document.getElementById('moving').value = false; window.m.intervClear();", 500);
  }
  window.m.intervClear = function () {
    clearInterval(interval)
  }

  document.getElementById('scale').onchange = function() {
    game.num_lines = this.value;
    game.num_pieces = this.value*this.value;
    game.piece_width = game.img_width / game.num_lines;
    game.piece_height = game.img_height / game.num_lines;
    game.init();

    
    //game.piece_width = game.canvas.width / game.num_pieces;
    //setBoard();
    //drawTiles();
  };
  
  window.setInterval(drawFrame, 150);

}
