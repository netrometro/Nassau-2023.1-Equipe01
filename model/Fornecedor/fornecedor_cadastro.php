<?php

    require('../config.php');

    $name = FILTER_INPUT(INPUT_POST,'nome');
    $cpf = FILTER_INPUT(INPUT_POST,'cpf');
    $telefone = FILTER_INPUT(INPUT_POST,'telefone');

if($name && $cpf && $telefone){

  $sql = $conn->prepare("INSERT INTO fornecedor (nome,cpf,telefone) VALUES (:nome,:cpf,:telefone)");
        
    $sql->bindValue(':nome',$name);
    $sql->bindValue(':cpf',$cpf);
    $sql->bindValue(':telefone',$telefone);
    $sql->execute();

    header('location: ../../paginas/Fornecedor/fornecedor.php');
}
?>