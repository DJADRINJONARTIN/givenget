<?php

  include 'dbh.php';
	$_SESSION['email'] = "";
	$_SESSION['name'] = "";
	$_SESSION['logedIn'] = false;

	header("Location: ../index.php");
	exit();
