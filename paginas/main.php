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
    <!-- <link rel="stylesheet" href="../assets/css/main.css"> -->
    <link rel="icon" type="image/x-icon" href="../assets/img/favicon.ico">
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>CashLock - Main</title>
</head>
<body>
    <div class="containerReceber"> 
        <div class="containerMenu">
            <a class="btn" href="../paginas/consulta_clientes.php">Clientes</a>
            <a class="btn" href="../paginas/Fornecedor/fornecedor_cadastro.php">Fornecedores</a>
            <a class="btn" href="../paginas/consulta_receber.php">Receber</a>
            <a class="btn" href="">Pagar</a>

        </div> 
        <div class="ContainerMain">
            <img src="../assets/img/Logo.png">
        </div>
    </div>  
</body>
</html>