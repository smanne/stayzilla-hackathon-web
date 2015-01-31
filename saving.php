<?php

/*
 * StayZilla hackthon
 * By Team Blackhat
 * 31/01/2015
 * Copy Right Reserved 2015
 */

class StayZillaComparison {

    private $distance;
    private $time;
    private $travelling_cost;
    private $travelling_by;

    //Get total saving by inputting source and destination address
    public function doCompare($source_address, $destination_address, $city) {
        $source_location = $this->get_json_data("location.json");
        $stayzilla_location = $this->get_json_data("stayzilla_location.json");
        $output = array();
        if (isset($source_address) && isset($destination_address)) {
            foreach ($source_location[0]['location'][$city] as $key => $value) {
                #echo $value["source_address"]."#".$source_address;
                #echo $value["destination_address"]."#".$destination_address;
                #echo strcmp($value["source_address"],$source_address);
                //var_dump($key);

                if (strcmp($value["source_address"], $source_address) == 0 || strcmp($value["destination_address"], $destination_address) == 0) {

                    $output = array("source_address" => $source_address, "destination_address" => $destination_address, "travelling_time" => $value["travelling_time"], "distance" => $value["distance"], "fares" => $value["fares"]);
                    return json_encode($output);
                }
            }

            foreach ($stayzilla_location[0]['location'][$city] as $key => $value) {
                #echo $value["source_address"]."#".$source_address;
                #echo $value["destination_address"]."#".$destination_address;
                #echo strcmp($value["source_address"],$source_address);
                //var_dump($key);

                if (strcmp($value["source_address"], $source_address) == 0 || strcmp($value["destination_address"], $destination_address) == 0) {

                    $output = array("source_address" => $source_address, "destination_address" => $destination_address, "address" => $value["address"], "price" => $value["price"], "hotel_name" => $value["hotel_name"], "travelling_time" => $value["travelling_time"], "distance" => $value["distance"], "fares" => $value["fares"]);
                    return json_encode($output);
                }
            }

            /*
              if( $key->distination_address==$destination_address )
              {
              //hotel_name""

              }
              } */
            //&& $stayzilla_location[0]['location'][$city]['distination_address']==$destination_address
        }
    }

    public function getStayzillahotel($lat, $lng, $start_date, $end_date) {
        $url = 'http://180.92.168.7/hotels';
        $fields = array(
            
            'checkin' => urlencode($start_date),
            'checkout' => urlencode($end_date),
            'property_type'=>'Hotels',
            'lat'=>$lat,
            'lng'=>$lng
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
        print_r($result);
//close connection
        curl_close($ch);
    }

    public function get_json_data($data_file) {
        $string = file_get_contents($data_file);
        return json_decode($string, true);
    }

}

$testObject = new StayZillaComparison();
//var_dump($testObject->get_data());
$source_address = 'Jeevanbhima Nagar';
$destination_address = 'indira nagar, bangalore';
$city = 'bangalore';
echo $testObject->doCompare($source_address, $destination_address, $city);
$start_date='06/03/2015';
$end_date='09/03/2015';
$lat='11.41';
$lng='76.70';

echo $testObject->getStayzillahotel($lat,$lng, $start_date, $end_date);
