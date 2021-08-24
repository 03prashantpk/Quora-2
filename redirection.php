<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>LiveQuestion</title>
      <link rel="icon" href="img/favicon.png" type="image/png">
   </head>
   <body>
      <?php
      session_start();

      if (!isset($_SESSION["pseudo"])) {
         header("Location: connexion.php");
      } else {
         header("Location: accueil.php");
      }
      ?>

   </body>
</html>