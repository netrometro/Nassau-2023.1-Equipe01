<?php

    require('Config.php');

    $name = FILTER_INPUT(INPUT_POST,'name');
    $email = FILTER_INPUT(INPUT_POST,'email');
    $cpf = FILTER_INPUT(INPUT_POST,'cpf');
    $telefone = FILTER_INPUT(INPUT_POST,'telefone');
    $endereco = FILTER_INPUT(INPUT_POST,'endereço');
    $password = FILTER_INPUT(INPUT_POST,'password');

?>