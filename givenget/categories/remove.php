<?php

  include '../files/dbh.php';

  $id = $_GET['id'];
  $categorie = $_GET['categorie'];
  $sql = "DELETE FROM products WHERE id = $id";
  mysqli_query($conn, $sql);
  header("Location: ../categories/categorie.php?categorie=$categorie&removed");
  exit();

 ?>
