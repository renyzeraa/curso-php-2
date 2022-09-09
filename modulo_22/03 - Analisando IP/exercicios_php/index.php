<?php
include("geoiploc.php");
// this is where you get the ip
$ip = '189.4.106.193';
// this is where you include the code that gets the country
// you can find the code for this file on the link below    
$country_code = getCountryFromIP($ip, "code");
// this is where you create the variable that get you the name of the country
$country = getCountryFromIP($ip, "name");

echo $country_code;

?>