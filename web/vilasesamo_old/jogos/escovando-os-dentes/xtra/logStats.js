function guid() {
	var S4 = function() {
		return (((1+Math.random())*0x10000)|0).toString(16).substring(1);
	};
	return (S4()+S4()+"-"+S4()+"-"+S4()+"-"+S4()+"-"+S4()+S4()+S4());
};

function timestamp() {
	return (new Date().getTime().toString());
}

var userId = guid();

function logStats(input) {
	var eventObject = {
		event		: "undefined",
		title		: "undefined",
		id			: "undefined",
		userid		: userId,
		timestamp	: timestamp(),		
		params		: {}
	}
	// override defaults
	for(var o in eventObject) {
		if(o in input) eventObject[o] = input[o];
	}
	
	switch(eventObject.event) {
		case "game.start" 		: 
		case "game.end"			:			
		case "round.start"		: 
		case "round.end"		: 			
		case "question.start"	: 
		case "answer.selected"	: 
		case "hint.selected"	: 
		case "vo.click"			: 
		case "object.selected"	: 
		case "object.selected.freeplay"	: 
		case "object.pickup"	: 
		case "object.drop"		: 
		case "timeout"			: 
		default	:			
			break;
	}
	
	// log it
	if(window.console && window.console.info) window.console.info("EVENT", eventObject);
	
	return eventObject;
}