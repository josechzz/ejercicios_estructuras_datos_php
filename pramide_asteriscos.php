<?php
function imprimirPiramide(int $altura): void {
    for ($i = 1; $i <= $altura; $i++) {
        // Imprimir espacios antes de los asteriscos
        for ($j = 1; $j <= $altura - $i; $j++) {
            echo " ";
        }
        // Imprimir asteriscos
        for ($k = 1; $k <= (2 * $i - 1); $k++) {
            echo "*";
        }
        // Nueva línea después de cada fila
        echo PHP_EOL;
    }
}

// Ejemplo de uso
$altura = 5; // Puedes cambiar la altura de la pirámide
imprimirPiramide($altura);
?>
