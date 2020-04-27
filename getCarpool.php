<?php
/*$curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, "http://localhost:8080/Agenda/api/event");
    $response = curl_exec($curl);
    $header_size = curl_getinfo($curl, CURLINFO_HEADER_SIZE);
    $header_string = substr($response, 0, $header_size);
    $body = substr($response, $header_size);
    echo $body;
    curl_close($curl);*/

$result = "Louis peut prendre la voiture de Marie pour venir et la voiture de Jean pour revenir de l'école";
header("Location: http://localhost/carpool?result=".$result); # auto back home

