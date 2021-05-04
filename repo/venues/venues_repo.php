<?php
    session_start();
    require '../../db/db.php';
    
    if ( !isset($_POST['name'], $_POST['address']) ) {
        // Could not get the data that should have been sent.
        exit('Please fill both the name and address of the venue!');
    }

    $param_name = trim($_POST["name"]);
    $param_address = trim($_POST["address"]);

    $sql = "INSERT INTO venues ". "(name, address) ". "VALUES('$param_name','$param_address')";

    if (mysqli_query($con, $sql)) {
        header('Location: ../../venues.php');
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($con);
?>