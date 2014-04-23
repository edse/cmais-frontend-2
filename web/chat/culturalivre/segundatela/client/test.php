<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once '/var/frontend/segundatela/client/class.websocket_client.php';

/*
while(true){
  $client = new WebsocketClient;
  if(!$client->connect('127.0.0.1', 80, '/secondscreenqss', '127.0.0.1')){
    exec("\nstop!");
    sleep(1);
    exec("\nstart!");
    //echo exec("tail -f /var/frontend/segundatela/server/log/1-output.txt");
    echo "\n\n-- Server restarted --\n";
  }else{
    $client->disconnect();
  }
  sleep(10);
}
*/

$clients = array();
$testClients = 100;
$testMessages = 1000;
$erro = false;
for($i = 0; $i < $testClients; $i++)
{
  $clients[$i] = new WebsocketClient;
  if(!$clients[$i]->connect('200.136.27.25', 80, '/secondscreenqss', '200.136.27.25')){
    $erro = true; 
  }
  echo "\ni:$i";
  usleep(5000);
}
usleep(5000);

if($erro){
  //exec("~/start.sh");
  echo("\ncould not connect!");
  die("\nfim!");
}

$payload = json_encode(array(
  'action' => 'echo',
  'data' => 'dos'
));

//while(true)
for($i = 0; $i < $testMessages; $i++)
{
  $clientId = rand(0, $testClients-1);
  $clients[$clientId]->sendData($payload);
  //echo "\nsending msg";
  echo ".";
}
usleep(5000);

echo "\n\n".count($clients);

exit();
