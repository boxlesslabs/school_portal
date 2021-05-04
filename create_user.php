<?php require 'helpers/session.php' ?>
<!DOCTYPE html>
<html>
	<?php require 'partials/header.php';?>

	<body class="loggedin">
        <?php require 'partials/nav.php';?>

		<div class="content">
			<h2>Create User</h2>

            <div class="con-body form-area">
                <form action="repo/users_repo.php" method="post">
                    <input type="text" name="first_name" placeholder="Firstname" id="first_name" required>
                    <input type="text" name="last_name" placeholder="Lastname" id="last_name" required>
                    <input type="text" name="email" placeholder="Email" id="email" required>
                    <input type="password" name="password" placeholder="Password" id="password" required>
                    <select name="role" id="role">
                        <option value="admin">Admin</option>
                        <option value="user">User</option>
                    </select>
                    <input type="submit" value="Save">
                </form>
            </div>
		</div>
	</body>
</html>