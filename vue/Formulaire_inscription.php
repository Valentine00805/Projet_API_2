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
        <?php if (isset($_GET['success']) && $_GET['success'] == 1) { ?>
            <div style="background-color: #d4edda; color: #155724; padding: 10px; border-radius: 4px; margin-bottom: 15px; border: 1px solid #c3e6cb;">
                <strong>Succès !</strong> Votre inscription a été enregistrée avec succès.
            </div>
        <?php } elseif (isset($_GET['error']) && $_GET['error'] == 1) { ?>
            <div style="background-color: #f8d7da; color: #842029; padding: 10px; border-radius: 4px; margin-bottom: 15px; border: 1px solid #f5c2c7;">
                <strong>Erreur :</strong> Vous devez sélectionner une activité valide avant de vous inscrire.
            </div>
        <?php } ?>
        <form action="../Index.php" method="post"> 
            <fieldset>
                <legend><strong>Formulaire d'inscription : </strong></legend>
                <?php 
                    $ida = isset($_GET['id']) ? intval($_GET['id']) : 0;
                    $activiteName = isset($_GET['name']) ? htmlspecialchars($_GET['name']) : 'Non spécifiée';
                ?>
                <input type="hidden" name="ida" value="<?php echo $ida; ?>">
                <?php if ($ida > 0) { ?>
                    <p style="background-color: #e3f2fd; padding: 10px; border-radius: 4px; margin-bottom: 15px;">
                        <strong>Activité sélectionnée : </strong><?php echo $activiteName; ?>
                    </p>
                <?php } ?>
                <div>
                    <ul>
                        <li>
                            <label for="nom">Nom</label>
                            <textarea id="nom" name="nom" placeholder="Champ à remplir"></textarea><br>
                        </li>
                        <li>
                            <label for="prenom">Prénom</label>
                            <textarea id="prenom" name="prenom" placeholder="Champ à remplir"></textarea><br>
                        </li>
                        <li>
                            <label for="date_naissance">Date de naissance :</label>
                            <input type="date" id="date_naissance" name="date_naissance">
                        </li>
                        <li>
                            <label for="email">Email :</label>
                            <input type="email" id="email" name="email" placeholder="Entrez votre email"><br><br>
                        </li>
                        <li>
                            <label for="telephone">Téléphone :</label>
                            <input type="tel" id="telephone" name="telephone" placeholder="Entrez votre téléphone"><br><br>
                        </li>
                        <li>
                            <label for="adresse">Adresse :</label>
                            <textarea id="adresse" name="adresse" placeholder="Champ à remplir"></textarea><br>
                        </li>
                        <li>
                            <label for="activite-selected"><strong>Activité sélectionnée :</strong></label>
                            <div id="activite-selected" style="background-color: #f0f0f0; padding: 10px; border-radius: 4px; border-left: 4px solid #d4337d; margin-top: 5px;">
                                <strong><?php echo $activiteName; ?></strong>
                            </div>
                        </li>
                    </ul>
                </div>
                <center><input type="submit" name="actionIns" value="S'inscrire"></center>
            </fieldset>
        </form>    
    </body>
    <footer>
    <br><br>
    <?php require "menu_mention_legal.php";?>
  </footer>
</html>