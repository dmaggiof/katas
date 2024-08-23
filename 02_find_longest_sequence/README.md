### Longest Consecutive Sequence
Given an unsorted array of integers, find the length of the longest consecutive elements sequence. Your
algorithm should run in O(n) complexity.
Example:
Input: [100, 4, 200, 1, 3, 2]
Output: 4

Explanation: The longest consecutive elements sequence is [1, 2, 3, 4]. Therefore its length is 4.

### Solution

There is available a command line script which allows to the user to execute the code, and it will return the longest sequence:

```
kata02$ php cliExecution.php 
Introduce numeros separados por espacios: 1 2 4 5 6
3
```

It also has some tests:

```
kata02$ php vendor/bin/phpunit ConsecutiveNumberTest.php  --testdox
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
