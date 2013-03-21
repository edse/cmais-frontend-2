<?php

namespace WebSocket\Application;

/**
 * Websocket-Server SecondScreen Application.
 *
 * @author Emerson Estrella <emerson.estrella@gmail.com>
 */

class SecondscreenApplication extends Application {
  private $_clients = array();
  private $_admin = null;
  private $_serverClients = null;
  private $_contents = array(/*
    array(
      "type"              => "content",
      "tag"               => "Conclave",
      "sent"              => false,
    ),
    array(
      "type"              => "people",
      "tag"               => "Jorge Mario Bergoglio",
      "sent"              => false,
    ),
    array(
      "type"              => "place",
      "tag"               => "Vaticano",
      "sent"              => false,
    ),
    array(
      "type"              => "place",
      "tag"               => "Buenos Aires, Argentina",
      "sent"              => false,
    ),*/
  );

  public function onConnect($client) {
    $id = $client->getClientId();
    $this->_clients[$id] = $client;
    $this->_serverClients[$client->getClientPort()] = $client->getClientIp();
    $this->_serverClientCount++;
    $this->_sendAppinfo($client);
    $data = array(      
      'clientCount' => $this->_serverClientCount-1
    );
    $encodedData = $this->_encodeData('clientConnected', $data);
    $this->_sendAll($encodedData);
    if($this->_admin)
      $this->_sendServerinfo($this->_admin);
  }

  public function clientDisconnected($ip, $port) {
    if(!isset($this->_serverClients[$port])) {
      return false;
    }
    unset($this->_serverClients[$port]);
    $this->_serverClientCount--;
    $data = array(      
      'clientCount' => $this->_serverClientCount-1
    );
    $encodedData = $this->_encodeData('clientDisconnected', $data);
    $this->_sendAll($encodedData);
    if($this->_admin)
      $this->_sendServerinfo($this->_admin);
  }

  public function onDisconnect($client) {
    $id = $client->getClientId();
    unset($this->_clients[$id]);
    if(count($this->_clients)<=0)
      $this->_admin = null;
  }

  public function onData($data, $client) {
    $decodedData = $this->_decodeData($data);
    if ($decodedData === false) {
      // @todo: invalid request trigger error...
    }
    $actionName = '_action' . ucfirst($decodedData['action']);
    if (method_exists($this, $actionName)) {
      if($decodedData['action'] == "addcontent") {
        call_user_func(array($this, $actionName), $decodedData, $client);
      } elseif($decodedData['action'] == "sendcontent") {
        call_user_func(array($this, $actionName), $decodedData, $client);
      } elseif($decodedData['action'] == "removecontent") {
        call_user_func(array($this, $actionName), $decodedData, $client);
      } elseif($decodedData['action'] == "admin") {
        call_user_func(array($this, $actionName), $decodedData['data'], $client);
      }
    }
  }
  
  private function _actionAddcontent($data) {
    $content = array(
      "type"              => $data["data"]["type"],
      "tag"               => $data["data"]["tag"],
      "source"            => $data["data"]["source"],
      "id"                => $data["data"]["id"],
      "html"              => $data["data"]["html"],
      "url"               => $data["data"]["url"],
      "sent"              => false,
    );
    //$contents = $this->_contents;
    array_unshift($this->_contents, $content);
    $this->_sendServerinfo($this->_admin);
  }

  private function _actionAdmin($data, $client) {
    $this->_admin = $client;
    $this->_sendServerinfo($this->_admin);
  }
    
  private function _sendAll($encodedData) {   
    if(count($this->_clients) < 1) {
      return false;
    }
    foreach($this->_clients as $sendto) {
      $sendto->send($encodedData);
    }
  }

  public function statusMsg($text, $type = 'info') {   
    $data = array(
      'type' => $type,
      //'text' => '['. strftime('%m-%d %H:%M', time()) . '] ' . $text,
      'text' => $text,
    );
    $encodedData = $this->_encodeData('statusMsg', $data);
    $this->_sendAll($encodedData);
  }

  private function _sendAppinfo($client) {
    $_contents = array();
    foreach($this->_contents as $c) {
      if($c["sent"])
        $_contents[] = $c;
    }
    $appInfo = null;
    $appInfo['contents'] = $_contents;
    $encodedData = $this->_encodeData('appInfo', $appInfo);
    $client->send($encodedData);
  }

  private function _sendServerinfo($client) {
    if(count($this->_clients) < 1) {
      return false;
    }
    if($client){
      $currentServerInfo = $this->_serverInfo;
      $currentServerInfo['clientCount'] = $this->_serverClientCount-1;
      $currentServerInfo['contents'] = $this->_contents;
      $currentServerInfo['clients'] = $this->_clients;
      $encodedData = $this->_encodeData('serverInfo', $currentServerInfo);
      $client->send($encodedData);
    }
  }
  
  public function setServerInfo($serverInfo)
  {
    if(is_array($serverInfo)){
      $this->_serverInfo = $serverInfo;
      return true;
    }
    return false;
  }

  private function _actionSendcontent($data, $client) {
    if($client->getClientId() != $this->_admin->getClientId()){
      echo "\n\nNOT ADMIN!\n";
      return false;
    }
    if($data["data"] >= 0)
      $this->_sendContentByIndex($data["data"]);
  }

  private function _actionRemovecontent($data, $client) {
    if($client->getClientId() != $this->_admin->getClientId()){
      echo "\n\nNOT ADMIN!\n";
      return false;
    }
    if(($data["data"] >= 0)&&($this->_contents[$data["data"]])){
      $c = null;
      for($i=0; $i<count($this->_contents); $i++){
        if(($i != $data["data"])&&($this->_contents[$i]!=""))
          $c[] = $this->_contents[$i];
      }
    }
    $this->_contents = $c;
    if($this->_admin)
      $this->_sendServerinfo($this->_admin);
  }

  private function _sendContentByIndex($index) {
    if($this->_contents[$index]["sent"]) {
      return false;
    }
    $this->_contents[$index]["sent"] = true;
    $this->_contents[$index]["handler"] = time();
    $data = $this->_contents[$index];
    if($data){
      $encodedData = $this->_encodeData('contentInfo', $data);
      $this->_sendAll($encodedData);
    }
  }

}
