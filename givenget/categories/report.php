<?php
  include '../files/dbh.php';
  $id = $_GET['id'];
  $categorie = $_GET['categorie'];

  $sql = "UPDATE products SET reports = reports + 1 WHERE id = $id;";
  mysqli_query($conn, $sql);

  header("Location: /givenget/categories/categorie.php?categorie=$categorie?reported");
  exit();


 ?>
