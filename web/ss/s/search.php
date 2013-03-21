<?php
error_reporting(E_ALL);
ini_set('display_errors','On');

$query = "Papa";
if($_REQUEST["query"])
  $query = $_REQUEST["query"];

/*
require_once('/var/frontend/config/ProjectConfiguration.class.php');
$configuration = ProjectConfiguration::getApplicationConfiguration('frontend', 'prod', false);
sfContext::createInstance($configuration)->dispatch();
//die('asdf');


//Astolfo search
$assets = Doctrine_Query::create()
  ->select('a.*')
  ->from('Asset a')
  ->where('a.asset_type_id = ?', 1)
  ->andWhere('a.title like ?', '%'.$query.'%')
  ->orderBy('a.id desc')
  ->limit(10)
  ->execute();

echo ">>>".count($assets);
die();

if($assets){
  foreach($assets as $a){
    $result[] = array("value"=>$a->getTitle(), "data"=>array("source"=>"Astolfo", "id"=>$a->getId()));
  }
}
*/

//Wikipedia search
$opts = array('http' => array('user_agent' => 'Astolfo/1.0 (http://cmais.com.br)'));
$context = stream_context_create($opts);
$url = 'http://pt.wikipedia.org/w/api.php?action=query&list=allpages&format=json&apprefix='.urlencode($query).'&aplimit=10';
$wiki_results = json_decode(file_get_contents($url, FALSE, $context));
if($wiki_results->query->allpages){
  foreach ($wiki_results->query->allpages as $key => $value) {
    //$result[] = array("title"=>$value->title, "id"=>$value->pageid, "source"=>"Wikipedia");
    $result[] = array("value"=>$value->title, "data"=>array("source"=>"Wikipedia", "id"=>$value->pageid));
  }
}

echo json_encode(array("suggestions"=>$result));
die();