<?php
function getDistance($source, $destination) {
    $apiUrl = "https://maps.googleapis.com/maps/api/distancematrix/json?origins=".urlencode($source)."&destinations=".urlencode($destination)."&mode=driving&key=AIzaSyA_umdjHwaK3R9hepK1x6_OUI-VoQCbgMI";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $apiUrl);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $distanceResult = json_decode(curl_exec($ch));
    return array("distance" => $distanceResult->rows[0]->elements[0]->distance->text, "duration" => $distanceResult->rows[0]->elements[0]->duration->text);
}

function calculateFare($distance) {
    return $distance * 15 + 50;
}