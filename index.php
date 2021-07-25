<?php
//
$courses = [
    1=> "php",
    3=> "uno",
    5=> "dos",
    7=> "tres"];
$wishes = [
    2=> "curso1", 
    4=> "php",
    6=> "uno", 
    8=> "curso2"];

echo "<pre>";
var_dump(array_diff($wishes, $courses)); // *array_diff* te permite ver las diferencias que hay entre dos array es importante el orden de lo que se desea comparar
var_dump(array_diff_assoc($wishes, $courses));