<?php
    session_start();
    require('../model/config.php');

    $titulosPagar =  $conn->query("SELECT tp.*,
                                            f.nome
                                        FROM titulos_pagar tp
                                        inner join fornecedor f on f.id = tp.id_fornecedor ");
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
            <a class="btn" href="">Clientes</a>
            <a class="btn" href="./fornecedor.php">Fornecedores</a>
            <a class="btn" href="./consulta_receber.php">Receber</a>
            <a class="btn" href="./consulta_pagar.php">Pagar</a>

        </div> 
        <div class="ContainerConsulta">
            <h1>Consulta títulos a pagar</h1><br>
            <header>
                <a href="./cadastro_pagar.php">Novo título</a>
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
                    <?php foreach($titulosPagar as $pagar): ?>
                        <tr>
                            <td><?=$pagar['id']?></td>
                            <td><?=$pagar['nome']?></td>
                            <td><?=$pagar['valor']?></td>
                            <td><?=$pagar['pago']?></td>
                            <td><?=$pagar['saldo']?></td>
                            <td>
                                <a href="./cadastro_editar_pagar.php?id=<?=$pagar['id']?>">
                                    <img width="20" src="../assets/img/edt.png" alt="botão editar registro.">
                                </a>
                                <a  href="../model/excluir_pagar.php?id=<?=$pagar['id']?>" 
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