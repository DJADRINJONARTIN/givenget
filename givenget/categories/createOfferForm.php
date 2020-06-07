<!DOCTYPE html>
<html lang='en' dir='ltr'>
 <head>
   <meta charset='utf-8' />
   <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no' />

   <link rel='stylesheet' href='/givenget/css/style.css' />
   <link href='https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet' integrity='sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN' crossorigin='anonymous' />
   <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' integrity='sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T' crossorigin='anonymous' />
   <title>Give'nGet</title>
 </head>
 <body>


   <?php include '../files/header.php' ?>

   <?php if ($_SESSION['logedIn']) { ?>
     <div id='body'>
       <div id='main'>
         <form action='../files/createOffer.php' method='POST' enctype='multipart/form-data'>
           <h2> Create Offer </h2> <br />
           <input type='text' name='title' placeholder='Title' /> <br />
           <textarea type='text' name='description' placeholder='Description'></textarea> <br />
           <div class='row'>
             <div class='col-md-5'>
               <input type='number' name='price' placeholder='Price (&euro;)' />
             </div> <!-- col-md-3 -->

             <div class='col-md-7'>
               <input type='text' name='number' placeholder='Phone Number' />
             </div> <!-- col-md-9 -->
           </div> <!-- row --> <br />
           <input type='text' name='location' placeholder='Location: City, Country' /> <br />
           <select style='text-transform: capitalize;' name='categorie'>
            <?php
              $options = $_SESSION['options'];
              for ($i = 0;$i < count($options);$i++) {
                $element = $options[$i];
                echo "<option style='text-transform: capitalize;' value='".$element."'>".$element."</option>";
              }
            ?>
           </select> <br />
           <input type='file' name='image'> <br />
           <button type='submit' name='submit'> Create Offer! </button>
         </form>
       </div> <!-- main -->
     </div> <!-- body -->
   <?php } else {
     header('Location: /givenget/index.php?signInFirst');
     exit();
   } ?>

  <script src='https://code.jquery.com/jquery-3.3.1.slim.min.js' integrity='sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo' crossorigin='anonymous'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js' integrity='sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1' crossorigin='anonymous'></script>
  <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js' integrity='sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM' crossorigin='anonymous'></script>
</body>
</html>
