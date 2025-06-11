<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Tesista</title>
</head>
<body>
    <h1>Datos de Tesista</h1>
    <?php
    if(isset($_GET["success"]) && $_GET["success"] == "true"){
        echo "<p><b>Se registro exitosamente</b></p>";
    }
    ?>
    <p><a href="GTesista.php">Gestion Tesista</a></p>

    <form action="GuardarTesista.php method="post">
            <input type="text" name= "apellidos" placeholder="Apellidos"> <br>
            <input type="text" name= "nombres"placeholder="Nombres"> <br>
            <input type="text" name= "dni"placeholder="DNI"> <br>
            <input type="text" name= "escuprof"placeholder="Esc. Profesional"> <br>
            <input type="submit" value="Guardar">
            <input type="reset" value="Restablecer">
        </form>
   

</body>
</html>