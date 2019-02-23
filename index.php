<?php
session_start();
session_destroy();
?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="view/css/globalStyles.css">
    <link rel="stylesheet" href="view/css/indexEstilos.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="view/js/main.js" charset="utf-8"></script>
    <title>Inicio SiHisCo</title>
  </head>
  <body>
    <div class="main">
      <div class="header">
        <div class="title"><p>SiHisCo</p></div>
      </div>
      <div class="body">
        <div class="titleBodyLogin">
          <p>Inicio de Sesión</p>
        </div>
        <div class="boxText">
          <input type="text" placeholder="Nombre de Usuario" id="nameUser">
          <i class="fas fa-user"></i>
        </div>
        <div class="boxText">
          <input type="password" placeholder="Contraseña" id="passwordUser">
          <i class="fas fa-unlock"></i>
        </div>
        <div class="boxBntoLogin">
          <input type="button" value="Iniciar" id="btnLogin">
        </div>
        <div class="helpBox">
          <p><span>¿Olvidaste Tu Contraseña?</span></p>
          <a href="">¡Dejanos Ayudarte!</a>
        </div>
        <div class="mensajes" id="mensajes"></div>
      </div>
      <div class="foot">
        <div>
          <p>copyRight®</p>
        </div>
      </div>
    </div>
  </body>
</html>
