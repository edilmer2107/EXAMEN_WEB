<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion Tesis</title>
</head>
<body>
    

    <h1>Gestion Tesis</h1>

    <?php
    if(isset($_GET["success"]) && $_GET["success"] == "true"){
        echo "<p><b>Se registro exitosamente</b></p>";
    }
    ?>

    <p><a href="index.php">Registro</a></p>
    <p><a href="ForTesis.php">Formulario Tesis</a></p>
    <table border="1">
        <thead>
            <tr>
                <th>Titulo</th>
                <th>Line de Investigacion</th>
                <th>Resumen</th>
                <th>Objetivos</th>
                <th>Fecha inicio</th>
                <th>Fecha fin</th>
                <th>Acciones</th>
            </tr>
        </thead>

        <tbody>
            <?php
            require_once "Conexion.php";
            $sql = "SELECT * FROM tesis WHERE estado = 1 ORDER BY titulo, linea_investi";
            $objConexion = new Conexion();
            $con = $objConexion->getConexion();
            $resultado = $con->query($sql);
            if($resultado->num_rows > 0){
                while($fila = $resultado->fetch_assoc()){
                    echo "<tr>";
                    echo "<td>". $fila['titulo']. "</td>";
                    echo "<td>". $fila['linea_investi']. "</td>";
                    echo "<td>". $fila['resumen']. "</td>";
                    echo "<td>". $fila['objetivos']. "</td>";
                    echo "<td>". $fila['fecha_inicio']. "</td>";
                    echo "<td>". $fila['fecha_fin']. "</td>";
                    echo "<td>
                            <a href='EliminarTesis.php?id={$fila['id']}'>Eliminar</a>
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