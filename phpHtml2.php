<!DOCTYPE html>
<html>
<head>
    <title>Ejemplo PHP en HTML</title>
    <style>

        body{
            font-family: Arial, sans-serif;
            margin: 20px;

        }
        h1 {
            color: blue;
        }
        p {
            color: green;
        }
        li {
            color: red;
        }
    </style>

</head>
<body>

    <h2>Bucle For:</h2>
    <?php
    for ($i = 1; $i <= 5; $i++) {
        echo "<p>Esta es la iteración número $i</p>";
    }
    ?>

    <h2>Bucle While:</h2>
    <ul>
    <?php
    $contador = 1;
    while ($contador <= 5) {
        echo "<li>Elemento de la lista $contador</li>";
        $contador++;
    }
    ?>
    </ul>

    <h2>Estructura Condicional:</h2>
    <?php
    $hora = date("H"); 

    if ($hora < 12) {
        echo "<h1>¡Buenos días!</h1>";
    } else if ($hora < 18) {
        echo "<h1>¡Buenas tardes!</h1>";
    } else {
        echo "<h1>¡Buenas noches!</h1>";
    }
    ?>
<?php
$colores=["rojo", "amarillo", "azul", "verde"];
array_push($colores, "naranja", "violeta", "rosa", "amarillo verde");?>

<h2>colores bucle foreach</h2>

<ul>

<?php
foreach($colores as $color){
    echo "<li>$color</li>";
}
?>

</ul>
<h2>colores bucel for</h2>
<ul>
<?php
for($i=0; $i<count($colores); $i++){
    echo "<li>$colores[$i]</li>";
}

?>
<!--añadimos script de javascript
*/-->
<script>
    alert("Hola desde JavaScript");
</script>


</ul>

<!--formulario basico-->
<h2>Formulario</h2>
<form action="recibirArchivo.php" method="post" enctype="multipart/form-data">

    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" id="nombre" placeholder="Nombre">
    <br>
    <br>

    <label for="apellido">Apellido:</label>
    <input type="text" name="apellido" id="apellido" placeholder="Apellido">
    <br>
    <br>
<label for="archivo">archivo</label>
<input type="file" name="archivo" id="archivo">
<br>

    <input type="submit" value="Enviar">
</form>
<form action="recibirArchivo.php" method="post" enctype="multipart/form-data">
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
<input type="submit" value="Enviar">




</form>









</body>
</html>
