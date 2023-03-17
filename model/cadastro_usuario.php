<?php

    require('Config.php');

    $name = FILTER_INPUT(INPUT_POST,'nome');
    $email = FILTER_INPUT(INPUT_POST,'email');
    $cpf = FILTER_INPUT(INPUT_POST,'cpf');
    $telefone = FILTER_INPUT(INPUT_POST,'telefone');
    $endereco = FILTER_INPUT(INPUT_POST,'endereco');
    $password = FILTER_INPUT(INPUT_POST,'senha');

if($name &&  $email && $password){

  $sql = $conn->prepare("INSERT INTO usuario (nome,email,cpf,telefone,endereco,senha) VALUES (:nome,:email,:cpf,:telefone,:endereco,:senha)");
        
        $sql->bindValue(':nome',$name);
        $sql->bindValue(':email',$email);
        $sql->bindValue(':cpf',$cpf);
        $sql->bindValue(':telefone',$telefone);
        $sql->bindValue(':endereco',$endereco);
        $sql->bindValue(':senha',$password);

        header('Location: ../paginas/index.php');
        $sql->execute();
  
}
  

?>