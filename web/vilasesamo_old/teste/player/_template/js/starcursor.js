starOverride=false;

function getStarCursor(){
	var star = document.getElementById("starcursor");
	return star;
}

function starMove(e) {	
	try {
		var posx = 0;
		var posy = 0;
		if (!e) var e = window.event;
		if (e.pageX || e.pageY) 	{
			posx = e.pageX;
			posy = e.pageY;
		}
		else if (e.clientX || e.clientY) 	{
			posx = e.clientX + document.body.scrollLeft
				+ document.documentElement.scrollLeft;
			posy = e.clientY + document.body.scrollTop
				+ document.documentElement.scrollTop;
		}
		
		// posx and posy are the position of the mouse
		//window.status = posx+","+posy;
		var star = getStarCursor();
		var xOffset=10;
		var yOffset=10;
		var starLeft = posx+xOffset;
		var starTop = posy+yOffset
		star.style.left=starLeft + 'px';
		star.style.top=starTop + 'px';
		
		//window.status = starLeft+","+starTop;
		
		var windowWidth = document.body.clientWidth;
		var windowHeight  = document.body.clientHeight;
		
		//window.status = windowWidth+","+windowHeight;
		
		var buffer = 16 /* star width */ + xOffset + 5 /* for luck */;
		var rightEdge = posx + buffer;
		var bottomEdge = posy + buffer;
		if(rightEdge >= windowWidth || bottomEdge >= windowHeight /* too far right/bottom */
		   || posx < 5 || posy < 5 /* too far left/ top */
		   ) starHide();
		else if(!starOverride) starShow();
		
	}
	catch(e){};
	
}
function starShow(){
	top.starHide();
	try{ top.getElementById("gameIFrame").starHide(); }catch(e){}
	var star = getStarCursor();
	star.style.display = "block";
}
function starHide(){
	if(window!=top) top.starHide();
	var star = getStarCursor();
	star.style.display = "none";
}
function flashStarEnter(){	
	var star = getStarCursor();		
	star.style.visibility = "hidden";
}
function flashStarExit(){
	var star = getStarCursor();	
	star.style.visibility = "visible";
}

function hookEvent(element, eventName, callback) {
  if(typeof(element) == "string")
    element = document.getElementById(element);
  if(element == null)
    return;
  if(element.addEventListener) {
    if(eventName == 'mousewheel') {
      element.addEventListener('DOMMouseScroll', callback, false); 
    }
    element.addEventListener(eventName, callback, false);
  }
  else if(element.attachEvent)
    element.attachEvent("on" + eventName, callback);
}

function unhookEvent(element, eventName, callback) {
  if(typeof(element) == "string")
    element = document.getElementById(element);
  if(element == null)
    return;
  if(element.removeEventListener) {
    if(eventName == 'mousewheel') {
      element.removeEventListener('DOMMouseScroll', callback, false); 
    }
    element.removeEventListener(eventName, callback, false);
  }
  else if(element.detachEvent)
    element.detachEvent("on" + eventName, callback);
}

function onMouseWheel(e){
	e = e ? e : window.event;
  	var wheelData = e.detail ? e.detail : e.wheelDelta / 40;	

	// hide the star on a scroll wheel event
	// it will show up again when the mouse moves
	starHide();
}

// handle mouse wheel
hookEvent(document, "mousewheel", onMouseWheel);

document.onblur=starHide;
document.onmousemove=starMove;


/** 
hide star when moving over any SELECT element
**/

function hideStarSelectBoxes(){
	var sel = document.getElementsByTagName('select');	
	for(var i=0;i<sel.length;i++){
		var box = sel[i];
		box.onmouseover = function(){ starOverride=true; starHide();  };
		box.onmouseout = function(){ starOverride=false; /*starShow();*/ }
	}
}



