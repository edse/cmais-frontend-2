<?php
	$block = "false";
	require_once "/var/frontend/lib/vendor/geoip/geoip.inc";
	$gi = geoip_open('/var/frontend/lib/vendor/geoip/GeoIP.dat',GEOIP_STANDARD);
	//"este conteúdo não está liberado para sua região"
	if(geoip_country_code_by_addr($gi, $_SERVER['REMOTE_ADDR']) != "BR"){
		$block = "true";
	}
	geoip_close($gi);
	die($block);

