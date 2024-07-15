<?php

require 'FizzBuzz.php';
$fizzbuzz = new FizzBuzz();

echo "Introduce un número hasta el que se calculará FizzBuzz: ";
$number = intval(readline());
foreach ($fizzbuzz->execute($number) as $line) {
    echo $line."\n";
}