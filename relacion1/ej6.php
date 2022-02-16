<html>

    <head>
        <h2> Ejercicio 6 </h2>
    </head>
    <body>
        <?php

            function cuadrado($var1, $var2){
                return pow($var1,$var2);
            }
            echo "<table border=5>";
            for($i=1; $i<=4; $i++){

                echo "<tr>";
                for($j=1; $j<=4; $j++){
                    
                    $aux = cuadrado($i,$j);
                    echo "<td> $aux </td>";

                }
                echo "</tr>";
            }
            echo "</table>";
            
        ?>

    </body>

</html>