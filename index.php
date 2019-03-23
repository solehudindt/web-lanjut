<!DOCTYPE html>
<html>
<head>
    <title>dsdf</title>
</head>
<body>
<table border="solid">

<?php
    require 'koneksi.php';

    $count = $_GET['per'];
    $offset = ($_GET['p'] - 1) * $count;

    $sql = "SELECT * FROM film limit 25";
    $stmt = $conn->prepare($sql);

    $stmt->bindParam(':offset', intval($offset), PDO::PARAM_INT);
    $stmt->bindParam(':count', intval($count), PDO::PARAM_INT);
    $stmt->execute();
    $data = $stmt->fetchAll();

    // while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
    foreach ($data as $film) {
?>
        <tr>
        <td><?= $film["film_id"]?></td>
        <td><?= $film["title"]?></td>
        </tr>

<?php
    }
?>

</body>
</html>
