<?php

$nombres=["marcos","carla","juan", "pedro", "maria", "diego", "jose", "adrian"];

$indice=0;

foreach($nombres as $nombre){
    echo "el nombre en la posicion {$indice} es $nombre<br>";
    $indice++;

}
echo "<br>";
echo "<br>";

foreach($nombres as $indice2=> $valor){
    echo "el nombre en la posicion {$indice2} es $valor<br>";
}
echo "<br>";
echo "<br>";
//recorremos array asociativo


$array_asociativo = [
    "nombre" => "Juan",
    "apellido" => "Pérez",
    "edad" => 30,
    "ciudad" => "Madrid"
];

foreach($array_asociativo as $clave=>$valor){
    echo "la clave es $clave y el valor es $valor<br>";
}

echo "<br>";
echo "<br>";
$persona = [
    "nombre" => "María",
    "apellido" => "González",
    "edad" => 25,
    "ocupación" => "Desarrolladora web"
];

echo $persona["nombre"];
echo "<br>";
echo "<br>";
 // Imprime "María"
echo $persona["ocupación"];
echo "<br>";
echo "<br>";
 // Imprime "Desarrolladora web"
echo $persona["edad"];
echo "<br>";
echo "<br>";
echo $persona['apellido'];

echo "<br>";
echo "<br>";
$producto = [
    "nombre" => "Teléfono inteligente",
    "marca" => "Samsung",
    "precio" => 500,
    "características" => ["pantalla táctil", "cámara de 12 MP", "batería de 3000 mAh"]
];
echo "<br>";
echo "<br>";
echo $producto["marca"]; // Imprime "Samsung"
echo "<br>";
echo "<br>";
echo $producto["características"][0]; // Imprime "pantalla táctil"
echo "<br>";
echo "<br>";
echo $producto["características"][1]; // Imprime "cámara de 12 MP"
echo "<br>";
echo "<br>";
echo $producto["características"][2]; // Imprime "batería de 3000 mAh"
echo "<br>";    
echo "<br>";

foreach($producto as $clave=>$valor){

    if($clave=="características"){
        echo "Las características son:<br>";
        foreach($valor as $caracteristica){
            echo "$caracteristica<br>";
        }
    }else{
        echo "la clave es $clave y el valor es $valor<br>";
    }
}