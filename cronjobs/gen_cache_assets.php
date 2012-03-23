<?php
ini_set("memory_limit", "1700M");
ini_set("max_input_time", "3600");
ini_set("max_execution_time", "3600");

require_once(dirname(__FILE__).'/../config/ProjectConfiguration.class.php');
$configuration = ProjectConfiguration::getApplicationConfiguration('frontend', 'prod', false);
sfContext::createInstance($configuration)->dispatch();

$t = date("Y-m-d H:i:s", strtotime(date('Y-m-d H:i:s'))-24*60*60*14);

# ->where('created_at > ?', $t)
# ->where('a.site_id = 110')

$assets = Doctrine_Query::create()
->select('a.*')
->from('Asset a')
->orderBy('a.id desc')
->limit(5000)
->execute();

//die(">>>".count($assets));

$domains = array('cmais.com.br','tvcultura.cmais.com.br','culturafm.cmais.com.br','univesptv.cmais.com.br','multicultura.cmais.com.br','tvratimbum.cmais.com.br','nucleodevideosp.cmais.com.br');

foreach($assets as $s){
	$url = str_replace("http://","",$s->retriveUrl());
	$d = explode("/",$url);
	if(in_array($d[0], $domains)){
		$url2 = str_replace(".com.br",".com.br:81/index.php",$s->retriveUrl());
		//echo "\n".exec('touch /var/frontend/web/cache/'.$url.'/index.html');
		if($url == $s->getSlug())
			$url = "cmais.com.br/".$s->getSlug();
		echo "\n/var/frontend/web/nginx-cache/".$url."\n\n";
		if(!is_dir('/var/frontend/web/nginx-cache/'.$url)){
			exec('mkdir -p /var/frontend/web/nginx-cache/'.$url);
			//@mkdir('/var/frontend/web/nginx-cache/'.$url);
		}
		echo "\n>>>>".exec('wget -t 1 -x -O /var/frontend/web/nginx-cache/'.$url.'/index.html '.$url2);
		//echo "\n>>>>wget -t 1 -x -O /var/frontend/web/nginx-cache/$url/index.html $url2";
		//echo "\n>>>> wget -t 1 -x -O /var/frontend/web/nginx-cache/$url/index.html $url2";
	}else{
		echo "\n rejected: ".$d[0];
	}
	
}

