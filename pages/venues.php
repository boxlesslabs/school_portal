<?php
    session_start();
    require '../db/db.php';
    
    if ( !isset($_POST['name'], $_POST['address']) ) {
        // Could not get the data that should have been sent.
        exit('Please fill both the name and address of the venue!');
    }

    $param_name = trim($_POST["name"]);
    $param_address = trim($_POST["address"]);

    // Processing form data when form is submitted
    if($_SERVER["REQUEST_METHOD"] == "POST"){
    
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE email = ?";
            
        // Check input errors before inserting in database
        // Prepare an insert statement
        $sql = "INSERT INTO venues (name, address) VALUES (?, ?)";  
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ss", $param_name, $param_address);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header("location: index.php");
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
        
        // Close connection
        mysqli_close($link);
    }
?>