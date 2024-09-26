<?php
//fn en lugar de function
// Definición de la función de flecha para filtrar los números pares de un array.
$suma=fn($i,$a)=>$i+$a;
echo $suma(5,5);
echo "<br>";
echo "<br>";

// Definición de la función de flecha para sumar todos los elementos de un array.
$suma1 = fn(...$valor) => array_sum($valor);

// Array de valores a sumar.
$valores = [89, 78, 2, 235, 489, 700, 963, 458];

// Llamada a la función de flecha con desempaquetado de argumentos.
echo $suma1(...$valores);

$cadenaLarga=fn($valor)=>strlen($valor)>10?"true":"false";
echo "<br>";
echo "<br>";
echo $cadenaLarga("hola mundo");
echo "<br>";
echo $cadenaLarga("hola mundo como estas");
echo "<br>";
echo "<br>";

function generarRandom(){
    return random_int(1, 100);
}

echo "<br>";
echo "<br>";


function generarRandom2(){
    return rand(1, 100);
}
echo "<br>";
echo "<br>";


echo generarRandom();
echo "<br>";
echo "<br>";
echo generarRandom2();



//en flecha
$numeroRandom=fn()=>rand(1, 200);
echo "<br>";
echo "<br>";
echo $numeroRandom();