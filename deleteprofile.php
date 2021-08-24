<?php
session_start();
if (!isset($_SESSION["pseudo"])) {
    header("Location: connexion.php");
    exit();
}

require("DB/connexion.php");
$co = connexionBdd();

$query = $co->prepare("DELETE FROM likes WHERE question_id=:question_id");
$query->bindParam(":question_id", $_GET["question_id"]);
$query->execute();

$query = $co->prepare("DELETE FROM repondre WHERE questions_id=:question_id");
$query->bindParam(":question_id", $_GET["question_id"]);
$query->execute();


$query = $co->prepare("DELETE FROM questions WHERE id=:question_id");
$query->bindParam(":question_id", $_GET["question_id"]);
$query->execute();



$userid = $_SESSION["pseudo"];
$userid2 = $_SESSION["pseudo_id"];
                    
$query = $co->prepare("DELETE FROM utilisateurs WHERE id=$userid2");
$query->bindParam(":id", $_SESSION["pseudo_id"]);
$query->execute();

if ($query) {
    header("Location: accueil.php");
} else {
    echo "Error";
}
