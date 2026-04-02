<?php
//
//On appele le modele et controleur
require_once "modele/modele.php"; 
require_once "controleur/controleur.php"; 

//On fait des actions avec le controleur si le formulaire est envoyé
if (isset($_POST["actionIns"]))
{
    if ($_POST["actionIns"]=="inscrire")
    {
        insertIns() ; //contrôleur

    }
}

// cas défaut : affichage de tous
getActivites() ; //contrôleur
?>