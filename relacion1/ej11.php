<html>

    <head>
        <h2> Ejercicio 11 </h2>
    </head>
    <body>

        <FORM METHOD=POST>
            Introduce la cantidad de euros:
            <INPUT NAME="euro" TYPE="text" SIZE=5 MAXLENGTH=20>
            <INPUT TYPE="submit" VALUE="Enviar">
        </FORM>

        <?php
            if($_POST){
                $consulta = $_POST["euro"];
                $consulta = $consulta * 0.83;
                echo $_POST["euro"].' son '.$consulta.'libras';
            }

        ?>

    </body>

</html>