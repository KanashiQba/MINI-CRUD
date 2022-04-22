<?php
include "../include/connector.php";
$sql = "SELECT * FROM admin WHERE username = :username AND password = :password";
$stmt = $conn->prepare($sql);
$stmt->bindParam(":username", $_POST['username']);
$stmt->bindParam(":password", $_POST['password']);
$stmt->execute();
$result = $stmt->fetchAll();

$username = $_POST['username'];

if(count($result) > 0){
    $_SESSION["username"] = ['usename'];

    if(isset($_SESSION["username"])){
    header("location: admin1.php");
    exit();
    }
} else{
    echo "ussername niet gevonden";
}
