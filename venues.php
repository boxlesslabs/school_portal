<?php require 'helpers/session.php' ?>
<!DOCTYPE html>
<html>
  <?php require 'partials/header.php';?>

	<body class="loggedin">
    <?php require 'partials/nav.php';?>

		<div class="content">
			<h2>Venues</h2>

            <div>
                <ul class="breadcrumbs">
                    <li><a href="home.php">home/</a></li>
                    <li>venues</li>
                </ul>
            </div>

            <div class="panel">
                <h3>All Venues</h3>
    
                <a href="create_venue.php" class="btn">Create a venue</a>
            </div>
    
            <div class="con-body">
				<?php
					require 'db/db.php';

					$sql = "SELECT * FROM venues ORDER BY id";
					$result = mysqli_query($con, $sql);
					$count = 1;

					if (mysqli_num_rows($result) > 0) {
						// output data of each row
						while($row = mysqli_fetch_assoc($result)) {
							echo "<table>";
								echo "<tr>";
									echo "<th>S/N</th>";
									echo "<th>Name</th>";
									echo "<th>Address</th>";
									echo "<th></th>";
								echo "</tr>";
							while($row = mysqli_fetch_array($result)){
								echo "<tr>";
									echo "<td>" . $count++ . "</td>";
									echo "<td>" . $row['name'] . "</td>";
									echo "<td>" . $row['address'] . "</td>";
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