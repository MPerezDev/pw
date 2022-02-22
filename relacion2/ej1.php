<html>

    <head>
        <h2> Ejercicio 1 Relación 2 </h2>
    </head>
    <body>
        <?php
        $conexion = mysqli_connect("127.0.0.1","cursophp","","lindavista");
        $consulta = mysqli_query($conexion, "SELECT * FROM noticias");
        $nfilas = mysqli_num_rows ($consulta);

        echo "<table border=5>";
        foreach($consulta as $nfilas){

                $id = $consulta["id"];
                $titulo = $consulta["titulo"];
                $texto = $consulta["texto"];
                $categoria = $consulta["categoria"];
                $fecha = $consulta["fecha"];
                $imagen = $consulta["imagen"];

                echo "<tr>";
                echo "<td> $id </td>";
                echo "<td> $titulo </td>";
                echo "<td> $texto </td>";
                echo "<td> $categoria </td>";
                echo "<td> $fecha </td>";
                echo "<td> $imagen </td>";
                echo "</tr>";

        }

        echo "</table>";
        mysqli_close($conexion);

        ?>
    </body>

</html>