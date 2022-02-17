<html>

    <head>
        <h2> Ejercicio 5 </h2>
    </head>
    <body>
        <?php //Falta hacer lo que pide el ejercicio, está igual que el 4
            echo "<table border=5>";
            $cont = 1;
            for($i=1; $i<=10; $i++){

                if($i%2==0){
                    echo '<tr style="background-color:grey">';
                    for($j=1; $j<=10; $j++){

                        echo "<td> $cont </td>";
                        $cont += 1;

                    }
                    echo "</tr>";
                }else{
                    echo "<tr>";
                    for($j=1; $j<=10; $j++){

                        echo "<td> $cont </td>";
                        $cont += 1;

                    }
                    echo "</tr>";

                }

            }
            echo "</table>";
            
        ?>

    </body>

</html>