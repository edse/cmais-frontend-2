// Check for the existence of the lowBandwidth var, if it is undefined then execute the
// preloadMainNav (preload images)
// and then the
// randomMuppet function (random Muppet image on the Muppets nav item).

var GB_ROOT_DIR = "_template/js/greybox/";

var selectedMuppet="";

function onWindowLoad(){
	if(typeof lowBandwidth == "undefined" || !lowBandwidth){
		// preload main nav
		preloadMainNav();
		// select a muppet
		try{selectedMuppet = randomMuppet();}catch(e){}
	}
	// prevent star cursor from showing over select boxes
	hideStarSelectBoxes();
}

window.onload = onWindowLoad;

function myStreetOn(){
	document.getElementById("nav-mystreet").className="rollover";	
}

function myStreetOff(){
	document.getElementById("nav-mystreet").className="";	
}

