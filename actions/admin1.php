<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
include ('../include/connector.php');
// if(isset($_SESSION['usename'])) {
//     echo "Welcome" . $_SESSION['usename'];
// } else {
//     echo 'fout';
//     header("Location: login.php");
// }
$sql = "SELECT * FROM menukaart";
$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll();
?>
<?php $data = $conn->query("SELECT * FROM menukaart WHERE ID=".$_GET['p'])->fetch();
 { ?><br>
<tr class="table1">
<td class="row1"><?php echo $data["naam"]; ?> </td> <br>
<td class="row2"><?php echo $data["foto"]; ?> </td> <br>
<td class="row3"><?php echo $data["tekst"]; ?> </td> <br>
<td class="row4"><?php echo $data["prijs"]; ?> </td> <br>
</tr>
<a href="editBTN.php?id=<?php echo $data["ID"]; ?>">edit</a>
<a href="delete.php?id=<?php echo $data["ID"]; ?>">delete</a> <br>
<?php
}
?>
</body>
</html>

