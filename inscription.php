<!DOCTYPE html>
<html>

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Quora 2 - Register</title>
   <link rel="stylesheet" type="text/css" href="styles/inscriptionStyle.css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
   <script type="text/javascript" src="script.js"></script>
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css">

   <style>
      body p{
         color: #F52936;
      }
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
         background-position-x: -70px;
         box-shadow:
            0 2.8px 2.2px rgba(0, 0, 0, 0.034),
            0 6.7px 5.3px rgba(0, 0, 0, 0.048),
            0 12.5px 10px rgba(0, 0, 0, 0.96),
            0 22.3px 17.9px rgba(0, 0, 0, 0.072),
            0 41.8px 33.4px rgba(0, 0, 0, 0.086),
            0 100px 80px rgba(0, 0, 0, 0.12);
         height: 690px;
         padding-top: 10px;

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
      input[type="checkbox"]{
         font-size: 12px;
      }
   </style>
</head>

<body>
   <?php

   require("DB/connexion.php");

   function has_special_chars($string)
   {
      return preg_match('/[^a-zA-Z\d]/', $string);
   }

   function passwordVerification($pass)
   {
      if (strlen($pass) >= 8 && has_special_chars($pass) > 0) {
         return true;
      } else {
         return false;
      }
   }

   function userExist($user)
   {
      $co = connexionBdd();
      $query = $co->prepare("SELECT * FROM utilisateurs WHERE pseudo=:pseudo");
      $query->bindParam(":pseudo", $user);
      $query->execute();
      $row = $query->rowCount();
      if ($row > 0) {
         return true;
      } else {
         return false;
      }
   }

   function emailExist($mail)
   {
      $co = connexionBdd();
      $query = $co->prepare("SELECT * FROM utilisateurs WHERE email=:email");
      $query->bindParam(":email", $mail);
      $query->execute();
      $row = $query->rowCount();
      if ($row > 0) {
         return true;
      } else {
         return false;
      }
   }

   $message = "";

   if (isset($_POST["submit"])) {
      if (isset($_POST["pseudo"],$_POST["name"], $_POST["email"], $_POST["password"], $_POST["passwordverif"], $_POST["genre"])) {
         $pseudo = $_POST["pseudo"];
         $name = $_POST["name"];
         $email = $_POST["email"];
         $password = $_POST["password"];
         $passwordverif = $_POST["passwordverif"];
         $passwordhash = hash('sha256', $_POST["password"]);
         $genre = $_POST["genre"];
         $date = date('d D y');
         if ($password == $passwordverif) {
            if (passwordVerification($password)) {
               if (userExist($pseudo) == false) {
                  if (emailExist($email) == false) {
                     $co = connexionBdd();
                     $query = $co->prepare("INSERT into utilisateurs (pseudo, name, email, mot_de_passe, avatar, genre, date_inscription, role, bio, weblink, education, occupation, collage) VALUES (:pseudo, :name, :email, :password, 'https://cdn.dribbble.com/users/1162077/screenshots/7542499/media/d6f3265e5017257e5900b762754f2655.png', :genre, :date, 'membre', 'Not Updated Yet' , 'Not Updated Yet', 'Not Updated Yet' , 'Not Updated Yet', 'Not Updated Yet')");
                     $query->bindParam(":pseudo", $pseudo);
                     $query->bindParam(":name", $name);
                     $query->bindParam(":email", $email);
                     $query->bindParam(":password", $passwordhash);
                     $query->bindParam(":genre", $genre);
                     $query->bindParam(":date", $date);
                     $query->execute();
                     if ($query) {
                        $message = "Your account has been registered <a href='connexion.php'> Login </a>";
                        //$ message = "Your account has been registered";
                     }
                  } else {
                     $message = "The email address is already used";
                  }
               } else {
                  $message = "The username is already used";
               }
            } else {
               $message = "The password must have 8 characters including 1 special character";
            }
         } else {
            $message = "Confirm Passwords do not match";
         }
      }
   }

   ?>

   <div class="wrapper" style=" margin-top: 0px; background: linear-gradient(rgba(18, 18, 18, 0.9), rgba(18, 18, 18, 0.9)), url(https://image.freepik.com/free-vector/space-seamless-pattern-stars-moon-planets-galaxy-seamless-doodle-universe-background-galaxy-space-astronomy-doodle-universe_80590-8737.jpg);">
      <div class="loginBox">
         <h1>Register Now</h1>
         <div class="row">
            <div class="column">
               <form action="" method="post">
               <p>Username</p>
                  <input type="text" name="pseudo" placeholder="Choose a username">
                  <p>Name</p>
                  <input type="text" name="name" placeholder="Enter Your Name">
                  <p>Email</p>
                  <input type="email" name="email" placeholder="Enter your email">
                  <p>Gender :</p>
                  <div class="radioInput">
                     <label for="homme">Male</label>
                     <input type="radio" name="genre" value="H">
                     <label for="femme">Female</label>
                     <input type="radio" name="genre" value="F">
                  </div>
                  <input type="password" name="password" placeholder="Enter your password">
                  <p onclick="myFunction()" style="cursor: pointer;"> Show Password</p>
                  <input type="password" name="passwordverif" id="myInput" placeholder="Confirm your password">
                  <input type="submit" name="submit" value="Sign up">
                  <h5 style="color: #F52936; font-size: 16px;"><?php echo $message; ?></h5>
                  <p> <a href="connexion.php">Already have an account? </a></p>
               </form>

            </div>
            <div class="column1">
               <!--Nothing-->
            </div>
         </div>
      </div>

   </div>
   <p class="pp">Designed and Developed By Prashant Kumar</p>
   <script>
      if (window.history.replaceState) {
         window.history.replaceState(null, null, window.location.href);
      }

      function myFunction() {
         var x = document.getElementById("myInput");
         if (x.type === "password") {
            x.type = "text";
         } else {
            x.type = "password";
         }
      }
   </script>

</html>