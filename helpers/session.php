<?php
	// Initialize the session
	session_start();
	
	// Check if the user is logged in, if not then redirect him to login page
	if($_SESSION["loggedin"] == true && $_SESSION["role"] != 'admin' ){
		header("location: index.php");
        echo 'You do not have access to this resource';
		exit;
	}
?>