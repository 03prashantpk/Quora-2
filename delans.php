<?php
session_start();
if (!isset($_SESSION["pseudo"])) {
    header("Location: connexion.php");
    exit();
}

require("DB/connexion.php");

$co = connexionBdd();


    if($_SESSION["pseudo"] /*&& $_GET["getAvatar($result[3])"] */) {  //Need Attention here...
    
    
    $query = $co->prepare("DELETE FROM likes WHERE question_id=:question_id");
    $query->bindParam(":question_id", $_GET["question_id"]);
    $query->execute();

    $query = $co->prepare("DELETE FROM repondre WHERE questions_id=:question_id");
    $query->bindParam(":question_id", $_GET["question_id"]);
    $query->execute();

    if ($query) {
        //header("Location: profil.php");
        echo "<script>window.close();</script>";
    } else {
        echo "Error";
    

    }

    }

?>