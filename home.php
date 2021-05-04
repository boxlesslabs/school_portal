<?php require 'helpers/session.php' ?>

<!DOCTYPE html>
<html>
  <?php require 'partials/header.php';?>

	<body class="loggedin">
    <?php require 'partials/nav.php';?>

		<div class="content">
			<h2>Home</h2>

			<p>Welcome back <b><?php echo htmlspecialchars($_SESSION["name"]); ?></b></p>

            <div class="panel">
                <h3>All Users</h3>
    
                <a href="create_user.php" class="btn">Create User</a>
            </div>
    
            <div class="con-body">
				<table>
					<tr>
						<th>S/N</th>
						<th>Name</th>
						<th>Email</th>
						<th>Role</th>
						<th></th>
					</tr>

					<?php require 'db/db.php';?>
					<?php 
						$result = mysqli_query($con, "SELECT * FROM accounts ORDER BY id");
						$count = 1;
						if (mysqli_num_rows($result) > 0) {
					?>

					<?php while($row = mysqli_fetch_array($result)) { ?>
						<tr>
							<td><?php echo $count++ ?></td>
							<td><?php echo $row['first_name'] . " " . $row['last_name'] ?></td>
							<td><?php echo $row['email'] ?></td>
							<td><?php echo $row['role'] ?></td>
							<td>
								<a href="#" class="l-btn l-btn-s">Edit</a>
                				<a class="l-btn l-btn-d" href="repo/users/delete_user.php?id=<?php echo $row['id']; ?>">del</a>
							</td>
						</tr>
					<?php } ?>

					<?php } else { ?>
					<?php echo "0 results"; } ?>

				</table>
            </div>
		</div>
	</body>
</html>