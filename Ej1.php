<html>
<head></head>
    <body>
        <?php
        echo "Hola, mi mundo";
        echo "<br>";
        echo "como estas";
        $dia=date("d");
        if($dia <= 10){
            echo "<br>";
            echo "sitio activo";
        }else{
            echo "<br>";
            echo "sitio inactivo";
        }
        ?>
    </body>

</html>