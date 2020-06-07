<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
<link rel="stylesheet" type="text/css" href="../css/style.css" />
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<style media="screen">
  .special {
    width: 70%;
    margin: 50px auto;
    background-color: #EEEEEE;
    padding: 15px;
    border: 1px solid #ccc;
  }

  .nav-item {
    background: lightgray;
    color: black;
    font-weight: bolder;
    text-align: center;
    border: 1px solid black;
  }
</style>

<?php include 'header.php'; ?>
<?php


$owner = $_SESSION['email'];
$sql = "SELECT * FROM products WHERE owner='$owner'; ";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0) {
  while ($row = mysqli_fetch_assoc($result)) {
    echo "<div class='row special'>";
      echo "<div class='col-md-10 row'>";
        echo "<img src='../uploads/". $row['image'] ."' style='height: 300px;' class='col-md-5' alt='' />";
        echo "<div class='col-md-7'>";
          echo "<span>Posted by: " . $row['name'] . " <br /> ";
          echo "<span>Posted on: " . $row['data'] . " <br /> ";
          echo "<span>Location: " . $row['p_location'] . "<br />";
          echo "<span>Phone Number: 0" . $row['phone_number'] . "</span>";
          echo "<h1> " . $row["p_name"] . "</h1>";
          echo "<p>" . $row['p_description'] . "</p>";
          echo "<h3>Price: <span style='color: green;'>" . $row['p_price'] . "&euro;</span></h3>";
          echo "<span>Categorie: ". $row['categorie'] ."</span>";
        echo "</div>";
      echo "</div>";
      echo "<div class='col-md-2'>";
      $id = $row['id'];
      $categorie = $row['categorie'];
        if (isset($_SESSION['name'])) {
          if ($row['owner'] == $_SESSION['email']) {
            dropdown($id, $categorie, array("remove", "edit"));
          } else {
            dropdown($id, $categorie, array("report"));
          }
        }
      echo "</div>";
    echo "</div>";
  }
}

?>
<!--Navbar-->
