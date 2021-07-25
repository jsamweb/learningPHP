<?php
//
$courses = ["php","uno","dos","tres"];
sort($courses); // sort sirve para ordenar d forma descendente los elementos dentro de un array

echo "<pre>";
var_dump($courses);
//
//
$courses = ["php","uno","dos","tres"];
rsort($courses); // rsort sirve para ordenar d forma contraria los elementos dentro de un array

echo "<pre>";
var_dump($courses);
//
//
$courses = [
    1=> "php",
    10=> "uno",
    100=> "dos",
    1000=> "tres"];
ksort($courses); // ksort sirve para ordenar por el orden de los key los elementos dentro de un array

echo "<pre>";
var_dump($courses);
//
//
$courses = [
    1=> "php",
    10=> "uno",
    100=> "dos",
    1000=> "tres"];
krsort($courses); // krsort sirve para ordenar por el orden recursivo de los key los elementos dentro de un array

echo "<pre>";
var_dump($courses);
//
//
$courses = 
[
    1=> "php",
    10=> "uno",
    100=> "dos",
    1000=> "tres"
];

echo "<pre>";
var_dump(array_slice ($courses,2)); // array_slice te permite  llamar al array desde una posicion que le indiques
//
//
$courses = 
[
    "php",
    "uno",
    "dos",
    "tres"
];

echo "<pre>";
var_dump(array_chunk ($courses,1)); // array_chunk te permite organizar los datos en pedazos o es lo mismo que decir en diferentes arrays
//
//
$courses = 
[
    "php",
    "uno",
    "dos",
    "tres"
];

echo "<pre>";
var_dump(array_shift($courses)); // *array_shift* al igual que en javaScript llama al primer elemento del array y lo elimina del mismo
var_dump(array_pop($courses)); // *array_pop* hace la misma funcion que el shift a diferencia que este llama al ultimo elemento
//
//
$courses = 
[
    "php",
    "uno",
    "dos",
    "tres"
];

echo "<pre>";
var_dump(array_unshift($courses)); // *array_unshift* agrega un elemento al principio del array
var_dump(array_push($courses)); // *array_push* agrega un elemento al final del array
//
//
$courses = 
[
    "ejemplo1" => "php",
    "ejemplo2" => "uno",
    "ejemplo3" => "dos",
    "ejemplo4" => "tres"
];

echo "<pre>";
var_dump(array_flip($courses)); // sirve para remplazar la informacion de los array por la de los key
//