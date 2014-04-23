<?php

namespace WebSocket\Application;

/**
 * Websocket-Server SecondScreen Application.
 *
 * @author Emerson Estrella <emerson.estrella@gmail.com>
 */

class ChatApp extends Application {
  private $_clients         = array();
  private $_admin           = null;
  private $_serverClients   = array();
  private $_contents        = array();

  public function onConnect($client) {
    $id = $client->getClientId();
    $this->_clients[$id] = $client;
    $this->_serverClients[$client->getClientPort()] = $client->getClientIp();

    $this->_ping($client);
    
    if($this->_admin!="")
      $this->_sendServerinfo($this->_admin);

    $encodedData = $this->_encodeData('contentInfoAll', $this->_contents);
    $client->send($encodedData);

  }

  public function clientDisconnected($ip, $port) {
    if(!isset($this->_serverClients[$port])) {
      return false;
    }
    unset($this->_serverClients[$port]);
    if($this->_admin!="")
      $this->_sendServerinfo($this->_admin);
  }

  public function onDisconnect($client) {
    $id = $client->getClientId();
    if($this->_admin!=""){
      if($id == $this->_admin->getClientId()){
        $this->_admin = null;
      }
    }
    unset($this->_clients[$id]);
  }

  public function onData($data, $client) {
    $decodedData = $this->_decodeData($data);
    if ($decodedData === false) {
      // @todo: invalid request trigger error...
    }
    $actionName = '_action' . ucfirst($decodedData['action']);
    if (method_exists($this, $actionName)) {
      if($decodedData['action'] == "godofredo") {
        call_user_func(array($this, $actionName), $decodedData, $client);
      } elseif($decodedData['action'] == "comment") {
        call_user_func(array($this, $actionName), $decodedData, $client);
      }
    }
  }

  private function _actionGodofredo($data, $client) {
    $this->_admin = $client;
    $this->_sendServerinfo($this->_admin);
  }

  private function _actionComment($data, $client) {
    $name = strip_tags($data["data"]["name"]);
    $comment = str_replace("\n", "<br />", strip_tags($data["data"]["comment"]));
    $d = array("time"=>date("H:i:s"), "name" => $name, "comment" => $comment);
    $this->_contents[] = $d;
    $encodedData = $this->_encodeData('contentInfo', $d);
    $this->_sendAll($encodedData);
  }

  //
  
  private function _sendAll($encodedData, $resetClientAnswer = false) {
    if(count($this->_clients) < 1) {
      return false;
    }
    foreach($this->_clients as $sendto) {
      $sendto->send($encodedData);
    }
  }

  private function _sendServerinfo($client) {
    if(count($this->_clients) < 1) {
      return false;
    }
    if($client){
      $currentServerInfo = $this->_serverInfo;
      $currentServerInfo['clientCount'] = count($this->_clients);
      $currentServerInfo['clients'] = $this->_clients;
      $encodedData = $this->_encodeData('serverInfo', $currentServerInfo);
      $client->send($encodedData);
    }
  }
  
  public function setContents($c) {
    $this->_contents = $c;
  }
  
  public function setServerInfo($serverInfo) {
    if(is_array($serverInfo)){
      $this->_serverInfo = $serverInfo;
      return true;
    }
    return false;
  }

  //
  
  function _ping($client) {
    $encodedData = $this->_encodeData('ping', Array("users" => count($this->_clients)));
    $client->send($encodedData);
    //backup
    $file = fopen("log/chat.json", "w+");
    fwrite($file, json_encode($this->_contents));
    fclose($file);
  }
  
  //

  function _searchUid($array, $uid){
    foreach($array as $key => $item){
      if($item['uid'] === $uid)
        return $key;
    }
    return -1;
  }

}