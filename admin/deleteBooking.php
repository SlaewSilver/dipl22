<?php 
    $id = $_GET['id'];
    $link = mysqli_connect("localhost", "root", "", "insurance");

    $sql = "DELETE FROM bookingTable WHERE bookingID = $id"; 

    if ($link->query($sql) === TRUE) {
        header('Location: admin.php');
        exit;
    } else {
        echo "Error deleting record: " . $link->error;
    }
?>