<?php
    session_start();
    
    require '../../db/db.php';

    if ( !isset($_GET['id']) ) {
        // Could not get the data that should have been sent.
        exit('Kindly pass in a valid id!');
    }

    $user_id = $_GET['id'];
    
    // sql to delete a record
    $sql = "DELETE FROM accounts WHERE id='$user_id'";

    if (mysqli_query($con, $sql)) {
        header('Location: ../../home.php');
    } else {
        echo "Error deleting record: " . mysqli_error($con);
    }

    mysqli_close($con);
?>