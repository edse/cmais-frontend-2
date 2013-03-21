<?php

namespace WebSocket\Application;

/**
 * Websocket-Server demo and test application.
 *
 * @author Simon Samtleben <web@lemmingzshadow.net>
 */
class DemoApplication extends Application {
  private $_clients = array();
  private $_filename = '';

  public function onConnect($client) {
    $id = $client->getClientId();
    $this->_clients[$id] = $client;
  }

  public function onDisconnect($client) {
    $id = $client->getClientId();
    unset($this->_clients[$id]);
  }

  public function onData($data, $client) {
    $decodedData = $this->_decodeData($data);
    if ($decodedData === false) {
      // @todo: invalid request trigger error...
    }

    $actionName = '_action' . ucfirst($decodedData['action']);
    if (method_exists($this, $actionName)) {
      if ($decodedData['action'] == "echo") {
        call_user_func(array($this, $actionName), $decodedData);
      } else {
        call_user_func(array($this, $actionName), $decodedData['data']);
      }
    }
  }

  public function onBinaryData($data, $client) {
    $filePath = substr(__FILE__, 0, strpos(__FILE__, 'server')) . 'tmp/';
    $putfileResult = false;
    if (!empty($this->_filename)) {
      $putfileResult = file_put_contents($filePath . $this->_filename, $data);
    }
    if ($putfileResult !== false) {

      $msg = 'File received. Saved: ' . $this->_filename;
    } else {
      $msg = 'Error receiving file.';
    }
    $client->send($this->_encodeData('echo', $msg));
    $this->_filename = '';
  }

  private function _actionEcho($data) {
    $encodedData = $this->_encodeData2(array('action' => 'echo', 'data' => $data["data"], 'title' => $data["title"], 'description' => $data["description"], 'url' => $data["url"]));
    foreach ($this->_clients as $sendto) {
      $sendto->send($encodedData);
    }
    if ($data["title"] == "quit") {
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

  private function _actionSetFilename($filename) {
    if (strpos($filename, '\\') !== false) {
      $filename = substr($filename, strrpos($filename, '\\') + 1);
    } elseif (strpos($filename, '/') !== false) {
      $filename = substr($filename, strrpos($filename, '/') + 1);
    }
    if (!empty($filename)) {
      $this->_filename = $filename;
      return true;
    }
    return false;
  }

}
