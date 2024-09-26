<?php
$pato= "pato";
$gallina="gallina";
$eleccion=readline("elige pato o gallina");
if($eleccion === $pato){
    echo "eres un autentico $pato";
}else if($eleccion === $gallina){
    echo "eres un autentico $gallina";
}else{
    echo "no eres nada";
}
echo "<br>";
echo "<br>";
$numero=15;
if($numero>10 and $numero<20){
    echo "el numero es mayor que 10 y menor que 20";
}
$numero++;
print_r($numero);


//operador ternario igual que en javaScript
echo "<br>";
echo "<br>";
$edad = 25;
$mensaje = ($edad >= 18) ? "Eres mayor de edad" : "Eres menor de edad";
echo $mensaje; // Output: Eres mayor de edad
echo "<br>";
echo "<br>";
$avionDeCombate= "f22";
$resultado=($avionDeCombate==="f35")?"el avion es el f35 ligthing" : "El avion es el f22 raptor y se ejecuta el else";
echo $avionDeCombate;
echo "<br>";
echo "<br>";
echo $resultado;