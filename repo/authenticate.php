<?php
    session_start();
    
    require '../db/db.php';
    
    // Now we check if the data from the login form was submitted, isset() will check if the data exists.
    if ( !isset($_POST['email'], $_POST['password']) ) {
        // Could not get the data that should have been sent.
        exit('Please fill both the email and password fields!');
    }

    $username = trim($_POST['email']);
    $password =trim( $_POST['password']);

    $sql = "SELECT id, first_name, role FROM accounts WHERE email='$username' AND password = '$password'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);
    if($count == 1) {
        session_regenerate_id();
        $_SESSION['loggedin'] = TRUE;
        $_SESSION['name'] = $row['first_name'];
        $_SESSION['role'] = $row['role'];
        $_SESSION['id'] = $row['id'];
        
        if ($row['role'] == 'admin') {
            header('Location: ../home.php');
        }
        
        if ($row['role'] == 'user') {
            header('Location: ../home_user.php');
        }
    }else {
        $error = "Your Login Name or Password is invalid";
    }
?>