<?php
    session_start();
    require '../db/db.php';
    
    if (!isset($_POST['name'], $_POST['participants'], $_POST['start_date'], $_POST['venue']) ) {
        // Could not get the data that should have been sent.
        exit('Please fill all the necessary details!');
    }

    $param_name = trim($_POST["name"]);
    $param_participants = trim($_POST["participants"]);
    $param_start_date = trim($_POST["start_date"]);
    $param_venue = trim($_POST["venue"]);

    $sql = "INSERT INTO classes ". "(name, participants, start_date, venue) ". "VALUES('$param_name','$param_participants','$param_start_date','$param_venue')";

    if (mysqli_query($con, $sql)) {
        header('Location: ../classes.php');
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($con);
?>