<html>

    <head>
        
    </head>
    <body>
        <?php
        $passwd='c123456';
        $hash = password_hash($passwd, PASSWORD_DEFAULT, [10]);
        echo "$hash";

        ?>
    </body>

</html>