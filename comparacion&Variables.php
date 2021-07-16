<?php
/**Comparacion
 * Igual ==, valor "9" == 9 <-- esto es un comparador de valor relativo da igual si es string, entero, lo importante es que el valor sea el mismo
 * Igual ===, valor 9 === 9 <-- esto es un comparador estricto, tanto el valor como el tipo debe ser el mismo
 * Diferencias !=, <-- funcionan igual que los de igual a diferencia que este busca las diferencias a nivel de valor 
 * Diferencias !==, <-- funcionan igual que los de igual a diferencia que este busca las diferencias a nivel de valor y tipo
 * <, >, <=, >=
 */

 //Variables variables <-- son variables que pueden llamar a otras variables que puedan estar concatenadas
 $app = "name";
 $name = "sebas";
 
 echo $app; // = "name"
 echo $$app; // = "sebas"
