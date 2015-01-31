<?php 
//$source 
//$destination

//Calcualte distance, time 
//Calcuate fare
//return 
//hotel price

include("geo_calculator.php");

$source = $_GET['usersource'];
$destination = $_GET['destination'];
getSaving($source, $destination);
function getSaving($source, $destination){
    $data = getDistance($source, $destination);
    $fare = calculateFare($data["distance"]);
    $duration = minToHours(calculateDuration($data["distance"]));
    
    $start_date = "06/03/2015";
    $end_date = "09/03/2015";
    $hotelPrice = getStayzillahotel($destination, $start_date, $end_date);
    $Price = $hotelPrice->hotels[0]->price;
    $stayzillaSource = $hotelPrice->hotels[0]->address;
    
    $data_User = array("distance" => $data["distance"], "duration" => $duration, 
        "cabFare" => $fare);
    
    $stayzillaData = getDistance($stayzillaSource, $destination);
    $stayzillafare = calculateFare($stayzillaData["distance"]);
    $stayzillaDuration = minToHours(calculateDuration($stayzillaData["distance"]));
    
    $data_stayzilla = array("distance" => $stayzillaData["distance"], "duration" => $stayzillaDuration, 
        "cabFare" => $stayzillafare, "hotelFare" => $Price, "hotelData" => $hotelPrice->hotels[0]);
    
    $responceData = array();
    $responceData["user"] = $data_User;
    $responceData["stayzilla"] = $data_stayzilla;
    
    return json_encode($responceData);
}
?>