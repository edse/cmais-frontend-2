// remap jQuery to $
(function($){

	// ####################################
	// remove no-js class
	// ####################################
	$('body').removeClass('no-js')
	
	
	// ####################################
	// equalise box heights
	// ####################################
	if($('.grid .box p').length != 0) {
	
		vHeight = 0;
		$('.grid .box p').each(function(){
			if($(this).height() > vHeight) {
				vHeight = $(this).height();
			}
		});
		$('.grid .box p').height(vHeight);
	
	}
	
	
	// ####################################
	// open url in new window
	// ####################################
	$('a[href^="http://"], a[href^="https://"]').attr({
		target: '_blank', 
	  	title: 'Opens in a new window'
	});
	
	$('.wallpaper_sizes a').attr({
		target: '_blank', 
	  	title: 'Opens in a new window'
	});
	
	
	// ####################################
	// whole box clickable
	// ####################################
	if($('.btn a').length != 0) {
		$('.grid .box').each(function(){
			$(this).click(function() {
				window.location.href = $(this).find('.btn a').attr('href');
			});
			$(this).css('cursor','pointer');
		});
	}
	
	
	// ####################################
	// episode img navigation
	// ####################################
	if($('.imgNav').length != 0) {
		$('.imgNav a').each(function(){
			$(this).click(function(event) {
				event.preventDefault();
				myImg = $(this).attr('href');
				$(this).parents('.box').find('.inset').attr('src',myImg);
				return false;
			});
		});
	}
	
})(this.jQuery);