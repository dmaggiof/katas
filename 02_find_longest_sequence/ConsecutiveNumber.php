<?php

class ConsecutiveNumber
{
    public function execute(array $numbers): int
    {
        $previousNumber = 0;
        $longestSequence = 0;
        $actualSequence = 0;
        $inSequence = false;

        // Meto los valores como claves del array, así elimino elementos duplicados y las operaciones de acceso son de tiempo constante
        $numbers = array_flip($numbers);

        // Ordeno los elementos del array por la clave
        ksort($numbers);

        // Calculo la secuencia más larga sobre el array ordenado
        foreach ($numbers as $number => $uselessValue) {
            $number = intval($number);
            if ($actualSequence === 0) { // Inicializa secuencia
                $actualSequence = 1;
            }
            elseif ($number === $previousNumber + 1) { // Continúa secuencia
                $actualSequence++;
                $inSequence = true;
            } elseif ($inSequence === true) { // Reinicia secuencia y actualiza contador global
                $inSequence = false;
                $longestSequence = max($actualSequence, $longestSequence);
                $actualSequence = 1;
            }
            $previousNumber = $number;
        }

        if ($actualSequence > $longestSequence) {
            $longestSequence = $actualSequence;
        }
        return $longestSequence;
    }
}