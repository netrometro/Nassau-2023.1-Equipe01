<?php
    session_start();
    require('../model/config.php');

    $titulosReceber =  $conn->query("SELECT tr.*,
                                            c.nome
                                        FROM titulos_receber tr
                                        inner join clientes c on c.id = tr.id_cliente ");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>Consulta títulos a receber</title>
</head>
<body> 
    <div class="containerReceber"> 
        <div class="containerMenu">
            <a class="btn" href="./main.php">Início</a>
            <a class="btn" href="./consulta_clientes.php">Clientes</a>
            <a class="btn" href="./Fornecedor/fornecedor.php">Fornecedores</a>
            <a class="btn" href="./consulta_pagar.php">Pagar</a>

        </div> 
        <div class="ContainerConsulta">
            <h1>Consulta títulos a receber</h1><br>
            <header>
                <a href="./cadastro_receber.php">Novo título</a>
            </header>
            <div class="consulta">
                <table border="1" width="100%">
                    <tr>
                        <th id="tdId">ID</th>
                        <th>NOME</th>
                        <th>VALOR</th>
                        <th>PAGO</th>
                        <th>SALDO</th>
                        <th id="tdOpcoes">OPÇÕES</th>
                    </tr>
                    <?php foreach($titulosReceber as $receber): ?>
                        <tr>
                            <td><?=$receber['id']?></td>
                            <td><?=$receber['nome']?></td>
                            <td><?=$receber['valor']?></td>
                            <td><?=$receber['pago']?></td>
                            <td><?=$receber['saldo']?></td>
                            <td>
                                <a href="./cadastro_editar_receber.php?id=<?=$receber['id']?>">
                                    <img width="20" src="../assets/img/edt.png" alt="botão editar registro.">
                                </a>
                                <a  href="../model/excluir_receber.php?id=<?=$receber['id']?>" 
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