<?php
include "../include/connector.php"
if($_SESSION['loggedin'] == true){
    echo "Welcome " . $_SESSION['usename'];
} else {
    header("Location: login.php");
}
if(isset($_POST["artiest"])){
    $sql = "INSERT INTO album
    (naam, foto, tekst, prijs)
    VALUES
    (:naam, :foto, :tekst, :prijs)
    ";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':naam', $_POST['naam']);
    $stmt->bindParam(':foto', $_POST['foto']);
    $stmt->bindParam(':tekst', $_POST['tekst']);
    $stmt->bindParam(':prijs', $_POST['prijs']);
    $stmt->execute();
    header('Location: admin1.php')
}
?>
<form action="" method="post">
        naam<input type="text" name="artiest" id=""><br />
        foto<input type="text" name="artiest" id=""><br />
        tekst<input type="text" name="artiest" id=""><br />
        prijs<input type="text" name="artiest" id=""><br />
        <input type="submit" value="toevoegen">
</form>
