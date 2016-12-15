<?php
require_once __DIR__.'/vendor/autoload.php';
use DCzaicka\Jokes\OpenJokeApi;

$http = new \GuzzleHttp\Client();
$api = new OpenJokeApi($http);
$joke = $api->getRandomJoke();

echo sprintf(
  "Joke is %s\n",
  $joke
);
 
