<?php 
    require('../../model/config.php');

    $id = FILTER_INPUT(INPUT_GET,'id');

    if($id){

        $sql = $conn->prepare("SELECT * FROM fornecedor WHERE id=:id");
        $sql->bindValue(':id',$id);
        $sql->execute();

        if($sql->rowCount()>0){
            $cadastro = $sql->fetch(PDO::FETCH_ASSOC);
        } 
    }
    
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Fornecedor</title>
    <link rel="icon" type="image/x-icon" href="../../assets/img/favicon.ico">
    <link rel="stylesheet" href="../../assets/css/Fornecedor/fornecedor_cadastro.css">

</head>
<body>

    <a href="fornecedor.php">
        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="30" fill="white" class="bi bi-arrow-left" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
        </svg>
    </a>

    <section class="container">

        <div id="formulario">
            <h1 class = "titulo-formulario">Editar Fornecedor</h1>
            <form id="formulario" action="../../model/Fornecedor/fornecedor_editar.php" method="POST" >
            
                <input type="hidden" name="id" value="<?=$cadastro['id']?>"/>
                

                <div class="input-container">
                    <input type="text" id="nome" name="nome" class="text-input" value=<?=$cadastro['nome']?> placeholder="Nome" autocomplete="off" required/>
                    <label for="nome" class="label">Nome</label>
                </div>

                <br>

                <div class="input-container">
                    <input type="text" id="cpf" name="cpf" class="text-input" value=<?=$cadastro['cpf']?> placeholder="CPF" autocomplete="off" required/>
                    <label for="cpf" class="label">CPF</label>
                </div>
                
                <br>

                <div class="input-container">
                    <input type="text" id="telefone" name="telefone" class="text-input" value=<?=$cadastro['telefone']?> placeholder="Telefone" autocomplete="off" required/>
                    <label for=telefone class="label">Telefone</label>
                </div>

                <br><br>

                <input class="btCadastrar" id="submit" type="submit" name="submit" value="Cadastrar">

                <br>
            </form>
        </div>

    </section>

</body>
</html>