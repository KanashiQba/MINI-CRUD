<?php
include 'include/conection.php';
if($_SESSION['loggenin'] == true){
    echo "Welcome" . $_SESSION['username'];
} else {
    header("Location: adminlogin.php");
}
$sql = "SELECT * FROM album":
$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll();
?>

