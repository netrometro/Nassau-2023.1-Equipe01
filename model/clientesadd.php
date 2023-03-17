<?php

    require('Config.php');

    $name = FILTER_INPUT(INPUT_POST,'nome');
    $telefone = FILTER_INPUT(INPUT_POST,'telefone');
    $endereco = FILTER_INPUT(INPUT_POST,'endereco');

   

  $sql = $conn->prepare("INSERT INTO clientes (nome,telefone,endereco) VALUES (:nome,:telefone,:endereco)");
  //$sql = "INSERT INTO clientes (nome, endereco, telefone) VALUES (':nome', ':telefone', 'endereco')";
        
        $sql->bindValue(':nome',$name);
        $sql->bindValue(':telefone',$telefone);
        $sql->bindValue(':endereco',$endereco);
        $sql->execute();
  

    echo "enviado";
  

?>