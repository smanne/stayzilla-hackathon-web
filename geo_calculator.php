getDistance("Bellandur Lake, Bengaluru, Karnataka", "HSR Layout, Bengaluru, Karnataka, India");

function getDistance($source, $destination) {
    $apiUrl = "https://maps.googleapis.com/maps/api/distancematrix/json?origins=".$source."&destinations=".$destination."&mode=driving&key=AIzaSyA_umdjHwaK3R9hepK1x6_OUI-VoQCbgMI";
    var_dump(file_get_contents($apiUrl)); die;
}