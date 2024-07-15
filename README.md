A folder has been created for each assigned task, which includes the code and the necessary vendors for executing the code. (the two first tasks only include a phpunit as a vendor). 

For the first task, we can execute in the command line the script cliExecution.php, which will ask the user for a number:
```
~/leadtech$ cd task1
~/leadtech/task1$ php cliExecution.php
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
~/leadtech$ cd task1
~/leadtech/task1$ php vendor/bin/phpunit task1/FizzbuzzTest.php  --testdox
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
______________


For the second task it is also available a command line script which allows to the user to execute the code, and it will return the longest sequence:

```
~/leadtech$ cd task2 
~/leadtech/task2$ php cliExecution.php 
Introduce numeros separados por espacios: 1 2 4 5 6
3
```

It also has some tests:

```
~/leadtech/task2$ php vendor/bin/phpunit ConsecutiveNumberTest.php  --testdox
PHPUnit 11.2.7 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.3.7

..........                                                        10 / 10 (100%)

Time: 00:00.007, Memory: 8.00 MB

Consecutive Number
 ✔ Base case
 ✔ Sequence with only one element
 ✔ Empty sequence
 ✔ It should return three
 ✔ It should return four
 ✔ It should return four when biggest group is at the begining
 ✔ It should return four when biggest group is in the middle
 ✔ It should discard repeated elements
 ✔ Negative numbers sequence
 ✔ Mixed positive and negative numbers sequence

OK (10 tests, 10 assertions)

```

Finally, for each of the two parts of task three, it has been added a README.md file in its corresponding folder. 