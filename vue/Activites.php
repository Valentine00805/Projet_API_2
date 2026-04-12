<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Les activités de GSB</title>
        <link rel="stylesheet" href="Style.css">
        <link rel="icon" href="Logo/logo_fini1.png">
        <meta name="description" content="Les activites que GSB organise">
    </head>
    <body>
        <?php require "../API/db_connect.php";
        require "../modele/modele.php"; 
        require "menu.php";?>


<?php
$activite = selectActivite(); // ou la valeur JSON venant de ton API
$string_decode = json_decode($activite, true);
if (!is_array($string_decode)) {
    $string_decode = array();
}

if (count($string_decode) === 0) {
    echo '<p>Aucune activité trouvée.</p>';
} else {
    foreach ($string_decode as $item) {
        echo '<h2>'.htmlspecialchars($item["nomA"] ?? 'Nom inconnu').'</h2>';
        echo '<p>Date : '.htmlspecialchars($item["dateA"] ?? 'Non précisée').'</p>';
        echo '<p>Lieu : '.htmlspecialchars($item["lieu"] ?? 'Non précisé').'</p>';
        echo '<p>Participants : '.htmlspecialchars($item["nb_participant"] ?? '0').'</p>';
        echo '<p>Description : '.htmlspecialchars($item["description_activite"] ?? 'Aucune description').'</p>';
        echo '<hr>';
    }
}

?>
    </body>
</html>
