<?php
    session_start();
    
    require '../../db/db.php';

    if ( !isset($_GET['id']) ) {
        // Could not get the data that should have been sent.
        exit('Kindly pass in a valid id!');
    }

    $class_id = $_GET['id'];
    
    // sql to delete a record
    $sql = "DELETE FROM classes WHERE id='$class_id'";

    if (mysqli_query($con, $sql)) {
        header('Location: ../../classes.php');
    } else {
        echo "Error deleting record: " . mysqli_error($con);
    }

    mysqli_close($con);
?>