<?php
$arguments = getopt("h:p:c:o:a:m:r:i:");
//var_dump($arguments);
//die();

/* This program is free software. It comes without any warranty, to
 * the extent permitted by applicable law. You can redistribute it
 * and/or modify it under the terms of the Do What The Fuck You Want
 * To Public License, Version 2, as published by Sam Hocevar. See
 * http://sam.zoy.org/wtfpl/COPYING for more details. */

ini_set('display_errors', 1);
error_reporting(E_ALL);

require(__DIR__ . '/lib/SplClassLoader.php');

$classLoader = new SplClassLoader('WebSocket', __DIR__ . '/lib');
$classLoader->register();

/*
if(!isset($arguments["h"]))
  die("\nHost name not provided!\n\n");

if(!isset($arguments["p"]))
  die("\nPort number not provided!\n\n");
*/

$server = new \WebSocket\Server($arguments["h"], $arguments["p"], false);

// server settings:
if(isset($arguments["i"]))
  $server->socket_id = $arguments["i"];

if(isset($arguments["c"]))
  $server->setMaxClients($arguments["c"]);
else
  $server->setMaxClients(200);

if(isset($arguments["o"]) && isset($arguments["a"])){
  $server->setCheckOrigin($arguments["o"]);
  $server->setAllowedOrigin($arguments["a"]);
}else{
  $server->setCheckOrigin(FALSE);
}

if(isset($arguments["m"]))
  $server->setMaxConnectionsPerIp($arguments["m"]);
else
  $server->setMaxConnectionsPerIp(100);

if(isset($arguments["r"]))
  $server->setMaxRequestsPerMinute($arguments["r"]);
else
  $server->setMaxRequestsPerMinute(1200);

// Hint: Status application should not be removed as it displays usefull server informations:
//$server->registerApplication('status', \WebSocket\Application\StatusApplication::getInstance());
$server->registerApplication('secondscreen', \WebSocket\Application\SecondscreenApplication::getInstance());

$server->run();