<?php
/* 
 * StayZilla hackthon
 * By Team Blackhat
 * 31/01/2015
 * Copy Right Reserved 2015
 */

class StayZillaComparison 
{
    private $distance;
    private $time;
    private $travelling_cost;
    private $travelling_by;
    
    //Get total saving by inputting source and destination address
    public function doCompare($source_address, $destination_address, $city)
    {
        $source_location = $this->get_json_data("location.json");
        $stayzilla_location = $this->get_json_data("stayzilla_location.json");
        $output=array();
        if(isset($source_address) && isset($destination_address))
        {
            foreach( $source_location[0]['location'][$city] as $key=>$value )
            {
                #echo $value["source_address"]."#".$source_address;
                #echo $value["destination_address"]."#".$destination_address;
                #echo strcmp($value["source_address"],$source_address);
                //var_dump($key);
                
               if(strcmp($value["source_address"], $source_address)==0 || strcmp($value["destination_address"], $destination_address)==0)
               {
                   
                $output=array("source_address"=>$source_address,"destination_address"=>$destination_address,"travelling_time"=>$value["travelling_time"],"distance"=>$value["distance"],"fares"=>$value["fares"]);   
                return json_encode($output);
                
               }
               
            }
            
            foreach( $stayzilla_location[0]['location'][$city] as $key=>$value )
            {
                #echo $value["source_address"]."#".$source_address;
                #echo $value["destination_address"]."#".$destination_address;
                #echo strcmp($value["source_address"],$source_address);
                //var_dump($key);
                
               if(strcmp($value["source_address"], $source_address)==0 || strcmp($value["destination_address"], $destination_address)==0)
               {
                   
                $output=array("source_address"=>$source_address,"destination_address"=>$destination_address, "address"=>$value["address"], "price"=> $value["price"],"hotel_name"=>$value["hotel_name"] ,"travelling_time"=>$value["travelling_time"],"distance"=>$value["distance"],"fares"=>$value["fares"]);   
                return json_encode($output);
                
               }
               
            }
            
            /*    
            if( $key->distination_address==$destination_address )
            {
                //hotel_name""
                
            }
            }*/
            //&& $stayzilla_location[0]['location'][$city]['distination_address']==$destination_address
        }
    }
    
    public function get_json_data($data_file)
    {
        $string = file_get_contents($data_file);
        return json_decode($string,true);
        
    }
   
    
}

$testObject=new StayZillaComparison();
//var_dump($testObject->get_data());
$source_address='Jeevanbhima Nagar';
$destination_address='Outer ring road';
$city='bangalore';
echo $testObject->doCompare($source_address, $destination_address, $city);
