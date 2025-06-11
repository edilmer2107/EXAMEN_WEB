<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion Tesista</title>
</head>
<body>
    

    <h1>Gestion Tesista</h1>

    <?php
    if(isset($_GET["success"]) && $_GET["success"] == "true"){
        echo "<p><b>Se registro exitosamente</b></p>";
    }
    ?>

    <p><a href="index.php">Registro</a></p>
    <p><a href="ForTesista.php">Formulario Tesista</a></p>
    
    <table border="1">
        <thead>
            <tr>
                <th>Apellidos</th>
                <th>Nombres</th>
                <th>DNI</th>
                <th>Esc. Profesional</th>
                <th>Acciones</th>
            </tr>
        </thead>

        <tbody>
            <?php
            require_once "Conexion.php";
            $sql = "SELECT * FROM tesista WHERE estado = 1 ORDER BY apellidos, nombres";
            $objConexion = new Conexion();
            $con = $objConexion->getConexion();
            $resultado = $con->query($sql);
            if($resultado->num_rows > 0){
                while($fila = $resultado->fetch_assoc()){
                    echo "<tr>";
                    echo "<td>". $fila['apellidos']. "</td>";
                    echo "<td>". $fila['nombres']. "</td>";
                    echo "<td>". $fila['dni']. "</td>";
                    echo "<td>". $fila['escuprof']. "</td>";
                    echo "<td>
                            <a href='editar.php?id={$fila['id']}'>Editar</a>
                            <a href='eliminar.php?id={$fila['id']}'>Eliminar</a>
                          </td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='4'>No hay resultados</td></tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>