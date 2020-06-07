<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <link rel="stylesheet" href="../css/style.css" />
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
    <title>givenget.com</title>
  </head>
  <body>
	<?php 

		if (isset($_GET['submitProfile'])) {
			include 'dbh.php';
			$name = mysqli_real_escape_string($conn, $_GET['name']);
			$lastname = mysqli_real_escape_string($conn, $_GET['lastname']);
			$email = mysqli_real_escape_string($conn, $_GET['email']);
			$sessionEmail = $_SESSION['email'];
			if (!empty($name) || empty($lastname) || empty($email)) {
				$_SESSION['name'] = $name;
				$_SESSION['lastname'] = $lastname;
				$_SESSION['email'] = $email;
				// echo $_SESSION['lastname'] . " " . $lastname;
				$sql = "UPDATE users SET name='$name', lastname='$lastname', email='$email' WHERE email='$sessionEmail'; ";
				mysqli_query($conn, $sql);
				header("Location: index.php?profileEdited");
				exit();
			} else {
				header("Location: profile.php?somethingEmpty");
				exit();
			}
		} else {
			
			include 'header.php';
			$email = $_SESSION['email'];
			$sql = "SELECT * FROM users WHERE email = '$email'; ";
			$result = mysqli_query($conn, $sql);
			$resultCheck = mysqli_num_rows($result);
			if ($resultCheck > 0) {
				while ($row = mysqli_fetch_assoc($result)) {
					echo "
					<div id='body'>
						<div id='main'>
						<form action='profile.php' method='GET'>
							<h2> Edit Profile </h2> <br />
							<input type='text' value='".$row['name']."' name='name' placeholder='Title' /> <br />
							<input type='text' value='".$row['lastname']."' name='lastname' placeholder='Title' /> <br />
							<input type='email' value='".$row['email']."' name='email' placeholder='Title' /> <br />
							<button type='submit' name='submitProfile'> Edit Profile </button>
							<center> <span style='color: red;text-align:center;'>If you wan't to see the changes, log out and login again!</span> </center>
						</form>
						</div> <!-- main -->
					</div> <!-- body -->
					";
				}
			}
		}

  		

  	?>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
