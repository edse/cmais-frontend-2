/**
* standardised embed method for sesame flash movies 
* relies on swfObject2.2+ and jQuery
*/

// starter objects to extend on embed
var SWF_CONFIG		= {	
	swfUrl			: null,
	expressInstall	: null,
	swfId 			: "myMovie",
	containerId		: null,
	width			: "100%",
	height			: "100%",	
	targetVersion	: "10.0.0.0",
	flashvars 		: {},
	attributes		: {},
	params			: {}
}
var SWF_ATTRIBUTES 	= {id:SWF_CONFIG.swfId, name:SWF_CONFIG.swfId};
var SWF_PARAMS		= {menu:"false", wmode:"opaque",allowScriptAccess:"always",allowFullScreen:"true"};
var SWF_FLASHVARS  	= {
	jsShareMethod			: "flash_openShareDialog",
	jsFavoriteMethod		: "flash_addToMyStreet",
	jsPlaysafeMethod		: "flash_openPlaySafeDialog",
	jsStatsMethod			: "flash_urchinStats",
	jsParentTipStatsMethod	: "flash_parentTipUrchinStats",	
	showFps					: swfobject.getQueryParamValue("showFps")
}

function sesameEmbedSwf(config) {
	var myConfig 		= $.extend(SWF_CONFIG		, config);
	// sanity check
	if(myConfig.swfUrl==null || myConfig.containerId==null) return;
	if(!swfobject.embedSWF){
		alert("the version of swfObject.js is too old. Please upgrade to v2.2+"); 
		return;
	}
	
	// create embed parameters
	myConfig.flashvars		= $.extend(SWF_FLASHVARS	, myConfig.flashvars);
	myConfig.params			= $.extend(SWF_PARAMS		, myConfig.params);
	myConfig.attributes		= $.extend(SWF_ATTRIBUTES	, myConfig.attributes);
	
	// embed the swf
	swfobject.embedSWF(myConfig.swfUrl,
					   myConfig.containerId,
					   myConfig.width,
					   myConfig.height,
					   myConfig.targetVersion,
					   myConfig.expressInstall,
					   myConfig.flashvars,
					   myConfig.params,
					   myConfig.attributes);
	
	// init right click code
	RightClick.init(myConfig.swfId,myConfig.containerId);	
}

/** 
* return a reference to a flash movie
*/
function getFlashMovie(movieName) {
	var isIE = navigator.appName.indexOf("Microsoft") != -1;
	return (isIE) ? window[movieName] : document[movieName];
}


/**
* Share dialog
*/
function flash_openShareDialog(param){
	alert('flash_openShareDialog\n' + param);
//	GB_showCenter("Share", "../../../../html_street/share_dialog.html", 300, 350);
//	flash_sendStatsUrl(lastStatsUrl + "/share");
}


/**
* download video dialog/functionality
*/
function flash_downloadAsset(param){
	alert("download..." + param);	
}

/**
* handle urchin stats calls from flash
* @param context - the player which called this method (PlaylistPlayer,GamePlayer,VideoPlayer + other variants)
* @param eventType - the event which occured
	"start" indicates asset has begun playback 
	"finish" means asset has completed playback normally. 
	"abort" indicates asset was terminated early)
* @param assetId - ID of affected asset (from XML)
* @param assetUrl - directLink URL (from XML)
* @param assetDuration - duration of playback in milliseconds (zero for a "start" event)
* @param assetTitle - title of asset (from XML)
* @param assetOrder - order in which this asset was specified in the playlist (playlist player only)
*/
var statsWindow;
var playlistData={};
var lastStatsUrl="";

function flash_urchinStats(context, eventType, assetId, assetType, assetUrl, assetDuration, assetTitle, assetOrder){	
	var statsUrl = flash_generateStatsUrl(context, eventType, assetId, assetType, assetUrl, assetDuration, assetTitle, assetOrder);	
	lastStatsUrl = flash_generateStatsUrl(context, null, assetId, assetType, assetUrl, assetDuration, assetTitle);	
	flash_sendStatsUrl(statsUrl);	
}

function flash_sendStatsUrl(statsUrl){
	//pageTracker._trackPageview(statsUrl);
	flash_debugStats(statsUrl);
}

/**
* context is the player, eventType is either "impression" or "click", asset title is the PT title, url is the PT link URL
*/
function flash_parentTipUrchinStats(context, eventType, assetTitle, assetUrl){	
	var statsUrl = "/parenttip/" + eventType + "/" + flash_escapeTitle(assetTitle);
	flash_sendStatsUrl(statsUrl);
}

function flash_generateStatsUrl(context, eventType, assetId, assetType, assetUrl, assetDuration, assetTitle, assetOrder){	
	var topLevel=context;
	switch(context){
		case "FavoritesPlayer" : 
			topLevel="mystreet"; 
			break;
		case "PlaylistPlayer" : 
			topLevel="playlist"; 
			break;
		case "GamePlayer" : 
			topLevel="games"; 
			break;
		default :
			topLevel = "videos/"+context;
			break
	}
	
	// TEST -- TITLE REWRITE
	// just for kicks
	//var titleArray = ["Sesame Street"];
	/*
	var titleArray = [""];
	titleArray.push(topLevel);
	if(playlistData && playlistData.playlistName){
		titleArray.push(playlistData.playlistName);
	}
	titleArray.push(assetTitle);
	//document.title = titleArray.join(" - ");
	*/
	// END TEST

	var statsArray = [topLevel];
	var statsUrl;	

	// if this event comes from playlist just store its name and abort
	if(assetType=="playlist" ){		
		playlistData.playlistName=assetTitle;
		statsArray.push(flash_escapeTitle(playlistData.playlistName));
		if(eventType!=null) statsArray.push(eventType);
		statsUrl = "/"+statsArray.join("/");		
		return statsUrl;
	}

	if(playlistData && playlistData.playlistName){
		statsArray.push(flash_escapeTitle(playlistData.playlistName));
	}
	if(assetOrder>=0) statsArray.push("p"+flash_zeroPad(assetOrder,2));
	statsArray.push(assetType);	
	statsArray.push(assetId + "--" + flash_escapeTitle(assetTitle));
	if(eventType!=null) statsArray.push(eventType);
	statsUrl = "/"+statsArray.join("/");	

	return statsUrl;
}



function flash_debugStats(str){
	try{
		document.getElementById("last-stats-call").value += ("\n"+str)
	}catch(e){}
}

function flash_escapeTitle(title){
	/*
	var rex = /[^a-zA-Z0-9_-]/g;
	var rex2 = /_{2,}/g
	var newTitle = title.split(" ").join("_");
	newTitle = newTitle.replace(rex,"").replace(rex2,"_");
	*/
	var newTitle = '';
	
	return newTitle;
}

function flash_zeroPad(num, digits) {
	var str = num+"";
	while(str.length < digits){
		str = "0"+str;	
	}
	return str;
}

