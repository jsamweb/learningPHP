<?php

// // forma basica de trabajar con valores
//  function greet($name)
// {
//     return "hola, $name";
// }

// echo greet("sebas");

// //referencias
// $course = "PHP";
// function path(&$course)
// {
//     $course = "laravel";
//     echo $course; //laravel
// }

// path($course);
// echo $course; //laravel


//predeterminado
function greet($name = "sebas")
{
    return "Hola, $name";
}

echo greet(); // de esta manera saldria el nombre predetermiando en la funcion
echo greet("perro"); //de esta manera se modifica el nombre interno de la funcion

