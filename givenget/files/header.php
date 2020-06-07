<?php include 'dbh.php';
$options = $_SESSION['options'];?>
<header>
  <style media="screen">

  li.createOffer a {
  	background: red;
  	color: white;
  	border: 1px solid black;
  	padding: 2px;
  }
  </style>
  <nav>
    <center>
      <ul>
        <li>
          <a href="/givenget/files/index.php">Home</a>
        </li>
        <?php
          if (isset($_SESSION['options'])) {
            $options = $_SESSION['options'];
            for ($i = 0;$i < count($options);$i++) {
              echo "<li>
                      <a style='text-transform: capitalize;' href='/givenget/categories/categorie.php?categorie=".$options[$i]."'>".$options[$i]."</a>
                    </li>";
            }
          }
        ?>
        <li class="createOffer">
          <a href="/givenget/categories/createOfferForm.php"> + Create Offer</a>
        </li>
      </ul>
    </center>
  </nav>
  <?php include 'description.php'; ?>
</header>
