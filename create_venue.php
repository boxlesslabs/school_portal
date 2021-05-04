<?php require 'helpers/session.php' ?>
<!DOCTYPE html>
<html>
<?php require 'partials/header.php';?>

<body class="loggedin">
    <?php require 'partials/nav.php';?>

		<div class="content">
			<h2>Create a venue</h2>

            <div class="con-body form-area">
                <form action="repo/venues/venues_repo.php" method="post">
                    <input type="text" name="name" placeholder="name" id="name" required>
                    <input type="text" name="address" placeholder="address" id="address" required>

                    <input type="submit" value="Save">
                </form>
            </div>
		</div>
	</body>
</html>