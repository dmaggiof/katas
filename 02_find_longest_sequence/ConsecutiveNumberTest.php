<?php
declare(strict_types=1);
require 'ConsecutiveNumber.php';
use PHPUnit\Framework\TestCase;

final class ConsecutiveNumberTest extends TestCase
{
    public function testBaseCase(): void
    {
        $sut = new ConsecutiveNumber();
        $actual = $sut->execute([100, 4, 200, 1, 3, 2]);
        $this->assertSame(4, $actual);
    }

    public function testSequenceWithOnlyOneElement(): void
    {
        $sut = new ConsecutiveNumber();
        $actual = $sut->execute([1]);
        $this->assertSame(1, $actual);
    }

    public function testEmptySequence(): void
    {
        $sut = new ConsecutiveNumber();
        $actual = $sut->execute([]);
        $this->assertSame(0, $actual);
    }

    public function testItShouldReturnThree(): void
    {
        $sut = new ConsecutiveNumber();
        $actual = $sut->execute([1,2,3]);
        $this->assertSame(3, $actual);
    }

    public function testItShouldReturnFour(): void
    {
        $sut = new ConsecutiveNumber();
        $actual = $sut->execute([1,2,3,5,6,7,8]);
        $this->assertSame(4, $actual);
    }

    public function testItShouldReturnFourWhenBiggestGroupIsAtTheBegining(): void
    {
        $sut = new ConsecutiveNumber();
        $actual = $sut->execute([5,6,7,8,1,2,3]);
        $this->assertSame(4, $actual);
    }

    public function testItShouldReturnFourWhenBiggestGroupIsInTheMiddle(): void
    {
        $sut = new ConsecutiveNumber();
        $actual = $sut->execute([19,20,21,5,6,7,8,1,2,3]);
        $this->assertSame(4, $actual);
    }

    public function testItShouldDiscardRepeatedElements(): void
    {
        $sut = new ConsecutiveNumber();
        $actual = $sut->execute([1, 2, 2, 3]);
        $this->assertSame(3, $actual);
    }

    public function testNegativeNumbersSequence(): void
    {
        $sut = new ConsecutiveNumber();
        $actual = $sut->execute([-1, -2, -3, -4]);
        $this->assertSame(4, $actual);
    }

    public function testMixedPositiveAndNegativeNumbersSequence(): void
    {
        $sut = new ConsecutiveNumber();
        $actual = $sut->execute([-1, 0, 1, 2, -2, 3, -3, 4]);
        $this->assertSame(8, $actual);
    }
}