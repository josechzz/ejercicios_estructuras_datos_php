<?php
function sumarNumerosPares(array $numeros): int {
    $suma = 0;
    foreach ($numeros as $numero) {
        // Verificamos si el número es par
        if ($numero % 2 === 0) {
            $suma += $numero; // Sumamos los números pares
        }
    }
    return $suma;
}

$numeros = [1, 2, 3, 4, 5, 6];
$sumaPares = sumarNumerosPares($numeros);

echo "Array de números: " . implode(", ", $numeros) . PHP_EOL;
echo "Suma de números pares: " . $sumaPares . PHP_EOL;
?>
