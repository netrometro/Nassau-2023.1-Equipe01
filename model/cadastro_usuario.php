<?php

    require('Config.php');

    $name = FILTER_INPUT(INPUT_POST,'nome');
    $email = FILTER_INPUT(INPUT_POST,'email');
    $cpf = FILTER_INPUT(INPUT_POST,'cpf');
    $telefone = FILTER_INPUT(INPUT_POST,'telefone');
    $endereco = FILTER_INPUT(INPUT_POST,'endereço');
    $password = FILTER_INPUT(INPUT_POST,'senha');

  /*  if(isset($_POST['submit']))
{
include_once('config.php')

$name = $_POST['name'];
$email = $_POST['email'];
$cpf = $_POST['cpf'];
$telefone = $_POST['telefone'];
$endereco = $_POST['endereco'];
$password = $_POST['password'];

$result = mysql_query($conn, "INSERT INTO (nome da tabela do BD)(nome,email,cpf,telefone,endereco,password) 
VALUES ('$name','$email','$cpf','$telefone','$endereco','$password')"); 
}
*/
?>