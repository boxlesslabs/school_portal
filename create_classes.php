<?php require 'helpers/session.php' ?>
<!DOCTYPE html>
<html>
    <?php require 'partials/header.php';?>

	<body class="loggedin">
        <?php require 'partials/nav.php';?>

		<div class="content">
			<h2>Add a class</h2>

            <div class="con-body form-area">
                <form action="repo/classes_repo.php" method="post">
                    <input type="text" name="name" placeholder="name" id="name" required>
                    <input type="text" name="participants" placeholder="number of participants" id="participants" required>
                    <input type="date" name="start_date" id="start_date">
                    <select name="venue" id="venue">
                        <option value="">Select a venue</option>
                        <?php
                            require 'db/db.php';
                            $records = mysqli_query($con, "SELECT name, id From venues");

                            while($data = mysqli_fetch_array($records))
                            {
                                echo "<option value='". $data['id'] ."'>" .$data['name'] ."</option>";  // displaying data in option menu
                            }	
                        ?>  
                    </select>

                    <input type="submit" value="Save">
                </form>
            </div>
		</div>
	</body>
</html>