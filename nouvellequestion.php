<?php session_start();
if (!isset($_SESSION["pseudo"])) {
   header("Location: connexion.php");
   exit();
}

require("DB/connexion.php");
?>


<!DOCTYPE html>
<html lang="fr">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Quora 2</title>
   <link rel="stylesheet" type="text/css" href="styles/accueil.css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script src="styles/maxcdnboot.min.js"></script>
   <script type="text/javascript" src="script.js"></script>
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css">
   <link rel="icon" href="https://assets.stickpng.com/thumbs/5841c704a6515b1e0ad75aab.png" type="image/png">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <style>
      * {
         box-sizing: border-box;
      }

      body {
         font-family: Arial;
         background: #f1f1f1;
         margin: 0%;
         background-color: #181818;
         /*  */
         background: linear-gradient(rgba(18, 18, 18, 0.98), rgba(18, 18, 18, 0.9)), url("https://image.freepik.com/free-vector/space-seamless-pattern-stars-moon-planets-galaxy-seamless-doodle-universe-background-galaxy-space-astronomy-doodle-universe_80590-8737.jpg");

      }

      /* Header/Blog Title */
      .header {
         padding: 30px;
         text-align: center;
         background: white;
      }

      .header h1 {
         font-size: 50px;
      }

      /* Style the top navigation bar */
      .topnav {
         overflow: hidden;
         background-color: #333;
      }

      /* Style the topnav links */
      .topnav a {
         float: left;
         display: block;
         color: #f2f2f2;
         text-align: center;
         padding: 14px 16px;
         text-decoration: none;
      }

      /* Change color on hover */
      .topnav a:hover {
         background-color: #ddd;
         color: black;
      }

      /* Create two unequal columns that floats next to each other */
      /* Left column */
      .leftcolumn {
         float: left;
         width: 75%;
      }

      /* Right column */
      .rightcolumn {
         float: left;
         width: 25%;
         background-color: rgba(238, 238, 238, 0);
         padding-left: 20px;
      }

      /* Fake image */
      .fakeimg {
         background-color: #aaa;
         width: 100%;
         padding: 20px;
      }

      /* Add a card effect for articles */
      .card {
         padding: 0px;
         background-color: #262626;
         color: #fff;
         margin-bottom: 20px;

      }

      .card3 {
         padding: 20px;
         padding-bottom: 20px;
         color: #ccc;
         background-color: #262626;
         border-radius: 12px;
      }

      textarea {
         border: none;
         width: 100%;
         height: 90px;
         background-color: #262626;
         color: #ddd;
         resize: none;
         font-size: 15px;
      }

      textarea:hover {
         border: none;
         width: 100%;
         height: 90px;
         background-color: #1D1D1D;
         color: #ddd;
         resize: none;
         font-size: 15px;
         border-radius: 12px;
      }


      /* Clear floats after the columns */
      .row:after {
         content: "";
         display: table;
         clear: both;
      }

      /* Footer */
      .footer {
         padding: 20px;
         text-align: center;
         background: #ddd;
         margin-top: 20px;
      }

      /* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other */
      @media screen and (max-width: 800px) {

         .leftcolumn,
         .rightcolumn {
            width: 100%;
            padding: 0;
         }
      }

      /* Responsive layout - when the screen is less than 400px wide, make the navigation links stack on top of each other instead of next to each other */
      @media screen and (max-width: 400px) {
         .topnav a {
            float: none;
            width: 100%;
         }
      }

      .bodaypad {
         padding-left: 200px;
         padding-right: 200px;
         padding-top: 120px;
         padding-bottom: 30px;
      }

      .fa-share:hover {
         color: #F52936;
      }

      .btm {
         padding: 4px;
         background-color: #F52936;
         border-radius: 22px;
         border: none;
         color: #fff;

      }

      .btm:hover {
         padding: 4px;
         background-color: #287DFF;
         border-radius: 22px;
         border: none;
         color: #fff;

      }

      strong {
         color: #287DFF;
      }

      .naam {
         color: #F52936;
      }

      .naam:hover {
         color: #F52936;
         text-decoration: none;
      }

      .whitt {
         color: #ffff;
         font-weight: 500;
      }

      .whitt:hover {
         color: #ffff;
         font-weight: 500;
         text-decoration: none;
      }

      .toast-body {
         background-color: #262626;
      }

      .toast-header {
         padding: 16px;
         background-color: #262626;
         border-radius: 12px 12px 0px 0px;
      }

      .toast-header1 {
         padding: 16px;
         background-color: #262626;
         border-radius: 12px;
         border-radius: 0px 0px 12px 12px;
      }

      .avatar {
         border-radius: 50%;
         width: 30px;
         height: 30px;
      }

      .quest {
         font-size: 18px;
      }

      .readmore {
         font-size: 14px;
         text-decoration: none;
         color: #F52936;
         padding-top: 10px;

      }

      .readmore:hover {
         font-size: 14px;
         text-decoration: none;
         color: #F52936;
         padding-top: 10px;
      }

      .ansr {
         padding: 8px;
         background-color: #313131;
         border-radius: 12px 0px 0px 12px;
         border-right: 1px #404040 solid;
      }

      .ansr:hover {
         padding: 8px;
         background-color: #424242;
         border-radius: 12px 0px 0px 12px;
      }

      .user10 {
         text-decoration: none;
         padding: 4px;
         border-radius: 12px;
         color: #F52936;
         font-size: 13px;
         border-right: 1px #404040 solid;
      }

      .user10:hover {
         text-decoration: none;
         padding: 4px;
         color: #F52936;
         border-radius: 12px;
         font-size: 13px;
      }

      .like {
         padding: 8px;
         background-color: #313131;
         border-radius: 0px 12px 12px 0px;
      }

      .like:hover {
         padding: 8px;
         background-color: #424242;
         border-radius: 0px 12px 12px 0px;
      }

      .mr-auto {
         padding-right: 3px;
      }

      .like {
         padding: 8px;
      }

      .questt {
         width: 100%;
         height: auto;
      }

      #likeIconn {
         color: #A82300;
      }

      .loading {
         position: relative;
         color: rgba(238, 238, 238, 0);
         padding: 30px;
         text-align: center;
      }

      .loading:before {
         content: attr(data-text);
         position: absolute;
         overflow: hidden;
         max-width: 7em;
         white-space: nowrap;
         color: #424242;
         animation: loading 4s linear;
         animation-iteration-count: 500;
         animation-delay: 1s;

      }

      @keyframes loading {
         0% {
            max-width: 0;
         }
      }

      .pictur {
         width: 30px;
         height: 30px;
         border-radius: 50%;
      }

      .btmup {
         background-color: #A82300;
         padding: 4px 10px 4px 10px;
         color: #fff;
         font-size: 18px;
         border-radius: 4px;
         text-decoration: none;
         border: none;
      }

      .btmup:hover {
         background-color: #A82300;
         padding: 4px 10px 4px 10px;
         color: #fff;
         font-size: 18px;
         border-radius: 4px;
         text-decoration: none;
         border: none;
         box-shadow:
            0 2.8px 2.2px rgba(0, 0, 0, 0.034),
            0 6.7px 5.3px rgba(0, 0, 0, 0.048),
            0 12.5px 10px rgba(0, 0, 0, 0.06),
            0 22.3px 17.9px rgba(0, 0, 0, 0.072),
            0 41.8px 33.4px rgba(0, 0, 0, 0.086),
            0 100px 80px rgba(0, 0, 0, 0.12);
      }

      .space {
         padding: 8px;
      }
   </style>
</head>

<body>
   <?php

   function pseudoUnique($pseudoStr)
   {
      $co = connexionBdd();
      $query = $co->prepare("SELECT * FROM utilisateurs WHERE pseudo=:pseudo");
      $query->bindParam(":pseudo", $pseudoStr);
      $query->execute();
      $row = $query->rowCount();

      if ($row == 1) {
         return false;
      } else {
         return true;
      }
   }

   function bioUnique($bioStr)
   {
      $co = connexionBdd();
      $query = $co->prepare("SELECT * FROM utilisateurs WHERE bio=:bio");
      $query->bindParam(":bio", $bioStr);
      $query->execute();
      $row = $query->rowCount();

      if ($row == 1) {
         return false;
      } else {
         return true;
      }
   }
   function name($nameStr)
   {
      $co = connexionBdd();
      $query = $co->prepare("SELECT * FROM utilisateurs WHERE name=:name");
      $query->bindParam(":name", $nameStr);
      $query->execute();
      $row = $query->rowCount();

      if ($row == 1) {
         return false;
      } else {
         return true;
      }
   }

   function weblink($weblinkStr)
   {
      $co = connexionBdd();
      $query = $co->prepare("SELECT * FROM utilisateurs WHERE weblink=:weblink");
      $query->bindParam(":weblink", $weblinkStr);
      $query->execute();
      $row = $query->rowCount();

      if ($row == 1) {
         return false;
      } else {
         return true;
      }
   }

   function education($educationStr)
   {
      $co = connexionBdd();
      $query = $co->prepare("SELECT * FROM utilisateurs WHERE education=:education");
      $query->bindParam(":education", $educationStr);
      $query->execute();
      $row = $query->rowCount();

      if ($row == 1) {
         return false;
      } else {
         return true;
      }
   }

   function collage($collageStr)
   {
      $co = connexionBdd();
      $query = $co->prepare("SELECT * FROM utilisateurs WHERE collage=:collage");
      $query->bindParam(":collage", $collageStr);
      $query->execute();
      $row = $query->rowCount();

      if ($row == 1) {
         return false;
      } else {
         return true;
      }
   }


   ?>


   <?php
   function getCateg($id)
   {
      $co = connexionBdd();
      $query = $co->prepare("SELECT nom FROM categories WHERE id=:id");
      $query->bindParam(":id", $id);
      $query->execute();
      $result = $query->fetch();
      return $result["nom"];
   }

   function getAuteur($id)
   {
      $co = connexionBdd();
      $query = $co->prepare("SELECT name FROM utilisateurs WHERE id=:id");
      $query->bindParam(":id", $id);
      $query->execute();
      $result = $query->fetch();
      return $result["name"];
   }

   function getAvatar($id)
   {
      $co = connexionBdd();
      $query = $co->prepare("SELECT avatar FROM utilisateurs WHERE id=:id");
      $query->bindParam(":id", $id);
      $query->execute();
      $result = $query->fetch();
      return $result["avatar"];
   }

   function geteducation($id)
   {
      $co = connexionBdd();
      $query = $co->prepare("SELECT education FROM utilisateurs WHERE id=:id");
      $query->bindParam(":id", $id);
      $query->execute();
      $result = $query->fetch();
      return $result["education"];
   }

   function getcollage($id)
   {
      $co = connexionBdd();
      $query = $co->prepare("SELECT collage FROM utilisateurs WHERE id=:id");
      $query->bindParam(":id", $id);
      $query->execute();
      $result = $query->fetch();
      return $result["collage"];
   }

   function getbio($id)
   {
      $co = connexionBdd();
      $query = $co->prepare("SELECT bio FROM utilisateurs WHERE id=:id");
      $query->bindParam(":id", $id);
      $query->execute();
      $result = $query->fetch();
      return $result["bio"];
   }


   function changeLikeIcon($like_question_id)
   {
      $co = connexionBdd();
      $query = $co->prepare("SELECT * FROM likes WHERE utilisateur_id=:pseudo_id AND question_id=:question_id");
      $query->bindParam(":question_id", $like_question_id);
      $query->bindParam(":pseudo_id", $_SESSION["pseudo_id"]);
      $query->execute();
      $row = $query->rowCount();
      if ($row == 1) {
         return "fas fa-heart";
      } else {
         return "far fa-heart";
      }
   }


   ?>

   <?php
   $message = "";

   $co = connexionBdd();

   if (isset($_POST["submitr"])) {
      if (isset($_POST["title"], $_POST["categorie"])) {
         $pseudo_id = $_SESSION["pseudo_id"];
         $title = $_POST["title"];
         $categorie = $_POST["categorie"];
         $date = date('d D y');

         $query = $co->prepare("INSERT into questions (titre, categorie_id, auteur_id, date_creation) VALUES (:title, :categorie, :pseudo_id, :date)");
         $query->bindParam(":title", $title);
         $query->bindParam(":categorie", $categorie);
         $query->bindParam(":pseudo_id", $pseudo_id);
         $query->bindParam(":date", $date);
         $query->execute();
         if ($query) {
            $message = "Question asked Successfully! <br>";
            echo "<script type='text/javascript'>   
            function Redirect() 
            {  
                window.location='profil.php'; 
            } 
            document.write(''); 
            setTimeout('Redirect()', 10);   
            </script>";
         }
      }
   }
   ?>

   <?php

   // PHP program to obtain IP address of
   // the server

   // Create a variable to store the
   // server ip address
   $ip = $_SERVER['REMOTE_ADDR'];

   // Printing the stored address


   ?>

   <!--<div class="header">
      <h1>My Website</h1>
      <p>Resize the browser window to see the effect.</p>
   </div>-->
   <?php include("lqnavbar.php"); ?>

   <div class="bodaypad">

      <div class="row">
         <div class="leftcolumn">
            <div class="card3">
               <h5>What is your question?</h5>
               <form action="" method="POST">
                  <textarea id="textareaChars" required name="title" maxlength="300" placeholder="Type or paste your question here..."></textarea>
                  <script>
                     var maxLength = 300;
                     $('#textarea').keyup(function() {
                        var length = $(this).val().length;
                        var length = maxLength - length;
                        $('#chars').text(length);
                     });
                  </script>
                  <span id="chars" style="font-size: 12px;">300 characters only</span>
                  <!--<input hidden name="date" type="text" value="< ?php echo date('d D y');   ?>">--->
                  <select hidden value="$result[0]" class="custom-select" name="categorie" id="categorie">
                     <!-- Cat hidden ---->
                     <?php
                     $query = $co->prepare("SELECT * FROM categories");
                     $query->execute();
                     $results = $query->fetchAll();
                     foreach ($results as $result) {
                        echo "<option type='hidden' value='$result[0]'>$result[1]</option>";
                     }
                     ?>

                     <input type="submit" name="submitr" class="btm" value="Add Question" style="float: right;">
               </form>
               <br>
               <p style="font-size: 14px; color: green; text-align: center;"><?php echo $message; ?></p>
            </div>
         </div>


         <!--- Right Pannel---->
         <div class="rightcolumn">
            <div class="card">
               <h5 style="background-color: #202020; text-align: center; padding: 8px">About Me</h5>
               <div style="padding: 20px;">
                  <center>
                     <img src="<?php echo $_SESSION['pseudo_avatar'] ?>" width="80px" height="80px" style="border-radius: 50%;" alt="">
                     <p><span style="font-size: 18px;"><?php echo $_SESSION['name'] ?></span>
                  </center>
                  <span style="color:#F52936"> <i class="fa fa-graduation-cap" aria-hidden="true"></i></span> <?php echo $_SESSION['education'] ?>
                  <br><span style="color:#F52936"><i class="fa fa-university" aria-hidden="true"></i></span> <?php echo $_SESSION['collage'] ?>
                  <br>
                  <span style="color:#F52936"><i class="fa fa-globe" aria-hidden="true"></i>
                     <a style="text-decoration:none;" href="<?php echo $_SESSION['weblink'] ?>"><?php echo $_SESSION['weblink'] ?></a></span>
                  <hr width="70%" style="border-top: 1px  #888888 solid;">
                  </p>


                  <p><?php echo $_SESSION['bio'] ?></p>

               </div>
            </div>

            <div class="card">
               <h5 style="background-color: #202020; text-align: center; padding: 8px; ">New Users</h5>
               <div style=" padding: 20px; height: 300px; overflow: scroll; overflow-x: hidden;  scrollbar-width: thin; scrollbar-color:#171717 #262626 ;  ">
                  <!-- AddToAny BEGIN -->

                  <?php
                  //$con = mysqli_connect("localhost", "root", "", "registration");
                  include("DB/config.php");
                  if (mysqli_connect_errno()) {
                     echo "Failed to connect to MySQL: " . mysqli_connect_error();
                     exit();
                  }

                  $sql = "SELECT name, id, avatar FROM utilisateurs ORDER BY id desc LIMIT 0,11";

                  if ($result = mysqli_query($con, $sql)) {
                     // Fetch one and one row
                     while ($row = mysqli_fetch_row($result)) {
                        printf("<p><img src='%s' class='pictur'><a class='user10' href='profil.php?pseudo_id=%s'>%s</a></p>", $row[2], $row[1], $row[0]);
                     }
                     mysqli_free_result($result);
                  }
                  mysqli_close($con);
                  ?>
               </div>
            </div>



            <div class="card">
               <h5 style="background-color: #202020; text-align: center; padding: 8px">Share</h5>
               <div style="padding: 20px;">
                  <!-- AddToAny BEGIN -->
                  <center>
                     <div class="a2a_kit a2a_kit_size_32 a2a_default_style">
                        <a class="a2a_dd" href="https://www.addtoany.com/share"></a>
                        <a class="a2a_button_facebook"></a>
                        <a class="a2a_button_twitter"></a>
                        <a class="a2a_button_email"></a>
                        <a class="a2a_button_google_gmail"></a>
                        <a class="a2a_button_linkedin"></a>
                        <script async src="https://static.addtoany.com/menu/page.js"></script>
                     </div>
                  </center>
               </div>

            </div>
            <div class="card">
               <h5 style="background-color: #202020; text-align: center; padding: 8px">Info</h5>
               <div style="padding: 20px;">
                  <center>
                     <p style="font-size: 15px; text-align:center;">About • Contact • Join • Your Ad • T&C • Account</p>
                     <p>Your IP- <?php echo $ip ?></p>
                  </center>

               </div>
               <p style="font-size: 12px; text-align:center;">Designed and Developed By Prashant Kumar</p>
            </div>
         </div>
      </div>
   </div>
   </div>




</body>

<script>
   function myFunction() {
      var copyText = document.getElementById("myInput");
      copyText.select();
      copyText.setSelectionRange(0, 99999)
      document.execCommand("copy");
      alert("Copied the text: " + copyText.value);
   }
</script>


<script>
   $('.copy_text').click(function(e) {
      e.preventDefault();
      var copyText = $(this).attr('href');

      document.addEventListener('copy', function(e) {
         e.clipboardData.setData('text/plain', copyText);
         e.preventDefault();
      }, true);

      document.execCommand('copy');
      console.log('Copied : ', copyText);
      alert('Copied ');
   });
</script>

</html>