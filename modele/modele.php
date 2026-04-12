<?php
//POST pour medicament et activité
//On commencera avec MEDICAMENT
require_once __DIR__ . "/../API/db_connect.php";
function insertIns($nom, $prenom, $email, $date_naissance, $adresse, $telephone, $ida){
    global $conn;
    $ida = intval($ida);

    if ($ida <= 0) {
        return false;
    }

    $query = "INSERT INTO inscrit (nom, prenom, email, date_naissance, adresse, telephone, ida) VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($query);
    $stmt->execute([$nom, $prenom, $email, $date_naissance, $adresse, $telephone, $ida]);

    return $stmt->rowCount() > 0;
}

// function selectMed(){
//     $url = 'http://127.0.0.1/Projet_API_2/API/getMeds.php';
//     $options = array(
//         'http' => array(
//             'header' => "Content-type: application/x-www-form-urlencoded\r\n",
//             'method' => 'GET',
//             'content' => http_build_query($data)
//         )
//     );
//     $context = stream_context_create($options);
//     $result = file_get_contents($url, false, $context);
//     Return $result;
// }
function selectMed() {
    global $conn;
    $query = "SELECT * FROM medicament";
    $response = array();
    
    $conn->query("SET NAMES utf8");
    $result = $conn->query($query);
    
    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        $response[] = $row;
    }
    
    return json_encode($response, JSON_PRETTY_PRINT);
}

// function selectActivite() { 
//     $url = "http://127.0.0.1/Projet_API_2/API/getActivite.php";
//     $options = array( 
//         'http' => array( 
//             'header' => "Content-Type: application/x-www-form-urlencoded\r\n", 
//             'method' => 'GET'
//         ) 
//     ); 
//     $context = stream_context_create($options); 
//     $activite = file_get_contents($url, false, $context); 
//     if ($activite === false) {
//         return '[]';
//     }
//     return $activite; 
// }
function selectActivite() {
    global $conn;
    $query = "SELECT * FROM activite";
    $response = array();
    
    $conn->query("SET NAMES utf8");
    $result = $conn->query($query);
    
    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        $response[] = $row;
    }
    
    return json_encode($response, JSON_PRETTY_PRINT);
}
?>