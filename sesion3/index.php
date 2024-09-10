<?php
//ejercicio de ejemplo 1: estructura condicional if solo PHP
$listadoFrutas =['mazana', 'pera'];
//la funcion count es propia/nativa de php , retorna la cantidad de elementos en un array/objeto
if (count($listadoFrutas) == 0){
    echo "tu listado posee 0 valores.";
}else{
    echo "Tulistado posee" . count($listadoFrutas) . "valores.";//concatenacion de valores con el signo.
}

echo "<br>";
//ejercicio de ejemplo 2: estructura repetitiva for
//se da un valor de inicio, una condicion y un aumento/suma a la variable iterativa
for ($i =0; $i <= 10; $i++){
    echo "<br>10 por " . $i . "es igual a ".($i*10);
}

echo "<br>";
//se da un valor de inicio, una condicion y un decremento/resta a la variable iterativa

for($i=10; $i >= 1; $i--){
    echo "<br>10 por" . $i . "es igual a" . ($i * 10);
}