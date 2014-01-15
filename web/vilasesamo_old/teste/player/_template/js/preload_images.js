// JavaScript Document
// Array of muppet names which when combined with other pre and post strings point to image names and image rollovers.
var aMuppets = new Array('abby','bert','bigbird','cookie','count','elmo','ernie','grover','oscar','rosita','telly','zoe');
// Location of the images used in the header
var imagePath_Header = '_template/images/header/';
// Location of the images used in the workshop menu
var imagePath_WorkshopMenu = '_template/images/workshopmenu/';
var imagePreloadArray = new Array();
//
function preloadMainNav(){
	// List of rollover images and the muppet character images to preload
	preloadImage(imagePath_Header+'nav_games_r.gif');
	preloadImage(imagePath_Header+'nav_games_ra.gif');
	preloadImage(imagePath_Header+'nav_games_rb.gif');
	
	preloadImage(imagePath_Header+'nav_videos_r.gif');
	preloadImage(imagePath_Header+'nav_videos_ra.gif');
	preloadImage(imagePath_Header+'nav_videos_rb.gif');
	
	preloadImage(imagePath_Header+'nav_playlists_r.gif');
	preloadImage(imagePath_Header+'nav_playlists_ra.gif');
	preloadImage(imagePath_Header+'nav_playlists_rb.gif');
	
	preloadImage(imagePath_Header+'nav_mystreet_r.gif');
	preloadImage(imagePath_Header+'nav_mystreet_ra.gif');
	preloadImage(imagePath_Header+'nav_mystreet_rb.gif');
	
	for (i=0;i<aMuppets.length;i++){
		// Loops through the array of muppet names building an image location string
		preloadImage(imagePath_Header+'nav_muppets_'+aMuppets[i]+'.gif');
		preloadImage(imagePath_Header+'nav_muppets_'+aMuppets[i]+'_r.gif');
		preloadImage(imagePath_Header+'nav_muppets_'+aMuppets[i]+'_ra.gif');
		preloadImage(imagePath_Header+'nav_muppets_'+aMuppets[i]+'_rb.gif');
	}
	
	// bottom nav
	preloadImage(imagePath_WorkshopMenu+'btnparents_r.gif');	
	preloadImage(imagePath_WorkshopMenu+'btnonair_r.gif');
	preloadImage(imagePath_WorkshopMenu+'btnaboutus_r.gif');
	preloadImage(imagePath_WorkshopMenu+'btnsearchgo_r.gif');
	preloadImage(imagePath_WorkshopMenu+'btnpodcast_r.gif');
	
	MM_preloadImages(imagePreloadArray);
}

function preloadImage(src){	
	imagePreloadArray.push(src);	
}

function MM_preloadImages(imgArray) { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=imgArray; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}


function randomMuppet(){
	// Randomly picks a character name for the array of muppet names and then dynamically
	// replaces the Muppet class element with the chosen muppet class name.
	var nChoice = Math.floor(Math.random() * aMuppets.length);
	var muppet = aMuppets[nChoice];
	var element = document.getElementById('nav-muppets');
	element.className = muppet;
	return muppet;
}
