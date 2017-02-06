<?php
header('Access-Control-Allow-Origin:*');

// require the Faker autoloader
require_once './vendor/autoload.php';

// use the factory to create a Faker\Generator instance
$faker = Faker\Factory::create();


$people = array();


for ($i=0; $i < 7; $i++) {
$randomarray =  array(
    "photo" => $faker->imageUrl($width=60, $height=60, 'cats', true, 'Faker', true),
  "firstName" => $faker->name,
  "pseudo" => '@'.$faker->userName,
  "tweet" => $faker->realText,
  "likes" => $faker->randomDigit.' likes',
);
array_push($people,$randomarray);
}

$JSONArray = json_encode($people);

echo $JSONArray;
?>
