<?php
include 'dbh.php';
if (isset($_POST['submit'])) {
  $lfname = $_SESSION['name'] . " " . $_SESSION['lname'];
  $title = mysqli_real_escape_string($conn, $_POST['title']);
  $description = mysqli_real_escape_string($conn, $_POST['description']);
  $price = mysqli_real_escape_string($conn, $_POST['price']);
  $number = mysqli_real_escape_string($conn, $_POST['number']);
  $location = mysqli_real_escape_string($conn, $_POST['location']);
  $categorie = mysqli_real_escape_string($conn, $_POST['categorie']);
  $result = mysqli_query($conn, "SELECT id FROM products ORDER BY id DESC LIMIT 1");
  $resultCheck = mysqli_num_rows($result);
  if ($resultCheck > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
      $_SESSION['lastId'] = $row['id'];
    }
  }
  $imgName = $_SESSION['lastId'] . $_FILES['image']['name'];
  $image = $imgName;
	$target = "../uploads/".basename($image);
  $data = date("Y/m/d");
  $owner = $_SESSION['email'];

  if (empty($lfname) || empty($title) || empty($description) || empty($price) || empty($number) || empty($location) || empty($categorie) || empty($image)) {
    // echo $lfname;
    header("Location: ../categories/createOfferForm.php?somethingEmpty");
  } else {
    $sql = "INSERT INTO products (categorie, name, image, p_name, p_description, p_price, p_location, phone_number, data, owner) VALUES ('$categorie', '$lfname', '$image', '$title', '$description', '$price', '$location', '$number', '$data', '$owner'); ";
    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
      echo $msg;
  	}
    mysqli_query($conn, $sql);
    header("Location: index.php?added");
  }
}
?>
