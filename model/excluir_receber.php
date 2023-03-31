<?php
    session_start();
    require('Config.php');

    $id = FILTER_INPUT(INPUT_GET,'id');

    if($id){
        $sql = $conn->prepare("DELETE FROM  titulos_receber
                                WHERE id=:id");
        $sql->bindValue(':id',$id);
        $sql->execute();

        header('Location: ../paginas/consulta_receber.php');
    }

?>