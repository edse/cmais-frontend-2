<?php
set_time_limit(0);
error_reporting(E_ALL);
ini_set('display_errors', '1');

require_once(dirname(__FILE__).'/../config/ProjectConfiguration.class.php');
$configuration = ProjectConfiguration::getApplicationConfiguration('frontend', 'prod', false);
sfContext::createInstance($configuration)->dispatch();

/*
$sites = Doctrine_Query::create()
->select('s.*')
->from('Site s')
->whereIn('id', array(110,116,285,140,311,106,123,86,96,108,111,304,113,75,283,103,67,125,295,120,112,117,119))
->orderBy('s.id')
->execute();
*/

$sites = Doctrine_Query::create()
  ->select('s.*')
  ->from('Site s')
  ->orderBy('s.id')
  ->limit(0,100)
  ->execute();

$domains = array('cmais.com.br','tvcultura.cmais.com.br','culturafm.cmais.com.br','univesptv.cmais.com.br','multicultura.cmais.com.br','tvratimbum.cmais.com.br','nucleodevideosp.cmais.com.br');

foreach($sites as $s){
	$url = str_replace("http://","",$s->retriveUrl());
	$url2 = str_replace(".com.br",".com.br/index.php",$url);
	$d = explode("/",$url);
	if(in_array($d[0], $domains)){
		//echo "\n".exec('touch /var/frontend/web/cache/'.$url.'/index.html');
		if(!is_dir('/var/frontend/web/cache/'.$url)){
			//mkdir('/var/frontend/web/cache/'.$url);
			exec('mkdir -p /var/frontend/web/cache/'.$url);
		}
		echo "\n".exec('wget -t 1 -x -O /var/frontend/web/cache/'.$url.'/index.html '.$url2);
		foreach($s->Sections as $sec){
			$url = str_replace("http://","",$sec->retriveUrl());
			$d = explode("/",$url);
			if(in_array($d[0], $domains)){
				$url2 = str_replace(".com.br",".com.br/index.php",$url);
				$file = @end(explode("/",$url));
				$dir = explode($file,$url);
				echo "\n\nmkdir -p /var/frontend/web/cache/".$dir[0]."\n\n";
				if((!is_dir('/var/frontend/web/cache/'.$dir[0]))&&(!is_file('/var/frontend/web/cache/'.$dir[0]))){
					//mkdir('/var/frontend/web/cache/'.$url);
					echo 'mkdir -p /var/frontend/web/cache/'.$dir[0];
					exec('mkdir -p /var/frontend/web/cache/'.$dir[0]);
				}
				//echo "\n".exec('touch /var/frontend/web/cache/'.$url.'/index.html');
				echo "\n".exec('wget -t 1 -x -O /var/frontend/web/cache/'.$dir[0].$file.' '.$url2);
			}
		}
	}else{
		echo "\n rejected: ".$d[0];
	}
}

