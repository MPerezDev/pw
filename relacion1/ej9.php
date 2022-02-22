<html>

    <head>
        <h2> Ejercicio 9 </h2>
    </head>
    <body>
        <?php
            echo "<table border=3>";
            echo "<tr>";
            for($i=0;$i<4;$i++){

                echo "<td>";
                echo '<img src="./fotos/'.$i.'.jpg">';
                echo "</td>";
            
            }
            echo "</tr>";
            echo "</table>";
        ?>
    </body>

</html>