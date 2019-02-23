<?php
  class ConsultaUsuarios {
    function getUsuarios($user, $password) {
      try {
        require_once("conexion.php");
        $obj = Conectar::modelConexion();
        $conU = $obj->query("SELECT * FROM usuarios WHERE userName = '$user'");
        $resU = mysqli_fetch_array($conU);
        if ($resU != 0) {
          $conP = $obj->query("SELECT * FROM usuarios WHERE userPassword = '$password'");
          $resP = mysqli_fetch_array($conP);
          if ($resP != 0) {
            session_start();
            $_SESSION['userId'] = $resU[0];
            $_SESSION['userName'] = $resU[1];
            $_SESSION['userPassword'] = $resU[2];
            echo 1;
          }else{
            echo 3;
          }
        }else{
          echo 2;
        }
      } catch (\Exception $e) {

      }
    }
  }
 ?>
