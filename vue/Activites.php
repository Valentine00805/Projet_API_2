<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Les activités de GSB</title>
        <link rel="stylesheet" href="Style.css">
        <link rel="icon" href="Logo.jpg">
        <meta name="description" content="Les activites que GSB organise">
        <style>
            .activites-container {
                display: grid;
                grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
                gap: 20px;
                padding: 20px;
                background-color: #f5f5f5;
            }
            .activite-card {
                background: white;
                border-radius: 8px;
                overflow: hidden;
                box-shadow: 0 2px 8px rgba(0,0,0,0.1);
                transition: transform 0.3s ease;
            }
            .activite-card:hover {
                transform: translateY(-5px);
                box-shadow: 0 4px 12px rgba(0,0,0,0.15);
            }
            .activite-image {
                width: 100%;
                height: 250px;
                object-fit: cover;
                background-color: #e0e0e0;
            }
            .activite-content {
                padding: 20px;
            }
            .activite-content h2 {
                margin: 0 0 10px 0;
                color: #d4337d;
                font-size: 1.3em;
            }
            .activite-content p {
                margin: 8px 0;
                color: #555;
                font-size: 0.95em;
            }
            .activite-label {
                font-weight: bold;
                color: #333;
            }
            .no-activities {
                grid-column: 1 / -1;
                text-align: center;
                padding: 40px;
                color: #999;
            }
        </style>
    </head>
    <body>
        <?php require_once __DIR__ . "/../modele/modele.php";?>
        <?php require "menu.php";?>

        <div class="activites-container">
            <?php
            // Si $activite n'est pas déjà injectée par le contrôleur, on la récupère
            if (!isset($activite)) {
                $activite = selectActivite();
            }
            $string_decode = json_decode($activite, true);
            
            // DEBUG : Voir le résultat du json_decode
            if (json_last_error() !== JSON_ERROR_NONE) {
                echo '<div class="no-activities"><p>Erreur JSON: ' . json_last_error_msg() . '</p></div>';
                echo '<pre>Données reçues: ' . htmlspecialchars($activite) . '</pre>';
            }
            
            if (!is_array($string_decode)) {
                $string_decode = array();
            }

            if (count($string_decode) === 0) {
                echo '<div class="no-activities"><p>Aucune activité trouvée.</p></div>';
            } else {
                foreach ($string_decode as $item) {
                    $nomActivite = htmlspecialchars($item["nomA"] ?? 'Nom inconnu');
                    $idActivite = isset($item["id"]) ? intval($item["id"]) : (isset($item["ida"]) ? intval($item["ida"]) : 0);
                    // Utilise le champ image s'il existe, sinon crée un nom basé sur l'id
                    $imageFile = isset($item["image"]) ? htmlspecialchars($item["image"]) : 'default.jpg';
                    $imagePath = 'imgAct/' . $imageFile;
                    
                    echo '<div class="activite-card">';
                    echo '    <img src="' . $imagePath . '" alt="' . $nomActivite . '" class="activite-image" onerror="this.src=\'imgAct/default.jpg\'">';
                    echo '    <div class="activite-content">';
                    echo '        <h2>' . $nomActivite . '</h2>';
                    echo '        <p><span class="activite-label">Date :</span> ' . htmlspecialchars($item["dateA"] ?? 'Non précisée') . '</p>';
                    echo '        <p><span class="activite-label">Lieu :</span> ' . htmlspecialchars($item["lieu"] ?? 'Non précisé') . '</p>';
                    echo '        <p><span class="activite-label">Participants :</span> ' . htmlspecialchars($item["nb_participant"] ?? '0') . '</p>';
                    echo '        <p><span class="activite-label">Description :</span> ' . htmlspecialchars($item["description_activite"] ?? 'Aucune description') . '</p>';
                    echo '        <a href="Formulaire_inscription.php?id=' . intval($idActivite) . '&name=' . urlencode($nomActivite) . '" style="display: inline-block; margin-top: 15px; padding: 10px 20px; background-color: #d4337d; color: white; text-decoration: none; border-radius: 4px; font-weight: bold; transition: background-color 0.3s ease;" onmouseover="this.style.backgroundColor=\'#b8235f\'" onmouseout="this.style.backgroundColor=\'#d4337d\'">';
                    echo 'S\'inscrire à cette activité';
                    echo '</a>';
                    echo '    </div>';
                    echo '</div>';
                }
            }
            ?>
        </div>
    </body>
</html>
