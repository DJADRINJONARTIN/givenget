<style media="screen">
  form.logOut {
    width: 100%;
    padding: 0;
    margin: 0;
  }
  a.dropdown-item {
    text-align: center;
    border: 1px solid black;
    background: none;
    padding: 0;
    font-size: 20px;
    color: black;
    float: right;
  }
</style>
<div class="container">
  <div class="row">
    <div class="col-md-4">
      <center><img src="/givenget/images/logo.png" /></center>
      <h2 style="color: red">givenget.com</h2>
    </div> <!-- col-md-3 -->
    <div class="col-md-5">
      <p>Give'nGet.com, One of the best shops.You can sell stuff you don't need and buy the things you need.From cars to tickets.<br /><span style="font-size: 24px;color: red;">A man's trash is another man's treasure.</span></p>
    </div> <!-- col-md-6 -->
    <div class="col-md-3">
    	<?php
    		if (isset($_SESSION['email'])) {
    			echo "<span style='float: left;'>Hello, " . $_SESSION['name'] . " " . $_SESSION['lname'] . "</span>";
          echo "
          <div style='width:50%;margin: 50px;' class='nav-item dropdown'>
            <a class='nav-link' data-toggle='dropdown' href='#' role='button' aria-haspopup='true' aria-expanded='false'>•••</a>
            <div class='dropdown-menu'>";
              echo "<a class='dropdown-item' href='/givenget/files/profile.php' type='submit' name='logOut'>Profile</a>";
              echo "<a class='dropdown-item' href='/givenget/files/MyOffers.php' type='submit' name='logOut'>My Offers</a>";
              echo "<a class='dropdown-item' href='/givenget/files/logOut.php' type='submit' name='logOut'>Log Out</a>";
            echo "
            </div>
          </div>
          ";
    		}
    	?>
    </div> <!-- col-md-2 -->
  </div> <!-- row -->
</div> <!-- container -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>