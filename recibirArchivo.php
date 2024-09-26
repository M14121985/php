<?php


echo "nombre";
echo $_REQUEST['nombre'];

echo "apellido";
echo $_REQUEST['apellido'];
if(isset($_REQUEST['numero1']));
$numero1=$_REQUEST['numero1'];
if(isset($_REQUEST['numero2']));
$numero2=$_REQUEST['numero2'];
if(isset($_REQUEST['operacion']));
$operacion=$_REQUEST['operacion'];

if(isset($_REQUEST['numero1']) && isset($_REQUEST['numero2']) && isset($_REQUEST['operacion'])){
        if ($operacion == "suma") {
            echo "la suma es: " . ($numero1 + $numero2);
        } else if ($operacion == "resta") {
            echo "la resta es: " . ($numero1 - $numero2);
        } else if ($operacion == "multiplicacion") {
            echo "la multiplicacion es: " . ($numero1 * $numero2);
        } else if ($operacion == "division") {
            if ($numero2 !== 0) {
                echo "la division es: " . ($numero1 / $numero2);
            } else {
                throw new Exception("no se puede dividir por cero");
            }
        
       
    
    }
}
/*<form action="recibirArchivo.php" method="post" enctype="multipart/form-data">
<label for="numero1">numero1:</label>
<input type="number" name="numero1" id="numero1" placeholder="numero1">
<br>
<br>
<label for="numero2">numero2:</label>
<input type="number" name="numero2" id="numero2" placeholder="numero2">
<br>
<br>
<label for="operacion">Operación:</label>
<select name="operacion" id="operacion">
    <option value="suma">Suma</option>
    <option value="resta">Resta</option>
    <option value="multiplicacion">Multiplicación</option>
    <option value="division">División</option>
<input type="submit" value="Enviar"> */

































?>



