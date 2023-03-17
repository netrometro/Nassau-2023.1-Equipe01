<?php 
    require('config.php');

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
    <title>Formulário</title>
</head>
<body>
    <form method="POST" action="receber.php">
        <h1>Editar contas a receber</h1>

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
</body>
</html>