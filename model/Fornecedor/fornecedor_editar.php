<?php
/*/
   require($_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR
   .  'Nassau-2023.1-Equipe01'
   . DIRECTORY_SEPARATOR
   .'model'
   . DIRECTORY_SEPARATOR
   . 'config.php');
//*/
   session_start();
   require('../config.php');
    
    $id         = $_POST['id'];
    $nome       = $_POST['nome'];
    $cpf        = $_POST['cpf'];
    $telefone   = $_POST['telefone'];

    if($id){
        $sql = $conn->prepare("UPDATE fornecedor SET nome=:nome, cpf=:cpf, telefone=:telefone WHERE id=:id");
        $sql->bindValue(':id',$id);
        $sql->bindValue(':nome',$nome);
        $sql->bindValue(':cpf',$cpf);
        $sql->bindValue(':telefone',$telefone);
        $sql->execute();

        header('Location: ../../paginas/Fornecedor/fornecedor.php');
    }

?>