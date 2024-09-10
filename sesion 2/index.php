<?php
//asi se escriben comentarios de una sola linea
$variableTexto = "Esto es un texto/string";
$variableNumerica = 19;
$variableDecimal = 199.99;
$variableBooleana = true;
$variableLista= [];
//SvariableObjeto = className()
$variableNull = null;
//imprimir/mostrar variables en la web
echo $variableTexto;
//mezclando variables con etiquetas HTML
echo "<h1>Imprimiendo la variable con valor <span style= 'color:blue; '>{$variableDecimal}</span></h1>";
//Ejemplo de estructura if
$mayoriaEdad = 189;
if($mayoriaEdad >= 18){
echo "Tu edad es $mayoriaEdad}, eres mayor de edad.";
}else if($mayoriaEdad == 18){
echo "Tu edad es ($mayoriaEdad}, posees la edad exacta.";
}else{
echo "Tu edad es ($mayoriaEdad}, eres menor de edad.";
}
//  Ejemplo de estructura switch
switch($mayoriaEdad){
    case 17:
        echo "Posees 17 anios";
        break;
        case 18:
            echo "Posees 18 anios";
            break;
            case 19:
                echo "Posees 19 anios";
                break;
                default:
                echo "tu edad no entra en ningun rango";
                break;

            
}
//ejemplo de estructura for 
for ($i= 1 ; $i <= 18; $i++){
    echo "Numeros del 1 hsta el 18 con for: {$i}<br>";
}
?>