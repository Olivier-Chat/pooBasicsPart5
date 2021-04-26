<?php
require 'Car.php';
$auto = new Car('red',4,'fuel');
try{
    $auto->start();
}
catch (Exception $e){
    echo ($e->getMessage()) . PHP_EOL;
    $auto->setParkBrake();
}
finally{
    echo 'Ma voiture roule comme un donut' . PHP_EOL;
}
