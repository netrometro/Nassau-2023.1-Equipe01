<?php
    session_start();
    session_unset();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=,, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Login</title>
</head>
<body>
    <div class="containerLogin">
        <form method="POST" action="./model/login.php">
            <img src="./assets/img/Logo.png" alt="">
            <h3>Entre com suas informações</h3>
            <input type="email" placeholder="Digite seu email" name="email">
            <input type="password" placeholder="Digite seu senha" name="password">
            <input type="submit" value="Entrar">
        </form>
    </div>    
</body>
</html>