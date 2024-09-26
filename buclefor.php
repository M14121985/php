<?php
//factorial de varios numeros

//factorial de 10
$resultado=1;

for($i=1; $i<=10; $i++){
    $resultado*=$i;

}
echo "<br>";
echo "<br>";
echo "el factorial de 10 es {$resultado}";

//factorial de 5
$resultado=1;
for($i=1; $i<=5; $i++){
    $resultado*=$i;
};

echo "<br>";
echo "<br>";
echo "el factorial de 5 es {$resultado}";


//factorial de 7

$resultado=1;
for($i=1; $i<=7; $i++){
    $resultado*=$i;
};
echo "<br>";
echo "<br>";
echo "el factorial de 7 es {$resultado}";

//factorial de 3

$resultado=1;
for($i=1; $i<=3; $i++){
    $resultado*=$i;
}
echo "<br>";
echo "<br>";
echo "el factorial de 3 es {$resultado}";
//factorial de 12

$resultado=1;

for($i=1; $i<=12; $i++){
    $resultado*=$i;

};
echo "<br>";
echo "<br>";
echo "el factorial de 12 es {$resultado}";

//dentro de una funcion para hacerlo mas practico

function factorial($numero){
    $resultado=1;
    for($i=1; $i<=$numero; $i++){
        $resultado*=$i;
    }return "el factorial de $numero es $resultado" ;
};


echo "<br>";
echo factorial(5);
echo "<br>";
echo factorial(15);
echo "<br>";
echo factorial(3);
echo "<br>";
echo factorial(7);
echo "<br>";
echo factorial(12);


// funcion sumar sin metodo reduce.

function sumar(...$numeros){
    $total=0;
    foreach($numeros as $numero){
        $total+=$numero;
    }return "La suma de los numeros ". implode($numeros)." es ". $total;//implode() transforma array a strings

};
echo "<br>";
echo "<br>";
echo sumar(1,2,3,4,5,6,7,8,9,10,100);