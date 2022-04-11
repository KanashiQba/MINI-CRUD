<?php

include('../include/connector.php');

$stm = $pdo->prepare("SELECT * FROM menukaart");
$stm = $pdo->prepare("INSERT INTO menukaart VALUES" ('test'));
$stm = $pdo->prepare("DELETE FROM menukaart WHERE id=1");
$stm = $pdo->prepare("UPDATE menukaart SET titel=jakub" where id=1);

$stmt->execute();
$data = $stmt->setchAll();




?>