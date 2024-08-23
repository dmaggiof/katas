### Fizz Buzz
Write a function that outputs the string representation of numbers from 1 to n. But for multiples of three it should output “Fizz” instead of the number and for the multiples of five output “Buzz”. 

For numbers which are multiples of both three and five output “FizzBuzz”.

Example:
Input: n = 15
Output:
[
"1",
"2",
"Fizz",
"4",
"Buzz",
"Fizz",
"7",
"8",
"Fizz",
"Buzz",
"11",
"Fizz",
"13",
"14",
"FizzBuzz"
]


### Solution
We can execute in the command line the script cliExecution.php, which will ask the user for a number:
```
kata01$ php cliExecution.php
Introduce un número hasta el que se calculará FizzBuzz: 7
1
2
Fizz
4
Buzz
Fizz
7
```

We can also review and execute the tests from the file FizzBuzzTest.php with the following command:

```
kata01$ php vendor/bin/phpunit FizzbuzzTest.php  --testdox
PHPUnit 11.2.7 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.3.7

.....                                                               5 / 5 (100%)

Time: 00:00.004, Memory: 8.00 MB

Fizz Buzz
 ✔ It should return number one
 ✔ It should return fizz word
 ✔ It should return buzz word
 ✔ It should return fizz buzz word
 ✔ Test different expected numbers

OK (5 tests, 17 assertions)

```

