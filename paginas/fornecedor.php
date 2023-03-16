<?php
    session_start();
    require('../model/config.php');

    $titulosReceber =  $conn->query("SELECT * FROM fornecedor");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/fornecedor.css">
    <link rel="icon" type="image/x-icon" href="../assets/img/favicon.ico">
    <title>Consulta Fornecedores</title>
</head>
<body> 
    <div class="containerFornecedor"> 
        <div class="containerMenu">

            <a class="btn" href="">Clientes</a>
            <a class="btn" href="./fornecedor.php">Fornecedores</a>
            <a class="btn" href="./consulta_receber.php">Receber</a>
            <a class="btn" href="">Pagar</a>

        </div> 
        <div class="ContainerFornecedor">
            <header>
                <button>Novo Cadastro</button>
            </header>
            <div class="Fornecedor">
                <table width="100%">
                    <tr>
                        <th id="tdNome">NOME</th>
                        <th>CPF</th>
                        <th>TELEFONE</th>
                        <th id="tdOpcoes">OPÇÕES</th>
                    </tr>
                    <?php foreach($titulosReceber as $receber): ?>
                        <tr>
                            <td><?=$receber['nome']?></td>
                            <td><?=$receber['cpf']?></td>
                            <td><?=$receber['telefone']?></td>
                            <td>
                                <a href="../model/processa_consulta_receber.php?editar=sim&id=<?=$receber['id']?>">
                                    <img width="20" src="../assets/img/edt.png" alt="botão editar registro.">
                                </a>
                                <a  href="../model/processa_consulta_receber.php?excluir=sim&id=<?=$receber['id']?>" 
                                    onclick="return confirm('Tem certeza que deseja excluir este registro?')">
                                    <img width="20" src="../assets/img/del.png" alt="botão excluir registro.">
                                </a>    
                            </td>
                        </tr>
                    <?php endforeach;?>
                </table>
            </div>
        </div>
    </div>  
</body>
</html>