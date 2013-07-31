<?php

namespace WebSocket\Application;

/**
 * Websocket-Server SecondScreen Application.
 *
 * @author Emerson Estrella <emerson.estrella@gmail.com>
 */

class SecondscreenCartaoverde extends Application {
  private $_clients         = array();
  private $_admin           = null;
  private $_serverClients   = array();
  private $_contents        = array();
  private $_questions       = array();
  private $_serverClientCount = 0;

  public function onConnect($client) {
    $id = $client->getClientId();
    $this->_clients[$id] = $client;
    $this->_serverClients[$client->getClientPort()] = $client->getClientIp();
    $this->_serverClientCount++;
    $this->_ping($client);
    if($this->_admin!="")
      $this->_sendServerinfo($this->_admin);
  }

  public function clientDisconnected($ip, $port) {
    if(!isset($this->_serverClients[$port])) {
      return false;
    }
    unset($this->_serverClients[$port]);
    $this->_serverClientCount--;
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
      if($decodedData['action'] == "sendcontent") {
        call_user_func(array($this, $actionName), $decodedData, $client);
      } elseif($decodedData['action'] == "bancontent") {
        call_user_func(array($this, $actionName), $decodedData, $client);
      } elseif($decodedData['action'] == "sendquestion") {
        call_user_func(array($this, $actionName), $decodedData, $client);
      } elseif($decodedData['action'] == "banquestion") {
        call_user_func(array($this, $actionName), $decodedData, $client);
      } elseif($decodedData['action'] == "godofredo") {
        call_user_func(array($this, $actionName), $decodedData, $client);
      } elseif($decodedData['action'] == "addcontents") {
        call_user_func(array($this, $actionName), $decodedData, $client);
      } elseif($decodedData['action'] == "addquestions") {
        call_user_func(array($this, $actionName), $decodedData, $client);
      } elseif($decodedData['action'] == "addall") {
        call_user_func(array($this, $actionName), $decodedData, $client);
      } elseif($decodedData['action'] == "answer") {
        call_user_func(array($this, $actionName), $decodedData, $client);
      } elseif($decodedData['action'] == "token") {
        call_user_func(array($this, $actionName), $decodedData, $client);
      }
    }
  }

  private function _actionGodofredo($data, $client) {
    if(isset($data['content'])){
      $this->_contents = $data['content'];
    }
    if(isset($data['sent'])){
      $this->_sent_contents = $data['sent'];
    }
    $this->_admin = $client;
    $this->_sendServerinfo($this->_admin);
  }

  private function _actionAddcontents($data, $client) {
    if($this->_admin != ""){
      if($client->getClientId() != $this->_admin->getClientId()){
        echo "\n\nNOT ADMIN!\n";
        return false;
      }
      //Content
      if(isset($data['content'])){
        $this->_contents = $data['content'];
      }
      $this->_sendServerinfo($this->_admin);
    }
  }

  private function _actionAddquestions($data, $client) {
    if($this->_admin != ""){
      if($client->getClientId() != $this->_admin->getClientId()){
        echo "\n\nNOT ADMIN!\n";
        return false;
      }
      //Question
      if(isset($data['question'])){
        $this->_questions = $data['question'];
      }
      $this->_sendServerinfo($this->_admin);
    }
  }

  private function _sendAll($encodedData, $resetClientAnswer = false) {
    if(count($this->_clients) < 1) {
      return false;
    }
    foreach($this->_clients as $sendto) {
      if($resetClientAnswer){
        $sendto->setAnswered(false);
      }
      $sendto->send($encodedData);
    }
  }

  public function statusMsg($text, $type = 'info') {   
    $data = array(
      'type' => $type,
      'text' => $text,
    );
    $encodedData = $this->_encodeData('statusMsg', $data);
    $this->_sendAll($encodedData);
  }

  private function _sendServerinfo($client) {
    if(count($this->_clients) < 1) {
      return false;
    }
    if($client){
      $currentServerInfo = $this->_serverInfo;
      if(isset($this->_serverClientCount))
        $currentServerInfo['clientCount'] = $this->_serverClientCount-1;
      $currentServerInfo['contents'] = $this->_contents;
      $currentServerInfo['questions'] = $this->_questions;
      $currentServerInfo['clients'] = $this->_clients;
      $encodedData = $this->_encodeData('serverInfo', $currentServerInfo);
      $client->send($encodedData);
    }
  }
  
  public function setServerInfo($serverInfo) {
    if(is_array($serverInfo)){
      $this->_serverInfo = $serverInfo;
      return true;
    }
    return false;
  }

  //Content Send
  private function _actionSendcontent($data, $client) {
    if($client->getClientId() != $this->_admin->getClientId()){
      echo "\n\nNOT ADMIN!\n";
      return false;
    }
    if($data["data"] >= 0)
      $this->_sendContentByIndex($data["data"]);
  }

  //Content Ban
  private function _actionBancontent($data, $client) {
    if($client->getClientId() != $this->_admin->getClientId()){
      echo "\n\nNOT ADMIN!\n";
      return false;
    }
    //remove from clients ui
    $this->_sendContentBan($data["data"]);
    //refresh admin
    //if($this->_admin!="")
      //$this->_sendServerinfo($this->_admin);
  }

  //Question Ban
  private function _actionBanquestion($data, $client) {
    if($client->getClientId() != $this->_admin->getClientId()){
      echo "\n\nNOT ADMIN!\n";
      return false;
    }
    //remove from clients ui
    echo "\n\n... banning content...{$data["data"]}\n";
    $this->_sendQuestionBan($data["data"]);
    //refresh admin
    //if($this->_admin!="")
      //$this->_sendServerinfo($this->_admin);
  }

  //

  //Send Content By Index
  private function _sendContentByIndex($index) {
    $index = $this->_searchUid($this->_contents, $index);
    if($index >= 0){
      $data = $this->_contents[$index];
      if(!$data){
        echo "\n\nERRO: CONTENT NOT FOUND!\n\n";
        return false;
      }
      else{
        if($data["banned"]) {
          echo "\n\nERRO: CONTENT BANNED!\n\n";
          return false;
        }
        echo "\n\n SENDING CONTENT {$data["uid"]}...\n\n";
        $encodedData = $this->_encodeData('contentInfo', $data);
        $this->_sendAll($encodedData);
      }
    }
  }

  //Send Content Ban
  private function _sendContentBan($uid) {
    $index = $this->_searchUid($this->_contents, $uid);
    if($index >= 0){
      $data = $this->_contents[$index];
      if($data["handler"] <= 0){
        echo "\n\nERRO: CONTENT BAN NOT SENT!\n\n";
        return false;
      }
      else{
        $encodedData = $this->_encodeData('contentBan', $uid);
        $this->_sendAll($encodedData);
        echo "\n\nCONTENT BAN $uid BANNED!\n\n";
      }
    }else
      echo "\n\nCONTENT BAN $uid NOT FOUND!\n\n";
  }

  //Send Question Ban
  private function _sendQuestionBan($uid) {
    $index = $this->_searchUid($this->_questions, $uid);
    if($index >= 0){
      $data = $this->_questions[$index];
      if($data["handler"] <= 0){
        echo "\n\nERRO: QUESTION NOT SENT!\n\n";
        return false;
      }
      else{
        $encodedData = $this->_encodeData('questionBan', $uid);
        $this->_sendAll($encodedData);
        echo "\n\nQUESTION {$data["uid"]} BANNED!\n\n";
      }
    }else
      echo "\n\nQUESTION $uid NOT FOUND!\n\n";
  }

  //
  
  //Answer
  private function _actionAnswer($data, $client) {
    if(!$client->getAnswered()){
      $index = $this->_searchUid($this->_questions, $data["data"]["question"]);
      if($index >= 0){
        $this->_questions[$index]["answers_count"]++;
        //
        $question = $this->_questions[$index];
        $answers = $question["answers"];
        $correct = false;
        $correct_index = 0;
        $i = 0;
        foreach($answers as $a){
          $i++;
          if($a["correct"]){
            $correct_index = $i;
            if($a["text"]==$data["data"]["answer"])
              $correct = true;
          }
        }
        $client->setAnswered(true);
        //$client->setTime($client->getTime() + $data["data"]["time"]);
        if($correct){
          $client->setPoints($client->getPoints() + $question["points"]);
          if(!$question["answered_first_by"]){
            $this->_questions[$index]["answered_first_by"] = $client->getName()."(".$client->getEmail().")";
          }
          $data = array("points" => $client->getPoints(), "correct_index" => $correct_index, "question" => $question["uid"]);
          $this->_sendCorrectAnswer($client, $data);
        }
        else{
          $client->setPoints($client->getPoints() - $question["error_points"]);
          $data = array("points" => $client->getPoints(), "correct_index" => $correct_index, "question" => $question["uid"]);
          $this->_sendWrongAnswer($client, $data);
        }        
        //ranking update
        $this->_updateRanking($client);
      }
    }
  }

  private function _updateRanking($client){
    foreach($this->_clients as $key=>$row){
      if($this->_admin != $row){
        $points[$row->getEmail()]   = $row->getPoints();
        $info[$row->getEmail()]     = array($row->getName(), $row->getPoints(), $row->getAvatar(), $row->getEmail());
      }
    }
    array_multisort($points, SORT_DESC, $info);    
    //ranking log
    $this->_sendSaveClientRankng($info);
    //top 10
    $this->_ranking = array_slice($info, 0, 10);
  }

  private function _sendCorrectAnswer($client, $data) {
    if(count($this->_clients) < 1) {
      return false;
    }
    $encodedData = $this->_encodeData('correctAnswer', $data);
    $client->send($encodedData);
  }
  
  private function _sendWrongAnswer($client, $data) {
    if(count($this->_clients) < 1) {
      return false;
    }
    $encodedData = $this->_encodeData('wrongAnswer', $data);
    $client->send($encodedData);
  }

  private function _sendSaveClientRankng($info){
    if($this->_admin != ""){
      $encodedData = $this->_encodeData('saveRankingInfo', $info);
      $this->_admin->send($encodedData);
    }
  }

  //
  
  function _ping($client) {
    $encodedData = $this->_encodeData('ping', Array("users" => $this->_serverClientCount));
    $client->send($encodedData);
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
