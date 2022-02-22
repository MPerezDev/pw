<html>

    <head>
        <h2> Ejercicio 1 Relación 2 </h2>
    </head>

    <FORM METHOD=POST>
            ¿Sin ánimo de lucro tú qué prefieres?
            <br/>
            <INPUT NAME="opcion" TYPE="radio" VALUE="pizza" CHECKED="checked"> Una pizza
            <br/>
            <INPUT NAME="opcion" TYPE="radio" VALUE="valeriana"> Que tú le devuelvas siete cajas de valeriana
            <br/>
            <INPUT TYPE="submit" VALUE="Enviar">
        </FORM>

    <body>
        <?php
        $conexion = mysqli_connect("127.0.0.1","cursophp","","lindavista");
        $consulta = mysqli_query($conexion, "SELECT * FROM noticias");
        $nfilas = mysqli_num_rows ($consulta);
        
        echo "<table border=5>";
        if($nfilas > 0){
            for($i=0; $i<$nfilas; $i++){

                $fila = mysqli_fetch_array ($consulta);
                echo "<tr>";
                echo "<td>".$fila["id"]."</td>";
                echo "<td>".$fila["titulo"]."</td>";
                echo "<td>".$fila["texto"]."</td>";
                echo "<td>".$fila["categoria"]."</td>";
                echo "<td>".$fila["fecha"]."</td>";
                echo "<td>".$fila["imagen"]."</td>";
                echo "</tr>";
            }

        }else{
            $fila = mysqli_fetch_array ($consulta);
            echo "<tr>";
            echo "<td>";
            echo $fila[0];
            echo "</td>";
            echo "</tr>";
        }

        echo "</table>";
        mysqli_close($conexion);

        ?>
    </body>

</html>