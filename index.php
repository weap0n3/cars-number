<?php

require 'vendor/autoload.php';

use Weap0n3\CarsNumber\CarsNumber;
$carsNumber = new CarsNumber();

echo $carsNumber->getCity("HA 123AB");