<html>

    <head>
        
    </head>
    <body>
        <?php
        class Password {
            public static function hash($password) {
                return password_hash($password, PASSWORD_DEFAULT, [10]);
            }
            public static function verify($password, $hash) {
                return password_verify($password, $hash);
            }
        }
        $passwd='c1234567890';
        $hash = password_hash($passwd, PASSWORD_DEFAULT, [10]);

        if(password_verify($passwd, $hash)){
            echo 'true';
            echo "<br>";
        }
        echo "$hash";

        ?>
    </body>

</html>