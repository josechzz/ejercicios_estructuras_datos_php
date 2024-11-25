<?php
function invertirListaManual(array $numeros): array {

    $listaInvertida = [];
    for ($i = count($numeros) - 1; $i >= 0; $i--) {
        $listaInvertida[] = $numeros[$i];
    }
    return $listaInvertida;
}

$numeros = [1, 2, 3, 4, 5];
$listaInvertida = invertirListaManual($numeros);

echo "Lista original: " . implode(", ", $numeros) . PHP_EOL;
echo "Lista invertida: " . implode(", ", $listaInvertida) . PHP_EOL;
?>
