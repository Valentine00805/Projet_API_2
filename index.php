<?php
    //inclusion du modèle
    require_once 'modele/modeleCoureur.php';
    //inclusion des contrôleurs
    require_once 'controleur/controleur.php';
    //Lancement du bon contrôleur
    if (empty($_GET['action'])) {
        //cas de la consultation : écran de départ
        consulteCoureurs(); 
    } else {
        if ($_GET['action'] == 'FORM') {
            //Cas du formulaire d'ajout
            chargementFormAjoutCoureur();
        } else {
            if ($_GET['action'] == 'AJO') {
                //Cas de l'ajout
                ajoutCoureur();
            } else {
                if ($_GET['action'] == 'MAJ') {
                    //Cas de l'aiguillage entre mise à jour et suppression'
                    aiguillageCoureur();
                } else {
                    if ($_GET['action'] == 'MOD') {
                        //Cas de la mise à jour
                        modifCoureur();
                    } else {
                        if ($_GET['action'] == 'SUP') {
                            //Cas de la suppression
                            supprCoureur();
                        }
                    }
                }
            } 
        }
    }
?>