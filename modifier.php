<?php
error_reporting(0);
?>

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
            padding: 30px;
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

        input[Type=submit],
        input[Type=button] {
            background-color: #A82300;
            color: #fff;
            border: none;
            width: 120px;
            border-radius: 4px;
            box-shadow:
                0 2.8px 2.2px rgba(0, 0, 0, 0.034),
                0 6.7px 5.3px rgba(0, 0, 0, 0.048),
                0 12.5px 10px rgba(0, 0, 0, 0.06),
                0 22.3px 17.9px rgba(0, 0, 0, 0.072),
                0 41.8px 33.4px rgba(0, 0, 0, 0.086),
                0 100px 80px rgba(0, 0, 0, 0.12);
        }

        input[type=text],
        input[type=password],
        input[type=url],
        input[type=email],
        textarea,
        textarea:hover {
            background-color: #696969;
            color: #fff;
            border: none;
            border-radius: 4px;
            width: 100%;
            padding: 4px;
            box-shadow:
                0 2.8px 2.2px rgba(0, 0, 0, 0.034),
                0 6.7px 5.3px rgba(0, 0, 0, 0.048),
                0 12.5px 10px rgba(0, 0, 0, 0.06),
                0 22.3px 17.9px rgba(0, 0, 0, 0.072),
                0 41.8px 33.4px rgba(0, 0, 0, 0.086),
                0 100px 80px rgba(0, 0, 0, 0.12);
        }

        .formspacing {
            padding: 8px;
        }

        label {
            padding-left: 12px;
            color: #A82300;
            font-size: 20px;
            font-weight: 600;
        }
    </style>
</head>
<?php


$messageP = "";
$messageE = "";
$messagePA = "";
$messageA = "";

$co = connexionBdd();

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

function emailUnique($emailStr)
{
    $co = connexionBdd();
    $query = $co->prepare("SELECT * FROM utilisateurs WHERE email=:email");
    $query->bindParam(":email", $emailStr);
    $query->execute();
    $row = $query->rowCount();

    if ($row == 1) {
        return false;
    } else {
        return true;
    }
}

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

function oldPasswordVerification($pass)
{
    $pass = hash('sha256', $pass);
    $co = connexionBdd();
    $query = $co->prepare("SELECT * FROM utilisateurs WHERE id=:id AND mot_de_passe=:pass");
    $query->bindParam(":id", $_SESSION["pseudo_id"]);
    $query->bindParam(":pass", $pass);
    $query->execute();
    $row = $query->rowCount();
    if ($row == 1) {
        return true;
    } else {
        return false;
    }
}

if (isset($_POST["submitPseudo"])) {
    if (!empty($_POST["pseudo"])) {
        if (pseudoUnique($_POST["pseudo"])) {
            $query = $co->prepare("UPDATE utilisateurs SET pseudo=:pseudo WHERE id=:pseudo_id");
            $query->bindParam(":pseudo", $_POST["pseudo"]);
            $query->bindParam(":pseudo_id", $_SESSION["pseudo_id"]);
            $query->execute();
            if ($query) {
                $messageP = "<div class='alert alert-success alert-dismissible'>
                <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                <strong>Alert!</strong> Username - Change Saved!.</div>";
                $_SESSION["pseudo"] = $_POST["pseudo"];
            }
        } else {
            $messageP = "<div class='alert alert-danger alert-dismissible'>
                        <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                        <strong>Alert!</strong> Username Already Exist!.</div>";
        }
    } else {
        $messageP = "<div class='alert alert-danger alert-dismissible'>
        <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <strong>Alert!</strong> Username - Field cannot be empty!.</div>";
    }
}

if (isset($_POST["submitbio"])) {
    if (!empty($_POST["bio"])) {
        $query = $co->prepare("UPDATE utilisateurs SET bio=:bio WHERE id=:pseudo_id");
        $query->bindParam(":bio", $_POST["bio"]);
        $query->bindParam(":pseudo_id", $_SESSION["pseudo_id"]);
        $query->execute();
        if ($query) {
            $messageA = "<div class='alert alert-success alert-dismissible'>
            <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
            <strong>Alert!</strong> Bio - Change Saved!.</div>";
            $_SESSION["bio"] = $_POST["bio"];
        }
    } else {
        $messageA = "<div class='alert alert-danger alert-dismissible'>
        <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <strong>Alert!</strong> Bio - Field cannot be empty!.</div>";
    }
}

if (isset($_POST["submitname"])) {
    if (!empty($_POST["name"])) {
        $query = $co->prepare("UPDATE utilisateurs SET name=:name WHERE id=:pseudo_id");
        $query->bindParam(":name", $_POST["name"]);
        $query->bindParam(":pseudo_id", $_SESSION["pseudo_id"]);
        $query->execute();
        if ($query) {
            $messageN = "<div class='alert alert-success alert-dismissible'>
            <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
            <strong>Alert!</strong> Name - Change Saved!.</div>";
            $_SESSION["name"] = $_POST["name"];
        }
    } else {
        $messageN = "<div class='alert alert-danger alert-dismissible'>
        <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <strong>Alert!</strong> Name - Field cannot be empty!.</div>";
    }
}

if (isset($_POST["submitweblink"])) {
    if (!empty($_POST["weblink"])) {
        $query = $co->prepare("UPDATE utilisateurs SET weblink=:weblink WHERE id=:pseudo_id");
        $query->bindParam(":weblink", $_POST["weblink"]);
        $query->bindParam(":pseudo_id", $_SESSION["pseudo_id"]);
        $query->execute();
        if ($query) {
            $messageW = "<div class='alert alert-success alert-dismissible'>
            <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
            <strong>Alert!</strong> Weblink - Change Saved!.</div>";
            $_SESSION["weblink"] = $_POST["weblink"];
        }
    } else {
        $messageW = "<div class='alert alert-danger alert-dismissible'>
        <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <strong>Alert!</strong> Wablink - Field cannot be empty!.</div>";
    }
}


if (isset($_POST["submiteducation"])) {
    if (!empty($_POST["education"])) {
        $query = $co->prepare("UPDATE utilisateurs SET education=:education WHERE id=:pseudo_id");
        $query->bindParam(":education", $_POST["education"]);
        $query->bindParam(":pseudo_id", $_SESSION["pseudo_id"]);
        $query->execute();
        if ($query) {
            $messageE = "<div class='alert alert-success alert-dismissible'>
            <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
            <strong>Alert!</strong> Qualification - Change Saved!.</div>";
            $_SESSION["education"] = $_POST["education"];
        }
    } else {
        $messageE = "<div class='alert alert-danger alert-dismissible'>
        <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <strong>Alert!</strong> Qualification - Field cannot be empty!.</div>";
    }
}
if (isset($_POST["submitcollage"])) {
    if (!empty($_POST["collage"])) {
        $query = $co->prepare("UPDATE utilisateurs SET collage=:collage WHERE id=:pseudo_id");
        $query->bindParam(":collage", $_POST["collage"]);
        $query->bindParam(":pseudo_id", $_SESSION["pseudo_id"]);
        $query->execute();
        if ($query) {
            $messageU = "<div class='alert alert-success alert-dismissible'>
            <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
            <strong>Alert!</strong> University - Change Saved!.</div>";
            $_SESSION["collage"] = $_POST["collage"];
        }
    } else {
        $messageU = "<div class='alert alert-danger alert-dismissible'>
        <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <strong>Alert!</strong> University - Field cannot be empty!.</div>";
    }
}

if (isset($_POST["submitEmail"])) {
    if (!empty($_POST["email"])) {
        if (emailUnique($_POST["email"])) {
            $query = $co->prepare("UPDATE utilisateurs SET email=:email WHERE id=:pseudo_id");
            $query->bindParam(":email", $_POST["email"]);
            $query->bindParam(":pseudo_id", $_SESSION["pseudo_id"]);
            $query->execute();
            if ($query) {
                $messageE = "<div class='alert alert-success alert-dismissible'>
                <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                <strong>Alert!</strong> Email - Change Saved!.</div>";
                $_SESSION["pseudo_email"] = $_POST["email"];
            }
        } else {
            $messageE = "<div class='alert alert-danger alert-dismissible'>
            <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
            <strong>Alert!</strong> Email Already Exist!.</div>";
        }
    } else {
        $messageE = "<div class='alert alert-danger alert-dismissible'>
        <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <strong>Alert!</strong> Email - Field cannot be empty!.</div>";
    }
}

if (isset($_POST["submitPass"])) {
    if (!empty($_POST["passOld"]) && !empty($_POST["passNew"])) {
        if ($_POST["passOld"] != $_POST["passNew"]) {
            if (passwordVerification($_POST["passNew"])) {
                if (oldPasswordVerification($_POST["passOld"])) {
                    $passNew = hash('sha256', $_POST["passNew"]);
                    $query = $co->prepare("UPDATE utilisateurs SET mot_de_passe=:pass WHERE id=:id");
                    $query->bindParam(":id", $_SESSION["pseudo_id"]);
                    $query->bindParam(":pass", $passNew);
                    $query->execute();
                    if ($query) {
                        $messagePA = "<div class='alert alert-success alert-dismissible'>
                        <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                        <strong>Alert!</strong> Password - Change Saved!.</div>";
                    }
                } else {
                    $messagePA = "<div class='alert alert-danger alert-dismissible'>
                    <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                    <strong>Alert!</strong> Your old password is incorrect!.</div>";
                }
            } else {
                $messagePA = "<div class='alert alert-danger alert-dismissible'>
                <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                <strong>Alert!</strong> Your new password must contain 8 characters and at least one special character!.</div>";
            }
        } else {
            $messagePA = "<div class='alert alert-danger alert-dismissible'>
            <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
            <strong>Alert!</strong> Your new password can not be the same as the old!.</div>";
        }
    } else {
        $messagePA = "<div class='alert alert-danger alert-dismissible'>
        <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <strong>Alert!</strong> Password - Field cannot be empty!.</div>";
    }
}

if (isset($_POST["submitAvatar"])) {
    if (!empty($_POST["avatar"])) {
        $query = $co->prepare("UPDATE utilisateurs SET avatar=:avatar WHERE id=:pseudo_id");
        $query->bindParam(":avatar", $_POST["avatar"]);
        $query->bindParam(":pseudo_id", $_SESSION["pseudo_id"]);
        $query->execute();
        if ($query) {
            $messageAV = "<div class='alert alert-success alert-dismissible'>
            <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
            <strong>Alert!</strong> Profile Picture - Change Saved!.</div>";
            $_SESSION["pseudo_avatar"] = $_POST["avatar"];
        }
    } else {
        $messageAV = "<div class='alert alert-danger alert-dismissible'>
        <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <strong>Alert!</strong> Profile Picture - Field cannot be empty!.</div>";
    }
}


?>


<body>
    <!-- NAVBAR -->
    <?php include("lqnavbar.php"); ?>

    <div class="bodaypad">
        <div class="row">
            <div class="leftcolumn">
                <div class="card3">
                    <h3 style="text-align: center; font-weight: 600;">Profile Update </h3>

                    <!--- Name  ------------->
                    <form action="" method="POST">
                        <label for="name">Name </label>
                        <div class="formspacing">
                            <?php echo $messageN; ?>
                            <input type="text" name="name" value="<?php echo $_SESSION['name'] ?>">
                        </div>
                        <div class="formspacing">
                            <input type="submit" name="submitname" value="Update">
                        </div>

                    </form>

                    <!--- Username ------------->
                    <form action="" method="POST">
                        <label for="name">Username </label>
                        <div class="formspacing">
                            <?php echo $messageP; ?>
                            <input type="text" name="pseudo" value="<?php echo $_SESSION['pseudo'] ?>">
                        </div>
                        <div class="formspacing">
                            <input type="submit" name="submitPseudo" value="Update">
                        </div>
                    </form>


                    <!--- Add Bio--------->
                    <form action="" method="POST">
                        <label for="name">Add Bio </label>
                        <div class="formspacing">
                            <?php echo $messageA; ?>
                            <textarea type="text" maxlength="85" name="bio" value="<?php echo $_SESSION['bio'] ?>"><?php echo $_SESSION['bio'] ?></textarea>
                            <p style="color: #aaa; font-size: 14px;">85 Characters only</p>
                        </div>
                        <div class="formspacing">
                            <input type="submit" name="submitbio" value="Update">
                        </div>

                    </form>

                    <form action="" method="POST">
                        <label for="name">Add Weblink </label>
                        <div class="formspacing">
                            <?php echo $messageW; ?>
                            <input type="text" name="weblink" value="<?php echo $_SESSION['weblink'] ?>">
                        </div>

                        <div class="formspacing">
                            <input type="submit" name="submitweblink" value="Update">
                        </div>


                    </form>

                    <form action="" method="POST">
                        <label for="name">Add Qualification </label>
                        <div class="formspacing">
                            <?php echo $messageE; ?>
                            <input type="text" name="education" placeholder="Education" value="<?php echo $_SESSION['education'] ?>">
                        </div>


                        <div class="formspacing">
                            <input type="submit" name="submiteducation" value="Update">
                        </div>


                    </form>

                    <form action="" method="POST">
                        <label for="name">Add University </label>
                        <div class="formspacing">
                            <?php echo $messageU; ?>
                            <input type="text" name="collage" placeholder="Collage" value="<?php echo $_SESSION['collage'] ?>">
                        </div>


                        <div class="formspacing">
                            <input type="submit" name="submitcollage" value="Update">
                        </div>

                    </form>


                    <!-- Important ------>
                    <form action="" method="POST">
                        <label for="name">Add Email </label>
                        <div class="formspacing">
                            <?php echo $messageE; ?>
                            <input type="email" name="email" value="<?php echo $_SESSION['pseudo_email'] ?>">
                        </div>


                        <div class="formspacing">
                            <input type="submit" name="submitEmail" value="Update">
                        </div>
                    </form>

                    <form action="" method="POST">
                        <label for="name">Enter Current Password </label>

                        <div class="formspacing">
                            <?php echo $messagePA; ?>
                            <input type="password" name="passOld">
                        </div>
                        <label for="passNew">Enter New Password</label>

                        <div class="formspacing">
                            <input type="password" id="myInput" name="passNew">
                            <input type="checkbox" onclick="myFunction()"> Show Password
                        </div>

                        <div class="formspacing">
                            <input type="submit" name="submitPass" value="Update">
                        </div>
                    </form>

                    <script>
                        function myFunction() {
                            var x = document.getElementById("myInput");
                            if (x.type === "password") {
                                x.type = "text";
                            } else {
                                x.type = "password";
                            }
                        }
                    </script>

                    <form action="" method="POST">

                        <label for="name">Update Profile Pic (URL Only) </label>

                        <div class="formspacing">
                            <?php echo $messageAV; ?>
                            <input type="url" name="avatar" value="<?php echo $_SESSION['pseudo_avatar'] ?>">
                        </div>

                        <div class="formspacing">
                            <input type="submit" name="submitAvatar" value="Update">
                            <input type="button" style="width: 180px;" data-toggle="modal" value="Show Profile Picture" data-target="#exampleModal">
                        </div>

                    </form>
                    <br>
                    <br>

                    <h3 style="text-align: center; font-weight: 600;">More</h3>
                    <div style="text-align: center;">
                        <span class="space"><a class="btmup" href="profil.php">My Question</a></span> <span class="space"><a class="btmup" href="myanswers.php">My Answers</a></span>
                    </div>

                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content" style="background-color: #222222; text-align: center; border:none;">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Profile Picture</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <img src="<?php echo $_SESSION['pseudo_avatar'] ?>" alt="Profile Picture" style="width: 200px; height: 200px; border-radius: 50%">
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btmup" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <style>
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



                </div>
            </div>

            <!------- Right col ----------------------->

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
                    <h5 style="background-color: #202020; text-align: center; padding: 8px">Info</h5>
                    <div style="padding: 14px;">
                        <center>
                            <p style="font-size: 13px; text-align:center;">About • Contact • Join • Your Ad • T&C • Account</p>
                            <p>Your IP- <?php $ip = $_SERVER['REMOTE_ADDR'];
                                        echo $ip ?></p>
                        </center>
                        <p style="font-size: 12px; text-align:center;">Designed and Developed By Prashant Kumar</p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</body>

</html>