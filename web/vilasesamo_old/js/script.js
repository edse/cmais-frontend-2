// Simple follow the mouse script             
var divName = 'mydiv'; // div that is to follow the mouse        
                       // (must be position:absolute)        
var offX = 9;          // X offset from mouse position        
var offY = 12;          // Y offset from mouse position                        
function mouseX(evt) {if (!evt) evt = window.event; if (evt.pageX) return evt.pageX; else if (evt.clientX)return evt.clientX + (document.documentElement.scrollLeft ?  document.documentElement.scrollLeft : document.body.scrollLeft); else return 0;}        
function mouseY(evt) {if (!evt) evt = window.event; if (evt.pageY) return evt.pageY; else if (evt.clientY)return evt.clientY + (document.documentElement.scrollTop ? document.documentElement.scrollTop : document.body.scrollTop); else return 0;}                        
function follow(evt) {if (document.getElementById) {var obj = document.getElementById(divName).style; obj.visibility = 'visible';        
obj.left = (parseInt(mouseX(evt))+offX) + 'px';        
obj.top = (parseInt(mouseY(evt))+offY) + 'px';}}        
document.onmousemove = follow;        

var request_header = jQuery.ajax({ 
  dataType: 'html',
  success: function(data) {
    if (data)
      jQuery('body #capa-site').before(data);
  },
  url: '/vilasesamo/ajax/insert_header.php?randNum='+ new Date().getTime()
});

var request_footer = jQuery.ajax({
  dataType: 'html',
  success: function(data) {
    if (data)
      jQuery('body').append(data);
  },
  url: '/vilasesamo/ajax/insert_footer.php?randNum='+ new Date().getTime()
});