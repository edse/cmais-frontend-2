
var message="Please use the left mouse button";
function clickIE4(){
	if (event.button==2){
		//alert(message);
		return false;
	}
}

function clickNS4(e){
	if (document.layers||document.getElementById&&!document.all){
		if (e.which==2||e.which==3){
			//alert(message);
			return false;
		}
	}
}


function disableselect(e){
	return false;
}

function reEnable(){
	return true;
}


function no_click(e){ 
	if (navigator.appName == 'Netscape' && ( e.which == 2 || e.which == 3))  { 
		//alert(message);
		return false; 
	} 
	if (navigator.appName == 'Microsoft Internet Explorer' && (event.button == 2 || event.button == 3)) { 
		//alert(message);
		return false; 
	} 
}

if(document.layers) window.captureEvents(Event.MOUSEDOWN); 
document.oncontextmenu=new Function("return false")
window.onmousedown=no_click; 
document.onmousedown=no_click; 
//if IE4+
//document.onselectstart=new Function ("return false")

//if NS6
if (window.sidebar){
	//document.onmousedown=disableselect
	document.onclick=reEnable
}

if (document.layers){
	document.captureEvents(Event.MOUSEDOWN);
	document.onmousedown=clickNS4;
}
	else if (document.all&&!document.getElementById){
	document.onmousedown=clickIE4;
}


