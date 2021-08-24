<?php
session_start();
if (!isset($_SESSION["pseudo"])) {
   header("Location: connection.php");
   exit();
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Quora</title>
   <link rel="stylesheet" type="text/css" href="styles/profil.css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
   <script type="text/javascript" src="script.js"></script>
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css">
   <link rel="icon" href="https://assets.stickpng.com/thumbs/5841c704a6515b1e0ad75aab.png" type="image/png">
   <script src="script/profilScript.js"></script>

   <style>
      * {
         box-sizing: border-box;
      }

      body {
         font-family: Arial;
         background: #f1f1f1;
         margin: 0%;
         background-color: #181818;
         /*  
      background: linear-gradient(rgba(18, 18, 18, 0.98), rgba(18, 18, 18, 0.9)), url("https://image.freepik.com/free-vector/space-seamless-pattern-stars-moon-planets-galaxy-seamless-doodle-universe-background-galaxy-space-astronomy-doodle-universe_80590-8737.jpg");
      */
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

      .leftcolumn2 {
         float: left;
         width: 20%;

      }

      /* Right column */
      .rightcolumn {
         float: left;
         width: 25%;
         background-color: rgba(238, 238, 238, 0);
         padding-left: 20px;
      }

      .rightcolumn2 {
         width: 80%;
         background-color: rgba(238, 238, 238, 0);
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
         color: #ccc;
         background-color: rgba(238, 238, 238, 0);
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

      /* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other */
      @media screen and (max-width: 800px) {

         .leftcolumn2,
         .rightcolumn2 {
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

      /*new after 5june */
      * {
         box-sizing: border-box;
      }

      /* Create two equal columns that floats next to each other */
      .column222 {
         float: left;
         width: 200px;
         padding: 10px;
         height: 300px;
         /* Should be removed. Only for demonstration */
      }

      .column2224 {
         float: right;
         width: 70%;
         padding: 10px;
         height: 300px;
         /* Should be removed. Only for demonstration */
      }

      /* Clear floats after the columns */
      .row222:after {
         content: "";
         display: table;
         clear: both;
      }

      .hoveredit {
         color: #aaa;
         float: right;
      }

      .hoveredit:hover {
         color: #F52936;
         color: #aaa;
      }

      .border23 {
         border-top: 1px #ccc solid;
         border-bottom: 1px #ccc solid;
         text-align: center;
         padding-top: 3px;
         padding-bottom: 0px;
         color: #F52936;
         border-radius: 10px;
         width: 80%;
      }

      details>summary {
         list-style: none;
         color: #F52936;
      }

      details>summary::-webkit-details-marker {
         display: none;
      }

      blockquote {
         padding: 5px;
         padding-left: 10px;
         font-weight: 600;
         border-left: 6px #F52936 solid;
         border-right: 6px #F52936 solid;
         border-radius: 20px;
      }
   </style>
</head>

<body>
   <!-- NAVBAR -->
   <?php

   include("lqnavbar.php");
   ?>
   <?php
   if (!isset($_SESSION["pseudo"], $_GET["question_id"])) {
      header("Location: connexion.php");
      exit();
   }

   require("DB/connexion.php");
   $message = "";


   function getAuteur($id)
   {
      $co = connexionBdd();
      $query = $co->prepare("SELECT pseudo FROM utilisateurs WHERE id=:id");
      $query->bindParam(":id", $id);
      $query->execute();
      $result = $query->fetch();
      return $result["pseudo"];
   }

   function getname($id)
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
   <!--<section>
      <div class="container">-->

   <div class="bodaypad">
      <div class="leftcolumn">
         <div class="card3">
            <?php
            $co = connexionBdd();
            $query = $co->prepare("SELECT * FROM questions WHERE id=:id");
            $query->bindParam(":id", $_GET["question_id"]);
            $query->execute();
            $result = $query->fetch();
            $query = $co->prepare("SELECT count(*) from repondre WHERE questions_id=:question_id");
            $query->bindParam(":question_id", $result[0]);
            $query->execute();
            $responseNumber = $query->fetch();
            $query = $co->prepare("SELECT * from likes WHERE question_id=:question_id");
            $query->bindParam(":question_id", $result[0]);
            $query->execute();
            $likesNumber = $query->rowCount();
            $likeIcon = changeLikeIcon($result[0]);
            $smalltext = substr($result[1], 0, 500);
            echo

            "<div style='border-radius: 12px; background-color: #181818' class='toast show'  role='alert' aria-live='assertive' aria-atomic='true'>",
            "<div class='toast-header'> ",
            "<strong class='mr-auto'> <img class='avatar' src='" . getAvatar($result[3]) . "'> <a class='naam' href='profil.php?pseudo_id=$result[3]'>" . getAuteur($result[3])  .  "</a><span style='font-size: 10px; color: #ddd;  border-right: 2px #404040 solid; padding-right: 5px;'>" . geteducation($result[3])  . "</span> <span style='padding-left: 5px; font-size: 9px; color: #ddd;'>" . getcollage($result[3])  . "</span>   </strong><small>$result[4]</small>",
            "</div>",
            "<div class='toast-body'>",
            "<a class='whitt' href='question.php?question_id=$result[0]'><p>$smalltext <span class='readmore'>read more...</span></p></a>",
            /*"<a class='readmore' href='question.php?question_id=$result[0]'>Read more...</a>", */
            "</div>",
            "<div class='toast-header1'>",
            "<strong class='mr-auto'><span class='ansr'><a style='text-decoration:none; color='#096BD5' href='question.php?question_id=$result[0]'>$responseNumber[0] Answers</a></span>   <span class='like'>  <a href='like.php?question_id=$result[0]'><i id='likeIconn' class='$likeIcon'></i> </a> $likesNumber</span> <a  style='float: right; text-decoration: none;' class='copy_text'  data-toggle='tooltip' title='Copied' href='http://localhost:3000/question.php?question_id=$result[0]'>Share <i id='saree' class='fa fa-share' aria-hidden='true'></i></a></strong>",
            "</div>",
            "</div>";

            
            ?>
         </div>


         <div class="card2">
            <div style="padding-top: 20px; padding-bottom: 20px;">
               <center>
                  <div class="border23">
                     <p>Other's Answer</p>
                  </div>
                  <br>
                  <p style="text-align: center; width: 80px; background-color:#F52936; border-radius: 22px;"><a href="answerthis.php" style="color:#fff; text-decoration: none; ">Edit <i class="fa fa-pencil" aria-hidden="true"></i></a></p>
               </center>
               
            </div>

            <?php
            $query = $co->prepare("SELECT * FROM repondre WHERE questions_id=:id");
            $query->bindParam(":id", $_GET["question_id"]);
            $query->execute();
            $results = $query->fetchAll();
            foreach ($results as $result) {
               echo "<div style='border-radius: 12px; background-color: #181818' class='toast show'  role='alert' aria-live='assertive' aria-atomic='true'>",
               "<div class='toast-header'>",
               "<strong class='mr-auto'><img class='avatar' src='" . getAvatar($result[0]) . "'> <a href='profil.php?pseudo_id=$result[0]'>" . getAuteur($result[0]) . "</a></strong>",
               "<small>$result[2]</small>",
               "</div>",
               "<div class='toast-body' >",
               "<p class='class='whitt' style='color: #fff;'>$result[3] </p>",
               "</div>",
               "<div class='toast-header1'>",
               "<strong class='mr-auto'> <a  style='float: right; text-decoration: none;' class='copy_text'  data-toggle='tooltip' title='Copied' href='http://localhost:3000/question.php?question_id=$result[0]'>Share <i id='saree' class='fa fa-share' aria-hidden='true'></i></a></strong>",
            "</div>",
               "</div>";
            }
            ?>
            <!--<div class="col-md-6">
               <div class="row">
                  <div class="col-md-6">
                     <form action="" method="post">
                        <label for="reponse">Votre réponse:</label><br>
                        <textarea id="reponse" name="reponse"></textarea>
                        <br>
                        <input type="submit" name="submit" class="rosebutton">
                     </form>
                     <p><?php echo $message; ?></p>
                  </div>
               </div>
            </div>
         </div>-->



         <?php
         if (isset($_POST["submit"])) {
            $reponse = $_POST["reponse"];
            date_default_timezone_set('UTC');
            $date = date('Y-m-d H:i:s');

            $query = $co->prepare("INSERT INTO repondre (utilisateurs_id, questions_id, date, reponse) VALUES (:pseudo_id, :question_id, :date, :reponse)");
            $query->bindParam(":reponse", $reponse);
            $query->bindParam(":date", $date);
            $query->bindParam(":pseudo_id", $_SESSION["pseudo_id"]);
            $query->bindParam(":question_id", $_GET["question_id"]);
            try {
               $query->execute();
               if ($query) {
                  $message = "Your answer has been submitted";
               }
            } catch (Exception $e) {
               $message = "You already replied to this question";
            }
         }
         ?>

         <!--
                  <div class="col-md-6">
                     <h3>Répondre à la question</h3>
                     <div class="row">
                        <div class="col-md-6">
                           <form action="" method="post">
                              <label for="reponse">Votre réponse:</label><br>
                              <textarea id="reponse" name="reponse"></textarea>
                              <br>
                              <input type="submit" name="submit" class="rosebutton">
                           </form>
                           <p><?php echo $message; ?></p>
                        </div>
                     </div>
                  </div>-->
      </div>
   </div>
   </div>
   <!--</div>
   </section>--->
</body>

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