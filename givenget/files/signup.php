<?php

include 'dbh.php';

$name = mysqli_real_escape_string($conn, $_POST['name']);
$lname = mysqli_real_escape_string($conn, $_POST['lname']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);

if (empty($name) || empty($lname) ||  empty($email) || empty($pwd)) {
  header("Location: signupForm.php?empty");
} else {
  $sql = "SELECT * FROM users WHERE email='$email' ";
  $result = mysqli_query($conn, $sql);
  $resultCheck = mysqli_num_rows($result);
  if ($resultCheck > 0) {
    header("Location: signupForm.php?email=taken");
    exit();
  } else {
    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
    $sql = "INSERT INTO users (name, lastname, email, pwd) VALUES ('$name', '$lname', '$email', '$hashedPwd'); ";
    echo $name, $lname, $email, $hashedPwd . "<br />";
    echo $sql;
    mysqli_query($conn, $sql);

    $_SESSION['name'] = $name;
    $_SESSION['lname'] = $lname;
    $_SESSION['email'] = $email;
    $_SESSION['logedIn'] = true;
    header("Location: index.php?signup=true");
    exit();
  }
}


?>
