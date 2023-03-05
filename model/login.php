<?php
    session_start();
    require('Config.php');
    

    $email = FILTER_INPUT(INPUT_POST,'email');
    $password = FILTER_INPUT(INPUT_POST,'password');

    if($email && $password){
        $sql = $conn->prepare("SELECT id, email, senha FROM usuario WHERE LOWER(email)= :email");
        $sql->bindValue(':email',strtolower($email));
        $sql->execute();

         if($sql->rowCount() > 0 ){
            $user = $sql->fetch( PDO::FETCH_ASSOC );

            if($user['senha'] === $password){
                $_SESSION['token'] = md5($user['email']);
                $_SESSION['userName'] = $user['email'];
                header('Location: ../paginas/main.php');
            } else {
                 header('Location: ../');
             }
         } 
    }

    



?>