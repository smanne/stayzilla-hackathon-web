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
        $destinationDetail = new stdClass();
        $destinationDetail->name = "Wonderla Amusement Park";
        $destinationDetail->longitude = "77.401639499999990000";
        $destinationDetail->latitude = "12.835093000000000000";
        $destinationDetail->description = "Activities for older children, Activities for young children";
        
        $destinationDetail1 = new stdClass();
        $destinationDetail1->name = "Fever Pitch Basecamp";
        $destinationDetail1->longitude = "77.317908300000000000";
        $destinationDetail1->latitude = "12.916965400000000000";
        $destinationDetail1->description = "Fever Pitch Basecamp is an initiative by Travel and Tourism students to bring people close to Nature using Sustainable Tourism Concept.Fever Pitch Basecamp is the Bangalore's first jungle and adventure camp-site which gives an authentic camping experience to its visitors. Primarily targeted at Corporate Groups, fever pitch is also open for families and friends. Fever pitch is a perfect destination camping resort with activities like watersports, paintball,Dirtbiking,adventure and team activities. Located amidst the forest and in the banks of Manchanbele dam, fever pitch is a perfect getaway for one day and two day outings.About 35 km from bangalore off magadi road, fever pitch is easily accessable through road. Campfire, cooking, fishing and you name them and it is all possible at feverpitch. What are you waiting for? Head towards feverpitch and experience the best of the camping.";
        
        $destinationDetail2 = new stdClass();
        $destinationDetail2->name = "Basavanagudi";
        $destinationDetail2->longitude = "77.574837600000020000";
        $destinationDetail2->latitude = "12.942230400000000000";
        $destinationDetail2->description = "Basavangudi is one of the few areas in Bangalore that have retained its old-world charm. A residential area with quaint homes, leafy roads, markets and temples, a walk here can take you back in time. Always buzzing with activity, Basavanagudi buzzes even more feverishly before festivals. There are numerous restaurants here, some institutions in themselves. This is a good place to feast on idlis (savory cake), dosas (savory pancakes) and the famous filter kaapi (coffee).";
        
        $destinationDetail3 = new stdClass();
        $destinationDetail3->name = "Malleswaram";
        $destinationDetail3->longitude = "77.564292799999980000";
        $destinationDetail3->latitude = "13.003062400000000000";
        $destinationDetail3->description = "Malleswaram, that bastion of Tamilians in Bangalore, is another locale that is a whole world away from India’s silicon city. Watch maamis in their kanjeevarams haggle in the market, visit a temple or two, eat local food and browse through small shops. The Kaadu Malleswara Temple and Sankey Tank are oases of calm amid the bustle. A new arrival on the scene is the incongruous Mantri Mall, much reviled for being the harbinger of modernization in Malleswaram.";
        
        $destinationDetail4 = new stdClass();
        $destinationDetail4->name = "Infant Jesus Shrine";
        $destinationDetail4->longitude = "77.618741600000020000";
        $destinationDetail4->latitude = "12.953744300000000000";
        $destinationDetail4->description = "Infant Jesus Shrine, Bangalore, India";
        
        $destinationArray = array($destinationDetail, $destinationDetail1, $destinationDetail2, $destinationDetail3, $destinationDetail4);
        
        $eventDetail = new stdClass();
        $eventDetail->name = "Macbeth";
        $eventDetail->description = "A Tragic Play By William Shakespeare";
        $eventDetail->location = "Dasanapura Hobli";
        $eventDetail->phone = "83240 33212";
        $eventDetail->startdate = "01 Feb, 2015";
        $eventDetail->enddate = "05 Feb, 2015";
        
        $eventDetail1 = new stdClass();
        $eventDetail1->name = "Musical Night";
        $eventDetail1->description = "By Sonu Ligam";
        $eventDetail1->location = "M G Road";
        $eventDetail1->phone = "38293 12199";
        $eventDetail1->startdate = "01 Feb, 2015";
        $eventDetail1->enddate = "09 Feb, 2015";
        
        $eventDetail2 = new stdClass();
        $eventDetail2->name = "India Bike Week on Tour";
        $eventDetail2->description = "Music bands and DJs.";
        $eventDetail2->location = "Jay Nagar";
        $eventDetail2->phone = "21231 19093";
        $eventDetail2->startdate = "03 Feb, 2015";
        $eventDetail2->enddate = "25 Feb, 2015";
        
        $eventDetail3 = new stdClass();
        $eventDetail3->name = "Southside Smartasses";
        $eventDetail3->description = "By Satish Perumal, Sundeep Rao, Tushar Singh";
        $eventDetail3->location = "Cunningham Road, ";
        $eventDetail3->phone = "12323 91231";
        $eventDetail3->startdate = "01 Feb, 2015";
        $eventDetail3->enddate = "05 Feb, 2015";
        
        $eventDetail4 = new stdClass();
        $eventDetail4->name = "One Day Workshop on Stock Markets";
        $eventDetail4->description = "This workshop shall cover the basics of the Stock Market; Common Sense Approach, Basics of Fundamentals And Technical Analysis along with 3 Innovative Types of Live Trading.";
        $eventDetail4->location = "Bellandur";
        $eventDetail4->phone = "32433 32823";
        $eventDetail4->startdate = "01 Feb, 2015";
        $eventDetail4->enddate = "05 Feb, 2015";
        
        $eventsArray = array($eventDetail, $eventDetail1, $eventDetail2, $eventDetail3, $eventDetail4);
        
        $resturantDetail = new stdClass();
        $resturantDetail->name = "WOODSTOK";
        $resturantDetail->description = "BUSINESS DINING / LARGE GROUP FRIENDLY";
        $resturantDetail->location = "Indiranagar";
        $resturantDetail->phone = "09686191998";
        $resturantDetail->cuisine = "Mexican, Italian, Oriental";
        
        $resturantDetail1 = new stdClass();
        $resturantDetail1->name = "THE EGG FACTORY";
        $resturantDetail1->description = "AIR CONDITIONED / TAKE AWAY";
        $resturantDetail1->location = "St. Marks Road";
        $resturantDetail1->phone = "08042110041";
        $resturantDetail1->cuisine = "Multi-cuisine";
        
        $resturantDetail2 = new stdClass();
        $resturantDetail2->name = "UMERKOT";
        $resturantDetail2->description = "LARGE GROUP FRIENDLY / NOTABLE BEER LIST";
        $resturantDetail2->location = "Koramangala";
        $resturantDetail2->phone = "08041552224";
        $resturantDetail2->cuisine = "Mughlai, North Indian";
        
        $resturantDetail3 = new stdClass();
        $resturantDetail3->name = "LITTLE ITALY";
        $resturantDetail3->description = "HOME DELIVERY / KID FRIENDLY";
        $resturantDetail3->location = "Koramangala";
        $resturantDetail3->phone = "08041114034, 08041215709";
        $resturantDetail3->cuisine = "Mexican, Italian";
        
        $resturantDetail4 = new stdClass();
        $resturantDetail4->name = "VEEKES AND THOMAS";
        $resturantDetail4->description = "BUSINESS DINING / LATE NIGHT EATS";
        $resturantDetail4->location = "JP Nagar";
        $resturantDetail4->phone = "08065329999, +919686178000";
        $resturantDetail4->cuisine = "Continental, European, Italian";
        
        $restaurantArray = array($resturantDetail, $resturantDetail1, $resturantDetail2, $resturantDetail3, $resturantDetail4);
        
        $cityEvents = new stdClass();
        $cityEvents->events = $eventsArray;
        $cityEvents->Destination = $destinationArray;
        $cityEvents->Restaurant = $restaurantArray;
        
        $cityEvents = json_encode($cityEvents);
        
        $myfile = fopen("locationData.txt", "w") or die("Unable to open file!");
        fwrite($myfile, $cityEvents);
        fclose($myfile);
        
        //Append Date to the file...
        //file_put_contents('locationData.txt', $city, FILE_APPEND | LOCK_EX);
        
        echo file_get_contents("locationData.txt");
        ?>
    </body>
</html>
