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

            $passwd = password_hash($_GET["passwd"], PASSWORD_DEFAULT, [10]);
            //Hay que conseguir que siempre se utilice el mismo salt para no variar la contraseña.



            $conexion = mysqli_connect("127.0.0.1","root","","bduca");
            $consulta = mysqli_query($conexion, "SELECT id_usuario, tipo FROM usuario WHERE correo = $_GET["correo"] AND passwd = $passwd);
            

        ?>
    </body>

</html>