<?php

//$car = arraY("toyota","honda","isuzu");
$car = ["toyota","honda","isuzu"];
print_r($car);
echo '<hr>';

$count_car= count ($car);

echo $count_car; 
echo '<hr>';

for ($x = 0; $x <count($count_car); $x++){
    echo $car[$x].'<br>';
}

