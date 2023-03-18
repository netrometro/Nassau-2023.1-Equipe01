<?php

    require('Config.php');

    if(isset($_POST['update']))
    {
        $id = $_POST['id'];
        $name = $_POST['nome'];
        $telefone = $_POST['telefone'];
        $endereco = $_POST['endereco'];
        
        $sql = "UPDATE clientes 
        SET nome='$name',telefone='$telefone',endereco='$endereco'
        WHERE id=$id";
        $stmt = $conn->query($sql);
        $stmt->execute();
    }
    header('Location: ../model/clientes.php');

?>