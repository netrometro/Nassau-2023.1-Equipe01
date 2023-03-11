<?php

 require('Config.php');
try {
 $stmt = $conn->prepare("SELECT * FROM clientes");
$stmt->execute();

        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
  //foreach(new RecursiveArrayIterator($stmt->fetchAll()) as $k=>$v) {
    //print_r ($v);
  //}
} catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
}
$conn = null;


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <table border="1">
        <tr>
            <th>nome</th>
            <th>endereço</th>
            <th>telefone</th>
        </tr>
        <?php
        foreach(new RecursiveArrayIterator($stmt->fetchAll()) as $k=>$v){
            echo "<tr>";
            echo "<td>".$v["nome"]."</td>";
            echo "<td>".$v["endereco"]."</td>";
            echo "<td>".$v["telefone"]."</td>";
        }
        ?>
    </table>
</body>
</html>