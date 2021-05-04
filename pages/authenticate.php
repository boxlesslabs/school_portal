<?php
    session_start();
    
    require '../db/db.php';
    
    // Now we check if the data from the login form was submitted, isset() will check if the data exists.
    if ( !isset($_POST['email'], $_POST['password']) ) {
        // Could not get the data that should have been sent.
        exit('Please fill both the email and password fields!');
    }

    if ($stmt = $con->prepare('SELECT id, password, first_name, role FROM accounts WHERE email = ?')) {
        $stmt->bind_param('s', $_POST['email']);
        $stmt->execute();
        // Store the result so we can check if the account exists in the database.
        $stmt->store_result();

        if ($stmt->num_rows > 0) {
            $stmt->bind_result($id, $password, $first_name, $role);
            $stmt->fetch();
            session_regenerate_id();
            $_SESSION['loggedin'] = TRUE;
            $_SESSION['name'] = $first_name;
            $_SESSION['role'] = $role;
            $_SESSION['id'] = $id;
            header('Location: ../home.php');
        } else {
            // Incorrect username
            echo 'Incorrect username and/or password!';
        }
    
    
        $stmt->close();
    }
?>