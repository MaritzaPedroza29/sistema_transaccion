<?php
class Conexion {
 function ConexionBD (){
    $host = 'localhost';
    $dbname = 'transacciones';
    $username = 'root';
 $password = '';
 try{
    $conn = new PDO ("mysql:host=$host;dbname=$dbname",$username,$password);
    //echo"Se conectó correctamente a la base de datos";
 }catch (PDOException $exp){
    echo ("no se logró conectar correctamente con la base de datos:$dbname, error:$exp");
 }
 return $conn;
 }
}
?>
