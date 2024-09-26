<?php

$numeros1 = [78, 58, 69, 100, 300, 500];

$suma1 = array_reduce($numeros1, function($valorAcumulado, $valorActual) {
    return $valorAcumulado + $valorActual;}

,0 );

echo $suma1;

$numeros = [1, 2, 3, 4, 5];

$suma = array_reduce($numeros, function ($acumulador, $valorActual) {
    return $acumulador + $valorActual;
}, 0); // Valor inicial del acumulador

echo "La suma de los números es: " . $suma; // Salida: La suma de los números es: 15
echo "<br>";
echo "<br>";

$numeros2=[896,456,7800,7500,6250];
$suma2=array_reduce($numeros2, function($i,$x){return  $i+$x;},0);//donde $i es valor acumulado y $x es valor actual
echo $suma2;
echo "<br>";
echo "<br>";
echo "total con array_sum";
echo "<br>";    
echo "<br>";
$total=array_sum($numeros2);
echo $total;