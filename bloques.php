<?php

$condition = "condition";
// Esto es un condicional if, else if y else, funciona parecido a javascript por lo que veo sirve para generar acciones en base a la condicion
if ("condition") {
    # code...
}
elseif ("condition") {
    # code...
}
else {
    # code...
}

//Esto es un switch es puede hacer lo mismo que el if pero es especialmente usado cuando se tiene que hacer tareas muy extensas, de cualquier manera va de mano con el desarrollador
switch ($login) {
    case true:
        # code...
        break;
    case false:
        # code...
        break;
    default:
        # code...
        break;
}

//foreach es un ciclo que sirve en general para consultar datos
foreach ($datos as $id => $name) {
    # code...
}
// tambien se puede acceder de manera basica, mas directa a los datos usando $row
foreach ($datos as $row) {
    # code...
}

// son cilos en busca de datos por ejemplo de un numero hasta conseguirlo
$a = 1;
while ($a <= 10)
{
    $a++;
}
// do while, es lo mismo que el while la diferencia principal es que se usa cuando necesitamos que el ciclo se haga al menos una vez indiferentemente de los datos
do {
    # code...
} while ($a <= 10);

//for es un ciclo que tres paso, comenzando por el dato, pasando por la condicion y finalmente por el proceso que debe hacer si no se cumple, y asi hasta que se cumpla
for ($i=0; $i<=10 ;  $i++) { 
    # code...
};