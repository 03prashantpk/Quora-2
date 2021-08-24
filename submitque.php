<?php
         session_start();
         if (!isset($_SESSION["pseudo"])) {
             header("Location: connection.php");
             exit();
         }

         require("DB/connexion.php");
         $message = "";

         $co = connexionBdd();

         if (isset($_POST["submit"])) {
             if (isset($_POST["title"])) {
                 $pseudo_id = $_SESSION["pseudo_id"];
                 $title = $_POST["title"];
                 $categorie = $_POST["categorie"];
                 $date = date('Y-m-d H:i:s');

                 $query = $co->prepare("INSERT into questions (titre, categorie_id, auteur_id, date_creation) VALUES (:title, :categorie, :pseudo_id, :date)");
                 $query->bindParam(":title", $title);
                 $query->bindParam(":categorie", $categorie);
                 $query->bindParam(":pseudo_id", $pseudo_id);
                 $query->bindParam(":date", $date);
                 $query->execute();
                 if ($query) {
                     $message = "Votre question a bien été envoyé !";
                 }
             }
         }
         ?>

         <?php echo  $message; ?>