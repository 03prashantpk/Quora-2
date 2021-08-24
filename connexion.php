<!DOCTYPE html>
<html>

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Login</title>
   <link rel="stylesheet" type="text/css" href="styles/connexionStyle.css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
   <script type="text/javascript" src="script.js"></script>
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css">
   <link rel="icon" href="https://assets.stickpng.com/thumbs/5841c704a6515b1e0ad75aab.png" type="image/png">

   <style>
      * {
         box-sizing: border-box;
      }

      /* Create two equal columns that floats next to each other */
      .column {
         float: left;
         width: 60%;
         padding: 30px;
         /* Should be removed. Only for demonstration */
      }

      .column1 {
         float: left;
         width: 30%;
         padding: 10px;
         /* Should be removed. Only for demonstration */
      }

      /* Clear floats after the columns */
      .row:after {
         content: "";
         display: table;
         clear: both;
      }

      .loginBox {
         background-image: url(https://cdn.dribbble.com/users/2054184/screenshots/6335402/framesequence-dog.gif);
         background-position-x: -100px;
         box-shadow:
            0 2.8px 2.2px rgba(0, 0, 0, 0.034),
            0 6.7px 5.3px rgba(0, 0, 0, 0.048),
            0 12.5px 10px rgba(0, 0, 0, 0.96),
            0 22.3px 17.9px rgba(0, 0, 0, 0.072),
            0 41.8px 33.4px rgba(0, 0, 0, 0.086),
            0 100px 80px rgba(0, 0, 0, 0.12);
      }



      @media only screen and (max-width: 600px) {
         .column1 {
            float: left;
            width: 0%;
            padding: 0px;
            /* Should be removed. Only for demonstration */
         }

      }

      .pp {
         position: fixed;
         left: 0;
         font-size: 13px;
         bottom: 0;
         width: 100%;
         color: e1e1e1;
         text-align: center;
         color: #a1a1a1;
      }
   </style>
</head>

<body>
   <?php
   require("DB/connexion.php");
   session_start();
   $co = connexionBdd();
   $message = "";

   if (isset($_POST["submit"])) {
      $pseudo = $_POST["pseudo"];
      $password = hash('sha256', $_POST["password"]);

      $query = $co->prepare("SELECT * FROM utilisateurs WHERE pseudo=:pseudo and mot_de_passe=:password");
      $query->bindParam(":pseudo", $pseudo);
      $query->bindParam(":password", $password);
      $query->execute();
      $result = $query->fetchAll();
      $rows = $query->rowCount();
      if ($rows == 1) {
         $_SESSION["pseudo"] = $pseudo;
         $_SESSION["id"] = $result[0]["id"];
         $_SESSION["bio"] = $result[0]["bio"];
         $_SESSION["name"] = $result[0]["name"];
         $_SESSION["weblink"] = $result[0]["weblink"];
         $_SESSION["pseudo_id"] = $result[0]["id"];
         $_SESSION["pseudo_role"] = $result[0]["role"];
         $_SESSION["pseudo_email"] = $result[0]["email"];
         $_SESSION["pseudo_avatar"] = $result[0]["avatar"];
         $_SESSION["collage"] = $result[0]["collage"];
         $_SESSION["education"] = $result[0]["education"];



         header("Location: accueil.php");
      } else {
         $message = "Username and Password incorrect";
      }
   }
   ?>




   <div class="wrapper" style="background: linear-gradient(rgba(18, 18, 18, 0.9), rgba(18, 18, 18, 0.9)), url(https://image.freepik.com/free-vector/space-seamless-pattern-stars-moon-planets-galaxy-seamless-doodle-universe-background-galaxy-space-astronomy-doodle-universe_80590-8737.jpg);">
      <div class="loginBox">
         <h1>Welcome Back</h1>
         <div class="row">
            <div class="column">

               <form action="" method="post">
                  <p>Username</p>
                  <input type="text" name="pseudo" placeholder="Enter your username" required>
                  <p>Password</p>
                  <input type="password" name="password" placeholder="Enter your password" required>
                  <input type="submit" name="submit" value="Login">

               </form>
            </div>
            <div class="column1">
               <!--Nothing-->
            </div>
         </div>
         <p><a href="inscription.php" style="text-decoration: none; text-align: center; font-size: 16px;">You do not have an account?</a></p>
         <h5 style="color: #F52936;"><?php echo $message; ?></h5>
      </div>
   </div>

   <p class="pp">Designed and Developed By Prashant Kumar</p>
</body>
<script>
   if (window.history.replaceState) {
      window.history.replaceState(null, null, window.location.href);
   }
</script>

</html>