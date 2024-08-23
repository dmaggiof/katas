<?php
declare(strict_types=1);
require 'FizzBuzz.php';
use PHPUnit\Framework\TestCase;

final class FizzBuzzTest extends TestCase
{
    public function testItShouldReturnNumberOne(): void
    {
        $sut = new FizzBuzz;
        $actual = $sut->translate(1);
        $this->assertSame("1", $actual);
    }

    public function testItShouldReturnFizzWord(): void
    {
        $sut = new FizzBuzz;
        $actual = $sut->translate(3);
        $this->assertSame("Fizz", $actual);
    }

    public function testItShouldReturnBuzzWord(): void
    {
        $sut = new FizzBuzz;
        $actual = $sut->translate(5);
        $this->assertSame("Buzz", $actual);

        $actual = $sut->translate(95);
        $this->assertSame("Buzz", $actual);
    }

    public function testItShouldReturnFizzBuzzWord(): void
    {
        $sut = new FizzBuzz;
        $actual = $sut->translate(15);
        $this->assertSame("FizzBuzz", $actual);

        $actual = $sut->translate(60);
        $this->assertSame("FizzBuzz", $actual);

        $actual = $sut->translate(90);
        $this->assertSame("FizzBuzz", $actual);
    }

    /**
     * @throws Exception
     */
    public function testTestDifferentExpectedNumbers(): void
    {
        $sut = new FizzBuzz;
        $actual = $sut->execute(100);
        $this->assertSame("1", $actual[1 - 1]);
        $this->assertSame("2", $actual[2 - 1]);
        $this->assertSame("Fizz", $actual[3 - 1]);
        $this->assertSame("4", $actual[4 - 1]);
        $this->assertSame("Buzz", $actual[5 - 1]);

        $this->assertSame("29", $actual[29 - 1]);
        $this->assertSame("FizzBuzz", $actual[30 - 1]);
        $this->assertSame("31", $actual[31 - 1]);

        $this->assertSame("Fizz", $actual[99 - 1]);
        $this->assertSame("Buzz", $actual[100 - 1]);
    }
}