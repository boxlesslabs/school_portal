<!DOCTYPE html>
<html>
  <?php require 'pages/header.php';?>

	<body class="loggedin">
    <?php require 'pages/nav.php';?>

		<div class="content">
			<h2>Classes</h2>

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
                <table>
                    <thead>
                      <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td data-column="First Name">James</td>
                        <td data-column="Last Name">Matman</td>
                        <td data-column="email">Chief Sandwich Eater</td>
                        <td>
                            <button>edit</button>
                            <button>del</button>
                        </td>
                      </tr>
                      <tr>
                        <td data-column="First Name">Andor</td>
                        <td data-column="Last Name">Nagy</td>
                        <td data-column="email">Designer</td>
                        <td>
                            <button>edit</button>
                            <button>del</button>
                        </td>
                      </tr>
                      <tr>
                        <td data-column="First Name">Tamas</td>
                        <td data-column="Last Name">Biro</td>
                        <td data-column="email">Game Tester</td>
                        <td>
                            <button>edit</button>
                            <button>del</button>
                        </td>
                      </tr>
                    </tbody>
                  </table>
            </div>
		</div>
	</body>
</html>