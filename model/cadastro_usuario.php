<?php

  require('Config.php');

    $email = FILTER_INPUT(INPUT_POST,'email');
    $password = FILTER_INPUT(INPUT_POST,'senha');

if($email && $password){

  $sql = $conn->prepare("INSERT INTO usuarios (email,senha) VALUES (:email,:senha)");
        
        $sql->bindValue(':email',$email);
        $sql->bindValue(':senha',$password);

        $sql->execute(); 
}
header('Location: ../index.php');

?>