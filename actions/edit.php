<?php
include "../include/connector.php";
$sql = "SELECT * FROM menukaart where id = ?";
$stmt = $conn->prepare($sql);
$stmt->execute([$_GET['id']]);
$result = $stmt->fetch();
if(isset($_POST["submit"])){
    $sql = "UPDATE menukaart SET
                 ID = :ID,
                 naam = :naam, 
                 tekst = :tekst,
                 foto = :foto,
              WHERE prijs = :prijs, 
              ";
      $stmt = $conn->prepare($sql);
      $stmt->bindParam(':ID', $_POST['ID']);
      $stmt->bindParam(':naam', $_POST['naam']);
      $stmt->bindParam(':tekst', $_POST['tekst']);
      $stmt->bindParam(':foto', $_POST['foto']);
      $stmt->bindParam(':prijs', $_POST['prijs']);
      $stmt->execute();
      header("Location: login.php");
  }
?>
<form action="" method="post">
        naam<input type="text" name="naam" id="" value="<?php echo $result["naam"] ?>"><br />
        tekst<input type="text" name="tekst" id="" value="<?php echo $result["tekst"] ?>"><br />
        foto<input type="foto" name="foto" id="" value="<?php echo $result["foto"] ?>"><br />
        prijs<input type="text" name="prijs" id="" value="<?php echo $result["prijs"] ?>"><br />
        <input type="submit" name="submit" value="toevoegen">
</form>