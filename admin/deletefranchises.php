<?php 
    $id = $_GET['id'];
    $link = mysqli_connect("localhost", "root", "", "insurance");

    $sql = "DELETE FROM franchase WHERE id = $id";

    if ($link->query($sql) === TRUE) {
        header('Location: adminfranchises.php');
        exit;
    } else {
        echo "Error deleting record: " . $link->error;
    }
?>