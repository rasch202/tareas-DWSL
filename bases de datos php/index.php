<?php
try{
    $conn = new PDO ("mysql:dbname=testdb;host=localhost", "root","");
    echo "conexion exitosa!";

}catch(exception $e){
    echo $e->getMessag();
}