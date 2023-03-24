<?php 
    require('../model/config.php');

    $id = FILTER_INPUT(INPUT_GET,'id');

    if($id){

        $sql = $conn->prepare("SELECT tr.*,
                                    c.nome
                                  FROM titulos_receber tr
                                inner join clientes c on c.id = tr.id_cliente 
                                WHERE tr.id=:id");
        $sql->bindValue(':id',$id);
        $sql->execute();

        if($sql->rowCount()>0){
            $cadastro = $sql->fetch(PDO::FETCH_ASSOC);
        } 
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style.css">

    <title>Formulário</title>
</head>
<body>
<div class="containerReceber"> 
        <div class="containerMenu">
            <a class="btn" href="./main.php">Início</a>
            <a class="btn" href="">Clientes</a>
            <a class="btn" href="./fornecedor.php">Fornecedores</a>
            <a class="btn" href="./consulta_receber.php">Receber</a>
            <a class="btn" href="">Pagar</a>

        </div> 
        <div class="ContainerConsulta">
            <h1>Editar títulos a receber</h1><br>
            <form method="POST" action="edit_receber.php">
                    <input type="hidden" name="id" value="<?=$cadastro['id']?>"/>
                    
                    Nome: <br>
                    <input type="text" name="nome" readonly value="<?=$cadastro['nome']?>"/><br><br>
                    Valor: <br>
                    <input type="text" name="valor" value="<?=$cadastro['valor']?>"/><br><br>
                    Pago: <br>
                    <input type="text" name="pago" value="<?=$cadastro['pago']?>"/><br><br>
                    Saldo: <br>
                    <input type="text" name="saldo" value="<?=$cadastro['saldo']?>"/><br><br>
                <input type="submit" name="update" value="Salvar">
            </form>
        </div>
    </div>  
</body>
</html>