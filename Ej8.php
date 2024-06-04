<html>

<head>
  <title>Captura de datos del form</title>
</head>
<body>
  <?php
  echo "El nombre ingresado es:";
  echo $_REQUEST['nombre'];
  echo"<br>";
  echo "La edad ingresada es:";
  echo $_REQUEST['edad'];
  if($_REQUEST['edad']>17){
    echo("<br>");
    echo("Es mayor de edad");
  }else{
    echo("<br>");
    echo("Es menor de edad");
  }
  ?>
</body>

</html>