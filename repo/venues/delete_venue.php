<?php
    session_start();
    
    require '../../db/db.php';

    if ( !isset($_GET['id']) ) {
        // Could not get the data that should have been sent.
        exit('Kindly pass in a valid id!');
    }

    $venue_id = $_GET['id'];
    
    // sql to delete a record
    $sql = "DELETE FROM venues WHERE id='$venue_id'";

    if (mysqli_query($con, $sql)) {
        header('Location: ../../venues.php');
    } else {
        echo "Error deleting record: " . mysqli_error($con);
    }

    mysqli_close($con);
?>