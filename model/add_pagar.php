<?php
    session_start();
    require('Config.php');

    $idFornecedor  = $_POST['fornecedor'];
    $valor      = $_POST['valor'];
    $pago       = $_POST['pago'];
    $saldo      = $_POST['saldo'];
    $dataAtual  = date("Y-m-d");


    if($idFornecedor){
        try {
            $sql = $conn->prepare("INSERT INTO titulos_pagar
            (
                id_fornecedor,
                valor,
                pago,
                saldo,
                data_emissao

            )
            VALUES (
                :id_fornecedor,
                :valor,
                :pago,
                :saldo,
                :data_emissao)");

            $sql->bindValue(':id_fornecedor',$idFornecedor);
            $sql->bindValue(':valor',$valor);
            $sql->bindValue(':pago',$pago);
            $sql->bindValue(':saldo',$saldo);
            $sql->bindValue(':data_emissao',$dataAtual);
            $sql->execute();

            header('Location: ../paginas/consulta_pagar.php');

        } catch (Exception $e) {
            echo "Mensagem de erro: " . $e->getMessage();
            echo "Código de erro: " . $e->getCode();
            echo "Arquivo onde ocorreu o erro: " . $e->getFile();
            echo "Linha onde ocorreu o erro: " . $e->getLine();
        }
    };
?>