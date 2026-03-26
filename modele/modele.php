<?php
//POST pour medicament et activité
//On commencera avec MEDICAMENT
function insertMed($comp, $nom, $eff_therap, $eff_sec, $autre, $interd, $recom){
    $url = 'http://127.0.0.1/API/getMeds.php';
    $data = array('composition' => $comp, 'nom' => $nom, 'effets_therapeutiques' => $eff_therap, 'effets_secondaires' => $eff_sec, 'interaction_avec_autre_medicament' => $autre, 'interdiction' => $interd, 'recommendation' => $recom);

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
    $url = 'http://127.0.0.1/API/getMeds.php';
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






















?>