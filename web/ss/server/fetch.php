<?php
/*
ini_set("memory_limit", "1700M");
ini_set("max_input_time", "3600");
ini_set("max_execution_time", "3600");

require_once(dirname(__FILE__).'../../../config/ProjectConfiguration.class.php');
$configuration = ProjectConfiguration::getApplicationConfiguration('frontend', 'prod', false);
sfContext::createInstance($configuration)->dispatch();

$t = date("Y-m-d H:i:s", strtotime(date('Y-m-d H:i:s'))-24*60*60*14);

die($t);


*/
header('Content-Type: text/html; charset=utf-8');
error_reporting(E_ALL);
ini_set('display_errors','On');
$source = "astolfo";
$id = 1560;
$save = false;
if($_REQUEST["id"])
  $id = $_REQUEST["id"];
if($_REQUEST["source"])
  $source = $_REQUEST["source"];
if(@$_REQUEST["save"])
  $save = $_REQUEST["save"];

/*
if($source == "astolfo"){
  require_once(dirname(__FILE__).'/../config/ProjectConfiguration.class.php');
  $configuration = ProjectConfiguration::getApplicationConfiguration('frontend', 'dev', true);
  sfContext::createInstance($configuration)->dispatch();
  $url = 'http://172.20.18.133/ajax/preview?id='.$id;
  $asset = Doctrine::getTable('Asset')->findOne($id);
  if($asset){
    echo "<p>".$asset->AssetContent->render()."</p>";
  }
  die();
}
*/

if($source == "Wikipedia"){
  //Wikipedia search
  $opts = array('http' => array('user_agent' => 'Astolfo/1.0 (http://cmais.com.br)'));
  $context = stream_context_create($opts);
  //$url = 'http://pt.wikipedia.org/w/api.php?action=parse&format=json&pageid='.$id.'&section=0&contentformat=text%2Fplain&prop=text%7Cimages';
  $url = 'http://pt.wikipedia.org/w/api.php?action=parse&format=json&pageid='.$id.'&prop=text%7Cimages';
  $wiki_results = json_decode(file_get_contents($url, FALSE, $context), TRUE);

  $data = $wiki_results["parse"]["text"]["*"];

  //var_dump($wiki_results);

  //<li>REDIRECT <a href="/wiki/Luiz_In%C3%A1cio_Lula_da_Silva" title="Luiz Inácio Lula da Silva">Luiz Inácio Lula da Silva</a></li>

  preg_match('/<li>REDIRECT <a href="(.*?)" title="(.*?)"/si', $data, $match);
  if(!isset($match[2])){
    preg_match('/<li>Redirecionamento <a href="(.*?)" title="(.*?)"/si', $data, $match);
    //print_r($match);
    //die("1");
  }
  if(isset($match[2])){
    //print_r($match);
    //die("2");
    $url = 'http://pt.wikipedia.org/w/api.php?action=parse&format=json&page='.urlencode($match[2]).'&prop=text%7Cimages';
    $wiki_results = json_decode(file_get_contents($url, FALSE, $context), TRUE);
    //var_dump($wiki_results);
    $data = $wiki_results["parse"]["text"]["*"];
  }

  if($wiki_results["parse"]["title"]){
    $text = "";
    $info = "";
    $images = "";
    
    //Infobox
    /*
    preg_match('/<table\s*class="infobox"[^>]*>(.*?)<\/table>/si', $data, $match);
    if(count($match)<=0){
      preg_match('/<table\s*class="infobox_v2"[^>]*>(.*?)<\/table>/si', $data, $match);
      //print_r($match);
      //die();
      if(@$match[0]!=""){
        //$t = strip_tags($match[0], '<table><tr><td><img><a>');
        $info = @str_replace('<a href="/', '<a target=\"_blank\" href="http://pt.wikipedia.org/', $match[0]);
      }
    }
    else{
      //$t = strip_tags($match[0], '<table><tr><td><img><a>');
      $info = @str_replace('<a href="/', '<a target=\"_blank\" href="http://pt.wikipedia.org/', $match[0]);
    }
    */

    //Text    
    preg_match_all('/<p>(.*?)<\/p>/s', $data, $match);
    $text="";
    $i=0;
    foreach ($match[0] as $m) {
      if((($m != "<p><br></p>")&&($m != "<p><br /></p>"))&&($i<5)){
        $i++;
        $text .= $m;
      }
    }
    //Desambiguação
    $pos = strrpos($data, "Desambiguação");
    if($pos !== false){
      preg_match_all('/<ul>(.*?)<\/ul>/s', $data, $match);
      foreach ($match[0] as $m) {
        $text .= $m;
      }
    }
    $text = preg_replace('/ \(<font\s*class="metadata"[^>]*>(.*?)<\/font>\)/s', '', $text);
    $text = preg_replace('/ \(<small>(.*?)\)/s', '', $text);
    $text = preg_replace('/<strong\s*class="error"[^>]*>(.*?)<\/strong>/s', '', $text);
    $text = preg_replace('/<sup\s*[^>]*>(.*?)<\/sup>/s', '', $text);
    $text = preg_replace('/<table\s*class="noprint"[^>]*>(.*?)<\/table>\)/s', '', $text);
    $text = preg_replace('/<ul\s*class="noprint"[^>]*>(.*?)<\/ul>\)/s', '', $text);
    $text = str_replace('<a href="/', '<a target=\"_blank\" href="http://pt.wikipedia.org/', $text);
    //$text = strip_tags($text, '<p><a><img>');

    if($info==""){
      //Images
      $values = $wiki_results["parse"]["images"];
      $i=0;
      foreach($values as $key => $value) {
        $pos = strrpos($value, ".jpg");
        if($pos === false) $pos = strrpos($value, ".gif");
        if($pos === false) $pos = strrpos($value, ".png");
        if($pos !== false && substr($value, 0, 4)!="Kit_" && substr($value, 0, 8)!="Crystal_" && substr($value, 0, 6)!="Fleche") {
          if(!in_array($value, array(
            "Flags_of_the_Union_of_South_American_Nations.gif",
            ))){
            $i++;
            if($i<=1){
              $url2 = 'http://pt.wikipedia.org/w/api.php?action=query&titles=File:'.urlencode($value).'&prop=imageinfo&iiprop=url&format=json&iiurlwidth=200';
              $wiki_images = @json_decode(file_get_contents($url2, FALSE, $context));
              foreach(@$wiki_images->query->pages as $img){
                $images = "<img src=\"".$img->imageinfo[0]->thumburl."\" alt=\"".$img->title."\" />";
                //$images .= "<img src=\"".$img->imageinfo[0]->url."\" alt=\"".$img->title."\" />";
              }
            }
          }
        }
      }      
    }
    if($save){
      if(!is_dir("/var/frontend/web/cache/172.20.18.133/segundatela/contents/".strtolower($source)."-".strtolower($id))){
        mkdir("/var/frontend/web/cache/172.20.18.133/segundatela/contents/".strtolower($source)."-".strtolower($id));
      }
      $url = "172.20.18.133/segundatela/contents/".strtolower($source)."-".strtolower($id)."/index.html";
      $file = fopen("/var/frontend/web/cache/".$url, "w");
      fwrite($file, $info);
      fwrite($file, $images);
      fwrite($file, $text);

      $w = '<br /><a class="logo-link" href="http://pt.wikipedia.org/wiki/'.$wiki_results["parse"]["title"].'" target="_blank"><img class="wiki-logo" src="/ss/img/wikipedia_logo.png" style="visibility: visible;"></a>';
      fwrite($file, $w);

      fclose($file);
      die("http://172.20.18.133/cache/".$url);
    }else{
      echo $info;
      echo $images;
      echo $text;
    }
    die();
  } 
}

die();