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

function calculateDuration($distance) {
    return $distance * 4 + 10;
}

function minToHours($mins) { 
    $mm = $mins;
    $hr = floor($mm/60);
    if($hr != '00'){
        return sprintf("%02dh %02dmin", floor($mm/60), $mm%60);
    }else{
        return sprintf("%02dmin", $mm%60);
    }
    } 

function getStayzillahotel($destination_address, $start_date, $end_date) {
        $url = 'http://180.92.168.7/hotels';
        $fields = array(
            'location' => urlencode($destination_address),
            'checkin' => urlencode($start_date),
            'checkout' => urlencode($end_date),
            'property_type' => "Hotels",
        );

//url-ify the data for the POST
        foreach ($fields as $key => $value) {
            $fields_string .= $key . '=' . $value . '&';
        }
        rtrim($fields_string, '&');

//open connection
        $ch = curl_init();
        $agent= 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; .NET CLR 1.0.3705; .NET CLR 1.1.4322)';

//set the url, number of POST vars, POST data
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded')); 
        curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);    
        curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_USERAGENT, $agent);
    
// receive server response ...
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
//execute post
        $result = curl_exec($ch);
        $result = json_decode($result);
        return $result;
//close connection
        curl_close($ch);
    }