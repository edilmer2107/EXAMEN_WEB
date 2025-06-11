<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Tesis</title>
</head>
<body>
    <h1>Datos de Tesis</h1>
    <?php
    if(isset($_GET["success"]) && $_GET["success"] == "true"){
        echo "<p><b>Se registro exitosamente</b></p>";
    }
    ?>
     <p><a href="GTesis.php">Gestion Tesista</a></p>
    
     <form action="GuardarTesis.php" method="post">
        <input type="text" name= "titulo" placeholder="Titulo"> <br>
        <input type="text" name= "linea_investi"placeholder="Line investigacion"> <br>
        <input type="text" name= "resumen"placeholder="Resumen"> <br>
        <input type="text" name= "objetivos"placeholder="Objetivos"> <br>
        <input type="text" name= "fecha_inico"placeholder="Fecha de inicio"> <br>
        <input type="text" name= "fecha_fin"placeholder="Fecha de fin"> <br>
        <input type="int" name= "id_tesista"placeholder="ID de Tesistass"> <br>
        <input type="submit" value="Guardar">
        <input type="reset" value="Restablecer">
    </form>
</body>
</html>