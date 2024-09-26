<?php

$fruta="manzana";

switch($fruta){
case "banana":
    echo "la fruta es banana";
    break;
case "manzana":
    echo "la fruta es manzana";
    break;
case "pera":
    echo "la fruta es pera";
    break;
case "piña":
    echo "la fruta es piña";
    break;
default:
    echo "no es ninguna de las anteriores";
    break;
}
print("<br>");
print("<br>");

$diaSemana="domingo";

switch($diaSemana){
case "lunes":
    echo "hoy es lunes";
    break;
case "martes":
    echo "hoy es martes";
    break;
case "miercoles":
    echo "hoy es miercoles";
    break;
case "jueves":
    echo "hoy es jueves";
    break;
case "viernes":
    echo "hoy es viernes";
    break;
case "sabado":
    echo "hoy es sabado";
    break;
case "domingo":
    echo "hoy es domingo";
    break;
default:
    echo "no es ningun dia de la semana";
    break;
}

print("<br>");
print("<br>");
$variable=45;

switch($variable){
case 45:
    echo "la variable es 45";
    break;
case 50:
    echo "la variable es 50";
    break;
case 55:
    echo "la variable es 55";
    break;
default:
    echo "la variable no es 45, 50 o 55";
    break;
}
