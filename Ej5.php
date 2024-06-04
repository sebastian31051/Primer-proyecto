<html>
<head><title>Problemita :3</title></head>
    <body>
        <?php
        $valor = rand(1,50);
        $inicio = 1;
        for ($i = 0; $i < 10; $i++) {
            echo($i);

        }
        while ($inicio < $valor){
            echo($inicio);
            $inicio++;
        }
        $dato = 1;
        $dia = date("d");
        while ($dato < $dia){
            echo($dato."<br>");
            $dato++;
        }
         ?>
         </body>
    
     </html>