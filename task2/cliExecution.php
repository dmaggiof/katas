<?php
require 'ConsecutiveNumber.php';
echo "Introduce numeros separados por espacios: ";
$numbersCli = readline();
$numbers = explode(' ', $numbersCli);

$service = new ConsecutiveNumber();
$longestSequence= $service->execute($numbers);
echo $longestSequence.PHP_EOL;
