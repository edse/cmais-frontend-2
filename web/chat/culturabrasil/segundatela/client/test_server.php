<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once '/var/frontend/segundatela/client/class.websocket_client.php';

while(true){
  $client = new WebsocketClient;
  if(!$client->connect('200.136.27.25', 80, '/secondscreenqss', '200.136.27.25')){
    exec("/home/websocket/stop.sh");
    sleep(1);
    exec("/home/websocket/start.sh");
    //echo exec("tail -f /var/frontend/segundatela/server/log/1-output.txt");
    echo "\n\n-- Server restarted --\n";
  }else{
    $client->disconnect();
  }
  sleep(10);
}

/*
$clients = array();
$testClients = 1;
$testMessages = 5;
$erro = false;
for($i = 0; $i < $testClients; $i++)
{
	$clients[$i] = new WebsocketClient;
	if(!$clients[$i]->connect('200.136.27.25', 80, '/secondscreenqss', '200.136.27.25')){
	  $erro = true; 
	}
}
usleep(5000);

if($erro){
  exec("~/start.sh");
  die("fim!");
}

$payload = json_encode(array(
	'action' => 'echo',
	'data' => 'dos'
));

for($i = 0; $i < $testMessages; $i++)
{
	$clientId = rand(0, $testClients-1);
	$clients[$clientId]->sendData($payload);
  echo "\nsending msg";
	usleep(5000);
}
usleep(5000);

exit();
*/