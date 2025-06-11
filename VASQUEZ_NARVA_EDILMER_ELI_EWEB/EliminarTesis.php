<?php
if(isset ($_GET["id"])){
    $id = $_GET["id"];

    require_once "Conexion.php";
    $objConexion = new Conexion();
    $con = $objConexion->getConexion();   

    $sql = "UPDATE tesis SET estado = 0 WHERE id=".$id;
    
    if( $con->query($sql) == TRUE){
    header("Location: ./index.php");
}else{
    header("Location: ./index.php");
}

}