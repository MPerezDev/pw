<html>

    <head>
        <h2> Ejercicio 12 </h2>
    </head>
    <body>

        <FORM METHOD=POST>
            Introduzca la cantidad de euros y seleccione la divisa:
            <INPUT NAME="euro" TYPE="text" SIZE=5 MAXLENGTH=20>
            <br/>
            <INPUT NAME="divisa" TYPE="radio" VALUE="libra" CHECKED="checked"> Libras
            <br/>
            <INPUT NAME="divisa" TYPE="radio" VALUE="dolar"> Dólares
            <br/>
            <INPUT TYPE="submit" VALUE="Enviar">
        </FORM>

        <?php
            if($_POST){
                $consulta = $_POST["euro"];
                if($_POST["divisa"]=="libra"){ 

                    $consulta = $consulta * 0.83;
                    echo $_POST["euro"].' son '.$consulta.'libras';

                }else{

                    $consulta = $consulta * 1.13;
                    echo $_POST["euro"].' son '.$consulta.'dolares';

                }
            }

        ?>

    </body>

</html>