<?php
    session_start();
    require('../../model/config.php');

    $id = FILTER_INPUT(INPUT_GET,'id');

    if($id){
        $sql = $conn->prepare("DELETE FROM fornecedor WHERE id=:id");
        $sql->bindValue(':id',$id);
        $sql->execute();

        header('Location: ../../paginas/Fornecedor/fornecedor.php');
    }

?>