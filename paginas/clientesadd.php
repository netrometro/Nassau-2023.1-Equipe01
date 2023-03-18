<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar cliente</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
  
  <div id="container-principal">
    
    <img src="../assets/img/Logo.png" alt="" id="logo">

    <form id="register-form" action="../model/clientesadd.php" method="POST">
      
        <div class="linha-completa">
            <label for="nome">Nome do cliente</label>
            <input type="text" name="nome" placeholder="Insira nome do cliente">
        </div>

        <div class="linha-completa">
            <label for="e-mail">Endereco</label>
            <input type="text" name="endereco" placeholder="Insira endereço do cliente">
        </div>
 
        <div class="linha-completa">
          <label for="endereco">Telefone</label>
          <input type="text" name="telefone" placeholder="Insira telefone do cliente">
        </div>


        <!--
        <div class="meia-linha">
          <label for="passwordconfirm">Confirmar senha</label>
          <input type="password" name="passwordconfirm" placeholder="Insira a senha">
        </div>
        -->
        <div class="linha-completa">
          <input id="btn-submit" type="submit" value="Adicionar">
        </div>
      
    </form>
  </div>
</body>
</html>