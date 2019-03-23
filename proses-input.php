<?php
    include "koneksi.php";

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $lastupdate = $_POST['lastupdate'];
    // $sql = "INSERT INTO actor(first_name, last_name, last_update) VALUES(:first_name, :last_name, :last_update)";
    $sql = "INSERT INTO actor(first_name, last_name, last_update) VALUES(:first_name, :last_name, now() )";    

    //var_dump($firstname);
    //var_dump($lastname);
    //var_dump($lastupdate);
    $query = $conn->prepare($sql);

    //$query->bindParam(':actor_id')
    $query->bindParam(':first_name',$firstname);
    $query->bindParam(':last_name',$lastname);
    //$query->bindParam(':last_update',$lastupdate);

    $query->execute();

    header("location:input.php");

?>
