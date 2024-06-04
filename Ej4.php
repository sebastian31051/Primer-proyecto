<html>
<head></head>
    <body>
        <?php
        /*
Generar un valor aleatorio entre 1 y 10. Luego imprimir el numero y cuantos digitos tiene
*/
$valor = rand(1,10);
if ($valor<10){
    echo("Es $valor y tiene un digito");
}else if($valor >= 10){
    echo("El valor es $valor y tiene mas de un digito");
}
 ?>
         </body>
    
     </html>