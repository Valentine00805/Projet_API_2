<?php
//
//On appele le modele et controleur
require_once "API/db_connect.php"; 
require_once "modele/modele.php"; 
require_once "controleur/controleur.php"; 

//On fait des actions avec le controleur si le formulaire est envoyé
if (isset($_POST["actionIns"]))
{
    if ($_POST["actionIns"]=="inscrire")
    {
        $result = ajoutInscrit(); // contrôleur
        if ($result) {
            header("Location: vue/Formulaire_inscription.php?success=1");
        } else {
            header("Location: vue/Formulaire_inscription.php?error=1");
        }
        exit();
    }
}

// cas défaut : affichage de tous
getActi(); //contrôleur
?>