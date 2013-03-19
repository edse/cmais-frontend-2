<?php

namespace WebSocket\Application;

/**
 * Websocket-Server Quiz Application.
 *
 * @author Emerson Estrella <emerson.estrella@gmail.com>
 */

class QuizApplication extends Application {
  private $_clients = array();
  private $_admin = null;
  private $_check_names = true;
  private $_check_emails = true;
  private $_started = true;
  private $_current_question = -1;
  private $_auto_start = false;
  private $_auto_end = false;
  private $_auto_send_questions = false;
  private $_num_players = 2;
  //private $_questions = array();
  private $_questions = array(
    array(
      "question"          => "Quem é a cantora mineira que faz parte de um grupo de pop rock e recentemente lançou um álbum com um guitarrista inglês, famoso por seu trabalho no The Police?",
      "time"              => 180,
      "level"             => "fácil",
      "points"            => 10,
      "sent"              => false,
      "answered_by_all"   => false,
      "answers_count"   => 0,
      "answered_first_by" => null,
      "answers"           => array(
        array(
          "answer"  => "Marina Machado",
          "correct" => false
        ),
        array(
          "answer"  => "Aline Calixto",
          "correct" => false
        ),
        array(
          "answer"  => "Roberta Campos",
          "correct" => false
        ),
        array(
          "answer"  => "Fernanda Takai",
          "correct" => true
        )
      )
    ),
    array(
      "question"          => "Cantora potiguar famosa pela sua interpretação de choros clássicos como “Brasileirinho” e “Apanhei-te cavaquinho”. Considerada a grande Rainha do Choro. Quem é ela?",
      "time"              => 180,
      "level"             => "fácil",
      "points"            => 10,
      "sent"              => false,
      "answered_by_all"   => false,
      "answered_first_by" => null,
      "answers"           => array(
        array(
          "answer"  => "Carmélia Alves",
          "correct" => false
        ),
        array(
          "answer"  => "Carmen Miranda",
          "correct" => false
        ),
        array(
          "answer"  => "Ademilde Fonseca",
          "correct" => true
        ),
        array(
          "answer"  => "Dóris Monteiro",
          "correct" => false
        )
      )
    ),
    array(
      "question"          => "Adriana Calcanhotto dedicou discos às crianças na série Adriana Partimpim. Quantos volumes já foram lançados nesse conceito?",
      "time"              => 180,
      "level"             => "fácil",
      "points"            => 10,
      "sent"              => false,
      "answered_by_all"   => false,
      "answered_first_by" => null,
      "answers"           => array(
        array(
          "answer"  => "1",
          "correct" => false
        ),
        array(
          "answer"  => "2",
          "correct" => false
        ),
        array(
          "answer"  => "3",
          "correct" => true
        ),
        array(
          "answer"  => "4",
          "correct" => false
        )
      )
    ),
    array(
      "question"          => "No último aniversário do RadarCultura, Tulipa e Gustavo Ruiz se juntaram aos irmãos Ná e Dante Ozzetti para interpretar “Sutil”, música de Itamar Assumpção. Esta canção faz parte do disco “Ná”, lançado por Ná Ozzetti em qual ano?",
      "time"              => 180,
      "level"             => "médio",
      "points"            => 20,
      "sent"              => false,
      "answered_by_all"   => false,
      "answered_first_by" => null,
      "answers"           => array(
        array(
          "answer"  => "1992",
          "correct" => false
        ),
        array(
          "answer"  => "1993",
          "correct" => false
        ),
        array(
          "answer"  => "1994",
          "correct" => true
        ),
        array(
          "answer"  => "1995",
          "correct" => false
        )
      )
    ),
    array(
      "question"          => "Qual foi a cantora ganhadora do “Prêmio da Música Brasileira – 2012”, realizado pelo Ministério da Cultura, na categoria Samba?",
      "time"              => 180,
      "level"             => "médio",
      "points"            => 20,
      "sent"              => false,
      "answered_by_all"   => false,
      "answered_first_by" => null,
      "answers"           => array(
        array(
          "answer"  => "Fabiana Cozza",
          "correct" => true
        ),
        array(
          "answer"  => "Beth Carvalho",
          "correct" => false
        ),
        array(
          "answer"  => "Teresa Cristina",
          "correct" => false
        ),
        array(
          "answer"  => "Aline Calixto",
          "correct" => false
        )
      )
    ),
    array(
      "question"          => "Ela é considerada a primeira pianista de choro, autora da primeira marcha carnavalesca (\"Ô Abre Alas\", 1899) e também a primeira mulher a reger uma orquestra no Brasil. A música que está tocando nesse momento no programa é de sua autoria. De quem estamos falando?",
      "time"              => 100,
      "level"             => "médio",
      "points"            => 20,
      "sent"              => false,
      "answered_by_all"   => false,
      "answered_first_by" => null,
      "answers"           => array(
        array(
          "answer"  => "Eudóxia de Barros",
          "correct" => false
        ),
        array(
          "answer"  => "Chiquinha Gonzaga",
          "correct" => true
        ),
        array(
          "answer"  => "Clara Sverner",
          "correct" => false
        ),
        array(
          "answer"  => "Guiomar Novaes",
          "correct" => false
        )
      )
    ),
    array(
      "question"          => "Qual dos discos dessas grandes cantoras completa 40 anos em 2013?",
      "time"              => 180,
      "level"             => "difícil",
      "points"            => 30,
      "sent"              => false,
      "answered_by_all"   => false,
      "answered_first_by" => null,
      "answers"           => array(
        array(
          "answer"  => "“Fruto Proibido” – Rita Lee e Tutti Frutti",
          "correct" => false
        ),
        array(
          "answer"  => "“Rosa dos ventos – Ao vivo” – Maria Bethânia",
          "correct" => false
        ),
        array(
          "answer"  => "“Frevo mulher” - Amelinha",
          "correct" => false
        ),
        array(
          "answer"  => "“Índia” – Gal Costa",
          "correct" => true
        )
      )
    ),
    array(
      "question"          => "Dona Ivone Lara é fundadora de uma grande Escola de Samba do Rio de Janeiro. Que escola é essa?",
      "time"              => 180,
      "level"             => "difícil",
      "points"            => 30,
      "sent"              => false,
      "answered_by_all"   => false,
      "answered_first_by" => null,
      "answers"           => array(
        array(
          "answer"  => "Portela",
          "correct" => true
        ),
        array(
          "answer"  => "Imperatriz Leopoldinense",
          "correct" => false
        ),
        array(
          "answer"  => "Unidos da Tijuca",
          "correct" => false
        ),
        array(
          "answer"  => "Império Serrano",
          "correct" => true
        )
      )
    ),
    array(
      "question"          => "“Samba de verão”, uma das grandes músicas da Bossa Nova, composta pelos irmãos Marcos e Paulo Sérgio Valle, foi gravada por diversas cantoras da música brasileira. De quem é a interpretação que estamos ouvindo no programa?",
      "time"              => 140,
      "level"             => "difícil",
      "points"            => 30,
      "sent"              => false,
      "answered_by_all"   => false,
      "answered_first_by" => null,
      "answers"           => array(
        array(
          "answer"  => "Joyce Moreno",
          "correct" => false
        ),
        array(
          "answer"  => "Ana Caram",
          "correct" => true
        ),
        array(
          "answer"  => "Wanda Sá",
          "correct" => false
        ),
        array(
          "answer"  => "Astrud Gilberto",
          "correct" => false
        )
      )
    ),
    array(
      "question"          => "Algumas cantoras da MPB já dedicaram discos aos sucessos de Roberto Carlos, entre elas:",
      "time"              => 60,
      "level"             => "expert",
      "points"            => 40,
      "sent"              => false,
      "answered_by_all"   => false,
      "answered_first_by" => null,
      "answers"           => array(
        array(
          "answer"  => "Maria Bethânia, Nara Leão e Teresa Cristina",
          "correct" => true
        ),
        array(
          "answer"  => "Teresa Cristina, Fernanda Takai e Maria Bethânia",
          "correct" => false
        ),
        array(
          "answer"  => "Nara Leão, Nora Ney e Elizeth Cardoso",
          "correct" => false
        ),
        array(
          "answer"  => "Maria Bethânia, Nara Leão e Angela Ro Ro",
          "correct" => false
        )
      )
    ),
    
  );
  
  public function onConnect($client) {
    $id = $client->getClientId();
    $this->_clients[$id] = $client;
    if(!$this->_admin){
      $client->_is_admin = true;
      $this->_admin = $client;
      $this->_sendServerinfo($client);
    }/*else{
      $this->_serverClients[$client->getClientPort()] = $client->getClientIp();
      $this->_serverClientCount++;
      $this->_sendGameinfo($client);
    }*/
  }

  /*
  public function clientConnected($client) {
    $this->_sendNameRequest($client);
  }*/

  public function clientDisconnected($ip, $port) {
    if(!isset($this->_serverClients[$port])) {
      return false;
    }
    unset($this->_serverClients[$port]);
    $this->_serverClientCount--;
    //$this->statusMsg('Client disconnected: ' .$ip.':'.$port);
    //$this->statusMsg('Client disconnected');
    $data = array(      
      'port' => $port,
      'clientCount' => $this->_serverClientCount,
    );
    $encodedData = $this->_encodeData('clientDisconnected', $data);
    $this->_sendAll($encodedData);
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
      /*
      if ($decodedData['action'] == "echo") {
        call_user_func(array($this, $actionName), $decodedData);
      } else
      */
      if($decodedData['action'] == "answer") {
        call_user_func(array($this, $actionName), $decodedData, $client);
      } elseif($decodedData['action'] == "name") {
        call_user_func(array($this, $actionName), $decodedData, $client);
      } elseif($decodedData['action'] == "addquestion") {
        call_user_func(array($this, $actionName), $decodedData['data'], $client);
      } elseif($decodedData['action'] == "sendquestion") {
        call_user_func(array($this, $actionName), $decodedData['data'], $client);
      } elseif($decodedData['action'] == "admin") {
        call_user_func(array($this, $actionName), $decodedData['data'], $client);
      } elseif($decodedData['action'] == "sendranking") {
        call_user_func(array($this, $actionName), $decodedData['data'], $client);
      } elseif($decodedData['action'] == "sendgameover") {
        call_user_func(array($this, $actionName), $decodedData['data'], $client);
      } elseif($decodedData['action'] == "start") {
        call_user_func(array($this, $actionName), $decodedData['data'], $client);
      } elseif($decodedData['action'] == "stop") {
        call_user_func(array($this, $actionName), $decodedData['data'], $client);
      }
      /*
      else {
        call_user_func(array($this, $actionName), $decodedData['data']);
      }*/
    }
  }

  /*
  private function _actionEcho($data) {
    $encodedData = $this->_encodeData2(array('action' => 'echo', 'data' => $data["data"], 'name' => $data["name"]));
    foreach ($this->_clients as $sendto) {
      $sendto->send($encodedData);
    }
    if ($data["data"] == "quit") {
      die("\n\nbye!\n\n");
    }
    //save to DB
    if ($this->socket_id > 0) {
      $cmd = "/Applications/MAMP/bin/php5.3/bin/php " . str_replace(" ", "\ ", "/Users/emersonestrella/Documents/Aptana Studio 3 Workspace/astolfo/lib/vendor/websocket/message.php");
      $cmd .= " '" . $this->socket_id . "' '" . $encodedData . "'";
      exec($cmd);
      echo "\n\ncmd:\n" . $cmd;
      echo "\n\nmsg stored.";
    } else {
      echo "\n\nsocket not found!";
    }
  }
  */

  private function _actionSendquestion($data, $client) {
    if($client->getClientId() != $this->_admin->getClientId()){
      echo "\n\nNOT ADMIN!\n";
      return false;
    }
    if($this->_started)
      $this->_sendQuestionByIndex($data);
  }
  
  private function _actionAddquestion($data) {
    $question = array(
      "question"          => $data["question"],
      "time"              => $data["time"],
      "level"             => $data["level"],
      "points"            => $data["points"],
      "sent"              => false,
      "answered_by_all"   => false,
      "answered_first_by" => null,
      "answers"           => null
    );
    foreach($data["answers"] as $a){
      $answer = array(
        "answer"  => $a["text"],
        "correct" => $a["correct"]
      );
      $question["answers"][] = $answer;
    }
    $this->_questions[] = $question;
    $this->_sendServerinfo($this->_admin);
  }

  private function _actionSendranking($data, $client) {
    if($client->getClientId() != $this->_admin->getClientId()){
      echo "\n\nNOT ADMIN!\n";
      return false;
    }
    else{
      $info = array();
      $names = array();
      $points = array();
      $time = array();
      foreach($this->_clients as $key=>$c){
        if($c->getPoints() > 0){
          $names[$key] = $c->getName();
          $points[$key] = $c->getPoints();
          $time[$key] = $c->getTime();
          $info[$key] = array($c->getName(), $c->getPoints(), $c->getTime());
        }
      }
      array_multisort($points, SORT_DESC, $time, SORT_DESC, $info);
      $encodedData = $this->_encodeData('ranking', array_slice($info, 0, 10));
      $this->_sendAllNamed($encodedData);
    }
  }
  
  private function _actionSendgameover($data, $client) {
    if($client->getClientId() != $this->_admin->getClientId()){
      echo "\n\nNOT ADMIN!\n";
      return false;
    }
    $encodedData = $this->_encodeData('gameover', 'Bye!');
    $this->_sendAllNamed($encodedData);
  }

  private function _actionAdmin($data, $client) {
    $this->_admin = $client;
    $this->_sendServerinfo($this->_admin);
    $this->_sendRanknginfo($this->_admin);
  }

  private function _actionStart($data) {
    if(!$this->_started)
      $this->_sendStartGame();
  }
  
  private function _actionStop($data) {
    if($this->_started)
      $this->_sendEndGame();
  }
  
  private function _actionName($data, $client) {
    if(!$client->getName() && $data["data"]){
      $name_exists = false;
      $email_exists = false;
      if($this->_check_names){
        foreach($this->_clients as $c){
          if($c->getName() == $data["data"]["name"])
            $name_exists = true;
        }
      }
      if($this->_check_emails){
        foreach($this->_clients as $c){
          if($c->getEmail() == $data["data"]["email"])
            $email_exists = true;
        }
      }
      if((!$name_exists) && (!$email_exists)){
        $this->_serverClients[$client->getClientPort()] = array($client->getClientIp(), $data["data"]["name"], $data["data"]["email"]);
        $this->_serverClientCount++;
        //$this->_sendGameinfo($client);

        $client->setName($data["data"]["name"]);
        $client->setEmail($data["data"]["email"]);
        //$this->statusMsg('New player connected: '.$client->name);
        $data = array(
          'name' => $client->getName(),
          'clientCount' => $this->_serverClientCount,
          'needed' => $this->_num_players
        );
        
        //notify all
        $encodedData = $this->_encodeData('clientConnected', $data);
        $this->_sendAll($encodedData);
        //set name
        $encodedData = $this->_encodeData('nameSet', $data);
        $client->send($encodedData);

        //update admin
        $this->_sendServerinfo($this->_admin);
        
        //start game
        if($this->_auto_start){
          if(count($this->_serverClients) >= $this->_num_players){
            if(!$this->_started)
              $this->_sendStartGame();
          }
        }

      }else{
        if($name_exists)
          $encodedData = $this->_encodeData('nameTaken', ':(');
        elseif($email_exists)
          $encodedData = $this->_encodeData('emailTaken', ':(');
        $client->send($encodedData);
      }
    }
  }
    

  private function _actionAnswer($data, $client) {
    //var_dump($data);
    $question = $this->_questions[$data["data"]["question"]];
    if($question){
      $this->_questions[$data["data"]["question"]]["answers_count"]++;
      $answers = $question["answers"];
      $correct = false;
      $client->answer_sent = true;
      $correct_index = 0;
      $index = 0;
      foreach($answers as $a){
        $index++;
        if($a["correct"])
          $correct_index = $index;
        if(($a["answer"]==$data["data"]["answer"])&&($a["correct"])){
          $correct = true;
        }
      }
      if($correct){
        $client->setTime($client->getTime() + $data["data"]["time"]);
        $client->setPoints($client->getPoints() + $question["points"]);
        if(!$question["answered_first_by"]){
          $this->_questions[$data["data"]["question"]]["answered_first_by"] = $client->getName()."(".$client->getEmail().")";
        }
        $this->_sendCorrectAnswer($client, $client->getPoints());
      }
      else
        $this->_sendWrongAnswer($client, $correct_index);
      
      //auto question and game over
      /*
      $g = 0;
      $s = 0;
      foreach($this->_serverClients as $c){
        if($c->gamming){
          $g++;
          if($c->answer_sent)
            $s++;
        }
      }
      //echo "\n\ngamming: ".$g;
      //echo "\nanswered: ".$s."\n\n";
      if($g==$s+1 && $g > 0){
        $question["answered_by_all"] = true;
        if($this->_current_question+1 < count($this->_questions)){
          if($this->_auto_send_questions)
            $this->_sendQuestion();
        }elseif($this->_auto_end){
          //end game
          $this->_sendEndGame();
        }
      }
      */
      //notify admin
      //$this->_sendServerinfo2($this->_admin);
      if($correct)
        $this->_sendRanknginfo($this->_admin);
    }
  }
    
  private function _sendAll($encodedData) {   
    if(count($this->_clients) < 1) {
      return false;
    }
    foreach($this->_clients as $sendto) {
      $sendto->send($encodedData);
    }
  }

  private function _sendAllNamed($encodedData) {   
    if(count($this->_clients) < 1) {
      return false;
    }
    foreach($this->_clients as $sendto) {
      if($sendto->getName()!="")
        $sendto->send($encodedData);
    }
  }
    
  private function _sendAllPlaying($encodedData) {   
    if(count($this->_clients) < 1) {
      return false;
    }
    foreach($this->_clients as $sendto) {
      echo "\n>>>>".$sendto->gamming;
      if($sendto->gamming)
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
  
  /*
  private function _sendGameinfo($client) {
    if(count($this->_clients) < 1) {
      return false;
    }
    $gameInfo = null;
    $gameInfo['questions'] = count($this->_questions);
    $gameInfo['started'] = $this->_started;
    $gameInfo['num_players'] = $this->_num_players;
    $encodedData = $this->_encodeData('gameInfo', $gameInfo);
    $client->send($encodedData);
    if(count($this->_serverClients) >= $this->_num_players){
      if(!$this->_started)
        $this->_sendStartGame();
    }
  }
  */
  
  private function _sendServerinfo($client) {
    if(count($this->_clients) < 1) {
      return false;
    }

    $currentServerInfo = $this->_serverInfo;
    $currentServerInfo['clientCount'] = count($this->_clients)-1;
    $currentServerInfo['questions'] = $this->_questions;
    $currentServerInfo['clients'] = $this->_serverClients;
    $currentServerInfo['started'] = $this->_started;
    $currentServerInfo['num_players'] = $this->_num_players;
    $encodedData = $this->_encodeData('serverInfo', $currentServerInfo);
    $client->send($encodedData);
  }
  
  private function _sendRanknginfo($client){
    $info = array();
    $names = array();
    $emails = array();
    $points = array();
    $time = array();
    foreach($this->_clients as $key=>$c){
      if($c->getPoints() > 0){
        $names[$key] = $c->getName();
        $emails[$key] = $c->getEmail();
        $points[$key] = $c->getPoints();
        $time[$key] = $c->getTime();
        $info[$key] = array($c->getName(), $c->getEmail(), $c->getPoints(), $c->getTime());
      }
    }
    array_multisort($points, SORT_DESC, $time, SORT_DESC, $info);

    $encodedData = $this->_encodeData('rankingInfo', array_slice($info, 0, 10));
    $client->send($encodedData);
  }
  
  /*
  private function _sendServerinfo2($client) {
    if(count($this->_clients) < 1) {
      return false;
    }
    
    $c = array();
    foreach($this->_clients as $cli){
      $c[$cli->getClientPort()] = array($cli->getClientIp(), $cli->getName(), $cli->getPoints());
    }

    $currentServerInfo = $this->_serverInfo;
    $currentServerInfo['clientCount'] = count($this->_clients)-1;
    $currentServerInfo['questions'] = $this->_questions;
    $currentServerInfo['clients'] = $c;
    $currentServerInfo['started'] = $this->_started;
    $currentServerInfo['num_players'] = $this->_num_players;
    $encodedData = $this->_encodeData('serverInfo', $currentServerInfo);
    $client->send($encodedData);
  }
  */
  
  public function setServerInfo($serverInfo)
  {
    if(is_array($serverInfo))
    {
      $this->_serverInfo = $serverInfo;
      return true;
    }
    return false;
  }


  private function _sendStartGame() {
    if(!$this->_started){
      $this->_started = true;
      foreach($this->_clients as $client){
        $client->gamming = true;
      }      
    }
    $encodedData = $this->_encodeData('startGame', 'Get ready! Game is starting...');
    $this->_sendAll($encodedData);
    if($this->_auto_send_questions)
      $this->_sendQuestion();
  }

  private function _sendEndGame() {
    if($this->_started){
      $winner = false;
      $p = 0;
      foreach($this->_clients as $client){
        if($client->gamming){
          $client->gamming = false;
          echo "\n".$client->getPoints();
          if($client->getPoints() > $p){
            $p = $client->getPoints();
            $winner = $client;
          }
        }
      }     
      $this->_started = false;
      $this->_current_question = 0;
    }
    if($winner){
      $data = array(
        'winner' => $winner->name,
        'points' => $winner->getPoints(),
      );
    }
    else
      $data = 'Game over!';
    
    if(count($this->_serverClients) >= $this->_num_players){
      $this->_num_players++;
    }
    
    //notify all
    $encodedData = $this->_encodeData('endGame', 'Game over!');
    $this->_sendAllPlaying($encodedData);
    
    //notify all
    $data = array(
      'name' => '',
      'clientCount' => $this->_serverClientCount,
      'needed' => $this->_num_players
    );
    $encodedData = $this->_encodeData('clientConnected', $data);
    $this->_sendAll($encodedData);

  }

  private function _sendQuestionByIndex($index) {
    if(!$this->_started || $this->_questions[$index]["sent"]) {
      return false;
    }
    $this->_current_question++;
    $this->_questions[$index]["sent"] = true;
    $data = $this->_questions[$index];
    if($data){
      $answers = null;
      foreach($data["answers"] as $k=>$v){
        $answers[] = array("answer"=>$data["answers"][$k]["answer"]);
      }
      $data["answers"] = $answers;
      $msg = array(
        "number"    =>  $this->_current_question,
        "question"  =>  $data
      );
      $encodedData = $this->_encodeData('questionInfo', $msg);
      foreach($this->_clients as $client){
        if($client->getName()!=""){
          $client->answer_sent = false;
          $client->send($encodedData);
        }
      }
    }
  }
  
  private function _sendQuestion() {
    if(!$this->_started) {
      return false;
    }
    $this->_questions[$index]["sent"] = true;
    $this->_current_question++;
    $data = $this->_questions[$this->_current_question];
    if($data){
      $answers = null;
      foreach($data["answers"] as $k=>$v){
        $answers[] = array("answer"=>$data["answers"][$k]["answer"]);
      }
      $data["answers"] = $answers;
      $msg = array(
        "number"    =>  $this->_current_question,
        "question"  =>  $data
      );
      $encodedData = $this->_encodeData('questionInfo', $msg);
      foreach($this->_clients as $client){
        if($client->gamming){
          $client->answer_sent = false;
          $client->send($encodedData);
        }
      }
    }
  }
  
  private function _sendCorrectAnswer($client, $points) {
    if(count($this->_clients) < 1) {
      return false;
    }
    $encodedData = $this->_encodeData('correctAnswer', $points);
    $client->send($encodedData);
  }
  
  private function _sendWrongAnswer($client, $correct_index) {
    if(count($this->_clients) < 1) {
      return false;
    }
    $encodedData = $this->_encodeData('wrongAnswer', $correct_index);
    $client->send($encodedData);
  }

}
