<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
//ejercicio de ejemplo 1: estructura condicional if solo PHP
$listadoFrutas =['mazana', 'pera', "banano"];
//la funcion count es propia/nativa de php , retorna la cantidad de elementos en un array/objeto
if (count($listadoFrutas) == 0){
    echo "<h3 style='color:red;'>tu listado posee 0 valores.<h/3>";
}else{
    echo "<h3 style='color:blue;'>Tulistado posee <span style='color:green;'>" . count($listadoFrutas) . "</span></h3>"; //concatenacion de valores con el signo.
}
?>
<ol>
<?php
//ejercicio de ejemplo 2: estructura repetitiva for
//se da un valor de inicio, una condicion y un aumento/suma a la variable iterativa

<?
for ($i =0; $i <= 10; $i++){
    <li style="color: black">?="10 por{$i}=<span style='color:green'>" <span style='colorgreen;' . ($1*10)"</span>"<                                                                                                                    >?    ><
<?php
}

echo "<br>";
//se da un valor de inicio, una condicion y un decremento/resta a la variable iterativa

for($i=10; $i >= 1; $i--){
    echo "<br>10 por" . $i . "es igual a" . ($i * 10);

}

    
</body>
</html>