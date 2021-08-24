<?php
session_start();
if (!isset($_SESSION["pseudo"])) {
   header("Location: connecxion.php");
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
         /*     */
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

      .likee {
         padding: 8px;
         background-color: #313131;
         border-radius: 12px 12px 12px 12px;
      }

      .likee:hover {
         padding: 8px;
         background-color: #424242;
         border-radius: 12px 12px 12px 12px;
      }

      .mr-auto {
         padding-right: 3px;
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

   if (isset($_GET["pseudo_id"])) {
      $id = $_GET["pseudo_id"];
   } else {
      $id = $_SESSION["pseudo_id"];
   }


   if ($id == $_SESSION["pseudo_id"]) {
      $modifiable = true;
   } else {
      $modifiable = false;
   }

   if ($id == $_SESSION["pseudo_id"]) {
      $deletable = true;
   } else {
      $deletable = false;
   }

   include("lqnavbar.php");

   require("DB/connexion.php");

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

   $co = connexionBdd();

   $query = $co->prepare("SELECT * FROM utilisateurs WHERE id=:id");
   $query->bindParam(":id", $id);
   $query->execute();
   $result = $query->fetch();
   ?>

   <div class="bodaypad">

      <div class="row">
         <div class="leftcolumn">
            <div class="card3">
               <!-- Profile picture and images --->
               <div class="row">
                  <div class="leftcolumn2">
                     <div style="padding-left: 20px;">
                        <img src="<?php echo $result['avatar']; ?>" width="120px" height="120px" style="border-radius: 50%;" alt="">
                     </div>

                  </div>
                  <div class="rightcolumn2">
                     <div style="line-height: 20px;">
                        <span style="font-size: 26px; font-weight: 600;">
                           <br>
                           <?php echo $result['name']; ?>
                           <br>
                           <span style="font-size: 16px; font-weight: 300;">
                              <span style="color:#F52936"><i class="fa fa-globe" aria-hidden="true"></i><a style="text-decoration: none;" href="<?php echo $result['weblink']; ?>"> Website</a></span>
                           </span>
                        </span>
                     </div>
                  </div>

                  <!-- Bio and other details starts here--->
                  <div style="padding: 20px;">
                     <blockquote><?php echo $result['bio']; ?></blockquote>
                     Education: <span style="color: #F52936;"><?php echo $result['education']; ?></span><br>
                     Total question asked: <span id="questt" style="color: #F52936;"> </span>



                     <!--<details>
                        <summary>Know more about this user</summary>
                        <p>Date Joined: <?php echo $result['date_inscription']; ?></p>
                        <p>Education: <?php echo $result['collage']; ?></p>
                     </details>-->


                     <style>
                        #more {
                           display: none;
                        }
                     </style>
                     <p><span id="dots"></span><span id="more">
                           Gender: <span style="color: #F52936;"> <?php if ($result['genre'] == "H") {
                                                                     echo "Male <i class='fa fa-mars' aria-hidden='true'></i>";
                                                                  } else {
                                                                     echo "Female <i class='fa fa-venus' aria-hidden='true'></i>";
                                                                  };
                                                                  ?></span><br>
                           Date Joined: <span style="color: #F52936;"><?php echo $result['date_inscription']; ?></span><br>
                           Collage: <span style="color: #F52936;"><?php echo $result['collage']; ?></span><br>

                           <?php
                           $co = connexionBdd();
                           $query = $co->prepare("SELECT * FROM questions WHERE auteur_id=:id");
                           $query->bindParam(":id", $id);
                           $query->execute();
                           $results = $query->fetchAll();
                           foreach (array_reverse($results) as $result) {
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
                              $sample = ('test');
                              //echo "<br>$likesNumber";
                              echo
                              '<div class="content" hidden> <p> $likesNumber</p> </div>';
                           }
                           ?>


                           <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
                           <script>
                              $(document).ready(function() {
                                 var matched = $(".content p");
                                 //alert("Number of paragraphs in content div = " + matched.length);
                                 document.getElementById("questt").innerHTML = +matched.length;
                              });
                           </script>
                           <!--<p id="questt"></p>-->

                        </span>
                     </p>
                     <button style="font-size: 14px; text-align: center; width: 120px; background-color:#F52936; color:#f1f1f1; border: none; border-radius: 12px;" onclick="myFunction()" id="myBtn">Know More</button>

                     <script>
                        function myFunction() {
                           var dots = document.getElementById("dots");
                           var moreText = document.getElementById("more");
                           var btnText = document.getElementById("myBtn");

                           if (dots.style.display === "none") {
                              dots.style.display = "inline";
                              btnText.innerHTML = "Know More";
                              moreText.style.display = "none";
                           } else {
                              dots.style.display = "none";
                              btnText.innerHTML = "Read less";
                              moreText.style.display = "inline";
                           }
                        }
                     </script>


                  </div>
               </div>


            </div>

            <div class="card2">
               <div style="padding-top: 20px; padding-bottom: 20px;">
                  <center>
                     <div class="border23">
                        <p>Your Questions</p>
                     </div>
                  </center>
               </div>

               <!-- Delete function ---->

               <!----- Delate function -------------->
               <?php
               if ($deletable) {
               ?>
                  <!--<span class='likee'><a href='delete.php?question_id=$result[0]'><i class='fa fa-trash' aria-hidden='true'></i></a></span>-->
               <?php
               } ?>




               <?php

               if ($_SESSION)

                  $co = connexionBdd();
               $query = $co->prepare("SELECT * FROM questions WHERE auteur_id=:id");
               $query->bindParam(":id", $id);
               $query->execute();
               $results = $query->fetchAll();
               foreach (array_reverse($results) as $result) {
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
                  $queid =  $result[0];
                  echo


                  "<div style='border-radius: 12px; background-color: #181818' class='toast show' role='alert' aria-live='assertive' aria-atomic='true'>",
                  "<div class='toast-header'> ",
                  "<strong class='mr-auto'> <img class='avatar' src='" . getAvatar($result[3]) . "'> <a class='naam' href='profil.php?pseudo_id=$result[3]'>" . getname($result[3])  .  "</a><span style='font-size: 10px; color: #ddd;  border-right: 2px #404040 solid; padding-right: 5px;'>" . geteducation($result[3])  . "</span> <span style='padding-left: 5px; font-size: 9px; color: #ddd;'>" . getcollage($result[3])  . "</span>   </strong><small>$result[4]</small>",
                  "</div>",
                  "<div class='toast-body'>",
                  "<a class='whitt' href='question.php?question_id=$result[0]'><p>$smalltext <span class='readmore'>read more...</span></p></a>",
                  /*"<a class='readmore' href='question.php?question_id=$result[0]'>Read more...</a>", */
                  "</div>",
                  "<div class='toast-header1'>",
                  "<strong class='mr-auto'>
                  <span class='ansr'><a style='text-decoration:none; color='#096BD5' href='question.php?question_id=$result[0]'>$responseNumber[0] Answers</a></span>   
                  <span class='like'>  <a href='like.php?question_id=$result[0]'><i id='likeIconn' class='$likeIcon'></i> </a> $likesNumber</span>";


                  /*-----------Delete code--------------> */
                  if ($deletable) {
                     echo " <span style='padding-left: 4px;'><span class='likee'><a href='delete.php?question_id=$queid'><i class='fa fa-trash' aria-hidden='true'></i></a></span></span>";
                  }

                  echo
                  "<a style='float: right; text-decoration: none;' class='copy_text'  data-toggle='tooltip' title='Copied' href='http://localhost:3000/question.php?question_id=$result[0]'>Share <i id='saree' class='fa fa-share' aria-hidden='true'></i></a> 
                  </strong>",
                  "</div>",
                  "</div>";
               }

               ?>
               <div style="padding-top: 20px; padding-bottom: 20px;">
                  <center>
                     <p style="color: #383838;">Designed and Developed By Prashant Kumar</p>
                  </center>
               </div>

            </div>
         </div>






         <!-- Right Column add profile upadate links and ads ---->
         <div class="rightcolumn">

            <!--Card 1----------------------------->
            <div class="card">
               <h5 style="background-color: #202020; text-align: center; padding: 8px">Your Highlights</h5>
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
                  <center>
                     <p style="text-align: center; width: 80px; background-color:#F52936; border-radius: 22px;"><a href="modifier.php" style="color:#fff; text-decoration: none; ">Edit <i class="fa fa-pencil" aria-hidden="true"></i></a></p>
                  </center>
               </div>
            </div>

            <!--Card 2----------------------------->

            <div class="card">
               <h5 style="background-color: #202020; text-align: center; padding: 8px; ">New Users</h5>
               <div style=" padding: 20px; height: 300px; overflow: scroll; overflow-x: hidden;  scrollbar-width: thin; scrollbar-color:#171717 #262626 ;  ">

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


               <!-- AddToAny END -->
            </div>

            <div class="card">
               <h5 style="background-color: #202020; text-align: center; padding: 8px">Ads</h5>
               <img src="https://i.pinimg.com/originals/63/47/84/6347847571901026716c21a37f261f1f.png" alt="">
            </div>

            <div class="card">
               <h5 style="background-color: #202020; text-align: center; padding: 8px">Info</h5>
               <div style="padding: 20px;">
                  <center>
                     <p style="font-size: 15px; text-align:center;">About • Contact • Join • Your Ad • T&C • Account</p>
                     <p>Your IP- <?php $ip = $_SERVER['REMOTE_ADDR'];
                                 echo $ip ?></p>
                  </center>

               </div>
               <p style="font-size: 12px; text-align:center;">Designed and Developed By Prashant Kumar</p>
            </div>


         </div>

      </div>
   </div>





   <!--
   <section style="padding-top: 120px;">
      <div class="container">
         <div class="main-body">
            <div class="row gutters-sm">
               <div class="col-md-12 mb-3">
                  <div class="card">
                     <div class="card-body">
                        <div class="d-flex flex-column align-items-center text-center">
                           <img class=" rounded-circle avatar2" src="< ?php echo getAvatar($id); ?>" width="150">
                           <div class="mt-3">
                              <h4>Profil de <br>
                                 < ?php echo $result['pseudo']; ?> <br>
                                 <?php echo $result['name']; ?>
                              </h4>
                              <h4>Profil de <br>
                                 < ?php echo $result['bio']; ?>
                              </h4>
                              <p class="text-secondary mb-1">Genre:
                                 < ?php if ($result['genre'] == "H") {
                                    echo "Homme ♂️";
                                 } else {
                                    echo "Femme ♀";
                                 }; ?>
                              </p>
                              <p class="text-muted font-size-sm">Date d'inscription:
                                 < ?php echo $result['date_inscription']; ?>
                              </p>

            <?php
            if ($modifiable) {
            ?>                -->
   <div class="modifyDiv">
      <!--<button type="button" class="btn btn-primary modifyButton"
                                    onclick="location.href='modifier.php';">Update your Profile <i
                                       class="fas fa-user-cog"></i></button>

                                 <button type="button" class="btn btn-outline-primary modifyButton" onclick="submitDelete()">Selete Profile <i class="fas fa-user-times"></i></button>
                                 <form action="" method="POST" name="deleteForm">
                                    <input type="text" name="submitDelete" style="display: none;">
                                 </form>
                              </div> 

                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div> --->

   <?php
            }

            if (isset($_POST["submitDelete"])) {

               $query = $co->prepare("DELETE FROM likes WHERE utilisateur_id=:pseudo_id");
               $query->bindParam(":pseudo_id", $id);
               $query->execute();

               $query = $co->prepare("DELETE FROM repondre WHERE utilisateurs_id=:pseudo_id");
               $query->bindParam(":pseudo_id", $id);
               $query->execute();

               $query = $co->prepare("DELETE FROM questions WHERE auteur_id=:pseudo_id");
               $query->bindParam(":pseudo_id", $id);
               $query->execute();

               $query = $co->prepare("DELETE FROM utilisateurs WHERE id=:pseudo_id");
               $query->bindParam(":pseudo_id", $id);
               $query->execute();
               if ($query) {
                  $_SESSION = array();
                  header("Location: index.php");
               }
            }
   ?>











   <br>
   <!--<h3>Mes questions posées:</h3>
         <br>
         <?php

         $co = connexionBdd();
         $query = $co->prepare("SELECT * FROM questions WHERE auteur_id=:id");
         $query->bindParam(":id", $id);
         $query->execute();
         $results = $query->fetchAll();
         foreach (array_reverse($results) as $result) {
            $query = $co->prepare("SELECT count(*) from repondre WHERE questions_id=:question_id");
            $query->bindParam(":question_id", $result[0]);
            $query->execute();
            $responseNumber = $query->fetch();
            $query = $co->prepare("SELECT * from likes WHERE question_id=:question_id");
            $query->bindParam(":question_id", $result[0]);
            $query->execute();
            $likesNumber = $query->rowCount();
            $likeIcon = changeLikeIcon($result[0]);
            echo "<div class='toast show' role='alert' aria-live='assertive' aria-atomic='true'>",
            "<div class='toast-header'>",
            "<strong class='mr-auto'><img class='avatar' src='" . getAvatar($result[3]) . "'> <a href='profil.php?pseudo_id=$result[3]'>" . getAuteur($result[3]) . "</a> | $responseNumber[0] réponses | " . getCateg($result[2]) . " | <a href='like.php?question_id=$result[0]'><i class='$likeIcon'></i></a> $likesNumber</strong>
                  <small>$result[4]</small>",
            "</div>",
            "<div class='toast-body'>",
            "<a href='question.php?question_id=$result[0]'>$result[1]</a>",
            "</div>",
            "</div>";
         }

         ?>
      </div>
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