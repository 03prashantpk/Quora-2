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

        a {
            text-decoration: none;

        }

        a:hover {
            text-decoration: none;
            color: #A82300;
        }

        ::selection {
            color: #fff;
            background: #A82300;
            padding: 8px;
        }

        .search {
            border-radius: 8px;
            padding: 2px;
            text-align: center;
            border: none;
            box-shadow: 0 2.8px 2.2px rgba(0, 0, 0, 0.034),
                0 6.7px 5.3px rgba(0, 0, 0, 0.048),
                0 12.5px 10px rgba(0, 0, 0, 0.06),
                0 22.3px 17.9px rgba(0, 0, 0, 0.072),
                0 41.8px 33.4px rgba(0, 0, 0, 0.086),
                0 100px 80px rgba(0, 0, 0, 0.12);
        }

        .search:hover {
            border-radius: 8px;
            padding: 2px;
            text-align: center;
            border: none;
            box-shadow: 0 2.8px 2.2px rgba(0, 0, 0, 0.034),
                0 6.7px 5.3px rgba(0, 0, 0, 0.048),
                0 12.5px 10px rgba(0, 0, 0, 0.06),
                0 22.3px 17.9px rgba(0, 0, 0, 0.072),
                0 41.8px 33.4px rgba(0, 0, 0, 0.086),
                0 100px 80px rgba(0, 0, 0, 0.12);
        }

        .searchbtn {
            text-align: center;
            width: 80px;
            background-color: #F52936;
            border-radius: 22px;
            border: none;
            color: #f1f1f1;
            box-shadow:
                0 2.8px 2.2px rgba(0, 0, 0, 0.034),
                0 6.7px 5.3px rgba(0, 0, 0, 0.048),
                0 12.5px 10px rgba(0, 0, 0, 0.06),
                0 22.3px 17.9px rgba(0, 0, 0, 0.072),
                0 41.8px 33.4px rgba(0, 0, 0, 0.086),
                0 100px 80px rgba(0, 0, 0, 0.12);
        }
    </style>
</head>

<body>
    <?php include("lqnavbar.php"); ?>

    <div class="bodaypad">

        <div class="row">
            <div class="leftcolumn">
                <div class="card3">

                    <h4 style="text-align: center; font-weight: 600; font-size: 28px;">Your Responses</h4>
                    <p style="text-align: center; color: #F52936;">Use Question ID to delete the Response</p>

                    <form action="" id="form2" class="formm">
                        <div style="text-align:center;">
                            <input type="text" class="search" id="search" placeholder="Search here...">
                            <button class="searchbtn" type="button" class="button" id="submit_form" onclick="checkInput()" value="Submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                        </div>
                    </form>

                </div>
                <br>

                <div class="card3">
                    <h5 style="text-align: center; font-size:medium;">Total Number of Responses: <span id="questt"></span></h5>
                    <p style="text-align: center; color: #F52936; font-size:small;">You can only delete your response</p>

                    <?php
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "registration";

                    // Create connection
                    $conn = mysqli_connect($servername, $username, $password, $dbname);
                    // Check connection
                    if (!$conn) {
                        die("Connection failed: " . mysqli_connect_error());
                    } else {
                        //echo "Connected Successfully!";
                    }

                    $userid = $_SESSION["pseudo"];
                    $userid2 = $_SESSION["pseudo_id"]; // To match session and current user id 

                    $sql = " SELECT utilisateurs_id, questions_id, reponse FROM repondre  WHERE utilisateurs_id = $userid2";
                    $result = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($result) > 0) {
                        // output data of each row
                        while ($row = mysqli_fetch_assoc($result)) {
                            $ansid = $row["questions_id"];


                            echo "<div class='content' hidden><pk>" . $row["reponse"] . "</pk></div>";

                            echo "<div class='toast-header1' style='width: 100%;'>";
                            echo "<strong class='mr-auto' style='width: 100%;'>";
                            echo "<span class='ansr'>Question ID: " . $row["questions_id"] . "</span>";
                            echo "<span class='like'><a href='question.php?question_id=$ansid'> Show Question </a></span> 
                            <span style='padding-left: 4px;'><span class='likee'><a href='delans.php?question_id=$ansid'> <i class='fa fa-trash' aria-hidden='true'></i> Delete </a><span></span> <br>";
                            echo "</strong>";
                            echo "</div>";

                            //echo "<a href='delans.php?question_id=$ansid'>";
                        }
                    } else {
                        echo "<br>You haven't Answered this question yet.";
                    }


                    ?>
                </div>
            </div>

            <!--right-----------col----->
            <!--- Right Pannel---->
            <div class="rightcolumn">
                <div class="card">
                    <h5 style="background-color: #202020; text-align: center; padding: 8px">About Me</h5>
                    <div style="padding: 20px;">
                        <center>
                            <img src="<?php echo $_SESSION['pseudo_avatar'] ?>" width="80px" height="80px" style="border-radius: 50%;" alt="">
                            <p><span style="font-size: 18px;"><?php echo $_SESSION['name'] ?></span>
                                <br>
                                <span style="color:#F52936"> <i class="fa fa-graduation-cap" aria-hidden="true"></i></span> <?php echo $_SESSION['education'] ?>
                                <br><span style="color:#F52936"><i class="fa fa-university" aria-hidden="true"></i></span> <?php echo $_SESSION['collage'] ?>
                                <br>
                                <span style="color:#F52936"><i class="fa fa-globe" aria-hidden="true"></i>
                                    <a style="text-decoration:none;" href="<?php echo $_SESSION['weblink'] ?>"><?php echo $_SESSION['weblink'] ?></a></span>
                                <hr width="70%" style="border-top: 1px  #888888 solid;">
                            </p>
                        </center>


                        <p><?php echo $_SESSION['bio'] ?></p>
                        <center>
                            <p style="text-align: center; width: 80px; background-color:#F52936; border-radius: 22px;  "><a href="modifier.php" style="color:#fff; text-decoration: none; ">Edit <i class="fa fa-pencil" aria-hidden="true"></i></a></p>
                        </center>

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

</body>
<script>
    function checkInput() {
        var query = document.getElementById('search').value;
        window.find(query);
        return true;
    }
</script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
    $(document).ready(function() {
        var matched = $(".content pk");
        //alert("Number of paragraphs in content div = " + matched.length);
        document.getElementById("questt").innerHTML = +matched.length;
    });
</script>

</html>