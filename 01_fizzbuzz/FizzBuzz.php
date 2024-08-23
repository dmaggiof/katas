<?php


class FizzBuzz
{
    /**
     * @return array<int, mixed>
     * @throws Exception
     */
    public function execute(int $limit): array
    {
        if (!$this->validNumber($limit)) {
            throw new Exception("Número no valido");
        }
        $numbers = [];

        for ($i = 1; $i <= $limit; $i++) {
            $numbers[] = $this->translate($i);
        }

        return $numbers;
    }

    public function translate(int $number): string
    {
        if ($number % 15 == 0) {
            return 'FizzBuzz';
        }
        if ($number % 3 == 0) {
            return 'Fizz';
        }
        if ($number % 5 == 0) {
            return 'Buzz';
        }
        return strval($number);
    }
    function validNumber(int $number): bool
    {
        if (is_nan($number)) {
            return false;
        }
        if ($number <= 0) {
            return false;
        }
        return true;
    }


}
