<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Le formulaire d'inscription</title>
        <link rel="stylesheet" href="Style.css">
        <link rel="icon" href="Logo.jpg">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, minimum-scale=1, target-densitydpi=device-dpi">
            
        <link rel="stylesheet" href="CSS-action/font-awesome-pro.css">
        <link rel="stylesheet" href="CSS-action/bootstrap.min.css">
        <link rel="stylesheet" href="CSS-action/scroll_button.css">
        <link rel="stylesheet" href="CSS-action/spacing.css">
        <link rel="stylesheet" href="CSS-action/plugin.css">
        <link rel="stylesheet" href="CSS-action/responsive.css">
    </head>
    <body>
        <?php require "menu.php";?>
        <form action="Formulaire_traitement.php" method="post">
            <fieldset>
                <legend><strong>Partie 4 : Suivi</strong></legend>
                <div>
                    <ul>
                        <li>
                            <label for="Commentaire" name="Nom">Nom</label>  
                            <textarea name="Nom" placeholder="Champ à remplir"></textarea><br>
                        </li>
                        <li>
                            <label for="Commentaire" name="prenom">Prénom</label>  
                            <textarea name="prenom" placeholder="Champ à remplir"></textarea><br>
                        </li>
                        <li>
                            Date de naissance : 
                            <input type="date" id="date_naissance" name="date_naissance">
                        </li>
                        <li>
                            <label for="email2">Email : </label>
                            <input type="email" id="email2" name="email2" placeholder="Entrez votre email"><br><br>
                        </li>
                        <li>
                            <label for="telephone">Téléphone : </label>
                            <input type="telephone" id="téléphone" name="téléphone" placeholder="Entrez votre téléphone"><br><br>
                        </li>
                        <li>
                            <label for="Adresse" name="Adresse">Adresse : </label>  
                            <textarea name="Adresse" placeholder="Champ à remplir"></textarea><br>
                        </li>                        
                    </ul>
                    <select id="activite1" name="activite1">
                        <option value="choix">Choisissez : </option>
                        <option value="conferencecardiologie">Conférence cardiologie</option>
                        <option value="ateliernutrition">Atelier nutrition</option>
                        <option value="séminaireoncologie">Séminaire oncologie</option>
                        <option value="journeepreventionavc">Journée prévention AVC</option>
                        <option value="formationpremierssecours">Formation premiers secours</option>
                        <option value="symposiumdiabetologie">Symposium diabétologie</option>
                        <option value="congrespharmacologie">Congrès pharmacologie</option>
                        <option value="ateliergestiondustress">Atelier gestion du stress</option>
                        <option value="forumsantementale">Forum santé mentale</option>
                        <option value="journeerhumatologie">Journée rhumatologie</option>
                        <option value="conferencepediatrie">Conférence pédiatrie</option>
                        <option value="atelierdermatologie">Atelier dermatologie</option>
                    </select><br><br>

                    <select id="activite2" name="activite2">
                        <option value="choix">Choisissez : </option>
                        <option value="conferencecardiologie">Conférence cardiologie</option>
                        <option value="ateliernutrition">Atelier nutrition</option>
                        <option value="séminaireoncologie">Séminaire oncologie</option>
                        <option value="journeepreventionavc">Journée prévention AVC</option>
                        <option value="formationpremierssecours">Formation premiers secours</option>
                        <option value="symposiumdiabetologie">Symposium diabétologie</option>
                        <option value="congrespharmacologie">Congrès pharmacologie</option>
                        <option value="ateliergestiondustress">Atelier gestion du stress</option>
                        <option value="forumsantementale">Forum santé mentale</option>
                        <option value="journeerhumatologie">Journée rhumatologie</option>
                        <option value="conferencepediatrie">Conférence pédiatrie</option>
                        <option value="atelierdermatologie">Atelier dermatologie</option>
                    </select><br><br>

                    <select id="activite3" name="activite3">
                        <option value="choix">Choisissez : </option>
                        <option value="conferencecardiologie">Conférence cardiologie</option>
                        <option value="ateliernutrition">Atelier nutrition</option>
                        <option value="séminaireoncologie">Séminaire oncologie</option>
                        <option value="journeepreventionavc">Journée prévention AVC</option>
                        <option value="formationpremierssecours">Formation premiers secours</option>
                        <option value="symposiumdiabetologie">Symposium diabétologie</option>
                        <option value="congrespharmacologie">Congrès pharmacologie</option>
                        <option value="ateliergestiondustress">Atelier gestion du stress</option>
                        <option value="forumsantementale">Forum santé mentale</option>
                        <option value="journeerhumatologie">Journée rhumatologie</option>
                        <option value="conferencepediatrie">Conférence pédiatrie</option>
                        <option value="atelierdermatologie">Atelier dermatologie</option>
                    </select><br><br>

                    <select id="activite4" name="activite4">
                        <option value="choix">Choisissez : </option>
                        <option value="conferencecardiologie">Conférence cardiologie</option>
                        <option value="ateliernutrition">Atelier nutrition</option>
                        <option value="séminaireoncologie">Séminaire oncologie</option>
                        <option value="journeepreventionavc">Journée prévention AVC</option>
                        <option value="formationpremierssecours">Formation premiers secours</option>
                        <option value="symposiumdiabetologie">Symposium diabétologie</option>
                        <option value="congrespharmacologie">Congrès pharmacologie</option>
                        <option value="ateliergestiondustress">Atelier gestion du stress</option>
                        <option value="forumsantementale">Forum santé mentale</option>
                        <option value="journeerhumatologie">Journée rhumatologie</option>
                        <option value="conferencepediatrie">Conférence pédiatrie</option>
                        <option value="atelierdermatologie">Atelier dermatologie</option>
                    </select><br><br>

                    <select id="activite5" name="activite5">
                        <option value="choix">Choisissez : </option>
                        <option value="conferencecardiologie">Conférence cardiologie</option>
                        <option value="ateliernutrition">Atelier nutrition</option>
                        <option value="séminaireoncologie">Séminaire oncologie</option>
                        <option value="journeepreventionavc">Journée prévention AVC</option>
                        <option value="formationpremierssecours">Formation premiers secours</option>
                        <option value="symposiumdiabetologie">Symposium diabétologie</option>
                        <option value="congrespharmacologie">Congrès pharmacologie</option>
                        <option value="ateliergestiondustress">Atelier gestion du stress</option>
                        <option value="forumsantementale">Forum santé mentale</option>
                        <option value="journeerhumatologie">Journée rhumatologie</option>
                        <option value="conferencepediatrie">Conférence pédiatrie</option>
                        <option value="atelierdermatologie">Atelier dermatologie</option>
                    </select><br><br>

                    <select id="activite6" name="activite6">
                        <option value="choix">Choisissez : </option>
                        <option value="conferencecardiologie">Conférence cardiologie</option>
                        <option value="ateliernutrition">Atelier nutrition</option>
                        <option value="séminaireoncologie">Séminaire oncologie</option>
                        <option value="journeepreventionavc">Journée prévention AVC</option>
                        <option value="formationpremierssecours">Formation premiers secours</option>
                        <option value="symposiumdiabetologie">Symposium diabétologie</option>
                        <option value="congrespharmacologie">Congrès pharmacologie</option>
                        <option value="ateliergestiondustress">Atelier gestion du stress</option>
                        <option value="forumsantementale">Forum santé mentale</option>
                        <option value="journeerhumatologie">Journée rhumatologie</option>
                        <option value="conferencepediatrie">Conférence pédiatrie</option>
                        <option value="atelierdermatologie">Atelier dermatologie</option>
                    </select><br><br>

                    <select id="activite7" name="activite7">
                        <option value="choix">Choisissez : </option>
                        <option value="conferencecardiologie">Conférence cardiologie</option>
                        <option value="ateliernutrition">Atelier nutrition</option>
                        <option value="séminaireoncologie">Séminaire oncologie</option>
                        <option value="journeepreventionavc">Journée prévention AVC</option>
                        <option value="formationpremierssecours">Formation premiers secours</option>
                        <option value="symposiumdiabetologie">Symposium diabétologie</option>
                        <option value="congrespharmacologie">Congrès pharmacologie</option>
                        <option value="ateliergestiondustress">Atelier gestion du stress</option>
                        <option value="forumsantementale">Forum santé mentale</option>
                        <option value="journeerhumatologie">Journée rhumatologie</option>
                        <option value="conferencepediatrie">Conférence pédiatrie</option>
                        <option value="atelierdermatologie">Atelier dermatologie</option>
                    </select><br><br>

                    <select id="activite8" name="activite8">
                        <option value="choix">Choisissez : </option>
                        <option value="conferencecardiologie">Conférence cardiologie</option>
                        <option value="ateliernutrition">Atelier nutrition</option>
                        <option value="séminaireoncologie">Séminaire oncologie</option>
                        <option value="journeepreventionavc">Journée prévention AVC</option>
                        <option value="formationpremierssecours">Formation premiers secours</option>
                        <option value="symposiumdiabetologie">Symposium diabétologie</option>
                        <option value="congrespharmacologie">Congrès pharmacologie</option>
                        <option value="ateliergestiondustress">Atelier gestion du stress</option>
                        <option value="forumsantementale">Forum santé mentale</option>
                        <option value="journeerhumatologie">Journée rhumatologie</option>
                        <option value="conferencepediatrie">Conférence pédiatrie</option>
                        <option value="atelierdermatologie">Atelier dermatologie</option>
                    </select><br><br>

                    <select id="activite9" name="activite9">
                        <option value="choix">Choisissez : </option>
                        <option value="conferencecardiologie">Conférence cardiologie</option>
                        <option value="ateliernutrition">Atelier nutrition</option>
                        <option value="séminaireoncologie">Séminaire oncologie</option>
                        <option value="journeepreventionavc">Journée prévention AVC</option>
                        <option value="formationpremierssecours">Formation premiers secours</option>
                        <option value="symposiumdiabetologie">Symposium diabétologie</option>
                        <option value="congrespharmacologie">Congrès pharmacologie</option>
                        <option value="ateliergestiondustress">Atelier gestion du stress</option>
                        <option value="forumsantementale">Forum santé mentale</option>
                        <option value="journeerhumatologie">Journée rhumatologie</option>
                        <option value="conferencepediatrie">Conférence pédiatrie</option>
                        <option value="atelierdermatologie">Atelier dermatologie</option>
                    </select><br><br>

                    <select id="activite10" name="activite10">
                        <option value="choix">Choisissez : </option>
                        <option value="conferencecardiologie">Conférence cardiologie</option>
                        <option value="ateliernutrition">Atelier nutrition</option>
                        <option value="séminaireoncologie">Séminaire oncologie</option>
                        <option value="journeepreventionavc">Journée prévention AVC</option>
                        <option value="formationpremierssecours">Formation premiers secours</option>
                        <option value="symposiumdiabetologie">Symposium diabétologie</option>
                        <option value="congrespharmacologie">Congrès pharmacologie</option>
                        <option value="ateliergestiondustress">Atelier gestion du stress</option>
                        <option value="forumsantementale">Forum santé mentale</option>
                        <option value="journeerhumatologie">Journée rhumatologie</option>
                        <option value="conferencepediatrie">Conférence pédiatrie</option>
                        <option value="atelierdermatologie">Atelier dermatologie</option>
                    </select><br><br>

                    <select id="activite11" name="activite11">
                        <option value="choix">Choisissez : </option>
                        <option value="conferencecardiologie">Conférence cardiologie</option>
                        <option value="ateliernutrition">Atelier nutrition</option>
                        <option value="séminaireoncologie">Séminaire oncologie</option>
                        <option value="journeepreventionavc">Journée prévention AVC</option>
                        <option value="formationpremierssecours">Formation premiers secours</option>
                        <option value="symposiumdiabetologie">Symposium diabétologie</option>
                        <option value="congrespharmacologie">Congrès pharmacologie</option>
                        <option value="ateliergestiondustress">Atelier gestion du stress</option>
                        <option value="forumsantementale">Forum santé mentale</option>
                        <option value="journeerhumatologie">Journée rhumatologie</option>
                        <option value="conferencepediatrie">Conférence pédiatrie</option>
                        <option value="atelierdermatologie">Atelier dermatologie</option>
                    </select><br><br>

                    <select id="activite12" name="activite12">
                        <option value="choix">Choisissez : </option>
                        <option value="conferencecardiologie">Conférence cardiologie</option>
                        <option value="ateliernutrition">Atelier nutrition</option>
                        <option value="séminaireoncologie">Séminaire oncologie</option>
                        <option value="journeepreventionavc">Journée prévention AVC</option>
                        <option value="formationpremierssecours">Formation premiers secours</option>
                        <option value="symposiumdiabetologie">Symposium diabétologie</option>
                        <option value="congrespharmacologie">Congrès pharmacologie</option>
                        <option value="ateliergestiondustress">Atelier gestion du stress</option>
                        <option value="forumsantementale">Forum santé mentale</option>
                        <option value="journeerhumatologie">Journée rhumatologie</option>
                        <option value="conferencepediatrie">Conférence pédiatrie</option>
                        <option value="atelierdermatologie">Atelier dermatologie</option>
                    </select><br><br>
                </div>
                <center><input type="submit" value="Envoyer le formulaire"></a></center>
            </fieldset>
        </form>    
    </body>
</html>