// replace with an image of known size on the Sesame website
var testUrl = "_template/bandwidth_test.png";
var testSize = 147590;	// size of asset in bytes

// edit this handler to determine what to do with the number you get
function handleBandwidth(num){
	//alert("tested bandwidth was "+num+" kbps");	
}



// ---- don't need to edit below here ----
var connectionSpeed = 0;
var start,end;

function drawCSImageTag( fileLocation, fileSize, imgTagProperties ) {
	// This function draws the image tag required to run this process.
	// It needs to be passed:
	//     1.  (String)   The location of the file to be loaded
	//     2.  (Integer)  The size of the image file in bytes
	//     3.  (String)   The tag properties to be included in the <img> tag
	// Place a call to this function inside the <body> of your file
	// in place of a static <img> tag.
	
	start = (new Date()).getTime();
		// Record Start time of <img> load.
		
	loc = fileLocation + '?t=' + escape(start);
		// Append the Start time to the image url
		// to ensure the image is not in disk cache.
		
	document.write('<img src="' + loc + '" ' + imgTagProperties + ' onload="handleBandwidth( computeConnectionSpeed(' + start + ',' + fileSize + '));">');
		// Write out the <img> tag.
	
	return;
}


function computeConnectionSpeed( e ) {

	// This function returns the speed in kbps of the user's connection,
	// based upon the loading of a single image.  It is called via onload 
	// by the image drawn by drawCSImageTag() and is not meant to be called
	// in any other way.  You shouldn't ever need to call it explicitly.
	
	end = (new Date()).getTime();
	connectSpeed = (Math.floor((((testSize * 8) / ((end - start) / 1000)) / 1024) * 10) / 10);
	return connectSpeed;	
}

function testBandwidth(){
	drawCSImageTag(testUrl, testSize, "style=\"display:none\" width=\"1\" height=\"1\"")
}

testBandwidth();