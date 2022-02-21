<html>

    <head>
        <h2> Ejercicio 14 </h2>
    </head>
    <body>

        <FORM METHOD=GET>
            Introduzca su nombre:
            <INPUT NAME="nombre" TYPE="text" SIZE=15 MAXLENGTH=100>
            <br/>
            Seleccione su fecha de nacimiento:
            <INPUT NAME="edad" TYPE="number" min="1900" max="2022">
            <br/>
            Introduzca su ciudad de nacimiento:
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