<?php require 'helpers/session_user.php' ?>

<!DOCTYPE html>
<html>
  <?php require 'partials/header.php';?>

	<body class="loggedin">
    <?php require 'partials/nav_user.php';?>

		<div class="content">
			<h2>Home</h2>

			<p>Welcome back <b><?php echo htmlspecialchars($_SESSION["name"]); ?></b></p>

            <div class="panel">
                <h3>Courses</h3>
    
                
            </div>
    
            <div class="con-body">
            <?php
					require 'db/db.php';
					$result = mysqli_query($con, "SELECT * FROM classes INNER JOIN venues ON venues.id = classes.venue");
					$count = 1;

					if (mysqli_num_rows($result) > 0) {
						// output data of each row
						while($row = mysqli_fetch_array($result)) {
							echo "<table>";
								echo "<tr>";
									echo "<th>S/N</th>";
									echo "<th>Name</th>";
									echo "<th>Participants allowed</th>";
									echo "<th>Start Date</th>";
									echo "<th>Venue</th>";
									echo "<th></th>";
								echo "</tr>";
							while($row = mysqli_fetch_array($result)){
								echo "<tr>";
									echo "<td>" . $count++ . "</td>";
									echo "<td>" . $row['name'] . "</td>";
									echo "<td>" . $row['participants'] . "</td>";
									echo "<td>" . $row['start_date'] . "</td>";
									echo "<td>" . $row['address'] . "</td>";
									echo "<td>" . "<button>register</button>";
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