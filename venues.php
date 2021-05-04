<!DOCTYPE html>
<html>
  <?php require 'pages/header.php';?>

	<body class="loggedin">
    <?php require 'pages/nav.php';?>

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

					$sql = "SELECT name, address FROM venues";
					$result = $con->query($sql);

					if ($result->num_rows > 0) {
						// output data of each row
						while($row = $result->fetch_assoc()) {
							echo "<table>";
								echo "<tr>";
									echo "<th>Name</th>";
									echo "<th>Address</th>";
									echo "<th></th>";
								echo "</tr>";
							while($row = mysqli_fetch_array($result)){
								echo "<tr>";
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