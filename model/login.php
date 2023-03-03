<?php

    require('Config.php');

    $email = FILTER_INPUT(INPUT_POST,'email');
    $password = FILTER_INPUT(INPUT_POST,'password');

    if($email && $password){
        //realiza busca pelo email no banco
        $sql = $conn->prepare("SELECT id,email,senha FROM usuario WHERE email= :email AND senha= :senha");
        $sql->bindValue(':email',$email);
        $sql->bindValue(':senha',$password);
        $sql->execute();

         if($sql->rowCount() === 0 ){
             header('Location: ../paginas/main.php');
         } else {
             header('Location: login.php');
         }
    }



?>