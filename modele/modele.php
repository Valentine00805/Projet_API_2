<?php
//POST pour medicament et activité
//On commencera avec MEDICAMENT
function insertIns($nom, $prenom, $email, $date_naissance, $adresse, $telephone, $ida){
    $url = 'http://127.0.0.1/Projet_API_2/API/getInscrit.php';
    $data = array( 'nom' => $nom, 'prenom' => $prenom, 'email' => $email,'date_naissance' => $date_naissance, 'adresse' => $adresse, 'telephone' => $telephone, 'ida' => $ida);

    $options = array(
        'http' => array(
            'header' => "Content-type: application/x-www-form-urlencoded\r\n",
            'method' => 'POST',
            'content' => http_build_query($data)
        )
    );
    $context = stream_context_create($options);
    $result = file_get_contents($url, false, $context);
    Return $result;
}

function selectMed(){
    $url = 'http://127.0.0.1/Projet_API_2/API/getMeds.php';
    $options = array(
        'http' => array(
            'header' => "Content-type: application/x-www-form-urlencoded\r\n",
            'method' => 'GET',
            'content' => http_build_query($data)
        )
    );
    $context = stream_context_create($options);
    $result = file_get_contents($url, false, $context);
    Return $result;
}

function selectActivite() { 
    $url = "http://127.0.0.1/Projet_API_2/API/getActivite.php";
    $options = array( 
        'http' => array( 
            'header' => "Content-Type: application/x-www-form-urlencoded\r\n", 
            'method' => 'GET'
        ) 
    ); 
    $context = stream_context_create($options); 
    $activite = file_get_contents($url, false, $context); 
    if ($activite === false) {
        return '[]';
    }
    return $activite; 
}
?>




















?>