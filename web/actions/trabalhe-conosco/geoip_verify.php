<?php

        $block = false;
        /*if($schedules->getIsGeoblocked()){
          error_reporting(E_ALL);
          ini_set('display_errors', '1');
          require_once sfConfig::get('sf_lib_dir').'/vendor/geoip/geoip.inc';
          $gi = geoip_open(sfConfig::get('sf_lib_dir').'/vendor/geoip/GeoIP.dat',GEOIP_STANDARD);
          //"este conteúdo não está liberado para sua região"
          if(geoip_country_code_by_addr($gi, $_SERVER['REMOTE_ADDR']) != "BR"){
            $block = true;
          }
          geoip_close($gi);
        }
        */
        if($block == true){
          echo "IP de fora do brasil";
        }else{
          echo "IP Permitido";
        }
?>        