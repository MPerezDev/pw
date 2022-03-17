<html>

    <head>
    <h2> Sistema de exámenes P1 </h2>  
    </head>
    <body>

    <FORM METHOD=GET>
            Correo electrónico:
            <INPUT NAME="correo" TYPE="text" SIZE=15 MAXLENGTH=100>
            <br/>
            Contraseña:
            <INPUT NAME="passwd" TYPE="text" SIZE=15 MAXLENGTH=10>
            <br/>
            <INPUT TYPE="submit" VALUE="Iniciar sesión">
        </FORM>

        <?php
             $conexion = mysqli_connect("127.0.0.1","root","","bduca");
             $consulta = mysqli_query($conexion, "SELECT id_usuario, tipo FROM usuario WHERE ");

        ?>
    </body>

</html>