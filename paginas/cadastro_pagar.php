<?php 
    require('../model/config.php');

    $sql = $conn->prepare("SELECT id, nome FROM fornecedor");
    $sql->execute();
    $cadastrofornecedor = $sql->fetchAll(PDO::FETCH_ASSOC);
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style.css">

    <title>Formulário cadastro</title>
</head>
<body>
<div class="containerReceber"> 
        <div class="containerMenu">
            <a class="btn" href="./main.php">Início</a>
            <a class="btn" href="">Clientes</a>
            <a class="btn" href="./fornecedor.php">Fornecedores</a>
            <a class="btn" href="./consulta_receber.php">Receber</a>
            <a class="btn" href="./cadastro_pagar.php">Pagar</a>

        </div> 
        <div class="ContainerConsulta">
            <h1>Cadastrar novo títulos a pagar</h1><br>
            <form method="POST" action="../model/add_pagar.php">
                Nome: <br>
                <select class="combobox" name="fornecedor">
                    <?php foreach($cadastrofornecedor as $fornecedor): ?>
                        <option name="idFornecedor" value="<?=$fornecedor['id']?>"><?=$fornecedor['nome']?></option>
                    <?php endforeach;?>
                </select><br>
                Valor: <br>
                <input type="text" name="valor" value=""/><br><br>
                Pago: <br>
                <input type="text" name="pago" value=""/><br><br>
                Saldo: <br>
                <input type="text" name="saldo" value=""/><br><br>
                <input type="submit" name="update" value="Cadastrar conta">
            </form>
        </div>
    </div>  
</body>
</html>