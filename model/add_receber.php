<?php
    session_start();
    require('Config.php');

    $idCliente  = $_POST['cliente'];
    $valor      = $_POST['valor'];
    $pago       = $_POST['pago'];
    $saldo      = $_POST['saldo'];
    $dataAtual  = date("Y-m-d");


    echo '<pre>';
    var_dump($_POST);

    if($idCliente){
        try {
            $sql = $conn->prepare("INSERT INTO titulos_receber
            (
                id_cliente,
                valor,
                pago,
                saldo,
                data_emissao

            )
            VALUES (
                :id_cliente,
                :valor,
                :pago,
                :saldo,
                :data_emissao)");

            $sql->bindValue(':id_cliente',$idCliente);
            $sql->bindValue(':valor',$valor);
            $sql->bindValue(':pago',$pago);
            $sql->bindValue(':saldo',$saldo);
            $sql->bindValue(':data_emissao',$dataAtual);
            $sql->execute();

            header('Location: ../paginas/consulta_receber.php');

        } catch (Exception $e) {
            echo "Mensagem de erro: " . $e->getMessage();
            echo "Código de erro: " . $e->getCode();
            echo "Arquivo onde ocorreu o erro: " . $e->getFile();
            echo "Linha onde ocorreu o erro: " . $e->getLine();
        }
    };
?>