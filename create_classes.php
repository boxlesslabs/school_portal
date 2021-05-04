<!DOCTYPE html>
<html>
    <?php require 'pages/header.php';?>

	<body class="loggedin">
        <?php require 'pages/nav.php';?>

		<div class="content">
			<h2>Add a class</h2>

            <div class="con-body form-area">
                <form method="post">
                    <input type="text" name="name" placeholder="name" id="name" required>
                    <input type="text" name="participants" placeholder="number of participants" id="participants" required>
                    <input type="date" name="start_date" id="end_date">
                    <select name="venue" id="venue">
                        <option value="">Select a venue</option>
                    </select>

                    <input type="submit" value="Save">
                </form>
            </div>
		</div>
	</body>
</html>