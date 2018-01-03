<?php

$trip_name = $_POST["trip_name"];
$trip_location = $_POST["trip_location"];
$trip_gear = $_POST["trip_gear"];


echo "<pre>";
$trip_body = "";
$trip_body .= "Trip name: " . $trip_name . "\n";
$trip_body .= "trip Location: " . $trip_location . "\n";
$trip_body .= "trip Gear: " . $trip_gear . "\n";
echo $trip_body;
echo "</pre>";

 ?>
