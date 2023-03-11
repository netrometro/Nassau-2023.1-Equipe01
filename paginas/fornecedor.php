<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/fornecedor.css">
    <link rel="icon" type="image/x-icon" href="../assets/img/favicon.ico">
    <title>CashLock - Fornecedor</title>
</head>
<body>
    <div class="container">
        <div class="box-left">
            <a class="btn btn-main" href="">Clientes</a>
            <br>
            <a class="btn btn-main" href="./fornecedor.php">Fornecedores</a>
            <br>
            <a class="btn btn-main" href="./consulta_receber.php">Receber</a>
            <br>
            <a class="btn btn-main" href="">Pagar</a>
        </div>

        <div class="box-table">
                
            <div style="display:flex;justify-content: space-between;margin-bottom: 20px;">
                <div class="cadastrar">
                    <a  href="" id="btnCadastro">
                        <svg style="margin-right: 10px;"xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-square" viewBox="0 0 16 16">
                            <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                            <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                        </svg>
                        Cadastrar
                    </a>
                </div>
                
                <div class= "box-search">
                    <input type="text" id="pesquisar" placeholder="Pesquisar">
                    <a class="icon" onclick="searchData()">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                        </svg>
                    </a>
                </div>
            </div>

            <div class="m-5">
                <table class="table text-white table-bg">
                    <thead>
                        <tr>
                            <th scope="col">Nome</th>
                            <th scope="col">CPF</th>
                            <th scope="col">Telefone</th>
                            <th scope="col">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            include('../model/fornecedor.php');
                            foreach ($fornecedor_data as $fornecedor) {

                                echo "<tr>";
                                echo "<td>".$fornecedor['nome']."</td>";
                                echo "<td>".$fornecedor['cpf']."</td>";
                                echo "<td>".$fornecedor['telefone']."</td>";
                                echo "<td>
                                        <a class='btn btn-sm btn-primary' href='editarFornecedor.php?id=$fornecedor[id]' title='Editar'>
                                            <svg xmlns='http://www.w3.org/2000/svg' width='14' height='14' fill='currentColor' class='bi bi-pencil' viewBox='0 0 16 16'>
                                                <path d='M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z'/>
                                            </svg>
                                        </a> 
                                        <a class='btn btn-sm btn-primary' href='../php/excluirFornecedor.php?id=$fornecedor[id]' title='Deletar'>
                                            <svg xmlns='http://www.w3.org/2000/svg' width='14' height='14' fill='currentColor' class='bi bi-trash-fill' viewBox='0 0 16 16'>
                                                <path d='M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z'/>
                                            </svg>
                                        </a>
                                    </td>";
                                echo "</tr>";
                            }
                        ?>
                    </tbody>
                </table>
            </div>

            <script src="../assets/js/Pesquisar.js"></script>

        </div>
    </div>
</body>
</html>