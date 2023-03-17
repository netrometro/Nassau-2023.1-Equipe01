<?php 
    require('config.php');

    $id = FILTER_INPUT(INPUT_GET,'id');

    if($id){

        $sql = $PDO->prepare("SELECT * FROM CLIENTE WHERE id=:id");
        $sql->bindValue(':id',$id);
        $sql->execute();

        if($sql->rowCount()>0){
            $cadastro = $sql->fetch(PDO::FETCH_ASSOC);
        } else {
            header('Location: index.php');
            exit;
        }

    } else {
        header('Location: index.php');
        exit;
    }
    
?>

<form method="POST" action="processar.php">
    <h1>Editar Cliente</h1>

        <input type="hidden" name="id" value="<?=$cadastro['id']?>"/>
        
        Nome: <br>
        <input type="text" name="nome" value="<?=$cadastro['nome']?>"/>
    </label> <br><br>

    <input type="submit" name="update" value="Salvar">
</form>