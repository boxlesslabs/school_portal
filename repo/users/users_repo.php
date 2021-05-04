<?php
    session_start();
    require '../../db/db.php';
    
    if ( !isset($_POST['first_name'], $_POST['last_name'], $_POST['email'], $_POST['password'], $_POST['role']) ) {
        // Could not get the data that should have been sent.
        exit('Please fill all the necessary details!');
    }

    $param_first_name = trim($_POST["first_name"]);
    $param_last_name = trim($_POST["last_name"]);
    $param_email = trim($_POST["email"]);
    $param_password = trim($_POST["password"]);
    $param_role = trim($_POST["role"]);

    $sql = "INSERT INTO accounts ". "(first_name, last_name, email, password, role) ". "VALUES('$param_first_name','$param_last_name','$param_email','$param_password', '$param_role')";

    if (mysqli_query($con, $sql)) {
        header('Location: ../../home.php');
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($con);
?>