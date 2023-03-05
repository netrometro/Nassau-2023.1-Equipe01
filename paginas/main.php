<?php
    session_start();

    if( isset($_SESSION['token'])){
        $token = $_SESSION['token'];
        if(md5($_SESSION['userName']) <> $token){
            header('Location: ../');
        }
    } else {
        header('Location: ../');
    }

echo "main";

?>