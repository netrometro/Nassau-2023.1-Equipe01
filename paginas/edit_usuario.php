
<?php 
    require('../model/config.php');

    $id = FILTER_INPUT(INPUT_GET,'id');

    if($id){

      $sql = $conn->prepare("SELECT * FROM clientes WHERE id=:id");
      $sql->bindValue(':id',$id);
      $sql->execute();

        if($sql->rowCount()>0){
            $edit = $sql->fetch(PDO::FETCH_ASSOC);
        } else {
          header('Location: ../model/clientes.php');
            exit;
        }

    } else {
      header('Location: ../model/clientes.php');
        exit;
    }
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Editar registro</title>
  
</head>
<body>
  
  <div id="container-principal">
    
    <!-- <img src="../assets/img/Logo.png" alt="" id="logo"> -->

    <form id="register-form" action="../model/edit_usuario.php" method="POST">
      
    <input type="hidden" name="id" value=<?=$edit['id']?>>

        <div class="linha-completa">
            <label for="nome">Nome do usuário</label>
            <input type="text" name="nome" placeholder="Insira seu nome" value="<?=$edit['nome']?>">
        </div>
        <br>
      
        <div class="meia-linha">
            <label for="telefone">Telefone</label>
            <input type="tel" name="telefone" placeholder="Insira seu telefone" value="<?=$edit['telefone']?>">
        </div>
        <br>
        <div class="linha-completa">
          <label for="endereco">Endereço</label>
          <input type="text" name="endereco" placeholder="Insira seu endereço" value="<?=$edit['endereco']?>">
        </div>
        <br>
  
        <br>
        <div class="linha-completa">
          <input id="btn-submit" type="submit" value="Editar" name="update">
        </div>
      
    </form>
  </div>
</body>
</html>