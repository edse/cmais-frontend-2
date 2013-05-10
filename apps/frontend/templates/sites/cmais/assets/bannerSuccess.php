<?php 
function detectMobile() {
	$devices = array('android' => 'android', 'blackberry' => 'blackberry', 'iphone' => '(iphone|ipod|ipad)', 'opera' => '(opera mini|opera mobi)', 'palm' => '(avantgo|blazer|elaine|hiptop|palm|plucker|xiino)', 'windows' => 'windows ce; (iemobile|ppc|smartphone)', 'generic' => '(kindle|mobile|mmp|midp|o2|pda|pocket|psp|symbian|smartphone|treo|up.browser|up.link|vodafone|wap)');
 
	$useragent = strtolower($_SERVER['HTTP_USER_AGENT']);
	$accept = strtolower($_SERVER['HTTP_ACCEPT']);
	$mobile = false;
 
	if (isset($_SERVER['HTTP_X_WAP_PROFILE']) || isset($_SERVER['HTTP_PROFILE']) || strpos($accept, "application/vnd.wap.xhtml+xml") > 0 || strpos($accept, "text/vnd.wap.wml") > 0) {
			$mobile = "WAP";
	} else {
		foreach ($devices as $device => $keys) {
			if(preg_match("/$keys/i", $useragent)) {
				$mobile = $device;
			}
		}
	}
 
	return $mobile;
}
 
if(detectMobile()) {
?>
<script type='text/javascript'>
GA_googleFillSlot("Ipad-300x250");
</script>
<?php
} else {
?>
	<p><h1>Desktop</h1></p>
<?php	
}
?>
