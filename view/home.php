<?php
  session_start();
  if (isset($_SESSION["userId"])) {

  }else{
    header("Location: ../model/cerrarSesion.php");
  }
?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/globalStyles.css">
    <link rel="stylesheet" href="css/homeStyles.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="js/direccionamiento.js" charset="utf-8"></script>
    <title>Home</title>
  </head>
  <body>
  <div class="main">
    <div class="header">
      <div class="infoPerfil">
        <div class="fotoPerfil">
          <img src="img/user.png" alt="">
        </div>
        <div class="nombre">
          <?php echo $_SESSION["userName"]; ?>
        </div>
      </div>
      <div class="logo">
        <img src="img/logo.png" alt="">
      </div>
      <div class="menuHeader">
        <ul>
          <li>
            <i class="fas fa-info-circle"></i>
            Ayuda
          </li>
          <li>
            <i class="fas fa-phone-square"></i>
            Contacto
          </li>
          <li>
            <i class="fas fa-map-signs"></i>
            Mapa
          </li>
          <li>
            <i class="fas fa-headset"></i>
            Soporte
          </li>
        </ul>
      </div>
    </div>
    <div class="body">
      <div class="menuLateral">
        <ul>
          <li>
            <i class="fas fa-clinic-medical"></i>
            Inicio
          </li>
          <li>
            <i class="far fa-calendar-plus"></i>
            Mi Agenda
          </li>
          <li>
            <i class="fas fa-thermometer-three-quarters"></i>
            Consulta
          </li>
          <li>
            <i class="fas fa-ellipsis-v"></i>
            Configuración
          </li>
          <li id="salir">
            <i class="fas fa-door-open"></i>
            Salir
          </li>
        </ul>
      </div>
      <div class="iframe">
        <iframe src="../bienvenida.php" width="" height=""></iframe>
      </div>
    </div>
  </div>
  </body>
</html>
