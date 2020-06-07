<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <link rel="stylesheet" href="css/style.css" />
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
    <title>givenget.com</title>
  </head>
  <body>
    <div id="body">
      <header>
        <?php include 'files/description.php'; ?>
      </header>
      <div id="main">
        <form action="files/logIn.php" method="GET">
          <h2> Login </h2> <br />
          <input type="email" name="email" placeholder="Email" /> <br />
          <input type="password" name="pwd" placeholder="Password" /> <br />
          <?php
            if (isset($_GET['password']) == "wrong") {
              echo "<center><span style='color: red;'>The password you entered is incorrect.</span></center><br />";
            } else if (isset($_GET['login']) == "error") {
              echo "<center><span style='color: red;'>The email you entered is wrong or doesn't exit.</span></center><br />";
            }
          ?>
          <button type="submit" name="submit"> Sign In </button>
        </form>
        <center> <span>Don't have an account? <a href="files/signupForm.php">Sign up here!</a></span> </center>
      </div> <!-- main -->
    </div> <!-- body -->

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
