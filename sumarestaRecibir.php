<?php
// Verificar si se enviaron datos mediante POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtener los números del formulario
    $numero1 = isset($_POST['numero1']) ? floatval($_POST['numero1']) : 0;
    $numero2 = isset($_POST['numero2']) ? floatval($_POST['numero2']) : 0;

    // Inicializar resultado y operación
    $resultado = null; // Inicializar como null para indicar que no se ha realizado ninguna operación
    $operacion = "";

    // Realizar la operación según el botón presionado (usando un solo campo para la operación)
    if (isset($_POST['operacion'])) {
        if ($_POST['operacion'] == 'sumar') {
            $resultado = $numero1 + $numero2;
            $operacion = "suma";
        } elseif ($_POST['operacion'] == 'restar') {
            $resultado = $numero1 - $numero2;
            $operacion = "resta";
        }
    }

    // Mostrar el resultado (solo si se realizó una operación)
    if ($resultado !== null) { // Verificar si $resultado tiene un valor (no es null)
        echo "La $operacion de $numero1 y $numero2 es: $resultado";
    } else {
        echo "No se ha seleccionado ninguna operación."; // Mensaje si no se presionó ningún botón
    }
}
?>
