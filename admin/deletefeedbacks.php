<?php 
    $id = $_GET['id'];
    $link = mysqli_connect("localhost", "root", "", "insurance");

    $sql = "DELETE FROM feedbacktable WHERE id = $id";


    if ($link->query($sql) === TRUE) {
        header('Location: adminfeedbacks.php');
        exit;
    } else {
        echo "Error deleting record: " . $link->error;
    }
?>