$(document).ready(function(){
	/*
	//playRadio('8001')
	$('a[id*="btn"]').click(function(){
		$("#jquery_jplayer_1").jPlayer("clearMedia");
		playRadio($(this).attr('name'));
	})
	function playRadio(idRadio){
		var stream = {
			title: "ABC Jazz",
			mp3: "http://midiaserver.tvcultura.com.br:"+ idRadio +"/;stream/1"
		},
		ready = false;
	
		$("#jquery_jplayer_1").jPlayer({
			ready: function (event) {
				ready = true;
				$(this).jPlayer("setMedia", stream);
			},
			pause: function() {
				$(this).jPlayer("clearMedia");
			},
			error: function(event) {
				if(ready && event.jPlayer.error.type === $.jPlayer.error.URL_NOT_SET) {
					// Setup the media stream again and play it.
					$(this).jPlayer("setMedia", stream).jPlayer("play");
				}
			},
			swfPath: "swf",
			supplied: "mp3",
			preload: "none",
			wmode: "window"
		});
	}
	*/

});