<?php
include('header.php');
require("connect-dbse.php");

/* read quake ml file and insert data into database */

$xml = simplexml_load_file('XML/all_week.quakeml') or die("could not load file");
$count = count($xml->eventParameters->event);
echo "earthquakes in file: ".$count."</br>";
//var_dump($xml);

$i = 0;
$cnt = 0;

while ($cnt != $count) {
    foreach ($xml->eventParameters->event[$i]->magnitude->mag as $mag) {
        foreach ($xml->eventParameters->event[$i]->magnitude as $info) {
            foreach ($xml->eventParameters->event[$i]->origin as $information) {
                $time = $information->time->value;
                $latitude = $information->latitude->value;
                $longitude = $information->longitude->value;
                $depth = $information->depth->value;
                $magnitude = $mag->value;
                $magnitudeType = $info->type;

                echo "Time: " . $time . "</br>";
                echo "Lat: " . $latitude . "</br>";
                echo "Long: " . $longitude . "</br>";
                echo "Depth: " . $depth . "</br>";
                echo "Mag: " . $magnitude . "</br>";
                echo "Mag Type: " . $magnitudeType . "</br>";

                $query_insert = "INSERT INTO e_details(E_time, latitude, longitude, depth, magnitude, mag_type) VALUES ('$time','$latitude','$longitude', '$depth', '$magnitude', '$magnitudeType')";
                $result = mysqli_query($connection, $query_insert);
            }
            $i++;
        }
    }
    $cnt++;
}
echo "success";


?>


