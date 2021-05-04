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
				<table>
					<tr>
						<th>S/N</th>
						<th>Name</th>
						<th>Participants</th>
						<th>Start Date</th>
						<th>Venue</th>
						<th></th>
					</tr>

					<?php require 'db/db.php';?>
					<?php 
						$result = mysqli_query($con, "SELECT classes.id, classes.name AS class_name, classes.participants, classes.start_date, classes.venue, venues.address FROM classes INNER JOIN venues ON classes.venue = venues.id");
						$count = 1;
						if (mysqli_num_rows($result) > 0) {
					?>

					<?php while($row = mysqli_fetch_array($result)) { ?>
						<tr>
							<td><?php echo $count++ ?></td>
							<td><?php echo $row['class_name'] ?></td>
							<td><?php echo $row['participants'] ?></td>
							<td><?php echo $row['start_date'] ?></td>
							<td><?php echo $row['address'] ?></td>
							<td style="width: 120px;">
								<a href="#" class="l-btn l-btn-s">Edit</a>
                				<a class="l-btn l-btn-d" href="repo/classes/delete_class.php?id=<?php echo $row['id']; ?>">del</a>
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