<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $city = new stdClass();
        
        $destinationDetail = new stdClass();
        $destinationDetail->name = "Wonderla Amusement Park";
        $destinationDetail->longitude = "12.9667";
        $destinationDetail->latitude = "77.5667";
        $destinationDetail->description = "Activities for older children, Activities for young children";
        
        $destinationArray = array();
        array_push($destinationArray, $destinationDetail);
        
        $eventDetail = new stdClass();
        $eventDetail->name = "Bangalore International Exhibition Centre";
        $eventDetail->description = "Exhibition and Conference facilities at BIEC are first of its kind in India which offer services and amenities of the highest quality at par with international standards. This complex, created with only one purpose - to make it a preferred destination for international business exhibitions, trade fairs, congresses, international conferences, seminars and training programmes in India.";
        $eventDetail->location = "Dasanapura Hobli";
        $eventDetail->phone = "080662 46600";
        
        $eventsArray = array();
        array_push($eventsArray, $eventDetail);
        
        $resturantDetail = new stdClass();
        $resturantDetail->name = "WOODSTOK";
        $resturantDetail->description = "BUSINESS DINING / LARGE GROUP FRIENDLY";
        $resturantDetail->location = "Indiranagar";
        $resturantDetail->phone = "09686191998";
        $resturantDetail->cuisine = "Mexican, Italian, Oriental";
        
        $restaurantArray = array();
        array_push($restaurantArray, $resturantDetail);
        
        $cityEvents = new stdClass();
        $cityEvents->events = $eventsArray;
        $cityEvents->Destination = $destinationArray;
        $cityEvents->Restaurant = $restaurantArray;
        $city->Bangalore = $cityEvents;
        
        $city = json_encode($city);
        
        $myfile = fopen("locationData.txt", "w") or die("Unable to open file!");
        fwrite($myfile, $city);
        fclose($myfile);
        
        //Append Date to the file...
        //file_put_contents('locationData.txt', $city, FILE_APPEND | LOCK_EX);
        
        echo file_get_contents("locationData.txt");
        ?>
    </body>
</html>
