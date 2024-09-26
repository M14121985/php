<?php
function counterReiniciable($reinicio=false){
    static $counter= 0;//static para que el valor de la variable se siga almacenando en cada llamado de la funcion
    echo "el contador inicia en $counter<br>";
    $reinicio ? $counter=0 : $counter++;
//acuaerdate ? si true esto : si false esto

}


function counterReiniciable2($reinicio=false){
    static $counter= 0;
    if($reinicio){
        $counter=0;
    }else{
        $counter++;

}echo "el contador va por el numero $counter<br>";
}

counterReiniciable();
counterReiniciable();
counterReiniciable();
counterReiniciable();
counterReiniciable();
counterReiniciable();
counterReiniciable();
counterReiniciable();
counterReiniciable();
counterReiniciable2();
counterReiniciable2();
counterReiniciable2();
counterReiniciable2();
counterReiniciable2();
counterReiniciable2();
counterReiniciable2();
counterReiniciable2();
counterReiniciable2();
counterReiniciable2();
counterReiniciable2();
counterReiniciable2();
counterReiniciable2();
counterReiniciable2(true);

