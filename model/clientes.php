<?php

 require('Config.php');

 $sql = $conn->prepare("SELECT * FROM clientes");
        $sql->execute();

        if($sql->rowCount() > 0 ){
            $clientes = $sql->fetch( PDO::FETCH_ASSOC );

            print_r ($clientes);
        
        
        }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>