<?php
/*
ini_set('display_errors', 1);
error_reporting(E_ALL);

if(isset($_REQUEST["start"])){
  //$h = isset($_REQUEST["host"])?$_REQUEST["host"]:"172.20.18.133";
  //$h = isset($_REQUEST["host"])?$_REQUEST["host"]:"200.136.27.32";
  $h = isset($_REQUEST["host"])?$_REQUEST["host"]:"ss";
  //$p = isset($_REQUEST["port"])?$_REQUEST["port"]:"443";
  //$p = isset($_REQUEST["port"])?$_REQUEST["port"]:"80";
  $p = isset($_REQUEST["port"])?$_REQUEST["port"]:"8080";
  $c = isset($_REQUEST["clients"])?$_REQUEST["clients"]:"2000";
  //$o = isset($_REQUEST["check"])?$_REQUEST["check"]:"1";
  $o = isset($_REQUEST["check"])?$_REQUEST["check"]:"";
  //$a = isset($_REQUEST["origin"])?$_REQUEST["origin"]:"dev.tvcultura.com.br";
  $a = isset($_REQUEST["origin"])?$_REQUEST["origin"]:"";
  $m = isset($_REQUEST["connections"])?$_REQUEST["connections"]:"100";
  $r = isset($_REQUEST["requests"])?$_REQUEST["requests"]:"60";
  $i = isset($_REQUEST["id"])?$_REQUEST["id"]:"10";
  
  //$cmd = "/Applications/MAMP/bin/php/php5.3.6/bin/php start.php";
  $cmd = "php start.php";
  $cmd .=  " -h ".$h." -p ".$p." -c ".$c;
  $cmd .=  " -o ".$o." -a ".$a." -m ".$m." -r ".$r." -i ".$i;
  $outputfile = "./log/".$i."-output.txt";
  $pidfile = "./log/".$i."-pid.txt";
  if(is_file($pidfile)){
    $pid = file_get_contents($pidfile);
    if($pid>0){
      exec("kill ".$pid);
      unlink($outputfile);
      unlink($pidfile);
    }
  }
  //die($cmd);
  //exec(sprintf("%s > %s 2>&1 & echo $! >> %s", $cmd, $outputfile, $pidfile));
  die(sprintf("%s > %s 2>&1 & echo $! >> %s", $cmd, $outputfile, $pidfile));
  header("Location: admin.html");
  die();
}
elseif(isset($_REQUEST["stop"])){
  $i = isset($_REQUEST["id"])?$_REQUEST["id"]:"10";
  $outputfile = "./log/".$i."-output.txt";
  $pidfile = "./log/".$i."-pid.txt";
  $pid = 0;
  if(is_file($pidfile))
    $pid = file_get_contents($pidfile);
  if($pid>0){
    exec("kill ".$pid);
    unlink($outputfile);
    unlink($pidfile);
  }
  header("Location: admin.html");
  die();
}
elseif(isset($_REQUEST["restart"])){
  $i = isset($_REQUEST["id"])?$_REQUEST["id"]:"10";
  $outputfile = "./log/".$i."-output.txt";
  $pidfile = "./log/".$i."-pid.txt";
  $pid = 0;
  if(is_file($pidfile))
    $pid = file_get_contents($pidfile);
  if($pid>0){
    exec("kill ".$pid);
    unlink($outputfile);
    unlink($pidfile);
  }
  header("Location: admin.php?start&id=".$i);
  die();
}
*/