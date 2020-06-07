<?php

if (isset($_GET['submit'])) {

	include 'dbh.php';

	$email = mysqli_real_escape_string($conn, $_GET['email']);
	$pwd = mysqli_real_escape_string($conn, $_GET['pwd']);

	if (empty($email) || empty($pwd)) {
		header("Location: ../index.php?fillall=false");
		exit();
	} else {
		$sql = "SELECT * FROM users WHERE email='$email'; ";
		$result = mysqli_query($conn, $sql);
		$resultCheck = mysqli_num_rows($result);
		if ($resultCheck < 1) {
			header("Location: ../index.php?login=error");
			exit();
		} else {
			if ($row = mysqli_fetch_assoc($result)) {
				$dehashedPwd = password_verify($pwd, $row['pwd']);
				if ($dehashedPwd == false) {
					header("Location: ../index.php?password=wrong");
					exit();
				} elseif ($dehashedPwd == true) {
					$_SESSION['name'] = $row['name'];
			        $_SESSION['lname'] = $row['lastname'];
			        $_SESSION['email'] = $row['email'];
					$_SESSION['pwd'] = $row['pwd'];
			        $_SESSION['logedIn'] = true;

					header("Location: index.php?email=".$_SESSION['email']);
				}
			}
		}
	}

} else {
	header("Location: ../index.php?login=error");
	exit();
}
