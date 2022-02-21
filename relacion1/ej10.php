<html>

    <head>
        <h2> Ejercicio 10 </h2>
    </head>
    <body>
        <?php
            $ruta = getcwd();
            echo "<table border=3>";
            echo "<tr>";
            for($i=0;$i<4;$i++){

                echo "<td>";
                echo "<img src=$ruta.'/fotos/'.$i >";
                echo "</td>";
            
            }
            echo "</tr>";
            echo "</table>";
            
        ?>
    </body>

</html>