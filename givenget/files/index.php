<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <link rel="stylesheet" href="../css/style.css" />
    <style media="screen">
      body {
        background: white !important;
      }
    </style>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
    <title>givenget.com</title>
  </head>
  <body style="background: white;">
    <?php include 'header.php';
    $_SESSION['options'] = array();
    if (isset($_SESSION['logedIn'])) { ?>
      <div style="width: 50%;margin: 2% auto;background: white;" class="categories container">
        <center style="background: white;">
          <?php
            $_SESSION['options'] = array('cars', 'furniture', 'electronics', 'houses', 'toys', 'tools', 'property', 'clothes', 'tickets');
            function showCategorie($from, $to) {
              for ($i = $from;$i < $to + 1;$i++) {
                $options = $_SESSION['options'];
                $element = $options[$i];
                echo "
                <div class='col-md-4'>
                  <a href='/givenget/categories/categorie.php?categorie=$element'>
                    <img src='../images/$element.png' width='200' alt='$element' />
                    <h3 style='text-transform: capitalize;'>$element</h3>
                  </a>
                </div>
                ";
              }
            }
          ?>
          <div class="row">
            <?php showCategorie(0, 2); ?>
          </div> <!-- row -->
          <div class="row">
            <?php showCategorie(3, 5); ?>
          </div> <!-- row -->
          <div class="row">
            <?php showCategorie(6, 8); ?>
          </div> <!-- row -->
        </center>
      </div> <!-- container -->
    <?php } else {
      header("Location: /givenget/index.php?signInFirst");
      exit();
    } ?>
  </body>
</html>
