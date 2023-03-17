<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Cadastro</title>
  <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
  
  <div id="container-principal">
    
    <img src="../assets/img/Logo.png" alt="" id="logo">

    <form id="register-form" action="../model/cadastro_usuario.php" method="POST">
      
        <div class="linha-completa">
            <label for="nome">Nome do usuário</label>
            <input type="text" name="nome" placeholder="Insira seu nome">
        </div>

        <div class="linha-completa">
            <label for="e-mail">E-mail</label>
            <input type="email" name="email" placeholder="Insira seu e-mail">
        </div>

        <div class="meia-linha espaçamento">
            <label for="cpf">CPF</label>
            <input type="text" name="cpf" placeholder="Insira seu CPF">
        </div>

        <div class="meia-linha">
            <label for="telefone">Telefone</label>
            <input type="tel" name="telefone" placeholder="Insira seu telefone">
        </div>

        <div class="linha-completa">
          <label for="endereco">Endereço</label>
          <input type="text" name="endereco" placeholder="Insira seu endereço">
        </div>

        <div class="meia-linha espaçamento">
          <label for="senha">Senha</label>
          <input type="password" name="senha" placeholder="Insira a senha">
        </div>

        <div class="linha-completa">
          <input id="btn-submit" type="submit" value="Cadastrar" >
        </div>
      
    </form>
  </div>
</body>
</html>