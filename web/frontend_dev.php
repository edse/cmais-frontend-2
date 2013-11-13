<?php

// this check prevents access to debug front controllers that are deployed by accident to production servers.
// feel free to remove this, extend it or make something more sophisticated.

//echo($_SERVER['REMOTE_ADDR']);

//die('You are not allowed to access this file. Check '.basename(__FILE__).' for more information.');

if (!in_array(@$_SERVER['REMOTE_ADDR'], array('127.0.0.1', '::1', '172.20.18.133', '172.20.18.103', '172.20.16.62','172.20.17.43','172.20.16.139','172.20.19.50','172.20.15.61','172.20.17.203', '172.20.80.3', '172.20.17.32', '172.20.17.141', '172.20.80.2', '172.20.30.3', '172.20.16.70', '172.20.80.14', '172.20.80.5', '172.20.30.14', '172.20.100.42', '172.20.17.205', '172.20.80.19', '200.136.27.146', '200.136.27.147','172.20.70.11','172.20.30.4','172.20.80.18','172.20.30.18','172.20.80.15', '172.20.17.104','172.20.15.84', '172.20.17.108', '186.203.202.58', '172.20.17.104','177.102.140.217','172.20.18.124','172.20.17.110','172.20.15.199','172.20.17.20','172.20.18.123','177.102.140.217','172.20.30.4', '172.20.70.12','169.254.218.241','172.20.120.9','172.20.17.13','172.20.30.2'))){
  die('You are not allowed to access this file. Check '.basename(__FILE__).' for more information.');
}

require_once(dirname(__FILE__).'/../config/ProjectConfiguration.class.php');

$configuration = ProjectConfiguration::getApplicationConfiguration('frontend', 'dev', true);
sfContext::createInstance($configuration)->dispatch();
