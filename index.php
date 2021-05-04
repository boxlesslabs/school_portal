<!DOCTYPE html>
<html>
	<?php require 'partials/header.php';?>

	<body>
		<div class="login-wrapper">
            <div class="login"> 
                <h2>Sign into your workspace</h2>
                <form action="repo/authenticate.php" method="post">
                    <input type="text" name="email" placeholder="Email" id="email" required>
                    <input type="password" name="password" placeholder="Password" id="password" required>
                    <input type="submit" value="Login">
                </form>
            </div>
        </div>
	</body>
</html>