<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
date_default_timezone_set('America/Sao_Paulo');

$config_host                       = "172.20.80.2";
$config_port                       = "80";
$config_clients                    = 5000;
$config_connections                = 5000;
$config_check                      = FALSE;
$config_origin                     = "";
$config_requests                   = 12000;
$config_id                         = 1;

require('lib/SplClassLoader.php');

$classLoader = new SplClassLoader('WebSocket', __DIR__ . '/lib');
$classLoader->register();

$server = new \WebSocket\Server($config_host, $config_port, false);

echo "\n\nStarting at: ".$config_host.":".$config_port." (".date("H:i:s").")\n\n";

// server settings:
$server->socket_id = $config_id;
$server->setMaxClients($config_clients);
$server->setMaxConnectionsPerIp($config_connections);
$server->setMaxRequestsPerMinute($config_requests);

if(($config_check) && ($config_origin != "")){
  $server->setCheckOrigin($config_check);
  $server->setAllowedOrigin($config_origin);
}else
  $server->setCheckOrigin(FALSE);

$server->registerApplication('secondscreenapp', \WebSocket\Application\SecondscreenApp::getInstance());
$server->registerApplication('chatapp', \WebSocket\Application\ChatApp::getInstance());

$server->run();
