<?php
include 'dbh.php';
if (isset($_GET['submit'])) {
  $title = mysqli_real_escape_string($conn, $_GET['title']);
  $description = mysqli_real_escape_string($conn, $_GET['description']);
  $price = mysqli_real_escape_string($conn, $_GET['price']);
  $number = mysqli_real_escape_string($conn, $_GET['number']);
  $location = mysqli_real_escape_string($conn, $_GET['location']);
  $categorie = mysqli_real_escape_string($conn, $_GET['categorie']);
  $id = mysqli_real_escape_string($conn, $_GET['id']);
  if (empty($title) || empty($description) || empty($price) || empty($number) || empty($location) || empty($categorie)) {
    header("Location: ../categories/edit.php?somethingEmpty");
  } else {
    $sql = "UPDATE products SET categorie='$categorie', p_name='$title', p_description='$description', p_price='$price', p_location='$location', phone_number='$number' WHERE id='$id'; ";
    mysqli_query($conn, $sql);
    header("Location: index.php?edited");
  }
}
?>
