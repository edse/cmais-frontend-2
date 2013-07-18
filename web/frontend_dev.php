<?php

// this check prevents access to debug front controllers that are deployed by accident to production servers.
// feel free to remove this, extend it or make something more sophisticated.

//echo($_SERVER['REMOTE_ADDR']);

//die('You are not allowed to access this file. Check '.basename(__FILE__).' for more information.');

if (!in_array(@$_SERVER['REMOTE_ADDR'], array('127.0.0.1', '::1', '172.20.18.133', '172.20.18.103', '172.20.16.62','172.20.17.43','172.20.16.139','172.20.19.50','172.20.15.61','172.20.17.203', '172.20.80.3', '172.20.17.32', '172.20.80.2', '172.20.80.5')))
{
  die('You are not allowed to access this file. Check '.basename(__FILE__).' for more information.');
}

require_once(dirname(__FILE__).'/../config/ProjectConfiguration.class.php');

$configuration = ProjectConfiguration::getApplicationConfiguration('frontend', 'dev', true);
sfContext::createInstance($configuration)->dispatch();


