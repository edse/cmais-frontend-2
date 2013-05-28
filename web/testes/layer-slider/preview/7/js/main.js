(function($) {

	$(document).ready(function(){
		
		// $('#slider2').mpcLayerSlider({
		// 	'defaultWidth' : 1245,
		// 	'defaultHeight' : 450
		// });
		
		$('#slider2').mpcLayerSlider({
			'defaultWidth' : 1245,
			'defaultHeight' : 450,
			'revertAnimation' : true,
			'uiStyle': 'style07',
			'arrowsOffset': 100,
			'bulletsVerticalOffset': 20,
			'shadowStyle': 'style01',
			'bulletsVerticalOffset': 0,
			'showControlsOnHover': true,
			'controlsOpacity': 0.1
		});
		
	});

})(jQuery);