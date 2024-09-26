<?php

$toyota = [
    "marca" => "Toyota",
    "modelo" => "Corolla",
    "año" => 2015,
    "color" => "Blanco",
    "motor" => "1.8L",
    "transmision" => "Automática",
    "puertas" => 4,
    "precio" => 20000
];

//recorremos con foreach

foreach($toyota as $clave => $valor){
    echo "$clave: $valor <br>";
};
echo"<br>";
echo"<br>";
echo"<br>";
$modelosAudi=["A1","A2","A3","A3SLINE","A4","A4SLINE","A6","A7","A8"];

foreach($modelosAudi as $i){
    echo $i;
    echo "<br>";
};

echo"<br>";
echo"<br>";
echo"<br>";
$marcasCoches = ["Toyota", "Audi", "BMW", "Mercedes", "Ford", "Nissan", "Honda", "Volkswagen"];

foreach($marcasCoches as $i){
    echo $i;
    echo "<br>";
}

echo"<br>";
echo"<br>";
echo"<br>";

$modelosBMW = ["Serie 1", "Serie 3", "Serie 5", "Serie 7", "X1", "X3", "X5", "M3", "M5"];

foreach($modelosBMW as $i){
    echo $i;
    echo "<br>";
}

echo"<br>";
echo"<br>";
echo"<br>";

$colores = ["Rojo", "Azul", "Verde", "Amarillo", "Blanco", "Negro", "Gris", "Plateado"];

foreach($colores as $i){
    echo $i;
    echo "<br>";

}
echo"<br>";
echo"<br>";
echo"<br>";
for($i=0; $i<count($colores);$i++){
    echo " indice $i $colores[$i] <br>";
}

echo"<br>";
echo"<br>";
echo"<br>";

$paises = ["España", "Francia", "Alemania", "Italia", "Reino Unido", "Estados Unidos", "China", "Japón"];

foreach($paises as $i){
    echo $i;
    echo "<br>";
}
// con for 

echo "<br>";

for($i=0; $i<count($paises);$i++){
    echo $paises[$i];
    echo "<br>";
}
    



