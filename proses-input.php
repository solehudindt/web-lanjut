<?php
    include "koneksi.php";

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $lastupdate = $_POST['lastupdate'];

    $sql = "INSERT INTO actor(first_name, last_name, last_update) VALUES(:first_name, :last_name, now() )";    

    $query = $conn->prepare($sql);

    $query->bindParam(':first_name',$firstname);
    $query->bindParam(':last_name',$lastname);
    
    $query->execute();

    header("location:input.php");

?>
