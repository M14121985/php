<?php


$numeros=[1,25,789,56,47,12,325,45,65,87,96,32,456,200,250,400,600,300,525,900,800];
$filtrado=array_filter($numeros, function($i) { return $i % 2 == 0; });  


var_dump($filtrado) ;
echo "<br>";
echo "<br>";
echo "<br>";
$numeros1 = [1, 25, 789, 56, 47, 12, 325, 45, 65, 87, 96, 32, 456, 200, 250, 400, 600, 300, 525, 900, 800];
$filtrado1 = array_filter($numeros1, function($i) {
    if ($i % 2 == 0) {
        return $i;
    }
});


print_r($filtrado1);

$colores=["rojo", "amarillo", "azul", "verde"];
array_push($colores, "naranja", "violeta", "rosa", "amarillo verde");
print_r($colores);
echo "<br>";
echo "<br>";
// array_reduce sumar ellementos del arrray

$misNumeros=[45,89,65,3,78,658,100,254,325];

$sumatoria=array_reduce($misNumeros, function($valorAcumulado, $valorActual) {
    return $valorAcumulado + $valorActual;
},0);


//mediante funcion propia

function sumar($numeros){
    $suma=0;
    foreach($numeros as $numero){
        $suma+=$numero;
    }
    return $suma;
}

echo sumar($misNumeros);