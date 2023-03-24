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
            <a class="btn" href="">Pagar</a>

        </div> 
        <div class="ContainerConsulta">
            <h1>Cadastrar novo títulos a receber</h1><br>
            <form method="POST" action="receber.php">
                    <input type="hidden" name="id" value=""/>
                    
                    Nome: <br>
                    <input type="text" name="nome" readonly value=""/><br><br>
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