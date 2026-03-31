<?php
//POST pour medicament et activité
//On commencera avec MEDICAMENT
function selectMed(){
    $url = 'http://127.0.0.1/API/getMeds.php';
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






















?>