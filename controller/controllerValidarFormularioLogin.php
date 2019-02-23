<?php
  session_start();
  session_destroy();
  $userName = $_POST['user'];
  $userPassword = $_POST['password'];
  require_once("../model/modelValidarFormularioLogin.php");
  $objj = new ConsultaUsuarios();
  $objj->getUsuarios($userName, $userPassword);
 ?>
