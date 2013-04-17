<?php
header("Content-Type: text/xml;charset=utf8");
  echo "<webservices>
    <action>
        ";
  if(isset($_GET['episodio'])){
      
    $num_episodio = $_GET['episodio'];
    
    if(!empty($_COOKIE['view'.$num_episodio]) && empty($_COOKIE['time_to_view'.$num_episodio])){
      //echo "Você já viu este episódio!";
      echo "<resultado>NAO</resultado>";
    }else{
      //echo "Veja este episódio agora!";
      setcookie('view'.$num_episodio, $num_episodio);
      setcookie('time_to_view'.$num_episodio, $num_episodio, time()+10);
      echo "<resultado>SIM</resultado>";
    }
  }else{ 
    //echo "Informe o Episodio!";
  }
  echo "
    </action>
</webservices>";
//print_r($_COOKIE);
?>