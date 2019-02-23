<?php
  session_start();
  if (isset($_SESSION["userId"])) {
    echo $_SESSION["userId"];
  }else{
    header("Location: ../model/cerrarSesion.php");
  }
?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    Hola
  </body>
</html>
