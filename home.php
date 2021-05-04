<?php require 'pages/session.php' ?>

<!DOCTYPE html>
<html>
  <?php require 'pages/header.php';?>

	<body class="loggedin">
    <?php require 'pages/nav.php';?>

		<div class="content">
			<h2>Home</h2>

			<p>Welcome back <b><?php echo htmlspecialchars($_SESSION["name"]); ?></b></p>

            <div class="panel">
                <h3>All Users</h3>
    
                <a href="create_user.php" class="btn">Create User</a>
            </div>
    
            <div class="con-body">
				<?php
					require 'db/db.php';
					$result = mysqli_query($con, "SELECT * FROM accounts ORDER BY id");
					$count = 1;

					if (mysqli_num_rows($result) > 0) {
						// output data of each row
						while($row = mysqli_fetch_array($result)) {
							echo "<table>";
								echo "<tr>";
									echo "<th>S/N</th>";
									echo "<th>Name</th>";
									echo "<th>Email</th>";
									echo "<th>Role</th>";
									echo "<th></th>";
								echo "</tr>";
							while($row = mysqli_fetch_array($result)){
								echo "<tr>";
									echo "<td>" . $count++ . "</td>";
									echo "<td>" . $row['first_name'] . $row['last_name'] . "</td>";
									echo "<td>" . $row['email'] . "</td>";
									echo "<td>" . $row['role'] . "</td>";
									echo "<td>" . "<button>edit</button> <button>del</button>" . "</td>";
								echo "</tr>";
							}
        					echo "</table>";
						}
					} else {
						echo "0 results";
					}
					
					$con->close();
				?>
            </div>
		</div>
	</body>
</html>