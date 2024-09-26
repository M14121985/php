<?php
// Ejemplo 1: Array de enteros
$numeros = array(5, 12, 8, 3);
$suma = array_sum($numeros);
echo "La suma es: " . $suma; // Resultado: La suma es: 28

// Ejemplo 2: Array con decimales
$precios = array(19.99, 5.50, 8.75);
$total = array_sum($precios);
echo "El total es: " . $total; // Resultado: El total es: 34.24

// Ejemplo 3: Array con elementos no numéricos
$mixto = array(2, "hola", 7.5, true);
$suma_mixto = array_sum($mixto);
echo "La suma del array mixto es: " . $suma_mixto; // Resultado: La suma del array mixto es: 9.5

// Ejemplo 4: Array asociativo (se suman los valores)
$ventas = array("manzanas" => 15, "peras" => 8, "naranjas" => 22);
$total_ventas = array_sum($ventas);
echo "El total de ventas es: " . $total_ventas; // Resultado: El total de ventas es: 45
