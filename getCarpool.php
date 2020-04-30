<?php
$curl = curl_init();
$query = http_build_query(["date" => date('d-m-Y H\Hi')]);
curl_setopt($curl, CURLOPT_URL, "http://localhost:8080/Carpool/api?".$query);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
$response = curl_exec($curl);
curl_close($curl);

header("Location: http://localhost/carpool?result=".$response); # auto back home

