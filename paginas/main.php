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

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/main.css">
    <link rel="icon" type="image/x-icon" href="./assets/img/favicon.ico">
    <title>CashLock - Main</title>
</head>
<body>
    <div class="container">
        <div class="box-left">
            <a class="btn btn-main" href="">Clientes</a>
            <br>
            <a class="btn btn-main" href="./fornecedor.php">Fornecedores</a>
            <br>
            <a class="btn btn-main" href="./consulta_receber.php">Receber</a>
            <br>
            <a class="btn btn-main" href="">Pagar</a>
        </div>
        <div class="box-img">
            <img class="imagem" src="../assets/img/Logo.png">
        </div>
    </div>
</body>
</html>