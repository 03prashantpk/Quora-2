<?php

session_start();

if (!isset($_GET["question_id"], $_SESSION["pseudo_id"])) {
    header("Location: accueil.php");
} else {
    $pseudo_id = $_SESSION["pseudo_id"];
    $question_id = $_GET["question_id"];
}

require("DB/connexion.php");

$co = connexionBdd();

$query = $co->prepare("SELECT * FROM likes WHERE utilisateur_id=:pseudo_id AND question_id=:question_id");
$query->bindParam(":pseudo_id", $pseudo_id);
$query->bindParam(":question_id", $question_id);
$query->execute();
$row = $query->rowCount();
if ($row == 1) {
    $query = $co->prepare("DELETE FROM likes WHERE utilisateur_id=:pseudo_id AND question_id=:question_id");
    $query->bindParam(":pseudo_id", $pseudo_id);
    $query->bindParam(":question_id", $question_id);
    $query->execute();
} else {
    $query = $co->prepare("INSERT INTO likes (utilisateur_id, question_id) VALUES (:pseudo_id, :question_id)");
    $query->bindParam(":pseudo_id", $pseudo_id);
    $query->bindParam(":question_id", $question_id);
    $query->execute();
}


header("Location:" . $_SERVER['HTTP_REFERER']);
exit();


?>