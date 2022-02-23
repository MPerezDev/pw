<html>

    <head>
        <h2> Ejercicio 2 Relación 2 </h2>
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
            if($_POST){
                $formulario = $_POST["opcion"];
                $conexion = mysqli_connect("127.0.0.1","cursophp","","lindavista");
                $consulta = mysqli_query($conexion, "SELECT * FROM votos");
                $nfilas = mysqli_num_rows ($consulta);

                if($formulario == "pizza"){
                    echo "<table border=5>";
                    if($nfilas > 0){
                        for($i=0; $i<$nfilas; $i++){
                            
                            $fila = mysqli_fetch_array ($consulta);
                            $resultado = $fila["votos1"] + 1;
                            echo "<tr>";
                            echo "<td>".$fila["id"]."</td>";
                            echo "<td>".$resultado."</td>";
                            echo "<td>".$fila["votos2"]."</td>";
                            echo "</tr>";
                            $consulta = mysqli_query($conexion,"UPDATE votos SET votos1 = $resultado");
                        }

                    }else{
                        $fila = mysqli_fetch_array ($consulta);
                        $resultado = $fila["votos1"] + 1;
                        echo "<tr>";
                        echo "<td>";
                        echo $fila;
                        echo "</td>";
                        echo "</tr>";
                        $consulta = mysqli_query($conexion,"UPDATE votos SET votos1 = $resultado");
                    }

                    echo "</table>";
                }else{
                    echo "<table border=5>";
                    if($nfilas > 0){
                        for($i=0; $i<$nfilas; $i++){
                            
                            $fila = mysqli_fetch_array ($consulta);
                            $resultado = $fila["votos2"] +1;
                            echo "<tr>";
                            echo "<td>".$fila["id"]."</td>";
                            echo "<td>".$fila["votos1"]."</td>";
                            echo "<td>".$resultado."</td>";
                            echo "</tr>";
                            $consulta = mysqli_query($conexion,"UPDATE votos SET votos2 = $resultado");
                        }

                    }else{
                        $fila = mysqli_fetch_array ($consulta);
                        $resultado = $fila["votos2"] + 1;
                        echo "<tr>";
                        echo "<td>";
                        echo $fila;
                        echo "</td>";
                        echo "</tr>";
                        $consulta = mysqli_query($conexion,"UPDATE votos SET votos2 = $resultado");
                    }

                    echo "</table>";
                }
        
                
                mysqli_close($conexion);

            }
        

        ?>
    </body>

</html>