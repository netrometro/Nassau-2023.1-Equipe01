<?php
    session_start();
    require('Config.php');

    $id     = $_POST['id'];
    $valor  = $_POST['valor'];
    $pago   = $_POST['pago'];
    $saldo  = $_POST['saldo'];

    var_dump($_POST);

    if($id){
        $sql = $conn->prepare("UPDATE titulos_receber 
                                SET valor=:valor,
                                    pago=:pago,
                                    saldo=:saldo
            WHERE id=:id");
        $sql->bindValue(':id',$id);
        $sql->bindValue(':valor',$valor);
        $sql->bindValue(':pago',$pago);
        $sql->bindValue(':saldo',($valor - $pago));
        $sql->execute();

        header('Location: ../paginas/consulta_receber.php');
    }

?>