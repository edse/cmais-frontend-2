<?php
namespace WebSocket\Application;

/**
 * Websocket-Server SecondScreen Application.
 *
 * @author Emerson Estrella <emerson.estrella@gmail.com>
 */

class SecondscreenQss extends Application {
  private $_clients           = array();
  private $_admin             = null;
  private $_contents          = array();
  private $_questions         = array();
  private $_tokens            = array();
  private $_question_sent_at  = array();  
  private $_scripts_folder = "/var/frontend/qss-server/scripts";

  public function onConnect($client) {
    $id = $client->getClientId();
    $this->_clients[$id] = $client;
  }
  
  public function onDisconnect($client) {
    $id = $client->getClientId();
    if($this->_admin!=""){
      if($id == $this->_admin->getClientId()){
        $this->_admin = null;
      }
    }
    unset($this->_tokens[$id]);
    unset($this->_clients[$id]);
  }
  
  public function onData($data, $client) {
    $decodedData = $this->_decodeData($data);
    if ($decodedData === false) {
      // @todo: invalid request trigger error...
    }
    $actionName = '_action' . ucfirst($decodedData['action']);
    echo "\n\n Calling: ".$actionName."\n\n";
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
      } elseif($decodedData['action'] == "answer") {
        call_user_func(array($this, $actionName), $decodedData, $client);
      } elseif($decodedData['action'] == "token") {
        call_user_func(array($this, $actionName), $decodedData, $client);
      }
    }
  }

  private function _actionToken($data, $client) {
    $id = $client->getClientId();
    if(in_array($data["data"]["token"], $this->_tokens))
      $client->close();
    else{
      $this->_tokens[$id] = $data["data"]["token"];
      $points = shell_exec('php '.$this->_scripts_folder.'/today-points.php -t '.$data["data"]["token"]);
      $client->setToken($data["data"]["token"]);
      $client->setName($data["data"]["name"]);
      $client->setPoints($points);
      $this->_ping($client);
    }
  }

  private function _actionGodofredo($data, $client) {
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
      if($this->_admin!="")
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
      if($this->_admin!="")
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

  private function _sendServerinfo($client) {
    if(count($this->_clients) < 1) {
      return false;
    }
    if($client){
      $currentServerInfo = $this->_serverInfo;
      $currentServerInfo['clientCount'] = count($this->_clients);
      $currentServerInfo['contents'] = $this->_contents;
      $currentServerInfo['questions'] = $this->_questions;
      $encodedData = $this->_encodeData('serverInfo', $currentServerInfo);
      $client->send($encodedData);
    }
  }

  public function getGodofredo() {
    if($this->_admin){
      return $this->_admin->getClientId();;
    }
    return false;
  }
  
  public function setServerInfo($serverInfo) {
    if(is_array($serverInfo)){
      $this->_serverInfo = $serverInfo;
      return true;
    }
    return false;
  }

  //Content
  private function _actionSendcontent($data, $client) {
    if($client->getClientId() != $this->_admin->getClientId()){
      echo "\n\nNOT ADMIN!\n";
      return false;
    }
    if($data["data"] >= 0)
      $this->_sendContentByIndex($data["data"]);
  }

  //Question
  private function _actionSendquestion($data, $client) {
    if($client->getClientId() != $this->_admin->getClientId()){
      echo "\n\nNOT ADMIN!\n";
      return false;
    }
    if($data["data"] >= 0){
      echo "\n\nSending...\n";
      $this->_sendQuestionByIndex($data["data"]);
    }
  }

  //Content Ban
  private function _actionBancontent($data, $client) {
    if($client->getClientId() != $this->_admin->getClientId()){
      echo "\n\nNOT ADMIN!\n";
      return false;
    }
    //remove from clients ui
    echo "\n\n... banning content...{$data["data"]}\n";
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

  //Send Question By Index
  private function _sendQuestionByIndex($index) {
    $index = $this->_searchUid($this->_questions, $index);
    if($index >= 0){
      $data = $this->_questions[$index];
      if(!$data){
        echo "\n\nERRO: QUESTION NOT FOUND!\n\n";
        return false;
      }
      else{
        if($data["banned"]) {
          echo "\n\nERRO: QUESTION BANNED!\n\n";
          return false;
        }
        $answers = Array();
        foreach($data["answers"] as $a){
          $answers[] = Array("text" => $a["text"]);
        }
        $this->_question_sent_at = time();
        $data["answers"] = $answers;
        $encodedData = $this->_encodeData('questionInfo', $data);
        $this->_sendAll($encodedData, true);
      }
    }
  }

  //Send Content Ban
  private function _sendContentBan($uid) {
    $index = $this->_searchUid($this->_contents, $uid);
    if($index >= 0){
      $data = $this->_contents[$index];
      if($data["handler"] <= 0){
        echo "\n\nERRO: CONTENT NOT SENT!\n\n";
        return false;
      }
      else{
        $encodedData = $this->_encodeData('contentBan', $uid);
        $this->_sendAll($encodedData);
        echo "\n\nCONTENT {$data["uid"]} BANNED!\n\n";
      }
    }else
      echo "\n\nCONTENT $uid NOT FOUND!\n\n";
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
      $client->setAnswered(true);
      if(isset($data["data"]["question"])){
        $index = $this->_searchUid($this->_questions, $data["data"]["question"]);
        if($index >= 0){
          $this->_questions[$index]["answers_count"]++;
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
          if($this->_question_sent_at > 0){
            $time = time() - intval($this->_question_sent_at);
            $float = (30 - $time)/10000000;
          }else{
            $float = 0.0000001;
          }
          if($correct){
            $p = $client->getPoints() + $question["points"];
            if($p < 0)
              $r = $p - $float;
            else
              $r = $p + $float;
            $client->setPoints($r);
            $data = array("points" => intval($client->getPoints()), "correct_index" => $correct_index, "question" => $question["uid"]);
            $this->_sendCorrectAnswer($client, $data);
          }
          else{
            $p = $client->getPoints() - $question["error_points"];
            if($p < 0)
              $r = $p - $float;
            else
              $r = $p + $float;
            $client->setPoints($r);
            $data = array("points" => intval($client->getPoints()), "correct_index" => $correct_index, "question" => $question["uid"]);
            $this->_sendWrongAnswer($client, $data);
          }
          $points = shell_exec('php '.$this->_scripts_folder.'/set-points.php -t '.$client->getToken().' -p '.$r);
        }
      }
    }
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
  
  /*
  function _saveRanking(){
    foreach($this->_clients as $c) {
      $points = shell_exec('php '.$this->_scripts_folder.'/set-points.php -t '.$c->getToken().' -p '.$c->getPoints());
    }
  }
  */

  function _ping($client) {
    $encodedData = $this->_encodeData('ping', Array("users" => count($this->_clients), "points" => intval($client->getPoints())));
    $client->send($encodedData);
    //ADMIN PING
    if($this->_admin!=""){
      $id = $client->getClientId();
      if($id == $this->_admin->getClientId()){
        $this->_sendServerinfo($this->_admin);
      }
    }
  }

  function _searchUid($array, $uid){
    foreach($array as $key => $item){
      if($item['uid'] === $uid)
        return $key;
    }
    return -1;
  }

}