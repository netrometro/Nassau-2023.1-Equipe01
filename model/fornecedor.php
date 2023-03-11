<?php
    session_start();
    include_once('config.php');
    
    $fornecedor_data = $conn->prepare("SELECT * FROM fornecedor");
    $fornecedor_data->execute();

    //Pega a informação que foi colocado no input de pesquisa e 
    //verifica se essa informação corresponde a alguma informação no banco de dados
    if(!empty($_GET['search'])){
        $data = $_GET['search'];
        $sql = "SELECT * FROM fornecdor WHERE id LIKE '%$data%' or nome LIKE '%$data%' or cpf LIKE '%$data%' or telefone LIKE '%$data%' ORDER BY id DESC";
    }
    else {   
        $sql = "SELECT * FROM fornecedor WHERE user = '$user' ORDER BY id DESC";
    }
    $result = $conn->query($sql);

?>