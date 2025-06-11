<?php

$apellidos = $_POST["apellidos"];
$nombres = $_POST["nombres"];
$dni = $_POST["dni"];
$escuprof = $_POST["escuprof"];


require_once "Conexion.php";
$objConexion = new Conexion();
$con = $objConexion->getConexion();   

$sql = "INSERT INTO tesista (nombres, apellidos, dni, escuprof) VALUES
                            ('$nombres', '$apellidos', '$dni', '$escuprof')";

if( $con->query($sql) == TRUE){
    $ultimo_id = $con->insert_id;
   header("Location: ./index.php?success=true");
    echo "<p><b>Se registro exitosamente</b></p>";
}else{
    header("Location: ./index.php?success=false");
    echo "<p><b>No se registro exitosamente</b></p>";
}
