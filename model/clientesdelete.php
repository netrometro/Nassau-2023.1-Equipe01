<?php
require('../model/config.php');

try {
 
  // sql to delete a record
  $sql = "DELETE FROM clientes WHERE id=:id";

  // use exec() because no results are returned
  $conn->exec($sql);
  echo "Record deleted successfully";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

header('Location: ../model/clientes.php');

$conn = null;
?>