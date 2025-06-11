<?php

$titulo = $_POST["titulo"];
$linea_investi = $_POST["linea_investi"];
$resumen = $_POST["resumen"];
$objetivos = $_POST["objetivos"];
$fecha_inicio = $_POST["fecha_inicio"];
$fecha_fin = $_POST["Fecha_fin"];

require_once "Conexion.php";
$objConexion = new Conexion();
$con = $objConexion->getConexion();   

$sql = "INSERT INTO tesis (titulo, linea_investi, resumen, objetivos,fecha_inicio, Fecha_fin) VALUES
                        ('$titulo', '$linea_investi', '$resumen', '$objetivos','$fecha_inicio','$Fecha_fin')";

if( $con->query($sql) == TRUE){
    $ultimo_id = $con->insert_id;
   header("Location: ./index.php?success=true");
    echo "<p><b>Se registro exitosamente</b></p>";
}else{
    header("Location: ./index.php?success=false");
    echo "<p><b>No se registro exitosamente</b></p>";
}
