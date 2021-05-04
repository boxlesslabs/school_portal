<!DOCTYPE html>
<html>
	<?php require 'pages/header.php';?>

	<body class="loggedin">
        <?php require 'pages/nav.php';?>

		<div class="content">
			<h2>Create User</h2>

            <div class="con-body form-area">
                <form method="post">
                    <input type="text" name="firstname" placeholder="Firstname" id="firstname" required>
                    <input type="text" name="lastname" placeholder="Lastname" id="lastname" required>
                    <input type="text" name="email" placeholder="Email" id="email" required>
                    <input type="password" name="password" placeholder="Password" id="password" required>
                    <input type="submit" value="Save">
                </form>
            </div>
		</div>
	</body>
</html>