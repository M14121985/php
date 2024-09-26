<?php
//while

$numero=0;

while($numero<=30) {
        echo $numero;
        $numero++;
        echo "<br>";
}

echo"<br>";
echo"<br>";

//do while
$numero1=330;

do{
    echo $numero1;
    $numero1--;
    echo "<br>";
}while($numero1>=0);

//recoremos un array con while
echo"<br>";
echo"<br>";
$array=["hola","como","estas","?"];
$contador=0;
while($contador<count($array)){
    echo $array[$contador];
    $contador++;
    echo "<br>";
}

//recorremos letras del string
echo"<br>";
echo"<br>";
$miString="hola ya se varios lenguajes de programacion python javascript y php";
$contador=0;
while($contador<strlen($miString)){
    echo $miString[$contador];
    $contador++;
    echo "<br>";
}