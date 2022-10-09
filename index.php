<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php 

require_once 'car.php';

$peugeot = new Car ("Red", 5, "Diesel");


echo $peugeot->start();
echo '<br> Vitesse de la voiture : ' . $peugeot->getCurrentSpeed() . ' km/h' . '<br>';
echo $peugeot->forward();
echo '<br> Vitesse de la voiture : ' . $peugeot->getCurrentSpeed() . ' km/h' . '<br>';
echo $peugeot->brake();
echo '<br> Vitesse de la voiture : ' . $peugeot->getCurrentSpeed() . ' km/h' . '<br>';







?>


</body>
</html>