<?php
$user       = "root";
$password  = "";
$host       = "localhost";  
$database   = "db_chashlock";

$conn = new PDO("mysql:host=$host;dbname=$database", $user, $password);

//try {
  ///$conn = new PDO("mysql:host=$host;dbname=$database", $user, $password);
    
  // $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  //   echo "Conexão funcionando";
  // } catch(PDOException $e) {
  //   echo "Conexão falhou: " . $e->getMessage();
 // }

?>