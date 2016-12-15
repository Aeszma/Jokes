<?php

#echo 'Hello '.$_GET['city'];
$city = $_GET['city'];

require_once __DIR__.'/vendor/autoload.php';
use DCzaicka\Weather\OpenWeatherApi;

$http = new \GuzzleHttp\Client();
$api = new OpenWeatherApi($http, 'af319cd969dff7d8c42768f6f0d8c979');
?>

<html>
<body>
<br>
<h1> Temperature in
<?php
echo sprintf(
  "Teperature in %s is %s Celsius\n",
  $argv[1],
  $api->getCityTemperature($city)
);
 ?>
 </h1>
 </body>
</html>