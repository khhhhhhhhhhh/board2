<?php

  $serverName = "192.168.111.10";
  $database = "testDB";
  
  $uid = "sa";
  $pwd = "P@ssw0rd";

//$uid = file_get_contents(".\uid.txt");
//$pwd = file_get_contents(".\pwd.txt");
  $table = "post_board2";

try {  
      $conn = new PDO( "sqlsrv:server=$serverName;Database = $database", $uid, $pwd);   
      $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );   
   }  
  
   catch( PDOException $e ) {  
      die( "Error connecting to SQL Server" );   
   }  
 
?>