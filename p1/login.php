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
            $passwd= $_GET['passwd'];
            $correo= $_GET['correo'];
            $hash = password_hash($passwd, PASSWORD_DEFAULT, [10]);

             $conexion = mysqli_connect("127.0.0.1","root","","bduca");
             $consulta = mysqli_query($conexion, "SELECT id_usuario, tipo, passwd FROM usuario WHERE correo = $correo");
            
            //Si la consulta arroja un resultado (existe el usuario indicado y tiene asociada la contraseña indicada)
            //abrimos una sesión, que va a enlazar con una página en función del tipo de usuario que sea.
            //¿Volver atrás y mostrar mensaje de error en el caso de que no?

            $fila = mysqli_fetch_array($consulta);

            if(mysqli_num_rows() == 1 && password_verify($fila["passwd"], $hash)){ //Si solamente hay una coincidencia significa que el usuario existe y ha metido los datos correctamente.
                              
                session_start();
                




            }else{

            }
            

        ?>
    </body>

</html>