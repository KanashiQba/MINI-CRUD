<?php
include_once "includes/connetion.php";
$sql = "SELECT * FROM admin WHERE username = :username AND password = :password";
$stmt = $conn->prepare($sql);
$stm->bindParam(":username", $_POST['username']);
$stm->bindParam(":password", $_POST['password']);
$stm->execute();
$result = $stmt->fetchAll();

if(count($result) > 0){
    $_SESSION["username"] = $_POST['usename']
    header("location: admin.php");
} else{
    echo "ussername niet gevonden"
}
