<link rel='stylesheet' href='/givenget/css/style.css' />
<link href='https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet' integrity='sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN' crossorigin='anonymous' />
<link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' integrity='sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T' crossorigin='anonymous' />
<?php

  include '../files/dbh.php';

  $id = $_GET['id'];
  $categorie = $_GET['categorie'];
  $sql = "SELECT * FROM products WHERE id='$id' AND categorie='$categorie'; ";
  $result = mysqli_query($conn, $sql);
  $resultCheck = mysqli_num_rows($result);

  if ($resultCheck > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
      echo "
      <div id='body'>
        <div id='main'>
          <form action='../files/editActually.php' method='GET'>
            <h2> Edit Offer </h2> <br />
            <input type='text' value='".$row['p_name']."' name='title' placeholder='Title' /> <br />
            <textarea type='text' value='' name='description' placeholder='Description'>".$row['p_description']."</textarea> <br />
            <div class='row'>
              <div class='col-md-5'>
                <input type='number' value='".$row['p_price']."' name='price' placeholder='Price (&euro;)' />
              </div> <!-- col-md-3 -->

              <div class='col-md-7'>
                <input type='text' value='".$row['phone_number']."' name='number' placeholder='Phone Number' />
              </div> <!-- col-md-9 -->
            </div> <!-- row --> <br />
            <input type='text' value='".$row['p_location']."' name='location' placeholder='Location: City, Country' /> <br />
            <select style='text-transform: capitalize;' name='categorie'>
            ";
              $options = $_SESSION['options'];
              for ($i = 0;$i < count($options);$i++) {
                $element = $options[$i];
                echo "<option style='text-transform: capitalize;' value='".$element."''>".$element."</option>";
              }
            echo "
            </select> <br />
            <input type='number' name='id' value='".$id."' style='font-size: 0.01px;background: none;' />
            <button type='submit' name='submit'> Edit </button>
          </form>
        </div> <!-- main -->
      </div> <!-- body -->
      ";
    }
  }

?>
