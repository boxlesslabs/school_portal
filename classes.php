<?php require 'helpers/session.php' ?>
<!DOCTYPE html>
<html>
  <?php require 'partials/header.php';?>

	<body class="loggedin">
    <?php require 'partials/nav.php';?>

		<div class="content">
			<h2>Classes</h2>

            <div>
                <ul class="breadcrumbs">
                    <li><a href="home.php">home/</a></li>
                    <li>classes</li>
                </ul>
            </div>

            <div class="panel">
                <h3>All Classes</h3>
    
                <a href="create_classes.php" class="btn">Add a class</a>
            </div>
    
            <div class="con-body">
				<?php
					require 'db/db.php';
					$result = mysqli_query($con, "SELECT * FROM classes ORDER BY id");
					$count = 1;

					if (mysqli_num_rows($result) > 0) {
						// output data of each row
						while($row = mysqli_fetch_array($result)) {
							echo "<table>";
								echo "<tr>";
									echo "<th>S/N</th>";
									echo "<th>Name</th>";
									echo "<th>No of Participants</th>";
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
									echo "<td>" . $row['venue'] . "</td>";
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